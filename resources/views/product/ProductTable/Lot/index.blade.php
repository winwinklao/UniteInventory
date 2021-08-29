@extends("navbar")
@section('content')

    <h1 style = 'font-size : 200%'><b> ล็อตสินค้า </b></h1>
    <br>
    
    <div class="row">
        <div class = "col-md-2"><img src="..." class="img-thumbnail" alt="..."></div> 
        <div class = "col-md-3">
            <h6><b> ชื่อสินค้า : </b></h6> <br>
            <h6><b> จำนวนสินค้าทั้งหมด : </b></h6> 
        </div>
        
    </div>
    <br>
    <div class = "container block"> 
    <div>
        <table class= "table table-striped table-hover" >
            <thead class = "text-center">
                <tr>
                    <th scope = "col">ลำดับ</th>
                    <th>รหัสสต็อคสินค้า</th>
                    <th>วันนำเข้า</th>
                    <th>วันหมดอายุ</th>
                    <th>จำนวน</th>
                    <th>ราคาต้นทุน</th>
                    <th>หมายเหตุ</th>
                
                </tr>
            </thead>
            @foreach($lots as $key => $value)
            <tr class = "text-center">
                <td> {{$lots->firstItem()+$loop->index}} </td>
                <td>{{ $value->product_stock_id}}</td>
                <td>{{ $value->product_import_date}}</td>
                <td>{{ $value->product_expire_date }}</td>
                <td>{{ $value->product_value }}</td>
                <td>{{ $value->product_cost_price }}</td>
                <td>{{ $value->product_note }}</td>
               
                
            </tr>
            @endforeach

            
        </table>
    </div>
    </div>
    <div class = "row" >
        <div class = "col" style = "text-align : end;">
        <a href="http://127.0.0.1:8000/product"><button type="submit" class="btn btn-pill btn-dark rounded-pill"  ><h5 ><b> ย้อนกลับ </b></h5></button> </a>
        </div>
    </div>
    

@endsection
