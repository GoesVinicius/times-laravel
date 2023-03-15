<?php

namespace App\Http\Controllers;

use App\Models\Times;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TimesController
{
    public function index(){
        //$times = DB::select("SELECT * FROM times");
        //dd($times);

        $times = Times::all();
        //dd($times);

        return view('times.index')->with('times', $times);
    }

    public function show(Times $time){
       
        return view('times.show')->with('time', $time);
    }

    public function create(){

        return view('times.create');
    }

    public function store(Request $request){

        // $time = new Times();

        // $time->nome = $request->nome;
        // $time->sede = $request->sede;
        // $time->cor = $request->cor;
        // $time->dt_fund = $request->dt_fund;

        // $time->save();

        Times::create($request->only(['nome', 'sede', 'cor', 'dt_fund']));
        //Times::create($request->all());

        return redirect('times')->with('sucesso', 'Registro cadastrado com Sucesso!');
    }

    public function edit(Times $time){

        return view('times.edit', compact('time'));
    }

    public function update(Request $request, Times $time){
        
        $time->fill($request->all())->save();

        return redirect()->route('times.index')->with('sucesso', 'Registro editado com sucesso!');
    }

    public function destroy(Times $time){

        $time->delete();

        return redirect()->route('times.index')->with('sucesso', 'Registro excluido com sucesso!');
    }
}
