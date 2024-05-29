<?php include('../php/sessionProfile.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Profile with Timeline Photos and Settings - Bootdey.com</title>
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/profile.css">
</head>

<body>
    <?php include('../components/sidebarMenu.php') ?>
    <div class="container bootstrap snippets bootdey">
        <div class="row">
            <div class="col-md-12">
                <div class="grid profile">
                    <div class="grid-header">
                        <div class="col-xs-2">
                            <img src="../img/icon2.jpg" class="img-circle"
                                alt="Profile Picture">
                        </div>
                        <div class="col-xs-7">
                            <h3><?php echo "$nameUser";?></h3>
                            <p><?php echo "$lastName";?></p></p>
                        </div>
                    </div>
                    <div class="grid-body">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#profile" data-toggle="tab">Profile</a></li>
                            <li><a href="#settings" data-toggle="tab">Settings</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="profile">
                                <p class="lead">My Profile</p>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p><strong>Name:</strong><span>[<?php echo "$nameUser";?>]</span></p>
                                        <p><strong>Last Name:</strong><span>[<?php echo "$lastName";?>]</span></p>
                                        <p><strong>Email:</strong><span>[<?php echo "$email";?>]</span></p>
                                    </div>
                                    <div class="col-md-6">
                                        <p><strong>Phone:</strong> <?php echo "$phone";?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="settings">
                                <p class="lead">My Settings</p>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-horizontal">
                                            <div class="form-group">
                                            <div class="col-md-6">
                                        <p><strong>Name:</strong><span>[<?php echo "$nameUser";?>]</span></p>
                                        <input type="text">
                                        <p><strong>Last Name:</strong><span>[<?php echo "$lastName";?>]</span></p>
                                        <input type="text">
                                        <p><strong>Email:</strong><span>[<?php echo "$email";?>]</span></p>
                                    </div>
                                    <div class="col-md-6">
                                        <p><strong>Phone:</strong> <?php echo "$phone";?></p>
                                    </div>
                                </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</body>

</html>