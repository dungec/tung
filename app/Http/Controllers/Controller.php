<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function home(Request $request){
        $user_name = 'Alan Hoang';
        $id = '123';
        $number = 'A333';
        $request_data = [
            'select' => $request->input('select'),
            'date_type' => $request->input('date_type'),
            'date_from' => $request->input('date-from'),
            'date_to' => $request->input('date-to'),
        ];
        $data = User::simplePaginate(3);
        return view('home', compact('user_name', 'id', 'number', 'request_data', 'data'));
    }
}
