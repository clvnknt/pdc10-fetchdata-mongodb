<?php
include "vendor/autoload.php";
$client = new MongoDB\Client("mongodb://localhost:27017");
$collection = $client->local->students;
$result = $collection->find();
//foreach ($result as $student) {
    //var_dump($student);
//}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Student Records</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body>
<div class="container-fluid p-3 mb-2">
    <h1 class="display-5">Student Records from MongoDB</h1>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>_id</th>
                    <th>Student ID</th>
                    <th>Name</th>						
                    <th>Birthdate</th>
                    <th>Address</th>
                    <th>Program</th>
                    <th>Contact Number</th>
                    <th>Emergency Contact</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            foreach ($result as $student){
                ?>
                <tr class="table-active">
                    <th scope = "row"><?php echo $student['_id']?></th>
                    <td><?php echo $student['studentId']?></td>
                    <td><?php echo $student['firstName']?> <?php echo $student['lastName']?></td>
                    <td><?php echo $student['birthdate']?></td>
                    <td><?php echo $student['address']?></td>
                    <td><?php echo $student['program']?></td>
                    <td><?php echo $student['contactNumber']?></td>
                    <td><?php echo $student['emergencyContact']?></td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
</body>
</html>