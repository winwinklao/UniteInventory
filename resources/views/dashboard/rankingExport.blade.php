@extends('navbar')

@section('content')
        <div class= "row" style="margin-top:20px">
            <div class="col-9">
                <h1>อันดับสินค้าที่ส่งออกมากที่สุด</h1>
            </div>
            <div class="col" style="margin-top:10px;">
                <div class="row">
                    <div class="col" style="margin-top:10px;">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>เดือนปัจจุบัน</option>
                            <option value="1">มกราคม</option>
                            <option value="2">กุมภาพันธ์</option>
                            <option value="3">มีนาคม</option>
                            <option value="4">เมษายน</option>
                            <option value="5">พฤษภาคม</option>
                            <option value="6">มิถุนายน</option>
                            <option value="7">กรกฎาคม</option>
                            <option value="8">สิงหาคม</option>
                            <option value="9">กันยายน</option>
                            <option value="10">ตุลาคม</option>
                            <option value="11">พฤศจิกายน</option>
                            <option value="12">ธันวาคม</option>
                        </select>
                    </div>
                    <div class="col-3" style="margin-top:10px; margin-right:5px">
                        <button class="btn btn-square btn-dark" type="button" style="background-color:black;">ค้นหา</button>
                    </div>
                </div>
                
            </div>
        </div>
        <table class="table table-striped table-hover" style="margin-top:50px; border:10px; border-color: #d6d4cf;">
            <thead style="text-align:center;"> 
                <th>อันดับ</th>
                <th>รูปสินค้า</th>
                <th>รหัสสินค้า</th>
                <th>ชื่อสินค้า</th>
                <th>ประเภทสินค้า</th>
                <th>กลุ่มสินค้า</th>
                <th>จำนวน</th>
                <th>ราคารวม</th>
            </thead>
            <tbody>
                <tr style="text-align:center;">
                    <td scope="row">1</td>
                    <td><img src="mi.png" alt="HTML tutorial" style="width:50px;height:42px;"></td>
                    <td>WO0001</td>
                    <td>ไม้อัด</td>
                    <td>ไม้</td>
                    <td>A</td>
                    <td>320</td>
                    <td>17000</td>
                </tr>
                <tr style="text-align:center;">
                    <td scope="row">2</td>
                    <td><img src="mison.jpg" alt="HTML tutorial" style="width:50px;height:42px;"></td>
                    <td>IC0001</td>
                    <td>ไม้สนเเผ่น</td>
                    <td>ไม้</td>
                    <td>A</td>
                    <td>300</td>
                    <td>15000</td>
                </tr>
                <tr style="text-align:center;">
                    <td scope="row">3</td>
                    <td><img src="ทีโอเอ-แลคเกอร์เงา-T-5000.png" alt="HTML tutorial" style="width:50px;height:42px;"></td>
                    <td>RE0001</td>
                    <td>เเลกเกอร์เงา</td>
                    <td>อุปกรณ์รักษาไม้</td>
                    <td>B</td>
                    <td>180</td>
                    <td>12000</td>
                </tr>
                <tr style="text-align:center;">
                    <td scope="row">4</td>
                    <td><img src="85fdcd50956ea8862427916f7ae68aad.jpg" alt="HTML tutorial" style="width:50px;height:42px;"></td>
                    <td>RE0002</td>
                    <td>กระดาษทราย</td>
                    <td>อุปกรณ์ตกเเต่งไม้</td>
                    <td>C</td>
                    <td>200</td>
                    <td>10000</td>
                </tr>
                <tr style="text-align:center;">
                    <td scope="row">5</td>
                    <td><img src="4b5a9243f67492871c6c3a0ac06ee51c.jpg" alt="HTML tutorial" style="width:50px;height:42px;"></td>
                    <td>BR0001</td>
                    <td>เเปลงทาเเลกเกอร์</td>
                    <td>เเปลง</td>
                    <td>NONE</td>
                    <td>150</td>
                    <td>7000</td>
                </tr>
            </tbody>
        </table>
@endsection