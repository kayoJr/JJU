<?php
ob_start();
session_start();
if (!($_SESSION['session_username'])) {
    header("Location: ../index.php");
}


function saveComplaint() {
    
    if (isset($_POST['btnupdate'])) {
        $vid =  trim($_POST['txtvid']);
        $title = trim($_POST['txttitle']);
        $path = trim($_POST['txtpath']);
       
        require_once 'db/dbfile.php';
        $obj = new Database();
        $obj->connect();
        $table = "web_vhub";
        //catid, cat_name, description, cat_type, recstatus, created_date
        $cols2 = array(vtitle => $title, vpath => $path);
        $condition = array("vid=$vid");
        $result = $obj->update($table, $cols2, $condition);
        if ($result) {
            echo '<div class="alert alert-block alert-success">
                                    <button type="button" class="close" data-dismiss="alert">
                                        <i class="ace-icon fa fa-times"></i>
                                    </button>
                                    <i class="ace-icon fa fa-check green"></i>
                                    Video Title / Link
                                    <strong class="green">
                                        Updated Successfully!!
                                    </strong>
                                </div>';
            header('Refresh:2; URL=up_video.php?eid='.$vid);
        } else {
            echo '<div  class="alert alert-error alert-dismissible" role="alert" >
              <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <strong>Error! </strong>
                Problem While Updating 
                </div>';
//            header('Refresh:2; URL=temp_createcategory.php');
        }
        }
        
    
   if (isset($_POST['btnsave'])) {

       
        $title = trim($_POST['txttitle']);
        $path = trim($_POST['txtpath']);
       
      
        
        date_default_timezone_set('Africa/Addis_Ababa');

        require_once 'db/dbfile.php';
        $obj = new Database();
        $obj->connect();
        $table = "web_vhub";
        //infoid,infono,userid,catid,title,story,pic,tabhtml,recstatus,created_date,exp_date,assigned_to
        $recstatus = 0;
        
        date_default_timezone_set('Africa/Addis_Ababa');
        $cdate = date('Y/m/d H:i:s', time());

        $exist = $obj->checkExistingRec($table, "vtitle='$title'");
        if ($exist == 0) {
            $rc = $obj->getRecCount($table, "vid");
            $cid = $rc + 1;
            
        
            $values = array($cid, $title, $path, $recstatus, $cdate);

                
            $result = $obj->insert($table, $values);
            
            
            if ($result) {
                echo '<div class="alert alert-block alert-success">
                                    <button type="button" class="close" data-dismiss="alert">
                                        <i class="ace-icon fa fa-times"></i>
                                    </button>
                                    <i class="ace-icon fa fa-check green"></i>
                                    Video 
                                    <strong class="green">
                                        Successfully Posted
                                    </strong>
                                </div>';
//                header('Refresh:2; URL=tic_createcustomer.php');
            } else {
                echo '<div  class="alert alert-error alert-dismissible" role="alert" >
              <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <strong>Error! </strong>
                Problem While Adding Video
                </div>';
//                header('Refresh:2; URL=tic_createcustomer.php');
            }
        } else {
            echo '<div  class="alert alert-warning alert-dismissible" role="alert" >
              <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <strong>Error! </strong>
                Duplicate Title! Please Recheck !
                </div>';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Jigjiga University</title>
        <link rel="icon" href="assets/images/icon.ico">

        <!-- Main Styles -->
        <link rel="stylesheet" href="assets/styles/style.min.css">

        <!-- Material Design Icon -->
        <link rel="stylesheet" href="assets/fonts/material-design/css/materialdesignicons.css">

        <!-- mCustomScrollbar -->
        <link rel="stylesheet" href="assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.min.css">

        <!-- Waves Effect -->
        <link rel="stylesheet" href="assets/plugin/waves/waves.min.css">

        <!-- Sweet Alert -->
        <link rel="stylesheet" href="assets/plugin/sweet-alert/sweetalert.css">

        <!-- FlexDatalist -->
        <link rel="stylesheet" href="assets/plugin/flexdatalist/jquery.flexdatalist.min.css">

        <!-- Popover -->
        <link rel="stylesheet" href="assets/plugin/popover/jquery.popSelect.min.css">

        <!-- Select2 -->
        <link rel="stylesheet" href="assets/plugin/select2/css/select2.min.css">

        <!-- Timepicker -->
        <link rel="stylesheet" href="assets/plugin/timepicker/bootstrap-timepicker.min.css">

        <!-- Touch Spin -->
        <link rel="stylesheet" href="assets/plugin/touchspin/jquery.bootstrap-touchspin.min.css">

        <!-- Colorpicker -->
        <link rel="stylesheet" href="assets/plugin/colorpicker/css/bootstrap-colorpicker.min.css">

        <!-- Datepicker -->
        <link rel="stylesheet" href="assets/plugin/datepicker/css/bootstrap-datepicker.min.css">

        <!-- DateRangepicker -->
        <link rel="stylesheet" href="assets/plugin/daterangepicker/daterangepicker.css">

        <!-- Color Picker -->
        <link rel="stylesheet" href="assets/color-switcher/color-switcher.min.css">
        <!-- Data Tables -->
        <link rel="stylesheet" href="assets/plugin/datatables/media/css/dataTables.bootstrap.min.css">
        <link rel="stylesheet" href="assets/plugin/datatables/extensions/Responsive/css/responsive.bootstrap.min.css">
        <script type="text/javascript">
            function getXMLHTTP() { //fuction to return the xml http object
                var xmlhttp = false;
                try {
                    xmlhttp = new XMLHttpRequest();
                } catch (e) {
                    try {
                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                    } catch (e) {
                        try {
                            xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
                        } catch (e1) {
                            xmlhttp = false;
                        }
                    }
                }

                return xmlhttp;
            }

            function getComplaints(sid) {
                var strURL = "com/getComplaints.php?id=" + sid;
                var req = getXMLHTTP();

                if (req) {

                    req.onreadystatechange = function () {
                        if (req.readyState == 4) {
                            // only if "OK"
                            if (req.status == 200) {
                                document.getElementById('complaint').innerHTML = req.responseText;
                            } else {
                                alert("There was a problem while using XMLHTTP:\n" + req.statusText);
                            }
                        }
                    }
                    req.open("GET", strURL, true);
                    req.send(null);
                }
            }

            function numericFilter(txb)
            {
                txb.value = txb.value.replace(/[^\0-9]/ig, "");
            }
        </script>
    </head>

    <body>
        <?php
        $link = "vload";
//$title = "Admin Dashboard";
        require_once 'com/session_filter.php';
        ?>
        <!-- /.main-menu -->
        
        <div id="wrapper">
            <div class="main-content">
                <div class="row small-spacing">
                    <?php
                    $status = $_SESSION['session_status'];
                    require_once 'com/redirect_filter.php';
                    
                  
                                    if (isset($_GET['vl'])) {
                                        $vlink = trim($_GET['vl']);
                                    }
                                    else
                                    {
                                        $vlink = 'https://www.youtube.com/embed/qY6xfzrShdY';
                                    }
                                        
                    ?>
                    <div class="col-xs-12">
                        <div class="box-content">
                            <div class="col-lg-4 col-xs-12">
                                <h4 class="box-title">JJU Youtube Channel</h4>

                                <iframe width="320" height="220" src="<?php echo $vlink; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                
                            </div>
                            <div class="col-lg-8 col-xs-12">
                                <div class="box-content">
                                    <h4 class="box-title">List of Video links</h4>
                                   
                                    <div class="table-responsive">
                                        <table id="example" class="table table-striped table-bordered display" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>SNo.</th>
                                                    <th>Title</th>
                                                    <!--<th>Video Link</th>-->
                                                    <!--<th>Current Status</th>-->
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                require_once 'db/dbfile.php';
                                                $obj = new Database();
                                                $obj->connect();
                                                $uid = $_SESSION['session_userid'];
                                                $table = "web_vhub";
                                                $cols = "vid,vtitle,vpath,recstatus,created_date";
                                                $where = "recstatus in (0,1)";
                                                $order = "created_date desc";
                                                $obj->select($table, $cols, $where, $order);
                                                $res = $obj->getResult();
                                                $a = 0;
                                                foreach ($res as $value) {
                                                    $id = $res[$a]['vid'];
                                                  
                                                    $title = $res[$a]['vtitle'];
                                                    $path = $res[$a]['vpath'];
                                                    $recstatus = $res[$a]['recstatus'];
                                                    $cdate = $res[$a]['created_date'];
                                          
                                                    date_default_timezone_set('Africa/Addis_Ababa');
//                                                    
                                                    $cnt = $a + 1;
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $cnt; ?></td>
                                                        <td><b><?php echo $title; ?></b></td>
                                                        <!--<td><b><?php echo $path; ?></b></td>-->
                                                        
                                                            <!--<button type="button" class="btn btn-icon btn-icon-right btn-<?php echo $color; ?> btn-xs waves-effect waves-light"><?php echo $status; ?></button>--> 
                                                                                                               
                                                        <td width="100px">
                                                            
                                                            <a  href="watch_videos.php?vl=<?php echo $path; ?>"><button type="button" class="btn btn-icon btn-icon-right btn-danger btn-xs waves-effect waves-light"><i class="ico fa fa-youtube-play"></i>Watch</button> </a>
                                                            
                                                        </td>
                                                    </tr>
                                                    <?php
                                                    $a++;
                                                }
                                                ?>

                                            </tbody>


                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
                <!-- /.row small-spacing -->		
                <?php
                require_once 'com/footer.php';
                ?>
            </div>
            <!-- /.main-content -->
        </div><!--/#wrapper -->
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
                <script src="assets/script/html5shiv.min.js"></script>
                <script src="assets/script/respond.min.js"></script>
        <![endif]-->

        <?php
        require_once 'com/footerimport.php';
        ?>

    </body>
</html>