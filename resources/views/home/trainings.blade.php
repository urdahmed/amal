<div class="container">
    <h2 class="my-5 text-primary hf fw-bold border-end border-bottom border-secondary pb-3 pe-3">{{ __('titles.trainings.title')}}</h2>
    <div class="row row-cols-1 row-cols-md-4 g-4">
        <div class="col">
            <div class="card h-100">
                <div class="position-relative">
                    <div class="position-absolute top-0 start-0">
                        <span class="badge bg-danger p-2 m-1 small fw-light rounded-0">
                            <i class="fas fa-user-friends"></i>
                            33 مسجل
                        </span>
                    </div>
                    <div class="position-absolute top-0 end-0">
                        <span class="badge bg-danger p-2 m-1 small fw-light rounded-0">
                            <i class="fas fa-clock"></i>
                            13/10/2021
                        </span>
                    </div>
                    <img src="{{ asset('images/courses/maths.jfif') }}" class="card-img-top" alt="...">
                </div>
                <div class="bg-primary">
                    <h6 class="card-title text-info py-2 text-center">دورة في اللغة الانجليزية</h6>
                    <h6 class="card-title text-info text-center smalls"><small class="text-muted text-white">الاستاذ بن عيسى</small></h6>
                </div>
                <div class="card-body bg-light text-primary p-0">
                    <ul class="list-group list-group-flush p-0">
                        <li class="list-group-item bg-light">
                            <i class="fas fa-clock"></i>
                            8 ساعات
                        </li>
                        <li class="list-group-item bg-light">
                            <i class="fas fa-layer-group"></i>
                            سنة 2 ثانوي - اداب
                        </li>
                    </ul>
                </div>
                <div class="card-footer p-0 d-grid gap-2">
                    <a href="#" class="btn btn-primary rounded-0" type="button">تسجيــــــــل</a>
                </div>
            </div>
        </div>
    </div>
    <div class="text-start my-3">
        <a href="{{ route('courses.index') }}">
            {{ __('titles.trainings.seeall')}}
        </a>
    </div>
</div>