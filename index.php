<!DOCTYPE html>
<html>
<title>Portofolio Apreza</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: "Montserrat", sans-serif
    }

    .w3-row-padding img {
        margin-bottom: 12px
    }

    /* Set the width of the sidebar to 120px */
    .w3-sidebar {
        width: 120px;
        background: #222;
    }

    /* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
    #main {
        margin-left: 120px
    }

    /* Remove margins from "page content" on small screens */
    @media only screen and (max-width: 600px) {
        #main {
            margin-left: 0
        }
    }
</style>

<body class="w3-black">

    <!-- Icon Bar (Sidebar - hidden on small screens) -->
    <nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
        <!-- Avatar image in top left corner -->
        <img src="/w3images/avatar_smoke.jpg" style="width:100%">
        <a href="#" class="w3-bar-item w3-button w3-padding-large w3-black">
            <i class="fa fa-home w3-xxlarge"></i>
            <p>HOME</p>
        </a>
        <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
            <i class="fa fa-user w3-xxlarge"></i>
            <p>ABOUT</p>
        </a>
        <a href="#photos" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
            <i class="fa fa-eye w3-xxlarge"></i>
            <p>PHOTOS</p>
        </a>
        <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
            <i class="fa fa-envelope w3-xxlarge"></i>
            <p>CONTACT</p>
        </a>
    </nav>

    <!-- Navbar on small screens (Hidden on medium and large screens) -->
    <div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
        <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
            <a href="#" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
            <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">ABOUT</a>
            <a href="#photos" class="w3-bar-item w3-button" style="width:25% !important">PHOTOS</a>
            <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">CONTACT</a>
        </div>
    </div>

    <!-- Page Content -->
    <div class="w3-padding-large" id="main">
        <!-- Header/Home -->
        <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
            <h1 class="w3-jumbo"><span class="w3-hide-small">I'm</span> Apreza Allanda.</h1>
            <p>Dancing and Reading.</p>
            <img src="c:\Users\RPL-SMKN 4 BOGOR\Downloads\WhatsApp Image 2023-10-09 at 09.35.20.jpeg" alt="girl"
                class="w3-image" width="250" height="350">
        </header>

        <!-- About Section -->
        <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
            <h2 class="w3-text-light-grey">About Me</h2>
            <hr style="width:200px" class="w3-opacity">
            <p>Hallooo Everyonee!!!
                <br>Welcome to my Portofolio. Saya Apreza Allanda pelajar dari SMK NEGERI 4 KOTA BOGOR. Saya lahir di
                Bogor 01
                April 2007 dan sekarang saya bertempat tinggal di kota Bogor Selatan,
                kel.Muarasari, kp.Buntar Rt003/Rw008. Hobi saya yaitu menari dan memasak. Jurusan yang sedang saya
                geluti saat ini adalah Pengembangan
                Perangkat Lunak dan GIM atau biasa di singkat menjadi PPLG. PPLG sangat berguna bagi kemajuan teknologi
                saat ini.
                Saat ini saya belajar tentang Pemograman Web, desain grafis, basis data, GIM, dan lain sebagainya.

            </p>

            <h3 class="w3-padding-16 w3-text-light-grey">My Skills</h3>
            <p class="w3-wide">Editing Video & Photo</p>
            <div class="w3-white">
                <div class="w3-dark-grey" style="height:28px;width:60%"></div>
            </div>
            <p class="w3-wide">Web Design</p>
            <div class="w3-white">
                <div class="w3-dark-grey" style="height:28px;width:25%"></div>
            </div>
            <p class="w3-wide">Microsoft Office</p>
            <div class="w3-white">
                <div class="w3-dark-grey" style="height:28px;width:50%"></div>
            </div><br>

            <div class="w3-row w3-center w3-padding-16 w3-section w3-light-grey">
                <div class="w3-quarter w3-section">
                    <span class="w3-xlarge">99+</span><br>
                    Partners
                </div>
                <div class="w3-quarter w3-section">
                    <span class="w3-xlarge">25+</span><br>
                    Projects Done
                </div>
                <div class="w3-quarter w3-section">
                    <span class="w3-xlarge">5+</span><br>
                    Studied
                </div>
                <div class="w3-quarter w3-section">
                    <span class="w3-xlarge">20+</span><br>
                    Presentation
                </div>
            </div>

            <!-- Grid for pricing tables -->
            <h3 class="w3-padding-16 w3-text-light-grey">Which I'm Studying Right Now</h3>
            <div class="w3-row-padding" style="margin:0 -16px">
                <div class="w3-half w3-margin-bottom">
                    <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
                        <li class="w3-dark-grey w3-xlarge w3-padding-32">NOT MASTERED YET</li>
                        <li class="w3-padding-16">HTML</li>
                        <li class="w3-padding-16">CSS</li>
                        <li class="w3-padding-16">JAVA</li>
                        <li class="w3-padding-16">JAVASCRIPT</li>
                        <li class="w3-padding-16">NetBeans</li>
                        <li class="w3-light-grey w3-padding-24">
                        </li>
                    </ul>
                </div>

                <div class="w3-half">
                    <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
                        <li class="w3-dark-grey w3-xlarge w3-padding-32">ALREADY MASTERED</li>
                        <li class="w3-padding-16">Microsoft Word</li>
                        <li class="w3-padding-16">Microsoft PowerPoint</li>
                        <li class="w3-padding-16">Microsoft Excel</li>
                        <li class="w3-padding-16">Visual Studio Code</li>
                        <li class="w3-padding-16">XAMPP</li>
                        <li class="w3-light-grey w3-padding-24"></li>
                    </ul>
                </div>
                <!-- End Grid/Pricing tables -->
            </div>

            <!-- Testimonials -->
            <h3 class="w3-padding-24 w3-text-light-grey">My Achievement</h3>
            <img src="c:\Users\RPL-SMKN 4 BOGOR\Downloads\WhatsApp Image 2023-10-09 at 11.12.44.jpeg" alt="girl"
                class="w3-image" width="250" height="350">
            <img src="c:\Users\RPL-SMKN 4 BOGOR\Downloads\WhatsApp Image 2023-10-09 at 11.17.41.jpeg" alt="girl"
                class="w3-image" width="250" height="350">
            <img src="c:\Users\RPL-SMKN 4 BOGOR\Downloads\WhatsApp Image 2023-10-09 at 11.28.16.jpeg" alt="girl"
                class="w3-image" width="250" height="350"><br><br>
            <!-- Portfolio Section -->
            <div class="w3-padding-64 w3-content" id="photos">
                <h2 class="w3-text-light-grey">My Photos</h2>
                <hr style="width:200px" class="w3-opacity">

                <!-- Grid for photos -->
                <div class="w3-row-padding" style="margin:0 -16px">
                    <div class="w3-half">
                        <img src="/w3images/wedding.jpg" style="width:100%">
                        <img src="/w3images/rocks.jpg" style="width:100%">
                        <img src="/w3images/sailboat.jpg" style="width:100%">
                    </div>

                    <div class="w3-half">
                        <img src="/w3images/underwater.jpg" style="width:100%">
                        <img src="/w3images/chef.jpg" style="width:100%">
                        <img src="/w3images/wedding.jpg" style="width:100%">
                        <img src="/w3images/p6.jpg" style="width:100%">
                    </div>
                    <!-- End photo grid -->
                </div>
                <!-- End Portfolio Section -->
            </div>

            <!-- Contact Section -->
            <div class="w3-padding-64 w3-content w3-text-grey" id="contact">
                <h2 class="w3-text-light-grey">Contact Me</h2>
                <hr style="width:200px" class="w3-opacity">

                <div class="w3-section">
                    <p><i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Bogor, Jawa
                        Barat, Indonesia</p>
                    <p><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Phone: +62 8783 2174
                        334</p>
                    <p><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> Email:
                        apreza.allanda01@gmail.com
                    </p>
                </div><br>
                <p>Let's get in touch. Send me a message:</p>

                <form action="/action_page.php" target="_blank">
                    <p><input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="Name"></p>
                    <p><input class="w3-input w3-padding-16" type="text" placeholder="Email" required name="Email"></p>
                    <p><input class="w3-input w3-padding-16" type="text" placeholder="Subject" required name="Subject">
                    </p>
                    <p><input class="w3-input w3-padding-16" type="text" placeholder="Message" required name="Message">
                    </p>
                    <p>
                        <button class="w3-button w3-light-grey w3-padding-large" type="submit">
                            <i class="fa fa-paper-plane"></i> SEND MESSAGE
                        </button>
                    </p>
                </form>
                <!-- End Contact Section -->
            </div>

            <!-- Footer -->
            <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
                <i class="fa fa-facebook-official w3-hover-opacity"></i>
                <i class="fa fa-instagram w3-hover-opacity"></i>
                <i class="fa fa-snapchat w3-hover-opacity"></i>
                <i class="fa fa-pinterest-p w3-hover-opacity"></i>
                <i class="fa fa-twitter w3-hover-opacity"></i>
                <i class="fa fa-linkedin w3-hover-opacity"></i>
                <p class="w3-medium">Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank"
                        class="w3-hover-text-green">Apreza Allanda</a></p>
                <!-- End footer -->
            </footer>

            <!-- END PAGE CONTENT -->
        </div>

</body>

</html>