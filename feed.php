<?php include 'header.php';?>

<style>
.news{display:none!important;}
.news:nth-child(1) ,.news:nth-child(2),.news:nth-child(3){display:block!important;} 
.description p:nth-child(2){display:none!important;}

</style>
	
	<section class="background-gc1">
        <div class="container">
            <div class="heading-text heading-section text-left">
                <h3 class="mb-0"><span class="before-title"></span>Latest News</h3>
                <p><span  class="s-title">Proactive</span></p>
            </div>
        </div>
        <div class="container">
            		<div class="row " data-simply-list="news" data-simply-data="newsList">
                      <template>
                      <div class="col-md-4 mb-2 wow news bounceInUp "  style="visibility: visible; animation-name: bounceInUp;">
                           <a href="#" data-simply-field="link" data-simply-content="fixed">
                            <div class="nboczs">
                                <h5 data-simply-field="title">title</h5>
                    			<p  data-simply-field="pubDate" >pubDate</p>
                    			<div data-simply-field="description" class="description">description</div>
                            </div>
                            </a>
                        </div>
                      </template>
                    </div>
        </div>
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-12 mb-2 wow bounceInUp text-center"  style="visibility: visible; animation-name: bounceInUp;">
            	<a class="mybutton wow bounceInUp text-center mt-2" style="visibility: visible; animation-name: bounceInUp;" href="https://protascoactive.com.my/" target="_blank" >Read More</a>
        	</div>
        </div>
        </div>
    </section>
	
<script src="js/simply-edit.js" ></script>

<?php include 'footer.php';?>


<script>

// // Code Sample  
// $(document).ready(function() {  
//     var url = 'http://protascoactive.com.my/feed/'; //Data in XML format  
//     $.ajax({  
//         type: 'GET',  
//         url: "https://api.rss2json.com/v1/api.json?rss_url=" + url, //For converting default format to JSON format  
//         dataType: 'jsonp', //for making cross domain call  
//         success: function(data) {  
//             alert('Success');  
//             $("#rss-default").append(data.feed);  
//             console.log(data.feed.description); 
//             console.log(data.feed.title);  
//         }  
//     });  
// }); 


function loadRSS(url, datasource) {
  fetch('https://api.rss2json.com/v1/api.json?rss_url='+encodeURIComponent(url))
  .then(function(response) {
    if (response.ok) {
      return response.json();
    }
    throw new Error('Could not fetch rss');
  })
  .then(function(data) {
    editor.addDataSource(datasource, {
      load: data.items,
      save: function(stash) {
        // called just before saving the page data in SimplyEdit
        // stash contains the current content of the list
      },
      get: function() {
        // returns the data you would like to save in the data.json
        return url;
      },
      applyOnce: true // workaround to prevent the datalist from 
      // being applied multiple times when dragging etc.
    });
  });
}

loadRSS('http://protascoactive.com.my/feed/', 'newsList');





</script>