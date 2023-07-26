<?php
include_once 'db3.php';
include_once 'session.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once 'head.php'; ?>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet" />
    <style>
        /* Center the content vertically and horizontally */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;

            background-image: url('img/maintanence.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            margin: 0;
            padding: 0;

        }

        /* Style for the restricted container */
        .restricted-container {
            max-width: 400px;
            padding: 40px;
            text-align: center;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        /* Style for the restricted icon */
        .restricted-icon {
            font-size: 64px;
            color: #ff0000;
            margin-bottom: 20px;
        }

        /* Style for the restricted message */
        .restricted-message {
            font-size: 18px;
            color: #333333;
            margin-bottom: 20px;
        }

        /* Style for the back link */
        .back-link {
            color: #007bff;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="restricted-container">
        <h1 class="restricted-icon">🚫</h1>
        <p class="restricted-message">
            <?php if ($category == 'Client') {
                echo 'The page are restricted and not allowed by Administrator!';
            } else {
                echo 'This page is only for user usage only!';
            }


            ?>
        </p>

        <p><a href="home.php" class="back-link">Go back</a></p>
    </div>
</body>

</html>