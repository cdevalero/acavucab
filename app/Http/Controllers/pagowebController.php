<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\pagoweb;
use Illuminate\Http\Request;

class pagowebController extends Controller
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
            $pagoweb = pagoweb::where('monto_total', 'LIKE', "%$keyword%")
                ->orWhere('fk_pagoweb_tarjetacredito', 'LIKE', "%$keyword%")
                ->orWhere('fk_pagoweb_tarjetadebito', 'LIKE', "%$keyword%")
                -> paginate($perPage);
        } else {
            $pagoweb = pagoweb:: paginate($perPage);
        }

        return view('pagoweb.index', compact('pagoweb'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('pagoweb.create');
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
        
        pagoweb::create($requestData);

        return redirect('pagoweb')->with('flash_message', 'pagoweb added!');
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
        $pagoweb = pagoweb::findOrFail($id);

        return view('pagoweb.show', compact('pagoweb'));
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
        $pagoweb = pagoweb::findOrFail($id);

        return view('pagoweb.edit', compact('pagoweb'));
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
        
        $pagoweb = pagoweb::findOrFail($id);
        $pagoweb->update($requestData);

        return redirect('pagoweb')->with('flash_message', 'pagoweb updated!');
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
        pagoweb::destroy($id);

        return redirect('pagoweb')->with('flash_message', 'pagoweb deleted!');
    }
}
