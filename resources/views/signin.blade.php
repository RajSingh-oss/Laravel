<!doctype html>
<html lang="en">

<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <style>
      .mainbox {
            width: 70%;
            margin: auto;
      }
      </style>
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

      <title>Sign in</title>
</head>

<body>
      <div class="mainbox">

            <h1>Sign in</h1>
            <form method="post" action="{{url('/')}}/Signin">
                  @csrf
                  <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                  </div>
                  <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="passwd" class="form-control" id="exampleInputPassword1">
                  </div>
                  <div class="mb-3 form-check">
                        <input name="RemMe" type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Remember me</label>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
            </form>
      </div>
      
      <!-- Footer -->
      <footer class="text-center text-lg-start bg-light text-muted">
            <!-- Section: Social media -->
            <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
                  <!-- Left -->
                  <div class="me-5 d-none d-lg-block">
                        <span>Get connected with us on social networks:</span>
                  </div>
                  <!-- Left -->

                  <!-- Right -->
                  <div>
                        <a href="" class="me-4 text-reset">
                              <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="" class="me-4 text-reset">
                              <i class="fab fa-twitter"></i>
                        </a>
                        <a href="" class="me-4 text-reset">
                              <i class="fab fa-google"></i>
                        </a>
                        <a href="" class="me-4 text-reset">
                              <i class="fab fa-instagram"></i>
                        </a>
                        <a href="" class="me-4 text-reset">
                              <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="" class="me-4 text-reset">
                              <i class="fab fa-github"></i>
                        </a>
                  </div>
                  <!-- Right -->
            </section>
            <!-- Section: Social media -->

            <!-- Section: Links  -->
            <section class="">
                  <div class="container text-center text-md-start mt-5">
                        <!-- Grid row -->
                        <div class="row mt-3">
                              <!-- Grid column -->
                              <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                                    <!-- Content -->
                                    <h6 class="text-uppercase fw-bold mb-4">
                                          <i class="fas fa-gem me-3"></i>Note taking app
                                    </h6>
                                    <p class="fs-5">this is a dummy project website written in php Laravel as backend and front end using
                  bootstrap hope you like this project and any one can ues it. <br><b> - <a target="_blank"
                              href="https://github.com/RajSingh-oss">RajSingh</a></b> Thank you
                                    </p>
                              </div>
                              <!-- Grid column -->

                              <!-- Grid column -->
                              <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                                    <!-- Links -->
                                    <h6 class="text-uppercase fw-bold mb-4">
                                          Products
                                    </h6>
                                    <p>
                                          <a href="#!" class="text-reset">This note app</a>
                                    </p>
                                    <p>
                                          <a href="https://tendimension.in" target="_blank" class="text-reset">ten
                                                dimension.in</a>
                                    </p>
                                    <p>
                                          <a href="https://www.instagram.com/rahul_singh_61/" class="text-reset">Dev
                                                rahul_singh_61</a>
                                    </p>
                                    <p>
                                          <a href="https://www.facebook.com/TechandCoding/" class="text-reset">Tech and
                                                Coding</a>
                                    </p>
                              </div>
                              <!-- Grid column -->

                              <!-- Grid column -->
                              <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                                    <!-- Links -->
                                    <h6 class="text-uppercase fw-bold mb-4">
                                          Useful links
                                    </h6>
                                    <p>
                                          <a href="#!" class="text-reset">Pricing</a>
                                    </p>
                                    <p>
                                          <a href="#!" class="text-reset">Settings</a>
                                    </p>
                                    <p>
                                          <a href="#!" class="text-reset">Orders</a>
                                    </p>
                                    <p>
                                          <a href="#!" class="text-reset">Help</a>
                                    </p>
                              </div>
                              <!-- Grid column -->

                              <!-- Grid column -->
                              <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                                    <!-- Links -->
                                    <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                                    <!-- <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p> -->
                                    <p>
                                          <i class="fas fa-envelope me-3"></i>
                                          rahul_singh_61
                                    </p>
                                    <p>
                                          <a href="https://www.instagram.com/rahul_singh_61/" class="text-reset">Dev
                                                rahul_singh_61</a>
                                    </p>
                                    <!-- <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p> -->
                              </div>
                              <!-- Grid column -->
                        </div>
                        <!-- Grid row -->
                  </div>
            </section>
            <!-- Section: Links  -->

            <!-- Copyright -->
            <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
                  © 2021 Copyright:
                  <a class="text-reset fw-bold" href="https://tendimension.in">tendimension.in</a>
            </div>
            <!-- Copyright -->
      </footer>
      <!-- Footer -->
      <!-- Optional JavaScript; choose one of the two! -->

      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
      </script>

      <!-- Option 2: Separate Popper and Bootstrap JS -->
      <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>