
    <?php
        // $name="Sandhya";
        // $password="Puskar123";
        // $hash=password_hash($password,PASSWORD_DEFAULT);

        // include("database.php");

        // $sql="INSERT INTO first (username, password) 
        //        VALUES ('$name', '$hash')";

        // try{
        //     mysqli_query($conn, $sql);
        //     echo "\nData inserted successfully";
        // }

        // catch(mysqli_sql_exception $e){
        //     echo "Could not insert data";
        // }

        // mysqli_close($conn);
        // $sql="SELECT * FROM `first`";
        // $result=mysqli_query($conn,$sql);

        // if(mysqli_num_rows($result)> 0){  
        //     // $row=mysqli_fetch_array($result);
        //     // echo $row["ID"]."<br>";
        //     // echo $row["username"]."<br>";
        //     // echo $row["time"]."<br>";
        //     while($row=mysqli_fetch_array($result)){
        //         echo $row["ID"]."<br>";
        //         echo $row["username"]."<br>";
        //         echo $row["time"]."<br>";
        //     }
        // }
        $db_server="localhost";
        $db_user= "root";
        $db_pass= "";
        $db_name= "buyer";   
        $conn="";
        
    try {
        $conn=mysqli_connect($db_server,
                             $db_user,
                             $db_pass,
                             $db_name);
    }
    catch (Exception $e) {
        echo "Connection failed";
    }

    if ($conn) {
        echo "You are connected\n";
    } 


    if($_SERVER["REQUEST_METHOD"]=="POST"){
            $name=filter_input(INPUT_POST,"name",FILTER_SANITIZE_SPECIAL_CHARS);
            $email=filter_input(INPUT_POST,"email",FILTER_SANITIZE_SPECIAL_CHARS);
            $password=filter_input(INPUT_POST,"password",FILTER_SANITIZE_SPECIAL_CHARS);
            $contact=filter_input(INPUT_POST,"contact",FILTER_SANITIZE_SPECIAL_CHARS);
            $college=filter_input(INPUT_POST,"university",FILTER_SANITIZE_SPECIAL_CHARS);
            $address=filter_input(INPUT_POST,"address",FILTER_SANITIZE_SPECIAL_CHARS);

            if(empty($username)||empty($password)){
                echo "Please fill all the entries";
            }

            else{
                $hash=password_hash($password,PASSWORD_DEFAULT);
                $sql="INSERT INTO customer_details(name,email,password,contact,college,address) 
                      VALUES ('$name', '$email','$hash','$contact','college','address')";
                mysqli_query($conn, $sql);
                echo "<script>
                    document.getElementById('result').innerHTML = 'You are registered successfully';
                      </script>";
                echo "You are registered successfully";
            }
        }

        mysqli_close($conn);

        //session= Super Global Variable used to store information on a user
        // to be used across multiple pages
        // A user is assigned a session id i.e. Login credentials
    ?> 

