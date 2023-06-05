<?php include('../php/sessionMaster.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Master User</title>
    <link rel="shortcut icon" href="../img/logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/userAdmin.css">
</head>

<body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>ADMIN</h2>
                    </div>
                    <div class="col-sm-6">
                        <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Employee</span></a>
                        <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#confirm-delete"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>
                        <a href="../php/exitMaster.php" class="btn btn-primary"><span><svg width="14" height="14" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z" />
                                    <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                                </svg></span></a>
                        <div class="container-fluid">
                            <form class="d-flex input-group w-auto">
                                <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                                <span class="input-group-text border-0" id="search-addon">

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
                        <th>Name</th>
                        <th>Last name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Phone</th>
                        <th>Date of ciation</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php
                        while($user_data = mysqli_fetch_assoc($result)) {

                          echo  "<tr>";
                          echo  "<td>";
                          echo  "<span class='custom-checkbox'>";
                          echo     "<input type='checkbox' id='checkbox1' name='options[]' value='1'>";
                          echo     "<label for='checkbox1'></label>";
                          echo  "</span>";
                          echo  "</td>";
                          echo  "<td>".$user_data['nameUser']."</td>";
                          echo  "<td>".$user_data['lastName']."</td>";
                          echo  "<td>".$user_data['email']."</td>";
                          echo  "<td>".$user_data['passwordUsers']."</td>";
                          echo  "<td>".$user_data['phone']."</td>";
                          echo  "<td>".$user_data['dateOfCiation']."</td>";
                          echo   "<td>";
                          echo  "<a href='#editEmployeeModal' class='edit' data-toggle='modal'><i class='material-icons' data-toggle='tooltip' title='Edit'>&#xE254;</i></a>";
                          echo  "<a href='#' type='button' class='delete' data-toggle='modal' data-target='#confirm-delete'><i class='material-icons' data-toggle='tooltip' title='Delete'>&#xE872;</i></a>";

                        }
                        ?>

        </div>
    </div>
    <!-- Add Modal HTML -->
    <div id="addEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="../php/insertUser.php" method="POST">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Employee</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="firstname" class="form-control" placeholder="Enter first name" required>
                        </div>
                        <div class="form-group">
                            <label>Last name</label>
                            <input type="text" name="lastName" class="form-control" placeholder="Enter the last name" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter the email" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="passwordUsers" placeholder="Type the password" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="number" name="phone" class="form-control" placeholder="(xx) xxxx-xxxx" required>
                        </div>
                        <div class="form-group">
                            <label>Date of ciation</label>
                            <input type="date" name="dateOfCiation" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-success" value="Add">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Edit Modal HTML -->
    <div id="editEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Employee</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="alterName" class="form-control" placeholder="Enter first name" required>
                        </div>
                        <div class="form-group">
                            <label>Last name</label>
                            <input type="text" name="alterLastName" class="form-control" placeholder="Enter the last name" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="alterEmail" class="form-control" placeholder="Enter the email" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="alterPasswordUsers" class="form-control" placeholder="Type the password" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="number" name="alterPhone"  class="form-control" placeholder="(xx) xxxx-xxxx" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-info" value="Save">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Delete Modal HTML -->
    <div id="confirm-delete" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h4 class="modal-title">Delete Employee</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to delete these Records?</p>
                        <p class="text-warning"><small>This action cannot be undone.</small></p>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-danger btn-ok" value="Delete">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="../js/userAdmin.js"></script>
<script>
$(document).ready(function() {
    $('#confirm-delete').on('click', '.btn-ok', function(e) {
        var id = $(this).data('id');
        $.ajax({
            type: "POST",
            url: "../php/deleteUsers.php",
            data: { id: id },
            success: function(msg) {
                $('#confirm-delete').modal('hide');
                alert(msg);
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                $('#confirm-delete').modal('hide');
                alert("Erro ao excluir o usuário: " + textStatus);
            }
        });
    });
});
</script>

</html>