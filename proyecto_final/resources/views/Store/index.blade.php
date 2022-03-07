
@extends('store.template')

@section('content')
     <div class="container text-center">

     <div id="products">
        @foreach($products as $products)
        
       
        

        <div class="products white-panel">
            
        <h3>{{ $products->name }}</h3><hr>
        <img src="{{$products->image }}" width='200'>
        <div class="products-info panel">
        <p> <b>{{$products->extract }} </b></p>
        <h3><span class="label label-default">Precio: ${{ number_format($products->price,3) }}</span></h3>
        

        
        
       


        
        <a class="btn btn-warning " href="{{ route('cart-add',  $products->author) }}">
            <i class="fa fa-cart-plus"></i>
        Lo Quiero</a>
                           
       
            


            <a class="btn btn-primary" href="{{ route('products-detail',  $products->author) }}">
            <i class="fa fa-chevron-circle-right"></i> Leer Mas</a>
            </p>
        
        </div>
            </div>
            @endforeach
            

     </div>
     </div>
    
@stop