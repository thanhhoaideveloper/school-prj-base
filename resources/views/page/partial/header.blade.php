<div class="div-6">
    <div class="content-wrapper">
        <!-- // nav  -->
        <div class="icon-bars">
            <nav class="menu--left" role="navigation">
                <div class="menuToggle">
                    <input type="checkbox" />
                    <span></span>
                    <span></span>
                    <span></span>
                    <div class="menuItem">
                        <ul class="menuItem-main">
                            <li>
                                <a href="{{ route('about') }}">Về chúng tôi</a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="th-ng-tin" style="float: left; margin-right: .5rem">
                                        Chương trình học
                                    </div>
                                    <img class="caret-up" src="{{ asset('homepage/img/caretup.svg') }}" />
                                    <ul class="sub-program">
                                        <li> Lớp Chích Bông </li>
                                        <li> Lớp Sẻ Nâu </li>
                                        <li> Lớp Bồ Câu </li>
                                    </ul>
                                </a>
                            </li>
                            <li><a href="#">Tin tức &amp; Hình ảnh</a></li>
                            <li>
                                <a href="{{ route('contact') }}">
                                    <div class="th-ng-tin" style="float: left">Liên hệ</div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <div class="content-border"> </div>
        <div class="content-3">
            <div class="div-7">
                <div class="ghost-button">
                    <div class="th-ng-tin">Về chúng tôi</div>
                </div>
                <div class="ghost-button">
                    <div class="th-ng-tin">Chương trình học</div>
                    <img class="caret-up" src="{{ asset('homepage/img/caretup.svg') }}" />
                </div>
            </div>
            <img class="logo-2" src="{{ asset('homepage/img/logo-3.png') }}" />
            <div class="div-7">
                <div class="ghost-button">
                    <p class="th-ng-tin">Tin tức &amp; Hình ảnh</p>
                </div>
                <div class="ghost-button">
                    <div class="th-ng-tin">Liên hệ</div>
                </div>
            </div>
        </div>
    </div>
</div>
