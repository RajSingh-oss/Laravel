<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <title>Note Heading</title>
</head>

<body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                  <a class="navbar-brand" href="./about/App">Note App</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                              <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="../home">Profile</a>
                              </li>
                              <li class="nav-item">
                                    <a class="nav-link" href="./about/Use">Use</a>
                              </li>
                              <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                          data-bs-toggle="dropdown" aria-expanded="false">
                                          Option
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                          <li><a class="dropdown-item" href="#notes">Notes</a></li>
                                          <li><a class="dropdown-item" href="#newnote">Add new note</a></li>
                                          <li>
                                                <hr class="dropdown-divider">
                                          </li>
                                          <li><a class="dropdown-item" href="../logout">Sign out</a></li>
                                    </ul>
                              </li>
                              <li class="nav-item">
                                    <a class="nav-link" href="../logout" tabindex="-1" aria-disabled="true">Log out</a>
                              </li>
                        </ul>
                        <form class="d-flex">
                              <input class="form-control me-2" type="search" placeholder="Search in note"
                                    aria-label="Search">
                              <button class="btn btn-outline-success btn-light" type="submit">Search</button>
                        </form>
                  </div>
            </div>
      </nav>
      <div class="container my-3">
            <h1>Note id is -> {{$note_id}}</h1>
            <h2>Name is {{$name}}</h2>

            <div class="form-floating">
                  <textarea class="form-control" style="height:500px;" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 900px">@for ($i = 0; $i <= 10; $i++)
                        The current value is {{ $i }}
                        @endfor
                  </textarea>
                  <label for="floatingTextarea2">{{$note_id}}</label>
            </div><br>
            <div>
                  <button type="button" class="btn btn-secondary">Mark as working</button>
                  <button type="button" id="savemodal" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#saveModal">Save</button>
            </div>
      </div>
      <!-- Button trigger modal -->
      <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Launch demo modal
      </button> -->

      <!-- Modal -->
      <div class="modal fade " id="saveModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                  <div class="modal-content">
                        <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Save note</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                              ...
                        </div>
                        <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                  </div>
            </div>
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
                                    <p>
                                          Here you can use rows and columns to organize your footer content. Lorem ipsum
                                          dolor sit amet, consectetur adipisicing elit.
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
      <script>
      var myModal = document.getElementById('myModal')
      var myInput = document.getElementById('myInput')

      myModal.addEventListener('shown.bs.modal', function() {
            myInput.focus()
      })
      </script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
      </script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
      </script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
      </script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
      </script>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</body>

</html>