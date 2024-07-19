<?php
require_once 'dbconnection.inc.php';
session_start();

if (!isset($_SESSION['adminname'])) {
    header("Location: index.html");
}else{
  $filter = $_SESSION['adminname'];
  $query=mysqli_query($conn,"SELECT * FROM `users` WHERE `User_ID`='$filter'")or die(mysqli_error());
  $row=mysqli_fetch_array($query);
}
?>

<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Wema App - Administrators Homepage</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- nice select -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
  <!-- datepicker -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>
        <style type="text/css">
        
          table{
    align-items: center;
  }

   th, tr, td{
    padding: 10px 10px;
  }
    </style>

            <script type="text/javascript">
function printData()
{
   var divToPrint=document.getElementById("printTable");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})  
</script>
            <script type="text/javascript">
function printData1()
{
   var divToPrint=document.getElementById("printTable1");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})  
</script>
            <script type="text/javascript">
function printData2()
{
   var divToPrint=document.getElementById("printTable2");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})  
</script>
<body>

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="header_top">
        <div class="container">
          <div class="contact_nav">
            <a href="">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                Call : +254 741 439368
              </span>
            </a>
            <a href="">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>
                Email : elvis@gmail.com
              </span>
            </a>
            <a href="">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span>
                Location : Nairobi, KENYA.
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="index.php">
              <img src="images/wema_app.png" alt="">
            </a>


            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <div class="d-flex mr-auto flex-column flex-lg-row align-items-center">
                <ul class="navbar-nav  ">
                  <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#about"> About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact Us</a>
                  </li>
                </ul>
              </div>
              <div class="quote_btn-container">
                <a href="logout.php">
                  <i class="fa fa-exit" aria-hidden="true"></i>
                  <span>
                    Logout
                  </span>
                </a>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section ">
      <div class="dot_design">
        <img src="images/dots.png" alt="">
      </div>
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                      Wema <br>
                      <span>
                        App
                      </span>
                    </h1>
                    <p>
                      Welcome <?php echo $row['User_Type']; ?>, <?php echo $row['Fullname']; ?>!
                    </p>
                    <a href="#contact">
                      Contact Us
                    </a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/slider2.jpeg" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                      Wema <br>
                      <span>
                        App
                      </span>
                    </h1>
                    <p>
                      Welcome <?php echo $row['User_Type']; ?>, <?php echo $row['Fullname']; ?>!
                    </p>
                    <a href="#contact">
                      Contact Us
                    </a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/slider2.jpeg" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                      Wema <br>
                      <span>
                        App
                      </span>
                    </h1>
                    <p>
                      Welcome <?php echo $row['User_Type']; ?>, <?php echo $row['Fullname']; ?>!
                    </p>
                    <a href="#contact">
                      Contact Us
                    </a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/slider1.jpeg" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel_btn-box">
          <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
            <img src="images/prev.png" alt="">
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
            <img src="images/next.png" alt="">
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>

    </section>
    <!-- end slider section -->
  </div>


  <!-- about section -->

  <section id="about" class="about_section">
    <div class="container  ">
      <div class="row">
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="images/about.jpeg" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                About <span>Us</span>
              </h2>
            </div>
            <p>
              Our system aims to enhance the safety and security of women in potentially dangerous situations. The ultimate aim is to empower women to feel capable of taking care of themselves in potentially dangerous situations and provide them with a sense of security in their daily lives. This web-based app may provide a community where women can share their experiences, stories, and advice on safety, which can provide comfort and support. 
            </p>
            <a href="register">
              Get Started
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->


  <!-- treatment section -->

  <section id="data" class="treatment_section layout_padding">
    <div class="side_img">
      <img src="images/treatment-side-img.jpg" alt="">
    </div>
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          The <span>Database</span>
        </h2>
      </div>
      <div class="row">
        <div class="col-md-12 col-lg-12">
          <div class="box ">
            <div class="detail-box">
              <h4>
                Users
              </h4>
                                      <table id="printTable">
