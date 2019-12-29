<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\empleado_beneficio;
use Illuminate\Http\Request;

class empleado_beneficioController extends Controller
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
            $empleado_beneficio = empleado_beneficio::where('fk_empben_empleado', 'LIKE', "%$keyword%")
                ->orWhere('fk_empben_beneficio', 'LIKE', "%$keyword%")
                -> paginate($perPage);
        } else {
            $empleado_beneficio = empleado_beneficio:: paginate($perPage);
        }

        return view('empleado_beneficio.index', compact('empleado_beneficio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('empleado_beneficio.create');
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
        
        empleado_beneficio::create($requestData);

        return redirect('empleado_beneficio')->with('flash_message', 'empleado_beneficio added!');
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
        $empleado_beneficio = empleado_beneficio::findOrFail($id);

        return view('empleado_beneficio.show', compact('empleado_beneficio'));
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
        $empleado_beneficio = empleado_beneficio::findOrFail($id);

        return view('empleado_beneficio.edit', compact('empleado_beneficio'));
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
        
        $empleado_beneficio = empleado_beneficio::findOrFail($id);
        $empleado_beneficio->update($requestData);

        return redirect('empleado_beneficio')->with('flash_message', 'empleado_beneficio updated!');
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
        empleado_beneficio::destroy($id);

        return redirect('empleado_beneficio')->with('flash_message', 'empleado_beneficio deleted!');
    }
}
