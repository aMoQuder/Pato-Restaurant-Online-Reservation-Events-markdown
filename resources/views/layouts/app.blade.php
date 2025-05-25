<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->

    <style>
        .demo {
            margin-top: 20px !important;
        }
    </style>
    <style>
        .goog-te-gadget-simple {
            background-color: #FFF;
            font-size: 13pt;
            display: inline-block;
            padding-top: 2px;
            padding-bottom: 2px;
            cursor: pointer;
        }



        #google_translate_element {
            position: fixed;
            margin-top: 150px;
            z-index: 1;
        }
    </style>
</head>

<body class="animsition">

    <!-- welcome devolper -->
    <!-- ======================  -->
    <!-- ------------------------------------------------------------------------------------------------------------  -->
    <!-- start project -->

    <div id="app">

        <main class="py-4">

            @yield('content')
        </main>
        <!-- Back to top -->
        <div class="btn-back-to-top bg0-hov" id="myBtn">
            <span class="symbol-btn-back-to-top">
                <i class="fa fa-angle-double-up" aria-hidden="true"></i>
            </span>
        </div>

        <!-- Container Selection1 -->
        <div id="dropDownSelect1"></div>

        <!-- Modal Video 01-->
        <div class="modal fade" id="modal-video-01" tabindex="-1" role="dialog" aria-hidden="true">

            <div class="modal-dialog" role="document" data-dismiss="modal">
                <div class="close-mo-video-01 trans-0-4" data-dismiss="modal" aria-label="Close">&times;</div>

                <div class="wrap-video-mo-01">
                    <div class="w-full wrap-pic-w op-0-0"><img src="images/icons/video-16-9.jpg" alt="IMG"></div>
                    <div class="video-mo-01">
                        <iframe src="https://www.youtube.com/embed/5k1hSu2gdKE?rel=0&amp;showinfo=0"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <!-- end project -->
    <!-- ------------------------------------------------------------------------------------------------------------- -->
    <!-- wow of js  -->

    <div id="google_translate_element"></div> <!-- مكان ظهور أداة الترجمة -->

    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en', // لغة الموقع الأصلية
                includedLanguages: 'ar,en,fr,es', // اللغات المتاحة
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE // تخطيط الأداة
            }, 'google_translate_element');
        }
    </script>

    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>

    <!--===============================================================================================-->
    <script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
    <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="vendor/daterangepicker/moment.min.js"></script>
    <script type="text/javascript" src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="vendor/slick/slick.min.js"></script>
    <script type="text/javascript" src="js/slick-custom.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="vendor/parallax100/parallax100.js"></script>
    <script type="text/javascript">
        $('.parallax100').parallax100();
    </script>
    <!--===============================================================================================-->
    <script>
        (function($) {
            "use strict";

            // التكرار على كل حدث لحساب الوقت المتبقي باستخدام التاريخ والوقت من الحقول المخفية
            $('.item-slick2').each(function() {
                // جلب تاريخ ووقت الحدث من الحقول المخفية
                var eventDate = $(this).find('input[data-toggle="date-toggle"]').val();
                var eventTime = $(this).find('input[data-toggle="time-toggle"]').val();

                // تحويل التاريخ والوقت إلى كائن Date في JavaScript
                var eventDateTime = new Date(eventDate.split('/').reverse().join('-') + 'T' + eventTime);

                // حساب الفرق بين الوقت الحالي ووقت الحدث
                var now = new Date();
                var timeDiff = eventDateTime - now;

                // استخراج الأيام والساعات والدقائق والثواني المتبقية
                var daysLeft = Math.floor(timeDiff / (1000 * 60 * 60 * 24));
                var hoursLeft = Math.floor((timeDiff / (1000 * 60 * 60)) % 24);
                var minutesLeft = Math.floor((timeDiff / (1000 * 60)) % 60);
                var secondsLeft = Math.floor((timeDiff / 1000) % 60);

                // إنشاء deadline باستخدام القيم المحسوبة
                var deadline = new Date(Date.parse(new Date()) + daysLeft * 24 * 60 * 60 * 1000 + hoursLeft *
                    60 * 60 * 1000 + minutesLeft * 60 * 1000 + secondsLeft * 1000);

                // تهيئة الساعة بالـ deadline المحسوب
                initializeClock($(this).attr('id'), deadline);
            });

            // الدوال الأصلية كما هي
            function getTimeRemaining(endtime) {
                var t = Date.parse(endtime) - Date.parse(new Date());
                var seconds = Math.floor((t / 1000) % 60);
                var minutes = Math.floor((t / 1000 / 60) % 60);
                var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
                var days = Math.floor(t / (1000 * 60 * 60 * 24));
                return {
                    'total': t,
                    'days': days,
                    'hours': hours,
                    'minutes': minutes,
                    'seconds': seconds
                };
            }

            function initializeClock(id, endtime) {
                var daysSpan = $('#' + id).find('.days');
                var hoursSpan = $('#' + id).find('.hours');
                var minutesSpan = $('#' + id).find('.minutes');
                var secondsSpan = $('#' + id).find('.seconds');

                function updateClock() {
                    var t = getTimeRemaining(endtime);

                    daysSpan.html(t.days);
                    hoursSpan.html(('0' + t.hours).slice(-2));
                    minutesSpan.html(('0' + t.minutes).slice(-2));
                    secondsSpan.html(('0' + t.seconds).slice(-2));

                    if (t.total <= 0) {
                        clearInterval(timeinterval);
                    }
                }

                updateClock();
                var timeinterval = setInterval(updateClock, 1000);
            }
        })(jQuery);
    </script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="vendor/lightbox2/js/lightbox.min.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>


</body>

</html>
