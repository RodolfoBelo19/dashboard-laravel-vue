<?php

namespace App\Http\Controllers\ApiDash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Models\Client;

class HomeController extends Controller
{

    public function homeClient(Request $request)
    {
        // return 'teste';
        // $clients = [];
        
        // $clients = $request->clients->get('name');
        // $clients = Client::get($request->all());
        $clients = Client::all();

        dd($clients);

        // dd($clients);

        // $products = [
        //     [
        //         'id' => 1,
        //         'name' => 'tenis nike',
        //         'value' => 120.00,
        //     ],
        //     [
        //         'id' => 2,
        //         'name' => 'sapatenis',
        //         'value' => 220.00,
        //     ],
        //     [
        //         'id' => 3,
        //         'name' => 'sandalia',
        //         'value' => 30.00,
        //     ],
        // ];
        // return response()->json([
        //     'clients' => $clients,
            // 'products' => $products
        // ]);
    }
}
