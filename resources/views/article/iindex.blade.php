@extends('layouts.master')

@section('content')


	<div class="container">
		<div class="row">
			<div class="col-md-12">

				

				<h1 class="text-center">La liste de tous les articles</h1>

				<div class="pull-right">
					<a href="{{ url('articles/create') }}" class="btn btn-success">Nouveau Article</a>
				</div>

						<div class="">
												
							<form action="{{ url('articles/categorie') }}" method="get">

								{{ csrf_field() }}

								<label for="">Veuillez choisir votre categorie</label>

								<select class="form-select" aria-label="Default select example" name="id_categorie">
			  					<option value="5" >Tout</option>
			  					<option value="1" >Meubles et objets d art</option>
			  					<option value="2" >Vehicule</option>
			  					<option value="3" >Materiels professionnels</option>
			  					<option value="4" >Sport</option>
			  					</select>

			  					<div class="form-group">
								<input type="submit" class="form-control btn btn-primary" value="Chercher">
								</div>

							</form>
							
						</div>	
							
				<hr>

					<div class="row">
						@foreach($articles as $article)
						@if( ($article->date_echeance) > date('Y-m-d') )

						<div class="col-sm-6 col-md-4">
							<div class="thumbnail">
								<img src="{{ asset('storage/'.$article->image) }}" alt="...">
								<div class="caption">
									<h3>{{ $article->libele }}</h3>
									<h5>Prix = {{ $article->prix_seuil }}</h5>
								</div>
								<p>
									<form action="{{ url('articles/'.$article->id) }}"  method="post">
                                        
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <a href="{{ url('articles/encherir/'.$article->id) }}" class="btn btn-primary">Encherir</a>
                                        <a href="{{ url('articles/'.$article->id) }}" class="btn btn-default">Details</a>

                                        @can('update', $article)
                                        <a href="{{ url('articles/'.$article->id.'/edit') }}" class="btn btn-warning">Editer</a>
                                        @endcan

 
                                        @can('delete', $article)
                                        <button type="submit" class="btn btn-danger">Supprimer</button>
                                        @endcan
                                    </form>
								</p>
							</div>
						</div>
						@endif
						@endforeach
					</div>

			</div>
		</div>
	</div>


@endsection
