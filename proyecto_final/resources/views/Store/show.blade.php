@extends('store.template')

@section('content')
    <div class="container text-center" >
    <div class="page-header">
        <h1><i class="fa fa-shopping-cart"></i> <i style="color:White;">Detalle del Libro </i></h1>
    </div>

    <div class="row">
        <div class="col-md-6">
                <div class="product-block">
            <img src="{{ $products->image }}">
        
        
                        </div>
        
                </div>
        <div class="col-md-6">
        <div class="product-block">
        <i style="color:White;"><h3>{{ $products->name }}</i></h3><hr>
        <div class="product-info panel">

        <h5><p align="left"> {{ $products->description }}</p></h5>
            <h3>
        <span class="label label-default">Precio: ${{number_format($products->price,3) }}</span>
            </h3>
           
                     </div>

                </div>
                <p>
            <a class="btn btn-warning " href="{{ route('cart-add', $products->author) }}">Lo Quiero</a>
                            </p>

          </div>
    </div>
<hr>

    

        

        

        <p>
            <a class="btn btn-primary" href="{{route('home') }}">
                <i class="fa fa-chevron-circle-left"></i>
                Regresar  </a>
            </p>

            </div>

    @stop
