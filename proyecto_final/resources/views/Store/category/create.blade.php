@extends('admin.template')

@section('content')


<div class="container text-center">
	<div class="page-header">
		<h1>
			<i class="fa fa-shopping-cart">

			</i>
			 Categorías: <small>[Agregar categoría]</small>
		</h1>
	</div>

	<div class="row">
		<div class="col-md-offset-3 col-md-6">

		<div class="page">
			@if (count($errors) > 0 )
				@include('admin.partials.errors')
				@endif

			
				{!! Form::open(['route' =>'category.store']) !!}

			<div class="form-group">
				<label for="name">Nombre:</label>

				{!!

					Form::text(
						'name',
						null,
						array(
							'class'=>'form-control',
							'placeholder' => 'Ingresa el nombre',
							'autofocus'  => 'autofocus'
						)
					)
					!!}
						</div>
						<div class="form-group">
							<label for="description">Descripcion</label>


							{!!
								Form::textarea(
									'description',
									null,
									array(
										'class'=>'form-control',	
										'placeholder' => 'Ingrese la descripcion'
									)
								)
							
				!!}
				</div>

									<div class="form-group">
							<label for="author">Autor:</label>


							{!!
								Form::text(
									'author',
									null,
									array(
										'class'=>'form-control',
										'placeholder' => 'Ingresa el autor',
										'autofocus'  => 'autofocus'
									)
								)
							
				!!}
				</div>

				<div class="form-group">
							<label for="type">Tipo</label>


							{!!
								Form::text(
									'type',
									null,
									array(
										'class'=>'form-control',
										'placeholder' => 'Ingresa el tipo',
										'autofocus'  => 'autofocus'
									)
								)
							
				!!}
				</div>
									

						<div class="form-group">
							{!! Form::submit('Guardar', array('class'=>'btn btn-primary'))  !!}
							<a href="{{ route('category.index') }}"
							class="btn btn-warning">Cancelar</a>
									</div>

									{!! Form::close() !!}
											</div>
									</div>
							</div>
					</div>

				
				@stop

			