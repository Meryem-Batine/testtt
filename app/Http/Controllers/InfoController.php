<?php

namespace App\Http\Controllers;

use App\Models\Info;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    //
    public function index(){
        $infos=Info::all();
        return view("infos",compact("infos"));
    }

    public function store(Request $request){
        request()->validate([
            "nom"=>["required"],
            "service"=>["required"],
            "dob"=>["required"],
            "debut"=>["required"],
            "fin"=>["required"],
        ]);

        $data = [
            "nom"=> $request->nom,
            "service"=> $request->service,
            "dob"=> $request->dob,
            "debut"=> $request->debut,
            "fin"=> $request->fin,
        ];
        Info::create($data);
        return redirect()->back();
    }
}
