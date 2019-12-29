<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\pagoweb_puntoventum;
use Illuminate\Http\Request;

class pagoweb_puntoventaController extends Controller
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
            $pagoweb_puntoventa = pagoweb_puntoventum::where('fk_pwpv_pagoweb', 'LIKE', "%$keyword%")
                ->orWhere('fk_pwpv_puntoventa', 'LIKE', "%$keyword%")
                -> paginate($perPage);
        } else {
            $pagoweb_puntoventa = pagoweb_puntoventum:: paginate($perPage);
        }

        return view('pagoweb_puntoventa.index', compact('pagoweb_puntoventa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('pagoweb_puntoventa.create');
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
        
        pagoweb_puntoventum::create($requestData);

        return redirect('pagoweb_puntoventa')->with('flash_message', 'pagoweb_puntoventum added!');
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
        $pagoweb_puntoventum = pagoweb_puntoventum::findOrFail($id);

        return view('pagoweb_puntoventa.show', compact('pagoweb_puntoventum'));
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
        $pagoweb_puntoventum = pagoweb_puntoventum::findOrFail($id);

        return view('pagoweb_puntoventa.edit', compact('pagoweb_puntoventum'));
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
        
        $pagoweb_puntoventum = pagoweb_puntoventum::findOrFail($id);
        $pagoweb_puntoventum->update($requestData);

        return redirect('pagoweb_puntoventa')->with('flash_message', 'pagoweb_puntoventum updated!');
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
        pagoweb_puntoventum::destroy($id);

        return redirect('pagoweb_puntoventa')->with('flash_message', 'pagoweb_puntoventum deleted!');
    }
}
