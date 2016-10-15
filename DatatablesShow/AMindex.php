<?php
  session_start();
?><html>
<head>
<title>AM Database</title>
        <link rel="stylesheet" type="text/css" href="phpstyle.css">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.css">
    <link href="//cdn.datatables.net/1.10.5/css/jquery.dataTables.css" type="text/css" rel="stylesheet">


    <!-- jQuery -->
    <script src="//code.jquery.com/jquery-1.11.1.min.js" language="javascript" type="text/javascript"></script>

    <!-- DataTables -->
    <script src="//cdn.datatables.net/1.10.5/js/jquery.dataTables.min.js" language="javascript" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function() {
        $('#example').DataTable( {
        "aaSorting": [],
        bPaginate: true,
        bFilter: true,
        bInfo: false,
        bSortable: true,
        "processing": true,
        "serverSide": false,
        "ajax": "tableAM.php"
        } 
        );
    } );
        
    </script>
    <style>
    .table{
        padding-left: 3%;
        padding-right: 3%;
    }
    </style>
    </head>
    <div id="wrapper" class="toggled">
        
        <!-- Sidebar -->
              <!-- Sidebar -->
        <div id="sidebar-wrapper">
        <ul id="sidebar_menu" class="sidebar-nav">
             <li class="sidebar-brand"><!-- <a id="menu-toggle"><span id="main_icon" class="glyphicon glyphicon-align-justify visible-xs"></span></a> --></li>
        </ul>
        <div class="logo">
          <center>
          <a href="#">
            <img src="../images/logo.png"></img>
          </a>
          </center>
        </div>
        <nav class="side-nav" id="cssmenu">
          <ul>
            <li><a href="../start.php" class="link-active none">HOME</a></li>
            <li class="has-sub active"><a class="none dropdown-button" data-toggle="collapse" href="#dropdown-menu" >DATABASE <i class="fa fa-sort-desc fa-1 marginD" aria-hidden="true"></i></a>
              <ul id="dropdown-menu" class="collapse divider submenu dropdown-font warna-font-logo custom1">
                <li><a class="none" href="BOMindex.php" style="padding-left:40px;">Board Member</a></li>
                <li><a class="none" href="AMindex.php" style="padding-left:40px;">Active Member</a></li>
                <li><a class="none" href="CompanyIndex.php" style="padding-left:40px;">Company</a></li>
              </ul>
            </li>
            <li><a href="#" class="none">NEWS</a></li>
            <li><a href="../reserve.php" class="none">RESERVATION</a></li>
            <li><a href="../logout.php" class="none">LOG OUT</a></li>
          </ul>
        </nav>
        </div>
            
        <!-- Page content -->
        <div id="page-content-wrapper">
          <!-- Keep all page content within the page-content inset div! -->
          <div class="page-content inset">
            <div class="row">
              <!--User profile and Sign Out Account-->
              <nav class="visible-xs">
                <a href="#" class="btn btn-default" id="menu-toggle"><span id="main_icon" class="glyphicon glyphicon-align-justify fa-2x"></span></a>
                </nav>
              <!--User Full Name-->
              <div class="greets col-md-12" id="">
                <h3 class="edit">Hello, <b><?php echo($_SESSION['name'])?></b></h3>
              </div>
                <div class="upcoming col-md-12">
                   <div class="table">
                        <table id="example" class="display" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                            <th>NIM</th>
                            <th>Name</th>
                            <th>Phone Number</th>
                            <th>Major</th>
                                </tr>
                            </thead>
                        </table>
                  </div>
              </div>
            </div>
          </div>
          <div class="col-xs-12" id="footerText" style="padding-top: 50px;">
          <center>
            <p><i class="fa fa-home" style="margin-right:8px;"></i>Jl.U D/10, Kemanggisan,Jakarta Barat</p>        
            <p class=" copyright">&copy;2016 BINUS ENGLISH CLUB</p>
          </center>
          </div>
        </div>
        <div id="scrollTop">
          <i class="fa fa-angle-double-up fa-2x arr-up"></i>
        </div> 
      </div>

  <script>
  $('#cssmenu > ul > li > a').click(function() {
    $('#cssmenu li').removeClass('active');
    $(this).closest('li').addClass('active'); 
    var checkElement = $(this).next();
    if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
      $(this).closest('li').removeClass('active');
      checkElement.slideUp('normal');
    }
    if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
      $('#cssmenu ul ul:visible').slideUp('normal');
      checkElement.slideDown('normal');
    }
    if($(this).closest('li').find('ul').children().length == 0) {
      return true;
    } else {
      return false; 
    }   
  });
  // $("#menu-toggle").click(function(e) {
  //       e.preventDefault();
  //       $("#wrapper").toggleClass("active");
  // });
  $('#scrollTop').click(function(){
      window.scrollTo(0,0);
       
  });
  $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
  });
  </script>  

    
</body>
</html>