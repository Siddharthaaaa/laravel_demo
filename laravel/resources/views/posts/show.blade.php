@extends('main') 

@section('title', '|view post')

@section('content')
<div class="row"> 
	<div class="col-md-8">
		<h1> {{$post->title}}</h1>
		<p class='lead'> {{$post->body}}</p>
	</div>
	<div class="col-md-4">
		<div class="well"> 
			<dl class="dl-horizontal"> 
			<dt>created at:</dt>
			<dd>{{ date('M j, Y h:ia', strtotime($post->created_at))}}</dd>
			</dl>

			<dl class="dl-horizontal"> 
			<dt>last updated:</dt>
			<dd>{{ date('M j, Y h:ia', strtotime($post->updated_at))}}</dd>
			</dl>	
			<hr>
			<div class="row">
				<div class="col-sm-6">
					{!!Html::linkRoute('posts.edit','Edit', array($post->id), array('class'=>'btn btn-primary btn-blcok'))!!}
					
				</div>

				<div class="col-sm-6">
					{!!Form::open(['route'=>['posts.destroy', $post->id], 'method'=>'DELETE'])!!}
					
					{!!Form::submit('Delete',['class'=>'btn btn-danger btn-blcok'])!!}
					{!!Form::close()!!}
				</div>
			</div>	
			<div class="row">
				<div class="col-sm-12">
					{{Html::linkroute('posts.index', 'see all posts', [], ['class'=>'btn btn-default btn-blcok btn-h1-spacing'])}}
				</div>
			</div>


		</div>
	</div> 
</div>
	
	
		
@endsection