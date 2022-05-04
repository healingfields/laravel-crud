@extends('products.layout')

@section('content')
    <div>
        <h2>Laravel crud app</h2>
        <button type="button" value="Create new Product"/>
    </div>
    <div class="errors">

    </div>
    <table>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <th>Action</th>
        </tr>
        @foreach($products as $product)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->detail }}</td>
            <td>
                <form action="{{route('products.destroy', $product->id)}}" method="POST">
                    <a href="{{route('products.show', $product->id)}}">Show</a>
                    <a href="{{route('products.edit', $product->id)}}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

@endsection
