@extends('navbar')
@section('content')
  <div class = "container">
  <br> 
    <div class = 'row'>
        <h1><b>รายการคำร้อง</b></h1>
    </div>
    <br><br> <br>
    <div class = 'row' >
      <div class = 'container block btn-group' role="group" aria-label="Basic checkbox toggle button group">
      <table class="table table-boederless table-striped table table-hover">
        <thead class = 'text-center'>
          <tr class = 'fs-6'>
            <td scope="col"> </td>
            <td scope="col">ลำดับ</td>
            <td scope="col">หมายเลข</td>
            <td scope="col">สถานะ</td>
            <td scope="col">ผู้ขอเบิกสินค้า</td>
            <td scope="col">ผู้รับคำขอเบิกสินค้า</td>
            <td scope="col">วันที่ต้องการรับสินค้า</td>
            <td scope="col">ราคารวม</td>
          </tr>
        </thead>
        <tbody class = 'text-center'>
          <tr class = 'fs-6'>
            <td scope="col"> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"> 
            </td>
            <td scope="row">1</td>
            <td scope="col">EOR4795</td>
            <td scope="col">รอคำตอบรับ</td>
            <td scope="col">สุชาติ ค้าไม้</td>
            <td scope="col">สุดใจ</td>
            <td scope="col">05/03/2563</td>
            <td scope="col">16000</td>
          </tr>
        </tbody>
        </div>
      </table>
      <br><br>
      </div>
    </div>
    <div class = 'row'>
      <div class = 'col-10'></div>
      
      <div class = 'col-2'> 
        <form>
          <a type ="button" href="{{route('ExportOrder.storeOrder')}}" type="button" style = "border-radius: 30px" class="btn btn-pill btn-success badge text-wrap" role="button"><h6><b>นำเข้าออเดอร์</b></h6></a>
        </form>
      </div>
    </div>
  </div>

@endsection