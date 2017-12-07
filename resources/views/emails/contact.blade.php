
@extends('beautymail::templates.widgets')

@section('content')

	@include('beautymail::templates.widgets.articleStart')

		<h4 class="secondary"><strong>{{ $name }}</strong></h4>
		<p>Gestuurd via {{ $email }}</p>

	@include('beautymail::templates.widgets.articleEnd')


	@include('beautymail::templates.widgets.newfeatureStart')
	<h2>Bericht:</h2>
		<h4 class="secondary"><strong>{{ $berricht }}</strong></h4>


	@include('beautymail::templates.widgets.newfeatureEnd')

@stop
