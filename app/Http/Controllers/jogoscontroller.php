<?php

namespace App\Http\Controllers;

use App\Models\Jogo;
use Illuminate\Http\Request;

class jogoscontroller extends Controller
{
     public function index(){
         
       $jogos = Jogo::all();
      // dd($jogos);

         return view('jogos.index',['jogos'=>$jogos]);
     }

     public function create()
     {
         return view('jogos.create');
     }
     public function store(Request $request){
          Jogo::create($request->all());
          return redirect()->route('jogos-index');
     }

     public function destroy($id){
        Jogo::where('id',$id)->delete();
        return redirect()->route('jogos-index');
     }
}
