

<!DOCTYPE html>
<html lang="en">
<head>
  <title>PRODUCTS</title>
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
      margin-bottom: 10px;
      border-radius: 0;
      background-color: #FF0000; 
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
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

  .hey{
    color:white;
  }

  li.ac{
     background-color: #FF0033;  
   }
  </style>
</head>
<body background="image/bg.jpg">


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
        <li class="ac"><a href="product.php"> <font color="white">Products</font></a></li>
        <li><a href="aboutus.php"> <font color="white">About Us</font></a></li>
        <li><a href="contactus.php"> <font color="white">Contact Us</font></a></li>
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
                                                    <input class="form-control" name="contact" placeholder="eg. 926123567" id="contact" type="NUMBER" required="" maxlength="10">
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


<?php
include_once('conn.php');

$result2=MySql_query("Select * from products");

?>
    <div class="container-fluid text-center">
      <div class="row content">

      <?php
          while($row = mysql_fetch_array($result2)){

                $prodcode = $row['product_code'];
                $prodname = $row['product_name'];
                $images = $row['image'];
                $types = $row['type'];
                
                $price = $row['price'];
      ?>
          <div class="col-sm-3"> <br>
            <div class="panel panel-danger">
              <div class="panel-heading"><?php echo $prodname ?></div>
              <div class="panel-body"><center><img src="<?php echo $images ?>" class="img-responsive" style="width:250px; height:150px" alt="Image"></center></div>
              <div class="panel-footer"><b>Price: <?php echo $price ?></b></div>
            </div>
          </div>

    <?php }  ?>

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
