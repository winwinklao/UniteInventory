<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\ImportProductOrder;
use App\Models\Product;
use App\Models\Rack;
use App\Models\User;
use Carbon\Carbon;
use phpDocumentor\Reflection\PseudoTypes\True_;

class ImportOrder extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dateTomorow = date('Y-m-d' , strtotime('+1 Days'));
        $dateNextWeek = date('Y-m-d' , strtotime('+8 Days'));
        // $FirstDateOfMonth = date('Y-m-1');
        $LastDateOfMonth = date('Y-m-t');
        
        $orders1 = Order::where('date_EXP'  , date('Y-m-d'))->orderBy('id','asc')->get();
        $orders2 = Order::whereBetween('date_EXP' , [$dateTomorow,$dateNextWeek])->orderBy('id','asc')->get();
        $orders3 = Order::whereBetween('date_EXP' , [$dateTomorow,$LastDateOfMonth])->orderBy('id','asc')->get();
        

        $data = [
            'orders1' => $orders1,
            'orders2' => $orders2,
            'orders3' => $orders3,
            'users' => User::all()
        ];

        return view('ImportProduct.ImportOrder.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $order=Order::first();
        // dd($order->id);
        // $order->succees = TRUE;
        // $importproductorders=ImportProductOrder::all();
        // foreach($importproductorders as $importproductorder){
        //     if($importproductorder->id_order == $order->id && $importproductorder->check=TRUE && $importproductorder->success==FALSE){
        //         $importproductorder->quantity = $request->quantity;
        //         $importproductorder->success = TRUE;
        //         $importproductorder->qty_history = $request->quantity;
        //         $importproductorder->save();
        //     }
        // }
        // $order->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd($id);
        $order=Order::findOrFail($id);
        $importproductorder=ImportProductOrder::all();
        $users =User::all();
        return view('ImportProduct.ImportOrder.show',compact('order','importproductorder','users'));
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
        $item = $request->all();
        ImportProductOrder::findOrFail($id)->update($item);
        return redirect()->back();
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
    public function storeOrder(Request $request,$id)
    {
        
        $order=Order::findOrFail($id);
        $racks=Rack::all();
        $order->success = TRUE;
        $use_area=0;
        
        $importproductorders=ImportProductOrder::all();
        foreach($importproductorders as $importproductorder){
            if($importproductorder->id_order == $order->id && $importproductorder->check=TRUE && $importproductorder->success==FALSE){
                
                // $area = $importproductorder->product->use_area;
                // $area = $area*$importproductorder->quantity;
                // $use_area+=$area ;
                // $importproductorder->use_area=$area;
                $importproductorder->qty_history = $importproductorder->quantity;
                $importproductorder->use_area;
                $importproductorder->success = TRUE;
                $importproductorder->save();
                // while($importproductorder->use_area>0){
                //     foreach($racks as $rack){
                        
                //         while($rack->capacity <= 0){

                //         }
                //     }
                // }
                
            }
        }
        

        $order->save();



        return redirect('Importorder');
    }
    public function storeQTY(Request $request,$id)
    {
        //
    }
}
