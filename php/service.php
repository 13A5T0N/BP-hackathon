<?php
include "conn.php";
session_start();
$user_id = $_SESSION["user"];
$service = new service;

class service{
    public function show_service($conn)
    {
        $sql = "SELECT * FROM `service` ORDER BY `service`.`service_id` DESC ";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo " <tr> <td>
                <div class='card' style='width: 18rem; '>
                    <img src='' class='card-img-top'>
                    <div class='card-body'>
                        <h5 class='card-title'>".$row['service_naam']."</h5>
                        <p class='card-text'>".$row['service_description']."</p>
                        <a href='service_info.php?id=".$row['service_id']."' class='btn btn-primary txt-center'>Go </a>
                    </div>
                </div>
            </td></tr>";
            }
        } else {
            echo "0 results";
        }
    }

    public function category($conn)
    {
        $sql = "SELECT * FROM category";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $category = $row['naam'];
                echo ' <option value="' . $category . '">';
            }
        } else {
            echo "0 results";
        }
    }
    public function insert($conn,$user_id,$name,$category,$desc){
        $category = mysqli_real_escape_string($conn,$category);
        $sql = "SELECT category_id FROM category where  naam = '$category'";
        $name = mysqli_real_escape_string($conn, $name);
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $category_id = $row['category_id'];
            }
        } else {
            echo "0 results";
        }
        $sql = "INSERT INTO `service`( `service_naam`, `service_category`, `service_description`, `owner`)
        VALUES ('$name',$category_id,'$desc',$user_id)";
        if ($conn->query($sql) === TRUE) {
            header("location:../frontend/view/jobs.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    public function number(){
        $number = $_GET['id'];
        $num = filter_var($number,FILTER_SANITIZE_NUMBER_INT);
        return $num;
    }
    public function name($conn){
        $num =$this -> number();
        $sql = "SELECT service_naam FROM `service` where `service_id` = $num";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo $row['service_naam'];
            }
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    public function about($conn){
        $num =$this -> number();
        $sql = "SELECT service_description FROM service where service_id = $num";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo $row['service_description'];
            }
        } else {
            echo "No desscription";
        }
    }
    public function review($stars,$desc,$conn,$naam){
        $sql = "SELECT `service_id` FROM `service` where  service_naam= '$naam'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $num = $row['service_id'];
                echo $num;
            }
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $sql = "INSERT INTO `service_rating`(`star`, `rating_description`, `service`) 
        VALUES ($stars,'$desc',$num)";
        if ($conn->query($sql) === TRUE) {
            header("location:../frontend/view/service_info.php?id=".$row=$num);
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    public function show_review($conn){
        $num =$this -> number();
        $sql = "SELECT * FROM `service_rating` WHERE  `service` = $num ORDER BY `rating_id` DESC ";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo " <tr> 
                <td>".$row['rating_description']."</td>
                <td>".$row['star']."</td>
                </tr>";
            }
        } else {
            echo "No reviews";
        }
    }
}
