@extends('welcome')

@section('content')
    <div class="container">
        <h1 class="text-center">Create product</h1>
        <form action="{{route('product.store')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <label>Name :</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>
                <div class="col-md-12">
                    <label>Description :</label>
                    <textarea name="description" id="description" cols="30" rows="5" class="form-control"></textarea>
                </div>
                <div class="col-md-12">
                    <label>Price :</label>
                    <input type="number" name="price" step="0.1" id="price" class="form-control">
                </div>

                <div class="col-md-12">
                    <label>Category :</label>
                    <select name="category_id" id="category_id" class="form-control">
                        @foreach($categories as $category)
                             <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-12">
                    <button class="btn btn-success m-3">Save Data</button>
                </div>
            </div>
        </form>
    </div>
@endsection
