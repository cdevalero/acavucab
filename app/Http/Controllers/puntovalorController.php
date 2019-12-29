<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\puntovalor;
use Illuminate\Http\Request;

class puntovalorController extends Controller
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
            $puntovalor = puntovalor::where('fecha', 'LIKE', "%$keyword%")
                ->orWhere('valor', 'LIKE', "%$keyword%")
                -> paginate($perPage);
        } else {
            $puntovalor = puntovalor:: paginate($perPage);
        }

        return view('puntovalor.index', compact('puntovalor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('puntovalor.create');
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
        
        puntovalor::create($requestData);

        return redirect('puntovalor')->with('flash_message', 'puntovalor added!');
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
        $puntovalor = puntovalor::findOrFail($id);

        return view('puntovalor.show', compact('puntovalor'));
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
        $puntovalor = puntovalor::findOrFail($id);

        return view('puntovalor.edit', compact('puntovalor'));
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
        
        $puntovalor = puntovalor::findOrFail($id);
        $puntovalor->update($requestData);

        return redirect('puntovalor')->with('flash_message', 'puntovalor updated!');
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
        puntovalor::destroy($id);

        return redirect('puntovalor')->with('flash_message', 'puntovalor deleted!');
    }
}
