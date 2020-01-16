<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\cerveza;
use Illuminate\Http\Request;

class cervezaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $cerveza = cerveza::where('nombre', 'LIKE', "%$keyword%")
                ->orWhere('precio', 'LIKE', "%$keyword%")
                ->orWhere('historia', 'LIKE', "%$keyword%")
                ->orWhere('caloria', 'LIKE', "%$keyword%")
                ->orWhere('volumen', 'LIKE', "%$keyword%")
                ->orWhere('fk_cerveza_anaquel', 'LIKE', "%$keyword%")
                ->orWhere('fk_cerveza_tipocerveza', 'LIKE', "%$keyword%")
                -> paginate($perPage);
        } else {
            $cerveza = cerveza:: paginate($perPage);
        }

        return view('cerveza.index', compact('cerveza'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('cerveza.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        cerveza::create($requestData);

        return redirect('cerveza')->with('flash_message', 'cerveza added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $cerveza = cerveza::findOrFail($id);

        return view('cerveza.show', compact('cerveza'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $cerveza = cerveza::findOrFail($id);

        return view('cerveza.edit', compact('cerveza'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $cerveza = cerveza::findOrFail($id);
        $cerveza->update($requestData);

        return redirect('cerveza')->with('flash_message', 'cerveza updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        cerveza::destroy($id);

        return redirect('cerveza')->with('flash_message', 'cerveza deleted!');
    }

    // -------------------------------------------------------- CARRO ------------------------------------------------------ 

    public function cart()
    {
        $puntoValor = puntoValor::all();
        $puntoCompra = puntoCompra::all();
        $venta = venta::all();
        $banco = banco::all(); 
        return view('compracliente',compact('puntoValor','puntoCompra','venta', 'banco'));
    }

    public function addToCart($id)
    {
        $product = cerveza::find($id);
 
        if(!$product) {
 
            abort(404);
 
        }
 
        $cart = session()->get('cart');
 
        // if cart is empty then this the first product
        if(!$cart) {
 
            $cart = [
                    $id => [
                        "name" => $product->nombre,
                        "quantity" => 1,
                        "price" => $product->precio,
                    ]
            ];
 
            session()->put('cart', $cart);
 
            return redirect()->back()->with('success', 'El producto se ha añadido satisfactoriamente!');
        }
 
        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {
 
            $cart[$id]['quantity']++;
 
            session()->put('cart', $cart);
 
            return redirect()->back()->with('success', 'El producto se ha añadido satisfactoriamente!');
 
        }
 
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name" => $product->nombre,
            "quantity" => 1,
            "price" => $product->precio,
        ];
 
        session()->put('cart', $cart);
 
        return redirect()->back()->with('success', 'El producto se ha añadido satisfactoriamente!');
    }

    public function updateC(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');
 
            $cart[$request->id]["quantity"] = $request->quantity;
 
            session()->put('cart', $cart);
 
            session()->flash('success', 'El carro de compras se ha actualizado');
        }
    }
 
    public function remove(Request $request)
    {
        if($request->id) {
 
            $cart = session()->get('cart');
 
            if(isset($cart[$request->id])) {
 
                unset($cart[$request->id]);
 
                session()->put('cart', $cart);
            }
 
            session()->flash('success', 'Producto eliminado satisfactoriamente');
        }
    }

    // -------------------------------------------------------- CAJERA ------------------------------------------------------ 
    
    public function cajera()
    {
        $venta = venta::all();
        $puntoCompra = puntoCompra::all();
        $puntoValor = puntoValor::all();
        return view('compraCliente', compact('venta','puntoCompra','puntoValor'));
    }

    public function addToCajera($id)
    {
        $product = cerveza::find($id);
 
        if(!$product) {
 
            abort(404);
 
        }
 
        $cajera = session()->get('cajera');
 
        // if cart is empty then this the first product
        if(!$cajera) {
 
            $cajera = [
                    $id => [
                        "name" => $product->nombre,
                        "quantity" => 1,
                        "price" => $product->precio,
                    ]
            ];
 
            session()->put('cajera', $cajera);
 
            return redirect()->back()->with('success', 'El producto se ha añadido satisfactoriamente!');
        }
 
        // if cart not empty then check if this product exist then increment quantity
        if(isset($cajera[$id])) {
 
            $cajera[$id]['quantity']++;
 
            session()->put('cajera', $cajera);
 
            return redirect()->back()->with('success', 'El producto se ha añadido satisfactoriamente!');
 
        }
 
        // if item not exist in cart then add to cart with quantity = 1
        $cajera[$id] = [
            "name" => $product->nombre,
            "quantity" => 1,
            "price" => $product->precio,
        ];
 
        session()->put('cajera', $cajera);
 
        return redirect()->back()->with('success', 'El producto se ha añadido satisfactoriamente!');
    }

    public function updateCa(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cajera = session()->get('cajera');
 
            $cajera[$request->id]["quantity"] = $request->quantity;
 
            session()->put('cajera', $cajera);
 
            session()->flash('success', 'El carro de compras se ha actualizado');
        }
    }
 
    public function removeCa(Request $request)
    {
        if($request->id) {
 
            $cajera = session()->get('cajera');
 
            if(isset($cajera[$request->id])) {
 
                unset($cajera[$request->id]);
 
                session()->put('cajera', $cajera);
            }
 
            session()->flash('success', 'Producto eliminado satisfactoriamente');
        }
    }
}
