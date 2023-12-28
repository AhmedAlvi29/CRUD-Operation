<?php include 'deep.php'; ?>
<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="savedata.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="adsress" />
        </div>
        <div class="form-group">
            <label>Class</label>
            <select name="class">
                <option value="" selected disabled>Select Class</option>
               <?php
                $stem = "SELECT * FROM class_id"; 
                $result = mysqli_query($conn,$stem) or die("Query Unseccssful");
                
                while($classRow = ($result->fetch_array()))
                {

               ?>
                <option value="<?php echo $classRow['id']; ?>"><?php echo $classRow['class']; ?></option>
                <?php
                } ?>
            </select>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="phone" />
        </div>
        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</div>
</body>
</html>
