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
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;700&family=Roboto+Slab:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Advent+Pro:ital,wght@0,400;0,600;0,700;1,300&family=Open+Sans:ital,wght@0,400;0,700;1,300&display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="home-page.css">
    <link rel="stylesheet" href="services.css">

    <!-- Fav icon -->
    <link rel="icon" href="fav-icon/favicon.ico" type="image/x-icon">
    <!-- Slick -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/2ad203560e.js" crossorigin="anonymous"></script>

    <script src="javascript_general.js"></script>
    <!-- Reveal Effects -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <title>Maik Dog Trainer</title>
</head>
<body>
    
    <div class="layout-container">
        <div class="cursor"></div>
        <div id="preloader"></div>
        <div class="sidebar overlaySidebar">
            <div class="closeBtn" onclick="toggleMenu()">
            </div>
            <div class="sidebarMenu">
                <div class="container">
                    <h3><i class='fa fa-quote-left' style='color: white'></i> Ο σκύλος είναι ο καλύτερος φίλος του ανθρώπου, αλλά μια καλή εκπαίδευση του τον καθιστά ακόμα καλύτερο φίλο. <i class='fa fa-quote-right' style='color: white'></i></h3>
                    <ul>
                        <li><a href="index">Αρχική</a></li>
                        <li><a href="services">Υπηρεσιες</a></li>
                        <li><a href="contact">Επικοινωνία</a></li>
                        <li><a href="trusted-us">Μας Εμπιστεύτηκαν</a></li>
                    </ul>
                    <div class="socialImgLink">
                            <a class="fb" href="https://www.facebook.com/groups/1414771202102310" target="_blank"></a>
                            <a class="igm" href="#" target="_blank"></a>
                            <a class="ytb" href="#" target="_blank"></a>
                        </div>
                </div>
            </div>
        </div>
        <header id="header">
            <div class="header-wrapper">
                <a href="index" id="logo"><img src="/logo-img/logo.jpg" alt=""></a>
                <div class="menu">
                    <ul>
                        <li><a href="index">Αρχική</a></li>
                        <li><a href="services">Υπηρεσιες</a></li>
                        <li><a href="contact">Επικοινωνία</a></li>
                        <li><a href="trusted-us">Μας Εμπιστεύτηκαν</a></li>
                    </ul>
                </div>
                <button class="burger" onclick="toggleMenu()"></button>
            </div>
        </header>
        <div class="heroBannerSlider">
            <div class="overlay"></div>
            <div class="overlayText"><h2>Αγαπήστε και Εκπαιδεύστε με Αγάπη τον Σκύλο σας: Εξειδικευμένες Υπηρεσίες Εκπαίδευσης</h2></div>
            
            <div>
                <img src="/images/servises01.jpg" alt="">
                <img src="/images/servises02.jpg" alt="">
                <img src="/images/servises03.jpg" alt="">
                <img src="/images/servises04.jpg" alt="">
                <img src="/images/servises05.jpg" alt="">
                <img src="/images/servises06.jpg" alt="">
            </div>
            <button class="scrollToNext">
                <span>Υπηρεσίες</span>
            </button>
        </div>
        <section class="services">
            <div class="container">
                <div class="serviceswrap">
                    <h2>Υπηρεσίες</h2>
                    <div class="serviceInfo individualEducation">
                        <h3>Ατομική Εκπαίδευση Σκύλου</h3>
                        <span>Ατομική εκπαίδευση σκύλου: Μία-μία εκπαίδευση προσαρμοσμένη στις ανάγκες και στον χαρακτήρα του σκύλου σας.</span>
                    </div>
                    <div class="serviceInfo groupLessons">
                        <h3>Ομαδικά Μαθήματα</h3>
                        <span>Ομαδικά μαθήματα: Εκπαίδευση σκύλων σε ομάδες, παρέχοντας την ευκαιρία για κοινωνικοποίηση και εκπαίδευση με άλλα ζώα.</span>
                    </div>
                    <div class="serviceInfo basicCommands">
                        <h3>Βασικές Εντολές</h3>
                        <span>Βασικές εντολές: Εκπαίδευση σκύλων σε βασικές εντολές όπως "καθήστε," "έλα εδώ," "μείνε," και "φέρε."</span>
                    </div>
                    <div class="serviceInfo behavioralProblems">
                        <h3>Αντιμετώπιση Συμπεριφοριακών Προβλημάτων</h3>
                        <span>Αντιμετώπιση συμπεριφοριακών προβλημάτων: Βοήθεια στην αντιμετώπιση προβλημάτων όπως η αντικοινωνική συμπεριφορά, η επιθετικότητα, η ανησυχία και άλλες ανεπιθύμητες συμπεριφορές.</span>
                    </div>
                    <div class="serviceInfo obedienceTraining">
                        <h3>Εκπαίδευση Υπακοής</h3>
                        <span>Εκπαίδευση υπακοής: Εξειδικευμένη εκπαίδευση για τη βελτίωση της υπακοής και της ακολουθίας εντολών.</span>
                    </div>
                    <div class="serviceInfo PersonalTrProgr">
                        <h3>Εξατομικευμένο Πρόγραμμα Εκπαίδευσης:</h3>
                        <span>Εξατομικευμένο πρόγραμμα εκπαίδευσης: Ανάπτυξη ενός προσαρμοσμένου προγράμματος εκπαίδευσης για τον σκύλο σας βασισμένο στις ανάγκες και τους στόχους σας.</span>
                    </div>
                </div>
            </div>
        </section>

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
                            <a class="fb" href="https://www.facebook.com/groups/1414771202102310" target="_blank"></a>
                            <a class="igm" href="#" target="_blank"></a>
                            <a class="ytb" href="#" target="_blank"></a>
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
    <script type="text/javascript" src="components/contact_form/contact_form.js"></script>
    
</body>
</html>