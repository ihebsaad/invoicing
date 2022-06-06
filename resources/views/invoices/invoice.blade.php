
@extends('layouts.pdf')
 
@section('content')
	
	Id: {{$invoice->id}}<br>
	Client: {{ $invoice->customer()->first()->name }} {{ $invoice->customer()->first()->lastname }}<br>

@endsection
