<!-- code for connecting to the server -->
<?php
            $servername = "localhost"; //keep it as localhost
            $username = "mj18074"; //your school username
            $password = "rSKl37ks5ERWl3"; //your PHPMyAdmin PW that has been emailed out
            $dbname = "mj18074_waihiMotors"; //The DB name you are using
            $conn = mysqli_connect($servername, $username, $password, $dbname);

            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            try {
                $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                // Set error mode to exception for easier debugging
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Connection failed: " . $e->getMessage());
            }

        ?>