@extends("layouts.template")
@section("title","presentation de la societe")

@section("content")
<h1>C'est la page presentation</h1>
@php
    $n1=10;
$n2=15;
$moy=($n1+$n2)/2;
$tab=[];
@endphp

{{$moy}}

@forelse ($tab as $note)
la note est {{$note}}<br>
@empty
le tableau est vide!
@endforelse
@endsection
