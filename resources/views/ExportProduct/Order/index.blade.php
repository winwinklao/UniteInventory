@extends('navbar')
@section('content')
<style>
    hr.style1 {
    border: 3px solid;
    border-color: #0000;
    border-radius: 5px;

}
</style>

    <br>
    <div class = 'row'>
        <div class = 'col-1'></div>
        <div class = 'col-6'> 
            <h1><b>รายการนำออกสินค้า</b></h1>
        </div>
    </div>
    <br><br>
    <div class = 'row'>
        <div class = 'col-1'></div>
        <div class = 'col-2'> 
            <h3><b>งาน</b></h3>
        </div>
    </div>
    <div class = 'row'>
        <div class = 'col-1'></div>
            <div class = 'col-10'>
                <hr class = 'style1'>
            </div>
        <div class = 'col-1'></div>
    </div> 

    <div class = 'row'>
        <div class = 'col-1'></div>
        <div class = 'col-10'>
            <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    วันนี้
                </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <br>
                <div class = 'container block'>
                <table class="table table-boederless table-striped table table-hover" style ="border: 1px solid black">
                    <thead class = 'text-center'>
                    <tr class = 'fs-6'>
                        <th scope="col">ลำดับ</th>
                        <th scope="col">หมายเลข</th>
                        <th scope="col">สถานะ</th>
                        <th scope="col">ผู้ขอเบิกสินค้า</th>
                        <th scope="col">ผู้รับคำขอเบิกสินค้า</th>
                        <th scope="col">วันที่ต้องการรับสินค้า</th>
                    </tr>
                    </thead>
                    <tbody class = 'text-center'>
                        <tr class = 'fs-6'>
                            <td scope="row">1</td>
                            <td scope="col"><a href = " " data-bs-toggle="modal" data-bs-target="#Modal" style = "color: black">EOR00001</a></td>
                            <td scope="col">รอนำส่งสินค้า</td>
                            <td scope="col">สุชาติ ค้าไม้</td>
                            <td scope="col">สุดใจ</td>
                            <td scope="col">05/03/2563</td>
                        </tr>
                    </tbody>
                </table>
                </div>
                <br>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    สัปดาห์นี้
                </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <div class = 'container block'>
                    <table class="table table-boederless table-striped table table-hover" style ="border: 1px solid black">
                    <thead class = 'text-center'>
                        <tr class = 'fs-6'>
                            <th scope="col">ลำดับ</th>
                            <th scope="col">หมายเลข</th>
                            <th scope="col">สถานะ</th>
                            <th scope="col">ผู้ขอเบิกสินค้า</th>
                            <th scope="col">ผู้รับคำขอเบิกสินค้า</th>
                            <th scope="col">วันที่ต้องการรับสินค้า</th>
                        </tr>
                        </thead>
                        <tbody class = 'text-center'>
                        <tr class = 'fs-6'>
                            <td scope="row">1</td>
                            <td scope="col">EOR00001</td>
                            <td scope="col">รอนำส่งสินค้า</td>
                            <td scope="col">สุชาติ ค้าไม้</td>
                            <td scope="col">สุดใจ</td>
                            <td scope="col">05/03/2563</td>
                        </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    เดือนนี้
                </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                <div class = 'container block'>
                    <table class="table table-boederless table-striped table table-hover" style ="border: 1px solid black">
                    <thead class = 'text-center'>
                        <tr class = 'fs-6'>
                            <th scope="col">ลำดับ</th>
                            <th scope="col">หมายเลข</th>
                            <th scope="col">สถานะ</th>
                            <th scope="col">ผู้ขอเบิกสินค้า</th>
                            <th scope="col">ผู้รับคำขอเบิกสินค้า</th>
                            <th scope="col">วันที่ต้องการรับสินค้า</th>
                        </tr>
                        </thead>
                        <tbody class = 'text-center'>
                        <tr class = 'fs-6'>
                            <td scope="row">1</td>
                            <td scope="col">EOR00001</td>
                            <td scope="col">รอนำส่งสินค้า</td>
                            <td scope="col">สุชาติ ค้าไม้</td>
                            <td scope="col">สุดใจ</td>
                            <td scope="col">05/03/2563</td>
                        </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
                </div>
            </div>  
            </div>
        </div>
        <div class = 'col-1'></div>

    </div>


    
    
    <!-- Modal -->
    <!-- <div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered  modal-lg" style = "max-width: 650px!important;">
              <div class="modal-content"> -->

                <!-- Modal Header -->
                <!-- <div class="modal-header" style="background-color: #1E272E" >
                  <img src="ca.png" class="img-thumbnail" alt="" style ="background-color : pink ; width:40 px; height :40px">
                  <h5 style = "color:white">รายละเอียดคำสั่ง#EOR04785</h5>
                    <button type="button" style = "background-color: red" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class = "row">
                        <div class = "col-1"></div>
                        <div class = "col-md-3"><h6>วันที่ต้องการรับสินค้า</h6></div>
                        <div class = "col-md-4"></div>
                        <div class = "col-md-2"><h6>เวลา</h6></div>
                    </div>

                    <div class = "row">
                        <div class = "col-1"></div>
                        <div class = "col-md-3"><h6>ผู้ขอเบิกสินค้า</h6></div>
                        <div class = "col-md-4"></div>
                        <div class = "col-md-2"><h6>เบอร์ติดต่อ</h6></div>
                    </div>

                    <div class = "row">
                        <div class = "col-1"></div>
                        <div class = "col-md-5"><h6>ที่อยู่ในการจัดส่ง</h6></div>
                    </div>
                    <br>
                    <div class = 'container block'>
                      <table class="table table-bordered" style ="border: 1px solid black">
                        <thead class = 'text-center'>
                          <tr class = 'fs-6'>
                            <th scope="col">ลำดับ</th>
                            <th scope="col">รหัสสินค้า</th>
                            <th scope="col">จำนวน</th>
                            <th scope="col">สถานะ</th>
                            <th scope="col">ที่จัดเก็บ</th>
                          </tr>
                        </thead>
                        <tbody class = 'text-center'>
                          <tr class = 'fs-6'>
                            <td scope="row">1</td>
                            <td scope="col">RE0001</td>
                            <td scope="col">250</td>
                            <td scope="col">?</td>
                            <td scope="col">เชลฟ์ที่1 ชั้นที่1</td>
                          </tr>
                          <tr class = 'fs-6'>
                            <td scope="row">2</td>
                            <td scope="col">RE0002</td>
                            <td scope="col">100</td>
                            <td scope="col">?</td>
                            <td scope="col">เชลฟ์ที่2 ชั้นที่1</td>
                          </tr>
                        </tbody>
                      </table>
                      </div>

                    <div class = "row">
                        <div class = "col-8"></div>
                        <div class = "col"><h6>ราคารวม</h6></div>
                        <div class = "col"><h6>-</h6></div>
                    </div>
                    <br><br>
                    <div class = "row">
                      <div class = "col-1"></div>
                      <div class = "col-md-4"><h6>ผู้รับคำขอเบิกสินค้า</h6></div>
                      <div class = "col"><h6>-</h6></div>
                    </div>

                    <div class = "row">
                      <div class = "col-1"></div>
                      <div class = "col-md-4"><h6>ผู้นำส่งสินค้า</h6></div>
                      <div class = 'col-2'><input type="text" name='name' class='form-control' style = 'margin-left: -120px; width: 110px ;height: 30px' /></div>
                    </div>
                </div>
                <div class="modal-footer">
                  <form>
                    <a type ="button" href="{{route('ExportOrder.storeOrder')}}" type="button" style = "border-radius: 30px" class="btn btn-pill btn-danger badge text-wrap" role="button"><h5><b>ยกเลิกรายการ</b></h5></a>
                  <form>
                    <a type ="button" href="{{route('ExportOrder.storeOrder')}}" type="button" style = "border-radius: 30px" class="btn btn-pill btn-success badge text-wrap" role="button"><h5><b>นำออกสินค้า</b></h5></a>
                  </form>
                </div>

              </div>
          </div>
    </div> -->
@endsection