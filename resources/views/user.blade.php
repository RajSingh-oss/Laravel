<!doctype html>
<html lang="en">

<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <style>
      .mainbox {
            width: 70%;
            margin: auto;
      }
      </style>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <title>Wellcome {{ $name }}</title>
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
                              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                              <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                  </div>
            </div>
      </nav>
      <div class="container my-3">
            <h1>Wellcome to note taking app</h1>
            <p class="fs-1">Hello {{ $name }} ( "_" ) !</p>
            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                  <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                        <path
                              d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                  </symbol>
                  <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                        <path
                              d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                  </symbol>
                  <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                        <path
                              d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                  </symbol>
            </svg>

            <div class="alert alert-primary d-flex align-items-center alert-dismissible fade show" role="alert">
                  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
                        <use xlink:href="#info-fill" />
                  </svg>
                  <div>
                        Wellcome {{$name}}! Sign in success, Sign in at {{ date('Y-m-d') }} Loged.
                  </div>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <div class="alert alert-success d-flex align-items-center alert-dismissible fade show" role="alert">
                  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                        <use xlink:href="#check-circle-fill" />
                  </svg>
                  <div>
                        Your note is added succesfully.
                  </div>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <div class="alert alert-warning d-flex align-items-center alert-dismissible fade show" role="alert">
                  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:">
                        <use xlink:href="#exclamation-triangle-fill" />
                  </svg>
                  <div>
                        An example warning alert with an icon
                  </div>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert">
                  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                        <use xlink:href="#exclamation-triangle-fill" />
                  </svg>
                  <div>
                        An unkown error.
                  </div>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <div class="accordion" id="accordionPanelsStayOpenExample">
                  <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                              <button class="accordion-button collapsed bg-primary text-white" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree"
                                    aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                    <b>Add a new note</b>
                              </button>
                        </h2>
                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                              aria-labelledby="panelsStayOpen-headingThree">
                              <div class="accordion-body">
                                    <form id="newnote">
                                          <p class="fs-3">Add a new note.</p>
                                          <div class="input-group flex-nowrap">
                                                <span class="input-group-text" id="addon-wrapping">Heading</span>
                                                <input type="text" class="form-control" placeholder="Heading"
                                                      aria-label="Username" aria-describedby="addon-wrapping">
                                          </div><br>
                                          <div class="input-group">
                                                <span class="input-group-text">With textarea</span>
                                                <textarea class="form-control" aria-label="With textarea"></textarea>
                                          </div><br>
                                          <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">@</span>
                                                <input type="text" class="form-control" placeholder="Username"
                                                      aria-label="Username" aria-describedby="basic-addon1">
                                          </div>
                                          <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                              </div>
                        </div>
                  </div>
            </div>
            <br>
            <table class="table table-striped table-hover" id="notes">
                  <thead>
                        <tr>
                              <th scope="col">#</th>
                              <th scope="col">Heading</th>
                              <th scope="col">Note</th>
                              <th scope="col">Date</th>
                              <th scope="col">Option</th>
                        </tr>
                  </thead>
                  <tbody>
                        <tr>
                              <th scope="row">1</th>
                              <td>hello</td>
                              <td>This is a note</td>
                              <td>10-02-2022</td>
                              <td>
                              <div class="nav-item dropdown">
                                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Option
                                          </a>
                                          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                      <li><a class="dropdown-item" href="./{{$name}}/heading_id">Open</a></li>
                                                <li><a class="dropdown-item" href="#newnote">Delete</a></li>
                                                <li>
                                                      <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="../logout">Done</a></li>
                                                <li><a class="dropdown-item" href="../logout">Working</a></li>
                                          </ul>
                                    </div>
                              </td>
                        </tr>
                        <tr>
                              <th scope="row">2</th>
                              <td>Jacob</td>
                              <td>Thornton</td>
                              <td>10-02-2022</td>
                              <td>
                              <div class="nav-item dropdown">
                                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Option
                                          </a>
                                          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <li><a class="dropdown-item" href="#notes">Edit</a></li>
                                                <li><a class="dropdown-item" href="#newnote">Delete</a></li>
                                                <li>
                                                      <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="../logout">Done</a></li>
                                                <li><a class="dropdown-item" href="../logout">Working</a></li>
                                          </ul>
                                    </div>
                              </td>
                        </tr>
                        <tr>
                              <th scope="row">3</th>
                              <td colspan="2">Larry the Bird</td>
                              <td>10-02-2022</td>
                              <td>
                                    <div class="nav-item dropdown">
                                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Option
                                          </a>
                                          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <li><a class="dropdown-item" href="#notes">Edit</a></li>
                                                <li><a class="dropdown-item" href="#newnote">Delete</a></li>
                                                <li>
                                                      <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="../logout">Done</a></li>
                                                <li><a class="dropdown-item" href="../logout">Working</a></li>
                                          </ul>
                                    </div>
                              </td>
                        </tr>
                        <tr>
                              <th scope="row">4</th>
                              <td>Larry the Bird</td>
                              <td>Larry the Bird</td>
                              <td>10-02-2022</td>
                              <td>
                              <div class="nav-item dropdown">
                                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Option
                                          </a>
                                          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <li><a class="dropdown-item" href="#notes">Edit</a></li>
                                                <li><a class="dropdown-item" href="#newnote">Delete</a></li>
                                                <li>
                                                      <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="../logout">Done</a></li>
                                                <li><a class="dropdown-item" href="../logout">Working</a></li>
                                          </ul>
                                    </div>
                              </td>
                        </tr>
                        <tr>
                              <th scope="row">5</th>
                              <td>Larry the Bird</td>
                              <td colspan="2">10-02-2022</td>
                              <td>
                              <div class="nav-item dropdown">
                                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Option
                                          </a>
                                          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <li><a class="dropdown-item" href="#notes">Edit</a></li>
                                                <li><a class="dropdown-item" href="#newnote">Delete</a></li>
                                                <li>
                                                      <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="../logout">Done</a></li>
                                                <li><a class="dropdown-item" href="../logout">Working</a></li>
                                          </ul>
                                    </div>
                              </td>
                        </tr>
                  </tbody>
            </table>
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