@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card mt-5">
                <div class="card-header">
                    <h1>Add New Manager</h1>
                </div>
                <div class="card-body">
                    <form action="{{route('managers-store')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" value={{old('name')}}>
                            <div class="form-text">New manager name here</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Surname</label>
                            <input type="text" class="form-control" name="surname" value={{old('surname')}}>
                            <div class="form-text">Surname</div>
                        </div>
                        <div class="col-4 specie-select">
                            <label class="form-label">Choose Category:</label>
                            <select class="form-select --cat--select" name="specie_id" >
                                <option value="0">Species list</option>
                                @foreach($species as $specie)
                                <option value="{{$specie->id}}">{{$specie->type}}</option>
                                @endforeach
                            </select>                     
                                <button type="submit" class="btn btn-primary">Submit</button>
                        </div>  
                            {{-- <div class="form-text">Pick category which fits for you</div> --}}
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection