
@extends("layouts.template")
@section("title","N'hésitez pas à nous contacter")

@section("content")
{{-- formulaire de contact --}}
<form action="{{route('site.save')}}" method="post">
@csrf
<label class="form-label" for="nom">Nom</label>
    <input class="form-control" type="text" name="nom" id="nom" required>

    <label class="form-label" for="prenom">Prenom</label>
    <input  class="form-control" type="text" name="prenom" id="prenom" required>

    <label class="form-label" for="email">Email</label>
    <input class="form-control" type="email" name="email" id="email" required>

    <label class="form-label" for="tel">Tel</label>
    <input class="form-control" type="number" name="tel" id="tel" required>

<button class="btn btn-primary mt-3">Valide</button>
</form>
@endsection
