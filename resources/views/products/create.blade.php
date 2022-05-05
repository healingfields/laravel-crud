@extends('products.layout')

@section('content')
<div>
    <h1> Add new product</h1>
    <a href="{{route('products.index')}}">Back</a>
</div>
@if($errors->any())
    <div>
        <strong>Please correct the provided infos</strong>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="POST" action="{{route('products.store')}}">
    @csrf
    <div>
        <div>
            <label>Name:</label>
            <input type="text", name="name">
        </div>
        <div>
            <label>Detail:</label>
            <textarea name="detail"></textarea>
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </div>
</form>
@endsection
