 <!-- jquery latest version -->
 <script src="{{ asset('assets/frontend') }}/js/vendor/jquery-2.2.4.min.js"></script>
 <!-- bootstrap js -->
 <script src="{{ asset('assets/frontend') }}/js/bootstrap.min.js"></script>
 <!-- owl.carousel.2.0.0-beta.2.4 css -->
 <script src="{{ asset('assets/frontend') }}/js/owl.carousel.min.js"></script>
 <!-- scrollup.js -->
 <script src="{{ asset('assets/frontend') }}/js/scrollup.js"></script>
 <!-- isotope.pkgd.min.js -->
 <script src="{{ asset('assets/frontend') }}/js/isotope.pkgd.min.js"></script>
 <!-- imagesloaded.pkgd.min.js -->
 <script src="{{ asset('assets/frontend') }}/js/imagesloaded.pkgd.min.js"></script>
 <!-- jquery.zoom.min.js -->
 <script src="{{ asset('assets/frontend') }}/js/jquery.zoom.min.js"></script>
 <!-- countdown.js -->
 <script src="{{ asset('assets/frontend') }}/js/countdown.js"></script>
 <!-- swiper.min.js -->
 <script src="{{ asset('assets/frontend') }}/js/swiper.min.js"></script>
 <!-- metisMenu.min.js -->
 <script src="{{ asset('assets/frontend') }}/js/metisMenu.min.js"></script>
 <!-- mailchimp.js -->
 <script src="{{ asset('assets/frontend') }}/js/mailchimp.js"></script>
 <!-- jquery-ui.min.js -->
 <script src="{{ asset('assets/frontend') }}/js/jquery-ui.min.js"></script>
 <!-- main js -->
 <script src="{{ asset('assets/frontend') }}/js/scripts.js"></script>

 <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
 {!! Toastr::message() !!}

 @stack('frontend_script')
