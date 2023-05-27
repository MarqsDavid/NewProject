<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="shortcut icon" href="../img/logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/home.css">
</head>

<body>
    <?php include('../components/sidebarMenu.php') ?>

    <div class="container">
        <div class="row py-3">
            <div class="col-12 d-flex justify-content-between align-items-center">
                <div class="dashboard-title-text">
                    <h2>David Marques Mega de Sousa</h2>
                    <p class="text-grey">On-line</p>
                </div>
            </div>
        </div>

        <div class="overview-section p-4">
            <div class="row overview-section-title">

                <div class="details">
                    <div class="recentMovement">
                        <div class="cardHeader">
                            <h2>Recent asset movement</h2>

                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <td>Descrição</td>
                                    <td>Patrimônio</td>
                                    <td>Localização</td>
                                    <td>Responsável</td>
                                    <th>Data</th>
                                    <td>Status</td>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>Lorem ipsum dolor</td>
                                    <td>Lorem ipsum dolor</td>
                                    <td>Lorem ipsum dolor</td>
                                    <td>Lorem ipsum dolor</td>
                                    <td>Lorem ipsum dolor</td>
                                    <td>
                                        <span class="status add">
                                            <svg width="16" height="16" fill="currentColor" class="bi bi-file-plus-fill" viewBox="0 0 16 16">
                                                <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM8.5 6v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 1 0z" />
                                            </svg>
                                        </span>
                                    </td>
                                </tr>


                                <tr>
                                    <td>Star Refrigerator</td>
                                    <td>Lorem ipsum dolor</td>
                                    <td>Lorem ipsum dolor</td>
                                    <td>Lorem ipsum dolor</td>
                                    <td>Lorem ipsum dolor</td>
                                    <td>
                                        <span class="status move">
                                            <svg width="16" height="16" fill="currentColor" class="bi bi-arrow-left-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M1 11.5a.5.5 0 0 0 .5.5h11.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 11H1.5a.5.5 0 0 0-.5.5zm14-7a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H14.5a.5.5 0 0 1 .5.5z" />
                                            </svg>
                                        </span>
                                    </td>
                                </tr>


                                <tr>
                                    <td>Star Refrigerator</td>
                                    <td>Lorem ipsum dolor</td>
                                    <td>Lorem ipsum dolor</td>
                                    <td>Lorem ipsum dolor</td>
                                    <td>Lorem ipsum dolor</td>
                                    <td>
                                        <span class="status exit">
                                            <svg width="16" height="16" fill="currentColor" class="bi bi-circle-square" viewBox="0 0 16 16">
                                                <path d="M0 6a6 6 0 1 1 12 0A6 6 0 0 1 0 6z" />
                                                <path d="M12.93 5h1.57a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-1.57a6.953 6.953 0 0 1-1-.22v1.79A1.5 1.5 0 0 0 5.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 4h-1.79c.097.324.17.658.22 1z" />
                                            </svg>
                                        </span>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                    <!-- ================= NLast movements made by users================ -->
                    <div class="recentAlteration">
                        <div class="cardHeader">
                            <h2>User changes</h2>
                        </div>

                        <table>
                            <tr>
                                <td width="60px">
                                    <div class="imgBx"><img src="../img/icon2.jpg" alt=""></div>
                                </td>
                                <td>
                                    <h4>David <br> <span>Italy</span></h4>
                                </td>
                            </tr>

                            <tr>
                                <td width="60px">
                                    <div class="imgBx"><img src="../img/icon2.jpg" alt=""></div>
                                </td>
                                <td>
                                    <h4>Amit <br> <span>India</span></h4>
                                </td>
                            </tr>

                            <tr>
                                <td width="60px">
                                    <div class="imgBx"><img src="../img/icon2.jpg" alt=""></div>
                                </td>
                                <td>
                                    <h4>David <br> <span>Italy</span></h4>
                                </td>
                            </tr>

                            <tr>
                                <td width="60px">
                                    <div class="imgBx"><img src="../img/icon2.jpg" alt=""></div>
                                </td>
                                <td>
                                    <h4>Amit <br> <span>India</span></h4>
                                </td>
                            </tr>

                            <tr>
                                <td width="60px">
                                    <div class="imgBx"><img src="../img/icon2.jpg" alt=""></div>
                                </td>
                                <td>
                                    <h4>David <br> <span>Italy</span></h4>
                                </td>
                            </tr>

                            <tr>
                                <td width="60px">
                                    <div class="imgBx"><img src="../img/icon2.jpg" alt=""></div>
                                </td>
                                <td>
                                    <h4>Amit <br> <span>India</span></h4>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="../js/home.js"></script>

</body>

</html>