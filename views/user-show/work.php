    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="utf-8">
    <title>WORK | Flat Design Mini Portfolio</title>

    <!-- scripts -->
    <!-- Add jQuery library -->
    <script type="text/javascript" src="js/jquery-1.10.1.min.js"></script>
    <!-- Add fancyBox main JS and CSS files -->
    <script type="text/javascript" src="js/jquery.fancybox.js?v=2.1.5"></script>
    <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css?v=2.1.5" media="screen" />
    <script>
            $(document).ready(function() {
        $(".fancybox-thumb").fancybox({
            helpers	: {
                title	: {
                    type: 'inside'
                },
                overlay : {
                            css : {
                                'background' : 'rgba(1,1,1,0.65)'
                            }
                        }
            }
        });
    });
        </script>
    </head>
    <body>
    <!-- Works container -->
    <div class="container work">
      <h2>My Work</h2>
      <ul class="work-images">
        <li>
          <div><a class="fancybox-thumb" rel="fancybox-thumb" href="img/1.jpg" title="Image 01"><img src="img/1-thumb.jpg" /></a></div>
        </li>
        <li>
          <div><a class="fancybox-thumb" rel="fancybox-thumb" href="img/2.jpg"><img src="img/2-thumb.jpg" /></a></div>
        </li>
        <li>
          <div><a class="fancybox-thumb" rel="fancybox-thumb" href="img/3.jpg"><img src="img/3-thumb.jpg" /></a></div>
        </li>
      </ul>
      <ul class="work-images">
        <li>
          <div><a class="fancybox-thumb" rel="fancybox-thumb" href="img/4.jpg"><img src="img/4-thumb.jpg" /></a></div>
        </li>
        <li>
          <div><a class="fancybox-thumb" rel="fancybox-thumb" href="img/5.jpg"><img src="img/5-thumb.jpg" /></a></div>
        </li>
        <li>
          <div><a class="fancybox-thumb" rel="fancybox-thumb" href="img/6.jpg"><img src="img/6-thumb.jpg" /></a></div>
        </li>
      </ul>
      <!--Dummy images by The Fox And King :: http://dribbble.com/snootyfox-->
    </div>

    <!-- Footer -->
    <div class="footer">
      <div class="container">
        <p class="pull-left"><a href="http://dzyngiri.com">www.dzyngiri.com</a></p>
        <p class="pull-right"><a href="#myModal" role="button" data-toggle="modal"> <i class="icon-mail"></i> CONTACT</a></p>
      </div>
    </div>
    <!-- Contact form in Modal -->
    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel"><i class="icon-mail"></i> Contact Me</h3>
      </div>
      <div class="modal-body">
        <form>
          <input type="text" placeholder="Yopur Name">
          <input type="text" placeholder="Your Email">
          <input type="text" placeholder="Website (Optional)">
          <textarea rows="3" style="width:80%"></textarea>
          <br/>
          <button type="submit" class="btn btn-large"><i class="icon-paper-plane"></i> SUBMIT</button>
        </form>
      </div>
    </div>
    <!-- Scripts -->
    <script src="js/bootstrap.min.js"></script>
    <script>
            $('#myModal').modal('hidden')
    </script>
    </body>
    </html>
