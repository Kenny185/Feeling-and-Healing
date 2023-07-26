<!DOCTYPE html>
<html>

<head>
    <title>Signing Up</title>
</head>

<body>
    <center>
        <?php

        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "SigningUpDB");

        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }       
        $Fname = $_REQUEST['Fname'];
        $Lname = $_REQUEST['Lname'];
        $DOB = $_REQUEST['DOB'];
        $email = $_REQUEST['email'];
        $phone = $_REQUEST['phone'];        
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        $password2 = $_REQUEST['password2'];

        // We are going to insert the data into our SignUP table
        $sql = "INSERT INTO SignUPTable VALUES ('$Fname','$Lname','$DOB','$email','$phone','$username','$password','$password2')";

        // Check if the query is successful
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";

            echo nl2br("\n$Fname\n $Lname\n $DOB\n $email\n $phone\n $username\n $password\n $password2");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>

</html>