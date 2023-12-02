@if(isset($article))
    <div class="overlap-group">
        <div class="div-content">
            <div class="image"></div>
            <div class="content-contailner">
                <div class="content">
                    <div class="tag"><div class="text-wrapper">Education</div></div>
                    <div class="title">
                        <p class="p">{{$article['title']}}</p>
                        <p class="text-wrapper-2">
                            {{$article['content']}}
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
        <img class="heart" src="{{asset('home-page-2/img/heart-3x-1.png')}}" />
    </div>
@else
    <div class="overlap-group">
        <div class="div-content">
            <div class="image"></div>
            <div class="content-contailner">
                <div class="content">
                    <div class="tag"><div class="text-wrapper">Education</div></div>
                    <div class="title">
                        <p class="p">How to Teach Preschoolers About Money</p>
                        <p class="text-wrapper-2">
                            In the modern world, having financial literacy is a crucial skill for children to navigate
                            life successfully. While it may seem early to teach pre-schoolers about money, introducing
                            them to basic concepts in a Montessori-inspired way can lay a strong foundation for their
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
        <img class="heart" src="{{asset('home-page-2/img/heart-3x-1.png')}}" />
    </div>
@endif




