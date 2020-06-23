<?php
include "conn.php";
session_start();
$company = new company;
$user_id = $_SESSION["user"];
class company
{

    public function insert($conn,$user_id,$name,$category,$desc,$owner){
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

        $id = mysqli_real_escape_string($conn, $owner);
        if (isset($id)) {
            echo "$id";
            $sql = "INSERT INTO `company`( `company_name`, `category`, `owner`,company_desc) 
            VALUES ('$name',$category_id,$user_id,'$desc')";
            if ($conn->query($sql) === TRUE) {
                header("location:../frontend/view/company.php");
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

        } else {
            $sql = "INSERT INTO `company`( `company_name`, `category`,company_desc) 
            VALUES ('$name','$category_id','$desc')";

            if ($conn->query($sql) === TRUE) {
                header("location:../frontend/view/company.php");
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
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

    public function owner($conn)
    {
        $sql = "SELECT user_voornaam,user_naam FROM  user";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<option value="' . $row['user_naam'] . '">';
            }
        } else {
            echo "0 results";
        }
    }

    public function show_comp($conn)
    {
        $sql = "SELECT * FROM `company` ORDER BY `company`.`company_id` DESC ";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo " <tr> <td>
                <div class='card' style='width: 18rem; '>
                    <img src='' class='card-img-top'>
                    <div class='card-body'>
                        <h5 class='card-title'>".$row['company_name']."</h5>
                        <p class='card-text'>".$row['company_desc']."</p>
                        <a href='company_info.php?id=".$row['company_id']."' class='btn btn-primary txt-center'>Go </a>
                    </div>
                </div>
            </td></tr>";
            }
        } else {
            echo "0 results";
        }
    }
    public function number(){
        $number = $_GET['id'];
        $num = filter_var($number,FILTER_SANITIZE_NUMBER_INT);
        return $num;
    }
    public function name($conn){
        $num =$this -> number();
        $sql = "SELECT company_name FROM `company` where `company_id` = $num";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo $row['company_name'];
            }
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    public function about($conn){
        $num =$this -> number();
        $sql = "SELECT company_desc FROM `company` where `company_id` = $num";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo $row['company_desc'];
            }
        } else {
            echo "No desscription";
        }
    }
    public function review($stars,$desc,$conn,$naam){
        $sql = "SELECT `company_id` FROM `company` where  company_name= '$naam'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $num = $row['company_id'];
                echo $num;
            }
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $sql = "INSERT INTO `company_rating`(`star`, `company_description`, `company`) 
        VALUES ($stars,'$desc',$num)";
        if ($conn->query($sql) === TRUE) {
            header("location:../frontend/view/company_info.php?id=".$num);
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    public function show_review($conn){
        $num =$this -> number();
        $sql = "SELECT * FROM `company_rating` WHERE  `company` = $num ORDER BY `rating_id` DESC ";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo " <tr> 
                <td>".$row['company_description']."</td>
                <td>".$row['star']."</td>
                </tr>";
            }
        } else {
            echo "No reviews";
        }
    }
}
