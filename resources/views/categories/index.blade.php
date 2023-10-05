@extends("layouts.template")
@section("content")

@if(Session::has("success"))
<div class="alert alert-success">
{{Session::get("success")}}
</div>
@endif

<table class="table table-stripped table-bordered">
    <thead>
        <tr>
            <th>Name</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
@forelse ($categories as $category)
        <tr>
            <td>{{$category->name}}</td>
            <td>
                <a href="{{route('categories.edit',$category->id)}}"><button class="btn btn-success">edit</button>
                <form class="d-inline" method="post" action="{{route('categories.destroy',$category->id)}}">
                   @csrf
                    @method("delete")
                    <button type="submit" class="btn btn-danger" onclick="return confirm('etes vous sure de supprimer?')">delete</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="2" class="text-center">pas de cétegories pour le moment!</td>
        </tr>
@endforelse
    </tbody>
</table>
@endsection
