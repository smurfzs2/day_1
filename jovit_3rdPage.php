<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class = "bg">
    <h1 class="welcomeColor">Hey, Welcome!</h1><br>
    First Name: <?php echo $_POST["firstName"]; ?><br>
    Last Name: <?php echo $_POST["lastName"]; ?><br>
    Gender: 
    <?php 
        $gender = $_POST["gender"];
        if ($gender == '1') {
            echo 'Male';
        } elseif ($gender == '2') {
            echo 'Female';
        } else {
            echo 'Other';
        }
    ?><br>

    <label>Address: <?php echo $_POST["address"]; ?></label><br>

    Birthday: <?php echo $_POST["birthday"]; ?>

    </div>
</body>
</html>
