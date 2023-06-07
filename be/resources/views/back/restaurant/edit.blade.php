@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card mt-5">
                <div class="card-header">
                    <h1>Edit Restaurant</h1>
                </div>
                <div class="card-body">
                    <form action="{{route('restaurants-update', $restaurant)}}" method="post">
                        <div class="mb-3">
                            <label class="form-label">Restaurant</label>
                            <input type="text" class="form-control" name="name" value="{{old('name', $restaurant->name)}}">
                            <div class="form-text">Edit restaurant name here</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Code</label>
                            <input type="text" class="form-control" name="code" value="{{old('code', $restaurant->code)}}">
                            <div class="form-text">Edit code</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Address</label>
                            <input type="text" class="form-control" name="address" value="{{old('address', $restaurant->address)}}">
                            <div class="form-text">Edit address</div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        @csrf
                        @method('put')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection