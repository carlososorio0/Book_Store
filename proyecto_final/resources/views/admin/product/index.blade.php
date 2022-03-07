

@extends('admin.template')

@section('content')

        <div class="container text-center">
        <div class="page-header">

		    <h1>

        <i class="fa fa-shopping-cart"></i>
         PRODUCTOS  
         <a href="{{ route('product.create') }}" class="btn btn-primary">
					<i class="fa fa-plus-circle"></i> Productos
                </a>
        </h1>
            
            
</div>
<div class="page">
<div class="table-responsive">
		<table class="table table-bordered table-striped table-hover">
			<thead>
				<tr>
					<th>Editar</th>
                                        <th>Eliminar</th>
                                        <th>Imagen</th>
                                         <th>Nombre</th>
                                         <th>Categoria</th>
                                         <th>Autor</th>
                                         <th>Precio</th>
                                         <th>Visible</th>                                      				                   
</tr>

            </thead>
			<tbody>
				@foreach($products as $products)
					<tr>
                    
                            <td>
                    <a  href="{{ route('product.edit',     $products->author) }}" class="btn btn-primary">
								<i class="fa fa-edit"></i>
                            </a>
                    </td>    

                    <td>
                   

                        {!! Form::open(['route' => ['product.destroy', $products->author]]) !!}
								<input type="hidden" name="_method" value="DELETE">
								<button onClick="return confirm('¿Eliminar registro?')" class="btn btn-danger">
									<i class="fa fa-trash"></i>
								</button>
							{!! Form::close() !!}


                    </td>
                    <td><img src="{{ $products->image}}" width="40"></td>
                    <td>{{ $products->name }}</td>
                    <td>{{ $products->category->name }}</td>
                    <td>{{ $products->extract }}</td>
                    <td>{{ number_format($products->price,3) }}</td>
                    <td>{{ $products->visible == 1 ? "Si" : "No" }}</td>

                                                        </tr>
                                                  @endforeach

                                                     </tbody>
                                         </table>
                                 </div>

                                 <hr>


                                 
                     
                    


            </div>

            


 </div>
@stop




