<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Edit Record</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="id" />
        </div>
        <input class="submit" type="submit" name="showbtn" value="Show" />
    </form>
<?php
    if (isset($_POST['showbtn'])) 
    {
        require "deep.php";

        $data_id = $_POST['id'];
        $sql = "SELECT * FROM data WHERE id = '$data_id'"; 
        $result = $conn->query($sql) or die("Query Unseccssful");

        if(mysqli_num_rows($result) > 0 ) 
         {

     while ($row =$result->fetch_array()) 
     {
?>
    <form class="post-form" action="updatedata.php" method="post">
        <div class="form-group">
            <label for="">Name</label>
            <input type="hidden" name="id"  value="<?php echo $row['id'];?>" />
            <input type="text" name="name" value="<?php echo $row['name'];?>" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="adsress" value="<?php echo $row['adsress'];?>" />
        </div>
        <div class="form-group">
        <label>Class</label>
    <?php $sql1 = "SELECT * FROM class_id";

          $result1 = mysqli_query($conn,$sql1) or die("Query Unseccssful");

if(mysqli_num_rows($result1) > 0 ) {
  echo ' <select name="class">';

  while($row1 = $result1->fetch_array()) 
  {
    if ($row['class_id'] == $row1['id']) 
    {
     $select = "selected";
    }else 
    {
     $select = "";
        
    }
 echo "<option {$select} value='{$row1['id']}'>{$row1['class']}</option>";
  } 
  echo '</select>';
}?>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="phone" value="<?php echo $row['phone'];?>" />
        </div>
    <input class="submit" type="submit" value="Update"  />
    </form>
<?php  
} 
    } 
        }
?>
</div>
</div>
</body>
</html>