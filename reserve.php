<?php 
    session_start();
?>
<html>
<head>
<title>Reservation Page </title>
<link rel="stylesheet" type="text/css" href="phpstyle.css">
<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">
    <link href="//cdn.datatables.net/1.10.5/css/jquery.dataTables.css" type="text/css" rel="stylesheet">
    <script src="jquery.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
      <!-- For DatePicker -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>

    <!-- DataTables -->
    <script src="//cdn.datatables.net/1.10.5/js/jquery.dataTables.min.js" language="javascript" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable( {
        bPaginate: false,
        bFilter: false,
        bInfo: false,
        bSortable: true,
        "processing": true,
        "serverSide": false,
        "ajax": "todayServerSide.php"
        } 
        );
    } );
        
    </script>


</head>
<body>
  <body>
  <div id="wrapper" class="toggled">
        
        <!-- Sidebar -->
              <!-- Sidebar -->
        <div id="sidebar-wrapper">
        <ul id="sidebar_menu" class="sidebar-nav">
             <li class="sidebar-brand"><!-- <a id="menu-toggle"><span id="main_icon" class="glyphicon glyphicon-align-justify visible-xs"></span></a> --></li>
        </ul>
        <div class="logo">
          <center>
          <a href="start.php">
            <img src="images/logo.png"></img>
          </a>
          </center>
        </div>
        <nav class="side-nav" id="cssmenu">
          <ul>
            <li><a href="start.php" class="link-active none">HOME</a></li>
            <li class="has-sub active"><a class="none dropdown-button" data-toggle="collapse" href="#dropdown-menu" >DATABASE <i class="fa fa-sort-desc fa-1 marginD" aria-hidden="true"></i></a>
              <ul id="dropdown-menu" class="collapse divider submenu dropdown-font warna-font-logo custom1">
                <li><a class="none" href="DatatablesShow/BOMindex.php" style="padding-left:40px;">Board Member</a></li>
                <li><a class="none" href="DatatablesShow/AMindex.php" style="padding-left:40px;">Active Member</a></li>
                <li><a class="none" href="DatatablesShow/CompanyIndex.php" style="padding-left:40px;">Company</a></li>
              </ul>
            </li>
            <li><a href="#" class="none">NEWS</a></li>
            <li><a href="reserve.php" class="none">RESERVATION</a></li>
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
                <h3 class="edit">Hello, <b>  <?php echo($_SESSION['name'])?> </b></h3>
              </div>
                <div class="upcoming col-md-12">
                  <!--DUMMY-->
                  <div class=" col-md-6">
                    <center>
                    <b><h3>UPCOMING EVENTS</h3></b>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </center>    
                  </div>
                  <!--DUMMY-->
                  <div class="reservation col-md-6">

                    <h1>Today's Reservation</h1>
                      <div class="table">
                    <table id="example" class="display" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Kode Ruang</th>
                                <th>Start</th>
                                <th>End</th>
                                <th>Reserver</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td> Kolom 1</td>
                            <td> Kolom 2</td>
                            <td> Kolom 3</td>
                            <td> Kolom 4</td>
                        </tr>
                        </tbody>
                    </table>

                </div>
                    <H1>Reserve Room</H1>
                    <form method="POST" action="input.php">
                    <ul class="form-style-1 nopadding">
                    <li><label>Reservation Date <span class="required">*</span></label>
                    <input type="text" name="datepicker" id="datepicker"/></li>
                    <li>
                        <input type="submit" value="Submit" onsubmit="recp()" />
                    </li>
                    </ul>
                    </form>
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
      <script type="text/javascript">
      $(document).ready(function(){
    $( "#datepicker" ).datepicker();
    });

    </script>
</body>
</html>