@extends("layouts.template")
@section("content")

@if($errors->any())
<ul class="alert alert-danger ps-5">
@foreach ($errors->all() as $error)
<li>{{$error}}</li>
@endforeach
</ul>
@endif

<form action="{{route('products.update',$product->id)}}" method="post">
    @method("PUT")
@csrf
<div class="row">
<div class="col-md-6">
    <label class="form-label" for="name">Nom produit</label>
<input class="form-control" value="{{$category->name}}" type="text" name="name" id="name" required>
</div>
<div class="col-md-6">
    <label class="form-label" for="price">Prix produit</label>
<input class="form-control" value="{{$product->price}}" type="text" name="price" id="price" required>
</div>
<div class="col-md-6">
    <label class="form-label" for="description">description produit</label>
<input class="form-control" value="{{$product->description}}" type="text" name="name" id="name" required>
</div>
<div class="col-md-6">
    <label class="form-label" for="description">description categorie</label>
<input class="form-control" value="{{$product->description}}" type="text" name="description" id="description" required>
</div>
<div class="col-md-6">
    <label class="form-label" for="photo">Image produit</label>
<input class="form-control" value="{{$product->photo}}" type="photo" name="photo" id="description" required>
</div>
<div class="col-md-6">
    <label class="form-label" for="category_id">ID produit</label>
<input class="form-control" value="{{$product->category_id}}" type="category_id" name="category_id" id="category_id" required>
</div>
<div class="col-md-12">
<button type="submit" class="btn btn-success mt-3">Modifier</button>
<button type="reset" class="btn btn-secondary mt-3">Annuler</button>
</div>
</div>
</form>
@endsection