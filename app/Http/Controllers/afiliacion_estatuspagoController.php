<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\afiliacion_estatuspago;
use Illuminate\Http\Request;

class afiliacion_estatuspagoController extends Controller
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
            $afiliacion_estatuspago = afiliacion_estatuspago::where('fecha', 'LIKE', "%$keyword%")
                ->orWhere('fk_aep_afiliacionproveedor', 'LIKE', "%$keyword%")
                ->orWhere('fk_aep_estatuspago', 'LIKE', "%$keyword%")
                -> paginate($perPage);
        } else {
            $afiliacion_estatuspago = afiliacion_estatuspago:: paginate($perPage);
        }

        return view('afiliacion_estatuspago.index', compact('afiliacion_estatuspago'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('afiliacion_estatuspago.create');
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
        
        afiliacion_estatuspago::create($requestData);

        return redirect('afiliacion_estatuspago')->with('flash_message', 'afiliacion_estatuspago added!');
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
        $afiliacion_estatuspago = afiliacion_estatuspago::findOrFail($id);

        return view('afiliacion_estatuspago.show', compact('afiliacion_estatuspago'));
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
        $afiliacion_estatuspago = afiliacion_estatuspago::findOrFail($id);

        return view('afiliacion_estatuspago.edit', compact('afiliacion_estatuspago'));
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
        
        $afiliacion_estatuspago = afiliacion_estatuspago::findOrFail($id);
        $afiliacion_estatuspago->update($requestData);

        return redirect('afiliacion_estatuspago')->with('flash_message', 'afiliacion_estatuspago updated!');
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
        afiliacion_estatuspago::destroy($id);

        return redirect('afiliacion_estatuspago')->with('flash_message', 'afiliacion_estatuspago deleted!');
    }
}
