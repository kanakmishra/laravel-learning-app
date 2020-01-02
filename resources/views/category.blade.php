@extends('layouts.app')
@section('content')
    <form method="post" data-parsley-validate="" >
        <div class="container">
            <h1 class="text-center">Category</h1>
            <div class="form-group">
                <label>Category Name:</label>
                <input type="text" class="form-control" required="" value="" name="name" data-parsley-minlength="3" data-parsley-maxlength="20">
            </div>
            <div class="form-group">
                <div class="col-4">
                    <button type="submit" id="formSubmit" class="btn btn-primary btn-block" name="AddCategory">Add</button>
                </div>
            </div>
        </div>
    </form>
@endsection