@extends('layouts.app')

@section('content')
    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7296.700936290064!2d90.320956!3d23.877188!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9a707416b7fb3c64!2zRGFmZm9kaWwgSW50ZXJuYXRpb25hbCBVbml2ZXJzaXR5IOCmoeCnjeCmr-CmvuCmq-Cni-CmoeCmv-CmsiDgpobgpqjgp43gpqTgprDgp43gppzgpr7gpqTgpr_gppUg4Kas4Ka_4Ka24KeN4Kas4Kas4Ka_4Kam4KeN4Kav4Ka-4Kay4Kav4Ka8!5e0!3m2!1sen!2sbd!4v1606591931727!5m2!1sen!2sbd"
            height="500" style="border:0;" allowfullscreen=""></iframe>
    </div>


    <!-- Contact Section Begin -->
    <section class="contact-section spad bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-form">
                        <h2>Contact Form</h2>
                        <form action="#">
                            <div class="group-in">
                                <label for="name">Name</label>
                                <input type="text" id="name">
                            </div>
                            <div class="group-in">
                                <label for="email">Email</label>
                                <input type="text" id="email">
                            </div>
                            <div class="group-in">
                                <label for="message">Message</label>
                                <textarea id="message"></textarea>
                            </div>
                            <button type="submit">Submit Now</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-info">
                        <h2>Contact Info</h2>
                        <p>Contact us, if you face any problem to book field.</p>
                        <div class="ci-address">
                            <h5>Daffodil International University</h5>
                            <ul>
                                <li>Asulia, Dhaka</li>
                                <li>+8801639286311</li>
                                <li>noobies365@gmail.com </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section set-bg" data-setbg="img/footer-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="fs-logo">
                        <div class="logo">
                            <a href="./index.html"><img src="img/logo-2.png" alt=""></a>
                        </div>
                        <ul>
                            <li><i class="fa fa-envelope"></i>noobies365@gmail.com</li>
                            <li><i class="fa fa-copy"></i> +88016454564</li>
                            <li><i class="fa fa-thumb-tack"></i> Dhaka, Asuliya, Savar</li>
                        </ul>
                        <div class="fs-social">
                            <a style="color: blue;" href="#"><i class="fa fa-facebook"></i></a>
                            <a style="color:  #00acee;" href="#"><i class="fa fa-twitter"></i></a>
                            <a style="color:  #2c4762;" href="#"><i class="fa fa-tumblr"></i></a>
                            <a style="color:  #007bb5;" href="#"><i class="fa fa-linkedin"></i></a>
                            <a style="color:  #125688" href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 offset-lg-1">
                    <div class="fs-widget">
                        <h4>Top Team</h4>
                        <ul class="fw-links">
                            <li><a href="#">Bondhu Shobha</a></li>
                            <li><a href="#">Avengers</a></li>
                            <li><a href="#">Hunters</a></li>

                        </ul>
                        <ul class="fw-links">
                            <li><a href="#">Jungle Tigers</a></li>
                            <li><a href="#">Rowdy Eleven</a></li>
                            <li><a href="#">Hungary</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="fs-widget">
                        <h4>Recent News</h4>

                        <div class="fw-item">
                            <h5><a href="#">Bondhu Shobhaa win the match and show their talent.</a></h5>
                            <ul>
                                <li><i class="fa fa-calendar"></i> December 28, 2020</li>
                                <li><i class="fa fa-edit"></i> 3 Comment</li>
                            </ul>
                        </div>
                        <div class="fw-item">
                            <h5><a href="#">Unfortunately!! CSE lost the match.</a></h5>
                            <ul>
                                <li><i class="fa fa-calendar"></i> December 25, 2020</li>
                                <li><i class="fa fa-edit"></i> 3 Comment</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright-option">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="co-text"><p>
                                Copyright &copy;2020 All rights reserved | This website is made <i style="color:red" class="fa fa-heart" aria-hidden="true"></i> by Noobies
                            </p></div>
                        <div class="co-widget">
                            <ul>
                                <li><a href="#">Copyright notification</a></li>
                                <li><a href="#">Terms of Use</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
@endsection
