<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\proveedor_tipocerveza;
use Illuminate\Http\Request;

class proveedor_tipocervezaController extends Controller
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
            $proveedor_tipocerveza = proveedor_tipocerveza::where('fk_ptc_proveedor', 'LIKE', "%$keyword%")
                ->orWhere('fk_ptc_tipocerveza', 'LIKE', "%$keyword%")
                -> paginate($perPage);
        } else {
            $proveedor_tipocerveza = proveedor_tipocerveza:: paginate($perPage);
        }

        return view('proveedor_tipocerveza.index', compact('proveedor_tipocerveza'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('proveedor_tipocerveza.create');
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
        
        proveedor_tipocerveza::create($requestData);

        return redirect('proveedor_tipocerveza')->with('flash_message', 'proveedor_tipocerveza added!');
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
        $proveedor_tipocerveza = proveedor_tipocerveza::findOrFail($id);

        return view('proveedor_tipocerveza.show', compact('proveedor_tipocerveza'));
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
        $proveedor_tipocerveza = proveedor_tipocerveza::findOrFail($id);

        return view('proveedor_tipocerveza.edit', compact('proveedor_tipocerveza'));
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
        
        $proveedor_tipocerveza = proveedor_tipocerveza::findOrFail($id);
        $proveedor_tipocerveza->update($requestData);

        return redirect('proveedor_tipocerveza')->with('flash_message', 'proveedor_tipocerveza updated!');
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
        proveedor_tipocerveza::destroy($id);

        return redirect('proveedor_tipocerveza')->with('flash_message', 'proveedor_tipocerveza deleted!');
    }
}
