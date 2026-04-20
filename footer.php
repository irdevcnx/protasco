<footer id="footer">
    <div class="copyright-content">
        <div class="container">
            <div class="row">
                   <div class="col-md-12 d-flex justify-content-center">
                   	<div><a href="https://www.facebook.com/protascoberhadofficial/" target="_blank"><img alt="" src="img/homepage/icon_fb.png" class="mb-2 mr-2 img-icon-30"></a></div><div><a href="https://www.instagram.com/protascoberhad/" target="_blank"><img alt="" src="img/homepage/icon_ig.png" class="mb-2 mr-2 img-icon-30"></a></div><div style="display: none;"><a href="https://twitter.com/protascoberhad?lang=en" target="_blank"><img alt="" src="img/homepage/icon_linkedin.png" class="mb-2 mr-2 img-icon-30"></a></div><div><a href="https://twitter.com/protascoberhad?lang=en" target="_blank"><img alt="" src="img/homepage/icon_twitter.png" class="mb-2 mr-2 img-icon-30"></a></div>
                   </div>
                  <div class="copyright-text text-center col-12 ">
<!--                     <a href="" target="_blank" rel="noopener">Site Map</a> | <a href= target="_blank" rel="noopener">Legal &amp; Privacy</a> -->
                </div>
                <div class="copyright-text text-center col-12 ">
                     &copy; Copyright <?php echo date('Y')?> PROTASCO BERHAD [200101012322 (548078-H)]. | All Rights Reserved. | <a href="pdpa.php">Privacy Notice.</a>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>

<script src="https://unpkg.com/gojs@2.3.3/release/go.js"></script>
<link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet" type="text/css">

<a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>

<script src="js/jquery.js"></script>
<script src="js/plugins.js"></script>
<script src="js/functions.js"></script>
<script type='text/javascript' src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOksKHb9HyydVB-mcrqKUVfA_LeB79jcQ"></script>
<script type="text/javascript" src="plugins/gmap3/gmap3.min.js"></script>
<script type="text/javascript" src="plugins/gmap3/map-styles.js"></script>

<script>
    document.getElementById('contact_form') && document.getElementById('contact_form').addEventListener('click', function (e) {
        var js_name = $("#name").val();
        var js_email = $("#email").val();
        var js_message = $("#message").val();

        // Do a simple validation
        if (js_name == "") {
            return false;
        }

        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

        if (js_email == '') {
            return false;
        }

        if (!emailReg.test(js_email)) {
            return false;
        }

        if (js_message == "") {
            return false;
        }

        // return window.location.href = "mailto:haozheen4533@gmail.com,"+ "subject=this is how to use the mailto link &body=this is an article on how to use the mailto link";
    })
</script>

<script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
</body>
</html>