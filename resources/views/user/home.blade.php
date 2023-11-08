@extends('user.layout.master')

@section('content')
<section>
    <div class="pe_banner_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="pe_banner_left">
                        <div class="pe_banner_img"><img src="http://placehold.it/576x704" alt="images" class="img-fluid"/></div>
                        <div class="pe_banner_img_icons">
                            <ul class="pe_banner_icons_list">
                                <li>
                                    <span class="pe_banner_icon1"><img src="/images/banner_shp1.svg" alt="images" /></span>
                                </li>
                                <li>
                                    <span class="pe_banner_icon1"><img src="/images/banner_shp2.svg" alt="images" /></span>
                                </li>
                                <li>
                                    <span class="pe_banner_icon1"><img src="/images/banner_shp3.svg" alt="images" /></span>
                                </li>
                                <li>
                                    <span class="pe_banner_icon1"><img src="/images/banner_shp4.svg" alt="images" /></span>
                                </li>
                                <li>
                                    <span class="pe_banner_icon1"><img src="/images/banner_shp5.svg" alt="images" /></span>
                                </li>
                                <li>
                                    <span class="pe_banner_icon1"><img src="/images/banner_shp6.svg" alt="images" /></span>
                                </li>
                                <li>
                                    <span class="pe_banner_icon1"><img src="/images/banner_shp7.svg" alt="images" /></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="pe_banner_body">
                        <p class="pe_banner_text1">Winter is Coming</p>
                        <h2 class="pe_banner_heading">Flat 50% Off ON Winter WEars</h2>
                        <p class="pe_banner_text2">SELECTED ITEMS**</p>
                        <div class="pe_banner_button pe_btn"><a href="collection.html">Shop Now</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Categories Start -->
<div class="pe_categories_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="pe_categories_left_img">
                    <div class="grid-item">
                        <div class="grid_img">
                            <img class="img-fluid" src="http://placehold.it/576x576 " alt="images" />
                            <div class="pe_categories_btn"><a href="product_detail.html">Clothings</a></div>
                            <div class="grid_more"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="pe_categories_left_imgs">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="pe_categories_left_img">
                                <div class="grid-item">
                                    <div class="grid_img">
                                        <img class="img-fluid" src="http://placehold.it/276x276" alt="images" />
                                        <div class="pe_categories_btn"><a href="product_detail.html">Footwear</a></div>
                                        <div class="grid_more"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="pe_categories_left_img">
                                <div class="grid-item">
                                    <div class="grid_img">
                                        <img class="img-fluid" src="http://placehold.it/276x276" alt="images" />
                                        <div class="pe_categories_btn"><a href="product_detail.html">Watches</a></div>
                                        <div class="grid_more"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pe_categories_img4">
                        <div class="pe_categories_left_img">
                            <div class="grid-item">
                                <div class="grid_img">
                                    <img class="img-fluid" src="http://placehold.it/576x274" alt="images" />
                                    <div class="pe_categories_btn"><a href="product_detail.html">Accessories</a></div>
                                    <div class="grid_more"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- products Start -->
