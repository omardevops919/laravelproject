@extends("layouts.template")
@section("content")




<form action="{{route('categories.store')}}" method="post">
@csrf
<div class="row">
<div class="col-md-6">
    @if($errors->any())
    <ul class="alert alert-danger ps-5">
    @foreach ($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
    </ul>
    @endif
</div>
<div class="col-md-6"></div>
<div class="col-md-6">
    <label class="form-label" for="name">Nom categorie</label>
<input class="form-control" type="text" value="{{old('name')}}" name="name" id="name" required>
</div>
<div class="col-md-12">
<button type="submit" class="btn btn-primary mt-3">Ajouter</button>
<button type="reset" class="btn btn-secondary mt-3">Annuler</button>
</div>
</div>
</form>
@endsection
