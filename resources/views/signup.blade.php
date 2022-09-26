<!doctype html>
<html lang="en">

<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <title>SIgn up</title>
</head>

<body>
      <div class="container">
            <h1>Sign up!</h1>
            <form method="post" action="{{url('/')}}/user/" class="row g-3">
                  @csrf
                  <div class="row g-3">
                        <div class="col">
                              <input required type="text" name="name" id="name" class="form-control"
                                    placeholder="First name" aria-label="First name">
                        </div>
                        <div class="col">
                              <input type="text" required name="LastName" class="form-control" placeholder="Last name"
                                    aria-label="Last name">
                        </div>
                  </div>
                  <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-wrapping">@</span>
                        <input required name="ShowName" type="text" class="form-control" placeholder="Display username"
                              aria-label="Showname" aria-describedby="addon-wrapping">
                  </div>
                  <div class="form-floating mb-3">
                        <input required type="email" name="Email" class="form-control" id="floatingInput"
                              placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                  </div>
                  <div class="form-floating">
                        <input required type="password" name="Password" class="form-control" id="floatingPassword"
                              placeholder="Password">
                        <label for="floatingPassword">Password</label>
                  </div>
                  <div class="container">
                        <p>Select your gender</p>
                        <div class="flex-row">
                              <div class="form-check">
                                    <input class="form-check-input" type="radio" name="Gender" id="flexRadioDefault1"
                                          checked>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                          Male
                                    </label>
                              </div>
                              <div class="form-check">
                                    <input class="form-check-input" type="radio" name="Gender" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                          Female
                                    </label>
                              </div>
                              <div class="form-check">
                                    <input class="form-check-input" type="radio" name="Gender" id="flexRadioDefault3">
                                    <label class="form-check-label" for="flexRadioDefault3">
                                          Other
                                    </label>
                              </div>
                        </div>
                  </div>
                  <div class="col-md-4">
                        <label for="floatingdate" class="form-label">Date of birth</label>
                        <input type="date" name="DOB" class="form-control" id="floatingdate">
                  </div>
                  <div class="col-md-4">
                        <label for="inputState" class="form-label">Country</label>
                        <select id="inputState" name="Country" class="form-select">
                              <option value="AFG">Afghanistan</option>
                              <option value="ALA">Åland Islands</option>
                              <option value="ALB">Albania</option>
                              <option value="DZA">Algeria</option>
                              <option value="ASM">American Samoa</option>
                              <option value="AND">Andorra</option>
                              <option value="AGO">Angola</option>
                              <option value="AIA">Anguilla</option>
                              <option value="ATA">Antarctica</option>
                              <option value="ATG">Antigua and Barbuda</option>
                              <option value="ARG">Argentina</option>
                              <option value="ARM">Armenia</option>
                              <option value="ABW">Aruba</option>
                              <option value="AUS">Australia</option>
                              <option value="AUT">Austria</option>
                              <option value="AZE">Azerbaijan</option>
                              <option value="BHS">Bahamas</option>
                              <option value="BHR">Bahrain</option>
                              <option value="BGD">Bangladesh</option>
                              <option value="BRB">Barbados</option>
                              <option value="BLR">Belarus</option>
                              <option value="BEL">Belgium</option>
                              <option value="BLZ">Belize</option>
                              <option value="BEN">Benin</option>
                              <option value="BMU">Bermuda</option>
                              <option value="BTN">Bhutan</option>
                              <option value="BOL">Bolivia, Plurinational State of</option>
                              <option value="BES">Bonaire, Sint Eustatius and Saba</option>
                              <option value="BIH">Bosnia and Herzegovina</option>
                              <option value="BWA">Botswana</option>
                              <option value="BVT">Bouvet Island</option>
                              <option value="BRA">Brazil</option>
                              <option value="IOT">British Indian Ocean Territory</option>
                              <option value="BRN">Brunei Darussalam</option>
                              <option value="BGR">Bulgaria</option>
                              <option value="BFA">Burkina Faso</option>
                              <option value="BDI">Burundi</option>
                              <option value="KHM">Cambodia</option>
                              <option value="CMR">Cameroon</option>
                              <option value="CAN">Canada</option>
                              <option value="CPV">Cape Verde</option>
                              <option value="CYM">Cayman Islands</option>
                              <option value="CAF">Central African Republic</option>
                              <option value="TCD">Chad</option>
                              <option value="CHL">Chile</option>
                              <option value="CHN">China</option>
                              <option value="CXR">Christmas Island</option>
                              <option value="CCK">Cocos (Keeling) Islands</option>
                              <option value="COL">Colombia</option>
                              <option value="COM">Comoros</option>
                              <option value="COG">Congo</option>
                              <option value="COD">Congo, the Democratic Republic of the</option>
                              <option value="COK">Cook Islands</option>
                              <option value="CRI">Costa Rica</option>
                              <option value="CIV">Côte d'Ivoire</option>
                              <option value="HRV">Croatia</option>
                              <option value="CUB">Cuba</option>
                              <option value="CUW">Curaçao</option>
                              <option value="CYP">Cyprus</option>
                              <option value="CZE">Czech Republic</option>
                              <option value="DNK">Denmark</option>
                              <option value="DJI">Djibouti</option>
                              <option value="DMA">Dominica</option>
                              <option value="DOM">Dominican Republic</option>
                              <option value="ECU">Ecuador</option>
                              <option value="EGY">Egypt</option>
                              <option value="SLV">El Salvador</option>
                              <option value="GNQ">Equatorial Guinea</option>
                              <option value="ERI">Eritrea</option>
                              <option value="EST">Estonia</option>
                              <option value="ETH">Ethiopia</option>
                              <option value="FLK">Falkland Islands (Malvinas)</option>
                              <option value="FRO">Faroe Islands</option>
                              <option value="FJI">Fiji</option>
                              <option value="FIN">Finland</option>
                              <option value="FRA">France</option>
                              <option value="GUF">French Guiana</option>
                              <option value="PYF">French Polynesia</option>
                              <option value="ATF">French Southern Territories</option>
                              <option value="GAB">Gabon</option>
                              <option value="GMB">Gambia</option>
                              <option value="GEO">Georgia</option>
                              <option value="DEU">Germany</option>
                              <option value="GHA">Ghana</option>
                              <option value="GIB">Gibraltar</option>
                              <option value="GRC">Greece</option>
                              <option value="GRL">Greenland</option>
                              <option value="GRD">Grenada</option>
                              <option value="GLP">Guadeloupe</option>
                              <option value="GUM">Guam</option>
                              <option value="GTM">Guatemala</option>
                              <option value="GGY">Guernsey</option>
                              <option value="GIN">Guinea</option>
                              <option value="GNB">Guinea-Bissau</option>
                              <option value="GUY">Guyana</option>
                              <option value="HTI">Haiti</option>
                              <option value="HMD">Heard Island and McDonald Islands</option>
                              <option value="VAT">Holy See (Vatican City State)</option>
                              <option value="HND">Honduras</option>
                              <option value="HKG">Hong Kong</option>
                              <option value="HUN">Hungary</option>
                              <option value="ISL">Iceland</option>
                              <option value="IND">India</option>
                              <option value="IDN">Indonesia</option>
                              <option value="IRN">Iran, Islamic Republic of</option>
                              <option value="IRQ">Iraq</option>
                              <option value="IRL">Ireland</option>
                              <option value="IMN">Isle of Man</option>
                              <option value="ISR">Israel</option>
                              <option value="ITA">Italy</option>
                              <option value="JAM">Jamaica</option>
                              <option value="JPN">Japan</option>
                              <option value="JEY">Jersey</option>
                              <option value="JOR">Jordan</option>
                              <option value="KAZ">Kazakhstan</option>
                              <option value="KEN">Kenya</option>
                              <option value="KIR">Kiribati</option>
                              <option value="PRK">Korea, Democratic People's Republic of</option>
                              <option value="KOR">Korea, Republic of</option>
                              <option value="KWT">Kuwait</option>
                              <option value="KGZ">Kyrgyzstan</option>
                              <option value="LAO">Lao People's Democratic Republic</option>
                              <option value="LVA">Latvia</option>
                              <option value="LBN">Lebanon</option>
                              <option value="LSO">Lesotho</option>
                              <option value="LBR">Liberia</option>
                              <option value="LBY">Libya</option>
                              <option value="LIE">Liechtenstein</option>
                              <option value="LTU">Lithuania</option>
                              <option value="LUX">Luxembourg</option>
                              <option value="MAC">Macao</option>
                              <option value="MKD">Macedonia, the former Yugoslav Republic of</option>
                              <option value="MDG">Madagascar</option>
                              <option value="MWI">Malawi</option>
                              <option value="MYS">Malaysia</option>
                              <option value="MDV">Maldives</option>
                              <option value="MLI">Mali</option>
                              <option value="MLT">Malta</option>
                              <option value="MHL">Marshall Islands</option>
                              <option value="MTQ">Martinique</option>
                              <option value="MRT">Mauritania</option>
                              <option value="MUS">Mauritius</option>
                              <option value="MYT">Mayotte</option>
                              <option value="MEX">Mexico</option>
                              <option value="FSM">Micronesia, Federated States of</option>
                              <option value="MDA">Moldova, Republic of</option>
                              <option value="MCO">Monaco</option>
                              <option value="MNG">Mongolia</option>
                              <option value="MNE">Montenegro</option>
                              <option value="MSR">Montserrat</option>
                              <option value="MAR">Morocco</option>
                              <option value="MOZ">Mozambique</option>
                              <option value="MMR">Myanmar</option>
                              <option value="NAM">Namibia</option>
                              <option value="NRU">Nauru</option>
                              <option value="NPL">Nepal</option>
                              <option value="NLD">Netherlands</option>
                              <option value="NCL">New Caledonia</option>
                              <option value="NZL">New Zealand</option>
                              <option value="NIC">Nicaragua</option>
                              <option value="NER">Niger</option>
                              <option value="NGA">Nigeria</option>
                              <option value="NIU">Niue</option>
                              <option value="NFK">Norfolk Island</option>
                              <option value="MNP">Northern Mariana Islands</option>
                              <option value="NOR">Norway</option>
                              <option value="OMN">Oman</option>
                              <option value="PAK">Pakistan</option>
                              <option value="PLW">Palau</option>
                              <option value="PSE">Palestinian Territory, Occupied</option>
                              <option value="PAN">Panama</option>
                              <option value="PNG">Papua New Guinea</option>
                              <option value="PRY">Paraguay</option>
                              <option value="PER">Peru</option>
                              <option value="PHL">Philippines</option>
                              <option value="PCN">Pitcairn</option>
                              <option value="POL">Poland</option>
                              <option value="PRT">Portugal</option>
                              <option value="PRI">Puerto Rico</option>
                              <option value="QAT">Qatar</option>
                              <option value="REU">Réunion</option>
                              <option value="ROU">Romania</option>
                              <option value="RUS">Russian Federation</option>
                              <option value="RWA">Rwanda</option>
                              <option value="BLM">Saint Barthélemy</option>
                              <option value="SHN">Saint Helena, Ascension and Tristan da Cunha</option>
                              <option value="KNA">Saint Kitts and Nevis</option>
                              <option value="LCA">Saint Lucia</option>
                              <option value="MAF">Saint Martin (French part)</option>
                              <option value="SPM">Saint Pierre and Miquelon</option>
                              <option value="VCT">Saint Vincent and the Grenadines</option>
                              <option value="WSM">Samoa</option>
                              <option value="SMR">San Marino</option>
                              <option value="STP">Sao Tome and Principe</option>
                              <option value="SAU">Saudi Arabia</option>
                              <option value="SEN">Senegal</option>
                              <option value="SRB">Serbia</option>
                              <option value="SYC">Seychelles</option>
                              <option value="SLE">Sierra Leone</option>
                              <option value="SGP">Singapore</option>
                              <option value="SXM">Sint Maarten (Dutch part)</option>
                              <option value="SVK">Slovakia</option>
                              <option value="SVN">Slovenia</option>
                              <option value="SLB">Solomon Islands</option>
                              <option value="SOM">Somalia</option>
                              <option value="ZAF">South Africa</option>
                              <option value="SGS">South Georgia and the South Sandwich Islands</option>
                              <option value="SSD">South Sudan</option>
                              <option value="ESP">Spain</option>
                              <option value="LKA">Sri Lanka</option>
                              <option value="SDN">Sudan</option>
                              <option value="SUR">Suriname</option>
                              <option value="SJM">Svalbard and Jan Mayen</option>
                              <option value="SWZ">Swaziland</option>
                              <option value="SWE">Sweden</option>
                              <option value="CHE">Switzerland</option>
                              <option value="SYR">Syrian Arab Republic</option>
                              <option value="TWN">Taiwan, Province of China</option>
                              <option value="TJK">Tajikistan</option>
                              <option value="TZA">Tanzania, United Republic of</option>
                              <option value="THA">Thailand</option>
                              <option value="TLS">Timor-Leste</option>
                              <option value="TGO">Togo</option>
                              <option value="TKL">Tokelau</option>
                              <option value="TON">Tonga</option>
                              <option value="TTO">Trinidad and Tobago</option>
                              <option value="TUN">Tunisia</option>
                              <option value="TUR">Turkey</option>
                              <option value="TKM">Turkmenistan</option>
                              <option value="TCA">Turks and Caicos Islands</option>
                              <option value="TUV">Tuvalu</option>
                              <option value="UGA">Uganda</option>
                              <option value="UKR">Ukraine</option>
                              <option value="ARE">United Arab Emirates</option>
                              <option value="GBR">United Kingdom</option>
                              <option value="USA">United States</option>
                              <option value="UMI">United States Minor Outlying Islands</option>
                              <option value="URY">Uruguay</option>
                              <option value="UZB">Uzbekistan</option>
                              <option value="VUT">Vanuatu</option>
                              <option value="VEN">Venezuela, Bolivarian Republic of</option>
                              <option value="VNM">Viet Nam</option>
                              <option value="VGB">Virgin Islands, British</option>
                              <option value="VIR">Virgin Islands, U.S.</option>
                              <option value="WLF">Wallis and Futuna</option>
                              <option value="ESH">Western Sahara</option>
                              <option value="YEM">Yemen</option>
                              <option value="ZMB">Zambia</option>
                              <option value="ZWE">Zimbabwe</option>
                        </select>
                        </select>
                  </div>
                  <div class="col-12">
                        <button type="submit" class="btn btn-primary">Sign in</button>
                  </div>
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
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
      </script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
      </script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
      </script>
</body>

</html>