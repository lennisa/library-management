<html>
<body>
<?php
    if(isset($_POST["submit"])){
        $title = $_POST["title"];
        $author = $_POST["author"];
        $category = $_POST["category"];
        echo "TITLE:" . $title. "<br/>";
        echo "AUTHOR NAME:" . $author. "<br/>";
        echo "CATEGORY:" . $category. "<br/>";
            }
    $conn = mysqli_connect("localhost","root","","library_man","3307") or die("could not connect");
    
    $sql = "INSERT INTO books (title, author_id, category_id)
    VALUES ('$title', '$author', '$category')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>

</body>
</html>