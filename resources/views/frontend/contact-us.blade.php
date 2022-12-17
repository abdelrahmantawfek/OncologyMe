@extends('layouts.app')


@section('meta')

<title> {{ $data['page']->title }} -  </title>
<meta name="title" content="{{ $data['page']->meta_title ?? '' }}">
<meta name="description" content="{{ $data['page']->meta_desc ?? '' }}">
<meta name="keywords" content="{{ $data['page']->meta_keywords ?? '' }}">

@endsection


@section('content')


<!-- Main Section -->
<div class="careerfy-main-section careerfy-about-text-full">
    <div class="container">
        <div class="row">

            <div class="col-md-8 careerfy-typo-wrap">
                <div class="careerfy-about-text">
                    <div class="careerfy-contact-info-sec">
                        <h2>Contact Information</h2>
                        <p>“Oncology Medical Education” is an oncology-specific healthcare education platform that creates a wide spectrum of virtual scientific activities through a user-friendly approach that is culturally adapted to the Middle-East
                            Arab practice.</p>
                        <p>For healthcare professionals only.</p>
                        <ul class="careerfy-contact-info-list">
                            <li><i class="careerfy-icon careerfy-placeholder"></i> <a href="https://maps.app.goo.gl/xSs4KQ9drppdsJgs7"> 37, Omarat Madinat Al Fath, Al Hadiqah Ad Dawleyah, Embassies District, Nasr City, Cairo Governorate, Egypt <span style="font-size: 12px; text-decoration: underline; float: none;"> Veiw on map </span></a>                                            </li>
                            <li><i class="careerfy-icon careerfy-mail"></i> <a href="#">Email: Info@oncologyme.com</a></li>
                            <li><i class="careerfy-icon careerfy-technology"></i> Call: +2 0155 945 6778</li>
                        </ul>
                        <div class="careerfy-contact-media">
                            <a href="https://facebook.com/oncologyme" class="careerfy-icon careerfy-facebook-logo" target="_blank"></a>
                            <a href="https://www.youtube.com/channel/UC7cUtEq-hpsbmer5nRUOw5A" class="careerfy-bgcolorhover cs-yout" target="_blank"><i class="fa fa-youtube-play"></i></a>
                            <a href="https://www.linkedin.com/company/oncologyme/" class="careerfy-icon careerfy-linkedin-button" target="_blank"></a>
                        </div>
                    </div>
                    <div class="careerfy-contact-form">
                        <h2>We want to hear from you!</h2>
                        <form>
                            <ul>
                                <li>
                                    <input value="Enter Your Name" onblur="if(this.value == '') { this.value ='Enter Your Name'; }" onfocus="if(this.value =='Enter Your Name') { this.value = ''; }" type="text">
                                    <i class="careerfy-icon careerfy-user"></i>
                                </li>
                                <li>
                                    <input value="Subject" onblur="if(this.value == '') { this.value ='Subject'; }" onfocus="if(this.value =='Subject') { this.value = ''; }" type="text">
                                    <i class="careerfy-icon careerfy-user"></i>
                                </li>
                                <li>
                                    <input value="Enter Your Email Address" onblur="if(this.value == '') { this.value ='Enter Your Email Address'; }" onfocus="if(this.value =='Enter Your Email Address') { this.value = ''; }" type="text">
                                    <i class="careerfy-icon careerfy-mail"></i>
                                </li>
                                <li>
                                    <input value="Enter Your Phone Number" onblur="if(this.value == '') { this.value ='Enter Your Phone Number'; }" onfocus="if(this.value =='Enter Your Phone Number') { this.value = ''; }" type="text">
                                    <i class="careerfy-icon careerfy-technology"></i>
                                </li>
                                <li class="careerfy-contact-form-full">
                                    <textarea placeholder='Write your message ...'></textarea>
                                </li>
                                <li><input type="submit" value="Submit"></li>
                            </ul>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4 tblt-nn">
                <div class="banr-box">
                    <img src="img/bnr2.jpg">
                </div>
                <div class="topics-box-clmn">
                    <!-- TIN Calendar -->

                    <div class="topics-box">
                        <div class="topics-box-header">
                            <div class="calendar-wrapper">
                                Oct
                                <div class="calendar-inner">17</div>
                            </div>
                            <h4>Today In OncologyMe</h4>
                        </div>
                        <div class="article-home-sidebar">
                            <h5><a href="single-news-post.html" class="todayinonc">Researchers Discover Predictive Biomarker of Response to Therapy in Patients With Microsatellite Stable Metastatic Colorectal Cancer</a></h5>
                            <h5><a href="single-news-post.html" class="todayinonc">Computer Platform May Help Match Patients With Cancer to Targeted Therapy Trials</a></h5>
                            <h5><a href="single-news-post.html" class="todayinonc">Computer Platform May Help Match Patients With Cancer to Targeted Therapy Trials</a></h5>

                            <h5><a href="single-news-post.html" class="todayinonc">Polycystic Ovary Syndrome and Risk of Pancreatic Cancer</a></h5>
                            <h5><a href="single-news-post.html" class="todayinonc">Neoadjuvant Intensity-Modulated Radiotherapy in Centrally Located Hepatocellular Carcinoma</a></h5>
                            <div class="link-bottom-tio"><a href="all-news.html" class="todayinonc">View More&nbsp;<span class="triangle-link fa fa-angle-right"></span></a></div>
                        </div>
                    </div>
                </div>


                <div class="topics-box">
                    <div class="topics-box-header">
                        <h4>Perspectives</h4>
                    </div>
                    <div class="article-home-sidebar">
                        <h5>
                            <a href="single-topic-post.html" class="mostRead">
                                <div class="topic-img"><img src="img/team5.jpg"></div>
                                <div class="topic-link">Bruce Cheson: Death and Clinical Trials in the Plague Years</div>
                            </a>
                        </h5>
                        <h5>
                            <a href="single-topic-post.html" class="mostRead">
                                <div class="topic-img"><img src="img/team4.jpg"></div>
                                <div class="topic-link">Sergey Kozhukhov, and colleagues on Cancer and War in Ukraine: How the World Can Help Win This Battle</div>
                            </a>
                        </h5>

                        <h5>
                            <a href="single-topic-post.html" class="mostRead">
                                <div class="topic-img"><img src="img/team2.jpg"></div>
                                <div class="topic-link">Ronald DePinho: Basic Research Enterprise Needs Adequate Funding to Foster Treatment Innovation</div>
                            </a>
                        </h5>
                        <h5>
                            <a href="single-topic-post.html" class="mostRead">
                                <div class="topic-img"><img src="img/team12.jpg"></div>
                                <div class="topic-link">Daniel Vorobiof and Irad Deutsch: The Value of Managing Aggregated Data From Patients’ Online Communities</div>
                            </a>
                        </h5>
                        <h5>
                            <a href="single-topic-post.html" class="mostRead">
                                <div class="topic-img"><img src="img/team12.jpg"></div>
                                <div class="topic-link">Daniel Vorobiof and Irad Deutsch: The Value of Managing Aggregated Data From Patients’ Online Communities</div>
                            </a>
                        </h5>
                        <div class="link-bottom-tio"><a href="all-topics.html" class="todayinonc">View More&nbsp;<span class="triangle-link fa fa-angle-right"></span></a></div>
                    </div>
                </div>

                <div class="banr-box">
                    <img src="img/bnr2.jpg">
                </div>

            </div>


        </div>
    </div>
</div>
<!-- Main Section -->

@endsection