<form action="{{route('stroy')}}" method="post" enctype="multipart/form-data">
    @csrf

<div class="from-group">
    <div class="mb-3">
        <label for="Name" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" aria-describedby="name" value="{{old('name')}}" >
        <div id="emailHelp" class="form-text">We'll never share your name with anyone else.</div>
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
      </div>
      </div>
    {{-- <label from="name">Name</label><br> --}}
    {{-- <input type="text" name="name" class="from-control" value="{{old('name')}}" > --}}
   {{-- @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  </div>--}}

  <div class="from-group">
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <input type="description" class="form-control"  name ="description" id="name" aria-describedby="description">
        <div id="description" class="form-text">We'll never share your description with anyone else.</div>
        @error('description')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
      </div>
    {{--<label from="description">Description</><br>
    <input textarea="description" name="description" id="name" class="from-control" value="{{old('description')}}" ></textare>
    @error('description')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  </div>--}}


  <div class="from-group">
    <div class="mb-3">
        <label for="quantiti" class="form-label">Quantiti</label>
        <input type="number" class="form-control"  name="quantity" id="quantity" aria-describedby="quantity" value="{{old('quantiti')}}">
        <div id="emailHelp" class="form-text">We'll never share your quantity with anyone else.</div>
        @error('quantity')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
      </div>

    {{--<label from="quantiti">Quantiti</label><br>
    <input type="number" name="quantity" id="quantiti" class="from-control" value="{{old('quantiti')}}" >
    @error('quantity')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  </div>--}}

  <div class="from-group">
    <div class="mb-3">
        <label for="name" class="form-label">Image</label>
        <input type="file" class="form-control" name="image" id="name" aria-describedby="image">
        <div id="emailHelp" class="form-text">We'll never share your image with anyone else.</div>
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
      </div>
    {{--<label from="name">Image</label><br>
    <input type="file" name="image" id="name" class="from-control" >
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  </div>--}}

  <div class="from-group">
    <div class="mb-3">
        <label for="price" class="form-label">Price</label><br>
        <input type="number"  step="0.5" name="price" id="price" class="from-control" value="{{old('price')}}" aria-describedby="price">
        <div id="emailHelp" class="form-text">We'll never share your price with anyone else.</div>
        @error('price')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
      </div>
    {{--<label from="price">Price</label><br>
    <input type="number"  step="0.5" name="price" id="price" class="from-control"value="{{old('price')}}"  >
    @error('price')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  </div>--}}

  <div class="from-group">

        <input type="submit" class="btn btn-primary w-100" value="Add" ><br>
</form>

