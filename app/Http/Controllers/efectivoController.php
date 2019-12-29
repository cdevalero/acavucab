<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\efectivo;
use Illuminate\Http\Request;

class efectivoController extends Controller
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
            $efectivo = efectivo::where('cantidad', 'LIKE', "%$keyword%")
                -> paginate($perPage);
        } else {
            $efectivo = efectivo:: paginate($perPage);
        }

        return view('efectivo.index', compact('efectivo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('efectivo.create');
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
        
        efectivo::create($requestData);

        return redirect('efectivo')->with('flash_message', 'efectivo added!');
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
        $efectivo = efectivo::findOrFail($id);

        return view('efectivo.show', compact('efectivo'));
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
        $efectivo = efectivo::findOrFail($id);

        return view('efectivo.edit', compact('efectivo'));
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
        
        $efectivo = efectivo::findOrFail($id);
        $efectivo->update($requestData);

        return redirect('efectivo')->with('flash_message', 'efectivo updated!');
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
        efectivo::destroy($id);

        return redirect('efectivo')->with('flash_message', 'efectivo deleted!');
    }
}
