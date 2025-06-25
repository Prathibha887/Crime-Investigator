<?php

session_start();

require_once 'include/config.php';

if (empty($_SESSION['isLogin'])) {

    echo "<script>alert('Kindly login to proceed');location.href='index.php'</script>";
}

require_once 'include/header.php';

?>
            <!-- Carousel Start -->
            <!-- <div class="header-carousel owl-carousel">
                <div class="header-carousel-item">
                    <img src="img/crime1.jpg" class="img-fluid w-100" alt="Image">
                    <div class="carousel-caption">
                        <div class="carousel-caption-content p-3">
                            <h5 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Crime Investigator</h5>
                            <h1 class="display-1 text-capitalize text-white mb-4">Analyze evidence, interrogate suspects, surveil.</h1>
                            <p class="mb-5 fs-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                            </p>
                        </div>
                    </div>
                </div>
                <div class="header-carousel-item">
                    <img src="img/crime1.jpg" class="img-fluid w-100" alt="Image">
                    <div class="carousel-caption">
                        <div class="carousel-caption-content p-3">
                            <h5 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Crime Investigator</h5>
                            <h1 class="display-1 text-capitalize text-white mb-4">Analyze evidence, interrogate suspects, surveil.</h1>
                            <p class="mb-5 fs-5 animated slideInDown">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                            </p>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="header-carousel owl-carousel">
                <div class="header-carousel-item">
                    <img src="img/slider1.jpg" class="img-fluid w-100" alt="Image">
                    <div class="carousel-caption">
                        <div class="carousel-caption-content p-3">
                            <h5 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Crime Investigator</h5>
                            <h1 class="display-1 text-capitalize text-white mb-4">Uncovering the Truth, One Clue at a Time</h1>
                            <p class="mb-5 fs-5">It encapsulates the essence of crime investigation, where dedicated professionals meticulously piece together evidence to unravel the mysteries surrounding criminal acts.  
                            </p>
                        </div>
                    </div>
                </div>
                <div class="header-carousel-item">
                    <img src="img/slider2.jpg" class="img-fluid w-100" alt="Image">
                    <div class="carousel-caption">
                        <div class="carousel-caption-content p-3">
                            <h5 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Crime Investigator</h5>
                            <h1 class="display-1 text-capitalize text-white mb-4">Spread Kindness, Not Tragedy: Say No to Murder!</h1>
                            <p class="mb-5 fs-5 animated slideInDown">By choosing kindness over violence, individuals can contribute to building safer and more harmonious communities where conflicts are resolved peacefully.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="header-carousel-item">
                    <img src="img/slider4.jpg" class="img-fluid w-100" alt="Image">
                    <div class="carousel-caption">
                        <div class="carousel-caption-content p-3">
                            <h5 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Crime Investigator</h5>
                            <h1 class="display-1 text-capitalize text-white mb-4">From Darkness to Light: Justice Overcomes Crime</h1>
                            <p class="mb-5 fs-5 animated slideInDown">By shining a light on crime and ensuring perpetrators are held accountable, justice illuminates the path towards a safer. 
                            </p>
                        </div>
                    </div>
                </div>
                <div class="header-carousel-item">
                    <img src="img/slider5.jpg" class="img-fluid w-100" alt="Image">
                    <div class="carousel-caption">
                        <div class="carousel-caption-content p-3">
                            <h5 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Crime Investigator</h5>
                            <h1 class="display-1 text-capitalize text-white mb-4">Securing Tomorrow: Planning Against Crime Today</h1>
                            <p class="mb-5 fs-5 animated slideInDown"> By prioritizing proactive planning and crime prevention efforts today, we can build a safer and more resilient future for tomorrow, where security and peace of mind prevail. 
                            </p>
                        </div>
                    </div>
                </div>
                <div class="header-carousel-item">
                    <img src="img/slider7.avif" class="img-fluid w-100" alt="Image">
                    <div class="carousel-caption">
                        <div class="carousel-caption-content p-3">
                            <h5 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Crime Investigator</h5>
                            <h1 class="display-1 text-capitalize text-white mb-4">Justice Served: Criminals Behind Bars</h1>
                            <p class="mb-5 fs-5 animated slideInDown">It signifies the fulfillment of justice, providing closure for victims and ensuring the safety of communities by removing offenders from the streets and placing them behind bars where they can no longer pose a threat. 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Carousel End -->
        </div>
        <!-- Navbar & Hero End -->


        <!-- Services Start -->
        <!-- <div class="container-fluid service py-5">
            <div class="container py-5">
                <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="sub-style">
                        <h4 class="sub-title px-3 mb-0">What We Do</h4>
                    </div>
                    <h1 class="display-3 mb-4">Analyze evidence, interrogate suspects, surveil.</h1>
                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti amet at atque sequi quibusdam cumque itaque repudiandae temporibus, eius nam mollitia voluptas maxime veniam necessitatibus saepe in ab? Repellat!</p>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded">
                           <div class="service-img rounded-top">
                           </div>
                            <div class="service-content rounded-bottom bg-light p-4">
                                <div class="service-content-inner">
                                    <h5 class="mb-4">Analyze evidence</h5>
                                    <p class="mb-4">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus, dolor qui ullam</p>
                                    <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded">
                           <div class="service-img rounded-top">
                           </div>
                            <div class="service-content rounded-bottom bg-light p-4">
                                <div class="service-content-inner">
                                    <h5 class="mb-4">Interrogate</h5>
                                    <p class="mb-4">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus, dolor qui ullam</p>
                                    <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item rounded">
                           <div class="service-img rounded-top">
                           </div>
                            <div class="service-content rounded-bottom bg-light p-4">
                                <div class="service-content-inner">
                                    <h5 class="mb-4">Surveil</h5>
                                    <p class="mb-4">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus, dolor qui ullam</p>
                                    <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item rounded">
                           <div class="service-img rounded-top">
                           </div>
                            <div class="service-content rounded-bottom bg-light p-4">
                                <div class="service-content-inner">
                                    <h5 class="mb-4">Forensics</h5>
                                    <p class="mb-4">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus, dolor qui ullam</p>
                                    <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
         <!-- Services Start -->
         <div class="container-fluid service py-5">
            <div class="container py-5">
                <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="sub-style">
                        <h4 class="sub-title px-3 mb-0">Types Of Criminals</h4>
                    </div>
                    <h1 class="display-3 mb-4">Building Safer Communities: Exposing Criminals</h1>
                    <p class="mb-0"> By shedding light on criminal acts and holding perpetrators accountable, communities can take proactive steps towards creating safer environments for everyone.</p>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded">
                           <div class="service-img rounded-top">
                                <img src="img/robbery.jpg" class="img-fluid rounded-top w-100" alt="" style="height:234px;">
                           </div>
                            <div class="service-content rounded-bottom bg-light p-4">
                                <div class="service-content-inner">
                                    <h5 class="mb-4">Robbery</h5>
                                    <p class="mb-4" style="text-align:justify">Robbery is when force is used or threatened to steal items from a person. Theft is when something is taken from you without your permission.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded">
                           <div class="service-img rounded-top">
                                <img src="img/rape2.jpg" class="img-fluid rounded-top w-100" alt=""  style="height:234px;">
                           </div>
                            <div class="service-content rounded-bottom bg-light p-4">
                                <div class="service-content-inner">
                                    <h5 class="mb-4">Rape</h5>
                                    <p class="mb-4" style="text-align:justify">Rape is a type of sexual assault involving sexual intercourse or other forms of sexual penetration carried out against a person without their consent. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item rounded">
                           <div class="service-img rounded-top">
                                <img src="img/domestic.jpg" class="img-fluid rounded-top w-100" alt=""  style="height:234px;">
                           </div>
                            <div class="service-content rounded-bottom bg-light p-4">
                                <div class="service-content-inner">
                                    <h5 class="mb-4">Domestic Violence</h5>
                                    <p class="mb-4" style="text-align:justify">Domestic violence is violence or other abuse that occurs in a domestic setting, such as in a marriage or cohabitation for intimate partner violence.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item rounded">
                           <div class="service-img rounded-top">
                                <img src="img/cybercrime .avif" class="img-fluid rounded-top w-100" alt=""  style="height:234px;">
                           </div>
                            <div class="service-content rounded-bottom bg-light p-4">
                                <div class="service-content-inner">
                                    <h5 class="mb-4">Cybercrime</h5>
                                    <p class="mb-4" style="text-align:justify">Cybercrime encompasses a wide range of criminal activities that are carried out using digital devices and/or networks to commit various types of cybercrimes.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded">
                           <div class="service-img rounded-top">
                                <img src="img/kidnap2.jpg" class="img-fluid rounded-top w-100" alt=""  style="height:234px;">
                           </div>
                            <div class="service-content rounded-bottom bg-light p-4">
                                <div class="service-content-inner">
                                    <h5 class="mb-4">Kidnapping</h5>
                                    <p class="mb-4" style="text-align:justify">Kidnapping is the unlawful abduction and confinement of a person against their will. It is typically but not necessarily accomplished by use of force.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded">
                           <div class="service-img rounded-top">
                                <img src="img/lawbreak.webp" class="img-fluid rounded-top w-100" alt=""  style="height:234px;">
                           </div>
                            <div class="service-content rounded-bottom bg-light p-4">
                                <div class="service-content-inner">
                                    <h5 class="mb-4">Lawbreaker</h5>
                                    <p class="mb-4" style="text-align:justify">A law-breaker is someone who breaks the law. The whole idea of prison is to deprive law-breakers of liberty such as drink and drive,tripple riding ect.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item rounded">
                           <div class="service-img rounded-top">
                                <img src="img/murder2.jpg" class="img-fluid rounded-top w-100" alt=""  style="height:234px;">
                           </div>
                            <div class="service-content rounded-bottom bg-light p-4">
                                <div class="service-content-inner">
                                    <h5 class="mb-4">Murder</h5>
                                    <p class="mb-4" style="text-align:justify">Murder is the unlawful killing of another human without justification or valid excuse committed with the necessary intention.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item rounded">
                           <div class="service-img rounded-top">
                                <img src="img/childabuse.jpg" class="img-fluid rounded-top w-100" alt=""  style="height:234px;">
                           </div>
                            <div class="service-content rounded-bottom bg-light p-4">
                                <div class="service-content-inner">
                                    <h5 class="mb-4">Childabuse</h5>
                                    <p class="mb-4" style="text-align:justify">Child abuse (also called child endangerment or child maltreatment) is physical, sexual, emotional and/or psychological maltreatment or neglect of a child.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services End -->
 <!-- About Start -->
 <div class="container-fluid about bg-light py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="about-img pb-5 ps-5">
                            <img src="img/man5.jpg" class="img-fluid rounded w-100" style="height:486px;" alt="Image" >
                            <div class="about-img-inner" style="width:270px;height:250px">
                                <img src="img/main3.webp" class="img-fluid rounded-circle w-100 h-100" alt="Image">
                            </div>
                            <div class="about-experience">Justice For Everyone</div>
                        </div>
                    </div>
                    <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.4s">
                        <div class="section-title text-start mb-5">
                            <h4 class="sub-title pe-3 mb-0">About Us</h4>
                            <h1 class="display-3 mb-4">Guardians of Justice, Keepers of Peace</h1>
                            <p class="mb-4">we are committed to serving and protecting our community with integrity, professionalism, and dedication. Our mission is to ensure the safety and security of all residents, uphold the law, and provide assistance to those in need.</p>
                            <div class="mb-4">
                                <p class="text-secondary"><i class="fa fa-check text-primary me-2"></i> Interpreting the Law</p>
                                <p class="text-secondary"><i class="fa fa-check text-primary me-2"></i> Judicial Review</p>
                                <p class="text-secondary"><i class="fa fa-check text-primary me-2"></i> Appellate Jurisdiction</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Feature Start -->
        <div class="container-fluid feature py-5">
            <div class="container py-5">
                <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h4 class="sub-title px-3 mb-0">Why Choose Us</h4>
                    </div>
                    <h1 class="display-3 mb-4">Your Rights, Our Passion: Defending Every Step of the Way</h1>
                    <p class="mb-0">Our commitment goes beyond representation; it's about being your steadfast advocates at every turn. From initial consultation to courtroom proceedings, we're dedicated to defending your rights every step of the way.</p>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="row-cols-1 feature-item p-4">
                            <div class="col-12">
                                <div class="feature-icon mb-4">
                                    <div class="p-3 d-inline-flex bg-white rounded">
                                        <!-- <i class="fas fa-diagnoses fa-4x text-primary"></i> -->
                                        <i class="fa-solid fa-skull-crossbones fa-4x text-primary"></i>
                                    </div>
                                </div>
                                <div class="feature-content d-flex flex-column">
                                    <h5 class="mb-4">Identfy Scene Dimentions</h5>
                                    <p class="mb-0">Establish a perimeter large enough to contain relevant eviidence</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="row-cols-1 feature-item p-4">
                            <div class="col-12">
                                <div class="feature-icon mb-4">
                                    <div class="p-3 d-inline-flex bg-white rounded">
                                        <!-- <i class="fas fa-briefcase-medical fa-4x text-primary"></i> -->
                                        <i class="fa-solid fa-person-rifle fa-4x text-primary"></i>

                                    </div>
                                </div>
                                <div class="feature-content d-flex flex-column">
                                    <h5 class="mb-4">Establish Security</h5>
                                    <p class="mb-0">Tape around the perimeter and depending on number of people consider security guards.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="row-cols-1 feature-item p-4">
                            <div class="col-12">
                                <div class="feature-icon mb-4">
                                    <div class="p-3 d-inline-flex bg-white rounded">
                                        <i class="fa-solid fa-volume-high fa-4x text-primary"></i>
                                    </div>
                                </div>
                                <div class="feature-content d-flex flex-column">
                                    <h5 class="mb-4">Create A Plan  And Communicate</h5>
                                    <p class="mb-0">Determine the type of crime and communicate with our team.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="row-cols-1 feature-item p-4">
                            <div class="col-12">
                                <div class="feature-icon mb-4">
                                    <div class="p-3 d-inline-flex bg-white rounded">
                                        <i class="fa-solid fa-camera fa-4x text-primary"></i>
                                    </div>
                                </div>
                                <div class="feature-content d-flex flex-column">
                                    <h5 class="mb-4">Conduct Primary Survey</h5>
                                    <p class="mb-0">Identify potential evidence and capture photographs and take notes</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="row-cols-1 feature-item p-4">
                            <div class="col-12">
                                <div class="feature-icon mb-4">
                                    <div class="p-3 d-inline-flex bg-white rounded">
                                        <i class="fa-solid fa-file fa-4x text-primary"></i>
                                    </div>
                                </div>
                                <div class="feature-content d-flex flex-column">
                                    <h5 class="mb-4">Document And Processing</h5>
                                    <p class="mb-0">Collect all eviidence and keep detailed documentation</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="row-cols-1 feature-item p-4">
                            <div class="col-12">
                                <div class="feature-icon mb-4">
                                    <div class="p-3 d-inline-flex bg-white rounded">
                                        <i class="fa-solid fa-shoe-prints fa-4x text-primary"></i>
                                    </div>
                                </div>
                                <div class="feature-content d-flex flex-column">
                                    <h5 class="mb-4">Conduct Secondary Survey</h5>
                                    <p class="mb-0">Conduct another walkthrough to ensure everything has been processed and recorded</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="row-cols-1 feature-item p-4">
                            <div class="col-12">
                                <div class="feature-icon mb-4">
                                    <div class="p-3 d-inline-flex bg-white rounded">
                                        <i class="fa fa-shopping-bag   fa-4x text-primary"></i>
                                    </div>
                                </div>
                                <div class="feature-content d-flex flex-column">
                                    <h5 class="mb-4">Preserve The Evidence</h5>
                                    <p class="mb-0">Create thorough description that match photographs taken at the scene</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="row-cols-1 feature-item p-4">
                            <div class="col-12">
                                <div class="feature-icon mb-4">
                                    <div class="p-3 d-inline-flex bg-white rounded">
                                        <i class="fa-solid fa-handcuffs fa-4x text-primary"></i>
                                    </div>
                                </div>
                                <div class="feature-content d-flex flex-column">
                                    <h5 class="mb-4">Capture The Criminal</h5>
                                    <p class="mb-0">After going through many steps the main culprit  has been presented in front of court </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
            </div>
        </div>
        <!-- Feature End -->


        <!-- Book Appointment Start -->
        <div class="container-fluid appointment py-5" style="background: linear-gradient(rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.9)), url(img/punish3.jpg);
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2">
                        <div class="section-title text-start">
                            <h4 class="sub-title pe-3 mb-0">Theories Of Punishment</h4>
                            <h1 class="display-4 mb-4">Justice Prevails: Criminals Face the Consequences</h1>
                            <p class="mb-4">With unwavering dedication and relentless pursuit, we stand as the guardians of law and order, ensuring that every individual is held accountable for their deeds.</p>
                            <div class="row g-4">
                                <div class="col-sm-6">
                                    <div class="d-flex flex-column h-100">
                                        <div class="mb-1">
                                            <h5 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Justice Served: Balancing the Scales of Morality</h5>
                                        </div>
                                        <div class="mb-1">
                                            <h5 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Protecting Society, Removing the Threat</h5>
                                        </div>
                                       <div class="mb-1">
                                            <h5 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Serving Justice, Strengthening Communities</h5>
                                        </div>
                                        <div class="text-start mb-4">
                                            <a href="#" class="btn btn-primary rounded-pill text-white py-3 px-5">More Details</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="video h-100">
                                        <img src="img/video.png" class="img-fluid rounded w-100 h-100" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.4s">
                  <div class="appointment-form rounded p-5" style="height:610px;">
                            <p class="fs-4 text-uppercase text-primary">Get In Touch</p>
                            <h1 class="display-5 mb-4">Contact Info</h1>
                            
                        <p>For more enquiries  please feel to contact us through phone or you can directly visit us on our office it is always a overwelming to welcome you to our Workplace. </p>
                       <br>
					   <ul>
                       <li>
                                <p><i class="fa-solid fa-city"></i> Office:Director General of Police, CID</p>
                            </li>
                            <li>
                                <p><i class="fas fa-map-marker-alt"></i> Address: Special Units & Economic Offences,Jayanagar,<br>Banaglore-560091,<br> karnataka, India</p>
                            </li>
                            <li>
                                <p><i class="fas fa-phone-square"></i> Phone: <a href="tel:+91-9480800123">+91-9480800123</a></p>
                            </li>
                            <li>
                                <p><i class="fas fa-envelope"></i> Email: <a href="mailto:cid@justice.com">cid@justice.com</a></p>
                            </li>
                            <li>
                                <p><i class="fas fa-tty"></i> Landline: 080 - 22942444</p>
                            </li><br>
                        </ul>
						
                    
                        </div>
                    </div>
                </div>
            </div>
            <?php					 						 
