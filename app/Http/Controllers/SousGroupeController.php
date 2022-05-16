<?php

namespace App\Http\Controllers;

use App\Repositories\SousGroupeRepository;
use Illuminate\Http\Request;

class SousGroupeController extends Controller
{
    protected $sousGroupeRepository;

    public function __construct(SousGroupeRepository $sousGroupeRepository){
       // $this->middleware('auth');
        $this->sousGroupeRepository =$sousGroupeRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sousGroupes = $this->sousGroupeRepository->getAll();
        return view('sous-groupe.index',compact('sousGroupes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sous-groupe.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sousGroupes = $this->sousGroupeRepository->store($request->all());
        return redirect('sous-groupe');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sousGroupe = $this->sousGroupeRepository->getById($id);
        return view('sous-groupe.show',compact('sousGroupe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sousGroupe = $this->sousGroupeRepository->getById($id);
        return view('sous-groupe.edit',compact('sousGroupe'));
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
        $this->sousGroupeRepository->update($id, $request->all());
        return redirect('sous-groupe');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->sousGroupeRepository->destroy($id);
        return redirect('sous-groupe');
    }
}
