@extends('layouts.plane')

@section('body')
    <div>
        @include('component.sidebar.sidebar-wrapper')
        <div class="page-container">
            @include('component.header.header-wrapper')
            <main class='main-content bgc-grey-100'>
                <div id='mainContent'>
                    <!-- @Page Loader -->
                    <div id='loader'>
                        <div class="spinner"></div>
                    </div>

                    <script>
                        window.addEventListener('load', () => {
                        const loader = document.getElementById('loader');
                        setTimeout(() => {
                            loader.classList.add('fadeOut');
                        }, 300);
                        });
                    </script>
                    
                    @yield('content')
                </div>
            </main>
            @include('component.footer.footer-wrapper')
        </div>
    </div>
@stop

