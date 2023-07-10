<?php
//GET FILE SIZE
$size = $_FILES["image"]["size"];

//SET ALOW FILE
$alow_extensions = array(
    "jpg", "jpeg", "png"
);

//GET FILE EXTENSION
$file_extension = pathinfo($_FILES["image"]["extension"], PATHINFO_EXTENSION);

//ChECK IF THERE IS AN INPUT FILE
if(!is_file($_FILES["image"]["tmp_name"])){
    $response = array(
        "type"=>"error",
        "message"=>"Choose an image please !"
    );
}
else if(!in_array($file_extension, $alow_extensions)){
    $response = array(
        "type"=>"error",
        "message"=>"Image or file not alowed !"
    );
}
else if($size>200000){
    $response = array(
        "type"=>"error",
        "message"=>"Size of image should be less than 2MB"
    );
}
else{
    $target = "sys_images/".basename($_FILES["image"]["name"]);

    if(move_uploaded_file($_FILES["image"]["name"],$target)){
        $response = array(
            "type"=>"success",
            "message"=>"Image uploaded successfully !"
        );
    }else{
        $response = array(
            "type"=>"error",
            "message"=>"Problem uploading image"
        );
    }

}


?>