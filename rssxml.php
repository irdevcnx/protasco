<?php include 'header.php';?>

<div id="main"></div>
	



<?php include 'footer.php';?>
<script>


$(document).ready(function()
{
  $.ajax({
    type: "GET",
    url: "http://protascoactive.com.my/feed/",
    dataType: "xml",
    success: parseXml
  });
});

function parseXml(xml)
{
  $("#main").html("<div class='container'  data-role='listview' data-inset='true'><div class='row' id='content'></div></div>");
  $(xml).find("item").each(function()
  {
    $("#content").append("<div class='col-md-4 mb-2 wow bounceInUp'><a href='"+$(this).find("link").text()+"' target='_blank'><div class='nboczs'><p>"+$(this).find("pubDate").text()+"</p><h5>"+$(this).find("title").text()+"</h5></div></a></div>");
  });  
}
</script>

