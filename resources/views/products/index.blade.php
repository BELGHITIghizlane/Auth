@extends('products.base')
@section('title', 'products')
@section('content')
    <div class="col s12">
        <h1 class="text-center" style="color: rgb(0, 162, 255)">Product List</h1>
        <div class="d-flex justify-content-end ">
            {{-- <a href="{{ route('product.create') }}" class="btn btn-primary ">Create</a> --}}

        </div>
        {{-- <table class="table table-bordered border-primary"> --}}
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Quantity</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th>action</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($product as $prouduct)
                    <tr>
                        <td>{{ $prouduct->id }}</td>
                        <td>{{ $prouduct->name }}</td>
                        <td>{{ $prouduct->description }}</td>
                        <td>{{ $prouduct->quantity }}</td>
                        <td><img width="100px" src="{{ asset($prouduct->image) }}" alt=""> </td>
                        <td>{{ $prouduct->price }}DH</td>

                        <td class="d-flex align-items-center justify-content-center">
                            <a href="{{ route('product.edit', $prouduct->id) }}" class="btn btn-primary">edit</a>
                            <form method="post" action="{{ route('product.destroy', $prouduct->id) }}">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger" value="delete">
                            </form>


                        </td>

                    </tr>

                @empty

                    <td colspan="6" align ="center">
                        <h6>no products</h6>
                    </td>
                @endforelse

            </tbody>
        </table>
    </div>
@endsection
