<?php $page_title = "SILIGURI HIP-HOP";?>
<?php require_once("private/shared/header.php"); ?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img/one.jpg" alt="New York" width="1200" height="700">
        <div class="carousel-caption">
          <h3>SILIGURI</h3>
          <p>The atmosphere in Siliguri is Great.</p>
        </div>
      </div>

      <div class="item">
        <img src="img/two.jpg" alt="Chicago" width="1200" height="700">
        <div class="carousel-caption">
          <h3>SILIGURI</h3>
          <p>Thank you, Anwar's - A night we won't forget.</p>
        </div>
      </div>

      <div class="item">
        <img src="img/three.jpg" alt="Los Angeles" width="1200" height="700">
        <div class="carousel-caption">
          <h3>SILIGURI</h3>
          <p>Even though the traffic was a mess, we had the best time playing at Anwar's</p>
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<!-- Container (The Band Section) -->
<div id="band" class="container text-center">
  <h1><font color="black">SILIGURI HIP-HOP EVENT 2019</font></h1>
  <p><em>We love music!</em></p>
  <p>Drastic & team is about to organize the biggest Underground HIPHOP Rap Event in Siliguri for the very first time at Killer's Dance Studio. The event is divided into 3 categories, they are as follow:

<strong>Cyphers,</strong>
<strong>Rap battles,</strong>
<strong>Open mic/ free jamming</strong><br>

Intrested artists can sign up there name bellow in the following categories.
<br><strong>An artist can take part in any of these three things, there's No Age Limit, No Entry Fees. So get your ass up to this Hiphop event if you think you are really a hiphop head.</strong></p>
  <br>
  <!-- <div class="row">
    <div class="col-sm-4">
      <p class="text-center"><strong>Subham Verma</strong></p><br>
      <a href="#demo" data-toggle="collapse">
        <img src="img/sbm.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo" class="collapse">
        <p>Guitarist and Lead Vocalist</p>
        <p>Loves long walks on the beach</p>
        <p>Member since 1988</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Bijay Sharma</strong></p><br>
      <a href="#demo2" data-toggle="collapse">
        <img src="img/bij.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo2" class="collapse">
        <p>Founder & CEO - PowerBlocls</p>
        <p>Passionate Developer</p>
        <p>Loves Developing Android and Web Apps</p>
      </div> -->
    </div>
    <!-- <div class="col-sm-4">
      <p class="text-center"><strong>Name</strong></p><br>
      <a href="#demo3" data-toggle="collapse">
        <img src="bandmember.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo3" class="collapse">
        <p>Bass player</p>
        <p>Loves math</p>
        <p>Member since 2005</p>
      </div>
    </div> -->
  </div>
</div>

<!-- Container (TOUR Section) -->

  <!-- Prizes -->
<div id="prizes">
  <div class="container">
    <center><img src="img\2x\baseline_loyalty_white_48dp.png" style="padding-bottom:20px;"></center>
    <h3 style="font-family:impact; color:#fff; letter-spacing:normal; line-height:1.4em;font-size:2em;"> Prizes<strong> worth Rs. 25,000</strong> which includes a beat from Boominati (<a href="https://www.instagram.com/boominati95/" data-toggle="tooltip" title="View Profile">@boominati95</a>) and a mix/master by Speedy (<a href="https://www.instagram.com/mixedbyspeedy/" data-toggle="tooltip" title="View Profile"> @mixedbyspeedy</a>)</h3>
    <center><button class="btn" data-toggle="modal" data-target="#myModal" style="font-size:2em; font-family:impact; background:#d32f2f; border:2px solid white;">Register Now !</button></center>
  </div>
</div>

  <div id="tour" class="bg-1">
    <div class="container">
      <h3 class="text-center">Event Registration</h3>
      <p class="text-center">Registerations opening Soon ...</p>
      <ul class="list-group">
        <li class="list-group-item">This coming June <span class="label label-danger">Registration opening soon</span></li>
      </ul>

      <div class="row text-center">


        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="img/city.jpg" alt="Registration" width="400" height="300">
            <p><strong>City Centre, Siliguri</strong></p>
            <p>At Killer's Dance Studio.</p>
            <button class="btn" data-toggle="modal" data-target="#myModal">Register Now !</button>
          </div>
        </div>
          </div>
      </div>
    </div>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Registration</h4>
        </div>
        <div class="modal-body">
            <h1>Register</h1>
            <form role="form" action="register.php" method="post">
                <div class="form-group">
                    <label for="psw"> <span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp; Name</label>
                    <input type="text" class="form-control" name="name" id="psw" placeholder="What is your full name?" required>
                </div>
                <div class="form-group">
                    <label for="psw"> </span> Stage Name</label>
                    <input type="text" name="stage_name" class="form-control" id="psw" placeholder="What's your stage name?" required>
                </div>
                <div class="form-group">
                    <label for="psw"></span>Gender</label>
                    <select id="psw" name="gender" required>
                        <option selected>Select</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Transgender">Transgender</option>
                    </select>

                </div>
                <div class="form-group">
                    <label for="psw">Phone Number</label>
                    <input name="phone" type="tel" class="form-control" id="psw" placeholder="Mobile Number" required>
                </div>
                <div class="form-group">
                    <label for="psw">Email ID</label>
                    <input name="email" type="email" class="form-control" id="psw" placeholder="Email ID?" required>
                </div>
                <div class="form-group">By Clicking on Submit you accept all the Terms & conditions.</div><br>
                <button type="submit" class="btn btn-block">Submit
                    <span class="glyphicon glyphicon-ok"></span>
                </button>
            </form>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
          <p>Need <a href="#">help?</a></p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container">
  <h3 class="text-center">Contact</h3>
  <p class="text-center"><em>Need Help? We're here</em></p>

  <div class="row">
    <div class="col-md-4">
      <p>Contact info</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Siliguri, India</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: +91 8509759687</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: drasticworld@outlook.com</p>
    </div>
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
  <br>
  <!-- <h3 class="text-center">The Team</h3>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Subham Verma</a></li>
    <li><a data-toggle="tab" href="#menu1">Bijay Sharma</a></li>
    <li><a data-toggle="tab" href="#menu2">Peter</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h2>Mike Ross, Manager</h2>
      <p>Man, we've been on the road for some time now. Looking forward to lorem ipsum.</p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h2>Chandler Bing, Guitarist</h2>
      <p>Always a pleasure people! Hope you enjoyed it as much as I did. Could I BE.. any more pleased?</p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h2>Peter Griffin, Bass player</h2>
      <p>I mean, sometimes I enjoy the show, but other times I enjoy other things.</p>
    </div>
  </div> -->
</div>

<!-- Image of location/map -->
<div class="mapouter" style="width:100%;"><div class="gmap_canvas" style="width:100%;"><iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=City%20centre%20siliguri&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.pureblack.de"></a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>
</div>

<!-- Footer -->
<?php require_once("private/shared/footer.php"); ?>

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip();

  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})

function tc(){
  alert("Terms and condtions");
}
<!--</script>-->
<!--<script type="text/javascript">-->
<!--    $(window).on('load',function(){-->
<!--        $('#myModal').modal('show');-->
<!--    });-->
<!--</script>-->

</body>
</html>
