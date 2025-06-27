<html>
<body>
<?php
    if(isset($_POST["submit"])){
        $user = $_POST["user_id"];
        $book = $_POST["book_id"];
        $issue = $_POST["issue_date"];
        $return = $_POST["return_date"];
        echo "USER ID:" . $user. "<br/>";
        echo "BOOK ID:" . $book. "<br/>";
        echo "ISSUE DATE:" . $issue. "<br/>";
        echo "RETURN DATE:" . $return. "<br/>";
        }
    $conn = mysqli_connect("localhost","root","","library_man","3307") or die("could not connect");
    
    $sql = "INSERT INTO books_on_loan (book_id, user_id, date_of_issue, date_of_return)
    VALUES ('$book', '$user', '$issue', '$return')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>

</body>
</html>