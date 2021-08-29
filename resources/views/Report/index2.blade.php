@extends('Report.layout')
@section('content')

<div class="container">
<!-- variable count of table  -->
<div style="display:none;">{{ $count1 = 1 }}</div>
    <div style="display:none;">{{ $count2 = 1 }}</div>
    <div style="display:none;">{{ $count3 = 1 }}</div>
    <div class="cod-md-offset-2 col-12"> 
        <br>
        <div class="row">
            <h1>รายการสินค้าที่ใกล้หมดอายุ</h1>
        </div>

        <!-- success message -->
        @if(Session::has('success'))
            <div class="alert alert-success">
                <strong>สำเร็จ :</strong> {{ Session::get('success')}}
            </div>
        @endif

        <!-- quantity message -->
        @if(Session::has('quantity'))
            <div class="alert alert-danger">
                <strong>ผิดพลาด :</strong> {{ Session::get('quantity')}}
            </div>
        @endif

        <br>
        
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-toggle="collapse" data-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        พรุ่งนี้
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                    
                    <!-- Table Expiring Tomorrow -->
                    @if(count((array)$storedTasks) > 0)
                        <table class="table">
                            <thead>
                                <th>ลำดับ</th>
                                <th>รูปสินค้า</th>
                                <th>รหัสสินค้า</th>
                                <th>ชื่อสินค้า</th>
                                <th>บริษัท</th>
                                <th>ประเภทสินค้า</th>
                                <th>ตำแหน่งจัดเก็บ</th>
                                <th>วันหมดอายุ</th>
                                <th>จำนวน</th>
                                <th> </th>
                                <th> </th>
                            </thead>
                            <tbody>
                                @foreach ($storedTasks as $storedTask)
                                    <tr>
                                        <th>{{ $count1++ }}</th>
                                        <td><img width="50" height="50" src="{{ asset('storage/profile-photos/'.$storedTask->product->img) }}" alt=""></td>
                                        <td>{{ $storedTask->product->id_product}}</td>
                                        <td>{{ $storedTask->name}}</td>
                                        <td>{{ $storedTask->product->company}}</td>
                                        <td>{{ $storedTask->product->type}}</td>
                                        <td>{{ $storedTask->product->position}}</td>
                                        <td>{{ $storedTask->product->date_EXP}}</td>
                                        <td>{{ $storedTask->quantity}}</td>
                                        <td>
                                            <!-- edit button  -->
                                            <input style="width 20px; height: 20px;" type="image" src="{{ asset('/edit.png') }}" alt=""  data-toggle="modal" data-target="#exampleModal-{{ $storedTask->id }}">
                                            <div class="modal fade" id="exampleModal-{{ $storedTask->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-{{ $storedTask->id }}" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" Style="background-color: black;color: white;">
                                                            <h3 class="modal-title" id="exampleModalLabel-{{ $storedTask->id }}">แก้ไขวันหมดอายุ</h3>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" Style="color:white;">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form method="post" action="/expiring">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{ $storedTask->id }}">
                                                        <div class="modal-body">
                                                            <div class="modal-title">
                                                                <h4>รายละเอียด</h4>
                                                            </div>
                                                            <div class="row col-12">
                                                                <div class="col-5">
                                                                    <h5>รหัสสินค้า </h5>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h5> {{ $storedTask->product->id_product }} </h5>
                                                                </div>
                                                            </div>
                                                            <div class="row col-12">
                                                                <div class="col-5">
                                                                    <h5>ชื่อสินค้า </h5>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h5> {{ $storedTask->name}} </h5>
                                                                </div>
                                                            </div>
                                                            <div class="row col-12">
                                                                <div class="col-5">
                                                                    <h5>บริษัท </h5>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h5> {{ $storedTask->product->company}} </h5>
                                                                </div>
                                                            </div>
                                                            <div class="row col-12">
                                                                <div class="col-5">
                                                                    <h5>ประเภทสินค้า </h5>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h5> {{ $storedTask->product->type}} </h5>
                                                                </div>
                                                            </div>
                                                            <div class="row col-12">
                                                                <div class="col-5">
                                                                    <h5>ตำแหน่งจัดเก็บ </h5>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h5> {{ $storedTask->product->position}} </h5>
                                                                </div>
                                                            </div>
                                                            <div class="row col-12">
                                                                <div class="col-5">
                                                                    <h5>วันหมดอายุ </h5>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h5> {{ $storedTask->product->date_EXP}} </h5>
                                                                </div>
                                                            </div>
                                                            <div class="row col-12">
                                                                <div class="col-5">
                                                                    <h5>จำนวน </h5>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h5> {{ $storedTask->quantity}} </h5>
                                                                </div>
                                                            </div>
                                                            <div class="row col-12">
                                                                <div class="col-5">
                                                                    <h5>วันหมดอายุใหม่</h5>
                                                                </div>
                                                                <div class="col-7">
                                                                    <input type="date" class='form-control' name="newDate" required>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="row col-12">
                                                                <div class="col-5">
                                                                    <h5>จำนวนที่แก้ไข </h5>
                                                                </div>
                                                                <div class="col-7">
                                                                    <input type="text" class='form-control'  name="quantityItemOut" required>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="row col-12">
                                                                <div class="col-5">
                                                                    <h5>ผู้แก้ไข </h5>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h5>  </h5>
                                                                </div>
                                                            </div>
                                                            <div class="row col-12">
                                                                <div class="col-5">
                                                                    <h5>วันที่แก้ไข </h5>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h5>
                                                                        <p><span id="datetime-{{ $storedTask->id }}"></span> น. </p>
                                                                        <script>
                                                                            var dt = new Date(); document.getElementById("datetime-{{ $storedTask->id }}").innerHTML = (("0"+dt.getDate()).slice(-2)) +"/"+ (("0"+(dt.getMonth()+1)).slice(-2)) +"/"+ (dt.getFullYear()) +" "+ (("0"+dt.getHours()).slice(-2)) +":"+ (("0"+dt.getMinutes()).slice(-2));
                                                                        </script>
                                                                    </h5>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="row col-12">
                                                                <div class="col-5">
                                                                    <h5>หมายเหตุ </h5>
                                                                </div>
                                                                <div class="col-7">
                                                                    <input type="text" class='form-control'  name='comment'>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal" Style="background: #F31D1D;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);border-radius: 10px;transform: matrix(1, 0, 0, 1, 0, 0);color:white">ยกเลิก</button>
                                                            <button type="submit" class="btn btn-suscess" Style="background: #20CB6F;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);border-radius: 10px;transform: matrix(1, 0, 0, 1, 0, 0);color:white">แก้ไขสินค้า</button>
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                         </td>
                                        <td>
                                            <!-- delete button -->
                                            <input style="width 20px; height: 20px;" type="image" src="{{ asset('/delete.png') }}" alt=""  data-toggle="modal" data-target="#exampleModal-delete-{{ $storedTask->id }}">
                                            <div class="modal fade" id="exampleModal-delete-{{ $storedTask->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-delete-{{ $storedTask->id }}" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" Style="background-color: black;color: white;">
                                                            <h3 class="modal-title" id="exampleModalLabel-delete-{{ $storedTask->id }}">นำสินค้าออก</h3>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" Style="color:white;">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form action="/expiring-delete" method="post">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{ $storedTask->id }}">
                                                        <div class="modal-body">
                                                            <div class="modal-title">
                                                                <h4>รายละเอียด</h4>
                                                            </div>
                                                            <div class="row col-12">
                                                                <div class="col-5">
                                                                    <h5>รหัสสินค้า </h5>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h5> {{ $storedTask->product->id_product }} </h5>
                                                                </div>
                                                            </div>
                                                            <div class="row col-12">
                                                                <div class="col-5">
                                                                    <h5>ชื่อสินค้า </h5>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h5> {{ $storedTask->name}} </h5>
                                                                </div>
                                                            </div>
                                                            <div class="row col-12">
                                                                <div class="col-5">
                                                                    <h5>บริษัท </h5>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h5> {{ $storedTask->product->company}} </h5>
                                                                </div>
                                                            </div>
                                                            <div class="row col-12">
                                                                <div class="col-5">
                                                                    <h5>ประเภทสินค้า </h5>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h5> {{ $storedTask->product->type}} </h5>
                                                                </div>
                                                            </div>
                                                            <div class="row col-12">
                                                                <div class="col-5">
                                                                    <h5>ตำแหน่งจัดเก็บ </h5>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h5> {{ $storedTask->product->position}} </h5>
                                                                </div>
                                                            </div>
                                                            <div class="row col-12">
                                                                <div class="col-5">
                                                                    <h5>วันหมดอายุ </h5>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h5> {{ $storedTask->product->date_EXP}} </h5>
                                                                </div>
                                                            </div>
                                                            <div class="row col-12">
                                                                <div class="col-5">
                                                                    <h5>จำนวน </h5>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h5> {{ $storedTask->quantity}} </h5>
                                                                </div>
                                                            </div>
                                                            <div class="row col-12">
                                                                <div class="col-5">
                                                                    <h5>ผู้แก้ไข </h5>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h5>  </h5>
                                                                </div>
                                                            </div>
                                                            <div class="row col-12">
                                                                <div class="col-5">
                                                                    <h5>วันที่นำสินค้าออก </h5>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h5>
                                                                        <p><span id="datetime1-{{ $storedTask->id }}"></span> น.</p>
                                                                        <script>
                                                                            var dt = new Date(); document.getElementById("datetime1-{{ $storedTask->id }}").innerHTML = (("0"+dt.getDate()).slice(-2)) +"/"+ (("0"+(dt.getMonth()+1)).slice(-2)) +"/"+ (dt.getFullYear()) +" "+ (("0"+dt.getHours()).slice(-2)) +":"+ (("0"+dt.getMinutes()).slice(-2));
                                                                        </script>
                                                                    </h5>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="row col-12">
                                                                <div class="col-5">
                                                                    <h5>หมายเหตุ </h5>
                                                                </div>
                                                                <div class="col-7">
                                                                    <input type="text" class='form-control'  name='comment'>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal" Style="background: #F31D1D;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);border-radius: 10px;transform: matrix(1, 0, 0, 1, 0, 0);color:white">ยกเลิก</button>
                                                            <button type="submit" class="btn btn-suscess" Style="background: #20CB6F;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);border-radius: 10px;transform: matrix(1, 0, 0, 1, 0, 0);color:white">แก้ไขสินค้า</button>
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-toggle="collapse" data-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        สัปดาห์นี้
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">

                    <!-- Table Expiring week -->
                    @if(count((array)$storedTasks2) > 0)
                        <table class="table">
                            <thead>
                                <th>ลำดับ</th>
                                <th>รูปสินค้า</th>
                                <th>รหัสสินค้า</th>
                                <th>ชื่อสินค้า</th>
                                <th>บริษัท</th>
                                <th>ประเภทสินค้า</th>
                                <th>ตำแหน่งจัดเก็บ</th>
                                <th>วันหมดอายุ</th>
                                <th>จำนวน</th>
                                <th> </th>
                                <th> </th>
                            </thead>
                            <tbody>
                                @foreach ($storedTasks2 as $storedTask)
                                    <tr>
                                        <th>{{ $count2++ }}</th>
                                        <td>
                                        <img width="50" height="50" src="{{ asset('storage/profile-photos/'.$storedTask->product->img) }}" alt="">
                                        </td>
                                        <td>{{ $storedTask->product->id_product }}</td>
                                        <td> {{ $storedTask->product->name}} </td>
                                        <td> {{ $storedTask->product->company}}</td>
                                        <td>{{ $storedTask->product->type}}</td>
                                        <td>{{ $storedTask->product->position }}</td>
                                        <td>{{ $storedTask->date_EXP}}</td>
                                        <td>{{ $storedTask->quantity}}</td>
                                        <td>
                                            <!-- edit button  -->
                                            <input style="width 20px; height: 20px;" type="image" src="{{ asset('/edit.png') }}" alt=""  data-toggle="modal" data-target="#exampleModal3-{{ $storedTask->id }}">
                                            <div class="modal fade" id="exampleModal3-{{ $storedTask->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3-{{ $storedTask->id }}" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" Style="background-color: black;color: white;">
                                                            <h3 class="modal-title" id="exampleModalLabel3-{{ $storedTask->id }}">แก้ไขวันหมดอายุ</h3>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" Style="color:white;">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form method="post" action="/expiring">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{ $storedTask->id }}">
                                                        <div class="modal-body">
                                                            <div class="modal-title">
                                                                <h4>รายละเอียด</h4>
                                                            </div>
                                                            <div class="row col-12">
                                                                <div class="col-5">
                                                                    <h5>รหัสสินค้า </h5>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h5> {{ $storedTask->product->id_product }} </h5>
                                                                </div>
                                                            </div>
                                                            <div class="row col-12">
                                                                <div class="col-5">
                                                                    <h5>ชื่อสินค้า </h5>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h5> {{ $storedTask->product->name}} </h5>
                                                                </div>
                                                            </div>
                                                            <div class="row col-12">
                                                                <div class="col-5">
                                                                    <h5>บริษัท </h5>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h5> {{ $storedTask->company}} </h5>
                                                                </div>
                                                            </div>
                                                            <div class="row col-12">
                                                                <div class="col-5">
                                                                    <h5>ประเภทสินค้า </h5>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h5> {{ $storedTask->product->type}} </h5>
                                                                </div>
                                                            </div>
                                                            <div class="row col-12">
                                                                <div class="col-5">
                                                                    <h5>ตำแหน่งจัดเก็บ </h5>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h5> {{ $storedTask->product->position}} </h5>
                                                                </div>
                                                            </div>
                                                            <div class="row col-12">
                                                                <div class="col-5">
                                                                    <h5>วันหมดอายุ </h5>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h5> {{ $storedTask->product->date_EXP}} </h5>
                                                                </div>
                                                            </div>
                                                            <div class="row col-12">
                                                                <div class="col-5">
                                                                    <h5>จำนวน </h5>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h5> {{ $storedTask->quantity}} </h5>
                                                                </div>
                                                            </div>
                                                            <div class="row col-12">
                                                                <div class="col-5">
                                                                    <h5>วันหมดอายุใหม่</h5>
                                                                </div>
                                                                <div class="col-7">
                                                                    <input type="date" class='form-control' name="newDate" required>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="row col-12">
                                                                <div class="col-5">
                                                                    <h5>จำนวนที่แก้ไข </h5>
                                                                </div>
                                                                <div class="col-7">
                                                                    <input type="text" class='form-control'  name="quantityItemOut" required>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="row col-12">
                                                                <div class="col-5">
                                                                    <h5>ผู้แก้ไข </h5>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h5>  </h5>
                                                                </div>
                                                            </div>
                                                            <div class="row col-12">
                                                                <div class="col-5">
                                                                    <h5>วันที่แก้ไข </h5>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h5>
                                                                        <p><span id="datetime2-{{ $storedTask->id }}"></span> น. </p>
                                                                        <script>
                                                                            var dt = new Date(); document.getElementById("datetime2-{{ $storedTask->id }}").innerHTML = (("0"+dt.getDate()).slice(-2)) +"/"+ (("0"+(dt.getMonth()+1)).slice(-2)) +"/"+ (dt.getFullYear()) +" "+ (("0"+dt.getHours()).slice(-2)) +":"+ (("0"+dt.getMinutes()).slice(-2));
                                                                        </script>
                                                                    </h5>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="row col-12">
                                                                <div class="col-5">
                                                                    <h5>หมายเหตุ </h5>
                                                                </div>
                                                                <div class="col-7">
                                                                    <input type="text" class='form-control'  name='comment'>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal" Style="background: #F31D1D;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);border-radius: 10px;transform: matrix(1, 0, 0, 1, 0, 0);color:white">ยกเลิก</button>
                                                            <button type="submit" class="btn btn-suscess" Style="background: #20CB6F;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);border-radius: 10px;transform: matrix(1, 0, 0, 1, 0, 0);color:white">แก้ไขสินค้า</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                         </td>
                                        <td>
                                            <!-- delete button -->
                                            <input style="width 20px; height: 20px;" type="image" src="{{ asset('/delete.png') }}" alt=""  data-toggle="modal" data-target="#exampleModal4-{{ $storedTask->id }}">
                                            <div class="modal fade" id="exampleModal4-{{ $storedTask->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel4-{{ $storedTask->id }}" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" Style="background-color: black;color: white;">
                                                            <h3 class="modal-title" id="exampleModalLabel4-{{ $storedTask->id }}">นำสินค้าออก</h3>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" Style="color:white;">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form action="/expiring-delete" method="post">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{ $storedTask->id }}">
                                                        <div class="modal-body">
                                                            <div class="modal-title">
                                                                <h4>รายละเอียด</h4>
                                                            </div>
                                                            <div class="row col-12">
                                                                <div class="col-5">
                                                                    <h5>รหัสสินค้า </h5>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h5> {{ $storedTask->product->id_product }} </h5>
                                                                </div>
                                                            </div>
                                                            <div class="row col-12">
                                                                <div class="col-5">
                                                                    <h5>ชื่อสินค้า </h5>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h5> {{ $storedTask->name}} </h5>
                                                                </div>
                                                            </div>
                                                            <div class="row col-12">
                                                                <div class="col-5">
                                                                    <h5>บริษัท </h5>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h5> {{ $storedTask->company}} </h5>
                                                                </div>
                                                            </div>
                                                            <div class="row col-12">
                                                                <div class="col-5">
                                                                    <h5>ประเภทสินค้า </h5>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h5> {{ $storedTask->product->type}} </h5>
                                                                </div>
                                                            </div>
                                                            <div class="row col-12">
                                                                <div class="col-5">
                                                                    <h5>ตำแหน่งจัดเก็บ </h5>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h5> {{ $storedTask->product->position}} </h5>
                                                                </div>
                                                            </div>
                                                            <div class="row col-12">
                                                                <div class="col-5">
                                                                    <h5>วันหมดอายุ </h5>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h5> {{ $storedTask->product->date_EXP}} </h5>
                                                                </div>
                                                            </div>
                                                            <div class="row col-12">
                                                                <div class="col-5">
                                                                    <h5>จำนวน </h5>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h5> {{ $storedTask->quantity}} </h5>
                                                                </div>
                                                            </div>
                                                            <div class="row col-12">
                                                                <div class="col-5">
                                                                    <h5>ผู้แก้ไข </h5>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h5>  </h5>
                                                                </div>
                                                            </div>
                                                            <div class="row col-12">
                                                                <div class="col-5">
                                                                    <h5>วันที่นำสินค้าออก </h5>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h5>
                                                                        <p><span id="datetime3-{{ $storedTask->id }}"></span> น.</p>
                                                                        <script>
                                                                            var dt = new Date(); document.getElementById("datetime3-{{ $storedTask->id }}").innerHTML = (("0"+dt.getDate()).slice(-2)) +"/"+ (("0"+(dt.getMonth()+1)).slice(-2)) +"/"+ (dt.getFullYear()) +" "+ (("0"+dt.getHours()).slice(-2)) +":"+ (("0"+dt.getMinutes()).slice(-2));
                                                                        </script>
                                                                    </h5>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="row col-12">
                                                                <div class="col-5">
                                                                    <h5>หมายเหตุ </h5>
                                                                </div>
                                                                <div class="col-7">
                                                                    <input type="text" class='form-control'  name='comment'>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal" Style="background: #F31D1D;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);border-radius: 10px;transform: matrix(1, 0, 0, 1, 0, 0);color:white">ยกเลิก</button>
                                                            <button type="submit" class="btn btn-suscess" Style="background: #20CB6F;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);border-radius: 10px;transform: matrix(1, 0, 0, 1, 0, 0);color:white">ลบสินค้า</button>
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-toggle="collapse" data-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        เดือนนี้
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                    
                    <!-- Table Expiring month -->
                    @if(count((array)$storedTasks) > 0)
                        <table class="table">
                            <thead>
                                <th>ลำดับ</th>
                                <th>รูปสินค้า</th>
                                <th>รหัสสินค้า</th>
                                <th>ชื่อสินค้า</th>
                                <th>บริษัท</th>
                                <th>ประเภทสินค้า</th>
                                <th>ตำแหน่งจัดเก็บ</th>
                                <th>วันหมดอายุ</th>
                                <th>จำนวน</th>
                                <th> </th>
                                <th> </th>
                            </thead>
                            <tbody>
                                @foreach ($storedTasks3 as $storedTask)
                                    <tr>
                                        <th>{{ $count3++ }}</th>
                                        <td><img width="50" height="50" src="{{ asset('storage/profile-photos/'.$storedTask->product->img) }}" alt=""></td>
                                        <td>{{ $storedTask->product->id_product}}</td>
                                        <td>{{ $storedTask->name}}</td>
                                        <td>{{ $storedTask->company}}</td>
                                        <td>{{ $storedTask->product->type}}</td>
                                        <td>{{ $storedTask->product->position}}</td>
                                        <td>{{ $storedTask->product->date_EXP}}</td>
                                        <td>{{ $storedTask->quantity}}</td>
                                        <td>
                                            <!-- edit button  -->
                                            <input style="width 20px; height: 20px;" type="image" src="{{ asset('/edit.png') }}" alt=""  data-toggle="modal" data-target="#exampleModal5-{{ $storedTask->id }}">
                                            <div class="modal fade" id="exampleModal5-{{ $storedTask->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel5-{{ $storedTask->id }}" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" Style="background-color: black;color: white;">
                                                            <h3 class="modal-title" id="exampleModalLabel5-{{ $storedTask->id }}">แก้ไขวันหมดอายุ</h3>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" Style="color:white;">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form method="post" action="/expiring">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{ $storedTask->id }}">
                                                        <div class="modal-body">
                                                            <div class="modal-title">
                                                                <h4>รายละเอียด</h4>
                                                            </div>
                                                            <div class="row col-12">
                                                                <div class="col-5">
                                                                    <h5>รหัสสินค้า </h5>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h5> {{ $storedTask->product->id_product }} </h5>
                                                                </div>
                                                            </div>
                                                            <div class="row col-12">
                                                                <div class="col-5">
                                                                    <h5>ชื่อสินค้า </h5>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h5> {{ $storedTask->name}} </h5>
                                                                </div>
                                                            </div>
                                                            <div class="row col-12">
                                                                <div class="col-5">
                                                                    <h5>บริษัท </h5>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h5> {{ $storedTask->company}} </h5>
                                                                </div>
                                                            </div>
                                                            <div class="row col-12">
                                                                <div class="col-5">
                                                                    <h5>ประเภทสินค้า </h5>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h5> {{ $storedTask->product->type}} </h5>
                                                                </div>
                                                            </div>
                                                            <div class="row col-12">
                                                                <div class="col-5">
                                                                    <h5>ตำแหน่งจัดเก็บ </h5>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h5> {{ $storedTask->product->position}} </h5>
                                                                </div>
                                                            </div>
                                                            <div class="row col-12">
                                                                <div class="col-5">
                                                                    <h5>วันหมดอายุ </h5>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h5> {{ $storedTask->product->date_EXP}} </h5>
                                                                </div>
                                                            </div>
                                                            <div class="row col-12">
                                                                <div class="col-5">
                                                                    <h5>จำนวน </h5>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h5> {{ $storedTask->quantity}} </h5>
                                                                </div>
                                                            </div>
                                                            <div class="row col-12">
                                                                <div class="col-5">
                                                                    <h5>วันหมดอายุใหม่</h5>
                                                                </div>
                                                                <div class="col-7">
                                                                    <input type="date" class='form-control' name="newDate" required>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="row col-12">
                                                                <div class="col-5">
                                                                    <h5>จำนวนที่แก้ไข </h5>
                                                                </div>
                                                                <div class="col-7">
                                                                    <input type="text" class='form-control'  name="quantityItemOut" required>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="row col-12">
                                                                <div class="col-5">
                                                                    <h5>ผู้แก้ไข </h5>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h5>  </h5>
                                                                </div>
                                                            </div>
                                                            <div class="row col-12">
                                                                <div class="col-5">
                                                                    <h5>วันที่แก้ไข </h5>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h5>
                                                                        <p><span id="datetime4-{{ $storedTask->id }}"></span> น. </p>
                                                                        <script>
                                                                            var dt = new Date(); document.getElementById("datetime4-{{ $storedTask->id }}").innerHTML = (("0"+dt.getDate()).slice(-2)) +"/"+ (("0"+(dt.getMonth()+1)).slice(-2)) +"/"+ (dt.getFullYear()) +" "+ (("0"+dt.getHours()).slice(-2)) +":"+ (("0"+dt.getMinutes()).slice(-2));
                                                                        </script>
                                                                    </h5>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="row col-12">
                                                                <div class="col-5">
                                                                    <h5>หมายเหตุ </h5>
                                                                </div>
                                                                <div class="col-7">
                                                                    <input type="text" class='form-control'  name='comment'>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal" Style="background: #F31D1D;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);border-radius: 10px;transform: matrix(1, 0, 0, 1, 0, 0);color:white">ยกเลิก</button>
                                                            <button type="submit" class="btn btn-suscess" Style="background: #20CB6F;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);border-radius: 10px;transform: matrix(1, 0, 0, 1, 0, 0);color:white">แก้ไขสินค้า</button>
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                         </td>
                                        <td>
                                            <!-- delete button -->
                                            <input style="width 20px; height: 20px;" type="image" src="{{ asset('/delete.png') }}" alt=""  data-toggle="modal" data-target="#exampleModal6-{{ $storedTask->id }}">
                                            <div class="modal fade" id="exampleModal6-{{ $storedTask->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel6-{{ $storedTask->id }}" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" Style="background-color: black;color: white;">
                                                            <h3 class="modal-title" id="exampleModalLabel6-{{ $storedTask->id }}">นำสินค้าออก</h3>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" Style="color:white;">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form action="/expiring-delete" method="post">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{ $storedTask->id }}">
                                                        <div class="modal-body">
                                                            <div class="modal-title">
                                                                <h4>รายละเอียด</h4>
                                                            </div>
                                                            <div class="row col-12">
                                                                <div class="col-5">
                                                                    <h5>รหัสสินค้า </h5>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h5> {{ $storedTask->product->id_product }} </h5>
                                                                </div>
                                                            </div>
                                                            <div class="row col-12">
                                                                <div class="col-5">
                                                                    <h5>ชื่อสินค้า </h5>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h5> {{ $storedTask->name}} </h5>
                                                                </div>
                                                            </div>
                                                            <div class="row col-12">
                                                                <div class="col-5">
                                                                    <h5>บริษัท </h5>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h5> {{ $storedTask->product->company}} </h5>
                                                                </div>
                                                            </div>
                                                            <div class="row col-12">
                                                                <div class="col-5">
                                                                    <h5>ประเภทสินค้า </h5>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h5> {{ $storedTask->product->type}} </h5>
                                                                </div>
                                                            </div>
                                                            <div class="row col-12">
                                                                <div class="col-5">
                                                                    <h5>ตำแหน่งจัดเก็บ </h5>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h5> {{ $storedTask->product->position}} </h5>
                                                                </div>
                                                            </div>
                                                            <div class="row col-12">
                                                                <div class="col-5">
                                                                    <h5>วันหมดอายุ </h5>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h5> {{ $storedTask->product->date_EXP}} </h5>
                                                                </div>
                                                            </div>
                                                            <div class="row col-12">
                                                                <div class="col-5">
                                                                    <h5>จำนวน </h5>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h5> {{ $storedTask->quantity}} </h5>
                                                                </div>
                                                            </div>
                                                            <div class="row col-12">
                                                                <div class="col-5">
                                                                    <h5>ผู้แก้ไข </h5>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h5>  </h5>
                                                                </div>
                                                            </div>
                                                            <div class="row col-12">
                                                                <div class="col-5">
                                                                    <h5>วันที่นำสินค้าออก </h5>
                                                                </div>
                                                                <div class="col-7">
                                                                    <h5>
                                                                        <p><span id="datetime5-{{ $storedTask->id }}"></span> น.</p>
                                                                        <script>
                                                                            var dt = new Date(); document.getElementById("datetime5-{{ $storedTask->id }}").innerHTML = (("0"+dt.getDate()).slice(-2)) +"/"+ (("0"+(dt.getMonth()+1)).slice(-2)) +"/"+ (dt.getFullYear()) +" "+ (("0"+dt.getHours()).slice(-2)) +":"+ (("0"+dt.getMinutes()).slice(-2));
                                                                        </script>
                                                                    </h5>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="row col-12">
                                                                <div class="col-5">
                                                                    <h5>หมายเหตุ </h5>
                                                                </div>
                                                                <div class="col-7">
                                                                    <input type="text" class='form-control'  name='comment'>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal" Style="background: #F31D1D;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);border-radius: 10px;transform: matrix(1, 0, 0, 1, 0, 0);color:white">ยกเลิก</button>
                                                            <button type="submit" class="btn btn-suscess" Style="background: #20CB6F;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);border-radius: 10px;transform: matrix(1, 0, 0, 1, 0, 0);color:white">ลบสินค้า</button>
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
