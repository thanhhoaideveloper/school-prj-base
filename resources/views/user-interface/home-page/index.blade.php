@extends('user-interface.index')

<style>
    .div-testimonial {
        position: relative;
        overflow: hidden;
    }

    .overlap-4 {
        position: relative;
        width: 100%;
        /*overflow: hidden;*/
    }

    .carousel {
        display: flex;
        transition: transform 0.5s ease-in-out;
        width: 100%;
        overflow-x:scroll;
        scroll-snap-type: x mandatory;
    }
    .comment {
        flex: 0 0 46%;
    }
</style>

@section('content')
<div class="HOMEPAGE">
    <div class="div ">
        <div class="div-activities">
            <div class="div-carousel">
                <a href="#"><img class="left-button" src="{{asset('home-page-2/img/left-button.svg')}}" /></a>
                <div class="border-carousel" id="articleId">
                    @include('user-interface.home-page.article-view')
                </div>
                <button onclick="nextArticle()" href="#"><img class="right-button" src="{{asset('home-page-2/img/right-button.svg')}}" /></button>
            </div>
            <div class="div-title">
                <div class="overlap">
                    <img class="element" src="{{asset('home-page-2/img/1.svg')}}" />
                    <div class="text-wrapper-4">Bài đọc</div>
                </div>
            </div>
        </div>
        <div class="div-ourvalues">
            <div class="div-2">
                <p class="text-wrapper-5">Giá trị cốt lõi của NIDO</p>
                <div class="div-content-2">
                    <div class="element-2">
                        <img class="boat" src="{{asset('home-page-2/img/boat-3x-1-4.png')}}" />
                        <div class="text-wrapper-6">We listen and respond</div>
                        <p class="text-wrapper-7">
                            We smile and take time to listen to the needs of others. We collaborate gracefully with patience, so
                            as to guide our interactions for betterment.
                        </p>
                    </div>
                    <div class="element-2">
                        <img class="boat" src="{{asset('home-page-2/img/boat-3x-1-3.png')}}" />
                        <div class="text-wrapper-6">Life-long learning</div>
                        <p class="text-wrapper-7">
                            We are advocates of Dr Maria Montessori’s philosophy and the positive impact it has on a child’s
                            curiosity, reflection, and the fostering of a growth mindset for life-long learning.
                        </p>
                    </div>
                    <div class="element-2">
                        <img class="boat" src="{{asset('home-page-2/img/boat-3x-1-2.png')}}" />
                        <div class="text-wrapper-6">Working in synergy</div>
                        <p class="text-wrapper-7">
                            Open communication and respectful collaboration are essential for team success and achievement.
                        </p>
                    </div>
                    <div class="element-2">
                        <img class="boat" src="{{asset('home-page-2/img/boat-3x-1-1.png')}}" />
                        <p class="text-wrapper-6">Every child is a miracle &amp; the greatest gift of God</p>
                        <p class="text-wrapper-7">
                            Children are our highest priority. We regard each child as a capable learner and respect their
                            individuality by showing patience, understanding, and compassion
                        </p>
                    </div>
                    <div class="element-2">
                        <img class="boat" src="{{asset('home-page-2/img/boat-3x-1.png')}}" />
                        <div class="text-wrapper-6">We are a family</div>
                        <p class="text-wrapper-7">
                            We are a welcoming, generous, and diverse community of committed team members.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="div-quote">
            <div class="div-content-3">
                <div class="text-wrapper-8">“</div>
                <div class="content-2">
                    <p class="text-wrapper-9">
                        The goal of early childhood education should be to activate the child’s own natural desire to learn
                    </p>
                    <div class="text-wrapper-10">Doctor Maria Montessori</div>
                </div>
            </div>
            <img class="doodle" src="{{asset('home-page-2/img/doodle.png')}}" />
        </div>
        <div class="frame"></div>
        <div class="div-ourstory">
            <div class="div-3">
                <div class="div-image"><div class="text-wrapper-11">Câu chuyện NIDO</div></div>
                <div class="frame-2">
                    <p class="text-wrapper-12">
                        Sweet roll cotton candy pie sweet roll cake pastry liquorice. Apple pie fruitcake wafer caramels biscuit
                        topping muffin. Marzipan caramels candy canes toffee toffee danish toffee pastry gummi bears. Halvah
                        macaroon powder gummi bears powder dragée cupcake.
                    </p>
                    <a href="#" class="primary-button"><button class="button">XEM CHI TIẾT</button></a>
                </div>
            </div>
        </div>
        <div class="div-programs" style="  overflow-x: scroll; height: 450px">
            <div class="overlap-3">
                <div class="div-programs-2">
                    @if(isset($studyProgram))
                        @foreach($studyProgram as $val)
                            <div class="lp-s-nu">
                                <p class="div-4">{{$val['description']}}</p>
                                <a href="" class="more-details">More Details &gt;</a>
                                <img class="rectangle-2" src="{{asset('home-page-2/img/rectangle-4170-2.png')}}" />
                                <div class="text-wrapper-16">{{$val['name']}}</div>
                            </div>
                        @endforeach
                    @else
                        <div class="lp-s-nu">
                            <p class="div-4">
                                Inspiring children to develop complete academic and wellbeing foundations through hands-on experience,
                                real-world application, and problem solving.
                            </p>
                            <div class="more-details">More Details &gt;</div>
                            <img class="rectangle-2" src="{{asset('home-page-2/img/rectangle-4170-2.png')}}" />
                            <div class="text-wrapper-16">Lớp Sẻ Nâu</div>
                        </div>
                        <div class="lp-so-su">
                            <p class="div-4">
                  <span class="text-wrapper-17"
                  >The Toddler Program provides hands-on learning experiences that build children’s independence,
                    confidence, and competence while developing real-life skills.</span
                  >
                            </p>
                            <div class="more-details">More Details &gt;</div>
                            <img class="rectangle-2" src="{{asset('home-page-2/img/rectangle-4170-1.png')}}" />
                            <div class="text-wrapper-16">Lớp Sáo Sậu</div>
                        </div>
                        <div class="lp-b-cu">
                            <p class="div-4">
                  <span class="text-wrapper-17"
                  >The Montessori Preschool Program allows children to direct their own learning. It focuses on
                    guiding each individual’s growth as they master the Montessori Curriculum.</span
                  >
                            </p>
                            <div class="more-details">More Details &gt;</div>
                            <img class="rectangle-2" src="{{asset('home-page-2/img/rectangle-4170.svg')}}" />
                            <div class="text-wrapper-16">Lớp Bồ Câu</div>
                        </div>
                    @endif
                </div>
                <div class="div-course">
                    <div class="text-wrapper-18">Montessori Education Programs</div>
                    <p class="text-wrapper-19">
                        Inspiring children to develop complete academic and wellbeing foundations through hands-on experience,
                        real-world application, and problem solving. Children achieve competence in key learning areas through
                        repetition and practice using specially designed educational materials.
                    </p>
                </div>
                <img class="doodle-2" src="{{asset('home-page-2/img/doodle-1.gif')}}" />
            </div>
        </div>
        <div class="div-testimonial">
            <div class="div-cover"></div>
            <div class="overlap-wrapper">
                <div class="overlap-4">
                    <div class="carousel">
                        @if(isset($ratting))
                            @foreach($ratting as $val)
                                <div class="comment">
                                    <div class="frame-4">
                                        <div class="div-information-user">
                                            <div class="ellipse" style=" background-image: url('{{asset($val['avatar'])}}' ) !important; "></div>
                                            <div class="div-name">
                                                <div class="text-wrapper-20">{{$val['name']}}</div>
                                                <div class="text-wrapper-21">{{$val['class']}}</div>
                                            </div>
                                        </div>
                                        <div class="div-rating">
                                            <div class="overlap-group-3">
                                                <div class="text-wrapper-22">{{$val['score']}}</div>
                                                <img class="star" src="{{asset('home-page-2/img/star-4.svg')}}" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="div-wrapper">
                                        <p class="text-wrapper-23">
                                            {{$val['comment']}}
                                        </p>
                                    </div>
                                </div>

                            @endforeach
                        @else
                            <div class="comment">
                                <div class="frame-4">
                                    <div class="div-information-user">
                                        <div class="div-avatar"><div class="ellipse"></div></div>
                                        <div class="div-name">
                                            <div class="text-wrapper-20">Nguyễn Duy Hiền</div>
                                            <div class="text-wrapper-21">Lớp Sẻ nâu</div>
                                        </div>
                                    </div>
                                    <div class="div-rating">
                                        <div class="overlap-group-3">
                                            <div class="text-wrapper-22">4.9</div>
                                            <img class="star" src="{{asset('home-page-2/img/star-4.svg')}}" />
                                        </div>
                                    </div>
                                </div>
                                <div class="div-wrapper">
                                    <p class="text-wrapper-23">
                                        So yes, the alcohol (ethanol) in hand sanitizers can be absorbed through the skin, but no, it
                                        would
                                    </p>
                                </div>
                            </div>
                            <div class="comment">
                                <div class="frame-4">
                                    <div class="div-information-user">
                                        <div class="ellipse-wrapper"><div class="ellipse"></div></div>
                                        <div class="div-name">
                                            <div class="text-wrapper-20">Nguyễn Thụy Uyên</div>
                                            <div class="text-wrapper-21">Lớp Sẻ nâu</div>
                                        </div>
                                    </div>
                                    <div class="div-rating">
                                        <div class="overlap-group-3">
                                            <div class="text-wrapper-22">5.0</div>
                                            <img class="star" src="{{asset('home-page-2/img/star-4.svg')}}" />
                                        </div>
                                    </div>
                                </div>
                                <div class="div-wrapper">
                                    <p class="text-wrapper-23">
                                        The study was repeated with three brands of hand sanitizers containing 55%, 85%, and 95% ethanol.
                                        Th
                                    </p>
                                </div>
                            </div>
                            <div class="comment">
                                <div class="frame-4">
                                    <div class="div-information-user">
                                        <div class="div-avatar-2"><div class="ellipse"></div></div>
                                        <div class="div-name">
                                            <div class="text-wrapper-20">Phó Vân Trinh</div>
                                            <div class="text-wrapper-21">Lớp Sẻ nâu</div>
                                        </div>
                                    </div>
                                    <div class="div-rating">
                                        <div class="overlap-group-3">
                                            <div class="text-wrapper-22">4.9</div>
                                            <img class="star" src="{{asset('home-page-2/img/star.png')}}" />
                                        </div>
                                    </div>
                                </div>
                                <div class="frame-5">
                                    <p class="text-wrapper-23">
                                        An average healthy 7 year old boy weighs about 50 lb (23 kg). If we suppose the same amount of
                                        alcoh
                                    </p>
                                </div>
                            </div>
                            <div class="comment">
                                <div class="frame-4">
                                    <div class="div-information-user">
                                        <div class="div-avatar"><div class="ellipse"></div></div>
                                        <div class="div-name">
                                            <div class="text-wrapper-20">Nguyễn Duy Hiền</div>
                                            <div class="text-wrapper-21">Lớp Sẻ nâu</div>
                                        </div>
                                    </div>
                                    <div class="div-rating">
                                        <div class="overlap-group-3">
                                            <div class="text-wrapper-22">4.9</div>
                                            <img class="star" src="{{asset('home-page-2/img/star.png')}}" />
                                        </div>
                                    </div>
                                </div>
                                <div class="frame-6">
                                    <p class="text-wrapper-23">
                                        So yes, the alcohol (ethanol) in hand sanitizers can be absorbed through the skin, but no, it
                                        would
                                    </p>
                                </div>
                            </div>
                            <div class="comment">
                                <div class="frame-4">
                                    <div class="div-information-user">
                                        <div class="ellipse-wrapper"><div class="ellipse"></div></div>
                                        <div class="div-name">
                                            <div class="text-wrapper-20">Nguyễn Thụy Uyên</div>
                                            <div class="text-wrapper-21">Lớp Sẻ nâu</div>
                                        </div>
                                    </div>
                                    <div class="div-rating">
                                        <div class="overlap-group-3">
                                            <div class="text-wrapper-22">5.0</div>
                                            <img class="star" src="{{asset('home-page-2/img/star.png')}}" />
                                        </div>
                                    </div>
                                </div>
                                <div class="frame-6">
                                    <p class="text-wrapper-23">
                                        The study was repeated with three brands of hand sanitizers containing 55%, 85%, and 95% ethanol.
                                        Th
                                    </p>
                                </div>
                            </div>
                            <div class="comment">
                                <div class="frame-4">
                                    <div class="div-information-user">
                                        <div class="div-avatar-2"><div class="ellipse"></div></div>
                                        <div class="div-name">
                                            <div class="text-wrapper-20">Phó Vân Trinh</div>
                                            <div class="text-wrapper-21">Lớp Sẻ nâu</div>
                                        </div>
                                    </div>
                                    <div class="div-rating">
                                        <div class="overlap-group-3">
                                            <div class="text-wrapper-22">4.9</div>
                                            <img class="star" src="{{asset('home-page-2/img/star.png')}}" />
                                        </div>
                                    </div>
                                </div>
                                <div class="frame-6">
                                    <p class="text-wrapper-23">
                                        An average healthy 7 year old boy weighs about 50 lb (23 kg). If we suppose the same amount of
                                        alcoh
                                    </p>
                                </div>
                            </div>
                        @endif
                    </div>
{{--                    <div class="gradient"></div>--}}
                </div>
            </div>
            <img class="cloud" src="{{asset('home-page-2/img/cloud-1.png')}}" />
        </div>
        <div class="div-board-contact">
            <button type="submit" class="div-submit button">GỬI THÔNG TIN</button>
            <form class="frame-7" action="#" method="POST">
                @csrf
                <div class="div-5">
                    <div class="text-wrapper-24">HỌ TÊN CỦA ANH/CHỊ</div>
                    <input id="contact_name" type="text" class="input text-style" />
                </div>
                <div class="div-5">
                    <div class="input-field"><label class="text-wrapper-24" for="input-1">EMAIL</label></div>
                    <input type="email" class="input text-style" id="contact_email"/>
                </div>
                <div class="frame-8">
                    <div class="input-field-2">
                        <div class="text-wrapper-24">ĐIỆN THOẠI</div>
                        <input type="input" class="input text-style" id="contact_phone"/>
                    </div>
                    <div class="input-field-2">
                        <div class="tu-i-c-a-con">TUỔI CỦA CON</div>
                        <input type="input" class="input text-style" id="contact_age_chilrent"/>
                    </div>
                </div>
                <textarea type="textara" class="input-3 text-style" id="contact_age_chilrent"></textarea>
            </form>
            <div class="frame-10">
                <div class="frame-11">
                    <div class="text-wrapper-27">Liên hệ</div>
                    <div class="flexcontainer-2">
                        <p class="text">
                  <span class="text-wrapper-28"
                  >For enrolment and tour enquiries please call 0393064532. Or fill the form, we will contact you.<br
                      /></span>
                        </p>
                        <p class="text">
                  <span class="text-wrapper-28"
                  >Our Family Care Team are available between 8:30am and 5.30pm on Monday to Friday.</span
                  >
                        </p>
                    </div>
                </div>
                <img class="rectangle-4" src="{{asset('home-page-2/img/rectangle-4181.svg')}}" />
            </div>
        </div>
        <div class="frame-12">
            <div class="overlap-group-wrapper">
                <div class="overlap-group-4">
                    <div class="tittle"><p class="text-wrapper-29">Sự kiện sắp diễn ra</p></div>
                    <img class="asset" src="{{asset('home-page-2/img/asset-20-1.png')}}" />
                </div>
            </div>
            <div class="frame-13">
                <div class="overlap-5">
                    <div class="group"></div>
                    <div class="frame-wrapper">
                        <div class="frame-14">
                            <img class="rectangle-5" src="{{asset('home-page-2/img/rectangle-4174.png')}}" />
                            <div class="frame-15">
                                <div class="frame-16">
                                    <div class="frame-17"><div class="text-wrapper-30">Kỹ năng</div></div>
                                    <p class="text-wrapper-31">Diễn tập kỹ năng thoát hiểm cho trẻ khi có sự cố cháy</p>
                                </div>
                                <div class="frame-18">
                                    <img class="img" src="{{asset('home-page-2/img/clock.svg')}}" />
                                    <div class="text-wrapper-32">18 Nov 2023</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="frame-19">
            <a href="#" class="img-wrapper"><img class="img-2" src="{{asset('home-page-2/img/zalo-png-0.png')}}" /></a>
            <a href="#" class="img-wrapper"><img class="img-2" src="{{asset('home-page-2/img/messenger-jpeg-0.png')}}" /></a>
        </div>
    </div>
</div>

<script type="text/javascript">
    var nextArticleRoute = '{{ route('nextArticle') }}';
    var articleId = {{--$article['id']--}};
</script>
@endsection

