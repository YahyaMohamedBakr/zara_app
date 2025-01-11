<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>عيادات كيان زارا الطبي</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="apple-touch-icon" href="assets/images/favicon.png">
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- CSS FILES HERE -->
    <!-- inject:css -->
    <link rel="stylesheet" href="assets/css/vendors/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fontawesome5/css/all.min.css">
    <link rel="stylesheet" href="assets/fontawesome6/css/all.min.css">


    <link rel="stylesheet" href="assets/css/vendors/meanmenu.min.css">
    <link rel="stylesheet" href="assets/css/vendors/slick.css">
    <link rel="stylesheet" href="assets/css/vendors/slick-theme.css">
    <link rel="stylesheet" href="assets/css/vendors/themify-icons.css">
    <link rel="stylesheet" href="assets/css/vendors/flaticon.css">
    <link rel="stylesheet" href="assets/css/vendors/twentytwenty.css">
    <link rel="stylesheet" href="assets/css/vendors/nice-select.css">
    <link rel="stylesheet" href="assets/css/vendors/jquery.fancybox.min.css">
    <link rel="stylesheet" href="assets/css/vendors/jquery.nstSlider.min.css">
    <link rel="stylesheet" href="assets/css/style.css">


    <!-- endinject -->

        {{-- tel --}}
        <link rel="stylesheet" href="/assets/css/intlTelInput.min.css">

        <script src="/assets/js/intlTelInput.min.js"></script>
        {{-- end tel --}}
</head>

