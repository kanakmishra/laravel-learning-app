@extends('layouts.app')
@section('content')
        <form method="post" data-parsley-validate="">
            <div class="container">
            <h1 class="text-center">Sub Category</h1>
            <div class="form-group">
                <label>Category Name:</label>
                <input type="text" class="form-control" required=""  value="" data-parsley-minlength="3" data-parsley-maxlength="20">
            </div>
            <div class="form-group">
                <label>Add Subcategory:</label>
                <select list="quiz" class="form-control" value="" required="">
                    <option value="">Select</option>
                    <option value="Mango">Mango</option>
                    <option value="Banana">Banana</option>
                    <option value="Apple">Apple</option>
                    <option value="Gauve">Gauve</option>
                    <option value="Grapes">Grapes</option>
                </select>
			</div>
            <div class="form-group">
                <div class="col-4">
                    <button type="submit" id="formSubmit" class="btn btn-primary btn-block" name="AddSubcategory">Add</button>
                </div>
            </div>
            </div>
        </form>
@endsection