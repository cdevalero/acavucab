<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\cheque;
use Illuminate\Http\Request;

class chequeController extends Controller
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
            $cheque = cheque::where('numero_cheque', 'LIKE', "%$keyword%")
                ->orWhere('fk_cheque_banco', 'LIKE', "%$keyword%")
                -> paginate($perPage);
        } else {
            $cheque = cheque:: paginate($perPage);
        }

        return view('cheque.index', compact('cheque'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('cheque.create');
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
        
        cheque::create($requestData);

        return redirect('cheque')->with('flash_message', 'cheque added!');
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
        $cheque = cheque::findOrFail($id);

        return view('cheque.show', compact('cheque'));
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
        $cheque = cheque::findOrFail($id);

        return view('cheque.edit', compact('cheque'));
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
        
        $cheque = cheque::findOrFail($id);
        $cheque->update($requestData);

        return redirect('cheque')->with('flash_message', 'cheque updated!');
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
        cheque::destroy($id);

        return redirect('cheque')->with('flash_message', 'cheque deleted!');
    }
}
