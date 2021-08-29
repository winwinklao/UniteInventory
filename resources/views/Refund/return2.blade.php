
    @extends("navbar")
    @section('content')

        <div id="main"  style = "margin-top:20px ;">
            <H1>รายการตรวจสอบคืนสินค้า</H1>
        </div>


  
        <div class = "row" style = "margin-top:20px;" >
            <div class = "col-1" style = "text-align:end;" >
                <h6 >วันคืนสินค้า</h6> 
            </div>
            <div class = "col-2" >
                <h8 >21/1/2563</h8> 
            </div>
            <div class = "col-2" style = "text-align:end;">
                <h6 >วันที่ต้องได้รับสินค้า</h6> 
            </div>
            <div class = "col-2">
                <h8>05/02/2663</h8> 
            </div>
            <div class = "col-1"style = "text-align:end;">
                <h6>เวลารับสินค้า</h6> 
            </div>
            <div class = "col-2">
                <h8 >15.30 น.</h8> 
            </div>
        </div>
        
        <div class = "row" style = "margin-top:20px;" >
            <div class = "col-1" style = "text-align:end;">
                <h6 >ชื่อผู้รับสินค้า</h6> 
            </div>
            <div class = "col-2">
                <h8>ไอยเรศ</h8> 
            </div>
            <div class = "col-2" style = "text-align:end;" >
                <h6 >ชื่อผู้บันทึกสินค้า</h6> 
            </div>
            <div class = "col-2" >
                <h8 >ขวัญชัย</h8> 
            </div>
            <div class = "col-1"style = "text-align:end;">
                <h6>เลขที่เอกสาร</h6> 
            </div>
            <div class = "col-3">
                <h8 >RC00001</h8> 
            </div>
        </div>

        <div class = "row" style = "margin-top:30px " >
        <table id = "tech-companies-1-clone"  class="table table-striped table-hover"  style ="border: 1px solid black:" >
        <thead  style="text-size:10px">
            <tr style = "margin-top:50px;text-size:10px;text-align:center;" >
            <th>ลำดับ </th>
            <th>รหัสสินค้า </th>
            <th>ชื่อสินค้า </th>
            <th>บริษัท </th>
            <th>ตำแหน่งจัดเก็บ </th>
            <th>จำนวนที่คืน</th>
            <th>จำนวนที่ได้รับ</th>
            <th scope="col">หมายเหตุ</th>
            </tr>
        </thead>

        <tbody>
            <tr  style = "text-size:10px;text-align:center;" >
            <th scope="row">1</th>
            <td>RC0001</td>
            <td>แล็กเกอร์เงา</td>
            <td>TOA</td>
            <td>เชลฟ์ 1 ชั้น 2</td>
            <td>ดึงค่า</td>
            <td>ดึงค่า</td>   
            <td> <form action="">  
                    <div class="row">
                        <div class="col-9"  >
                            ดึงค่า
                        </div>
                    </div>
                </form> 
            </td>
            </tr>

            <tr  style = "text-size:10px;text-align:center;" >
            <th scope="row">2</th>
            <td>RC0001</td>
            <td>กระดาษทราย</td>
            <td>TOA</td>
            <td>เชลฟ์ 1 ชั้น 2</td>
            <td>ดึงค่า</td>
            <td>ดึงค่า</td>   
            <td> <form action="">  
                    <div class="row">
                        <div class="col-9"  >
                            ดึงค่า
                        </div>
                    </div>
                </form> 
            </td>
            </tr>

            <tr  style = "text-size:10px;text-align:center;" >
            <th scope="row">3</th>
            <td>RC0001</td>
            <td>แล็กเกอร์เงา</td>
            <td>TOA</td>
            <td>เชลฟ์ 1 ชั้น 2</td>
            <td>ดึงค่า</td>
            <td>ดึงค่า</td>   
            <td> <form action="">  
                    <div class="row">
                        <div class="col-9"  >
                            ดึงค่า
                        </div>
                    </div>
                </form> 
            </td>
          
            </tr>

            <tr  style = "text-size:10px;text-align:center;" >
            <th scope="row">4</th>
            <td>RC0001</td>
            <td>แล็กเกอร์เงา</td>
            <td>TOA</td>
            <td>เชลฟ์ 1 ชั้น 2</td>
            <td>ดึงค่า</td>
            <td>ดึงค่า</td>   
            <td> <form action="">  
                    <div class="row">
                        <div class="col-9">
                            ดึงค่า
                        </div>
                    </div>
                </form> 
            </td>
            </tr>

            <tr style = "text-size:10px;text-align:center;" >
            <th scope="row">5</th>
            <td>RC0001</td>
            <td>แล็กเกอร์เงา</td>
            <td>TOA</td>
            <td>เชลฟ์ 1 ชั้น 2</td>
            <td>ดึงค่า</td>
            <td>ดึงค่า</td>   
            <td> <form action="">  
                    <div class="row">
                        <div class="col-9"  >
                            ดึงค่า
                        </div>
                    </div>
                </form> 
            </td>
            </tr>

            <tr  style = "text-size:10px;text-align:center;" >
            <th scope="row">6</th>
            <td>RC0001</td>
            <td>แล็กเกอร์เงา</td>
            <td>TOA</td>
            <td>เชลฟ์ 1 ชั้น 2</td>
            <td>ดึงค่า</td>
            <td>ดึงค่า</td>   
            <td> <form action="">  
                    <div class="row">
                        <div class="col-9"  >
                            ดึงค่า
                        </div>
                    </div>
                </form> 
            </td>
            </tr>

        </tbody>
        </table>
        </div>   
     
        <div class = "row " style = "margin-top:20px">
                <div class = "col-1"></div>
                <div class = "col-11"></div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end" label ="Basic example" >
                    <div class="col-8" style = "text-align:end;margin-right:10px;margin-top:5px"  >
                        <a href = "{{route('billreturn')}}" style = "color:black">พิมพ์</a>
                        <a href = "" ><img src="printer.png" class="img-fluid" alt="printer.png" style="height:20px; width:20px;"></a>  
                    </div>
                    <a href = "{{route('return')}}" ><button  class="btn btn-dark" type="button" style = "border-radius:30px;text-align:end;">ย้อนกลับ</button></a>   
                    <a href = "{{route('return')}}" ><button  class="btn btn-success"  type="button" style = "border-radius:30px;text-align:end;">นำเข้าสินค้า</button></a>   
                </div>
        </div>



@endsection