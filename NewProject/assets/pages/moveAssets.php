<?php include('../php/sessionViewAssets.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Move assets</title>
    <link rel="shortcut icon" href="../img/logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/moveAssets.css">
</head>

<body>
    <?php include('../components/sidebarMenu.php') ?>
    <div class="container">
        <div class="row py-3">
            <div class="col-12 d-flex justify-content-between align-items-center">
                <div class="dashboard-title-text">
                    <h2><?php echo "$nameUser", "$lastName"; ?></h2>
                    <p class="text-grey">On-line.</p>
                </div>
            </div>
        </div>

        <div class="overview-section p-4">
            <div class="row overview-section-title">
                <div class="container">
                    <div class="table-wrapper">
                        <div class="table-title">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h2>Move assets</h2>
                                </div>
                                <div class="col-sm-6">
                                    <div class="container-fluid">
                                        <form class="d-flex input-group w-auto">
                                            <input id="search" name="search" type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                                            <span onclick="searchData()" class="input-group-text border-0" id="search-addon">
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
                                    <th>Description</th>
                                    <th>Nº Patrimony</th>
                                    <th>Nº Location</th>
                                    <th>Responsible</th>
                                    <th>Creation date</th>
                                    <th>Change</th>
                                </tr>
                            </thead>
                            <tbody>
                                <form method="post" action="../php/checkboxMoveAssets.php">
                                    <?php
                                    while ($user_data = mysqli_fetch_assoc($result)) {
                                        echo "<tr>";
                                        echo "<td>";
                                        echo "<span class='custom-checkbox'>";
                                        echo "<input type='checkbox' id='checkbox{$user_data['id']}' name='options[]' value='{$user_data['id']}'>";
                                        echo "<label for='checkbox{$user_data['id']}'></label>";
                                        echo "</span>";
                                        echo "</td>";
                                        echo "<td style='display:none;'>" . htmlspecialchars($user_data['id']) . "</td>"; // Use 'display:none;' to hide the column
                                        echo "<td>" . htmlspecialchars($user_data['ddescription']) . "</td>";
                                        echo "<td>" . htmlspecialchars($user_data['assetNumber']) . "</td>";
                                        echo "<td>" . htmlspecialchars($user_data['numberLocation']) . "</td>";
                                        echo "<td>" . htmlspecialchars($user_data['responsible']) . "</td>";
                                        echo "<td>" . htmlspecialchars($user_data['dateCreation']) . "</td>";
                                        echo "<td>";
                                        echo "<a href='#' class='edit' data-toggle='modal' data-target='#changeModal' data-id='{$user_data['id']}'>";
                                        echo "<svg width='20' height='20' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>";
                                        echo "<path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z' />";
                                        echo "<path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z' />";
                                        echo "</svg>";
                                        echo "</a>";
                                        echo "<a href='#' class='writeOff' data-toggle='modal' data-target='#writeOff' data-id='{$user_data['id']}'>";
                                        echo "<svg width='20' height='20' fill='currentColor' class='bi bi-circle-square' viewBox='0 0 16 16'>";
                                        echo "<path d='M0 6a6 6 0 1 1 12 0A6 6 0 0 1 0 6z' />";
                                        echo "<path d='M12.93 5h1.57a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-1.57a6.953 6.953 0 0 1-1-.22v1.79A1.5 1.5 0 0 0 5.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 4h-1.79c.097.324.17.658.22 1z' />";
                                        echo "</svg>";
                                        echo "</a>";
                                        echo "</td>";
                                        echo "</tr>";
                                    }
                                    ?>
                                    <button type="" data-toggle='modal' data-target='#writeOffModal' class="btn btn-danger">Write Off Selected</button>
                                    <!-- Modal Write Off HTML -->
                                    <div class="modal fade" id="writeOffModal" tabindex="-1" role="dialog" aria-labelledby="writeOffModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="writeOffModalLabel">Write off assets</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="" method="POST">
                                                    <div class="modal-body">
                                                        <p>Are you sure you want to write off this asset?</p>
                                                        <p class="text-warning"><small>This action cannot be undone.</small></p>
                                                        <div class="form-group">
                                                            <label for="reasons">Write the reason for writing off the asset:</label>
                                                            <textarea name="reasons" id="reasons" class="form-control" required></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="dateDischarge">Date of write-off:</label>
                                                            <input type="date" name="dateDischarge" id="dateDischarge" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-danger">Write off</button>
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Alter -->
        <div class="modal fade" id="changeModal" tabindex="-1" role="dialog" aria-labelledby="changeModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="changeModalLabel">Edit Item</h5>
                    </div>
                    <div class="modal-body">
                        <form action="../php/saveAssests.php" method="POST">
                            <input type="hidden" id="item_id" name="item_id" value="">
                            <div class="form-group">
                                <label for="location-change">Location and Description</label>
                                <input type="text" name="location-change" id="location-change" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="responsible-change">Responsible</label>
                                <input name="responsible-change" id="responsible-change" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="date-change">Date of change</label>
                                <input type="date" name="date-change" id="date-change" class="form-control" required>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" name="update" id="update" class="btn btn-primary">Save changes</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Write Off HTML -->
        <div class="modal fade" id="writeOff" tabindex="-1" role="dialog" aria-labelledby="changeModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <form action="../php/saveWriteOff.php" method="POST">
                            <div class="modal-header">
                                <h4 class="modal-title">Write off assets</h4>
                            </div>
                            <input type="hidden" id="writeOff_id" name="writeOff_id" value="">
                            <div class="modal-body">
                                <p>Are you sure you want to write off your assets?</p>
                                <p class="text-warning"><small>This action cannot be undone.</small></p>
                            </div>
                            <div class="form-group">
                                <label for="date-change">Write the reason for writing off assets</label>
                                <textarea type="text" name="reasons" id="reasons" class="form-control" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="date-change">Date of discharge</label>
                                <input type="date" name="dateDischarge" id="dateDischarge" class="form-control" required>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" name="update" id="update" class="btn btn-danger">To go down</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="../js/setTheId.js"></script>
    <script src="../js/moveAssets.js"></script>
    <script src="../js/search.js"></script>
</body>

</html>
