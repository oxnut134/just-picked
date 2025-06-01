<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\season;
use App\Models\productSeason;
use App\Http\Requests\UpdateRequest;
use App\Http\Requests\RegisterRequest;
class ProductController extends Controller
{
    public function index()
    {
        //$products = Product::all();
        /*dd($categories);*/
        $products = Product::simplePaginate(6);
        return view('products', [
            'products' => $products,
        ]);
    }
    public function search(Request $request)
    {
        //dd($request);
        $products = Product::where('name', 'like', '%' . $request['keyword'] . '%')->simplePaginate(6);

        //dd($products);

        return view('products', compact('products'));
    }
    public function sort(Request $request)
    {
        //dd($request);

        if ($request['criteria'] == '高い順に表示') {
            $products = Product::orderBY('price', 'desc')->simplePaginate(6);
        } elseif ($request['criteria'] == '低い順に表示') {
            $products = Product::orderBY('price', 'asc')->simplePaginate(6);
        } else {
            //$products = $request;
            $products = Product::simplePaginate(6);
        }

        //dd($products,$request);

        return view('products', [
            'products' => $products,
            'request' => $request
        ]);
    }


    public function detail($id)
    {
        $product_record = Product::find($id);
        $products = Product::all();


        $seasons = $product_record->season;

        //dd($seasons);


        return view('update', [
            'product_record' => $product_record,
            'products' => $products,
            'seasons' => $seasons
        ]);
    }
    public function update(UpdateRequest $request)
    {
        ($request);
        $product = $request->all();
        unset($product['_token']);
        Product::find($request->id)->update($product);
        return redirect('/');
    }
    public function softdelete($id)
    {
        //dd($id);

        Product::find($id)->delete();
        return redirect('/');
    }

    public function register()
    {
        $products = Product::all();
        $first_product = $products->first();

        return view('register', [
            'products' => $products,
            'first_product' => $first_product
        ]);
    }

    public function create(RegisterRequest $request)
    {
        //dd($request);
        $product = new Product;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->image = $request->image;
        $product->description = $request->description;
        $product->save();

        $id = $product->id;

        $productSeason = new ProductSeason;
        $productSeason->product_id = $id;
        $productSeason->season_id = $request->season_id;
        $productSeason->save();


        return redirect('/');
    }

}
