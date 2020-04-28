    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="utf-8">
    <title>SKILLS | Flat Design Mini Portfolio</title>
    </head>
    <body>

    <!--Skills container-->
    <div class="container skills">
      <h2>My Skills</h2>
      <div class="row">
        <div class="span3">
          <div class="ps">
            <h3>Ps</h3>
          </div>
        </div>
        <div class="span5">
          <h3>Photoshop <span>90%</span></h3>
          <div class="expand-bg"> <span class="expand ps2"> &nbsp; </span> </div>
        </div>
      </div>
      <div class="row">
        <div class="span3">
          <div class="ai">
            <h3>Ai</h3>
          </div>
        </div>
        <div class="span5">
          <h3>Illustrator <span>80%</span></h3>
          <div class="expand-bg"> <span class="expand ai2"> &nbsp; </span> </div>
        </div>
      </div>
      <div class="row">
        <div class="span3">
          <div class="html">
            <h3>HTML5</h3>
          </div>
        </div>
        <div class="span5">
          <h3>HTML5 <span>75%</span></h3>
          <div class="expand-bg"> <span class="expand html2"> &nbsp; </span> </div>
        </div>
      </div>
      <div class="row">
        <div class="span3">
          <div class="css">
            <h3>CSS3</h3>
          </div>
        </div>
        <div class="span5">
          <h3>CSS3 <span>85%</span></h3>
          <div class="expand-bg"> <span class="expand css2"> &nbsp; </span> </div>
        </div>
      </div>
    </div>
    <!--END: Skills container-->
    <!-- Social Icons -->
    <div class="row social">
      <ul class="social-icons">
        <li><a href="#" target="_blank"><img src="img/fb.png" alt="facebook"></a></li>
        <li><a href="#" target="_blank"><img src="img/tw.png" alt="twitter"></a></li>
        <li><a href="#" target="_blank"><img src="img/go.png" alt="google plus"></a></li>
        <li><a href="#" target="_blank"><img src="img/pin.png" alt="pinterest"></a></li>
        <li><a href="#" target="_blank"><img src="img/st.png" alt="stumbleupon"></a></li>
        <li><a href="#" target="_blank"><img src="img/dr.png" alt="dribbble"></a></li>
      </ul>
    </div>
    <!-- END: Social Icons -->
    <!-- Footer -->
    <div class="footer">
      <div class="container">
        <p class="pull-left"><a href="http://dzyngiri.com">www.dzyngiri.com</a></p>
        <p class="pull-right"><a href="#myModal" role="button" data-toggle="modal"> <i class="icon-mail"></i> CONTACT</a></p>
      </div>
    </div>
    <!-- Contact form in Modal -->
    <!-- Modal -->
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
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
            $('#myModal').modal('hidden')
    </script>
    </body>
    </html>
