<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\imagencerveza;
use Illuminate\Http\Request;

class imagencervezaController extends Controller
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
            $imagencerveza = imagencerveza::where('fk_imagencerveza_cerveza', 'LIKE', "%$keyword%")
                ->orWhere('imagen', 'LIKE', "%$keyword%")
                -> paginate($perPage);
        } else {
            $imagencerveza = imagencerveza:: paginate($perPage);
        }

        return view('imagencerveza.index', compact('imagencerveza'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('imagencerveza.create');
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
        if ($request->hasFile('imagen')) {
            $requestData['imagen'] = $request->file('imagen')->store('uploads', 'public');
        }

        imagencerveza::create($requestData);

        return redirect('imagencerveza')->with('flash_message', 'imagencerveza added!');
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
        $imagencerveza = imagencerveza::findOrFail($id);

        return view('imagencerveza.show', compact('imagencerveza'));
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
        $imagencerveza = imagencerveza::findOrFail($id);

        return view('imagencerveza.edit', compact('imagencerveza'));
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
                if ($request->hasFile('imagen')) {
            $requestData['imagen'] = $request->file('imagen')
                ->store('uploads', 'public');
        }

        $imagencerveza = imagencerveza::findOrFail($id);
        $imagencerveza->update($requestData);

        return redirect('imagencerveza')->with('flash_message', 'imagencerveza updated!');
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
        imagencerveza::destroy($id);

        return redirect('imagencerveza')->with('flash_message', 'imagencerveza deleted!');
    }
}
