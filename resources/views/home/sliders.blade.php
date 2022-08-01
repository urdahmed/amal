<div id="slider" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-keyboard="true" data-bs-interval="3000">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#slider" data-bs-slide-to="0" class="active" aria-current="true"></button>
        <button type="button" data-bs-target="#slider" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#slider" data-bs-slide-to="2"></button>
    </div>
    <div class="carousel-inner position-relative">
        <div class="position-absolute top-50 start-50 translate-middle" style="z-index: 1010">
            <span class="text-white display-1" id="typedjs"></span>
        </div>
        @foreach($sliders as $slider)
        @php ($style='style=background-image:url('.asset("images/sliders").'/'.$slider['img'].')')
        <div class="carousel-item @if ($loop->first) active @endif" {{$style}} data-txt="{{$slider['txt']}}"></div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#slider" data-bs-slide="next">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#slider" data-bs-slide="prev">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>