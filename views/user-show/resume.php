    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="utf-8">
    <title>RESUME | Flat Design Mini Portfolio</title>
    </head>
    <body>

    <!-- Resume container -->
    <div class="container resume">
      <h2>My Resume</h2>
      <h3>You can download my resume for your reference and I hope that we will meet very soon! :)</h3>
      <div class="btn-center"> <a href="#" class="hire-me"><i class="icon-download"></i> Download Resume</a>
        <h2>125kb</h2>
      </div>
    </div>
    <!--END: Resume container-->
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
