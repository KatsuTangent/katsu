<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DateTime;
use DB;
use App\Products;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        ////////////////////////////velidator////////////////////////////
        $validator = Validator::make($request->all(), [
            'cat_sub_id' => ['required', 'integer'],
            'name'    => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'price'     => ['required', 'numeric'],
            'stock' => ['required', 'integer'],
            'weight'     => ['required', 'numeric'],
            'sku'  => ['required', 'string', 'max:255'],
            'picture' => ['nullable','file'],
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        // dd($request->all());
        $pic = readfile($request->picture);
        // dd($pic);

        $Products = new Products();
        $Products->cat_sub_id = $request->cat_sub_id;
        $Products->name = $request->name;
        $Products->description = $request->description;
        $Products->price = $request->price;
        $Products->stock = $request->stock;
        $Products->weight = $request->weight;
        $Products->sku = $request->sku;
        $Products->picture = $pic;
        $Products->status = "Available";
        $Products->sales = 0;
        $Products->save();


        return  response()->json('sucess', 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //+
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
