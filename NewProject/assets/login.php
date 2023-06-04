<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" href="./img/logo.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="./css/login.css" />
</head>

<body>

    <div class="container">
        <div class="col-md-4 col-md-offset-3 col-xs-12">
            <!-- login box Code -->
            <div class="blmd-wrapp">
                <div class="blmd-color-conatiner ripple-effect-All"></div>
                <div class="blmd-header-wrapp ">
                    <div class="blmd-switches">
                        <button title="usury type change" id="change-user" class="btn-toggle btn btn-circle btn-lg btn-blmd ripple-effect btn-success blmd-switch-button">
                            <div title="usury type change">
                                <svg width="30" height="30" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                                    <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z" />
                                </svg>
                            </div>
                        </button>
                    </div>
                </div>
                <div class="blmd-continer">
                    <!-- Login Users -->
                    <form method="post" action="./assets/php/loginUser.php" class="clearfix" id="login-form">
                        <h1>Login</h1>
                        <div class="col-md-12">

                            <div class="input-group blmd-form">
                                <div class="blmd-line">
                                    <input type="text" name="email" autocomplete="off" id="username" class="form-control " required>
                                    <label class="blmd-label">Email</label>
                                </div>
                            </div>
                            <div class="input-group blmd-form">
                                <div class="blmd-line">
                                    <input type="password" name="emailPassword" autocomplete="off" id="password" class="form-control" required>
                                    <label class="blmd-label">Password</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 text-center">
                            <button id="btn-login" type="submit" value="Entrar" class="btn btn-blmd ripple-effect btn-success btn-lg btn-block">Login</button>
                        </div>
                        <br />
                    </form>
                    <!-- Login Admin -->
                    <form action="post" class="clearfix form-hidden" id="login-admin">
                        <h1>Master User</h1>
                        <div class="col-md-12">

                            <div class="input-group blmd-form">
                                <div class="blmd-line">
                                    <input type="text" name="username" autocomplete="off" id="username" class="form-control">
                                    <label class="blmd-label">Username</label>
                                </div>
                            </div>
                            <div class="input-group blmd-form">
                                <div class="blmd-line">
                                    <input type="password" name="passwordAdmin" autocomplete="off" id="password" class="form-control">
                                    <label class="blmd-label">Password</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 text-center">
                            <button id="btn-admin" type="button" class="btn btn-blmd ripple-effect btn-warning btn-lg btn-block">Login</button>
                        </div>
                        <br />
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
    <script src="../assets/js/login.js"></script>

</body>

</html>