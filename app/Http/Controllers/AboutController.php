<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){

        $naam = "Benhammou";
        $hobbies = ['voetbal','koken','wandelen'];

        $family = [
            (object) ["name" => "Bilal","email" => "Bilal@hotmail,com", "age" => 21],
            (object) ["name" => "Chris","email" => "Chris@hotmail,com", "age" => 35],
            (object) ["name" => "Dorien demesmaeker di bono","email" => "Dorien@hotmail,com", "age" => 47],
            (object) ["name" => "Pascal","email" => "Pascal@hotmail,com", "age" => 55]
        ];

        return view('about', [
            'naam' => $naam,
            'hobbies' => $hobbies,
            'family'  => $family
        ]);
    }
    //
}
