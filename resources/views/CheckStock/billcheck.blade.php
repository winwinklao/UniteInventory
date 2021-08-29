@extends('nav')

@section('content')

    <div class="container" style="width:800px;">
        <div class="row">
            <div class="col">
                <img src="logo.png" alt="" class="rounded float-start" style="background-color:; width:100%; height:100%;">
            </div>
            <div class="col-9" style="background-color:;">
    
                    <div class="row">
                        <div class="col">
                            <div class="row"><b style="font-size:14px">บริษัท ยูไนท์ อินเวนทอรี จำกัด</b></div>
                            <div class="row"><b style="font-size:14px">Unite Inventory Co.,LTD.</b></div>
                            <div class="row"><b style="font-size:12px">199 ม.6 ต.ทุ่งสุขลา อ.ศรีราชา จ.ชลบุรี 20230</b></div>
                            <div class="row"><b style="font-size:12px">โทร. 0-3835-4580-4</b></div>
                        </div>
                        <div class="col" style="text-align:end;">
                            <b style="font-size:12px;">เลขที่เอกสาร/No: RC00001</b>
                        </div>
                    </div>
                    
            </div>
        </div>
        <span class="border-top">
        <div class="row">
            <span class="border-top border-3 border-dark" style="margin-top:15px;"></span>
            <b style="text-align:center; margin-top:15px">ตรวจสอบนับสินค้า</b>
        </div>
        </span>
        <div class="row" style="margin-top:20px;">
            <div class="card border-1 border-dark" style="border-radius: 15px;">
                <div class="card-body">
                    <div class="col">
                        <div class="row" style="">
                            <div class="col"><b style="font-size:13px;">วันที่ตรวจสอบ</b></div>
                            <div class="col-10"><p style="font-size:12px; margin-top:3px;">31/02/2562</p></div>   
                        </div>
                        <div class="row">
                            <div class="col"><b style="font-size:13px; margin-top:9px;">ที่เก็บ</b></div>
                            <div class="col-11"><p style="font-size:12px; margin-top:3px;">01 - 04</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:10px;">
            <div class="card border-1 border-dark" style="border-radius: 0px; border-top-left-radius: 15px 15px; border-top-right-radius: 15px 15px;">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr style="font-size:12px; margin-top:3px; text-align:center;">
                                <th scope="col">ลำดับ</th>
                                <th scope="col">รหัสสินค้า</th>
                                <th scope="col">ชื่อสินค้า</th>
                                <th scope="col">บริษัท</th>
                                <th scope="col">ตำแหน่งที่เก็บ</th>
                                <th scope="col">ยอดตามบัญชี</th>
                                <th scope="col">ผลต่าง</th>
                                <th scope="col">เวลา</th>
                                <th scope="col">หมายเหตุ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="font-size:12px; text-align:center;">
                                <td scope="row">1</td>
                                <td>RE0001</td>
                                <td>แล็กเกอร์เงา</td>
                                <td>TOA</td>
                                <td>เชลฟ์ 1 ชั้น 1</td>
                                <td>30</td>
                                <td>-5</td>
                                <td>3.30 น.</td>
                                <td>สินค้าขาด</td>
                            </tr>
                            <tr style="font-size:12px; text-align:center;">
                                <td scope="row">2</td>
                                <td>RE0002</td>
                                <td>กระดาษทรายขัดไม้</td>
                                <td>ฉลาม</td>
                                <td>เชลฟ์ 1 ชั้น 2</td>
                                <td>30</td>
                                <td>-5</td>
                                <td>13.30 น.</td>
                                <td>สินค้าเกิน</td>
                            </tr>
                            <tr style="font-size:12px; text-align:center;">
                                <td scope="row">3</td>
                                <td>BR0001</td>
                                <td>แปรงทาแล็กเกอร์</td>
                                <td>Pumpkin</td>
                                <td>เชลฟ์ 2 ชั้น 3</td>
                                <td>30</td>
                                <td>+5</td>
                                <td>13.30 น.</td>
                                <td>สินค้าเกิน</td>
                            </tr>
                            <tr style="font-size:12px; text-align:center;">
                                <td scope="row">4</td>
                                <td>WO0001</td>
                                <td>ไม้อัด</td>
                                <td>DIY</td>
                                <td>เชลฟ์ 3 ชั้น 2</td>
                                <td>30</td>
                                <td></td>
                                <td>13.30 น.</td>
                                <td>ไม่พบสินค้า</td>
                            </tr>
                            <tr style="font-size:12px; text-align:center;">
                                <td scope="row">5</td>
                                <td>1C00001</td>
                                <td>ไม้สนแผ่น</td>
                                <td>DIY</td>
                                <td>เชลฟ์ 4 ชั้น 1</td>
                                <td>30</td>
                                <td>-5</td>
                                <td>13.30 น.</td>
                                <td>สินค้าขาด</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row" style="background-color:">

            <div class="card border-1 border-dark" 
                style="border-radius: 0px; border-bottom-left-radius: 15px 15px; border-bottom-right-radius: 15px 15px;">
                <div class="card-body">
                    <div class="row" style="">
                        <div class="col-2"><b style="font-size:13px;">ผู้ตรวจสอบ</b></div>
                        <div class="col"><p style="font-size:12px; margin-top:3px;">นาง สงบ เสงี่ยม</p></div>  
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="text-align:end; margin-top:20px">
            <a href="" onClick="window.print()" style="color:black;">
                </h6>พิมพ์</h6>
                <img src="printer.png" alt="history" style="width:30px; height:30px;">
            </a>
        </div>
    </div>

@endsection
    
    
