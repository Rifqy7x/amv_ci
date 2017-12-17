<!DOCTYPE html>
<html lang="en">
<head>
<title>Video List</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

/* Style the top navigation bar */
.topnav {
    overflow: hidden;
    background-color: #333;
	position: fixed;
	top: 0;
    width: 100%;
	list-style-type: none;
    margin: 0;
    padding: 0;
	height : 48px;
}

/* Style the topnav links */
.topnav a{
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

/* Change color on hover */
.topnav a:hover{
    background-color: #ddd;
    color: black;
}
// Styling Dropdown menu

.topnav .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.topnav .dropdown:hover .dropbtn {
    background-color: #ddd;
	color: blac;
}

topnav.dropdown {
    display: inline-block;
}


.topnav .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.topnav .dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.topnav .dropdown-content a:hover {background-color: #f1f1f1}

.topnav .dropdown:hover .dropdown-content {
    display: block;
}

table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
tr:nth-child(odd){background-color: white}

th {
    background-color: #0B3861;
    color: white;
}

body {
	background-color: #2E2E2E;
}

.test {
	color: white;
}

</style>
</head>
<body>

<div class="topnav" >
  <div class="dropdown">
  <a href="javascript:void(0)" class="dropbtn">AMV Indo</a>
    <div class="dropdown-content">
      <a href="Main.php">Home</a>
      <a href="Video.php">Video List</a>
    </div>
  </div>
  <a style="float:right; margin-top:-25px"; href="Search.php"><form action="" ><br><img type="submit" id="search" style="width:20px;height:20px;" src="Search.png"></button></form></a>
  <a style="float:right; margin-top:-25px"><form action="" ><br><input type="text" placeholder="Search Video"></form></a>
  <a style="float:right" ; href="#account"><img src="Account.png" style="width:30px;height:20px;" ></a>
</div>

<div style="margin-top:48px; ">

<div style="text-align:center;"> 

<div>
<h2 style="color:white;"> AMV </h2>
    <table>
			<tr class="toptable">
				<th>Title</th>
				<th>Cover</th>
                <th>Category</th>
                <th>Author</th>
			</tr>
<?php
// echo "<pre>";
// var_dump($results); die();
// echo "</pre>";
 // if ($results->num_rows > 0) {
    if(true) {
    // output data of each row
    foreach($results as $row) {
        ?>
            <tr>
				<td><?php echo $row["title"];?></td>
				<td><img src="<?php echo $row ["cover"];?>" width="160" height="90"></td> 
				<td><?php echo $row["category"];?></td>
				<td><?php echo $row["author"];?></td> 
			</tr>
    <?php        
    }
} else {
    echo "0 results";
}

// $conn->close();
?>
    </table>
</div>

<?php
  include "testConnection.php";     
    //tampilkan data
 $sql = "SELECT * FROM videoamv WHERE category = 'MEP'";
 $result = $conn->query($sql);
?> 

<div>
<h2 style="color:white;"> MEP </h2>
    <table>
			<tr class="toptable">
				<th>Title</th>
				<th>Cover</th>
                <th>Category</th>
                <th>Author</th>
			</tr>
		
<?php 
 if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        ?>
            <tr>
				<td><?php echo $row["title"];?></td>
				<td><img src="<?php echo $row ["cover"];?>" width="160" height="90"></td> 
				<td><?php echo $row["category"];?></td>
				<td><?php echo $row["author"];?></td>  
			</tr>
    <?php        
    }
} else {
    echo "0 results";
}

$conn->close();
?>
    </table>
</div>

<?php
  include "testConnection.php";    
    //tampilkan data
 $sql = "SELECT * FROM videoamv WHERE category = 'Collab'";
 $result = $conn->query($sql);
?> 

<div>
<h2 style="color:white;"> Collab </h2>
    <table>
			<tr class="toptable">
				<th>Title</th>
				<th>Cover</th>
                <th>Category</th>
                <th>Author</th>
			</tr>
		
<?php 
 if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        ?>
            <tr>
				<td><?php echo $row["title"];?></td>
                <td><img src="<?php echo $row ["cover"];?>" width="160" height="90"></td> 
				<td><?php echo $row["category"];?></td>
				<td><?php echo $row["author"];?></td>  
			</tr>
    <?php        
    }
} else {
    echo "0 results";
}

$conn->close();
?>
    </table>
</div>
</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</body>
</html>
