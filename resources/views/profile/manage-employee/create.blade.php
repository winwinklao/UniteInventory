

@extends('navbar')
@section('content')
        <h1 style='font-size : 200%'><b> เพิ่มพนักงาน </b></h1>
        <div>
            <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form method="post" action="{{ route('users.store') }}">
                        @csrf
                        <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-2 bg-white sm:p-6">
                                <label for="name" class="block font-medium text-sm text-gray-700">Name</label>
                                <input type="text" name="name" id="name" class='form-control' value="{{ old('name', '') }}" />
                                @error('name')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="px-4 py-2 bg-white sm:p-6">
                                <label for="email" class="block font-medium text-sm text-gray-700">Email</label>
                                <input type="text" name="email" id="email" class='form-control' value="{{ old('email', '') }}" />
                                @error('email')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="px-4 py-2 bg-white sm:p-6">
                                <label for="password" class="block font-medium text-sm text-gray-700">Password</label>
                                <input type="password" name="password" id="password" class='form-control' />
                                @error('password')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>


                            <div class="px-4 py-2 bg-white sm:p-6">
                                <label for="password_confirmation" class="block font-medium text-sm text-gray-700">Confirm Password</label>
                                <input type="password" name="password_confirmation" id="password_confirmation" required autocomplete="new-password" class='form-control' value="{{ old('name', '') }}" />
                                @error('name')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <!-- <div class="px-4 py-5 bg-white sm:p-6">
                            <input type="file" class="custom-file-input" id="	profile_photo_path" name='	profile_photo_path'>
                            <label class="custom-file-label" for="customFile">Choose file</label>
                            @error('password')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div> -->
                            <div class="px-4 py-2 bg-white sm:p-6">
                                <label for="roles" class="block font-medium text-sm text-gray-700">Roles</label>
                                <select name="roles[]" id="roles" class="form-select">
                                    @foreach($roles as $id => $role)
                                    <option value="{{ $id }}" {{ in_array($id, old('roles', [])) ? ' selected' : '' }}>{{ $role }}</option>
                                    @endforeach
                                </select>
                                @error('roles')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                            <div class="px-4 py-2 bg-white sm:p-6">
                                <label for="terms">
                                    <div class="flex items-center">
                                        <input type="checkbox" class="form-check-input" name="terms" id="terms" />

                                        <div class="ml-2">
                                            ยินยอมข้อตกลงของบริษัท
                                        </div>
                                    </div>
                                <label>
                            </div>
                            @endif




                            <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                                <button class="btn btn-success" style="border-radius: 100px; width:90px; color:#ffff">
                                    ตกลง
                                </button>
                                <a href="{{ route('users.index') }}" class="btn btn-danger profile-button" style="border-radius: 100px; width:90px; color:#ffff" >ยกเลิก</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

@endsection