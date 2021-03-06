@extends('admin.template')

@section('content')

        <div class="container text-center">
            <div class="page-header">
                <h1><i href="#"
                     class="fa fa-rocket"></i> BOOKSTORE - DASHBOARD</h1>
</div>

    <h2>Bienvenid@ {{ Auth::user()->user }} al Panel de Administración de tu tienda en linea. </h2><hr>

    <div class="row">

            <div class="col-md-5">
                <div class="panel">
                    <i class="fa fa-list-alt icon-home"></i>
                    <a href="{{ route('category.index') }}" 
                    class="btn btn-warning btn-block btn-home-admin">
                    CATEGORIAS</a>
    </div>
</div>


<div class="col-md-5">
                <div class="panel">
                    <i class="fa fa-shopping-cart icon-home"></i>
                    <a href="{{ route('product.index') }}" 
                    class="btn btn-warning btn-block btn-home-admin">
                    PRODUCTOS</a>
                 </div>
             </div>
      </div>






                <div class="col-md-5">
                    
                <div class="panel">
                    <i class="fa fa-users icon-home"></i>
                    <a href="{{ route('user.index') }}" 
                    class="btn btn-warning btn-block btn-home-admin">
                    USUARIOS</a>

                  </div>
        </div>


</div>


</div>
@stop

