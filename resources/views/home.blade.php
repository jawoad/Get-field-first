@extends('layouts.app')

@section('content')
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hs-item">

                        <div class="hs-text">
                            <h4>Get Field Fast </h4>
                            <h2>Book Your Field</h2>
                            <a href="{{ route('field.create') }}" class="primary-btn">Appointment</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Trending News Section Begin -->
    <div class="trending-news-section">
        <div class="container">
            <div class="tn-title"><i class="fa fa-caret-right"></i> Trending News</div>
            <div class="news-slider owl-carousel">
                <div class="nt-item">We Announce The Best Services to Get-Field.</div>
                <div class="nt-item">Book Your Field Now!</div>
            </div>
        </div>
    </div>
    <!-- Trending News Section End -->

    <!-- Match Section Begin -->
    <section class="match-section set-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="ms-content">
                        <h4>Next Match</h4>
                        <div class="mc-table">
                            <table>
                                <tbody>
                                <tr>
                                    <td class="left-team">
                                        <img src="img/match/tf-8.png" alt="">
                                        <h6>SWE</h6>
                                    </td>
                                    <td class="mt-content">
                                        <div class="mc-op">SWE vs EEE</div>
                                        <h4>VS</h4>
                                        <div class="mc-op">15 November 2020</div>
                                    </td>
                                    <td class="right-team">
                                        <img src="img/match/tf-2.png" alt="">
                                        <h6>EEE</h6>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="mc-table">
                            <table>
                                <tbody>
                                <tr>
                                    <td class="left-team">
                                        <img src="img/match/tf-3.png" alt="">
                                        <h6>CSE</h6>
                                    </td>
                                    <td class="mt-content">
                                        <div class="mc-op">CSE vs ENG</div>
                                        <h4>VS</h4>
                                        <div class="mc-op">16 November 2020</div>
                                    </td>
                                    <td class="right-team">
                                        <img src="img/match/tf-4.png" alt="">
                                        <h6>ENG</h6>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="mc-table">
                            <table>
                                <tbody>
                                <tr>
                                    <td class="left-team">
                                        <img src="img/match/tf-5.png" alt="">
                                        <h6>BBA</h6>
                                    </td>
                                    <td class="mt-content">
                                        <div class="mc-op">BBA vs EEE</div>
                                        <h4>VS</h4>
                                        <div class="mc-op">15 December 2020</div>
                                    </td>
                                    <td class="right-team">
                                        <img src="img/match/tf-2.png" alt="">
                                        <h6>EEE</h6>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ms-content">
                        <h4>Recent Results</h4>
                        <div class="mc-table">
                            <table>
                                <tbody>
                                <tr>
                                    <td class="left-team">
                                        <img src="img/match/tf-3.png" alt="">
                                        <h5 class="text-white">CSE</h5>
                                    </td>
                                    <td class="mt-content">
                                        <div class="mc-op">CSE vs EEE</div>
                                        <h5 class="text-white">EEE won by 6 runs</h5>
                                        <div class="mc-op">14 November 2020</div>
                                    </td>
                                    <td class="right-team">
                                        <img src="img/match/tf-2.png" alt="">
                                        <h5 class="text-white">EEE</h5>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="mc-table">
                            <table>
                                <tbody>
                                <tr>
                                    <td class="left-team">
                                        <img src="img/match/tf-3.png" alt="">
                                        <h5 class="text-white">CSE</h5>
                                    </td>
                                    <td class="mt-content">
                                        <div class="mc-op">CSE vs ENG</div>
                                        <h5 class="text-white">ENG won by 6 wickets</h5>
                                        <div class="mc-op">12 November 2020</div>
                                    </td>
                                    <td class="right-team">
                                        <img src="img/match/tf-4.png" alt="">
                                        <h5 class="text-white">ENG</h5>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="mc-table">
                            <table>
                                <tbody>
                                <tr>
                                    <td class="left-team">
                                        <img src="img/match/tf-5.png" alt="">
                                        <h5 class="text-white">BBA</h5>
                                    </td>
                                    <td class="mt-content">
                                        <div class="mc-op">BBA vs CIVIL</div>
                                        <h5 class="text-white">BBA win by 26 runs</h5>
                                        <div class="mc-op">11 November 2020</div>
                                    </td>

                                    <td class="right-team">
                                        <img src="img/match/tf-6.png" alt="">
                                        <h5 class="text-white">CIVIL</h5>
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
    <!-- Match Section End -->



    <!-- recent result start-->
    <div class="site-section bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="widget-next-match">
                        <div class="widget-title">
                            <h3>Next Match</h3>
                        </div>
                        <div class="widget-body mb-3">
                            <div class="widget-vs">
                                <div
                                    class="d-flex align-items-center justify-content-around justify-content-between w-100">
                                    <div class="team-1 text-center">
                                        <img src="img/logo_1.png" alt="Image">
                                        <h3>Bondhu Shobha</h3>
                                    </div>
                                    <div>
                                        <span class="vs"><span>VS</span></span>
                                    </div>
                                    <div class="team-2 text-center">
                                        <img src="img/logo_2.png" alt="Image">
                                        <h3>SBSF</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="text-center widget-vs-contents mb-4">
                            <h4>Club Tournament</h4>
                            <p class="mb-5">
                                <span class="d-block">December 4th, 2020</span>
                                <span class="d-block">9:30 AM GMT+0</span>

                            </p>

                            <div id="date-countdown2" class="pb-1"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">

                    <div class="widget-next-match">
                        <table class="table custom-table">
                            <thead>
                            <tr>
                                <th>P</th>
                                <th>Team</th>
                                <th>W</th>
                                <th>D</th>
                                <th>L</th>
                                <th>PTS</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td><strong class="text-white">SWE</strong></td>
                                <td>4</td>
                                <td>1</td>
                                <td>1</td>
                                <td>9</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><strong class="text-white">Bondhu Shoba</strong></td>
                                <td>4</td>
                                <td>0</td>
                                <td>2</td>
                                <td>8</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><strong class="text-white">BBA</strong></td>
                                <td>3</td>
                                <td>2</td>
                                <td>1</td>
                                <td>8</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td><strong class="text-white">EEE</strong></td>
                                <td>3</td>
                                <td>1</td>
                                <td>2</td>
                                <td>7</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td><strong class="text-white">SBSF</strong></td>
                                <td>3</td>
                                <td>0</td>
                                <td>3</td>
                                <td>6</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td><strong class="text-white">Robotics</strong></td>
                                <td>2</td>
                                <td>3</td>
                                <td>1</td>
                                <td>5</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td><strong class="text-white">CIVIL</strong></td>
                                <td>2</td>
                                <td>3</td>
                                <td>2</td>
                                <td>5</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td><strong class="text-white">ENG</strong></td>
                                <td>2</td>
                                <td>1</td>
                                <td>2</td>
                                <td>5</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td><strong class="text-white">CSE</strong></td>
                                <td>1</td>
                                <td>2</td>
                                <td>4</td>
                                <td>4</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <!-- recent result end-->

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
                            <li><a href="#">EEE</a></li>
                            <li><a href="#">SWE</a></li>

                        </ul>
                        <ul class="fw-links">
                            <li><a href="#">BBA</a></li>
                            <li><a href="#">SBSF</a></li>
                            <li><a href="#">Robotics</a></li>

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
                            <h5><a href="#">Unfortunately!! Robotics lost the match.</a></h5>
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
                        <div class="co-text">
                            <p>
                                Copyright &copy;2020
                                All rights reserved | This
                                website is made <i style="color:red" class="fa fa-heart" aria-hidden="true"></i> by Noobies
                            </p>
                        </div>
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
