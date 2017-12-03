<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{

    public function index(){
        $product = Product::all();
        $datos = array('productos' => $product);
        return view('inicio',$datos);
    }
    public function show($id)
    {
        $productos = Product::find($id);
        $datos = array('producto' => $productos);
        return view('detalle',$datos);
    }
}
