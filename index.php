<?php
require_once __DIR__ .'../db/connection.php';



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="image/hlogo.png">
    <title>MedCentre.com</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/styleo.css">

</head>

<body>

    <!-- header section starts  -->

    <header class="header">
       
       

       
        <a href="#" class="logo"> <i class="fas fa-heartbeat"></i>Med<span>Centre</span> </a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#services">services</a>
            <a href="#about">about</a>
            <a href="#doctors">doctors</a>
            <a href="#book">book</a>
            <a href="#review">Testimonial</a>
            <a href="#support">support</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </header>

    <!-- header section ends -->

    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="image">
            <img src="image/home-img.svg" alt="">
        </div>

        <div class="content">
            <h3>We are here , <br>
                for your Care</h3>
            <p>MedCentre Clinics, Egypt’s leader in patient experience, provides better care of the sick, investigates
                their problems, and furthers education of those whose sickness can be prevented.</p>
            <a href="views/sign in user.php" target="_balnk" class="btn btn-danger sbutton">Sign UP</a><br>
            <a href="#footer" class="btn"> contact us <span class="fas fa-chevron-right"></span> </a>
        </div>

    </section>

    <!-- home section ends -->

    <!-- icons section starts  -->

    <section class="icons-container">

        <div class="icons">
            <i class="fas fa-user-md"></i>
            <h3>140+</h3>
            <p>doctors at work</p>
        </div>

        <div class="icons">
            <i class="fas fa-users"></i>
            <h3>1040+</h3>
            <p>satisfied patients</p>
        </div>

        <div class="icons">
            <i class="fas fa-procedures"></i>
            <h3>500+</h3>
            <p>bed facility</p>
        </div>

        <div class="icons">
            <i class="fas fa-hospital"></i>
            <h3>80+</h3>
            <p>available hospitals</p>
        </div>

    </section>

    <!-- icons section ends -->

    <!-- services section starts  -->

    <section class="services" id="services">

        <h1 class="heading"> our <span>services</span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="image/cardio.png" alt="">
                <h3>Cardiothoracic Surgery</h3>
                <div>
                    <p>cardiothoracic surgery patients can benefit from professional care and enrollment in tailored
                        nutritional and psychological rehabilitation programs..</p>
                </div>
                <a href="views/service1.php" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>

            <div class="box">
                <img src="image/gun.png" alt="">
                <h3>Dermatology & Laser</h3>
                <div>
                    <p>laser technology, cautery, cryotherapy, and peeling techniques are some of the advanced
                        techniques utilized to treat..</p>
                </div>
                <a href="views/service2.php" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>

            <div class="box">
                <img src="image/ear.png" alt="">
                <h3>Audiology & Phoniatrics</h3>
                <div>
                    <p>workable hearing loss solutions with aural rehabilitation and assistive devices including hearing
                        aids and cochlear implants..</p>
                </div>
                <a href="views/service3.php" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>

            <div class="box">
                <img src="image/ct-scan.png" alt="">
                <h3>Radiology unit</h3>
                <div>
                    <p>The most up-to-date equipment diagnosing Abdominal, Pelvic, Vascular, Cardiac, Obstetrics, and
                        Gynecological problems. Physicians who are mainly trained and specialized execute..</p>
                </div>
                <a href="views/service4.php" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>

            <div class="box">
                <img src="image/lab.png" alt="">
                <h3>Laboratory</h3>
                <div>
                    <p> The mission of the lab is to improve health by providing clinical laboratory testing services ,
                        including highly sophisticated techniques for the prevention, early assessment..</p>
                </div>
                <a href="views/service5.php" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>

            <div class="box">
                <img src="image/orthopedic.png" alt="">
                <h3>Orthopedics</h3>
                <div>
                    <p>Highly specialized professors and consultants offer diagnostic and therapeutic consultations
                        including applying and removing the cast, physiotherapy advice, local injections..</p>
                </div>
                <a href="views/service6.php" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>

            <div class="box">
                <img src="image/therapy.png" alt="">
                <h3> Physiotherapy</h3>
                <div>
                    <p>Physiotherapy helps to restore movement and function when someone is affected by injury, illness,
                        or disability. It can also help to reduce your risk of injury or illness in..</p>
                </div>
                <a href="views/service7.php" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>

            <div class="box">
                <img src="image/pregnant.png" alt="">
                <h3> Obstetrics & Gynecology </h3>
                <div>
                    <p>Our obstetrics and gynecology team is dedicated to meeting the complete healthcare needs of
                        women, routine women health..</p>
                </div>
                <a href="views/service8.php" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>

        </div>

    </section>

    <!-- services section ends -->

    <!-- about section starts  -->

    <section class="about" id="about">

        <h1 class="heading"> <span>about</span> us </h1>

        <div class="row">

            <div class="image">
                <img src="image/about-img.svg" alt="">
            </div>

            <div class="content">
                <h3>Preserving your life is our mission</h3>
                <p>We provide a distinguished service to preserve the patient's life, as our medical center contains a
                    number of departments, including internal, chest, dental, dermatology, venereal, radiology and
                    analysis.</p>
                <p>It also contains a group of qualified doctors who are able to perform the work in a humane first and
                    then professionally.</p>
                <a href="views/about.php" target="_blank" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>

            </div>

        </div>

    </section>

    <!-- about section ends -->

    <!-- doctors section starts  -->

    <section class="doctors" id="doctors">

        <h1 class="heading"> our <span>doctors</span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="image/doc-1.jpg" alt="">
                <h3>Ahmed Emara</h3>
                <span>Physiotherapist</span>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <img src="image/doc-2.jpg" alt="">
                <h3>Mariam Adel</h3>
                <span>Cardiologist</span>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <img src="image/doc-3.jpg" alt="">
                <h3>Yasmeen Ebaid</h3>
                <span>Gynecologist</span>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <img src="image/doc-4.jpg" alt="">
                <h3>Eslam Mamdoh</h3>
                <span>Anesthesiologist</span>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <img src="image/doc-5.jpg" alt="">
                <h3>Mostafa Halem</h3>
                <span>Dermatologist</span>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <img src="image/doc-6.jpg" alt="">
                <h3>Mahmoud Hamed</h3>
                <span>Radiologist</span>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

        </div>

    </section>

    <!-- doctors section ends -->

    <!-- booking section starts   -->

    <section class="book" id="book">

        <h1 class="heading"> <span>book</span> now </h1>

        <div class="row">

            <div class="image">
                <img src="image/book-img.svg" alt="">
            </div>

            <form action="./views/appointment.php" method="post">
                <h3>book appointment</h3>
                <input type="text" placeholder="your name" class="box" required name="name">
                <input type="number" placeholder="your number" class="box" required name="number">
                <input type="email" placeholder="your email" class="box" required name="email">
                <input type="date" class="box" required name="date">
                <input type="time" class="box" required name="time">
                <input type="submit" value="book now" class="btn" name="book_submit">
            </form>

        </div>

    </section>

    <!-- booking section ends -->

    <!-- review section starts  -->

    <section class="review" id="review">

        <h1 class="heading"> client's <span>reviews</span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="image/11.jpg" alt="">
                <h3>Violet Markey</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p class="text">I was recently cared for at Hospital following a heart attack while at airport . I just
                    wanted to say a few words about
                    the exceptional care I received in the Hospital Cardiac Care Unit. All of the doctors and nurses
                    were friendly,
                    pleasant, kind, thorough, conscientious and professional. I am happy to have been in their care.</p>
            </div>

            <div class="box">
                <img src="image/profile-pic.png" alt="">
                <h3>James poter</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p class="text">I recently found myself under your care for a cardiac issue. While there, accompanied by
                    my wife, we found that the
                    entire staff at Hospital was exceedingly professional and efficient, from your E.R. receptionists to
                    the cardiac care
                    team. You should be proud of your outstanding staff and service.</p>
            </div>

            <div class="box">
                <img src="image/thumb2.jpg" alt="">
                <h3>Donatilo shark</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p class="text">I am writing this letter to thank everyone at your wonderful hospital for the excellent
                    care that was given to me.
                    Within minutes of arriving in the emergency room I was treated for what was diagnosed as a mild
                    stroke. I want to thank
                    the entire staff for the kind and caring assistance I received, including the security guards, ER
                    staff, and the
                    doctors, nurses and aides on the third floor. Everyone!
                </p>
            </div>

        </div>

    </section>

    <!-- review section ends -->

    <!-- support section starts  -->

    <section class="support" id="support">

        <h1 class="heading"> our <span>support</span> </h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="image/doc1.jpg" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <a href="#"> <i class="fas fa-calendar"></i> 1st october, 2022 </a>
                        <a href="#"> <i class="fas fa-user"></i> by eltory </a>
                    </div>
                    <h3>Donate Funds</h3>
                    <p>Your financial gift can help a thousand children who struggle
                        from illnesses. Your gift can provide the necessary medicine, treatment, and other essentials.
                    </p>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="image/doc2.jpg" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <a href="#"> <i class="fas fa-calendar"></i> 3st septemper, 2019 </a>
                        <a href="#"> <i class="fas fa-user"></i> by eldeep </a>
                    </div>
                    <h3>Be a Volunteer</h3>
                    <p>Volunteers are playing a vital role in helping our center save lives.We are always looking for
                        your help.your help achieve the impossible.Join our team today.</p>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="image/doc3.jpg" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <a href="#"> <i class="fas fa-calendar"></i> 7st march, 2021 </a>
                        <a href="#"> <i class="fas fa-user"></i> by Batoul </a>
                    </div>
                    <h3>Host a Blood Drive</h3>
                    <p>Inspiring others to give blood by hosting a blood drive is a rewarding way to benefit your
                        community. as saving people from death stop on donate blood.</p>
                </div>
            </div>

        </div>

    </section>

    <!-- support section ends -->

    <!-- footer section starts  -->

    <section class="footer" id="footer">

        <div class="box-container">

            <div class="box">
                <h3>quick links</h3>
                <a href="#"> <i class="fas fa-chevron-right"></i> home </a>
                <a href="#"> <i class="fas fa-chevron-right"></i> services </a>
                <a href="#"> <i class="fas fa-chevron-right"></i> about </a>
                <a href="#"> <i class="fas fa-chevron-right"></i> doctors </a>
                <a href="#"> <i class="fas fa-chevron-right"></i> book </a>
                <a href="#"> <i class="fas fa-chevron-right"></i> review </a>
                <a href="#"> <i class="fas fa-chevron-right"></i> blogs </a>
            </div>

            <div class="box">
                <h3>our services</h3>
                <a href="#"> <i class="fas fa-chevron-right"></i> dental care </a>
                <a href="#"> <i class="fas fa-chevron-right"></i> message therapy </a>
                <a href="#"> <i class="fas fa-chevron-right"></i> cardioloty </a>
                <a href="#"> <i class="fas fa-chevron-right"></i> diagnosis </a>
                <a href="#"> <i class="fas fa-chevron-right"></i> ambulance service </a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
                <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
                <a href="#"> <i class="fas fa-envelope"></i> ahmed@gmail.com </a>
                <a href="#"> <i class="fas fa-envelope"></i> gamal@gmail.com </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> Alexandria, Tanta - 400104 </a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
                <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
                <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
                <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
                <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
                <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
            </div>

        </div>

        <div class="credit"> created by <span>Banha-Medical-Team</span> | all rights reserved </div>

    </section>

    <!-- footer section ends -->



















    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>