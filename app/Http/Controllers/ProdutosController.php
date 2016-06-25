<?php

namespace estudolaravel\Http\Controllers;

use estudolaravel\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller{
    
    public function index(){
        $produtos = Produto::all();
        return view('produtos',array('produtos' => $produtos));
    }
    
    public function create(){
        return view('produtos.create');
    }
    
    public function store(Request $request){
        $input = $request->all();
        Produto::create($input);
        return redirect('produtos');
    }
}
