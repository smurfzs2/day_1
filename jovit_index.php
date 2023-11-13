<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA TABLE</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="addButton">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
           Add Data
        </button>
    </div>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Add your modal content here -->
                <form>
  <div class="form-group">
    <label for="exampleInputEmail1">First Name</label>
    <input type="text" class="form-control" placeholder="Enter first name">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Last Name</label>
    <input type="text" class="form-control" placeholder="Enter last name">
  </div>

  <div class="form-group">
    <label for="gender">Gender</label>
    <select class="form-control" id="gender">
      <option value="male">Male</option>
      <option value="female">Female</option>
    </select><form>
  <div class="form-group">
    <label for="exampleInputEmail1">First Name</label>
    <input type="text" class="form-control" placeholder="Enter first name">
  </div>

  <div class="form-group">
    <label for="">Last Name</label>
    <input type="text" class="form-control" placeholder="Enter last name">
  </div>

  <div class="form-group">
    <label for="gender">Gender</label>
    <select class="form-control" id="gender">
      <option value="male">Male</option>
      <option value="female">Female</option>
    </select>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Address</label>
    <input type="password" class="form-control" placeholder="Enter address">
  </div>

  

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>


</form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- Add additional buttons or actions as needed -->
            </div>
        </div>
    </div>
</div>

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">FirstName</th>
      <th scope="col">LastName</th>
      <th scope="col">Gender</th>
      <th scope="col">Address</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>

    <?php
    
    $servername = "localhost";
    $username = "root";
    $password = "arktechdb";
    $dbname = "ojtDatabase";

    $conn = new mysqli($servername, $username, $password, $dbname);

    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    
    $sql = "SELECT * FROM tbl_jovit";
    $result = $conn->query($sql);

    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<th scope='row'>" . $row["id"] . "</th>";
            echo "<td>" . $row["firstName"] . "</td>";
            echo "<td>" . $row["lastName"] . "</td>";

            echo "<td>";
            $gender = $row["gender"];
            if ($gender == '1') {
                echo 'Male';
            } elseif ($gender == '2') {
                echo 'Female';
            } else {
                echo 'Others';
            }
            echo "</td>";

            echo "<td>" . $row["address"] . "</td>";

            // Adding buttons under the Actions column
            echo "<td>";
            echo "<button class='btn btn-primary mr-2'>DELETE</button>"; 
            echo "<button class='btn btn-secondary'>UPDATE</button>";
            echo "</td>";

            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='6'>No data found</td></tr>";
    }

    $conn->close();
    ?>

  </tbody>
</table>

    


</body>
</html>
