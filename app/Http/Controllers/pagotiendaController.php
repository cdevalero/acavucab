<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\pagotienda;
use Illuminate\Http\Request;

class pagotiendaController extends Controller
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
            $pagotienda = pagotienda::where('monto', 'LIKE', "%$keyword%")
                ->orWhere('fk_pagotienda_efectivo', 'LIKE', "%$keyword%")
                ->orWhere('fk_pagotienda_tarjetadebito', 'LIKE', "%$keyword%")
                ->orWhere('fk_pagotienda_tarjetacredito', 'LIKE', "%$keyword%")
                ->orWhere('fk_pagotienda_monedaextranjera', 'LIKE', "%$keyword%")
                ->orWhere('fk_pagotienda_cheque', 'LIKE', "%$keyword%")
                ->orWhere('fk_pagotienda_puntoventa', 'LIKE', "%$keyword%")
                ->orWhere('fk_pagotienda_transferencia', 'LIKE', "%$keyword%")
                ->orWhere('fk_pagotienda_venta', 'LIKE', "%$keyword%")
                -> paginate($perPage);
        } else {
            $pagotienda = pagotienda:: paginate($perPage);
        }

        return view('pagotienda.index', compact('pagotienda'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('pagotienda.create');
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
        
        pagotienda::create($requestData);

        return redirect('pagotienda')->with('flash_message', 'pagotienda added!');
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
        $pagotienda = pagotienda::findOrFail($id);

        return view('pagotienda.show', compact('pagotienda'));
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
        $pagotienda = pagotienda::findOrFail($id);

        return view('pagotienda.edit', compact('pagotienda'));
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
        
        $pagotienda = pagotienda::findOrFail($id);
        $pagotienda->update($requestData);

        return redirect('pagotienda')->with('flash_message', 'pagotienda updated!');
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
        pagotienda::destroy($id);

        return redirect('pagotienda')->with('flash_message', 'pagotienda deleted!');
    }
}
