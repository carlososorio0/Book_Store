@extends('store.template')

@section('content')

    <div class="container text-center">
        <div class="page-header">
            <h1><i class="fa fa-shopping-cart"></i> Carrito de compras</h1>
    </div>
    

    <div class="table-cart">
    @if(count($cart))

        <p>
            <a href ="{{ route('cart-trash') }}" class="btn btn-danger">
            Vaciar Carrito <i class="fa fa-trash"></i>
                </a>

            </p>

    <div class="table-responsive">
        
        <table class="table table-striped table-hover table-bordered">
            <thead>
                <tr>
                    
                        <th><center>Imagen</center></th>
                        <th><center>Producto</center></th>
                        <th><center>Precio</center></th>
                        <th><center>Cantidad</center></th>
                        <th><center>Subtotal</center></th>
                        <th><center>Eliminar</center></th>
                        

                </tr>
            </thead>

        <tbody>
            @foreach($cart as $item)
            <tr>
                <td><img src="{{ $item->image  }}"></td>
                <td>{{ $item->name }}</td>
                <td>${{ number_format($item->price,3) }}</td>
                <td> 
                    <input
                        type="number"
                        min="1"
                        max="100"
                        value="{{$item->quantity }}"
                        id="products_{{ $item->id }}"
                        >
                        <a
                            href="#"
                            class="btn btn-warning btn-update-item"
                            data-href="{{ route('cart-update', $item->author) }}"
                            data-id = "{{ $item->id }}"
                            >

                            <i class="fa fa-refresh"></i>
</a>

                    
                
               
                


       </td>
                <td>${{ number_format($item->price * $item->quantity,3)  }}</td>
                <td>
                    
                <a href="{{ route('cart-delete', $item->author) }}" class="btn btn-danger">
                            <i class="fa fa-remove"></i>
                                 </a>
                            </td>
                         </tr>

                             @endforeach
                        </tbody>
                    </table><hr>

                    <h3>
                    <span class="label label-success">
                            Total: ${{number_format($total,3) }}
</span>
</h3>


                  



            </div>
        
             @else

                     <h3><span class="label label-warning">No tienes productos en tu carrito</span></h3>
                      @endif
                    <hr>
                    <p>
                        <a href="{{ route('home') }}" class="btn btn-primary">
                            <i class="fa fa-chevron-circle-left"></i> Seguir Comprando
                    </a>
                <a href="{{ route('order-detail') }}" class="btn btn-primary">
                Continuar <i class="fa fa-chevron-circle-right"></i>
                    </a>

                </p>

                

                </div>

        </div>
        
       
@stop
