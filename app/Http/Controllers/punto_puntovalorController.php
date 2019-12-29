<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\punto_puntovalor;
use Illuminate\Http\Request;

class punto_puntovalorController extends Controller
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
            $punto_puntovalor = punto_puntovalor::where('fk_pp_puntovalor', 'LIKE', "%$keyword%")
                ->orWhere('fk_pp_puntocompra', 'LIKE', "%$keyword%")
                -> paginate($perPage);
        } else {
            $punto_puntovalor = punto_puntovalor:: paginate($perPage);
        }

        return view('punto_puntovalor.index', compact('punto_puntovalor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('punto_puntovalor.create');
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
        
        punto_puntovalor::create($requestData);

        return redirect('punto_puntovalor')->with('flash_message', 'punto_puntovalor added!');
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
        $punto_puntovalor = punto_puntovalor::findOrFail($id);

        return view('punto_puntovalor.show', compact('punto_puntovalor'));
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
        $punto_puntovalor = punto_puntovalor::findOrFail($id);

        return view('punto_puntovalor.edit', compact('punto_puntovalor'));
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
        
        $punto_puntovalor = punto_puntovalor::findOrFail($id);
        $punto_puntovalor->update($requestData);

        return redirect('punto_puntovalor')->with('flash_message', 'punto_puntovalor updated!');
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
        punto_puntovalor::destroy($id);

        return redirect('punto_puntovalor')->with('flash_message', 'punto_puntovalor deleted!');
    }
}
