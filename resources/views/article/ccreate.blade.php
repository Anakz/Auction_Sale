@extends('layouts.master')


@section('content')


	<!--div style="padding-left: 0px;"-->
	<br><br>
<div class="" style="padding-left: 300px;">
		<div class="card border-dark mb-3" style="width: 900px;height: 555px;padding-right: 0px; border-color: red ;border-width: 3px;">
		  <div class="card-header" style="background-color: #803030;color: white">Formulaire</div>
			  <div class="card-body text-dark">
			  	<br>
			    <h1 class="card-title" style="color: #EDC644 ;padding-left: 55px;">Article informations</h1>
			    

			    	<div class="container" style="width: 800px;height: 1500px;">
			<div class="row">
				<div class="col-md-12">


					<form action="{{ url('articles') }}" enctype="multipart/form-data" method="post" >
						
						{{ csrf_field() }}

						<div class="form-group @if($errors->get('libele')) form-control is-invalid @endif">
							<label for="">Libele</label>
							<input type="text" name="libele" class="form-control" value="{{ old('libele') }}">

								@if($errors->get('libele'))
										
									@foreach($errors->get('libele') as $message)
										<li> {{ $message }}</li>
									@endforeach
								@endif

						</div>

						<div class="form-group @if($errors->get('art_description')) form-control is-invalid @endif">
							<label for="">Description</label>
							<textarea name="art_description" class="form-control">{{ old('art_description') }}</textarea>

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
	  						<option value="1">Meubles et objets d'art</option>
	  						<option value="2">Vehicule</option>
	  						<option value="3">Materiels professionnels</option>
	  						<option value="4">Sport</option>
	  						</select>

								@if($errors->get('categorie'))
										
									@foreach($errors->get('categorie') as $message)
										<li> {{ "Vous devez choisir une categorie" }}</li>
									@endforeach
								@endif
						</div>

						<div class="form-group @if($errors->get('prix')) form-control is-invalid @endif">
							<label for="">prix</label>
							<input type="text" name="prix" class="form-control" value="{{ old('prix') }}">

							@if($errors->get('prix'))
										
								@foreach($errors->get('prix') as $message)
									<li> {{ $message }}</li>
								@endforeach
							@endif

						</div>

						<div class="form-group">
							<label for="">Image</label><br>
							<input class="form-group" type="file" name="image">
						</div>
						<br><br>
						<div class="form-group">
							<input type="submit" class="form-control btn btn-dark" value="Enregistrer" style="color: white; width: 150px;">
						</div>

					</form>
					
					</div>
					</div>
				</div>
			</div>

		    
		  
	</div>
</div>
	
	
@endsection