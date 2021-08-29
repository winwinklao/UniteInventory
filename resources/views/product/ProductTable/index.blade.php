
@extends("navbar")
<div>
@section('content')
        <div class = "row" style = "margin-top:20px">
            <div class = "col">
                <h2>ตารางสินค้า</h2> 
            </div>
        </div>
    
    <div class = "row" style = "margin-top:30px;"  >
        <div class = "col-md-1"></div>
        <div class = "col-md-1"><h6 style = 'margin-top: 10px;margin-left:10'> ค้นหาสินค้า </h6></div> 
            <div class = "col-md-2">
                <!-- <input type="text" name='name' class='form-control'  placeholder="ค้นหา..." style = "height:30px;"> -->
                
                <form action="/search" method='POST' class="row col-md-12">
                    @csrf
                    <div class="col-md-10">
                        <input type="text" class='form-control' placeholder='รหัสสินค้า' name='find_word'>
                    </div>
                    <div class="col-md-2">
                        <input type="submit" class='btn btn-dark btn-block' value='ค้นหา'>
                    </div>
                </form>
            </div>
        
        <!-- <div class = "col-md-1"><img src="{{ asset('storage/profile-photos/sort.png') }}" alt="..." style="width:25px; height:25px;margin-top:3;margin-left:-12"></div> -->
        <div class = "col-md-1"></div>
        <div class = "col-md-2"><h6 style = 'margin-top: 10px'> มีผลิตภัณฑ์ทั้งหมด : {{$count}}</h6> </div>
        <div class = "col-md-3"></div>
        
        <!-- <div class = "col-md-2">
            <button type="button" class="btn" data-bs-toggle = "modal" style = "background-color: #D2DAE2" data-bs-target="#myModal"><h6><b> + เพิ่มข้อมูลสินค้า </b></h6></button> 
        </div> -->
        @if(Auth::user()->roll === "ผู้จัดการ")
        <div class = "col-2">
            <a  class="btn" href="{{ route('product.create') }}" type="button"style = "background-color: #D2DAE2" role="button" >+ เพิ่มข้อมูลสินค้า </a> 
        </div>
        @endif

    </div>
    
    <!------------------------------- Pop-up add ---------------------------------------->
    <!-- The Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  modal-lg" style = "max-width: 650px!important;">
        <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <!-- Modal body -->
        <form action="{{ url('product')  }}" method="POST">
          {{ csrf_field() }}
          {{ method_field('POST') }}
        <div class="modal-body">
            <h1 style = 'font-size : 200%'><b>เพิ่มข้อมูลสินค้าใหม่</b></h1>
            <div class = "row">
                <div class = "col-md-1"></div>
                <div class = "col-md-2"><h6 style = 'margin-top: 8px'>รูปสินค้า</h6></div>
                <div class = "col-md-3">
                    <input type="file" name="file">
                </div>
                <div class = "col-md-2"><h6 style = 'margin-top: 8px'>ชื่อบริษัท</h6></div>
                <div class = "col-md-3">
                    <input type="text" style="height: 2em" name='company' class='form-control' />
                </div>
            </div>

            <div class = "row">
                <div class = "col-md-1"></div>
                <div class = "col-md-2"><h6 style = 'margin-top: 8px'>รหัสสินค้า</h6></div>
                <div class = "col-md-3"><input type="text" style="height: 2em " name='product_id' class='form-control' /></div>
                <div class = "col-md-2"><h6 style = 'margin-top: 8px'>ประเภทสินค้า</h6></div>
                <div class = "col-md-3">
                    <input type="text" style="height: 2em" name='product_type' value="{{ isset($data->product_type) ?  $data->product_type : '' }}" class='form-control' />
                </div>
                
            </div>

            <div class = "row">
                <div class = "col-md-1"></div>
                <div class = "col-md-2"><h6 style = 'margin-top: 8px'>ชื่อสินค้า</h6></div>
                <div class = "col-md-3"><input type="text"  style="height: 2em"  name='product_name' value="{{ isset($data->product_name) ?  $data->product_name : '' }}" class='form-control' /></div>
                <div class = "col-md-2"><h6 style = 'margin-top: 8px'>พื้นที่จัดเก็บ</h6></div>
                <div class = "col-md-3">
                    <input type="text"  style="height: 2em" name='product_capacity' class='form-control' />
                </div>
            </div>
            <br>
            <div class = "row" >
                <div class = "col" style = "text-align : end;">
                    <button type="submit" class="btn btn-pill btn-dark" style = "border-radius: 100px; " ><h5 ><b> เสร็จสิ้น </b></h5></button> 
                </div>
            </div>
        </div>

        
        </form>
        </div>
    </div>
    </div>


    <br>

    
            <div class="table-responsive">
                <table id = "product_table" class="table table-striped table-hover"style = "margin-top:15px;" >
                    <thead class = "text-center">
                        <tr>
                            <th onclick="sortTable(0)"><b class="bi bi-sort-alpha-down" style="font-size: 16px">ลำดับ</b>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-up" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5zm-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5z"/>
                            </svg></th>
                            <th>รูปสินค้า</th>
                            <th onclick="sortTable(2)"><b class="bi bi-sort-alpha-down" style="font-size: 16px">รหัสสินค้า</b>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-up" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5zm-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5z"/>
                            </svg></th>
                            <th onclick="sortTable(3)"><b class="bi bi-sort-alpha-down" style="font-size: 16px">ชื่อสินค้า</b>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-up" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5zm-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5z"/>
                            </svg></th>
                            <th onclick="sortTable(4)"><b class="bi bi-sort-alpha-down" style="font-size: 16px">บริษัท</b>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-up" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5zm-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5z"/>
                            </svg></th>

                            <th onclick="sortTable(5)"><b class="bi bi-sort-alpha-down" style="font-size: 16px">ประเภทสินค้า</b>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-up" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5zm-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5z"/>
                            </svg></th>
                        
                            <th onclick="sortTable(7)"><b class="bi bi-sort-alpha-down" style="font-size: 16px">กลุ่มสินค้า</b>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-up" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5zm-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5z"/>
                            </svg></th>
                            <th>ตำแหน่งจัดเก็บ</th>
                            <th>สถานะ</th>
                            <th>แก้ไข</th>
                            <th>ลบข้อมูล</th>
                        </tr>
                            
                    </thead>
                
                    <tbody>
                    
                        
                        @foreach ($products as  $value)
                        <tr class = "text-center">
                            <td> {{$products->firstItem()+$loop->index}} </td>
                        
                            <td><img src="{{ asset('storage/profile-photos/'.$value->img) }}" width="50" height="50" alt="" class="d-inline-block align-top"></td>
                            <td>{{ $value->id_product}}</td>
                            <td>{{ $value->name}}</td>
                            <td>{{ $value->company }}</td>
                            <td>{{ $value->type }}</td>
                            <td>{{ $value->group }}</td>
                            <td>{{ $value->position }}</td>
                            <td>status</td>
                            <td>
                                
                                <!-- <img src="{{ asset('storage/profile-photos/edit.png') }}" alt="..."  class = "edit" style="width:25px; height:25px;" data-bs-toggle = "modal" data-id="{{ $value->id }}" data-bs-target="#editModal"> -->
                                <a class="btn" href="{{ route('product.edit', $value->id) }}"> <img src="{{ asset('storage/profile-photos/edit.png') }}" alt="..."  class = "edit" style="width:25px; height:25px;" ></a>
                                
                            
                            </td>
                            <!-- <td>
                                <img src="{{ asset('storage/profile-photos/delete.png') }}" alt="..." style="width:25px; height:25px;" data-bs-toggle = "modal" data-id="{{ $value->id }}" data-bs-target="#deleteModal">
                            </td>  -->
                            <!-- {{ route('product.destroy',$value->id_product) }} -->
                            <!-- <td>
                                    <form action="{{ route('product.destroy',$value->id) }}" method="post"  >
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $value->id }}"> 
                                         {{ csrf_field() }}
                                        {{ method_field('DELETE') }} 
                                         <input type="image"  src="{{ asset('storage/profile-photos/delete.png') }}"  style="width:25px; height:25px; margin-top: 7px;"  value='Delete' > </input> 
                                     </form> 
                            </td> -->
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <form action="{{ route('product.destroy',$value->id) }}" method="POST" onsubmit="return confirm('Are you sure to delete this task?')" style="display:inline">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <input type="image" value='Delete' src="{{ asset('storage/profile-photos/delete.png') }}" width="30" height="30" alt="" class="d-inline-block align-top">
                                </form>
                            </td>
                        </tr>
                        @endforeach 
                    </tbody>
                    
                </table>
                <div class="pagination justify-content-end">
                     {!! $products->links() !!}
                </div>
            
        
    </div>
    <!--------------------------------- Pop-up Edit ------------------------------------------>
    <!-- The Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  modal-lg" style = "max-width: 650px!important;">
        <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header" style="background-color: #1E272E"  >
            <h5 style = "color:white">แก้ไขข้อมูลสินค้า</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" style="background-color:red;" aria-label="Close"></button>
        </div>

        <!-- Modal body -->
        <form action="{{ url('/') }}/product/edit" method="GET" id = 'editForm'>
          {{ csrf_field() }}
          {{ method_field('GET') }}
        <div class="modal-body">
            <div class="card" style="width: 38rem; margin-left:5px;">
                <div class="card-body">
                <div class = "row">
                    <div class = "col-md-1"></div>
                    <div class = "col-md-2"><h6 style = 'margin-top: 8px'>รูปสินค้า</h6></div>
                    <div class = "col-md-3"></div>
                    <div class = "col-md-2"><h6 style = 'margin-top: 8px'>ชื่อบริษัท</h6></div>
                    <div class = "col-md-3">
                        <input type="text" style="height: 2em" name='product_company' id = 'product_company' class='form-control' />
                        
                    </div>
                </div>

                <div class = "row">
                    <div class = "col-md-1"></div>
                    <div class = "col-md-2"><h6 style = 'margin-top: 8px'>รหัสสินค้า</h6></div>
                    <div class = "col-md-3"><input type="text" style="height: 2em " name='product_id' id = 'product_id' class='form-control' /></div>
                    <div class = "col-md-2"><h6 style = 'margin-top: 8px'>ประเภทสินค้า</h6></div>
                    <div class = "col-md-3">
                        <input type="text" style="height: 2em" name='product_type' id = 'product_type' value="{{ isset($data->product_type) ?  $data->product_type : '' }}" class='form-control' />
                    </div>
                </div>

                <div class = "row">
                    <div class = "col-md-1"></div>
                    <div class = "col-md-2"><h6 style = 'margin-top: 8px'>ชื่อสินค้า</h6></div>
                    <div class = "col-md-3"><input type="text"  style="height: 2em"  name='product_name' id = 'product_name' value="{{ isset($data->product_name) ?  $data->product_name : '' }}" class='form-control' /></div>
                    <div class = "col-md-2"><h6 style = 'margin-top: 8px'>พื้นที่จัดเก็บ</h6></div>
                    <div class = "col-md-3">
                        <input type="text"  style="height: 2em" name='product_capacity' id = 'product_capacity' class='form-control' />
                    </div>
                </div>
               
            <br>
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


    <!--------------------------------- Pop-up Delete ------------------------------------------>
    <!-- The Modal -->
    <div class="modal fade" id= "deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  modal-lg" style = "max-width: 650px!important;">
        <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <!-- Modal body -->
        <form action="{{ url('/') }}/product/" method="POST">
          {{ csrf_field() }}
          {{ method_field('delete') }}
        <div class="modal-body">
            <div class = "row">
                <input type="hidden" name = "id" id = "id" value = "">
                <div class = "col-md-12"><h2 class = "text-center">กดยืนยันเพื่อทำการลบข้อมูล</h2></div>
            </div>

            <div class = "row">
                <div class = "col-md-7"><button type="submit" name = "delete" class="btn btn-pill btn-dark" style = "border-radius: 100px; " value='Delete' ><h5 ><b> ยืนยัน </b></h5></button></div>
            </div>
        </div>

        
        </form>
        </div>
    </div>
    </div>



<script>
function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("product_table");
  switching = true;
  // Set the sorting direction to ascending:
  dir = "asc";
  /* Make a loop that will continue until
  no switching has been done: */
  while (switching) {
    // Start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /* Loop through all table rows (except the
    first, which contains table headers): */
    for (i = 1; i < (rows.length - 1); i++) {
      // Start by saying there should be no switching:
      shouldSwitch = false;
      /* Get the two elements you want to compare,
      one from current row and one from the next: */
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      /* Check if the two rows should switch place,
      based on the direction, asc or desc: */
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          // If so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          // If so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      /* If a switch has been marked, make the switch
      and mark that a switch has been done: */
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      // Each time a switch is done, increase this count by 1:
      switchcount ++;
    } else {
      /* If no switching has been done AND the direction is "asc",
      set the direction to "desc" and run the while loop again. */
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}
</script>
</div>
@endsection


