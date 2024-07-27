<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class websitecontroller extends Controller
{

    function addproducts(){
        return view('addproducts');

    }

    function add(request $request){
        $p=new Products();
        $p->products_name = $request->products_name;
        $p->products_price = $request->products_price;
        $p->save();

        $request->session()->flash('success', 'You have successfully  Upload  Product Name: "'.$p->products_name.'" and "'.$p->products_price.'" !');

        return redirect('addproducts');
        


    }
    function products_table(){
        $products = Products::all();
        return view('products_table')->with('products', $products);
    }
    function edit(request $request, $id){

        $products = Products::find($id);

        if($request->submit=='submit')
            {
            $products->products_name = $request->products_name;
            $products->products_price = $request->products_price;
            $products->save();
            return redirect('products_table');

            }
        return view('edit')->with('products', $products);

    }

    function delete($id)
    {
        products::destroy($id);
        return redirect('products_table');
    }
}

