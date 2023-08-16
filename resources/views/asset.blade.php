<!DOCTYPE html>
<html lang="en">

@include('app-layout.head')

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        {{-- <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('AdminLTE/dist') }}/img/AdminLTELogo.png" alt="AdminLTELogo"              height="60" width="60">
        </div> --}}

       @include('app-layout.navbar')
        
        @include('app-layout.sidebar')

        <div class="content-wrapper">
            @include('app-layout.headerasset')

            <section class="content">
                <div class="container-fluid">

                </div>
            </section>
        </div>
         
        @include('app-layout.footer')


    </div>
    <!-- ./wrapper -->

    @include('app-layout.script')
</body>

</html>
