<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\detalleventum;
use Illuminate\Http\Request;

class detalleventaController extends Controller
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
            $detalleventa = detalleventum::where('cantidad', 'LIKE', "%$keyword%")
                ->orWhere('precio', 'LIKE', "%$keyword%")
                ->orWhere('fk_detalleventa_venta', 'LIKE', "%$keyword%")
                ->orWhere('fk_detalleventa_cerveza', 'LIKE', "%$keyword%")
                -> paginate($perPage);
        } else {
            $detalleventa = detalleventum:: paginate($perPage);
        }

        return view('detalleventa.index', compact('detalleventa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('detalleventa.create');
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
        
        detalleventum::create($requestData);

        return redirect('detalleventa')->with('flash_message', 'detalleventum added!');
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
        $detalleventum = detalleventum::findOrFail($id);

        return view('detalleventa.show', compact('detalleventum'));
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
        $detalleventum = detalleventum::findOrFail($id);

        return view('detalleventa.edit', compact('detalleventum'));
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
        
        $detalleventum = detalleventum::findOrFail($id);
        $detalleventum->update($requestData);

        return redirect('detalleventa')->with('flash_message', 'detalleventum updated!');
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
        detalleventum::destroy($id);

        return redirect('detalleventa')->with('flash_message', 'detalleventum deleted!');
    }
}
