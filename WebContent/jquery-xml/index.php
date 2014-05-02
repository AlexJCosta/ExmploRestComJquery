<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Papermashup.com | jQuery Image Zoom</title>
<link href="../style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.js"></script>
<script>
$(document).ready(function () {
    $.ajax({
        type: "GET",
        url: "books.xml",
        dataType: "xml",
        success: xmlParser
    });
});




function xmlParser(xml) {

    $('#load').fadeOut();

    $(xml).find("Book").each(function () {

        $(".main").append('<div class="book"><div class="title">' + $(this).find("Title").text() + '</div><div class="description">' + $(this).find("Description").text() + '</div><div class="date">Published ' + $(this).find("Date").text() + '</div></div>');
        $(".book").fadeIn(1000);

    });



}
</script>

<style> 
.main{
width:1000px;
margin:0 auto;
height:130px;
}
 
.book{
width:208px;
float:left;
margin:10px;
border:1px #dedede solid;
padding:5px;
display:none;
}

.title{
margin-bottom:6px;}
 
.description{font-size:11px; font-family:Geneva, Arial, Helvetica, sans-serif;}

.date{font-size:10px; color:#999; margin-top:4px;}

.loader{
height:11px;
}

</style> 



</head>
<body>


<?php include '../includes/header.php';
 $link = '| <a href="http://papermashup.com/jquery-image-zoom-effect/">Back To Tutorial</a>';
?>

<div class="main">
<div align="center" class="loader"><img src="loader.gif" id="load" width="16" height="11" align="absmiddle"/></div>
</div>

<div class="clear"></div>

<?php include '../includes/footer.php';?>

</body>
</html>
