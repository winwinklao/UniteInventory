<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Product;
use Session;



class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(9);
        $cproduct = Product::all();
        $count = count($cproduct); 
        // return view('product.product')->with('products',$products);
        
        return view('product.ProductTable.index', compact('products','count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('product.ProductTable.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   

        $request->validate([
                'img'=>'required',
                'id_product'=>'required|max:6',
                'name'=>'required',
                'company'=>'required',
                'type'=>'required',
                'use_area'=>'required|numeric|min:0|not_in:0',
        ],
        [
                'id_product.required'=>"โปรดกรอกรหัส",
                'id_product.max'=>"รหัสมี 6 ตัว",
                'id_product.unique'=>"มีสินค้าอยู่ในรายการอยู่แล้ว",
                'quantity.required'=>"โปรดกรอกจำนวนสินค้า",
                'type.required'=>"โปรดกรอกประเภทสินค้า",
                'date_EXP.required'=>"โปรดกรอกวันหมดอายุ",
                'use_area.required'=>"กรุณากรอกข้อมูล",
                'use_area.numeric'=>"กรุณากรอกจำนวนเต็ม",
                'img.required'=>"กรุณาใส่รูปภาพ",
                'name.required'=>"กรุณาใส่ชื่อสินค้า",
                'company.required'=>"กรุณาใส่ชื่อบริษัท",
                
        ]
        );
        
        $product = new Product();
        $product->id_product = $request->id_product;
        $product->name = $request->name;
        $product->type = $request->type;
        $product->company = $request->company;
        $product->use_area = $request->use_area;
        $product->group = "-";
        $product->position = "-";
        
        if($request->hasFile('img')) {
            $img = $request->file('img');
            $path = public_path(). '/storage/profile-photos';
            $filename = time() . '.' . $img->getClientOriginalExtension();
            $img->move($path, $filename);
            

            $product->img = $filename;
        }else{
            dd($request->hasFile('img'));
            $product->img = '';
        }

        $product->save();

        $companys = Company::all();
        $company = new Company();
        foreach($companys as $value){
            if($value->company != $request->company){
                $company->company = $request->company;
                $company->save();
            }
        }
        
        
        return redirect('product')->with('success','Add product successfully');
        
        
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
        $data = [
            "products"=>Product::getItem($id),
        ];

        return view('product.ProductTable.index',$data);
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
        // dd($id);
        $product = Product::findOrFail($id);

        return view('product.ProductTable.edit', compact('product'));
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
        $product = Product::findOrFail($id);

        
        $input = $request->all();
        
        $request->validate([
            'name'=>'required',
            'company'=>'required',
            'type'=>'required',
            'capacity'=>'required|numeric|min:0|not_in:0',
    ],
    [
            'id_product.required'=>"โปรดกรอกรหัส",
            'id_product.max'=>"รหัสมี 6 ตัว",
            'id_product.unique'=>"มีสินค้าอยู่ในรายการอยู่แล้ว",
            'quantity.required'=>"โปรดกรอกจำนวนสินค้า",
            'type.required'=>"โปรดกรอกประเภทสินค้า",
            'date_EXP.required'=>"โปรดกรอกวันหมดอายุ",
            'capacity.required'=>"กรุณากรอกข้อมูล",
            'capacity.numeric'=>"กรุณากรอกจำนวนเต็ม",
            'img.required'=>"กรุณาใส่รูปภาพ",
            'name.required'=>"กรุณาใส่ชื่อสินค้า",
            'company.required'=>"กรุณาใส่ชื่อบริษัท",
            
    ]
    );
        

        $product->fill($input)->save();
        
        

        return redirect('product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Product::destroyItem($id);
        Product::destroy($id);
        return back();

        // return redirect('product.ProductTable.index');

        
        // dd($id);
    }

    public function find(Request $req) {
        $findCondition = $req->input('find_word');
        $cproduct = Product::all();
        $products = Product::where('id' , 'LIKE' , '%'.$findCondition.'%')->orderBy('id','asc')->get();
        $count = count($cproduct); 
        return view('product.ProductTable.index',compact('products','count')); 

    }

    // public function find(Request $req) {
    //     $findCondition = $req->input('find_word');
    //     $tasks = ExpiredInventoryModel::where('product_code' , 'LIKE' , '%'.$findCondition.'%')->where('expiration_date' , '<=' , now())->orderBy('id','asc')->get();

    //     return view('report.index')->with('storedTasks',$tasks); 

    // }
}
