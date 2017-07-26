@extends('main')

@section('title', '|edit blog post')

@section('content')
<div class="row"> 
	{!!Form::model($post, ['route'=>['posts.update', $post->id], 'method'=> 'PUT'])!!}
	<div class="col-md-8">
		{{Form::label('title', 'title:')}}
		{{Form::text('title', null, ["class"=>'form-control input-lg'])}}
		{{Form::label('body', 'body:',['class'=>'form-spacing-top'])}}
		{{Form::textarea('body', null, ['class'=>'form-control'])}}
		
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
					{!!Html::linkRoute('posts.show','Cancel', array($post->id), array('class'=>'btn btn-danger btn-blcok'))!!}
					
				</div>

				<div class="col-sm-6">
					{{Form::submit('save changes',['class'=>'btn btn-success btn-blcok'])}}
					
				</div>
			</div>	
		</div>
	</div>
	{!!form::close()!!}
</div>

@endsection