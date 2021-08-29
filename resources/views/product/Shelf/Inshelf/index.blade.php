
@extends("navbar")
@section('content')
    <br><br>
    <div class = "row">
        <div class = "col-md-1" style = 'margin-top: 5px ; '><h1>เชลฟ์</h1></div>
        <div class = "col-md-1" style = 'margin-top: 5px ; '><h1>{{$shelf->id}} </h1></div>
        <div class = "col-md-3" style = 'margin-top: 15px ; font-size : 150% '><h3>ใช้พื้นที่ไปแล้ว : {{abs($shelf->shelf_capacity - 100)}}</h3></div> 
    </div>
    <br>
    <br><br>
    <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="flase" aria-controls="collapseOne">
        ชั้นที่ 1  
      </button>
        <br>
        <input style="width 20px; height: 20px;" type="image" src="{{ asset('/storage/profile-photos/edit.png') }}" alt=""  data-bs-toggle="modal" data-bs-target="#exampleModal7">
          <div class="modal fade" id="exampleModal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel7" aria-hidden="true">
              <div class="modal-dialog" role="document">
                  <div class="modal-content">
                      <div class="modal-header" Style="background-color: black;color: white;">
                          <h3 class="modal-title" id="exampleModalLabel7">แก้ไขวันหมดอายุ</h3>
                          <button type="button" class="close" data-bs-dismiss="modal" aria-bs-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                      <form method="post" action="/">
                      @csrf
                      <input type="hidden" name="id" value="">
                      <div class="modal-body">
                          
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-bs-dismiss="modal" Style="background: #F31D1D;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);border-radius: 10px;transform: matrix(1, 0, 0, 1, 0, 0);color:white">ยกเลิก</button>
                          <button type="submit" class="btn btn-suscess" Style="background: #20CB6F;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);border-radius: 10px;transform: matrix(1, 0, 0, 1, 0, 0);color:white">ลบสินค้า</button>
                      </div>
                      </form>
                  </div>
              </div>
          </div>
          <input style="width 20px; height: 20px;" type="image" src="{{ asset('/storage/profile-photos/delete.png') }}" alt=""  data-bs-toggle="modal" data-bs-target="#exampleModal8">
          <div class="modal fade" id="exampleModal8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel8" aria-hidden="true">
              <div class="modal-dialog" role="document">
                  <div class="modal-content">
                      <div class="modal-header" Style="background-color: black;color: white;">
                          <h3 class="modal-title" id="exampleModalLabel8">แก้ไขวันหมดอายุ</h3>
                          <button type="button" class="close" data-bs-dismiss="modal" aria-bs-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                      <form method="post" action="/">
                      @csrf
                      <input type="hidden" name="id" value="">
                      <div class="modal-body">
                          
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-bs-dismiss="modal" Style="background: #F31D1D;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);border-radius: 10px;transform: matrix(1, 0, 0, 1, 0, 0);color:white">ยกเลิก</button>
                          <button type="submit" class="btn btn-suscess" Style="background: #20CB6F;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);border-radius: 10px;transform: matrix(1, 0, 0, 1, 0, 0);color:white">ลบสินค้า</button>
                      </div>
                      </form>
                  </div>
              </div>
          </div>
    </h2>
    <br>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <div class="table-responsive">
                <table id = "product_table" class="table table-striped table-hover" >
                    <thead class = "text-center">
                        <tr>
                            
                            <th>รูปสินค้า</th>
                            <th>รหัสสินค้า</th>
                            <th>ชื่อสินค้า</th>
                            <th>ประเภทสินค้า</th>
                            <th>วันเข้าสินค้า</th>
                            <th>จำนวนสินค้า</th>
                            <th>ราคาต้นทุน</th>
                        </tr>
                            
                    </thead>
                    
                    <tbody class = "text-center">
                        <td>-</td>
                        <td>{{$shelf->product_id}}</td>
                        <td>{{$shelf->product_name}}</td>
                        <td>{{$shelf->product_type}}</td>
                        <td>{{$shelf->product_import_date}}</td>
                        <td>{{$shelf->product_value}}</td>
                        <td>{{$shelf->product_cost_price}}</td>
                        
                    </tbody>
                   
                </table> 
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        ชั้นที่ 2 

      </button>
      <br>
      <input style="width 20px; height: 20px;" type="image" src="{{ asset('/storage/profile-photos/edit.png') }}" alt=""  data-bs-toggle="modal" data-bs-target="#exampleModal1">
          <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
              <div class="modal-dialog" role="document">
                  <div class="modal-content">
                      <div class="modal-header" Style="background-color: black;color: white;">
                          <h3 class="modal-title" id="exampleModalLabel1">แก้ไขวันหมดอายุ</h3>
                          <button type="button" class="close" data-bs-dismiss="modal" aria-bs-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                      <form method="post" action="/">
                      @csrf
                      <input type="hidden" name="id" value="">
                      <div class="modal-body">
                          
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-bs-dismiss="modal" Style="background: #F31D1D;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);border-radius: 10px;transform: matrix(1, 0, 0, 1, 0, 0);color:white">ยกเลิก</button>
                          <button type="submit" class="btn btn-suscess" Style="background: #20CB6F;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);border-radius: 10px;transform: matrix(1, 0, 0, 1, 0, 0);color:white">ลบสินค้า</button>
                      </div>
                      </form>
                  </div>
              </div>
          </div>
          <input style="width 20px; height: 20px;" type="image" src="{{ asset('/storage/profile-photos/delete.png') }}" alt=""  data-bs-toggle="modal" data-bs-target="#exampleModal2">
          <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
              <div class="modal-dialog" role="document">
                  <div class="modal-content">
                      <div class="modal-header" Style="background-color: black;color: white;">
                          <h3 class="modal-title" id="exampleModalLabel2">แก้ไขวันหมดอายุ</h3>
                          <button type="button" class="close" data-bs-dismiss="modal" aria-bs-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                      <form method="post" action="/">
                      @csrf
                      <input type="hidden" name="id" value="">
                      <div class="modal-body">
                          
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-bs-dismiss="modal" Style="background: #F31D1D;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);border-radius: 10px;transform: matrix(1, 0, 0, 1, 0, 0);color:white">ยกเลิก</button>
                          <button type="submit" class="btn btn-suscess" Style="background: #20CB6F;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);border-radius: 10px;transform: matrix(1, 0, 0, 1, 0, 0);color:white">ลบสินค้า</button>
                      </div>
                      </form>
                  </div>
              </div>
          </div>
    </h2>
    <br>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <table id = "product_table" class="table table-striped table-hover" >
                    <thead class = "text-center">
                        <tr>
                            
                        <th>รูปสินค้า</th>
                            <th>รหัสสินค้า</th>
                            <th>ชื่อสินค้า</th>
                            <th>ประเภทสินค้า</th>
                            <th>วันเข้าสินค้า</th>
                            <th>จำนวนสินค้า</th>
                            <th>ราคาต้นทุน</th>
                        </tr>
                            
                    </thead>
                
                    <tbody class = "text-center">
                        <td>-</td>
                        <td>{{$shelf->product_id}}</td>
                        <td>{{$shelf->product_name}}</td>
                        <td>{{$shelf->product_type}}</td>
                        <td>{{$shelf->product_import_date}}</td>
                        <td>{{$shelf->product_value}}</td>
                        <td>{{$shelf->product_cost_price}}</td>
                        
                        
                        
                        
                    </tbody>
                    
                </table>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        ชั้นที่ 3
        <!-- &nbsp; &nbsp; &nbsp;  <a href="#">View </a>
        &nbsp; &nbsp; &nbsp;  <a href="">Edit</a> 
        &nbsp; &nbsp; &nbsp;  <a href="">Delete</a> -->
      </button>
      <br>
      <input style="width 20px; height: 20px;" type="image" src="{{ asset('/storage/profile-photos/edit.png') }}" alt=""  data-bs-toggle="modal" data-bs-target="#exampleModal3">
          <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
              <div class="modal-dialog" role="document">
                  <div class="modal-content">
                      <div class="modal-header" Style="background-color: black;color: white;">
                          <h3 class="modal-title" id="exampleModalLabel3">แก้ไขวันหมดอายุ</h3>
                          <button type="button" class="close" data-bs-dismiss="modal" aria-bs-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                      <form method="post" action="/">
                      @csrf
                      <input type="hidden" name="id" value="">
                      <div class="modal-body">
                          
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-bs-dismiss="modal" Style="background: #F31D1D;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);border-radius: 10px;transform: matrix(1, 0, 0, 1, 0, 0);color:white">ยกเลิก</button>
                          <button type="submit" class="btn btn-suscess" Style="background: #20CB6F;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);border-radius: 10px;transform: matrix(1, 0, 0, 1, 0, 0);color:white">ลบสินค้า</button>
                      </div>
                      </form>
                  </div>
              </div>
          </div>
          <input style="width 20px; height: 20px;" type="image" src="{{ asset('/storage/profile-photos/delete.png') }}" alt=""  data-bs-toggle="modal" data-bs-target="#exampleModal4">
          <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel4" aria-hidden="true">
              <div class="modal-dialog" role="document">
                  <div class="modal-content">
                      <div class="modal-header" Style="background-color: black;color: white;">
                          <h3 class="modal-title" id="exampleModalLabel4">แก้ไขวันหมดอายุ</h3>
                          <button type="button" class="close" data-bs-dismiss="modal" aria-bs-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                      <form method="post" action="/">
                      @csrf
                      <input type="hidden" name="id" value="">
                      <div class="modal-body">
                          
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-bs-dismiss="modal" Style="background: #F31D1D;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);border-radius: 10px;transform: matrix(1, 0, 0, 1, 0, 0);color:white">ยกเลิก</button>
                          <button type="submit" class="btn btn-suscess" Style="background: #20CB6F;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);border-radius: 10px;transform: matrix(1, 0, 0, 1, 0, 0);color:white">ลบสินค้า</button>
                      </div>
                      </form>
                  </div>
              </div>
          </div>
    </h2>
    <br>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <table id = "product_table" class="table table-striped table-hover" >
                    <thead class = "text-center">
                        <tr>
                            
                            <th>รูปสินค้า</th>
                            <th>รหัสสินค้า</th>
                            <th>ชื่อสินค้า</th>
                            <th>ประเภทสินค้า</th>
                            <th>วันเข้าสินค้า</th>
                            <th>จำนวนสินค้า</th>
                            <th>ราคาต้นทุน</th>
                        </tr>
                            
                    </thead>
                
                    <tbody class = "text-center">
                       
                        <td>-</td>
                        <td>{{$shelf->product_id}}</td>
                        <td>{{$shelf->product_name}}</td>
                        <td>{{$shelf->product_type}}</td>
                        <td>{{$shelf->product_import_date}}</td>
                        <td>{{$shelf->product_value}}</td>
                        <td>{{$shelf->product_cost_price}}</td>
                        
                        
                        
                        
                    </tbody>
                    
                </table>
      </div>
    </div>
  </div>
