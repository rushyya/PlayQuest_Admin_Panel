<!DOCTYPE html>
<html lang="en">
  <head>
    
    <link rel="icon" href="../assets/img/title.png" type="image/icon type" />

    <script>

      function edit(champ = "") {
        window.open(`new_category.php?category=${champ}`)
      }

      function addnewchampionship() {
        window.open("new_category.php")
      }
    </script>

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap"
      rel="stylesheet"
    />
    <!-- fonts -->


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css" />

    <script data-require="jquery" data-semver="2.1.3" src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script data-require="bootstrap" data-semver="3.3.2" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script data-require="angular.js@1.3.x" src="https://code.angularjs.org/1.3.14/angular.js" data-semver="1.3.14"></script>
    <script data-require="ui-bootstrap" src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/0.13.0/ui-bootstrap-tpls.min.js" data-semver="0.13.0"></script>

    <style>
                   
            body {
              /* font-family: "Roboto", Helvetica, Arial, sans-serif; */
              font-weight: 100;
              font-size: 12px;
              line-height: 30px;
              color: #777;
              background: #4caf50;
            }

            .container {
              max-width: 400px;
              width: 100%;
              margin: 0 auto;
              position: relative;
            }


            #contact {
              background: #f9f9f9;
              padding: 25px;
              margin: 35px 0;
              box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2),
                0 5px 5px 0 rgba(0, 0, 0, 0.24);
            }
            

            #contact h3 {
              display: block;
              font-size: 30px;
              font-weight: 300;
              margin-bottom: 10px;
            }

            #contact h4 {
              margin: 5px 0 15px;
              display: block;
              font-size: 13px;
              font-weight: 400;
            }

            fieldset {
              border: medium none !important;
              margin: 0 0 10px;
              min-width: 100%;
              padding: 0;
              width: 100%;
            }

            #contact input[type="text"]{
              width: 100%;
              border: 1px solid #ff9d5c;
              background: #fff;
              margin: 0 0 5px;
              padding: 10px;
            }

            #contact input[type="text"]:hover{
              border: 1px solid #ff9d5c;
            }

            #contact textarea {
              height: 100px;
              max-width: 100%;
              resize: none;
            }

            #contact button[type="submit"] {
              cursor: pointer;
              width: 50;
              border: none;
              background: #ff9d5c;
              color: #f8f9fa;
              margin: 22px 39px 46px;
              padding: 7px 27px;
              font-size: 17px;
              border-radius: 8px;
            }

            #contact button[type="submit"]:hover {
              background: #43a047;
              -webkit-transition: background 0.3s ease-in-out;
              -moz-transition: background 0.3s ease-in-out;
              transition: background-color 0.3s ease-in-out;
            }

            #contact button[type="submit"]:active {
              box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
            }

            .copyright {
              text-align: center;
            }

            #contact input:focus,
            #contact textarea:focus {
              outline: 0;
              border: 1px solid #aaa;
            }

            ::-webkit-input-placeholder {
              color: #888;
            }

            :-moz-placeholder {
              color: #888;
            }

            ::-moz-placeholder {
              color: #888;
            }

            :-ms-input-placeholder {
              color: #888;
            }
    </style>

    <!-- CSS FontAwesome -->
    <script
      src="https://kit.fontawesome.com/52f3e32cf9.js"
      crossorigin="anonymous"
    ></script>

    <meta charset="utf-8" />
    <link
      rel="apple-touch-icon"
      sizes="76x76"
      href="../assets/img/title.png"
    />
    <link rel="icon" type="image/png" href="../assets/img/title.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>ALL CATEGORIES | PlayQuest</title>

    
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
  </head>

  <body>
    <div class="wrapper">

      <div class="sidebar" data-color="white" data-active-color="danger">
        <div
          style="display: flex; flex-direction: column; align-items: center"
          class="logo"
        >
          <!-- logo -->
          <a href="#" class="">
            <div style="width: 234px; height: 73px" class="logo-image-small">
              <img src="../assets/img/logo-small1.png" />
            </div>
          </a>
          <!-- logo -->
        </div>

        <div class="sidebar-wrapper">
          <ul class="nav">
            <!-- First Section   -->

            <!-- Main Menu -->
            <li >
              <a href="#">
                <p style="color: rgb(255, 81, 0); font-size: 15px">Main Menu</p>
              </a>
            </li>

            <!-- Dashboard -->
            <li >
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
            <li>
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
            <li class="active">
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

            <li class="active">
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
                <p style="font-size: 15px; font-weight: bold">Wrong Questions</p>
              </a>
            </li>
            <!-- End Fourth Section   -->
          </ul>
        </div>
      </div>
      
      <div class="main-panel" style="height: 70px;" >
        <!-- Navbar -->
        <nav
          class="
            navbar navbar-expand-lg navbar-absolute
            fixed-top
            navbar-transparent
          "
          style="height: 70px;"
        >
          <div class="container-fluid" style="margin-bottom: 15px">
            <div class="navbar-wrapper">
              <div class="navbar-toggle">
                <button type="button" class="navbar-toggler">
                  <span class="navbar-toggler-bar bar1"></span>
                  <span class="navbar-toggler-bar bar2"></span>
                  <span class="navbar-toggler-bar bar3"></span>
                </button>
              </div>
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

        <!-- form code starts         -->

        <div class="content">
          <div style="height: 100vh;" class="row">
            <div class="col-md-12">
              <div class="card demo-icons">
                <div class="card-header">
                  <div class="container">
                    <!-- 1st one -->
                    <div id="contact">

                      <fieldset>
                        <p style="text-align: center;color: #ff9d5c; font-size: 30px;font-weight: bold; ">All Categories</p>
                        
                        <hr style="height:1px; border:none;  background-color:#ff9d5c;">
                        <br>
                      </fieldset>

                      <table style="color: black;font-size: 27px">

                    <?php

                        $conn = new mysqli('localhost','root','','playquest');

                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        // SQL query to retrieve data
                        $sql = "SELECT category_name FROM category";
                        $result = $conn->query($sql);

                        // Format data as an associative array
                        $data = [];
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr><td>".$row["category_name"]."</td></tr>";
                            }
                            echo "</table>";
                        }
                        else{
                            echo "0 result";
                        }

                        $conn->close();

                    ?>

                       </table>
                      <br>
                      <!-- 1st one -->
                      <div style="display: flex; flex-direction: row;">

                            <div style=" display: inline-flex; min-width: 112ch; font-size: 16px;" class="select"> 
                                        <button onclick="addnewchampionship()" style="float: right;color: #ffffff; margin: 2px; font-size: 15px; height: 30px;background-color: #ff9d5c;border: 1px solid #ff9d5c;"  id="dodropdown">Add New Categories</button>

                                        <!-- <select style=" float:right;  width: 231px;border-color: #ff9d5c;" id="standard-select">
                                        </select>
                                        <button onclick="sort()" style="float: right;color: #ffffff; margin: 2px; font-size: 15px; height: 30px;background-color: #ff9d5c;border: none;" id="dodropdown">Apply</button> -->
                                      </div>
                                     
                                      <!-- <button style="color: #ff9d5c; margin: 2px; font-size: 15px; height: 30px;border:1px solid #ff9d5c;"   id="dodropdown"> <i class="fas fa-filter"></i> Filter</button> -->
                            </div>

                            <div id="category_list">


                            </div>

                         

                            <!-- <br /><br />

                            <div style="display: flex; flex-direction: row;">
                                <div style=" display: flex; min-width: 112ch; font-size: 16px;" class="select">
                                      <span style="font-size: 20px;">Python Programming Language - Computer Science</span>
                                </div>

                                 <div style=" display: flex; min-width: 112ch; font-size: 16px;" class="select">
                                      <span style="font-size: 20px;">Python Programming Language - Computer Science</span>
                                </div>

                                     <button onclick="edit()" style="color: #004ffa; margin: 2px; font-size: 15px; height: 30px;border:1px solid #ff9d5c;"  id="dodropdown"> <i class="fas fa-edit"></i> Edit</button>
                                     <button onclick="deactivate()" style="color: #c90101; margin: 2px; font-size: 15px; height: 30px;border:1px solid #ff9d5c;"   id="dodropdown"><i class="fas fa-times"></i>Delete</button>
                            </div>


                            <br /><br /> -->

                            
                        </div>
                    </form>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--   Core JS Files   -->
  
  </body>
</html>
