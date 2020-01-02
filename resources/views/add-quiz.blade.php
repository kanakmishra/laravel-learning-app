@extends('layouts.app')
@section('content')
    <form method="post" data-parsley-validate="">
        <div class="container">
        <h1 class="text-center">Quiz</h1>
        <div class="form-group">
            <label>Quiz Title:</label>
            <input type="text" class="form-control" required=""  value="" data-parsley-minlength="3" data-parsley-maxlength="20">
        </div>
        <div class="form-group">
            <label>Add Category:</label>
            <select list="quiz" class="form-control" value="" required="">
                <option value="">Select</option>
                <option value="Category1">Category1</option>
                <option value="Category2">Category2</option>
                <option value="Category3">Category3</option>
                <option value="Category4">Category4</option>
                <option value="Category5">Category5</option>
            </select>
        </div>
        <div class="form-group">
            <div class="col-4">
                <button type="submit" id="formSubmit" class="btn btn-primary btn-block" name="AddQuiz">Add</button>
            </div>
        </div>
        </div>
    </form>
@endsection