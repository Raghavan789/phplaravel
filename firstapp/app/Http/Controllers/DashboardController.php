<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // to automate the conrtroller code in every file go to the terminal and type php artisan make:controller name_of_file
    public function index(){
        //some logic
        $users =[
            ['name' => 'Alex',
            'age' => 30,
        ],
        [
            'name' => 'Dan',
            'age'=> 25,
        ],
        ];

        return view('dashboard', [
            'usersList' => $users
        ]);

    }

}
