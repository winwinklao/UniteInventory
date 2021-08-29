@extends("navbar")
@section('content')

<style>
    hr.style1 {
    border: 3px solid;
    border-color: #0000;
    border-radius: 5px;
}
</style>

    <div class = 'row'>
        <div class = 'col-1'></div>
        <div class = 'col-6'> 
            <h3 style = 'font-size : 250% ;margin-top: 50px'><b>รายการสินค้าที่จะได้รับ</b></h3>
        </div>
    </div>
    <br><br>
    <div class = 'row'>
        <div class = 'col-1'></div>
        <div class = 'col-6'> 
            <h3><b>งาน</b></h3>
        </div>
    </div>
    <div class = 'row'>
        <div class = 'col-1'></div>
            <div class = 'col-10'>
                <hr class = 'style1'>
            </div>
        <div class = 'col-1'></div>
    </div> 

    <div class = 'row'>
        <div class = 'col-1'></div>
        <div class = 'col-10'>
            <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    วันนี้
                </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <br>
                <div class = 'container block'>
                <table class="table table-boederless table-striped table table-hover" style ="border: 1px solid black">
                    <thead class = 'text-center'>
                        <tr class = 'fs-6'>
                            <th scope="col">ลำดับ</th>
                            <th scope="col">รหัสนำเข้าสินค้า</th>
                            <th scope="col">สถานะ</th>
                            <th scope="col">ผู้สั่งสินค้า</th>
                            <th scope="col">วันที่ต้องการรับสินค้า</th>
                            <th scope="col">บริษัท</th>
                            <th scope="col">ราคารวม</th>
                        </tr>
                        </thead>
                        <tbody class = 'text-center'>
                        @foreach ($orders1 as $order)
                        @if($order->success == FALSE)
                        <tr class = 'fs-6'>
                            <td scope="row">1</td>
                            <td scope="col">
                            <a href="{{ route('Importorder.show',$order->id) }}" class="text-indigo-600 hover:text-indigo-900 mb-2 mr-2">
                                {{$order->id}}
                            </a>
                            </td>
                            <td scope="col">รอนำเข้าสินค้า</td>
                            @foreach ($users as $user)
                            @if ($order->user_id == $user->id)
                            <td scope="col">{{$user->name}}</td>  
                            @endif
                            @endforeach
                            <td scope="col">{{ date('d/m/Y',strtotime($order->date_EXP)) }}</td>
                            <th scope="col">{{$order->id}}</th>
                            <th scope="col">{{$order->Total_price}}</th>
                        </tr>
                        @endif
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <br>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    สัปดาห์นี้
                </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <div class = 'container block'>
                    <table class="table table-boederless table-striped table table-hover" style ="border: 1px solid black">
                    <thead class = 'text-center'>
                        <tr class = 'fs-6'>
                            <th scope="col">ลำดับ</th>
                            <th scope="col">รหัสนำเข้าสินค้า</th>
                            <th scope="col">สถานะ</th>
                            <th scope="col">ผู้สั่งสินค้า</th>
                            <th scope="col">วันที่ต้องการรับสินค้า</th>
                            <th scope="col">บริษัท</th>
                            <th scope="col">ราคารวม</th>
                        </tr>
                        </thead>
                        <tbody class = 'text-center'>
                        @foreach ($orders2 as $order)
                        @if($order->success == FALSE)
                        <tr class = 'fs-6'>
                        
                            <td scope="row">1</td>
                            <td scope="col">
                            <a href="{{ route('Importorder.show',$order->id) }}" class="text-indigo-600 hover:text-indigo-900 mb-2 mr-2">
                                {{$order->id}}
                            </a>
                            </td>
                            <td scope="col">รอนำเข้าสินค้า</td>
                            @foreach ($users as $user)
                            @if ($order->user_id == $user->id)
                            <td scope="col">{{$user->name}}</td>  
                            @endif
                            @endforeach
                            <td scope="col">{{ date('d/m/Y',strtotime($order->date_EXP)) }}</td>
                            <th scope="col">{{$order->id}}</th>
                            <th scope="col">{{$order->Total_price}}</th>
                        
                        </tr>
                        @endif
                        @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    เดือนนี้
                </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                <div class = 'container block'>
                    <table class="table table-boederless table-striped table table-hover" style ="border: 1px solid black">
                    <thead class = 'text-center'>
                        <tr class = 'fs-6'>
                            <th scope="col">ลำดับ</th>
                            <th scope="col">รหัสนำเข้าสินค้า</th>
                            <th scope="col">สถานะ</th>
                            <th scope="col">ผู้สั่งสินค้า</th>
                            <th scope="col">วันที่ต้องการรับสินค้า</th>
                            <th scope="col">บริษัท</th>
                            <th scope="col">ราคารวม</th>
                        </tr>
                        </thead>
                        <tbody class = 'text-center'>
                        @foreach ($orders3 as $order)
                        @if($order->success == FALSE)
                        <tr class = 'fs-6'>
                            <td scope="row">1</td>
                            <td scope="col">
                            <a href="{{ route('Importorder.show',$order->id) }}" class="text-indigo-600 hover:text-indigo-900 mb-2 mr-2">
                                {{$order->id}}
                            </a>
                            </td>
                            <td scope="col">รอนำเข้าสินค้า</td>
                            @foreach ($users as $user)
                            @if ($order->user_id == $user->id)
                            <td scope="col">{{$user->name}}</td>  
                            @endif
                            @endforeach
                            <td scope="col">{{ date('d/m/Y',strtotime($order->date_EXP)) }}</td>
                            <th scope="col">{{$order->id}}</th>
                            <th scope="col">{{$order->Total_price}}</th>
                        </tr>
                        @endif
                        @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class = 'col-1'></div>
    </div>
@endsection
