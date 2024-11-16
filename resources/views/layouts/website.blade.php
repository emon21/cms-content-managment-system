    @include('website.components.header')

<body>

     <!--===  Header Start ===-->
    @include('website.components.TopHeader')
    <!--===  Header End ===-->

    @yield('content')

    {{-- @include('frontend.components.footer') --}}


    <!--===  Footer Start ===-->

   @include('website.components.footer')

    <!--===  Footer End ===-->

</body>

</html>
