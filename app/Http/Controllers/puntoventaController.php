<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\puntoventum;
use Illuminate\Http\Request;

class puntoventaController extends Controller
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
            $puntoventa = puntoventum::where('cantidad', 'LIKE', "%$keyword%")
                ->orWhere('fk_puntoventa_puntovalor', 'LIKE', "%$keyword%")
                -> paginate($perPage);
        } else {
            $puntoventa = puntoventum:: paginate($perPage);
        }

        return view('puntoventa.index', compact('puntoventa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('puntoventa.create');
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
        
        puntoventum::create($requestData);

        return redirect('puntoventa')->with('flash_message', 'puntoventum added!');
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
        $puntoventum = puntoventum::findOrFail($id);

        return view('puntoventa.show', compact('puntoventum'));
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
        $puntoventum = puntoventum::findOrFail($id);

        return view('puntoventa.edit', compact('puntoventum'));
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
        
        $puntoventum = puntoventum::findOrFail($id);
        $puntoventum->update($requestData);

        return redirect('puntoventa')->with('flash_message', 'puntoventum updated!');
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
        puntoventum::destroy($id);

        return redirect('puntoventa')->with('flash_message', 'puntoventum deleted!');
    }
}
