@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card mt-5">
                <div class="card-header">
                    <h1>Add New Restaurant</h1>
                </div>
                <div class="card-body">
                    <form action="{{route('restaurants-store')}}" method="post">
                        <div class="mb-3">
                            <label class="form-label">Restaurant Name</label>
                            <input type="text" class="form-control" name="name" value={{old('name')}}>
                            <div class="form-text">Please add name of the restaurant here</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Code of the restaurant</label>
                            <input type="text" class="form-control" name="code" value={{old('code')}}>
                            <div class="form-text">Type code here</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Restaurant address</label>
                            <input type="text" class="form-control" name="address" value={{old('address')}}>
                            <div class="form-text">Type address here</div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection