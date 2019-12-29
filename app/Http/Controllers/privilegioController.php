<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\privilegio;
use Illuminate\Http\Request;

class privilegioController extends Controller
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
            $privilegio = privilegio::where('nombre', 'LIKE', "%$keyword%")
                -> paginate($perPage);
        } else {
            $privilegio = privilegio:: paginate($perPage);
        }

        return view('privilegio.index', compact('privilegio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('privilegio.create');
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
        
        privilegio::create($requestData);

        return redirect('privilegio')->with('flash_message', 'privilegio added!');
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
        $privilegio = privilegio::findOrFail($id);

        return view('privilegio.show', compact('privilegio'));
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
        $privilegio = privilegio::findOrFail($id);

        return view('privilegio.edit', compact('privilegio'));
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
        
        $privilegio = privilegio::findOrFail($id);
        $privilegio->update($requestData);

        return redirect('privilegio')->with('flash_message', 'privilegio updated!');
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
        privilegio::destroy($id);

        return redirect('privilegio')->with('flash_message', 'privilegio deleted!');
    }
}
