
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Final Project for COMP5120 Databases at Auburn University.">
    <meta name="author" content="Jacob Varner">

    <title>Jacob Varner - Final Project</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <?php
      $servername = "acadmysql.duc.auburn.edu";
      $username = "jsv0004";
      $password = "comp5120";
      $dbname = "jsv0004db";

      // Create connection
      $server = mysql_connect($servername, $username, $password);
      $db = mysql_select_db($dbname, $server);

      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }
    ?>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">COMP 5120 Final Project</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h1>COMP 5120 Final Project <small>Jacob Varner</small></h1>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <ul class="nav nav-tabs">
            <li role="presentation" class="active"><a href="#book" data-toggle="tab">Book</a></li>
            <li role="presentation"><a href="#customer" data-toggle="tab">Customer</a></li>
            <li role="presentation"><a href="#employee" data-toggle="tab">Employee</a></li>
            <li role="presentation"><a href="#order" data-toggle="tab">Order</a></li>
            <li role="presentation"><a href="#order-detail" data-toggle="tab">Order Detail</a></li>
            <li role="presentation"><a href="#shipper" data-toggle="tab">Shipper</a></li>
            <li role="presentation"><a href="#subject" data-toggle="tab">Subject</a></li>
            <li role="presentation"><a href="#supplier" data-toggle="tab">Supplier</a></li>
          </ul>
          <!-- Tab panes -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="book">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>BookID</th>
                    <th>Title</th>
                    <th>UnitPrice</th>
                    <th>Author</th>
                    <th>Quantity</th>
                    <th>SupplierID</th>
                    <th>SubjectID</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $query = mysql_query("SELECT * FROM book");
                    while ($row = mysql_fetch_array($query)) {?>
                      <tr>
                        <td><?php echo $row['BookID'];?></td>
                        <td><?php echo $row['Title'];?></td>
                        <td><?php echo $row['UnitPrice'];?></td>
                        <td><?php echo $row['Author'];?></td>
                        <td><?php echo $row['Quantity'];?></td>
                        <td><?php echo $row['SupplierID'];?></td>
                        <td><?php echo $row['SubjectID'];?></td>
                      </tr>
                  <?php  } ?>
                </tbody>
              </table>
            </div>
            <div role="tabpanel" class="tab-pane" id="customer">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>CustomerID</th>
                    <th>LastName</th>
                    <th>FirstName</th>
                    <th>Phone</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $query = mysql_query("SELECT * FROM customer");
                    while ($row = mysql_fetch_array($query)) {?>
                      <tr>
                        <td><?php echo $row['CustomerID'];?></td>
                        <td><?php echo $row['LastName'];?></td>
                        <td><?php echo $row['FirstName'];?></td>
                        <td><?php echo $row['Phone'];?></td>
                      </tr>
                  <?php  } ?>
                </tbody>
              </table>
            </div>
            <div role="tabpanel" class="tab-pane" id="employee">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>EmployeeID</th>
                    <th>LastName</th>
                    <th>FirstName</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $query = mysql_query("SELECT * FROM employee");
                    while ($row = mysql_fetch_array($query)) {?>
                      <tr>
                        <td><?php echo $row['EmployeeID'];?></td>
                        <td><?php echo $row['LastName'];?></td>
                        <td><?php echo $row['FirstName'];?></td>
                      </tr>
                  <?php  } ?>
                </tbody>
              </table>
            </div>
            <div role="tabpanel" class="tab-pane" id="order">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>OrderID</th>
                    <th>CustomerID</th>
                    <th>EmployeeID</th>
                    <th>OrderDate</th>
                    <th>ShippedDate</th>
                    <th>ShipperID</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $query = mysql_query("SELECT * FROM order_");
                    while ($row = mysql_fetch_array($query)) {?>
                      <tr>
                        <td><?php echo $row['OrderID'];?></td>
                        <td><?php echo $row['CustomerID'];?></td>
                        <td><?php echo $row['EmployeeID'];?></td>
                        <td><?php echo $row['OrderDate'];?></td>
                        <td><?php echo $row['ShippedDate'];?></td>
                        <td><?php echo $row['ShipperID'];?></td>
                      </tr>
                  <?php  } ?>
                </tbody>
              </table>
            </div>
            <div role="tabpanel" class="tab-pane" id="order-detail">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>BookID</th>
                    <th>OrderID</th>
                    <th>Quantity</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $query = mysql_query("SELECT * FROM order_detail");
                    while ($row = mysql_fetch_array($query)) {?>
                      <tr>
                        <td><?php echo $row['BookID'];?></td>
                        <td><?php echo $row['OrderID'];?></td>
                        <td><?php echo $row['Quantity'];?></td>
                      </tr>
                  <?php  } ?>
                </tbody>
              </table>
            </div>
            <div role="tabpanel" class="tab-pane" id="shipper">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>ShipperID</th>
                    <th>ShipperName</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $query = mysql_query("SELECT * FROM shipper");
                    while ($row = mysql_fetch_array($query)) {?>
                      <tr>
                        <td><?php echo $row['ShipperID'];?></td>
                        <td><?php echo $row['ShipperName'];?></td>
                      </tr>
                  <?php  } ?>
                </tbody>
              </table>
            </div>
            <div role="tabpanel" class="tab-pane" id="subject">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>SubjectID</th>
                    <th>CategoryName</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $query = mysql_query("SELECT * FROM subject");
                    while ($row = mysql_fetch_array($query)) {?>
                      <tr>
                        <td><?php echo $row['SubjectID'];?></td>
                        <td><?php echo $row['CategoryName'];?></td>
                      </tr>
                  <?php  } ?>
                </tbody>
              </table>
            </div>
            <div role="tabpanel" class="tab-pane" id="supplier">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>SupplierID</th>
                    <th>CompanyName</th>
                    <th>ContactLastName</th>
                    <th>ContactFirstName</th>
                    <th>Phone</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $query = mysql_query("SELECT * FROM supplier");
                    while ($row = mysql_fetch_array($query)) {?>
                      <tr>
                        <td><?php echo $row['SupplierID'];?></td>
                        <td><?php echo $row['CompanyName'];?></td>
                        <td><?php echo $row['ContactLastName'];?></td>
                        <td><?php echo $row['ContactFirstName'];?></td>
                        <td><?php echo $row['Phone'];?></td>
                      </tr>
                  <?php  } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12">
          <form id="query-form" role="form" method="post" action="query.php">
            <h3>SQL Query Entry</h3>
            <textarea name="query" class="form-control" rows="10"></textarea>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12">
          <div id="result">
            
          </div>
        </div>
      </div>
    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
