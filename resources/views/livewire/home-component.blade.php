		<!-- Start Hero Section -->
		<div class="hero">
		    <div class="container">
		        <div class="row justify-content-between">
				@foreach($highlights as $highlight)
		            <div class="col-lg-5">
		                <div class="intro-excerpt">
						
		                    <h1>{{$highlight->title}}</h1>
		                    <p class="mb-4">{{$highlight->description}}</p>
		                </div>
		            </div>
		            <div class="col-lg-7">
		                <div class="hero-img-wrap">
		                    <img src="{{asset('storage/'.$highlight->image)}}" class="img-fluid img-highlight">
		                </div>
		            </div>
				@endforeach
		        </div>
		    </div>
		</div>

		

		<!-- Start Product Section -->
		<div class="product-section">
		    <div class="container">
		        <div class="row">
					@foreach($featureds as $featured)

		            <div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
		                <h2 class="mb-4 section-title">{{$featured->title}}</h2>
		                <p class="mb-4">{{$featured->description}}</p>
                        <p><a href="" class="btn btn-secondary me-2">Shop Now</a></p>
		            </div>
					@endforeach



					@foreach($featuredgames as $featuredgame)
		            <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
		                <a class="product-item" href="cart.html">
		                    <img src="{{asset('storage/'.$featuredgame->image)}}" class="img-fluid product-thumbnail">
		                    <h3 class="product-title">{{$featuredgame->title}}</h3>
		                    <strong class="product-price"><span>$</span>{{$featuredgame->price}}</strong>

		                    <!-- <span class="icon-cross">
		                        <img src="{{ asset('images/cross.svg')}}" class="img-fluid">
		                    </span> -->
		                </a>
		            </div>
					@endforeach


					

		        </div>
		    </div>
		</div>
		<!-- End Product Section -->

		<!-- Start Why Choose Us Section -->
		<div class="why-choose-section">
		    <div class="container">
		        <div class="row justify-content-between">
		            <div class="col-lg-6">
		                <h2 class="section-title">Why You Should Buy From Us</h2>
		                <p>Easily we are one of the best Digital Game Online Shop because of our dedicated work to fulfill our customer needs</p>

		                <div class="row my-5">
		                    <div class="col-6 col-md-6">
		                        <div class="feature">
		                            <div class="icon">
		                                <img src="{{ asset('images/truck.svg')}}" alt="Image" class="imf-fluid">
		                            </div>
		                            <h3>Fast &amp; Free Shipping</h3>
		                            <p>We always try our best to send your order on time and of course with free shipping</p>
		                        </div>
		                    </div>

		                    <div class="col-6 col-md-6">
		                        <div class="feature">
		                            <div class="icon">
		                                <img src="{{ asset('images/bag.svg')}}" alt="Image" class="imf-fluid">
		                            </div>
		                            <h3>Easy to Shop</h3>
		                            <p>We provide the simplest website ever for you to shop</p></p>
		                        </div>
		                    </div>

		                    <div class="col-6 col-md-6">
		                        <div class="feature">
		                            <div class="icon">
		                                <img src="{{ asset('images/support.svg')}}" alt="Image" class="imf-fluid">
		                            </div>
		                            <h3>24/7 Support</h3>
		                            <p>We also provide 24/7 Customer Service support for our customer</p>
		                        </div>
		                    </div>

		                    <div class="col-6 col-md-6">
		                        <div class="feature">
		                            <div class="icon">
		                                <img src="{{ asset('images/return.svg')}}" alt="Image" class="imf-fluid">
		                            </div>
		                            <h3>Hassle Free Returns</h3>
		                            <p>We always help for customer in need to do some refund with reasonable problems</p>
		                        </div>
		                    </div>

		                </div>
		            </div>

		            <div class="col-lg-5">
		                <div class="img-wrap">
		                    <img src="{{ asset('images/website.png')}}" alt="Image" class="img-fluid">
		                </div>
		            </div>

		        </div>
		    </div>
		</div>
		<!-- End Why Choose Us Section -->

		<!-- Start Testimonial Slider -->
		<div class="testimonial-section">
		    <div class="container">
		        <div class="row">
		            <div class="col-lg-7 mx-auto text-center">
		                <h2 class="section-title">Reviews from our customer</h2>
		            </div>
		        </div>

		        <div class="row justify-content-center">
		            <div class="col-lg-12">
		                <div class="testimonial-slider-wrap text-center">

		                    <div id="testimonial-nav">
		                        <span class="prev" data-controls="prev"><span class="fa fa-chevron-left"></span></span>
		                        <span class="next" data-controls="next"><span class="fa fa-chevron-right"></span></span>
		                    </div>

		                    <div class="testimonial-slider">

		                        <div class="item">
		                            <div class="row justify-content-center">
		                                <div class="col-lg-8 mx-auto">

		                                    <div class="testimonial-block text-center">
		                                        <blockquote class="mb-5">
		                                            <p>&ldquo;Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio
		                                                quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
		                                                vulputate velit imperdiet dolor tempor tristique. Pellentesque
		                                                habitant morbi tristique senectus et netus et malesuada fames ac
		                                                turpis egestas. Integer convallis volutpat dui quis
		                                                scelerisque.&rdquo;</p>
		                                        </blockquote>

		                                        <div class="author-info">
		                                            <div class="author-pic">
		                                                <img src="{{ asset('images/person-1.png')}}" alt="Maria Jones" class="img-fluid">
		                                            </div>
		                                            <h3 class="font-weight-bold">Maria Jones</h3>
		                                            <span class="position d-block mb-3">CEO, Co-Founder, XYZ Inc.</span>
		                                        </div>
		                                    </div>

		                                </div>
		                            </div>
		                        </div>
		                        <!-- END item -->

		                        <div class="item">
		                            <div class="row justify-content-center">
		                                <div class="col-lg-8 mx-auto">

		                                    <div class="testimonial-block text-center">
		                                        <blockquote class="mb-5">
		                                            <p>&ldquo;Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio
		                                                quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
		                                                vulputate velit imperdiet dolor tempor tristique. Pellentesque
		                                                habitant morbi tristique senectus et netus et malesuada fames ac
		                                                turpis egestas. Integer convallis volutpat dui quis
		                                                scelerisque.&rdquo;</p>
		                                        </blockquote>

		                                        <div class="author-info">
		                                            <div class="author-pic">
		                                                <img src="{{ asset('images/person-1.png')}}" alt="Maria Jones" class="img-fluid">
		                                            </div>
		                                            <h3 class="font-weight-bold">Maria Jones</h3>
		                                            <span class="position d-block mb-3">CEO, Co-Founder, XYZ Inc.</span>
		                                        </div>
		                                    </div>

		                                </div>
		                            </div>
		                        </div>
		                        <!-- END item -->

		                        <div class="item">
		                            <div class="row justify-content-center">
		                                <div class="col-lg-8 mx-auto">

		                                    <div class="testimonial-block text-center">
		                                        <blockquote class="mb-5">
		                                            <p>&ldquo;Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio
		                                                quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
		                                                vulputate velit imperdiet dolor tempor tristique. Pellentesque
		                                                habitant morbi tristique senectus et netus et malesuada fames ac
		                                                turpis egestas. Integer convallis volutpat dui quis
		                                                scelerisque.&rdquo;</p>
		                                        </blockquote>

		                                        <div class="author-info">
		                                            <div class="author-pic">
		                                                <img src="{{ asset('images/person-1.png')}}" alt="Maria Jones" class="img-fluid">
		                                            </div>
		                                            <h3 class="font-weight-bold">Maria Jones</h3>
		                                            <span class="position d-block mb-3">CEO, Co-Founder, XYZ Inc.</span>
		                                        </div>
		                                    </div>

		                                </div>
		                            </div>
		                        </div>
		                        <!-- END item -->

		                    </div>

		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!-- End Testimonial Slider -->

		<!-- Start Blog Section -->
		<div class="blog-section">
		    <div class="container">
		        <div class="row mb-5">
		            <div class="col-md-6">
		                <h2 class="section-title">Recent Blog</h2>
		            </div>
		            <div class="col-md-6 text-start text-md-end">
		                <a href="#" class="more">View All Posts</a>
		            </div>
		        </div>

		        <div class="row">

		            <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
		                <div class="post-entry">
		                    <a href="#" class="post-thumbnail"><img src="{{ asset('images/post-1.png')}}" alt="Image" class="img-fluid"></a>
		                    <div class="post-content-entry">
		                        <h3><a href="#">Vanguard Zombies Conclude in The Archon</a></h3>
		                        <div class="meta">
		                            <span>by <a href="#">Kristin Watson</a></span> <span>on <a href="#">Dec 19,
		                                    2021</a></span>
		                        </div>
		                    </div>
		                </div>
		            </div>

		            <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
		                <div class="post-entry">
		                    <a href="#" class="post-thumbnail"><img src="{{ asset('images/post-2.jpg')}}" alt="Image" class="img-fluid"></a>
		                    <div class="post-content-entry">
		                        <h3><a href="#">New Battle Pass Call of Duty Modern Warfare II</a></h3>
		                        <div class="meta">
		                            <span>by <a href="#">Robert Fox</a></span> <span>on <a href="#">Dec 15, 2021</a></span>
		                        </div>
		                    </div>
		                </div>
		            </div>

		            <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
		                <div class="post-entry">
		                    <a href="#" class="post-thumbnail"><img src="{{ asset('images/post-3.jpg')}}" alt="Image" class="img-fluid"></a>
		                    <div class="post-content-entry">
		                        <h3><a href="#">Crash Team Rumble - Coming Soon</a></h3>
		                        <div class="meta">
		                            <span>by <a href="#">Kristin Watson</a></span> <span>on <a href="#">Dec 12,
		                                    2021</a></span>
		                        </div>
		                    </div>
		                </div>
		            </div>

		        </div>
		    </div>
		</div>
		<!-- End Blog Section -->
