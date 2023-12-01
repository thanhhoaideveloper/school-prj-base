@if(isset($banner))
    <div class="top-banner">
        <div class="overlap-2">
            <div class="div-background">
                <div class="overlap-group-2">
                    <img class="paper" src="{{asset('home-page-2/img/paper.svg')}}" /> <img class="grid" src="{{asset('home-page-2/img/grid.png')}}" />
                </div>
            </div>
            <div class="div-content-4">
                <div class="div-herotext">
                    <div class="text-wrapper-13">{{$banner['title']}}</div>
                    <p class="text-wrapper-14">
                        {{$banner['content']}}
                    </p>
                </div>
                <div class="div-wheel"><img class="rectangle" src="{{asset($banner['thumbnail'])}}" /></div>
            </div>
        </div>
    </div>
@else
    <div class="top-banner">
        <div class="overlap-2">
            <div class="div-background">
                <div class="overlap-group-2">
                    <img class="paper" src="{{asset('home-page-2/img/paper.svg')}}" /> <img class="grid" src="{{asset('home-page-2/img/grid.png')}}" />
                </div>
            </div>
            <div class="div-content-4">
                <div class="div-herotext">
                    <div class="text-wrapper-13">Montessori Kindergarten School</div>
                    <p class="text-wrapper-14">
                        A Reggio-Inspired School for children from 1 year to 11 years of age from Nursery, Preschool to
                        Primary.
                    </p>
                </div>
                <div class="div-wheel"><img class="rectangle" src="{{asset('home-page-2/img/rectangle-4171.gif')}}" /></div>
            </div>
        </div>
    </div>
@endif
