<?php

include "../../php/company.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/navbar.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />
</head>

<body class="body">
    <div id="navbar">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active link-text" href="index.html">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link link-text" href="company.php">Comapnies</a>
            </li>
            <li class="nav-item">
                <a class="nav-link link-text" href="jobs.php">Jobs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link link-text" href="service.php">service</a>
            </li>
        </ul>
    </div>
    <div class="indic">
        <p>Home > Service > Service name</p>
    </div>
    <div class="profile-img">
        <img src="../../images/service.jpeg" alt="">
    </div>
    <div class="about">
        <h2>about:</h2>
        <textarea name="" id="" cols="130" rows="5">
            <?php $company->about($conn); ?>
        </textarea>
    </div>
    <div class="rating">
        <button class="btn btn-info" data-toggle="modal" data-target="#exampleModal">Add Rating</button>
    </div>
    <div class="contact">
        <h4 class="text-center"> contact</h4>
        <table>
            <tr><i class="fa fa-phone" aria-hidden="true"> N.V.T</i></tr>
            <tr></tr>
            <tr>
                <td> <i class="fa fa-envelope" aria-hidden="true"></i>N.V.T</td>
            </tr>
            <tr></tr>
            <tr>
                <td><i class="fa fa-street-view" aria-hidden="true"> N.V.T</i></td>
            </tr>
        </table>
    </div>
    <br>
    <hr>
    <div id="review_header">
        <h4>Reviews</h4>
    </div>
    <div class="review">
        <table>
            <?php
            $company->show_review($conn);
            ?>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Review</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-dark">
                    <form action="../../php/actuator.php" method="POST">
                        <div class="">
                        <div class="form-group">
                                <label for="exampleInputEmail1"></label>
                                <input type="text" class="form-control" name="name" id="exampleInputEmail1" value="<?php $company->name($conn)?>" placeholder="<?php $company->name($conn)?>" disabled">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Star 1-5</label>
                                <input type="text" class="form-control" name="stars" id="exampleInputEmail1">
                            </div>
                            <div class="form-group">
                                <textarea name="desc" id="exampleInputEmail1" cols="48" rows="5"></textarea>
                            </div>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" value="Save changes" name="company_rating" class="btn btn-primary">
                </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>

