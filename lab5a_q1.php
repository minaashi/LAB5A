<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
</head>
<body>
    <?php 
        $name = "Nursyahmina Binti Mosdy";
        $matricNumber = "AI220100";
        $course = "Information Security Science Computer";
        $yearOfStudy = "Year 3";
        $address = "Blok D-01-05 Pangsapuri Sri Intan";
    ?>

    <table border="1">
        <tr><td>Name</td><td><?php echo $name; ?></td></tr>
        <tr><td>Matric Number</td><td><?php echo $matricNumber; ?></td></tr>
        <tr><td>Course</td><td><?php echo $course; ?></td></tr>
        <tr><td>Year of Study</td><td><?php echo $yearOfStudy; ?></td></tr>
        <tr><td>Address</td><td><?php echo $address; ?></td></tr>
    </table>
</body>
</html>
