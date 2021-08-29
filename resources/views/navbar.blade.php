<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.css"> -->

  <title>UNITEINVENTORY</title>
  <!--style nav-->
  <style>
    body {
      font-family: "Lato", sans-serif;
    }

    .sidenav {
      display: none;
      height: 100%;
      width: 250px;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
      background-color: #1E272E;
      overflow-x: hidden;
      padding-top: 60px;
    }

    .sidenav a,
    .dropdown-btn {
      padding: 8px 8px 15px 0px;
      text-decoration: none;
      font-size: 18px;
      color: #f1f1f1;
      display: block;
      border: none;
      background: none;
      width: 100%;
      text-align: left;
      cursor: pointer;
      outline: none;
    }

    .sidenav a:hover,
    .dropdown-btn:hover {
      color: #818181;
    }

    .sidenav .closebtn {
      position: absolute;
      top: 0;
      /* right: 25px;
          font-size: 36px;
          margin-left: 50px; */
    }

    /* Main content */
    .main {
      margin-left: 200px;
      /* Same as the width of the sidenav */
      font-size: 20px;
      /* Increased text to enable scrolling */
      padding: 0px 10px;
    }

    /* Add an active class to the active dropdown button */
    .active {
      background-color: #1E272E;
      color: white;
    }

    /* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
    .dropdown-container {
      display: none;
      background-color: #1E272E;
      padding-left: 8px;
    }

    @media screen and (max-height: 450px) {
      .sidenav {
        padding-top: 15px;
      }

      .sidenav a {
        font-size: 18px;
      }
    }

    @media (min-width: 767.98px) {
      .navbar {
        top: 0;
        position: sticky;
        z-index: 999;
      }
    }

    .f {
      font-family: 'Mitr', sans-serif;
    }
  </style>

</head>

<body>
  <nav class="navbar navbar-dark navbar-static-top p-3" style="background-color: #1E272E; height:60px;">
    <div class="col-12 col-md-3 col-lg-2 mb-lg-0 flex-wrap flex-md-nowrap justify-content-between" style="background-color:; margin-left:10px; margin-top:-10px;">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon" onclick="openNav()"></span>
      </button>
      <a href="{{ route('product.index') }}">
        <img src="{{ asset('storage/profile-photos/logo.png') }}" alt="" style="width:40%; margin-left:10px;">
      </a>
      <div id="mySidenav" class="sidenav">
        <!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> -->
        <button class="navbar-toggler collapsed closebtn" type="button" data-toggle="collapse" data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation" style="margin-left:26px; margin-top:10px;">
          <span class="navbar-toggler-icon" onclick="closeNav()"></span>
        </button>
        <!-- <img src="logo.png" alt="" style="width:40%; margin-left:10px;"> -->
        @if(Auth::user()->roll === "ผู้จัดการ")
        <a href="{{ route('dashboard') }}" style="text-align:; margin-top:20px"><img src="{{ asset('storage/profile-photos/dashboardw.png') }}" alt="" style="width:14%; margin-left:25px">
          <h style="margin-left:15px" class="f">แดชบอร์ด</h>
        </a>
        @endif

        <button class="dropdown-btn">
          <img src="{{ asset('storage/profile-photos/supply-chainW.png') }}" alt="" style="width:14%; margin-left:25px">
          <h style="margin-left:15px" class="f">สินค้า</h>
        </button>
        <div class="dropdown-container">
          <a href="{{ route('product.index') }}"><img src="{{ asset('storage/profile-photos/arrow.png') }}" alt="" style="width:5%; margin-left:47px">
            <h style="margin-left:8px; font-size:16px" class="f">ตารางรายการสินค้า</h>
          </a>
          <a href="{{ route('shelf.index') }}"><img src="{{ asset('storage/profile-photos/arrow.png') }}" alt="" style="width:5%; margin-left:47px">
            <h style="margin-left:8px; font-size:16px" class="f">เชลฟ์</h>
          </a>
        </div>


        @if (Auth::user()->roll === "ผู้จัดการ" or Auth::user()->roll === "ฝ่ายนำสินค้าเข้า" )
        <button class="dropdown-btn">
          <img src="{{ asset('storage/profile-photos/shopping-listw.png') }}" alt="" style="width:12%; margin-left:25px">
          <h style="margin-left:20px" class="f">นำเข้าสินค้า</h>
        </button>
        <div class="dropdown-container">
          <a href="{{ route('ImportProductOrder.index') }}"><img src="{{ asset('storage/profile-photos/arrow.png') }}" alt="" style="width:5%; margin-left:47px">
            <h style="margin-left:8px; font-size:16px" class="f">เพิ่มรายการสินค้านำเข้า</h>
          </a>
          <a href="{{ route('Importorder.index') }}"><img src="{{ asset('storage/profile-photos/arrow.png') }}" alt="" style="width:5%; margin-left:47px">
            <h style="margin-left:8px; font-size:16px" class="f">รายการสินค้านำเข้า</h>
          </a>
        </div>
        @endif

        @if (Auth::user()->roll === "ผู้จัดการ" or Auth::user()->roll === "ฝ่ายนำสินค้าออก" or Auth::user()->roll === "ฝ่ายดำเนินกับฝ่ายผลิต")
        <button class="dropdown-btn">
          <img src="{{ asset('storage/profile-photos/notew.png') }}" alt="" style="width:14%; margin-left:25px">
          <h style="margin-left:15px" class="f">นำออกสินค้า</h>
        </button>
        <div class="dropdown-container">
          <a href="{{ route('ExportOrder.index') }}"><img src="{{ asset('storage/profile-photos/arrow.png') }}" alt="" style="width:5%; margin-left:47px">
            <h style="margin-left:8px; font-size:16px" class="f">เพิ่มคำร้อง</h>
          </a>
          <a href="{{ url('ExportProductOrder') }}"><img src="{{ asset('storage/profile-photos/arrow.png') }}" alt="" style="width:5%; margin-left:47px">
            <h style="margin-left:8px; font-size:16px" class="f">ออเดอร์</h>
          </a>
        </div>
        @endif

        @if (Auth::user()->roll === "ผู้จัดการ" or Auth::user()->roll === "ฝ่ายนำสินค้าออก" or Auth::user()->roll === "ฝ่ายดำเนินกับฝ่ายผลิต")
        <a href="{{ route('return') }}" style="text-align:;"><img src="{{ asset('storage/profile-photos/product-return copy.png') }}" alt="" style="width:14%; margin-left:25px">
          <h style="margin-left:15px" class="f">คืนสินค้า</h>
        </a>
        @endif

        @if (Auth::user()->roll === "ผู้จัดการ" or Auth::user()->roll === "ฝ่ายจัดการคลังสินค้า" )
        <a href="{{ route('check.index') }}" style="text-align:;"><img src="{{ asset('storage/profile-photos/filew.png') }}" alt="" style="width:14%; margin-left:25px">
          <h style="margin-left:15px" class="f">ตรวจสอบคลัง</h>
        </a>
        @endif
        @if (Auth::user()->roll === "ผู้จัดการ" or Auth::user()->roll === "ฝ่ายจัดการคลังสินค้า" )
        <button class="dropdown-btn">
          <img src="{{ asset('storage/profile-photos/clockw.png') }}" alt="" style="width:14%; margin-left:27px">
          <h style="margin-left:13px" class="f">รายงาน</h>
        </button>
        @endif
        <div class="dropdown-container">
          <a href="{{ url('/expire-inventory') }}"><img src="{{ asset('storage/profile-photos/arrow.png') }}" alt="" style="width:5%; margin-left:47px">
            <h style="margin-left:8px; font-size:16px" class="f">สินค้าหมดอายุ</h>
          </a>
          <a href="{{ url('/expiring') }}"><img src="{{ asset('storage/profile-photos/arrow.png') }}" alt="" style="width:5%; margin-left:47px">
            <h style="margin-left:8px; font-size:16px" class="f">สินค้าใก้ลหมดอายุ</h>
          </a>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-5 col-lg-8 d-flex align-items-center justify-content-md-end mt-3 mt-md-0">

      <div class="col-10" style="text-align:end; margin-top:end; margin-top:-10px">
        <img class="h-8 w-8 rounded-circle" src="{{ Auth::user()->profile_photo_url }}" alt="" style="width:5%; margin-left:10px;">
      </div>
      <div class="col" style="color:#ffff; margin-top:-22px;">
        <div class="row">
          <div class="dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style=" color:#ffff">
              <b style="margin-top:; font-size:14px;">{{ Auth::user()->name}}</b>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown" style="background-color: #1E272E;">
              <li><a class="dropdown-item" href="{{ route('profile.show') }}"><img src="{{ asset('storage/profile-photos/userw.png') }}" alt="" style="width:14%;">
                  <h8 style="color:#ffff; margin-left:5px">Profile</h8>
                </a></li>
              @if(Auth::user()->roll === "ผู้จัดการ")
              <li><a class="dropdown-item" href="{{ route('users.index') }}"><img src="{{ asset('storage/profile-photos/memberw.png') }}" alt="" style="width:14%;">
                  <h8 style="color:#ffff; margin-left:5px">Manage member</h8>
                </a></li>
              @endif
              <form method="POST" action="{{ route('logout') }}">
                @csrf
                <li>
                  <button class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                    <img src="{{ asset('storage/profile-photos/exitw.png') }}" alt="" style="width:13%; margin-left:4px">
                    <h8 style="color:#ffff; margin-left:5px">Logout</h8>
                  </button>
                </li>
              </form>
            </ul>
          </div>
        </div>
        <div class="row" style="margin-left:5px; margin-top:-7px;">
          <b style="font-size:12px">{{ Auth::user()->roll}}</b>
        </div>
      </div>
    </div>
  </nav>
  <div class="container f">
    @yield('content')
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

  <script>
    function openNav() {
      document.getElementById("mySidenav").style.display = "block";
    }

    /* Close/hide the sidenav */
    function closeNav() {
      document.getElementById("mySidenav").style.display = "none";
    }
  </script>
  <script>
    /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
      dropdown[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
          dropdownContent.style.display = "none";
        } else {
          dropdownContent.style.display = "block";
        }
      });
    }
  </script>

  <!--js_graph-->
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

  <!--g_groupProduct-->
  <script type="text/javascript">
    google.charts.load("current", {
      packages: ["corechart"]
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['group', 'cuont'],
        ['Group : A', 2],
        ['Group : B', 2],
        ['Group : C', 1]
      ]);

      var options = {
        //title: 'กลุ่มสินค้า',
        pieHole: 0.4,
      };

      var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
      chart.draw(data, options);
    }
  </script>


  <!--g_rankingExport-->
  <script>
    google.charts.load('current', {
      packages: ['corechart', 'bar']
    });
    google.charts.setOnLoadCallback(drawBasic);

    function drawBasic() {

      var data = google.visualization.arrayToDataTable([
        ['name', 'Month: 2021/03', {
          role: 'style'
        }],
        ['ไม้', 15500, 'color: #2ECC71'],
        ['ไม่สนเเผ่น', 15000, 'color: #E74C3C'],
        ['เเลกเกอร์เงา', 10500, 'color: #F4D03F'],
        ['กระดาษทราย', 10000, 'color: #A569BD '], //; opacity: 0.2
        ['เเปลงทาเเลกเกอร์', 5500, 'color:#40E0D0;']
      ]);

      var options = {
        //title: 'ชื่อสินค้า',
        chartArea: {
          width: '50%'
        },
        hAxis: {
          title: 'จำนวนเงิน(บาท)',
          minValue: 0
        },
        vAxis: {
          title: 'ชื่อสินค้า',
        }
      };

      var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
      chart.draw(data, options);
    }
  </script>

  <script type="text/javascript">
    google.charts.load('current', {
      'packages': ['line']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

      var data = new google.visualization.DataTable();
      data.addColumn('number', 'Day');
      data.addColumn('number', 'ต้นทุนสินค้าเข้า');
      data.addColumn('number', 'มูลค่าสินค้าออก');
      data.addColumn('number', 'ต้นทุนที่เสียไป');

      data.addRows([
        [1, 37.8, 80.8, 41.8],
        [2, 30.9, 69.5, 32.4],
        [3, 25.4, 57, 25.7],
        [4, 11.7, 18.8, 10.5],
        [5, 11.9, 17.6, 10.4],
        [6, 8.8, 13.6, 7.7],
        [7, 7.6, 12.3, 9.6],
        [8, 12.3, 29.2, 10.6],
        [9, 16.9, 42.9, 14.8],
        [10, 12.8, 30.9, 11.6],
        [11, 5.3, 7.9, 4.7],
        [12, 6.6, 8.4, 5.2],
        [13, 4.8, 6.3, 3.6],
        [14, 4.2, 6.2, 3.4]
      ]);

      var options = {
        chartArea: {
          width: '50%'
        },
        hAxis: {
          title: 'วัน',
          minValue: 0
        },
        vAxis: {
          title: 'จำนวนเงิน(พันบาท)',
        }
      };

      var chart = new google.charts.Line(document.getElementById('linechart_material'));

      chart.draw(data, google.charts.Line.convertOptions(options));
    }
  </script>

  <script>
    google.charts.load('current', {
      packages: ['corechart', 'bar']
    });
    google.charts.setOnLoadCallback(drawBasic);

    function drawBasic() {

      var data = google.visualization.arrayToDataTable([
        ['name', 'Month: 2021/03', {
          role: 'style'
        }],
        ['TOA', 10, 'color: #2ECC71'],
        ['J&T', 8, 'color: #E74C3C'],
        ['Kerry', 6, 'color: #F4D03F'],
        ['SCG', 4, 'color: #A569BD '], //; opacity: 0.2
        ['DIY', 2, 'color:#40E0D0;']
      ]);

      var options = {
        //title: 'ชื่อสินค้า',
        chartArea: {
          width: '50%'
        },
        hAxis: {
          title: 'ชื่อบริษัท',
          minValue: 0
        },
        vAxis: {
          title: 'จำนวนครั้ง',
        }
      };

      var chart = new google.visualization.ColumnChart(document.getElementById('columnchart_values'));
      chart.draw(data, options);
    }
  </script>

  <script type="text/javascript">
    google.charts.load('current', {
      'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawVisualization);

    function drawVisualization() {

      var data = google.visualization.arrayToDataTable([
        ['Month', 'TOA', 'J&T', 'SCG', 'DIY'],
        ['มกราคม', 6, 9, 4, 3],
        ['กุมภาพันธ์', 7, 4, 6, 4],
        ['มีนาคม', 10, 7, 2, 6],
        ['เมษายน', 8, 5, 5, 7]
      ]);

      var options = {
        //title: 'ชื่อสินค้า',
        chartArea: {
          width: '50%'
        },
        hAxis: {
          title: 'เดือน'
        },
        vAxis: {
          title: 'จำนวนวัน',
        },
        seriesType: 'bars',
      };

      var chart = new google.visualization.ComboChart(document.getElementById('chart_dive'));
      chart.draw(data, options);
    }
  </script>
</body>

</html>