@extends('navbar')

@section('content')
    
        <div class= "row" style="margin-top:20px">
            <div class="col">
                <h1>ประวัติทั้งหมด</h1>
            </div>
            {{--<div class="col">
                <a href="route{{Dashboard.dashboard}}">go</a>
            </div>--}}
            <div class="col-4" style="margin-top:20px">
                <div class="row">
                    <div class="col-4" style="text-align:center;"> 
                        <h7 style="font-size:100%; margin-left:25px;">เลือก เดือน/ปี:</h7>
                    </div>
                    <div class="col-6">
                        <form style="text-align:center;">
                            <input type="month" name="bdaymonth">
                        </form>
                    </div>
                </div>
            </div>
        </d>
        <div class="row" style="margin-top:20px;">
            <div class="col-8"></div>
            <div class="col">
                <div class="row">
                    <div class="col" style="margin-left:10px;">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>ประวัติทั้งหมด</option>
                            <option value="1">ประวัตินำสินค้าเข้า</option>
                            <option value="2">ประวัตินำออกสินค้า</option>
                            <option value="3">ประวัติรายการสินค้าเสียเปล่า</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-1">
                <button class="btn btn-square btn-dark" type="button" style="background-color:black;">ค้นหา</button>
            </div>
        </div>


        <table id="tech-companies-1-clone" class="table table-striped table-hover" style="margin-top:20px; hight:400%;">
            <thead style="text-align:center; text-size:10px"> 
                <th onclick="sortTable(0)">
                    <b class="bi bi-sort-alpha-down" style="font-size: 16px">วัน/เดือน/ปี</b>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-up" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5zm-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5z"/>
                    </svg>
                </th>
                <th onclick="sortTable(1)">
                    <b class="bi bi-sort-alpha-down" style="font-size: 16px">เวลา</b>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-up" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5zm-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5z"/>
                    </svg>
                </th>
                <th onclick="sortTable(2)">
                    <b class="bi bi-sort-alpha-down" style="font-size: 16px">รหัสสินค้า</b>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-up" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5zm-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5z"/>
                    </svg>
                </th>
                <th onclick="sortTable(3)">
                    <b class="bi bi-sort-alpha-down" style="font-size: 16px">บริษัท</b>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-up" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5zm-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5z"/>
                    </svg>
                </th>
                <th onclick="sortTable(4)">
                    <b class="bi bi-sort-alpha-down" style="font-size: 16px">พนักงาน</b>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-up" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5zm-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5z"/>
                    </svg>
                </th>
                <th onclick="sortTable(5)">
                    <b class="bi bi-sort-alpha-down" style="font-size: 16px">สถานะ</b>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-up" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5zm-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5z"/>
                    </svg>
                </th>
                <th onclick="sortTable(6)">
                    <b class="bi bi-sort-alpha-down" style="font-size: 16px">จำนวนเงิน</b>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-up" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5zm-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5z"/>
                    </svg>
                </th>
            </thead>
            <tbody>
            @foreach ($orders as $key => $value)
                <tr style="text-align:center;">
                    <td scope="row">{{ date('d/m/Y',strtotime($value->created_at)) }}</td>
                    <td>{{ date('d/m/Y',strtotime($value->created_at)) }}</td>
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->company_id }}</td>
                    @foreach ($users as $user)
                    @if ($value->user_id == $user->id)
                    <td>{{ $user->name}}</td>
                    @endif
                    @endforeach
                    <td>status</td>
                    <td>{{ $value->Total_price}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="row">
            <div class="col-10"></div>
            <div class="col justify-content-end">
                {!!$orders->links()!!}
            </div>
        </div>
    <script>
        function sortTable(n) {
            var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
            table = document.getElementById("tech-companies-1-clone");
            switching = true;
            dir = "asc";
            while (switching) {
                switching = false;
                rows = table.rows;
                for (i = 1; i < (rows.length - 1); i++) {
                    shouldSwitch = false;
                    x = rows[i].getElementsByTagName("TD")[n];
                    y = rows[i + 1].getElementsByTagName("TD")[n];
                    if (dir == "asc") {
                        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                        shouldSwitch = true;
                        break;
                        }
                    } else if (dir == "desc") {
                        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                        shouldSwitch = true;
                        break;
                        }
                    }
                }
                if (shouldSwitch) {
                rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                switching = true;
                switchcount ++;
                } else {
                    if (switchcount == 0 && dir == "asc") {
                        dir = "desc";
                        switching = true;
                    }
                }
            }
        }
        </script>
        

@endsection


