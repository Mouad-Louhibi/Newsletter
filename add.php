<!DOCTYPE html>
<html>

<head>
    <title>Add new</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style type="text/css">
        .box {
            background: #f0f0f0;
            padding: 20px;
        }
    </style>
</head>

<body>
    <?php

    require_once 'connection.php';

    ?>

    <div class="container">
        <?php
        if (isset($_POST['addnew'])) {
            if (empty($_POST['title']) || empty($_POST['resume']) || empty($_POST['contenu'])) {
                echo "Please fillout all required fields";
            } else {
                $title = $_POST['title'];
                $resume = $_POST['resume'];
                $contenu = $_POST['contenu'];

                $sql = "INSERT INTO news(title,resume,contenu)
                        VALUES('$title','$resume','$contenu')";

                if ($con->query($sql) === TRUE) {
                    echo "<div class='alert alert-success'>Successfully added new</div>";
                } else {
                    echo "<div class='alert alert-danger'>Error: There was an error while adding the new</div>";
                }
            }
        }
        ?>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="box">
                    <h3><i class="glyphicon glyphicon-plus"></i>&nbsp;Add New</h3>
                    <form action="" method="POST">
                        <label for="title">Title</label>
                        <input type="text" id="title" name="title" class="form-control"><br>
                        <label for="resume">Resume</label>
                        <input type="text" name="resume" id="resume" class="form-control"><br>
                        <label for="contenu">Contenu</label>
                        <textarea rows="4" name="contenu" class="form-control"></textarea><br>
                        <br>
                        <input type="submit" name="addnew" class="btn btn-success" value="Add New">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>