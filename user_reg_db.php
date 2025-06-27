<html>
<body>
<?php
    if(isset($_POST["submit"])){
        $name = $_POST["name"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        echo "NAME:" . $name. "<br/>";
        echo "PHONE NUMBER:" . $phone. "<br/>";
        echo "EMAIL ID:" . $email. "<br/>";
    }
    $conn = mysqli_connect("localhost","root","","library_man","3307") or die("could not connect");
    
    $sql = "INSERT INTO users (name, phone_number, email_id)
    VALUES ('$name', '$phone', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>

</body>
</html>