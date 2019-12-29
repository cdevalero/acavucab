<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\inventario_cerveza;
use Illuminate\Http\Request;

class inventario_cervezaController extends Controller
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
            $inventario_cerveza = inventario_cerveza::where('cantidad', 'LIKE', "%$keyword%")
                ->orWhere('fk_invcer_evento', 'LIKE', "%$keyword%")
                ->orWhere('fk_invcer_cerveza', 'LIKE', "%$keyword%")
                -> paginate($perPage);
        } else {
            $inventario_cerveza = inventario_cerveza:: paginate($perPage);
        }

        return view('inventario_cerveza.index', compact('inventario_cerveza'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('inventario_cerveza.create');
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
        
        inventario_cerveza::create($requestData);

        return redirect('inventario_cerveza')->with('flash_message', 'inventario_cerveza added!');
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
        $inventario_cerveza = inventario_cerveza::findOrFail($id);

        return view('inventario_cerveza.show', compact('inventario_cerveza'));
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
        $inventario_cerveza = inventario_cerveza::findOrFail($id);

        return view('inventario_cerveza.edit', compact('inventario_cerveza'));
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
        
        $inventario_cerveza = inventario_cerveza::findOrFail($id);
        $inventario_cerveza->update($requestData);

        return redirect('inventario_cerveza')->with('flash_message', 'inventario_cerveza updated!');
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
        inventario_cerveza::destroy($id);

        return redirect('inventario_cerveza')->with('flash_message', 'inventario_cerveza deleted!');
    }
}
