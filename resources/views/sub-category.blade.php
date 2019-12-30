<!DOCTYPE html>
<html>
    <?php 
        
    ?>
<head>
    <title>Sub Category Form</title>
    <link href="css/insert.css" rel="stylesheet">
    <link rel="stylesheet" href="parsley.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../js/parsley.min.js"></script>
    <script>
        $(document).ready(function() {
            $('form').parsley();
        });
    </script>
    <style>
        .error {
            color: red;
        }
    </style>

</head>

<body>
@include('header')
    <div class="maindiv">
        <!--HTML Form -->
        <div class="form_div">
            <div class="container">
                <form action="" method="post" name="sub-category" class="form-horizontal" role="form" data-parsley-validate>
                    <h2>Sub Category</h2>
                    <div class="form-group">
                        <label for="sub_category" class="col-sm-3 control-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" id="category" name="category" required data-parsley="" placeholder="Category Name" class="form-control" autofocus>
                        </div>
                    <div class="form-group">
                        <label for="sub_category" class="col-sm-3 control-label">Select Subcategory</label>
                        <div class="col-sm-9">
                            <select name="sub-category" id="sub-category" class="form-control" required>
                                <option value="">Select</option>
                                <option value="Mango">Mango</option>
                                <option value="Banana">Banana</option>
                                <option value="Orange">Orange</option>
                                <option value="Apple">Apple</option>
                            </select>
                        </div>
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
                </form>
            </div>
        </div>
    </div>

</body>


</html>