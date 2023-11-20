            <div class="pe_top_header_wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-12">
                            <div class="pe_main_logo">
                                <a href="index.html"><img src="/images/header_logo.png" alt="images"></a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-12">
                            <div class="pe_top_right_section">
                                <div class="pe_top_search">
                                    <input type="text" placeholder="Search for product">
                                    <a href="javascript:void(0);"><img src="/images/header_search.svg"
                                            alt="images"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            @auth
                {{-- Have login --}}
                <header class="pe_header_wrapper fixed_header">
                    <div class="container">
                        <div class="pe_main_header_row">
                            <div class="pe_logo">
                                <a href="javascript:void(0);"> <img src="/images/header_category.png" alt="logo">
                                    <span>Categories</span> </a>
                                <div class="pe_categories_logo_dropdown">
                                    <ul>
                                        <li>
                                            <a href="collection.html"><i class="fas fa-tshirt"></i> Fashion</a>
                                        </li>
                                        <li>
                                            <a href="collection.html"><i class="fas fa-laptop-medical"></i> Electronics</a>
                                        </li>
                                        <li>
                                            <a href="collection.html"><i class="fas fa-home"></i> Home &amp; Garden</a>
                                        </li>
                                        <li>
                                            <a href="collection.html"><i class="fas fa-shoe-prints"></i> Footwear</a>
                                        </li>
                                        <li>
                                            <a href="collection.html"><i class="fas fa-heartbeat"></i> Healthy &amp;
                                                Beauty</a>
                                        </li>
                                        <li>
                                            <a href="collection.html"><i class="fas fa-gift"></i> Gift Ideas</a>
                                        </li>
                                        <li>
                                            <a href="collection.html"><i class="fas fa-gamepad"></i> Toy &amp; Games</a>
                                        </li>
                                        <li>
                                            <a href="collection.html"><i class="fas fa-shoe-prints"></i> Smart Phones</a>
                                        </li>
                                        <li>
                                            <a href="collection.html"><i class="fas fa-camera"></i> Cameras &amp; Photos</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><i class="fas fa-camera"></i> Accessories</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pe_main_menu main_menu_parent">
                                <div class="pe_nav_items main_menu_wrapper">
                                    <ul>
                                        <li class="has_submenu active"><a href="{{ url('/') }}">Home</a></li>
                                        <li><a href="collection.html">Classic</a></li>
                                        <li><a href="collection.html">Electric</a></li>
                                        <li><a href="{{ url('/product') }}">Product</a></li>
                                        <li><a href="{{ url('/contact') }}">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pe_main_menu_cart">
                                <div class="pe_search_cart menu_btn_wrap">
                                    <ul class="display_flex">
                                        <li class="pe_menu_cart pe_cart_open relative">
                                            <a href="javascript:void(0);">
                                                <svg style="fill: #fff;" xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="15" viewBox="0 0 16 15">
                                                    <path
                                                        d="M4.917,12.143A1.418,1.418,0,1,0,6.3,13.56,1.4,1.4,0,0,0,4.917,12.143Zm7.617,0a1.42,1.42,0,0,0,.092,2.833h0.1a1.375,1.375,0,0,0,.943-0.49,1.447,1.447,0,0,0,.335-1.03,1.415,1.415,0,0,0-.481-0.976A1.346,1.346,0,0,0,12.535,12.144Zm2.792-8.082a0.679,0.679,0,0,0-.578-0.32H7.2a0.707,0.707,0,0,0,0,1.414h6.489L11.8,9.623H5.955L3.762,1.46A0.694,0.694,0,0,0,3.094.94H1.125a0.707,0.707,0,0,0,0,1.414H2.573l2.193,8.162a0.693,0.693,0,0,0,.668.522h6.83a0.692,0.692,0,0,0,.634-0.427L15.383,4.73v0A0.731,0.731,0,0,0,15.327,4.062Z">
                                                    </path>
                                                </svg>
                                            </a>
                                            <div class="pe_cart_view_wrapper">
                                                <div class="pe_cart_box">
                                                    <div class="pe_cart_product_info">
                                                        <h5>Dummy Product Name</h5>
                                                        1X$40.00
                                                    </div>
                                                    <div class="pe_cart_product_img"><img src="/images/cart_img2.jpg"
                                                            alt="cart thumbnail" class="img-fluid"></div>
                                                </div>
                                                <div class="pe_cart_box">
                                                    <div class="pe_cart_product_info">
                                                        <h5>Dummy Product Name</h5>
                                                        1X$60.00
                                                    </div>
                                                    <div class="pe_cart_product_img"><img src="/images/cart_img1.jpg"
                                                            alt="cart thumbnail" class="img-fluid"></div>
                                                </div>
                                                <div class="pe_cart_product_total">
                                                    <h3>Total</h3>
                                                    <h3>$100.00</h3>
                                                </div>
                                                <div class="pe_cart_btn">
                                                    <div class="pe_cart_btn1 pe_btn"><a class="next pull-right"
                                                            href="cart.html">View Cart</a></div>
                                                    <div class="pe_cart_btn1 pe_btn"><a class="next pull-right"
                                                            href="checkout.html">Checkout</a></div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="pe_user_form_wrapper">
                                            <a id="show" href="javascript:void(0);" class="icon-show">
                                                <svg id="userIcon" style="fill: #fff;" xmlns="http://www.w3.org/2000/svg"
                                                    width="15" height="15" viewBox="0 0 15 15">
                                                    <path
                                                        d="M14.253,14.581A7.1,7.1,0,0,0,10.2,9.389a4.735,4.735,0,1,0-5.81.007A7.26,7.26,0,0,0,.323,14.58l-0.06.318H1.915l0.045-.212A5.407,5.407,0,0,1,7.288,10.4a5.407,5.407,0,0,1,5.327,4.29L12.66,14.9h1.651ZM7.288,2.517A3.109,3.109,0,1,1,4.2,5.627,3.1,3.1,0,0,1,7.288,2.517Z">
                                                    </path>
                                                </svg>
                                                <span class="user_name">{{ auth()->user()->username }}</span>
                                            </a>
                                            <div class="pe_user_form_login" style="display: none;">
                                                <div class="form-wrap-login">
                                                    <div id="hide" class="modify">
                                                        <a href="/logout">Logout</a>
                                                        <a href="/profile">Profile</a>
                                                    </div>                                                                                                       
                                                </div>                                               
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
            @else
                {{-- No login --}}
                <header class="pe_header_wrapper fixed_header">
                    <div class="container">
                        <div class="pe_main_header_row">
                            <div class="pe_logo">
                                <a href="javascript:void(0);"> <img src="/images/header_category.png" alt="logo">
                                    <span>Categories</span> </a>
                                <div class="pe_categories_logo_dropdown">
                                    <ul>
                                        <li>
                                            <a href="collection.html"><i class="fas fa-tshirt"></i> Fashion</a>
                                        </li>
                                        <li>
                                            <a href="collection.html"><i class="fas fa-laptop-medical"></i>
                                                Electronics</a>
                                        </li>
                                        <li>
                                            <a href="collection.html"><i class="fas fa-home"></i> Home &amp; Garden</a>
                                        </li>
                                        <li>
                                            <a href="collection.html"><i class="fas fa-shoe-prints"></i> Footwear</a>
                                        </li>
                                        <li>
                                            <a href="collection.html"><i class="fas fa-heartbeat"></i> Healthy &amp;
                                                Beauty</a>
                                        </li>
                                        <li>
                                            <a href="collection.html"><i class="fas fa-gift"></i> Gift Ideas</a>
                                        </li>
                                        <li>
                                            <a href="collection.html"><i class="fas fa-gamepad"></i> Toy &amp; Games</a>
                                        </li>
                                        <li>
                                            <a href="collection.html"><i class="fas fa-shoe-prints"></i> Smart Phones</a>
                                        </li>
                                        <li>
                                            <a href="collection.html"><i class="fas fa-camera"></i> Cameras &amp;
                                                Photos</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><i class="fas fa-camera"></i> Accessories</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pe_main_menu main_menu_parent">
                                <div class="pe_nav_items main_menu_wrapper">
                                    <ul>
                                        <li class="has_submenu active"><a href="{{ url('/') }}">Home</a></li>
                                        <li><a href="collection.html">Classic</a></li>
                                        <li><a href="collection.html">Electric</a></li>
                                        <li><a href="{{ url('/product') }}">Product</a></li>
                                        <li><a href="{{ url('/contact') }}">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pe_main_menu_cart">
                                <div class="pe_search_cart menu_btn_wrap">
                                    <ul class="display_flex">
                                        <li class="pe_menu_cart pe_cart_open relative">
                                            <a href="javascript:void(0);">
                                                <svg style="fill: #fff;" xmlns="http://www.w3.org/2000/svg"
                                                    width="16" height="15" viewBox="0 0 16 15">
                                                    <path
                                                        d="M4.917,12.143A1.418,1.418,0,1,0,6.3,13.56,1.4,1.4,0,0,0,4.917,12.143Zm7.617,0a1.42,1.42,0,0,0,.092,2.833h0.1a1.375,1.375,0,0,0,.943-0.49,1.447,1.447,0,0,0,.335-1.03,1.415,1.415,0,0,0-.481-0.976A1.346,1.346,0,0,0,12.535,12.144Zm2.792-8.082a0.679,0.679,0,0,0-.578-0.32H7.2a0.707,0.707,0,0,0,0,1.414h6.489L11.8,9.623H5.955L3.762,1.46A0.694,0.694,0,0,0,3.094.94H1.125a0.707,0.707,0,0,0,0,1.414H2.573l2.193,8.162a0.693,0.693,0,0,0,.668.522h6.83a0.692,0.692,0,0,0,.634-0.427L15.383,4.73v0A0.731,0.731,0,0,0,15.327,4.062Z">
                                                    </path>
                                                </svg>
                                            </a>
                                            <div class="pe_cart_view_wrapper">
                                                <div class="pe_cart_box">
                                                    <div class="pe_cart_product_info">
                                                        <h5>Dummy Product Name</h5>
                                                        1X$40.00
                                                    </div>
                                                    <div class="pe_cart_product_img"><img src="/images/cart_img2.jpg"
                                                            alt="cart thumbnail" class="img-fluid"></div>
                                                </div>
                                                <div class="pe_cart_box">
                                                    <div class="pe_cart_product_info">
                                                        <h5>Dummy Product Name</h5>
                                                        1X$60.00
                                                    </div>
                                                    <div class="pe_cart_product_img"><img src="/images/cart_img1.jpg"
                                                            alt="cart thumbnail" class="img-fluid"></div>
                                                </div>
                                                <div class="pe_cart_product_total">
                                                    <h3>Total</h3>
                                                    <h3>$100.00</h3>
                                                </div>
                                                <div class="pe_cart_btn">
                                                    <div class="pe_cart_btn1 pe_btn"><a class="next pull-right"
                                                            href="cart.html">View Cart</a></div>
                                                    <div class="pe_cart_btn1 pe_btn"><a class="next pull-right"
                                                            href="checkout.html">Checkout</a></div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="pe_user_form_wrapper">
                                            <a id="show" href="javascript:void(0);">
                                                <svg id="userIcon" style="fill: #fff;"
                                                    xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 15 15">
                                                    <path
                                                        d="M14.253,14.581A7.1,7.1,0,0,0,10.2,9.389a4.735,4.735,0,1,0-5.81.007A7.26,7.26,0,0,0,.323,14.58l-0.06.318H1.915l0.045-.212A5.407,5.407,0,0,1,7.288,10.4a5.407,5.407,0,0,1,5.327,4.29L12.66,14.9h1.651ZM7.288,2.517A3.109,3.109,0,1,1,4.2,5.627,3.1,3.1,0,0,1,7.288,2.517Z">
                                                    </path>
                                                </svg>
                                            </a>
                                            <div class="pe_user_form" style="display: none;">
                                                <div class="form-wrap">
                                                    <div id="hide" class="bg-overlay">
                                                        <a href="javascript:;"><i class="fa fa-times"></i></a>
                                                    </div>
                                                    <ul class="nav nav-tabs" role="tablist">
                                                        <li class="nav-item"><a class="nav-link active" data-toggle="tab"
                                                                href="#tabs-1" role="tab">Sign Up</a></li>
                                                        <li class="nav-item"><a class="nav-link" data-toggle="tab"
                                                                href="/login" role="tab">Login</a></li>
                                                    </ul>
                                                    <div class="tab-content">
                                                        <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                                            <div id="signup-tab-content" class="active">
                                                                <form class="signup-form" method="post"
                                                                    action="/signupPost">
                                                                    @if (Session::has('success'))
                                                                        <div class="alert alert-success">
                                                                            {{ Session::get('success') }}</div>
                                                                    @endif
                                                                    @if (Session::has('fail'))
                                                                        <div class="alert alert-danger">
                                                                            {{ Session::get('fail') }}</div>
                                                                    @endif
                                                                    @csrf
                                                                    <div class="form-group">
                                                                        <input type="email" class="input"
                                                                            id="user_email" autocomplete="off"
                                                                            placeholder="Email" name="email"
                                                                            value="{{ old('email') }}">
                                                                        <span class="text-danger">
                                                                            @error('email')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </span>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input type="text" class="input"
                                                                            id="user_name" autocomplete="off"
                                                                            placeholder="Username" name="username"
                                                                            value="{{ old('username') }}">
                                                                        <span class="text-danger">
                                                                            @error('username')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </span>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input type="password" class="input"
                                                                            autocomplete="off" placeholder="Password"
                                                                            name="password">
                                                                        <span class="text-danger">
                                                                            @error('password')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </span>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input type="submit" class="button"
                                                                            value="Sign Up">
                                                                    </div>
                                                                </form>
                                                                <div class="help-text">
                                                                    <p>By signing up, you agree to our</p>
                                                                    <p><a href="#">Terms of service</a></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="menu_btn"> <span></span> <span></span>
                                                <span></span> </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
            @endauth
<style>
    .modify {
        background: white;
        padding: 10px;
    }
    .modify a{
        display: block;   
        position: relative;    
        top: 0;
        right: 0;
        padding-left: 0;
        
    }
    .modify a:hover{
        color: red;
    }
    .pe_user_form_login{
        position: absolute;
        top: 50px;
    }
    .icon-show{
        display: flex;
        align-items: center;
    }
    .user_name{
        display: block;
        padding-left: 5px;
        color: white
    }
</style>