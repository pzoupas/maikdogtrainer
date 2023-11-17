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
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="dog-best-friend.css">
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
    
    <div class="layout-container srOnceTime">
        <div id="preloader"></div>
        <div class="cursor"></div>
        <div class="sidebar overlaySidebar">
            <div class="closeBtn" onclick="toggleMenu()">
            </div>
            <div class="sidebarMenu">
                <div class="container">
                    <h3><i class='fa fa-quote-left' style='color: white'></i> Ο σκύλος είναι ο καλύτερος φίλος του ανθρώπου, αλλά μια καλή εκπαίδευση του τον καθιστά ακόμα καλύτερο φίλο. <i class='fa fa-quote-right' style='color: white'></i></h3>
                    <ul>
                        <li><a href="index">Αρχική</a></li>
                        <!-- <li onclick="scollBio()"><a href="index">Bio</a></li> -->
                        <li><a href="services">Υπηρεσιες</a></li>
                        <li><a href="contact">Επικοινωνία</a></li>
                        <li><a href="trusted-us">Μας Εμπιστεύτηκαν</a></li>
                    </ul>
                    <div class="socialImgLink">
                            <a class="fb" href="https://www.facebook.com/groups/1414771202102310" target="_blank"></a>
                            <a class="igm" href="https://www.instagram.com/mike_t_dog_trainer/" target="_blank"></a>
                            <a class="ytb" href="#" target="_blank"></a>
                        </div>
                </div>
            </div>
        </div>
        <header id="header" class="header show">
            <div class="header-wrapper">
                <a href="index" id="logo"><img src="/logo-img/logo.jpg" alt=""></a>
                <div class="menu">
                    <ul>
                        <li><a href="index">Αρχική</a></li>
                        <li onclick="scollBio()"><a href="#">Bio</a></li>
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
            <div class="overlayText"><h2>Η Εκπαίδευση του Σκύλου μας: Μια Διαδρομή για όλη την Οικογένεια...</h2></div>
            
            <div>
                <img src="/images/herobanner-image.jpg" alt="">
                <img src="/images/herobanner-image2.jpg" alt="">
                <img src="/images/herobanner-image3.jpg" alt="">
                <img src="/images/herobanner-image4.jpg" alt="">
            </div>
            <button class="scrollToNext">
                <span>Πατήστε για κύλιση</span>
            </button>
        </div>
        <section class="newsForDogs">
            <div class="container">
            <div class="newsForDogsWrapp">
                <div class="newsInfo">
                    <h3>Είναι ο σκύλος ο καλύτερος φίλος του ανθρώπου;</h3>
                    <p>
                        <span>Ο σκύλος είναι γνωστό ως ο καλύτερος φίλος του ανθρώπου και αυτό δεν είναι τυχαίο. Από την αρχαιότητα, οι άνθρωποι έχουν επιλέξει τον σκύλο ως σύντροφο και φύλακα τους, καθώς προσφέρει αφοσίωση, αγάπη και προστασία.</span>
                        <span>Μελέτες έχουν δείξει ότι η παρουσία ενός σκύλου μπορεί να βελτιώσει τη διάθεση του ανθρώπου και να μειώσει τα επίπεδα άγχους και κατάθλιψης. Επιπλέον, οι σκύλοι μπορούν να βοηθήσουν στην καταπολέμηση της ανεπάρκειας στην άσκηση και να προάγουν την υγιή διατροφή του ανθρώπου.</span>
                        <span>Ωστόσο, η σχέση μεταξύ ενός ανθρώπου και ενός σκύλου δεν είναι μονόδρομη. Οι άνθρωποι επίσης πρέπει να φροντίζουν και να προστατεύουν τους σκύλους, παρέχοντάς τους την απαραίτητη φροντίδα και αγάπη.</span>
                        <span>Συνολικά, ο σκύλος είναι πράγματι ο καλύτερος φίλος του ανθρώπου, καθώς προσφέρει απλόχερα την αγάπη και την αφοσίωσή του στον άνθρωπο και είναι πάντα εκεί για να τον υποστηρίξει.</span>
                    </p>
                    <a href="dog-best-friend"  title=""><button class="clickBtn">Μαθε περισσότερα </button></a>
                </div>
                <div class="newsImage">
                    <img src="/images/dog-image.jpg" title="">
                </div>
            </div>
            </div>
        </section>
        <section class="iconsAnimation">
            <div class="container">
                <h3>Μαθαίνοντας με Αγάπη και Ακρίβεια</h3>
                <div class="iconsAnimationWrapp">
                    
                    <div class="icon dogTrainer">
                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 257.000000 256.000000"
                            preserveAspectRatio="xMidYMid meet">

                            <g transform="translate(0.000000,256.000000) scale(0.100000,-0.100000)"
                            fill="#000000" stroke="none">
                            <path id="headTrainer" d="M356 2375 c-79 -28 -127 -96 -127 -181 0 -78 34 -134 103 -168 57
                            -28 83 -31 140 -16 144 40 185 244 67 332 -64 47 -117 57 -183 33z"/>
                            <path id="bodyTrainer" d="M226 1919 c-37 -29 -56 -71 -56 -124 l0 -47 53 43 c28 24 47 37 41
                            29 -6 -8 -59 -79 -118 -157 -58 -79 -109 -155 -112 -170 -8 -41 128 -410 162
                            -440 47 -42 115 -26 140 32 16 38 12 51 -64 261 l-40 110 96 132 c53 72 98
                            129 100 128 1 -2 -20 -62 -49 -133 l-51 -130 53 -144 c36 -98 53 -159 53 -189
                            -1 -96 -68 -168 -164 -178 -55 -5 -51 2 -70 -107 -5 -33 -53 -167 -106 -298
                            -105 -260 -108 -280 -59 -330 48 -47 131 -40 166 14 9 13 58 128 110 254 88
                            215 95 240 120 385 15 85 29 148 33 140 3 -8 20 -67 37 -130 31 -110 32 -125
                            38 -365 7 -279 10 -293 76 -321 59 -24 123 3 146 64 7 18 8 112 4 267 l-7 240
                            -49 195 -49 196 0 242 c0 224 1 242 18 242 9 0 107 -16 217 -35 110 -19 214
                            -35 230 -35 34 0 67 25 119 88 53 65 48 129 -11 160 -38 21 -71 14 -111 -22
                            l-38 -35 -208 37 -208 37 -17 35 c-9 19 -31 45 -50 57 -32 22 -44 23 -191 23
                            -144 0 -159 -2 -184 -21z"/>
                            <path id="earDog" d="M1753 1080 c-21 -8 -23 -16 -23 -74 0 -77 6 -96 30 -96 25 0 100 87
                            100 116 0 38 -65 70 -107 54z"/>
                            <path id="bodyDog" d="M1634 1031 c-17 -11 -38 -33 -45 -50 -8 -17 -17 -31 -21 -31 -13 0
                            -68 -52 -68 -65 0 -8 17 -33 39 -55 38 -41 39 -41 106 -38 61 2 68 0 85 -22
                            11 -14 22 -36 25 -50 4 -14 23 -65 42 -114 l36 -89 -32 -149 c-34 -157 -32
                            -180 9 -193 12 -4 31 0 44 8 19 13 28 37 47 127 26 124 18 116 101 95 21 -5
                            27 -2 37 24 17 39 46 65 66 58 21 -9 19 -33 -7 -67 -13 -19 -23 -49 -26 -85
                            l-4 -55 -43 0 c-49 0 -68 -17 -63 -57 5 -46 36 -55 174 -50 140 4 171 17 217
                            84 15 23 43 51 62 63 61 38 145 179 145 245 0 32 -29 13 -58 -38 -27 -48 -101
                            -127 -120 -127 -4 0 -14 21 -21 46 -19 64 -94 141 -230 237 -112 79 -244 198
                            -253 226 -3 11 -15 7 -46 -19 -71 -56 -131 -39 -153 44 -6 22 -9 58 -6 78 6
                            44 3 45 -39 19z"/>
                            </g>
                        </svg>
                        <span>Εκπαίδευση</span>
                    </div>

                    <div class="icon heart">
                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                            viewBox="-5 0 521.000000 512.000000"
                            preserveAspectRatio="xMidYMid meet">

                            <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                            fill="#000000" stroke="none">
                            <path d="M1214 4465 c-232 -42 -431 -150 -601 -328 -78 -82 -98 -111 -146
                            -209 -91 -183 -133 -364 -144 -613 -22 -537 180 -1139 554 -1652 374 -513 929
                            -965 1591 -1297 l93 -47 147 76 c1068 554 1788 1366 2016 2273 56 225 70 339
                            70 572 0 299 -36 478 -139 685 -59 118 -111 186 -215 279 -385 343 -904 366
                            -1367 60 -158 -105 -367 -328 -474 -507 -18 -32 -36 -57 -39 -57 -3 0 -21 25
                            -39 57 -102 169 -299 385 -451 492 -261 184 -584 266 -856 216z m1073 -1124
                            c154 -71 238 -319 164 -486 -28 -62 -55 -93 -106 -116 -51 -24 -99 -24 -151 0
                            -156 71 -240 318 -165 486 28 62 55 93 106 116 51 24 99 24 152 0z m698 0 c51
                            -23 78 -54 106 -116 75 -168 -9 -415 -165 -486 -52 -24 -100 -24 -151 0 -51
                            23 -78 54 -106 116 -75 168 9 415 165 486 52 24 100 24 151 0z m-1179 -480
                            c156 -71 240 -318 165 -486 -28 -62 -55 -93 -106 -116 -76 -35 -155 -16 -227
                            55 -110 107 -149 296 -89 431 28 62 55 93 106 116 51 24 99 24 151 0z m1659 0
                            c51 -23 78 -54 106 -116 58 -130 22 -318 -82 -425 -74 -76 -156 -97 -234 -61
                            -51 23 -78 54 -106 116 -75 168 9 415 165 486 52 24 100 24 151 0z m-755 -337
                            c251 -112 462 -457 487 -796 8 -113 -7 -167 -61 -224 -100 -104 -232 -85 -476
                            69 -27 17 -50 22 -101 22 -59 0 -71 -4 -121 -36 -204 -136 -357 -155 -454 -55
                            -54 57 -69 111 -61 224 28 369 264 726 542 819 64 21 169 11 245 -23z"/>
                            </g>
                            </svg>
                            <span>Αγάπη</span>

                    </div>
                    <div class="icon dog">
                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="-5 0 263.000000 256.000000" preserveAspectRatio="xMidYMid meet">

                            <g transform="translate(0.000000,256.000000) scale(0.100000,-0.100000)"
                            fill="#000000" stroke="none">
                            <path id="headElement" d="M1550 2491 c-146 -45 -212 -193 -145 -328 56 -111 185 -153 302 -99
                            111 52 160 196 104 306 -49 94 -167 149 -261 121z m190 -289 c0 -11 -39 -46
                            -67 -61 -12 -6 -43 -11 -68 -11 -25 0 -56 5 -68 11 -28 15 -67 50 -67 61 0 4
                            61 8 135 8 74 0 135 -4 135 -8z"/>
                            <path id="bodyElement" d="M2418 2093 c-34 -28 -227 -193 -263 -224 -20 -18 -25 -16 -170 49
                            l-150 67 -206 3 c-267 4 -277 2 -333 -86 -52 -81 -78 -136 -121 -265 -55 -159
                            -95 -392 -95 -550 0 -124 -87 -445 -150 -554 -34 -60 -56 -70 -46 -22 3 17 6
                            65 6 105 0 67 2 74 20 74 11 0 20 1 20 3 0 1 -9 26 -21 56 -12 34 -17 57 -11
                            63 9 9 -66 167 -79 168 -3 0 -14 -18 -24 -41 -23 -49 -53 -71 -109 -79 l-41
                            -5 3 -90 c8 -229 73 -355 183 -355 50 0 104 47 146 127 30 57 103 268 103 298
                            0 19 14 19 30 0 18 -22 66 -18 89 7 25 26 26 34 46 273 15 182 38 329 69 425
                            13 43 14 39 15 -114 1 -108 -13 -334 -44 -709 -44 -541 -45 -551 -27 -585 40
                            -78 135 -91 198 -28 26 26 33 43 38 87 7 60 76 899 76 924 0 11 10 15 35 15
                            19 0 35 -1 35 -2 2 -77 82 -972 89 -990 13 -34 55 -66 97 -74 48 -9 104 21
                            127 69 19 37 18 44 -27 600 -38 465 -46 604 -46 805 0 133 2 242 5 242 2 0 55
                            -22 117 -49 145 -63 148 -63 180 -47 37 20 365 302 372 322 12 32 5 66 -19 89
                            -32 33 -75 32 -117 -2z m-1228 -1159 c0 -35 -18 -74 -34 -74 -20 0 -36 31 -36
                            67 0 26 3 29 35 29 30 0 35 -3 35 -22z m-440 -396 c-1 -42 -1 -43 -15 -18 -19
                            33 -19 60 0 60 11 0 15 -11 15 -42z"/>
                            <path id="headDogElement" d="M577 1326 c-27 -7 -61 -23 -75 -35 -15 -11 -43 -30 -63 -41 -50 -27
                            -65 -91 -34 -150 18 -34 43 -38 75 -12 17 13 24 33 29 77 3 33 11 59 16 57 12
                            -3 8 -97 -6 -133 -9 -22 -5 -38 25 -97 41 -82 65 -102 121 -102 56 0 80 20
                            121 102 30 60 34 74 25 101 -14 46 -18 121 -6 125 6 1 13 -23 17 -55 11 -88
                            71 -125 103 -63 16 31 20 97 7 117 -4 7 -38 32 -76 57 -97 64 -179 79 -279 52z
                            m39 -187 c3 -6 0 -17 -7 -25 -18 -17 -44 -2 -36 20 7 18 33 21 43 5z m141 -5
                            c8 -22 -18 -37 -36 -20 -7 8 -10 19 -7 25 10 16 36 13 43 -5z m-67 -169 c17
                            -20 4 -35 -31 -35 -21 0 -29 5 -29 18 0 10 3 22 7 25 11 12 40 8 53 -8z"/>
                            <path id="bodyDogElement1" d="M464 901 c-26 -50 -38 -83 -32 -89 6 -6 2 -30 -11 -66 -19 -55 -19
                            -56 0 -56 13 0 19 -7 19 -22 0 -13 5 -142 11 -288 12 -282 18 -310 62 -310 13
                            0 32 6 43 14 18 13 19 30 22 255 2 195 6 241 17 241 11 0 12 -41 8 -235 l-6
                            -235 66 0 67 0 0 150 0 150 -29 41 c-51 69 -81 195 -81 336 0 71 -1 73 -30 88
                            -18 9 -39 34 -52 60 -12 25 -24 45 -27 45 -4 0 -25 -36 -47 -79z"/>
                            <path id="bodyDogElement2" d="M391 428 c-11 -25 -24 -73 -27 -106 l-7 -59 -97 -27 c-130 -34 -259
                            -83 -240 -89 35 -13 208 -37 264 -37 50 0 63 -4 74 -20 12 -19 45 -26 74 -15
                            11 4 12 18 7 63 -4 31 -8 102 -9 157 -1 55 -5 118 -9 140 l-8 40 -22 -47z"/>
                            <path id="bodyDogElement3" d="M917 412 c-14 -15 -17 -40 -18 -123 0 -57 -4 -127 -8 -156 -8 -56 -3
                            -63 43 -63 45 0 62 48 26 73 -20 14 -21 15 -4 77 15 52 16 72 7 127 -14 77
                            -23 90 -46 65z"/>
                            <path id="bodyDogElement4" d="M752 250 c3 -136 5 -153 22 -166 29 -21 64 -17 80 9 9 14 16 68 20
                            157 l6 136 -43 -1 c-23 0 -53 4 -65 8 l-24 9 4 -152z"/>
                            </g>
                        </svg>
                        <span>Φροντίδα</span>
                    </div>
                </div>
                <div class="faIconLink">
                    <a href="https://www.facebook.com/groups/1414771202102310" target="_blank"> <i class="fa-brands fa-facebook fa-2xl" style="color: #ffffff;"></i> </a>
                    <a href="https://www.instagram.com/mike_t_dog_trainer/" target="_blank"> <i class="fa-brands fa-instagram fa-2xl" style="color: #ffffff;"></i> </a>
                    <a href="#" target="_blank"> <i class="fa-brands fa-youtube fa-2xl" style="color: #ffffff;"></i> </a>
                </div>
            </div>
            
            
            
        </section>
        <!-- <section class="bigLogo">
            <div class="container">
               <div class="bigLogoWrap">
               <img src="/svg-icons/maikDogTrainer1.png" alt="">
               </div>
            </div>
        </section> -->
        <section class="bio">
            <div class="container">
                <h3>Bio</h3>
                <div class="bioWrap">
                    <div class="bioText">
                        <p>Είμαι ο Μιχάλης Τριανταφυλλίδης και είμαι ειδικός στην εκπαίδευση σκύλων. Πιστεύω ότι η εκπαίδευση των σκύλων είναι ζωτικής σημασίας για την υγεία και την ευημερία τους, καθώς και για την ασφάλεια των ανθρώπων που βρίσκονται γύρω τους. Στον επαγγελματικό μου βίο έχω δουλέψει με πολλούς διαφορετικούς τύπους σκύλων, από τις πιο μικρές φυλές μέχρι τις πιο μεγάλες.</p>
                        <p>Επιπλέον, πιστεύω ότι η αγάπη και η φροντίδα που προσφέρουμε στα κατοικίδιά μας είναι εξίσου σημαντική με την εκπαίδευσή τους. Για αυτό το λόγο, παρέχω επίσης συμβουλές και πρακτικές συμβουλές για το πώς να φροντίζετε τον σκύλο σας και να δημιουργήσετε ένα θετικό περιβάλλον για το κατοικίδιό σας.
                        </p>
                        <p>Εάν ενδιαφέρεστε για την εκπαίδευση του σκύλου σας ή αν χρειάζεστε συμβουλές για τη φροντίδα του, είμαι εδώ για να σας βοηθήσω. Είμαι εξειδικευμένος στην εκπαίδευση σκύλων και έχω εκπαιδεύσει πολλούς σκύλους στο παρελθόν. Μπορείτε να επικοινωνήσετε μαζί μου για περισσότερες πληροφορίες ή για να κανονίσετε μια συνάντηση για την εκπαίδευση του σκύλου σας.</p>
                        <p>Ευχαριστώ που επισκεφθήκατε το βιογραφικό μου. Ανυπομονώ να σας βοηθήσω να έχετε μια υγιή και ευτυχισμένη σχέση με τον σκύλο σας!</p> 
                    </div>
                    <div class="bioImages">
                        <img src="/images/pic1.jpg" alt="">
                        <img src="/images/pic2.jpg" alt="">
                        <img src="/images/pic3.jpg" alt="">
                        <img src="/images/pic4.jpg" alt="">
                        <img src="/images/pic5.jpg" alt="">
                        <img src="/images/pic6.jpg" alt="">
                        <img src="/images/pic7.jpg" alt="">
                        <img src="/images/pic8.jpg" alt="">
                        <img src="/images/pic9.jpg" alt="">
                        <img src="/images/pic10.jpg" alt="">
                        <img src="/images/pic11.jpg" alt="">
                        <img src="/images/pic12.jpg" alt="">
                        <img src="/images/pic13.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="videoContent p-0">
            <div class="overlay"></div>
            <video width="100%" playsinline muted >
                <source src="video/cat-dog.mp4" type="video/mp4">
                <source src="video/cat-dog.webm" type="video/webm">
            </video>
        </section>
        <section class="frequentQuestions">
            <div class="container">
                <div class="frequentQuestionsWrapp">
                    <h3>Συχνές ερωτήσεις</h3>
                    <div id="collapseItems">

                        <div class="item">
                                <div class="itemInside" data-toggle="collapse" data-target="#question1">
                                <h4>Ποιο είναι το κατάλληλο φαγητό για τον σκύλο μου;</h4>
                            </div>
                            <div id="question1" class="collapse" data-parent="#collapseItems">
                                <span>Το κατάλληλο φαγητό για τον σκύλο σου εξαρτάται από πολλούς παράγοντες, όπως η ηλικία, ο βαθμός δραστηριότητας, το μέγεθος και η υγεία του. Συνήθως, τα εμπορικά τροφίματα σκύλου περιέχουν όλα τα απαραίτητα θρεπτικά συστατικά και είναι η πιο ασφαλής επιλογή. Ωστόσο, είναι σημαντικό να διαβάζετε τις ετικέτες των τροφίμων και να επιλέγετε ένα τρόφιμο που να περιέχει υψηλής ποιότητας πρωτεΐνες και λίγα υδατάνθρακες. Επίσης, μην τροφοδοτείτε τον σκύλο σας ανθρώπινα τρόφιμα και αποφύγετε τις λιχουδιές και τα σνακ που περιέχουν υπερβολικά πολλά λιπαρά ή ζάχαρη.</span>
                            </div>
                        </div>

                        <div class="item">
                                <div class="itemInside" data-toggle="collapse" data-target="#question2">
                                <h4>Πώς μπορώ να εκπαιδεύσω τον σκύλο μου να μην τραβάει στην άλλη μεριά του δρόμου;</h4>
                            </div>
                            <div id="question2" class="collapse" data-parent="#collapseItems">
                                <span>Μπορείς να εκπαιδεύσεις τον σκύλο σου να μην τραβάει στην άλλη μεριά του δρόμου με τη χρήση ενός λουριού κατάρτισης και επιβράβευσης. Μόλις ο σκύλος αρχίσει να τραβάει, σταμάτησε να προχωράς και περίμενε μέχρι να χαλαρώσει το λουρί. Στη συνέχεια, πες "καλός" ή άλλη θετική λέξη και δώσε του ένα λουράκι σαν επιβράβευση. Επαναλαμβάνετε αυτή τη διαδικασία κατά τη διάρκεια της βόλτας μέχρι να μάθει να μην τραβάει στην άλλη μεριά του δρόμου.</span>
                            </div>
                        </div>

                        <div class="item">
                                <div class="itemInside" data-toggle="collapse" data-target="#question3">
                                <h4>Πόσο συχνά πρέπει να περπατάω τον σκύλο μου;</h4>
                            </div>
                            <div id="question3" class="collapse" data-parent="#collapseItems">
                                <span>Ο σκύλος σας πρέπει να περπατάει τουλάχιστον μια φορά την ημέρα, για περίπου 30 λεπτά έως μία ώρα. Ωστόσο, ανάλογα με την φυλή, την ηλικία, το μέγεθος και τη σωματική κατάσταση του σκύλου, η συχνότητα και η διάρκεια των περιπάτων μπορεί να διαφέρουν. Είναι σημαντικό να συμβουλευτείτε τον κτηνίατρο σας για την κατάλληλη άσκηση για τον σκύλο σας.</span>
                            </div>
                        </div>

                        <div class="item">
                            <div class="itemInside" data-toggle="collapse" data-target="#question4">
                                <h4>Πώς μπορώ να εκπαιδεύσω τον σκύλο μου να μην γαβγίζει ανεξέλεγκτα;</h4>
                            </div>
                            <div id="question4" class="collapse" data-parent="#collapseItems">
                                <span>Μια απλή τεχνική για να εκπαιδεύσετε τον σκύλο σας να μην γαβγίζει ανεξέλεγκτα είναι να χρησιμοποιήσετε την εντολή "Σίγα". Κάθε φορά που ο σκύλος σας αρχίζει να γαβγίζει, πείτε τη λέξη "Σίγα" με αυστηρή αλλά ήρεμη φωνή και ανταμείψτε τον όταν σταματήσει το γαβγισμα. Στη συνέχεια, αυξήστε σταδιακά τη διάρκεια του χρόνου που ο σκύλος πρέπει να μείνει ήσυχος προτού του δώσετε το ανταμοιβαίο σας σήμα.</span>
                            </div>
                        </div>

                        <div class="item">
                            <div class="itemInside" data-toggle="collapse" data-target="#question5">
                                <h4>Πότε πρέπει να αρχίσω την κοινωνικοποίηση του σκύλου μου;</h4>
                            </div>
                            <div id="question5" class="collapse" data-parent="#collapseItems">
                                <span>Η κοινωνικοποίηση του σκύλου σας θα πρέπει να ξεκινήσει από την πρώτη ημέρα που τον φέρνετε στο σπίτι σας, στον κόσμο των ανθρώπων και των άλλων ζώων. Η σωστή κοινωνικοποίηση μπορεί να βοηθήσει το σκύλο σας να είναι πιο άνετος και προσαρμοστικός σε διάφορες καταστάσεις και κοινωνικά περιβάλλοντα.</span>
                            </div>
                        </div>

                        <div class="item">
                            <div class="itemInside" data-toggle="collapse" data-target="#question6">
                                <h4>Πώς μπορώ να αποτρέψω τον σκύλο μου από το να δαγκώνει;</h4>
                            </div>
                            <div id="question6" class="collapse" data-parent="#collapseItems">
                                <span>Μια αποτελεσματική τεχνική για να αποτρέψετε τον σκύλο σας από το δάγκωμα είναι να αγοράσετε κατάλληλα παιχνίδια για δάγκωμα και να ενθαρρύνετε το σκύλο σας να τα μασάει. Όταν δαγκώνει κάτι που δεν πρέπει, πείτε του "ΟΧΙ" και δώστε του ένα από τα παιχνίδια του για δάγκωμα. Επίσης, πρέπει να του δείξετε ότι το δάγκωμα είναι απαράδεκτο, αποσύροντας την προσοχή σας και αγνοώντας τον για λίγο όταν δαγκώνει. Με την επανάληψη αυτών των τεχνικών, ο σκύλος σας θα μάθει ότι το δάγκωμα δεν είναι αποδεκτό συμπεριφορά.</span>
                            </div>
                        </div>

                        <div class="item">
                            <div class="itemInside" data-toggle="collapse" data-target="#question7">
                                <h4>Πόσο σημαντικό είναι το περιβάλλον του σκύλου μου για την ευημερία του;</h4>
                            </div>
                            <div id="question7" class="collapse" data-parent="#collapseItems">
                                <span>Το περιβάλλον του σκύλου σας είναι πολύ σημαντικό για την ευημερία του, καθώς ο σκύλος απαιτεί μια καθαρή, ασφαλή και άνετη περιοχή για να ζήσει. Ένα καλά οργανωμένο και εναρμονισμένο περιβάλλον μπορεί να βοηθήσει το σκύλο σας να αισθανθεί ασφαλής και ήρεμος, ενώ ένα περιβάλλον που δεν είναι κατάλληλο μπορεί να οδηγήσει σε άγχος και συμπεριφορές που δεν θέλουμε να δούμε.</span>
                            </div>
                        </div>

                        <div class="item">
                            <div class="itemInside" data-toggle="collapse" data-target="#question8">
                                <h4>Ποιος είναι ο καλύτερος τρόπος για να εκπαιδεύσω τον σκύλο μου να καθίσει και να μείνει;</h4>
                            </div>
                            <div id="question8" class="collapse" data-parent="#collapseItems">
                                <span>Ο καλύτερος τρόπος για να εκπαιδεύσετε τον σκύλο σας να καθίσει και να μείνει είναι να χρησιμοποιήσετε θετική ενίσχυση και την μέθοδο της αλυσίδας, όπου ανταμείβετε τον σκύλο σας όταν καθίσει και μετά τον καλείτε να μείνει και περιμένετε για μερικά δευτερόλεπτα πριν του δώσετε την εντολή να φύγει. Επαναλάβετε τη διαδικασία αυτή συχνά με συνέπεια και αφοσίωση για να ενισχύσετε την εκπαίδευση του σκύλου σας.</span>
                            </div>
                        </div>

                        <div class="item">
                            <div class="itemInside" data-toggle="collapse" data-target="#question9">
                                <h4>Ποιες είναι οι πιο συνηθισμένες συμπεριφορές προβληματικών σκύλων και πώς μπορώ να τις διορθώσω;</h4>
                            </div>
                            <div id="question9" class="collapse" data-parent="#collapseItems">
                                <span>Οι πιο συνηθισμένες συμπεριφορές προβληματικών σκύλων είναι η επιθετικότητα, η υπερβολική λάλαγα, η αντικοινωνικότητα, η υπερβολική ενασχόληση με αντικείμενα και η υπερβολική ανησυχία. Για να τις διορθώσετε, μπορείτε να χρησιμοποιήσετε θετική ενίσχυση, όπως το κλικερ εκπαίδευσης, και να αναζητήσετε τη βοήθεια ενός εκπαιδευτή σκύλων εάν η συμπεριφορά είναι ιδιαίτερα προβληματική ή επικίνδυνη.</span>
                            </div>
                        </div>

                        <div class="item">
                            <div class="itemInside" data-toggle="collapse" data-target="#question10">
                                <h4>Πώς μπορώ να εκπαιδεύσω τον σκύλο μου για να περπατάει δίπλα μου χωρίς να τραβάει την άλλη άκρη της οδού;</h4>
                            </div>
                            <div id="question10" class="collapse" data-parent="#collapseItems">
                                <span>Μπορείτε να εκπαιδεύσετε τον σκύλο σας να περπατάει δίπλα σας χωρίς να τραβάει την άλλη άκρη της οδού με τη χρήση θετικής ενίσχυσης και συνεπή εκπαίδευσης. Αρχίστε με σύντομες βόλτες και ανταμείβετε τον σκύλο σας με λιχουδιές όταν περπατά δίπλα σας χωρίς να τραβάει. Σταδιακά αυξήστε τη διάρκεια των βολτών και την απόσταση που καλύπτετε και συνεχίστε να ανταμείβετε τον σκύλο σας για την επιθυμητή συμπεριφορά του.</span>
                            </div>
                        </div>
                    </div>
                    <button id="load-more" class="clickBtn">Δές περισσότερες</button>
                </div>
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
                            <a class="fb" href="https://www.facebook.com/groups/1414771202102310" target="_blank"></a>
                            <a class="igm" href="https://www.instagram.com/mike_t_dog_trainer/" target="_blank"></a>
                            <a class="ytb" href="#" target="_blank"></a>
                        </div>
                         <div class="copyright mt-4 pl-4">
                            <p>© 2023. All right reserved.</p>
                         </div>
                         <div class="scrollToTop" title="Πήγαινε στην κορυφή" onclick="scrollToTop()"></div>
                    </div>
                </div>
            </div>
            <!-- Quantcast Tag -->
            <script type="text/javascript">
                window._qevents = window._qevents || [];

                (function() {
                    var elem = document.createElement('script');
                    elem.src = (document.location.protocol == "https:" ? "https://secure" : "http://edge") + ".quantserve.com/quant.js";
                    elem.async = true;
                    elem.type = "text/javascript";
                    var scpt = document.getElementsByTagName('script')[0];
                    scpt.parentNode.insertBefore(elem, scpt);
                })();

                    window._qevents.push({
                    qacct:"p-814Y20g1dk27X",
                    uid:"__INSERT_EMAIL_HERE__"
                });
                </script>

                <noscript>
                <div style="display:none;">
                <img src="//pixel.quantserve.com/pixel/p-814Y20g1dk27X.gif" border="0" height="1" width="1" alt="Quantcast"/>
                </div>
            </noscript>
            <!-- End Quantcast tag -->
        </footer>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script type="text/javascript" src="components/contact_form/contact_form.js"></script>
    
    
</body>
</html>