<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\revista_cerveza;
use Illuminate\Http\Request;

class revista_cervezaController extends Controller
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
            $revista_cerveza = revista_cerveza::where('fk_rc_revista', 'LIKE', "%$keyword%")
                ->orWhere('fk_rc_cerveza', 'LIKE', "%$keyword%")
                ->orWhere('porcentaje_descuento', 'LIKE', "%$keyword%")
                -> paginate($perPage);
        } else {
            $revista_cerveza = revista_cerveza:: paginate($perPage);
        }

        return view('revista_cerveza.index', compact('revista_cerveza'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('revista_cerveza.create');
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
        
        revista_cerveza::create($requestData);

        return redirect('revista_cerveza')->with('flash_message', 'revista_cerveza added!');
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
        $revista_cerveza = revista_cerveza::findOrFail($id);

        return view('revista_cerveza.show', compact('revista_cerveza'));
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
        $revista_cerveza = revista_cerveza::findOrFail($id);

        return view('revista_cerveza.edit', compact('revista_cerveza'));
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
        
        $revista_cerveza = revista_cerveza::findOrFail($id);
        $revista_cerveza->update($requestData);

        return redirect('revista_cerveza')->with('flash_message', 'revista_cerveza updated!');
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
        revista_cerveza::destroy($id);

        return redirect('revista_cerveza')->with('flash_message', 'revista_cerveza deleted!');
    }
}
