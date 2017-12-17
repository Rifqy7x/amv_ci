<!DOCTYPE html>
<html lang="en">
<head>
<title>"Video Play"</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
    box-sizing: border-box;
	font-family: arial, sans-serif;
}

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
}

/* Style the topnav links */
.topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
    background-color: #ddd;
    color: black;
}

nav {
    float: right;
    max-width: 160px;
    margin: 48px;
    padding: 1em;
}

nav ul {
    list-style-type: none;
    padding: 0;
}
   
nav ul a {
    text-decoration: none;
}

body {
  margin: 0;
}

/* Style the header 
.header {
    background-image:url('https://hdwallsource.com/img/2017/7/anime-girl-hd-	desktop-wallpaper-61371-63190-hd-wallpapers.jpg'); 
	height: 70%;
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
	position: relative;
	padding-top:50px;
	padding-bottom:50px;
    text-align: center;
	color: white;
    
}
*/
body {
    background-image: url('playbackground.png');
    height: 70%;
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
	position: relative;
	padding-top:50px;
	padding-bottom:50px;
    text-align: center;
	color: white;
}

/* Style the text Header */
.text-header {
	background-color:#000;
	padding-left : 10px;
	padding-right : 10px;
}

/* Style the top navigation bar */
.topnav {
    overflow: hidden;
    background-color: #333;
}



/* Style the topnav links */
.topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
    background-color: #ddd;
    color: black;
}

/* Create three unequal columns that floats next to each other */
.column {
    float: left;
	background-color:#333;
}

/* Left and right column */
.column.side {
    width: 0%;
}

/* Middle column */
.column.middle {
	margin-left:100px;
	margin-right:100px;
    
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media (max-width: 600px) {
    .column.side, .column.middle {
        width: 100%;
    }
}
</style>
</head>
<body>

<?php
  include "testConnection.php";     
    //tampilkan data
 $sql = "SELECT * FROM videoamv WHERE idamv = 29"; //----- ID AMVNya tinggal ganti ganti ---//
 $result = $conn->query($sql);
?> 

<div class="topnav">
  <a href="<?php echo base_url(); ?>">AMVINDO</a>
  <a href="#video">Video</a>
  <a style="float:right; margin-top:-25px"; href="Search.html"><form action="" ><br><img type="submit" id="search" style="width:20px;height:20px;" src="https://lh6.googleusercontent.com/tGBnMZBgfQFk4GKAV35Zcme41IALcjE5b3frtaQ4sgg6CwfHOZzMaFQ6zYnppJ5kzOwC_2djzcWzmhM=w1366-h676"></button></form></a>
  <a style="float:right; margin-top:-25px"><form action="" ><br><input type="text" placeholder="Search AMV"></form></a>
  <a style="float:right; margin-top:-5px" ; href="#account"><img src="https://lh4.googleusercontent.com/HDuetG_o0ksnMoTuKpHq_MMb9DTOppN2ui6v1dqHAFjd0_1srEAwu_kOxz9s2WxR3FkF2GTqvpD7AZc=w1366-h676" style="width:30px;height:20px;" ></a>
</div>
<div style="margin-top:48px; ">
<div class="header">
  <h1>
  <span class="text-header">
  <?php 
  $row = $result->fetch_assoc();
  ?>
  <?php echo $row["title"];?>
  </span>
  </h1>
</div>

<div class="row">
  <div class="column middle">
  <div  style="background-color:black" >
  <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $row["link"];?>
					" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
	</div>
	
	<br>
    <h2><?php echo $row["title"];?></h2>
    <br>
	Author : <?php echo $row["author"];?> <br>
	Category : <?php echo $row["category"];?> <br>
	
	<div style="padding: 10px">
	<p><?php echo $row["description"];?><</p>
	</div>
	
  </div>
</div>
</div>
 
</body>
</html>
