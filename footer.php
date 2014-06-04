                </div>
            </div>
        </div>
        <footer>
            <div id="global-footer">
                <div class="hr-wrap">
                    <hr>
                    <img src="images/venn-outline-3.svg" />
                    <div class="colophon">
                        <h2>Colophon</h2>
                        <div class="colophon-content">

                            <div class="column">
                                <h3>Typography</h3>
                                <p>We typeset this page in <a href="https://typekit.com/fonts/proxima-nova">Proxima Nova</a>, designed by by Mark Simonson Studio, and <a href="https://typekit.com/fonts/chaparral-pro" target="_blank">Chaparral Pro</a>, from Adobe’s Carol Twombly. We also utilize Vernon Adams’s <a href="http://code.newtypography.co.uk/" target="_blank">Pacifico</a> script in our logo. All typography is served care of <a href="https://typekit.com/" target="_blank">Typekit.com.</a></p>
                            </div>

                            <div class="column">
                                <h3>Technology</h3>
                                <p>FriendlyDesign.co is laid out using <a href="http://jeet.gs/" target="_blank">Jeet.gs</a> by MOJO Tech and styled with <a href="http://sass-lang.com/" target="_blank">SASS.</a> Fancy typing animation courtesy of Matt Boldt's <a href="http://www.mattboldt.com/demos/typed-js/" target="_blank">Typed.JS.</a> All of our issues solved courtesy of <a href="http://www.stackoverflow.com" target="_blank">Stack Overflow</a> and <a href="https://github.com/" target="_blank">GitHub</a>.</p>
                            </div>

                            <div class="column">
                                <h3>Sociology</h3>
                                <p>FriendlyDesign.co is built on a collection of MacBook Pros using the Adobe Creative Suite, with help from a host of friends and colleagues. We fuel this undertaking with <a href="http://madcapcoffee.com/" target="_blank">MadCap Coffee</a> provided through <a href="http://www.Canvas.Co/work" target="_blank">Canvas.Co/Work</a>, of which we are founding members.</p>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-meta">
                <div class="inner">
                    <nav>
                        <ul>
                            <li><a href="http://fyeah.friendlydesign.co" target="_blank">BLOG</a></li>
                            <li><a href="https://twitter.com/friendlydc" target="_blank">TWITTER</a></li>
                            <li><a href="about.html">ABOUT</a></li>
                            <li><a href="mailto:someone@friendlydesign.co">EMAIL</a></li>
                        </ul>
                    </nav>
                    <div id="footer-copyright">
                        <p>&copy; 2013 Friendly Design Co.</p>
                    </div>
                </div>
            </div>
        </footer>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
    </script>
    <script src="js/index.js"></script>
    <script src="js/typed.js"></script>
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-36812005-1', 'friendlydesign.co');
  ga('send', 'pageview');

  </script>
  <script> 
        // window.setInterval(function(){
            $('.hero-container').css('background-image','url(images/phone.png)');
            window.setTimeout(function(){
                $('.hero-container').css('background-image','url(images/imac-2.png)');
            },4000);
            window.setTimeout(function(){
                $('.hero-container').css('background-image','url(images/imac.png)');
            },8000);
            window.setTimeout(function(){
                $('.hero-container').css('background-image','url(images/phone-2.png)');
            },12000);

        // },4000);
</script>
<script src="js/wow.js"></script>
<script>
 new WOW().init();
</script>
<!--typefade script -->
       <!--<script type="text/javascript">
        var text = ['Sites.', 'Apps.', 'Brands.'];
            i = 0,
            $div = $('.noun');

        setInterval(function ()
    {
        $div.fadeOut(function ()
        {
            $div.text(text[i++ % text.length]).fadeIn();
        });
    }, 3000); -->
</script>

<script type="text/javascript" src="js/lazy.js"></script>
<script>
    var bLazy = new Blazy({
      success: function(){
        updateCounter();
      }
    });
</script>

</body>
</html>