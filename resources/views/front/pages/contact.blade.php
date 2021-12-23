@extends('front.layouts.app')  
     @section('content')
 

    <section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
			<div class="container">
      <div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4">Contact  Us</h2>
          </div>
        </div>
				<div class="row d-flex align-items-stretch no-gutters">
					<div class="col-md-6 p-4 p-md-5 order-md-last bg-light">

            @if($errors->any())
              @include('errors.error')
            @endif

					<form role="form" method="post" action="{{route('addcontact')}}">
            {{csrf_field()}}
              <div class="form-group">
                <input type="name" class="form-control" placeholder="Your Name" name="name" >
              </div>
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Your Email" name="email">
              </div>
              <div class="form-group">
                <input type="contact" class="form-control" placeholder="Your Contact" name="contact">
              </div>
              <div class="form-group">
                <textarea id="editor1" class="form-control" placeholder="Message" name="subject" cols="10" rows="7"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send" class="btn btn-primary py-3 px-5" name="submit">
              </div>
          </form>
					</div>
					<div class="col-md-6 d-flex align-items-stretch">
          <div class="mapouter">
            <div class="gmap_canvas">
              <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Sarita%20Society%2C%20Bhavnagar%2C%20Gujarat%20364002%2C%20India&t=k&z=19&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
              <a href="https://www.embedgooglemap.net/blog/best-wordpress-themes/"></a>
            </div>
            <style>
              .mapouter
              {
                position:relative;
                text-align:right;
                height:500px;
                width:600px;
              }
              .gmap_canvas
              {
                overflow:hidden;
                background:none!important;
                height:500px;
                width:600px;
              }
            </style>
          </div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h4">Contact Information</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3 d-flex">
          	<div class="bg-light d-flex align-self-stretch box p-4">
	            <p><b>Address:</b>	136/c,street no:9,sarita socity ,Bhavnagar</p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="bg-light d-flex align-self-stretch box p-4">
	            <p><b>Phone:</b> <a href="tel://1234567920">+91 1245789630</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="bg-light d-flex align-self-stretch box p-4">
	            <p><b>Email:</b> <a href="mailto:info@yoursite.com">	info@organtransplant.com</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="bg-light d-flex align-self-stretch box p-4">
	            <p><b>Website</b> <a href="#">yoursite.com</a></p>
	          </div>
          </div>
        </div>
      </div>
    </section>

    @endsection