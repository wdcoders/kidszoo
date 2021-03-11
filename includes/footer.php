        <div class="row">
            <div class="footer">
                <div class="container">
                    <p>Copyright Kidszoo © 2019. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </div>
    <!--MAIN CONTAINER END-->
    
    
    <!--ADDITIONAL-->
    <div class="totop"><span class="fas fa-angle-up"></span></div>
    <!--ADDITIONAL-->
    
    
    <script src="component/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="component/plugins/OwlCarousel/dist/owl.carousel.min.js" type="text/javascript"></script>
    <script src="component/plugins/Scroll-Page-To-Top/totop.min.js" type="text/javascript"></script>
    <script src="component/js/main.js" type="text/javascript"></script>
    <script>
        $('.customize ul.nav li.dropdown').hover(function(){
            $(this).addClass('open');
            $(this).find('.dropdown-menu').stop(true, true).fadeIn(200);
        }, function() {
            $(this).removeClass('open');
            $(this).find('.dropdown-menu').stop(true, true).fadeOut(200);
        });   
    </script>    
</body>
</html>

