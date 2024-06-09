<?php include('../php/sessionViewAssets.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View assets</title>
    <link rel="shortcut icon" href="../img/logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/viewAssets.css">

</head>
</head>

<body>
    <?php include('../components/sidebarMenu.php') ?>
    <div class="container ">
        <div class="row py-3">
            <div class="col-12 d-flex justify-content-between align-items-center">
                <div class="dashboard-title-text">
                    <h2><?php echo "$nameUser", "$lastName"; ?></h2>
                    <p class="text-grey">On-line</p>
                </div>
            </div>
        </div>

        <div class="overview-section p-4 ">
            <div class="row overview-section-title">
                <div class="container">
                    <div class="table-wrapper">
                        <div class="table-title">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h2 class="navbar-brand">View assets</h2>
                                </div>
                                <div class="container-fluid">
                                    <form class="d-flex input-group w-auto">
                                        <input id="search" name="search" type="search"  class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                                        <span onclick="searchData()" class="input-group-text border-0" id="search-addon">
                                            <svg width="20" height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                            </svg>
                                        </span>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="container tbl-container">

                            <div>
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Descrição</th>
                                            <th>Nº Patrimônio </th>
                                            <th>Nº Localização</th>
                                            <th>Responsável</th>
                                            <th>Data de Criação</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        while ($user_data = mysqli_fetch_assoc($result)) {

                                            echo "<tr>";

                                            echo "<td>" . $user_data['ddescription'] . "</td>";
                                            echo "<td>" . $user_data['assetNumber'] . "</td>";
                                            echo "<td>" . $user_data['numberLocation'] . "</td>";
                                            echo "<td>" . $user_data['responsible'] . "</td>";
                                            echo "<td>" . $user_data['dateCreation'] . "</td>";


                                            echo "</tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

</body>
<script src="../js/search.js"></script>

</html>