<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\detalle_compra;
use Illuminate\Http\Request;

class detalle_compraController extends Controller
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
            $detalle_compra = detalle_compra::where('cantidad', 'LIKE', "%$keyword%")
                ->orWhere('precio', 'LIKE', "%$keyword%")
                ->orWhere('tipo', 'LIKE', "%$keyword%")
                ->orWhere('fk_dc_compra', 'LIKE', "%$keyword%")
                ->orWhere('fk_dc_cerveza', 'LIKE', "%$keyword%")
                -> paginate($perPage);
        } else {
            $detalle_compra = detalle_compra:: paginate($perPage);
        }

        return view('detalle_compra.index', compact('detalle_compra'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('detalle_compra.create');
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
        
        detalle_compra::create($requestData);

        return redirect('detalle_compra')->with('flash_message', 'detalle_compra added!');
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
        $detalle_compra = detalle_compra::findOrFail($id);

        return view('detalle_compra.show', compact('detalle_compra'));
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
        $detalle_compra = detalle_compra::findOrFail($id);

        return view('detalle_compra.edit', compact('detalle_compra'));
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
        
        $detalle_compra = detalle_compra::findOrFail($id);
        $detalle_compra->update($requestData);

        return redirect('detalle_compra')->with('flash_message', 'detalle_compra updated!');
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
        detalle_compra::destroy($id);

        return redirect('detalle_compra')->with('flash_message', 'detalle_compra deleted!');
    }
}
