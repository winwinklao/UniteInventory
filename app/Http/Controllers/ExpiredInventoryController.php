<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ImportProductOrder;
use App\Models\InventoryHistoryModel;
use Session;



class ExpiredInventoryController extends Controller
{

    public function main() {
        $tasks = ImportProductOrder::where('date_EXP' , '<=' , date('Y-m-d'))->orderBy('id','asc')->get();
        return view('report.index')->with('storedTasks',$tasks); 
    }

    public function edit(Request $req)
    {
        $id = $req->input('id');
        if(!$id){
            $id = "";
        }
        $newDate = $req->input('newDate');
        if(!$newDate){
            $newDate = "";
        }

        $task = ImportProductOrder::find($id);

        $amountItemOut = $req->input('amountItemOut');
        if(!$amountItemOut){
            Session::flash('amount', 'จำนวนที่คุณต้องการแก้ไข ต้องมากกว่า 0 !!!');
            return back();
        }
        else{
            if($amountItemOut>$task->amount){
                
                Session::flash('amount', 'จำนวนที่คุณต้องการแก้ไข มากกว่า จำนวนที่มีอยู่!!!');
                return back();
            }
            else if($amountItemOut<0){
                
                Session::flash('amount', 'จำนวนที่คุณต้องการแก้ไข น้อยกว่า 0 ไม่ได้!!!');
                return back();
            }
        }
        $comment = $req->input('comment');
        if(!$comment){
            $comment = "";
        }

        $history = new InventoryHistoryModel;

        $oldAmount = $task->amount;
        $newAmount = (int) $oldAmount - (int) $amountItemOut;

        if($amountItemOut!=$task->amount){
            $history->id = $task->id;
            $history->image = $task->image;
            $history->product_code = $task->product_code;
            $history->name = $task->name;
            $history->company = $task->company;
            $history->product_type = $task->product_type;
            $history->storage_location = $task->storage_location;
            $history->date_EXP = $task->date_EXP;
            $history->amount = (int) $newAmount;
            $history->comment = $comment;
            $history->created_at = now();
            $history->updated_at = now();
    
            $history->save(); 
        }
        if($task) {
            $task->amount = $amountItemOut;
            $task->date_EXP = $newDate;
            $task->comment = $comment;

            $task->touch();
        }
        Session::flash('success', 'คุณแก้ไขข้อมูลเรียบร้อยแล้ว');
        return back();
    }

    public function destroy(Request $req)
    {
        $id = $req->input('id');
        if(!$id){
            $id = "";
        }
        $comment = $req->input('comment');
        if(!$comment){
            $comment = "";
        }

        $task = ImportProductOrder::find($id);
        $history = new InventoryHistoryModel;

        $history->id = $task->id;
        $history->image = $task->image;
        $history->product_code = $task->product_code;
        $history->name = $task->name;
        $history->company = $task->company;
        $history->product_type = $task->product_type;
        $history->storage_location = $task->storage_location;
        $history->date_EXP = $task->date_EXP;
        $history->amount = $task->amount;
        $history->comment = $comment;
        $history->created_at = now();
        $history->updated_at = now();

        $history->save();
        $task->delete();

        return back();
    }

    public function find(Request $req) {
        $findCondition = $req->input('find_word');
        $tasks = ImportProductOrder::where('product_code' , 'LIKE' , '%'.$findCondition.'%')->where('date_EXP' , '<=' , now())->orderBy('id','asc')->get();

        return view('report.index')->with('storedTasks',$tasks); 

    }
}
// // 