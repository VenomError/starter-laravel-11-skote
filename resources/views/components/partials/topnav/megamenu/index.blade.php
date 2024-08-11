<div class="dropdown dropdown-mega d-none d-lg-block ms-2">
    <button type="button" class="btn header-item waves-effect" data-bs-toggle="dropdown" aria-haspopup="false"
        aria-expanded="false">
        <span key="t-megamenu">{{ $title }}</span>
        <i class="mdi mdi-chevron-down"></i>
    </button>
    <div class="dropdown-menu dropdown-megamenu">
        <div class="row">
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-md-4">
                        <x-partials.topnav.megamenu-list title="Ui Components">
                            <x-partials.topnav.megamenu.item title="Lightbox" href="/lightbox" />
                        </x-partials.topnav.megamenu-list>
                    </div>

                    <div class="col-md-4">
                        <x-partials.topnav.megamenu-list title="application">
                            <x-partials.topnav.megamenu.item title="Ecommerce" href="/Ecommerce" />
                        </x-partials.topnav.megamenu-list>
                    </div>

                    <div class="col-md-4">
                        <x-partials.topnav.megamenu-list title="extra pages">
                            <x-partials.topnav.megamenu.item title="Ecommerce" href="/Ecommerce" />
                        </x-partials.topnav.megamenu-list>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-sm-6">
                        <x-partials.topnav.megamenu-list title="extra pages">
                            <x-partials.topnav.megamenu.item title="Ecommerce" href="/Ecommerce" />
                        </x-partials.topnav.megamenu-list>
                    </div>

                    <div class="col-sm-5">
                        <div>
                            <img src="{{ asset('assets/images/megamenu-img.png') }}" alt=""
                                class="img-fluid mx-auto d-block">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>