@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card mt-5">
                <div class="card-header">
                    <h1>Restaurants List</h1>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        @forelse($restaurants as $restaurant)
                        <li class="list-group-item">
                            <div class="restaurant-line">
                                <div class="restaurant-info">
                                    <h2>{{$restaurant->name}}</h2>
                                    <div class="restaurant-description">
                                        <p class="">{{$restaurant->code}}</p>
                                    </div>
                                    <div class="restaurant-description">
                                        <p class="">{{$restaurant->address}}</p>
                                    </div>
                                </div>
                                <div class="buttons">
                                    <a href="{{route('restaurants-edit', $restaurant)}}" class="btn btn-outline-success">Edit</a>
                                    <form action="{{route('restaurants-delete', $restaurant)}}" method="post">
                                        <button type="submit" class="btn btn-outline-danger">Delete</button>
                                        @csrf
                                        @method('delete')
                                    </form>
                                </div>
                            </div>
                        </li>
                        @empty
                        <li class="list-group-item">
                            <div class="specie-line">No restaurants listed</div>
                        </li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection