

@extends('admin.template')

@section('content')

        <div class="container text-center">
        <div class="page-header">

		    <h1>

        <i class="fa fa-shopping-cart"></i>
         CATEGORIAS  
         <a href="{{ route('category.create') }}" class="btn btn-primary">
					<i class="fa fa-plus-circle"></i> categoria
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
					<th>Nombre</th>
					<th>Descripcion</th>
                    <th>Author</th>
                    <th>Tipo</th>
</tr>

            </thead>
			<tbody>
				@foreach($categories as $category)
					<tr>
                    
                            <td>
                    <a  href="{{ route('category.edit',     $category) }}" class="btn btn-primary">
								<i class="fa fa-edit"></i>
                            </a>
                    </td>    

                    <td>
                    {!! Form::open(['route' => ['category.destroy', $category]]) !!}
								<input type="hidden" name="_method" value="DELETE">
								<button onClick="return confirm('¿Eliminar registro?')" class="btn btn-danger">
									<i class="fa fa-trash"></i>
								</button>
							{!! Form::close() !!}
                    </td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->description }}</td>
                    <td>{{ $category->author }}</td>
                    <td>{{ $category->type }}</td>

                                                        </tr>
                                                  @endforeach

                                                     </tbody>
                                         </table>
                                 </div>
                    
                      </div>

            </div>
@stop




