@extends('products.layout')
@section('content')
    <div >
        <div >
                <h2> Show Product</h2>
                <a href="{{ route('products.index') }}"> Back</a>
        </div>
    </div>
    <div >
            <div>
                <strong>Name:</strong>
                {{ $product->name }}

            </div>
            <div >
                <strong>Details:</strong>
                {{ $product->detail }}

            </div>
        </div>
    </div>
@endsection
