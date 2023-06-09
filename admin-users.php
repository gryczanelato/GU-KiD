<?php
    session_start();
    if(isset($_SESSION['admin_login']) && $_SESSION['admin_login'] == "admin"){
        $admin_username = $_SESSION['admin_username']; //retrieve the username from the session variable
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

    <?php
        //making connection with db
        $conn = mysqli_connect("localhost", "HNCWEBMR19", "rAhXexAcqr", "HNCWEBMR19")
        or die("Cannot connect to database");
    ?>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Kobieta i Dusza | Kundalini joga Edinburgh | Strona główna</title>
        <meta content="Z korzeniami sięgającymi tysięcy lat wstecz, joga kundalini oferuje 
        nowoczesne korzyści, od łagodzenia bezsenności po zmniejszanie lęku." name="description">
        <meta content="kundalini joga Edinburgh" name="keywords">
        <meta name="robots" content="index">

        <meta property="og:title" content="Joga kundalini w Edynburgu">
        <meta property="og:description" content="Zobacz więcej!">
        <meta property="og:image" content="/assets/img/beach.jpeg">
        <!-- Favicon icon -->
        
        <!-- Icons -->
        <script src="https://kit.fontawesome.com/8dfa46e6e2.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">


        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>


        <!-- Custom CSS -->
        <link href="assets/styles/styles-admin.css" rel="stylesheet">
    </head>

    <body>

        <section id="admin-panel" class="admin-panel">

            <!-- Topbar -->
            <header class="topbar">
                <nav class="navbar top-navbar navbar-expand-md d-flex justify-content-between">

                    <div class="navbar-header">
                        <a class="navbar-brand" href="index.php">
                            <div class="logo-icon">
                                <img class="logo" src="assets/img/logo.png" alt="homepage"/>
                            </div>
                        </a>
                    </div>

                    <div class="navbar-user">
                        <div class="navbar-nav d-flex justify-content-between">
                            <div class="profile-pic-box">
                                <i class="profile-pic bi bi-person"></i>
                            </div>
                            <div class="admin-user-box">
                                <h3 class="admin-user"><?php echo $admin_username; ?></h3>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>

            <!-- Sidebar -->
            <aside class="left-sidebar">
                <div class="scroll-sidebar">
                    <nav class="sidebar-nav">
                        <ul id="sidebarnav">
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="admin-courses.php" aria-expanded="false">
                                    <i class="mdi me-2 mdi-gauge"></i>
                                    <span class="hide-menu">Kursy</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="admin-products.php" aria-expanded="false">
                                    <i class="mdi me-2 mdi-account-check"></i>
                                    <span class="hide-menu">Produkty</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link active" href="admin-users.php" aria-expanded="false">
                                    <i class="mdi me-2 mdi-table"></i>
                                    <span class="hide-menu">Użytkownicy</span>
                                </a>
                            </li>
                            <li>
                                <div class="sidebar-item">
                                    <a href="admin-logout.php" class="btn btn-logout logout"><h2>Wyloguj się</h2></a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </aside>
            

            <?php
            //function with query to create update button
            if(isset($_POST['update'])) {
              $updateQuery = "UPDATE kid_users SET user_type='$_POST[user_type]', user_name='$_POST[user_name]', user_email='$_POST[user_email]', user_address='$_POST[user_address]', user_password='$_POST[user_password]' WHERE id='$_POST[id]'";
              mysqli_query($conn, $updateQuery);
            }

            //function with query to create delete button
            if(isset($_POST['delete'])) {
                $deleteQuery = "DELETE FROM kid_users WHERE id='$_POST[id]'";
                mysqli_query($conn, $deleteQuery);
            }
            //function with query to create add form
            if(isset($_POST['add'])) {
              $user_type = $_POST['user_type'];
              $user_name = $_POST['user_name'];
              $user_email = $_POST['user_email'];
              $user_address = $_POST['user_address'];
              $user_password = $_POST['user_password'];

              $insertQuery = "INSERT INTO kid_users (user_type, user_name, user_email, user_address, user_password) VALUES ('$user_type', '$user_name', '$user_email', '$user_address', '$user_password')";
              mysqli_query($conn, $insertQuery);
            }

            //variable that shows the content of the database table in the html table
            $result = mysqli_query($conn, "SELECT * FROM kid_users");
            ?>

            <div class="table-wrapper">
                <div class="row">
                    <div class="table-title col-md-6 col-8 align-self-center">
                        <h4 class="mb-0 p-0">Użytkownicy</h4>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <!-- column -->
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table user-table">
                                            <thead>
                                                <tr>
                                                    <th class="border-top-0">#</th>
                                                    <th class="border-top-0">Typ</th>
                                                    <th class="border-top-0">Imię i nazwisko</th>
                                                    <th class="border-top-0">Email</th>
                                                    <th class="border-top-0">Adres</th>
                                                    <th class="border-top-0">Hasło</th>
                                                    <th class="border-top-0"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                                        echo "<form action='admin-users.php' method='post'>";
                                                            echo "<tr>";
                                                                echo "<td><input name='id' value ='" . $row['id'] . "' ></td>";
                                                                echo "<td><input type='text' name='user_type' value ='" . $row['user_type'] . "' ></td>";
                                                                echo "<td><input type='text' name='user_name' value ='" . $row['user_name'] . "' ></td>";
                                                                echo "<td><input type='text' name='user_email' value ='" . $row['user_email'] . "' ></td>";
                                                                echo "<td><input type='text' name='user_address' value ='" . $row['user_address'] . "' ></td>";
                                                                echo "<td><input type='text' name='user_password' value ='" . $row['user_password'] . "' ></td>";
                                                                echo "<td><input type='submit' name='update' value ='update' ></td>";
                                                                echo "<td><input type='submit' name='delete' value ='delete' ></td>";
                                                            echo "</tr>";
                                                        echo "</form>";
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="table-title col-md-6 col-8 align-self-center">
                        <h4 class="mb-0 p-0">Dodaj</h4>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <!-- column -->
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table user-table">
                                            <thead>
                                                <tr>
                                                    <th class="border-top-0">Typ</th>
                                                    <th class="border-top-0">Imię i nazwisko</th>
                                                    <th class="border-top-0">Email</th>
                                                    <th class="border-top-0">Adres</th>
                                                    <th class="border-top-0">Hasło</th>
                                                    <th class="border-top-0"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    echo "<form action='admin-users.php' method='post'>";
                                                        echo "<tr>";
                                                            echo "<td><input type='text' name='user_type' id='user_type'/></td>";
                                                            echo "<td><input type='text' name='user_name' id='user_name'/></td>";
                                                            echo "<td><input type='text' name='user_email' id='user_email'/></td>";
                                                            echo "<td><input type='text' name='user_address' id='user_address'/></td>";
                                                            echo "<td><input type='text' name='user_password' id='user_password'/></td>";
                                                            echo "<td><input type='submit' name='add' value='Submit'/></td>";
                                                        echo "</tr>";
                                                    echo "</form>";
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Footer -->
                <footer class="footer">
                    <div class="container">
                        <div class="copyright">
                            &copy; Copyright <strong><span>Kobieta i Dusza</span></strong>. Wszelkie prawa zastrzeżone.
                        </div>
                    </div>
                </footer>
            </div>
        </section>

        <?php
        }
          else {
            echo "<h3 class='text-center' style='color:red;size:30px'>You are not allowed access here</h3>";
            header( "Refresh:3; url=http://webdev.edinburghcollege.ac.uk/~HNCWEBMR19/GU/", true, 303);
          }
        ?>
        <?php
          mysqli_close($conn);
        ?>

    </body>
</html>