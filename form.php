<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
  <div class="container text-center">
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8 mt-5">
    <form action="back.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label fw-bolder" >Email address</label>
    <input type="email" name="em" placeholder="enter your email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label fw-bolder">Password</label>
    <input type="password" name="pswd" placeholder="enter strong password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input"  id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">confirm by submit</label>
  </div>
  <button type="submit"  name="sumt" class="btn btn-outline-success ">Submit</button>
</form>  
    </div>
    <div class="col-md-2"></div>
  </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>