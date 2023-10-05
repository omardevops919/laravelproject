@extends("layouts.template")
@section("content")

@if($errors->any())
<ul class="alert alert-danger ps-5">
@foreach ($errors->all() as $error)
<li>{{$error}}</li>
@endforeach
</ul>
@endif

<form action="{{route('categories.update',$category->id)}}" method="post">
    @method("PUT")
@csrf
<div class="row">
<div class="col-md-6">
    <label class="form-label" for="name">Nom categorie</label>
<input class="form-control" value="{{$category->name}}" type="text" name="name" id="name" required>
</div>
<div class="col-md-12">
<button type="submit" class="btn btn-success mt-3">Modifier</button>
<button type="reset" class="btn btn-secondary mt-3">Annuler</button>
</div>
</div>
</form>
@endsection
