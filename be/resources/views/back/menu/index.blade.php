@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card mt-5">
                <div class="card-header">
                    <h1>Meniu List</h1>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        @forelse($menius as $meniu)
                        <li class="list-group-item">
                            <div class="meniu-line">
                                <div class="meniu-info">
                                    <div>
                                        <h4>{{$meniu->MeniubyRestaurant->name}} </h4>
                                    </div>
                                <div class="meniu-info">
                                    <h2>{{$meniu->title}}</h2>
                                </div>
                                <div class="buttons">
                                    <a href="{{route('menius-edit', $meniu)}}" class="btn btn-outline-success">Edit</a>
                                    <form action="{{route('menius-delete', $meniu)}}" method="post">
                                        <button type="submit" class="btn btn-outline-danger">delete</button>
                                        @csrf
                                        @method('delete')
                                    </form>
                                </div>
                            </div>
                        </li>
                        @empty
                        <li class="list-group-item">
                            <div class="cat-line">We don't have any meniu yet...</div>
                        </li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection