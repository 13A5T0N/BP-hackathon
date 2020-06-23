<?php
include"company.php";
include"jobs.php";
include"service.php";


if($_POST['new_company']){
    $name = $_POST['name'] ;
    $category = (isset($_POST['category']) ? $_POST['category'] : null);
    $desc = (isset($_POST['desc']) ? $_POST['desc'] : null);
    $owner = (isset($_POST['owner']) ? $_POST['owner'] : null);
    

    $company->insert($conn,$user_id,$name,$category,$desc,$owner);
}
elseif ($_POST['new_job']) {
    $name = $_POST['name'] ;
    $category = (isset($_POST['category']) ? $_POST['category'] : null);
    $desc = (isset($_POST['desc']) ? $_POST['desc'] : null);
    $owner = (isset($_POST['owner']) ? $_POST['owner'] : null);

    $job->insert($conn,$user_id,$name,$category,$desc);
}
elseif ($_POST['new_service']) {
    $name = $_POST['name'] ;
    $category = (isset($_POST['category']) ? $_POST['category'] : null);
    $desc = (isset($_POST['desc']) ? $_POST['desc'] : null);
    $owner = (isset($_POST['owner']) ? $_POST['owner'] : null);

    $service->insert($conn,$user_id,$name,$category,$desc,$owner);
}
elseif ($_POST['service_rating']) {
    $stars = (isset($_POST['stars']) ? $_POST['stars'] : null);
    $desc = (isset($_POST['desc']) ? $_POST['desc'] : null);
    $naam = (isset($_POST['name']) ? $_POST['name'] : null);

    $service->review($stars, $desc, $conn,$naam);
}
elseif ($_POST['company_rating']) {
    $stars = (isset($_POST['stars']) ? $_POST['stars'] : null);
    $desc = (isset($_POST['desc']) ? $_POST['desc'] : null);
    $naam = (isset($_POST['name']) ? $_POST['name'] : null);

    $company->review($stars, $desc, $conn,$naam);
}