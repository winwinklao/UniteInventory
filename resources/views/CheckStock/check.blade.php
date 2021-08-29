@extends('navbar')

@section('content')


<div class="row" style="margin-top:20px">
    <div class="col">
        <h2 class="f">ตรวจสอบคลัง</h2>

    </div>
</div>
<div class="row" style="margin-top:30px; ">
    <div class="col-1"></div>
    <div class="col-3">
        <h6 class="f">วันที่ตรวจสอบ {{date('d/m/Y')}}</h6>
    </div>
    <div class="col-3">
        <h6 class="f">ผู้ตรวจสอบ {{Auth::user()->name}}</h6>
    </div>
    <div class="col-1">
        <h6 class="f">ที่เก็บ</h6>
    </div>
    <div class="col-1">
        <form action="">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1" style="margin-top:-5px;margin-left:-60px;height:30px; width:60px; ">
            </div>
        </form>
    </div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
    {{ $message }}
</div>
@endif

<div class="row" style="margin-top:10px">
    <table id="tech-companies-1-clone" class="table table-striped table-hover" style="border: 1px solid black:">
        <thead style=" text-size:10px">
            <tr style="margin-top:50px;text-size:10px;text-align:center;">
                <th>ลำดับ</th>
                <th style="text-align:center;">รูปสินค้า</th>
                <th>รหัสสินค้า</th>
                <th>ชื่อสินค้า</th>
                <th>บริษัท</th>
                <th>ตำแหน่งจัดเก็บ</th>
                <th>ยอดตามบัญชี</th>
                <th>ยอดตรวจนับ</th>
                <th>ผลต่าง</th>
                <th>เวลา</th>

                <th>
                    <div class="row">
                        <div class="col-1"> </div>
                        <div class="col f">
                            หมายเหตุ
                        </div>
                    </div>
                </th>
            </tr>
        </thead>
        <tbody>
            @php($i=1)
            @foreach ($checks as $row)
            <tr style="text-align:center; text-size:10px">

                <td> {{$i++}}</td>
                <td> <img width="50" height="50" src="{{ asset('storage/profile-photos/'.$row->product->img) }}" alt=""></td>
                <td>{{$row->id_product}}</td>
                <td>{{$row->product->name}}</td>
                <td>{{$row->product->company}}</td>
                <td>{{$row->product->position}}</td>
                <td>{{$row->quantity}}</td>
                <td>
                    <form method="post" action="{{ route('check.update',$row->id) }}">
                        @csrf
                        @method('PUT')
                        <input type="text"  name='use_area' class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1" style="margin-top:-5px;margin-left:35px;height:30px; width:60px; ">
                        <button class="btn btn-pill btn-success badge text-wrap" role="button" style="margin-top: 5px;margin-left: 10px;height:25px; width:60px; " >
                        <h8 style="color : white">ตกลง</h8>
                    </button>
                    </form>
                
                </td>
                <td>{{$row->use_area }}</td>
                <td>{{date('H:i')}}</td>
                <td> <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1" style="margin-top:-5px;margin-left:70px;height:30px; width:170px; "></td>


            </tr>
            @endforeach
        </tbody>

    </table>
</div>
<div class="row">
    <div class="col-1" style="color:black ">


    </div>
    <div class="col-11">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="{{route('billcheck')}}"><button class="btn btn-dark f" type="button" style="border-radius:30px;width: 125px;">ดำเนินการต่อ</button></a>
        </div>
    </div>
</div>



@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!!</strong>
    There were some problems with your input. <br><br>
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

{{-- <form action="{{ route('checks.store') }}" method="check">
@csrf
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <strong class="f">ลำดับ</strong>
            <input type="text" name='title' class="form-control" placeholder="Enter Title">
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong class="f">รูปสินค้า</strong>
            <input type="text" name='title' class="form-control" placeholder="Enter Title">
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong class="f">รหัสสินค้า</strong>
            <input type="text" name='title' class="form-control" placeholder="Enter Title">
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong class="f">ชื่อสินค้า</strong>
            <input type="text" name='title' class="form-control" placeholder="Enter Title">
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong class="f">บริษัท</strong>
            <input type="text" name='title' class="form-control" placeholder="Enter Title">
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong class="f">ตำแหน่งจัดเก็บ</strong>
            <input type="text" name='title' class="form-control" placeholder="Enter Title">
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong class="f">ยอดตามบัญชี</strong>
            <input type="text" name='title' class="form-control" placeholder="Enter Title">
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong class="f">ยอดตรวจนับ</strong>
            <input type="number" min="0" name='title' class="form-control" placeholder="Enter Title">
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong class="f">ผลต่าง</strong>
            <input type="text" name='title' class="form-control" placeholder="Enter Title">
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong class="f">เวลา</strong>
            <input type="text" name='title' class="form-control" placeholder="Enter Title">
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong class="f">หมายเหตุ</strong>
            <input type="text" name='title' class="form-control" placeholder="Enter Title">
        </div>
    </div>


    <div class="col-md-12">
        <button type="submit" class="btn btn-success my-3">Submit</button>
    </div>
</div>
</form> --}}

@endsection