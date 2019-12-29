<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\cerveza;
use Illuminate\Http\Request;

class cervezaController extends Controller
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
            $cerveza = cerveza::where('nombre', 'LIKE', "%$keyword%")
                ->orWhere('precio', 'LIKE', "%$keyword%")
                ->orWhere('historia', 'LIKE', "%$keyword%")
                ->orWhere('caloria', 'LIKE', "%$keyword%")
                ->orWhere('volumen', 'LIKE', "%$keyword%")
                ->orWhere('fk_cerveza_anaquel', 'LIKE', "%$keyword%")
                ->orWhere('fk_cerveza_tipocerveza', 'LIKE', "%$keyword%")
                -> paginate($perPage);
        } else {
            $cerveza = cerveza:: paginate($perPage);
        }

        return view('cerveza.index', compact('cerveza'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('cerveza.create');
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
        
        cerveza::create($requestData);

        return redirect('cerveza')->with('flash_message', 'cerveza added!');
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
        $cerveza = cerveza::findOrFail($id);

        return view('cerveza.show', compact('cerveza'));
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
        $cerveza = cerveza::findOrFail($id);

        return view('cerveza.edit', compact('cerveza'));
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
        
        $cerveza = cerveza::findOrFail($id);
        $cerveza->update($requestData);

        return redirect('cerveza')->with('flash_message', 'cerveza updated!');
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
        cerveza::destroy($id);

        return redirect('cerveza')->with('flash_message', 'cerveza deleted!');
    }
}
