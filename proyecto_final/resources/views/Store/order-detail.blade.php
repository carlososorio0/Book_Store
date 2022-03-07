@extends('store.template')

@section('content')

    <div class="container text-center">
	<div class="page-header">
		<h1><i class="fa fa-shopping-cart"></i> Detalle del Pedido</h1>
    </div>
    
    <div class="page">
	<div class="table-responsive">

		
		<h3>Datos del Usuario:</h3>
		<table class="table table-striped   ">
            <tr><td>Nombre:</td><td>{{ Auth::user()->name . " ". Auth::user()->last_name }}</td></tr>
            <tr><td>Usuario:</td><td>{{ Auth::user()->user }}</td></tr>
            <tr><td>Correo:</td><td>{{ Auth::user()->email }}</td></tr>
            <tr><td>Direccion:</td><td>{{ Auth::user()->address }}</td></tr>      

    </table>
</div>
<div class="table-responsive">
    <h3>Datos del pedido</h3>
    <table class="table table-striped ">
        <tr>
            <th><center>Producto</center></th>
            <th><center>Precio</center></th>
            <th><center>Cantidad</center></th>
            <th><center>Subtotal</center></th>
</tr>

                        @foreach($cart as $item)
						<tr>
							<td>{{ $item->name }}</td>
							<td>${{ number_format($item->price, 2) }}</td>
							<td>{{ $item->quantity }}</td>
                            <td>${{ number_format($item->price * $item->quantity, 3) }}</td>
                    </tr>

                @endforeach	
                </table><hr>
                <h3>
                <span class="label label-success">
					Total: ${{ number_format($total, 3) }}
				</span>
            </h3><hr>
            

            <a class="btn btn-primary" href="{{ route('cart-show') }}">
				<i class="fa fa-chevron-circle-left"></i> Regresar
            </a>
            
            <a class="btn btn-warning"  href="javascript:abrir()">
				Pagar  <i class="fa fa-credit-card "></i>
</a>


<div class="ventana"  id="vent"> 

   <i> <h3>ARTICULO PAGADO EXITOSAMENTE,<br><br> 
        GRACIAS POR TU COMPRA :) </h3></i> <br><br><br>
    <a class="btn btn-primary" href="{{ route('cart-trash') }}">

    
				<i class="fa fa-chevron-circle-left"></i> Regresar
            </a>

    
</div>
            

<script>
    function abrir() {
        document.getElementById("vent").style.display="block";
    }



</script>

            

</div>
</div>
</div>
@stop

