
@section('title', 'Home')

@extends('layouts.app')

@section('sidebar')
	@parent
	<p>This is appended  to the sidebar .</p>
@endsection

@section('content')
	<h1>This is the home view page</h1>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro asperiores tenetur ad numquam sequi voluptatibus aut amet totam quibusdam rerum minus quod, repudiandae vitae dignissimos. Nihil accusantium ipsam animi fugiat!</p>
@endsection

