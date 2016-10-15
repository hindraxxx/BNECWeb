<?php
    include ("connect.php");
      session_start();
  if(!isset($_SESSION['name']) || !isset($_SESSION['nim'])){
    header("location:login.php");
  }
    $datebook = $_POST["datepicker"]; 
    $_SESSION['date']=$datebook;
    $nim= $_SESSION['nim'];
    mysqli_close($connect);
    
?>

<html>
<head>
<title>Input Page</title>
<link rel="stylesheet" type="text/css" href="phpstyle.css">
<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">
    <link href="//cdn.datatables.net/1.10.5/css/jquery.dataTables.css" type="text/css" rel="stylesheet">
      <script src="jquery-1.12.4.min.js"></script>
      <script src="jquery.js"></script>
      <script src="bootstrap/js/bootstrap.js"></script>
      <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- jQuery -->
    <script src="//code.jquery.com/jquery-1.11.1.min.js" language="javascript" type="text/javascript"></script>

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
        "ajax": "serverSide.php"
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
            <li><a href="logout.php" class="none">LOGOUT</a></li>
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

              <nav class="navbar-right">
                  <ul class="list-inline">
                    <li><a href="#" class="none"><center>Your Profile</center></a></li>
                    <li><a href="#" class="none"><center>Sign Out</center></a></li>
                  </ul>
                </nav>
              </nav>

              <!--User Full Name-->
              <div class="greets col-md-12" id="">
                <h3 class="edit">Hello, <b><?php echo($_SESSION['name'])?></b></h3>
              </div>
                <div class="upcoming col-md-12">
                  <!--DUMMY-->
                 
                <form>
                    <ul class="form-style-1">
                         <li><label>Selected Date <span class="required"></span></label>
                         <li><?php     echo($datebook); ?></li>
                    </ul>
                </form>
                <div class="table">
                    <table id="example" class="display" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Kode Ruang</th>
                                <th>Start</th>
                                <th>End</th>
                                <th>Purposes</th>
                                <th>Reserver</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td> Kolom 1</td>
                            <td> Kolom 2</td>
                            <td> Kolom 3</td>
                            <td> Kolom 4</td>
                            <td> Kolom 5 </td>
                        </tr>
                        </tbody>
                    </table>

                </div>
                <form method="POST" action="add.php">
                <ul class="form-style-1">
                    <li><label>Purposes <span class="required">*</span></label><input type="text" name="alasan" id="alasan" class="field-divided" placeholder="Purposes" required/></li>
                    <li>
                        <label>Start Time <span class="required">*</span></label>
                        <input type="time" name="startTime" id="startTime" min="00:00" max="24:00" step="1800" class="field-short" required/>
                    </li>
                    <li>
                        <label>End Time <span class="required">*</span></label>
                        <input type="time" name="endTime" id="endTime" min="00:00" max="24:00" step="1800" class="field-short" required/>
                    </li>
                    <li>
                        <label>Room Code</label>
                        <select name="code" id="code" class="field-divided">
                            <option value="RoomA" >Toefl Room A</option>
                            <option value="RoomB">Toefl Room B</option>
                            <option value="RoomC">PSP Room Sekre 2</option>
                            <option value="RoomD">PSP Room Sekre 2</option>
                            <option value="RoomE">Debate Room (2nd FLoor)</option>
                        </select>
                    </li>
                    <li>
                        <input type="submit" value="Submit" />
                    </li>
                </ul>
                </form>
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