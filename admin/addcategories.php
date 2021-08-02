<?php include('inc/header.inc.php'); ?>
<?php  

if(isset($_POST['submit'])){
  
  $categoryname = $_POST['category'];
  $status = $_POST['status'];
  $pagename = $_POST['pagename'];
  $insert = " INSERT INTO `categories`(`categories`, `status`, `page`) VALUES ('$categoryname','$status','$pagename') ";
  $runinsert = mysqli_query($conn,$insert);
  if(!$runinsert){
     ?>
    <script>
        alert("Something Went Wrong!!");
    </script>
<?php
}else{
  
  }
}


?>



<div class="container-fluid p-5">
<form method="post" action="">
  <div class="form-group">
    <label for="categoryFormControlInput1">Category Name</label>
    <input name="category" type="text" class="form-control" id="categoryFormControlInput1" placeholder="example:- Smartphones">
  </div>
  <div class="form-group">
    <label for="statusFormControlSelect1">Status select</label>
    <select name="status" class="form-control" id="statusFormControlSelect1">
      <option name="0" value="0">Deactive</option>
      <option name="1" value="1">Active</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Page Name</label>
    <textarea name="pagename" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="example:- smartphones.php"></textarea>
  </div>
  <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Add New Category</button>
</form>
</div>
<?php include('inc/footer.inc.php'); ?>