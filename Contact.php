<?php require_once('assets/header.php'); ?>
<?php require_once('assets/navbar.php'); ?>
            
                    <ul>
                        <li><a href="Home.php">Home</a></li>
                        <li><a href="About.php">About</a></li>
                        <li><a href="Clients.php">Clients</a></li>
                        <li><a href="Services.php">Vehicles</a></li>
                        <li><a href="Jobs.php">Jobs</a></li>
                        <li class="active"><a href="COntact.php">Contact</a></li>
                    </ul>
                
            </nav>
            </header>
        </nav>
        <div class="scroll">
            <a href="#scroll"><i class='bx bxs-chevron-up'></i></a>
        </div>
        <div class="try">
            <h4 class="try1">Contact Us</h4>
        </div>


    <div>
    <div class="main-contact">
        <h1>FEEL FREE TO CONTACT US. WE ARE HAPPY TO HEAR FROM YOU. </h1>
        <div class="o-manpower">
            <h2><i class='bx bx-buildings' ></i> HEAD OFFICE FOR TRANSPORT </h2>
        </div> 

        <div class="c-details">
                <h4>Address:</h4>
                <p> #179 Palapala road, sampaloc 1, dasmariñas city, cavite  4114</p>
                <h4>Office Hours:</h4>
                <p>8:00AM to 6:00PM From Monday to Thursday / 8:00AM to 5:00PM friday / 8:00AM To 12:00PM Saturday</p>
                <h4>Response Monitoring:</h4>
                <p> 8:00am to 6:00pm Monday to Saturday</p>
                <h4>Email Address:</h4>
                <p>newfoundlandtrans23@gmail.com</p>
                <h4>Landline Numbers:</h4>
                <p>(046) 454 6009</p>
                <h4>Mobile Numbers:</h4>
                <p>+63 995 4474 502</p>
                <p>+63 920 7222 465</p>
                <p>+63 917 3164 065</p>
                <br><br><br>
        </div>

    </div>
        <div class="google-map">
            <div class="map1">
                <h3>Location Map – Head Office of transport services</h3>
                <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61859.46161242559!2d120.8811639486328!3d14.298858500000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d5b9b52631cb%3A0xb53e963407a130f8!2sNew%20Found%20Land%20Manpower%20Services!5e0!3m2!1sen!2sph!4v1687825646022!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
            </div>
        </div>
    </div>


    <script>
        ScrollReveal({ 
            // reset: true,
            distance: '60px',
            duration: 2000,
            delay: 300,
         });
         ScrollReveal().reveal('.main-contact h1, .o-manpower', { delay: 10, origin: 'top' });
         ScrollReveal().reveal('.c-details h4, .c-details p', { delay: 10, origin: 'left', interval: 200});
         ScrollReveal().reveal('.map1 h3, .map1 iframe, .map2 h3, .map2 iframe ', { delay: 10, origin: 'right', interval: 200}); 

         ScrollReveal().reveal('.try',  { delay: 500, origin: 'left' });
    </script>



    <!-- <div style="margin-top: 1140px"></div> -->   
<!-- <div class="size"></div> -->
<?php require_once('assets/footer.php'); ?>   