<tr style="text-align: left;
  padding: 8px;">
<th style="text-align: left;
  padding: 8px;">User ID</th>
<th style="text-align: left;
  padding: 8px;">Fullname</th>
  <th style="text-align: left;
  padding: 8px;">Email Address</th>
 <th style="text-align: left;
  padding: 8px;">Phone Number</th>
  <th style="text-align: left;
  padding: 8px;">User Type</th>
   <th style="text-align: left; padding: 8px;"></th>
</tr>

<?php
$conn = mysqli_connect("localhost", "root", "", "wema_app");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT `User_ID`, `Fullname`, `Phone_Number`, `Email_Address`, `User_Type` FROM `users`";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
?>
<tr>
<td><?php echo($row["User_ID"]); ?></td>
<td><?php echo($row["Fullname"]); ?></td>
<td><?php echo($row["Email_Address"]); ?></td>
<td><?php echo($row["Phone_Number"]); ?></td>
<td><?php echo($row["User_Type"]); ?></td>
<td><button class="btn btn-primary py-3 px-5" onclick="return confirm('Are you sure that you want to delete this user?')?window.location.href='insertion.inc.php?action=deleteU&id=<?php echo($row["User_ID"]); ?>':true;" title='Delete User'>Delete</button></td>
</tr>
<?php
}
} else { echo "No results"; }
$conn->close();
?>

</table>
              <a href="" onclick="printData();">
                Print
              </a>
            </div>
          </div>
        </div>
      </div>
            <div class="row">
        <div class="col-md-12 col-lg-12">
          <div class="box ">
            <div class="detail-box">
              <h4>
                Assistance Requests
              </h4>
                                      <table id="printTable1">
<tr style="text-align: left;
  padding: 8px;">
<th style="text-align: left;
  padding: 8px;">Request ID</th>
<th style="text-align: left;
  padding: 8px;">User ID</th>
  <th style="text-align: left;
  padding: 8px;">Emergency Type</th>
  <th style="text-align: left;
  padding: 8px;">Report </th>
 <th style="text-align: left;
  padding: 8px;">Safety Preferences</th>
  <th style="text-align: left;
  padding: 8px;">Location </th>
 <th style="text-align: left;
  padding: 8px;">Status</th>
  <th style="text-align: left;
  padding: 8px;">Created At </th>
   <th style="text-align: left; padding: 8px;"></th>
</tr>

<?php
$conn = mysqli_connect("localhost", "root", "", "wema_app");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT `Assistance_ID`, `User_ID`, `Emergency_Type`, `Report`, `Safety_Preferences`, `Long`, `Lat`, `Status`, `Created_At` FROM `assistance`";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
?>
<tr>
<td><?php echo($row["Assistance_ID"]); ?></td>
<td><?php echo($row["User_ID"]); ?></td>
<td><?php echo($row["Emergency_Type"]); ?></td>
<td><?php echo($row["Report"]); ?></td>
<td><?php echo($row["Safety_Preferences"]); ?></td>
<td><iframe src="https://maps.google.com/maps?q=<?php echo ($row['Lat']); ?>,  <?php echo ($row['Long']); ?>&z=15&output=embed" width="150" height="75" frameborder="0" style="border:0"></iframe></td>
<td><?php echo($row["Status"]); ?></td>
<td><?php echo($row["Created_At"]); ?></td>
<td><button class="btn btn-primary py-3 px-5" onclick="return confirm('Are you sure that you want to cancel this request?')?window.location.href='insertion.inc.php?action=cancelA&id=<?php echo($row["Assistance_ID"]); ?>':true;" title='Cancel Request'>Cancel</button></td>
<td><button class="btn btn-primary py-3 px-5" onclick="return confirm('Are you sure that you want to complete this request?')?window.location.href='insertion.inc.php?action=completeA&id=<?php echo($row["Assistance_ID"]); ?>':true;" title='Complete Request'>Complete</button></td>
</tr>
<?php
}
} else { echo "No results"; }
$conn->close();
?>

