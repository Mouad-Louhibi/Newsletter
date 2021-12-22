<!DOCTYPE html>
<html>

<head>
    <title>Edit new</title>
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
        if (isset($_POST['update'])) {
            if (empty($_POST['title']) || empty($_POST['resume']) || empty($_POST['contenu'])) {
                echo "Please fillout all required fields";
            } else {
                $title = $_POST['title'];
                $resume = $_POST['resume'];
                $contenu = $_POST['contenu'];

                $sql = "UPDATE news SET title='{$title}', resume='{$resume}',
            contenu='{$contenu}'
            WHERE id=" . $_POST['newid'];

                if ($con->query($sql) === TRUE) {
                    echo "<div class='alert alert-success'>Successfully updated user</div>";
                } else {
                    echo "<div class='alert alert-danger'>Error: There was an error while updating new info</div>";
                }
            }
        }

        $id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
        $sql = "SELECT * FROM news WHERE id={$id}";
        $result = $con->query($sql);

        if ($result->num_rows < 1) {
            header('Location: news.php');
            exit;
        }

        $row = $result->fetch_assoc();
        ?>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="box">
                    <h3><i class="glyphicon glyphicon-plus"></i>&nbsp;MODIFY new</h3>
                    <form action="" method="POST">
                        <input type="hidden" value="<?php echo $row['id']; ?>" name="newid">
                        <label for="title">Title</label>
                        <input type="text" id="title" name="title" value="<?php echo $row['title']; ?>" class="form-control"><br>
                        <label for="resume">Resume</label>
                        <input type="text" name="resume" id="resume" value="<?php echo $row['resume']; ?>" class="form-control"><br>
                        <label for="contenu">Contenu</label>
                        <textarea rows="4" name="contenu" class="form-control"><?php echo $row['contenu']; ?></textarea><br>
                        <br>
                        <input type="submit" name="update" class="btn btn-success" value="Update">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>