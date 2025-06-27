<html>
<body>
<?php
    $conn = mysqli_connect("localhost","root","","library_man","3307") or die("could not connect");
    
    $sql = "SELECT users.name as username, books.title as booktitle, books_on_loan.date_of_issue as idate, categories.category_name as bookcategory, authors.author_name as AuthorName
    FROM users 
    JOIN books_on_loan on users.ID = books_on_loan.user_id 
    JOIN books on books.ID = books_on_loan.book_id 
    JOIN categories on books.category_id = categories.ID 
    JOIN authors on authors.ID = books.author_id";
     $result=mysqli_query($conn,$sql);
    if ($conn->query($sql) === TRUE) {
        echo "";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>
<center> DETAILS </center>
<table>
    <tr>
        <th> S.no. </th>
        <th> USER </th>
        <th> BOOK </th>
        <th> DATE OF ISSUE </th>
        <th> TYPE </th>
        <th> AUTHOR </th>
    </tr>
<?php 
$i=1;
while($row=mysqli_fetch_array($result))
{
    echo "<tr>";

    echo "<td>" .$i. "</td>
        <td>" .$row["username"]. "</td>
        <td>" .$row["booktitle"]. "</td>
        <td>" .$row["idate"]. "</td>
        <td>" .$row["bookcategory"]. "</td>
        <td>" .$row["AuthorName"]. "</td>";
    echo "</tr>";
    $i++;
}
?>
</body>
</html>