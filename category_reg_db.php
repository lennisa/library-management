<html>
<body>
<?php
    if(isset($_POST["submit"])){
        $category = $_POST["category_name"];
        echo "CATEGORY" . $category_name. " IS REGISTERED <br/>";
    }
    $conn = mysqli_connect("localhost","root","","library_man","3307") or die("could not connect");
    
    $sql = "INSERT INTO categories (category_name)
    VALUES ('$category')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>

</body>
</html>