<?php  

if(isset($_POST['sent'])) {
    $con = mysql_connect("localhost","root","");
    if (!$con)
      {
      die('Could not connect: ' . mysql_error());
      }
    mysql_select_db("ordering", $con);

  

      $sql="insert into message(messageID, date_posted, name, email, contactNo, subject, messages, message_stats)
      values(NULL, now(), '$_POST[name]', '$_POST[email2]', '$_POST[contact2]', '$_POST[subject]', '$_POST[message]', 'UNREAD')";
        

    if (!mysql_query($sql,$con)) // if may problema sa sql syntax lalabas another error
      {
      die('Error: ' . mysql_error());
      }
     
     if(!empty($sql)){
        echo"<script lang=text/javascript>
          alert('Message Sent successfully');

          window.location.href='contactus.php';
        </script>";
     }
    




    mysql_close($con); 
  }



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>CONTACT US</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


    <!-- Bootstrap Core CSS -->
    <link href="./vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="./vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="./dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="./vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }

  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  .hey{
    color: white;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none;
    }

    .modal{
      background-color: red;
    }

  
  }
  </style>
</head>
<body>

  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 10px;
      border-radius: 0;
      background-color: #FF0000; 
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
   
   #map {
        height: 400px;
        width: 100%;
         background-color: 51;

       }

    /* Add a gray background color and some padding to the footer */
    footer {
      margin-top: 15px;
      background-color: #FF0000;
      padding: 25px;
    }

  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none;
    }

    .modal{
      background-color: red;
    }
  }

  p{
    color: white;
  }

  li.ac{
     background-color: #FF0033;  
   }


  body{
    background-image: url(image/bg.jpg);

  }
  </style>
</head>
<body>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
 
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="home.php"> <font color="white">C.A DIMSUMS' BEST</font></a>
    </div>

    <div class="collapse navbar-collapse" id="myNavbar">

      <ul class="nav navbar-nav">
        <li><a href="home.php"> <font color="white">Home</font></a></li>
        <li><a href="product.php"> <font color="white">Products</font></a></li>
        <li><a href="aboutus.php"> <font color="white">About Us</font></a></li>
        <li class="ac"><a href="contactus.php"> <font color="white">Contact Us</font></a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a data-toggle="modal" data-target="#myModal"><font color="white"><span class="glyphicon glyphicon-log-in"></span> LOGIN </font></a>
                            <!-- Button trigger modal -->
                           
             <form role="form" action="login.php" method="post">
                            <!-- Modal -->
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                         
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header btn-danger">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"><center><img src="image/banner.jpg" height="100%" width="100%"></center></h4>
                                        </div>
                                        <div class="modal-body">
                                            
                                                  <fieldset>
                                                      <div class="form-group">
                                                          <input class="form-control" placeholder="Username" name="user" id="user" type="text" autofocus required="">
                                                      </div>
                                                      <div class="form-group">
                                                          <input class="form-control" placeholder="Password" name="pass" id="pass" type="password" value="" required="">
                                                      </div>
                                                      <p align=right><u>Forget Password</u></p>
                                                   
                                                  
                                                  </fieldset>

                                                 
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" name="submit" id="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Submit</button>


                                        </div>

                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
               
                    </form>

        <li><a data-toggle="modal" data-target="#myModal2"><font color="white"><span class="glyphicon glyphicon-pencil"></span>  REGISTER </font></a>
                            <!-- Button trigger modal -->
                           
             <form role="form" action="register.php" method="post">
                            <!-- Modal -->
                            <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                         
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header btn-danger">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel2"><center>REGISTRATION FORM</center></h4>
                                        </div>
                                        <div class="modal-body">


                                          
                                            
                                            <fieldset>
                                                <div class="form-group">

                                                  <div class="col-sm-6">
                                                    <label>LAST NAME</label>
                                                    <input class="form-control" placeholder="Last Name" name="lname" id="lname" type="text" autofocus required="" style="text-transform: uppercase">
                                                  </div>
                                                  <div class="col-sm-6">
                                                    <label>FIRST NAME</label>
                                                    <input class="form-control" placeholder="First Name" name="fname" id="fname" type="text" autofocus required="" style="text-transform: uppercase">
                                                    </div>

                                                </div>

                                                <div class="form-group">

                                                    <div class="col-sm-4">
                                                       <br> <label>GENDER</label><br>
                                                        <select class="form-control" name="gender">
                                                          <option value="FEMALE">FEMALE</option>
                                                          <option value="MALE">MALE</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-sm-4">
                                                        <br><label>CIVIL STATUS: &nbsp;</label>
                                                        <select class="form-control" name="civilstatus">
                                                          <option value="SINGLE">SINGLE</option>
                                                          <option value="MARRIED">MARRIED</option>
                                                          <option value="WIDOWED">WIDOWED</option>
                                                          <option value="SEPARATED">SEPARATED</option>
                                                        </select>
                                                    </div>

                                                  <div class="col-sm-4">
                                                      <br><label>BIRTHDAY:</label><input class="form-control" placeholder="YYYY-MM-DD" name="birth" id="birth" type="date" required="">
                                                  </div>

                                                </div>

                                              
                                               
                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                    <br><label>ADDRESS</label>
                                                    <input class="form-control" name="address" placeholder="House no. / Street / Subdivision / Barangay" id="address" type="text" required="" style="text-transform: uppercase">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-sm-4">
                                                    <br><label>CITY</label>
                                                    <input class="form-control" name="city" placeholder="City" id="city" type="text" required="" style="text-transform: uppercase">
                                                    </div>

                                                    <div class="col-sm-4">
                                                    <br><label>CONTACT NO.</label>
                                                    <input class="form-control" name="contact" placeholder="eg. 926123567" id="contact" type="tel" required="" maxlength="10">
                                                    </div>

                                                    <div class="col-sm-4">
                                                    <br><label>EMAIL ADDRESS</label>
                                                    <input class="form-control" name="email" placeholder="eg. dimsum@gmail.com" id="email" type="email" required="">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-sm-6">
                                                    <br><label>USERNAME</label>
                                                    <input class="form-control" name="uname" placeholder="USERNAME" id="uname" type="text" required="">
                                                    </div>

                                                    <div class="col-sm-6">
                                                    <br><label>PASSWORD</label>
                                                    <input class="form-control" name="pword" placeholder="PASSWORD" id="pword" type="password" required="" maxlength="20">
                                                    </div>

                                                </div>
                                            </fieldset>

                            
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" name="submit" id="submit" class="btn btn-danger"  data-target="#myModal2">Submit</button>
                                        </div>

                                        
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal --></li>


                
                        </form>
      </ul>
    </div>
  </div>
