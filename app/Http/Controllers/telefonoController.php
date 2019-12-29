<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\telefono;
use Illuminate\Http\Request;

class telefonoController extends Controller
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
            $telefono = telefono::where('numero', 'LIKE', "%$keyword%")
                ->orWhere('cod_area', 'LIKE', "%$keyword%")
                ->orWhere('fk_telefono_proveedor', 'LIKE', "%$keyword%")
                ->orWhere('fk_telefono_clientenatural', 'LIKE', "%$keyword%")
                ->orWhere('fk_telefono_clientejuridico', 'LIKE', "%$keyword%")
                -> paginate($perPage);
        } else {
            $telefono = telefono:: paginate($perPage);
        }

        return view('telefono.index', compact('telefono'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('telefono.create');
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
        
        telefono::create($requestData);

        return redirect('telefono')->with('flash_message', 'telefono added!');
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
        $telefono = telefono::findOrFail($id);

        return view('telefono.show', compact('telefono'));
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
        $telefono = telefono::findOrFail($id);

        return view('telefono.edit', compact('telefono'));
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
        
        $telefono = telefono::findOrFail($id);
        $telefono->update($requestData);

        return redirect('telefono')->with('flash_message', 'telefono updated!');
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
        telefono::destroy($id);

        return redirect('telefono')->with('flash_message', 'telefono deleted!');
    }
}
