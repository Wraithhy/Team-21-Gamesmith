@extends('layouts.app')
@section('content')

@foreach($reviews as $review)
<h1>{{$review->user_name}}</h1>
<h1>{{$review->product_name}}</h1>
<h1>{{$review->product_message}}</h1>
@endforeach

@endsection