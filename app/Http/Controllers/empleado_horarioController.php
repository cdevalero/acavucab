<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\empleado_horario;
use Illuminate\Http\Request;

class empleado_horarioController extends Controller
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
            $empleado_horario = empleado_horario::where('fk_eh_empleado', 'LIKE', "%$keyword%")
                ->orWhere('fk_eh_horario', 'LIKE', "%$keyword%")
                -> paginate($perPage);
        } else {
            $empleado_horario = empleado_horario:: paginate($perPage);
        }

        return view('empleado_horario.index', compact('empleado_horario'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('empleado_horario.create');
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
        
        empleado_horario::create($requestData);

        return redirect('empleado_horario')->with('flash_message', 'empleado_horario added!');
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
        $empleado_horario = empleado_horario::findOrFail($id);

        return view('empleado_horario.show', compact('empleado_horario'));
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
        $empleado_horario = empleado_horario::findOrFail($id);

        return view('empleado_horario.edit', compact('empleado_horario'));
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
        
        $empleado_horario = empleado_horario::findOrFail($id);
        $empleado_horario->update($requestData);

        return redirect('empleado_horario')->with('flash_message', 'empleado_horario updated!');
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
        empleado_horario::destroy($id);

        return redirect('empleado_horario')->with('flash_message', 'empleado_horario deleted!');
    }
}
