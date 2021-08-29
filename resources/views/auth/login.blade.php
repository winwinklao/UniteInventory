<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>UNITEINVENTORY</title>
</head>
<body>

    <!-- <div class="bg-image" style="background-image: url('https://scontent.fbkk11-1.fna.fbcdn.net/v/t1.6435-9/168482374_1639520432925656_2190152928974284825_n.jpg?_nc_cat=107&ccb=1-3&_nc_sid=730e14&_nc_ohc=32djpOp_NRoAX_29lYA&_nc_ht=scontent.fbkk11-1.fna&oh=b09fc9f8b1902d8c3890d632e8a24e45&oe=60950876'); height: 100vh;"> -->
    <div class="bg-image p-5 shadow-1-strong rounded" style="background-image: url('https://scontent.fbkk11-1.fna.fbcdn.net/v/t1.6435-9/168482374_1639520432925656_2190152928974284825_n.jpg?_nc_cat=107&ccb=1-3&_nc_sid=730e14&_nc_ohc=32djpOp_NRoAX_29lYA&_nc_ht=scontent.fbkk11-1.fna&oh=b09fc9f8b1902d8c3890d632e8a24e45&oe=60950876'); height: 100vh;">
        <div style="background-color:">
            <div class="container"> 
                <div class="card" style="width: 81rem; height: 40rem; background-color: ; margin-top:20px; border-radius: 100px 0px 100px 0px;">
                    <div class="row">
                        <div class="col">
                            <div class="card" style="width: 41rem; height: 40rem; background-color:#1E272E; border-radius: 0px; margin-left:-1px; margin-top:-1px; border-radius: 100px 0px 0px 0px;">
                                <div style="text-align:center; margin-top:220px;">
                                    <img src="{{ asset('storage/profile-photos/logo.png') }}" alt="history" style="width:70%">
                                </div>
                            </div> 
                        </div>
                        <div class="col" style="margin-top:45px;">
                            <div style="text-align:center;">
                                <h style="font-size:50px;">เข้าสู่ระบบ</h>
                            </div>
                            <div class="card" style="width: 37rem; height: 26rem; border-radius: 45px; margin-left:-1px; border-color:#C4C4C4; margin-top:40px;">
                                <div class="row">
                                    <div class="col"></div>
                                    <div class="col-10">
                                        <form method="POST" action="{{ route('login') }}" style="margin-top:56px;">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="email" value="{{ __('Email') }}"  class="form-label">อีเมล</label>
                                                <input type="email" class="form-control" id="email" name="email" :value="old('email')" required autofocus aria-describedby="emailHelp" placeholder="อีเมล" aria-label="Username" style="border-radius: 10px; height:45px;">
                                            </div>
                                            <div class="mb-3">
                                                <label for="password" value="{{ __('Password') }}" class="form-label">รหัสผ่าน</label>
                                                <input type="password" class="form-control" id="password" name="password" placeholder="รหัสผ่าน" required autocomplete="current-password" style="border-radius: 10px; height:45px;">
                                            </div>
                                            <div class="mb-3 form-check">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label" for="exampleCheck1">จดจำรหัสผ่าน</label>
                                            </div>
                                            <div class="d-grid gap-2 mx-auto">
                                                <button class="btn" type="submit" style="background-color:#1E272E; border-radius: 10px; height:45px; margin-top:10px"><h style="color:#ffff">ลงชื่อเข้าใช้</h></button>
                                            </div>
                                            
                                        </form>
                                    </div>
                                    <div class="col"></div>
                                </div>
                                
                            </div> 
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
    
    <!-- </div> -->
    
    <!-- <div class="has-bg-img">
        <img class="bg-img" src="black6.png" alt="" style="height:100vh; width:100%;">
    </div> -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>