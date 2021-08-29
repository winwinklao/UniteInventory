@extends('navbar')
@section('content')

<div class="container">
    <div>
        <h1><b>
                {{ __('เพิ่มรายการสินค้านำเข้า') }}
            </b></h1>
    </div>
   
    <!-- <div class ="row">
            <div class ="col-3"><h7><b>{{ __('วันที่สั่ง: ') }}</b> {{ date('d-m-Y') }}</h7></div>
            <div class ="col-1"></div>
            <div class ="col-4"><h7><b>{{ __('ผู้สั่ง:') }}</b> {{Auth::user()->name}}</h7></div> 
        </div> -->

        <div class="row" style= "text-align:end;">
        <div class="col" style= "text-align:end;margin-top:5px">
            <a href="{{ route('ImportProductOrder.create') }}" class="btn btn-dark" role="button"  style = "width:100 px;height:40px;">
               +เพิ่มสินค้า
            </a>
        </div>
    </div>


    <div class="row" style="margin-top:0px; ">
        
        <div class="col-1"></div>
        <div class="col-3" >
            <h6>{{ __('วันที่สั่ง: ')}} {{ date('d-m-Y') }}</h6>
        </div>
        <div class="col-4"  style="margin-left:38px; ">
            
            <h6>{{ __('ผู้สั่ง:') }} {{Auth::user()->name}}</h6>
        </div>


        <form action="" method="POST">
            {{ csrf_field() }}
            <div class="row" style="margin-top:20px ;">
                <div class="col-1"></div>
                <div class="col-2">
                    <h6>วันที่ต้องได้รับสินค้า</h6>
                </div>
                <div class="col-2" style="margin-left:-70px">
                    <input type="date" name="date_EXP" id="dt" class="form-input rounded-md "/>
                    @error('date_EXP')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <br>
                <div class="col-2" style="">
                    <div class="col-1"></div>
                    <h6>เลขที่ออเดอร์</h6>
                </div>
                <div class="col-2" style="margin-left:-105px;margin-top:-6px">
                    <input type="number" min="0" name="id_order" id="id_order" class="form-input rounded-md shadow-sm mt-1 block w-full" />
                </div>
              
                <div class="col" style= "text-align:end;margin-top:-20px"><button formaction="{{ route('ImportProductOrder.storeOrder') }}" style="width:100px;height:40px;" class="btn btn-dark ">
                สั่งสินค้า
                </button></div>
                <!-- <div class = "row-1">
                <div class ="col-10" ></div>
                <div class ="col-2"><button formaction="{{ route('ImportProductOrder.storeOrder') }}" style = "border-radius: 50px; width:150 px;height:35px;" class="btn btn-dark ">
                    <h6>สั่งสินค้า</h6>
                </button></div> -->
                
            </div>

        </form>



    </div>


    <!-- <form action="" method="POST">
            {{ csrf_field() }}
            <div class = "row">
                <div class ="col-2"><h6>วันที่ต้องได้รับสินค้า</h6></div>
                <div class ="col-1"></div>
                <div class ="col-2"><input type="date" name="date_EXP" id="date_EXP" class="form-input rounded-md " /></div>
                @error('date_EXP')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div> -->


    <!-- <div class = "row">
                <div class ="col-2" style = "margin-left:-20px ;"><h6>เลขที่ออเดอร์</h6></div>
               
                <div class ="col-3"><input type="number" name="id_order" id="id_order" class="form-input rounded-md shadow-sm mt-1 block w-full" /></div>
            </div> -->




    <br>
    <div class="row">
        @if(session('success'))
        <div class="alert alert-success"> {{session('success')}} </div>
        @endif
        <br>
        <table class="table table-boederless table-striped table table-hover" style="margin-top:20px">
            <thead class='text-center'>
                <tr>
                    <th scope="col" >
                        ลำดับ
                    </th>
                    <th scope="col">
                        รูปสินค้า
                    </th>
                    <th scope="col" >
                        รหัสสินค้า
                    </th>
                    <th scope="col" >
                        ชื่อสินค้า
                    </th>
                    <th scope="col" >
                        ประเภทสินค้า
                    </th>
                    <th scope="col">
                        วันหมดอายุ
                    </th>
                    <th scope="col">
                        จำนวน
                    </th>
                    <th scope="col">
                        ราคาต้นทุนต่อหน่วย
                    </th>
                    <th scope="col" >
                    <!-- แก้ไข -->
                    </th>
                 
                    <th scope="col">
                    <!-- ลบ -->
                    </th>
                </tr>
            </thead>
            <tbody class='text-center'>

                @php($i=1)
                @foreach($importproductorder as $row)
                @if ( Auth::user()->id== $row->id_user and $row->check == FALSE)

                @csrf
                <tr>
                    <td>{{$i++}}</td>
                    <td>
                        <img width="50" height="50" src="{{ asset('storage/profile-photos/'.$row->product->img) }}" alt="">
                    </td>
                    <td name="id_product" id="id_product" class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        <label id="*spaM4">{{$row->id_product}}</label>
                    </td>
                    <td>{{$row->product->name}}</td>
                    <td>{{$row->product->type}}</td>
                    <td name="date_EXP" id="date_EXP" class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        {{ date('d/m/Y',strtotime($row->date_EXP)) }}
                    </td>
                    <td name="quantity" id="quantity" class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        {{$row->quantity}} ชิ้น
                    </td>
                    <td name="cost" id="cost" class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        {{$row->cost}} บาท
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                        <a href="{{ route('ImportProductOrder.edit',$row->id) }}" class="text-indigo-600 hover:text-indigo-900 mb-2 mr-2">
                            <img src="{{ asset('storage/profile-photos/edit.png') }}" width="30" height="30" alt="" class="d-inline-block align-top">
                        </a>
                        <form action="{{ route('ImportProductOrder.destroy',$row->id) }}" method="POST" onsubmit="return confirm('Are you sure to delete this task?')" style="display:inline">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <!-- <input type="submit" class='btn btn-danger' value='Delete'> -->
                            <input type="image" value='Delete' src="{{ asset('storage/profile-photos/delete.png') }}" width="30" height="30" alt="" class="d-inline-block align-top">
                        </form>
                    </td>
                </tr>

                @endif
                @endforeach

                <!-- More items... -->
            </tbody>
        </table>
    </div>
     <div class="col-21">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end"  >
                   
                    <a href = "{{route('billchecklis')}}" style = "color:black">พิมพ์</a>
                    <a href = "" ><img src="printer.png" class="img-fluid" alt="printer.png" style="height:20px; width:20px;"></a>   
                </div>
        </div>



</div>

@endsection