<!-- ***** Header Area Start ***** -->
<header class="header_area animated">
    <div class="container-fluid">
        <div class="row align-items-center">
            <!-- Menu Area Start -->
            <div class="col-12 col-lg-10">
                <div class="menu_area">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <!-- Logo -->
                        @include('component-landing.header.header-logo',
                            array('brand'=>'Ca.')
                        )
                        <!-- Menu Area -->
                        @include('component-landing.header.header-menu')
                    </nav>
                </div>
            </div>
            <!-- Signup btn -->
            <div class="col-12 col-lg-2">
                <div class="sing-up-button d-none d-lg-block">
                    <a href="#">Sign Up Free</a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->