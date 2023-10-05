@extends("layouts.template")
@section("content")




<form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
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
    <label class="form-label" for="name">Nom produit</label>
<input class="form-control" type="text" value="{{old('name')}}" name="name" id="name" required>
</div>
<div class="col-md-6">
    <label class="form-label" for="price">Prix produit</label>
<input class="form-control" type="number" value="{{old('price')}}" name="price" id="price" required>
</div>
<div class="col-md-6">
    <label class="form-label" for="description">Description produit</label>
<textarea class="form-control" type="text" name="description" id="description" required >{{old('description')}}</textarea>
</div>

<div class="col-md-6">
    <label class="form-label" for="photo">Photo produit</label>
    <input class="form-control"  type="file" value="{{old('photo')}}" name="photo" id="photo" accept="image/*" required>
</div>


<div class="col-md-6">
    <label class="form-label" for="category_id">Category</label>
    <option value="">--------choisir une categorie---------</option>
<select class="form-control" type="text" value="{{old('category_id')}}" name="category_id" id="photo" required>
@foreach($categories as $category)
    <option value="{{$category->id}}" @if($category->id==old('category_id'))selected @endif>{{$category->name}}</option>
@endforeach
</select>
</div>
<div class="col-md-12">
<button type="submit" class="btn btn-primary mt-3">Ajouter</button>
<button type="reset" class="btn btn-secondary mt-3">Annuler</button>
</div>
</div>
</form>
@endsection