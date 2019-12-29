<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\tasa_monedaextranjera;
use Illuminate\Http\Request;

class tasa_monedaextranjeraController extends Controller
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
            $tasa_monedaextranjera = tasa_monedaextranjera::where('fk_tm_tasacambiaria', 'LIKE', "%$keyword%")
                ->orWhere('fk_tm_monedaextranjera', 'LIKE', "%$keyword%")
                -> paginate($perPage);
        } else {
            $tasa_monedaextranjera = tasa_monedaextranjera:: paginate($perPage);
        }

        return view('tasa_monedaextranjera.index', compact('tasa_monedaextranjera'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('tasa_monedaextranjera.create');
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
        
        tasa_monedaextranjera::create($requestData);

        return redirect('tasa_monedaextranjera')->with('flash_message', 'tasa_monedaextranjera added!');
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
        $tasa_monedaextranjera = tasa_monedaextranjera::findOrFail($id);

        return view('tasa_monedaextranjera.show', compact('tasa_monedaextranjera'));
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
        $tasa_monedaextranjera = tasa_monedaextranjera::findOrFail($id);

        return view('tasa_monedaextranjera.edit', compact('tasa_monedaextranjera'));
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
        
        $tasa_monedaextranjera = tasa_monedaextranjera::findOrFail($id);
        $tasa_monedaextranjera->update($requestData);

        return redirect('tasa_monedaextranjera')->with('flash_message', 'tasa_monedaextranjera updated!');
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
        tasa_monedaextranjera::destroy($id);

        return redirect('tasa_monedaextranjera')->with('flash_message', 'tasa_monedaextranjera deleted!');
    }
}
