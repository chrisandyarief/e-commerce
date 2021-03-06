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
    <!-- Include one of jTable styles. -->
    <link href="ui/js/themes/metro/blue/jtable.min.css" rel="stylesheet" type="text/css" />
    <link href="ui/vendor/admin/jqueryui/jquery-ui.min.css" rel="stylesheet" type="text/css" />




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
                <a class="navbar-brand" href="/adminhome">Admin</a>
            </div>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="/adminhome"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="/adminpayment"><i class="fa fa-money fa-fw"></i> Payment</a>
                        </li>
                        <li>
                            <a href="/adminUser"><i class="fa fa-users fa-fw"></i> User</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div id="PersonTableContainer"></div>
        </div>
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Include jTable script file. -->
    <script src="ui/vendor/admin/jquery/jquery.min.js"></script>
    <script src="ui/vendor/admin/jqueryui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="ui/js/jquery.jtable.min.js" type="text/javascript"></script>
    <script type="text/javascript">
    $(document).ready(function () {
        $('#PersonTableContainer').jtable({
            title: 'Table of people',
            actions: {
                listAction: '/e-commerce/listTransaction',
                updateAction: '/e-commerce/updateTransaction'
            },
            fields: {
                id : {
                    title : 'Id',
                    width : '10%'
                },
                id_barang: {
                    title: 'Id Barang',
                    width: '10%'
                },
                total: {
                    title: 'Total',
                    width: '20%'
                },
                amount: {
                    title: 'Amount',
                    width: '20%'
                },
                status: {
                    title: 'Status',
                    width: '20%'
                },
                time: {
                    title: 'time',
                    width: '20%',
                    type: 'date'
                },
                buyer_id: {
                    title: 'Buyer Id',
                    width: '20%'
                }
            }
        });
        $('#PersonTableContainer').jtable('load');
    });
    </script>
    <!-- jQuery -->



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
