<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="jovit_3rdPage.php" method="POST">
    <h1>Welcome!</h1><br>
        
        <label>First Name:<?php echo $_GET["firstName"]; ?></label>
            <input type="hidden" name="firstName" value="<?php echo $_GET["firstName"]; ?>"> <br>

        <label>Last Name: <?php echo $_GET["lastName"]; ?></label>
            <input type="hidden" name="lastName" value="<?php echo $_GET["lastName"]; ?>"> <br>

        <label>Gender:
            <?php 
                $gender = $_GET["gender"];
               
                if ($gender == '1') {
                    echo ' Male';
                } elseif ($gender == '2') {
                    echo ' Female';
                } else {
                    echo ' Other';
                }
            ?>
        </label>
            <input type="hidden" name="gender" value="<?php echo $_GET["gender"]; ?>"> <br>
            
        <h1>Address</h1>
        <textarea id="address" name="address" rows="4" cols="50"></textarea>
            
        <h1>Birthday</h1>
            <label for="birthday">Birthday:</label>
            <input type="date" id="birthday" name="birthday">
            <input type="submit">
    </form>
</body>
</html>
