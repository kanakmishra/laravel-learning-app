<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add Question</title>
    <style>.parsley-errors-list { color: red;}</style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.1/parsley.min.js"></script>
    </head>
    <body>
        @include('header')
        <form method="post" data-parsley-validate="">
            <div class="container">
            <h1 class="text-center">Question</h1>
            <div class="form-group">
                <label>Question Name:</label>
                <input type="text" class="form-control" required=""  value="" data-parsley-minlength="3" data-parsley-maxlength="20">
            </div>
            <div class="form-group">
                <label>Add Category:</label>
                <select list="question" class="form-control" value="" required="">
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
    </body>
<html>