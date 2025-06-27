<html>
<head>
    <title>BOOK ISSUE</title>
</head>
<body>

<h1>PROVIDE THE FOLLOWING DETAILS</h1>
<form name="books_issue" action="book_issue_db.php" method="post" autocomplete = "off">
<p> Name: <select name = "user_id">
    <option disabled selected>-- Select Name --</option>
    <?php
        $conn = mysqli_connect("localhost","root","","library_man","3307") or die("could not connect");
        $records = mysqli_query($conn, "SELECT ID,name From users");
        while($data = mysqli_fetch_array($records))
        {
            echo "<option value='". $data['ID'] ."'>" .$data['name'] ."</option>";
        }	
    ?>  
  </select>
<p> Book: <select name = "book_id">
    <option disabled selected>-- Select Book --</option>
    <?php
        $conn = mysqli_connect("localhost","root","","library_man","3307") or die("could not connect");
        $records = mysqli_query($conn, "SELECT ID,title From books");
        while($data = mysqli_fetch_array($records))
        {
            echo "<option value='". $data['ID'] ."'>" .$data['title'] ."</option>";
        }	
    ?>  
  </select>

<p> Issue Date: <input type = "date" name = "issue_date" value = "<?php echo date('Y-m-d');?>"/> </br>
<p> Return Date: <input type = "date" name = "return_date" value = "<?php echo date('Y-m-d');?>"/> </br>
<p><input type = "submit" name = "submit" value = "issue"/></p>
</form>
</body>
</html>