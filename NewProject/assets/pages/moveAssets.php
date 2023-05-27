<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Move assets</title>
    <link rel="shortcut icon" href="../img/logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="../css/moveAssets.css">

</head>
</head>

<body>
    <?php include('../components/sidebarMenu.php') ?>
    <div class="container">
        <div class="row py-3">
            <div class="col-12 d-flex justify-content-between align-items-center">
                <div class="dashboard-title-text">
                    <h2>David Marques Mega de Sousa</h2>
                    <p class="text-grey">On-line.</p>
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
                                    <h2>Move assets</h2>
                                </div>
                                <div class="col-sm-6">
                                    <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><svg width="20" height="20" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                            <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                        </svg><span>Confirm</span></a>
                                    <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"> <svg width="20" height="20" fill="currentColor" class="bi bi-circle-square" viewBox="0 0 16 16">
                                            <path d="M0 6a6 6 0 1 1 12 0A6 6 0 0 1 0 6z" />
                                            <path d="M12.93 5h1.57a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-1.57a6.953 6.953 0 0 1-1-.22v1.79A1.5 1.5 0 0 0 5.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 4h-1.79c.097.324.17.658.22 1z" />
                                        </svg></a>
                                    <div class="container-fluid">
                                        <form class="d-flex input-group w-auto">
                                            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                                            <span class="input-group-text border-0" id="search-addon">
                                                <svg width="20" height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                                </svg>
                                            </span>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>
                                        <span class="custom-checkbox">
                                            <input type="checkbox" id="selectAll">
                                            <label for="selectAll"></label>
                                        </span>
                                    </th>
                                    <th>Descrição</th>
                                    <th>Nº Patrimônio</th>
                                    <th>Nº Localização</th>
                                    <th>Responsável</th>
                                    <th>Data de Criação</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <span class="custom-checkbox">
                                            <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                            <label for="checkbox1"></label>
                                        </span>
                                    </td>
                                    <td>Dany Lo</td>
                                    <td>Marques Mega de Soua</td>
                                    <td>david@teste.com</td>
                                    <td>0966686371</td>

                                    <td>
                                        <a href="#editEmployeeModal" class="edit" data-toggle="modal"><svg width="30" height="30" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                                <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                            </svg></a>
                                        <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"> <svg width="20" height="20" fill="currentColor" class="bi bi-circle-square" viewBox="0 0 16 16">
                                                <path d="M0 6a6 6 0 1 1 12 0A6 6 0 0 1 0 6z" />
                                                <path d="M12.93 5h1.57a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-1.57a6.953 6.953 0 0 1-1-.22v1.79A1.5 1.5 0 0 0 5.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 4h-1.79c.097.324.17.658.22 1z" />
                                            </svg></a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
</body>
</body>

<script src="../js/userAdmin.js"></script>

</html>