    	</div><!-- blog-container -->
   
    <footer class="blog-footer">
      <a href="https://goo.gl/maps/h4UQiUuG2wD2">
        <div class="address-section">
          <svg width="12px" height="16px" viewBox="0 0 12 16" >
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" opacity="0.6">
                  <g transform="translate(-76.000000, -1524.000000)" fill="#FFFFFF">
                      <path d="M77.2648786,1533.68536 C76.4722059,1532.66836 76,1531.38932 76,1530 C76,1526.68629 78.6862915,1524 82,1524 C85.3137085,1524 88,1526.68629 88,1530 C88,1531.44662 87.4880443,1532.77366 86.6354294,1533.80984 L82.4043262,1539.64262 C82.3734639,1539.68516 82.3360863,1539.72257 82.2935704,1539.75348 C82.0701985,1539.91583 81.7575039,1539.86637 81.5951475,1539.643 L77.2648786,1533.68536 Z M82,1532 C83.1045695,1532 84,1531.10457 84,1530 C84,1528.89543 83.1045695,1528 82,1528 C80.8954305,1528 80,1528.89543 80,1530 C80,1531.10457 80.8954305,1532 82,1532 Z" id="Combined-Shape"></path>
                  </g>
              </g>
          </svg>
          <p>
            123 West St.
            <br/>
            Hadley, MA
          </p>
        </div>
      </a>

      <ul class="soc">
        <li><a class="soc-instagram" href="https://www.instagram.com/astartefarm/"></a></li>
        <li><a class="soc-facebook" href="https://www.facebook.com/astarte.farm"></a></li>
        <li><a class="soc-mail" href="#"></a></li>

<!--         <li><a class="soc-twitter soc-icon-last" href="#"></a></li>
 -->      </ul>

    </footer>

 
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->


    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>



    <script>  

        $(document).ready(function(){
          
          var scroll = $(window).scrollTop();
          $('.blog-footer').hide();

          // var pathname = window.location.pathname;
          // console.log(pathname)
          //   $('.navbar > .nav-items-container > li > a[href="'+pathname+'"]').parent().addClass('active');

          $(window).on("load", function(){
            $(window).scroll(function() {
              var scroll = $(window).scrollTop();
              if (scroll < 100) {
                $('.blog-footer').hide();
              } else if (scroll >= 100) {
                $('.blog-footer').show();
              }
            });
          });
        })



    </script>


   <?php wp_footer(); ?> 
  </body>
</html>