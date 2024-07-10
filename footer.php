<footer class="footer">
        <section class="container">
          <div class="row">
            <div class="column">
              <h2><a class="nolink" href="index.php"> Services</a></h2>
            </div>
            <div class="column">
              <h2 class="align-right"><a class="nolink" href="contact.php">Contact</a></h2>
            </div>
          </div>
          <div class="row">

            
            <div class="column">
              <ul>
                <li><a class="nolink" href="index.php">Home</a></li>
                <li><a class="nolink" href="example.php" >Example</a></li>
                <li><a class="nolink" href="contact.php">Contact</a></li>
                
              </ul>
            </div>
            <div class="column">
              <ul>
              <li><a class="nolink" href="index.php">Home</a></li>
                <li><a class="nolink" href="example.php" >Example</a></li>
                <li><a class="nolink" href="contact.php">Contact</a></li>
                             
              </ul>
            </div>
            <div class="column">
              <ul id="xxx">
                
              <li><a class="nolink" href="index.php">Home</a></li>
                <li><a class="nolink" href="example.php" >Example</a></li>
                <li><a class="nolink" href="contact.php">Contact</a></li>
                              
              </ul>
            </div>
            
          </div>
          <div class="float-left">
            <a href="/licensed-gc-florida.php"><span>License xxxxxxx</span></a>
          </div>
          <div class="icons float-right">
              <a target="_blank" href="https://www.facebook.com//"><img class="social fb"  width="40" height="40"src="/images/f.png"  alt="Facebook Icon"></a>
              <a target="_blank" href="https://www.linkedin.com/company/"><img class="social li"  width="40" height="40" src="/images/in.png"  alt="LinkedIn Icon"></a>
              <a target="_blank" href="https://www.google.com/maps/uv?pb=!1s0x88d929e3ffffffff:0x4ab4db69351e4599!3m1!7e115!4s/maps/place/smc%2Bcontracting/@26.6859136,-80.071864,3a,75y,56.27h,90t/data%3D*213m4*211e1*213m2*211sqnaVWcW1CnbIj3MtLh67FQ*212e0*214m2*213m1*211s0x88d929e3ffffffff:0x4ab4db69351e4599?sa%3DX%26ved%3D2ahUKEwiGjtTwk4iEAxV6gIQIHUQkAbAQpx96BAg3EAA!5ssmc+contracting+-+Google+Search!15zQ2dJZ0FRPT0&imagekey=!1e2!2sqnaVWcW1CnbIj3MtLh67FQ&hl=en&sa=X&sqi=2&ved=2ahUKEwiGjtTwk4iEAxV6gIQIHUQkAbAQpx96BAhKEA0"><img class="social gg" src="/images/g.png" width="40" height="40" alt="Google Icon"></a>
            </div>

        </section>
      </footer>
      <!-- Gallery Modal -->
<div id="galleryModal" class="gallery-modal" style="display:none;">
    <div class="gallery-content">
        <span id="leftArrow" class="left-arrow">&lt;</span>
        <img id="galleryImage" src="/images/000.webp" alt="Gallery Image">
        <span id="rightArrow" class="right-arrow">&gt;</span>
    </div>
</div>

    </main>
    
    <script>
      
          //the following script creates a gallery viewer for all images within a div called "mainbody"
          //it will exlude any images within a container called "icons"

      // Select all images inside .container and set them up for the gallery
      $(document).ready(function() {
          const $galleryModal = $('#galleryModal');
          const $leftArrow = $('#leftArrow');
          const $rightArrow = $('#rightArrow');
          const $galleryImage = $('#galleryImage');

          let images = [];
          let currentIndex = 0;

          // Select images excluding those within .icon container
          $('.mainbody img').not('.icons img').each(function(index) {
              let myimagesrc = null;
              if($(this).attr('data-src')){
                myimagesrc = $(this).attr('data-src');
              } else {
                myimagesrc = $(this).attr('src');
              }
              images.push(myimagesrc);
              $(this).on('click', function() {
                  currentIndex = index;
                  $galleryImage.attr('src', images[currentIndex]);
                  $galleryModal.show();
                  updateArrowVisibility();
              });
          });

          $leftArrow.click(function(event) {
              if (currentIndex > 0) {
                  currentIndex--;
                  $galleryImage.attr('src', images[currentIndex]);
                  updateArrowVisibility();
              }
              event.stopPropagation(); // Prevent the event from propagating
          });

          $rightArrow.click(function(event) {
              if (currentIndex < images.length - 1) {
                  currentIndex++;
                  $galleryImage.attr('src', images[currentIndex]);
                  updateArrowVisibility();
              }
              event.stopPropagation(); // Prevent the event from propagating
          });

          $(document).keydown(function(e) {
              if (e.key === "Escape") {
                  $galleryModal.hide();
              }
          });

          $('#galleryModal').click(function(e) {
              if ($(e.target).is('#galleryModal')) {
                  $galleryModal.hide();
              }
          });

          $('#galleryImage').click(function(e) {
              e.stopPropagation(); // Prevent the event from propagating to the modal
          });

          // Function to update the visibility of navigation arrows
          function updateArrowVisibility() {
              $leftArrow.toggle(currentIndex !== 0); // Hide left arrow if at the first image
              $rightArrow.toggle(currentIndex !== images.length - 1); // Hide right arrow if at the last image
          }

          // $(document).scroll(function() {
          //     if ($(document).scrollTop()> 90) {
          //       $("body").addClass("scrolled");
          //     } else {
          //       $("body").removeClass("scrolled");
          //     }
          // })
      });

      document.addEventListener("DOMContentLoaded", function() {
        var lazyloadImages = document.querySelectorAll("img.lazy");    
        var lazyloadThrottleTimeout;
        
        function lazyload () {
          if(lazyloadThrottleTimeout) {
            clearTimeout(lazyloadThrottleTimeout);
          }    
          
          lazyloadThrottleTimeout = setTimeout(function() {
              var scrollTop = window.pageYOffset;
              lazyloadImages.forEach(function(img) {
                  if(img.offsetTop < (window.innerHeight + scrollTop)) {
                    img.src = img.dataset.src;
                    img.classList.remove('lazy');
                  }
              });
              if(lazyloadImages.length == 0) { 
                document.removeEventListener("scroll", lazyload);
                window.removeEventListener("resize", lazyload);
                window.removeEventListener("orientationChange", lazyload);
              }
          }, 20);
        }
        
        document.addEventListener("scroll", lazyload);
        window.addEventListener("resize", lazyload);
        window.addEventListener("orientationChange", lazyload);
      });    

function() {
    for (var e = document.querySelectorAll("[data-popover]"), n = document.querySelectorAll(".popover"), t = 0; t < e.length; t++)
        e[t].addEventListener("click", r);
    function o(e) {
        for (var t = 0; t < n.length; t++)
            n[t].classList.remove("popover-open")
    }
    function r(e) {
        e.preventDefault(),
        document.querySelector(this.getAttribute("href")).classList.contains("popover-open") ? document.querySelector(this.getAttribute("href")).classList.remove("popover-open") : (o(),
        document.querySelector(this.getAttribute("href")).classList.add("popover-open")),
        e.stopImmediatePropagation()
    }
    document.addEventListener("click", o)
}()  
    </script>
    
    
  </body>
</html>