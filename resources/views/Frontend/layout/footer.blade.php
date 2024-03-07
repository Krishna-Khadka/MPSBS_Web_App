       <!-- ################################### footer section starts ################################### -->

       <section id="footer"
       style="background-image: linear-gradient(#000A,#000B),url({{ asset('frontend/assets/images/banner1.jpg') }});">
       <div class="container">
           <div class="footer-top">
               <div class="row">
                   <div class="col-lg-4">
                       <div
                           class="footer-info footer-phone d-flex align-items-center">
                           <div class="footer-icon">
                               <img src="{{ asset('frontend/assets/icons/phone.png') }}"
                                   class="img-fluid" alt>
                           </div>
                           <div class="footer-icon-content">
                               <p>Give us a call</p>
                               <h5>
                                   <a href="#">{{ $profile->contact_no }} / {{ $profile->secondary_contact_no }}</a>
                               </h5>
                           </div>
                       </div>
                   </div>
                   <div class="col-lg-4">
                       <div
                           class="footer-info footer-mail d-flex align-items-center">
                           <div class="footer-icon">
                               <img src="{{ asset('frontend/assets/icons/mail.png') }}
                               ') }}"
                                   class="img-fluid" alt>
                           </div>
                           <div class="footer-icon-content">
                               <p>Send us a message</p>
                               <h5>
                                   <a
                                       href="mailto:krishparajuli57@gmail.com">{{ $profile->secondary_email }}</a>
                               </h5>
                           </div>
                       </div>
                   </div>
                   <div class="col-lg-4">
                       <div
                           class="footer-info footer-address d-flex align-items-center">
                           <div class="footer-icon">
                               <img src="{{ asset('frontend/assets/icons/location.png') }}"
                                   class="img-fluid" alt>
                           </div>
                           <div class="footer-icon-content">
                               <p>Visit our location</p>
                               <h5>
                                   <a href="#">{{ $profile->address }}</a>
                               </h5>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <div class="footer-main">
               <div class="row">
                   <div class="col-xl-3 col-lg-3 col-sm-6">
                       <div class="footer-title">
                           <h4>about Modern preparatory</h4>
                       </div>
                       <div class="footer-content">
                           <p>{{ Str::limit($profile->about_us, 100, '...') }}</p>
                       </div>
                       <div class="footer-social">
                           <h5>follow us :</h5>
                           <ul>
                               <li><a href="{{ $profile->facebook_url }}"><i
                                           class="fa-brands fa-facebook"></i></a></li>
                               <li><a href="#"><i
                                           class="fa-brands fa-instagram"></i></a></li>
                               <li><a href="#"><i
                                           class="fa-brands fa-twitter"></i></a></li>
                               <li><a href="#"><i
                                           class="fa-brands fa-linkedin"></i></a></li>
                           </ul>
                       </div>
                   </div>
                   <div class="col-xl-3 col-lg-3 col-sm-6">
                       <div class="footer-title">
                           <h4>services</h4>
                       </div>
                       <div class="footer-content">
                           <ul>
                               <li><a href="#">home</a></li>
                               <li><a href="#">about us</a></li>
                               <li><a href="#">students reviews</a></li>
                               <li><a href="#">gallery</a></li>
                               <li><a href="#">contact us</a></li>
                           </ul>
                       </div>
                   </div>
                   <div class="col-xl-3 col-lg-3 col-sm-6">
                       <div class="footer-title">
                           <h4>information</h4>
                       </div>
                       <div class="footer-content">
                           <ul>
                               <li><a href="#">message from principal</a></li>
                               <li><a href="#">our team</a></li>
                               <li><a href="#">news & events</a></li>
                               <li><a href="#">notices</a></li>
                               <li><a href="#">privacy & policy</a></li>
                           </ul>
                       </div>
                   </div>
                   <div class="col-xl-3 col-lg-3 col-sm-6">
                       <div class="footer-title">
                           <h4>newsletter subscription</h4>
                       </div>
                       <div class="footer-content">
                           <p>Enter your email and get latest updates and
                               offers subscribe us</p>
                       </div>
                       <div class="footer-subs">
                           <form action="#">
                               <div class="row">
                                   <div class="col-lg-12">
                                       <input type="email"
                                           autocomplete="off"
                                           class="form-control"
                                           placeholder="Enter your email"
                                           name="email">
                                   </div>
                                   <div class="col-12">
                                       <button type="submit"
                                           name="subscribe" class="sub-btn">subscribe
                                           now</button>
                                   </div>
                               </div>
                           </form>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>

   <!-- ################################### footer section ends ################################### -->

   <!-- <script src="assets/js/jquery.min.js"></script> -->
   <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
   <script
       src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
   <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
   <script src="{{ asset('frontend/assets/owlCarousel/js/owl.carousel.min.js') }}"></script>
   <script src="{{ asset('frontend/assets/splide/js/splide.min.js') }}"></script>
   <script src="{{ asset('frontend/assets/counter/waypoints.min.js') }}"></script>
   <script src="{{ asset('frontend/assets/counter/jquery.counterup.min.js') }}"></script>
   <script src="{{ asset('frontend/assets/js/script.js') }}"></script>
   <script src="{{ asset('frontend/assets/lightbox/js/lightbox.js') }}"></script>

   @stack('contact-scripts')
</body>

</html>
