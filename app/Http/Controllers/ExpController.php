<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExpRequest;
use Illuminate\Http\Request;
use App\Models\Exp;
use App\Models\Tag;

class ExpController extends Controller
{
    //
    public function index(){
        $exps = Exp::orderby ('created_at')-> get();

        return view ('exps.index', compact ('exps'));
    }

    public function create (){

        return view('exps.create');
    }

    public function store(ExpRequest $request){
        $exp = Exp::create($request -> validated());

        $exp ->img = '';

        $exp -> saveOrFail ();

        return redirect ()-> route ('exps');
    }

    public function edit (Exp $exp){

        $tags = Tag::all ();
        return view('exps.edit', compact ('exp', 'tags'));
    }

    public function update (Request $request, Exp $exp){
        //$exp = Exp::create($request -> validated());

        $exp ->img = '';
        $tags = $request->tags;

        $exp->tags()->sync($tags);
        $exp -> saveOrFail ();

        return redirect ()-> route ('exps');
    }
}
