<footer class="ftco-footer ftco-bg-dark ftco-section"  style="height:450px;">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Get in Touch</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">136/c,street no:9,sarita socity ,Bhavnagar</span></li>
	                <li><span class="icon icon-phone"></span><span class="text">999999999</span></li>
	                <li><span class="icon icon-envelope"></span><span class="text">info@organtransplant.com</span></li>
	              </ul>
	            </div>

	            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-5 ml-md-3">
              <h2 class="ftco-heading-2">Quick Links</h2>
              <ul class="list-unstyled">
                <li><a href="{{route('home')}}"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
                <li><a href="{{route('about')}}"><span class="ion-ios-arrow-round-forward mr-2"></span>About Us</a></li>
                <li><a href="{{route('hospital')}}"><span class="ion-ios-arrow-round-forward mr-2"></span>Hospitals</a></li>
                <li><a href="{{route('bloodbank')}}"><span class="ion-ios-arrow-round-forward mr-2"></span>Bloodbank</a></li>
                <li><a href="{{route('addcontact')}}"><span class="ion-ios-arrow-round-forward mr-2"></span>Contact Us</a></li>
              </ul>
            </div>
           
          </div>
        
        
          <div class="col-md">
            <div class="ftco-footer-widget mb-3">
            	<h2 class="ftco-heading-2">Subscribe Us!</h2>
              <form  method="POST" action="{{ route('sub')}}" class="subscribe-form">
              {{csrf_field()}}
                <div class="form-group">
                  <input type="text" class="form-control mb-2 text-center" placeholder="Enter email address" name="email">
                  <input type="submit" style="color:#dc3545;" value="Subscribe" class="form-control submit px-3">
                </div>
              </form>
              
            </div>
          </div>
          
        </div>
      
          <div class="col-md-12 text-center">
      <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <i class="icon-heart" aria-hidden="true"></i> by <a href="" target="_blank">Organ Transplant</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>


    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5d65061377aa790be330f407/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->