if(isset($_POST['submit']))
{
	error_reporting(1);
	include("config.php");
    $fname = $_FILES["image"]["name"];
    $filename = $name.$fname;
		$tempname = $_FILES["image"]["tmp_name"];   
        $folder = "feedbacks/".$filename;
	   $name=$_POST['name'];
	   $phone=$_POST['phone'];
       $feedback=$_POST['feedback'];
       $email=$_POST['email'];
       $subject=$_POST['subject'];
       
       if (move_uploaded_file($tempname, $folder))  
       {
			$query ="INSERT INTO feedback(image,name,phone,subject,feedback) VALUES('".$filename."','".$name."','".$phone."','".$subject."','".$feedback."') ";
            mysqli_query($conn, $query);
			echo "<script>
					alert(' uploaded Successfully');
				</script>";
        }else{
            echo "<script>
					alert('Upload Failed,IMAGE should be less than 2GB');
				</script>";
		}
}
?>
        </div>
        <!-- Modal Video -->
        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- 16:9 aspect ratio -->
                        <div class="ratio ratio-16x9">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/OxZPD2rY7KE?si=tCWfttT7yWT_eObO" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Book Appointment End -->


        
        <!-- <div class="container-fluid team py-5">
            <div class="container py-5">
                <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h4 class="sub-title px-3 mb-0">Meet our team</h4>
                    </div>
                    <h1 class="display-3 mb-4">Turning Legal Challenges Into Triumphs: Your Trusted Defense Partners</h1>
                    <p class="mb-0">With a proven track record of success and a commitment to personalized advocacy, we're here to ensure that your rights are protected and your goals are achieved.</p>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item rounded">
                            <div class="team-img rounded-top h-100">
                                <img src="img/policeofficer1.png" class="img-fluid rounded-top w-100" alt="" style="height:343px;">
                            </div>
                            <div class="team-content text-center border border-primary border-top-0 rounded-bottom p-4">
                                <h5>Mr.Alok Mohan,IPS</h5>
                                <p class="mb-0">Director General & Inspector General Of Police</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item rounded">
                            <div class="team-img rounded-top h-100">
                                <img src="img/policebengaluru.jpg" class="img-fluid rounded-top w-100" alt="" style="height:343px;">                            </div>
                            <div class="team-content text-center border border-primary border-top-0 rounded-bottom p-4">
                                <h5>Mr.B. Dayananda, IPS</h5>
                                <p class="mb-0">Commissioner of Police,Bengaluru City </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item rounded">
                            <div class="team-img rounded-top h-100">
                                <img src="img/policemangaluru.jpg" class="img-fluid rounded-top w-100" alt="" style="height:343px;">                            </div>
                            <div class="team-content text-center border border-primary border-top-0 rounded-bottom p-4">
                                <h5>Mr.Anupam Agrawal,IPS</h5>
                                <p class="mb-0">Commissioner of Police,Mangaluru City</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item rounded">
                            <div class="team-img rounded-top h-100">
                                <img src="img/ladypolicebeng.png" class="img-fluid rounded-top w-100" alt="" style="height:343px;">                            </div>
                            <div class="team-content text-center border border-primary border-top-0 rounded-bottom p-4">
                                <h5>Mrs.Anitha B H, IPS</h5>
                                <p class="mb-0"> Deputy Commissioner of Police Bengaluru City</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>team
      -->


        <!-- Testimonial Start -->
        
        <div class="container-fluid testimonial py-5 wow zoomInDown" data-wow-delay="0.1s" style="background: linear-gradient(rgba(21, 185, 217, 0.9), rgba(21, 185, 217, 0.9)), url(reviewback.jpg);
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;">
            <div class="container py-5">
                <div class="section-title mb-5">
                    <div class="sub-style">
                        <h4 class="sub-title text-white px-3 mb-0">Testimonial</h4>
                    </div>
                    <h1 class="display-3 mb-4">What Users are Say</h1>
                </div>
                <div class="testimonial-carousel owl-carousel">
                <?php
                        
        $sql1 = "select * from feedback";