</nav>


<div class="container-fluid">
<div class="container">

 <div class="row content">

 <div class="col-sm-6">
      <font color="white"><center> <h3>C.A Fruitful Vineyard Enterprise Location</h3>
      858 Tolentino St. Gatchalian Sby, 1774, City of Las Pinas, Philippines.</center></font>

    <div id="map"></div>
    <script>
      function initMap() {
        var uluru = {lat: 14.4517585, lng: 120.9929324};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 17,
          center: uluru

        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDXKv4fQEY6VieEeA_GtnCBsulk-pNan1U&callback=initMap">
    </script>
 </div><br>

        <div class="col-sm-6">
                <div class="panel panel-danger">
                    <div class="panel-heading text-center">
                        <h2>CONTACT FORM</h2>
                        <small class="mbr-section-subtitle">Free to contact us! Happy to Serve!</small>
                    </div>

                    <div class="panel-body">
                        <form action="contactus.php" method="post" data-form-title="CONTACT FORM">

                                <input type="hidden" value="" data-form-email="true">

                                <div class="row row-sm-offset">

                                    <div class="col-xs-12 col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="form1-s-name">Name<span class="form-asterisk">*</span></label>
                                            
                                            <input type="text" class="form-control" name="name" required="" data-form-field="Name" id="form1-s-name" style="text-transform: uppercase">
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="form1-s-email">Email<span class="form-asterisk">*</span></label>
                                            <input type="email" class="form-control" name="email2" required="" data-form-field="Email" id="form1-s-email">
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="form1-s-phone">Phone<span class="form-asterisk">*</span></label>
                                            <input type="tel" class="form-control" name="contact2" data-form-field="Phone" id="form1-s-phone" placeholder="eg. 926123567" maxlength="10">
                                        </div>
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label class="form-control-label" for="form1-s-subject"><span class="form-asterisk">Subject: </span></label>
                                    <input type="text" class="form-control" name="subject" data-form-field="subject" value="FRANCHISE APPLICATION" readonly><BR>

                                    <label class="form-control-label" for="form1-s-message">Message<span class="form-asterisk">*</span></label>
                                    <textarea class="form-control" name="message" rows="7" data-form-field="Message" id="form1-s-message"></textarea>
                                </div>
                                <?php if(isset($status3)):?>
                            <p><br><center><?php echo $status3?></center></p>
                         <?php endif?>
                                <div><button type="submit" name="sent" id="sent" class="btn btn-danger">CONTACT US</button></div>

                        </form>
                    </div>
                </div>
          </div>
    </div>

</div>
</div>

<footer class="container-fluid text-center">
    <div class="container">

       <div class="row">
            <div class="mbr-footer-content col-xs-12 col-md-3">
                <div><img src="image/logo.jpg" width="200px" height="200px"></div>
            </div>

<br>
            <div class="mbr-footer-content col-xs-12 col-md-3">
             <div class="table-responsive">
                <TABLE>
                  <tr>
                    <td colspan="2" class="hey" align="center"><strong>ADDRESS</strong></td>
                  </tr>
                  <tr>
                    <td class="hey" colspan="2" align="center">&nbsp;</td>
                  </tr>
                   <tr>
                    <td colspan="2" class="hey" align="center">858 Tolentino St. Gatchalian Sby</td>
                  </tr>
                   <tr>
                    <td colspan="2" class="hey" align="center">1774 City of Las Pinas, Philippines</td>
                  </tr>              
                </TABLE>
              </div>
            </div>

            <div class="mbr-footer-content col-xs-12 col-md-3">
              <div class="table-responsive">
                <table>
                  <TR>
                    <td colspan="2" class="hey" align="center"><strong>CONTACTS</strong></td>
                  </TR>
                  <tr>
                    <td class="hey" colspan="2" align="center">&nbsp;</td>
                  </tr>
                  <TR>
                    <td class="hey" align="center">Email:</td>
                    <td class="hey" align="center">&nbsp;cafruitful_vineyard@yahoo.com</td>
                  </TR>
                  <tr>
                    <td class="hey" colspan="2" align="center">&nbsp;</td>
                  </tr>
                  <TR>
                    <td class="hey" align="center">Phone:</td>
                    <td class="hey" align="center">&nbsp;<span class="glyphicon glyphicon-phone-alt"></span> (02)542-0701<br>
                        &nbsp;<span class="glyphicon glyphicon-phone-alt"></span> (02)542-0702</td>
                  </TR>
                  <tr>
                    <td class="hey" colspan="2" align="center">&nbsp;</td>
                  </tr>
                  <TR>
                    <td class="hey" align="center">Phone Number:</td>
                    <td class="hey" align="center">&nbsp;<span class="glyphicon glyphicon-earphone"></span> 0928-5502366<br>
                        &nbsp;<span class="glyphicon glyphicon-earphone"></span> 0922-8295356<br>
                        &nbsp;<span class="glyphicon glyphicon-earphone"></span> 0922-8295357
                        </td>
                  </TR>
                </table>
              </div>
            </div>

            <div class="mbr-footer-content col-xs-12 col-md-3">
              <div class="table-responsive">
                <TABLE>
                  <tr>
                    <td class="hey" colspan="2" align="center"><strong>SCHEDULE</strong><br></td>
                  </tr>
                  <tr>
                    <td class="hey" colspan="2" align="center">&nbsp;</td>
                  </tr>
                  <tr>
                    <td class="hey" align="right">DELIVERY<br>TIME <span class="glyphicon glyphicon-time"></span></td>
                    <td class="hey" align="center">&nbsp;4AM to 12NN</td>
                  </tr>
                  <tr>
                    <td class="hey" colspan="2" align="center">&nbsp;</td>
                  </tr>
                 <tr>
                    <td class="hey" align="right">STORE OPENING</td>
                    <td class="hey" align="center" colspan="2">&nbsp;6AM - 5PM<br>Monday to Wednesday and Friday</td>
                  </tr>
                  <tr>
                    <td class="hey" colspan="2" align="center">&nbsp;</td>
                  </tr>
                  <tr>
                    <td class="hey" align="right">CUT OFF OF<br>ORDERS <span class="glyphicon glyphicon-time"></span></td>
                    <td class="hey" align="center">&nbsp; 6:00PM</td>
                  </tr>
                </TABLE>
              </div>
            </div>

        </div>
        
    </div>

    <p class="hey"><strong><br>C.A. Fruitful Vineyard Enterprises Copyright</strong></p>  
</footer>







    <!-- jQuery -->
    <script src="./vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="./vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="./vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="./dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Notifications - Use for reference -->
    <script>
    // tooltip demo
    $('.tooltip-demo').tooltip({
        selector: "[data-toggle=tooltip]",
        container: "body"
    })
    // popover demo
    $("[data-toggle=popover]")
        .popover()
    </script>
</body>
</html>
