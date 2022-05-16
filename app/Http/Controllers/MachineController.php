<?php

namespace App\Http\Controllers;

use App\Repositories\MachineRepository;
use Illuminate\Http\Request;

class MachineController extends Controller
{
    protected $machineRepository;

    public function __construct(MachineRepository $machineRepository){
       // $this->middleware('auth');
        $this->machineRepository =$machineRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $machines = $this->machineRepository->getAll();
        return view('machine.index',compact('machines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('machine.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $machines = $this->machineRepository->store($request->all());
        return redirect('machine');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $machine = $this->machineRepository->getById($id);
        return view('machine.show',compact('machine'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $machine = $this->machineRepository->getById($id);
        return view('machine.edit',compact('machine'));
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
        $this->machineRepository->update($id, $request->all());
        return redirect('machine');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->machineRepository->destroy($id);
        return redirect('machine');
    }
}
