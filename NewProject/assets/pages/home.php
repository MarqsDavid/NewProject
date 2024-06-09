<?php include('../php/sessionHome.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="shortcut icon" href="../img/logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/home.css">
</head>

<body>
    <?php include('../components/sidebarMenu.php') ?>

    <div class="container">
        <div class="row py-3">
            <div class="col-12 d-flex justify-content-between align-items-center">
                <div class="dashboard-title-text">
                    <h2><?php echo "$nameUser", "$lastName"; ?></h2>
                    <p class="text-grey">On-line</p>
                </div>
            </div>
        </div>

        <div class="overview-section p-5">
            <div class="row overview-section-title">

                <div class="details">
                    <div class="recentMovement">
                        <div class="cardHeader">
                            <h2>Recent asset movement</h2>

                        </div>
                        <table id="tabela-dados">
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
                                <?php
                                while ($user_data = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>" . htmlspecialchars($user_data['ddescription']) . "</td>";
                                    echo "<td>" . htmlspecialchars($user_data['assetNumber']) . "</td>";
                                    echo "<td>" . htmlspecialchars($user_data['numberLocation']) . "</td>";
                                    echo "<td>" . htmlspecialchars($user_data['responsible']) . "</td>";
                                    echo "<td>" . htmlspecialchars($user_data['dateCreation']) . "</td>";
                                    echo "<td id='status'hidden>" . htmlspecialchars($user_data['sstatus']) . "</td>";
                                    echo "<td id='icone'></td>";
                                    echo "</tr>";
                                }
                                ?>
                                <script src="../js/icones.js"></script>

                            </tbody>
                        </table>
                    </div>

                   
    </div>

    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="../js/home.js"></script>

</body>

</html>