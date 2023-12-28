<?php require "deep.php";?>
<?php include 'header.php';?>

<div id="main-content">
    <h2>All Records</h2>
    <?php

    $stem = "SELECT
`data`.phone,
`data`.adsress,
`data`.id,
`data`.`name`,
class_id.class
FROM
class_id
INNER JOIN `data` ON `data`.class_id = class_id.id";
$result = mysqli_query($conn,$stem) or die("Query Unseccssful");

if (mysqli_num_rows($result) > 0 ) {
    

    ?>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        <tbody>
            <?php
            while ($row =($result->fetch_array())) 
            { ?>
            <tr>  
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['adsress']; ?></td>
                <td><?php echo $row['class']; ?></td>
                <td><?php echo $row['phone']; ?></td>
                <td>
                    <a href='edit.php?id=<?php echo $row['id'];?>'>Edit</a>
                    <a href='delete-inline.php?id=<?php echo $row['id'];?>'>Delete</a>
                </td>
            </tr>
            <?php
        } ?>
        </tbody>
    </table>
<?php }else 
        {
            echo "No Result Found";
        } 
        $conn->close();
        ?>
</div>
</div>
</body>
</html>
