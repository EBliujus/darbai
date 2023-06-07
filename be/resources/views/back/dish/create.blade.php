@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card mt-5">
                <div class="card-header">
                    <h1>Add New Dish</h1>
                </div>
                <div class="card-body">
                    <form action="{{route('dishes-store')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Dish</label>
                            <input type="text" class="form-control" name="name" value={{old('name')}}>
                            <div class="form-text">New dish</div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label class="form-label">Description</label>
                                <textarea type="text" rows="5" cols="40" class="form-control description-hotel" name="description"></textarea>
                                <div class="form-text">Description of the dish</div>
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <label for="logo"> Add images </label>
                            <input type="file" name="logo" />
                          </div>
                        <div class="col-4 meniu-select">
                            <label class="form-label">Choose Meniu:</label>
                            <select class="form-select" name="restaurant_id" >
                                <option value="0">Meniu list</option>
{{--                                  @foreach($menius as $meniu)
                                <option value="{{$menu->id}}">{{$menu->title}}</option>
                                @endforeach --}}
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