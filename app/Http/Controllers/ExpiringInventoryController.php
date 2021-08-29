<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ImportProductOrder;
use App\Models\InventoryHistoryModel;

class ExpiringInventoryController extends Controller
{
    public function main() {

        $dateTomorrow = date('Y-m-d' , strtotime('+1 Days'));
        $dateNextWeek = date('Y-m-d' , strtotime('+8 Days'));
        $FirstDateOfMonth = date('Y-m-1');
        $LastDateOfMonth = date('Y-m-t');
        
        $tasks = ImportProductOrder::where('date_EXP' , '=' , $dateTomorrow)->orderBy('id','asc')->get();
        $tasks2 = ImportProductOrder::whereBetween('date_EXP' , [$dateTomorrow,$dateNextWeek])->orderBy('id','asc')->get();
        $tasks3 = ImportProductOrder::whereBetween('date_EXP' , [$dateTomorrow,$LastDateOfMonth])->orderBy('id','asc')->get();
        

        $data = [
            'storedTasks' => $tasks,
            'storedTasks2' => $tasks2,
            'storedTasks3' => $tasks3,
            'importproductorders' => ImportProductOrder::all()
        ];

        return view('report.index2')->with($data);
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
            Session::flash('quantity', 'จำนวนที่คุณต้องการแก้ไข ต้องมากกว่า 0 !!!');
            return back();
        }
        else{
            if($amountItemOut>$task->quantity){
                
                Session::flash('quantity', 'จำนวนที่คุณต้องการแก้ไข มากกว่า จำนวนที่มีอยู่!!!');
                return back();
            }
            else if($amountItemOut<0){
                
                Session::flash('quantity', 'จำนวนที่คุณต้องการแก้ไข น้อยกว่า 0 ไม่ได้!!!');
                return back();
            }
        }
        $comment = $req->input('comment');
        if(!$comment){
            $comment = "";
        }

        $history = new InventoryHistoryModel;

        $oldAmount = $task->quantity;
        $newAmount = (int) $oldAmount - (int) $amountItemOut;

        if($amountItemOut!=$task->quantity){
            $history->id = $task->id;
            $history->image = $task->image;
            $history->product_code = $task->product_code;
            $history->name = $task->name;
            $history->company = $task->company;
            $history->product_type = $task->product_type;
            $history->storage_location = $task->storage_location;
            $history->date_EXP = $task->date_EXP;
            $history->quantity = (int) $newAmount;
            $history->comment = $comment;
            $history->created_at = now();
            $history->updated_at = now();
    
            $history->save(); 
        }
        if($task) {
            $task->quantity = $amountItemOut;
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
        $history->quantity = $task->amount;
        $history->comment = $comment;
        $history->created_at = now();
        $history->updated_at = now();

        $history->save();
        $task->delete();

        return back();
    }

}
