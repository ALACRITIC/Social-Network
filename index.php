<?php

session_start();

if(empty($_SESSION['id_user'])) {
  header("Location: login.php");
  exit();
}

require_once("db.php");

$name = "";

$sql = "SELECT * FROM users WHERE id_user='$_SESSION[id_user]'";
$result = $conn->query($sql);

if($result->num_rows > 0) { 
  while($row = $result->fetch_assoc()) {
    $name = $row['name'];
  }
}

$_SESSION['callFrom'] = "index.php";

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Social Network</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <link rel="stylesheet" href="dist/css/custom.css">


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>S</b>N</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Social </b>Network</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        AdminLTE Design Team
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Developers
                        <small><i class="fa fa-clock-o"></i> Today</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Sales Department
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Reviewers
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <?php 
                $sql = "SELECT * FROM users WHERE id_user='$_SESSION[id_user]'";
                $result = $conn->query($sql);
                if($result->num_rows > 0) {
                  $row = $result->fetch_assoc();
                  if($row['profileimage'] != '') {
                    echo '<img src="uploads/profile/'.$row['profileimage'].'" class="img-circle" alt="User Image" style="width: 25px; height: 25px;">';
                  } else {
                     echo '<img src="dist/img/avatar5.png" class="img-circle" alt="User Image" style="width: 25px; height: 25px;">';
                  }
                }
                ?>
              <span class="hidden-xs"><?php echo $name; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  <?php echo $name; ?>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <?php 
                $sql = "SELECT * FROM users WHERE id_user='$_SESSION[id_user]'";
                $result = $conn->query($sql);
                if($result->num_rows > 0) {
                  $row = $result->fetch_assoc();
                  if($row['profileimage'] != '') {
                    echo '<img src="uploads/profile/'.$row['profileimage'].'" class="img-circle" alt="User Image">';
                  } else {
                    echo '<img src="dist/img/avatar5.png" class="img-circle" alt="User Image">';
                  }
                }
                ?>
        </div>
        <div class="pull-left info">
          <p><?php echo $name; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu  -->
      <ul class="sidebar-menu" data-widget="tree">
        <li>
          <a href="profile.php">
            <i class="fa fa-user-o"></i> <span>Profile</span>
          </a>
        </li>
        <li class="active">
          <a href="index.php">
            <i class="fa fa-newspaper-o"></i> <span>News Feed</span>
          </a>
        </li>
        <li>
          <a href="messages.php">
            <i class="fa fa-wechat"></i> <span>Messages</span>
          </a>
        </li>
        <li>
          <a href="friends.php">
            <i class="fa fa-users"></i> <span>Friends</span>
          </a>
        </li>
        <li>
          <a href="pages.php">
            <i class="fa fa-file-o"></i> <span>Pages</span>
          </a>
        </li>
        <li>
          <a href="events.php">
            <i class="fa fa-calendar"></i> <span>Events</span>
          </a>
        </li>
        <li>
          <a href="photos.php">
            <i class="fa  fa-file-photo-o"></i> <span>Photos</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <section class="content-header">
      <h1>
        News Feed
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-8 col-sm-6 col-xs-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Wall</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="addpost.php" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <div class="col-sm-12">
                   <textarea class="form-control" name="description" placeholder="What's on your mind?" name="message"></textarea>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info">Post</button>
                <div class="pull-right margin-r-5">
                  <label class="btn btn-warning">Image
                    <input type="file" name="image" id="ProfileImageBtn">
                  </label>
                  
                </div>
                <button class="btn btn-warning pull-right margin-r-5">Video</button>
                <div>
                  <?php if(isset($_SESSION['uploadError'])) { ?>
                    <p><?php echo $_SESSION['uploadError']; ?></p>
                  <?php unset($_SESSION['uploadError']); } ?>
                </div>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>

          <?php

                $sql = "SELECT * FROM post INNER JOIN users WHERE post.id_user=users.id_user AND post.id_user='$_SESSION[id_user]' ORDER BY post.id_post DESC";
                $result = $conn->query($sql);

                if($result->num_rows > 0) {
                  $i = 0;
                  while($row =  $result->fetch_assoc()) {
                    $i++;
                    ?>
                      <!-- Box Comment -->
                      <div class="box box-widget">
                        <div class="box-header with-border">
                          <div class="user-block">
                            <?php
                          if($row['profileimage'] != '') {
                            echo '<img src="uploads/profile/'.$row['profileimage'].'" class="img-circle img-bordered-sm" alt="User Image">';
                          } else {
                             echo '<img src="dist/img/avatar5.png" class="img-circle img-bordered-sm" alt="User Image">';
                          }
                        ?>
                            <span class="username"><a href="#"><?php echo $row['name']; ?></a></span>
                            <span class="description">Shared publicly - <?php echo date('d-M-Y h:i a', strtotime($row['createdAt'])); ?></span>
                          </div>
                        </div>
                        <div class="box-body">
                        <?php
                          if($row['image'] != "") {
                            echo '<img class="img-responsive pad" src="uploads/post/'.$row['image'].'" alt="Photo">';
                          }
                        ?>
                          

                          <p><?php echo $row['description']; ?></p>
                          <button type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i> Share</button>
                          <?php
                          $sql1 = "SELECT * FROM likes WHERE id_user='$_SESSION[id_user]' AND id_post='$row[id_post]'";
                          $result1 = $conn->query($sql1);

                          if($result1->num_rows > 0) {
                            ?>
                            <button type="button" class="btn btn-default btn-xs" disabled><i class="fa fa-thumbs-o-up"></i> Like</button>

                            <?php
                          } else {
                            ?>
                               <button type="button" id="addLike" data-id="<?php echo $row['id_post']; ?>" class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button>
                            <?php
                          }
                          ?>   
                          <?php
                          $sql2 = "SELECT * FROM likes WHERE id_post='$row[id_post]'";
                          $result2 = $conn->query($sql2);
                          $totalLikes = (int)$result2->num_rows; 
                          ?>  
                          <?php
                          $sql3 = "SELECT * FROM comments WHERE id_post='$row[id_post]'";
                          $result3 = $conn->query($sql3);
                          $totalComments = (int)$result3->num_rows; 
                          ?>                       
                          <span class="pull-right text-muted commentBtn" onclick="toggleComments(<?php echo $i; ?>);"><?php echo $totalLikes; ?> likes - <?php echo $totalComments; ?> comments</span>
                        </div>
                        <!-- /.box-body -->
                        <div id="boxComment<?php echo $i; ?>" class="box-footer box-comments">
                        <?php
                          $sql4 = "SELECT * FROM comments WHERE id_user='$_SESSION[id_user]' AND id_post='$row[id_post]'";
                          $result4 = $conn->query($sql4);

                          if($result4->num_rows > 0) {
                            while($row4 = $result4->fetch_assoc()) {
                              $sql5 = "SELECT * FROM users WHERE id_user='$row4[id_user]'";
                              $result5 = $conn->query($sql5);
                              if($result5->num_rows > 0) {
                                $row5 = $result5->fetch_assoc();
                              }
                          ?>

                          <div class="box-comment">
                          <?php
                              if($row5['profileimage'] != "") {
                                echo '<img class="img-circle img-sm" src="uploads/profile/'.$row5['profileimage'].'" alt="Photo">';
                              }
                            ?>
                            <div class="comment-text">
                                  <span class="username">
                                    <?php echo $row5['name']; ?>
                                    <span class="text-muted pull-right"><?php echo date('d-M-Y h:i a', strtotime($row4['createdAt'])); ?></span>
                                  </span>
                              <?php echo $row4['comment']; ?>
                            </div>
                          </div>

                          <?php
                          }
                        }
                        ?>

                        </div>
                        <!-- /.box-footer -->
                        <div class="box-footer">
                          <form action="#" method="post">
                          <?php
                              if($row['profileimage'] != "") {
                                echo '<img class="img-responsive img-circle img-sm" src="uploads/profile/'.$row['profileimage'].'" alt="Photo">';
                              }
                            ?>
                            <!-- .img-push is used to add margin to elements next to floating images -->
                            <div class="img-push">
                              <input type="text" id="addcomment" data-id="<?php echo $row['id_post']; ?>" class="form-control input-sm" onkeypress="checkInput(event);" placeholder="Press enter to post comment">
                            </div>
                          </form>
                        </div>
                        <!-- /.box-footer -->
                      </div>
                      <!-- /.box -->
                    <?php
                  }
                }
                ?>
        </div>

        <div class="col-md-4">
          <!-- USERS LIST -->
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">My Friends</h3>

              <div class="box-tools pull-right">
                <span class="label label-success">10 Online</span>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <ul class="users-list clearfix">
                <li>
                  <img src="dist/img/user1-128x128.jpg" alt="User Image">
                  <a class="users-list-name" href="#">Alexander Pierce</a>
                  <span class="users-list-date">Today</span>
                </li>
                <li>
                  <img src="dist/img/user8-128x128.jpg" alt="User Image">
                  <a class="users-list-name" href="#">Norman</a>
                  <span class="users-list-date">Yesterday</span>
                </li>
                <li>
                  <img src="dist/img/user7-128x128.jpg" alt="User Image">
                  <a class="users-list-name" href="#">Jane</a>
                  <span class="users-list-date">12 Jan</span>
                </li>
                <li>
                  <img src="dist/img/user6-128x128.jpg" alt="User Image">
                  <a class="users-list-name" href="#">John</a>
                  <span class="users-list-date">12 Jan</span>
                </li>
                <li>
                  <img src="dist/img/user2-160x160.jpg" alt="User Image">
                  <a class="users-list-name" href="#">Alexander</a>
                  <span class="users-list-date">13 Jan</span>
                </li>
                <li>
                  <img src="dist/img/user5-128x128.jpg" alt="User Image">
                  <a class="users-list-name" href="#">Sarah</a>
                  <span class="users-list-date">14 Jan</span>
                </li>
                <li>
                  <img src="dist/img/user4-128x128.jpg" alt="User Image">
                  <a class="users-list-name" href="#">Nora</a>
                  <span class="users-list-date">15 Jan</span>
                </li>
                <li>
                  <img src="dist/img/user3-128x128.jpg" alt="User Image">
                  <a class="users-list-name" href="#">Nadia</a>
                  <span class="users-list-date">15 Jan</span>
                </li>
              </ul>
              <!-- /.users-list -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer text-center">
              <a href="javascript:void(0)" class="uppercase">View All Users</a>
            </div>
            <!-- /.box-footer -->
          </div>
          <!--/.box -->

          <!-- PRODUCT LIST -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Suggested Pages</h3>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <ul class="products-list product-list-in-box">
                <li class="item">
                  <div class="product-img">
                    <img src="dist/img/default-50x50.gif" alt="Product Image">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">Samsung TV
                      <span class="label label-warning pull-right">25,000 Likes</span></a>
                    <span class="product-description">
                          Samsung 32" 1080p 60Hz LED Smart HDTV.
                        </span>
                  </div>
                </li>
                <!-- /.item -->
                <li class="item">
                  <div class="product-img">
                    <img src="dist/img/default-50x50.gif" alt="Product Image">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">Bicycle
                      <span class="label label-info pull-right">1500 Likes</span></a>
                    <span class="product-description">
                          26" Mongoose Dolomite Men's 7-speed, Navy Blue.
                        </span>
                  </div>
                </li>
                <!-- /.item -->
                <li class="item">
                  <div class="product-img">
                    <img src="dist/img/default-50x50.gif" alt="Product Image">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">Xbox One <span
                        class="label label-danger pull-right">500 Likes</span></a>
                    <span class="product-description">
                          Xbox One Console Bundle with Halo Master Chief Collection.
                        </span>
                  </div>
                </li>
                <!-- /.item -->
                <li class="item">
                  <div class="product-img">
                    <img src="dist/img/default-50x50.gif" alt="Product Image">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">PlayStation 4
                      <span class="label label-success pull-right">24,000 Likes</span></a>
                    <span class="product-description">
                          PlayStation 4 500GB Console (PS4)
                        </span>
                  </div>
                </li>
                <!-- /.item -->
              </ul>
            </div>
            <!-- /.box-body -->
            <div class="box-footer text-center">
              <a href="javascript:void(0)" class="uppercase">View All Pages</a>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->


        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2016-2017 <a href="#">Social Network</a>.</strong> All rights
    reserved.
  </footer>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

<script>
  $("#addLike").on("click", function() {
    var id_post = $(this).attr("data-id");
    $.post("addlike.php", {id:id_post}).done(function(data) {
      var result = $.trim(data);
      if(result == "ok") {
        location.reload();
      }
    });
  });
</script>
<script>
  function checkInput(e) {

    //13 means enter
    if(e.keyCode === 13) {
      var id_post = $("#addcomment").attr("data-id");
      var comment = $("#addcomment").val();
      $.post("addcomment.php", {id:id_post, comment:comment}).done(function(data) {
        var result = $.trim(data);
        if(result == "ok") {
          location.reload();
        }
      });
    }
  }
</script>

<script>
  function toggleComments(id) {
    $("#boxComment"+id).slideToggle("slow");
  }
</script>
</body>
</html>
