@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card mt-5">
                <div class="card-header">
                    <h1>Species List</h1>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        @forelse($species as $specie)
                        <li class="list-group-item">
                            <div class="specie-line">
                                <div class="specie-info">
                                    <h2>{{$specie->type}}</h2>
                                   {{--  <div class="specie-description">
                                        <p class="--random--color">{{$specie->type}}</p>
                                    </div> --}}
                                </div>
                                <div class="buttons">
                                    <a href="{{route('species-edit', $specie)}}" class="btn btn-outline-success">Edit</a>
                                    <form action="{{route('species-delete', $specie)}}" method="post">
                                        <button type="submit" class="btn btn-outline-danger">Delete</button>
                                        @csrf
                                        @method('delete')
                                    </form>
                                </div>
                            </div>
                        </li>
                        @empty
                        <li class="list-group-item">
                            <div class="specie-line">No offers</div>
                        </li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection