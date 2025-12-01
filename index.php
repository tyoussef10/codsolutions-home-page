<?PHP
// include config
include('config.php');
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>الصفحة الرئيسية - COD SOLUTIONS</title>
    <meta name="description"
        content="حلول متكاملة للتجارة الإلكترونية بالمغرب: تخزين، كول سنتر، شحن، وإستيراد من الصين." />

    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;800&display=swap"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.rtl.min.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Main CSS File -->
    <link href="assets/css/main.rtl.css" rel="stylesheet" />

    <!-- =======================================================
    * Template Name: Bootslander
    * Template URL: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/
    * Updated: Aug 07 2024 with Bootstrap v5.3.3
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body class="index-page">
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
            <a href="<?= $home_page_link; ?>" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" class="logo-original" alt="White logo of COD Solutions" />
                <img src="assets/img/logo.png" class="logo-white" alt="Black logo of COD Solutions" />
            </a>
            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" class="active">الرئيسية</a></li>
                    <li><a href="#services">خدماتنا</a></li>
                    <li><a href="#partners">شركاؤنا</a></li>
                    <li class="nav-auth-item">
                        <a class="btn nav-auth-btn nav-auth-btn-ghost" href="<?= $login_link; ?>">تسجيل الدخول</a>
                    </li>
                    <li class="nav-auth-item">
                        <a class="btn nav-auth-btn nav-auth-btn-solid" href="<?= $sign_up_link; ?>">إنشاء حساب</a>
                    </li>
                    <!-- <li><a href="#contact">تواصل معنا</a></li> -->
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        </div>
    </header>

    <main class="main">
        <!-- Hero Section -->
        <section id="hero" class="hero section bg-image-for-hero">
            <div class="container">
                <div class="row gy-4 justify-content-between">
                    <div class="mt-20 text-center d-flex flex-column justify-content-center align-items-center"
                        data-aos="fade-in">
                        <h1 class="text-black" style="line-height: 1.6;" data-aos="zoom-in">
                            مخزون موثوق، تأكيد إحترافي، تسليم سريع، وتحويل ارباح مرتين أسبوعيًا
                            <!-- <span>بالمغرب</span> -->
                        </h1>
                        <!-- <p class="text-black">نحن فريق من المصممين الموهوبين نصنع مواقع ويب باستخدام Bootstrap</p> -->
                        <div class="row gx-3 gx-md-3 px-3 px-md-5 my-5">
                            <div class="col-6 col-sm-4 col-md-2" data-aos="fade-up" data-aos-delay="100">

                                <img src="assets/img/graphics/importation.svg" alt="Import from China"
                                    style="max-width: 100px;">

                                <p class="text-black">
                                    الإستيراد من الصين إلى المغرب
                                </p>
                            </div>
                            <div class="col-6 col-sm-4 col-md-2" data-aos="fade-up" data-aos-delay="200">
                                <img src="assets/img/graphics/warehousing.svg" alt="Secure warehousing"
                                    style="max-width: 100px;">
                                <p class="text-black">تخزين آمن</p>
                            </div>
                            <div class="col-6 col-sm-4 col-md-2" data-aos="fade-up" data-aos-delay="300">

                                <img src="assets/img/graphics/call-center.svg" alt="Advanced call center support"
                                    style="max-width: 100px;">
                                <p class="text-black">مركز اتصال متطور</p>
                            </div>
                            <div class="col-6 col-sm-4 col-md-2" data-aos="fade-up" data-aos-delay="400">
                                <img src="assets/img/graphics/fulfillment.svg" alt="Careful packaging"
                                    style="max-width: 100px;">
                                <p class="text-black">تلفيف جيد</p>
                            </div>
                            <div class="col-6 col-sm-4 col-md-2" data-aos="fade-up" data-aos-delay="500">
                                <img src="assets/img/graphics/shipping.svg" alt="Fast shipping"
                                    style="max-width: 100px;">
                                <p class="text-black">شحن سريع</p>
                            </div>
                            <div class="col-6 col-sm-4 col-md-2" data-aos="fade-up" data-aos-delay="600">
                                <img src="assets/img/graphics/money-transfer.svg" alt="Money transferred twice weekly"
                                    style="max-width: 100px;">
                                <p class="text-black">
                                    تحويل أموال مرتين أسبوعيًا
                                </p>
                            </div>
                        </div>

                        <img src="assets/img/graphics/hero-video-img.png" title="coming soon" class="hero-video-img"
                            style="max-width: 700px;" />
                        <a href="<?= $sign_up_link; ?>" target="_blank" data-aos="zoom-out" data-aos-delay="100"
                            class="btn fw-bold d-flex align-items-center justify-content-center border-2 rounded-pill px-4 py-3 mb-4 cta-btn mt-5">
                            إنضم إلينا
                        </a>

                    </div>
                </div>
            </div>
        </section>
        <!-- /Hero Section -->

        <!-- Categories Section -->
        <section class="categories-section py-5 bg-light">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="fw-bold mb-2 black" data-aos="zoom-in" data-aos-delay="100">
                        نوفر لك مخزونا ضخما يواكب تغيّر السوق المغربي ويتم تحديثه باستمرار

                    </h2>
                    <!-- <p class="text-muted mb-0">
                        واحد اثنان ثلاثة أربعة خمسة ستة سبعة ثمانية تسعة
                        عشرة أحد عشر اثنا عشر
                    </p> -->
                </div>

                <img src="assets/img/graphics/categories.svg" data-aos="zoom-out" data-aos-delay="100"
                    style="margin: 0 auto;">
            </div>
        </section>
        <!-- /Categories Section -->


        <!-- services Section -->
        <section id="services" class="services section overflow-hidden mt-5">

            <div class="text-center mb-5 mt-4 ">
                <h2 class="fw-bold mb-2 service-headline" data-aos="zoom-in" data-aos-delay="100">
                    خدمات متكاملة لنمو لا يتوقف
                </h2>
            </div>

            <div class="container">
                <div class="row gy-4 align-items-center features-item">
                    <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
                        <img src="assets/img/graphics/services/call-center.svg" class="img-fluid" alt="" />
                    </div>
                    <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
                        <h3 class="service-headline">
                            مركز اتصال متطور
                        </h3>
                        <p class="">
                            نوفّر لك مركز اتصال متطور يدعم متجرك الإلكتروني، حيث يتم التواصل مع العملاء لتأكيد الطلبات،
                            تقديم الدعم، والإجابة على الاستفسارات بسرعة واحترافية. فريقنا المدرّب يضمن أعلى معدلات
                            التأكيد والرضا لدى العملاء.
                        </p>
                        <ul>
                            <li>
                                <i class="bi bi-check"></i>
                                <span>
                                    تأكيد الطلبات عبر المكالمات الهاتفيّة و الواتساب
                                </span>
                            </li>
                            <li>
                                <i class="bi bi-check"></i>
                                <span>
                                    العمل 7 أيام في الأسبوع بما في ذلك يوم الأحد
                                </span>
                            </li>
                            <li>
                                <i class="bi bi-check"></i>
                                <span>
                                    تأكيد الطلبات حتى الساعة 9:00 ليلًا
                                </span>
                            </li>
                            <li>
                                <i class="bi bi-check"></i>
                                <span>
                                    فريق متخصص في تتبّع الطلبات حتى التسليم
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Features Item -->

                <div class="row gy-4 align-items-center features-item">
                    <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out"
                        data-aos-delay="200">
                        <img src="assets/img/graphics/services/shipping.svg" class="img-fluid" alt="" />
                    </div>
                    <div class="col-md-7 order-2 order-md-1" data-aos="fade-up" data-aos-delay="200">

                        <h3 class="service-headline">
                            شحن سريع وذكي
                        </h3>
                        <p class="">
                            نقدّم لك خدمة شحن سريع وعالي الجودة، بالتعاون مع أفضل شركات التوصيل في المغرب. نختار لكل
                            مدينة شركة الشحن التي تحقق أعلى نسب التسليم وأفضل معدلات الوصول، مع إعطاء الأولوية الدائمة
                            للشركات الأعلى أداء والأقل ارتجاعا. نهتم بسرعة التسليم، وتتبع الطلبات، والتواصل مع العميل
                            حتى الاستلام، لضمان تجربة سلسة وموثوقة في كل مدينة.
                        </p>
                        <ul>
                            <li>
                                <i class="bi bi-check"></i><span>
                                    تتبع الطلبات لحظة بلحظة
                                </span>
                            </li>
                            <li>
                                <i class="bi bi-check"></i>
                                <span>
                                    سرعة في التسليم
                                </span>
                            </li>
                            <li>
                                <i class="bi bi-check"></i>
                                <span>
                                    نسبة إرجاع منخفضة
                                </span>
                            </li>
                            <li>
                                <i class="bi bi-check"></i>
                                <span>
                                    دعم في حالات التأخير والاستبدال
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Features Item -->

                <div class="row gy-4 align-items-center features-item">
                    <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out">
                        <img src="assets/img/graphics/services/warehousing.svg" class="img-fluid" alt="" />
                    </div>
                    <div class="col-md-7" data-aos="fade-up">
                        <h3 class="service-headline">
                            نمتلك مستودعَين في الدار البيضاء وأكادير
                        </h3>
                        <p>
                            مستودعاتنا بيئة منظمة ومهيأة للتجارة الالكترونية، تعتمد على ترتيب دقيق للمخزون ونظام مراقبة
                            بالكاميرات يعمل على مدار الساعة 24/7 لحماية المنتجات من التلف او الضياع. نمتلك مستودعين في
                            المغرب: الاول في الدار البيضاء والثاني في اكادير، لتخرج الطلبات من اقرب موقع للعميل وتصل
                            بسرعة اعلى وكفاءة افضل. مع الحفاظ على جودة التخزين لضمان جهوزية المنتجات عند كل طلب.
                        </p>
                        <ul>
                            <li>
                                <i class="bi bi-check"></i>
                                <span>
                                    ترتيب دقيق للمخزون داخل المستودعات
                                </span>
                            </li>
                            <li>
                                <i class="bi bi-check"></i>
                                <span>
                                    اختيار اقرب مستودع للعميل حسب المدينة
                                </span>
                            </li>
                            <li>
                                <i class="bi bi-check"></i>
                                <span>
                                    بيئة مناسبة لحماية المنتجات الحساسة
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Features Item -->

                <div class="row gy-4 align-items-center features-item">
                    <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out">
                        <img src="assets/img/graphics/services/fulfillment.svg" class="img-fluid" alt="" />
                    </div>
                    <div class="col-md-7 order-2 order-md-1" data-aos="fade-up">
                        <h3 class="service-headline">
                            تلفيف احترافي للطلبات
                        </h3>
                        <p>
                            نقدّم خدمة تلفيف وتجهيز الطلبات بعناية عالية، باستخدام مواد تغليف قوية ومناسبة لكل منتج،
                            لضمان وصوله إلى العميل في حالة ممتازة، مع تعزيز تجربة فتح الطرد بشكل احترافي يرفع ثقة العميل
                            ورضاه.
                        </p>
                        <ul>
                            <li>
                                <i class="bi bi-check"></i>
                                <span>
                                    استخدام مواد تغليف قوية ومناسبة لطبيعة المنتج
                                </span>
                            </li>

                            <li>
                                <i class="bi bi-check"></i>
                                <span>
                                    اختيار أسلوب التغليف حسب حجم المنتج وقابليته للكسر أو الحساسية
                                </span>
                            </li>
                            <li>
                                <i class="bi bi-check"></i>
                                <span>
                                    التأكد من أمان المنتج داخل الطرد قبل الشحن
                                </span>
                            </li>
                            <li>
                                <i class="bi bi-check"></i>
                                <span>
                                    تجهيز الطلبات اليومية بسرعة ودقة
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Features Item -->

                <div class="row gy-4 align-items-center features-item">
                    <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out">
                        <img src="assets/img/graphics/services/importation.svg" class="img-fluid" alt="" />
                    </div>
                    <div class="col-md-7" data-aos="fade-up">
                        <h3 class="service-headline">
                            الإستيراد من الصين إلى المغرب
                        </h3>
                        <p>
                            نقوم باستيراد منتجاتنا مباشرة من الصين، بمراقبة جودة دقيقة، لتوفير مخزوننا الخاص الذي يتجاوز
                            1000 منتج جاهز للبيع داخل مستودعاتنا في المغرب. كما نقدّم للبائعين خدمة تزويد المنتجات
                            (Sourcing) من خلال فريق متخصص في البحث عن الموردين الموثوقين، والتفاوض، ومتابعة الشحنات حتى
                            الوصول الى المستودع.
                        </p>
                        <ul>
                            <li>
                                <i class="bi bi-check"></i>
                                <span>
                                    نستورد منتجاتنا مباشرة من الصين لبناء مخزوننا الخاص
                                </span>
                            </li>
                            <li>
                                <i class="bi bi-check"></i>
                                <span>
                                    توفير خدمة (Sourcing) لعملاءنا
                                </span>
                            </li>
                            <li>
                                <i class="bi bi-check"></i>
                                <span>
                                    متابعة الشحنات مع شركاء النقل حتى الاستلام داخل المستودع
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Features Item -->

                <div class="row gy-4 align-items-center features-item">
                    <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out">
                        <img src="assets/img/graphics/services/money-transfer.svg" class="img-fluid" alt="" />
                    </div>
                    <div class="col-md-7 order-2 order-md-1" data-aos="fade-up">
                        <h3 class="service-headline">
                            تحويل الأموال مرتين أسبوعيًا
                        </h3>
                        <p>
                            نوفّر نظام تحويل مالي سريع ومنتظم، نضمن من خلاله تسليم أرباحك مرتين أسبوعيًا، لتعزيز السيولة
                            واستمرار حملاتك الإعلانية. نعتمد الشفافية في كل المعاملات، ونقدّم دعما مباشرا لمرافقتك
                            في جميع تفاصيل التحويل والمستحقات.
                        </p>
                        <ul>
                            <li>
                                <i class="bi bi-check"></i>
                                <span>
                                    تحويل الأرباح مرتين في الأسبوع دون تعطيل
                                </span>
                            </li>
                            <li>
                                <i class="bi bi-check"></i>
                                <span>
                                    تحويلات منتظمة وشفافة قابلة للتتبّع
                                </span>
                            </li>
                            <li>
                                <i class="bi bi-check"></i>
                                <span>
                                    دعم مباشر للاستفسارات المالية وحل المشكلات فورا
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Features Item -->


            </div>
        </section>
        <!-- /services Section -->


        <!-- CTA Conversion Section -->
        <section class="section cta-conversion my-5 pt-3" data-aos="zoom-in" data-aos-delay="200">
            <div class="container mt-5">
                <div class="cta-conversion__card mt-5">
                    <div class="cta-conversion__bubble bubble-1"></div>
                    <div class="cta-conversion__bubble bubble-2"></div>
                    <div class="cta-conversion__bubble bubble-3"></div>
                    <div class="cta-conversion__bubble bubble-4"></div>
                    <div class="cta-conversion__bubble bubble-5"></div>
                    <div class="cta-conversion__bubble bubble-6"></div>

                    <h2 class="cta-conversion__title mb-3">
                        هل أنت مستعد لإطلاق مشروع تجارة إلكترونية في السوق المغربي؟
                    </h2>
                    <p class="cta-conversion__subtitle mb-4">
                        إنضم إلى مجتمع البائعين الذين بدؤوا التأسيس الصحيح
                    </p>
                    <a href="<?php echo $sign_up_link; ?>" target="_blank"
                        class="btn btn-light fw-bold rounded-pill px-4 py-2 cta-conversion__btn">
                        إبدأ رحلتك الآن
                    </a>
                </div>
            </div>
        </section>
        <!-- /CTA Conversion Section -->


        <!-- FAQ Section -->
        <section id="faq" class="faq section py-5">
            <div class="container" data-aos="fade-up">
                <div class="text-center mb-5">
                    <h2 class="fw-bold mb-2 service-headline">أسئلة شائعة</h2>
                    <!-- <p class="text-muted">إجابات على أكثر الأسئلة تكرارًا لمساعدتك في فهم خدماتنا بشكل أفضل</p> -->
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="accordion accordion-flush" id="faqlist">
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-1">
                                        <span class="num">1.</span>
                                        ⁠ ⁠لماذا تعتبر منصة COD Solutions الأقوى والأفضل في المغرب؟
                                    </button>
                                </h3>
                                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">

                                        لاننا نمتلك مخزونا ضخما يتجاوز 1000 منتج جاهز، يتم تحديثه باستمرار، مع نظام
                                        تاكيد احترافي عبر الهاتف والواتساب حتى التاسعة ليلا، وفريق متخصص في تتبع الطلبات
                                        حتى التسليم. نختار لكل مدينة شركة الشحن التي تحقق اعلى معدلات التسليم فيها،
                                        ونعطي الاولوية دائما للشركاء الاعلى اداء والاقل ارتجاعا. كما نضمن تحويل الارباح
                                        بسرعة وشفافية مرتين في الاسبوع، مع خدمة متواصلة 7 ايام في الاسبوع بما في ذلك يوم
                                        الاحد.


                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-2">
                                        <span class="num">2.</span>
                                        هل يمكنني العمل مع COD Solutions حتى لو كنت مبتدئا في التجارة الالكترونية؟
                                    </button>
                                </h3>
                                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        اكيد، يمكنك البدء معنا حتى لو كنت مبتدئا، فنحن نوفر لك كل الادوات والدعم اللازم
                                        لتأسيس تجارتك ونموها في السوق المغربي بثقة واحتراف، حتى لو كنت مبتدئا في التجارة
                                        الإلكترونية
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-3">
                                        <span class="num">3.</span>
                                        ⁠ اذا كنت املك المنتج، هل يمكنني تخزينه وشحنه من مستودعاتكم؟
                                    </button>
                                </h3>
                                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">


                                        نعم، نستلم منتجك، نضيفه للمخزون، ثم نجهزه ونشحنه عند كل طلب بكل كفاءة وسرعة.


                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /FAQ Section -->

        <!-- Partners Section -->

        <section id="partners" class="partners section py-5 bg-light mt-5">
            <div class="container-fluid">

                <div class="container text-center mb-5">
                    <h2 class="fw-bold mb-2 service-headline" data-aos="zoom-in" data-aos-delay="100">شركاؤنا</h2>
                </div>
                <div class="marquee-container" style="direction: ltr" data-aos="fade-up" data-aos-delay="100">
                    <div class="marquee-content">
                        <!-- Sequence 1 of Logos: (Total 7 items) -->
                        <div class="logo-item">
                            <img src="assets/img/partners/partner1.png" alt="Partner Logo 1" class="logo rounded" />
                        </div>
                        <div class="logo-item">
                            <img src="assets/img/partners/partner2.png" alt="Partner Logo 2" class="logo rounded" />
                        </div>
                        <div class="logo-item">
                            <img src="assets/img/partners/partner3.png" alt="Partner Logo 3" class="logo rounded" />
                        </div>
                        <div class="logo-item">
                            <img src="assets/img/partners/partner4.webp" alt="Partner Logo 4" class="logo rounded" />
                        </div>
                        <div class="logo-item">
                            <img src="assets/img/partners/partner5.jpeg" alt="Partner Logo 5" class="logo rounded" />
                        </div>
                        <div class="logo-item">
                            <img src="assets/img/partners/partner1.png" alt="Partner Logo 6" class="logo rounded" />
                        </div>
                        <div class="logo-item">
                            <img src="assets/img/partners/partner3.png" alt="Partner Logo 7" class="logo rounded" />
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- /Partners Section -->


    </main>



    <div class="footer-wave bg-light">
        <svg viewBox="0 0 1440 120" preserveAspectRatio="none">
            <path d="M0,30 C360,90 1080,-30 1440,60 L1440,120 L0,120 Z" />
        </svg>
    </div>
    <footer id="footer" class="footer dark-background">

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="<?= $home_page_link; ?>" class="logo d-flex align-items-center">
                        <span class="sitename">COD SOLUTIONS</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>
                            <strong>العنوان: </strong>
                            <span dir="ltr">26 AV MERS SULTAN APT 3 ETG 1, Casablanca </span>
                        </p>
                        <p class="mt-3">
                            <strong>الهاتف: </strong>
                            <a href="tel:+212698813240" dir="ltr" class="phone-link">+212 6 98 81 32 40 </a>
                        </p>
                        <p>
                            <strong>البريد إلكتروني:</strong>
                            <span>contact@codsolutions.ma</span>
                        </p>
                    </div>
                    <div class="social-links d-flex mt-4">
                        <a target="_blank" href="https://www.facebook.com/codsolutions.ma/"
                            style="background-color: #f5f2f3;">
                            <i class="bi bi-facebook" style="color: #3b5998;"></i>
                        </a>
                        <a target="_blank" href="https://www.instagram.com/cod.solutions.official/"
                            style="background-color: #f5f2f3;">
                            <i class="bi bi-instagram" style="color: #E1306C;"></i>
                        </a>
                        <a target="_blank" href="https://www.youtube.com/@COD-Solutions"
                            style="background-color: #f5f2f3;">
                            <i class="bi bi-youtube" style="color: #FF0000;"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>اقسام الموقع</h4>
                    <ul>
                        <li><a href="#hero" class="active">الرئيسية</a></li>
                        <li><a href="#services">خدماتنا</a></li>
                        <li><a href="#partners">شركاؤنا</a></li>
                        <li><a href="<?= $login_link; ?>" target="_blank">تسجيل الدخول</a></li>
                        <li><a href="<?= $sign_up_link; ?>" target="_blank">إنشاء حساب</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>تركيزنا المغرب</h4>
                    <div>
                        نركز على سوق واحد يمتلك فرصا تجارية ضخمة وإمكانات نمو عالية، لذلك صممنا خدماتنا خصيصا للتجارة
                        الالكترونية بالمغرب، عبر تنفيذ سريع وتوصيل ادق.

                    </div>
                </div>

                <div class="col-lg-4 col-md-12 text-center text-lg-end ps-3 ">
                    <img src="assets/img/graphics/logo/footer-logo.png" class="pt-4" style="max-width: 200px;" />
                </div>
            </div>
        </div>

        <div class="container copyright text-center mt-4 pb-3">
            <p>
                <strong class="px-1 sitename">COD SOLUTIONS © <?php echo date('Y'); ?></strong>
                <span>جميع الحقوق محفوظة</span>
            </p>
        </div>
    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>

    <!-- Video Player Files -->
    <link rel="stylesheet" href="assets/css/plys.css" />
    <script src="assets/js/plyr.js"></script>
    <script>
        const player = new Plyr("#custom-player", {
            controls: ['play-large', 'play', 'progress', 'current-time', 'mute', 'volume', 'captions', 'settings', 'pip', 'airplay', 'fullscreen'],
            keyboard: { focused: true, global: false }
        })
    </script>



    <!-- WhatsApp Floating Button -->
    <a href="https://wa.me/212698813240" target="_blank" class="whatsapp-float">
        <i class="bi bi-whatsapp"></i>
    </a>

    <!-- Style -->
    <style>
        .whatsapp-float {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #25D366;
            width: 55px;
            height: 55px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            color: #fff;
            font-size: 28px;
            z-index: 1000;
            transition: transform 0.3s ease;
            text-decoration: none;
        }

        .whatsapp-float:hover {
            transform: scale(1.1);
            color: white;
        }
    </style>


</body>

</html>