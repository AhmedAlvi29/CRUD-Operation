<?php include 'header.php'; ?>


<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="id" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
    <?php
    if (isset($_POST['deletebtn'])) {
require "deep.php";
        
    
    $delet = $_POST['id'];
    $sql2 = "DELETE FROM data WHERE id = '$delet'";
    $result = $conn->query($sql2);

    header("Location: http://localhost/crud_html/index.php");
}

    ?>
</div>
</div>
</body>
</html>
