@extends('layouts.layoutBack')

@section('content')
	<ol class="breadcrumb">
        <li>
            <i class="fa fa-file-text"></i>  <a href="{{ route('posts.index') }}">Posts</a>
        </li>
        <li class="active">
            <i class="fa fa-plus-square"></i> Create
        </li>
    </ol>

	<div class="form-horizontal">
		<div class="col-md-8 col-md-offset-2">

			{!! Form::open(['method' => 'POST', 'action' => 'AdminPostsController@store', 'files' => true]) !!}
	            <fieldset>

				<!-- Form Name -->
				<legend>Nouvel Article</legend>
		 
	            <div class="form-group">
	             	 {!! Form::label("title", "Titre", ['class' => 'col-md-4 control-label']) !!}
    				 {!! Form::text("title", null) !!}<br />
                </div>

	            <div class="form-group">
	            	{!! Form::label("content", "Contenu", ['class' => 'col-md-4 control-label']) !!}
    				{!! Form::textarea("content", null) !!}<br />

	            </div>

                <div class="form-group">
	                {!! Form::label("is_active", "Affichage", ['class' => 'col-md-4 control-label']) !!}
    				{!! Form::select("is_active", [0 => "Inactif", 1 => "Actif"], ['class' => 'form-control'] ) !!}
	            </div>

                <div class="form-group">
{!! Form::label("category_id", "Categorie", ['class' => 'col-md-4 control-label']) !!}
    {!! Form::select("category_id", $plucked) !!}
                </div>

		        <div class="form-group">
		        	{!! Form::file('file', null) !!} 
		        </div>
		        

	            {!! Form::submit("Envoyer", ['class' => 'waves-effect waves-light btn']) !!}
	            
			{!! Form::close() !!}

	    </div><!-- /. col-md-8 -->
    </div><!-- /. row -->

@stop

@section('scripts')

	<!-- Markdown config -->
	<script>
		$(document).ready(function(){
			var simplemde = new SimpleMDE({
			    element: document.getElementById("text"),
			    renderingConfig: {
			        singleLineBreaks: false,
			        codeSyntaxHighlighting: true,
			    }
			});
		});
	</script>

	<!-- Auto populate slug from title input -->
	<script>
		$('#title').on('keypress blur', function() {
		    var val = $(this).val();
		    val = val.replace(/\s+/g, '-').toLowerCase();
		    $('#slug').val(val);
		});
	</script>
@stop