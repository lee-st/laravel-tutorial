<?php

namespace App\Http\Controllers;

use App\Acc;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        return view('welcome');
    }

    public function about(){
        // $name = 'Lee Sook Ting';
        // return view('about')->with('name', $name);

        $allacc = Acc::all();
        return view('about', compact('allacc'));
    }

    public function show($id){
        $selected = Acc::findOrFail($id);
        return view('about-details', compact('selected'));
    }
}
