<?php
	session_start();
	include 'CRUD/config.php';

	$update=false;
	$id="";
	$name="";
	$description="";
    $evolution  = "";


	if(isset($_POST['add'])){
        /**
         * NAME: Project1
         * DESCRIPTION: Design for educational purpose and to Help peoples.
         * EVOLUTION: 0
         */
		$name=$_POST['name'];
		$description=$_POST['description'];
        $evolution = $_POST['evolution'];

		$sql="INSERT INTO projects(UID,projectName,description,evolution)VALUES(".$_SESSION['id'].",'".$name."','".$description."',".$evolution.")";
		
        if(mysqli_query($conn, $sql)){
            $_SESSION['response']="Successfully Inserted to the database!";
            $_SESSION['res_type']="success";

            header('location:home.php');
        }else{
            $_SESSION['response']="Error: ".$sql." <br> ".mysqli_error($com);
            $_SESSION['res_type']="error";

            header('location:home.php');
        }
	}
	if(isset($_GET['delete'])){
		$id=$_GET['delete'];

		$query="DELETE FROM projects WHERE id=$id";
        if(mysqli_query($conn, $query)){
            $_SESSION['response']="Successfully Deleted!";
            $_SESSION['res_type']="danger";

            header('location:home.php');
        }else{
            $_SESSION['response']="Error: ".$sql." <br> ".mysqli_error($com);
            $_SESSION['res_type']="error";

            header('location:home.php');
        }
	}
	if(isset($_GET['edit'])){
		$id=$_GET['edit'];

		$sql="SELECT * FROM projects WHERE id=$id";
		$result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);

		$id=$row['id'];
		$name=$row['projectName'];
		$description=$row['description'];
		$evolution=$row['evolution'];

		$update=true;
	}
	if(isset($_POST['update'])){
		$id=$_POST['id'];
		
		$name=$_POST['name'];
		$description=$_POST['description'];
        $evolution = $_POST['evolution'];

		$query="UPDATE projects SET projectName='$name',description='$description',evolution=$evolution WHERE id=$id";
        if(mysqli_query($conn, $query)){
            $_SESSION['response']="Updated Successfully!";
            $_SESSION['res_type']="primary";

            header('location:home.php');
        }else{
            $_SESSION['response']="Error: ".$sql." <br> ".mysqli_error($com);
            $_SESSION['res_type']="error";

            header('location:home.php');
        }
	}

	if(isset($_GET['details'])){
		$id=$_GET['details'];
        $sql="SELECT * FROM projects WHERE id=$id";
		$result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);

		$vid=$row['id'];
		$vname=$row['projectName'];
		$vdescription=$row['description'];
		$vevolution=$row['evolution'];
	}
?>