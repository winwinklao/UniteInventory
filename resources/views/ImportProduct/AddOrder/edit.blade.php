@extends('navbar')
@section('content')
    

    <h2 class="font-semibold text-xl text-gray-800 leading-tight" style = "margin-top:20px">
        แก้ไขสินค้า
    </h2>


    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8" style = "margin-top:20px;" >
            <div class="mt-2 md:mt-0 md:col-span-3">
                <form method="post" action="{{ route('ImportProductOrder.update',$importproductorder->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col" style="background-color:;"></div>
                        <!-- <div class="px-4 py-5 bg-white sm:p-6"> -->
                        <div class="col-9" style="background-color:;">
                            <div class="row" style="margin-top:40px">
                                <div class="col"> 
                                    <label for="name" class="block font-medium text-sm text-gray-700"><b>รหัสสินค้า</b></label>
                                <div>
                                <div class="col"> 
                                    <input type="text" name="id_product" id="id_product" class="form-input rounded-md shadow-sm mt-1 block w-full"  value="{{ isset($importproductorder->id_product) ? $importproductorder->id_product : '' }}" style="width:700px; height:40px;"/>
                                    @error('id_product')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div> 
                            <div>

                            <div class="row" style="margin-top:40px">
                                <div class="col">
                                    <label for="email" class="col"><b>จำนวน</b></label>
                                <div>
                                <div class="col"> 
                                    <input type="number" name="quantity" id="quantity" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ isset($importproductorder->quantity) ? $importproductorder->quantity : '' }}" style="width:700px; height:40px;"/>
                                    @error('quantity')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div> 
                            <div>
    
                            <!-- </div> -->

                            <!-- <div class="px-4 py-5 bg-white sm:p-6">
                                <label for="email" class="block font-medium text-sm text-gray-700">จำนวน</label>
                                <input type="number" name="quantity" id="quantity" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ isset($importproductorder->quantity) ? $importproductorder->quantity : '' }}"/>
                                @error('quantity')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div> -->
                            <div class="row" style="margin-top:40px">
                                <div class="col">
                                    <label for="password" class="block font-medium text-sm text-gray-700"><b>ต้นทุน</b></label>
                                <div>
                                <div class="col"> 
                                    <input type="number" name="cost" id="cost" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ isset($importproductorder->cost) ? $importproductorder->cost : '' }}" style="width:700px; height:40px;"/>
                                    @error('cost')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div> 
                            <div>

                            <div class="row" style="margin-top:40px">
                                <div class="col">
                                    <label for="password" class="block font-medium text-sm text-gray-700"><b>วันที่ส่ง</b></label>
                                <div>
                                <div class="col">
                                    <input type="date" name="date_EXP" id="date_EXP" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ isset($importproductorder->date_EXP) ? $importproductorder->date_EXP : '' }}" style="width:700px; height:40px;"/>
                                    @error('date_EXP')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div> 
                            <div>
                            <!-- </div> -->
                            </div  class="row">
                                <div class="col" style = "text-align:end; margin-top:40px; margin-right:100px">
                                    <button style = "border-radius: 50px" class="btn  btn-dark badge text-wrap" role="button" ><h6 style = "margin-top : 5px;color:white;width:70px;height:15px;">
                                    บันทึก
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col" style="background-color: pink;"></div> -->
                    </div> 
                </form>
            </div>
        </div>
    </div>
    @endsection