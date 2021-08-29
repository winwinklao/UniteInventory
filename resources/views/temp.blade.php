@extends('navbar')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3" style="margin-top: 20px">
    <h1 class="text-right">เพิ่มพนักงานใหม่</h1>
</div>
<div class="container shadow rounded bg-white mt-4 mb-4 ">
    <div class="row">
        <div class="col-md-1 border-right"></div>
        <div class="col-md-3 border-right" style="margin-top:60px">
            <img id="blah" src="{{ asset('storage/profile-photos/addPro.png') }}" alt="your image" width="100" height="100" />
            <input class="form-control form-control-sm" id="formFileSm" type="file" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])" style="margin-top:10px;">
        </div>
        <div class="col-md-7 border-right" style="margin-left:40px; background:;">
            <div class="p-3 py-5">

                <div class="row mt-3">
                    <div class="col-md-6"><label for="name" class="labels">ชื่อ</label>
                    <input name="name" id="name" type="text" value="{{ old('name', '') }}" class="form-control" placeholder="" aria-label="">
                    </div>
                    <div class="col-md-6"><label class="labels">รหัสพนักงาน</label>
                    <input type="text" class="form-control" placeholder="" aria-label="">
                    </div>
                    
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label for="email" class="labels">อีเมลล์</label>
                    <input name="email" id="email" value="{{ old('email', '') }}" type="text" class="form-control" placeholder="" value=""></div>
                    <div class="col-md-6"><label class="labels">ตำแหน่ง</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>เลือกตำแหน่ง</option>
                            <option value="1">ผู้จัดการ</option>
                            <option value="2">ฝ่ายนำสินค้าเข้า</option>
                            <option value="3">ฝ่ายนำสินค้าออก</option>
                            <option value="3">ฝ่ายดำเนินการกับฝ่ายผลิต</option>
                            <option value="3">ฝ่ายจัดการคลังสินค้า</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">อายุ</label><input type="text" class="form-control" placeholder="" value=""></div>
                    <div class="col-md-6"><label class="labels">เบอร์โทรศัพท์</label><input type="text" class="form-control" placeholder="" value=""></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">ที่อยู่</label><input type="text" class="form-control" placeholder="" value=""></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">รหัสผ่าน</label><input type="text" class="form-control" placeholder="" value=""></div>
                    <div class="col-md-6"><label class="labels">รหัสผ่านอีกครั้ง</label><input type="text" class="form-control" placeholder="" value=""></div>
                </div>
            </div>
            <div class="px-4 py-2 bg-white sm:p-6">
                <label for="terms">
                    <div class="flex items-center">
                        <input type="checkbox" class="form-check-input" name="terms" id="terms" />

                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                        ]) !!}

                    </div>
                    <label>
            </div>
            <div class="row mt-0">
                <div class="col-8 mt-0 text"></div>
                <div class="col-2 mt-0 text-end"><button class="btn profile-button" type="button" style="background-color:#1E272E; border-radius: 100px; width:90px; color:#ffff">ตกลง</button></div>
                <div class="col-2 mt-0 text-end"><button class="btn btn-danger profile-button" type="button" style="border-radius: 100px;width:90px">ยกเลิก</button></div>
            </div>
            <div class="row mt-4"></div>
        </div>
    </div>
</div>

@endsection