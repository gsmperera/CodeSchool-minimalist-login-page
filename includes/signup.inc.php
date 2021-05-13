<?php
    // Error handling

    if(isset($_POST['btnSignUp'])) {
        // Include database connection
        include 'dbh.inc.php';

        $uName = $_POST['uname'];
        $uEmail = $_POST['uemail'];
        $uPass = $_POST['upass'];

        // Check if inputs fields are empty
        if (empty($uName) || empty($uEmail) || empty($uPass)) {
            header("Location: ../index.php?signup=empty");
        } else {
            // Validate email using email validator
            if (!filter_var($uEmail, FILTER_VALIDATE_EMAIL)) {
                header("Location: ../index.php?signup=invalidemail");
            } else {
                // Avoid SQL injection using prepared statement
                $sql = "INSERT INTO user(username, email, password) VALUES(?, ?, ?)";

                // Create a prepared statement
                $stmt = mysqli_stmt_init($conn);

                // Prepare the prepared statement
                if(!mysqli_stmt_prepare($stmt, $sql)) {
                    echo "<p class='php phpsi>SQL statement failed!";
                } else {
                    // Bind parameters to the placeholders
                    mysqli_stmt_bind_param($stmt, "sss", $uName, $uEmail, $uPass);

                    // Run parameters inside the database
                    // Exception handling
                    try {
                        if (!mysqli_stmt_execute($stmt)) {
                            throw new Exception('Cannot run the sql query inside the database');
                        } else {
                            header("Location: ../index.php?signup=success");
                        }
                    }
                    catch(Exception $er) {
                        $err = $er->getMessage();
                        header("Location: ../index.php?signup=$err");
                    }
                }
            }
        }   
    }
?>