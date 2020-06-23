<?php
include "../../php/company.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../../css/company.css">
    <link rel="stylesheet" href="../../css/navbar.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />
</head>

<body class="body">
    <div id="navbar">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active link-text" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link link-text" href="#">Comapnies</a>
            </li>
            <li class="nav-item">
                <a class="nav-link link-text" href="jobs.php">Jobs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link link-text" href="service.php">service</a>
            </li>
            <li class="nav-item">
                <a class="nav-link link-text" href="#">account</a>

            </li>
        </ul>
    </div>
    <div class="tool">
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
                            <div class="form-check level4">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                                <label class="form-check-label" for="defaultCheck2">
                                    Security
                                </label>
                            </div>
                            <div class="form-check level6">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                                <label class="form-check-label" for="defaultCheck2">
                                    Manager
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
        <p>Home > Company</p>
        <button class="btn btn-info" data-toggle="modal" data-target="#exampleModal">Add Company</button>
    </div>
    <div class="service">
        <div class="comp">
            <table class="table table-borderless">
                <tbody>
                    <?php $company->show_comp($conn) ?>
                </tbody>
            </table>

        </div>
        <hr>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content text-dark">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Gebruiker informatie</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<form action="../../php/actuator.php" method="POST">
                    <div class="">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Company Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">category</label>
                                <input list="category" name="category" id="browser">
                                <datalist id="category">
                                    <?php
                                    $company->category($conn);
                                    ?>
                                </datalist>
                            </div>
                            <div class="form-group">
                                <textarea name="desc" id="exampleInputEmail1" cols="48" rows="5"></textarea>
                            </div>
                            <div class="form-check">
                                <input name="owner" class="form-check-input" type="checkbox" value="me" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Owned by me
                                </label>
                            </div>
                        </div>
						<div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal" >Close</button>
                            <input type="submit" value="Save" name="new_company" class="btn btn-primary">
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