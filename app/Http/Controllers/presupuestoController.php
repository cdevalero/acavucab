<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\presupuesto;
use Illuminate\Http\Request;

class presupuestoController extends Controller
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
            $presupuesto = presupuesto::where('fecha', 'LIKE', "%$keyword%")
                ->orWhere('total', 'LIKE', "%$keyword%")
                ->orWhere('fk_presupuesto_clientejuridico', 'LIKE', "%$keyword%")
                ->orWhere('fk_presupuesto_clientenatural', 'LIKE', "%$keyword%")
                -> paginate($perPage);
        } else {
            $presupuesto = presupuesto:: paginate($perPage);
        }

        return view('presupuesto.index', compact('presupuesto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('presupuesto.create');
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
        
        presupuesto::create($requestData);

        return redirect('presupuesto')->with('flash_message', 'presupuesto added!');
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
        $presupuesto = presupuesto::findOrFail($id);

        return view('presupuesto.show', compact('presupuesto'));
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
        $presupuesto = presupuesto::findOrFail($id);

        return view('presupuesto.edit', compact('presupuesto'));
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
        
        $presupuesto = presupuesto::findOrFail($id);
        $presupuesto->update($requestData);

        return redirect('presupuesto')->with('flash_message', 'presupuesto updated!');
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
        presupuesto::destroy($id);

        return redirect('presupuesto')->with('flash_message', 'presupuesto deleted!');
    }
}
