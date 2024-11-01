
<?php require_once 'core/dbconfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taekwondo Gym Management System</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Welcome To Taekwondo Gym Management System.</h1>
    <form action="core/handleforms.php" method="POST">
        <p>
            <label for="Name">Name</label> 
            <input type="text" name="uName" required>
        </p>
        <p>
            <label for="Qualification">Qualification</label> 
            <input type="text" name="Qualification" required>
        </p>
        <p>
            <label for="Experience">Experience</label> 
            <input type="text" name="Experience" required>
        </p>
        <p>
            <label for="ContactInfo">Contact Info</label> 
            <input type="text" name="ContactInfo" required>
            <input type="submit" name="insertInstructorBtn">
        </p>
    </form>

    <?php $getAllInstructors = getAllInstructors($pdo); ?>
    <?php foreach ($getAllInstructors as $row) { ?>
    <div class="container" style="border-style: solid; width: 50%; height: 300px; margin-top: 20px;">
        <h3>Name: <?php echo htmlspecialchars($row['uName']); ?></h3>
        <h3>Qualification: <?php echo htmlspecialchars($row['Qualification']); ?></h3>
        <h3>Experience: <?php echo htmlspecialchars($row['Experience']); ?></h3>
        <h3>Contact Info: <?php echo htmlspecialchars($row['ContactInfo']); ?></h3>
        

        <div class="editAndDelete" style="float: right; margin-right: 20px;">
            <a href="viewprojects.php?InstructorId=<?php echo $row['InstructorId']; ?>">View Classes</a>
            <a href="editinstructor.php?InstructorId=<?php echo $row['InstructorId']; ?>">Edit</a>
            <a href="deleteinstructor.php?InstructorId=<?php echo $row['InstructorId']; ?>">Delete</a>
        </div>
    </div> 
    <?php } ?>
</body>
</html>