<body>

    <!-- Preloader -->
    <div class="tm-preloader">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="tm-preloader-logo">
                        <img src="assets/images/logo-white.png" alt="logo">
                    </div>
                    <span class="tm-preloader-progress"></span>
                </div>
            </div>
        </div>
        <button class="tm-button tm-button-small"> تخط </button>
    </div>
    <!--// Preloader -->

    <!-- Wrapper -->
    <div id="wrapper" class="wrapper">

        <!-- Header -->
        <div id="tm-home-area" class="tm-header tm-header-sticky">

            <!-- <div class="tm-header-toparea">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <ul class="tm-header-info">
                                <li><i class="ti ti-mobile"></i><b>Contact:</b> <a href="tel:18009156270">1-800-915-6270
                                    </a></li>
                                <li><i class="ti ti-time"></i><b>Work time:</b> 9:00-18:00</li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul class="tm-header-icons">
                                <li><a href="#appointment-area" class="hash-scroll-link">Book Appointment</a></li>
                                <li><a href="cart.html"><i class="ti ti-shopping-cart"></i></a></li>
                                <li><a href="login-register.html"><i class="ti ti-user"></i></a></li>
                                <li><button class="tm-header-searchtrigger"><i class="ti ti-search"></i></button></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="tm-header-bottomarea">
                <div class="container">
                    <div class="tm-header-bottominside">
                        <div class="tm-header-searcharea">
                            <form action="#">
                                <input type="text" placeholder="Enter search keyword..">
                                <button type="submit"><i class="ti ti-search"></i></button>
                            </form>
                            <button class="tm-header-searchclose"><i class="ti ti-close"></i></button>
                        </div>
                        <div class="tm-header-inner">
                            <a href="{{route('home')}}" class="tm-header-logo">
                                <img src="assets/images/logo.png" alt="munu">
                            </a>
                            <nav class="tm-header-nav">
                                <ul>
                                    <!-- <li class="tm-header-nav-dropdown"><a href="#tm-home-area">Home</a>
                                        <ul>
                                            <li><a href="index.html">Homepage 1</a></li>
                                            <li><a href="index-2.html">Homepage 2</a></li>
                                        </ul>
                                    </li> -->
                                    <li><a href="#tm-about-area"> لماذا كيان زارا؟</a></li>
                                    <li><a href="#tm-service-area">ماذا نقدم؟</a></li>
                                    <li><a href="#our_location">أين تجديننا في الممكلة؟</a>
                                        <!-- <ul>
                                            <li><a href="products.html">Products</a></li>
                                            <li><a href="products-leftsidebar.html">Products Left Sidebar</a></li>
                                            <li><a href="products-nosidebar.html">Products Without Sidebar</a></li>
                                            <li><a href="product-details.html">Product Details</a></li>
                                            <li><a href="product-details-leftsidebar.html">Product Details Left
                                                    Sidebar</a></li>
                                            <li><a href="product-details-nosidebar.html">Product Details Without
                                                    Sidebar</a></li>
                                            <li><a href="#tm-home-area">Others</a>
                                                <ul>
                                                    <li><a href="cart.html">Shopping Cart</a></li>
                                                    <li><a href="wishlist.html">Wishlist</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>
                                                    <li><a href="login-register.html">Login & Register</a></li>
                                                    <li><a href="my-account.html">My Account</a></li>
                                                </ul>
                                            </li>
                                        </ul> -->
                                    </li>
                                    <!-- <li ><a href="#tm-news-area">Blog</a> -->
                                        <!-- <ul>
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog-leftsidebar.html">Blog Left Sidebar</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                            <li><a href="blog-details-leftsidebar.html">Blog Details Left Sidebar</a>
                                            </li>
                                            <li><a href="blog-details-gallery.html">Blog Details Gallery</a></li>
                                            <li><a href="blog-details-audio.html">Blog Details Audio</a></li>
                                            <li><a href="blog-details-video.html">Blog Details Video</a></li>
                                        </ul> -->
                                    </li>
                                    <li><a href="#contact_us">كيف تتواصلين معنا؟</a></li>
                                </ul>
                            </nav>
                            <div class="tm-header-button">
                                <a href="#our_location" class="tm-button hash-scroll-link"> احجزي الآن</a>
                            </div>
                            <div class="tm-mobilenav"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--// Header -->

        <!-- Heroslider Area -->
        <div class="tm-heroslider-area">

            <div class="tm-heroslider-slider">

                <!-- Heroslider Item -->
                <div class="tm-heroslider" data-bgimage="assets/images/heroslider-image-1.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7 col-md-9">
                                <div class="tm-heroslider-contentwrapper">
                                    <div class="tm-heroslider-content">
                                        <h1> جمال يليق بك، وعناية تثقين بها</h1>
                                        <p>
                                            أنت تستحقين  الأفضل دائمًا! في مركز كيان زارا الطبي، نحن لا نقدم فقط خدمات طبية، بل نرسم طريقك نحو الثقة والجمال. اجعلي لحظتك الآن هي البداية لحياة أكثر إشراقًا وصحة.
                                        </p>
                                        {{-- <p>احجزي موعدك الآن مع أفضل المراكز المتخصصة واستمتعي بجمال دائم وابتسامة مشرقة.

                                        </p> --}}
                                        <a href="#our_location" class="tm-button"> احجزي الآن  </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--// Heroslider Item -->

                <!-- Heroslider Item -->
                <!-- <div class="tm-heroslider" data-bgimage="assets/images/heroslider-image-2.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7 col-md-9">
                                <div class="tm-heroslider-contentwrapper">
                                    <div class="tm-heroslider-content">
                                        <h1>Beauty have changed greatly over the years</h1>
                                        <p>The experience of beauty often involves an interpretation of some
                                            entity as being in balance.</p>
                                        <a href="#" class="tm-button">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!--// Heroslider Item -->

                <!-- Heroslider Item -->
                <!-- <div class="tm-heroslider" data-bgimage="assets/images/heroslider-image-3.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7 col-md-9">
                                <div class="tm-heroslider-contentwrapper">
                                    <div class="tm-heroslider-content">
                                        <h1>Beauty is first and foremost an emotion</h1>
                                        <p>The experience of beauty often involves an interpretation of some
                                            entity as being in balance.</p>
                                        <a href="#" class="tm-button">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!--// Heroslider Item -->

            </div>

            <ul class="tm-heroslider-social">
                <li><a href="https://www.facebook.com/kyanzaramedical" target="_blank" title="Facebook"><i class="ti ti-facebook"></i></a>
                    <span class="tm-heroslider-social-tooltip">Facebook</span>
                </li>
                <li><a href="https://x.com/kyan_zara" target="_blank"  title="X (twitter)"><i class="fa-brands fa-x-twitter"></i></a>
                    <span class="tm-heroslider-social-tooltip">X</span>
                </li>
                <li><a href="https://www.snapchat.com/add/kyanzara" target="_blank"  title="Snapchat"><i class="fab fa-snapchat-ghost"></i></a>
                    <span class="tm-heroslider-social-tooltip">Snapchat</span>
                </li>
                <li><a href="https://www.instagram.com/kyan.zara"  target="_blank" title="Instagram"><i class="fab fa-instagram-square"></i></a>
                    <span class="tm-heroslider-social-tooltip">Instagram</span>
                </li>
                <li><a href="https://www.tiktok.com/@kyanzara1" target="_blank"  title="Tiktok"><i class="fab fa-tiktok"></i></a>
                    <span class="tm-heroslider-social-tooltip">Tiktok</span>
                </li>
            </ul>

        </div>
        <!--// Heroslider Area -->

        <!-- Page Content -->
        <main class="page-content">

            <!-- About Area -->
            <section id="tm-about-area" class="tm-section tm-about-area tm-padding-section bg-white"
                data-bgimage="assets/images/about-bg-image.png" data-white-overlay="8">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8 col-md-9 col-12">
                            <div class="tm-sectiontitle text-center">
                                <h2>لماذا كيان زارا؟</h2>
                                <span class="tm-sectiontitle-divider">
                                    <img src="assets/images/section-divider-icon.png" alt="section divider">
                                </span>
                                <p> نحن نقدم خدمات متكاملة عالية الجودة ونحرص تقديم العناية الكاملة والمناسبة لإبراز جمالك الطبيعي</p>
                            </div>
                        </div>
                    </div>
                    <div class="tm-about tm-scrollanim" data-bgimage="assets/images/about-block-background.png">
                        <div class="row">
                            <div class="col-xl-7 col-lg-8">
                                <h3>أهلا بك في عيادات كيان زارا</h3>
                                <p>نعلم جيداً أن تقديم خدمات العناية والجمال هي مهمة غير سهلة ولكننا بجانب هذا على ثقة من خلال خبرتنا أننا نقدم أفضل ما يمكن أن تجدينه في هذا المجال</p>
                                <p>
                                    إن كيان زارا هو مركز تجميلي متخصص لا يقدم فقط الخدمات التجميلة بل يقدم النصائح والإرشادات اللازمة للعناية بالبشرة والجسم والشعر والأظافر والعيون والأسنان والتغذية الصحية والرياضة 
                                </p>
                                <p>
                                    نحن لا ندعي أننا الوحيدون في هذا المجال ولكننا نؤمن بأننا يجب أن نقدم لك أفضل خدمة تليق بجمالك وتميزك
                                </p>
                                <a href="#tm-service-area" class="tm-button">اعرفي المزيد عن الخدمات </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--// About Area -->

            <!-- Video Area -->
            <!-- <div class="tm-section tm-video-area" data-bgimage="assets/images/video-area-background.jpg"
                data-overlay="3">
                <div class="container">
                    <div class="tm-video text-center">
                        <a href="https://www.youtube.com/watch?v=mHUOCxVT5ro" class="tm-videobutton" data-fancybox>
                            <i class="flaticon-play-button"></i>
                        </a>
                    </div>
                </div>
            </div> -->
            <!--// Video Area -->

            <!-- Service Area -->
            <div id="tm-service-area" class="tm-section tm-service-area tm-padding-section bg-white">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8 col-md-9 col-12">
                            <div class="tm-sectiontitle text-center">
                                <h2> ماذا نقدم؟</h2>
                                <span class="tm-sectiontitle-divider">
                                    <img src="assets/images/section-divider-icon.png" alt="section divider">
                                </span>
                                <p>نقدم لك مجموعة من الخدمات الخاصة بك للعناية بجمال بشرتك وشعرك وأسنانك </p>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters tm-service-wrapper">
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="tm-service text-center tm-scrollanim">
                                <span class="tm-service-icon">
                                    <img class="service-icon" src="assets/images/service1.png" alt="service icon">
                                </span>
                                <h5> خدمات الأسنان</h5>
                                    <p>
                                        ابتسامتك ليست مجرد تعبير، إنها سر ثقتك بنفسك. في كيان زارا، نقدم خدمات استثنائية تشمل:
                                        <ul>
                                          <li>تبييض الأسنان بتقنيات متطورة.</li>
                                          <li>ابتسامة هوليود بتصميم فردي.</li>
                                          <li>زراعة الأسنان بأعلى درجات الدقة.</li>
                                        </ul>
                                        لا تنتظر، دعنا نحول ابتسامتك إلى تحفة فنية.
                                      </p>
                                <a href="#" class="tm-readmore tm-readmore-dark">اطلبي الخدمة</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="tm-service text-center tm-scrollanim">
                                <span class="tm-service-icon">
                                    <img class="service-icon" src="assets/images/service2.png" alt="service icon">
                                </span>
                                <h5> الجلدية والتجميل  </h5>
                                <p>
                                    كل بشرة تحكي قصة، ونحن هنا لنكتب قصتك بجمال متجدد. خدماتنا تشمل:
                                    <ul>
                                      <li>علاج التصبغات وإزالة البقع الداكنة.</li>
                                      <li>جلسات النضارة المتقدمة لإشراقة طبيعية.</li>
                                      <li>حقن الفيلر والبوتوكس لتحديد الملامح.</li>
                                    </ul>
                                    ثق بنا لتجربة تمنحك المظهر الذي تحلم به!
                                  </p>
                                  
                                <a href="#" class="tm-readmore tm-readmore-dark">اطلبي الخدمة</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="tm-service text-center tm-scrollanim">
                                <span class="tm-service-icon">
                                    <img class="service-icon" src="assets/images/service3.png" alt="service icon">
                                </span>
                                <h5>  الليزر</h5>
                                <p>
                                    قولي وداعًا للتجارب غير المرضية! مع كيان زارا، نقدم:
                                    <ul>
                                      <li>إزالة الشعر بالليزر بنتائج طويلة الأمد.</li>
                                      <li>علاج التصبغات وإعادة الحيوية لبشرتك.</li>
                                      <li>تقنيات تجديد البشرة المتطورة.</li>
                                    </ul>
                                    أضف لمسة من السحر لحياتك، وثق بخبرائنا لتجربة آمنة ومتميزة.
                                  </p>
                                  
                                <a href="#" class="tm-readmore tm-readmore-dark">اطلبي الخدمة</a>
                            </div>
                        </div>
                        {{-- <div class="col-lg-4 col-md-6 col-12">
                            <div class="tm-service text-center tm-scrollanim">
                                <span class="tm-service-icon">
                                    <i class="flaticon-make-up"></i>
                                </span>
                                <h5> خدمات الميكب</h5>
                                <p>
                                    خدمات الميكبخدمات الميكبخدمات الميكبخدمات الميكبخدمات الميكبخدمات الميكبخدمات الميكبخدمات الميكبخدمات الميكبخدمات الميكبخدمات الميكب
                                </p>
                                <a href="#" class="tm-readmore tm-readmore-dark">اطلبي الخدمة</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="tm-service text-center tm-scrollanim">
                                <span class="tm-service-icon">
                                    <i class="flaticon-facial-mask"></i>
                                </span>
                                <h5>جلسات المساك  </h5>
                                <p>
                                    جلسات تقشير وتفتيح الجلد جلسات تقشير وتفتيح الجلد جلسات تقشير وتفتيح الجلد جلسات تقشير وتفتيح الجلد  جلسات تقشير وتفتيح الجلد 

                                </p>
                                <a href="#" class="tm-readmore tm-readmore-dark">اطلبي الخدمة</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="tm-service text-center tm-scrollanim">
                                <span class="tm-service-icon">
                                    <i class="flaticon-skin-care"></i>
                                </span>
                                <h5>تقشير وتفتيح البشرة</h5>
                                <p>
                                    جلسات تقشير وتفتيح الجلد جلسات تقشير وتفتيح الجلد جلسات تقشير وتفتيح الجلد جلسات تقشير وتفتيح الجلد جلسات تقشير وتفتيح الجلد جلسات تقشير وتفتيح الجلد 
                                </p>
                                <a href="#" class="tm-readmore tm-readmore-dark">اطلبي الخدمة</a>
                            </div>
                        </div> --}}
                        <!-- <div class="col-lg-4 col-md-6 col-12">
                            <div class="tm-service text-center tm-scrollanim">
                                <span class="tm-service-icon">
                                    <i class="flaticon-liner"></i>
                                </span>
                                <h5>Liner</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean cursus tincidunt
                                    ultrices utquis blandit dolor.</p>
                                <a href="#" class="tm-readmore tm-readmore-dark">Read more</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="tm-service text-center tm-scrollanim">
                                <span class="tm-service-icon">
                                    <i class="flaticon-makeup"></i>
                                </span>
                                <h5>Special event make up</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean cursus tincidunt
                                    ultrices utquis blandit dolor.</p>
                                <a href="#" class="tm-readmore tm-readmore-dark">Read more</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="tm-service text-center tm-scrollanim">
                                <span class="tm-service-icon">
                                    <i class="flaticon-rent"></i>
                                </span>
                                <h5>Home service</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean cursus tincidunt
                                    ultrices utquis blandit dolor.</p>
                                <a href="#" class="tm-readmore tm-readmore-dark">Read more</a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <!--// Service Area -->
            <!-- Offer Area -->
            <div class="tm-section tm-offer-area tm-padding-section bg-grey">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-12 order-2 order-lg-1">
                            <div class="tm-offer-left tm-scrollanim">
                                <h2>استفيدي من عروضنا الحصرية </h2>
                                <h3>احصلي على  <span>50%</span>خصم  على جلسات الليزر</h3>
                                <p>
                                    الفرصة محدودة - احجزي  موعدك الآن وابدأي التغيير اليوم!
                                  </p>
                                  <ul>
                                    <li>باقات شاملة لتجديد البشرة.</li>
                                    <li>خصومات خاصة على تبييض الأسنان.</li>
                                  </ul>                                <a href="#our_location" class="tm-button">احجزي الآن</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12 order-1 order-lg-2">
                            <div class="tm-offer-right tm-scrollanim">
                                <img src="assets/images/service3.png" alt="offer image">
                                <div class="tm-countdown" data-countdown="2025/01/18"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

             <style>
             .tm-pricing-compare-area   ul {
            list-style: none;
            padding: 0;
        }

      .tm-pricing-compare-area  ul li {
            cursor: pointer;
            /* margin: 5px 0;
            padding: 10px;
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            border-radius: 5px;
            display: flex;
            justify-content: space-between;
            align-items: center; */
        }

      .tm-pricing-compare-area  ul li:hover {
            /* background-color: #e0e0e0; */
        }

      .tm-pricing-compare-area  .price {
            /* color: white;
            background-color: #007bff;
            padding: 5px 10px;
            border-radius: 5px; */
            cursor: pointer;
        }

     .tm-pricing-compare-area   .price:hover {
            /* background-color: #0056b3; */
        }
             </style>
            <!--// Offer Area -->
            <!-- Pricing & Compare Area -->
            <div class="tm-section tm-pricing-compare-area tm-padding-section ">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="tm-pricing">
                                <h3>أسعار الخدمات لدينا</h3>
                                <p>هذه بعض أسعار الخدمات وقد تختلف قليلاً في الباقات والعروض</p>
                                <ul>
                                    <li data-service="معالجات وتجميل الأسنان">
                                        <span class="name">معالجات وتجميل الأسنان</span>
                                        <span class="price">اطلبي الخدمة</span>
                                    </li>
                                    <li data-service="تقويم الأسنان">
                                        <span class="name">تقويم الأسنان</span>
                                        <span class="price">اطلبي الخدمة</span>
                                    </li>
                                    <li data-service="زراعة الأسنان">
                                        <span class="name">زراعة الأسنان</span>
                                        <span class="price">اطلبي الخدمة</span>
                                    </li>
                                    <li data-service="هوليوود سمايل">
                                        <span class="name">هوليوود سمايل</span>
                                        <span class="price">اطلبي الخدمة</span>
                                    </li>
                                    <li data-service="فيلر و بوتكس">
                                        <span class="name">فيلر و بوتكس</span>
                                        <span class="price">اطلبي الخدمة</span>
                                    </li>
                                    <li data-service="إزالة وتشقير الشعر بالليزر">
                                        <span class="name">إزالة وتشقير الشعر بالليزر</span>
                                        <span class="price">اطلبي الخدمة</span>
                                    </li>
                                    <li data-service="فراكشنال ليزر">
                                        <span class="name">فراكشنال ليزر</span>
                                        <span class="price">اطلبي الخدمة</span>
                                    </li>
                                    <li data-service="هايدروفيشيال">
                                        <span class="name">هايدروفيشيال</span>
                                        <span class="price">اطلبي الخدمة</span>
                                    </li>
                                    <li data-service="خلايا جذعية وميزوثيرابي">
                                        <span class="name">خلايا جذعية وميزوثيرابي</span>
                                        <span class="price">اطلبي الخدمة</span>
                                    </li>
                                    <li data-service="إزالة تاتو">
                                        <span class="name">إزالة تاتو</span>
                                        <span class="price">اطلبي الخدمة</span>
                                    </li>
                                </ul>
                                <a href="#our_location" class="tm-button hash-scroll-link">احجزي الآن</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="tm-beforeafter">
                                <h3>قبل وبعد الجلسات</h3>
                                <div class="tm-beforeafter-image">
                                    <img src="assets/images/2-2.png" alt="before image">
                                    <img src="assets/images/2-1.png" alt="after image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Pricing & Compare Area -->

            <!-- Appointment Area -->
            <!-- <div id="appointment-area" class="tm-section tm-appointment-area tm-padding-section bg-white"
                data-bgimage="assets/images/appointment-bg.png">
                <div class="container">
                    <div class="row align-items-end">
                        <div class="col-lg-6 col-12 order-2 order-lg-1">
                            <div class="tm-appointment-image tm-scrollanim">
                                <img src="assets/images/appointment-image.png" alt="appointment image">
                            </div>
                        </div>
                        <div class="col-lg-6 col-12 order-1 order-lg-2">
                            <div class="tm-appointment-box">
                                <h3>Book Your Appointment Today!</h3>
                                <p>One of our experts will get back to you soon and answer any questions you may have.
                                </p>
                                <form action="assets/php/appointment.php" id="tm-appointment-form"
                                    class="tm-appointment-form tm-form tm-form-whitebox" method="post">
                                    <div class="tm-form-inner">
                                        <div class="tm-form-field tm-form-fieldhalf">
                                            <label for="appointment-name">Name (required)</label>
                                            <input type="text" id="appointment-name" name="name" required>
                                        </div>
                                        <div class="tm-form-field tm-form-fieldhalf">
                                            <label for="appointment-phone">Phone (required)</label>
                                            <input type="text" id="appointment-phone" name="phone" required>
                                        </div>
                                        <div class="tm-form-field tm-form-fieldhalf">
                                            <label for="appointment-email">Email (required)</label>
                                            <input type="email" id="appointment-email" name="email">
                                        </div>
                                        <div class="tm-form-field tm-form-fieldhalf">
                                            <label for="appointment-service">Select Service</label>
                                            <select id="appointment-service" name="service">
                                                <option value="0">&nbsp;</option>
                                                <option value="Foundation">Foundation</option>
                                                <option value="Face Moisturizer">Face Moisturizer</option>
                                                <option value="Face Brushes">Face Brushes</option>
                                                <option value="Face Powder">Face Powder</option>
                                                <option value="Face Primer">Face Primer</option>
                                                <option value="Bronzer">Bronzer</option>
                                                <option value="Luminizer">Luminizer</option>
                                            </select>
                                        </div>
                                        <div class="tm-form-field">
                                            <label for="appointment-message">Message</label>
                                            <textarea cols="30" rows="5" id="appointment-message"
                                                name="message"></textarea>
                                        </div>
                                        <div class="tm-form-field">
                                            <button type="submit" class="tm-button">Submit Now</button>
                                        </div>
                                    </div>
                                </form>
                                <p class="appointment-messages"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!--// Appointment Area -->

            <!-- Products Area -->
         
            <!--// Products Area -->



            <!-- Testimonial Area -->
           
            <!--// Testimonial Area -->

            <!-- Subscribe Area -->
 
            <!--// Subscribe Area -->

            <!-- Team Members -->
            
            <!--// Team Members -->

            <!-- Portfolio Area -->
           
            <!--// Portfolio Area -->

            <!-- Faq Area -->

            <!--// Faq Area -->

            <!-- Call To Action -->
            <!-- <div class="tm-section tm-calltoaction-area bg-grey">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="tm-calltoaction-image tm-scrollanim">
                                <img src="assets/images/calltoaction-image.png" alt="calltoaction image">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="tm-calltoaction-content tm-scrollanim">
                                <h3>Need any type of cosmetic! Please</h3>
                                <h4><a href="tel:+18009156270"><i class="ti ti-mobile"></i> Call: 18009156270</a></h4>
                                <h4><span>OR</span></h4>
                                <a href="#contactus-area" class="tm-button hash-scroll-link">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!--// Call To Action -->

            <!-- Latest Blogs Area -->
           
            <!--// Latest Blogs Area -->

            <!-- Contact Us -->
            <div id="tm-contactus-area" class="tm-section tm-contact-area tm-padding-section bg-white"
                data-bgimage="assets/images/contact-us-background.png" data-white-overlay="8">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8 col-md-9 col-12">
                            <div class="tm-sectiontitle text-center">
                                <h2>كيف تتواصلين معنا</h2>
                                <span class="tm-sectiontitle-divider">
                                    <img src="assets/images/section-divider-icon.png" alt="section divider">
                                </span>
                                <p>الدعم لدينا على استعداد لأي استفسار يمكنك إرسال رسالة مباشرة أو الاتصال على الواتس اب أو من خلال صفحات السوشيال الخاصة بنا</p>
                            </div>
                        </div>
                    </div>
                    <div id="our_location" class="tm-contact-top tm-padding-section-top">
                        <div class="row mt-50-reverse">
                            <div class="col-lg-6">
                                <div class="tm-contact-formwrapper mt-50">
                                    <h3>   احجزي موعدك الآن</h3>
                                    <form id="tm-contactform" method="POST" action="{{route('booking.store')}}" class="tm-contact-forminner tm-form" >
                                        @csrf
                                        <div class="tm-form-inner">
                                            <div class="tm-form-field tm-form-fieldhalf">
                                                <input type="text" placeholder="الاسم (حقل مطلوب)" name="name" required>
                                            </div>
                                            {{-- <div class="tm-form-field tm-form-fieldhalf">
                                                <input type="email" placeholder="البريد الإلكتروني (حقل مطلوب)" name="email"
                                                    required>
                                            </div> --}}
                                            <div class="tm-form-field tm-form-fieldhalf">
                                                <input id ="phone" type="tel" placeholder="الهاتف (حقل مطلوب)" name="phone" class="phone-input"
                                                    required>
                                            </div>
                                            <div class="tm-form-field tm-form-fieldhalf">
                                                <select type="text"  name="service" id="service-select">
                                                    <option value="" disabled selected>الخدمة المطلوبة</option>
                                                    <option value="معالجات وتجميل الأسنان">معالجات وتجميل الأسنان</option>
                                                    <option value="تقويم الأسنان">تقويم الأسنان</option>
                                                    <option value="زراعة الأسنان">زراعة الأسنان</option>
                                                    <option value="هوليوود سمايل">هوليوود سمايل</option>
                                                    <option value="فيلر و بوتكس">فيلر و بوتكس</option>
                                                    <option value="إزالة وتشقير الشعر بالليزر">إزالة وتشقير الشعر بالليزر</option>
                                                    <option value="فراكشنال ليزر">فراكشنال ليزر</option>
                                                    <option value="هايدروفيشيال">هايدروفيشيال</option>
                                                    <option value="خلايا جذعية وميزوثيرابي">خلايا جذعية وميزوثيرابي</option>
                                                    <option value="إزالة تاتو">إزالة تاتو</option>
                                                </select>
                                            </div>
                                            <div class="tm-form-field">
                                                <textarea cols="30" rows="5" placeholder=" ملاحظاتك"
                                                    name="message"></textarea>
                                            </div>
                                            <div class="tm-form-field">
                                                <button type="submit" class="tm-button tm-button-block">إرسال
                                                    </button>
                                            </div>
                                        </div>
                                    </form>
                                    <div id="response-message" style="display:none; color: green;"></div>

                                    {{-- <p class="form-messages"></p> --}}
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="tm-contact-map mt-50">
                                    <h3>عنواننا على الخريطة</h3>
                                    <div id="google-map" class="google-map"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id= "contact_us" class="tm-contact-top tm-scrollanim">
                        <div class="row no-gutters">
                            {{-- <div class="col-lg-6">
                                <div class="tm-contact-address">
                                    <h4>Corporate Office</h4>
                                    <div class="tm-contact-addressblock">
                                        <b>العنوان</b>
                                        <p>مخرج 5 – طريق الملك عبدالعزيز – حي الربيع – مقابل مستشفى المملكة</p>
                                    </div>
                                    <div class="tm-contact-addressblock">
                                        <b>البريد</b>
                                        <p><a href="mailto:info@example.com">info@allure.com.sa</a></p>
                                    </div>
                                    <div class="tm-contact-addressblock">
                                        <b>Phone</b>
                                        <p><a href="tel:+18009156270">0112006060</a></p>
                                        <p><a href="tel:+18009156272">0112006160</a></p>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="col-lg-12">
                                <div class="tm-contact-address text-center">
                                    <h4 class=>شرفينا بالزيارة</h4>
                                    <div class="tm-contact-addressblock">
                                        {{-- <b> العنوان</b> --}}
                                        <p>الشيخ عبدالعزيز بن عبدالرحمن بن بشير
                                            السعودية, الرياض, الخليج, الشيخ عبدالعزيز بن عبدالرحمن بن بشير</p>
                                    </div>
                                    <div class="tm-contact-addressblock">
                                        {{-- <b>البريد </b> --}}
                                        <p><a href="mailto:kyanzaramedical@gmail.com"> kyanzaramedical@gmail.com</a></p>
                                        <!-- <p>Skype: example.name</p> -->
                                    </div>
                                    <div class="tm-contact-addressblock">
                                        {{-- <b> الهاتف</b> --}}
                                        <p><a href="tel:++966112440566">+966112440566</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <!--// Contact Us -->

            <!-- Brand Logos -->

            <!--// Brand Logos -->

        </main>
        <!--// Page Content -->

        <!-- Footer -->
        <div class="tm-footer">
            <!-- Instagram Photos -->
            <!-- <ul id="instafeed" class="tm-instaphotos"></ul> -->
            <!--// Instagram Photos -->

            <!-- <div class="tm-footer-toparea tm-padding-section" data-bgimage="assets/images/footer-bgimage.jpg"
                data-white-overlay="9">
                <div class="container">
                    <div class="widgets widgets-footer row">

                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="single-widget widget-info">
                                <a class="widget-info-logo" href="index.html"><img src="assets/images/logo.png"
                                        alt="white logo"></a>
                                <p>Lorem ipsum dolor sit amet, consect adipisicing elit, sed do eiusmod tempor
                                    inci-didunt. It is a long established fact that a reader distracted.</p>
                                <ul>
                                    <li><a href="#"><i class="ti ti-facebook"></i></a></li>
                                    <li><a href="#"><i class="ti ti-twitter-alt"></i></a></li>
                                    <li><a href="#"><i class="ti ti-pinterest"></i></a></li>
                                    <li><a href="#"><i class="ti ti-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="single-widget widget-quicklinks">
                                <h4 class="widget-title">Quick Links</h4>
                                <ul>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Service</a></li>
                                    <li><a href="#">Product</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Team</a></li>
                                    <li><a href="#">Faqs</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="single-widget widget-recentpost-2">
                                <h4 class="widget-title">Recent Posts</h4>
                                <ul>
                                    <li>
                                        <h6><a href="#">Only 1 week of the year!</a></h6>
                                        <span><i class="ti ti-calendar"></i> April 08, 2019</span>
                                    </li>
                                    <li>
                                        <h6><a href="#">Best tips for munu beauty</a></h6>
                                        <span><i class="ti ti-calendar"></i> April 08, 2019</span>
                                    </li>
                                    <li>
                                        <h6><a href="#">Our favorite makeup tips</a></h6>
                                        <span><i class="ti ti-calendar"></i> April 08, 2019</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="single-widget widget-hours">
                                <h4 class="widget-title">Opening Hours</h4>
                                <p>Lorem ipsum dolor sit amet, consect
                                    adipisicing elit, sed do eiusmod tempor inci-didunt.</p>
                                <ul>
                                    <li><span>Mon - Tue</span>: 9.00 AM - 18.00 PM</li>
                                    <li><span>Wed - Fri</span>: 8.00 AM - 17.00 PM</li>
                                    <li><span>Saturday</span>: 9.00 PM - 15.00 PM</li>
                                    <li><span>Sunday</span>: Closed</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div> -->

            <div class="tm-footer-bottomarea">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-7">
                            <p class="tm-footer-copyright">Powered By <a href="https://motaweroon.com">Motaweroon</a> ©
                                2025</p>
                        </div>
                        <div class="col-md-5">
                            <div class="tm-footer-payment">
                                <img src="assets/images/payment-methods.png" alt="payment methods">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
{{-- whatsapp --}}


<div class="floating-action-buttons">
    <button class="fab main-fab">
        <i class="fas fa-comment-alt"></i>
        </button>
    <div class="fab-buttons">
        <button class="fab whatsapp-fab">
            <a href="https://wa.me/966567771647" class="floating"  target="_blank">
            <i class="fab fa-whatsapp"></i>
            </a>
        </button>
        <button class="fab call-fab">
            <a href="tel:+966112440566"><i class="fas fa-phone-alt"></i></a>
        </button>
        <button class="fab facebook-fab">
            <a href="https://www.facebook.com/kyanzaramedical"><i class="fab fa-facebook"></i></a>
        </button>
    </div>
</div>

        {{-- <a href="https://wa.me/966567771647" class="floating" target="_blank">
            <i class="fab fa-whatsapp float-button"></i>
        </a> --}}
        <!--// Footer -->

        <!-- Product Quickview -->
       
        <!--// Product Quickview -->

        <button id="back-top-top"><i class="ti ti-arrow-up"></i></button>

    </div>
    <!--// Wrapper -->

    <!-- JS FILES HERE -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBgwgIuDRkO7HlxvpWN-vPePnGVWss5r5g"></script>
    <script src="assets/js/google-map.js"></script>

    <!-- inject:js -->
    <script src="assets/js/vendors/modernizr-3.7.1.min.js"></script>
    <script src="assets/js/vendors/jquery-3.3.1.min.js"></script>
    <script src="assets/js/vendors/bootstrap.bundle.min.js"></script>
    <script src="assets/js/vendors/jquery.meanmenu.min.js"></script>
    <script src="assets/js/vendors/slick.min.js"></script>
    <script src="assets/js/vendors/jquery.event.move.js"></script>
    <script src="assets/js/vendors/jquery.twentytwenty.js"></script>
    <script src="assets/js/vendors/jquery.nice-select.js"></script>
    <script src="assets/js/vendors/jquery.countdown.min.js"></script>
    <script src="assets/js/vendors/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/vendors/jquery.fancybox.min.js"></script>
    <script src="assets/js/vendors/instafeed.min.js"></script>
    <script src="assets/js/vendors/jquery.nstslider.min.js"></script>
    <script src="assets/js/vendors/scrollspy.min.js"></script>
    <script src="assets/js/vendors/ScrollMagic.min.js"></script>
    <script src="assets/js/main.js"></script>

<script>
$(document).ready(function () {
    $('#tm-contactform').off('submit').on('submit', function (e) {
        e.preventDefault(); 

        var form = this;
        var formData = new FormData(form);

        formData.append('_token', $('meta[name="csrf-token"]').attr('content'));

        $.ajax({
            url: "{{route('booking.store')}}", 
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                $('#response-message').text(response.message).css('color', 'green').show();
                $('#tm-contactform')[0].reset();
            },
            error: function (xhr) {
                var errorMessage = 'حدث خطأ أثناء الإرسال.';
                if (xhr.status === 419) {
                    errorMessage = 'انتهت الجلسة، يرجى إعادة تحميل الصفحة والمحاولة مجددًا.';
                }
                $('#response-message').text(errorMessage).css('color', 'red').show();
            }
        });
    });
});



$(document).ready(function () {
                $(".price").on("click", function (event) {
    event.stopPropagation(); 
    var selectedService = $(this).closest("li").data("service"); // الحصول على البيانات من العنصر الأب <li>
    $("#service-select").val(selectedService); // تعيين الخدمة في القائمة المنسدلة
    $('html, body').animate({
        scrollTop: $("#tm-contactform").offset().top // التمرير إلى الفورم
    }, 500);
            });
        });

</script>

    <!-- endinject -->
</body>

</html>