<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- PARTIAL CSS INCLUSIONS -->
    <link rel="stylesheet" href="./assets/css/partials/0-fonts.css" />
    <link rel="stylesheet" href="./assets/css/partials/1-variables.css" />
    <link rel="stylesheet" href="./assets/css/partials/2-reset.css" />
    <link rel="stylesheet" href="./assets/css/partials/3-typography.css" />
    <link rel="stylesheet" href="./assets/css/partials/4-component.css" />

    <!-- CUSTOM CSS INCLUSIONS -->
    <link rel="stylesheet" href="./assets/css/style.css" />

    <!-- RESPONSIVITY CSS INCLUSIONS -->
    <link rel="stylesheet" href="./assets/css/responsivity/media-queries.css" />

    <!-- FAVICON LINK -->
    <link rel="icon" href="./assets/images/favicon.ico" type="image/x-icon" />

    <!-- TITLE OF THE PAGE -->
    <title>NewsGrid | The Official News Portal | <?php echo $page_title; ?></title>

    <!-- FONTAWESOME LINK -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
</head>

<body>

    <!-- ======== BACK TO TOP BUTTON ======== -->
    <button onclick="topFunction()" class="topNavBtn" id="topNavBtn" title="Go to top"><i class="fa fa-arrow-up"></i></button>


    <!-- ======== NAVBAR ======== -->
    <nav class="navbar">
        <div class="logo"><a href="./index.php"><img src="./assets/images/Tawaeli.png" /></a></div>
        <label for="btn" class="icon">
            <span class="fa fa-bars"></span>
        </label>
        <input type="checkbox" id="btn" class="input" />
        <ul class="ul">
            <!-- We ECHO class current based upon the boolean variables used in above PHP Snippet -->
            <li><a href="./index.php" class="current">Home</a></li>
            <li>
                <label for="btn-1" class="show">Categories +</label>
                <a href="./categories.php" class="current">Categories</a>
                <input type="checkbox" id="btn-1" class="input" />
                <ul>
                    <li><a href="articles.php?id=">Kategori 1</a></li>
                    <li><a href="articles.php?id=">Kategori 2</a></li>
                    <li><a href="articles.php?id=">Kategori 3</a></li>
                    <li><a href="./categories.php">More +</a></li>
                </ul>
            </li>
            <li><a href="./bookmarks.php" class="current">Bookmarks</a></li>
            <li>
                <label for="btn-2" class="show">Login +</label>
                <a href="./user-login.php" class="current">Login</a>
                <input type="checkbox" id="btn-2" class="input" />
                <ul>
                    <li><a href="./user-login.php">Reader</a></li>
                    <li><a href="./author-login.php">Author</a></li>
                </ul>
            </li>
            <li>
                <a href="./search.php" class="current">
                    <span>Search</span>
                    <i id="search-icon" class="fas fa-search"></i>
                </a>
            </li>
        </ul>
    </nav>

    <div class="container p-2">
        <!-- Container to store two form divs -->
        <div class="forms-container">
            <!-- Left div for login -->
            <div class="left">
                <div class="form-title">
                    <h4>User Login</h4>
                </div>
                <div class="login-form-container">
                    <!-- Form for Login -->
                    <form method="POST" class="login-form" id="login-form">
                        <div class="input-field">
                            <input type="email" name="login-email" id="login-email" placeholder=" Email Address" autocomplete="off" required>
                        </div>
                        <div class="input-field">
                            <input type="password" name="login-password" id="login-password" placeholder=" Password" autocomplete="off" required>
                        </div>
                        <div class="input-field">
                            <button type="submit" name="login-submit">Login</button>
                        </div>
                    </form>
                </div>
                <!-- Div to display the errors from the Login form -->
                <div class="form-errors">
                    <p class="errors" id="login-errors"></p>
                </div>
            </div>
            <!-- Right div for Signup -->
            <div class="right">
                <div class="form-title">
                    <h4>User Signup</h4>
                </div>
                <div class="signup-form-container">
                    <!-- Form for Signup -->
                    <form method="POST" class="signup-form" id="signup-form">
                        <div class="input-field">
                            <input type="text" name="signup-name" id="signup-name" placeholder=" Name" autocomplete="off" required>
                        </div>
                        <div class="input-field">
                            <input type="email" name="signup-email" id="signup-email" placeholder=" Email Address" autocomplete="off" required>
                        </div>
                        <div class="input-field">
                            <input type="password" name="signup-password" id="signup-password" placeholder=" Password" autocomplete="off" required>
                        </div>
                        <div class="input-field">
                            <input type="password" name="signup-confirm-password" id="signup-confirm-password" placeholder=" Confirm Password" autocomplete="off" required>
                        </div>
                        <div class="input-field">
                            <button type="submit" name="signup-submit">Signup</button>
                        </div>
                    </form>
                </div>
                <!-- Div to display the errors from the Signup form -->
                <div class="form-errors d-flex">
                    <p class="errors" id="signup-errors">
                        Password must be 6 to 20 characters long with aleast 1 number, 1 uppercase and 1 lowecase
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Script for form Validation -->
    <script src="./assets/js/form-validate.js"></script>

    <!--? ======== FOOTER ======== -->
    <footer class="footer">
        <div class="footer-left">
            <a href="./index.php"><img src="./assets/images/Tawaeli.png" /></a>
            <p>
                The collection point of world news. A one stop shop. We bring to you the current happenings around the world from
                esteemed writers. Make sure to read up and keep up with us through this platform that we bring to you. NewsGrid
            </p>
            <div class="socials">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <ul class="footer-right">
            <li>
                <h2>Quick Links</h2>
                <ul class="box">
                    <li><a href="./index.php">Home</a></li>
                    <li><a href="./categories.php">Categories</a></li>
                    <li><a href="./bookmarks.php">Bookmarks</a></li>
                    <li><a href="./search.php?trending=1">Trending</a></li>
                </ul>
            </li>
            <li>
                <h2>Categories</h2>
                <ul class="box">
                    <li><a href="articles.php?id=">Kategori 1</a></li>
                    <li><a href="articles.php?id=">Kategori 2</a></li>
                    <li><a href="articles.php?id=">Kategori 3</a></li>
                    <li><a href="./categories.php">More +</a></li>
                </ul>
            </li>
            <li>
                <h2>Join Us</h2>
                <ul class="box">
                    <li>
                        Share the story in your own words with the world. To Inspire with your writing make NewsGrid your platform to
                        help bring the stories of the globe to all people.
                    </li>
                    <a href="./author-login.php" class="my-1 btn btn-secondary">Sign Up</a>
                </ul>
            </li>
        </ul>
        <div class="footer-bottom">
            <p>All Rights Reserved by &copy; NewsGrid <?php echo date("Y") ?></p>
        </div>
    </footer>

    <!-- JQUERY SCRIPT -->
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>

    <!-- SCRIPT FOR BACK TO TOP BUTTON -->
    <script src="../assets/js/back-to-top.js"></script>

    <!-- SCRIPT FOR NAVBAR COLLAPSE -->
    <script src="../assets/js/navbar-collapse.js"></script>
</body>

</html>