<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }
        #welcome{
            text-align: center;
        }
        .header {
            overflow: hidden;
            background-color: #f1f1f1;
            padding: 20px 10px;
        }

        .header a {
            float: left;
            color: black;
            text-align: center;
            padding: 12px;
            text-decoration: none;
            font-size: 18px;
            line-height: 25px;
            border-radius: 4px;
        }

        .header a.logo {
            font-size: 25px;
            font-weight: bold;
        }

        .header a:hover {
            background-color: #ddd;
            color: black;
        }

        .header a.active {
            background-color: dodgerblue;
            color: white;
        }

        .header-right {
            float: right;
        }

        @media screen and (max-width: 500px) {
            .header a {
                float: none;
                display: block;
                text-align: left;
            }

            .header-right {
                float: none;
            }
        }
    </style>
</head>

<body>

    <div class="header fixed">
        <a href="#default" class="logo">Learning Application</a>
        <div class="header-right">
            <a href="/">Home</a>
            <a href="/category">Add Category</a>
            <a href="/sub-category">Add Subcategory</a>
            <a href="/add-question">Add Question</a>
            <a href="/add-quiz">Add Quiz</a>
        </div>
    </div>

    <!-- <div style="padding-left:20px">
        <h1 id="welcome">Welcome to Learning App</h1>
         <p>Resize the browser window to see the effect.</p>
        <p>Some content..</p>
    </div> -->

</body>

</html>