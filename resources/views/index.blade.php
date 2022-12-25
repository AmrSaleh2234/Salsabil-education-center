@extends('layouts.master')
@section('title')
    الصفحة الرئيسية
@endsection
@section('content')
    <!-- LOADER -->
    <div id="preloader">
        <div class="loader">
            <img src="images/loader.gif" alt="#" />
        </div>
    </div>
    <!-- end loader -->
    <!-- END LOADER -->

    <!-- Start header -->
    <header class="top-header rtl" >
        <nav class="navbar header-nav navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{route('landpage')}}"><img src="images/logo.png" alt="image"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                        <li><a class="nav-link active" href="{{route('landpage')}}">الصفحة الرئيسية</a></li>
                        <li><a class="nav-link" href="#about">اعرف عنا</a></li>
                        <li><a class="nav-link" href="#subjects">الفصول الدراسية</a></li>
                        <li><a class="nav-link" href="#teachers">المعلمين</a></li>
                    </ul>
                </div>
                <div class="search-box">
                    <input type="text" class="search-txt" placeholder="Search">
                    <a class="search-btn">
                        <img src="images/search_icon.png" alt="#" />
                    </a>
                </div>
            </div>
        </nav>
    </header>
    <!-- End header -->

    <!-- Start Banner -->
    <div class="ulockd-home-slider">
        <div class="container-fluid">
            <div class="row">
                <div class="pogoSlider rtl" id="js-main-slider">
                    <div class="pogoSlider-slide" style="background-image:url(images/banner_img.png);">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slide_text">
                                        <h3><span  class="theme_color">سنتر سلسبيل التعليمي</span><br>هو افضل مركز تعليمي في السلام</h3>
                                        <h4>يضم اشهر المعلمين  في جميع المراحل التعليميه</h4>
                                        <br>
                                        <div class="full center">
                                            <a class="contact_bt" href="#subjects">ابدا معنا</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pogoSlider-slide" style="background-image:url(images/ban.webp)">

                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slide_text">
                                        <h3><span  class="theme_color">يجب ان تعلم شئ واحد</span><br>انك تستطيع ان تتعلم اي شئ</h3>
                                        <h4>معنا التعليم ممتع</h4>
                                        <br>
                                        <div class="full center">
										    <a class="contact_bt" href="#subjects">ابدا معنا</a>
										</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .pogoSlider -->
            </div>
        </div>
    </div>
    <!-- End Banner -->
    <!-- section -->
	<div class="section tabbar_menu">
	   <div class="container">
	      <div class="row">
		      <div class="col-md-12">
			     <div class="tab_menu  ">
				    <ul class="d-flex justify-content-end">
					   <li><a href="#"><span class="icon"><img src="{{URL::asset('images/i2.png')}}" alt="#" /></span><span>Graduation</span></a></li>
					   <li><a href="#"><span class="icon"><img src="{{URL::asset('images/i4.png')}}" alt="#" /></span><span>Social</span></a></li>
					   <li><a href="#"><span class="icon"><img src="{{URL::asset('images/i5.png')}}" alt="#" /></span><span>Location</span></a></li>
					   <li><a href="#"><span class="icon"><img src="{{URL::asset('images/i6.png')}}" alt="#" /></span><span> Email</span></a></li>
					   <li><a href="#"><span class="icon"><img src="{{URL::asset('images/i7.png')}}" alt="#" /></span><span>Call us</span></a></li>
					</ul>
				 </div>
			  </div>
		  </div>
	   </div>
	</div>
	<!-- end section -->
	<!-- section -->
    <div class="section margin-top_50" id ="about">
        <div class="container rtl">
            <div class="row rtl">
                <div class="col-md-6 layout_padding_2 ">
                    <div class="full rtl   ">
                        <div class="heading_main text_align_right d-flex justify-content-start w-100">
						   <h2><span>مرحبا بك</span> في مركز سلسلبيل</h2>
                        </div>
						<div class="full text_align_right">
						  <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص، وإذا قمت بإدخال "lorem ipsum" في أي محرك بحث ستظهر العديد من المواقع الحديثة العهد في نتائج البحث.</p>
						</div>
						<div class="full d-flex justify-content-start">
						   <a class="hvr-radial-out button-theme" href="#">اعرف عنا</a>
						</div>
                    </div>
                </div>
				<div class="col-md-6 ">
                    <div class="full " style="margin-top: 85px">
                        <img src="{{URL::asset('images/img2.png')}}" alt="#" />
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- end section -->
	<!-- section -->
    <div class="section layout_padding" id="subjects">
        <div class="container">
            <div class="row rtl">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_center">
						   <h2><span>المراحل  </span>التعليمية</h2>
                        </div>
					  </div>
                </div>
				<div class="col-md-4">
                    <div class="full blog_img_popular">
                       <img class="img-responsive" src="{{URL::asset('images/p3.png"')}} alt="#" style="height: auto" />
					   <h4>الصف الاول الثانوي</h4>
                    </div>
                </div>
				<div class="col-md-4">
                    <div class="full blog_img_popular">
                        <img class="img-responsive" src="{{URL::asset('images/study.jpg')}}" alt="#" style="height: 240px" />
                        <h4>الصف الثاني الثانوي</h4>
                    </div>
                </div>
				<div class="col-md-4">
                    <div class="full blog_img_popular">
                        <img class="img-responsive" src="{{URL::asset('images/p1.png')}}" alt="#" style="height: auto" />
                        <h4>الصف الثالث الثانوي</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- end section -->

	<!-- section -->
    <div class="section layout_padding padding_bottom-0" id="teachers">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_center">
						   <h2><span>المعلمين</span></h2>
                        </div>
					  </div>
                </div>
			  </div>
               <div class="row">
                <div class="col-lg-12">
                    <div id="demo" class="carousel slide" data-ride="carousel">

                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
									   <div class="full blog_img_popular">
                                          <img class="img-responsive" src="{{URL::asset('images/magdyAbdElgany.jpg')}}" alt="#" />
										  <h4>هير / مجدي عبد الغني</h4>
										  <p>اشهر معلم لغة ألمانيه في مصر اضمن الدرجة النهائية  </p>
										</div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="full blog_img_popular">
                                          <img class="img-responsive" src="{{URL::asset('images/minaemad.jpg')}}" alt="#" />
										  <h4>هير / مينا عماد </h4>
                                            <p>اشهر معلم لغة ألمانيه في مصر اضمن الدرجة النهائية </p>
										</div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
									   <div class="full blog_img_popular">
                                          <img class="img-responsive" src="{{URL::asset('images/husseinsalem.jpg')}}" alt="#" />
										  <h4>مستر/ حسين سالم</h4>
										  <p>استمتع بشرح النحو بأسهل طريقة واحفظ القراءة بمنتهي السهولة</p>
										</div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="full blog_img_popular">
                                          <img class="img-responsive" src="{{URL::asset('images/omarelshar.jpg')}}" alt="#" />
										  <h4>مستر / عمر الشاعر</h4>
                                            <p>استمتع بشرح النحو بأسهل طريقة واحفظ القراءة بمنتهي السهولة</p>
										</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>

                    </div>
                </div>

            </div>
           </div>
        </div>
	<!-- end section -->
	<!-- section -->
    <div class="section layout_padding padding_bottom-0" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_center">
						   <h2><span>تواصل معنا</span></h2>
                        </div>
					  </div>
                </div>
			  </div>
           </div>
        </div>
	<!-- end section -->
	<!-- section -->
    <div class="section contact_section" style="background:#12385b;">
        <div class="container">
               <div class="row">
                 <div class="col-lg-6 col-md-6 col-sm-12">
				    <div class="full float-right_img">
                        <img src="{{URL::asset('images/img10.png')}}" alt="#">
                    </div>
                 </div>
				 <div class="layout_padding col-lg-6 col-md-6 col-sm-12">
				    <div class="contact_form">
					    <form action="contact.html">
						   <fieldset>
						       <div class="full field">
							      <input type="text" placeholder="Your Name" name="your name" />
							   </div>
							   <div class="full field">
							      <input type="email" placeholder="Email Address" name="Email" />
							   </div>
							   <div class="full field">
							      <input type="phn" placeholder="Phone Number" name="Phone number" />
							   </div>
							   <div class="full field">
							      <textarea placeholder="Massage"></textarea>
							   </div>
							   <div class="full field">
							      <div class="center"><button>Send</button></div>
							   </div>
						   </fieldset>
						</form>
					</div>
                 </div>
               </div>
           </div>
        </div>
	<!-- end section -->
@endsection