<section>
    <div class="pe_product_wrapper">
        <div class="container">
            <div class="pe_product_heading_filter">
                <div class="pe_product_heading pe_heading">
                    <h2>OUR <span style="color: #1fbdd3;">PRODUCTS</span></h2>
                </div>
                <div class="work_filter_menu">
                    <button class="filter" data-filter="all">All</button>
                    <button class="filter" data-filter=".women">Women</button>
                    <button class="filter" data-filter=".man">Man</button>
                    <button class="filter" data-filter=".accessories">Accessories</button>
                </div>
            </div>
            <div class="case_filter">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12 col-12 mix all women">
                        <div class="work_porfolio_section wow zoomIn" data-wow-delay="0.1s">
                            <a href="product_detail"><img src="http://placehold.it/276x358" alt="" /></a>
                            <div class="pe_discount_tag">
                                <p>-40%</p>
                            </div>
                            <div class="pe_product_name">
                                <a href="product_detail.html">
                                    <p>Dummy Product <span>Name</span></p>
                                </a>
                                <div class="pe_product_ratings">
                                    <p><img src="/images/star.svg" alt="images" /></p>
                                    <p><img src="/images/star.svg" alt="images" /></p>
                                    <p><img src="/images/star.svg" alt="images" /></p>
                                    <p><img src="/images/star.svg" alt="images" /></p>
                                    <p><img src="/images/star.svg" alt="images" /></p>
                                </div>
                                <div class="pe_product_price"><span class="pe_product_price1">$40.00</span> <span class="pe_product_price2">$50.00</span></div>
                            </div>
                            <div class="work_overlay">
                                <div class="pe_filter_icon">
                                    <ul>
                                        <li>
                                            <a href="wishlist.html">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="14" viewBox="0 0 17 14">
                                                    <path
                                                        d="M12.388-.014A4.658,4.658,0,0,0,8.5,2.059,4.66,4.66,0,0,0,4.612-.014,4.555,4.555,0,0,0,0,4.471a6.883,6.883,0,0,0,1.337,3.9A14.264,14.264,0,0,0,4.15,11.31a23.228,23.228,0,0,0,4.028,2.607,0.734,0.734,0,0,0,.322.075,0.745,0.745,0,0,0,.326-0.076A23.417,23.417,0,0,0,12.85,11.31a14.278,14.278,0,0,0,2.813-2.944A6.883,6.883,0,0,0,17,4.471,4.555,4.555,0,0,0,12.388-.014Zm3.163,4.485c0,4-5.718,7.3-7.051,8.012-1.333-.713-7.051-4.009-7.051-8.012A3.12,3.12,0,0,1,4.612,1.4,3.121,3.121,0,0,1,7.775,4.471a0.725,0.725,0,0,0,1.449,0A3.165,3.165,0,0,1,15.551,4.471Z"
                                                    />
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="cart.html">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15">
                                                    <path
                                                        d="M4.917,12.143A1.418,1.418,0,1,0,6.3,13.56,1.4,1.4,0,0,0,4.917,12.143Zm7.617,0a1.42,1.42,0,0,0,.092,2.833h0.1a1.375,1.375,0,0,0,.943-0.49,1.447,1.447,0,0,0,.335-1.03,1.415,1.415,0,0,0-.481-0.976A1.346,1.346,0,0,0,12.535,12.144Zm2.792-8.082a0.679,0.679,0,0,0-.578-0.32H7.2a0.707,0.707,0,0,0,0,1.414h6.489L11.8,9.623H5.955L3.762,1.46A0.694,0.694,0,0,0,3.094.94H1.125a0.707,0.707,0,0,0,0,1.414H2.573l2.193,8.162a0.693,0.693,0,0,0,.668.522h6.83a0.692,0.692,0,0,0,.634-0.427L15.383,4.73v0A0.731,0.731,0,0,0,15.327,4.062Z"
                                                    />
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="product_detail.html">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14">
                                                    <path
                                                        data-name="Quick View"
                                                        d="M12.795,12.737L9.592,9.28a5.75,5.75,0,0,0,1.275-3.625A5.546,5.546,0,0,0,5.433.016,5.546,5.546,0,0,0,0,5.655a5.546,5.546,0,0,0,5.434,5.639,5.246,5.246,0,0,0,3.113-1.02l3.227,3.483a0.691,0.691,0,0,0,1,.021A0.757,0.757,0,0,0,12.795,12.737ZM5.433,1.487A4.1,4.1,0,0,1,9.449,5.655,4.1,4.1,0,0,1,5.433,9.823,4.1,4.1,0,0,1,1.416,5.655,4.1,4.1,0,0,1,5.433,1.487Z"
                                                    />
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-12 mix all man">
                        <div class="work_porfolio_section wow zoomIn" data-wow-delay="0.1s">
                            <img src="http://placehold.it/276x358" alt="images" />
                            <div class="pe_product_name">
                                <a href="product_detail.html">
                                    <p>Dummy Product <span>Name</span></p>
                                </a>
                                <div class="pe_product_ratings">
                                    <p><img src="/images/star.svg" alt="images" /></p>
                                    <p><img src="/images/star.svg" alt="images" /></p>
                                    <p><img src="/images/star.svg" alt="images" /></p>
                                    <p><img src="/images/star.svg" alt="images" /></p>
                                    <p><img src="/images/star.svg" alt="images" /></p>
                                </div>
                                <div class="pe_product_price"><span class="pe_product_price1">$40.00</span> <span class="pe_product_price2">$50.00</span></div>
                            </div>
                            <div class="work_overlay">
                                <div class="pe_filter_icon">
                                    <ul>
                                        <li>
                                            <a href="wishlist.html">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="14" viewBox="0 0 17 14">
                                                    <path
                                                        d="M12.388-.014A4.658,4.658,0,0,0,8.5,2.059,4.66,4.66,0,0,0,4.612-.014,4.555,4.555,0,0,0,0,4.471a6.883,6.883,0,0,0,1.337,3.9A14.264,14.264,0,0,0,4.15,11.31a23.228,23.228,0,0,0,4.028,2.607,0.734,0.734,0,0,0,.322.075,0.745,0.745,0,0,0,.326-0.076A23.417,23.417,0,0,0,12.85,11.31a14.278,14.278,0,0,0,2.813-2.944A6.883,6.883,0,0,0,17,4.471,4.555,4.555,0,0,0,12.388-.014Zm3.163,4.485c0,4-5.718,7.3-7.051,8.012-1.333-.713-7.051-4.009-7.051-8.012A3.12,3.12,0,0,1,4.612,1.4,3.121,3.121,0,0,1,7.775,4.471a0.725,0.725,0,0,0,1.449,0A3.165,3.165,0,0,1,15.551,4.471Z"
                                                    />
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="cart.html">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15">
                                                    <path
                                                        d="M4.917,12.143A1.418,1.418,0,1,0,6.3,13.56,1.4,1.4,0,0,0,4.917,12.143Zm7.617,0a1.42,1.42,0,0,0,.092,2.833h0.1a1.375,1.375,0,0,0,.943-0.49,1.447,1.447,0,0,0,.335-1.03,1.415,1.415,0,0,0-.481-0.976A1.346,1.346,0,0,0,12.535,12.144Zm2.792-8.082a0.679,0.679,0,0,0-.578-0.32H7.2a0.707,0.707,0,0,0,0,1.414h6.489L11.8,9.623H5.955L3.762,1.46A0.694,0.694,0,0,0,3.094.94H1.125a0.707,0.707,0,0,0,0,1.414H2.573l2.193,8.162a0.693,0.693,0,0,0,.668.522h6.83a0.692,0.692,0,0,0,.634-0.427L15.383,4.73v0A0.731,0.731,0,0,0,15.327,4.062Z"
                                                    />
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="product_detail.html">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14">
                                                    <path
                                                        data-name="Quick View"
                                                        d="M12.795,12.737L9.592,9.28a5.75,5.75,0,0,0,1.275-3.625A5.546,5.546,0,0,0,5.433.016,5.546,5.546,0,0,0,0,5.655a5.546,5.546,0,0,0,5.434,5.639,5.246,5.246,0,0,0,3.113-1.02l3.227,3.483a0.691,0.691,0,0,0,1,.021A0.757,0.757,0,0,0,12.795,12.737ZM5.433,1.487A4.1,4.1,0,0,1,9.449,5.655,4.1,4.1,0,0,1,5.433,9.823,4.1,4.1,0,0,1,1.416,5.655,4.1,4.1,0,0,1,5.433,1.487Z"
                                                    />
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-12 mix all women">
                        <div class="work_porfolio_section wow zoomIn" data-wow-delay="0.1s">
                            <img src="http://placehold.it/276x358" alt="" />
                            <div class="pe_discount_tag">
                                <p>SALE</p>
                            </div>
                            <div class="pe_product_name">
                                <a href="product_detail.html">
                                    <p>Dummy Product <span>Name</span></p>
                                </a>
                                <div class="pe_product_ratings">
                                    <p><img src="/images/star.svg" alt="images" /></p>
                                    <p><img src="/images/star.svg" alt="images" /></p>
                                    <p><img src="/images/star.svg" alt="images" /></p>
                                    <p><img src="/images/star.svg" alt="images" /></p>
                                    <p><img src="/images/star.svg" alt="images" /></p>
                                </div>
                                <div class="pe_product_price"><span class="pe_product_price1">$40.00</span> <span class="pe_product_price2">$50.00</span></div>
                            </div>
                            <div class="work_overlay">
                                <div class="pe_filter_icon">
                                    <ul>
                                        <li>
                                            <a href="wishlist.html">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="14" viewBox="0 0 17 14">
                                                    <path
                                                        d="M12.388-.014A4.658,4.658,0,0,0,8.5,2.059,4.66,4.66,0,0,0,4.612-.014,4.555,4.555,0,0,0,0,4.471a6.883,6.883,0,0,0,1.337,3.9A14.264,14.264,0,0,0,4.15,11.31a23.228,23.228,0,0,0,4.028,2.607,0.734,0.734,0,0,0,.322.075,0.745,0.745,0,0,0,.326-0.076A23.417,23.417,0,0,0,12.85,11.31a14.278,14.278,0,0,0,2.813-2.944A6.883,6.883,0,0,0,17,4.471,4.555,4.555,0,0,0,12.388-.014Zm3.163,4.485c0,4-5.718,7.3-7.051,8.012-1.333-.713-7.051-4.009-7.051-8.012A3.12,3.12,0,0,1,4.612,1.4,3.121,3.121,0,0,1,7.775,4.471a0.725,0.725,0,0,0,1.449,0A3.165,3.165,0,0,1,15.551,4.471Z"
                                                    />
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="cart.html">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15">
                                                    <path
                                                        d="M4.917,12.143A1.418,1.418,0,1,0,6.3,13.56,1.4,1.4,0,0,0,4.917,12.143Zm7.617,0a1.42,1.42,0,0,0,.092,2.833h0.1a1.375,1.375,0,0,0,.943-0.49,1.447,1.447,0,0,0,.335-1.03,1.415,1.415,0,0,0-.481-0.976A1.346,1.346,0,0,0,12.535,12.144Zm2.792-8.082a0.679,0.679,0,0,0-.578-0.32H7.2a0.707,0.707,0,0,0,0,1.414h6.489L11.8,9.623H5.955L3.762,1.46A0.694,0.694,0,0,0,3.094.94H1.125a0.707,0.707,0,0,0,0,1.414H2.573l2.193,8.162a0.693,0.693,0,0,0,.668.522h6.83a0.692,0.692,0,0,0,.634-0.427L15.383,4.73v0A0.731,0.731,0,0,0,15.327,4.062Z"
                                                    />
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="product_detail.html">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14">
                                                    <path
                                                        data-name="Quick View"
                                                        d="M12.795,12.737L9.592,9.28a5.75,5.75,0,0,0,1.275-3.625A5.546,5.546,0,0,0,5.433.016,5.546,5.546,0,0,0,0,5.655a5.546,5.546,0,0,0,5.434,5.639,5.246,5.246,0,0,0,3.113-1.02l3.227,3.483a0.691,0.691,0,0,0,1,.021A0.757,0.757,0,0,0,12.795,12.737ZM5.433,1.487A4.1,4.1,0,0,1,9.449,5.655,4.1,4.1,0,0,1,5.433,9.823,4.1,4.1,0,0,1,1.416,5.655,4.1,4.1,0,0,1,5.433,1.487Z"
                                                    />
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-12 mix all man">
                        <div class="work_porfolio_section wow zoomIn" data-wow-delay="0.1s">
                            <img src="http://placehold.it/276x358" alt="" />
                            <div class="pe_discount_tag">
                                <p>SALE</p>
                            </div>
                            <div class="pe_product_name">
                                <a href="product_detail.html">
                                    <p>Dummy Product <span>Name</span></p>
                                </a>
                                <div class="pe_product_ratings">
                                    <p><img src="/images/star.svg" alt="images" /></p>
                                    <p><img src="/images/star.svg" alt="images" /></p>
                                    <p><img src="/images/star.svg" alt="images" /></p>
                                    <p><img src="/images/star.svg" alt="images" /></p>
                                    <p><img src="/images/star.svg" alt="images" /></p>
                                </div>
                                <div class="pe_product_price"><span class="pe_product_price1">$40.00</span> <span class="pe_product_price2">$50.00</span></div>
                            </div>
                            <div class="work_overlay">
                                <div class="pe_filter_icon">
                                    <ul>
                                        <li>
                                            <a href="wishlist.html">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="14" viewBox="0 0 17 14">
                                                    <path
                                                        d="M12.388-.014A4.658,4.658,0,0,0,8.5,2.059,4.66,4.66,0,0,0,4.612-.014,4.555,4.555,0,0,0,0,4.471a6.883,6.883,0,0,0,1.337,3.9A14.264,14.264,0,0,0,4.15,11.31a23.228,23.228,0,0,0,4.028,2.607,0.734,0.734,0,0,0,.322.075,0.745,0.745,0,0,0,.326-0.076A23.417,23.417,0,0,0,12.85,11.31a14.278,14.278,0,0,0,2.813-2.944A6.883,6.883,0,0,0,17,4.471,4.555,4.555,0,0,0,12.388-.014Zm3.163,4.485c0,4-5.718,7.3-7.051,8.012-1.333-.713-7.051-4.009-7.051-8.012A3.12,3.12,0,0,1,4.612,1.4,3.121,3.121,0,0,1,7.775,4.471a0.725,0.725,0,0,0,1.449,0A3.165,3.165,0,0,1,15.551,4.471Z"
                                                    />
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="cart.html">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15">
                                                    <path
                                                        d="M4.917,12.143A1.418,1.418,0,1,0,6.3,13.56,1.4,1.4,0,0,0,4.917,12.143Zm7.617,0a1.42,1.42,0,0,0,.092,2.833h0.1a1.375,1.375,0,0,0,.943-0.49,1.447,1.447,0,0,0,.335-1.03,1.415,1.415,0,0,0-.481-0.976A1.346,1.346,0,0,0,12.535,12.144Zm2.792-8.082a0.679,0.679,0,0,0-.578-0.32H7.2a0.707,0.707,0,0,0,0,1.414h6.489L11.8,9.623H5.955L3.762,1.46A0.694,0.694,0,0,0,3.094.94H1.125a0.707,0.707,0,0,0,0,1.414H2.573l2.193,8.162a0.693,0.693,0,0,0,.668.522h6.83a0.692,0.692,0,0,0,.634-0.427L15.383,4.73v0A0.731,0.731,0,0,0,15.327,4.062Z"
                                                    />
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="product_detail.html">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14">
                                                    <path
                                                        data-name="Quick View"
                                                        d="M12.795,12.737L9.592,9.28a5.75,5.75,0,0,0,1.275-3.625A5.546,5.546,0,0,0,5.433.016,5.546,5.546,0,0,0,0,5.655a5.546,5.546,0,0,0,5.434,5.639,5.246,5.246,0,0,0,3.113-1.02l3.227,3.483a0.691,0.691,0,0,0,1,.021A0.757,0.757,0,0,0,12.795,12.737ZM5.433,1.487A4.1,4.1,0,0,1,9.449,5.655,4.1,4.1,0,0,1,5.433,9.823,4.1,4.1,0,0,1,1.416,5.655,4.1,4.1,0,0,1,5.433,1.487Z"
                                                    />
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-12 all man">
                        <div class="work_porfolio_section wow zoomIn" data-wow-delay="0.1s">
                            <img src="http://placehold.it/276x358" alt="" />
                            <div class="pe_product_name">
                                <a href="product_detail.html">
                                    <p>Dummy Product <span>Name</span></p>
                                </a>
                                <div class="pe_product_ratings">
                                    <p><img src="/images/star.svg" alt="images" /></p>
                                    <p><img src="/images/star.svg" alt="images" /></p>
                                    <p><img src="/images/star.svg" alt="images" /></p>
                                    <p><img src="/images/star.svg" alt="images" /></p>
                                    <p><img src="/images/star.svg" alt="images" /></p>
                                </div>
                                <div class="pe_product_price"><span class="pe_product_price1">$40.00</span> <span class="pe_product_price2">$50.00</span></div>
                            </div>
                            <div class="work_overlay">
                                <div class="pe_filter_icon">
                                    <ul>
                                        <li>
                                            <a href="wishlist.html">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="14" viewBox="0 0 17 14">
                                                    <path
                                                        d="M12.388-.014A4.658,4.658,0,0,0,8.5,2.059,4.66,4.66,0,0,0,4.612-.014,4.555,4.555,0,0,0,0,4.471a6.883,6.883,0,0,0,1.337,3.9A14.264,14.264,0,0,0,4.15,11.31a23.228,23.228,0,0,0,4.028,2.607,0.734,0.734,0,0,0,.322.075,0.745,0.745,0,0,0,.326-0.076A23.417,23.417,0,0,0,12.85,11.31a14.278,14.278,0,0,0,2.813-2.944A6.883,6.883,0,0,0,17,4.471,4.555,4.555,0,0,0,12.388-.014Zm3.163,4.485c0,4-5.718,7.3-7.051,8.012-1.333-.713-7.051-4.009-7.051-8.012A3.12,3.12,0,0,1,4.612,1.4,3.121,3.121,0,0,1,7.775,4.471a0.725,0.725,0,0,0,1.449,0A3.165,3.165,0,0,1,15.551,4.471Z"
                                                    />
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="cart.html">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15">
                                                    <path
                                                        d="M4.917,12.143A1.418,1.418,0,1,0,6.3,13.56,1.4,1.4,0,0,0,4.917,12.143Zm7.617,0a1.42,1.42,0,0,0,.092,2.833h0.1a1.375,1.375,0,0,0,.943-0.49,1.447,1.447,0,0,0,.335-1.03,1.415,1.415,0,0,0-.481-0.976A1.346,1.346,0,0,0,12.535,12.144Zm2.792-8.082a0.679,0.679,0,0,0-.578-0.32H7.2a0.707,0.707,0,0,0,0,1.414h6.489L11.8,9.623H5.955L3.762,1.46A0.694,0.694,0,0,0,3.094.94H1.125a0.707,0.707,0,0,0,0,1.414H2.573l2.193,8.162a0.693,0.693,0,0,0,.668.522h6.83a0.692,0.692,0,0,0,.634-0.427L15.383,4.73v0A0.731,0.731,0,0,0,15.327,4.062Z"
                                                    />
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="product_detail.html">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14">
                                                    <path
                                                        data-name="Quick View"
                                                        d="M12.795,12.737L9.592,9.28a5.75,5.75,0,0,0,1.275-3.625A5.546,5.546,0,0,0,5.433.016,5.546,5.546,0,0,0,0,5.655a5.546,5.546,0,0,0,5.434,5.639,5.246,5.246,0,0,0,3.113-1.02l3.227,3.483a0.691,0.691,0,0,0,1,.021A0.757,0.757,0,0,0,12.795,12.737ZM5.433,1.487A4.1,4.1,0,0,1,9.449,5.655,4.1,4.1,0,0,1,5.433,9.823,4.1,4.1,0,0,1,1.416,5.655,4.1,4.1,0,0,1,5.433,1.487Z"
                                                    />
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-12 mix all women">
                        <div class="work_porfolio_section wow zoomIn" data-wow-delay="0.1s">
                            <img src="http://placehold.it/276x358" alt="" />
                            <div class="pe_discount_tag">
                                <p>-60%</p>
                            </div>
                            <div class="pe_product_name">
                                <a href="product_detail.html">
                                    <p>Dummy Product <span>Name</span></p>
                                </a>
                                <div class="pe_product_ratings">
                                    <p><img src="/images/star.svg" alt="images" /></p>
                                    <p><img src="/images/star.svg" alt="images" /></p>
                                    <p><img src="/images/star.svg" alt="images" /></p>
                                    <p><img src="/images/star.svg" alt="images" /></p>
                                    <p><img src="/images/star.svg" alt="images" /></p>
                                </div>
                                <div class="pe_product_price"><span class="pe_product_price1">$40.00</span> <span class="pe_product_price2">$50.00</span></div>
                            </div>
                            <div class="work_overlay">
                                <div class="pe_filter_icon">
                                    <ul>
                                        <li>
                                            <a href="wishlist.html">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="14" viewBox="0 0 17 14">
                                                    <path
                                                        d="M12.388-.014A4.658,4.658,0,0,0,8.5,2.059,4.66,4.66,0,0,0,4.612-.014,4.555,4.555,0,0,0,0,4.471a6.883,6.883,0,0,0,1.337,3.9A14.264,14.264,0,0,0,4.15,11.31a23.228,23.228,0,0,0,4.028,2.607,0.734,0.734,0,0,0,.322.075,0.745,0.745,0,0,0,.326-0.076A23.417,23.417,0,0,0,12.85,11.31a14.278,14.278,0,0,0,2.813-2.944A6.883,6.883,0,0,0,17,4.471,4.555,4.555,0,0,0,12.388-.014Zm3.163,4.485c0,4-5.718,7.3-7.051,8.012-1.333-.713-7.051-4.009-7.051-8.012A3.12,3.12,0,0,1,4.612,1.4,3.121,3.121,0,0,1,7.775,4.471a0.725,0.725,0,0,0,1.449,0A3.165,3.165,0,0,1,15.551,4.471Z"
                                                    />
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="cart.html">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15">
                                                    <path
                                                        d="M4.917,12.143A1.418,1.418,0,1,0,6.3,13.56,1.4,1.4,0,0,0,4.917,12.143Zm7.617,0a1.42,1.42,0,0,0,.092,2.833h0.1a1.375,1.375,0,0,0,.943-0.49,1.447,1.447,0,0,0,.335-1.03,1.415,1.415,0,0,0-.481-0.976A1.346,1.346,0,0,0,12.535,12.144Zm2.792-8.082a0.679,0.679,0,0,0-.578-0.32H7.2a0.707,0.707,0,0,0,0,1.414h6.489L11.8,9.623H5.955L3.762,1.46A0.694,0.694,0,0,0,3.094.94H1.125a0.707,0.707,0,0,0,0,1.414H2.573l2.193,8.162a0.693,0.693,0,0,0,.668.522h6.83a0.692,0.692,0,0,0,.634-0.427L15.383,4.73v0A0.731,0.731,0,0,0,15.327,4.062Z"
                                                    />
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="product_detail.html">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14">
                                                    <path
                                                        data-name="Quick View"
                                                        d="M12.795,12.737L9.592,9.28a5.75,5.75,0,0,0,1.275-3.625A5.546,5.546,0,0,0,5.433.016,5.546,5.546,0,0,0,0,5.655a5.546,5.546,0,0,0,5.434,5.639,5.246,5.246,0,0,0,3.113-1.02l3.227,3.483a0.691,0.691,0,0,0,1,.021A0.757,0.757,0,0,0,12.795,12.737ZM5.433,1.487A4.1,4.1,0,0,1,9.449,5.655,4.1,4.1,0,0,1,5.433,9.823,4.1,4.1,0,0,1,1.416,5.655,4.1,4.1,0,0,1,5.433,1.487Z"
                                                    />
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-12 mix all man">
                        <div class="work_porfolio_section wow zoomIn" data-wow-delay="0.1s">
                            <img src="http://placehold.it/276x358" alt="" />
                            <div class="pe_product_name">
                                <a href="product_detail.html">
                                    <p>Dummy Product <span>Name</span></p>
                                </a>
                                <div class="pe_product_ratings">
                                    <p><img src="/images/star.svg" alt="images" /></p>
                                    <p><img src="/images/star.svg" alt="images" /></p>
                                    <p><img src="/images/star.svg" alt="images" /></p>
                                    <p><img src="/images/star.svg" alt="images" /></p>
                                    <p><img src="/images/star.svg" alt="images" /></p>
                                </div>
                                <div class="pe_product_price"><span class="pe_product_price1">$40.00</span> <span class="pe_product_price2">$50.00</span></div>
                            </div>
                            <div class="work_overlay">
                                <div class="pe_filter_icon">
                                    <ul>
                                        <li>
                                            <a href="wishlist.html">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="14" viewBox="0 0 17 14">
                                                    <path
                                                        d="M12.388-.014A4.658,4.658,0,0,0,8.5,2.059,4.66,4.66,0,0,0,4.612-.014,4.555,4.555,0,0,0,0,4.471a6.883,6.883,0,0,0,1.337,3.9A14.264,14.264,0,0,0,4.15,11.31a23.228,23.228,0,0,0,4.028,2.607,0.734,0.734,0,0,0,.322.075,0.745,0.745,0,0,0,.326-0.076A23.417,23.417,0,0,0,12.85,11.31a14.278,14.278,0,0,0,2.813-2.944A6.883,6.883,0,0,0,17,4.471,4.555,4.555,0,0,0,12.388-.014Zm3.163,4.485c0,4-5.718,7.3-7.051,8.012-1.333-.713-7.051-4.009-7.051-8.012A3.12,3.12,0,0,1,4.612,1.4,3.121,3.121,0,0,1,7.775,4.471a0.725,0.725,0,0,0,1.449,0A3.165,3.165,0,0,1,15.551,4.471Z"
                                                    />
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="cart.html">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15">
                                                    <path
                                                        d="M4.917,12.143A1.418,1.418,0,1,0,6.3,13.56,1.4,1.4,0,0,0,4.917,12.143Zm7.617,0a1.42,1.42,0,0,0,.092,2.833h0.1a1.375,1.375,0,0,0,.943-0.49,1.447,1.447,0,0,0,.335-1.03,1.415,1.415,0,0,0-.481-0.976A1.346,1.346,0,0,0,12.535,12.144Zm2.792-8.082a0.679,0.679,0,0,0-.578-0.32H7.2a0.707,0.707,0,0,0,0,1.414h6.489L11.8,9.623H5.955L3.762,1.46A0.694,0.694,0,0,0,3.094.94H1.125a0.707,0.707,0,0,0,0,1.414H2.573l2.193,8.162a0.693,0.693,0,0,0,.668.522h6.83a0.692,0.692,0,0,0,.634-0.427L15.383,4.73v0A0.731,0.731,0,0,0,15.327,4.062Z"
                                                    />
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="product_detail.html">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14">
                                                    <path
                                                        data-name="Quick View"
                                                        d="M12.795,12.737L9.592,9.28a5.75,5.75,0,0,0,1.275-3.625A5.546,5.546,0,0,0,5.433.016,5.546,5.546,0,0,0,0,5.655a5.546,5.546,0,0,0,5.434,5.639,5.246,5.246,0,0,0,3.113-1.02l3.227,3.483a0.691,0.691,0,0,0,1,.021A0.757,0.757,0,0,0,12.795,12.737ZM5.433,1.487A4.1,4.1,0,0,1,9.449,5.655,4.1,4.1,0,0,1,5.433,9.823,4.1,4.1,0,0,1,1.416,5.655,4.1,4.1,0,0,1,5.433,1.487Z"
                                                    />
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-12 mix all women">
                        <div class="work_porfolio_section wow zoomIn" data-wow-delay="0.1s">
                            <img src="http://placehold.it/276x358" alt="" />
                            <div class="pe_product_name">
                                <a href="product_detail.html">
                                    <p>Dummy Product <span>Name</span></p>
                                </a>
                                <div class="pe_product_ratings">
                                    <p><img src="/images/star.svg" alt="images" /></p>
                                    <p><img src="/images/star.svg" alt="images" /></p>
                                    <p><img src="/images/star.svg" alt="images" /></p>
                                    <p><img src="/images/star.svg" alt="images" /></p>
                                    <p><img src="/images/star.svg" alt="images" /></p>
                                </div>
                                <div class="pe_product_price"><span class="pe_product_price1">$40.00</span> <span class="pe_product_price2">$50.00</span></div>
                            </div>
                            <div class="work_overlay">
                                <div class="pe_filter_icon">
                                    <ul>
                                        <li>
                                            <a href="wishlist.html">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="14" viewBox="0 0 17 14">
                                                    <path
                                                        d="M12.388-.014A4.658,4.658,0,0,0,8.5,2.059,4.66,4.66,0,0,0,4.612-.014,4.555,4.555,0,0,0,0,4.471a6.883,6.883,0,0,0,1.337,3.9A14.264,14.264,0,0,0,4.15,11.31a23.228,23.228,0,0,0,4.028,2.607,0.734,0.734,0,0,0,.322.075,0.745,0.745,0,0,0,.326-0.076A23.417,23.417,0,0,0,12.85,11.31a14.278,14.278,0,0,0,2.813-2.944A6.883,6.883,0,0,0,17,4.471,4.555,4.555,0,0,0,12.388-.014Zm3.163,4.485c0,4-5.718,7.3-7.051,8.012-1.333-.713-7.051-4.009-7.051-8.012A3.12,3.12,0,0,1,4.612,1.4,3.121,3.121,0,0,1,7.775,4.471a0.725,0.725,0,0,0,1.449,0A3.165,3.165,0,0,1,15.551,4.471Z"
                                                    />
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="cart.html">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15">
                                                    <path
                                                        d="M4.917,12.143A1.418,1.418,0,1,0,6.3,13.56,1.4,1.4,0,0,0,4.917,12.143Zm7.617,0a1.42,1.42,0,0,0,.092,2.833h0.1a1.375,1.375,0,0,0,.943-0.49,1.447,1.447,0,0,0,.335-1.03,1.415,1.415,0,0,0-.481-0.976A1.346,1.346,0,0,0,12.535,12.144Zm2.792-8.082a0.679,0.679,0,0,0-.578-0.32H7.2a0.707,0.707,0,0,0,0,1.414h6.489L11.8,9.623H5.955L3.762,1.46A0.694,0.694,0,0,0,3.094.94H1.125a0.707,0.707,0,0,0,0,1.414H2.573l2.193,8.162a0.693,0.693,0,0,0,.668.522h6.83a0.692,0.692,0,0,0,.634-0.427L15.383,4.73v0A0.731,0.731,0,0,0,15.327,4.062Z"
                                                    />
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="product_detail.html">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14">
                                                    <path
                                                        data-name="Quick View"
                                                        d="M12.795,12.737L9.592,9.28a5.75,5.75,0,0,0,1.275-3.625A5.546,5.546,0,0,0,5.433.016,5.546,5.546,0,0,0,0,5.655a5.546,5.546,0,0,0,5.434,5.639,5.246,5.246,0,0,0,3.113-1.02l3.227,3.483a0.691,0.691,0,0,0,1,.021A0.757,0.757,0,0,0,12.795,12.737ZM5.433,1.487A4.1,4.1,0,0,1,9.449,5.655,4.1,4.1,0,0,1,5.433,9.823,4.1,4.1,0,0,1,1.416,5.655,4.1,4.1,0,0,1,5.433,1.487Z"
                                                    />
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Countdown Start -->
<section>
    <div class="pe_coundown_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="pe_countdown_body">
                        <p class="pe_coundown_text1">Deal of the week</p>
                        <h2 class="pe_coundown_heading">Get upto <span style="color: #1fbdd3;">40%</span> Off On Order OF <span style="color: #1fbdd3;">$90</span></h2>
                        <div id="countdown">
                            <ul>
                                <li><span class="pe_no_count" id="days"></span><span class="pe_count_name">days</span></li>
                                <li><span class="pe_no_count" id="hours"></span><span class="pe_count_name">Hours</span></li>
                                <li><span class="pe_no_count" id="minutes"></span><span class="pe_count_name">Minutes</span></li>
                                <li><span class="pe_no_count" id="seconds"></span><span class="pe_count_name">Seconds</span></li>
                            </ul>
                        </div>
                        <div class="pe_countdown_button pe_btn"><a href="collection.html">Shop Now</a></div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12"></div>
            </div>
        </div>
    </div>
