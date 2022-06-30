<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Uczen;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    public function index(){
     
        $tab=Uczen::all();
         return  view('home',compact('tab'));
    }

    public function insertName(Request $request){
         Uczen::insert([
            'imie'=>$request->imie,
            'nazwisko'=>$request->nazwisko,
            'nr_pesel'=>$request->pesel,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
    ]);
    return Redirect()->route('start.home');
    }

    public function dane(){
            return view('master');
        }

    public function usunUcz($id){
        $tabela=Uczen::find($id);
        $tabela->delete();
    return Redirect()->route('start.home');
    }

    public function editUcz($id){
        $tabela=Uczen::find($id);
        return view('edit',compact('tabela'));
    }

    public function updateUcz(Request $req,$id){
       Uczen::find($id)->update([
           'imie'=>$req->imie,
           'nazwisko'=>$req->nazwisko,
           'nr_pesel'=>$req->pesel,
           'updated_at'=>Carbon::now()
       ]);
       return Redirect()->route('start.home');   
    }

}
