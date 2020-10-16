@extends('layout')

@section('content')
	@foreach ($achievements as $achievement)
	
	<!--<img src={{$achievement->img}}/>-->
	<center><img src="https://demo.themezy.com/system/resources/demo_themes/000/000/202//wp-content/uploads/sites/2/2013/10/salt-lake-74570_1280-720x340.jpg" alt=""></center>
	<h6 align = "center">{{$achievement->achievement_date}}</h6>
	<h6 align = "center">{{$achievement->title}}</h6>
	<p align = "center">{{$achievement->description}}</p></h5>
	
	@endforeach
@endsection