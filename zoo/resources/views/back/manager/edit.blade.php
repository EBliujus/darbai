@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card mt-5">
                <div class="card-header">
                    <h1>Edit Category</h1>
                </div>
                <div class="card-body">
                    <form action="{{route('species-update', $specie)}}" method="post">
                        <div class="mb-3">
                            <label class="form-label">Specie</label>
                            <input type="text" class="form-control" name="type" value="{{old('type', $specie->type)}}">
                            <div class="form-text">Please add specie type here</div>
                        </div>
                        {{-- <div class="mb-3">
                            <label class="form-label">Description</label>
                            <input type="text" class="form-control" name="season" value="{{old('season', $specie->season)}}">
                            <div class="form-text">Season</div>
                        </div> --}}
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