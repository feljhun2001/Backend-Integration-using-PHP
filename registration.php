
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>Simple Login Form in PHP with Validation </title>
      <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
   </head>
   <body>
      <div class="container">
         <div class="row">
            <div class="col-lg-10">
               <div class="page-header">
                  <h2>Registration Form in PHP with Validation</h2>
               </div>
               <p>Please fill all fields in the form</p>
               <span class="text-danger"><?php if (isset($error_message)) echo $error_message; ?></span>
               <form action="register_user.php" method="post">
                  
                  <div class="form-group ">
                     <label>Name</label>
                     <input type="name" name="name" class="form-control" id="name" value="" maxlength="30" required="">
                     <span class="text-danger">
                  </div>
                  <div class="form-group ">
                     <label>Mobile</label>
                     <input type="mobile" name="mobile" class="form-control" id="mobile" value="" maxlength="30" required="">
                     <span class="text-danger">
                  </div>
                   <div class="form-group ">
                     <label>Email</label>
                     <input type="email" name="email" class="form-control" id="email" value="" maxlength="30" required="">
                     <span class="text-danger">
                  </div>
                  <div class="form-group">
                     <label>Password</label>
                     <input type="password" name="password" class="form-control" id="password" value="" maxlength="8" required="">
                     <span class="text-danger">
                  </div>
                  <input type="submit" class="btn btn-primary" name="login" value="submit">
                  
               </form>
            </div>
         </div>
      </div>
   </body>
</html>