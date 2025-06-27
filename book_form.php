<html>
<head>
    <title>BOOK ADDITION</title>
</head>
<body>

<h1>PROVIDE THE DETAILS OF THE BOOK</h1>
<form name="books" action="book_reg_db.php" method="post" autocomplete = "off">
<p> Book Title: <input type = "text" name = "title"/></p>
<p> Author: <select name = "author">
    <option disabled selected>-- Select Author --</option>
    <?php
        $conn = mysqli_connect("localhost","root","","library_man","3307") or die("could not connect");
        $records = mysqli_query($conn, "SELECT ID,author_name From authors");
        while($data = mysqli_fetch_array($records))
        {
            echo "<option value='". $data['ID'] ."'>" .$data['author_name'] ."</option>";
        }	
    ?>  
  </select>
<p> Category: <select name = "category">
    <option disabled selected>-- Select Category --</option>
    <?php
        $conn = mysqli_connect("localhost","root","","library_man","3307") or die("could not connect");
        $records = mysqli_query($conn, "SELECT ID,category_name From categories");
        while($data = mysqli_fetch_array($records))
        {
            echo "<option value='". $data['ID'] ."'>" .$data['category_name'] ."</option>";
        }	
    ?>  
  </select>
<p><input type = "submit" name = "submit" value = "sign in"/></p>
</form>
</body>
</html>