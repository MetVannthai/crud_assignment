<?php
session_start();
require("dbcon.php");
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container mt-5">


        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>My Information
                            <a href="index.php" class="btn btn-danger float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 ">
                                <h4>Profile</h4>
                                <img src="profile/my_profile.jpg" style="border-radius: 50%; width:80%" class="img-thumbnail" alt="...">
                            </div>
                            <div class="col-md-6 ">
                                <h4>Information</h4>
                                <div class="text-start">
                                    <h4><strong>Name : </strong>Met Vannthai</h4>
                                    <h4><strong>Class : </strong>E7</h4>
                                    <h4><strong>Project : </strong>Student Online Course</h4>
                                    <p class="mt-5">I am studying for the third year of a bachelor's degree in computer science and engineering at the <strong>(RUPP)</strong>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>