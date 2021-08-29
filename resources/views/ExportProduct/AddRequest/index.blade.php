@extends('navbar')
@section('content')
<div class='container'>

  <br>
  <div class='row'>
    <div class="col-3">
      <h1><b>เพิ่มคำร้อง</b></h1>
    </div>
  </div>
  
    <form action="{{ route('ExportOrder.storeOrder') }}" method="POST">
            {{ csrf_field() }}
            <div class='row'>
            <div class='col-6'></div>
            <div class="row" style="margin-top:20px ;">
                <div class="col-2" style="">
                    <div class="col-1"></div>
                    <h6>รหัสสินค้า</h6>
                </div>
                <div class="col-2" style="margin-left:-105px;margin-top:-6px">
                    <input type="text"  name="product_id" id="product_id" class= "form-control" placeholder="" aria-label="" aria-describedby="basic-addon1" style = "height:30px; width:200px; "/>
                </div>
                @error('id_product')
                <span class="text-danger">{{$message}}</span>  
                @enderror
                <div class="col-2" style= "text-align:end;margin-top:-8px;width:130px;height:40px;"><button formaction="{{ route('ExportProductOrder.store') }}"  class="btn btn-dark ">
                  +เพิ่มสินค้า
                </button></div>
                
            </div>
    </form>

  </div>

  <br><br>

  <table class="table table-boederless table-striped table table-hover">
    <thead class='text-center'>
      <tr class='fs-6'>
        <th>ลำดับ</th>
        <th>รูปสินค้า</th>
        <th>รหัสสินค้า</th>
        <th>ชื่อสินค้า</th>
        <th>ประเภทสินค้า</th>
        <th>จำนวน</th>
      </tr>
    </thead>
    
    <tbody class='text-center'>
    @foreach ($exportproductorders as $row)
      @php($i=1)
      <tr class='fs-6'>
        <td>{{$i++}}</td>
        <td>
        </td>
        <td>{{$row->product_id}}</td>
        <td>{{$row->product->name}}</td>
        <td>{{$row->product->type}}</td>
        <td>
          <form action="">
            <input type="number" min="1" maxlength="4" size="2" style="text-align:center" name='quantity' class='form-control' />
           
            
            
          </form>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>



    <br><br>
    <form action="{{ route('ExportOrder.storeOrder') }}">
    <div class='row'>
      <div class='col-2'>
        <h6 style='margin-top: 10px'><b>วันขอเบิกสินค้า</b></h6>
      </div>
      <div class='col-2'>
        <input id="#requestDate" type="date" name='requestDate' class='form-control' style="margin-left: -90px" />
        @error('requestDate')
        <span class="text-danger">{{$message}}</span>
        @enderror
      </div>
      <div class='col-2'>
        <h6 style='margin-top: 10px ;margin-left: -10px'><b>วันที่ต้องการรับสินค้า</b></h6>
      </div>
      <div class='col-2'>
        <input type="date" name='requireDate' class='form-control' style="margin-left: -60px" />
        @error('requireDate')
        <span class="text-danger">{{$message}}</span>
        @enderror
      </div>
      <div class='col-2'>
        <h6 style='margin-top: 10px '><b>ผู้ขอเบิกสินค้า</b></h6>
      </div>
      <div class='col-2'>
        <input type="text" name='cus_name' class='form-control' style="margin-left: -90px ;font-size : 120%" placeholder="ชื่อ-นามสกุล" />
        @error('cus_name')
        <span class="text-danger">{{$message}}</span>
        @enderror
      </div>
    </div>

    <br><br>
    <div class='row'>
      <div class='col-2'>
        <h6 style='margin-top: 5px'><b>เบอร์ติดต่อผู้ขอเบิกสินค้า</b></h6>
      </div>
      <div class='col-2'>
        <input type="text" maxlength="10" name='tel' class='form-control' style='margin-left: -20px ' placeholder="XXX-XXX-XXXX" />
        @error('tel')
        <span class="text-danger">{{$message}}</span>
        @enderror
      </div>
      <div class='col-2'>
        <h6 style='margin-top: 5px '><b>ที่อยู่ในการจัดส่ง</b></h6>
      </div>
      <div class='col-2'>
        <input type="text" name='shippedAddress' style="margin-left: -80px" class='form-control' placeholder="ที่อยู่" />
        @error('shippedAddress')
        <span class="text-danger">{{$message}}</span>
        @enderror
      </div>
      <div class='col-2'></div>
    </div>

    <br><br>
    <div class='row'>
      <div class='col-8'></div>
      <div class='col-2'>
        <form>
          <a type="button" href="{{route('allRequest')}}" type="button" style="border-radius: 30px" class="btn btn-pill btn-primary badge text-wrap" role="button">
            <h6 style="margin-top : 5px">ดูคำร้องทั้งหมด</h6>
          </a>
        </form>
      </div>
      <div class='col-2'>
        <button id="#button_continue" type="submit" style="border-radius: 30px ;width: 120px" class="btn btn-pill btn-dark badge text-wrap" data-bs-toggle="modal" data-bs-target="#Modal">
          <h6 style="margin-top : 5px">ดำเนินการต่อ</h6>
        </button>
      </div>
    </div>
  </form>


  <!-- Start Modal -->

  <div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  modal-lg" style="max-width: 650px!important;">
      <div class="modal-content">

        <!-- Modal Header -->

        <div class="modal-header" style="background-color: #1E272E">
          <img src="ca.png" class="img-thumbnail" alt="" style="background-color : pink ; width:40 px; height :40px">
          <h5 style="color:white">รายละเอียดคำร้อง#EOR04785</h5>
          <button type="button" style="background-color: red" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
          <div class="row">
            <div class="col-1"></div>
            <div class="col-md-3">
              <h6>วันขอเบิกสินค้า</h6>
            </div>

            <div class="col-md-4"></div>
            <div class="col-md-2">
              <h6>เวลา</h6>
            </div>
          </div>

          <div class="row">
            <div class="col-1"></div>
            <div class="col-md-3">
              <h6>ผู้ขอเบิกสินค้า</h6>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-2">
              <h6>ราคารวม</h6>
            </div>
          </div>

          <div class="row">
            <div class="col-1"></div>
            <div class="col-md-5">
              <h6>วันที่ต้องการรับสินค้า</h6>
            </div>
          </div>

          <br>
          <div class='container block'>
            <table class="table table-bordered" style="border: 1px solid black">
              <thead class='text-center'>
                <tr class='fs-6'>
                  <th scope="col">ลำดับ</th>
                  <th scope="col">รหัสสินค้า</th>
                  <th scope="col">จำนวน</th>
                  <th scope="col">สถานะ</th>
                  <th scope="col">หมายเหตุ</th>
                </tr>
              </thead>
              <tbody class='text-center'>
                <tr class='fs-6'>
                  <td scope="row">1</td>
                  <td scope="col">RE0001</td>
                  <td scope="col">250</td>
                  <td scope="col">-</td>
                  <td scope="col">-</td>
                </tr>
                <tr class='fs-6'>
                  <td scope="row">2</td>
                  <td scope="col">RE0002</td>
                  <td scope="col">100</td>
                  <td scope="col">-</td>
                  <td scope="col">-</td>
                </tr>
              </tbody>
            </table>
          </div>

          <br>
          <div class="row">
            <div class="col-1"></div>
            <div class="col-md-4">
              <h6>ผู้รับคำขอเบิกสินค้า</h6>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-2">
              <h6>พิมพ์</h6>
            </div>
          </div>

          <div class="row">
            <div class="col-1"></div>
            <div class="col-md-4">
              <h6>เบอร์ติดต่อ</h6>
            </div>
          </div>

          <div class="row">
            <div class="col-1"></div>
            <div class="col-md-4">
              <h6>ที่อยู่ในการจัดส่ง</h6>
            </div>
          </div>

        </div>

        <div class="modal-footer">
          <form>
            <a type="button" href="{{route('allRequest')}}" type="button" style="border-radius: 30px" class="btn btn-pill btn-primary badge text-wrap" role="button">
              <h5><b>ดูคำร้องทั้งหมด</b></h5>
            </a>
          </form>
          <form>
            <a type="button" href="#" type="button" style="border-radius: 30px" class="btn btn-pill btn-success badge text-wrap" role="button">
              <h5><b>นำเข้าออเดอร์</b></h5>
            </a>
          </form>
        </div>

      </div>
    </div>
  </div>

  <!-- end Modal -->

  @endsection