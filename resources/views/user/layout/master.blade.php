<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="We design best Multipurpose HTML Website Template for any online shop, online store, shopping, fashion, accessories, shoes, bags, t-shirts, electronics, furniture, christmas, ecommerce html template">
    <meta name="keywords" content="business, multipurpose, multipurpose html website template, online shop, online store, shopping, fashion, accessories, shoes, bags, t-shirts, electronics, furniture, christmas, ecommerce html template">
    <meta name="author" content="kamleshyadav">
    <meta name="MobileOptimized" content="320">
    <title>Vo Gia Cu Shop</title>
    @include('user.partials.styles')
    @livewireStyles
</head>
<body>
    <section class="pe_loader">
        <div class="pe_loader_flex">
        <span class="pe_circle-1"></span>
        <span class="pe_circle-2"></span>
        <span class="pe_circle-3"></span>
        <span class="pe_circle-4"></span>
        <span class="pe_circle-5"></span>
        </div>
    </section>
    <!-- Main Wraapper -->
    <div class="main_wrapper">
    @include('user.partials.header')
    @yield('content')
    </div>
    @include('user.partials.footer')
    <a href="javascript:void(0);" id="scroll"><span class="fa fa-angle-double-up"></span></a>
    @include('user.partials.scripts')
    @livewireScripts
</body>
</html>
