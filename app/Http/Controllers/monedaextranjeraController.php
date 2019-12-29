<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\monedaextranjera;
use Illuminate\Http\Request;

class monedaextranjeraController extends Controller
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
            $monedaextranjera = monedaextranjera::where('tipo', 'LIKE', "%$keyword%")
                ->orWhere('denominacion', 'LIKE', "%$keyword%")
                ->orWhere('numero_billete', 'LIKE', "%$keyword%")
                -> paginate($perPage);
        } else {
            $monedaextranjera = monedaextranjera:: paginate($perPage);
        }

        return view('monedaextranjera.index', compact('monedaextranjera'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('monedaextranjera.create');
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
        
        monedaextranjera::create($requestData);

        return redirect('monedaextranjera')->with('flash_message', 'monedaextranjera added!');
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
        $monedaextranjera = monedaextranjera::findOrFail($id);

        return view('monedaextranjera.show', compact('monedaextranjera'));
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
        $monedaextranjera = monedaextranjera::findOrFail($id);

        return view('monedaextranjera.edit', compact('monedaextranjera'));
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
        
        $monedaextranjera = monedaextranjera::findOrFail($id);
        $monedaextranjera->update($requestData);

        return redirect('monedaextranjera')->with('flash_message', 'monedaextranjera updated!');
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
        monedaextranjera::destroy($id);

        return redirect('monedaextranjera')->with('flash_message', 'monedaextranjera deleted!');
    }
}
