<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\inventarioarticulo;
use Illuminate\Http\Request;

class inventarioarticuloController extends Controller
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
            $inventarioarticulo = inventarioarticulo::where('nombre', 'LIKE', "%$keyword%")
                ->orWhere('cantidad', 'LIKE', "%$keyword%")
                ->orWhere('fk_inventarioarticulo_evento', 'LIKE', "%$keyword%")
                -> paginate($perPage);
        } else {
            $inventarioarticulo = inventarioarticulo:: paginate($perPage);
        }

        return view('inventarioarticulo.index', compact('inventarioarticulo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('inventarioarticulo.create');
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
        
        inventarioarticulo::create($requestData);

        return redirect('inventarioarticulo')->with('flash_message', 'inventarioarticulo added!');
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
        $inventarioarticulo = inventarioarticulo::findOrFail($id);

        return view('inventarioarticulo.show', compact('inventarioarticulo'));
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
        $inventarioarticulo = inventarioarticulo::findOrFail($id);

        return view('inventarioarticulo.edit', compact('inventarioarticulo'));
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
        
        $inventarioarticulo = inventarioarticulo::findOrFail($id);
        $inventarioarticulo->update($requestData);

        return redirect('inventarioarticulo')->with('flash_message', 'inventarioarticulo updated!');
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
        inventarioarticulo::destroy($id);

        return redirect('inventarioarticulo')->with('flash_message', 'inventarioarticulo deleted!');
    }
}
