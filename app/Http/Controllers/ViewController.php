<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ViewController extends Controller
{
    private $city;
    private $mobile;
    private $data = [];
    private $products;

    public function index()
    {
        return view('home');
    }
    public function series()
    {
        return view('series');
    }

    public function calculator()
    {
        return view('calculator');
    }
    public function passgenerator()
    {
        return view('passgenerator');
    }



    public function blog()
    {
        $this->products = Product::getAllProduct();
//        return $this->products;

        return view('blog', ['products' => $this->products]);
    }

    public function detail($id)
    {   $this->products = Product::getAllProduct();
        foreach ($this->products as $item)
        {
            if ($item['id'] == $id)
            {
                return view('detail', ['data' => $item]);
            }
        }
    }

}
