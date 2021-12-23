

<!-- START nav  class="navbar py-4 navbar-expand-lg ftco_navbar navbar-light bg-light flex-row"-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar" style="height:80px;">
<div class="col-lg-2 pr-4 align-items-center">
		    		<a class="navbar-brand" href="home"><b>Organ<br><span style="color:#dc3545;">Transplant</b></span></a>
	    		</div>
	    <div class="container d-flex align-items-center">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        	<span class="oi oi-menu"></span> Menu
	      	</button>
	      	
			  <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav mr-auto">
			<li class="nav-item"><a href="{{route('home')}}" class="nav-link pl-0">Home</a></li>
            <li class="nav-item"><a href="{{route('hospital')}}" class="nav-link">Hospital</a></li>
			<li class="nav-item"><a href="{{route('doctor')}}" class="nav-link">Doctor</a></li>
			<li class="nav-item"><a href="{{route('org')}}" class="nav-link">Organ</a></li>

            <li class="nav-item"><a href="{{route('bloodbank')}}" class="nav-link">Blood Bank</a></li>
			
			<li class="nav-item"><a href="{{route('addcontact')}}" class="nav-link">Contact Us</a></li>
            <li class="nav-item"><a href="{{route('about')}}" class="nav-link">About Us</a></li>
			<li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Registration</a>
                <div  class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="{{route('dregister')}}">Doctor Registration</a>
                  <a class="dropdown-item" href="{{route('hregister')}}">Hospital Registration</a>
				   <a class="dropdown-item" href="{{route('bregister')}}">Bloodbank Registration</a>
                </div>
			</li>
			<li class="nav-item"><a href="{{route('logins')}}" class="nav-link">Login</a></li>
	        </ul>
	      </div>
		 
   
		  <div class="col-md pr-4 d-flex topper" id="google_translate_element" >
						</div>
 							<script type="text/javascript">
		 						function googleTranslateElementInit() {
			  						 new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
		 									}
	 						</script>

 						<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
 						</script>
	    </div>
</nav>
<!-- END nav -->