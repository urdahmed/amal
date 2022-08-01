<div class="card h-100">
    @if(is_null($teacher['photo']))
    <img src="{{ asset('images/teachers/'.$teacher['user']['gender'].'.png') }}" class="card-img-top" alt="teacher">
    @else
    <img src="{{ asset('images/teachers/'.$teacher['photo']) }}" class="card-img-top" alt="teacher">
    @endif
    <div class="card-footer bg-light">
        <div class="row g-0 text-center">
            <div class="col-6">
                <a href="#" id="phonenumber">
                    <i class="fa-solid fa-phone"></i>
                    <span>
                        {{ __('labels.teachers.phone') }}
                    </span>
                    <img src="data:image/png;base64, {{ $phone }}" alt="Phone Number" class="d-none" />
                </a>
            </div>
            <div class="col-6">
                <a href="{{ is_null($teacher['facebook'])?'#':$teacher['facebook'] }}" target="_blank">
                    <i class="fa-brands fa-facebook"></i>
                    <span>
                        {{ __('labels.teachers.facebook') }}
                    </span>
                </a>
            </div>
            <div class="row g-0 text-center">
            </div>
            <div class="col-6">
                <a href="{{ is_null($teacher['instagram'])?'#':$teacher['instagram'] }}" target="_blank">
                    <i class="fa-brands fa-instagram"></i>
                    <span>
                        {{ __('labels.teachers.instagram') }}
                    </span>
                </a>
            </div>
            <div class="col-6">
                <a href="{{ is_null($teacher['youtube'])?'#':$teacher['youtube'] }}" target="_blank">
                    <i class="fa-brands fa-youtube"></i>
                    <span>
                        {{ __('labels.teachers.youtube') }}
                    </span>
                </a>
            </div>
        </div>
    </div>
</div>