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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;700&family=Roboto+Slab:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- <link href="https://fonts.googleapis.com/css2?family=Advent+Pro:ital,wght@0,400;0,600;0,700;1,300&family=Open+Sans:ital,wght@0,400;0,700;1,300&display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="trusted-us.css">

    <!-- fav icon -->
    <link rel="icon" href="fav-icon/favicon.ico" type="image/x-icon">

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
                        <a href="https://www.facebook.com/groups/1414771202102310" target="_blank"><img src="/social-icon/fb_social_3.png"></a>
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
        <section class="trustedUs">
            <div class="container">
                <div class="trustedUsWrapper">
                    <h2>Μας Εμπιστεύτηκαν</h2>
                    <div class="item">
                        <div class="info">
                            <h3>Malibu</h3>
                            <span>Αυτό εδώ το κορίτσι,  λέγεται "Malibu" και είναι μια γαλλική εξωτική μπουλντογκίνα!!<br>Μόλις αποφοίτησε με άριστα στην βασική υπακοή!! Μπήκε και αυτή στο άλμπουμ των μαθητών της καρδιάς μου..</span>
                        </div>
                        <div class="image">
                            <img src="images/mallibu-bulldog.jpg" alt="" title="">
                        </div> 
                    </div>

                    <div class="item changeBgColor">
                        <div class="image">
                            <img src="/images/diesel.jpg" alt="" title="">
                        </div> 
                        <div class="info">
                            <h3>DIESEL</h3>
                            <span>Μαθητής "δυναμίτης ".."DIESEL", 14 μηνών ροτβαιλερ..</span>
                        </div>
                    </div>

                    <div class="item">
                        <div class="info">
                            <h3>Kιαρα</h3>
                            <span>Η εκπαίδευση είναι ότι καλύτερο μπορείς να προσφέρεις στον καλύτερο σου φιλο,η κίαρα εδώ μαζί με την δίδυμη αδερφη της.</span>
                        </div>
                        <div class="image">
                            <img src="/images/kiara.jpg" alt="" title="">
                        </div> 
                    </div>
                    
                    <div class="item changeBgColor">
                        <div class="image">
                            <img src="/images/stala&peanut.jpg" alt="" title="">
                        </div> 
                        <div class="info">
                            <h3>Στάλα και Peanut</h3>
                            <span>Τα ημίαιμα μαθητούδια μου αποφοίτησαν μαζί!Είναι αδερφάκια 6 μηνών..Αριστερά η "Στάλα" και δεξιά ο "Peanut"..</span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="info">
                            <h3>Quarto</h3>
                            <span>Τι και αν είναι καθαρόαιμη ή ημίαιμη..Η αγάπη του σκύλου, είναι πάντα η ίδια! Ο ημίαιμος μαθητής μου "Quarto"..</span>
                        </div>
                        <div class="image">
                            <img src="/images/quarto.jpg" alt="" title="">
                        </div> 
                    </div>

                    <div class="item changeBgColor">
                        <div class="image">
                            <img src="/images/aris.jpg" alt="" title="">
                        </div> 
                        <div class="info">
                            <h3>Άρης</h3>
                            <span>Δεν υπάρχουν "κακά" σκυλιά, υπάρχουν κακίες συνήθειες που μαθαίνουμε στα σκυλιά!Με την εκπαίδευση, επενδύουμε στον ψυχικό κόσμο του σκύλου μας!Ο μαθητής μου "Άρης" μετά από την εκπαίδευσή του!</span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="info">
                            <h3>Diego</h3>
                            <span>Ο μαθητής μου "Diego" (english staffordshire bull terrier) και εγώ, στην καθιερωμένη φωτογραφία της αποφοίτησης!</span>
                        </div>
                        <div class="image">
                            <img src="/images/diego.jpg" alt="" title="">
                        </div> 
                    </div>

                    <div class="item changeBgColor">
                        <div class="image">
                            <img src="/images/dias.jpg" alt="" title="">
                        </div> 
                        <div class="info">
                            <h3>Δίας</h3>
                            <span>Ο μαθητής μου από Γερμανία "Δίας", εξαιρετικής εκτροφής του Παπαδόπουλου Παναγιώτη</span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="info">
                            <h3>Bianco</h3>
                            <span>Άλλος ένας μαθητής μου, από την φυλή Λαμπραντορ, αποφοίτησε!!Ο "Bianco" 7 μηνών..</span>
                        </div>
                        <div class="image">
                            <img src="/images/biango.jpg" alt="" title="">
                        </div> 
                    </div>

                    <div class="item changeBgColor">
                        <div class="image">
                            <img src="/images/dio.jpg" alt="" title="">
                        </div> 
                        <div class="info">
                            <h3>DIO</h3>
                            <span>Όταν οι μαθητές σου έχουν ροκ προσωπικότητα.."DIO", ο μπιγκλομαθητής μου..</span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="info">
                            <h3>Μογκλαρ</h3>
                            <span>Ο ξεχωριστός μαθητής μου "Μογκλαρ", 7 μηνών!ΠΡΟΣΟΧΗ..δεν είναι ένα κοινό λαμπραντορ..είναι ένα υδρόβιο λαμπραντορ!!</span>
                        </div>
                        <div class="image">
                            <img src="/images/moglar.jpg" alt="" title="">
                        </div> 
                    </div>

                    <div class="item changeBgColor">
                        <div class="image">
                            <img src="/images/misel.jpg" alt="" title="">
                        </div> 
                        <div class="info">
                            <h3>Μισέλ</h3>
                            <span>Στιγμές χαλάρωσης και διαλογισμού, μαζί με τον δάσκαλο Σπύρο Μπουρνάζο !!Από την παρέα δεν έλειπε και η "Μισέλ"..</span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="info">
                            <h3>Flash</h3>
                            <span>Ο δαιμόνιος μαθητής μου "Flash" ..</span>
                        </div>
                        <div class="image">
                            <img src="/images/flash.jpg" alt="" title="">
                        </div> 
                    </div>

                    <div class="item changeBgColor">
                        <div class="image">
                            <img src="/images/gandalf.jpg" alt="" title="">
                        </div> 
                        <div class="info">
                            <h3>Γκανταλφ</h3>
                            <span>Ο εξαιρετικός μαθητής μου "Γκανταλφ", 6 μηνών Λαμπραντορ!</span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="info">
                            <h3>Buster</h3>
                            <span>Αδυναμίες..Ο μαθητής μου "Buster", 7 μηνών Λαμπραντορ..</span>
                        </div>
                        <div class="image">
                            <img src="/images/buster.jpg" alt="" title="">
                        </div> 
                    </div>

                    <div class="item changeBgColor">
                        <div class="image">
                            <img src="/images/ektoras-doperman.jpg" alt="" title="">
                        </div> 
                        <div class="info">
                            <h3>Έκτορας</h3>
                            <span>Ο πυραυλοκίνητος μαθητής μου "Έκτορας"..6 μηνών Ντομπερμαν!</span>
                        </div>
                    </div>

                    <div class="item">
                        <div class="info">
                            <h3>Έκτορας</h3>
                            <span>Ο..γοητευτικός μαθητής μου " Έκτορας" Μαλτεζ 14 μηνών..</span>
                        </div>
                        <div class="image">
                            <img src="/images/ektoras-maltez.jpg" alt="" title="">
                        </div> 
                    </div>

                    <div class="item changeBgColor">
                        <div class="image">
                            <img src="/images/bailey.jpg" alt="" title="">
                        </div> 
                        <div class="info">
                            <h3>Bailey</h3>
                            <span>Αυτά τα πιτμπουλάκια..!!Πόση αγάπη χωράει μέσα σε έναν σκύλο!Η μαθήτριά μου.."Bailey"..</span>
                        </div>
                    </div>

                    <div class="item">
                        <div class="info">
                            <h3>SKAYLER</h3>
                            <span>Αυτός είναι ο ημίαιμος μαθητής μου.."SKAYLER"..!</span>
                        </div>
                        <div class="image">
                            <img src="/images/skyler.jpg" alt="" title="">
                        </div> 
                    </div>

                    <div class="item changeBgColor">
                        <div class="image">
                            <img src="/images/maggie.jpg" alt="" title="">
                        </div> 
                        <div class="info">
                            <h3>MAGGIE</h3>
                            <span>Τζακρασελίνα μοναδική!!! Η μαθήτριά μου.. "MAGGIE"..</span>
                        </div>
                    </div>

                    <div class="item">
                        <div class="info">
                            <h3>Ήβη</h3>
                            <span>Είναι από εκείνες τις φορές, που μία φωτογραφία, αποτυπώνει τα συναισθήματα της στιγμής!Η μαθήτριά μου..."Ήβη" !!</span>
                        </div>
                        <div class="image">
                            <img src="/images/ivi.jpg" alt="" title="">
                        </div> 
                    </div>

                    <div class="item changeBgColor">
                        <div class="image">
                            <img src="/images/lara.jpg" alt="" title="">
                        </div> 
                        <div class="info">
                            <h3>Λάρα</h3>
                            <span>Η "Λάρα" μας.. ενός έτους ημιαιμίτσα!!Άριστη μαθήτρια, ποζάρει στον φακό ευτυχισμένη!</span>
                        </div>
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
                            <a href="https://www.facebook.com/groups/1414771202102310" target="_blank"><img src="/social-icon/fb_social_3.png"></a>
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