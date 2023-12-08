<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="{{ asset('homepage/globals.css') }}" />
    <link rel="stylesheet" href="{{ asset('homepage/styleguide.css') }}" />
    <link rel="stylesheet" href="{{ asset('homepage/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('homepage/responsive.css') }}" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- libs boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Home Page</title>
</head>

<body>
    <div class="HOMEPAGE">
        <div class="div">
            <!-- header -->
            @include('page.partial.header')

            <!-- content -->
            <div class="top-banner">
                <div class="overlap-2">
                    <div class="div-background">
                        <div class="overlap-group-2">
                            <img class="grid" src="{{ asset('homepage/img/grid.png') }}" />
                        </div>
                    </div>
                    <div class="div-content-4">
                        <div class="div-herotext">
                            <span class="text-wrapper-13">Nido Montessori House of Children</span>
                            <p class="text-wrapper-14">
                                Ngôi nhà trẻ thơ ấm áp và tự do được vận hành dựa trên phương pháp giáo dục Montessori
                            </p>
                        </div>
                        <div class="div-wheel"><img class="rectangle"
                                src="{{ asset('homepage/img/rectangle-4171.gif') }}" /></div>
                    </div>
                </div>
            </div>

            <!-- part 2  -->
            <div class="div-ourstory">
                <div class="div-3">
                    <div class="div-image">
                        <div class="text-wrapper-11">CÂU CHUYỆN NIDO</div>
                    </div>
                    <div class="frame-2">
                        <p class="text-wrapper-12">
                            Nếu hỏi ở độ tuổi nào sự phát triển của một con người là căn cơ và bùng nổ nhất, thì đó là
                            từ 0-6 tuổi.<br />
                            Quan niệm truyền thống từ một đứa trẻ yếu ớt, không có năng lực đã được thay đổi triệt để
                            bởi các nhà giáo dục trên thế giới. Một đứa trẻ sinh ra đã có sẵn sức mạnh phát triển lớn
                            lao, một dạng
                            tâm trí học hỏi và khám phá đặc biệt chỉ có ở giai đoạn này.
                        </p>
                        <div class="primary-button"><button class="button"><a href="{{ route('about') }}" class='a-link'>XEM CHI
                                    TIẾT</a></button></div>
                    </div>
                </div>
            </div>

            <!-- part 3 -->
            <div class="frame-12">
                <div class="overlap-group-wrapper">
                    <div class="overlap-group-4">
                        <div class="tittle">
                            <p class="text-wrapper-29">Sự kiện sắp diễn ra</p>
                        </div>
                        <img class="asset" src="{{ asset('homepage/img/asset-20-1.png') }}" />
                    </div>
                </div>
                <div class="frame-13">
                    <div class="overlap-5">
                        <div class="group"></div>
                        <div class="frame-wrapper">
                            <div class="frame-14">
                                <img class="rectangle-5" src="{{ asset('homepage/img/rectangle-4174.png') }}" />
                                <div class="frame-15">
                                    <div class="frame-16">
                                        <div class="frame-17">
                                            <div class="text-wrapper-30">Kỹ năng</div>
                                        </div>
                                        <p class="text-wrapper-31">Diễn tập kỹ năng thoát hiểm cho trẻ khi có sự cố cháy
                                        </p>
                                    </div>
                                    <div class="frame-18">
                                        <img class="img" src="{{ asset('homepage/img/clock.svg') }}" />
                                        <div class="text-wrapper-32">18 Nov 2023</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- part 4 -->
            <div class="div-ourvalues">
                <div class="div-2">
                    <p class="text-wrapper-5">Triết lý giáo dục Montessori</p>
                    <div class="div-content-2">
                        <div class="element-2">
                            <img class="boat" src="{{ asset('homepage/img/boat-3x-1-4.png') }}" />
                            <div class="text-wrapper-6">Tôn trọng trẻ và bản sắc riêng của trẻ</div>
                            <p class="text-wrapper-7">
                                Giáo dục &quot;thuận theo trẻ” - tôn trọng và hỗ trợ sự phát triển của mỗi cá nhân. Trẻ
                                được tự do lựa chọn
                                hoạt động theo nhu cầu nội tại. Giáo viên quan sát, hướng dẫn và vạch ra lộ trình phát
                                triển dành riêng
                                cho từng trẻ.
                            </p>
                        </div>
                        <div class="element-2">
                            <img class="boat" src="{{ asset('homepage/img/boat-3x-1-3.png') }}" />
                            <div class="text-wrapper-6">Nuôi dưỡng ý chí và sự kiên tâm</div>
                            <p class="text-wrapper-7">
                                Hoạt động Montessori giúp trẻ hợp nhất được ba nguồn sức mạnh của một con người: Ý chí -
                                Trí tuệ -
                                Vận động, như cách loài người phải lao động thì mới tiến tới văn minh.
                            </p>
                        </div>
                        <div class="element-2">
                            <img class="boat" src="{{ asset('homepage/img/boat-3x-1-2.png') }}" />
                            <div class="text-wrapper-6">Khơi dậy tình yêu học tập</div>
                            <p class="text-wrapper-7">
                                Trẻ khám phá tìm tòi một cách chủ động. Trẻ học vì thôi thúc từ bên trong và tận hưởng
                                niềm vui
                                thuần thiết khi hiểu chính mình và thế giới xung quanh.
                            </p>
                        </div>
                        <div class="element-2">
                            <img class="boat" src="{{ asset('homepage/img/boat-3x-1-1.png') }}" />
                            <p class="text-wrapper-6">Hình thành sự kết nối giữa trẻ với tự nhiên và xã hội</p>
                            <p class="text-wrapper-7">
                                Môi trường kết hợp nhiều độ tuổi giúp trẻ phát triển tính xã hội, tình yêu thương và sự
                                tử tế. Không
                                chỉ với con người, trẻ còn kết nối với thiên nhiên hiện diện quanh mình và có ý thức
                                chăm sóc, bảo vệ.
                            </p>
                        </div>
                        <div class="element-2">
                            <img class="boat" src="{{ asset('homepage/img/boat-3x-1.png') }}" />
                            <div class="text-wrapper-6">Thiết kế môi trường học tập khoa học</div>
                            <p class="text-wrapper-7">
                                Môi trường được thiết kế một cách khoa học để trẻ tương tác và trải nghiệm với học cụ
                                thuộc các
                                lĩnh vực: Thực hành cuộc sống, Cảm quan, Ngôn Ngữ, Toán, Nghệ thuật, Khoa học.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- part 5 -->
            <div class="div-quote">
                <div class="div-quote-background">
                </div>

                <div class="div-content-3">
                    <div class="text-wrapper-8">“</div>
                    <div class="content-2">
                        <p class="text-wrapper-9">
                            “The child is both a hope and a promise for mankind”
                            <br />
                            Trẻ em là niềm hy vọng và lời hứa hẹn cho nhân loại.
                        </p>
                        <div class="text-wrapper-10">Doctor Maria Montessori</div>
                    </div>
                </div>
                <div class="div-quote-content-3">
                    <video height="420px" autoplay loop muted>
                        <source src="{{ asset('homepage/video.mp4') }}" type="video/mp4">
                        <source src="{{ asset('homepage/video.mp4') }}" type="video/ogg">
                        Your browser does not support the video tag.
                    </video>
                </div>

                <img class="doodle" src="{{ asset('homepage/img/doodle.png') }}" />
            </div>

            <!-- Start Carousel bài viết -->
            <div class="div-activities">
                <div class="div-carousel">
                    <img class="left-button" src="{{ asset('homepage/img/left-button.svg') }}" />
                    <div id="carouselExampleIndicators" class="carousel slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                class="active" aria-label="Slide 1" aria-current="true"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                aria-label="Slide 2" class=""></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                aria-label="Slide 3" class=""></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="border-carousel">
                                    <div class="overlap-group">
                                        <div class="div-content">
                                            <div class="image"></div>
                                            <div class="content-container">
                                                <div class="content">
                                                    <div class="tag">
                                                        <div class="text-wrapper">Education</div>
                                                    </div>
                                                    <div class="title">
                                                        <p class="p">Hslide 1y</p>
                                                        <p class="text-wrapper-2">
                                                            In the modern world, having financial literacy is a crucial
                                                            skill for children to navigate
                                                            life successfully. While it may seem early to teach
                                                            pre-schoolers about money, introducing
                                                            them to basic concepts in a Montessori-inspired way can lay
                                                            a strong foundation for their
                                                            future financial understanding.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="accent">
                                                    <div class="text-wrapper-3">Nov 4</div>
                                                    <div class="text-wrapper-3">·</div>
                                                    <div class="text-wrapper-3">10 min read</div>
                                                </div>
                                            </div>
                                        </div>
                                        <img class="heart" src="{{ asset('homepage/img/heart-3x-1.png') }}" />
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="border-carousel">
                                    <div class="overlap-group">
                                        <div class="div-content">
                                            <div class="image"></div>
                                            <div class="content-container">
                                                <div class="content">
                                                    <div class="tag">
                                                        <div class="text-wrapper">123</div>
                                                    </div>
                                                    <div class="title">
                                                        <p class="p">Slide 3</p>
                                                        <p class="text-wrapper-2">
                                                            In the modern world, having financial literacy is a crucial
                                                            skill for children to navigate
                                                            life successfully. While it may seem early to teach
                                                            pre-schoolers about money, introducing
                                                            them to basic concepts in a Montessori-inspired way can lay
                                                            a strong foundation for their
                                                            future financial understanding.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="accent">
                                                    <div class="text-wrapper-3">Nov 4</div>
                                                    <div class="text-wrapper-3">·</div>
                                                    <div class="text-wrapper-3">10 min read</div>
                                                </div>
                                            </div>
                                        </div>
                                        <img class="heart" src="{{ asset('homepage/img/heart-3x-1.png') }}" />
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="border-carousel">
                                    <div class="overlap-group">
                                        <div class="div-content">
                                            <div class="image"></div>
                                            <div class="content-container">
                                                <div class="content">
                                                    <div class="tag">
                                                        <div class="text-wrapper">Alo</div>
                                                    </div>
                                                    <div class="title">
                                                        <p class="p">How to Teach Preschoolers About Money</p>
                                                        <p class="text-wrapper-2">
                                                            In the modern world, having financial literacy is a crucial
                                                            skill for children to navigate
                                                            life successfully. While it may seem early to teach
                                                            pre-schoolers about money, introducing
                                                            them to basic concepts in a Montessori-inspired way can lay
                                                            a strong foundation for their
                                                            future financial understanding.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="accent">
                                                    <div class="text-wrapper-3">Nov 4</div>
                                                    <div class="text-wrapper-3">·</div>
                                                    <div class="text-wrapper-3">10 min read</div>
                                                </div>
                                            </div>
                                        </div>
                                        <img class="heart" src="{{ asset('homepage/img/heart-3x-1.png') }}" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button"
                            data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button"
                            data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>


                    <img class="right-button" src="{{ asset('homepage/img/right-button.svg') }}" />
                </div>
                <div class="div-title">
                    <div class="overlap">
                        <img class="element" src="{{ asset('homepage/img/1.svg') }}" />
                        <div class="text-wrapper-4">Activities</div>
                    </div>
                </div>
            </div>
            <!-- End Carousel bài viết -->

            <!-- part 7 -->

            <div class="div-programs">
                <div class="overlap-3">
                    <div class="div-programs-2">
                        <div class="lp-s-nu">
                            <p class="div-4">
                                Môi trường dành cho trẻ từ 6 - 16 tháng tuổi, ấm áp và bình yên như ở nhà, nơi những nhu
                                cầu đầu tiên
                                của con được lắng nghe và thấu hiểu dù con chưa thể nói.
                            </p>
                            <div class="more-details">More Details &gt;</div>
                            <img class="rectangle-2" src="{{ asset('homepage/img/rectangle-4170-2.png') }}" />
                            <div class="text-wrapper-17">Lớp Chích Bông</div>
                        </div>
                        <div class="lp-so-su">
                            <p class="div-4">
                                <span class="span">Môi trường dành cho trẻ từ 16 tháng - 3 tuổi khi con đã có khả
                                    năng đi vững, tập trung phát triển khả
                                    năng vận động, ý chí, ngôn ngữ và sự độc lập cho con.</span>
                            </p>
                            <div class="more-details">More Details &gt;</div>
                            <img class="rectangle-2" src="{{ asset('homepage/img/rectangle-4170-1.png') }}" />
                            <div class="text-wrapper-17">Lớp Sẻ Nâu</div>
                        </div>
                        <div class="lp-b-cu">
                            <p class="div-4">
                                <span class="span">Môi trường dành cho trẻ từ 3 - 6 tuổi được thiết kế đầy đủ các
                                    lĩnh vực Thực hành cuộc sống, Cảm quan,
                                    Ngôn ngữ, Toán học, Văn hóa và Khoa học.</span>
                            </p>
                            <div class="more-details">More Details &gt;</div>
                            <img class="rectangle-2" src="{{ asset('homepage/img/rectangle-4170.svg') }}" />
                            <div class="text-wrapper-17">Lớp Bồ Câu</div>
                        </div>
                    </div>
                    <div class="div-course">
                        <div class="text-wrapper-18">PHƯƠNG PHÁP GIÁO DỤC MONTESSORI</div>
                        <p class="text-wrapper-19">
                            Lớp học Montessori được thiết kế riêng biệt nhằm đáp ứng đặc điểm tâm trí ở mỗi giai đoạn và
                            nhu cầu phát triển theo từng độ tuổi. Nguyên lý chung là giáo viên tạo không gian cho trẻ tự
                            do
                            khám phá và độc lập phát triển các năng lực theo tốc độ của riêng mình thông qua tương tác
                            với
                            học cụ.
                        </p>
                    </div>
                    <img class="doodle-2" src="{{ asset('homepage/img/doodle-1.gif') }}" />
                </div>
            </div>

            <!-- part 8 -->

            <div class="div-testimonial">
                <div class="div-cover"></div>
                <div class="overlap-wrapper parent">
                    <div class="overlap-4">
                        <div class="carousel">
                            <div class="comment">
                                <div class="frame-4">
                                    <div class="div-information-user">
                                        <div class="div-avatar">
                                            <div class="ellipse"></div>
                                        </div>
                                        <div class="div-name">
                                            <div class="text-wrapper-20">Nguyễn Duy Hiền</div>
                                            <div class="text-wrapper-21">Lớp Sẻ nâu</div>
                                        </div>
                                    </div>
                                    <div class="div-rating">
                                        <div class="overlap-group-3">
                                            <div class="text-wrapper-22">4.9</div>
                                            <img class="star" src="{{ asset('homepage/img/star-4.svg') }}" />
                                        </div>
                                    </div>
                                </div>
                                <div class="div-wrapper">
                                    <p class="text-wrapper-23">
                                        So yes, the alcohol (ethanol) in hand sanitizers can be absorbed through the
                                        skin, but no, it
                                        would
                                    </p>
                                </div>
                            </div>
                            <div class="comment">
                                <div class="frame-4">
                                    <div class="div-information-user">
                                        <div class="ellipse-wrapper">
                                            <div class="ellipse"></div>
                                        </div>
                                        <div class="div-name">
                                            <div class="text-wrapper-20">Nguyễn Thụy Uyên</div>
                                            <div class="text-wrapper-21">Lớp Sẻ nâu</div>
                                        </div>
                                    </div>
                                    <div class="div-rating">
                                        <div class="overlap-group-3">
                                            <div class="text-wrapper-22">5.0</div>
                                            <img class="star" src="{{ asset('homepage/img/star-4.svg') }}" />
                                        </div>
                                    </div>
                                </div>
                                <div class="div-wrapper">
                                    <p class="text-wrapper-23">
                                        The study was repeated with three brands of hand sanitizers containing 55%, 85%,
                                        and 95% ethanol.
                                        Th
                                    </p>
                                </div>
                            </div>
                            <div class="comment">
                                <div class="frame-4">
                                    <div class="div-information-user">
                                        <div class="div-avatar-2">
                                            <div class="ellipse"></div>
                                        </div>
                                        <div class="div-name">
                                            <div class="text-wrapper-20">Phó Vân Trinh</div>
                                            <div class="text-wrapper-21">Lớp Sẻ nâu</div>
                                        </div>
                                    </div>
                                    <div class="div-rating">
                                        <div class="overlap-group-3">
                                            <div class="text-wrapper-22">4.9</div>
                                            <img class="star" src="{{ asset('homepage/img/star.png') }}" />
                                        </div>
                                    </div>
                                </div>
                                <div class="frame-5">
                                    <p class="text-wrapper-23">
                                        An average healthy 7 year old boy weighs about 50 lb (23 kg). If we suppose the
                                        same amount of
                                        alcoh
                                    </p>
                                </div>
                            </div>
                            <div class="comment">
                                <div class="frame-4">
                                    <div class="div-information-user">
                                        <div class="div-avatar">
                                            <div class="ellipse"></div>
                                        </div>
                                        <div class="div-name">
                                            <div class="text-wrapper-20">Nguyễn Duy Hiền</div>
                                            <div class="text-wrapper-21">Lớp Sẻ nâu</div>
                                        </div>
                                    </div>
                                    <div class="div-rating">
                                        <div class="overlap-group-3">
                                            <div class="text-wrapper-22">4.9</div>
                                            <img class="star" src="{{ asset('homepage/img/star.png') }}" />
                                        </div>
                                    </div>
                                </div>
                                <div class="frame-6">
                                    <p class="text-wrapper-23">
                                        So yes, the alcohol (ethanol) in hand sanitizers can be absorbed through the
                                        skin, but no, it
                                        would
                                    </p>
                                </div>
                            </div>
                            <div class="comment">
                                <div class="frame-4">
                                    <div class="div-information-user">
                                        <div class="ellipse-wrapper">
                                            <div class="ellipse"></div>
                                        </div>
                                        <div class="div-name">
                                            <div class="text-wrapper-20">Nguyễn Thụy Uyên</div>
                                            <div class="text-wrapper-21">Lớp Sẻ nâu</div>
                                        </div>
                                    </div>
                                    <div class="div-rating">
                                        <div class="overlap-group-3">
                                            <div class="text-wrapper-22">5.0</div>
                                            <img class="star" src="{{ asset('homepage/img/star.png') }}" />
                                        </div>
                                    </div>
                                </div>
                                <div class="frame-6">
                                    <p class="text-wrapper-23">
                                        The study was repeated with three brands of hand sanitizers containing 55%, 85%,
                                        and 95% ethanol.
                                        Th
                                    </p>
                                </div>
                            </div>
                            <div class="comment">
                                <div class="frame-4">
                                    <div class="div-information-user">
                                        <div class="div-avatar-2">
                                            <div class="ellipse"></div>
                                        </div>
                                        <div class="div-name">
                                            <div class="text-wrapper-20">Phó Vân Trinh</div>
                                            <div class="text-wrapper-21">Lớp Sẻ nâu</div>
                                        </div>
                                    </div>
                                    <div class="div-rating">
                                        <div class="overlap-group-3">
                                            <div class="text-wrapper-22">4.9</div>
                                            <img class="star" src="img/star.png" />
                                        </div>
                                    </div>
                                </div>
                                <div class="frame-6">
                                    <p class="text-wrapper-23">
                                        An average healthy 7 year old boy weighs about 50 lb (23 kg). If we suppose the
                                        same amount of
                                        alcoh
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <img class="cloud" src="{{ asset('homepage/img/cloud-1.png') }}" />
            </div>

            {{-- Start contact form --}}
            @include('page.partial.contact')
            {{-- End contact form --}}


            <!-- part 10 -->
            <div class="frame"></div>
            <!-- part 11 -->

            {{-- Start Footer --}}
            @include('page.partial.footer')
            {{-- End Footer --}}

        </div>
    </div>

    <script src="{{ asset('homepage/index.js') }}"></script>
</body>

</html>