</table>
              <a href="" onclick="printData1();">
                Print
              </a>
            </div>
          </div>
        </div>
      </div>
            <div class="row">
        <div class="col-md-12 col-lg-12">
          <div class="box ">
            <div class="detail-box">
              <h4>
                Feedback
              </h4>
                                      <table id="printTable2">
<tr style="text-align: left;
  padding: 8px;">
<th style="text-align: left;
  padding: 8px;">Feedback ID</th>
<th style="text-align: left;
  padding: 8px;">User ID</th>
  <th style="text-align: left;
  padding: 8px;">Assistance ID</th>
 <th style="text-align: left;
  padding: 8px;">Content</th>
  <th style="text-align: left;
  padding: 8px;">Created At</th>
   <th style="text-align: left; padding: 8px;"></th>
</tr>

<?php
$conn = mysqli_connect("localhost", "root", "", "wema_app");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT `Feedback_ID`, `User_ID`, `Assistance_ID`, `Content`, `Created_At` FROM `feedback`";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
?>
<tr>
<td><?php echo($row["Feedback_ID"]); ?></td>
<td><?php echo($row["User_ID"]); ?></td>
<td><?php echo($row["Assistance_ID"]); ?></td>
<td><?php echo($row["Content"]); ?></td>
<td><?php echo($row["Created_At"]); ?></td>
</tr>
<?php
}
} else { echo "No results"; }
$conn->close();
?>

</table>
              <a href="" onclick="printData2();">
                Print
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end treatment section -->

  <!-- contact section -->
  <section id="module" class="contact_section layout_padding-bottom">
      <div class="container">
      <div class="heading_container">
        <h2>
          Update My Details
        </h2>
      </div>
      <div class="row">

        <div class="col-md-5">
          <div class="img-box">
            <img src="images/end.jpeg" alt="">
          </div>
        </div>
                <div class="col-md-7">
          <div class="form_container">
            <form action="insertion.inc.php" method="POST">
              <div>
                <input type="text" required name="fname" placeholder="Full Name" />
                <input type="hidden" value="1" name="mod" required>
                <input type="hidden" value="<?php echo $filter; ?>" name="uid" required>
              </div>
              <div>
                <input type="email" required name="email" placeholder="Email" />
              </div>
              <div>
                <input type="text" name="phone" required placeholder="Phone Number" />
              </div>
              <div>
                <input type="password" required name="password" placeholder="Password" />
              </div>
              <div>
                <input type="password" name="cpassword" required placeholder="Confirm Password" />
              </div>              
              <div class="btn_box">
                <button type="submit" name="upu">
                  UPDATE
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->

  <!-- info section -->
  <section id="contact" class="info_section ">
    <div class="container">
      <div class="info_top">
        <div class="info_logo">
          <a href="">
            <img src="images/wema_app.png" alt="">
          </a>
        </div>
      </div>
      <div class="info_bottom layout_padding2">
        <div class="row info_main_row">
          <div class="col-md-6 col-lg-6">
            <h5>
              CONTACT US
            </h5>
            <div class="info_contact">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location : Nairobi, Kenya.
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call : +254 741 439368
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope"></i>
                <span>
                  Email Address : elvis@gmail.com
                </span>
              </a>
            </div>
            <div class="social_box">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            </div>
          </div>
          <div class="col-md-6 col-lg-6">
            <div class="info_links">
              <h5>
                Useful link
              </h5>
              <div class="info_links_menu">
                <a class="active" href="index.php">
                  Home
                </a>
                <a href="#about">
                  About Us
                </a>
                <a href="#contact">
                  Contact us
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end info_section -->


  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved.
      </p>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js" integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <!-- datepicker -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>


</body>

</html>