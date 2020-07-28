<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index() {
        // get data from database
        $pizzas = [
            ['type' => 'Hawaiian', 'base' => 'cheesy crust'],
            ['type' => 'Volcano', 'base' => 'glatic crust'],
            ['type' => 'Veg pere', 'base' => 'thin & scream']
        ];

        $name = request('name');
        $age = request('age');

        return view('pizzas', [
            'pizzas' => $pizzas,
            'name' =>   $name,
            'age' =>    $age,
        ]);
    }

    public function show($id) {
        return view('details', ['id' => $id]);
    }
}
