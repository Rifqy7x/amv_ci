<!DOCTYPE html>
<html lang="en">
<head>
<title>FORM 2</title>
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
	background-color:#333;
}

/* Left and right column */
.column.side {
    width: 0%;
}

/* Middle column */
.column.middle {
	margin-left:10%;
	margin-right:10%;
	width:80%;
    
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



table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

.button {
	background-color: #4ECDC4;
	border: none;
	color: white;
	padding: 10px 32px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	font-size: 16px;
	margin: 4px 2px;
	cursor: pointer;
}
</style>
</head>
<body>
<div class="topnav">
  <a href="Welcome.html">AMVINDO</a>
  <a href="#video">Video</a>
  <a style="float:right; margin-top:-25px"; href="Search.html"><form action="" ><br><img type="submit" id="search" style="width:20px;height:20px;" src="https://lh6.googleusercontent.com/tGBnMZBgfQFk4GKAV35Zcme41IALcjE5b3frtaQ4sgg6CwfHOZzMaFQ6zYnppJ5kzOwC_2djzcWzmhM=w1366-h676"></button></form></a>
  <a style="float:right; margin-top:-25px"><form action="" ><br><input type="text" placeholder="Search AMV"></form></a>
  <a style="float:right; margin-top:-5px" ; href="#account"><img src="https://lh4.googleusercontent.com/HDuetG_o0ksnMoTuKpHq_MMb9DTOppN2ui6v1dqHAFjd0_1srEAwu_kOxz9s2WxR3FkF2GTqvpD7AZc=w1366-h676" style="width:30px;height:20px;" ></a>
</div>
<div style="margin-top:48px; ">
<div class="header">
  <h1>
  <span class="text-header">
  ANIME MUSIC VIDEO
  </span>
  </h1>
</div>

<div class="row">
  <div class="column middle">
	
	<form action="<?php echo base_url(); ?>AMV/submit_video" method="post">
		<center>
		<table>
		<tr>
			<td>Title</td>
			<td><input type="text" name="title"size=50></td>
		</tr>
		<tr>
			<td>Link</td>
			<td><input type="text" name="link"size=50></td>
		</tr>
        <tr>
			<td>Cover (link image)</td>
			<td><input type="text" name="cover" size=50></td>
		</tr>
        <tr>
			<td>Category</td>
			<td>
			<input type="radio" name="category" value="AMV"> AMV</label>
            <input type="radio" name="category" value="MEP"> MEP</label>
			<input type="radio" name="category" value="Collab"> Collab</label>
			</td>
		</tr>
		<tr>
			<td>Author</td>
			<td><input type="text" name="author" size=50></td>
		</tr>
		<tr>
			<td>Description</td>
			<td><textarea rows="10" cols="50" name="description" ></textarea></td>
		</tr>
		</table>
     <br><center>
		<div><input type="Submit" class="button" name="submit" value="SUBMIT"> </div>
		<br>
		</center>
	 </form>	
		</center>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	
  </div>
</div>
</div>
 
</body>
</html>
