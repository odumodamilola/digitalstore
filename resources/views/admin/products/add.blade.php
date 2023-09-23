    @extends('adminlayouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-5 offset-md-2">
            <h2>Add Product Page</h2>
            @if(session('success'))

            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Success</strong>{{ session('success') }}
            </div>

            @endif
            @if($errors->any())
            <div class="alert alert-danger alert-dismisssible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong class="alert-danger">Ooops something went wrong.....!!!</strong>
            </div>

            @endif
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>

                <div class="form-group">
                    <label for="price">Price:</label>
                    <input type="price" name="price" id="price" class="form-control">
                </div>

                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea type="description" name="description" id="description" class="form-control" rows="4"></textarea>
                </div>

                <div class="form-group">
                    <label for="quantity">Quantity:</label>
                    <input type="quantity" name="quantity" id="quantity" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>

</div>
@endsection




{{-- @extends('adminlayouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-5 offset-md-2">

    <h2>Add Product</h2>
    @if(session('success'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Success</strong> {{ session('success') }}
      </div>

    @endif
    @if($errors->any())
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Ooops!!!</strong> Something went wrong
      </div>
      @endif
    <form action="{{ route('admin.upload.product') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
            <span class="text-danger">@error('title') {{ $message }} @enderror </span>
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}">
            <span class="text-danger">@error('title') {{ $message }} @enderror </span>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" id="description" name="description" rows="4" ></textarea>
        </div>
        <div class="form-group">
            <label for="quantity">Quantity:</label>
            <input type="number" class="form-control" id="quantity" name="quantity" >
        </div>
        <div class="form-group">
            <label for="file">Upload Image:</label>
            <input type="file" class="form-control-file" id="file" name="file" accept="image/*" >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

</div>
</div>
</div>
</div>
@endsection --}}
