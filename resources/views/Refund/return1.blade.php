
    @extends("navbar")
    
    @section('content')
    
        <div id="main"  style = "margin-top:20px ;" >
            <h1>คืนสินค้า</h1>
        </div>


        <div class = "row" style = "margin-top:20px ;" >
            <div class = "col-1" >
                <h6 >ผู้บันทึก</h6> 
            </div>
            <div class = "col-3" style = "margin-left:1px">
                <form action="">  
                    <div class="input-group mb-3" >
                        <input type="text" class= "form-control" placeholder="" aria-label="" aria-describedby="basic-addon1" style = "margin-bottom:5px;height:30px; width:60px; ">
                    </div>
                </form> 
            </div>
            <div class = "col-1" >
                <h6>ผู้รับสินค้า</h6> 
            </div>
            <div class = "col-3" style = "margin-left:1px">
                <form action="">  
                    <div class="input-group mb-3">
                        <input type="text" class= "form-control" placeholder="" aria-label="" aria-describedby="basic-addon1" style = "margin-bottom:5px;height:30px; width:60px; ">
                    </div>
                </form> 
            </div>     
        </div>
        
        <div class = "row" style = "margin-top:20px ;" >
            <div class = "col-1" >
                <h6 >เลขที่เอกสาร</h6> 
            </div>
            <div class = "col-3" style = "margin-left:1px">
                <form action="">  
                    <div class="input-group mb-2">
                        <input type="text" class= "form-control" placeholder="" aria-label="" aria-describedby="basic-addon1" style = "margin-bottom:5px;height:30px; width:60px;  ">
                    </div>
                </form> 
            </div>
            <div class = "col-1" >
                <h6>วันที่เอกสาร</h6> 
            </div>
            <div class = "col-3" style = "margin-left:1px">
                <form action=" ">
                    <input type="date" name="bday" size="30">
                </form>
            </div>
            <div class = "col" style = "text-align:end">
                
            <!-- ปุ่ม -->
                <button type="button" class="btn" style = "background-color: #D2DAE2 " data-bs-toggle = "modal" data-bs-target="#myModal"><h6> + เพิ่มข้อมูลสินค้า </h6></button>
                   
            <!-- ป็อปอัพ -->
                <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered  modal-lg" style = "max-width: 650px!important;">
                <div class="modal-content">

            <!-- Modal Header -->
                <div class="modal-header" style="background-color: #1E272E"  >
                    <h5 style = "color:white">เพิ่มข้อมูลสินค้า</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" style="background-color:red;" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="card" style="width: 38rem; margin-left:5px;">
                        <div class="card-body">
                            <div class = "row" >
                                <div class = "col-5" style="margin-left:-42px">
                                    <h7>กรอกรหัสสินค้าหรือชื่อสินค้า</h7> 
                                </div>    
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="" size="10" style="height:30px;">
                                </div>
                            </div>   
                            <div class = "row" >
                                <div class = "col" style = "text-align : end;">
                                    <button type="submit" class="btn btn-dark" style = "border-radius:100px;width: 100px;margin-top:10px;" data-bs-dismiss="modal" ><h7 >ตกลง</h7></button> 
                                </div>
                            </div>   
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
        </div>
        </div>
        </div>

        <div class = "row" style = "margin-top:30px " >
        <table id="tech-companies-1-clone" class="table table-striped table-hover"  style ="border: 1px solid black:" >
        <thead  style="text-size:10px;">
        <tr style = "margin-top:50px;text-size:10px;text-align:center;" >
            <th>ลำดับ</th>
            <th>รหัสสินค้า</th>
            <th>ชื่อสินค้า</th>
            <th>บริษัท</th>
            <th>ตำแหน่งจัดเก็บ</th>
            <th>
                <div class = "row">
                    <div class = "col-3"> 
                        จำนวน
                    </div>    
            </th>
            <th>
                <div class = "row">
                    <div class = "col-1"> </div>
                        <div class = "col-3"> 
                            หมายเหตุ
                        </div>
                    </div>    
            </th>  
            </tr>
        </thead>

        <tbody>
            <tr  style = "text-size:10px;text-align:center;" >
            <th scope="row">1</th>
            <td>RC0001</td>
            <td>แล็กเกอร์เงา</td>
            <td>TOA</td>
            <td>เชลฟ์ 1 ชั้น 2</td>
            <td> <form action="">  
                    <input type="number" min="0" class="form-control"  placeholder="" style="height:28px; width:60px;">
                </form> 
            </td>
            <td> <form action="">  
                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col">
                            <input type="text" class="form-control"  placeholder="" size="10" style="height:28px;">
                        </div>
                    </div>
                </form> 
            </td>
            </tr >

            <tr  style = "text-size:10px;text-align:center;" >
            <th scope="row">2</th>
            <td>RC0001</td>
            <td>แล็กเกอร์เงา</td>
            <td>TOA</td>
            <td>เชลฟ์ 1 ชั้น 2</td>
            <td> 
                    <input type="number" min="0" class="form-control"  placeholder="" style="height:28px; width:60px;text-align:center;">
               
            </td>
            <td> <form action="">  
                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col">
                            <input type="text" class="form-control"  placeholder="" size="10" style="height:28px;">
                        </div>
                    </div>
                </form> 
            </td>
            </tr >
            
            <tr  style = "text-size:10px;text-align:center;" >
            <th scope="row">3</th>
            <td>RC0001</td>
            <td>แล็กเกอร์เงา</td>
            <td>TOA</td>
            <td>เชลฟ์ 1 ชั้น 2</td>
            <td> <form action="">  
                    <input type="text" class="form-control"  placeholder="" style="height:28px; width:60px;">
                </form> 
            </td>
            <td> <form action="">  
                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col">
                            <input type="text" class="form-control"  placeholder="" size="10" style="height:28px;">
                        </div>
                    </div>
                </form> 
            </td>
            </tr >
            
            <tr  style = "text-size:10px;text-align:center;" >
            <th scope="row">4</th>
            <td>RC0001</td>
            <td>แล็กเกอร์เงา</td>
            <td>TOA</td>
            <td>เชลฟ์ 1 ชั้น 2</td>
            <td> <form action="">  
                    <input type="number" min="0" class="form-control"  placeholder="" style="height:28px; width:60px;text-align:center;">
                </form> 
            </td>
            <td> <form action="">  
                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col">
                            <input type="text" class="form-control"  placeholder="" size="10" style="height:28px;">
                        </div>
                    </div>
                </form> 
            </td>
            </tr >
            
            <tr  style = "text-size:10px;text-align:center;" >
            <th scope="row">5</th>
            <td>RC0001</td>
            <td>แล็กเกอร์เงา</td>
            <td>TOA</td>
            <td>เชลฟ์ 1 ชั้น 2</td>
            <td> <form action="">  
                    <input type="number" min="0" class="form-control"  placeholder="" style="height:28px; width:60px;text-align:center;">
                </form> 
            </td>
            <td> <form action="">  
                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col">
                            <input type="text" class="form-control"  placeholder="" size="10" style="height:28px;">
                        </div>
                    </div>
                </form> 
            </td>
            </tr >
            
            <tr style = "text-size:10px;text-align:center;" >
            <th scope="row">6</th>
            <td>RC0002</td>
            <td>กระดาษทราย</td>
            <td>ฉลาม</td>
            <td>เชลฟ์ 1 ชั้น 2</td>
            <td> <form action="" >  
                    <input type="number" min="0" class="form-control"  placeholder="" style="height:28px; width:60px;text-align:center;">
                </form> 
            </td>
            <td> <form action="">  
                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col">
                            <input type="text" class="form-control"  placeholder="" size="10" style="height:28px;">
                        </div>
                    </div>
                </form> 
            </td>
            </tr>
        
        </tbody>
        </table>
        </div> 

        <div class = "row " style = "text-align:right;margin-top:10px;">
            <div class = "col-12" style = "text-size:15px" >
                <B >จำนวนคืนสินค้าทั้งหมด 50000 บาท</B>
            </div>
        </div>

        <div class = "row " style = "margin-top:20px">
            <div class = "col"></div>
            <div class = "col-11"></div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end" label ="Basic example" >
                <a href = "{{route('return')}}"><button  class="btn btn-dark " type="button" style = "border-radius:30px;width: 100px;" >ตกลง</button></a>  
            </div>
        </div> 

        
@endsection