</div>
<div class="accordion-item">
    <h2 class="accordion-header" id="headingFour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
        ชั้นที่ 4
        <!-- &nbsp; &nbsp; &nbsp;  <a href="#">View </a>
        &nbsp; &nbsp; &nbsp;  <a href="">Edit</a> 
        &nbsp; &nbsp; &nbsp;  <a href="">Delete</a> -->
      </button>
      <br>
      <input style="width 20px; height: 20px;" type="image" src="{{ asset('/storage/profile-photos/edit.png') }}" alt=""  data-bs-toggle="modal" data-bs-target="#exampleModal5">
          <div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel5" aria-hidden="true">
              <div class="modal-dialog" role="document">
                  <div class="modal-content">
                      <div class="modal-header" Style="background-color: black;color: white;">
                          <h3 class="modal-title" id="exampleModalLabel5">แก้ไขวันหมดอายุ</h3>
                          <button type="button" class="close" data-bs-dismiss="modal" aria-bs-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                      <form method="post" action="/">
                      @csrf
                      <input type="hidden" name="id" value="">
                      <div class="modal-body">
                          
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-bs-dismiss="modal" Style="background: #F31D1D;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);border-radius: 10px;transform: matrix(1, 0, 0, 1, 0, 0);color:white">ยกเลิก</button>
                          <button type="submit" class="btn btn-suscess" Style="background: #20CB6F;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);border-radius: 10px;transform: matrix(1, 0, 0, 1, 0, 0);color:white">ลบสินค้า</button>
                      </div>
                      </form>
                  </div>
              </div>
          </div>
          <input style="width 20px; height: 20px;" type="image" src="{{ asset('/storage/profile-photos/delete.png') }}" alt=""  data-bs-toggle="modal" data-bs-target="#exampleModal6">
          <div class="modal fade" id="exampleModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel6" aria-hidden="true">
              <div class="modal-dialog" role="document">
                  <div class="modal-content">
                      <div class="modal-header" Style="background-color: black;color: white;">
                          <h3 class="modal-title" id="exampleModalLabel6">แก้ไขวันหมดอายุ</h3>
                          <button type="button" class="close" data-bs-dismiss="modal" aria-bs-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                      <form method="post" action="/">
                      @csrf
                      <input type="hidden" name="id" value="">
                      <div class="modal-body">
                          
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-bs-dismiss="modal" Style="background: #F31D1D;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);border-radius: 10px;transform: matrix(1, 0, 0, 1, 0, 0);color:white">ยกเลิก</button>
                          <button type="submit" class="btn btn-suscess" Style="background: #20CB6F;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);border-radius: 10px;transform: matrix(1, 0, 0, 1, 0, 0);color:white">ลบสินค้า</button>
                      </div>
                      </form>
                  </div>
              </div>
          </div>
    </h2>
    <br>
    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <table id = "product_table" class="table table-striped table-hover" >
                    <thead class = "text-center">
                        <tr>
                            
                            <th>รูปสินค้า</th>
                            <th>รหัสสินค้า</th>
                            <th>ชื่อสินค้า</th>
                            <th>ประเภทสินค้า</th>
                            <th>วันเข้าสินค้า</th>
                            <th>จำนวนสินค้า</th>
                            <th>ราคาต้นทุน</th>
                        </tr>
                            
                    </thead>
                
                    <tbody class = "text-center">
                       
                        <td>-</td>
                        <td>{{$shelf->product_id}}</td>
                        <td>{{$shelf->product_name}}</td>
                        <td>{{$shelf->product_type}}</td>
                        <td>{{$shelf->product_import_date}}</td>
                        <td>{{$shelf->product_value}}</td>
                        <td>{{$shelf->product_cost_price}}</td>
                        
                        
                        
                        
                    </tbody>
                    
                </table>
      </div>
    </div>
  </div>
</div>
<br><br><br>
  <div class = "row" >
          <div class = "col" style = "text-align : end;">
              <a href="/shelf"><button type="submit" class="btn btn-secondary"  >ย้อนกลับ</button> </a>
          </div>
  </div>
            

@endsection

                <!-- <div class="modal-header" style="background-color: #1E272E"  >
                    <h5 style = "color:white">เพิ่มข้อมูลสินค้า</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" style="background-color:red;" aria-label="Close"></button>
                </div>
                 <div class="modal-body">
                    <div class="card" style="width: 38rem; margin-left:5px;">
                        <div class="card-body">
                            <div class = "row" >
                                <div class = "col-5" style="margin-left:-42px">
                                    <h7>รหัสสินค้าหรือชื่อสินค้า</h7> 
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
                </div> -->

