<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\ventum;
use Illuminate\Http\Request;

class ventaController extends Controller
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
            $venta = ventum::where('numero_facturaventa', 'LIKE', "%$keyword%")
                ->orWhere('fecha_venta', 'LIKE', "%$keyword%")
                ->orWhere('total', 'LIKE', "%$keyword%")
                ->orWhere('fk_venta_puntocompra', 'LIKE', "%$keyword%")
                ->orWhere('fk_venta_presupuesto', 'LIKE', "%$keyword%")
                ->orWhere('fk_venta_empleado', 'LIKE', "%$keyword%")
                -> paginate($perPage);
        } else {
            $venta = ventum:: paginate($perPage);
        }

        return view('venta.index', compact('venta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('venta.create');
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
        
        ventum::create($requestData);

        return redirect('venta')->with('flash_message', 'ventum added!');
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
        $ventum = ventum::findOrFail($id);

        return view('venta.show', compact('ventum'));
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
        $ventum = ventum::findOrFail($id);

        return view('venta.edit', compact('ventum'));
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
        
        $ventum = ventum::findOrFail($id);
        $ventum->update($requestData);

        return redirect('venta')->with('flash_message', 'ventum updated!');
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
        ventum::destroy($id);

        return redirect('venta')->with('flash_message', 'ventum deleted!');
    }
}
