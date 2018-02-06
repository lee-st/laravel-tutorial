<?php

namespace App\Http\Controllers;

use App\Acc;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CreateAboutRequest;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct(){
        $this->middleware('auth')->only('create');
    }

    public function index(){
        $allacc = Acc::orderBy('name', 'asc')->get();
        //dd($allacc); ---- this is for debugging
        return view('about', compact('allacc'));
    }

    public function show(Acc $selected){
        return view('about-details', compact('selected'));
    }

    public function create(){
        return view('addNew');
    }

    public function store(CreateAboutRequest $request){
        $acc = new Acc($request->all());
        Auth::user()->accs()->save($acc);
        //Acc::create($request->all());
        session()->flash('flash_message', 'Your account has been created.');
        return redirect('about');
    }

    public function edit(Acc $selected){
        //$selected = Acc::findOrFail($id);
        return view('edit-details', compact('selected'));
    }

    public function update(Acc $selected, Request $request){
        // $selected = Acc::findOrFail($id);
        // $selected->update($request -> all());
        // return redirect()->action(
        //     'Controller@show', ['id' => $id]
        // );

        $this->validate($request, [ 'name' => 'required|min:5',
        'gender' => 'required',
        'phone' => 'required|min:10',]);
        //$selected = Acc::findOrFail($id);
        $selected->update($request -> all());
        return redirect()->action(
            'Controller@show', ['id' => $selected]
        );
    }

}
