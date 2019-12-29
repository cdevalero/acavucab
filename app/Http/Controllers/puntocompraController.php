<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\puntocompra;
use Illuminate\Http\Request;

class puntocompraController extends Controller
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
            $puntocompra = puntocompra::where('cantidad', 'LIKE', "%$keyword%")
                -> paginate($perPage);
        } else {
            $puntocompra = puntocompra:: paginate($perPage);
        }

        return view('puntocompra.index', compact('puntocompra'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('puntocompra.create');
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
        
        puntocompra::create($requestData);

        return redirect('puntocompra')->with('flash_message', 'puntocompra added!');
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
        $puntocompra = puntocompra::findOrFail($id);

        return view('puntocompra.show', compact('puntocompra'));
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
        $puntocompra = puntocompra::findOrFail($id);

        return view('puntocompra.edit', compact('puntocompra'));
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
        
        $puntocompra = puntocompra::findOrFail($id);
        $puntocompra->update($requestData);

        return redirect('puntocompra')->with('flash_message', 'puntocompra updated!');
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
        puntocompra::destroy($id);

        return redirect('puntocompra')->with('flash_message', 'puntocompra deleted!');
    }
}
