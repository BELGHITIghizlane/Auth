<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Product') }}
        </h2>
    </x-slot>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div class="col s12">
                        <h1 class="text-center" style="color: rgb(0, 162, 255)">Product List</h1>
                        <div class="d-flex justify-content-end ">
                            {{-- <a href="{{ route('product.create') }}" class="btn btn-primary ">Create</a> --}}

                        </div>
                        <a class="nav-link active" aria-current="page"  href="{{route('create')}}">Create</a>
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
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
