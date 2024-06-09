<?php include('../php/sessionProfile.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Profile</title>
    <link rel="shortcut icon" href="../img/logo.ico" type="image/x-icon">
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
                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" class="img-circle" alt="Profile Picture">
                        </div>
                        <div class="col-xs-7">
                            <h3><?php echo "$nameUser";?></h3>
                            <p><?php echo "$lastName";?></p>
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
                                        <p><strong>Name:</strong> <span>[<?php echo "$nameUser";?>]</span></p>
                                        <p><strong>Last Name:</strong> <span>[<?php echo "$lastName";?>]</span></p>
                                        <p><strong>Email:</strong> <span>[<?php echo "$email";?>]</span></p>
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
                                        <form method="POST" action="../php/editUser.php">
                                            <div class="form-group">
                                                <button type="update" name="update"  class="btn btn-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-square-fill" viewBox="0 0 16 16">
                                                        <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z"/>
                                                    </svg>
                                                    Confirmar
                                                </button>
                                            </div>

                                            <input type="hidden" name="id-user" value="<?php echo $id; ?>">

                                            <div class="form-group">
                                                <label for="alterName">Nome</label>
                                                <input class="form-control" name="alterName" id="alterName" type="text" value="<?php echo $nameUser; ?>" aria-label="Nome">
                                            </div>

                                            <div class="form-group">
                                                <label for="alterLastName">Last Name</label>
                                                <input class="form-control" name="alterLastName" id="alterLastName" type="text" value="<?php echo $lastName; ?>" aria-label="Last Name">
                                            </div>

                                            <div class="form-group">
                                                <label for="alterEmail">Email</label>
                                                <input class="form-control" name="alterEmail" id="alterEmail" type="text" value="<?php echo $email; ?>" aria-label="Email">
                                            </div>

                                            <div class="form-group">
                                                <label for="alterPhone">Phone</label>
                                                <input class="form-control" name="alterPhone" id="alterPhone" type="text" value="<?php echo $phone; ?>" aria-label="Phone">
                                            </div>

                                            <div class="form-group">
                                                <label for="alterPasswordUsers">Password</label>
                                                <input class="form-control" name="alterPasswordUsers" id="alterPasswordUsers" type="password" aria-label="Password">
                                            </div>
                                        </form>
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
