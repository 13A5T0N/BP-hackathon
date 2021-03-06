<?php
include "../../php/service.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../../css/service.css">
    <link rel="stylesheet" href="../../css/navbar.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />
</head>

<body class="body">
    <div id="navbar">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active link-text" href="index.html">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link link-text" href="company.html">Comapnies</a>
            </li>
            <li class="nav-item">
                <a class="nav-link link-text" href="jobs.html">Jobs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link link-text" href="service.html">service</a>
            </li>
        </ul>
    </div>
    <div class="tool">
        <div class="budget">
            <div class="dropdown">
                <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Budget
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <form action="" method="post">
                        <input type="text" name="" id="minimum" placeholder="Min">
                        <input type="text" name="" id="maximum" placeholder="Max">
                        <div class="dropdown-divider"></div>
                        <button class="bg-secondary clear text-white">Clear all</button>
                        <input type="submit" value="Apply" class="submit btn-success">
                    </form>
                </div>
            </div>
        </div>
        <div class="category">
            <div class="dropdown">
                <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Category
                </button>
                <div class="dropdown-menu menu-seller" aria-labelledby="dropdownMenuButton">
                    <form action="" method="post">
                        <div class="details">
                            <div class="form-check level1">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Electronics
                                </label>
                            </div>
                            <div class="form-check level2">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                                <label class="form-check-label" for="defaultCheck2">
                                    Food
                                </label>
                            </div>
                            <div class="form-check level3">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                                <label class="form-check-label" for="defaultCheck2">
                                    Building
                                </label>
                            </div>
                            <div class="form-check level4">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                                <label class="form-check-label" for="defaultCheck2">
                                    IT
                                </label>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <button class="bg-secondary clear text-white">Clear all</button>
                        <input type="submit" value="Apply" class="submit btn-success">
                    </form>
                </div>
            </div>
        </div>
        <div class="seller">
            <div class="dropdown">
                <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Rating
                </button>
                <div class="dropdown-menu menu-seller" aria-labelledby="dropdownMenuButton">
                    <form action="" method="post">
                        <div class="details">
                            <div class="form-check level1">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    1 star
                                </label>
                            </div>
                            <div class="form-check level2">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                                <label class="form-check-label" for="defaultCheck2">
                                    2 star
                                </label>
                            </div>
                            <div class="form-check level3">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                                <label class="form-check-label" for="defaultCheck2">
                                    3 star
                                </label>
                            </div>
                            <div class="form-check level4">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                                <label class="form-check-label" for="defaultCheck2">
                                    4 star
                                </label>
                            </div>
                            <div class="form-check level5">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                                <label class="form-check-label" for="defaultCheck2">
                                    5 star
                                </label>
                            </div>
                            <div class="form-check new-level">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                                <label class="form-check-label" for="defaultCheck2">
                                    NEw
                                </label>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <button class="bg-secondary clear text-white">Clear all</button>
                        <input type="submit" value="Apply" class="submit btn-success">
                    </form>
                </div>
            </div>
        </div>
        <div class="type">
            <div class="dropdown">
                <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Type
                </button>
                <div class="dropdown-menu menu-seller" aria-labelledby="dropdownMenuButton">
                    <form action="" method="post">
                        <div class="details">
                            <div class="form-check level1">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Company
                                </label>
                            </div>
                            <div class="form-check level2">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                                <label class="form-check-label" for="defaultCheck2">
                                    Freelancer
                                </label>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <button class="bg-secondary clear text-white">Clear all</button>
                        <input type="submit" value="Apply" class="submit btn-success">
                    </form>
                </div>
            </div>
        </div>
        <div class="order">
            <div class="dropdown">
                <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    View
                </button>
                <div class="dropdown-menu menu-seller" aria-labelledby="dropdownMenuButton">
                    <form action="" method="post">
                        <div class="details">
                            <div class="form-check extra">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                <label class="form-check-label" for="exampleRadios1">
                                    Newest first
                                </label>
                            </div>
                            <div class="form-check extra">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                <label class="form-check-label" for="exampleRadios2">
                                    Oldest first
                                </label>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <button class="bg-secondary clear text-white">Clear all</button>
                        <input type="submit" value="Apply" class="submit btn-success">
                    </form>
                </div>
            </div>
        </div>
        <div class="searchbar">
            <form action="">
                <div class="col-6">
                    <div class="input-group flex-nowrap">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-info" id="addon-wrapping">search</span>
                        </div>
                        <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="addon-wrapping">
                    </div>
                </div>

            </form>
        </div>
    </div>
    <div class="indic">
        <p>Home > Service</p>
        <br>
        <button class="btn btn-info" data-toggle="modal" data-target="#exampleModal">Add Service</button>
    </div>
    <div class="service">
        <div class="comp">
            <table class="table table-borderless">
                <tbody>
                    <?php
                    $service->show_service($conn);
                    ?>
                </tbody>
            </table>

        </div>
        <hr>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-dark">
                    <form action="../../php/actuator.php" method="POST">
                        <div class="">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Service Name</label>
                                <input type="text" name="name" class="form-control" id="exampleInputEmail1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Owner</label>
                                <input type="text" class="form-control" name="owner" id="exampleInputEmail1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">category</label>
                                <input list="category" name="category" id="browser">
                                <datalist>
                                    <option value="IT">
                                    <option value="Security">
                                    <option value="Food">
                                    <option value="Electronics">
                                    <option value="Building">
                                    <option value="Manager">
                                </datalist>
                                <datalist>

                                </datalist>
                            </div>
                            <div class="form-group">
                                <textarea name="desc" id="exampleInputEmail1" cols="48" rows="5"></textarea>
                            </div>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" name="new_service" value="Save changes">
                </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html>