</section>
<!-- New Arrivals Start -->
<section>
    <div class="pe_new_arrivals_wrapper">
        <div class="container">
            <div class="pe_product_heading_filter pe_arrival_heading_arw">
                <div class="pe_arrival_heading pe_heading">
                    <h2>NEW <span style="color: #1fbdd3;">ARRIVALS</span></h2>
                </div>



                <div class="pe_arrival_slider_arrow">
                    <div class="swiper-button-prev">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12">
                                <path
                                    d="M2.653,6L6.561,1.92a0.617,0.617,0,0,0,0-.844L6.218,0.719a0.556,0.556,0,0,0-.808,0L0.757,5.578a0.621,0.621,0,0,0,0,.847l4.649,4.854a0.556,0.556,0,0,0,.808,0l0.342-.357a0.617,0.617,0,0,0,0-.844Z"
                                />
                            </svg>
                        </span>
                    </div>
                    <div class="swiper-button-next">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12">
                                <path
                                    d="M4.347,6L0.439,1.92a0.617,0.617,0,0,1,0-.844l0.342-.358a0.556,0.556,0,0,1,.808,0L6.243,5.578a0.622,0.622,0,0,1,0,.847L1.594,11.279a0.556,0.556,0,0,1-.808,0l-0.342-.357a0.617,0.617,0,0,1,0-.844Z"
                                />
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
            <div class="pe_new_arrivals_slider">
                <!-- Swiper -->
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="work_porfolio_section wow zoomIn" data-wow-delay="0.1s">
                                <img src="/images/filter_img4.jpg" alt="" />
                                <div class="pe_discount_tag">
                                    <p>40%</p>
                                </div>
                                <div class="pe_product_name">
                                    <a href="product_detail.html">
                                        <p>Dummy Product <span>Name</span></p>
                                    </a>
                                    <div class="pe_product_ratings">
                                        <p><img src="/images/star.svg" alt="images" /></p>
                                        <p><img src="/images/star.svg" alt="images" /></p>
                                        <p><img src="/images/star.svg" alt="images" /></p>
                                        <p><img src="/images/star.svg" alt="images" /></p>
                                        <p><img src="/images/star.svg" alt="images" /></p>
                                    </div>
                                    <div class="pe_product_price"><span class="pe_product_price1">$40.00</span> <span class="pe_product_price2">$50.00</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="work_porfolio_section wow zoomIn" data-wow-delay="0.1s">
                                <img src="/images/filter_img1.jpg" alt="" />
                                <div class="pe_product_name">
                                    <a href="product_detail.html">
                                        <p>Dummy Product <span>Name</span></p>
                                    </a>
                                    <div class="pe_product_ratings">
                                        <p><img src="/images/star.svg" alt="images" /></p>
                                        <p><img src="/images/star.svg" alt="images" /></p>
                                        <p><img src="/images/star.svg" alt="images" /></p>
                                        <p><img src="/images/star.svg" alt="images" /></p>
                                        <p><img src="/images/star.svg" alt="images" /></p>
                                    </div>
                                    <div class="pe_product_price"><span class="pe_product_price1">$40.00</span> <span class="pe_product_price2">$50.00</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="work_porfolio_section wow zoomIn" data-wow-delay="0.1s">
                                <img src="/images/filter_img2.jpg" alt="" />
                                <div class="pe_product_name">
                                    <a href="product_detail.html">
                                        <p>Dummy Product <span>Name</span></p>
                                    </a>
                                    <div class="pe_product_ratings">
                                        <p><img src="/images/star.svg" alt="images" /></p>
                                        <p><img src="/images/star.svg" alt="images" /></p>
                                        <p><img src="/images/star.svg" alt="images" /></p>
                                        <p><img src="/images/star.svg" alt="images" /></p>
                                        <p><img src="/images/star.svg" alt="images" /></p>
                                    </div>
                                    <div class="pe_product_price"><span class="pe_product_price1">$40.00</span> <span class="pe_product_price2">$50.00</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="work_porfolio_section wow zoomIn" data-wow-delay="0.1s">
                                <img src="/images/filter_img1.jpg" alt="" />
                                <div class="pe_discount_tag">
                                    <p>50%</p>
                                </div>
                                <div class="pe_product_name">
                                    <a href="product_detail.html">
                                        <p>Dummy Product <span>Name</span></p>
                                    </a>
                                    <div class="pe_product_ratings">
                                        <p><img src="/images/star.svg" alt="images" /></p>
                                        <p><img src="/images/star.svg" alt="images" /></p>
                                        <p><img src="/images/star.svg" alt="images" /></p>
                                        <p><img src="/images/star.svg" alt="images" /></p>
                                        <p><img src="/images/star.svg" alt="images" /></p>
                                    </div>
                                    <div class="pe_product_price"><span class="pe_product_price1">$40.00</span> <span class="pe_product_price2">$50.00</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="work_porfolio_section wow zoomIn" data-wow-delay="0.1s">
                                <img src="/images/filter_img3.jpg" alt="" />
                                <div class="pe_discount_tag">
                                    <p>SALE</p>
                                </div>
                                <div class="pe_product_name">
                                    <a href="product_detail.html">
                                        <p>Dummy Product <span>Name</span></p>
                                    </a>
                                    <div class="pe_product_ratings">
                                        <p><img src="/images/star.svg" alt="images" /></p>
                                        <p><img src="/images/star.svg" alt="images" /></p>
                                        <p><img src="/images/star.svg" alt="images" /></p>
                                        <p><img src="/images/star.svg" alt="images" /></p>
                                        <p><img src="/images/star.svg" alt="images" /></p>
                                    </div>
                                    <div class="pe_product_price"><span class="pe_product_price1">$40.00</span> <span class="pe_product_price2">$50.00</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="work_porfolio_section wow zoomIn" data-wow-delay="0.1s">
                                <img src="/images/filter_img7.jpg" alt="" />
                                <div class="pe_discount_tag">
                                    <p>SALE</p>
                                </div>
                                <div class="pe_product_name">
                                    <a href="product_detail.html">
                                        <p>Dummy Product <span>Name</span></p>
                                    </a>
                                    <div class="pe_product_ratings">
                                        <p><img src="/images/star.svg" alt="images" /></p>
                                        <p><img src="/images/star.svg" alt="images" /></p>
                                        <p><img src="/images/star.svg" alt="images" /></p>
                                        <p><img src="/images/star.svg" alt="images" /></p>
                                        <p><img src="/images/star.svg" alt="images" /></p>
                                    </div>
                                    <div class="pe_product_price"><span class="pe_product_price1">$40.00</span> <span class="pe_product_price2">$50.00</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="work_porfolio_section wow zoomIn" data-wow-delay="0.1s">
                                <img src="/images/filter_img8.jpg" alt="" />
                                <div class="pe_discount_tag">
                                    <p>20%</p>
                                </div>
                                <div class="pe_product_name">
                                    <a href="product_detail.html">
                                        <p>Dummy Product <span>Name</span></p>
                                    </a>
                                    <div class="pe_product_ratings">
                                        <p><img src="/images/star.svg" alt="images" /></p>
                                        <p><img src="/images/star.svg" alt="images" /></p>
                                        <p><img src="/images/star.svg" alt="images" /></p>
                                        <p><img src="/images/star.svg" alt="images" /></p>
                                        <p><img src="/images/star.svg" alt="images" /></p>
                                    </div>
                                    <div class="pe_product_price"><span class="pe_product_price1">$40.00</span> <span class="pe_product_price2">$50.00</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="work_porfolio_section wow zoomIn" data-wow-delay="0.1s">
                                <img src="/images/filter_img1.jpg" alt="" />
                                <div class="pe_discount_tag">
                                    <p>40%</p>
                                </div>
                                <div class="pe_product_name">
                                    <a href="product_detail.html">
                                        <p>Dummy Product <span>Name</span></p>
                                    </a>
                                    <div class="pe_product_ratings">
                                        <p><img src="/images/star.svg" alt="images" /></p>
                                        <p><img src="/images/star.svg" alt="images" /></p>
                                        <p><img src="/images/star.svg" alt="images" /></p>
                                        <p><img src="/images/star.svg" alt="images" /></p>
                                        <p><img src="/images/star.svg" alt="images" /></p>
                                    </div>
                                    <div class="pe_product_price"><span class="pe_product_price1">$40.00</span> <span class="pe_product_price2">$50.00</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Sevrvices Start -->
<section>
    <div class="pe_services_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12"></div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="pe_services_body">
                        <div class="pe_services_box">
                            <div class="pe_services_icon pe_services_icon1">
                                <span>
                                    <svg width="42" height="20" viewBox="0 0 42 20">
                                        <path
                                            d="M41.163,17.69H39.235a3.171,3.171,0,0,1-6.1,0H21.968a3.171,3.171,0,0,1-6.1,0H14.118a0.833,0.833,0,0,1-.837-0.829V16.018H8.438a0.829,0.829,0,1,1,0-1.659h4.844V3.607H5.235a0.829,0.829,0,1,1,0-1.659h8.047V0.829A0.833,0.833,0,0,1,14.118,0H31.4a0.833,0.833,0,0,1,.837.83V4.234h4.057a0.839,0.839,0,0,1,.629.283l4.872,5.514a0.826,0.826,0,0,1,.207.546v6.284A0.832,0.832,0,0,1,41.163,17.69Zm-22.247.65a1.479,1.479,0,1,0-1.491-1.479A1.487,1.487,0,0,0,18.916,18.34ZM30.561,1.658H14.955V16.032h0.91a3.172,3.172,0,0,1,6.1,0h8.593V1.658ZM36.183,18.34a1.479,1.479,0,1,0-1.492-1.479A1.487,1.487,0,0,0,36.183,18.34Zm4.143-7.45-4.415-5H32.234V16.032h0.9a3.172,3.172,0,0,1,6.1,0h1.091V10.89ZM10.639,8.9a0.833,0.833,0,0,1-.837.83H0.837a0.83,0.83,0,1,1,0-1.659H9.8A0.833,0.833,0,0,1,10.639,8.9Zm-5.4,5.46H5.682a0.83,0.83,0,1,1,0,1.659H5.235A0.83,0.83,0,1,1,5.235,14.359Z"
                                        />
                                    </svg>
                                </span>
                            </div>
                            <div class="pe_services_content">
                                <h3>Free Delivery</h3>
                                <p>Free Shipping On Order Over $50</p>
                            </div>
                        </div>
                        <div class="pe_services_box">
                            <div class="pe_services_icon pe_services_icon2">
                                <span>
                                    <svg width="30" height="29" viewBox="0 0 30 29">
                                        <path
                                            id="Shape_858_copy"
                                            data-name="Shape 858 copy"
                                            d="M15.432,0A14.5,14.5,0,0,0,5.66,3.745l-1.6-1.6A1.875,1.875,0,0,0,.886,3.155L0.026,8.191a1.867,1.867,0,0,0,1.842,2.177,1.93,1.93,0,0,0,.318-0.027l5.06-.857a1.861,1.861,0,0,0,1.01-3.155L6.8,4.877A12.929,12.929,0,1,1,15.432,27.4H15.406a0.8,0.8,0,1,0,0,1.6h0.027A14.5,14.5,0,1,0,15.432,0ZM7.185,7.727a0.257,0.257,0,0,1-.209.181l-5.06.856a0.285,0.285,0,0,1-.048,0,0.267,0.267,0,0,1-.2-0.1,0.256,0.256,0,0,1-.058-0.215L2.469,3.423A0.265,0.265,0,0,1,2.738,3.2a0.249,0.249,0,0,1,.183.079l4.2,4.179A0.255,0.255,0,0,1,7.185,7.727Zm-2,14.677a0.806,0.806,0,0,0-1.126-.143,0.8,0.8,0,0,0-.143,1.122L3.955,23.43a0.8,0.8,0,0,0,1.266-.983Zm6.4,4.421-0.054-.017a0.8,0.8,0,1,0-.481,1.525l0.059,0.019a0.821,0.821,0,0,0,.238.036A0.8,0.8,0,0,0,11.589,26.824ZM8.071,25.119l-0.045-.031a0.805,0.805,0,0,0-1.118.2,0.8,0.8,0,0,0,.2,1.113l0.051,0.035A0.8,0.8,0,1,0,8.071,25.119ZM3.29,19.025a0.8,0.8,0,0,0-1.5.561L1.8,19.611a0.8,0.8,0,0,0,1.5-.561Zm17-5.75a0.4,0.4,0,0,0-.405-0.4H19.522a0.4,0.4,0,1,0,0,.806h0.364A0.4,0.4,0,0,0,20.292,13.275Zm0.324-2.823H18.75A1.582,1.582,0,0,0,18.5,8.5a1.626,1.626,0,0,0-1.155-.473,1.582,1.582,0,0,0-1.128.473,2.642,2.642,0,0,0-.444.615,2.643,2.643,0,0,0-.441-0.613,1.6,1.6,0,0,0-1.15-.473,1.61,1.61,0,0,0-1.62,1.613,1.593,1.593,0,0,0,.219.806H11.383a1.375,1.375,0,0,0-1.377,1.371v0.968a0.911,0.911,0,0,0,.486.792V18.6a1.5,1.5,0,0,0,1.5,1.371H20.13A1.375,1.375,0,0,0,21.507,18.6V13.586a0.892,0.892,0,0,0,.486-0.794V11.823A1.376,1.376,0,0,0,20.615,10.452Zm-5.264,3.226v5.484H11.991A0.7,0.7,0,0,1,11.3,18.6v-4.92h4.049ZM14.177,8.827a0.794,0.794,0,0,1,.566.231,2.443,2.443,0,0,1,.584,1.369h-1.41L13.9,10.418l-0.017-.01a0.873,0.873,0,0,1-.266-0.2L13.612,10.2a0.8,0.8,0,0,1,0-1.138A0.794,0.794,0,0,1,14.177,8.827ZM16.2,10.464a2.428,2.428,0,0,1,.584-1.394,0.807,0.807,0,1,1,1.143,1.138,1.965,1.965,0,0,1-.3.229,0.348,0.348,0,0,0-.04.026H16.2Zm-0.036,3.214h2.267a0.4,0.4,0,1,0,0-.806H16.162V11.944a0.405,0.405,0,0,0-.81,0v0.927H10.9a0.082,0.082,0,0,1-.081-0.081V11.823a0.566,0.566,0,0,1,.567-0.565h9.232a0.566,0.566,0,0,1,.567.565v0.968a0.087,0.087,0,0,1-.066.084l-0.031.009a0.4,0.4,0,0,0-.389.4V18.61a0.566,0.566,0,0,1-.567.564H16.162v-5.5Z"
                                        />
                                    </svg>
                                </span>
                            </div>
                            <div class="pe_services_content">
                                <h3>Free Delivery</h3>
                                <p>Free Shipping On Order Over $50</p>
                            </div>
                        </div>
                        <div class="pe_services_box">
                            <div class="pe_services_icon pe_services_icon3">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="25" viewBox="0 0 30 25">
                                        <path
                                            data-name="Forma 1"
                                            d="M29.062,16.068a0.917,0.917,0,0,0-.937.893v6.252H1.875V12.5H12.187a0.894,0.894,0,1,0,0-1.786H1.875V7.137H12.187a0.894,0.894,0,1,0,0-1.786H1.875A1.833,1.833,0,0,0,0,7.137V23.213A1.833,1.833,0,0,0,1.875,25h26.25A1.833,1.833,0,0,0,30,23.213V16.961A0.917,0.917,0,0,0,29.062,16.068Zm-20.625,0H4.687a0.894,0.894,0,1,0,0,1.787h3.75A0.894,0.894,0,1,0,8.437,16.068ZM29.432,2.743L22.869,0.064a1,1,0,0,0-.741,0L15.566,2.743A0.894,0.894,0,0,0,15,3.565V7.137c0,4.914,1.907,7.786,7.033,10.6a0.98,0.98,0,0,0,.934,0C28.093,14.931,30,12.058,30,7.137V3.565A0.893,0.893,0,0,0,29.432,2.743ZM28.125,7.137c0,4.125-1.433,6.4-5.625,8.788-4.192-2.4-5.625-4.669-5.625-8.788V4.154l5.625-2.3,5.625,2.3V7.137ZM25.9,5.546a0.976,0.976,0,0,0-1.318.139L21.634,9.2,20.468,7.536a0.969,0.969,0,0,0-1.3-.248,0.868,0.868,0,0,0-.261,1.238l1.875,2.68a0.956,0.956,0,0,0,.741.4h0.039a0.957,0.957,0,0,0,.733-0.335L26.046,6.8A0.865,0.865,0,0,0,25.9,5.546Z"
                                        />
                                    </svg>
                                </span>
                            </div>
                            <div class="pe_services_content">
                                <h3>Free Delivery</h3>
                                <p>Free Shipping On Order Over $50</p>
                            </div>
                        </div>
                        <div class="pe_services_box">
                            <div class="pe_services_icon pe_services_icon4">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="30" viewBox="0 0 23 30">
                                        <path
                                            data-name="Forma 1"
                                            d="M2.073,13.734h1.66a8.2,8.2,0,0,0,14.169,2.5h2.135a0.718,0.718,0,0,0,.717-0.718V13.734h0.323a1.413,1.413,0,0,0,1.411-1.412V8.711a1.414,1.414,0,0,0-1.146-1.387,8.9,8.9,0,0,0-3.369-5.263A10.605,10.605,0,0,0,11.506,0C6.538,0,2.619,2.945,1.662,7.36a1.414,1.414,0,0,0-1,1.351v3.611A1.413,1.413,0,0,0,2.073,13.734ZM2.1,12.3V8.735H3.643A8.241,8.241,0,0,0,3.387,12.3H2.1Zm9.409,5.574A6.785,6.785,0,1,1,17.175,14.8H11.09a0.718,0.718,0,0,0,0,1.436h4.827A6.74,6.74,0,0,1,11.506,17.873ZM19.32,14.8H18.83a8.166,8.166,0,0,0,.448-1.064H19.32V14.8h0Zm1.734-2.5H19.625a8.241,8.241,0,0,0-.256-3.564h1.685V12.3h0ZM11.506,1.435c4.134,0,7.406,2.329,8.353,5.863H18.786a8.2,8.2,0,0,0-14.559,0H3.152C4.1,3.766,7.378,1.435,11.506,1.435Zm7.365,18.189H4.129A4.136,4.136,0,0,0,0,23.757v5.524a0.717,0.717,0,1,0,1.434,0V23.757a2.7,2.7,0,0,1,2.694-2.7H18.871a2.7,2.7,0,0,1,2.694,2.7v5.524a0.717,0.717,0,1,0,1.434,0V23.757A4.136,4.136,0,0,0,18.871,19.624Z"
                                        />
                                    </svg>
                                </span>
                            </div>
                            <div class="pe_services_content">
                                <h3>Free Delivery</h3>
                                <p>Free Shipping On Order Over $50</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Sale Banner Start -->
<div class="pe_sale_banner_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="pe_sale_banner_one">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                            <div class="pe_sale_one_img"><img src="http://placehold.it/576x278" alt="images" /></div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                            <div class="pe_sale_one_content">
                                <p class="pe_sale_one_text1">BIG SALE</p>
                                <p class="pe_sale_one_text2">Flat <span>40 %</span></p>
                                <p class="pe_sale_one_text3">On women’s fashion accessories</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="pe_sale_banner_two">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="pe_sale_two_content">
                                <p class="pe_sale_two_t1">summer</p>
                                <p class="pe_sale_two_t2">surprise</p>
                                <p class="pe_sale_two_t3">sale</p>
                                <p class="pe_sale_one_text4">Flat <span>40 %</span></p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                            <!-- <div class="pe_sale_two_img">
                           <img src="/images/sale_img2.png">
                           </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--fashion Slider Start -->
