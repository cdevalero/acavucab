<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\tasacambiarium;
use Illuminate\Http\Request;

class tasacambiariaController extends Controller
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
            $tasacambiaria = tasacambiarium::where('valor', 'LIKE', "%$keyword%")
                ->orWhere('fecha', 'LIKE', "%$keyword%")
                -> paginate($perPage);
        } else {
            $tasacambiaria = tasacambiarium:: paginate($perPage);
        }

        return view('tasacambiaria.index', compact('tasacambiaria'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('tasacambiaria.create');
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
        
        tasacambiarium::create($requestData);

        return redirect('tasacambiaria')->with('flash_message', 'tasacambiarium added!');
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
        $tasacambiarium = tasacambiarium::findOrFail($id);

        return view('tasacambiaria.show', compact('tasacambiarium'));
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
        $tasacambiarium = tasacambiarium::findOrFail($id);

        return view('tasacambiaria.edit', compact('tasacambiarium'));
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
        
        $tasacambiarium = tasacambiarium::findOrFail($id);
        $tasacambiarium->update($requestData);

        return redirect('tasacambiaria')->with('flash_message', 'tasacambiarium updated!');
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
        tasacambiarium::destroy($id);

        return redirect('tasacambiaria')->with('flash_message', 'tasacambiarium deleted!');
    }
}
