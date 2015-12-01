<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Partecipante;

class PartecipantiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	public function index(Request $request)
    {
    	$partecipanti = Partecipante::latest()->get();
    	if ($request->ajax() || $request->wantsJson()) {
    	return new JsonResponse($partecipanti);
    	}
    	return view('partecipanti.index', compact('partecipanti'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	return view('partecipanti.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	$input = $request->all();
    	$partecipante = Partecipante::create([
    			'name' => $input['name'],
    			'surname' => $input['surname'],
    			'email' => $input['email'],
    			'telephone' => $input['telephone'],
    			]);
    			
    			if ($request->ajax() || $request->wantsJson()) {
    				return new JsonResponse($partecipante);
    			}
    			
    			flash()->success('salvato con successo!');
    			
    			return redirect('partecipanti');
    			}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Partecipante $partecipante)
    {
    	return view('partecipanti.show', compact('partecipante'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Partecipante $partecipante)
    {
    	return view('partecipanti.edit', compact('partecipante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleRequest $request, Article $article)
    {
    	$input = $request->all();
    	$article->update([
    			'name' => $input['name'],
    			'surname' => $input['surname'],
    			'email' => $input['email'],
    			'telephone' => $input['telephone'],
    
    	]);
    
    	if ($request->ajax() || $request->wantsJson()) {
    		return new JsonResponse($partecipante);
    	}
    
    	flash()->success('aggiornato con successo!');
    
    	return redirect('partecipanti');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Partecipante $partecipante)
    {
    	$partecipante->delete();
    	if ($request->ajax() || $request->wantsJson()) {
    		return new JsonResponse($partecipante);
    	}
    	return redirect('partecipanti');
    }
    }