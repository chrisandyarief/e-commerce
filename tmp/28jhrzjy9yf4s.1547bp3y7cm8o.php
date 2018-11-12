<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Dashboard</title>

    <!-- Bootstrap Core CSS -->
    <link href="ui/vendor/admin/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="ui/vendor/admin/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="ui/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="ui/vendor/admin/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="ui/vendor/admin/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="pages/admin/adminhome.html">Admin</a>
            </div>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="payment.html"><i class="fa fa-money fa-fw"></i> Payment</a>
                        </li>
                        <li>
                            <a href="user.html"><i class="fa fa-users fa-fw"></i> User</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Input Product</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
              <div class="col-md-8">
          <div class="well well-sm">
              <form>
              <div class="row">
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name">
                              Product Name</label>
                          <input type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
                      </div>

                      <div class="form-group">
                          <label for="quantity">
                              Quantity</label>
                          <input type="number" class="form-control" id="quantity" placeholder="Enter Quantity" required="required" />
                      </div>

                      <div class="form-group">
                          <label for="filename">
                              Filename</label>
                              <input type="text" class="form-control" id="filename" placeholder="Enter filename" required="required" />
                      </div>

                      <div class="form-group">
                          <label for="price">
                              Price</label>
                          <input type="number" class="form-control" id="price" placeholder="Enter Price" required="required" />
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="desc">
                              Description</label>
                          <textarea name="message" id="desc" class="form-control" rows="9" cols="25" required="required"
                              placeholder="Enter Description"></textarea>
                      </div>
                  </div>
                  <div class="col-md-12">
                      <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                          Enter Product</button>
                  </div>
              </div>
              </form>
          </div>
      </div>
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="ui/vendor/admin/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="ui/vendor/admin/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="ui/vendor/admin/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="ui/vendor/admin/raphael/raphael.min.js"></script>
    <script src="ui/vendor/admin/morrisjs/morris.min.js"></script>
    <script src="ui/data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../js/sb-admin-2.js"></script>

</body>

</html>
