@extends('navbar')
@section('content')

<div class = 'container'> 
        <form method="post" action="{{ route('ImportProductOrder.store') }}"> 
        @csrf
            <br>
            <div><h1><b>เพิ่มสินค้า</b></h1></div>
            <br><br><br>
            <div class = 'row'>
                <div class = 'col-1'></div>
                <div class = 'col-1' ><h5>รหัสสินค้า</h5></div>
                <div class = 'col-1'></div>
                <div class = 'col-3'><input type="text" min="1" name="id_product" id="id_product" class="form-input rounded-md shadow-sm mt-1 block w-full" style = 'width: 740px ;height: 40px' />
                @error('id_product')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                </div>
                <div class = 'col-3'></div>
            </div>

            <br><br>
            <div class = 'row'>
                <div class = 'col-1'></div>
                <div class = 'col-2'><h5>จำนวนสินค้า</h5></div>
                <div class = 'col-2'><input type="number" min="1" name="quantity" id="quantity" class="form-input rounded-md shadow-sm mt-1 block w-full" style = 'width: 200px ;height: 40px' />
                    @error('quantity')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class = 'col-1'></div>
                <div class = 'col-2'><h5>ต้นทุน</h5></div>
                <div class = 'col-2'><input type="number" min="1" name="cost" id="cost" class="form-input rounded-md shadow-sm mt-1 block w-full" style = 'width: 200px ;height: 40px'/>
                    @error('cost')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>

            <br><br>
            <div class = 'row'>
                <div class = 'col-1'></div>
                <div class = 'col-2'><h5>วันที่หมดอายุ</h5></div>
                <div class = 'col-2'>
                    <input type="date" name="date_EXP" id="date_EXP" class="form-input rounded-md shadow-sm mt-1 block w-full" style = 'width: 200px ;height: 40px'/>
                        @error('date_EXP')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                </div>
                <div class = 'col-1'></div>
                <div class = 'col-2'><h5>ที่เก็บสินค้า</h5></div>
                <div class = 'col-2'><input type="text" class="form-input rounded-md shadow-sm mt-1 block w-full" style = 'width: 200px ;height: 40px' /></div>
            </div>
            <br><br>
            <div class = 'row'>
                <div class = 'col-1'></div>
                <div class = 'col-2'><h5>ถ้าสั่งซื้อจะมีสินค้า : </h5></div>
                <div class = 'col-2'><h5>10 + 60 กล่อง</h5></div>
                <div class = 'col-1'></div>
                <div class = 'col-3'><h5>ผลวิเคราะห์ของสต็อกสินค้า : </h5></div>
                <div class = 'col-1'><h5>มีพอดี</h5></div>
            </div>

            <br><br><br>
            <div class = 'row'>
                <div class = 'col-8'>
                <a href="" style = "border-radius: 30px ; margin-left : 100px" class="btn btn-pill btn-dark " role="button"><h6 style = "margin-top : 5px;color : white; width:120px;height:15px;">วิเคราะห์ข้อมูล</h6></a>
                </div>
                    <!-- <button type="submit" class="btn btn-dark" style = "border-radius:100px;width: 100px;margin-top:10px;" data-bs-dismiss="modal" ><h7 >ตกลง</h7></button>  -->
                
                <div class = 'col-2'>
                <a href="{{route('ImportProductOrder.index')}}" style = "border-radius: 30px ; margin-left : 100px" class="btn btn-pill btn-dark " role="button"><h6 style = "margin-top : 5px;color : white;white; width:75px;height:15px;">ย้อนกลับ</h6></a>
                </div>
                <div class = 'col-1' style = "text-align:end">
                    <button style = "border-radius: 100px" class="btn btn-pill btn-dark" role="button" ><h6 style = "margin-top : 5px;color : white ; width:75px;height:15px;">
                    ตกลง
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- <div class = 'container'>
        <div class = "col-2"></div>
        <form method="post" action="{{ route('ImportProductOrder.store') }}">
            @csrf
            <br>
            <div class="row">
                <div class = "col-1"></div>
                <div class = "col-1"><h6>รหัสสินค้า</h6></div>
                <div class = "col-5">
                    <input type="text" name="id_product" id="id_product" class="form-input rounded-md shadow-sm mt-1 block w-full" style = 'width: 200px ;height: 40px' />
                    @error('id_product')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>    
            </div>

                <div class="row">
                    <div class = "col-1"></div>
                    <div class = "col-1">
                        <h6>จำนวน</h6>
                    </div>
                    <div class = "col-5">
                        <input type="number" name="quantity" id="quantity" class="form-input rounded-md shadow-sm mt-1 block w-full" style = 'width: 200px ;height: 40px'/>
                        @error('quantity')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class = "col-1"></div>
                        <h6>ต้นทุน</h6>
                        <input type="number" name="cost" id="cost" class="form-input rounded-md shadow-sm mt-1 block w-full" style = 'width: 200px ;height: 40px'/>
                        @error('cost')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    
                </div>

                <div class="row">
                    <div class = "col-1"></div>
                        <h6>วันที่หมดอายุ</h6>
                        <input type="date" name="date_EXP" id="date_EXP" class="form-input rounded-md shadow-sm mt-1 block w-full" style = 'width: 200px ;height: 40px'/>
                        @error('date_EXP')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                </div>


                <div class="row">
                    <div class = "col-8"></div>
                        <div class = "col-3">
                            <button style = "border-radius: 30px " class="btn btn-pill btn-dark badge text-wrap" role="button"><h5 style = "margin-top : 5px;color : white">
                                ตกลง
                            </button>
                        </div>
                    </div>
                </div>
            </form>  
        </div>
    </div> -->
@endsection