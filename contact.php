<?php include('include/header.inc.php'); ?>

<style>
    body{
background:#f1f2f7;
}
.container {
  background: #f7f7f7;
}

.form-box{
  max-width: 100%;
  margin: auto;
  padding: 50px;
  background: #ffffff;
  border: 10px solid #f2f2f2;
}


input, textarea {
  width: 100%;
}
</style>
<?php
if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email=$_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $insert = "INSERT INTO `contact_us`( `name`, `email`,`subject`, `msg`) VALUES('$name','$email','$subject','$message')";
        $run_insert = mysqli_query($conn,$insert);
}


?>
<div class="container-fluid p-5">
        <div class="form-box">
                <form method="post">
                        <div class="mb-3">
                                <label for="exampleInputName1" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" id="exampleInputName1" aria-describedby="nameHelp" required/>
                        </div>
                        <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required/>
                        </div>
                        <div class="mb-3">
                                <label for="exampleInputSubject1" class="form-label">Subject</label>
                                <input type="text" name="subject" class="form-control" id="exampleInputSubject1" aria-describedby="ubjectHelp" required/>
                         </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                            <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3" required/></textarea>
                        </div>
                            <button type="submit" name="submit" class="btn-block btn btn-primary">Submit</button>
                </form>
        </div>
</div>
<?php include('include/footer.inc.php'); ?>