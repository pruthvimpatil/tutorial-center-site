<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<style>
.abc{
    
    background-image:url('headimage1.jpg');
}
form{
    border:solid 1px black;
    padding:10px;
    position:absolute;
    top:150px;
    left:340px;
    


}
.navibar{
    background-color:#ac7339;
    
    
}



</style>
<script>
         function validation()
         {
             var id=document.f1.review.value;
             
             if(id.length=="")
             {
                 alert("Review cannot be empty");
                 return false;
             }
             

         }

        


</script>

  </head>
<body>
<div class="head1">
        
        <h1 style="text-align:center;">EDUSITE TUTORIALS</h1>
    </div>
    <div class="navibar">
    <ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link active" style="color:black;"href="homepage.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:black;"href="about.html">About</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:black;"href="courses.php">Courses</a>
  </li>
  <div class="contactus">
  <li class="nav-item">
    <a class="nav-link" style="color:black;"href="contact.html">Contact Us</a>
  </li>
  </div>
  <div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" style="background-color:black;color:white;"type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Reviews
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <a class="dropdown-item" href="sreview.php">Student Reviews</a>
      <a class="dropdown-item" href="parentreview.php">Parents Reviews</a>
       
    </div>
  </div>
  
  <div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" style="background-color:black;color:white;"type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      ADMIN SIGN IN
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <a class="dropdown-item" href="alogin.php">Update courses</a>
       
    </div>
  </div>
</ul>
    </div>

  
    
    <img src="lib.jpg" width="1350px">
           <form method="POST" action="cmt1.php" onsubmit="return validation()" name="f1"style="background-color:white;">

                          <img src="bg.jpg">
                          <br>
                          <br>
                          <lable>ADD YOUR REVIEW:</lable>
               <div>
                   <textarea name="comment" rows="4" cols="90"></textarea>
               </div>
 
                <div>
                   <button type="submit" style="background-color:blue;color:white;">Submit</button>
                </div>
           </form>
        


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>