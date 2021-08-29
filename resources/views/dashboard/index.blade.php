@extends('navbar')

@section('content')
        <div class="row" style="margin-top:20px">
            <div class="col">
                <h1>เเดชบอร์ด</h1>
            </div>
            <div class="col" style="margin-top:20px; text-align:end;">
                <a href="{{route('history.index')}}" style="color:black;">
                    <img src="{{ asset('storage/profile-photos/clock.png') }}" alt="history" style="width:30px; height:30px;">
                    </h6>ประวัติทั้งหมด</h6>
                </a>
            </div>
        </div>
        <div class="row">
          <div class="col-8" style="background-color: white">
            <div class="row my-3">
                <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <div class= "card border-primary mb-3 shadow p-6 mb-3 bg-body" style="max-width: 18rem; border-radius: 20px;">
                        <div class="card-body">
                            <h6 class="card-title">สินค้านำเข้าต่อเดือน</h6>
                            <p class="card-text text-success"></p>
                            <p class="card-text">4000 บาท</p>
                        </div>
                        <div class="card-footer bg-transparent border-primary"><a href="{{route('history.index')}}" style="font-size:14px; color:black;">ดูประวัติ</a></div>
                    </div>
                </div>
                <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-4">
                    <div class= "card border-success mb-3 shadow p-6 mb-3 bg-body" style="max-width: 18rem; border-radius: 20px;">
                        <div class="card-body">
                            <h6 class="card-title">ต้นทุนที่เสียไปต่อเดือน</h6>
                            <p class="card-text text-success"></p>
                            <p class="card-text">1400 บาท</p>
                        </div>
                        <div class="card-footer bg-transparent border-success"><a href="{{route('history.index')}}" style="font-size:14px; color:black;">ดูประวัติ</a></div>
                    </div>
                </div>
                <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-4">
                    <div class= "card border-danger mb-3 shadow p-6 mb-3 bg-body" style="max-width: 18rem; border-radius: 20px;">
                        <div class="card-body">
                            <h6 class="card-title">รายการสินค้ายังไม่ส่งเข้าคลัง</h6>
                            <p class="card-text text-success"></p>
                            <p class="card-text">15</p>
                        </div>
                        <div class="card-footer bg-transparent border-danger"><a href="{{route('InportOder')}}" style="font-size:14px; color:black;">ดูรายการนำเข้าสินค้า</a></div>
                    </div>
                </div>
            </div>
            <div class="row my-3">
                <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <div class= "card border-warning mb-3 shadow p-6 mb-3 bg-body" style="max-width: 18rem; border-radius: 20px;">
                        <div class="card-body">
                            <h6 class="card-title">มูลค่าสินค้านำออกต่อเดือน</h6>
                            <p class="card-text text-success"></p>
                            <p class="card-text">3500 บาท</p>
                        </div>
                        <div class="card-footer bg-transparent border-warning"><a href="{{route('history.index')}}" style="font-size:14px; color:black;">ดูประวัติ</a></div>
                    </div>
                </div>
                <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-4">
                    <div class= "card border-dark mb-3 shadow p-6 mb-3 bg-body" style="max-width: 18rem; border-radius: 20px;">
                        <div class="card-body">
                            <h6 class="card-title">รายการสินค้าที่ยังส่งออกไม่ถึง</h6>
                            <p class="card-text text-success"></p>
                            <p class="card-text">12</p>
                        </div>
                        <div class="card-footer bg-transparent border-dark"><a href="{{route('ExOder')}}" style="font-size:14px; color:black;">ดูรายการนำออกสินค้า</a></div>
                    </div>
                </div>
                <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-4">
                    <div class="card shadow p-6 mb-3 bg-body" style="max-width: 18rem; border-radius: 20px; height:7rem; margin-top:14px;">
                        <a style="font-size:14px; margin-left: 17px; margin-top:16px">พื้นที่จัดเก็บในคลัง</a>
                        <div class="progress" style="height:3rem; border-radius: 15px; margin-left: 10px; margin-right: 10px; margin-top:7px">
                            <div class="progress-bar" role="progressbar" style="width: 45.93%; background-color: #27AE60" aria-valuenow="45.93" aria-valuemin="0" aria-valuemax="100"><h6 style="margin-top:10px;">45.93%</h></div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
            <div class="col">
                <div class="card shadow p-6 mb-3 bg-body" style="width: 26rem; height: 18rem; margin-top:20px">
                    <div class="row" style="margin-top:10px">
                        <div class="col"></div>
                        <div class="col-11">
                            <a href="{{route('productGroup')}}" style="color:black;">
                                </h6>กลุ่มสินค้า</h6>
                            </a>
                        </div>
                        <div id="donutchart" style="width: 440px; height: 250px;"></div>
                    </div>
                </div>
            </div>
      </div>
      <div class="row" style="background-color: white">
                <div class="col">
                    <div class="card shadow p-6 mb-3 bg-body" style="width: 34rem; height: 18rem;">
                        <div class="row" style="margin-top:10px">
                            <div class="col"></div>
                            <div class="col-11">
                                <a href="{{route('rankingExport')}}" style="color:black;">
                                    </h6>อันดับสินค้าที่ส่งออกมากที่สุด</h6>
                                </a>
                            </div>
                            <div id="chart_div" style="width: 540px; height: 240px;"></div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow p-6 mb-3 bg-body" style="width: 43rem; height: 18rem;">
                        <div class="row" style="margin-top:10px">
                            <div class="col"></div>
                            <div class="col-11">
                                <a href="{{route('history.index')}}" style="color:black;">
                                    </h6>ภาพรวมการเงินของสินค้าคงคลัง(รายเดือน)</h6>
                                </a>
                            </div>
                            <div id="linechart_material" style="width: 700px; height: 240px"></div>
                        </div>
                    </div>
                </div>
      </div>
      <div class="row my-4" style="background-color: white">
        <div class="col">
            <div class="card shadow p-6 mb-3 bg-body" style="width: 35rem; height: 18rem;">
                <div class="row" style="margin-top:10px">
                    <div class="col"></div>
                    <div class="col-11">
                        <a href="{{route('exportLate')}}" style="color:black;">
                            </h6>บริษัทที่มีรายการส่งล่าช้า</h6>
                        </a>
                    </div>
                    <div id="columnchart_values" style="width: 540px; height: 240px;"></div>    
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow p-6 mb-3 bg-body" style="width: 35rem; height: 18rem;">
                <div class="row" style="margin-top:10px">
                    <div class="col"></div>
                    <div class="col-11">
                        <a href="{{route('avgexport')}}" style="color:black;">
                            </h6>ค่าเฉลี่ยระยะเวลาการส่งสินค้าของแต่ละบริษัท</h6>
                        </a>
                    </div>
                    <div id="chart_dive" style="width: 540px; height: 240px;"></div>    
                </div>
            </div>
        </div>
      </div>
        
@endsection
