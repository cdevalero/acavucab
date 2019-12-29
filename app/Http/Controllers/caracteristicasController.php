<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\caracteristica;
use Illuminate\Http\Request;

class caracteristicasController extends Controller
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
            $caracteristicas = caracteristica::where('nombre', 'LIKE', "%$keyword%")
                ->orWhere('color', 'LIKE', "%$keyword%")
                ->orWhere('grado_alcohol', 'LIKE', "%$keyword%")
                ->orWhere('densidad_inicial', 'LIKE', "%$keyword%")
                ->orWhere('densidad_final', 'LIKE', "%$keyword%")
                ->orWhere('ibus', 'LIKE', "%$keyword%")
                ->orWhere('aroma', 'LIKE', "%$keyword%")
                ->orWhere('sabor', 'LIKE', "%$keyword%")
                ->orWhere('historia', 'LIKE', "%$keyword%")
                ->orWhere('fk_caracteristica_tipocerveza', 'LIKE', "%$keyword%")
                -> paginate($perPage);
        } else {
            $caracteristicas = caracteristica:: paginate($perPage);
        }

        return view('caracteristicas.index', compact('caracteristicas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('caracteristicas.create');
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
        
        caracteristica::create($requestData);

        return redirect('caracteristicas')->with('flash_message', 'caracteristica added!');
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
        $caracteristica = caracteristica::findOrFail($id);

        return view('caracteristicas.show', compact('caracteristica'));
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
        $caracteristica = caracteristica::findOrFail($id);

        return view('caracteristicas.edit', compact('caracteristica'));
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
        
        $caracteristica = caracteristica::findOrFail($id);
        $caracteristica->update($requestData);

        return redirect('caracteristicas')->with('flash_message', 'caracteristica updated!');
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
        caracteristica::destroy($id);

        return redirect('caracteristicas')->with('flash_message', 'caracteristica deleted!');
    }
}
