@extends('navbar')

@section('content')
    

<body>
<div style="display:none;">{{ $count = 1 }}</div>
<div class="container">
    <div class="cod-md-offset-2 col-12"> 
        <br>
        <div class="row">
            <h1>สินค้าที่หมดอายุ</h1>
        </div>

        <!-- Search -->
        <div class="row" style='margin-top: 10px; margin-bottom: 10px;'>
            <form action="/search" method='POST' class="row col-md-12">
            @csrf
                <div class="col-md-4">
                    <input type="text" class='form-control' placeholder='รหัสสินค้า' name='find_word'>
                </div>
                <div class="col-md-2">
                    <input type="submit" class='btn btn-primary btn-block' value='Search'>
                </div>
            </form>
        </div>
        <br>

        <!-- success message -->
        @if(Session::has('success'))
            <div class="alert alert-success">
                <strong>สำเร็จ :</strong> {{ Session::get('success')}}
            </div>
        @endif

        <!-- amount message -->
        @if(Session::has('amount'))
            <div class="alert alert-danger">
                <strong>ผิดพลาด :</strong> {{ Session::get('amount')}}
            </div>
        @endif
 
        <!-- Table Expired -->
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
                            <th>{{ $count++ }}</th>
                            <td><img width="50" height="50" src="{{ asset('storage/profile-photos/'.$storedTask->product->img) }}" alt=""></td>
                            <td>{{ $storedTask->product->id}}</td>
                            <td>{{ $storedTask->product->name}}</td>
                            <td>{{ $storedTask->product->company}}</td>
                            <td>{{ $storedTask->product->type}}</td>
                            <td>{{ $storedTask->product->positon}}</td>
                            <td>{{ $storedTask->date_EXP}}</td>
                            <td>{{ $storedTask->quantity}}</td>
                            <td>
                                <!-- edit button  -->
                                <input style="width 20px; height: 20px;" type="image" src="{{ asset('/edit.png') }}" alt=""  data-toggle="modal" data-target="#exampleModal1-{{ $storedTask->id }}">
                                <div class="modal fade" id="exampleModal1-{{ $storedTask->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1-{{ $storedTask->id }}" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header" Style="background-color: black;color: white;">
                                                <h3 class="modal-title" id="exampleModalLabel1-{{ $storedTask->id }}">แก้ไขวันหมดอายุ</h3>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" Style="color:white;">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form method="post" action="/expire-inventory">
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
                                                        <h5> {{ $storedTask->product_code }} </h5>
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
                                                        <h5> {{ $storedTask->product_type}} </h5>
                                                    </div>
                                                </div>
                                                <div class="row col-12">
                                                    <div class="col-5">
                                                        <h5>ตำแหน่งจัดเก็บ </h5>
                                                    </div>
                                                    <div class="col-7">
                                                        <h5> {{ $storedTask->storage_location}} </h5>
                                                    </div>
                                                </div>
                                                <div class="row col-12">
                                                    <div class="col-5">
                                                        <h5>วันหมดอายุ </h5>
                                                    </div>
                                                    <div class="col-7">
                                                        <h5> {{ $storedTask->expiration_date}} </h5>
                                                    </div>
                                                </div>
                                                <div class="row col-12">
                                                    <div class="col-5">
                                                        <h5>จำนวน </h5>
                                                    </div>
                                                    <div class="col-7">
                                                        <h5> {{ $storedTask->amount}} </h5>
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
                                                        <input type="number" class='form-control'  placeholder="{{ $storedTask->amount}}" name="amountItemOut" required>
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
                                                <button type="submit" class="btn btn-suscess" Style="background: #20CB6F;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);border-radius: 10px;transform: matrix(1, 0, 0, 1, 0, 0);color:white">ลบสินค้า</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <!-- delete button -->
                                <input style="width 20px; height: 20px;" type="image" src="{{ asset('/delete.png') }}" alt=""  data-toggle="modal" data-target="#exampleModal2-{{ $storedTask->id }}">  
                                <div class="modal fade" id="exampleModal2-{{ $storedTask->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2-{{ $storedTask->id }}" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header" Style="background-color: black;color: white;">
                                                <h3 class="modal-title" id="exampleModalLabel2-{{ $storedTask->id }}">นำสินค้าออก</h3>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" Style="color:white;">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="/expire-inventory-delete" method="post">
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
                                                        <h5> {{ $storedTask->product_code }} </h5>
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
                                                        <h5> {{ $storedTask->product_type}} </h5>
                                                    </div>
                                                </div>
                                                <div class="row col-12">
                                                    <div class="col-5">
                                                        <h5>ตำแหน่งจัดเก็บ </h5>
                                                    </div>
                                                    <div class="col-7">
                                                        <h5> {{ $storedTask->storage_location}} </h5>
                                                    </div>
                                                </div>
                                                <div class="row col-12">
                                                    <div class="col-5">
                                                        <h5>วันหมดอายุ </h5>
                                                    </div>
                                                    <div class="col-7">
                                                        <h5> {{ $storedTask->expiration_date}} </h5>
                                                    </div>
                                                </div>
                                                <div class="row col-12">
                                                    <div class="col-5">
                                                        <h5>จำนวน </h5>
                                                    </div>
                                                    <div class="col-7">
                                                        <h5> {{ $storedTask->amount}} </h5>
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
                                                            <p><span id="date-{{ $storedTask->id }}"></span> น.</p>
                                                            <script>
                                                                var dt = new Date(); document.getElementById("date-{{ $storedTask->id }}").innerHTML = (("0"+dt.getDate()).slice(-2)) +"/"+ (("0"+(dt.getMonth()+1)).slice(-2)) +"/"+ (dt.getFullYear()) +" "+ (("0"+dt.getHours()).slice(-2)) +":"+ (("0"+dt.getMinutes()).slice(-2));
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
</body>
</html>
@endsection