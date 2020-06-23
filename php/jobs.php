<?php
include "conn.php";
session_start();
$user_id = $_SESSION["user"];
$job = new job;

class job{
    public function show_job($conn)
    {
        $sql = "SELECT * FROM `job` ORDER BY `job`.`job_id` DESC ";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo " <tr> <td>
                <div class='card' style='width: 18rem; '>
                    <img src='' class='card-img-top'>
                    <div class='card-body'>
                        <h5 class='card-title'>".$row['job_name']."</h5>
                        <p class='card-text'>".$row['job_desc']."</p>
                        <a href='#' class='btn btn-primary txt-center'>Go </a>
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
        $sql = "INSERT INTO `job`(`job_name`, `job_desc`, `job_type`, `category`, `owner`) 
        VALUES ('$name','$desc','Full Time',$category_id,$user_id)";
        if ($conn->query($sql) === TRUE) {
            header("location:../frontend/view/jobs.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    
}