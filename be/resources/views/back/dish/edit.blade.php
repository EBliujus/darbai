{{-- @extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card mt-5">
                    <div class="card-header">
                        <h1>Edit Meniu</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('menius-update', $meniu) }}" method="post">
                            <div class="container">
                                <div class="row ">
                                    <div class="col-8">
                                        <div class="mb-3">
                                            <label class="form-label">Meniu name</label>
                                            <input type="text" class="form-control" name="title" value="{{$meniu->title}}">
                                            <div class="form-text">Edit meniu name</div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <label class="form-label">Choose Restaurant</label>
                                        <select class="form-select" name="restaurant_id" 
                                            @foreach($restaurants as $restaurant)
                                            <option value="{{$restaurant->id}}" @if ($meniu->restaurant_id == $restaurant->id) selected @endif>
                                                {{$restaurant->name}}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-outline-info">Change</button>
                                    </div>
                                </div>
                            </div>
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection --}}