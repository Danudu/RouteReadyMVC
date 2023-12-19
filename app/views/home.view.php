<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="<?= ROOT?>/assets/css/navbar.css">
    <link rel="stylesheet" href="<?= ROOT?>/assets/css/content.css">
    <title>Welcome -To RouteReady</title>
    <link rel="icon" href="<?= ROOT?>/assets/img/logo.jpg" type="image/x-icon">
</head>
<body>

    <div class="sidebar">
        <div class="top">
            <div class="logo">
                    <img src="<?= ROOT?>/assets/img/logo.jpg" alt="">
                    <span class="logo_name">Route Ready</span>
            </div>
            <i class="fa-solid fa-bars" id="btn"></i>
        </div>
        <div class="buttons">
            <ul>
                <li>
                    <a href="#">
                        <i class="fa-solid fa-house"></i>
                        <span class="icon_name">Home</span>
                    </a>
                    <span class="tooltip">HomePage</span>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="#">
                        <i class="fas fa-user"></i>
                        <span class="icon_name">Profile</span>
                    </a>
                    <span class="tooltip">Profile</span>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="#">
                        <i class="fas fa-users"></i>
                        <span class="icon_name">Employees</span>
                    </a>
                    <span class="tooltip">Employees</span>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="#">
                        <i class="fas fa-truck-fast"></i>
                        <span class="icon_name">Drivers</span>
                    </a>
                    <span class="tooltip">Drivers</span>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="#">
                        <i class="fas fa-book-bookmark"></i>
                        <span class="icon_name">T&C</span>
                    </a>
                    <span class="tooltip">Terms & Conditions</span>
                </li>
            </ul>
            <ul class="lobtn">
                <li>
                    <a href="#">
                        <i class="fas fa-arrow-right-from-bracket"></i>
                        <span class="icon_name">Logout</span>
                    </a>
                    <span class="tooltip">Logout</span>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-content">
        <div class="container">
            <div class="header">
                <h1>Route Ready</h1>
            </div>
            <div class="main">
                <section class="welcome">
                    <div class="content">
                        <h1>Welcome Aboard!</h1>
                        <h3>Efficiency, Ease, Insights: <br>Your Corporate Mobility Revolution Begins with RouteReady</h3>
                    </div>
                    <div>
                        <button type="button" class="btn2"><span class="spanbtn2">Book your ride, Click here now!</span><a href="#" class="bt">Login <br>As Employee</a></button>
                        <button type="button" class="btn2"><span class="spanbtn2">Manage Employees & Drivers</span><a href="#" class="bt">Manage <br>Employees and Drivers</a></button>
                    </div>
                </section>
            </div>
            <div class="footer">
                <p>&copy; 2023 Vehicle Reservation System</p>
                <h4>Follow us</h4>
                <div class="footer-social">
                    <div class="footer-links">
                        <ul>
                            <li class="social"><a href="https://www.facebook.com/" class="social"><i class="fa-brands fa-facebook"></i></a></li>
                            <li class="social"><a href="https://twitter.com/" class="social"><i class="fa-brands fa-twitter"></i></a></li>
                            <li class="social"><a href="https://www.instagram.com/" class="social"><i class="fa-brands fa-instagram"></i></a></li>
                            <li class="social"><a href="https://www.linkedin.com/" class="social"><i class="fa-brands fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>

<script>
    let btn = document.querySelector("#btn");
    let sidebar = document.querySelector(".sidebar");

    btn.onclick = function() {
        sidebar.classList.toggle("active");
    };
</script>
</html>

<!-- https://www.youtube.com/watch?v=uy1tgKOnPB0 -->