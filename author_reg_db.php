<html>
<body>
<?php
    if(isset($_POST["submit"])){
        $author = $_POST["author_name"];
        echo "AUTHOR" . $author_name. " IS REGISTERED <br/>";
    }
    $conn = mysqli_connect("localhost","root","","library_man","3307") or die("could not connect");
    
    $sql = "INSERT INTO authors (author_name)
    VALUES ('$author')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>

</body>
</html>