@php
    $setting = \App\Http\Controllers\HomeController::getSetting();
@endphp

<!--footer starts from here-->

<!-- Contact Us -->
<div class="touch-line">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
            </div>
            <div class="col-md-4">
                <a class="btn btn-lg btn-secondary btn-block" href="{{ route('contact') }}"> Contact Us </a>
            </div>
        </div>
    </div>
</div>

<footer class="footer">
    <div class="container bottom_border">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col">
                <h5 class="headin5_amrc col_white_amrc pt2">Address</h5>
                <!--headin5_amrc-->
                <p class="mb10">
                    {{ $setting->company }} <br>
                    {{ $setting->address }} <br>
                    <strong>Phone: </strong> {{ $setting->phone }} <br>
                    <strong>Fax: </strong> {{ $setting->fax }} <br>
                    <strong>Email: </strong> {{ $setting->email }} <br>
                </p>
                <ul class="footer-social">
                    @if($setting->facebook != null)<li><a class="facebook hb-xs-margin" href="{{ $setting->facebook }}" target="_blank"><span class="hb hb-xs spin hb-facebook"><i class="fab fa-facebook-f"></i></span></a></li>@endif
                    @if($setting->instagram != null)<li><a class="instagram hb-xs-margin" href="{{ $setting->instagram }}"><span class="hb hb-xs spin hb-instagram"><i class="fab fa-instagram"></i></span></a></li>@endif
                    @if($setting->twitter != null)<li><a class="twitter hb-xs-margin" href="{{ $setting->twitter }}"><span class="hb hb-xs spin hb-twitter"><i class="fab fa-twitter"></i></span></a></li>@endif
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
                <!--headin5_amrc-->
                <ul class="footer_ul_amrc">
                    <li><a href="#"><i class="fas fa-long-arrow-alt-right"></i>Default Version</a></li>
                    <li><a href="#"><i class="fas fa-long-arrow-alt-right"></i>Boxed Version</a></li>
                    <li><a href="#"><i class="fas fa-long-arrow-alt-right"></i>Our Team </a></li>
                    <li><a href="#"><i class="fas fa-long-arrow-alt-right"></i>About Us</a></li>
                    <li><a href="#"><i class="fas fa-long-arrow-alt-right"></i>Our Services</a></li>
                    <li><a href="#"><i class="fas fa-long-arrow-alt-right"></i>Get In Touch</a></li>
                </ul>
                <!--footer_ul_amrc ends here-->
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col">
                <h5 class="headin5_amrc col_white_amrc pt2">Follow us</h5>
                <!--headin5_amrc ends here-->
                <ul class="footer_ul2_amrc">
                    <li>
                        <a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a>
                        <p>Lorem Ipsum is simply dummy...<a href="#">https://www.lipsum.com/</a></p>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a>
                        <p>Lorem Ipsum is simply dummy...<a href="#">https://www.lipsum.com/</a></p>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a>
                        <p>Lorem Ipsum is simply dummy...<a href="#">https://www.lipsum.com/</a></p>
                    </li>
                </ul>
                <!--footer_ul2_amrc ends here-->
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 ">
                <div class="news-box">
                    <h5 class="headin5_amrc col_white_amrc pt2">Newsletter</h5>
                    <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p>
                    <form action="#">
                        <div class="input-group">
                            <input class="form-control" placeholder="Search for..." type="text">
                            <span class="input-group-btn">
								  <button class="btn btn-secondary" type="button">Go!</button>
								</span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <p class="copyright text-center">All Rights Reserved. &copy; 2020 {{ $setting->company }}</p>
    </div>
</footer>