$result1 = mysqli_query($conn,$sql1);

$num1=mysqlI_num_rows($result1);

$sl=0;

if($num1 > 0)

{

while($row1 = mysqli_fetch_array($result1))

{

$sl+=1;

$feedback_id=$row1[0];

$name=$row1['name'];
$subject=$row1['subject'];
$message=$row1['message'];




?>
                    <div class="testimonial-item">
                    
                        <div class="testimonial-inner p-5">
  
                            <p class="text-white fs-7"><?php echo $message; ?>
                            </p>
                            <div class="text-center">
                                <h5 class="mb-2"><?php echo $name; ?> </h5>
                                <p class="mb-2 text-white-50"><?php echo $subject; ?></p>
                                
                            </div>
                            
                        </div>
                    </div>
                    <?php
                            }
                        }
                        ?>
                      
                   
                </div>
            </div>
        </div>
        
                
        <!-- Testimonial End -->


    
        <!-- <div class="container-fluid blog py-5">
            <div class="container py-5">
                <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h4 class="sub-title px-3 mb-0">Latest News</h4>
                    </div>
                    <h1 class="display-3 mb-4">Intresting Facts About Lastest Crimes</h1>
                    <p class="mb-0">Crime corrodes the fabric of communities, leaving behind a trail of fear and uncertainty. It shatters lives, disrupting the peace and security that we cherish. But in the face of adversity, we unite to seek justice, rebuilding what was lost and striving for a safer tomorrow.</p>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="blog-item rounded">
                            <div class="blog-img">
                                <img src="img/blog1.jpg" class="img-fluid w-100" alt="Image" style="height:330px;">
                            </div>
                            <div class="blog-centent p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <p class="mb-0 text-muted"><i class="fa fa-calendar-alt text-primary"></i> 06 Mar 2024</p>
                                </div>
                                <a href="#" class="h4"> Angered over no anniversary gift, woman stabs sleeping husband in Bengaluru</a>
                                <p class="my-4" style="align:justify;">The victim told police that he was attacked in his sleep by his wife with a kitchen knife. He also filed a complaint leading to the registration of an FIR under Section 307 of the Indian Penal Code (IPC), which deals with attempt to murder.</p>
                                <a href="https://www.indiatvnews.com/crime/karnataka-woman-stabs-sleeping-husband-in-bengaluru-upset-over-not-getting-wedding-anniversary-gift-police-fir-registered-2024-03-06-920154" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-1">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="blog-item rounded">
                            <div class="blog-img">
                                <img src="img/blog2.jpg" class="img-fluid w-100" alt="Image"  style="height:330px;">
                            </div>
                            <div class="blog-centent p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <p class="mb-0 text-muted"><i class="fa fa-calendar-alt text-primary"></i> 25 Feb 2024</p>
                                </div>
                                <a href="#" class="h4">Three men abduct, rape minor girl after befriending her through Instagram</a>
                                <p class="my-4" style="align:justify;">Various charges, including rape and abduction under the Indian Penal Code, provisions under the POCSO Act and the IT Act have been registered against them.Three men were arrested by Kerala Police on Sunday</p>
                                <a href="https://www.indiatvnews.com/crime/kerala-three-men-abduct-rape-minor-girl-after-befriending-her-through-instagram-arrested-crime-news-latest-updates-2024-02-25-918598" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-1">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="blog-item rounded">
                            <div class="blog-img">
                                <img src="img/blog3.jpg" class="img-fluid w-100" alt="Image"  style="height:330px;">
                            </div>
                            <div class="blog-centent p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <p class="mb-0 text-muted"><i class="fa fa-calendar-alt text-primary"></i> 22 Feb 2024</p>                                  
                                </div>
                                <a href="#" class="h4">8-year-old gang raped by cleric, his brother, victim's mother arrested for involvement</a>
                                <p class="my-4" style="align:justify;">Deputy Commissioner of Police (West) Vishwajeet said the police have arrested one accused and are trying to nab the other one. The police also apprehended the victim's mother under section 34 (common intention) of the IPC.</p>
                                <a href="https://www.indiatvnews.com/crime/lucknow-8-year-old-gang-raped-by-cleric-his-brother-victim-mother-arrested-for-involvement-2024-02-22-918083" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-1">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> blog
         -->



        
        

<?php
require_once 'include/footer.php';
?>