<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <title></title>
  <!-- Custom styles for this template -->
  <link href="carousel.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Stint+Ultra+Condensed&display=swap" rel="stylesheet">

</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><h1>Spark Bank</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
          aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav ml-auto mb-2 mb-md-0">
          <li class="nav-item ">
              <a class="nav-link" aria-current="page" href="homepage.php">Home</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" aria-current="page" href="allcustomers.php">Customers</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="aboutus.php">About Us</a>
            </li>
           
          </ul>
           <div class="d-flex">
        <button class="btn btn-outline-danger me-2" data-toggle="modal" data-target="#sendMoney">Send Money</button>
 
      </div>
 
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-danger" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
</header>  


<section id="main" class="coloured-section" style=" padding:  50px 10%;" >
    <br>
    <h1><B>WE TAKE YOUR SECURITY</B><br>
    SERIOUSLY! </h1>
</section>


    <!-- Modal send money -->
    <div class="modal fade" id="sendMoney" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Send Money</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="">
                            <div class="input-group mb-3">
                            <input type="text" id="enterSName" class="form-control" placeholder="Sender's username"
                                aria-label="Sender's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">@gamil.com</span>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" id="enterName" class="form-control" placeholder="Recipient's username"
                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">@gamil.com</span>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Rs</span>
                            </div>
                            <input type="text" id="enterAmount" class="form-control" placeholder=" Enter Amount"
                                aria-label="Amount">
                            <div class="input-group-append">
                                <span class="input-group-text">.00</span>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" onclick="sendMoney()" class="btn btn-success" data-dismiss="modal">Send
                        Money</button>
                </div>
            </div>
        </div>
    </div>

    <!-- table  -->
    <div class="container">
        <div class="table-responsive">
            <table class="table_1 table-bordered" style="width: 100%;height: 90%;">
                <thead>
                    <tr class="table-danger_1 ">
                        <th scope="col">SR. No.</th>
                        <th scope="col">Name</th>
                        <th scope="col">E-mail ID</th>
                        <th scope="col">Bank Balance</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-light_1">
                        <td scope="row">1</td>
                        <td>Ayisha Ganza</td>
                        <td>ayisha@gamil.com</td>
                        <td>
                            <p id="ayishaBankBalance">810500</p>
                        </td>
                    </tr>
                    <tr class="table-info_1"  >
                        <td scope="row">2</td>
                        <td>Febith Rizvan</td>
                        <td>febith@gamil.com</td>
                        <td>
                            <p id="febithBankBalance">994000</p>
                        </td>
                    </tr>
                    <tr class="table-light_1">
                        <td scope="row">3</td>
                        <td>Abdul Razak</td>
                        <td>abdul@gamil.com</td>
                        <td>
                            <p id="abdulBankBalance">996000</p>
                        </td>
                    </tr>
                    <tr class="table-info_1">
                        <td scope="row">4</td>
                        <td>Gazala Fathima</td>
                        <td>gazala@gamil.com</td>
                        <td>
                            <p id="gazalaBankBalance">44000</p>
                        </td>
                    </tr>
                    <tr class="table-light_1">
                        <td scope="row">5</td>
                        <td>Omer Rashid</td>
                        <td>omer@gamil.com</td>
                        <td>
                            <p id="omerBankBalance">610000</p>
                        </td>
                    </tr>
                    <tr class="table-info_1">
                        <td scope="row">6</td>
                        <td>Vahida Kalathil</td>
                        <td>vahida@gamil.com</td>
                        <td>
                            <p id="vahidaBankBalance">150000</p>
                        </td>
                    </tr>
                    <tr class="table-light_1">
                        <td>7</td>
                        <td>Aroush Zamzam</td>
                        <td>aroush@gamil.com</td>
                        <td>
                            <p id="aroushBalance">3000</p>
                        </td>
                    </tr>
                    <tr class="table-info_1">
                        <td scope="row">8</td>
                        <td>Ozair Muhammed</td>
                        <td>ozair@gamil.com</td>
                        <td>
                            <p id="ozairBankBalance">60000</p>
                        </td>
                    </tr>
                    <tr class="table-light_1">
                        <td scope="row">9</td>
                        <td>Riya Sultana</td>
                        <td>riya@gamil.com</td>
                        <td>
                            <p id="riyaBankBalance">5000</p>
                        </td>
                    </tr>
                    <tr class="table-info_1">
                        <td scope="row">10</td>
                        <td>Rifa Fathima</td>
                        <td>rifa@gamil.com</td>
                        <td>
                            <p id="rifaBankBalance">80000</p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <br>
    </div>
    </section>



<footer>
 <p class="py-3 bg-dark text-white text-center">@sparkbank</p>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


  
</footer>



    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js"></script>
</body>
</html>