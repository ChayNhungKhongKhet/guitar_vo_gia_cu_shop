@extends('user.layout.master')
@section('content')
<!-- Banner Start -->
<section>
    <div class="pe_in_banner_wrapper">
        <div class="container">
            <div class="pe_in_banner_section">
                <div class="pe_in_banner_heading">
                    <h2>Product</h2>
                </div>
                <div class="pe_in_banner_subheading">
                    <ul>
                        <li><a class="pe_in_banner_text1" style="color: #909090" href="javascript:void(0);">Home</a>
                        </li>
                        <li>
                            <p class="pe_in_banner_text2" style="color: #909090"><i class="fa fa-caret-right"></i>
                            </p>
                        </li>
                        <li><a class="pe_in_banner_text3" style="color: #191919" href="javascript:void(0);">Product</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Collection Section Start -->
<section>
    <div class="pe_collection_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="pe_collection_header">
                        <div class="pe_collection_header1">
                            <header class="header">
                                <span class="[ icon  icon--grid ]  [ fa  fa-th ]  [ icon ] active">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22">
                                        <path id="Rounded_Rectangle_523_copy_8" data-name="Rounded Rectangle 523 copy 8" d="M2,0H4A2,2,0,0,1,6,2V4A2,2,0,0,1,4,6H2A2,2,0,0,1,0,4V2A2,2,0,0,1,2,0Zm8,0h2a2,2,0,0,1,2,2V4a2,2,0,0,1-2,2H10A2,2,0,0,1,8,4V2A2,2,0,0,1,10,0Zm8,0h2a2,2,0,0,1,2,2V4a2,2,0,0,1-2,2H18a2,2,0,0,1-2-2V2A2,2,0,0,1,18,0ZM2,8H4a2,2,0,0,1,2,2v2a2,2,0,0,1-2,2H2a2,2,0,0,1-2-2V10A2,2,0,0,1,2,8Zm8,0h2a2,2,0,0,1,2,2v2a2,2,0,0,1-2,2H10a2,2,0,0,1-2-2V10A2,2,0,0,1,10,8Zm8,0h2a2,2,0,0,1,2,2v2a2,2,0,0,1-2,2H18a2,2,0,0,1-2-2V10A2,2,0,0,1,18,8ZM2,16H4a2,2,0,0,1,2,2v2a2,2,0,0,1-2,2H2a2,2,0,0,1-2-2V18A2,2,0,0,1,2,16Zm8,0h2a2,2,0,0,1,2,2v2a2,2,0,0,1-2,2H10a2,2,0,0,1-2-2V18A2,2,0,0,1,10,16Zm8,0h2a2,2,0,0,1,2,2v2a2,2,0,0,1-2,2H18a2,2,0,0,1-2-2V18A2,2,0,0,1,18,16Z" />
                                    </svg>
                                </span>
                                <span class="[ icon  icon--list ]  [ fa  fa-reorder ]  [ icon ]">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22">
                                        <path id="Rounded_Rectangle_523_copy_9" data-name="Rounded Rectangle 523 copy 9" d="M2,0H4A2,2,0,0,1,6,2V4A2,2,0,0,1,4,6H2A2,2,0,0,1,0,4V2A2,2,0,0,1,2,0ZM20,22H10a2,2,0,0,1-2-2V18a2,2,0,0,1,2-2H20a2,2,0,0,1,2,2v2A2,2,0,0,1,20,22Zm0-8H10a2,2,0,0,1-2-2V10a2,2,0,0,1,2-2H20a2,2,0,0,1,2,2v2A2,2,0,0,1,20,14Zm0-8H10A2,2,0,0,1,8,4V2a2,2,0,0,1,2-2H20a2,2,0,0,1,2,2V4A2,2,0,0,1,20,6ZM2,8H4a2,2,0,0,1,2,2v2a2,2,0,0,1-2,2H2a2,2,0,0,1-2-2V10A2,2,0,0,1,2,8Zm0,8H4a2,2,0,0,1,2,2v2a2,2,0,0,1-2,2H2a2,2,0,0,1-2-2V18A2,2,0,0,1,2,16Z" />
                                    </svg>
                                </span>
                            </header>
                            <div class="pe_collection_feature_box">
                                <p class="pe_collection_txt2">Sort by</p>
                                <select class="pe_select_input">
                                    <option value="" selected>Featured</option>
                                    <option value="" selected="">Price - Low to High</option>
                                    <option value="" selected="">Price - High to Low</option>
                                    <option value="" selected="">Discount - Low to High</option>
                                    <option value="" selected="">Discount - High to Low</option>
                                </select>
                            </div>
                        </div>
                        <div class="pe_collection_sort_box">
                            <p class="pe_collection_txt2">Show</p>
                            <select class="pe_select_input">
                                <option value="" selected>12</option>
                                <option value="" selected>9</option>
                                <option value="" selected>6</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 order-lg-1 order-md-2 order-sm-2 order-2">
                    <div class="pe_collection_sidebar_wrapper">
                        <div class="container">
                            <div class="pe_collection_sidebar_section">
                                <div class="pe_collection_sidebar_category">
                                    <div class="pe_sidebar_heading">
                                        <h2>Categories</h2>
                                    </div>
                                    <div class="pe_category_list">
                                        <ul>
                                            <li><a href="">All</a><span>530</span></li>
                                            <li><a href="">Accessories</a><span>530</span></li>
                                            <li><a href="">Mens Wear</a><span>530</span></li>
                                            <li><a href="">Womans Wear</a><span>530</span></li>
                                            <li><a href="">Kids Wear</a><span>530</span></li>
                                            <li><a href="">Sports Wear</a><span>530</span></li>
                                            <li><a href="">Winter Essentials</a><span>530</span></li>
                                            <li><a href="">Footwears</a><span>530</span></li>
                                            <li><a href="">Sunglasses</a><span>530</span></li>
                                            <li><a href="">Watches</a><span>530</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pe_collection_sidebar_category">
                                    <div class="pe_sidebar_heading">
                                        <h2>Color</h2>
                                    </div>
                                    <div class="pe_color_list">
                                        <div class="custom-radios">
                                            <div>
                                                <input type="radio" id="color-1" name="color" value="color-1" checked>
                                                <label for="color-1">
                                                    <span>
                                                        <img src="/images/color_check.png" alt="Checked Icon" />
                                                    </span>
                                                    <p class="color_name">Red</p>
                                                </label>
                                            </div>
                                            <div>
                                                <input type="radio" id="color-2" name="color" value="color-2">
                                                <label for="color-2">
                                                    <span>
                                                        <img src="/images/color_check.png" alt="Checked Icon" />
                                                    </span>
                                                    <p class="color_name">Blue</p>
                                                </label>
                                            </div>
                                            <div>
                                                <input type="radio" id="color-3" name="color" value="color-3">
                                                <label for="color-3">
                                                    <span>
                                                        <img src="/images/color_check.png" alt="Checked Icon" />
                                                    </span>
                                                    <p class="color_name">Black</p>
                                                </label>
                                            </div>
                                            <div>
                                                <input type="radio" id="color-4" name="color" value="color-4">
                                                <label for="color-4">
                                                    <span>
                                                        <img src="/images/color_check.png" alt="Checked Icon" />
                                                    </span>
                                                    <p class="color_name">White</p>
                                                </label>
                                            </div>
                                            <div>
                                                <input type="radio" id="color-5" name="color" value="color-5">
                                                <label for="color-5">
                                                    <span>
                                                        <img src="/images/color_check.png" alt="Checked Icon" />
                                                    </span>
                                                    <p class="color_name">Pink</p>
                                                </label>
                                            </div>
                                            <div>
                                                <input type="radio" id="color-6" name="color" value="color-6">
                                                <label for="color-6">
                                                    <span>
                                                        <img src="/images/color_check.png" alt="Checked Icon" />
                                                    </span>
                                                    <p class="color_name">Yellow</p>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pe_collection_sidebar_category">
                                    <div class="pe_sidebar_heading">
                                        <h2>Price</h2>
                                    </div>
                                    <div class="radio_box">
                                        <label>
                                            <input type="radio" name="name" checked>
                                            <p>0-$50</p>
                                        </label>
                                        <label>
                                            <input type="radio" name="name">
                                            <p>$100-$150</p>
                                        </label>
                                        <label>
                                            <input type="radio" name="name">
                                            <p>$100-$150</p>
                                        </label>
                                        <label>
                                            <input type="radio" name="name">
                                            <p>$100-$150</p>
                                        </label>
                                        <label>
                                            <input type="radio" name="name">
                                            <p>$100-$150</p>
                                        </label>
                                        <label>
                                            <input type="radio" name="name">
                                            <p>$100-$150</p>
                                        </label>
                                        <label>
                                            <input type="radio" name="name">
                                            <p>$100-$150</p>
                                        </label>
                                        <label>
                                            <input type="radio" name="name">
                                            <p>$100-$150</p>
                                        </label>
                                    </div>
                                </div>
                                <div class="pe_collection_sidebar_category">
                                    <div class="pe_sidebar_heading">
                                        <h2>Size</h2>
                                    </div>
                                    <div class="radio_box">
                                        <label>
                                            <input type="radio" name="name" checked>
                                            <p>S</p>
                                        </label>
                                        <label>
                                            <input type="radio" name="name">
                                            <p>M</p>
                                        </label>
                                        <label>
                                            <input type="radio" name="name">
                                            <p>L</p>
                                        </label>
                                        <label>
                                            <input type="radio" name="name">
                                            <p>XL</p>
                                        </label>
                                        <label>
                                            <input type="radio" name="name">
                                            <p>XS</p>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <form action="{{ url('/product-show') }}" method="GET">
                    <div style="margin-bottom: 30px;" class="pe_top_right_section">
                        <div class="pe_top_search">
                            <input name="searchTerm" type="text" placeholder="Search for product" value="{{ $searchTerm ?? '' }}">
                            <button type="submit" style="border: none; "><img src="/images/header_search.svg" style="margin-right: 10px;" alt="images"></button>
                        </div>
                    </div>
                </form>

                <div class="col-lg-9 col-md-12 col-sm-12 order-lg-2 order-md-1 order-sm-1 order-1">
                    <div class="collection_main_wrapper">
                        <div class="wrapper">
                            @livewire('products-table')
                            <!-- /products -->
                        </div>
                        <!-- /wrapper -->
                    </div>
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
