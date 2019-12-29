<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\pasopreparacion;
use Illuminate\Http\Request;

class pasopreparacionController extends Controller
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
            $pasopreparacion = pasopreparacion::where('numeropaso', 'LIKE', "%$keyword%")
                ->orWhere('descripcionpaso', 'LIKE', "%$keyword%")
                ->orWhere('fk_pasopreparacio_tipocerveza', 'LIKE', "%$keyword%")
                -> paginate($perPage);
        } else {
            $pasopreparacion = pasopreparacion:: paginate($perPage);
        }

        return view('pasopreparacion.index', compact('pasopreparacion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('pasopreparacion.create');
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
        
        pasopreparacion::create($requestData);

        return redirect('pasopreparacion')->with('flash_message', 'pasopreparacion added!');
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
        $pasopreparacion = pasopreparacion::findOrFail($id);

        return view('pasopreparacion.show', compact('pasopreparacion'));
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
        $pasopreparacion = pasopreparacion::findOrFail($id);

        return view('pasopreparacion.edit', compact('pasopreparacion'));
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
        
        $pasopreparacion = pasopreparacion::findOrFail($id);
        $pasopreparacion->update($requestData);

        return redirect('pasopreparacion')->with('flash_message', 'pasopreparacion updated!');
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
        pasopreparacion::destroy($id);

        return redirect('pasopreparacion')->with('flash_message', 'pasopreparacion deleted!');
    }
}
