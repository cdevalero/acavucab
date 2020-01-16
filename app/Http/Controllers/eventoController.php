<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\evento;
use App\ventum;
use App\puntocompra;
use App\puntovalor;
use App\banco;
use Illuminate\Http\Request;

class eventoController extends Controller
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
            $evento = evento::where('nombre', 'LIKE', "%$keyword%")
                ->orWhere('fecha_inicio', 'LIKE', "%$keyword%")
                ->orWhere('fecha_fin', 'LIKE', "%$keyword%")
                ->orWhere('fk_evento_lugar', 'LIKE', "%$keyword%")
                -> paginate($perPage);
        } else {
            $evento = evento:: paginate($perPage);
        }

        return view('evento.index', compact('evento'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('evento.create');
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
        
        evento::create($requestData);

        return redirect('evento')->with('flash_message', 'evento added!');
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
        $evento = evento::findOrFail($id);

        return view('evento.show', compact('evento'));
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
        $evento = evento::findOrFail($id);

        return view('evento.edit', compact('evento'));
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
        
        $evento = evento::findOrFail($id);
        $evento->update($requestData);

        return redirect('evento')->with('flash_message', 'evento updated!');
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
        evento::destroy($id);

        return redirect('evento')->with('flash_message', 'evento deleted!');
    }

    // -------------------------------------------------------- CARRO ------------------------------------------------------ 

    public function cart()
    {
        $puntoValor = puntovalor::all();
        $puntoCompra = puntocompra::all();
        $venta = ventum::all();
        $banco = banco::all(); 
        return view('compracliente',compact('puntoValor','puntoCompra','venta', 'banco'));
    }

    public function addToCart($id)
    {
        $product = entrada::find($id);
 
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
                        "price" => $product->estatus,
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
            "price" => $product->estatus,
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
        return view('cajera');
    }

    public function addToCajera($id)
    {
        $product = entrada::find($id);
 
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
                        "price" => $product->estatus,
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
            "price" => $product->estatus,
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
