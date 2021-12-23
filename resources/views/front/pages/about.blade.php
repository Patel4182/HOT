@extends('front.layouts.app')  
@section('content')	
<section class="ftco-section ftco-no-pt ftc-no-pb">
                <div class="container">
                    <div class="row no-gutters">
                        <div class="col-md-5 p-md-5 img img-2 mt-5 mt-md-0" style="background-image: url({{asset('front/images/12.jpg')}});">
                        </div>
                        <div class="col-md-7 wrap-about py-4 py-md-5 ftco-animate">
                        <div class="heading-section mb-5">
                    <div class="pl-md-5 ml-md-5">
                        <span class="subheading" style="color:#dc3545;">About</span>
                        <h2 class="mb-4" style="font-size: 28px;color:#dc3545;">Human Organ Transplant</h2>
                    </div>
                </div>
                <div class="pl-md-5 ml-md-5 mb-5">
                                <p>Organ Transplant is a procedure in which an organ from a live or dead person is procured, the person being referred to as a donor. The process in which the organs are recovered is called as Harvesting and the person who receives the organ is called a recipient. Living donation and deceased/cadaver donation are the two types of donation.</p>
                                <div class="row mt-5 pt-2">
                                    <div class="col-lg-6">
                                        <div class="services-2 d-flex">
                                            <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center" style="color:red;"><span class="icon-heart" style="color:#dc3545;"></span></div>
                                            <div class="text">
                                                <h3>Living Donation</h3>
                                                <p>This type of donation can be made  when the donor is alive and healthy and only liver or kidney can be transplanted into the relatives of the donor.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="services-2 d-flex">
                                            <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="icon-person" style="color:#dc3545;"></span></div>
                                            <div class="text">
                                                <h3>Deceased Donation</h3>
                                                <p>This type of donation can be made when a person is declared dead by doctors.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="services-2 d-flex">
                                            <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="icon-tint" style="color:#dc3545;"></span></div>
                                            <div class="text">
                                                <h3>Blood Bank</h3>
                                                <p>It solves the problem of blood emergencies by connecting blood donors directly with people who need the blood cell.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="services-2 d-flex">
                                            <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="icon-medkit" style="color:#dc3545;"></span></div>
                                            <div class="text">
                                                <h3>Hospital</h3>
                                                <p>It helps you to find best hospital for particular organ transplant in your area or city. It will save your time.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

	
@endsection