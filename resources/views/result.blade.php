@extends('layouts.app')

@section('content')
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="fa fa-close"></i>
        </div>


        <ul class="main-menu mobile-menu">
            <li><a href="./index.html">Home</a></li>

            <li><a href="./schedule.html">Schedule</a></li>
            <li class="active"><a href="./result.html">Results</a></li>
            <li><a href="./contact.html">Contact Us</a></li>
            <li><a href="login.html">Log in</a></li>
        </ul>
        <div id="mobile-menu-wrap"></div>
    </div>


    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bs-text">
                        <h2>Our Results</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Results Section Begin -->
    <section class="schedule-section spad bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 left-blog-pad">
                    <div class="schedule-text">
                        <h4 class="st-title">Department Tournament, Fall-20</h4>
                        <div class="st-table">
                            <table>
                                <tbody>
                                <tr>
                                    <td class="left-team">
                                        <img src="img/match/tf-8.png" alt="">
                                        <h4>SWE</h4>
                                    </td>
                                    <td class="st-option">
                                        <div class="so-text">Daffodil International University</div>
                                        <h4>SWE won by 6 wickets</h4>
                                        <div class="so-text">15 September 2020</div>
                                    </td>
                                    <td class="right-team">
                                        <img src="img/match/tf-3.png" alt="">
                                        <h4>CSE</h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="left-team">
                                        <img src="img/match/tf-5.png" alt="">
                                        <h4>BBA</h4>
                                    </td>
                                    <td class="st-option">
                                        <div class="so-text">Daffodil International Uinversity</div>
                                        <h4>BBA won by 34 runs</h4>
                                        <div class="so-text">16 September 2020</div>
                                    </td>
                                    <td class="right-team">
                                        <img src="img/match/tf-4.png" alt="">
                                        <h4>ENG</h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="left-team">
                                        <img src="img/match/tf-2.png" alt="">
                                        <h4>EEE</h4>
                                    </td>
                                    <td class="st-option">
                                        <div class="so-text">Daffodil International University</div>
                                        <h4>EEE won by 60 runs</h4>
                                        <div class="so-text">17 September 2020</div>
                                    </td>
                                    <td class="right-team">
                                        <img src="img/match/flag-8.jpg" alt="">
                                        <h4>TXT</h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="left-team">
                                        <img src="img/match/tf-6.png" alt="">
                                        <h4>CIVIL</h4>
                                    </td>
                                    <td class="st-option">
                                        <div class="so-text">Daffodil International University</div>
                                        <h4>CIVIL won by 1 wicket</h4>
                                        <div class="so-text">18 September 2020</div>
                                    </td>
                                    <td class="right-team">
                                        <img src="img/match/tf-1.jpg" alt="">
                                        <h4>NFE</h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="left-team">
                                        <img src="img/match/tf-8.png" alt="">
                                        <h4>SWE</h4>
                                    </td>
                                    <td class="st-option">
                                        <div class="so-text">Daffodil International University</div>
                                        <h4>SWE won by 16 runs</h4>
                                        <div class="so-text">19 September 2020</div>
                                    </td>
                                    <td class="right-team">
                                        <img src="img/match/tf-4.png" alt="">
                                        <h4>ENG</h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="left-team">
                                        <img src="img/match/tf-3.png" alt="">
                                        <h4>CSE</h4>
                                    </td>
                                    <td class="st-option">
                                        <div class="so-text">Daffodil International University</div>
                                        <h4>BBA won by 5 runs</h4>
                                        <div class="so-text">20 September 2020</div>
                                    </td>
                                    <td class="right-team">
                                        <img src="img/match/tf-5.png" alt="">
                                        <h4>BBA</h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="left-team">
                                        <img src="img/match/tf-2.png" alt="">
                                        <h4>EEE</h4>
                                    </td>
                                    <td class="st-option">
                                        <div class="so-text">Daffodil International University</div>
                                        <h4>EEE won by 4 wickets</h4>
                                        <div class="so-text">21 September 2020</div>
                                    </td>
                                    <td class="right-team">
                                        <img src="img/match/tf-6.png" alt="">
                                        <h4>CIVIL</h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="left-team">
                                        <img src="img/match/tf-3.png" alt="">
                                        <h4>CSE</h4>
                                    </td>
                                    <td class="st-option">
                                        <div class="so-text">Daffodil International University</div>
                                        <h4>NFE won by 2 wickets</h4>
                                        <div class="so-text">23 September 2020</div>
                                    </td>
                                    <td class="right-team">
                                        <img src="img/match/tf-1.jpg" alt="">
                                        <h4>NFE</h4>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Results Section End -->

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
                            <li><i class="fa fa-envelope"></i> noobies365@gmail.com</li>
                            <li><i class="fa fa-copy"></i> +8801639286311</li>
                            <li><i class="fa fa-thumb-tack"></i> Dhaka, Asuliya, Savar</li>
                        </ul>
                        <div class="fs-social">
                            <a style="color: rgb(31, 31, 196);" href="#"><i class="fa fa-facebook"></i></a>
                            <a style="color:  #257c9e;" href="#"><i class="fa fa-twitter"></i></a>
                            <a style="color:  #b44422;" href="#"><i class="fa fa-tumblr"></i></a>
                            <a style="color:  #007bb5;" href="#"><i class="fa fa-linkedin"></i></a>
                            <a style="color:  #740d66" href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 offset-lg-1">
                    <div class="fs-widget">
                        <h4>Top Team</h4>
                        <ul class="fw-links">
                            <li><a href="#">SWE</a></li>
                            <li><a href="#">BBA</a></li>

                        </ul>
                        <ul class="fw-links">
                            <li><a href="#">EEE</a></li>
                            <li><a href="#">NFE</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="fs-widget">
                        <h4>Recent News</h4>

                        <div class="fw-item">
                            <h5><a href="#">Software Engineering Dept win the match and show their talent.</a></h5>
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
