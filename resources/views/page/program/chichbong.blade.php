<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="{{ asset('chichbong/globals.css') }}" />
    <link rel="stylesheet" href="{{ asset('chichbong/styleguide.css') }}" />
    <link rel="stylesheet" href="{{ asset('chichbong/style.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
        .program-wrapper .content-wrapper {
            background-image: url('{{ asset('homepage/img/union-shape-1.svg') }}');
        }
    </style>
</head>

<body>
    <div class="program-wrapper">
        <section class="program-wrapper__banner">
            <div class="program-wrapper__banner-content">
                <div class="program-wrapper__banner-title">Chương trình học</div>
                <p class="program-wrapper__banner-description">A Reggio-Inspired School for children from 1 year to 11 years <br> of age from Nursery, Preschool to
                    Primary.</p>
            </div>
            <div class="program-wrapper__class">
                <div class="program-wrapper__class-chch-bng">
                    <div class="program-wrapper__class-content-chichbong">
                        <div class="chichbong-title">Lớp Chích Bông</div>
                        <p class="chichbong-description">
                            Provides children aged 0-2 with opportunities for learning through movement,
                            exploration, and
                            connection. Learning goals for infants focus on movement skills, language development,
                            developmental
                            milestones, fine motor development, social skills, and the joy of every child.
                        </p>
                        <div class="chichbong-old">
                            <p>
                                <span class="span">Độ tuổi: 0-2 tuổi<br /></span>
                            </p>
                            <p class="chichbong-quantity"><span class="span">Sỉ số mỗi lớp: 5</span></p>
                        </div>
                    </div>
                </div>
                <div class="program-wrapper__class-s-nu">
                    <div class="program-wrapper__class-title">Lớp Sẻ Nâu</div>
                </div>
                <div class="program-wrapper__class-b-cu">
                    <div class="program-wrapper__class-title">Lớp Bồ Câu</div>
                </div>
            </div>
        </section>
        <section class="program-wrapper__content">
            <div class="row">
                <div class="program-wrapper__content-sidebar col-sm-12 col-lg-4">
                    <div class="sidebar-title">Lớp Chích Bông</div>
                    <div class="sidebar-wrapper">
                        <div class="sidebar-item__group">
                            <div class="sidebar-item__label">Môi trường lớp học</div>
                        </div>
                        <div class="sidebar-item__group">
                            <div class="sidebar-item__label">Phương pháp giáo dục</div>
                            <img class="caret-up" src="{{ asset('homepage/img/caretup-4.svg') }}" />
                        </div>
                        <div class="sidebar-item__group">
                            <div class="sidebar-item__label">Lịch trình một ngày</div>
                        </div>
                        <div class="sidebar-item__group">
                            <div class="sidebar-item__label">Học phí</div>
                        </div>
                    </div>
                </div>
                <div class="program-wrapper__content-right col-sm-12 col-lg-8">
                    <div class="content-right__container">
                        <div class="content-right-wrapper">
                            <div class="content-right__library">
                                <div class="content-right__library-title">Môi trường học</div>
                                <div class="content-right__library-flexcontent">
                                    <p class="flexcontent-group">
                                        <span>Example materials and activities include:<br /></span>
                                    </p>
                                    <p class="flexcontent-group">
                                        <span>Treasure baskets&nbsp;&nbsp; <br /></span>
                                    </p>
                                    <p class="flexcontent-group">
                                        <span>Fabric matching&nbsp;&nbsp; <br /></span>
                                    </p>
                                    <p class="flexcontent-group">
                                        <span>Spooning <br /></span>
                                    </p>
                                    <p class="flexcontent-group">
                                        <span>Pegging <br /></span>
                                    </p>
                                    <p class="flexcontent-group">
                                        <span>Nesting objects </span>
                                    </p>
                                </div>
                                <div class="content-right__carousel-group">
                                    <div class="content-right__carousel">
                                        <img class="rectangle"
                                            src="{{ asset('homepage/img/rectangle-4204.png') }}" />
                                        <div class="d-flex">
                                            <img class="rectangle-mini" src="{{ asset('homepage/img/rectangle-4205.png') }}" />
                                            <img class="rectangle-mini"
                                            src="{{ asset('homepage/img/rectangle-4206.png') }}" />
                                            <img class="rectangle-mini"
                                                src="{{ asset('homepage/img/rectangle-4207.png') }}" />
                                            <img class="rectangle-mini"
                                                src="{{ asset('homepage/img/rectangle-4208.png') }}" />
                                            <img class="rectangle-mini"
                                                src="{{ asset('homepage/img/rectangle-4209.png') }}" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="div-wrapper">
                            <div class="div-5">
                                <div class="text-wrapper-6">Phương pháp giáo dục</div>
                                <p class="div-2-chichbong-content">
                                    Infants learn through movement and exploration. Learning goals for infants
                                    include healthy
                                    physical development. Through the Infant Curriculum, children develop fine
                                    motor, gross motor, and
                                    fundamental movement skills.
                                </p>
                                <img class="rectangle-6" src="{{ asset('homepage/img/rectangle-4204-1.png') }}" />
                            </div>
                        </div>
                        <div class="div-wrapper mt-3">
                            <div class="div-5">
                                <div class="text-wrapper-6">Lịch trình một ngày</div>
                                <p class="div-2-chichbong-content">
                                    Infants learn through movement and exploration. Learning goals for infants
                                    include healthy
                                    physical development. Through the Infant Curriculum, children develop fine
                                    motor, gross motor, and
                                    fundamental movement skills.
                                </p>
                                <img class="rectangle-7" src="{{ asset('homepage/img/rectangle-4204-2.png') }}" />
                            </div>
                        </div>
                        <div class="div-wrapper">
                            <div class="div-5">
                                <div class="text-wrapper-6">Học Phí</div>
                                <div class="flexcontainer">
                                    <p class="text">
                                        <span class="text-wrapper-7">Infants learn through movement and exploration.
                                            Learning goals for infants include healthy
                                            physical development. Through the Infant Curriculum, children develop
                                            fine motor, gross motor,
                                            and fundamental movement skills.<br /></span>
                                    </p>
                                    <p class="text"><span class="text-wrapper-8">12.000.000đ/tháng</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('page.partial.header')
    </div>
</body>

</html>
