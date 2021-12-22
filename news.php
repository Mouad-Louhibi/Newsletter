<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        div {
            width: 30%;
            padding: 40px;
            background-image: url("bg2.jfif");
        }

        h1,
        h3,
        p {
            font-family: Arial, Helvetica, sans-serif;
        }

        h1 {
            margin-top: 30px;
            margin-bottom: 0;
        }

        h3 {
            margin-top: 10px;
            margin-bottom: 10px;
        }

        p {
            margin-bottom: 10px;
        }

        #add-btn {
            float: right;
        }
    </style>
</head>

<body>
    <div>
        <?php
        require_once 'connection.php';

        if ($userow['rule'] === 'admin') {
            echo "<a href='http://localhost/Newsletter/add.php'><button id='add-btn' class='btn btn-success'>Add</button></a>";
        }

        $query = "SELECT * FROM news";
        $result = $con->query($query);

        if (isset($_POST['delete'])) {
            $query = "DELETE FROM news WHERE id= " . $_POST['id'];
            if ($con->query($query) === TRUE) {
                echo "<script>
                    if(confirm('Successfully delete new')){
                        location.replace('http://localhost/Newsletter/news.php')
                    }
                </script>";
            }
        }

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<form action='' method='POST'>";
                echo "<input type='hidden' value='" . $row['id'] . "' name='id' />";
                echo "<H1>" . $row["title"] . "</H1>";
                echo "<H3>" . $row["resume"] . "</H3>";
                echo "<p>" . $row["contenu"] . "</p>";
                if ($userow['rule'] === 'admin') {
                    echo "<input type='submit' name='delete' value='Delete' class='btn btn-danger '/> ";
                    echo "<a href='edit.php?id=" . $row['id'] . "' class='btn btn-info'>Edit</a></td>";
                }
                echo "</form>";
            }
        } else {
            echo "0 results";
        }

        // Create Options (Create new, UPDATE new, DELET new)
        // Admin rules
        ?>
    </div>
</body>

</html>