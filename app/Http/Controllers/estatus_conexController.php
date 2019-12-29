<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\estatus_conex;
use Illuminate\Http\Request;

class estatus_conexController extends Controller
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
            $estatus_conex = estatus_conex::where('fecha_hora', 'LIKE', "%$keyword%")
                ->orWhere('fk_ecx_venta', 'LIKE', "%$keyword%")
                ->orWhere('fk_ecx_compra', 'LIKE', "%$keyword%")
                ->orWhere('fk_ecx_estatus', 'LIKE', "%$keyword%")
                -> paginate($perPage);
        } else {
            $estatus_conex = estatus_conex:: paginate($perPage);
        }

        return view('estatus_conex.index', compact('estatus_conex'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('estatus_conex.create');
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
        
        estatus_conex::create($requestData);

        return redirect('estatus_conex')->with('flash_message', 'estatus_conex added!');
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
        $estatus_conex = estatus_conex::findOrFail($id);

        return view('estatus_conex.show', compact('estatus_conex'));
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
        $estatus_conex = estatus_conex::findOrFail($id);

        return view('estatus_conex.edit', compact('estatus_conex'));
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
        
        $estatus_conex = estatus_conex::findOrFail($id);
        $estatus_conex->update($requestData);

        return redirect('estatus_conex')->with('flash_message', 'estatus_conex updated!');
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
        estatus_conex::destroy($id);

        return redirect('estatus_conex')->with('flash_message', 'estatus_conex deleted!');
    }
}
