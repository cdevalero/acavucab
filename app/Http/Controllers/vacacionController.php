<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\vacacion;
use Illuminate\Http\Request;

class vacacionController extends Controller
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
            $vacacion = vacacion::where('fecha_inicio', 'LIKE', "%$keyword%")
                ->orWhere('fecha_fin', 'LIKE', "%$keyword%")
                ->orWhere('fk_vacacion_empleado', 'LIKE', "%$keyword%")
                -> paginate($perPage);
        } else {
            $vacacion = vacacion:: paginate($perPage);
        }

        return view('vacacion.index', compact('vacacion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('vacacion.create');
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
        
        vacacion::create($requestData);

        return redirect('vacacion')->with('flash_message', 'vacacion added!');
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
        $vacacion = vacacion::findOrFail($id);

        return view('vacacion.show', compact('vacacion'));
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
        $vacacion = vacacion::findOrFail($id);

        return view('vacacion.edit', compact('vacacion'));
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
        
        $vacacion = vacacion::findOrFail($id);
        $vacacion->update($requestData);

        return redirect('vacacion')->with('flash_message', 'vacacion updated!');
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
        vacacion::destroy($id);

        return redirect('vacacion')->with('flash_message', 'vacacion deleted!');
    }
}
