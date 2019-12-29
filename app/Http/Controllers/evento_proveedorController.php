<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\evento_proveedor;
use Illuminate\Http\Request;

class evento_proveedorController extends Controller
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
            $evento_proveedor = evento_proveedor::where('fk_ep_evento', 'LIKE', "%$keyword%")
                ->orWhere('fk_ep_proveedor', 'LIKE', "%$keyword%")
                ->orWhere('fk_ep_actividad', 'LIKE', "%$keyword%")
                -> paginate($perPage);
        } else {
            $evento_proveedor = evento_proveedor:: paginate($perPage);
        }

        return view('evento_proveedor.index', compact('evento_proveedor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('evento_proveedor.create');
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
        
        evento_proveedor::create($requestData);

        return redirect('evento_proveedor')->with('flash_message', 'evento_proveedor added!');
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
        $evento_proveedor = evento_proveedor::findOrFail($id);

        return view('evento_proveedor.show', compact('evento_proveedor'));
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
        $evento_proveedor = evento_proveedor::findOrFail($id);

        return view('evento_proveedor.edit', compact('evento_proveedor'));
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
        
        $evento_proveedor = evento_proveedor::findOrFail($id);
        $evento_proveedor->update($requestData);

        return redirect('evento_proveedor')->with('flash_message', 'evento_proveedor updated!');
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
        evento_proveedor::destroy($id);

        return redirect('evento_proveedor')->with('flash_message', 'evento_proveedor deleted!');
    }
}
