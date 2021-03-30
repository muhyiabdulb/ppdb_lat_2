<!doctype html>
<html lang="en">

<head>
    {{-- Ini Header --}}
    @include('layouts._includes.head')
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        {{-- Ini Navbar --}}
        @include('layouts._partials.navbar')

        {{-- Ini Setting --}}
        @include('layouts._partials.setting')

        <div class="app-main">
            {{-- Ini Sidebar --}}
            @include('layouts._partials.sidebar')

            {{-- Ini Content --}}
            <div class="app-main__outer">
                {{-- Ini Isi Content --}}
                @yield('content')

                <div class="app-wrapper-footer">
                    {{-- Ini Footer --}}
                    @include('layouts._partials.footer')
                </div>
            </div>
        </div>

    </div>

    {{-- Ini Foot (tempat js) --}}
    @include('layouts._includes.foot')
</body>

</html>
