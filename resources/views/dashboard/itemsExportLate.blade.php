@extends('navbar')

@section('content')

        <div class="container">
            <div class="row" style="margin-top: 50px;"> 
            <div class="col"> <h1 style="font-size: 200%;"><b>รายการที่ส่งล่าช้าทั้งหมด</b></h1> </div> 
            </div>
            <br>
            <div class="row">
                <div class="col"></div>
                <div class="col">
                    <div class="row">
                        <div class="col"></div>
                        <div class="col-7">
                                <form action="/action_page.php">
                                    <label for="bdaymonth">เลือกเดือน</label>
                                    <input type="month" id="bdaymonth" name="bdaymonth">
                                    <button type="button" style = "border-radius: 30px" class="btn btn-pill btn-success">ตกลง</button>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="table-responsive">
                <table class="table table-boederless table-striped table table-hover">
                <thead class = 'text-center'>
                    <tr class='fs-6'>
                    <th scope="col">อันดับ</th>
                    <th scope="col">รูปสินค้า</th>
                    <th scope="col">รหัสสินค้า</th>
                    <th scope="col">ชื่อสินค้า</th>
                    <th scope="col">ประเภทสินค้า</th>
                    <th scope="col">กลุ่มสินค้า</th>
                    <th scope="col">จำนวน</th>
                    <th scope="col">ราคารวม</th>
                    </tr>
                </thead>
                <tbody class = 'text-center'>
                    <tr class='fs-6'>
                    <th scope="row">1</th>
                    <td><img src="" alt="..." style="width:50px;height:42px;"></td>
                    <td>WO0001</td>
                    <td>ไม้อัด 10 mm. 100x50 cm.</td>
                    <td>ไม้</td>
                    <td>A</td>
                    <td>320</td>
                    <td>17000</td>
                    </tr>
                    <tr class='fs-6'>
                    <th scope="row">2</th>
                    <td><img src="" alt="..." style="width:50px;height:42px;"></td>
                    <td>1C00001</td>
                    <td>ไม้สนแผ่น งาน DIY 100x50 cm.</td>
                    <td>ไม้</td>
                    <td>A</td>
                    <td>300</td>
                    <td>15000</td>
                    </tr>
                    <tr class='fs-6'>
                    <th scope="row">3</th>
                    <td><img src="" alt="..." style="width:50px;height:42px;"></td>
                    <td>RE0001</td>
                    <td>แล็กเกอร์เงา ตรา TOA T-5000</td>
                    <td>อุปกรณ์รักษาสภาพไม้</td>
                    <td>B</td>
                    <td>180</td>
                    <td>12000</td>
                    </tr>
                    <tr class='fs-6'>
                    <th scope="row">4</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    </tr>
                    <tr class='fs-6'>
                    <th scope="row">5</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    </tr>
                </tbody>
                </table>
            </div>

@endsection
