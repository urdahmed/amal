<div class="modal fade" id="loginmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="createModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ __('titles.commons.login')}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            @include('auth.login.form')
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-danger text-white" data-bs-dismiss="modal">{{__('buttons.cancel')}}</button>
                <button type="submit" class="btn btn-sm btn-primary text-white" onclick="event.preventDefault(); document.getElementById('login-form').submit();">{{__('buttons.login')}}</button>
            </div>
        </div>
    </div>
</div>