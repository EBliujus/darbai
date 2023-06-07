@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card mt-5">
                <div class="card-header">
                    <h1>Add New Meniu</h1>
                </div>
                <div class="card-body">
                    <form action="{{route('menius-store')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Meniu</label>
                            <input type="text" class="form-control" name="title" value={{old('title')}}>
                            <div class="form-text">New meniu</div>
                        </div>
                        <div class="col-4 meniu-select">
                            <label class="form-label">Choose Restaurant:</label>
                            <select class="form-select" name="restaurant_id" >
                                <option value="0">Restaurants list</option>
                                @foreach($restaurants as $restaurant)
                                <option value="{{$restaurant->id}}">{{$restaurant->name}}</option>
                                @endforeach
                            </select>                     
                                <button type="submit" class="btn btn-primary" style="margin-top: 10px">Submit</button>
                        </div>  
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection