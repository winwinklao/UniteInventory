@extends("navbar")

@section('content')

    <div class="container">
        <div class = "row" style = "margin-top:20px">
            <div class = "col">
                <h1>คืนสินค้า</h1> 
            </div>
            <div class = "col-2">
                <div class = "col">
                    <a  class="btn" href="{{route('return1')}}" type="button" style = "margin-top:20px;background-color: #D2DAE2" role="button">+ เพิ่มรายการสินค้า</a> 
                </div>
            </div>
        </div>
        {{-- table --}}
        <div class = "row" style = "margin-top:30px" >
        <table id = "tech-companies-1-clone" class="table table-striped table-hover"  style ="border: 1px solid black:" >
            <thead style="text-align:center; text-size:10px">  
                <tr style = "margin-top:50px;text-align:center;">

                  <th >ลำดับ</th>
                  <th >รหัสรายการคืนสินค้า</th>
                  <th >ผู้บันทึก</th>
                  <th >วันที่ต้องได้รับสินค้า</th>
                  <th >จำนวนคืนสินค้าทั้งหมด</th>
                </tr>
            </thead>

            <tbody>
                    <tr style="text-align:center; text-size:10px">
                    <th scope="row">1</th>
                    <td><a href = "{{route('return2')}}" style = "color:black">RC00001</a></td>
                    <td>สวัสดี ศรีสุข</td>
                    <td>18/01/2563</td>
                    <td>500</td>
                    </tr>
                    <tr style="text-align:center; text-size:10px">
                    <th scope="row">2</th>
                    <td><a href = "{{route('return2')}}" style = "color:black">RC00002</a></td>
                    <td>นภา สินเชื่อ</td>
                    <td>4/02/2563</td>
                    <td>20</td>
                    </tr>

                    <tr style="text-align:center; text-size:10px">
                    <th scope="row">3</th>
                    <td><a href = "{{route('return2')}}" style = "color:black">RC00003</a></td>
                    <td>สมชาย วงศ์สิริ</td>
                    <td>7/02/2563</td>
                    <td>70</td>
                    </tr>

                    <tr style="text-align:center; text-size:10px">
                    <th scope="row">4</th>
                    <td><a href = "{{route('return2')}}" style = "color:black">RC00004</a></td>
                    <td>ณรงค์ นเรศ</td>
                    <td>18/02/2563</td>
                    <td>89</td>
                    </tr>

                    <tr style="text-align:center; text-size:10px">
                    <th scope="row">5</th>
                    <td><a href = "{{route('return2')}}" style = "color:black">RC00005</a></td>
                    <td>ลลิตา ชื่นอารมย์</td>
                    <td>22/02/2563</td>
                    <td>45</td>
                    </tr>    
            </tbody>
        </table>
        </div>              
    </div>

@endsection
   