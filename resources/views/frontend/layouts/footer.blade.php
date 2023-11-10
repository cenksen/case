<footer class="main-footer footer-style-three">
    <!-- Widget Bölümü -->
    <div class="widgets-section">
        <div class="auto-container">
            <div class="row">

                <div class="footer-column col-lg-3 col-md-6 col-sm-12">
                    <div class="footer-widget about-widget">
                        <div class="widget-content">
                            <div class="logo"><img src="{{asset('ui/images/logo-5.png')}}" alt=""></div>
                            <div class="text">Lorem Ipsum sadece dumi omy metni Loremo Ipsum sadece dışarıda olan dummy metni</div>
                            <ul class="social-icon-two">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="footer-column col-lg-2 col-md-6 col-sm-12 mb-0">
                    <div class="footer-widget links-widget">
                        <h4 class="widget-title">keşfet</h4>
                        <div class="widget-content">
                            <ul class="user-links">
                                <li><a href="#">Hakkında</a></li>
                                <li><a href="#">Ekibimizi Tanı</a></li>
                                <li><a href="#">Vaka Hikayeleri</a></li>
                                <li><a href="#">Son Haberler</a></li>
                                <li><a href="#">İletişim</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="footer-column col-lg-3 col-md-6 col-sm-12 mb-0">
                    <div class="footer-widget contact-widget">
                        <h4 class="widget-title">İletişim</h4>
                        <div class="widget-content">
                            <div class="text">66. Cadde, Brooklyn Sokak, New York. Amerika Birleşik Devletleri</div>
                            <ul class="contact-info">
                                <li><a href="#">92 666 888 0000</a></li>
                                <li><a href="#">needhelp@company.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="footer-column col-lg-4 col-md-6 col-sm-12">
                    <div class="footer-widget newsletter-widget">
                        <div class="sec-title">
                            <h4 class="widget-title">Bültenimize Kaydolun</h4>
                        </div>
                        <div class="subscribe-form">
                            <form method="post" action="#">
                                <div class="form-group">
                                    <input type="email" name="email" class="email" value="" placeholder=" E-posta Adresi" required="">
                                    <button type="submit"><i class="icon fa fa-paper-plane"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="text"><i class="fa-regular fa-circle-check"></i>Tüm şartları ve politikaları kabul ediyorum</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="auto-container">
            <div class="inner-container">
                <div class="copyright-text">© {{ now()->year }} {{config('app.name')}}.com</div>
                <div class="scroll-to-top scroll-to-target arrow-btn" data-target="html"><i class="fa-sharp fa-solid fa-arrow-up"></i></div>
            </div>
        </div>
    </div>
</footer>
