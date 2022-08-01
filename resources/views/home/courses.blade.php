<div class="container">
    <h2 class="my-5 text-primary hf fw-bold border-end border-bottom border-secondary pb-3 pe-3">{{ __('titles.courses.title')}}</h2>
    <div class="row row-cols-1 row-cols-md-4 g-4">
        <div class="col">
            <div class="card h-100">
                <div class="card-header hf fw-bold bg-light">رياضيات - سنة 3 ثانوي علوم طبيعية</div>
                <div class="position-relative">
                    <div class="position-absolute top-0 start-0">
                        <span class="badge bg-danger p-2 m-1 small fw-light rounded-0">33 مسجل</span>
                    </div>
                    <div class="position-absolute top-0 end-0">
                        <span class="badge bg-success p-2 m-1 small fw-light rounded-0">
                            <i class="fas fa-clock"></i>
                            تفاصيل
                        </span>
                    </div>
                    <img src="{{ asset('images/courses/maths.jfif') }}" class="card-img-top" alt="...">
                </div>
                <div class="card-body">
                    <p class="card-text text-justify">كل يوم ثلاثاء - من الساعة 16 الى 15 </p>
                </div>
                <div class="card-footer text-start bg-light">
                    <small class="text-muted">تحت إشراف الاستاذ</small>
                    <a href="#" class="text-danger">كريستوف قشيحة</a>
                </div>
                <div class="card-footer p-0 d-grid gap-2">
                    <a href="#" class="btn btn-primary rounded-0" type="button">تسجيــــــــل</a>
                </div>
            </div>
        </div>
    </div>
    <div class="text-start my-3">
        <a href="{{ route('courses.index') }}">
            {{ __('titles.courses.seeall')}}
        </a>
    </div>
</div>