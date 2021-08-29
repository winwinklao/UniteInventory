@extends('navbar')

@section('content')
        <div class= "row" style="margin-top:20px">
            <div class="col-9">
                <h1>กลุ่มสินค้า</h1>
            </div>
            <div class="col" style="margin-top:25px">
                <h7 style="font-size:120%">
                    <img src="coins.png" alt="history" style="width:25px; height:25px;">
                    ราคารวมของเดือนที่เเล้ว 226200
                </h7>
            </div>
        </div>
        <div class="accordion accordion-flush" id="accordionFlushExample" style="margin-top:40px">
            <div class="accordion-item">
                <h2 class="accordion-header accordion" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        <h6>กลุ่มA</h6>
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <table class="table table-bordered" style="border:10px; border-color: #d6d4cf;">
                            <thead class="table-secondary" style="text-align:center;"> 
                                <th>อันดับ</th>
                                <th>รูปสินค้า</th>
                                <th>รหัสสินค้า</th>
                                <th>ชื่อสินค้า</th>
                                <th>จำนวน</th>
                                <th>ราคาต่อหน่วย</th>
                                <th>ราคารวม</th>
                                <th>% ของรายการสินค้า</th>
                            </thead>
                            <tbody>
                                <tr style="text-align:center;">
                                    <td scope="row">1</td>
                                    <td><img src="mi.png" alt="HTML tutorial" style="width:50px;height:42px;"></td>
                                    <td>WO0001</td>
                                    <td>ไม้อัด</td>
                                    <td>800</td>
                                    <td>150</td>
                                    <td>123000</td>
                                    <td>54.5%</td>
                                </tr>
                                <tr style="text-align:center;">
                                    <td scope="row">2</td>
                                    <td><img src="mison.jpg" alt="HTML tutorial" style="width:50px;height:42px;"></td>
                                    <td>IC0001</td>
                                    <td>ไม้สนเเผ่น</td>
                                    <td>600</td>
                                    <td>150</td>
                                    <td>54000</td>
                                    <td>23.9%</td>
                                </tr>
                                <tr style="text-align:center;">
                                    <td colspan="7" class="table-active-light"></td>
                                    <td>% รวมทั้งหมด 78.4%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        <h6>กลุ่มB</h6>
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <table class="table table-bordered" style="border:10px; border-color: #d6d4cf;">
                            <thead class="table-secondary" style="text-align:center;"> 
                                <th>อันดับ</th>
                                <th>รูปสินค้า</th>
                                <th>รหัสสินค้า</th>
                                <th>ชื่อสินค้า</th>
                                <th>จำนวน</th>
                                <th>ราคาต่อหน่วย</th>
                                <th>ราคารวม</th>
                                <th>% ของรายการสินค้า</th>
                            </thead>
                            <tbody>
                                <tr style="text-align:center;">
                                    <td scope="row">1</td>
                                    <td><img src="ทีโอเอ-แลคเกอร์เงา-T-5000.png" alt="HTML tutorial" style="width:50px;height:42px;"></td>
                                    <td>RE0001</td>
                                    <td>เเลกเกอร์เงา</td>
                                    <td>450</td>
                                    <td>150</td>
                                    <td>15000</td>
                                    <td>13%</td>
                                </tr>
                                <tr style="text-align:center;">
                                    <td colspan="7" class="table-active-light"></td>
                                    <td>% รวมทั้งหมด 13%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        <h6>กลุ่มC</h6>
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <table class="table table-bordered" style="border:10px; border-color: #d6d4cf;">
                            <thead class="table-secondary" style="text-align:center;"> 
                                <th>อันดับ</th>
                                <th>รูปสินค้า</th>
                                <th>รหัสสินค้า</th>
                                <th>ชื่อสินค้า</th>
                                <th>จำนวน</th>
                                <th>ราคาต่อหน่วย</th>
                                <th>ราคารวม</th>
                                <th>% ของรายการสินค้า</th>
                            </thead>
                            <tbody>
                                <tr style="text-align:center;">
                                    <td scope="row">1</td>
                                    <td><img src="85fdcd50956ea8862427916f7ae68aad.jpg" alt="HTML tutorial" style="width:50px;height:42px;"></td>
                                    <td>RE0002</td>
                                    <td>กระดาษทราย</td>
                                    <td>600</td>
                                    <td>5</td>
                                    <td>9000</td>
                                    <td>8.6%</td>
                                </tr>
                                <tr style="text-align:center;">
                                    <td colspan="7" class="table-active-light"></td>
                                    <td>% รวมทั้งหมด 8.6%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

@endsection
