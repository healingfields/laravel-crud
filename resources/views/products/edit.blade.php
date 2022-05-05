@extends('products.layout')

@section('content')
    <div>
        <h1> Edit Product</h1>
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
    <form action="{{route('products.update', $product->id)}}" method="post">
        @csrf
        @method('PUT')
        <div>
            <div>
                <label>Name:</label>
                <input type="text" name="name" value="{{$product->name}}">
            </div>
            <div>
                <label>Detail:</label>
                <textarea name="detail">{{$product->detail}}</textarea>
            </div>
            <div>
                <button type="submit">Submit</button>
            </div>
        </div>
    </form>
@endsection
