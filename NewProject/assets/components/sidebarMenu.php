
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="../css/sidebarMenu.css">


<div class="dashboard-pg text-grey-blue ">
    <nav class="navigation-bar d-flex align-items-center ">
        <div class="container">
            <div class="row align-items-center">
                <div class="navigation-bar-left col-6 d-flex align-items-center">
                    <button type="button" class="navbar-open-btn text-grey-blue me-3">
                        <svg width="35" height="35" fill="currentColor" class="bi bi-justify" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2 12.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
                        </svg>
                    </button>
                    <div class="navbar-logo">
                        <img src="../img/Dmega-logo.png" alt="site logo">
                    </div>
                </div>
                <div class="navigation-bar-right col-6 d-flex align-items-center justify-content-end">
                    <a href="../pages/profile.php" class="profile-btn bg-blue text-white btn-circle me-3">
                        <svg width="25" height="25" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <div class="navigation-overlay position-fixed"></div>

    <div class="navigation-sidebar bg-light-grey">
        <div class="navbar-sb-head d-flex justify-content-between align-items-center px-4">
            <img id="logo-img" src="../img/Dmega-logo.png">
            <button class="navbar-close-btn text-grey-blue">
                <svg width="30" height="30" fill="currentColor" class="bi bi-text-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2 12.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
                </svg>
            </button>
        </div>

        <div class="navbar-sb-list p-4">
            <div class="navbar-sb-item mb-5">
                <h5 class="text-uppercase text-grey navbar-sb-item-title fs-12 ls-1">Tasks</h5>
                <ul class="navbar-sb-links p-0 list-unstyled">
                    <li class="navbar-sb-link my-3">
                        <a href="../pages/home.php" class="text-decoration-none d-flex align-items-center justify-content-between">
                            <div class="text-light-blue d-flex align-items-center">
                                <span class="navbar-sb-icon me-3">
                                    <svg width="20" height="20" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                                        <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z" />
                                    </svg>
                                </span>
                                <span class="navbar-sb-text fs-14 fw-5 text-capitalize">Home</span>
                            </div>
                        </a>
                    </li>
                    <li class="navbar-sb-link my-3">
                        <a href="../pages/viewAssets.php" class="text-decoration-none d-flex align-items-center justify-content-between">
                            <div class="text-light-blue d-flex align-items-center">
                                <span class="navbar-sb-icon me-3">
                                    <svg width="20" height="20" fill="currentColor" class="bi bi-box-seam-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M15.528 2.973a.75.75 0 0 1 .472.696v8.662a.75.75 0 0 1-.472.696l-7.25 2.9a.75.75 0 0 1-.557 0l-7.25-2.9A.75.75 0 0 1 0 12.331V3.669a.75.75 0 0 1 .471-.696L7.443.184l.01-.003.268-.108a.75.75 0 0 1 .558 0l.269.108.01.003 6.97 2.789ZM10.404 2 4.25 4.461 1.846 3.5 1 3.839v.4l6.5 2.6v7.922l.5.2.5-.2V6.84l6.5-2.6v-.4l-.846-.339L8 5.961 5.596 5l6.154-2.461L10.404 2Z" />
                                    </svg>
                                </span>
                                <span class="navbar-sb-text fs-14 fw-5 text-capitalize">View assets</span>
                            </div>
                        </a>
                    </li>
                    <li class="navbar-sb-link my-3">
                        <a data-bs-toggle='modal' href="#patrimonyAdd" class="text-decoration-none d-flex align-items-center justify-content-between">
                            <div class="text-light-blue d-flex align-items-center">
                                <span class="navbar-sb-icon me-3">
                                    <svg width="20" height="20" fill="currentColor" class="bi bi-file-plus-fill" viewBox="0 0 16 16">
                                        <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM8.5 6v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 1 0z" />
                                    </svg>
                                </span>
                                <span class="navbar-sb-text fs-14 fw-5 text-capitalize">Register assets</span>
                            </div>
                        </a>
                    </li>
                    <li class="navbar-sb-link my-3">
                        <a href="../pages/moveAssets.php" class="text-decoration-none d-flex align-items-center justify-content-between">
                            <div class="text-light-blue d-flex align-items-center">
                                <span class="navbar-sb-icon me-3">
                                    <svg width="20" height="20" fill="currentColor" class="bi bi-arrow-left-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 11.5a.5.5 0 0 0 .5.5h11.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 11H1.5a.5.5 0 0 0-.5.5zm14-7a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H14.5a.5.5 0 0 1 .5.5z" />
                                    </svg>
                                </span>
                                <span class="navbar-sb-text fs-14 fw-5 text-capitalize">Move assets</span>
                            </div>
                        </a>
                    </li>
                    <li class="navbar-sb-link my-3">
                        <a data-bs-toggle='modal' href="#addLocations" class="text-decoration-none d-flex align-items-center justify-content-between">
                            <div class="text-light-blue d-flex align-items-center">
                                <span class="navbar-sb-icon me-3">
                                    <svg width="20" height="20" fill="currentColor" class="bi bi-house-add-fill" viewBox="0 0 16 16">
                                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 1 1-1 0v-1h-1a.5.5 0 1 1 0-1h1v-1a.5.5 0 0 1 1 0Z" />
                                        <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z" />
                                        <path d="m8 3.293 4.712 4.712A4.5 4.5 0 0 0 8.758 15H3.5A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z" />
                                    </svg>
                                </span>
                                <span class="navbar-sb-text fs-14 fw-5 text-capitalize">Add locations</span>
                            </div>
                        </a>
                    </li>
                    <li class="navbar-sb-link my-3">
                        <a href="../pages/writtenOffAssets.php" class="text-decoration-none d-flex align-items-center justify-content-between">
                            <div class="text-light-blue d-flex align-items-center">
                                <span class="navbar-sb-icon me-3">
                                    <svg width="20" height="20" fill="currentColor" class="bi bi-circle-square" viewBox="0 0 16 16">
                                        <path d="M0 6a6 6 0 1 1 12 0A6 6 0 0 1 0 6z" />
                                        <path d="M12.93 5h1.57a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-1.57a6.953 6.953 0 0 1-1-.22v1.79A1.5 1.5 0 0 0 5.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 4h-1.79c.097.324.17.658.22 1z" />
                                    </svg>
                                </span>
                                <span class="navbar-sb-text fs-14 fw-5 text-capitalize">Written-off assets</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="navbar-sb-item mb-5">
                <h5 class="text-uppercase text-grey navbar-sb-item-title fs-12 ls-1">reports</h5>
                <ul class="navbar-sb-links p-0 list-unstyled">
                    <li class="navbar-sb-link my-3">
                        <a href="#" class="text-decoration-none d-flex align-items-center justify-content-between">
                            <div class="text-light-blue d-flex align-items-center">
                                <span class="navbar-sb-icon me-3">
                                    <svg width="20" height="20" fill="currentColor" class="bi bi-file-earmark-plus-fill" viewBox="0 0 16 16">
                                        <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM8.5 7v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 1 0z" />
                                    </svg>
                                </span>
                                <span class="navbar-sb-text fs-14 fw-5 text-capitalize">Registration reports</span>
                            </div>
                        </a>
                    </li>
                    <li class="navbar-sb-link my-3">
                        <a href="#" class="text-decoration-none d-flex align-items-center justify-content-between">
                            <div class="text-light-blue d-flex align-items-center">
                                <span class="navbar-sb-icon me-3">
                                    <svg width="20" height="20" fill="currentColor" class="bi bi-file-earmark-minus-fill" viewBox="0 0 16 16">
                                        <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM6 8.5h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1 0-1z" />
                                    </svg>
                                </span>
                                <span class="navbar-sb-text fs-14 fw-5 text-capitalize">Output reports</span>
                            </div>
                        </a>
                    </li>
                    <li class="navbar-sb-link my-3">
                        <a href="#" class="text-decoration-none d-flex align-items-center justify-content-between">
                            <div class="text-light-blue d-flex align-items-center">
                                <span class="navbar-sb-icon me-3">
                                    <svg width="20" height="20" fill="currentColor" class="bi bi-file-earmark-code-fill" viewBox="0 0 16 16">
                                        <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM6.646 7.646a.5.5 0 1 1 .708.708L5.707 10l1.647 1.646a.5.5 0 0 1-.708.708l-2-2a.5.5 0 0 1 0-.708l2-2zm2.708 0 2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L10.293 10 8.646 8.354a.5.5 0 1 1 .708-.708z" />
                                    </svg>
                                </span>
                                <span class="navbar-sb-text fs-14 fw-5 text-capitalize">Movement reports</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="navbar-sb-item mb-5">
                <h5 class="text-uppercase text-grey navbar-sb-item-title fs-12 ls-1">account</h5>
                <ul class="navbar-sb-links p-0 list-unstyled">
                    <li class="navbar-sb-link my-3">
                        <a href="../pages/profile.php" class="text-decoration-none d-flex align-items-center justify-content-between">
                            <div class="text-light-blue d-flex align-items-center">
                                <span class="navbar-sb-icon me-3">
                                    <svg width="20" height="20" fill="currentColor" class="bi bi-person-square" viewBox="0 0 16 16">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                        <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z" />
                                    </svg>
                                </span>
                                <span class="navbar-sb-text fs-14 fw-5 text-capitalize">profile</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="navbar-sb-item mb-5">
                <h5 class="text-uppercase text-grey navbar-sb-item-title fs-12 ls-1">misc pages</h5>
                <ul class="navbar-sb-links p-0 list-unstyled">
                    <li class="navbar-sb-link my-3">
                        <a href="../php/exitUser.php" class="text-decoration-none d-flex align-items-center justify-content-between">
                            <div class="text-light-blue d-flex align-items-center">
                                <span class="navbar-sb-icon me-3">
                                    <svg width="20" height="20" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z" />
                                        <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                                    </svg>
                                </span>
                                <span class="navbar-sb-text fs-14 fw-5 text-capitalize">logout</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>


</div>

<!----===== Modal patrimonyAdd ===== -->

<div class="modal" id="patrimonyAdd">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="../php/InsertEquity.php" method="POST">
                <div class="modal-header">
                    <h4 class="modal-title">Registration reports</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" name="description" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Nº Patrimony</label>
                        <input type="number" name="patrimony" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Nº Location and Description</label>
                        <input type="text" name="location" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Responsible</label>
                        <input type="text" name="user" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Creation date</label>
                        <input type="date" name="creation-date" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="submit" id="update" class="btn btn-primary">To add</button>
                    <button type="button" data-bs-dismiss="modal" class="btn btn-danger">Cancela</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!----===== Modal Add locations ===== -->

<div class="modal" id="addLocations">
    <div class="modal-dialog">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <h4 class="modal-title">Add locations</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nº Location and Description</label>
                        <input type="text" name="addLocations" class="form-control" required>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" name="submit" id="update" class="btn btn-primary">To add</button>
                    <button type="button" data-bs-dismiss="modal" class="btn btn-danger">Cancela</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!----===== Modal Add locations ===== -->






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>




<!-- jquery -->
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="../js/sidebarMenu.js"></script>