@include('ShopLayout.header')
@include('ShopLayout.navbar')


<header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Shop The latest Movies</h1>
                    <p class="lead fw-normal text-white-50 mb-0">Blue Ray CD's available </p>
                </div>
            </div>
        </header>
        <body>
        @yield('Products')
</body>
      
      
        @include('ShopLayout.footer')