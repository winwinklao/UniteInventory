
<style>
    #square {
    width: 1250px;
    height: 600px;
    top : 100;
    
    background: white;
    border-style: solid;
    border-color: white;
    /* position : fixed; */

    display: grid;
    grid-gap: 20px;
    grid-template-columns: auto auto auto auto auto auto ;
    padding: 10px;
    }


    #button{
    margin: 5px;
    }   

    #inner{
    width : 100px;
    height : 100px;
    margin: 5px;    
    /* background: #DCDCDC; */
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: 10px;
    border-color: white;
    }

    #inner1{
    width : 40px;
    height : 40px;
    margin: 5px; 
    ;  
    /* background: #DCDCDC; */
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: 10px;
    border-color: white;
    
    
    }
</style>
<?php
    $x = 0;
    foreach ($shelves as $shelf) {
        $x = abs($shelf->shelf_capacity - 100) + $x;
    }
    $y = 1;

?>

<body>
@extends('navbar')
@section('content')

<div class="container">
    <div class = "row">
        <h1 class = "col-md-2" style = 'margin-top: 5px ; font-size : 250%'><b> เชลฟ์ </b></h1>
        <h2 class = "col-md-8" style = 'margin-top: 25px ; font-size : 125% ' ><b> พื้นที่คลังที่ใช้งานแล้ว : {{$x}} </b></h2>
        <div class = "col-md-2">
        <form action="{{ url('shelf')  }}" method="POST">
          {{ csrf_field() }}
          {{ method_field('POST') }}
                <button type = 'submit' id = "btn" class="btn-square btn-light" style = 'margin-top: 20px ;' ><h6><b> + เพิ่มชั้นวางของ </b></h6></button> 
        </form>
        </div>

    
    </div>
        <div id = "square" style="height : 5%" >
            @foreach($shelves as $shelf)
                <div class="row col-12">
                    <a class="btn"  href="{{ route('shelf.show',$shelf->id) }}" id='inner'><h5>{{$y++}}</h5><br><h6>{{abs($shelf->shelf_capacity - 100)}}</h6></a> 
                    <div class = "row col-4">
                        <form action="{{ route('shelf.destroy',$shelf->id) }}" method="post" onsubmit="return confirm('Are you sure to delete this product?')" style="display:inline" >
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                    
                                    <button id='inner1' type="submit" class="btn btn-danger" value ="Delete"> x </button>
                        </form>
                        
                    </div>
                </div>
            @endforeach
        </div> 
    </div>
</body> 
@endsection
