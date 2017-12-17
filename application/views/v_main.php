<!DOCTYPE html>
<html lang="en">
<head>
<title>Welcome To AMVINDO</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/js/jquery-3.2.1.min.js">
<style>

    div.scrollmenu {
        background-color: #333;
        overflow: auto;
        white-space: nowrap;
    	bottom: 0;
    	width: 100%;
    	position: fixed;
    	
    }

    div.scrollmenu a {
        display: inline-block;
        color: white;
        text-align: center;
        padding: 14px;
        text-decoration: none;
    }

    div.scrollmenu a:hover {
        background-color: #777;
    }


    * {
        box-sizing: border-box;
    	font-family: arial, sans-serif;
    }

    table{
    	width: 110%;
    	padding: 0;
    	overflow: hidden;
        list-style-type: none;
    	
    }

    body {
    	margin: 0;
    	background-image:url("<?= base_url();?>assets/img/sezybackground2.png");
    	background-repeat: no-repeat;
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

    .container {
        position: relative;
        display: none;
    }

    /* Expanding image text */
    #imgtext {
        position: absolute;
        bottom: 15px;
        left: 15px;
        color: white;
        font-size: 20px;
    }
</style>
</head>
<body>

<div class="topnav" >
  <div class="dropdown">
  <a href="javascript:void(0)" class="dropbtn">AMV Indo</a>
    <div class="dropdown-content">
      <a href="#">Home</a>
      <a href="<?= base_url();?>index.php/AMV/video_list">Video List</a>
    </div>
  </div>
  <a style="float:right; margin-top:-25px"; href="Search.html"><form action="" ><br><img type="submit" id="search" style="width:20px;height:20px;" src="Search.png"></button></form></a>
  <a style="float:right; margin-top:-25px"><form action="" ><br><input type="text" placeholder="Search Video"></form></a>
  <a style="float:right" ; href="#account"><img src="Account.png" style="width:30px;height:20px;" ></a>
</div>

<div class="scrollmenu">
  <?php 
	foreach($results as $row) {
        ?>
  <a><img src="<?php echo $row ["cover"];?>" style="width:178px;height:100px;" onclick="myFunction(this)" class="thumbnile"></a>
  <?php        
    }
?>
</div>

<div style="margin-top:20px">
	<table>
	  <tr>
		<td width="60%" height="510px">
			<div class="container">
				<img id="expandedImg" style="width:800px; height:450px">
			<div id="imgtext"></div>
			</div>
		</td>
		<td width="50%" height="510px" style="background-color:#457baa; padding:20px">
			<h2>TITLE</h2>
			<p style="color:Yellow";>Video title "Ini Judulnya apa ya"</p>
			<h2>CATEGORY</h2>
			<p style="color:Yellow";>AMV / MEP / Collab"</p>
		<td>
	  </tr>
	</table>
</div>

<script>
function myFunction(imgs) {
    var expandImg = document.getElementById("expandedImg");
    var imgText = document.getElementById("imgtext");
    expandImg.src = imgs.src;
	imgText.innerHTML = imgs.alt;
    expandImg.parentElement.style.display = "block";
}
$(document).ready(() => {
    console.log("hahah");
})
</script>
 
</body>
</html>
