@extends('navbar')
@section('content')

<style>
    hr.style1 {
    border: 3px solid;
    border-color: #0000;
    border-radius: 5px;

}
</style>

<div class='container'>
  <div>
    <br>
    <h1><b>รายการตรวจสอบสินค้านำเข้า</b></h2>
  </div>

  <br>
  <div class='row'>
    <div class='col-3'>
      <h6><b>วันที่สั่งสินค้า: {{ date('d/m/Y',strtotime($order->created_at)) }} </b></h6>
    </div>

    <div class='col-3'>
      <h6><b>วันที่ต้องได้รับสินค้า: {{ date('d/m/Y',strtotime($order->date_EXP)) }}</b></h6>
    </div>

    <div class='col-4'>
      @foreach ($users as $user)
      @if ($order->user_id == $user->id)
      <h6><b>ชื่อผู้สั่งซื้อสินค้า :{{$user->name}}</b></h6>
    </div>
    @endif
    @endforeach
    <div class='col-2'>
      <h6><b>บริษัท : {{$order->company_id}}</b></h6>
    </div>
  </div>

  <br>
  <div class='row'>
    <div class='col-3'>
      <h6><b>วันที่นำเข้าสินค้า: {{ date('d-m-Y') }}</b></h6>
    </div>
    <div class='col-3'>
      <h6><b>เวลารับสินค้า: </b></h6>
    </div>

    <div class='col-1'>
      <h6></h6>
    </div>
  </div>

  <br><br>
  <div class="card" style="width: 80rem; border-radius: 0px;">
    <table class="table table-boederless table-striped table table-hover">
      <thead class='text-center'>
        <tr class='fs-6'>
          <th>รูปสินค้า</th>
          <th>ชื่อสินค้า</th>
          <th>ประเภทสินค้า</th>
          <th>ที่จัดเก็บสินค้า</th>
          <th>วันหมดอายุ</th>
          <th>ราคา/หน่วย</th>
          <th>จำนวนที่สั่ง</th>
          <th>จำนวนที่ได้รับ</th>
          <th></th>
        </tr>
      </thead>
      <tbody class='text-center'>
        @foreach ($exportproductorder as $row)
        @if ($order->id == $row->id_order)

        <tr class='fs-6'>
          <th><img width="50" height="50" src="{{ asset('storage/profile-photos/'.$row->product->img) }}" alt=""></th>
          <th>{{$row->product->name}}</th>
          <th>{{$row->product->type}}</th>
          <th>{{$row->product->use_area}}</th>
          <th>{{ date('d/m/Y',strtotime($row->date_EXP)) }} </th>
          <th>{{$row->cost}}</th>
          <th>{{$row->quantity}} </th>
          <th>
            <form method="post" action="{{ route('Exportorder.update',$row->id) }}">
              @csrf
              @method('PUT')

              <input type="number" min="1" maxlength="4" size="2" style="text-align:center" name='quantity' class='form-control' />


          </th>
          <td><button class="btn btn-pill btn-success badge text-wrap" role="button">
              <h5 style="color : white">ตกลง</h5>
            </button>
            </form>
          </td>

        </tr>

        </tr>
        @endif
        @endforeach
      </tbody>
    </table>
  </div>


  <div class="card" style="width: 80rem; border-radius: 0px;">
    <div class='row'>
      <div style="width:1000px;height:30px;">
        <h6 style="text-align:right">ราคารวม</h6>
      </div>
      <div style="width:240px;height:30px;;">
        <h6 style="text-align:center">{{$ExportOrder->Total_price}}</h6>
      </div>
    </div>
  </div>

  <br>
  <div class='row'>
    <div class='col-8'></div>
    <div class='col-1'>
      <a type="button" href="{{ route('Importorder.index') }}" type="button" style="border-radius: 30px ;width: 120px" class="btn btn-pill btn-dark badge text-wrap" role="button">
        <h5 style="margin-top : 5px;color : white">ย้อนกลับ</h5>
      </a>

    </div>
    <div class='col-1'>
      <!-- <form>
        <a type="button" href="#" type="button" style="border-radius: 30px ; margin-left : 50px" class="btn btn-pill btn-danger badge text-wrap" role="button">
          <h5 style="margin-top : 5px;color : white">ยกเลิกรายการ</h5>
        </a>
      </form> -->
    </div>
    <div class='col-2'>
      <form method="post" action="{{ route('ExportOrder.storeOrder',$order->id) }}">
        @csrf
        <button style="border-radius: 30px ; margin-right : 50px" class="btn btn-pill btn-success " role="button">
          <h5 style="margin-top : 5px;color : white">นำเข้าสินค้า</h5>
        </button>
      </form>
    </div>
  </div>

</div>
@endsection