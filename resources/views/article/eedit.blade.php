@extends('layouts.master')


@section('content')

<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/Ystyle.css') }}">

	
	<div class="container">
		<div class="row">
			<div class="col-md-12">


				<form action="{{ url('articles/'.$article->id) }}" enctype="multipart/form-data" method="post">
					<input type="hidden" name="_method" value="PUT">
					{{ csrf_field() }}

					<div class="form-group @if($errors->get('libele')) form-control is-invalid @endif">
						<label for="">Libele</label>
						<input type="text" name="libele" class="form-control" value="{{ $article->libele }}">

						@if($errors->get('libele'))
									
								@foreach($errors->get('libele') as $message)
									<li> {{ $message }}</li>
								@endforeach
						@endif

					</div>

					<div class="form-group @if($errors->get('art_description')) form-control is-invalid @endif">
						<label for="">Description</label>
						<textarea name="art_description" class="form-control" >{{ $article->art_description }}</textarea>

						@if($errors->get('art_description'))
									
								@foreach($errors->get('art_description') as $message)
									<li> {{ $message }}</li>
								@endforeach
						@endif

					</div>

					<div class="form-group @if($errors->get('categorie')) form-control is-invalid @endif">
                            <label for="">Categorie</label>

                            <select class="form-select" aria-label="Default select example" name="categorie">
                            <option selected>Veuillez choisir votre categorie</option>
                            <option value="1" >Bijoux et Accessoire</option>
                            <option value="2" >Vehicule</option>
                            <option value="3" >Materiels et Meubles</option>
                            <option value="4" >Sport</option>
                            </select>

                                @if($errors->get('categorie'))
                                        
                                    @foreach($errors->get('categorie') as $message)
                                        <li> {{ "Vous devez choisir une categorie" }}</li>
                                    @endforeach
                                @endif
                        </div>

					<div class="form-group @if($errors->get('prix')) form-control is-invalid @endif">
						<label for="">prix</label>
						<input type="text" name="prix" class="form-control" value="{{ $article->prix }}">

						@if($errors->get('prix'))
									
							@foreach($errors->get('prix') as $message)
								<li> {{ $message }}</li>
							@endforeach
						@endif

					</div>


					<div class="form-group">
						<label for="">Image</label><br>
						<input class="form-group" type="file" name="image" >
					</div>

					<div class="form-group">
						<input type="submit" class="form-control btn btn-danger" value="Modifier">
					</div>

				</form>
				
			</div>
		</div>
	</div>

	
@endsection