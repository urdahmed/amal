<footer class="hf bg-primary navbar-dark @if(!Route::is('home')) fixed-bottom @endif mt-3">
    <div class="container pt-3">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3">
                <h5 class="text-info border-bottom border-2 border-light pb-2 fw-bold">{{ __('commons.app.name') }}<span></span></h5>
                <p class="text-white text-justify small cf">{{ __('commons.app.description') }}</p>
                <p class="text-info fw-bolds">
                    {{ __('commons.app')['name'] }}
                    &copy;
                    {{ date("Y") }}
                </p>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <h5 class="text-info border-bottom border-2 border-light pb-2 fw-bold">{{ __('titles.guest.footer.links')}}<span></span></h5>
                <ul class="list-group list-group-flush px-0 bg-primary">
                    <li class="list-group-item bg-primary"><a href="#" class="text-light text-decoration-none">{{ __('menus.guest.privacy')}}</a></li>
                </ul>
                <ul class="list-group list-group-flush px-0 bg-primary">
                    <li class="list-group-item bg-primary"><a href="#" class="text-light text-decoration-none">{{ __('menus.guest.about')}}</a></li>
                </ul>
                <ul class="list-group list-group-flush px-0 bg-primary">
                    <li class="list-group-item bg-primary"><a href="#" class="text-light text-decoration-none">{{ __('menus.guest.tos') }}</a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <h5 class="text-info border-bottom border-2 border-light pb-2 fw-bold">{{ __('titles.guest.footer.contactus') }}<span></span></h5>
                <ul class="list-group list-group-flush px-0 bg-primary">
                    <li class="list-group-item bg-primary text-light">
                        <img alt="youtube" width="24" height="24" src="{{ asset('images/socials/phone.png') }}" class="ms-1">
                        <span>{{ __('commons.app')['phone']  }}</span>
                    </li>
                    <li class="list-group-item bg-primary text-light">
                        <a title="youtube" target="_blank" href="#" class="text-light text-decoration-none"><img alt="youtube" width="24" height="24" src="{{ asset('images/socials/facebook.png') }}" class="ms-1">{{ __('links.guest.facebook') }}</a>
                    </li>
                    <li class="list-group-item bg-primary text-light">
                        <a title="youtube" target="_blank" href="#" class="text-light text-decoration-none"><img alt="youtube" width="24" height="24" src="{{ asset('images/socials/youtube.png') }}" class="ms-1">{{ __('links.guest.youtube') }}</a>
                    </li>
                    <li class="list-group-item bg-primary text-light">
                        <a title="youtube" target="_blank" href="#" class="text-light text-decoration-none"><img alt="youtube" width="24" height="24" src="{{ asset('images/socials/instagram.png') }}" class="ms-1">{{ __('links.guest.instagram')}}</a>
                    </li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <h5 class="text-info border-bottom border-2 border-light pb-2 fw-bold">{{ __('titles.guest.footer.visitus') }}<span></span></h5>
                <p class="text-white text-justify small cf">
                    <i class="fas fa-map-marker-alt"></i>
                    {{ __('commons.app.localization')}}
                </p>
                <div>
                    <br />
                    <small><a href="https://www.openstreetmap.org/?mlat=35.19957&amp;mlon=4.15897#map=17/35.19957/4.15897" class="text-light text-decoration-none">{{ __('links.guest.map')}}</a></small>
                </div>
            </div>
        </div>
    </div>
</footer>