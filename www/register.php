<?php
    include("connect.php");

    $con=conexion();


    if(isset($_POST['register'])){

        if ( (strlen($_POST['mail']) > 0 && strlen($_POST['mail']) <= 160) && 
             (strlen($_POST['user']) > 0 && strlen($_POST['user']) <= 160) && 
             (strlen($_POST['birth']) > 0 && strlen($_POST['birth']) <= 160)){

            $name = trim($_POST['user']);
            $mail = trim($_POST['mail']);
            $birth = trim($_POST['birth']);

            $insert = "INSERT INTO USUARIO VALUES 
                       ('$name','$mail','$birth',0,0)";

            $result = mysqli_query($con,$insert);
            
            if($result){
                ?>
                    <h3>You have registered succesfully!!</h3>
                <?php
            }else{
                ?>
                    <h3>Error</h3>
                <?php
            }


        }else{
            ?>
                <h3>Please fill all the fields</h3>
            <?php
        }

    }

   

?>