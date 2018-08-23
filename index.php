<!DOCTYPE html>
<html lang="en">
<head>
  <title>Forest Lake Preserve Estates</title>
  <meta charset="utf-8">
  <meta author="Alex Biedny">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="/js/main.js"></script>
  <link rel="stylesheet" href="/stylesheets/main.css" type="text/css">
</head>
<body>
  <div id="wrapper"><!--Wrapper to fix parallax on iOS devices-->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-main">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">FL Preserve Estates</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse-main">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#info">General Info</a></li>
            <li><a href="#pictures">Pictures</a></li>
            <li><a href="#details">Details</a></li>
            <li><a href="#contact">Contact Us</a></li>
          </ul>
        </div><!--Navbar collapse-->
      </div><!--Container fluid-->
    </nav>

    <!--Splash Text-->
    <div class="home" id="splash">
      <div class="text-vcenter">
        <h1 style="font-family: Brush Script MT;">Forest Lake Preserve Estates</h1>
        <h2>Outlot A</h2>
        <h3>$1.55 Million</h3>
      </div>
    </div>

    <!--Info Section-->
    <div class="pad-section" id="info">
      <div class="container">
        <div class="row">
          <div class="col-sm-6" id="google-maps">
            <iframe
              width="100%"
              height="450"
              frameborder="0" style="border:0"
              src="https://maps.google.com/maps?q=45.2126563,-92.9756372&hl=es;z=16.5&amp;output=embed" allowfullscreen>
            </iframe>
          </div>
          <div class="col-sm-6" id="info-text">
            <h2>Info</h2>
            <p>
              Forest Lake Preserve Estates' Outlot A is roughly 170 acre parcel of land located on the southern end of Forest Lake, MN.
              The property is a beautiful mix of fields, forest, and wetlands, and has something for everybody: Sportsmen, nature enthusiasts, farmers, 
              equestrian hobbyists, or even land developers!
            </p>
            <ul>
              <li><strong>Sportsman's Delight: </strong>For the hunting enthusiast, this property is a dream come true. It has 
                been lightly hunted for years, always yielding trophy whitetail deer. Turkey and pheasants are also abound 
                on the property. With several well-maintained trails throughout the property, it really is a sportsman's delight!</li>
              <li><strong>Old Growth Forest: </strong>Much of the propery contains deciduous and coniferous woodlands, 
                with old growth oak trees in abundance. In early 2004, nearly 7000 coniferous trees of various species were 
                planted, and they continue to flourish to this day.</li>
              <li><strong>Full of Potential: </strong>With over 1300ft of frontage on Highway 61, the property is full of potential 
                for future development. The land is currently zoned agricultural, allowing for 20 acre lots, and future 
                city development plans show that much of it will soon be reclassified to allow for mixed commercial, 
                residential, and light industrial use.</li>
            </ul>
            <p>
              Shown to the right is a satellite view of the property. Borders (further outlined in pictures below) range from Highway 61 in the west 
              end to across Hardwood Creek in the East, and from just South of 184th Street in the North to Forest Lake city limits in the South.
            </p>
          </div>
        </div>
      </div>
    </div>

    <hr>

    <!--Pictures Section-->
    <div class="pad-section" id="pictures">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2>Pictures</h2>
            <div id="picture-slideshow" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#picture-slideshow" data-slide-to="0" class="active"></li>
                <li data-target="#picture-slideshow" data-slide-to="1"></li>
                <li data-target="#picture-slideshow" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img src="/assets/P8181074.JPG" alt="Image 1">
                </div>
                <?php
                  $top = "<div class=\"item\">";
                  $bottom = "</div>";
                  $imageSuffix = 55;
                  for ($i = 0; $i < 20; $i++) {
                    //This one has to be first, skip it
                    if ($imageSuffix == 74) continue;

                    echo $top . "<img src=\"/assets/P81610$imageSuffix.JPG\" alt=\"Image $i\">" . $bottom;
                    $imageSuffix++;
                  }
                ?>

                <!--Controls-->
                <a class="left carousel-control" href="#picture-slideshow" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#picture-slideshow" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--Second parallax image-->
    <div class="parallax2" id="splash" style="background: url(/assets/P8181074.JPG) no-repeat center center fixed; height: 500px;">
      <div class="text-vcenter">
        <h1>Details</h1>
      </div>
    </div>

    <!--Details-->
    <div class="pad-section" id="details">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <h2>Details</h2>
            <p>
              Additional details about the property can be found here:
            </p>
            <ul>
              <li>The land is bisected on the East side by Hardwood Creek.</li>
              <li>Approximately 25 acres of the land are currently rented out to a local farmer, who uses it 
                to grow alfalfa and clover.
              </li>
              <li>Several maintained trails run through the property, able to be navigated on foot, by ATV, or in some cases, even by car.</li>
            </ul>
          </div>
          <div class="col-sm-6">
            <h2>Future Plans</h2>
            <p>
              Mentioned in the general info section, the Forest Lake Future Land Use Plan - which outlines future 
              municipal goals and priorities in land development - shows Highway 61 frontage as designated for 
              mixed use. This would allow for a range of retail, office, residential, and light industrial lots. 
              The document also details plans to extend Forest Lake city sewer and water to city limits, meaning that the Forest 
              Lake Preserve Estates are only 10-15 years away from city sewer and water- a great investment opportunity!
            </p>
          </div>
        </div>
      </div>
    </div>

    <hr>

    <!--Contact Us-->
    <div class="pad-section" id="contact">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2>Contact Us</h2>
            <p>
              Interested? Ask us a question, set up a showing, or just say hi with the form below.
              Or, send a message to <a href="mailto://info@flmnland.com">info@flmnland.com</a>.
            </p>
            <!--Submit success alert-->
            <div id="form_alert" class="alert alert-success alert-dismissable fade in" style="display: none;">
              <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">&times;</a>
              <strong>Success!</strong> Your message has been sent.
            </div>
            <form action="/contact_us.php" method="POST" id="contact_form">
              <div class="form-group">
                <label for="nameInput">Name</label>
                <input name="name" type="text" class="form-control" id="nameInput" placeholder="Enter your name">
              </div>
              <div class="form-group">
                <label for="emailInput">Email</label>
                <input name="email" type="email" class="form-control" id="emailInput" placeholder="example@example.com">
              </div>
              <div class="form-group">
                <label for="messageInput">Message</label>
                <textarea class="form-control" placeholder="Write your message to us here." name="message"></textarea>
              </div>
              <input type="submit" id="submit_button" value="Send">
            </form>
          </div>
        </div>
      </div>
    </div>

    <!--Footer-->
    <footer class="container-fluid">
      <p>Designed by Alex Biedny. August 2018.</p>
    </footer>
  </div>
</body>
</html>
