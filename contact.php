<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <!-- link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- fav icon -->
    <link rel="icon" href="fav-icon/favicon.ico" type="image/x-icon">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;700&family=Roboto+Slab:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- <link href="https://fonts.googleapis.com/css2?family=Advent+Pro:ital,wght@0,400;0,600;0,700;1,300&family=Open+Sans:ital,wght@0,400;0,700;1,300&display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="home-page.css">
    <link rel="stylesheet" href="contact.css">
    <!-- slick -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
    <script src="javascript_general.js"></script>
    <!-- Reveal Effects -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <title>Maik Dog Trainer</title>
</head>
<body>
    <div class="layout-container contactPage">
        <div class="cursor"></div>
        <div class="sidebar">
            <div class="closeBtn" onclick="toggleMenu()">
            </div>
            <div class="sidebarMenu">
                <div class="container">
                    <h3><i class='fa fa-quote-left' style='color: white'></i> Ο σκύλος είναι ο καλύτερος φίλος του ανθρώπου, αλλά μια καλή εκπαίδευση του τον καθιστά ακόμα καλύτερο φίλο. <i class='fa fa-quote-right' style='color: white'></i></h3>
                    <ul>
                        <li><a href="index">Αρχική</a></li>
                        <!-- <li><a href="#">Bio</a></li> -->
                        <li><a href="services">Υπηρεσιες</a></li>
                        <li><a href="contact">Επικοινωνία</a></li>
                        <li><a href="trusted-us">Μας Εμπιστεύτηκαν</a></li>
                    </ul>
                    <div class="socialImgLink">
                        <a href="#"><img src="/social-icon/fb_social_3.png"></a>
                        <a href="#"><img src="/social-icon/igSocial.png"></a>
                        <a href="#"><img src="/social-icon/yt_social_1.png"></a>
                    </div>
                </div>
            </div>
        </div>
        <header id="header">
            <div class="header-wrapper">
                <a href="#" id="logo"><img src="/logo-img/logo.jpg" alt=""></a>
                <div class="menu">
                    <ul>
                        <li><a href="index">Αρχική</a></li>
                        <!-- <li onclick="scollBio()"><a href="#">Bio</a></li> -->
                        <li><a href="services">Υπηρεσιες</a></li>
                        <li><a href="contact">Επικοινωνία</a></li>
                        <li><a href="trusted-us">Μας Εμπιστεύτηκαν</a></li>
                    </ul>
                </div>
                <button class="burger" onclick="toggleMenu()"></button>
            </div>
        </header>
        <section class="textContact">
            <div class="container">
                <h2 class="pb-5">ΕΙΜΑΣΤΕ ΕΔΩ ΓΙΑ ΣΕΝΑ!</h2>
                <p>Καλωσορίστε στη σελίδα μας για την εκπαίδευση σκύλων!</p>
                <p> Εδώ θα βρείτε πληροφορίες, συμβουλές και υπηρεσίες που αφορούν την εκπαίδευση και τη φροντίδα των αγαπημένων σας σκύλων.</p>
                <p> Αν έχετε οποιεσδήποτε ερωτήσεις ή χρειάζεστε περαιτέρω πληροφορίες, παρακαλούμε συμπληρώστε την παρακάτω φόρμα επικοινωνίας και θα χαρούμε να σας βοηθήσουμε.</p>
                <p> Ευχαριστούμε για το ενδιαφέρον σας!</p>
                
            </div>
        </section>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/components/contact_form/contact_form.php'; ?>
        <footer>
            <div class="footer-wrapper">
                <div class="container">
                    <div class="footer-inside">
    
                        <a class="footer-logo" href="/">
                            <img class="desktop" src="logo-img/logo.svg" alt="">
                            <img class="mobileOnly d-none" src="logo-img/logo.svg" alt="">
                        </a>
                        
                        <ul class="ftr-info">
                            <li><a href="index">Αρχική</a></li>
                            <li><a href="services">Υπηρεσιες</a></li>
                            <li><a href="contact">Επικοινωνία</a></li>
                            <li><a href="trusted-us">Μας Εμπιστεύτηκαν</a></li>
                        </ul>
    
                        <div class="socialImgLink">
                            <a href="#"><img src="/social-icon/fb_social_3.png"></a>
                            <a href="#"><img src="/social-icon/igSocial.png"></a>
                            <a href="#"><img src="/social-icon/yt_social_1.png"></a>
                        </div>
                         <div class="copyright mt-4 pl-4">
                            <p>© 2023. All right reserved.</p>
                         </div>
                         <div class="scrollToTop" title="Πήγαινε στην κορυφή" onclick="scrollToTop()"></div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script type="text/javascript" src="/components/contact_form/contact_form.js"></script>
</body>
</html>