@extends('navbar')

@section('content')

        <div class="row" style="margin-top: 50px;"> 
        <div class="col"> <h1 style="font-size: 200%;"><b>บริษัทที่ส่งออกของล่าช้า</b></h1> </div> 
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
                <th scope="col">จำนวนครั้ง</th>
                </tr>
            </thead>
            <tbody class = 'text-center'>
                <tr class='fs-5'>
                <td scope="row">1</td>
                <td>TOA</td>
                <td>10</td>
                </tr>
                <tr class='fs-5'>
                <td scope="row">2</td>
                <td>J&T</td>
                <td>8</td>
                </tr>
                <tr class='fs-5'>
                <td scope="row">3</td>
                <td>Kerry</td>
                <td>6</td>
                </tr>
                <tr class='fs-5'>
                <td scope="row">4</td>
                <td>SCG</td>
                <td>4</td>
                </tr>
                <tr class='fs-5'>
                <td scope="row">5</td>
                <td>DIY</td>
                <td>2</td>
                </tr>
            </tbody>
            </table>
        </div>

@endsection