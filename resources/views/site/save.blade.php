@extends("layouts.template")
@section("content")
@foreach($inputs as $ind=>$val)
@if($ind!="_token")
votre {{$ind}} est : {{$val}}<br>
@endif
@endforeach
@endsection
