<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index(){
        $pizzas=[
            ['type'=>'hawaiian','base'=>'cheese crust'],
            ['type'=>'volacano','base'=>'chimodo'],
            ['type'=>'veg supreme','base'=>'makoko']
        ];
        
        $name=request('name');
        
        return view('pizza',[
            'pizzas'=>$pizzas,
            'name'=>$name,
            'age'=>request('age')
            ]);
    }

    public function show($id){
        
    return view('details',['id'=>$id]);
    }
}
