@extends("navbar")
@section('content')

<h1 style='font-size : 200%;margin-top:20px'><b> แก้ไขข้อมูลสินค้า </b></h1>
<div>
    <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form method="post" action="{{ route('product.update',$product) }}" >
                @csrf
                @method('PUT')
                <div class="shadow overflow-hidden sm:rounded-md">
                    <!-- <div class="px-4 py-2 bg-white sm:p-6">
                        <label for="name" class="block font-medium text-sm text-gray-700">รูปภาพ</label>
                        <input type="file" class="custom-file-input" id="img" name='img'>
                        <!-- <label class="custom-file-label" for="customFile">Choose file</label> -->
                        @error('img')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div> 
                    <!-- <div class="px-4 py-2 bg-white sm:p-6">
                        <label for="id_product" class="block font-medium text-sm text-gray-700">รหัสสินค้า</label>
                        <input type="text" name="id_product" id="id_product" class='form-control' value="{{ old('id_product', $product->id_product) }}"/> 
                        @error('id_product')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div> -->

                    <div class="px-4 py-2 bg-white sm:p-6">
                        <label for="name" class="block font-medium text-sm text-gray-700">ชื่อสินค้า</label>
                        <input type="name" name="name" id="name" class='form-control' value="{{ old('name', $product->name) }}" />
                        @error('name')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="px-4 py-2 bg-white sm:p-6">
                        <label for="company" class="block font-medium text-sm text-gray-700">ชื่อบริษัท</label>
                        <input type="company" name="company" id="company" class='form-control' value="{{ old('company', $product->company) }}"/>
                        @error('company')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>


                    <div class="px-4 py-2 bg-white sm:p-6">
                        <label for="type" class="block font-medium text-sm text-gray-700">ประเภทสินค้า</label>
                        <input type="type" name="type" id="type" class='form-control'value="{{ old('type', $product->type) }}" />
                        @error('type')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="px-4 py-2 bg-white sm:p-6">
                        <label for="capacity" class="block font-medium text-sm text-gray-700">พื้นที่จัดเก็บ</label>
                        <input type="capacity" name="capacity" id="capacity" class='form-control' value="{{ old('use_area', $product->use_area) }}" />
                        @error('capacity')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <!-- <div class="px-4 py-5 bg-white sm:p-6">
                            <input type="file" class="custom-file-input" id="	profile_photo_path" name='	profile_photo_path'>
                            <label class="custom-file-label" for="customFile">Choose file</label>
                            @error('password')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div> -->



                    <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <button class="btn btn-success">
                            Create
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function preview(input) {
        var file = $("input[type=file]").get(0).file[0];
        if (file) {
            var render = new FileRender();
            reader.onload = function() {
                $('previewIMG').attr("src", render.result);
            }
            render.readAsDataURL(file);
        }
    }
</script>

@endsection