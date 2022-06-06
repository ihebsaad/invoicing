
@extends('layouts.pdf')
 
@section('content')
	
	Id: {{$quote->id}}<br>
	Client: {{ $quote->customer()->first()->name }} {{ $quote->customer()->first()->lastname }}<br>

@endsection
