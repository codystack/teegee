<footer class="pb-5 bg-primary-3 text-light">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="h1">Interested in collaborating?</div>
            <div class="my-5">
              <a href="contact" class="btn btn-lg btn-primary">Get In Touch</a>
            </div>
          </div>
        </div>
        <div class="row mb-4">
          <div class="col">
            <ul class="nav">
                <li class="nav-item">
                <a href="https://www.instagram.com/phatboitee/" class="nav-link">
                    <img class="icon undefined" src="assets/img/icons/social/instagram.svg" target="_blank" alt="instagram social icon" data-inject-svg />
                </a>
                </li>
                <li class="nav-item">
                <a href="https://www.twitter.com/phatboitee/" class="nav-link">
                    <img class="icon undefined" src="assets/img/icons/social/twitter.svg" target="_blank" alt="twitter social icon" data-inject-svg />
                </a>
                </li>
                <li class="nav-item">
                <a href="https://dribbble.com/codystack" class="nav-link">
                    <img class="icon undefined" src="assets/img/icons/social/dribbble.svg" target="_blank" alt="youtube social icon" data-inject-svg />
                </a>
                </li>
                <li class="nav-item">
                <a href="https://github.com/codystack" class="nav-link">
                    <img class="icon undefined" src="assets/img/icons/social/github.svg" target="_blank" alt="youtube social icon" data-inject-svg />
                </a>
                </li>
                <li class="nav-item">
                <a href="https://medium.com/@codystack" class="nav-link">
                    <img class="icon undefined" src="assets/img/icons/social/medium.svg" target="_blank" alt="medium social icon" data-inject-svg />
                </a>
                </li>
                <li class="nav-item">
                <a href="https://web.facebook.com/thankgod.okoro1" class="nav-link">
                    <img class="icon undefined" src="assets/img/icons/social/facebook.svg" target="_blank" alt="facebook social icon" data-inject-svg />
                </a>
                </li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-auto">
            <small class="text-muted">&copy; <script>document.write(new Date().getFullYear());</script> All Rights Reserved. ThankGod {Codes}&trade; is a registered trademark of <br>Contagious Agency LTD. RC 1558987</small>
          </div>
        </div>
      </div>
    </footer>

    <!-- Required vendor scripts (Do not remove) -->
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>

    <!-- 
             This appears in the demo only.  This script ensures our demo countdowns are always showing a date in the future 
             by altering the date before the countdown is initialized 
        -->
    <script type="text/javascript">
      (function($){
            var now             = new Date;
            var day             = 864e5;
            var weeksToAdd      = 2;
            var tenWeeksFromNow = new Date(+now + day * 7 * weeksToAdd).toISOString().slice(0,10).replace(/\-/g, 'index.html');
            $('[data-countdown-date].add-countdown-time').attr('data-countdown-date', tenWeeksFromNow);
          })(jQuery);
    </script>

    <!-- Optional Vendor Scripts (Remove the plugin script here and comment initializer script out of index.js if site does not use that feature) -->

    <!-- AOS (Animate On Scroll - animates elements into view while scrolling down) -->
    <script type="text/javascript" src="assets/js/aos.js"></script>
    <!-- Clipboard (copies content from browser into OS clipboard) -->
    <script type="text/javascript" src="assets/js/clipboard.js"></script>
    <!-- Fancybox (handles image and video lightbox and galleries) -->
    <script type="text/javascript" src="assets/js/jquery.fancybox.min.js"></script>
    <!-- Flatpickr (calendar/date/time picker UI) -->
    <script type="text/javascript" src="assets/js/flatpickr.min.js"></script>
    <!-- Flickity (handles touch enabled carousels and sliders) -->
    <script type="text/javascript" src="assets/js/flickity.pkgd.min.js"></script>
    <!-- Ion rangeSlider (flexible and pretty range slider elements) -->
    <script type="text/javascript" src="assets/js/ion.rangeSlider.min.js"></script>
    <!-- Isotope (masonry layouts and filtering) -->
    <script type="text/javascript" src="assets/js/isotope.pkgd.min.js"></script>
    <!-- jarallax (parallax effect and video backgrounds) -->
    <script type="text/javascript" src="assets/js/jarallax.min.js"></script>
    <script type="text/javascript" src="assets/js/jarallax-video.min.js"></script>
    <script type="text/javascript" src="assets/js/jarallax-element.min.js"></script>
    <!-- jQuery Countdown (displays countdown text to a specified date) -->
    <script type="text/javascript" src="assets/js/jquery.countdown.min.js"></script>
    <!-- jQuery smartWizard facilitates steppable wizard content -->
    <script type="text/javascript" src="assets/js/jquery.smartWizard.min.js"></script>
    <!-- Plyr (unified player for Video, Audio, Vimeo and Youtube) -->
    <script type="text/javascript" src="assets/js/plyr.polyfilled.min.js"></script>
    <!-- Prism (displays formatted code boxes) -->
    <script type="text/javascript" src="assets/js/prism.js"></script>
    <!-- ScrollMonitor (manages events for elements scrolling in and out of view) -->
    <script type="text/javascript" src="assets/js/scrollMonitor.js"></script>
    <!-- Smooth scroll (animation to links in-page)-->
    <script type="text/javascript" src="assets/js/smooth-scroll.polyfills.min.js"></script>
    <!-- SVGInjector (replaces img tags with SVG code to allow easy inclusion of SVGs with the benefit of inheriting colors and styles)-->
    <script type="text/javascript" src="assets/js/svg-injector.umd.production.js"></script>
    <!-- TwitterFetcher (displays a feed of tweets from a specified account)-->
    <script type="text/javascript" src="assets/js/twitterFetcher_min.js"></script>
    <!-- Typed text (animated typing effect)-->
    <script type="text/javascript" src="assets/js/typed.min.js"></script>
    <!-- Required theme scripts (Do not remove) -->
    <script type="text/javascript" src="assets/js/theme.js"></script>

    <script type="text/javascript">
      // This script appears only in the demo - it disables forms with no action attribute to prevent 
      // navigating away from the page.
      jQuery("form:not([action])").on('submit', function(){return false;});
    </script>

  </body>



</html>