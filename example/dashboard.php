<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" href="../assets/img/PlayQuest Logo.png" type="image/icon type" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap"
      rel="stylesheet"
    />
    <!-- fonts -->
    <meta charset="utf-8" />
    <link
      rel="apple-touch-icon"
      sizes="76x76"
      href="../assets/img/title.png"
    />
    <link rel="icon" type="image/png" href="../assets/img/title.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>DASHBOARD |</title>
    <meta
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no"
      name="viewport"
    />
    <!--     Fonts and icons     -->
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200"
      rel="stylesheet"
    />
    <link
      href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"
      rel="stylesheet"
    />
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/demo/demo.css" rel="stylesheet" />

    <!-- CSS FontAwesome -->
    <script
      src="https://kit.fontawesome.com/52f3e32cf9.js"
      crossorigin="anonymous"
    ></script>
  </head>

  <body class="">
    <div class="wrapper">
      <div class="sidebar" data-color="white" data-active-color="danger">
        <div
          style="display: flex; flex-direction: column; align-items: center"
          class="logo"
        >
          <!-- logo -->
          <a href="#" class="">
            <div style="width: 234px; height: 73px" class="logo-image-small">
              <img src="../assets/img/PQ SMALL-LOGO.jpg" />
            </div>
          </a>
          <!-- logo -->
        </div>

        <div class="sidebar-wrapper">
          <ul class="nav">
            <!-- First Section   -->

            <!-- Main Menu -->
            <li class="active">
              <a href="#">
                <p style="color: rgb(255, 81, 0); font-size: 15px">Main Menu</p>
              </a>
            </li>

            <!-- Dashboard -->
            <li class="active">
              <a href="./dashboard.php">
                <i class="fas fa-th-large"></i>
                <p style="font-size: 15px; font-weight: bold">Dashboard</p>
              </a>
            </li>

            <!-- User Insights -->
            <li>
              <a href="./insights.php">
                <i class="fas fa-desktop"></i>
                <p style="font-size: 15px; font-weight: bold">User Insights</p>
              </a>
            </li>

            <!-- Manage Logins -->
 

            <!-- End First Section   -->

            <!-- Start Second Section -->

            <!--Add Information-->
            <li>
              <a href="#">
                <p style="color: rgb(255, 81, 0); font-size: 15px">
                  Add Information
                </p>
              </a>
            </li>

            <!-- Create New Championship -->
            <li class="#">
              <a href="./create_new_championship.php">
                <i class="far fa-plus-square"></i>
                <p style="font-size: 15px; font-weight: bold">
                  New Championship
                </p>
              </a>
            </li>

            <!-- New Category   -->
            <li>
              <a href="../example/new_category.php">
                <i class="fas fa-align-justify"></i>
                <p style="font-size: 15px; font-weight: bold">New Category</p>
              </a>
            </li>

             <!-- New Game Mode   -->
             <li>
              <a href="../example/add_new_mode.php">
                <i class="fas fa-crosshairs"></i>
                <p style="font-size: 15px; font-weight: bold">New Game Mode</p>
              </a>
            </li>

            <!-- New Question -->
            <li>
              <a href="../example/add_question.php">
                <i class="fas fa-question"></i>
                <p style="font-size: 15px; font-weight: bold">New Question</p>
              </a>
            </li>

            <!-- New Label -->
            <li>
              <a href="../example/new_label.php">
                <i class="fas fa-tag"></i>
                <p style="font-size: 15px; font-weight: bold">New Label</p>
              </a>
            </li>

            

            <!-- End Second Section   -->

            <!-- Start Third Section -->

            <!--All Information-->
            <li>
              <a href="#">
                <p style="color: rgb(255, 81, 0); font-size: 15px">
                  All Information
                </p>
              </a>
            </li>

            <!-- All Championships -->
            <li>
              <a href="../example/all_championships.php">
                <i class="fas fa-trophy"></i>
                <p style="font-size: 15px; font-weight: bold">
                  All Championships
                </p>
              </a>
            </li>

            <!-- All Categories -->

            <li>
              <a href="../example/all_category.php">
                <i class="fas fa-th"></i>
                <p style="font-size: 15px; font-weight: bold">All Categories</p>
              </a>
            </li>



            <!-- All Labels -->
            <li>
              <a href="../example/all_labels.php">
                <i class="fas fa-plus-square"></i>
                <p style="font-size: 15px; font-weight: bold">All Labels</p>
              </a>
            </li>

            <!-- Wrong Questions -->
            <li>
              <a href="../example/wrong_questions.php">
                <i class="fas fa-times-circle"></i>
                <p style="font-size: 15px; font-weight: bold">
                  Wrong Questions
                </p>
              </a>
            </li>
            <!-- End Fourth Section   -->
          </ul>
        </div>
      </div>
      <div class="main-panel">
        <!-- Navbar -->
        <nav
          class="
            navbar navbar-expand-lg navbar-absolute
            fixed-top
            navbar-transparent
          "
        >
          <div class="container-fluid" style="margin-bottom: 22px">
            <div class="navbar-wrapper">
              <div class="navbar-toggle">
                <button type="button" class="navbar-toggler">
                  <span class="navbar-toggler-bar bar1"></span>
                  <span class="navbar-toggler-bar bar2"></span>
                  <span class="navbar-toggler-bar bar3"></span>
                </button>
              </div>
              <a
                style="color: orange; font-size: 25px"
                class="navbar-brand"
                href="javascript:;"
                >DASHBOARD</a
              >
            </div>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navigation"
              aria-controls="navigation-index"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-bar navbar-kebab"></span>
              <span class="navbar-toggler-bar navbar-kebab"></span>
              <span class="navbar-toggler-bar navbar-kebab"></span>
            </button>
            <div
              class="collapse navbar-collapse justify-content-end"
              id="navigation"
            >
              <ul class="navbar-nav">
                <li class="nav-item btn-rotate dropdown">
                  <a
                    class="nav-link dropdown-toggle"
                    href="http://example.com"
                    id="navbarDropdownMenuLink"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    <i class="fas fa-user-circle"></i>
                  </a>
                  <div
                    class="dropdown-menu dropdown-menu-right"
                    aria-labelledby="navbarDropdownMenuLink"
                  >
                    <a
                      class="dropdown-item"
                      style="text-align: center"
                      href="logout.php"
                    >
                      <i class="fas fa-sign-out-alt"></i> Logout</a
                    >
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- End Navbar -->
        <div class="content">
          <div style="height: 70vh" class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div style="margin: 20px; height: 20vh" class="card-body">
                  <div style="padding: 40px" class="row">
                    <div class="col-5 col-md-4">
                      <div class="icon-big text-center icon-warning">
                        <i
                          style="color: rgb(255, 123, 0)"
                          class="fas fa-trophy"
                        ></i>
                      </div>
                    </div>
                    <div class="col-7 col-md-8">
                      <div class="numbers">
                        <p
                          id="total_championships"
                          style="font-size: 40px"
                          class="card-title"
                        >
                        <?php

                            $conn = new mysqli('localhost','root','','playquest');

                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            // SQL query to retrieve data
                            $sql = "SELECT count(*) as c from championship";
                            $result = $conn->query($sql);

                            // // Format data as an associative array
                            // $data = [];
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo $row["c"];
                                }
                                
                            }
                            else{
                                echo "0 result";
                            }



                            $conn->close();

                        ?>


                        </p>
                        <p class="card-category">Total Championships</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <hr />
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div style="margin: 20px; height: 20vh" class="card-body">
                  <div style="padding: 40px" class="row">
                    <div class="col-5 col-md-4">
                      <div
                        class="icon-big text-center icon-warning"
                        style="color: rgb(255, 123, 0)"
                      >
                        <i class="fas fa-users"></i>
                      </div>
                    </div>

                    <div class="col-7 col-md-8">
                      <div class="numbers">
                        <p
                          id="total_registered_users"
                          style="font-size: 40px"
                          class="card-title"
                        >

                        <?php

                                $conn = new mysqli('localhost','root','','playquest');

                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }

                                // SQL query to retrieve data
                                $sql = "SELECT count(*) as c from user";
                                $result = $conn->query($sql);

                                // // Format data as an associative array
                                // $data = [];
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        echo $row["c"];
                                    }
                                    
                                }
                                else{
                                    echo "0 result";
                                }

                                

                                $conn->close();

                                ?>
                        </p>
                        <p class="card-category">Total Registered Users</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <hr />
                </div>
              </div>
            </div>


            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div style="margin: 20px; height: 20vh" class="card-body">
                  <div style="padding: 40px" class="row">
                    <div class="col-5 col-md-4">
                      <div
                        class="icon-big text-center icon-warning"
                        style="color: rgb(255, 123, 0)"
                      >
                        <i class="fas fa-align-justify"></i>
                      </div>
                    </div>

                    <div class="col-7 col-md-8">
                      <div class="numbers">
                        <p
                          id="total_registered_users"
                          style="font-size: 40px"
                          class="card-title"
                        >
                        
                        <?php

                                $conn = new mysqli('localhost','root','','playquest');

                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }

                                // SQL query to retrieve data
                                $sql = "SELECT count(*) as c from category";
                                $result = $conn->query($sql);

                                // // Format data as an associative array
                                // $data = [];
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        echo $row["c"];
                                    }
                                    
                                }
                                else{
                                    echo "0 result";
                                }

                                

                                $conn->close();

                        ?>


                        </p>
                        <p class="card-category">Total Categories</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <hr />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </body>
</html>
