<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">@yield('page_title', 'Dashboard')</h1>
            </div>
            @if(trim($__env->yieldContent('breadcrumb')))
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    @yield('breadcrumb')
                </ol>
            </div>
            @endif
        </div>
    </div>
</div>
