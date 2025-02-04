<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UKLC UBT</title>
  <!--Bootstrap link-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!--CDN font-awesome link-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!--CSS link-->
  <!--javascript link-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    .nav-link:hover {
      color: #1f90bb;

      background-color: #1f90bb;

      transition: background-color 0.3s ease, color 0.3s ease;
    }

    .card:hover {
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);

    }

    footer {
      padding: 20px 0;
    }
  </style>
</head>

<body>


  <div class="navbar navbar-dark bg-dark text-white py-0 ">
    <div class="container mt-2 col-md-6">
      <p class="ml-2"><i class="fa-solid fa-phone"></i> NTC: 9862366336 </p>
      <p class="ml-2"><i class="fa-solid fa-phone"></i> Ncell: 9803427212 (7am to 5am)
      <p class="mr-2"><i class="fa-solid fa-caret-right"></i> UKLC UBT
    </div>
  </div>

  <div class="container">
    <div class="row">
      <!--korea flag-->
      <div class="col-md-4 text-center mb-3 mb-md-0 mt-3">
        <img src="Image/Flag_of_South_Korea.svg.png" alt="Image of South Korea" height="120px" width="150px">
        <p> <i class="fa-sharp fa-solid fa-location-dot"></i> Seoul, South Korea <br>
          <i class="fa-solid fa-calendar-days"></i> 9 February 2024, Friday <br>
          <i class="fa-solid fa-clock"></i> 5:16 PM <br>
          <i class="fa-solid fa-temperature-three-quarters"></i> 4.19C
        </p>
      </div>

      <!--logo-->
      <div class="col-md-4 text-center mb-3 mb-md-0 mt-3">
        <img src="Image/k.logo.png" alt="" height="120px" width="120px">
        <div class="container">
          <h4>USHUHAN KOREAN LANGUAGE</h4>
          Sallaghari, Bhaktapur, Nepal
          <br>Apps Play Store: UKLC UBT TEST
          <br>OFFICE CELLS NO. NTC: 9862366336
          <br>NCELL 9803427212
        </div>
      </div>

      <!--nepal-->
      <div class="col md-4 text-center mb-3 mb-md-0 text-center mt-3">
        <img src="Image/nepal_flag.gif" alt="Nepal Gif" width="120px" height="120px">
        <p> <i class="fa-sharp fa-solid fa-location-dot"></i>Kathmandu, Nepal <br>
          <i class="fa-solid fa-calendar-days"> २६ मार्च २०८०, शुक्रबार</i> <br>
          <i class="fa-solid fa-clock"></i>2:01 PM <br>
          <i class="fa-solid fa-temperature-three-quarters"></i> 18.12C
        </p>
      </div>
    </div>
  </div>
  <!--nav panel-->
  <div class="navbar navbar-dark bg-dark text-white py-0 ">
    <div class="container mt-1 mb-1 ">
      <nav class="nav nav-pills flex-column flex-sm-row">
        <a class="flex-sm-fill text-sm-center nav-link active" href="#">Home</a>
        <a class="flex-sm-fill text-sm-center nav-link text-white" href="#">About</a>
        <a class="flex-sm-fill text-sm-center nav-link text-white" href="#">News</a>
        <a class="flex-sm-fill text-sm-center nav-link text-white" href="#">Books</a>
        <a class="flex-sm-fill text-sm-center nav-link text-white" href="#">Photos</a>
        <a class="flex-sm-fill text-sm-center nav-link text-white" href="#">Video</a>
        <!--modals trigger-->
        <a class="flex-sm-fill text-sm-center nav-link text-white" href="#" data-bs-toggle="modal"
          data-bs-target="#loginModal">Login</a>
        <a class="flex-sm-fill text-sm-center nav-link text-white active" href="#">Download</a>
      </nav>
    </div>
  </div>

  <!--modals-->
  <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="loginModalLabel">Login</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS and dependencies -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>

  <!--marquee-->
  <div class="navbar navbar-dark bg-secondary text-white ">
    <div class="container mt-1 mb-1" style="height:20px">
      <nav class="nav nav-pills flex-column flex-sm-row">
        <marquee onmouseover="this.stop();" onmouseout="this.start();">
          <a href="#" class="text-decoration-none text-white"> सुदूरपश्चिम प्रदेश अनुसन्धान तथा प्रशिक्षण प्रतिष्ठान
            अन्र्तगत स्थानीय तहहरुको क्षमता विकास योजनाको प्राविधिक तथा आर्थिक प्रस्तावनाको लागि कार्यक्षेत्रगत शर्त ToR
            तथा RFP </a>
          <a href="#" class="text-decoration-none text-white"> विकास साझेदार निकायहरु सँगको कार्यशाला बैठक सम्बन्धि
            सूचना</a>
          <a href="#" class="text-decoration-none text-white"> सुदूरपश्चिम प्रदेश अनुसन्धान तथा प्रशिक्षण प्रतिष्ठान
            अन्र्तगत क्षमता विकास योजनाको
            संक्षिप्त सूचि प्रकाशित गरिएको सूचना</a>
          <a href="#" class="text-decoration-none text-white">प्रदेश अनुसन्धान तथा प्रशिक्षण प्रतिष्ठान परिषदको तेश्रो
            बैठक सम्पन्न</a>
        </marquee>
    </div>
  </div>
  </div>

  <div class="container">
    <div class="row">
      <!-- Upper Carousel Column -->
      <div class="col-md-7 mt-4">
        <div id="upper-carousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="Image/hq720.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="Image/maxresdefault.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
              </div>
            </div>

            <div class="carousel-item">
              <img src="Image/maxresdefault.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
              </div>
            </div>

          </div>
          <!-- Carousel Controls -->
          <button class="carousel-control-prev" type="button" data-bs-target="#upper-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#upper-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>

      <!-- Login Page Column -->
      <div class="col-md-5 mt-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Login</h5>
            <form>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--latest news-->
  <div class="row justify-content-evenly">
    <div class="col-6 p-5">
      <ol class="list-group list-group-numbered mt-5">
        <button type="button" class="list-group-item list-group-item-action p-2 text-center active" aria-current="true">
          Latest News
        </button>
        <li class="list-group-item d-flex justify-content-between align-items-start">
          <div class="ms-2 me-auto">
            <div class="fw-bold">एक महिनामा नेपाल भित्रिने रेमिट्यान्सले राख्यो कीर्तिमान, २६ प्रतिशतले वृद्धि</div>
            १ भदौ, काठमाडौं । चालु आर्थिक वर्षको पहिलो महिनामै
          </div>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-start">
          <div class="ms-2 me-auto">
            <div class="fw-bold">इपिएस कोरिया शाखाले खुलायो भाषा परीक्षा,क–कसले आवेदन दिन पाउँछन्</div>
            काठमाण्डु, १४ साउन
          </div>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-start">
          <div class="ms-2 me-auto">
            <div class="fw-bold">दक्षिण कोरियामा आगामी सेक्टेम्बर देखि लागु हुने कार्यस्थल परिवर्तन सम्बन्धि नयाँ नियम
              पूर्</div>
            किशन गौतम ,दक्षिण कोरिया
          </div>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-start">
          <div class="ms-2 me-auto">
            <div class="fw-bold">२०२३ मा २२ हजार नेपाली कामदार दक्षिण कोरिया पठाउने</div>
            १८ फाल्गुन २०७९, बिहीबार
          </div>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-start">
          <div class="ms-2 me-auto">
            <div class="fw-bold">रोजगार अनुमति प्रणाली (ईपीएस)मार्फत प्रत्येक महिना दुई हजार नेपाली दक्षिण कोरिया जाने
              भएका छन् ।</div>
            १८ फाल्गुन २०७९, बिहीबार
          </div>
        </li>
      </ol>
    </div>

    <!--Our Teams outer box-->
    <div class="col-5">
      <div class="text-center mt-3">
        <button type="button" class="btn btn-success">OUR TEAMS</button>
        <div class="container mt-2">
          <div class="row justify-content-center">
            <div class="col-md-10">
              <div class="border p-0">
                <!-- Content goes here -->
                <div class="row justify-content-evenly">

                  <!--one member box-->
                  <div class="col-6">
                    <div class="container">
                      <div class="row justify-content-center mt-2">
                        <div class="col-md-10">
                          <div class="border p-0" style="height: 400px;">
                            <!-- Content goes here -->
                            <img src="291915557_133619732681855_335722224504698727_n.jpg" class="d-block img-fluid"
                              alt="">
                            <h5>Mr. Milan Dhakal </h5>
                            <p>Instructor: </p>
                            <p>URBAN SPACE EDUCATION</p> <br>
                            <p>Birtamode, Jhapa, Nepal</p>
                            <p><i class="fa-solid fa-phone"></i>9862366336 </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!--2 member-->
                  <div class="col-6">
                    <div class="container">
                      <div class="row justify-content-center mt-2">
                        <div class="col-md-10">
                          <div class="border p-0" style="height: 400px;">
                            <!-- Content goes here -->
                            <img src="291915557_133619732681855_335722224504698727_n.jpg" class="d-block img-fluid"
                              alt="">
                            <h5>Mr. Milan Dhakal </h5>
                            <p>Instructor: </p>
                            <p>URBAN SPACE EDUCATION</p> <br>
                            <p>Birtamode, Jhapa, Nepal</p>
                            <p><i class="fa-solid fa-phone"></i>9862366336 </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <p></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--reading materials-->
  <div class="container">
    <div class="text-center mt-4">
      <button type="button" class="btn btn-success">READING MATERIALS</button>
    </div>
    <div class="row mt-4 justify-content-center">

      <!--1 card-->
      <div class="col-md-3 mb-3">
        <div class="card">
          <div class="card-body text-center p-0">
            <button type="button" class="btn btn-danger mb-2 w-100">Free Trials</button>
            <img src="Image/free-trial.png" alt="" class="d-block mx-auto img-fluid " width="120" height="120">
          </div>
        </div>
      </div>

      <!--2 card-->
      <div class="col-md-3 mb-3">
        <div class="card">
          <div class="card-body text-center p-0">
            <button type="button" class="btn btn-danger mb-2 w-100">Books</button>
            <img src="Image/books.png" alt="" class="d-block mx-auto img-fluid " width="120" height="120">
          </div>
        </div>
      </div>

      <!--3 card-->
      <div class="col-md-3 mb-3">
        <div class="card">
          <div class="card-body text-center p-0">
            <button type="button" class="btn btn-danger mb-2 w-100">UBT/CBT Test Exam</button>
            <img src="Image/Flag_of_South_Korea.svg.png" alt="" class="d-block mx-auto img-fluid " width="180"
              height="180">
          </div>
        </div>
      </div>

      <!--4 card-->
      <div class="col-md-3 mb-3">
        <div class="card">
          <div class="card-body text-center p-0">
            <button type="button" class="btn btn-danger mb-2 w-100">Model Questions</button>
            <img src="Image/free-trial.png" alt="" class="d-block mx-auto img-fluid " width="120" height="120">
          </div>
        </div>
      </div>

      <!--2 column-->

      <div class="container">
        <div class="row mt-4 justify-content-center">

          <!--1 card-->
          <div class="col-md-3 mb-3">
            <div class="card">
              <div class="card-body text-center p-0">
                <button type="button" class="btn btn-danger mb-2 w-100">Upcoming Events</button>
                <img src="Image/calendar.png" alt="" class="d-block mx-auto img-fluid " width="120" height="120">
              </div>
            </div>
          </div>

          <!--2 card-->
          <div class="col-md-3 mb-3">
            <div class="card">
              <div class="card-body text-center p-0">
                <button type="button" class="btn btn-danger mb-2 w-100">Terms and Condition</button>
                <img src="Image/accept.png" alt="" class="d-block mx-auto img-fluid " width="120" height="120">
              </div>
            </div>
          </div>

          <!--3 card-->
          <div class="col-md-3 mb-3">
            <div class="card">
              <div class="card-body text-center p-0">
                <button type="button" class="btn btn-danger mb-2 w-100">Team</button>
                <img src="Image/group.png" alt="" class="d-block mx-auto img-fluid " width="120" height="120">
              </div>
            </div>
          </div>

          <!--4 card-->
          <div class="col-md-3 mb-3">
            <div class="card">
              <div class="card-body text-center p-0">
                <button type="button" class="btn btn-danger mb-2 w-100">About Us</button>
                <img src="Image/information-button.png" alt="" class="d-block mx-auto img-fluid " width="120"
                  height="120">
              </div>
            </div>
          </div>


          <div class="col-4">
            <div class="text-center">
              <button type="button" class="btn btn-success mt-3 mb-2">Latest Photos</button>
            </div>
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner" style="height: 400px;">
                <div class="carousel-item active">
                  <img src="Image/RAMESH TAMANG.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="Image/SAMBHU RAI.jpg" class="d-block w-100 " alt="...">
                </div>
                <div class="carousel-item">
                  <img src="Image/SAMBHU TAMANG.jpg" class="d-block w-100 " alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
      </div>

      <div class="b-example-divider"></div>
      <footer class="py-2 bg-light mt-4" style="height: 400px;">
        <div class="container">
          <div class="row">
            <div class="col-md-3 mb-3">
              <div class="col-md-2 text-center mt-3">
                <img src="Image/k.logo.png" alt="" height="120px" width="120px">
                <h6>USHUHAN KOREAN LANGUAGE</h6>
                Sallaghari, Bhaktapur, Nepal
              </div>
            </div>
            <div class="col-5 col-md-2 mb-3 footer-section">
              <h5>Quick Links</h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">News</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">UKLC Books</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About Us</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Gallery</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Video</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Download Site</a>
                </li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Currency</a></li>
              </ul>
            </div>

            <div class="col-6 col-md-2 mb-3 footer-section">
              <h5>Important Links</h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Nepalembassy-Korea</a>
                </li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">ChatGpt</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">EPS NEPAL</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">News24 Tv Channel</a>
                </li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">HRD KOREA</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Korea New</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Onlinekhabar</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">EPS KOREA</a></li>
              </ul>
            </div>

            <div class="col-6 col-md-2 mb-3 footer-section">
              <h5>About Us</h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Ushuhan Korean
                    Language Center</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Sallaghari,
                    Bhaktapur, Nepal</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Office Time : 6AM To
                    PM</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Call :
                    9862366336/9803427212</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">What's app/Viber/Call
                    : 9860452870</a></li>
              </ul>
            </div>
          </div>

          <div class="d-flex flex-column flex-sm-row justify-content-between py-3 my-3 border-top">
            <p>© 2023 Company, Inc. All rights reserved.</p>
            <ul class="list-unstyled d-flex">
              <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="30" height="20">
                    <use xlink:href="#twitter"></use>
                  </svg></a></li>
              <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="30" height="20">
                    <use xlink:href="#instagram"></use>
                  </svg></a></li>
              <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="30" height="20">
                    <use xlink:href="#facebook"></use>
                  </svg></a></li>
            </ul>
          </div>
        </div>
      </footer>