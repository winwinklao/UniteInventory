@extends('navbar')

@section('content')

  
        <div class="row" style="margin-top: 50px;"> 
        <div class="col"> <h1 style="font-size: 200%;"><b>ค่าเฉลี่ยระยะเวลาการส่งสินค้าเข้าของแต่ละบริษัท</b></h1> </div> 
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
            <table class="table table-boederless table-striped table table-hover" style="width: 50%" Align="center">
            <thead class = 'text-center'>
                <tr class='fs-5'>
                <th scope="col">อันดับ</th>
                <th scope="col">บริษัท</th>
                <th scope="col">ค่าเฉลี่ย(วัน)</th>
                </tr>
            </thead>
            <tbody class = 'text-center'>
                <tr class='fs-5'>
                <th scope="row">1</th>
                <td>TOA</td>
                <td>5</td>
                </tr>
                <tr class='fs-5'>
                <th scope="row">2</th>
                <td>DIY</td>
                <td>5</td>
                </tr>
                <tr class='fs-5'>
                <th scope="row">3</th>
                <td>ฉลาม</td>
                <td>4</td>
                </tr>
                <tr class='fs-5'>
                <th scope="row">4</th>
                <td>Pumpkin</td>
                <td>3</td>
                </tr>
                <tr class='fs-5'>
                <th scope="row">5</th>
                <td></td>
                <td></td>
                </tr>
            </tbody>
            </table>

@endsection