<div class="pe_fashion_wrapper">
    <div class="container-fluid">
        <div class="pe_fashion_section">
            <!-- Swiper -->
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="pe_fashion_img_section">
                            <div class="pe_fashion_img"><img src="http://placehold.it/576x278" alt="images" /></div>
                            <div class="pe_fashion_img_overlay">
                                <div class="pe_fashion_like">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18">
                                            <defs>
                                                <style>
                                                    .cls-1 {
                                                        fill: #fff;
                                                        stroke: #fff;
                                                        stroke-width: 0.6px;
                                                        fill-rule: evenodd;
                                                    }
                                                </style>
                                            </defs>
                                            <path
                                                data-name="Forma 1"
                                                class="cls-1"
                                                d="M17.466,11.053a6.215,6.215,0,0,0,1.226-3.682c0-3.764-3.481-6.826-7.761-6.826A7.963,7.963,0,0,0,3.963,4.368,6.6,6.6,0,0,0,.783,9.874a6.211,6.211,0,0,0,1.226,3.681,5.724,5.724,0,0,1-1.138,3.4,0.287,0.287,0,0,0-.056.337,0.3,0.3,0,0,0,.267.161,0.27,0.27,0,0,0,.042,0A14.087,14.087,0,0,0,5.4,16.114a8.608,8.608,0,0,0,3.147.586,8.144,8.144,0,0,0,6.223-2.752,15.326,15.326,0,0,0,3.585,1l0.042,0a0.3,0.3,0,0,0,.267-0.161,0.287,0.287,0,0,0-.056-0.336A5.718,5.718,0,0,1,17.466,11.053ZM8.543,16.117a8.029,8.029,0,0,1-2.5-.393c1-.609,1-0.657,1-0.822A0.3,0.3,0,0,0,6.9,14.651a0.3,0.3,0,0,0-.4.079c-0.147.112-.747,0.488-1.282,0.81h0a12.025,12.025,0,0,1-3.45,1.2A8.265,8.265,0,0,0,2.613,13.5a0.286,0.286,0,0,0-.057-0.2A5.659,5.659,0,0,1,1.38,9.874a6.047,6.047,0,0,1,3.037-5.1c0.117-.072.235-0.141,0.356-0.207L4.85,4.527C4.976,4.46,5.1,4.4,5.235,4.34l0.141-.063q0.2-.086.4-0.16c0.047-.018.1-0.033,0.144-0.05q0.158-.054.319-0.1c0.05-.015.1-0.031,0.152-0.045q0.209-.058.423-0.1l0.154-.031c0.126-.024.252-0.046,0.379-0.065l0.1-.015c0.156-.021.313-0.036,0.47-0.048l0.133-.008c0.16-.01.321-0.017,0.483-0.017H8.544c3.7,0,6.759,2.462,7.127,5.605a5.664,5.664,0,0,1,.036.638c0,0.141-.007.281-0.018,0.42,0,0.037-.006.073-0.01,0.11-0.012.129-.028,0.258-0.05,0.385,0,0.011,0,.022,0,0.033-0.023.133-.053,0.265-0.087,0.4-0.01.04-.021,0.08-0.032,0.12-0.032.116-.067,0.231-0.107,0.344-0.01.03-.021,0.059-0.031,0.088-0.041.111-.086,0.222-0.134,0.331-0.019.043-.039,0.087-0.059,0.129-0.054.114-.11,0.228-0.172,0.339-0.017.032-.036,0.063-0.055,0.094q-0.081.14-.17,0.277c-0.026.04-.052,0.08-0.079,0.12-0.074.107-.15,0.214-0.232,0.318A7.5,7.5,0,0,1,8.543,16.117Zm6.595-2.644c0.013-.018.024-0.038,0.036-0.056,0.069-.1.134-0.2,0.2-0.3,0.037-.059.071-0.121,0.106-0.181s0.071-.125.1-0.188,0.064-.122.095-0.183c0.043-.088.084-0.178,0.123-0.268,0.031-.072.06-0.145,0.089-0.218s0.062-.163.09-0.246c0.019-.056.037-0.112,0.054-0.168,0.028-.091.054-0.183,0.078-0.275,0.011-.042.023-0.083,0.033-0.125,0.031-.131.057-0.263,0.079-0.4,0.007-.042.012-0.083,0.018-0.124,0.015-.1.027-0.208,0.037-0.314,0-.042.008-0.084,0.011-0.127,0.01-.141.017-0.283,0.017-0.427,0-3.764-3.481-6.826-7.761-6.826H8.494c-0.125,0-.249,0-0.373.009-0.058,0-.115.008-0.173,0.011C7.866,3.076,7.784,3.081,7.7,3.089S7.567,3.1,7.5,3.112s-0.137.016-.2,0.026-0.149.023-.223,0.035L6.9,3.2c-0.08.015-.16,0.032-0.239,0.049l-0.145.034c-0.086.02-.172,0.042-0.258,0.064l-0.09.026a8.281,8.281,0,0,0-.931.325l-0.063.026c-0.027.011-.055,0.021-0.082,0.033a7.571,7.571,0,0,1,5.842-2.633c3.95,0,7.164,2.8,7.164,6.243A5.659,5.659,0,0,1,16.919,10.8a0.286,0.286,0,0,0-.057.2,8.246,8.246,0,0,0,.844,3.246A14.167,14.167,0,0,1,15.138,13.473Z"
                                            />
                                        </svg>
                                    </span>
                                    <span>450</span>
                                </div>
                                <div class="pe_fashion_cmt">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18">
                                            <defs>
                                                <style>
                                                    .cls-1 {
                                                        fill: #fff;
                                                        fill-rule: evenodd;
                                                    }
                                                </style>
                                            </defs>
                                            <path
                                                data-name="Forma 1"
                                                class="cls-1"
                                                d="M14.54,0.537A6.48,6.48,0,0,0,9.952,2.429,6.48,6.48,0,0,0,5.365.537C2.218,0.537,0,3.235,0,6.419,0,11.342,5.073,15.1,9.6,17.348a0.8,0.8,0,0,0,.711,0c4.526-2.245,9.6-6,9.6-10.929C19.9,3.241,17.692.537,14.54,0.537Zm-4.587,15.3c-3.815-1.947-8.4-5.274-8.4-9.415,0-2.28,1.479-4.38,3.81-4.38A4.949,4.949,0,0,1,9.3,4a0.788,0.788,0,0,0,1.306,0A4.958,4.958,0,0,1,14.54,2.039c2.332,0,3.81,2.1,3.81,4.38C18.349,10.558,13.759,13.891,9.952,15.834Z"
                                            />
                                        </svg>
                                    </span>
                                    <span>150</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="pe_fashion_img_section">
                            <div class="pe_fashion_img"><img src="http://placehold.it/576x278" alt="images" /></div>
                            <div class="pe_fashion_img_overlay">
                                <div class="pe_fashion_like">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18">
                                            <defs>
                                                <style>
                                                    .cls-1 {
                                                        fill: #fff;
                                                        stroke: #fff;
                                                        stroke-width: 0.6px;
                                                        fill-rule: evenodd;
                                                    }
                                                </style>
                                            </defs>
                                            <path
                                                data-name="Forma 1"
                                                class="cls-1"
                                                d="M17.466,11.053a6.215,6.215,0,0,0,1.226-3.682c0-3.764-3.481-6.826-7.761-6.826A7.963,7.963,0,0,0,3.963,4.368,6.6,6.6,0,0,0,.783,9.874a6.211,6.211,0,0,0,1.226,3.681,5.724,5.724,0,0,1-1.138,3.4,0.287,0.287,0,0,0-.056.337,0.3,0.3,0,0,0,.267.161,0.27,0.27,0,0,0,.042,0A14.087,14.087,0,0,0,5.4,16.114a8.608,8.608,0,0,0,3.147.586,8.144,8.144,0,0,0,6.223-2.752,15.326,15.326,0,0,0,3.585,1l0.042,0a0.3,0.3,0,0,0,.267-0.161,0.287,0.287,0,0,0-.056-0.336A5.718,5.718,0,0,1,17.466,11.053ZM8.543,16.117a8.029,8.029,0,0,1-2.5-.393c1-.609,1-0.657,1-0.822A0.3,0.3,0,0,0,6.9,14.651a0.3,0.3,0,0,0-.4.079c-0.147.112-.747,0.488-1.282,0.81h0a12.025,12.025,0,0,1-3.45,1.2A8.265,8.265,0,0,0,2.613,13.5a0.286,0.286,0,0,0-.057-0.2A5.659,5.659,0,0,1,1.38,9.874a6.047,6.047,0,0,1,3.037-5.1c0.117-.072.235-0.141,0.356-0.207L4.85,4.527C4.976,4.46,5.1,4.4,5.235,4.34l0.141-.063q0.2-.086.4-0.16c0.047-.018.1-0.033,0.144-0.05q0.158-.054.319-0.1c0.05-.015.1-0.031,0.152-0.045q0.209-.058.423-0.1l0.154-.031c0.126-.024.252-0.046,0.379-0.065l0.1-.015c0.156-.021.313-0.036,0.47-0.048l0.133-.008c0.16-.01.321-0.017,0.483-0.017H8.544c3.7,0,6.759,2.462,7.127,5.605a5.664,5.664,0,0,1,.036.638c0,0.141-.007.281-0.018,0.42,0,0.037-.006.073-0.01,0.11-0.012.129-.028,0.258-0.05,0.385,0,0.011,0,.022,0,0.033-0.023.133-.053,0.265-0.087,0.4-0.01.04-.021,0.08-0.032,0.12-0.032.116-.067,0.231-0.107,0.344-0.01.03-.021,0.059-0.031,0.088-0.041.111-.086,0.222-0.134,0.331-0.019.043-.039,0.087-0.059,0.129-0.054.114-.11,0.228-0.172,0.339-0.017.032-.036,0.063-0.055,0.094q-0.081.14-.17,0.277c-0.026.04-.052,0.08-0.079,0.12-0.074.107-.15,0.214-0.232,0.318A7.5,7.5,0,0,1,8.543,16.117Zm6.595-2.644c0.013-.018.024-0.038,0.036-0.056,0.069-.1.134-0.2,0.2-0.3,0.037-.059.071-0.121,0.106-0.181s0.071-.125.1-0.188,0.064-.122.095-0.183c0.043-.088.084-0.178,0.123-0.268,0.031-.072.06-0.145,0.089-0.218s0.062-.163.09-0.246c0.019-.056.037-0.112,0.054-0.168,0.028-.091.054-0.183,0.078-0.275,0.011-.042.023-0.083,0.033-0.125,0.031-.131.057-0.263,0.079-0.4,0.007-.042.012-0.083,0.018-0.124,0.015-.1.027-0.208,0.037-0.314,0-.042.008-0.084,0.011-0.127,0.01-.141.017-0.283,0.017-0.427,0-3.764-3.481-6.826-7.761-6.826H8.494c-0.125,0-.249,0-0.373.009-0.058,0-.115.008-0.173,0.011C7.866,3.076,7.784,3.081,7.7,3.089S7.567,3.1,7.5,3.112s-0.137.016-.2,0.026-0.149.023-.223,0.035L6.9,3.2c-0.08.015-.16,0.032-0.239,0.049l-0.145.034c-0.086.02-.172,0.042-0.258,0.064l-0.09.026a8.281,8.281,0,0,0-.931.325l-0.063.026c-0.027.011-.055,0.021-0.082,0.033a7.571,7.571,0,0,1,5.842-2.633c3.95,0,7.164,2.8,7.164,6.243A5.659,5.659,0,0,1,16.919,10.8a0.286,0.286,0,0,0-.057.2,8.246,8.246,0,0,0,.844,3.246A14.167,14.167,0,0,1,15.138,13.473Z"
                                            />
                                        </svg>
                                    </span>
                                    <span>450</span>
                                </div>
                                <div class="pe_fashion_cmt">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18">
                                            <defs>
                                                <style>
                                                    .cls-1 {
                                                        fill: #fff;
                                                        fill-rule: evenodd;
                                                    }
                                                </style>
                                            </defs>
                                            <path
                                                data-name="Forma 1"
                                                class="cls-1"
                                                d="M14.54,0.537A6.48,6.48,0,0,0,9.952,2.429,6.48,6.48,0,0,0,5.365.537C2.218,0.537,0,3.235,0,6.419,0,11.342,5.073,15.1,9.6,17.348a0.8,0.8,0,0,0,.711,0c4.526-2.245,9.6-6,9.6-10.929C19.9,3.241,17.692.537,14.54,0.537Zm-4.587,15.3c-3.815-1.947-8.4-5.274-8.4-9.415,0-2.28,1.479-4.38,3.81-4.38A4.949,4.949,0,0,1,9.3,4a0.788,0.788,0,0,0,1.306,0A4.958,4.958,0,0,1,14.54,2.039c2.332,0,3.81,2.1,3.81,4.38C18.349,10.558,13.759,13.891,9.952,15.834Z"
                                            />
                                        </svg>
                                    </span>
                                    <span>150</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="pe_fashion_img_section">
                            <div class="pe_fashion_img"><img src="http://placehold.it/576x278" alt="images" /></div>
                            <div class="pe_fashion_img_overlay">
                                <div class="pe_fashion_like">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18">
                                            <defs>
                                                <style>
                                                    .cls-1 {
                                                        fill: #fff;
                                                        stroke: #fff;
                                                        stroke-width: 0.6px;
                                                        fill-rule: evenodd;
                                                    }
                                                </style>
                                            </defs>
                                            <path
                                                data-name="Forma 1"
                                                class="cls-1"
                                                d="M17.466,11.053a6.215,6.215,0,0,0,1.226-3.682c0-3.764-3.481-6.826-7.761-6.826A7.963,7.963,0,0,0,3.963,4.368,6.6,6.6,0,0,0,.783,9.874a6.211,6.211,0,0,0,1.226,3.681,5.724,5.724,0,0,1-1.138,3.4,0.287,0.287,0,0,0-.056.337,0.3,0.3,0,0,0,.267.161,0.27,0.27,0,0,0,.042,0A14.087,14.087,0,0,0,5.4,16.114a8.608,8.608,0,0,0,3.147.586,8.144,8.144,0,0,0,6.223-2.752,15.326,15.326,0,0,0,3.585,1l0.042,0a0.3,0.3,0,0,0,.267-0.161,0.287,0.287,0,0,0-.056-0.336A5.718,5.718,0,0,1,17.466,11.053ZM8.543,16.117a8.029,8.029,0,0,1-2.5-.393c1-.609,1-0.657,1-0.822A0.3,0.3,0,0,0,6.9,14.651a0.3,0.3,0,0,0-.4.079c-0.147.112-.747,0.488-1.282,0.81h0a12.025,12.025,0,0,1-3.45,1.2A8.265,8.265,0,0,0,2.613,13.5a0.286,0.286,0,0,0-.057-0.2A5.659,5.659,0,0,1,1.38,9.874a6.047,6.047,0,0,1,3.037-5.1c0.117-.072.235-0.141,0.356-0.207L4.85,4.527C4.976,4.46,5.1,4.4,5.235,4.34l0.141-.063q0.2-.086.4-0.16c0.047-.018.1-0.033,0.144-0.05q0.158-.054.319-0.1c0.05-.015.1-0.031,0.152-0.045q0.209-.058.423-0.1l0.154-.031c0.126-.024.252-0.046,0.379-0.065l0.1-.015c0.156-.021.313-0.036,0.47-0.048l0.133-.008c0.16-.01.321-0.017,0.483-0.017H8.544c3.7,0,6.759,2.462,7.127,5.605a5.664,5.664,0,0,1,.036.638c0,0.141-.007.281-0.018,0.42,0,0.037-.006.073-0.01,0.11-0.012.129-.028,0.258-0.05,0.385,0,0.011,0,.022,0,0.033-0.023.133-.053,0.265-0.087,0.4-0.01.04-.021,0.08-0.032,0.12-0.032.116-.067,0.231-0.107,0.344-0.01.03-.021,0.059-0.031,0.088-0.041.111-.086,0.222-0.134,0.331-0.019.043-.039,0.087-0.059,0.129-0.054.114-.11,0.228-0.172,0.339-0.017.032-.036,0.063-0.055,0.094q-0.081.14-.17,0.277c-0.026.04-.052,0.08-0.079,0.12-0.074.107-.15,0.214-0.232,0.318A7.5,7.5,0,0,1,8.543,16.117Zm6.595-2.644c0.013-.018.024-0.038,0.036-0.056,0.069-.1.134-0.2,0.2-0.3,0.037-.059.071-0.121,0.106-0.181s0.071-.125.1-0.188,0.064-.122.095-0.183c0.043-.088.084-0.178,0.123-0.268,0.031-.072.06-0.145,0.089-0.218s0.062-.163.09-0.246c0.019-.056.037-0.112,0.054-0.168,0.028-.091.054-0.183,0.078-0.275,0.011-.042.023-0.083,0.033-0.125,0.031-.131.057-0.263,0.079-0.4,0.007-.042.012-0.083,0.018-0.124,0.015-.1.027-0.208,0.037-0.314,0-.042.008-0.084,0.011-0.127,0.01-.141.017-0.283,0.017-0.427,0-3.764-3.481-6.826-7.761-6.826H8.494c-0.125,0-.249,0-0.373.009-0.058,0-.115.008-0.173,0.011C7.866,3.076,7.784,3.081,7.7,3.089S7.567,3.1,7.5,3.112s-0.137.016-.2,0.026-0.149.023-.223,0.035L6.9,3.2c-0.08.015-.16,0.032-0.239,0.049l-0.145.034c-0.086.02-.172,0.042-0.258,0.064l-0.09.026a8.281,8.281,0,0,0-.931.325l-0.063.026c-0.027.011-.055,0.021-0.082,0.033a7.571,7.571,0,0,1,5.842-2.633c3.95,0,7.164,2.8,7.164,6.243A5.659,5.659,0,0,1,16.919,10.8a0.286,0.286,0,0,0-.057.2,8.246,8.246,0,0,0,.844,3.246A14.167,14.167,0,0,1,15.138,13.473Z"
                                            />
                                        </svg>
                                    </span>
                                    <span>450</span>
                                </div>
                                <div class="pe_fashion_cmt">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18">
                                            <defs>
                                                <style>
                                                    .cls-1 {
                                                        fill: #fff;
                                                        fill-rule: evenodd;
                                                    }
                                                </style>
                                            </defs>
                                            <path
                                                data-name="Forma 1"
                                                class="cls-1"
                                                d="M14.54,0.537A6.48,6.48,0,0,0,9.952,2.429,6.48,6.48,0,0,0,5.365.537C2.218,0.537,0,3.235,0,6.419,0,11.342,5.073,15.1,9.6,17.348a0.8,0.8,0,0,0,.711,0c4.526-2.245,9.6-6,9.6-10.929C19.9,3.241,17.692.537,14.54,0.537Zm-4.587,15.3c-3.815-1.947-8.4-5.274-8.4-9.415,0-2.28,1.479-4.38,3.81-4.38A4.949,4.949,0,0,1,9.3,4a0.788,0.788,0,0,0,1.306,0A4.958,4.958,0,0,1,14.54,2.039c2.332,0,3.81,2.1,3.81,4.38C18.349,10.558,13.759,13.891,9.952,15.834Z"
                                            />
                                        </svg>
                                    </span>
                                    <span>150</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="pe_fashion_img_section">
                            <div class="pe_fashion_img"><img src="http://placehold.it/576x278" alt="images" /></div>
                            <div class="pe_fashion_img_overlay">
                                <div class="pe_fashion_like">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18">
                                            <defs>
                                                <style>
                                                    .cls-1 {
                                                        fill: #fff;
                                                        stroke: #fff;
                                                        stroke-width: 0.6px;
                                                        fill-rule: evenodd;
                                                    }
                                                </style>
                                            </defs>
                                            <path
                                                data-name="Forma 1"
                                                class="cls-1"
                                                d="M17.466,11.053a6.215,6.215,0,0,0,1.226-3.682c0-3.764-3.481-6.826-7.761-6.826A7.963,7.963,0,0,0,3.963,4.368,6.6,6.6,0,0,0,.783,9.874a6.211,6.211,0,0,0,1.226,3.681,5.724,5.724,0,0,1-1.138,3.4,0.287,0.287,0,0,0-.056.337,0.3,0.3,0,0,0,.267.161,0.27,0.27,0,0,0,.042,0A14.087,14.087,0,0,0,5.4,16.114a8.608,8.608,0,0,0,3.147.586,8.144,8.144,0,0,0,6.223-2.752,15.326,15.326,0,0,0,3.585,1l0.042,0a0.3,0.3,0,0,0,.267-0.161,0.287,0.287,0,0,0-.056-0.336A5.718,5.718,0,0,1,17.466,11.053ZM8.543,16.117a8.029,8.029,0,0,1-2.5-.393c1-.609,1-0.657,1-0.822A0.3,0.3,0,0,0,6.9,14.651a0.3,0.3,0,0,0-.4.079c-0.147.112-.747,0.488-1.282,0.81h0a12.025,12.025,0,0,1-3.45,1.2A8.265,8.265,0,0,0,2.613,13.5a0.286,0.286,0,0,0-.057-0.2A5.659,5.659,0,0,1,1.38,9.874a6.047,6.047,0,0,1,3.037-5.1c0.117-.072.235-0.141,0.356-0.207L4.85,4.527C4.976,4.46,5.1,4.4,5.235,4.34l0.141-.063q0.2-.086.4-0.16c0.047-.018.1-0.033,0.144-0.05q0.158-.054.319-0.1c0.05-.015.1-0.031,0.152-0.045q0.209-.058.423-0.1l0.154-.031c0.126-.024.252-0.046,0.379-0.065l0.1-.015c0.156-.021.313-0.036,0.47-0.048l0.133-.008c0.16-.01.321-0.017,0.483-0.017H8.544c3.7,0,6.759,2.462,7.127,5.605a5.664,5.664,0,0,1,.036.638c0,0.141-.007.281-0.018,0.42,0,0.037-.006.073-0.01,0.11-0.012.129-.028,0.258-0.05,0.385,0,0.011,0,.022,0,0.033-0.023.133-.053,0.265-0.087,0.4-0.01.04-.021,0.08-0.032,0.12-0.032.116-.067,0.231-0.107,0.344-0.01.03-.021,0.059-0.031,0.088-0.041.111-.086,0.222-0.134,0.331-0.019.043-.039,0.087-0.059,0.129-0.054.114-.11,0.228-0.172,0.339-0.017.032-.036,0.063-0.055,0.094q-0.081.14-.17,0.277c-0.026.04-.052,0.08-0.079,0.12-0.074.107-.15,0.214-0.232,0.318A7.5,7.5,0,0,1,8.543,16.117Zm6.595-2.644c0.013-.018.024-0.038,0.036-0.056,0.069-.1.134-0.2,0.2-0.3,0.037-.059.071-0.121,0.106-0.181s0.071-.125.1-0.188,0.064-.122.095-0.183c0.043-.088.084-0.178,0.123-0.268,0.031-.072.06-0.145,0.089-0.218s0.062-.163.09-0.246c0.019-.056.037-0.112,0.054-0.168,0.028-.091.054-0.183,0.078-0.275,0.011-.042.023-0.083,0.033-0.125,0.031-.131.057-0.263,0.079-0.4,0.007-.042.012-0.083,0.018-0.124,0.015-.1.027-0.208,0.037-0.314,0-.042.008-0.084,0.011-0.127,0.01-.141.017-0.283,0.017-0.427,0-3.764-3.481-6.826-7.761-6.826H8.494c-0.125,0-.249,0-0.373.009-0.058,0-.115.008-0.173,0.011C7.866,3.076,7.784,3.081,7.7,3.089S7.567,3.1,7.5,3.112s-0.137.016-.2,0.026-0.149.023-.223,0.035L6.9,3.2c-0.08.015-.16,0.032-0.239,0.049l-0.145.034c-0.086.02-.172,0.042-0.258,0.064l-0.09.026a8.281,8.281,0,0,0-.931.325l-0.063.026c-0.027.011-.055,0.021-0.082,0.033a7.571,7.571,0,0,1,5.842-2.633c3.95,0,7.164,2.8,7.164,6.243A5.659,5.659,0,0,1,16.919,10.8a0.286,0.286,0,0,0-.057.2,8.246,8.246,0,0,0,.844,3.246A14.167,14.167,0,0,1,15.138,13.473Z"
                                            />
                                        </svg>
                                    </span>
                                    <span>450</span>
                                </div>
                                <div class="pe_fashion_cmt">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18">
                                            <defs>
                                                <style>
                                                    .cls-1 {
                                                        fill: #fff;
                                                        fill-rule: evenodd;
                                                    }
                                                </style>
                                            </defs>
                                            <path
                                                data-name="Forma 1"
                                                class="cls-1"
                                                d="M14.54,0.537A6.48,6.48,0,0,0,9.952,2.429,6.48,6.48,0,0,0,5.365.537C2.218,0.537,0,3.235,0,6.419,0,11.342,5.073,15.1,9.6,17.348a0.8,0.8,0,0,0,.711,0c4.526-2.245,9.6-6,9.6-10.929C19.9,3.241,17.692.537,14.54,0.537Zm-4.587,15.3c-3.815-1.947-8.4-5.274-8.4-9.415,0-2.28,1.479-4.38,3.81-4.38A4.949,4.949,0,0,1,9.3,4a0.788,0.788,0,0,0,1.306,0A4.958,4.958,0,0,1,14.54,2.039c2.332,0,3.81,2.1,3.81,4.38C18.349,10.558,13.759,13.891,9.952,15.834Z"
                                            />
                                        </svg>
                                    </span>
                                    <span>150</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="pe_fashion_img_section">
                            <div class="pe_fashion_img"><img src="http://placehold.it/576x278" alt="images" /></div>
                            <div class="pe_fashion_img_overlay">
                                <div class="pe_fashion_like">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18">
                                            <defs>
                                                <style>
                                                    .cls-1 {
                                                        fill: #fff;
                                                        stroke: #fff;
                                                        stroke-width: 0.6px;
                                                        fill-rule: evenodd;
                                                    }
                                                </style>
                                            </defs>
                                            <path
                                                data-name="Forma 1"
                                                class="cls-1"
                                                d="M17.466,11.053a6.215,6.215,0,0,0,1.226-3.682c0-3.764-3.481-6.826-7.761-6.826A7.963,7.963,0,0,0,3.963,4.368,6.6,6.6,0,0,0,.783,9.874a6.211,6.211,0,0,0,1.226,3.681,5.724,5.724,0,0,1-1.138,3.4,0.287,0.287,0,0,0-.056.337,0.3,0.3,0,0,0,.267.161,0.27,0.27,0,0,0,.042,0A14.087,14.087,0,0,0,5.4,16.114a8.608,8.608,0,0,0,3.147.586,8.144,8.144,0,0,0,6.223-2.752,15.326,15.326,0,0,0,3.585,1l0.042,0a0.3,0.3,0,0,0,.267-0.161,0.287,0.287,0,0,0-.056-0.336A5.718,5.718,0,0,1,17.466,11.053ZM8.543,16.117a8.029,8.029,0,0,1-2.5-.393c1-.609,1-0.657,1-0.822A0.3,0.3,0,0,0,6.9,14.651a0.3,0.3,0,0,0-.4.079c-0.147.112-.747,0.488-1.282,0.81h0a12.025,12.025,0,0,1-3.45,1.2A8.265,8.265,0,0,0,2.613,13.5a0.286,0.286,0,0,0-.057-0.2A5.659,5.659,0,0,1,1.38,9.874a6.047,6.047,0,0,1,3.037-5.1c0.117-.072.235-0.141,0.356-0.207L4.85,4.527C4.976,4.46,5.1,4.4,5.235,4.34l0.141-.063q0.2-.086.4-0.16c0.047-.018.1-0.033,0.144-0.05q0.158-.054.319-0.1c0.05-.015.1-0.031,0.152-0.045q0.209-.058.423-0.1l0.154-.031c0.126-.024.252-0.046,0.379-0.065l0.1-.015c0.156-.021.313-0.036,0.47-0.048l0.133-.008c0.16-.01.321-0.017,0.483-0.017H8.544c3.7,0,6.759,2.462,7.127,5.605a5.664,5.664,0,0,1,.036.638c0,0.141-.007.281-0.018,0.42,0,0.037-.006.073-0.01,0.11-0.012.129-.028,0.258-0.05,0.385,0,0.011,0,.022,0,0.033-0.023.133-.053,0.265-0.087,0.4-0.01.04-.021,0.08-0.032,0.12-0.032.116-.067,0.231-0.107,0.344-0.01.03-.021,0.059-0.031,0.088-0.041.111-.086,0.222-0.134,0.331-0.019.043-.039,0.087-0.059,0.129-0.054.114-.11,0.228-0.172,0.339-0.017.032-.036,0.063-0.055,0.094q-0.081.14-.17,0.277c-0.026.04-.052,0.08-0.079,0.12-0.074.107-.15,0.214-0.232,0.318A7.5,7.5,0,0,1,8.543,16.117Zm6.595-2.644c0.013-.018.024-0.038,0.036-0.056,0.069-.1.134-0.2,0.2-0.3,0.037-.059.071-0.121,0.106-0.181s0.071-.125.1-0.188,0.064-.122.095-0.183c0.043-.088.084-0.178,0.123-0.268,0.031-.072.06-0.145,0.089-0.218s0.062-.163.09-0.246c0.019-.056.037-0.112,0.054-0.168,0.028-.091.054-0.183,0.078-0.275,0.011-.042.023-0.083,0.033-0.125,0.031-.131.057-0.263,0.079-0.4,0.007-.042.012-0.083,0.018-0.124,0.015-.1.027-0.208,0.037-0.314,0-.042.008-0.084,0.011-0.127,0.01-.141.017-0.283,0.017-0.427,0-3.764-3.481-6.826-7.761-6.826H8.494c-0.125,0-.249,0-0.373.009-0.058,0-.115.008-0.173,0.011C7.866,3.076,7.784,3.081,7.7,3.089S7.567,3.1,7.5,3.112s-0.137.016-.2,0.026-0.149.023-.223,0.035L6.9,3.2c-0.08.015-.16,0.032-0.239,0.049l-0.145.034c-0.086.02-.172,0.042-0.258,0.064l-0.09.026a8.281,8.281,0,0,0-.931.325l-0.063.026c-0.027.011-.055,0.021-0.082,0.033a7.571,7.571,0,0,1,5.842-2.633c3.95,0,7.164,2.8,7.164,6.243A5.659,5.659,0,0,1,16.919,10.8a0.286,0.286,0,0,0-.057.2,8.246,8.246,0,0,0,.844,3.246A14.167,14.167,0,0,1,15.138,13.473Z"
                                            />
                                        </svg>
                                    </span>
                                    <span>450</span>
                                </div>
                                <div class="pe_fashion_cmt">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18">
                                            <defs>
                                                <style>
                                                    .cls-1 {
                                                        fill: #fff;
                                                        fill-rule: evenodd;
                                                    }
                                                </style>
                                            </defs>
                                            <path
                                                data-name="Forma 1"
                                                class="cls-1"
                                                d="M14.54,0.537A6.48,6.48,0,0,0,9.952,2.429,6.48,6.48,0,0,0,5.365.537C2.218,0.537,0,3.235,0,6.419,0,11.342,5.073,15.1,9.6,17.348a0.8,0.8,0,0,0,.711,0c4.526-2.245,9.6-6,9.6-10.929C19.9,3.241,17.692.537,14.54,0.537Zm-4.587,15.3c-3.815-1.947-8.4-5.274-8.4-9.415,0-2.28,1.479-4.38,3.81-4.38A4.949,4.949,0,0,1,9.3,4a0.788,0.788,0,0,0,1.306,0A4.958,4.958,0,0,1,14.54,2.039c2.332,0,3.81,2.1,3.81,4.38C18.349,10.558,13.759,13.891,9.952,15.834Z"
                                            />
                                        </svg>
                                    </span>
                                    <span>150</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="pe_fashion_img_section">
                            <div class="pe_fashion_img"><img src="http://placehold.it/576x278" alt="images" /></div>
                            <div class="pe_fashion_img_overlay">
                                <div class="pe_fashion_like">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18">
                                            <defs>
                                                <style>
                                                    .cls-1 {
                                                        fill: #fff;
                                                        stroke: #fff;
                                                        stroke-width: 0.6px;
                                                        fill-rule: evenodd;
                                                    }
                                                </style>
                                            </defs>
                                            <path
                                                data-name="Forma 1"
                                                class="cls-1"
                                                d="M17.466,11.053a6.215,6.215,0,0,0,1.226-3.682c0-3.764-3.481-6.826-7.761-6.826A7.963,7.963,0,0,0,3.963,4.368,6.6,6.6,0,0,0,.783,9.874a6.211,6.211,0,0,0,1.226,3.681,5.724,5.724,0,0,1-1.138,3.4,0.287,0.287,0,0,0-.056.337,0.3,0.3,0,0,0,.267.161,0.27,0.27,0,0,0,.042,0A14.087,14.087,0,0,0,5.4,16.114a8.608,8.608,0,0,0,3.147.586,8.144,8.144,0,0,0,6.223-2.752,15.326,15.326,0,0,0,3.585,1l0.042,0a0.3,0.3,0,0,0,.267-0.161,0.287,0.287,0,0,0-.056-0.336A5.718,5.718,0,0,1,17.466,11.053ZM8.543,16.117a8.029,8.029,0,0,1-2.5-.393c1-.609,1-0.657,1-0.822A0.3,0.3,0,0,0,6.9,14.651a0.3,0.3,0,0,0-.4.079c-0.147.112-.747,0.488-1.282,0.81h0a12.025,12.025,0,0,1-3.45,1.2A8.265,8.265,0,0,0,2.613,13.5a0.286,0.286,0,0,0-.057-0.2A5.659,5.659,0,0,1,1.38,9.874a6.047,6.047,0,0,1,3.037-5.1c0.117-.072.235-0.141,0.356-0.207L4.85,4.527C4.976,4.46,5.1,4.4,5.235,4.34l0.141-.063q0.2-.086.4-0.16c0.047-.018.1-0.033,0.144-0.05q0.158-.054.319-0.1c0.05-.015.1-0.031,0.152-0.045q0.209-.058.423-0.1l0.154-.031c0.126-.024.252-0.046,0.379-0.065l0.1-.015c0.156-.021.313-0.036,0.47-0.048l0.133-.008c0.16-.01.321-0.017,0.483-0.017H8.544c3.7,0,6.759,2.462,7.127,5.605a5.664,5.664,0,0,1,.036.638c0,0.141-.007.281-0.018,0.42,0,0.037-.006.073-0.01,0.11-0.012.129-.028,0.258-0.05,0.385,0,0.011,0,.022,0,0.033-0.023.133-.053,0.265-0.087,0.4-0.01.04-.021,0.08-0.032,0.12-0.032.116-.067,0.231-0.107,0.344-0.01.03-.021,0.059-0.031,0.088-0.041.111-.086,0.222-0.134,0.331-0.019.043-.039,0.087-0.059,0.129-0.054.114-.11,0.228-0.172,0.339-0.017.032-.036,0.063-0.055,0.094q-0.081.14-.17,0.277c-0.026.04-.052,0.08-0.079,0.12-0.074.107-.15,0.214-0.232,0.318A7.5,7.5,0,0,1,8.543,16.117Zm6.595-2.644c0.013-.018.024-0.038,0.036-0.056,0.069-.1.134-0.2,0.2-0.3,0.037-.059.071-0.121,0.106-0.181s0.071-.125.1-0.188,0.064-.122.095-0.183c0.043-.088.084-0.178,0.123-0.268,0.031-.072.06-0.145,0.089-0.218s0.062-.163.09-0.246c0.019-.056.037-0.112,0.054-0.168,0.028-.091.054-0.183,0.078-0.275,0.011-.042.023-0.083,0.033-0.125,0.031-.131.057-0.263,0.079-0.4,0.007-.042.012-0.083,0.018-0.124,0.015-.1.027-0.208,0.037-0.314,0-.042.008-0.084,0.011-0.127,0.01-.141.017-0.283,0.017-0.427,0-3.764-3.481-6.826-7.761-6.826H8.494c-0.125,0-.249,0-0.373.009-0.058,0-.115.008-0.173,0.011C7.866,3.076,7.784,3.081,7.7,3.089S7.567,3.1,7.5,3.112s-0.137.016-.2,0.026-0.149.023-.223,0.035L6.9,3.2c-0.08.015-.16,0.032-0.239,0.049l-0.145.034c-0.086.02-.172,0.042-0.258,0.064l-0.09.026a8.281,8.281,0,0,0-.931.325l-0.063.026c-0.027.011-.055,0.021-0.082,0.033a7.571,7.571,0,0,1,5.842-2.633c3.95,0,7.164,2.8,7.164,6.243A5.659,5.659,0,0,1,16.919,10.8a0.286,0.286,0,0,0-.057.2,8.246,8.246,0,0,0,.844,3.246A14.167,14.167,0,0,1,15.138,13.473Z"
                                            />
                                        </svg>
                                    </span>
                                    <span>450</span>
                                </div>
                                <div class="pe_fashion_cmt">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18">
                                            <defs>
                                                <style>
                                                    .cls-1 {
                                                        fill: #fff;
                                                        fill-rule: evenodd;
                                                    }
                                                </style>
                                            </defs>
                                            <path
                                                data-name="Forma 1"
                                                class="cls-1"
                                                d="M14.54,0.537A6.48,6.48,0,0,0,9.952,2.429,6.48,6.48,0,0,0,5.365.537C2.218,0.537,0,3.235,0,6.419,0,11.342,5.073,15.1,9.6,17.348a0.8,0.8,0,0,0,.711,0c4.526-2.245,9.6-6,9.6-10.929C19.9,3.241,17.692.537,14.54,0.537Zm-4.587,15.3c-3.815-1.947-8.4-5.274-8.4-9.415,0-2.28,1.479-4.38,3.81-4.38A4.949,4.949,0,0,1,9.3,4a0.788,0.788,0,0,0,1.306,0A4.958,4.958,0,0,1,14.54,2.039c2.332,0,3.81,2.1,3.81,4.38C18.349,10.558,13.759,13.891,9.952,15.834Z"
                                            />
                                        </svg>
                                    </span>
                                    <span>150</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="pe_fashion_img_section">
                            <div class="pe_fashion_img"><img src="http://placehold.it/576x278" alt="images" /></div>
                            <div class="pe_fashion_img_overlay">
                                <div class="pe_fashion_like">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18">
                                            <defs>
                                                <style>
                                                    .cls-1 {
                                                        fill: #fff;
                                                        stroke: #fff;
                                                        stroke-width: 0.6px;
                                                        fill-rule: evenodd;
                                                    }
                                                </style>
                                            </defs>
                                            <path
                                                data-name="Forma 1"
                                                class="cls-1"
                                                d="M17.466,11.053a6.215,6.215,0,0,0,1.226-3.682c0-3.764-3.481-6.826-7.761-6.826A7.963,7.963,0,0,0,3.963,4.368,6.6,6.6,0,0,0,.783,9.874a6.211,6.211,0,0,0,1.226,3.681,5.724,5.724,0,0,1-1.138,3.4,0.287,0.287,0,0,0-.056.337,0.3,0.3,0,0,0,.267.161,0.27,0.27,0,0,0,.042,0A14.087,14.087,0,0,0,5.4,16.114a8.608,8.608,0,0,0,3.147.586,8.144,8.144,0,0,0,6.223-2.752,15.326,15.326,0,0,0,3.585,1l0.042,0a0.3,0.3,0,0,0,.267-0.161,0.287,0.287,0,0,0-.056-0.336A5.718,5.718,0,0,1,17.466,11.053ZM8.543,16.117a8.029,8.029,0,0,1-2.5-.393c1-.609,1-0.657,1-0.822A0.3,0.3,0,0,0,6.9,14.651a0.3,0.3,0,0,0-.4.079c-0.147.112-.747,0.488-1.282,0.81h0a12.025,12.025,0,0,1-3.45,1.2A8.265,8.265,0,0,0,2.613,13.5a0.286,0.286,0,0,0-.057-0.2A5.659,5.659,0,0,1,1.38,9.874a6.047,6.047,0,0,1,3.037-5.1c0.117-.072.235-0.141,0.356-0.207L4.85,4.527C4.976,4.46,5.1,4.4,5.235,4.34l0.141-.063q0.2-.086.4-0.16c0.047-.018.1-0.033,0.144-0.05q0.158-.054.319-0.1c0.05-.015.1-0.031,0.152-0.045q0.209-.058.423-0.1l0.154-.031c0.126-.024.252-0.046,0.379-0.065l0.1-.015c0.156-.021.313-0.036,0.47-0.048l0.133-.008c0.16-.01.321-0.017,0.483-0.017H8.544c3.7,0,6.759,2.462,7.127,5.605a5.664,5.664,0,0,1,.036.638c0,0.141-.007.281-0.018,0.42,0,0.037-.006.073-0.01,0.11-0.012.129-.028,0.258-0.05,0.385,0,0.011,0,.022,0,0.033-0.023.133-.053,0.265-0.087,0.4-0.01.04-.021,0.08-0.032,0.12-0.032.116-.067,0.231-0.107,0.344-0.01.03-.021,0.059-0.031,0.088-0.041.111-.086,0.222-0.134,0.331-0.019.043-.039,0.087-0.059,0.129-0.054.114-.11,0.228-0.172,0.339-0.017.032-.036,0.063-0.055,0.094q-0.081.14-.17,0.277c-0.026.04-.052,0.08-0.079,0.12-0.074.107-.15,0.214-0.232,0.318A7.5,7.5,0,0,1,8.543,16.117Zm6.595-2.644c0.013-.018.024-0.038,0.036-0.056,0.069-.1.134-0.2,0.2-0.3,0.037-.059.071-0.121,0.106-0.181s0.071-.125.1-0.188,0.064-.122.095-0.183c0.043-.088.084-0.178,0.123-0.268,0.031-.072.06-0.145,0.089-0.218s0.062-.163.09-0.246c0.019-.056.037-0.112,0.054-0.168,0.028-.091.054-0.183,0.078-0.275,0.011-.042.023-0.083,0.033-0.125,0.031-.131.057-0.263,0.079-0.4,0.007-.042.012-0.083,0.018-0.124,0.015-.1.027-0.208,0.037-0.314,0-.042.008-0.084,0.011-0.127,0.01-.141.017-0.283,0.017-0.427,0-3.764-3.481-6.826-7.761-6.826H8.494c-0.125,0-.249,0-0.373.009-0.058,0-.115.008-0.173,0.011C7.866,3.076,7.784,3.081,7.7,3.089S7.567,3.1,7.5,3.112s-0.137.016-.2,0.026-0.149.023-.223,0.035L6.9,3.2c-0.08.015-.16,0.032-0.239,0.049l-0.145.034c-0.086.02-.172,0.042-0.258,0.064l-0.09.026a8.281,8.281,0,0,0-.931.325l-0.063.026c-0.027.011-.055,0.021-0.082,0.033a7.571,7.571,0,0,1,5.842-2.633c3.95,0,7.164,2.8,7.164,6.243A5.659,5.659,0,0,1,16.919,10.8a0.286,0.286,0,0,0-.057.2,8.246,8.246,0,0,0,.844,3.246A14.167,14.167,0,0,1,15.138,13.473Z"
                                            />
                                        </svg>
                                    </span>
                                    <span>450</span>
                                </div>
                                <div class="pe_fashion_cmt">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18">
                                            <defs>
                                                <style>
                                                    .cls-1 {
                                                        fill: #fff;
                                                        fill-rule: evenodd;
                                                    }
                                                </style>
                                            </defs>
                                            <path
                                                data-name="Forma 1"
                                                class="cls-1"
                                                d="M14.54,0.537A6.48,6.48,0,0,0,9.952,2.429,6.48,6.48,0,0,0,5.365.537C2.218,0.537,0,3.235,0,6.419,0,11.342,5.073,15.1,9.6,17.348a0.8,0.8,0,0,0,.711,0c4.526-2.245,9.6-6,9.6-10.929C19.9,3.241,17.692.537,14.54,0.537Zm-4.587,15.3c-3.815-1.947-8.4-5.274-8.4-9.415,0-2.28,1.479-4.38,3.81-4.38A4.949,4.949,0,0,1,9.3,4a0.788,0.788,0,0,0,1.306,0A4.958,4.958,0,0,1,14.54,2.039c2.332,0,3.81,2.1,3.81,4.38C18.349,10.558,13.759,13.891,9.952,15.834Z"
                                            />
                                        </svg>
                                    </span>
                                    <span>150</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="pe_fashion_img_section">
                            <div class="pe_fashion_img"><img src="http://placehold.it/576x278" alt="images" /></div>
                            <div class="pe_fashion_img_overlay">
                                <div class="pe_fashion_like">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18">
                                            <defs>
                                                <style>
                                                    .cls-1 {
                                                        fill: #fff;
                                                        stroke: #fff;
                                                        stroke-width: 0.6px;
                                                        fill-rule: evenodd;
                                                    }
                                                </style>
                                            </defs>
                                            <path
                                                data-name="Forma 1"
                                                class="cls-1"
                                                d="M17.466,11.053a6.215,6.215,0,0,0,1.226-3.682c0-3.764-3.481-6.826-7.761-6.826A7.963,7.963,0,0,0,3.963,4.368,6.6,6.6,0,0,0,.783,9.874a6.211,6.211,0,0,0,1.226,3.681,5.724,5.724,0,0,1-1.138,3.4,0.287,0.287,0,0,0-.056.337,0.3,0.3,0,0,0,.267.161,0.27,0.27,0,0,0,.042,0A14.087,14.087,0,0,0,5.4,16.114a8.608,8.608,0,0,0,3.147.586,8.144,8.144,0,0,0,6.223-2.752,15.326,15.326,0,0,0,3.585,1l0.042,0a0.3,0.3,0,0,0,.267-0.161,0.287,0.287,0,0,0-.056-0.336A5.718,5.718,0,0,1,17.466,11.053ZM8.543,16.117a8.029,8.029,0,0,1-2.5-.393c1-.609,1-0.657,1-0.822A0.3,0.3,0,0,0,6.9,14.651a0.3,0.3,0,0,0-.4.079c-0.147.112-.747,0.488-1.282,0.81h0a12.025,12.025,0,0,1-3.45,1.2A8.265,8.265,0,0,0,2.613,13.5a0.286,0.286,0,0,0-.057-0.2A5.659,5.659,0,0,1,1.38,9.874a6.047,6.047,0,0,1,3.037-5.1c0.117-.072.235-0.141,0.356-0.207L4.85,4.527C4.976,4.46,5.1,4.4,5.235,4.34l0.141-.063q0.2-.086.4-0.16c0.047-.018.1-0.033,0.144-0.05q0.158-.054.319-0.1c0.05-.015.1-0.031,0.152-0.045q0.209-.058.423-0.1l0.154-.031c0.126-.024.252-0.046,0.379-0.065l0.1-.015c0.156-.021.313-0.036,0.47-0.048l0.133-.008c0.16-.01.321-0.017,0.483-0.017H8.544c3.7,0,6.759,2.462,7.127,5.605a5.664,5.664,0,0,1,.036.638c0,0.141-.007.281-0.018,0.42,0,0.037-.006.073-0.01,0.11-0.012.129-.028,0.258-0.05,0.385,0,0.011,0,.022,0,0.033-0.023.133-.053,0.265-0.087,0.4-0.01.04-.021,0.08-0.032,0.12-0.032.116-.067,0.231-0.107,0.344-0.01.03-.021,0.059-0.031,0.088-0.041.111-.086,0.222-0.134,0.331-0.019.043-.039,0.087-0.059,0.129-0.054.114-.11,0.228-0.172,0.339-0.017.032-.036,0.063-0.055,0.094q-0.081.14-.17,0.277c-0.026.04-.052,0.08-0.079,0.12-0.074.107-.15,0.214-0.232,0.318A7.5,7.5,0,0,1,8.543,16.117Zm6.595-2.644c0.013-.018.024-0.038,0.036-0.056,0.069-.1.134-0.2,0.2-0.3,0.037-.059.071-0.121,0.106-0.181s0.071-.125.1-0.188,0.064-.122.095-0.183c0.043-.088.084-0.178,0.123-0.268,0.031-.072.06-0.145,0.089-0.218s0.062-.163.09-0.246c0.019-.056.037-0.112,0.054-0.168,0.028-.091.054-0.183,0.078-0.275,0.011-.042.023-0.083,0.033-0.125,0.031-.131.057-0.263,0.079-0.4,0.007-.042.012-0.083,0.018-0.124,0.015-.1.027-0.208,0.037-0.314,0-.042.008-0.084,0.011-0.127,0.01-.141.017-0.283,0.017-0.427,0-3.764-3.481-6.826-7.761-6.826H8.494c-0.125,0-.249,0-0.373.009-0.058,0-.115.008-0.173,0.011C7.866,3.076,7.784,3.081,7.7,3.089S7.567,3.1,7.5,3.112s-0.137.016-.2,0.026-0.149.023-.223,0.035L6.9,3.2c-0.08.015-.16,0.032-0.239,0.049l-0.145.034c-0.086.02-.172,0.042-0.258,0.064l-0.09.026a8.281,8.281,0,0,0-.931.325l-0.063.026c-0.027.011-.055,0.021-0.082,0.033a7.571,7.571,0,0,1,5.842-2.633c3.95,0,7.164,2.8,7.164,6.243A5.659,5.659,0,0,1,16.919,10.8a0.286,0.286,0,0,0-.057.2,8.246,8.246,0,0,0,.844,3.246A14.167,14.167,0,0,1,15.138,13.473Z"
                                            />
                                        </svg>
                                    </span>
                                    <span>450</span>
                                </div>
                                <div class="pe_fashion_cmt">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18">
                                            <defs>
                                                <style>
                                                    .cls-1 {
                                                        fill: #fff;
                                                        fill-rule: evenodd;
                                                    }
                                                </style>
                                            </defs>
                                            <path
                                                data-name="Forma 1"
                                                class="cls-1"
                                                d="M14.54,0.537A6.48,6.48,0,0,0,9.952,2.429,6.48,6.48,0,0,0,5.365.537C2.218,0.537,0,3.235,0,6.419,0,11.342,5.073,15.1,9.6,17.348a0.8,0.8,0,0,0,.711,0c4.526-2.245,9.6-6,9.6-10.929C19.9,3.241,17.692.537,14.54,0.537Zm-4.587,15.3c-3.815-1.947-8.4-5.274-8.4-9.415,0-2.28,1.479-4.38,3.81-4.38A4.949,4.949,0,0,1,9.3,4a0.788,0.788,0,0,0,1.306,0A4.958,4.958,0,0,1,14.54,2.039c2.332,0,3.81,2.1,3.81,4.38C18.349,10.558,13.759,13.891,9.952,15.834Z"
                                            />
                                        </svg>
                                    </span>
                                    <span>150</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="pe_fashion_img_section">
                            <div class="pe_fashion_img"><img src="http://placehold.it/576x278" alt="images" /></div>
                            <div class="pe_fashion_img_overlay">
                                <div class="pe_fashion_like">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18">
                                            <defs>
                                                <style>
                                                    .cls-1 {
                                                        fill: #fff;
                                                        stroke: #fff;
                                                        stroke-width: 0.6px;
                                                        fill-rule: evenodd;
                                                    }
                                                </style>
                                            </defs>
                                            <path
                                                data-name="Forma 1"
                                                class="cls-1"
                                                d="M17.466,11.053a6.215,6.215,0,0,0,1.226-3.682c0-3.764-3.481-6.826-7.761-6.826A7.963,7.963,0,0,0,3.963,4.368,6.6,6.6,0,0,0,.783,9.874a6.211,6.211,0,0,0,1.226,3.681,5.724,5.724,0,0,1-1.138,3.4,0.287,0.287,0,0,0-.056.337,0.3,0.3,0,0,0,.267.161,0.27,0.27,0,0,0,.042,0A14.087,14.087,0,0,0,5.4,16.114a8.608,8.608,0,0,0,3.147.586,8.144,8.144,0,0,0,6.223-2.752,15.326,15.326,0,0,0,3.585,1l0.042,0a0.3,0.3,0,0,0,.267-0.161,0.287,0.287,0,0,0-.056-0.336A5.718,5.718,0,0,1,17.466,11.053ZM8.543,16.117a8.029,8.029,0,0,1-2.5-.393c1-.609,1-0.657,1-0.822A0.3,0.3,0,0,0,6.9,14.651a0.3,0.3,0,0,0-.4.079c-0.147.112-.747,0.488-1.282,0.81h0a12.025,12.025,0,0,1-3.45,1.2A8.265,8.265,0,0,0,2.613,13.5a0.286,0.286,0,0,0-.057-0.2A5.659,5.659,0,0,1,1.38,9.874a6.047,6.047,0,0,1,3.037-5.1c0.117-.072.235-0.141,0.356-0.207L4.85,4.527C4.976,4.46,5.1,4.4,5.235,4.34l0.141-.063q0.2-.086.4-0.16c0.047-.018.1-0.033,0.144-0.05q0.158-.054.319-0.1c0.05-.015.1-0.031,0.152-0.045q0.209-.058.423-0.1l0.154-.031c0.126-.024.252-0.046,0.379-0.065l0.1-.015c0.156-.021.313-0.036,0.47-0.048l0.133-.008c0.16-.01.321-0.017,0.483-0.017H8.544c3.7,0,6.759,2.462,7.127,5.605a5.664,5.664,0,0,1,.036.638c0,0.141-.007.281-0.018,0.42,0,0.037-.006.073-0.01,0.11-0.012.129-.028,0.258-0.05,0.385,0,0.011,0,.022,0,0.033-0.023.133-.053,0.265-0.087,0.4-0.01.04-.021,0.08-0.032,0.12-0.032.116-.067,0.231-0.107,0.344-0.01.03-.021,0.059-0.031,0.088-0.041.111-.086,0.222-0.134,0.331-0.019.043-.039,0.087-0.059,0.129-0.054.114-.11,0.228-0.172,0.339-0.017.032-.036,0.063-0.055,0.094q-0.081.14-.17,0.277c-0.026.04-.052,0.08-0.079,0.12-0.074.107-.15,0.214-0.232,0.318A7.5,7.5,0,0,1,8.543,16.117Zm6.595-2.644c0.013-.018.024-0.038,0.036-0.056,0.069-.1.134-0.2,0.2-0.3,0.037-.059.071-0.121,0.106-0.181s0.071-.125.1-0.188,0.064-.122.095-0.183c0.043-.088.084-0.178,0.123-0.268,0.031-.072.06-0.145,0.089-0.218s0.062-.163.09-0.246c0.019-.056.037-0.112,0.054-0.168,0.028-.091.054-0.183,0.078-0.275,0.011-.042.023-0.083,0.033-0.125,0.031-.131.057-0.263,0.079-0.4,0.007-.042.012-0.083,0.018-0.124,0.015-.1.027-0.208,0.037-0.314,0-.042.008-0.084,0.011-0.127,0.01-.141.017-0.283,0.017-0.427,0-3.764-3.481-6.826-7.761-6.826H8.494c-0.125,0-.249,0-0.373.009-0.058,0-.115.008-0.173,0.011C7.866,3.076,7.784,3.081,7.7,3.089S7.567,3.1,7.5,3.112s-0.137.016-.2,0.026-0.149.023-.223,0.035L6.9,3.2c-0.08.015-.16,0.032-0.239,0.049l-0.145.034c-0.086.02-.172,0.042-0.258,0.064l-0.09.026a8.281,8.281,0,0,0-.931.325l-0.063.026c-0.027.011-.055,0.021-0.082,0.033a7.571,7.571,0,0,1,5.842-2.633c3.95,0,7.164,2.8,7.164,6.243A5.659,5.659,0,0,1,16.919,10.8a0.286,0.286,0,0,0-.057.2,8.246,8.246,0,0,0,.844,3.246A14.167,14.167,0,0,1,15.138,13.473Z"
                                            />
                                        </svg>
                                    </span>
                                    <span>450</span>
                                </div>
                                <div class="pe_fashion_cmt">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18">
                                            <defs>
                                                <style>
                                                    .cls-1 {
                                                        fill: #fff;
                                                        fill-rule: evenodd;
                                                    }
                                                </style>
                                            </defs>
                                            <path
                                                data-name="Forma 1"
                                                class="cls-1"
                                                d="M14.54,0.537A6.48,6.48,0,0,0,9.952,2.429,6.48,6.48,0,0,0,5.365.537C2.218,0.537,0,3.235,0,6.419,0,11.342,5.073,15.1,9.6,17.348a0.8,0.8,0,0,0,.711,0c4.526-2.245,9.6-6,9.6-10.929C19.9,3.241,17.692.537,14.54,0.537Zm-4.587,15.3c-3.815-1.947-8.4-5.274-8.4-9.415,0-2.28,1.479-4.38,3.81-4.38A4.949,4.949,0,0,1,9.3,4a0.788,0.788,0,0,0,1.306,0A4.958,4.958,0,0,1,14.54,2.039c2.332,0,3.81,2.1,3.81,4.38C18.349,10.558,13.759,13.891,9.952,15.834Z"
                                            />
                                        </svg>
                                    </span>
                                    <span>150</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="pe_fashion_img_section">
                            <div class="pe_fashion_img"><img src="http://placehold.it/576x278" alt="images" /></div>
                            <div class="pe_fashion_img_overlay">
                                <div class="pe_fashion_like">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18">
                                            <defs>
                                                <style>
                                                    .cls-1 {
                                                        fill: #fff;
                                                        stroke: #fff;
                                                        stroke-width: 0.6px;
                                                        fill-rule: evenodd;
                                                    }
                                                </style>
                                            </defs>
                                            <path
                                                data-name="Forma 1"
                                                class="cls-1"
                                                d="M17.466,11.053a6.215,6.215,0,0,0,1.226-3.682c0-3.764-3.481-6.826-7.761-6.826A7.963,7.963,0,0,0,3.963,4.368,6.6,6.6,0,0,0,.783,9.874a6.211,6.211,0,0,0,1.226,3.681,5.724,5.724,0,0,1-1.138,3.4,0.287,0.287,0,0,0-.056.337,0.3,0.3,0,0,0,.267.161,0.27,0.27,0,0,0,.042,0A14.087,14.087,0,0,0,5.4,16.114a8.608,8.608,0,0,0,3.147.586,8.144,8.144,0,0,0,6.223-2.752,15.326,15.326,0,0,0,3.585,1l0.042,0a0.3,0.3,0,0,0,.267-0.161,0.287,0.287,0,0,0-.056-0.336A5.718,5.718,0,0,1,17.466,11.053ZM8.543,16.117a8.029,8.029,0,0,1-2.5-.393c1-.609,1-0.657,1-0.822A0.3,0.3,0,0,0,6.9,14.651a0.3,0.3,0,0,0-.4.079c-0.147.112-.747,0.488-1.282,0.81h0a12.025,12.025,0,0,1-3.45,1.2A8.265,8.265,0,0,0,2.613,13.5a0.286,0.286,0,0,0-.057-0.2A5.659,5.659,0,0,1,1.38,9.874a6.047,6.047,0,0,1,3.037-5.1c0.117-.072.235-0.141,0.356-0.207L4.85,4.527C4.976,4.46,5.1,4.4,5.235,4.34l0.141-.063q0.2-.086.4-0.16c0.047-.018.1-0.033,0.144-0.05q0.158-.054.319-0.1c0.05-.015.1-0.031,0.152-0.045q0.209-.058.423-0.1l0.154-.031c0.126-.024.252-0.046,0.379-0.065l0.1-.015c0.156-.021.313-0.036,0.47-0.048l0.133-.008c0.16-.01.321-0.017,0.483-0.017H8.544c3.7,0,6.759,2.462,7.127,5.605a5.664,5.664,0,0,1,.036.638c0,0.141-.007.281-0.018,0.42,0,0.037-.006.073-0.01,0.11-0.012.129-.028,0.258-0.05,0.385,0,0.011,0,.022,0,0.033-0.023.133-.053,0.265-0.087,0.4-0.01.04-.021,0.08-0.032,0.12-0.032.116-.067,0.231-0.107,0.344-0.01.03-.021,0.059-0.031,0.088-0.041.111-.086,0.222-0.134,0.331-0.019.043-.039,0.087-0.059,0.129-0.054.114-.11,0.228-0.172,0.339-0.017.032-.036,0.063-0.055,0.094q-0.081.14-.17,0.277c-0.026.04-.052,0.08-0.079,0.12-0.074.107-.15,0.214-0.232,0.318A7.5,7.5,0,0,1,8.543,16.117Zm6.595-2.644c0.013-.018.024-0.038,0.036-0.056,0.069-.1.134-0.2,0.2-0.3,0.037-.059.071-0.121,0.106-0.181s0.071-.125.1-0.188,0.064-.122.095-0.183c0.043-.088.084-0.178,0.123-0.268,0.031-.072.06-0.145,0.089-0.218s0.062-.163.09-0.246c0.019-.056.037-0.112,0.054-0.168,0.028-.091.054-0.183,0.078-0.275,0.011-.042.023-0.083,0.033-0.125,0.031-.131.057-0.263,0.079-0.4,0.007-.042.012-0.083,0.018-0.124,0.015-.1.027-0.208,0.037-0.314,0-.042.008-0.084,0.011-0.127,0.01-.141.017-0.283,0.017-0.427,0-3.764-3.481-6.826-7.761-6.826H8.494c-0.125,0-.249,0-0.373.009-0.058,0-.115.008-0.173,0.011C7.866,3.076,7.784,3.081,7.7,3.089S7.567,3.1,7.5,3.112s-0.137.016-.2,0.026-0.149.023-.223,0.035L6.9,3.2c-0.08.015-.16,0.032-0.239,0.049l-0.145.034c-0.086.02-.172,0.042-0.258,0.064l-0.09.026a8.281,8.281,0,0,0-.931.325l-0.063.026c-0.027.011-.055,0.021-0.082,0.033a7.571,7.571,0,0,1,5.842-2.633c3.95,0,7.164,2.8,7.164,6.243A5.659,5.659,0,0,1,16.919,10.8a0.286,0.286,0,0,0-.057.2,8.246,8.246,0,0,0,.844,3.246A14.167,14.167,0,0,1,15.138,13.473Z"
                                            />
                                        </svg>
                                    </span>
                                    <span>450</span>
                                </div>
                                <div class="pe_fashion_cmt">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18">
                                            <defs>
                                                <style>
                                                    .cls-1 {
                                                        fill: #fff;
                                                        fill-rule: evenodd;
                                                    }
                                                </style>
                                            </defs>
                                            <path
                                                data-name="Forma 1"
                                                class="cls-1"
                                                d="M14.54,0.537A6.48,6.48,0,0,0,9.952,2.429,6.48,6.48,0,0,0,5.365.537C2.218,0.537,0,3.235,0,6.419,0,11.342,5.073,15.1,9.6,17.348a0.8,0.8,0,0,0,.711,0c4.526-2.245,9.6-6,9.6-10.929C19.9,3.241,17.692.537,14.54,0.537Zm-4.587,15.3c-3.815-1.947-8.4-5.274-8.4-9.415,0-2.28,1.479-4.38,3.81-4.38A4.949,4.949,0,0,1,9.3,4a0.788,0.788,0,0,0,1.306,0A4.958,4.958,0,0,1,14.54,2.039c2.332,0,3.81,2.1,3.81,4.38C18.349,10.558,13.759,13.891,9.952,15.834Z"
                                            />
                                        </svg>
                                    </span>
                                    <span>150</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="pe_fashion_img_section">
                            <div class="pe_fashion_img"><img src="http://placehold.it/576x278" alt="images" /></div>
                            <div class="pe_fashion_img_overlay">
                                <div class="pe_fashion_like">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18">
                                            <defs>
                                                <style>
                                                    .cls-1 {
                                                        fill: #fff;
                                                        stroke: #fff;
                                                        stroke-width: 0.6px;
                                                        fill-rule: evenodd;
                                                    }
                                                </style>
                                            </defs>
                                            <path
                                                data-name="Forma 1"
                                                class="cls-1"
                                                d="M17.466,11.053a6.215,6.215,0,0,0,1.226-3.682c0-3.764-3.481-6.826-7.761-6.826A7.963,7.963,0,0,0,3.963,4.368,6.6,6.6,0,0,0,.783,9.874a6.211,6.211,0,0,0,1.226,3.681,5.724,5.724,0,0,1-1.138,3.4,0.287,0.287,0,0,0-.056.337,0.3,0.3,0,0,0,.267.161,0.27,0.27,0,0,0,.042,0A14.087,14.087,0,0,0,5.4,16.114a8.608,8.608,0,0,0,3.147.586,8.144,8.144,0,0,0,6.223-2.752,15.326,15.326,0,0,0,3.585,1l0.042,0a0.3,0.3,0,0,0,.267-0.161,0.287,0.287,0,0,0-.056-0.336A5.718,5.718,0,0,1,17.466,11.053ZM8.543,16.117a8.029,8.029,0,0,1-2.5-.393c1-.609,1-0.657,1-0.822A0.3,0.3,0,0,0,6.9,14.651a0.3,0.3,0,0,0-.4.079c-0.147.112-.747,0.488-1.282,0.81h0a12.025,12.025,0,0,1-3.45,1.2A8.265,8.265,0,0,0,2.613,13.5a0.286,0.286,0,0,0-.057-0.2A5.659,5.659,0,0,1,1.38,9.874a6.047,6.047,0,0,1,3.037-5.1c0.117-.072.235-0.141,0.356-0.207L4.85,4.527C4.976,4.46,5.1,4.4,5.235,4.34l0.141-.063q0.2-.086.4-0.16c0.047-.018.1-0.033,0.144-0.05q0.158-.054.319-0.1c0.05-.015.1-0.031,0.152-0.045q0.209-.058.423-0.1l0.154-.031c0.126-.024.252-0.046,0.379-0.065l0.1-.015c0.156-.021.313-0.036,0.47-0.048l0.133-.008c0.16-.01.321-0.017,0.483-0.017H8.544c3.7,0,6.759,2.462,7.127,5.605a5.664,5.664,0,0,1,.036.638c0,0.141-.007.281-0.018,0.42,0,0.037-.006.073-0.01,0.11-0.012.129-.028,0.258-0.05,0.385,0,0.011,0,.022,0,0.033-0.023.133-.053,0.265-0.087,0.4-0.01.04-.021,0.08-0.032,0.12-0.032.116-.067,0.231-0.107,0.344-0.01.03-.021,0.059-0.031,0.088-0.041.111-.086,0.222-0.134,0.331-0.019.043-.039,0.087-0.059,0.129-0.054.114-.11,0.228-0.172,0.339-0.017.032-.036,0.063-0.055,0.094q-0.081.14-.17,0.277c-0.026.04-.052,0.08-0.079,0.12-0.074.107-.15,0.214-0.232,0.318A7.5,7.5,0,0,1,8.543,16.117Zm6.595-2.644c0.013-.018.024-0.038,0.036-0.056,0.069-.1.134-0.2,0.2-0.3,0.037-.059.071-0.121,0.106-0.181s0.071-.125.1-0.188,0.064-.122.095-0.183c0.043-.088.084-0.178,0.123-0.268,0.031-.072.06-0.145,0.089-0.218s0.062-.163.09-0.246c0.019-.056.037-0.112,0.054-0.168,0.028-.091.054-0.183,0.078-0.275,0.011-.042.023-0.083,0.033-0.125,0.031-.131.057-0.263,0.079-0.4,0.007-.042.012-0.083,0.018-0.124,0.015-.1.027-0.208,0.037-0.314,0-.042.008-0.084,0.011-0.127,0.01-.141.017-0.283,0.017-0.427,0-3.764-3.481-6.826-7.761-6.826H8.494c-0.125,0-.249,0-0.373.009-0.058,0-.115.008-0.173,0.011C7.866,3.076,7.784,3.081,7.7,3.089S7.567,3.1,7.5,3.112s-0.137.016-.2,0.026-0.149.023-.223,0.035L6.9,3.2c-0.08.015-.16,0.032-0.239,0.049l-0.145.034c-0.086.02-.172,0.042-0.258,0.064l-0.09.026a8.281,8.281,0,0,0-.931.325l-0.063.026c-0.027.011-.055,0.021-0.082,0.033a7.571,7.571,0,0,1,5.842-2.633c3.95,0,7.164,2.8,7.164,6.243A5.659,5.659,0,0,1,16.919,10.8a0.286,0.286,0,0,0-.057.2,8.246,8.246,0,0,0,.844,3.246A14.167,14.167,0,0,1,15.138,13.473Z"
                                            />
                                        </svg>
                                    </span>
                                    <span>450</span>
                                </div>
                                <div class="pe_fashion_cmt">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18">
                                            <defs>
                                                <style>
                                                    .cls-1 {
                                                        fill: #fff;
                                                        fill-rule: evenodd;
                                                    }
                                                </style>
                                            </defs>
                                            <path
                                                data-name="Forma 1"
                                                class="cls-1"
                                                d="M14.54,0.537A6.48,6.48,0,0,0,9.952,2.429,6.48,6.48,0,0,0,5.365.537C2.218,0.537,0,3.235,0,6.419,0,11.342,5.073,15.1,9.6,17.348a0.8,0.8,0,0,0,.711,0c4.526-2.245,9.6-6,9.6-10.929C19.9,3.241,17.692.537,14.54,0.537Zm-4.587,15.3c-3.815-1.947-8.4-5.274-8.4-9.415,0-2.28,1.479-4.38,3.81-4.38A4.949,4.949,0,0,1,9.3,4a0.788,0.788,0,0,0,1.306,0A4.958,4.958,0,0,1,14.54,2.039c2.332,0,3.81,2.1,3.81,4.38C18.349,10.558,13.759,13.891,9.952,15.834Z"
                                            />
                                        </svg>
                                    </span>
                                    <span>150</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="pe_fashion_img_section">
                            <div class="pe_fashion_img"><img src="http://placehold.it/576x278" alt="images" /></div>
                            <div class="pe_fashion_img_overlay">
                                <div class="pe_fashion_like">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18">
                                            <defs>
                                                <style>
                                                    .cls-1 {
                                                        fill: #fff;
                                                        stroke: #fff;
                                                        stroke-width: 0.6px;
                                                        fill-rule: evenodd;
                                                    }
                                                </style>
                                            </defs>
                                            <path
                                                data-name="Forma 1"
                                                class="cls-1"
                                                d="M17.466,11.053a6.215,6.215,0,0,0,1.226-3.682c0-3.764-3.481-6.826-7.761-6.826A7.963,7.963,0,0,0,3.963,4.368,6.6,6.6,0,0,0,.783,9.874a6.211,6.211,0,0,0,1.226,3.681,5.724,5.724,0,0,1-1.138,3.4,0.287,0.287,0,0,0-.056.337,0.3,0.3,0,0,0,.267.161,0.27,0.27,0,0,0,.042,0A14.087,14.087,0,0,0,5.4,16.114a8.608,8.608,0,0,0,3.147.586,8.144,8.144,0,0,0,6.223-2.752,15.326,15.326,0,0,0,3.585,1l0.042,0a0.3,0.3,0,0,0,.267-0.161,0.287,0.287,0,0,0-.056-0.336A5.718,5.718,0,0,1,17.466,11.053ZM8.543,16.117a8.029,8.029,0,0,1-2.5-.393c1-.609,1-0.657,1-0.822A0.3,0.3,0,0,0,6.9,14.651a0.3,0.3,0,0,0-.4.079c-0.147.112-.747,0.488-1.282,0.81h0a12.025,12.025,0,0,1-3.45,1.2A8.265,8.265,0,0,0,2.613,13.5a0.286,0.286,0,0,0-.057-0.2A5.659,5.659,0,0,1,1.38,9.874a6.047,6.047,0,0,1,3.037-5.1c0.117-.072.235-0.141,0.356-0.207L4.85,4.527C4.976,4.46,5.1,4.4,5.235,4.34l0.141-.063q0.2-.086.4-0.16c0.047-.018.1-0.033,0.144-0.05q0.158-.054.319-0.1c0.05-.015.1-0.031,0.152-0.045q0.209-.058.423-0.1l0.154-.031c0.126-.024.252-0.046,0.379-0.065l0.1-.015c0.156-.021.313-0.036,0.47-0.048l0.133-.008c0.16-.01.321-0.017,0.483-0.017H8.544c3.7,0,6.759,2.462,7.127,5.605a5.664,5.664,0,0,1,.036.638c0,0.141-.007.281-0.018,0.42,0,0.037-.006.073-0.01,0.11-0.012.129-.028,0.258-0.05,0.385,0,0.011,0,.022,0,0.033-0.023.133-.053,0.265-0.087,0.4-0.01.04-.021,0.08-0.032,0.12-0.032.116-.067,0.231-0.107,0.344-0.01.03-.021,0.059-0.031,0.088-0.041.111-.086,0.222-0.134,0.331-0.019.043-.039,0.087-0.059,0.129-0.054.114-.11,0.228-0.172,0.339-0.017.032-.036,0.063-0.055,0.094q-0.081.14-.17,0.277c-0.026.04-.052,0.08-0.079,0.12-0.074.107-.15,0.214-0.232,0.318A7.5,7.5,0,0,1,8.543,16.117Zm6.595-2.644c0.013-.018.024-0.038,0.036-0.056,0.069-.1.134-0.2,0.2-0.3,0.037-.059.071-0.121,0.106-0.181s0.071-.125.1-0.188,0.064-.122.095-0.183c0.043-.088.084-0.178,0.123-0.268,0.031-.072.06-0.145,0.089-0.218s0.062-.163.09-0.246c0.019-.056.037-0.112,0.054-0.168,0.028-.091.054-0.183,0.078-0.275,0.011-.042.023-0.083,0.033-0.125,0.031-.131.057-0.263,0.079-0.4,0.007-.042.012-0.083,0.018-0.124,0.015-.1.027-0.208,0.037-0.314,0-.042.008-0.084,0.011-0.127,0.01-.141.017-0.283,0.017-0.427,0-3.764-3.481-6.826-7.761-6.826H8.494c-0.125,0-.249,0-0.373.009-0.058,0-.115.008-0.173,0.011C7.866,3.076,7.784,3.081,7.7,3.089S7.567,3.1,7.5,3.112s-0.137.016-.2,0.026-0.149.023-.223,0.035L6.9,3.2c-0.08.015-.16,0.032-0.239,0.049l-0.145.034c-0.086.02-.172,0.042-0.258,0.064l-0.09.026a8.281,8.281,0,0,0-.931.325l-0.063.026c-0.027.011-.055,0.021-0.082,0.033a7.571,7.571,0,0,1,5.842-2.633c3.95,0,7.164,2.8,7.164,6.243A5.659,5.659,0,0,1,16.919,10.8a0.286,0.286,0,0,0-.057.2,8.246,8.246,0,0,0,.844,3.246A14.167,14.167,0,0,1,15.138,13.473Z"
                                            />
                                        </svg>
                                    </span>
                                    <span>450</span>
                                </div>
                                <div class="pe_fashion_cmt">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18">
                                            <defs>
                                                <style>
                                                    .cls-1 {
                                                        fill: #fff;
                                                        fill-rule: evenodd;
                                                    }
                                                </style>
                                            </defs>
                                            <path
                                                data-name="Forma 1"
                                                class="cls-1"
                                                d="M14.54,0.537A6.48,6.48,0,0,0,9.952,2.429,6.48,6.48,0,0,0,5.365.537C2.218,0.537,0,3.235,0,6.419,0,11.342,5.073,15.1,9.6,17.348a0.8,0.8,0,0,0,.711,0c4.526-2.245,9.6-6,9.6-10.929C19.9,3.241,17.692.537,14.54,0.537Zm-4.587,15.3c-3.815-1.947-8.4-5.274-8.4-9.415,0-2.28,1.479-4.38,3.81-4.38A4.949,4.949,0,0,1,9.3,4a0.788,0.788,0,0,0,1.306,0A4.958,4.958,0,0,1,14.54,2.039c2.332,0,3.81,2.1,3.81,4.38C18.349,10.558,13.759,13.891,9.952,15.834Z"
                                            />
                                        </svg>
                                    </span>
                                    <span>150</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="pe_fashion_img_section">
                            <div class="pe_fashion_img"><img src="http://placehold.it/576x278" alt="images" /></div>
                            <div class="pe_fashion_img_overlay">
                                <div class="pe_fashion_like">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18">
                                            <defs>
                                                <style>
                                                    .cls-1 {
                                                        fill: #fff;
                                                        stroke: #fff;
                                                        stroke-width: 0.6px;
                                                        fill-rule: evenodd;
                                                    }
                                                </style>
                                            </defs>
                                            <path
                                                data-name="Forma 1"
                                                class="cls-1"
                                                d="M17.466,11.053a6.215,6.215,0,0,0,1.226-3.682c0-3.764-3.481-6.826-7.761-6.826A7.963,7.963,0,0,0,3.963,4.368,6.6,6.6,0,0,0,.783,9.874a6.211,6.211,0,0,0,1.226,3.681,5.724,5.724,0,0,1-1.138,3.4,0.287,0.287,0,0,0-.056.337,0.3,0.3,0,0,0,.267.161,0.27,0.27,0,0,0,.042,0A14.087,14.087,0,0,0,5.4,16.114a8.608,8.608,0,0,0,3.147.586,8.144,8.144,0,0,0,6.223-2.752,15.326,15.326,0,0,0,3.585,1l0.042,0a0.3,0.3,0,0,0,.267-0.161,0.287,0.287,0,0,0-.056-0.336A5.718,5.718,0,0,1,17.466,11.053ZM8.543,16.117a8.029,8.029,0,0,1-2.5-.393c1-.609,1-0.657,1-0.822A0.3,0.3,0,0,0,6.9,14.651a0.3,0.3,0,0,0-.4.079c-0.147.112-.747,0.488-1.282,0.81h0a12.025,12.025,0,0,1-3.45,1.2A8.265,8.265,0,0,0,2.613,13.5a0.286,0.286,0,0,0-.057-0.2A5.659,5.659,0,0,1,1.38,9.874a6.047,6.047,0,0,1,3.037-5.1c0.117-.072.235-0.141,0.356-0.207L4.85,4.527C4.976,4.46,5.1,4.4,5.235,4.34l0.141-.063q0.2-.086.4-0.16c0.047-.018.1-0.033,0.144-0.05q0.158-.054.319-0.1c0.05-.015.1-0.031,0.152-0.045q0.209-.058.423-0.1l0.154-.031c0.126-.024.252-0.046,0.379-0.065l0.1-.015c0.156-.021.313-0.036,0.47-0.048l0.133-.008c0.16-.01.321-0.017,0.483-0.017H8.544c3.7,0,6.759,2.462,7.127,5.605a5.664,5.664,0,0,1,.036.638c0,0.141-.007.281-0.018,0.42,0,0.037-.006.073-0.01,0.11-0.012.129-.028,0.258-0.05,0.385,0,0.011,0,.022,0,0.033-0.023.133-.053,0.265-0.087,0.4-0.01.04-.021,0.08-0.032,0.12-0.032.116-.067,0.231-0.107,0.344-0.01.03-.021,0.059-0.031,0.088-0.041.111-.086,0.222-0.134,0.331-0.019.043-.039,0.087-0.059,0.129-0.054.114-.11,0.228-0.172,0.339-0.017.032-.036,0.063-0.055,0.094q-0.081.14-.17,0.277c-0.026.04-.052,0.08-0.079,0.12-0.074.107-.15,0.214-0.232,0.318A7.5,7.5,0,0,1,8.543,16.117Zm6.595-2.644c0.013-.018.024-0.038,0.036-0.056,0.069-.1.134-0.2,0.2-0.3,0.037-.059.071-0.121,0.106-0.181s0.071-.125.1-0.188,0.064-.122.095-0.183c0.043-.088.084-0.178,0.123-0.268,0.031-.072.06-0.145,0.089-0.218s0.062-.163.09-0.246c0.019-.056.037-0.112,0.054-0.168,0.028-.091.054-0.183,0.078-0.275,0.011-.042.023-0.083,0.033-0.125,0.031-.131.057-0.263,0.079-0.4,0.007-.042.012-0.083,0.018-0.124,0.015-.1.027-0.208,0.037-0.314,0-.042.008-0.084,0.011-0.127,0.01-.141.017-0.283,0.017-0.427,0-3.764-3.481-6.826-7.761-6.826H8.494c-0.125,0-.249,0-0.373.009-0.058,0-.115.008-0.173,0.011C7.866,3.076,7.784,3.081,7.7,3.089S7.567,3.1,7.5,3.112s-0.137.016-.2,0.026-0.149.023-.223,0.035L6.9,3.2c-0.08.015-.16,0.032-0.239,0.049l-0.145.034c-0.086.02-.172,0.042-0.258,0.064l-0.09.026a8.281,8.281,0,0,0-.931.325l-0.063.026c-0.027.011-.055,0.021-0.082,0.033a7.571,7.571,0,0,1,5.842-2.633c3.95,0,7.164,2.8,7.164,6.243A5.659,5.659,0,0,1,16.919,10.8a0.286,0.286,0,0,0-.057.2,8.246,8.246,0,0,0,.844,3.246A14.167,14.167,0,0,1,15.138,13.473Z"
                                            />
                                        </svg>
                                    </span>
                                    <span>450</span>
                                </div>
                                <div class="pe_fashion_cmt">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18">
                                            <defs>
                                                <style>
                                                    .cls-1 {
                                                        fill: #fff;
                                                        fill-rule: evenodd;
                                                    }
                                                </style>
                                            </defs>
                                            <path
                                                data-name="Forma 1"
                                                class="cls-1"
                                                d="M14.54,0.537A6.48,6.48,0,0,0,9.952,2.429,6.48,6.48,0,0,0,5.365.537C2.218,0.537,0,3.235,0,6.419,0,11.342,5.073,15.1,9.6,17.348a0.8,0.8,0,0,0,.711,0c4.526-2.245,9.6-6,9.6-10.929C19.9,3.241,17.692.537,14.54,0.537Zm-4.587,15.3c-3.815-1.947-8.4-5.274-8.4-9.415,0-2.28,1.479-4.38,3.81-4.38A4.949,4.949,0,0,1,9.3,4a0.788,0.788,0,0,0,1.306,0A4.958,4.958,0,0,1,14.54,2.039c2.332,0,3.81,2.1,3.81,4.38C18.349,10.558,13.759,13.891,9.952,15.834Z"
                                            />
                                        </svg>
                                    </span>
                                    <span>150</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="pe_fashion_img_section">
                            <div class="pe_fashion_img"><img src="http://placehold.it/576x278" alt="images" /></div>
                            <div class="pe_fashion_img_overlay">
                                <div class="pe_fashion_like">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18">
                                            <defs>
                                                <style>
                                                    .cls-1 {
                                                        fill: #fff;
                                                        stroke: #fff;
                                                        stroke-width: 0.6px;
                                                        fill-rule: evenodd;
                                                    }
                                                </style>
                                            </defs>
                                            <path
                                                data-name="Forma 1"
                                                class="cls-1"
                                                d="M17.466,11.053a6.215,6.215,0,0,0,1.226-3.682c0-3.764-3.481-6.826-7.761-6.826A7.963,7.963,0,0,0,3.963,4.368,6.6,6.6,0,0,0,.783,9.874a6.211,6.211,0,0,0,1.226,3.681,5.724,5.724,0,0,1-1.138,3.4,0.287,0.287,0,0,0-.056.337,0.3,0.3,0,0,0,.267.161,0.27,0.27,0,0,0,.042,0A14.087,14.087,0,0,0,5.4,16.114a8.608,8.608,0,0,0,3.147.586,8.144,8.144,0,0,0,6.223-2.752,15.326,15.326,0,0,0,3.585,1l0.042,0a0.3,0.3,0,0,0,.267-0.161,0.287,0.287,0,0,0-.056-0.336A5.718,5.718,0,0,1,17.466,11.053ZM8.543,16.117a8.029,8.029,0,0,1-2.5-.393c1-.609,1-0.657,1-0.822A0.3,0.3,0,0,0,6.9,14.651a0.3,0.3,0,0,0-.4.079c-0.147.112-.747,0.488-1.282,0.81h0a12.025,12.025,0,0,1-3.45,1.2A8.265,8.265,0,0,0,2.613,13.5a0.286,0.286,0,0,0-.057-0.2A5.659,5.659,0,0,1,1.38,9.874a6.047,6.047,0,0,1,3.037-5.1c0.117-.072.235-0.141,0.356-0.207L4.85,4.527C4.976,4.46,5.1,4.4,5.235,4.34l0.141-.063q0.2-.086.4-0.16c0.047-.018.1-0.033,0.144-0.05q0.158-.054.319-0.1c0.05-.015.1-0.031,0.152-0.045q0.209-.058.423-0.1l0.154-.031c0.126-.024.252-0.046,0.379-0.065l0.1-.015c0.156-.021.313-0.036,0.47-0.048l0.133-.008c0.16-.01.321-0.017,0.483-0.017H8.544c3.7,0,6.759,2.462,7.127,5.605a5.664,5.664,0,0,1,.036.638c0,0.141-.007.281-0.018,0.42,0,0.037-.006.073-0.01,0.11-0.012.129-.028,0.258-0.05,0.385,0,0.011,0,.022,0,0.033-0.023.133-.053,0.265-0.087,0.4-0.01.04-.021,0.08-0.032,0.12-0.032.116-.067,0.231-0.107,0.344-0.01.03-.021,0.059-0.031,0.088-0.041.111-.086,0.222-0.134,0.331-0.019.043-.039,0.087-0.059,0.129-0.054.114-.11,0.228-0.172,0.339-0.017.032-.036,0.063-0.055,0.094q-0.081.14-.17,0.277c-0.026.04-.052,0.08-0.079,0.12-0.074.107-.15,0.214-0.232,0.318A7.5,7.5,0,0,1,8.543,16.117Zm6.595-2.644c0.013-.018.024-0.038,0.036-0.056,0.069-.1.134-0.2,0.2-0.3,0.037-.059.071-0.121,0.106-0.181s0.071-.125.1-0.188,0.064-.122.095-0.183c0.043-.088.084-0.178,0.123-0.268,0.031-.072.06-0.145,0.089-0.218s0.062-.163.09-0.246c0.019-.056.037-0.112,0.054-0.168,0.028-.091.054-0.183,0.078-0.275,0.011-.042.023-0.083,0.033-0.125,0.031-.131.057-0.263,0.079-0.4,0.007-.042.012-0.083,0.018-0.124,0.015-.1.027-0.208,0.037-0.314,0-.042.008-0.084,0.011-0.127,0.01-.141.017-0.283,0.017-0.427,0-3.764-3.481-6.826-7.761-6.826H8.494c-0.125,0-.249,0-0.373.009-0.058,0-.115.008-0.173,0.011C7.866,3.076,7.784,3.081,7.7,3.089S7.567,3.1,7.5,3.112s-0.137.016-.2,0.026-0.149.023-.223,0.035L6.9,3.2c-0.08.015-.16,0.032-0.239,0.049l-0.145.034c-0.086.02-.172,0.042-0.258,0.064l-0.09.026a8.281,8.281,0,0,0-.931.325l-0.063.026c-0.027.011-.055,0.021-0.082,0.033a7.571,7.571,0,0,1,5.842-2.633c3.95,0,7.164,2.8,7.164,6.243A5.659,5.659,0,0,1,16.919,10.8a0.286,0.286,0,0,0-.057.2,8.246,8.246,0,0,0,.844,3.246A14.167,14.167,0,0,1,15.138,13.473Z"
                                            />
                                        </svg>
                                    </span>
                                    <span>450</span>
                                </div>
                                <div class="pe_fashion_cmt">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18">
                                            <defs>
                                                <style>
                                                    .cls-1 {
                                                        fill: #fff;
                                                        fill-rule: evenodd;
                                                    }
                                                </style>
                                            </defs>
                                            <path
                                                data-name="Forma 1"
                                                class="cls-1"
                                                d="M14.54,0.537A6.48,6.48,0,0,0,9.952,2.429,6.48,6.48,0,0,0,5.365.537C2.218,0.537,0,3.235,0,6.419,0,11.342,5.073,15.1,9.6,17.348a0.8,0.8,0,0,0,.711,0c4.526-2.245,9.6-6,9.6-10.929C19.9,3.241,17.692.537,14.54,0.537Zm-4.587,15.3c-3.815-1.947-8.4-5.274-8.4-9.415,0-2.28,1.479-4.38,3.81-4.38A4.949,4.949,0,0,1,9.3,4a0.788,0.788,0,0,0,1.306,0A4.958,4.958,0,0,1,14.54,2.039c2.332,0,3.81,2.1,3.81,4.38C18.349,10.558,13.759,13.891,9.952,15.834Z"
                                            />
                                        </svg>
                                    </span>
                                    <span>150</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="pe_fashion_img_section">
                            <div class="pe_fashion_img"><img src="http://placehold.it/576x278" alt="images" /></div>
                            <div class="pe_fashion_img_overlay">
                                <div class="pe_fashion_like">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18">
                                            <defs>
                                                <style>
                                                    .cls-1 {
                                                        fill: #fff;
                                                        stroke: #fff;
                                                        stroke-width: 0.6px;
                                                        fill-rule: evenodd;
                                                    }
                                                </style>
                                            </defs>
                                            <path
                                                data-name="Forma 1"
                                                class="cls-1"
                                                d="M17.466,11.053a6.215,6.215,0,0,0,1.226-3.682c0-3.764-3.481-6.826-7.761-6.826A7.963,7.963,0,0,0,3.963,4.368,6.6,6.6,0,0,0,.783,9.874a6.211,6.211,0,0,0,1.226,3.681,5.724,5.724,0,0,1-1.138,3.4,0.287,0.287,0,0,0-.056.337,0.3,0.3,0,0,0,.267.161,0.27,0.27,0,0,0,.042,0A14.087,14.087,0,0,0,5.4,16.114a8.608,8.608,0,0,0,3.147.586,8.144,8.144,0,0,0,6.223-2.752,15.326,15.326,0,0,0,3.585,1l0.042,0a0.3,0.3,0,0,0,.267-0.161,0.287,0.287,0,0,0-.056-0.336A5.718,5.718,0,0,1,17.466,11.053ZM8.543,16.117a8.029,8.029,0,0,1-2.5-.393c1-.609,1-0.657,1-0.822A0.3,0.3,0,0,0,6.9,14.651a0.3,0.3,0,0,0-.4.079c-0.147.112-.747,0.488-1.282,0.81h0a12.025,12.025,0,0,1-3.45,1.2A8.265,8.265,0,0,0,2.613,13.5a0.286,0.286,0,0,0-.057-0.2A5.659,5.659,0,0,1,1.38,9.874a6.047,6.047,0,0,1,3.037-5.1c0.117-.072.235-0.141,0.356-0.207L4.85,4.527C4.976,4.46,5.1,4.4,5.235,4.34l0.141-.063q0.2-.086.4-0.16c0.047-.018.1-0.033,0.144-0.05q0.158-.054.319-0.1c0.05-.015.1-0.031,0.152-0.045q0.209-.058.423-0.1l0.154-.031c0.126-.024.252-0.046,0.379-0.065l0.1-.015c0.156-.021.313-0.036,0.47-0.048l0.133-.008c0.16-.01.321-0.017,0.483-0.017H8.544c3.7,0,6.759,2.462,7.127,5.605a5.664,5.664,0,0,1,.036.638c0,0.141-.007.281-0.018,0.42,0,0.037-.006.073-0.01,0.11-0.012.129-.028,0.258-0.05,0.385,0,0.011,0,.022,0,0.033-0.023.133-.053,0.265-0.087,0.4-0.01.04-.021,0.08-0.032,0.12-0.032.116-.067,0.231-0.107,0.344-0.01.03-.021,0.059-0.031,0.088-0.041.111-.086,0.222-0.134,0.331-0.019.043-.039,0.087-0.059,0.129-0.054.114-.11,0.228-0.172,0.339-0.017.032-.036,0.063-0.055,0.094q-0.081.14-.17,0.277c-0.026.04-.052,0.08-0.079,0.12-0.074.107-.15,0.214-0.232,0.318A7.5,7.5,0,0,1,8.543,16.117Zm6.595-2.644c0.013-.018.024-0.038,0.036-0.056,0.069-.1.134-0.2,0.2-0.3,0.037-.059.071-0.121,0.106-0.181s0.071-.125.1-0.188,0.064-.122.095-0.183c0.043-.088.084-0.178,0.123-0.268,0.031-.072.06-0.145,0.089-0.218s0.062-.163.09-0.246c0.019-.056.037-0.112,0.054-0.168,0.028-.091.054-0.183,0.078-0.275,0.011-.042.023-0.083,0.033-0.125,0.031-.131.057-0.263,0.079-0.4,0.007-.042.012-0.083,0.018-0.124,0.015-.1.027-0.208,0.037-0.314,0-.042.008-0.084,0.011-0.127,0.01-.141.017-0.283,0.017-0.427,0-3.764-3.481-6.826-7.761-6.826H8.494c-0.125,0-.249,0-0.373.009-0.058,0-.115.008-0.173,0.011C7.866,3.076,7.784,3.081,7.7,3.089S7.567,3.1,7.5,3.112s-0.137.016-.2,0.026-0.149.023-.223,0.035L6.9,3.2c-0.08.015-.16,0.032-0.239,0.049l-0.145.034c-0.086.02-.172,0.042-0.258,0.064l-0.09.026a8.281,8.281,0,0,0-.931.325l-0.063.026c-0.027.011-.055,0.021-0.082,0.033a7.571,7.571,0,0,1,5.842-2.633c3.95,0,7.164,2.8,7.164,6.243A5.659,5.659,0,0,1,16.919,10.8a0.286,0.286,0,0,0-.057.2,8.246,8.246,0,0,0,.844,3.246A14.167,14.167,0,0,1,15.138,13.473Z"
                                            />
                                        </svg>
                                    </span>
                                    <span>450</span>
                                </div>
                                <div class="pe_fashion_cmt">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18">
                                            <defs>
                                                <style>
                                                    .cls-1 {
                                                        fill: #fff;
                                                        fill-rule: evenodd;
                                                    }
                                                </style>
                                            </defs>
                                            <path
                                                data-name="Forma 1"
                                                class="cls-1"
                                                d="M14.54,0.537A6.48,6.48,0,0,0,9.952,2.429,6.48,6.48,0,0,0,5.365.537C2.218,0.537,0,3.235,0,6.419,0,11.342,5.073,15.1,9.6,17.348a0.8,0.8,0,0,0,.711,0c4.526-2.245,9.6-6,9.6-10.929C19.9,3.241,17.692.537,14.54,0.537Zm-4.587,15.3c-3.815-1.947-8.4-5.274-8.4-9.415,0-2.28,1.479-4.38,3.81-4.38A4.949,4.949,0,0,1,9.3,4a0.788,0.788,0,0,0,1.306,0A4.958,4.958,0,0,1,14.54,2.039c2.332,0,3.81,2.1,3.81,4.38C18.349,10.558,13.759,13.891,9.952,15.834Z"
                                            />
                                        </svg>
                                    </span>
                                    <span>150</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
