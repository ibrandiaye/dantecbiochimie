<?php

namespace App\Http\Controllers;

use App\Repositories\ParametreRepository;
use App\Repositories\SousGroupeRepository;
use Illuminate\Http\Request;

class ParametreController extends Controller
{
    protected $parametreRepository;
    protected $sousGroupeRepository;

    public function __construct(ParametreRepository $parametreRepository, SousGroupeRepository $sousGroupeRepository){
       // $this->middleware('auth');
        $this->parametreRepository =$parametreRepository;
        $this->sousGroupeRepository = $sousGroupeRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parametres = $this->parametreRepository->getAll();
        return view('parametre.index',compact('parametres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sousGroupes = $this->sousGroupeRepository->getAll();
        return view('parametre.add',compact('sousGroupes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $parametres = $this->parametreRepository->store($request->all());
        return redirect('parametre');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $parametre = $this->parametreRepository->getById($id);
        return view('parametre.show',compact('parametre'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sousGroupes = $this->sousGroupeRepository->getAll();
        $parametre = $this->parametreRepository->getById($id);
        return view('parametre.edit',compact('parametre','sousGroupes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->parametreRepository->update($id, $request->all());
        return redirect('parametre');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->parametreRepository->destroy($id);
        return redirect('parametre');
}
}
