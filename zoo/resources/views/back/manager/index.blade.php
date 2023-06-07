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
                        @forelse($managers as $manager)
                        <li class="list-group-item">
                            <div class="manager-line">
                                <div class="manager-info">
                                    <h2>{{$manager->getSpecie->type}}</h2>
                                    <div class="manager-description">
                                        <p class="--random--color">{{$manager->name}} {{$manager->surname}}</p>
                                    </div>
                                </div>
                                <div class="buttons">
                                    <a href="{{route('managers-edit', $manager)}}" class="btn btn-outline-success">Edit</a>
                                    <form action="{{route('managers-delete', $manager)}}" method="post">
                                        <button type="submit" class="btn btn-outline-danger">Delete</button>
                                        @csrf
                                        @method('delete')
                                    </form>
                                </div>
                            </div>
                        </li>
                        @empty
                        <li class="list-group-item">
                            <div class="specie-line">No managers</div>
                        </li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection