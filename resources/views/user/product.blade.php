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
                              <li><a class="pe_in_banner_text1" style="color: #909090" href="javascript:void(0);">Home</a></li>
                              <li>
                                 <p class="pe_in_banner_text2" style="color: #909090"><i class="fa fa-caret-right"></i></p>
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
                                       <path id="Rounded_Rectangle_523_copy_8" data-name="Rounded Rectangle 523 copy 8" d="M2,0H4A2,2,0,0,1,6,2V4A2,2,0,0,1,4,6H2A2,2,0,0,1,0,4V2A2,2,0,0,1,2,0Zm8,0h2a2,2,0,0,1,2,2V4a2,2,0,0,1-2,2H10A2,2,0,0,1,8,4V2A2,2,0,0,1,10,0Zm8,0h2a2,2,0,0,1,2,2V4a2,2,0,0,1-2,2H18a2,2,0,0,1-2-2V2A2,2,0,0,1,18,0ZM2,8H4a2,2,0,0,1,2,2v2a2,2,0,0,1-2,2H2a2,2,0,0,1-2-2V10A2,2,0,0,1,2,8Zm8,0h2a2,2,0,0,1,2,2v2a2,2,0,0,1-2,2H10a2,2,0,0,1-2-2V10A2,2,0,0,1,10,8Zm8,0h2a2,2,0,0,1,2,2v2a2,2,0,0,1-2,2H18a2,2,0,0,1-2-2V10A2,2,0,0,1,18,8ZM2,16H4a2,2,0,0,1,2,2v2a2,2,0,0,1-2,2H2a2,2,0,0,1-2-2V18A2,2,0,0,1,2,16Zm8,0h2a2,2,0,0,1,2,2v2a2,2,0,0,1-2,2H10a2,2,0,0,1-2-2V18A2,2,0,0,1,10,16Zm8,0h2a2,2,0,0,1,2,2v2a2,2,0,0,1-2,2H18a2,2,0,0,1-2-2V18A2,2,0,0,1,18,16Z"/>
                                    </svg>
                                 </span>
                                 <span class="[ icon  icon--list ]  [ fa  fa-reorder ]  [ icon ]">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22">
                                       <path id="Rounded_Rectangle_523_copy_9" data-name="Rounded Rectangle 523 copy 9" d="M2,0H4A2,2,0,0,1,6,2V4A2,2,0,0,1,4,6H2A2,2,0,0,1,0,4V2A2,2,0,0,1,2,0ZM20,22H10a2,2,0,0,1-2-2V18a2,2,0,0,1,2-2H20a2,2,0,0,1,2,2v2A2,2,0,0,1,20,22Zm0-8H10a2,2,0,0,1-2-2V10a2,2,0,0,1,2-2H20a2,2,0,0,1,2,2v2A2,2,0,0,1,20,14Zm0-8H10A2,2,0,0,1,8,4V2a2,2,0,0,1,2-2H20a2,2,0,0,1,2,2V4A2,2,0,0,1,20,6ZM2,8H4a2,2,0,0,1,2,2v2a2,2,0,0,1-2,2H2a2,2,0,0,1-2-2V10A2,2,0,0,1,2,8Zm0,8H4a2,2,0,0,1,2,2v2a2,2,0,0,1-2,2H2a2,2,0,0,1-2-2V18A2,2,0,0,1,2,16Z"/>
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
                        <div class="col-lg-9 col-md-12 col-sm-12 order-lg-2 order-md-1 order-sm-1 order-1">
                           <div class="collection_main_wrapper">
                              <div class="wrapper">
                                 <div class="products grid group">
                                    @foreach ($categories as $category)
                        @foreach ($category->products as $product)
                                    <div class="product">
                                        
                         
                                       <div class="product__inner">
                                          <div class="product__image">
                                            
                                             <img src="{{ asset('storage/images/bgaBgLb57wNYY0CU7pBSYGdCxg81UdCskweS2k22.png') }}" alt="images" />
                                          </div>
                                          <div class="product__details">
                                             <div class="pe_product_name">
                                                <a href="product_detail.html"><p> {{$product->name}}  <span></span></p></a>
                                                <div class="pe_product_ratings">
                                                   <p><i class="fa fa-star rating1"></i></p>
                                                   <p><i class="fa fa-star rating1"></i></p>
                                                   <p><i class="fa fa-star rating1"></i></p>
                                                   <p><i class="fa fa-star rating1"></i></p>
                                                   <p><i class="fa fa-star rating5"></i></p>
                                                </div>
                                                <div class="pe_product_txt1">
                                                   <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s </p>
                                                </div>
                                                <div class="pe_product_price">
                                                   <span class="pe_product_price1">{{ $product->price}}</span>
                                                   <span class="pe_product_price2">$50.00</span>
                                                </div>
                                                <div class="pe_product_btn pe_btn"><a href="javascript:void(0);">Shop Now</a></div>
                                             </div>
                                          </div>
                                          

                                          <!-- /product__details -->
                                       </div>
                                    </div>
                                       @endforeach
                    @endforeach
                                     
                                    <!-- /product -->
                                    
                                    <!-- /product -->
                                    product -->
                                 </div>
                                 <!-- /products -->
                              </div>
                              <!-- /wrapper -->
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
                                 <div class="pe_fashion_img">
                                    <img src="http://placehold.it/255x255" alt="images">
                                 </div>
                                 <div class="pe_fashion_img_overlay">
                                    <div class="pe_fashion_like">
                                       <span>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18">
                                             <defs>
                                                <style>.cls-1{fill: #fff; stroke: #fff; stroke-width: 0.6px; fill-rule: evenodd;}</style>
                                             </defs>
                                             <path data-name="Forma 1" class="cls-1" d="M17.466,11.053a6.215,6.215,0,0,0,1.226-3.682c0-3.764-3.481-6.826-7.761-6.826A7.963,7.963,0,0,0,3.963,4.368,6.6,6.6,0,0,0,.783,9.874a6.211,6.211,0,0,0,1.226,3.681,5.724,5.724,0,0,1-1.138,3.4,0.287,0.287,0,0,0-.056.337,0.3,0.3,0,0,0,.267.161,0.27,0.27,0,0,0,.042,0A14.087,14.087,0,0,0,5.4,16.114a8.608,8.608,0,0,0,3.147.586,8.144,8.144,0,0,0,6.223-2.752,15.326,15.326,0,0,0,3.585,1l0.042,0a0.3,0.3,0,0,0,.267-0.161,0.287,0.287,0,0,0-.056-0.336A5.718,5.718,0,0,1,17.466,11.053ZM8.543,16.117a8.029,8.029,0,0,1-2.5-.393c1-.609,1-0.657,1-0.822A0.3,0.3,0,0,0,6.9,14.651a0.3,0.3,0,0,0-.4.079c-0.147.112-.747,0.488-1.282,0.81h0a12.025,12.025,0,0,1-3.45,1.2A8.265,8.265,0,0,0,2.613,13.5a0.286,0.286,0,0,0-.057-0.2A5.659,5.659,0,0,1,1.38,9.874a6.047,6.047,0,0,1,3.037-5.1c0.117-.072.235-0.141,0.356-0.207L4.85,4.527C4.976,4.46,5.1,4.4,5.235,4.34l0.141-.063q0.2-.086.4-0.16c0.047-.018.1-0.033,0.144-0.05q0.158-.054.319-0.1c0.05-.015.1-0.031,0.152-0.045q0.209-.058.423-0.1l0.154-.031c0.126-.024.252-0.046,0.379-0.065l0.1-.015c0.156-.021.313-0.036,0.47-0.048l0.133-.008c0.16-.01.321-0.017,0.483-0.017H8.544c3.7,0,6.759,2.462,7.127,5.605a5.664,5.664,0,0,1,.036.638c0,0.141-.007.281-0.018,0.42,0,0.037-.006.073-0.01,0.11-0.012.129-.028,0.258-0.05,0.385,0,0.011,0,.022,0,0.033-0.023.133-.053,0.265-0.087,0.4-0.01.04-.021,0.08-0.032,0.12-0.032.116-.067,0.231-0.107,0.344-0.01.03-.021,0.059-0.031,0.088-0.041.111-.086,0.222-0.134,0.331-0.019.043-.039,0.087-0.059,0.129-0.054.114-.11,0.228-0.172,0.339-0.017.032-.036,0.063-0.055,0.094q-0.081.14-.17,0.277c-0.026.04-.052,0.08-0.079,0.12-0.074.107-.15,0.214-0.232,0.318A7.5,7.5,0,0,1,8.543,16.117Zm6.595-2.644c0.013-.018.024-0.038,0.036-0.056,0.069-.1.134-0.2,0.2-0.3,0.037-.059.071-0.121,0.106-0.181s0.071-.125.1-0.188,0.064-.122.095-0.183c0.043-.088.084-0.178,0.123-0.268,0.031-.072.06-0.145,0.089-0.218s0.062-.163.09-0.246c0.019-.056.037-0.112,0.054-0.168,0.028-.091.054-0.183,0.078-0.275,0.011-.042.023-0.083,0.033-0.125,0.031-.131.057-0.263,0.079-0.4,0.007-.042.012-0.083,0.018-0.124,0.015-.1.027-0.208,0.037-0.314,0-.042.008-0.084,0.011-0.127,0.01-.141.017-0.283,0.017-0.427,0-3.764-3.481-6.826-7.761-6.826H8.494c-0.125,0-.249,0-0.373.009-0.058,0-.115.008-0.173,0.011C7.866,3.076,7.784,3.081,7.7,3.089S7.567,3.1,7.5,3.112s-0.137.016-.2,0.026-0.149.023-.223,0.035L6.9,3.2c-0.08.015-.16,0.032-0.239,0.049l-0.145.034c-0.086.02-.172,0.042-0.258,0.064l-0.09.026a8.281,8.281,0,0,0-.931.325l-0.063.026c-0.027.011-.055,0.021-0.082,0.033a7.571,7.571,0,0,1,5.842-2.633c3.95,0,7.164,2.8,7.164,6.243A5.659,5.659,0,0,1,16.919,10.8a0.286,0.286,0,0,0-.057.2,8.246,8.246,0,0,0,.844,3.246A14.167,14.167,0,0,1,15.138,13.473Z"/>
                                          </svg>
                                       </span>
                                       <span>450</span>
                                    </div>
                                    <div class="pe_fashion_cmt">
                                       <span>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18">
                                             <defs>
                                                <style>.cls-1{fill: #fff; fill-rule: evenodd;}</style>
                                             </defs>
                                             <path data-name="Forma 1" class="cls-1" d="M14.54,0.537A6.48,6.48,0,0,0,9.952,2.429,6.48,6.48,0,0,0,5.365.537C2.218,0.537,0,3.235,0,6.419,0,11.342,5.073,15.1,9.6,17.348a0.8,0.8,0,0,0,.711,0c4.526-2.245,9.6-6,9.6-10.929C19.9,3.241,17.692.537,14.54,0.537Zm-4.587,15.3c-3.815-1.947-8.4-5.274-8.4-9.415,0-2.28,1.479-4.38,3.81-4.38A4.949,4.949,0,0,1,9.3,4a0.788,0.788,0,0,0,1.306,0A4.958,4.958,0,0,1,14.54,2.039c2.332,0,3.81,2.1,3.81,4.38C18.349,10.558,13.759,13.891,9.952,15.834Z"/>
                                          </svg>
                                       </span>
                                       <span>150</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="pe_fashion_img_section">
                                 <div class="pe_fashion_img">
                                    <img src="http://placehold.it/255x255" alt="images">
                                 </div>
                                 <div class="pe_fashion_img_overlay">
                                    <div class="pe_fashion_like">
                                       <span>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18">
                                             <defs>
                                                <style>.cls-1{fill: #fff; stroke: #fff; stroke-width: 0.6px; fill-rule: evenodd;}</style>
                                             </defs>
                                             <path data-name="Forma 1" class="cls-1" d="M17.466,11.053a6.215,6.215,0,0,0,1.226-3.682c0-3.764-3.481-6.826-7.761-6.826A7.963,7.963,0,0,0,3.963,4.368,6.6,6.6,0,0,0,.783,9.874a6.211,6.211,0,0,0,1.226,3.681,5.724,5.724,0,0,1-1.138,3.4,0.287,0.287,0,0,0-.056.337,0.3,0.3,0,0,0,.267.161,0.27,0.27,0,0,0,.042,0A14.087,14.087,0,0,0,5.4,16.114a8.608,8.608,0,0,0,3.147.586,8.144,8.144,0,0,0,6.223-2.752,15.326,15.326,0,0,0,3.585,1l0.042,0a0.3,0.3,0,0,0,.267-0.161,0.287,0.287,0,0,0-.056-0.336A5.718,5.718,0,0,1,17.466,11.053ZM8.543,16.117a8.029,8.029,0,0,1-2.5-.393c1-.609,1-0.657,1-0.822A0.3,0.3,0,0,0,6.9,14.651a0.3,0.3,0,0,0-.4.079c-0.147.112-.747,0.488-1.282,0.81h0a12.025,12.025,0,0,1-3.45,1.2A8.265,8.265,0,0,0,2.613,13.5a0.286,0.286,0,0,0-.057-0.2A5.659,5.659,0,0,1,1.38,9.874a6.047,6.047,0,0,1,3.037-5.1c0.117-.072.235-0.141,0.356-0.207L4.85,4.527C4.976,4.46,5.1,4.4,5.235,4.34l0.141-.063q0.2-.086.4-0.16c0.047-.018.1-0.033,0.144-0.05q0.158-.054.319-0.1c0.05-.015.1-0.031,0.152-0.045q0.209-.058.423-0.1l0.154-.031c0.126-.024.252-0.046,0.379-0.065l0.1-.015c0.156-.021.313-0.036,0.47-0.048l0.133-.008c0.16-.01.321-0.017,0.483-0.017H8.544c3.7,0,6.759,2.462,7.127,5.605a5.664,5.664,0,0,1,.036.638c0,0.141-.007.281-0.018,0.42,0,0.037-.006.073-0.01,0.11-0.012.129-.028,0.258-0.05,0.385,0,0.011,0,.022,0,0.033-0.023.133-.053,0.265-0.087,0.4-0.01.04-.021,0.08-0.032,0.12-0.032.116-.067,0.231-0.107,0.344-0.01.03-.021,0.059-0.031,0.088-0.041.111-.086,0.222-0.134,0.331-0.019.043-.039,0.087-0.059,0.129-0.054.114-.11,0.228-0.172,0.339-0.017.032-.036,0.063-0.055,0.094q-0.081.14-.17,0.277c-0.026.04-.052,0.08-0.079,0.12-0.074.107-.15,0.214-0.232,0.318A7.5,7.5,0,0,1,8.543,16.117Zm6.595-2.644c0.013-.018.024-0.038,0.036-0.056,0.069-.1.134-0.2,0.2-0.3,0.037-.059.071-0.121,0.106-0.181s0.071-.125.1-0.188,0.064-.122.095-0.183c0.043-.088.084-0.178,0.123-0.268,0.031-.072.06-0.145,0.089-0.218s0.062-.163.09-0.246c0.019-.056.037-0.112,0.054-0.168,0.028-.091.054-0.183,0.078-0.275,0.011-.042.023-0.083,0.033-0.125,0.031-.131.057-0.263,0.079-0.4,0.007-.042.012-0.083,0.018-0.124,0.015-.1.027-0.208,0.037-0.314,0-.042.008-0.084,0.011-0.127,0.01-.141.017-0.283,0.017-0.427,0-3.764-3.481-6.826-7.761-6.826H8.494c-0.125,0-.249,0-0.373.009-0.058,0-.115.008-0.173,0.011C7.866,3.076,7.784,3.081,7.7,3.089S7.567,3.1,7.5,3.112s-0.137.016-.2,0.026-0.149.023-.223,0.035L6.9,3.2c-0.08.015-.16,0.032-0.239,0.049l-0.145.034c-0.086.02-.172,0.042-0.258,0.064l-0.09.026a8.281,8.281,0,0,0-.931.325l-0.063.026c-0.027.011-.055,0.021-0.082,0.033a7.571,7.571,0,0,1,5.842-2.633c3.95,0,7.164,2.8,7.164,6.243A5.659,5.659,0,0,1,16.919,10.8a0.286,0.286,0,0,0-.057.2,8.246,8.246,0,0,0,.844,3.246A14.167,14.167,0,0,1,15.138,13.473Z"/>
                                          </svg>
                                       </span>
                                       <span>450</span>
                                    </div>
                                    <div class="pe_fashion_cmt">
                                       <span>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18">
                                             <defs>
                                                <style>.cls-1{fill: #fff; fill-rule: evenodd;}</style>
                                             </defs>
                                             <path data-name="Forma 1" class="cls-1" d="M14.54,0.537A6.48,6.48,0,0,0,9.952,2.429,6.48,6.48,0,0,0,5.365.537C2.218,0.537,0,3.235,0,6.419,0,11.342,5.073,15.1,9.6,17.348a0.8,0.8,0,0,0,.711,0c4.526-2.245,9.6-6,9.6-10.929C19.9,3.241,17.692.537,14.54,0.537Zm-4.587,15.3c-3.815-1.947-8.4-5.274-8.4-9.415,0-2.28,1.479-4.38,3.81-4.38A4.949,4.949,0,0,1,9.3,4a0.788,0.788,0,0,0,1.306,0A4.958,4.958,0,0,1,14.54,2.039c2.332,0,3.81,2.1,3.81,4.38C18.349,10.558,13.759,13.891,9.952,15.834Z"/>
                                          </svg>
                                       </span>
                                       <span>150</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="pe_fashion_img_section">
                                 <div class="pe_fashion_img">
                                    <img src="http://placehold.it/255x255" alt="images">
                                 </div>
                                 <div class="pe_fashion_img_overlay">
                                    <div class="pe_fashion_like">
                                       <span>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18">
                                             <defs>
                                                <style>.cls-1{fill: #fff; stroke: #fff; stroke-width: 0.6px; fill-rule: evenodd;}</style>
                                             </defs>
                                             <path data-name="Forma 1" class="cls-1" d="M17.466,11.053a6.215,6.215,0,0,0,1.226-3.682c0-3.764-3.481-6.826-7.761-6.826A7.963,7.963,0,0,0,3.963,4.368,6.6,6.6,0,0,0,.783,9.874a6.211,6.211,0,0,0,1.226,3.681,5.724,5.724,0,0,1-1.138,3.4,0.287,0.287,0,0,0-.056.337,0.3,0.3,0,0,0,.267.161,0.27,0.27,0,0,0,.042,0A14.087,14.087,0,0,0,5.4,16.114a8.608,8.608,0,0,0,3.147.586,8.144,8.144,0,0,0,6.223-2.752,15.326,15.326,0,0,0,3.585,1l0.042,0a0.3,0.3,0,0,0,.267-0.161,0.287,0.287,0,0,0-.056-0.336A5.718,5.718,0,0,1,17.466,11.053ZM8.543,16.117a8.029,8.029,0,0,1-2.5-.393c1-.609,1-0.657,1-0.822A0.3,0.3,0,0,0,6.9,14.651a0.3,0.3,0,0,0-.4.079c-0.147.112-.747,0.488-1.282,0.81h0a12.025,12.025,0,0,1-3.45,1.2A8.265,8.265,0,0,0,2.613,13.5a0.286,0.286,0,0,0-.057-0.2A5.659,5.659,0,0,1,1.38,9.874a6.047,6.047,0,0,1,3.037-5.1c0.117-.072.235-0.141,0.356-0.207L4.85,4.527C4.976,4.46,5.1,4.4,5.235,4.34l0.141-.063q0.2-.086.4-0.16c0.047-.018.1-0.033,0.144-0.05q0.158-.054.319-0.1c0.05-.015.1-0.031,0.152-0.045q0.209-.058.423-0.1l0.154-.031c0.126-.024.252-0.046,0.379-0.065l0.1-.015c0.156-.021.313-0.036,0.47-0.048l0.133-.008c0.16-.01.321-0.017,0.483-0.017H8.544c3.7,0,6.759,2.462,7.127,5.605a5.664,5.664,0,0,1,.036.638c0,0.141-.007.281-0.018,0.42,0,0.037-.006.073-0.01,0.11-0.012.129-.028,0.258-0.05,0.385,0,0.011,0,.022,0,0.033-0.023.133-.053,0.265-0.087,0.4-0.01.04-.021,0.08-0.032,0.12-0.032.116-.067,0.231-0.107,0.344-0.01.03-.021,0.059-0.031,0.088-0.041.111-.086,0.222-0.134,0.331-0.019.043-.039,0.087-0.059,0.129-0.054.114-.11,0.228-0.172,0.339-0.017.032-.036,0.063-0.055,0.094q-0.081.14-.17,0.277c-0.026.04-.052,0.08-0.079,0.12-0.074.107-.15,0.214-0.232,0.318A7.5,7.5,0,0,1,8.543,16.117Zm6.595-2.644c0.013-.018.024-0.038,0.036-0.056,0.069-.1.134-0.2,0.2-0.3,0.037-.059.071-0.121,0.106-0.181s0.071-.125.1-0.188,0.064-.122.095-0.183c0.043-.088.084-0.178,0.123-0.268,0.031-.072.06-0.145,0.089-0.218s0.062-.163.09-0.246c0.019-.056.037-0.112,0.054-0.168,0.028-.091.054-0.183,0.078-0.275,0.011-.042.023-0.083,0.033-0.125,0.031-.131.057-0.263,0.079-0.4,0.007-.042.012-0.083,0.018-0.124,0.015-.1.027-0.208,0.037-0.314,0-.042.008-0.084,0.011-0.127,0.01-.141.017-0.283,0.017-0.427,0-3.764-3.481-6.826-7.761-6.826H8.494c-0.125,0-.249,0-0.373.009-0.058,0-.115.008-0.173,0.011C7.866,3.076,7.784,3.081,7.7,3.089S7.567,3.1,7.5,3.112s-0.137.016-.2,0.026-0.149.023-.223,0.035L6.9,3.2c-0.08.015-.16,0.032-0.239,0.049l-0.145.034c-0.086.02-.172,0.042-0.258,0.064l-0.09.026a8.281,8.281,0,0,0-.931.325l-0.063.026c-0.027.011-.055,0.021-0.082,0.033a7.571,7.571,0,0,1,5.842-2.633c3.95,0,7.164,2.8,7.164,6.243A5.659,5.659,0,0,1,16.919,10.8a0.286,0.286,0,0,0-.057.2,8.246,8.246,0,0,0,.844,3.246A14.167,14.167,0,0,1,15.138,13.473Z"/>
                                          </svg>
                                       </span>
                                       <span>450</span>
                                    </div>
                                    <div class="pe_fashion_cmt">
                                       <span>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18">
                                             <defs>
                                                <style>.cls-1{fill: #fff; fill-rule: evenodd;}</style>
                                             </defs>
                                             <path data-name="Forma 1" class="cls-1" d="M14.54,0.537A6.48,6.48,0,0,0,9.952,2.429,6.48,6.48,0,0,0,5.365.537C2.218,0.537,0,3.235,0,6.419,0,11.342,5.073,15.1,9.6,17.348a0.8,0.8,0,0,0,.711,0c4.526-2.245,9.6-6,9.6-10.929C19.9,3.241,17.692.537,14.54,0.537Zm-4.587,15.3c-3.815-1.947-8.4-5.274-8.4-9.415,0-2.28,1.479-4.38,3.81-4.38A4.949,4.949,0,0,1,9.3,4a0.788,0.788,0,0,0,1.306,0A4.958,4.958,0,0,1,14.54,2.039c2.332,0,3.81,2.1,3.81,4.38C18.349,10.558,13.759,13.891,9.952,15.834Z"/>
                                          </svg>
                                       </span>
                                       <span>150</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="pe_fashion_img_section">
                                 <div class="pe_fashion_img">
                                    <img src="http://placehold.it/255x255" alt="images">
                                 </div>
                                 <div class="pe_fashion_img_overlay">
                                    <div class="pe_fashion_like">
                                       <span>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18">
                                             <defs>
                                                <style>.cls-1{fill: #fff; stroke: #fff; stroke-width: 0.6px; fill-rule: evenodd;}</style>
                                             </defs>
                                             <path data-name="Forma 1" class="cls-1" d="M17.466,11.053a6.215,6.215,0,0,0,1.226-3.682c0-3.764-3.481-6.826-7.761-6.826A7.963,7.963,0,0,0,3.963,4.368,6.6,6.6,0,0,0,.783,9.874a6.211,6.211,0,0,0,1.226,3.681,5.724,5.724,0,0,1-1.138,3.4,0.287,0.287,0,0,0-.056.337,0.3,0.3,0,0,0,.267.161,0.27,0.27,0,0,0,.042,0A14.087,14.087,0,0,0,5.4,16.114a8.608,8.608,0,0,0,3.147.586,8.144,8.144,0,0,0,6.223-2.752,15.326,15.326,0,0,0,3.585,1l0.042,0a0.3,0.3,0,0,0,.267-0.161,0.287,0.287,0,0,0-.056-0.336A5.718,5.718,0,0,1,17.466,11.053ZM8.543,16.117a8.029,8.029,0,0,1-2.5-.393c1-.609,1-0.657,1-0.822A0.3,0.3,0,0,0,6.9,14.651a0.3,0.3,0,0,0-.4.079c-0.147.112-.747,0.488-1.282,0.81h0a12.025,12.025,0,0,1-3.45,1.2A8.265,8.265,0,0,0,2.613,13.5a0.286,0.286,0,0,0-.057-0.2A5.659,5.659,0,0,1,1.38,9.874a6.047,6.047,0,0,1,3.037-5.1c0.117-.072.235-0.141,0.356-0.207L4.85,4.527C4.976,4.46,5.1,4.4,5.235,4.34l0.141-.063q0.2-.086.4-0.16c0.047-.018.1-0.033,0.144-0.05q0.158-.054.319-0.1c0.05-.015.1-0.031,0.152-0.045q0.209-.058.423-0.1l0.154-.031c0.126-.024.252-0.046,0.379-0.065l0.1-.015c0.156-.021.313-0.036,0.47-0.048l0.133-.008c0.16-.01.321-0.017,0.483-0.017H8.544c3.7,0,6.759,2.462,7.127,5.605a5.664,5.664,0,0,1,.036.638c0,0.141-.007.281-0.018,0.42,0,0.037-.006.073-0.01,0.11-0.012.129-.028,0.258-0.05,0.385,0,0.011,0,.022,0,0.033-0.023.133-.053,0.265-0.087,0.4-0.01.04-.021,0.08-0.032,0.12-0.032.116-.067,0.231-0.107,0.344-0.01.03-.021,0.059-0.031,0.088-0.041.111-.086,0.222-0.134,0.331-0.019.043-.039,0.087-0.059,0.129-0.054.114-.11,0.228-0.172,0.339-0.017.032-.036,0.063-0.055,0.094q-0.081.14-.17,0.277c-0.026.04-.052,0.08-0.079,0.12-0.074.107-.15,0.214-0.232,0.318A7.5,7.5,0,0,1,8.543,16.117Zm6.595-2.644c0.013-.018.024-0.038,0.036-0.056,0.069-.1.134-0.2,0.2-0.3,0.037-.059.071-0.121,0.106-0.181s0.071-.125.1-0.188,0.064-.122.095-0.183c0.043-.088.084-0.178,0.123-0.268,0.031-.072.06-0.145,0.089-0.218s0.062-.163.09-0.246c0.019-.056.037-0.112,0.054-0.168,0.028-.091.054-0.183,0.078-0.275,0.011-.042.023-0.083,0.033-0.125,0.031-.131.057-0.263,0.079-0.4,0.007-.042.012-0.083,0.018-0.124,0.015-.1.027-0.208,0.037-0.314,0-.042.008-0.084,0.011-0.127,0.01-.141.017-0.283,0.017-0.427,0-3.764-3.481-6.826-7.761-6.826H8.494c-0.125,0-.249,0-0.373.009-0.058,0-.115.008-0.173,0.011C7.866,3.076,7.784,3.081,7.7,3.089S7.567,3.1,7.5,3.112s-0.137.016-.2,0.026-0.149.023-.223,0.035L6.9,3.2c-0.08.015-.16,0.032-0.239,0.049l-0.145.034c-0.086.02-.172,0.042-0.258,0.064l-0.09.026a8.281,8.281,0,0,0-.931.325l-0.063.026c-0.027.011-.055,0.021-0.082,0.033a7.571,7.571,0,0,1,5.842-2.633c3.95,0,7.164,2.8,7.164,6.243A5.659,5.659,0,0,1,16.919,10.8a0.286,0.286,0,0,0-.057.2,8.246,8.246,0,0,0,.844,3.246A14.167,14.167,0,0,1,15.138,13.473Z"/>
                                          </svg>
                                       </span>
                                       <span>450</span>
                                    </div>
                                    <div class="pe_fashion_cmt">
                                       <span>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18">
                                             <defs>
                                                <style>.cls-1{fill: #fff; fill-rule: evenodd;}</style>
                                             </defs>
                                             <path data-name="Forma 1" class="cls-1" d="M14.54,0.537A6.48,6.48,0,0,0,9.952,2.429,6.48,6.48,0,0,0,5.365.537C2.218,0.537,0,3.235,0,6.419,0,11.342,5.073,15.1,9.6,17.348a0.8,0.8,0,0,0,.711,0c4.526-2.245,9.6-6,9.6-10.929C19.9,3.241,17.692.537,14.54,0.537Zm-4.587,15.3c-3.815-1.947-8.4-5.274-8.4-9.415,0-2.28,1.479-4.38,3.81-4.38A4.949,4.949,0,0,1,9.3,4a0.788,0.788,0,0,0,1.306,0A4.958,4.958,0,0,1,14.54,2.039c2.332,0,3.81,2.1,3.81,4.38C18.349,10.558,13.759,13.891,9.952,15.834Z"/>
                                          </svg>
                                       </span>
                                       <span>150</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="pe_fashion_img_section">
                                 <div class="pe_fashion_img">
                                    <img src="http://placehold.it/255x255" alt="images">
                                 </div>
                                 <div class="pe_fashion_img_overlay">
                                    <div class="pe_fashion_like">
                                       <span>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18">
                                             <defs>
                                                <style>.cls-1{fill: #fff; stroke: #fff; stroke-width: 0.6px; fill-rule: evenodd;}</style>
                                             </defs>
                                             <path data-name="Forma 1" class="cls-1" d="M17.466,11.053a6.215,6.215,0,0,0,1.226-3.682c0-3.764-3.481-6.826-7.761-6.826A7.963,7.963,0,0,0,3.963,4.368,6.6,6.6,0,0,0,.783,9.874a6.211,6.211,0,0,0,1.226,3.681,5.724,5.724,0,0,1-1.138,3.4,0.287,0.287,0,0,0-.056.337,0.3,0.3,0,0,0,.267.161,0.27,0.27,0,0,0,.042,0A14.087,14.087,0,0,0,5.4,16.114a8.608,8.608,0,0,0,3.147.586,8.144,8.144,0,0,0,6.223-2.752,15.326,15.326,0,0,0,3.585,1l0.042,0a0.3,0.3,0,0,0,.267-0.161,0.287,0.287,0,0,0-.056-0.336A5.718,5.718,0,0,1,17.466,11.053ZM8.543,16.117a8.029,8.029,0,0,1-2.5-.393c1-.609,1-0.657,1-0.822A0.3,0.3,0,0,0,6.9,14.651a0.3,0.3,0,0,0-.4.079c-0.147.112-.747,0.488-1.282,0.81h0a12.025,12.025,0,0,1-3.45,1.2A8.265,8.265,0,0,0,2.613,13.5a0.286,0.286,0,0,0-.057-0.2A5.659,5.659,0,0,1,1.38,9.874a6.047,6.047,0,0,1,3.037-5.1c0.117-.072.235-0.141,0.356-0.207L4.85,4.527C4.976,4.46,5.1,4.4,5.235,4.34l0.141-.063q0.2-.086.4-0.16c0.047-.018.1-0.033,0.144-0.05q0.158-.054.319-0.1c0.05-.015.1-0.031,0.152-0.045q0.209-.058.423-0.1l0.154-.031c0.126-.024.252-0.046,0.379-0.065l0.1-.015c0.156-.021.313-0.036,0.47-0.048l0.133-.008c0.16-.01.321-0.017,0.483-0.017H8.544c3.7,0,6.759,2.462,7.127,5.605a5.664,5.664,0,0,1,.036.638c0,0.141-.007.281-0.018,0.42,0,0.037-.006.073-0.01,0.11-0.012.129-.028,0.258-0.05,0.385,0,0.011,0,.022,0,0.033-0.023.133-.053,0.265-0.087,0.4-0.01.04-.021,0.08-0.032,0.12-0.032.116-.067,0.231-0.107,0.344-0.01.03-.021,0.059-0.031,0.088-0.041.111-.086,0.222-0.134,0.331-0.019.043-.039,0.087-0.059,0.129-0.054.114-.11,0.228-0.172,0.339-0.017.032-.036,0.063-0.055,0.094q-0.081.14-.17,0.277c-0.026.04-.052,0.08-0.079,0.12-0.074.107-.15,0.214-0.232,0.318A7.5,7.5,0,0,1,8.543,16.117Zm6.595-2.644c0.013-.018.024-0.038,0.036-0.056,0.069-.1.134-0.2,0.2-0.3,0.037-.059.071-0.121,0.106-0.181s0.071-.125.1-0.188,0.064-.122.095-0.183c0.043-.088.084-0.178,0.123-0.268,0.031-.072.06-0.145,0.089-0.218s0.062-.163.09-0.246c0.019-.056.037-0.112,0.054-0.168,0.028-.091.054-0.183,0.078-0.275,0.011-.042.023-0.083,0.033-0.125,0.031-.131.057-0.263,0.079-0.4,0.007-.042.012-0.083,0.018-0.124,0.015-.1.027-0.208,0.037-0.314,0-.042.008-0.084,0.011-0.127,0.01-.141.017-0.283,0.017-0.427,0-3.764-3.481-6.826-7.761-6.826H8.494c-0.125,0-.249,0-0.373.009-0.058,0-.115.008-0.173,0.011C7.866,3.076,7.784,3.081,7.7,3.089S7.567,3.1,7.5,3.112s-0.137.016-.2,0.026-0.149.023-.223,0.035L6.9,3.2c-0.08.015-.16,0.032-0.239,0.049l-0.145.034c-0.086.02-.172,0.042-0.258,0.064l-0.09.026a8.281,8.281,0,0,0-.931.325l-0.063.026c-0.027.011-.055,0.021-0.082,0.033a7.571,7.571,0,0,1,5.842-2.633c3.95,0,7.164,2.8,7.164,6.243A5.659,5.659,0,0,1,16.919,10.8a0.286,0.286,0,0,0-.057.2,8.246,8.246,0,0,0,.844,3.246A14.167,14.167,0,0,1,15.138,13.473Z"/>
                                          </svg>
                                       </span>
                                       <span>450</span>
                                    </div>
                                    <div class="pe_fashion_cmt">
                                       <span>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18">
                                             <defs>
                                                <style>.cls-1{fill: #fff; fill-rule: evenodd;}</style>
                                             </defs>
                                             <path data-name="Forma 1" class="cls-1" d="M14.54,0.537A6.48,6.48,0,0,0,9.952,2.429,6.48,6.48,0,0,0,5.365.537C2.218,0.537,0,3.235,0,6.419,0,11.342,5.073,15.1,9.6,17.348a0.8,0.8,0,0,0,.711,0c4.526-2.245,9.6-6,9.6-10.929C19.9,3.241,17.692.537,14.54,0.537Zm-4.587,15.3c-3.815-1.947-8.4-5.274-8.4-9.415,0-2.28,1.479-4.38,3.81-4.38A4.949,4.949,0,0,1,9.3,4a0.788,0.788,0,0,0,1.306,0A4.958,4.958,0,0,1,14.54,2.039c2.332,0,3.81,2.1,3.81,4.38C18.349,10.558,13.759,13.891,9.952,15.834Z"/>
                                          </svg>
                                       </span>
                                       <span>150</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="pe_fashion_img_section">
                                 <div class="pe_fashion_img">
                                    <img src="http://placehold.it/255x255" alt="images">
                                 </div>
                                 <div class="pe_fashion_img_overlay">
                                    <div class="pe_fashion_like">
                                       <span>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18">
                                             <defs>
                                                <style>.cls-1{fill: #fff; stroke: #fff; stroke-width: 0.6px; fill-rule: evenodd;}</style>
                                             </defs>
                                             <path data-name="Forma 1" class="cls-1" d="M17.466,11.053a6.215,6.215,0,0,0,1.226-3.682c0-3.764-3.481-6.826-7.761-6.826A7.963,7.963,0,0,0,3.963,4.368,6.6,6.6,0,0,0,.783,9.874a6.211,6.211,0,0,0,1.226,3.681,5.724,5.724,0,0,1-1.138,3.4,0.287,0.287,0,0,0-.056.337,0.3,0.3,0,0,0,.267.161,0.27,0.27,0,0,0,.042,0A14.087,14.087,0,0,0,5.4,16.114a8.608,8.608,0,0,0,3.147.586,8.144,8.144,0,0,0,6.223-2.752,15.326,15.326,0,0,0,3.585,1l0.042,0a0.3,0.3,0,0,0,.267-0.161,0.287,0.287,0,0,0-.056-0.336A5.718,5.718,0,0,1,17.466,11.053ZM8.543,16.117a8.029,8.029,0,0,1-2.5-.393c1-.609,1-0.657,1-0.822A0.3,0.3,0,0,0,6.9,14.651a0.3,0.3,0,0,0-.4.079c-0.147.112-.747,0.488-1.282,0.81h0a12.025,12.025,0,0,1-3.45,1.2A8.265,8.265,0,0,0,2.613,13.5a0.286,0.286,0,0,0-.057-0.2A5.659,5.659,0,0,1,1.38,9.874a6.047,6.047,0,0,1,3.037-5.1c0.117-.072.235-0.141,0.356-0.207L4.85,4.527C4.976,4.46,5.1,4.4,5.235,4.34l0.141-.063q0.2-.086.4-0.16c0.047-.018.1-0.033,0.144-0.05q0.158-.054.319-0.1c0.05-.015.1-0.031,0.152-0.045q0.209-.058.423-0.1l0.154-.031c0.126-.024.252-0.046,0.379-0.065l0.1-.015c0.156-.021.313-0.036,0.47-0.048l0.133-.008c0.16-.01.321-0.017,0.483-0.017H8.544c3.7,0,6.759,2.462,7.127,5.605a5.664,5.664,0,0,1,.036.638c0,0.141-.007.281-0.018,0.42,0,0.037-.006.073-0.01,0.11-0.012.129-.028,0.258-0.05,0.385,0,0.011,0,.022,0,0.033-0.023.133-.053,0.265-0.087,0.4-0.01.04-.021,0.08-0.032,0.12-0.032.116-.067,0.231-0.107,0.344-0.01.03-.021,0.059-0.031,0.088-0.041.111-.086,0.222-0.134,0.331-0.019.043-.039,0.087-0.059,0.129-0.054.114-.11,0.228-0.172,0.339-0.017.032-.036,0.063-0.055,0.094q-0.081.14-.17,0.277c-0.026.04-.052,0.08-0.079,0.12-0.074.107-.15,0.214-0.232,0.318A7.5,7.5,0,0,1,8.543,16.117Zm6.595-2.644c0.013-.018.024-0.038,0.036-0.056,0.069-.1.134-0.2,0.2-0.3,0.037-.059.071-0.121,0.106-0.181s0.071-.125.1-0.188,0.064-.122.095-0.183c0.043-.088.084-0.178,0.123-0.268,0.031-.072.06-0.145,0.089-0.218s0.062-.163.09-0.246c0.019-.056.037-0.112,0.054-0.168,0.028-.091.054-0.183,0.078-0.275,0.011-.042.023-0.083,0.033-0.125,0.031-.131.057-0.263,0.079-0.4,0.007-.042.012-0.083,0.018-0.124,0.015-.1.027-0.208,0.037-0.314,0-.042.008-0.084,0.011-0.127,0.01-.141.017-0.283,0.017-0.427,0-3.764-3.481-6.826-7.761-6.826H8.494c-0.125,0-.249,0-0.373.009-0.058,0-.115.008-0.173,0.011C7.866,3.076,7.784,3.081,7.7,3.089S7.567,3.1,7.5,3.112s-0.137.016-.2,0.026-0.149.023-.223,0.035L6.9,3.2c-0.08.015-.16,0.032-0.239,0.049l-0.145.034c-0.086.02-.172,0.042-0.258,0.064l-0.09.026a8.281,8.281,0,0,0-.931.325l-0.063.026c-0.027.011-.055,0.021-0.082,0.033a7.571,7.571,0,0,1,5.842-2.633c3.95,0,7.164,2.8,7.164,6.243A5.659,5.659,0,0,1,16.919,10.8a0.286,0.286,0,0,0-.057.2,8.246,8.246,0,0,0,.844,3.246A14.167,14.167,0,0,1,15.138,13.473Z"/>
                                          </svg>
                                       </span>
                                       <span>450</span>
                                    </div>
                                    <div class="pe_fashion_cmt">
                                       <span>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18">
                                             <defs>
                                                <style>.cls-1{fill: #fff; fill-rule: evenodd;}</style>
                                             </defs>
                                             <path data-name="Forma 1" class="cls-1" d="M14.54,0.537A6.48,6.48,0,0,0,9.952,2.429,6.48,6.48,0,0,0,5.365.537C2.218,0.537,0,3.235,0,6.419,0,11.342,5.073,15.1,9.6,17.348a0.8,0.8,0,0,0,.711,0c4.526-2.245,9.6-6,9.6-10.929C19.9,3.241,17.692.537,14.54,0.537Zm-4.587,15.3c-3.815-1.947-8.4-5.274-8.4-9.415,0-2.28,1.479-4.38,3.81-4.38A4.949,4.949,0,0,1,9.3,4a0.788,0.788,0,0,0,1.306,0A4.958,4.958,0,0,1,14.54,2.039c2.332,0,3.81,2.1,3.81,4.38C18.349,10.558,13.759,13.891,9.952,15.834Z"/>
                                          </svg>
                                       </span>
                                       <span>150</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="pe_fashion_img_section">
                                 <div class="pe_fashion_img">
                                    <img src="http://placehold.it/255x255" alt="images">
                                 </div>
                                 <div class="pe_fashion_img_overlay">
                                    <div class="pe_fashion_like">
                                       <span>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18">
                                             <defs>
                                                <style>.cls-1{fill: #fff; stroke: #fff; stroke-width: 0.6px; fill-rule: evenodd;}</style>
                                             </defs>
                                             <path data-name="Forma 1" class="cls-1" d="M17.466,11.053a6.215,6.215,0,0,0,1.226-3.682c0-3.764-3.481-6.826-7.761-6.826A7.963,7.963,0,0,0,3.963,4.368,6.6,6.6,0,0,0,.783,9.874a6.211,6.211,0,0,0,1.226,3.681,5.724,5.724,0,0,1-1.138,3.4,0.287,0.287,0,0,0-.056.337,0.3,0.3,0,0,0,.267.161,0.27,0.27,0,0,0,.042,0A14.087,14.087,0,0,0,5.4,16.114a8.608,8.608,0,0,0,3.147.586,8.144,8.144,0,0,0,6.223-2.752,15.326,15.326,0,0,0,3.585,1l0.042,0a0.3,0.3,0,0,0,.267-0.161,0.287,0.287,0,0,0-.056-0.336A5.718,5.718,0,0,1,17.466,11.053ZM8.543,16.117a8.029,8.029,0,0,1-2.5-.393c1-.609,1-0.657,1-0.822A0.3,0.3,0,0,0,6.9,14.651a0.3,0.3,0,0,0-.4.079c-0.147.112-.747,0.488-1.282,0.81h0a12.025,12.025,0,0,1-3.45,1.2A8.265,8.265,0,0,0,2.613,13.5a0.286,0.286,0,0,0-.057-0.2A5.659,5.659,0,0,1,1.38,9.874a6.047,6.047,0,0,1,3.037-5.1c0.117-.072.235-0.141,0.356-0.207L4.85,4.527C4.976,4.46,5.1,4.4,5.235,4.34l0.141-.063q0.2-.086.4-0.16c0.047-.018.1-0.033,0.144-0.05q0.158-.054.319-0.1c0.05-.015.1-0.031,0.152-0.045q0.209-.058.423-0.1l0.154-.031c0.126-.024.252-0.046,0.379-0.065l0.1-.015c0.156-.021.313-0.036,0.47-0.048l0.133-.008c0.16-.01.321-0.017,0.483-0.017H8.544c3.7,0,6.759,2.462,7.127,5.605a5.664,5.664,0,0,1,.036.638c0,0.141-.007.281-0.018,0.42,0,0.037-.006.073-0.01,0.11-0.012.129-.028,0.258-0.05,0.385,0,0.011,0,.022,0,0.033-0.023.133-.053,0.265-0.087,0.4-0.01.04-.021,0.08-0.032,0.12-0.032.116-.067,0.231-0.107,0.344-0.01.03-.021,0.059-0.031,0.088-0.041.111-.086,0.222-0.134,0.331-0.019.043-.039,0.087-0.059,0.129-0.054.114-.11,0.228-0.172,0.339-0.017.032-.036,0.063-0.055,0.094q-0.081.14-.17,0.277c-0.026.04-.052,0.08-0.079,0.12-0.074.107-.15,0.214-0.232,0.318A7.5,7.5,0,0,1,8.543,16.117Zm6.595-2.644c0.013-.018.024-0.038,0.036-0.056,0.069-.1.134-0.2,0.2-0.3,0.037-.059.071-0.121,0.106-0.181s0.071-.125.1-0.188,0.064-.122.095-0.183c0.043-.088.084-0.178,0.123-0.268,0.031-.072.06-0.145,0.089-0.218s0.062-.163.09-0.246c0.019-.056.037-0.112,0.054-0.168,0.028-.091.054-0.183,0.078-0.275,0.011-.042.023-0.083,0.033-0.125,0.031-.131.057-0.263,0.079-0.4,0.007-.042.012-0.083,0.018-0.124,0.015-.1.027-0.208,0.037-0.314,0-.042.008-0.084,0.011-0.127,0.01-.141.017-0.283,0.017-0.427,0-3.764-3.481-6.826-7.761-6.826H8.494c-0.125,0-.249,0-0.373.009-0.058,0-.115.008-0.173,0.011C7.866,3.076,7.784,3.081,7.7,3.089S7.567,3.1,7.5,3.112s-0.137.016-.2,0.026-0.149.023-.223,0.035L6.9,3.2c-0.08.015-.16,0.032-0.239,0.049l-0.145.034c-0.086.02-.172,0.042-0.258,0.064l-0.09.026a8.281,8.281,0,0,0-.931.325l-0.063.026c-0.027.011-.055,0.021-0.082,0.033a7.571,7.571,0,0,1,5.842-2.633c3.95,0,7.164,2.8,7.164,6.243A5.659,5.659,0,0,1,16.919,10.8a0.286,0.286,0,0,0-.057.2,8.246,8.246,0,0,0,.844,3.246A14.167,14.167,0,0,1,15.138,13.473Z"/>
                                          </svg>
                                       </span>
                                       <span>450</span>
                                    </div>
                                    <div class="pe_fashion_cmt">
                                       <span>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18">
                                             <defs>
                                                <style>.cls-1{fill: #fff; fill-rule: evenodd;}</style>
                                             </defs>
                                             <path data-name="Forma 1" class="cls-1" d="M14.54,0.537A6.48,6.48,0,0,0,9.952,2.429,6.48,6.48,0,0,0,5.365.537C2.218,0.537,0,3.235,0,6.419,0,11.342,5.073,15.1,9.6,17.348a0.8,0.8,0,0,0,.711,0c4.526-2.245,9.6-6,9.6-10.929C19.9,3.241,17.692.537,14.54,0.537Zm-4.587,15.3c-3.815-1.947-8.4-5.274-8.4-9.415,0-2.28,1.479-4.38,3.81-4.38A4.949,4.949,0,0,1,9.3,4a0.788,0.788,0,0,0,1.306,0A4.958,4.958,0,0,1,14.54,2.039c2.332,0,3.81,2.1,3.81,4.38C18.349,10.558,13.759,13.891,9.952,15.834Z"/>
                                          </svg>
                                       </span>
                                       <span>150</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="pe_fashion_img_section">
                                 <div class="pe_fashion_img">
                                    <img src="http://placehold.it/255x255" alt="images">
                                 </div>
                                 <div class="pe_fashion_img_overlay">
                                    <div class="pe_fashion_like">
                                       <span>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18">
                                             <defs>
                                                <style>.cls-1{fill: #fff; stroke: #fff; stroke-width: 0.6px; fill-rule: evenodd;}</style>
                                             </defs>
                                             <path data-name="Forma 1" class="cls-1" d="M17.466,11.053a6.215,6.215,0,0,0,1.226-3.682c0-3.764-3.481-6.826-7.761-6.826A7.963,7.963,0,0,0,3.963,4.368,6.6,6.6,0,0,0,.783,9.874a6.211,6.211,0,0,0,1.226,3.681,5.724,5.724,0,0,1-1.138,3.4,0.287,0.287,0,0,0-.056.337,0.3,0.3,0,0,0,.267.161,0.27,0.27,0,0,0,.042,0A14.087,14.087,0,0,0,5.4,16.114a8.608,8.608,0,0,0,3.147.586,8.144,8.144,0,0,0,6.223-2.752,15.326,15.326,0,0,0,3.585,1l0.042,0a0.3,0.3,0,0,0,.267-0.161,0.287,0.287,0,0,0-.056-0.336A5.718,5.718,0,0,1,17.466,11.053ZM8.543,16.117a8.029,8.029,0,0,1-2.5-.393c1-.609,1-0.657,1-0.822A0.3,0.3,0,0,0,6.9,14.651a0.3,0.3,0,0,0-.4.079c-0.147.112-.747,0.488-1.282,0.81h0a12.025,12.025,0,0,1-3.45,1.2A8.265,8.265,0,0,0,2.613,13.5a0.286,0.286,0,0,0-.057-0.2A5.659,5.659,0,0,1,1.38,9.874a6.047,6.047,0,0,1,3.037-5.1c0.117-.072.235-0.141,0.356-0.207L4.85,4.527C4.976,4.46,5.1,4.4,5.235,4.34l0.141-.063q0.2-.086.4-0.16c0.047-.018.1-0.033,0.144-0.05q0.158-.054.319-0.1c0.05-.015.1-0.031,0.152-0.045q0.209-.058.423-0.1l0.154-.031c0.126-.024.252-0.046,0.379-0.065l0.1-.015c0.156-.021.313-0.036,0.47-0.048l0.133-.008c0.16-.01.321-0.017,0.483-0.017H8.544c3.7,0,6.759,2.462,7.127,5.605a5.664,5.664,0,0,1,.036.638c0,0.141-.007.281-0.018,0.42,0,0.037-.006.073-0.01,0.11-0.012.129-.028,0.258-0.05,0.385,0,0.011,0,.022,0,0.033-0.023.133-.053,0.265-0.087,0.4-0.01.04-.021,0.08-0.032,0.12-0.032.116-.067,0.231-0.107,0.344-0.01.03-.021,0.059-0.031,0.088-0.041.111-.086,0.222-0.134,0.331-0.019.043-.039,0.087-0.059,0.129-0.054.114-.11,0.228-0.172,0.339-0.017.032-.036,0.063-0.055,0.094q-0.081.14-.17,0.277c-0.026.04-.052,0.08-0.079,0.12-0.074.107-.15,0.214-0.232,0.318A7.5,7.5,0,0,1,8.543,16.117Zm6.595-2.644c0.013-.018.024-0.038,0.036-0.056,0.069-.1.134-0.2,0.2-0.3,0.037-.059.071-0.121,0.106-0.181s0.071-.125.1-0.188,0.064-.122.095-0.183c0.043-.088.084-0.178,0.123-0.268,0.031-.072.06-0.145,0.089-0.218s0.062-.163.09-0.246c0.019-.056.037-0.112,0.054-0.168,0.028-.091.054-0.183,0.078-0.275,0.011-.042.023-0.083,0.033-0.125,0.031-.131.057-0.263,0.079-0.4,0.007-.042.012-0.083,0.018-0.124,0.015-.1.027-0.208,0.037-0.314,0-.042.008-0.084,0.011-0.127,0.01-.141.017-0.283,0.017-0.427,0-3.764-3.481-6.826-7.761-6.826H8.494c-0.125,0-.249,0-0.373.009-0.058,0-.115.008-0.173,0.011C7.866,3.076,7.784,3.081,7.7,3.089S7.567,3.1,7.5,3.112s-0.137.016-.2,0.026-0.149.023-.223,0.035L6.9,3.2c-0.08.015-.16,0.032-0.239,0.049l-0.145.034c-0.086.02-.172,0.042-0.258,0.064l-0.09.026a8.281,8.281,0,0,0-.931.325l-0.063.026c-0.027.011-.055,0.021-0.082,0.033a7.571,7.571,0,0,1,5.842-2.633c3.95,0,7.164,2.8,7.164,6.243A5.659,5.659,0,0,1,16.919,10.8a0.286,0.286,0,0,0-.057.2,8.246,8.246,0,0,0,.844,3.246A14.167,14.167,0,0,1,15.138,13.473Z"/>
                                          </svg>
                                       </span>
                                       <span>450</span>
                                    </div>
                                    <div class="pe_fashion_cmt">
                                       <span>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18">
                                             <defs>
                                                <style>.cls-1{fill: #fff; fill-rule: evenodd;}</style>
                                             </defs>
                                             <path data-name="Forma 1" class="cls-1" d="M14.54,0.537A6.48,6.48,0,0,0,9.952,2.429,6.48,6.48,0,0,0,5.365.537C2.218,0.537,0,3.235,0,6.419,0,11.342,5.073,15.1,9.6,17.348a0.8,0.8,0,0,0,.711,0c4.526-2.245,9.6-6,9.6-10.929C19.9,3.241,17.692.537,14.54,0.537Zm-4.587,15.3c-3.815-1.947-8.4-5.274-8.4-9.415,0-2.28,1.479-4.38,3.81-4.38A4.949,4.949,0,0,1,9.3,4a0.788,0.788,0,0,0,1.306,0A4.958,4.958,0,0,1,14.54,2.039c2.332,0,3.81,2.1,3.81,4.38C18.349,10.558,13.759,13.891,9.952,15.834Z"/>
                                          </svg>
                                       </span>
                                       <span>150</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="pe_fashion_img_section">
                                 <div class="pe_fashion_img">
                                    <img src="http://placehold.it/255x255" alt="images">
                                 </div>
                                 <div class="pe_fashion_img_overlay">
                                    <div class="pe_fashion_like">
                                       <span>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18">
                                             <defs>
                                                <style>.cls-1{fill: #fff; stroke: #fff; stroke-width: 0.6px; fill-rule: evenodd;}</style>
                                             </defs>
                                             <path data-name="Forma 1" class="cls-1" d="M17.466,11.053a6.215,6.215,0,0,0,1.226-3.682c0-3.764-3.481-6.826-7.761-6.826A7.963,7.963,0,0,0,3.963,4.368,6.6,6.6,0,0,0,.783,9.874a6.211,6.211,0,0,0,1.226,3.681,5.724,5.724,0,0,1-1.138,3.4,0.287,0.287,0,0,0-.056.337,0.3,0.3,0,0,0,.267.161,0.27,0.27,0,0,0,.042,0A14.087,14.087,0,0,0,5.4,16.114a8.608,8.608,0,0,0,3.147.586,8.144,8.144,0,0,0,6.223-2.752,15.326,15.326,0,0,0,3.585,1l0.042,0a0.3,0.3,0,0,0,.267-0.161,0.287,0.287,0,0,0-.056-0.336A5.718,5.718,0,0,1,17.466,11.053ZM8.543,16.117a8.029,8.029,0,0,1-2.5-.393c1-.609,1-0.657,1-0.822A0.3,0.3,0,0,0,6.9,14.651a0.3,0.3,0,0,0-.4.079c-0.147.112-.747,0.488-1.282,0.81h0a12.025,12.025,0,0,1-3.45,1.2A8.265,8.265,0,0,0,2.613,13.5a0.286,0.286,0,0,0-.057-0.2A5.659,5.659,0,0,1,1.38,9.874a6.047,6.047,0,0,1,3.037-5.1c0.117-.072.235-0.141,0.356-0.207L4.85,4.527C4.976,4.46,5.1,4.4,5.235,4.34l0.141-.063q0.2-.086.4-0.16c0.047-.018.1-0.033,0.144-0.05q0.158-.054.319-0.1c0.05-.015.1-0.031,0.152-0.045q0.209-.058.423-0.1l0.154-.031c0.126-.024.252-0.046,0.379-0.065l0.1-.015c0.156-.021.313-0.036,0.47-0.048l0.133-.008c0.16-.01.321-0.017,0.483-0.017H8.544c3.7,0,6.759,2.462,7.127,5.605a5.664,5.664,0,0,1,.036.638c0,0.141-.007.281-0.018,0.42,0,0.037-.006.073-0.01,0.11-0.012.129-.028,0.258-0.05,0.385,0,0.011,0,.022,0,0.033-0.023.133-.053,0.265-0.087,0.4-0.01.04-.021,0.08-0.032,0.12-0.032.116-.067,0.231-0.107,0.344-0.01.03-.021,0.059-0.031,0.088-0.041.111-.086,0.222-0.134,0.331-0.019.043-.039,0.087-0.059,0.129-0.054.114-.11,0.228-0.172,0.339-0.017.032-.036,0.063-0.055,0.094q-0.081.14-.17,0.277c-0.026.04-.052,0.08-0.079,0.12-0.074.107-.15,0.214-0.232,0.318A7.5,7.5,0,0,1,8.543,16.117Zm6.595-2.644c0.013-.018.024-0.038,0.036-0.056,0.069-.1.134-0.2,0.2-0.3,0.037-.059.071-0.121,0.106-0.181s0.071-.125.1-0.188,0.064-.122.095-0.183c0.043-.088.084-0.178,0.123-0.268,0.031-.072.06-0.145,0.089-0.218s0.062-.163.09-0.246c0.019-.056.037-0.112,0.054-0.168,0.028-.091.054-0.183,0.078-0.275,0.011-.042.023-0.083,0.033-0.125,0.031-.131.057-0.263,0.079-0.4,0.007-.042.012-0.083,0.018-0.124,0.015-.1.027-0.208,0.037-0.314,0-.042.008-0.084,0.011-0.127,0.01-.141.017-0.283,0.017-0.427,0-3.764-3.481-6.826-7.761-6.826H8.494c-0.125,0-.249,0-0.373.009-0.058,0-.115.008-0.173,0.011C7.866,3.076,7.784,3.081,7.7,3.089S7.567,3.1,7.5,3.112s-0.137.016-.2,0.026-0.149.023-.223,0.035L6.9,3.2c-0.08.015-.16,0.032-0.239,0.049l-0.145.034c-0.086.02-.172,0.042-0.258,0.064l-0.09.026a8.281,8.281,0,0,0-.931.325l-0.063.026c-0.027.011-.055,0.021-0.082,0.033a7.571,7.571,0,0,1,5.842-2.633c3.95,0,7.164,2.8,7.164,6.243A5.659,5.659,0,0,1,16.919,10.8a0.286,0.286,0,0,0-.057.2,8.246,8.246,0,0,0,.844,3.246A14.167,14.167,0,0,1,15.138,13.473Z"/>
                                          </svg>
                                       </span>
                                       <span>450</span>
                                    </div>
                                    <div class="pe_fashion_cmt">
                                       <span>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18">
                                             <defs>
                                                <style>.cls-1{fill: #fff; fill-rule: evenodd;}</style>
                                             </defs>
                                             <path data-name="Forma 1" class="cls-1" d="M14.54,0.537A6.48,6.48,0,0,0,9.952,2.429,6.48,6.48,0,0,0,5.365.537C2.218,0.537,0,3.235,0,6.419,0,11.342,5.073,15.1,9.6,17.348a0.8,0.8,0,0,0,.711,0c4.526-2.245,9.6-6,9.6-10.929C19.9,3.241,17.692.537,14.54,0.537Zm-4.587,15.3c-3.815-1.947-8.4-5.274-8.4-9.415,0-2.28,1.479-4.38,3.81-4.38A4.949,4.949,0,0,1,9.3,4a0.788,0.788,0,0,0,1.306,0A4.958,4.958,0,0,1,14.54,2.039c2.332,0,3.81,2.1,3.81,4.38C18.349,10.558,13.759,13.891,9.952,15.834Z"/>
                                          </svg>
                                       </span>
                                       <span>150</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="pe_fashion_img_section">
                                 <div class="pe_fashion_img">
                                    <img src="http://placehold.it/255x255" alt="images">
                                 </div>
                                 <div class="pe_fashion_img_overlay">
                                    <div class="pe_fashion_like">
                                       <span>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18">
                                             <defs>
                                                <style>.cls-1{fill: #fff; stroke: #fff; stroke-width: 0.6px; fill-rule: evenodd;}</style>
                                             </defs>
                                             <path data-name="Forma 1" class="cls-1" d="M17.466,11.053a6.215,6.215,0,0,0,1.226-3.682c0-3.764-3.481-6.826-7.761-6.826A7.963,7.963,0,0,0,3.963,4.368,6.6,6.6,0,0,0,.783,9.874a6.211,6.211,0,0,0,1.226,3.681,5.724,5.724,0,0,1-1.138,3.4,0.287,0.287,0,0,0-.056.337,0.3,0.3,0,0,0,.267.161,0.27,0.27,0,0,0,.042,0A14.087,14.087,0,0,0,5.4,16.114a8.608,8.608,0,0,0,3.147.586,8.144,8.144,0,0,0,6.223-2.752,15.326,15.326,0,0,0,3.585,1l0.042,0a0.3,0.3,0,0,0,.267-0.161,0.287,0.287,0,0,0-.056-0.336A5.718,5.718,0,0,1,17.466,11.053ZM8.543,16.117a8.029,8.029,0,0,1-2.5-.393c1-.609,1-0.657,1-0.822A0.3,0.3,0,0,0,6.9,14.651a0.3,0.3,0,0,0-.4.079c-0.147.112-.747,0.488-1.282,0.81h0a12.025,12.025,0,0,1-3.45,1.2A8.265,8.265,0,0,0,2.613,13.5a0.286,0.286,0,0,0-.057-0.2A5.659,5.659,0,0,1,1.38,9.874a6.047,6.047,0,0,1,3.037-5.1c0.117-.072.235-0.141,0.356-0.207L4.85,4.527C4.976,4.46,5.1,4.4,5.235,4.34l0.141-.063q0.2-.086.4-0.16c0.047-.018.1-0.033,0.144-0.05q0.158-.054.319-0.1c0.05-.015.1-0.031,0.152-0.045q0.209-.058.423-0.1l0.154-.031c0.126-.024.252-0.046,0.379-0.065l0.1-.015c0.156-.021.313-0.036,0.47-0.048l0.133-.008c0.16-.01.321-0.017,0.483-0.017H8.544c3.7,0,6.759,2.462,7.127,5.605a5.664,5.664,0,0,1,.036.638c0,0.141-.007.281-0.018,0.42,0,0.037-.006.073-0.01,0.11-0.012.129-.028,0.258-0.05,0.385,0,0.011,0,.022,0,0.033-0.023.133-.053,0.265-0.087,0.4-0.01.04-.021,0.08-0.032,0.12-0.032.116-.067,0.231-0.107,0.344-0.01.03-.021,0.059-0.031,0.088-0.041.111-.086,0.222-0.134,0.331-0.019.043-.039,0.087-0.059,0.129-0.054.114-.11,0.228-0.172,0.339-0.017.032-.036,0.063-0.055,0.094q-0.081.14-.17,0.277c-0.026.04-.052,0.08-0.079,0.12-0.074.107-.15,0.214-0.232,0.318A7.5,7.5,0,0,1,8.543,16.117Zm6.595-2.644c0.013-.018.024-0.038,0.036-0.056,0.069-.1.134-0.2,0.2-0.3,0.037-.059.071-0.121,0.106-0.181s0.071-.125.1-0.188,0.064-.122.095-0.183c0.043-.088.084-0.178,0.123-0.268,0.031-.072.06-0.145,0.089-0.218s0.062-.163.09-0.246c0.019-.056.037-0.112,0.054-0.168,0.028-.091.054-0.183,0.078-0.275,0.011-.042.023-0.083,0.033-0.125,0.031-.131.057-0.263,0.079-0.4,0.007-.042.012-0.083,0.018-0.124,0.015-.1.027-0.208,0.037-0.314,0-.042.008-0.084,0.011-0.127,0.01-.141.017-0.283,0.017-0.427,0-3.764-3.481-6.826-7.761-6.826H8.494c-0.125,0-.249,0-0.373.009-0.058,0-.115.008-0.173,0.011C7.866,3.076,7.784,3.081,7.7,3.089S7.567,3.1,7.5,3.112s-0.137.016-.2,0.026-0.149.023-.223,0.035L6.9,3.2c-0.08.015-.16,0.032-0.239,0.049l-0.145.034c-0.086.02-.172,0.042-0.258,0.064l-0.09.026a8.281,8.281,0,0,0-.931.325l-0.063.026c-0.027.011-.055,0.021-0.082,0.033a7.571,7.571,0,0,1,5.842-2.633c3.95,0,7.164,2.8,7.164,6.243A5.659,5.659,0,0,1,16.919,10.8a0.286,0.286,0,0,0-.057.2,8.246,8.246,0,0,0,.844,3.246A14.167,14.167,0,0,1,15.138,13.473Z"/>
                                          </svg>
                                       </span>
                                       <span>450</span>
                                    </div>
                                    <div class="pe_fashion_cmt">
                                       <span>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18">
                                             <defs>
                                                <style>.cls-1{fill: #fff; fill-rule: evenodd;}</style>
                                             </defs>
                                             <path data-name="Forma 1" class="cls-1" d="M14.54,0.537A6.48,6.48,0,0,0,9.952,2.429,6.48,6.48,0,0,0,5.365.537C2.218,0.537,0,3.235,0,6.419,0,11.342,5.073,15.1,9.6,17.348a0.8,0.8,0,0,0,.711,0c4.526-2.245,9.6-6,9.6-10.929C19.9,3.241,17.692.537,14.54,0.537Zm-4.587,15.3c-3.815-1.947-8.4-5.274-8.4-9.415,0-2.28,1.479-4.38,3.81-4.38A4.949,4.949,0,0,1,9.3,4a0.788,0.788,0,0,0,1.306,0A4.958,4.958,0,0,1,14.54,2.039c2.332,0,3.81,2.1,3.81,4.38C18.349,10.558,13.759,13.891,9.952,15.834Z"/>
                                          </svg>
                                       </span>
                                       <span>150</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="pe_fashion_img_section">
                                 <div class="pe_fashion_img">
                                    <img src="http://placehold.it/255x255" alt="images">
                                 </div>
                                 <div class="pe_fashion_img_overlay">
                                    <div class="pe_fashion_like">
                                       <span>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18">
                                             <defs>
                                                <style>.cls-1{fill: #fff; stroke: #fff; stroke-width: 0.6px; fill-rule: evenodd;}</style>
                                             </defs>
                                             <path data-name="Forma 1" class="cls-1" d="M17.466,11.053a6.215,6.215,0,0,0,1.226-3.682c0-3.764-3.481-6.826-7.761-6.826A7.963,7.963,0,0,0,3.963,4.368,6.6,6.6,0,0,0,.783,9.874a6.211,6.211,0,0,0,1.226,3.681,5.724,5.724,0,0,1-1.138,3.4,0.287,0.287,0,0,0-.056.337,0.3,0.3,0,0,0,.267.161,0.27,0.27,0,0,0,.042,0A14.087,14.087,0,0,0,5.4,16.114a8.608,8.608,0,0,0,3.147.586,8.144,8.144,0,0,0,6.223-2.752,15.326,15.326,0,0,0,3.585,1l0.042,0a0.3,0.3,0,0,0,.267-0.161,0.287,0.287,0,0,0-.056-0.336A5.718,5.718,0,0,1,17.466,11.053ZM8.543,16.117a8.029,8.029,0,0,1-2.5-.393c1-.609,1-0.657,1-0.822A0.3,0.3,0,0,0,6.9,14.651a0.3,0.3,0,0,0-.4.079c-0.147.112-.747,0.488-1.282,0.81h0a12.025,12.025,0,0,1-3.45,1.2A8.265,8.265,0,0,0,2.613,13.5a0.286,0.286,0,0,0-.057-0.2A5.659,5.659,0,0,1,1.38,9.874a6.047,6.047,0,0,1,3.037-5.1c0.117-.072.235-0.141,0.356-0.207L4.85,4.527C4.976,4.46,5.1,4.4,5.235,4.34l0.141-.063q0.2-.086.4-0.16c0.047-.018.1-0.033,0.144-0.05q0.158-.054.319-0.1c0.05-.015.1-0.031,0.152-0.045q0.209-.058.423-0.1l0.154-.031c0.126-.024.252-0.046,0.379-0.065l0.1-.015c0.156-.021.313-0.036,0.47-0.048l0.133-.008c0.16-.01.321-0.017,0.483-0.017H8.544c3.7,0,6.759,2.462,7.127,5.605a5.664,5.664,0,0,1,.036.638c0,0.141-.007.281-0.018,0.42,0,0.037-.006.073-0.01,0.11-0.012.129-.028,0.258-0.05,0.385,0,0.011,0,.022,0,0.033-0.023.133-.053,0.265-0.087,0.4-0.01.04-.021,0.08-0.032,0.12-0.032.116-.067,0.231-0.107,0.344-0.01.03-.021,0.059-0.031,0.088-0.041.111-.086,0.222-0.134,0.331-0.019.043-.039,0.087-0.059,0.129-0.054.114-.11,0.228-0.172,0.339-0.017.032-.036,0.063-0.055,0.094q-0.081.14-.17,0.277c-0.026.04-.052,0.08-0.079,0.12-0.074.107-.15,0.214-0.232,0.318A7.5,7.5,0,0,1,8.543,16.117Zm6.595-2.644c0.013-.018.024-0.038,0.036-0.056,0.069-.1.134-0.2,0.2-0.3,0.037-.059.071-0.121,0.106-0.181s0.071-.125.1-0.188,0.064-.122.095-0.183c0.043-.088.084-0.178,0.123-0.268,0.031-.072.06-0.145,0.089-0.218s0.062-.163.09-0.246c0.019-.056.037-0.112,0.054-0.168,0.028-.091.054-0.183,0.078-0.275,0.011-.042.023-0.083,0.033-0.125,0.031-.131.057-0.263,0.079-0.4,0.007-.042.012-0.083,0.018-0.124,0.015-.1.027-0.208,0.037-0.314,0-.042.008-0.084,0.011-0.127,0.01-.141.017-0.283,0.017-0.427,0-3.764-3.481-6.826-7.761-6.826H8.494c-0.125,0-.249,0-0.373.009-0.058,0-.115.008-0.173,0.011C7.866,3.076,7.784,3.081,7.7,3.089S7.567,3.1,7.5,3.112s-0.137.016-.2,0.026-0.149.023-.223,0.035L6.9,3.2c-0.08.015-.16,0.032-0.239,0.049l-0.145.034c-0.086.02-.172,0.042-0.258,0.064l-0.09.026a8.281,8.281,0,0,0-.931.325l-0.063.026c-0.027.011-.055,0.021-0.082,0.033a7.571,7.571,0,0,1,5.842-2.633c3.95,0,7.164,2.8,7.164,6.243A5.659,5.659,0,0,1,16.919,10.8a0.286,0.286,0,0,0-.057.2,8.246,8.246,0,0,0,.844,3.246A14.167,14.167,0,0,1,15.138,13.473Z"/>
                                          </svg>
                                       </span>
                                       <span>450</span>
                                    </div>
                                    <div class="pe_fashion_cmt">
                                       <span>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18">
                                             <defs>
                                                <style>.cls-1{fill: #fff; fill-rule: evenodd;}</style>
                                             </defs>
                                             <path data-name="Forma 1" class="cls-1" d="M14.54,0.537A6.48,6.48,0,0,0,9.952,2.429,6.48,6.48,0,0,0,5.365.537C2.218,0.537,0,3.235,0,6.419,0,11.342,5.073,15.1,9.6,17.348a0.8,0.8,0,0,0,.711,0c4.526-2.245,9.6-6,9.6-10.929C19.9,3.241,17.692.537,14.54,0.537Zm-4.587,15.3c-3.815-1.947-8.4-5.274-8.4-9.415,0-2.28,1.479-4.38,3.81-4.38A4.949,4.949,0,0,1,9.3,4a0.788,0.788,0,0,0,1.306,0A4.958,4.958,0,0,1,14.54,2.039c2.332,0,3.81,2.1,3.81,4.38C18.349,10.558,13.759,13.891,9.952,15.834Z"/>
                                          </svg>
                                       </span>
                                       <span>150</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="pe_fashion_img_section">
                                 <div class="pe_fashion_img">
                                    <img src="http://placehold.it/255x255" alt="images">
                                 </div>
                                 <div class="pe_fashion_img_overlay">
                                    <div class="pe_fashion_like">
                                       <span>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18">
                                             <defs>
                                                <style>.cls-1{fill: #fff; stroke: #fff; stroke-width: 0.6px; fill-rule: evenodd;}</style>
                                             </defs>
                                             <path data-name="Forma 1" class="cls-1" d="M17.466,11.053a6.215,6.215,0,0,0,1.226-3.682c0-3.764-3.481-6.826-7.761-6.826A7.963,7.963,0,0,0,3.963,4.368,6.6,6.6,0,0,0,.783,9.874a6.211,6.211,0,0,0,1.226,3.681,5.724,5.724,0,0,1-1.138,3.4,0.287,0.287,0,0,0-.056.337,0.3,0.3,0,0,0,.267.161,0.27,0.27,0,0,0,.042,0A14.087,14.087,0,0,0,5.4,16.114a8.608,8.608,0,0,0,3.147.586,8.144,8.144,0,0,0,6.223-2.752,15.326,15.326,0,0,0,3.585,1l0.042,0a0.3,0.3,0,0,0,.267-0.161,0.287,0.287,0,0,0-.056-0.336A5.718,5.718,0,0,1,17.466,11.053ZM8.543,16.117a8.029,8.029,0,0,1-2.5-.393c1-.609,1-0.657,1-0.822A0.3,0.3,0,0,0,6.9,14.651a0.3,0.3,0,0,0-.4.079c-0.147.112-.747,0.488-1.282,0.81h0a12.025,12.025,0,0,1-3.45,1.2A8.265,8.265,0,0,0,2.613,13.5a0.286,0.286,0,0,0-.057-0.2A5.659,5.659,0,0,1,1.38,9.874a6.047,6.047,0,0,1,3.037-5.1c0.117-.072.235-0.141,0.356-0.207L4.85,4.527C4.976,4.46,5.1,4.4,5.235,4.34l0.141-.063q0.2-.086.4-0.16c0.047-.018.1-0.033,0.144-0.05q0.158-.054.319-0.1c0.05-.015.1-0.031,0.152-0.045q0.209-.058.423-0.1l0.154-.031c0.126-.024.252-0.046,0.379-0.065l0.1-.015c0.156-.021.313-0.036,0.47-0.048l0.133-.008c0.16-.01.321-0.017,0.483-0.017H8.544c3.7,0,6.759,2.462,7.127,5.605a5.664,5.664,0,0,1,.036.638c0,0.141-.007.281-0.018,0.42,0,0.037-.006.073-0.01,0.11-0.012.129-.028,0.258-0.05,0.385,0,0.011,0,.022,0,0.033-0.023.133-.053,0.265-0.087,0.4-0.01.04-.021,0.08-0.032,0.12-0.032.116-.067,0.231-0.107,0.344-0.01.03-.021,0.059-0.031,0.088-0.041.111-.086,0.222-0.134,0.331-0.019.043-.039,0.087-0.059,0.129-0.054.114-.11,0.228-0.172,0.339-0.017.032-.036,0.063-0.055,0.094q-0.081.14-.17,0.277c-0.026.04-.052,0.08-0.079,0.12-0.074.107-.15,0.214-0.232,0.318A7.5,7.5,0,0,1,8.543,16.117Zm6.595-2.644c0.013-.018.024-0.038,0.036-0.056,0.069-.1.134-0.2,0.2-0.3,0.037-.059.071-0.121,0.106-0.181s0.071-.125.1-0.188,0.064-.122.095-0.183c0.043-.088.084-0.178,0.123-0.268,0.031-.072.06-0.145,0.089-0.218s0.062-.163.09-0.246c0.019-.056.037-0.112,0.054-0.168,0.028-.091.054-0.183,0.078-0.275,0.011-.042.023-0.083,0.033-0.125,0.031-.131.057-0.263,0.079-0.4,0.007-.042.012-0.083,0.018-0.124,0.015-.1.027-0.208,0.037-0.314,0-.042.008-0.084,0.011-0.127,0.01-.141.017-0.283,0.017-0.427,0-3.764-3.481-6.826-7.761-6.826H8.494c-0.125,0-.249,0-0.373.009-0.058,0-.115.008-0.173,0.011C7.866,3.076,7.784,3.081,7.7,3.089S7.567,3.1,7.5,3.112s-0.137.016-.2,0.026-0.149.023-.223,0.035L6.9,3.2c-0.08.015-.16,0.032-0.239,0.049l-0.145.034c-0.086.02-.172,0.042-0.258,0.064l-0.09.026a8.281,8.281,0,0,0-.931.325l-0.063.026c-0.027.011-.055,0.021-0.082,0.033a7.571,7.571,0,0,1,5.842-2.633c3.95,0,7.164,2.8,7.164,6.243A5.659,5.659,0,0,1,16.919,10.8a0.286,0.286,0,0,0-.057.2,8.246,8.246,0,0,0,.844,3.246A14.167,14.167,0,0,1,15.138,13.473Z"/>
                                          </svg>
                                       </span>
                                       <span>450</span>
                                    </div>
                                    <div class="pe_fashion_cmt">
                                       <span>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18">
                                             <defs>
                                                <style>.cls-1{fill: #fff; fill-rule: evenodd;}</style>
                                             </defs>
                                             <path data-name="Forma 1" class="cls-1" d="M14.54,0.537A6.48,6.48,0,0,0,9.952,2.429,6.48,6.48,0,0,0,5.365.537C2.218,0.537,0,3.235,0,6.419,0,11.342,5.073,15.1,9.6,17.348a0.8,0.8,0,0,0,.711,0c4.526-2.245,9.6-6,9.6-10.929C19.9,3.241,17.692.537,14.54,0.537Zm-4.587,15.3c-3.815-1.947-8.4-5.274-8.4-9.415,0-2.28,1.479-4.38,3.81-4.38A4.949,4.949,0,0,1,9.3,4a0.788,0.788,0,0,0,1.306,0A4.958,4.958,0,0,1,14.54,2.039c2.332,0,3.81,2.1,3.81,4.38C18.349,10.558,13.759,13.891,9.952,15.834Z"/>
                                          </svg>
                                       </span>
                                       <span>150</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="pe_fashion_img_section">
                                 <div class="pe_fashion_img">
                                    <img src="http://placehold.it/255x255" alt="images">
                                 </div>
                                 <div class="pe_fashion_img_overlay">
                                    <div class="pe_fashion_like">
                                       <span>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18">
                                             <defs>
                                                <style>.cls-1{fill: #fff; stroke: #fff; stroke-width: 0.6px; fill-rule: evenodd;}</style>
                                             </defs>
                                             <path data-name="Forma 1" class="cls-1" d="M17.466,11.053a6.215,6.215,0,0,0,1.226-3.682c0-3.764-3.481-6.826-7.761-6.826A7.963,7.963,0,0,0,3.963,4.368,6.6,6.6,0,0,0,.783,9.874a6.211,6.211,0,0,0,1.226,3.681,5.724,5.724,0,0,1-1.138,3.4,0.287,0.287,0,0,0-.056.337,0.3,0.3,0,0,0,.267.161,0.27,0.27,0,0,0,.042,0A14.087,14.087,0,0,0,5.4,16.114a8.608,8.608,0,0,0,3.147.586,8.144,8.144,0,0,0,6.223-2.752,15.326,15.326,0,0,0,3.585,1l0.042,0a0.3,0.3,0,0,0,.267-0.161,0.287,0.287,0,0,0-.056-0.336A5.718,5.718,0,0,1,17.466,11.053ZM8.543,16.117a8.029,8.029,0,0,1-2.5-.393c1-.609,1-0.657,1-0.822A0.3,0.3,0,0,0,6.9,14.651a0.3,0.3,0,0,0-.4.079c-0.147.112-.747,0.488-1.282,0.81h0a12.025,12.025,0,0,1-3.45,1.2A8.265,8.265,0,0,0,2.613,13.5a0.286,0.286,0,0,0-.057-0.2A5.659,5.659,0,0,1,1.38,9.874a6.047,6.047,0,0,1,3.037-5.1c0.117-.072.235-0.141,0.356-0.207L4.85,4.527C4.976,4.46,5.1,4.4,5.235,4.34l0.141-.063q0.2-.086.4-0.16c0.047-.018.1-0.033,0.144-0.05q0.158-.054.319-0.1c0.05-.015.1-0.031,0.152-0.045q0.209-.058.423-0.1l0.154-.031c0.126-.024.252-0.046,0.379-0.065l0.1-.015c0.156-.021.313-0.036,0.47-0.048l0.133-.008c0.16-.01.321-0.017,0.483-0.017H8.544c3.7,0,6.759,2.462,7.127,5.605a5.664,5.664,0,0,1,.036.638c0,0.141-.007.281-0.018,0.42,0,0.037-.006.073-0.01,0.11-0.012.129-.028,0.258-0.05,0.385,0,0.011,0,.022,0,0.033-0.023.133-.053,0.265-0.087,0.4-0.01.04-.021,0.08-0.032,0.12-0.032.116-.067,0.231-0.107,0.344-0.01.03-.021,0.059-0.031,0.088-0.041.111-.086,0.222-0.134,0.331-0.019.043-.039,0.087-0.059,0.129-0.054.114-.11,0.228-0.172,0.339-0.017.032-.036,0.063-0.055,0.094q-0.081.14-.17,0.277c-0.026.04-.052,0.08-0.079,0.12-0.074.107-.15,0.214-0.232,0.318A7.5,7.5,0,0,1,8.543,16.117Zm6.595-2.644c0.013-.018.024-0.038,0.036-0.056,0.069-.1.134-0.2,0.2-0.3,0.037-.059.071-0.121,0.106-0.181s0.071-.125.1-0.188,0.064-.122.095-0.183c0.043-.088.084-0.178,0.123-0.268,0.031-.072.06-0.145,0.089-0.218s0.062-.163.09-0.246c0.019-.056.037-0.112,0.054-0.168,0.028-.091.054-0.183,0.078-0.275,0.011-.042.023-0.083,0.033-0.125,0.031-.131.057-0.263,0.079-0.4,0.007-.042.012-0.083,0.018-0.124,0.015-.1.027-0.208,0.037-0.314,0-.042.008-0.084,0.011-0.127,0.01-.141.017-0.283,0.017-0.427,0-3.764-3.481-6.826-7.761-6.826H8.494c-0.125,0-.249,0-0.373.009-0.058,0-.115.008-0.173,0.011C7.866,3.076,7.784,3.081,7.7,3.089S7.567,3.1,7.5,3.112s-0.137.016-.2,0.026-0.149.023-.223,0.035L6.9,3.2c-0.08.015-.16,0.032-0.239,0.049l-0.145.034c-0.086.02-.172,0.042-0.258,0.064l-0.09.026a8.281,8.281,0,0,0-.931.325l-0.063.026c-0.027.011-.055,0.021-0.082,0.033a7.571,7.571,0,0,1,5.842-2.633c3.95,0,7.164,2.8,7.164,6.243A5.659,5.659,0,0,1,16.919,10.8a0.286,0.286,0,0,0-.057.2,8.246,8.246,0,0,0,.844,3.246A14.167,14.167,0,0,1,15.138,13.473Z"/>
                                          </svg>
                                       </span>
                                       <span>450</span>
                                    </div>
                                    <div class="pe_fashion_cmt">
                                       <span>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18">
                                             <defs>
                                                <style>.cls-1{fill: #fff; fill-rule: evenodd;}</style>
                                             </defs>
                                             <path data-name="Forma 1" class="cls-1" d="M14.54,0.537A6.48,6.48,0,0,0,9.952,2.429,6.48,6.48,0,0,0,5.365.537C2.218,0.537,0,3.235,0,6.419,0,11.342,5.073,15.1,9.6,17.348a0.8,0.8,0,0,0,.711,0c4.526-2.245,9.6-6,9.6-10.929C19.9,3.241,17.692.537,14.54,0.537Zm-4.587,15.3c-3.815-1.947-8.4-5.274-8.4-9.415,0-2.28,1.479-4.38,3.81-4.38A4.949,4.949,0,0,1,9.3,4a0.788,0.788,0,0,0,1.306,0A4.958,4.958,0,0,1,14.54,2.039c2.332,0,3.81,2.1,3.81,4.38C18.349,10.558,13.759,13.891,9.952,15.834Z"/>
                                          </svg>
                                       </span>
                                       <span>150</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="pe_fashion_img_section">
                                 <div class="pe_fashion_img">
                                    <img src="http://placehold.it/255x255" alt="images">
                                 </div>
                                 <div class="pe_fashion_img_overlay">
                                    <div class="pe_fashion_like">
                                       <span>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18">
                                             <defs>
                                                <style>.cls-1{fill: #fff; stroke: #fff; stroke-width: 0.6px; fill-rule: evenodd;}</style>
                                             </defs>
                                             <path data-name="Forma 1" class="cls-1" d="M17.466,11.053a6.215,6.215,0,0,0,1.226-3.682c0-3.764-3.481-6.826-7.761-6.826A7.963,7.963,0,0,0,3.963,4.368,6.6,6.6,0,0,0,.783,9.874a6.211,6.211,0,0,0,1.226,3.681,5.724,5.724,0,0,1-1.138,3.4,0.287,0.287,0,0,0-.056.337,0.3,0.3,0,0,0,.267.161,0.27,0.27,0,0,0,.042,0A14.087,14.087,0,0,0,5.4,16.114a8.608,8.608,0,0,0,3.147.586,8.144,8.144,0,0,0,6.223-2.752,15.326,15.326,0,0,0,3.585,1l0.042,0a0.3,0.3,0,0,0,.267-0.161,0.287,0.287,0,0,0-.056-0.336A5.718,5.718,0,0,1,17.466,11.053ZM8.543,16.117a8.029,8.029,0,0,1-2.5-.393c1-.609,1-0.657,1-0.822A0.3,0.3,0,0,0,6.9,14.651a0.3,0.3,0,0,0-.4.079c-0.147.112-.747,0.488-1.282,0.81h0a12.025,12.025,0,0,1-3.45,1.2A8.265,8.265,0,0,0,2.613,13.5a0.286,0.286,0,0,0-.057-0.2A5.659,5.659,0,0,1,1.38,9.874a6.047,6.047,0,0,1,3.037-5.1c0.117-.072.235-0.141,0.356-0.207L4.85,4.527C4.976,4.46,5.1,4.4,5.235,4.34l0.141-.063q0.2-.086.4-0.16c0.047-.018.1-0.033,0.144-0.05q0.158-.054.319-0.1c0.05-.015.1-0.031,0.152-0.045q0.209-.058.423-0.1l0.154-.031c0.126-.024.252-0.046,0.379-0.065l0.1-.015c0.156-.021.313-0.036,0.47-0.048l0.133-.008c0.16-.01.321-0.017,0.483-0.017H8.544c3.7,0,6.759,2.462,7.127,5.605a5.664,5.664,0,0,1,.036.638c0,0.141-.007.281-0.018,0.42,0,0.037-.006.073-0.01,0.11-0.012.129-.028,0.258-0.05,0.385,0,0.011,0,.022,0,0.033-0.023.133-.053,0.265-0.087,0.4-0.01.04-.021,0.08-0.032,0.12-0.032.116-.067,0.231-0.107,0.344-0.01.03-.021,0.059-0.031,0.088-0.041.111-.086,0.222-0.134,0.331-0.019.043-.039,0.087-0.059,0.129-0.054.114-.11,0.228-0.172,0.339-0.017.032-.036,0.063-0.055,0.094q-0.081.14-.17,0.277c-0.026.04-.052,0.08-0.079,0.12-0.074.107-.15,0.214-0.232,0.318A7.5,7.5,0,0,1,8.543,16.117Zm6.595-2.644c0.013-.018.024-0.038,0.036-0.056,0.069-.1.134-0.2,0.2-0.3,0.037-.059.071-0.121,0.106-0.181s0.071-.125.1-0.188,0.064-.122.095-0.183c0.043-.088.084-0.178,0.123-0.268,0.031-.072.06-0.145,0.089-0.218s0.062-.163.09-0.246c0.019-.056.037-0.112,0.054-0.168,0.028-.091.054-0.183,0.078-0.275,0.011-.042.023-0.083,0.033-0.125,0.031-.131.057-0.263,0.079-0.4,0.007-.042.012-0.083,0.018-0.124,0.015-.1.027-0.208,0.037-0.314,0-.042.008-0.084,0.011-0.127,0.01-.141.017-0.283,0.017-0.427,0-3.764-3.481-6.826-7.761-6.826H8.494c-0.125,0-.249,0-0.373.009-0.058,0-.115.008-0.173,0.011C7.866,3.076,7.784,3.081,7.7,3.089S7.567,3.1,7.5,3.112s-0.137.016-.2,0.026-0.149.023-.223,0.035L6.9,3.2c-0.08.015-.16,0.032-0.239,0.049l-0.145.034c-0.086.02-.172,0.042-0.258,0.064l-0.09.026a8.281,8.281,0,0,0-.931.325l-0.063.026c-0.027.011-.055,0.021-0.082,0.033a7.571,7.571,0,0,1,5.842-2.633c3.95,0,7.164,2.8,7.164,6.243A5.659,5.659,0,0,1,16.919,10.8a0.286,0.286,0,0,0-.057.2,8.246,8.246,0,0,0,.844,3.246A14.167,14.167,0,0,1,15.138,13.473Z"/>
                                          </svg>
                                       </span>
                                       <span>450</span>
                                    </div>
                                    <div class="pe_fashion_cmt">
                                       <span>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18">
                                             <defs>
                                                <style>.cls-1{fill: #fff; fill-rule: evenodd;}</style>
                                             </defs>
                                             <path data-name="Forma 1" class="cls-1" d="M14.54,0.537A6.48,6.48,0,0,0,9.952,2.429,6.48,6.48,0,0,0,5.365.537C2.218,0.537,0,3.235,0,6.419,0,11.342,5.073,15.1,9.6,17.348a0.8,0.8,0,0,0,.711,0c4.526-2.245,9.6-6,9.6-10.929C19.9,3.241,17.692.537,14.54,0.537Zm-4.587,15.3c-3.815-1.947-8.4-5.274-8.4-9.415,0-2.28,1.479-4.38,3.81-4.38A4.949,4.949,0,0,1,9.3,4a0.788,0.788,0,0,0,1.306,0A4.958,4.958,0,0,1,14.54,2.039c2.332,0,3.81,2.1,3.81,4.38C18.349,10.558,13.759,13.891,9.952,15.834Z"/>
                                          </svg>
                                       </span>
                                       <span>150</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="pe_fashion_img_section">
                                 <div class="pe_fashion_img">
                                    <img src="http://placehold.it/255x255" alt="images">
                                 </div>
                                 <div class="pe_fashion_img_overlay">
                                    <div class="pe_fashion_like">
                                       <span>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18">
                                             <defs>
                                                <style>.cls-1{fill: #fff; stroke: #fff; stroke-width: 0.6px; fill-rule: evenodd;}</style>
                                             </defs>
                                             <path data-name="Forma 1" class="cls-1" d="M17.466,11.053a6.215,6.215,0,0,0,1.226-3.682c0-3.764-3.481-6.826-7.761-6.826A7.963,7.963,0,0,0,3.963,4.368,6.6,6.6,0,0,0,.783,9.874a6.211,6.211,0,0,0,1.226,3.681,5.724,5.724,0,0,1-1.138,3.4,0.287,0.287,0,0,0-.056.337,0.3,0.3,0,0,0,.267.161,0.27,0.27,0,0,0,.042,0A14.087,14.087,0,0,0,5.4,16.114a8.608,8.608,0,0,0,3.147.586,8.144,8.144,0,0,0,6.223-2.752,15.326,15.326,0,0,0,3.585,1l0.042,0a0.3,0.3,0,0,0,.267-0.161,0.287,0.287,0,0,0-.056-0.336A5.718,5.718,0,0,1,17.466,11.053ZM8.543,16.117a8.029,8.029,0,0,1-2.5-.393c1-.609,1-0.657,1-0.822A0.3,0.3,0,0,0,6.9,14.651a0.3,0.3,0,0,0-.4.079c-0.147.112-.747,0.488-1.282,0.81h0a12.025,12.025,0,0,1-3.45,1.2A8.265,8.265,0,0,0,2.613,13.5a0.286,0.286,0,0,0-.057-0.2A5.659,5.659,0,0,1,1.38,9.874a6.047,6.047,0,0,1,3.037-5.1c0.117-.072.235-0.141,0.356-0.207L4.85,4.527C4.976,4.46,5.1,4.4,5.235,4.34l0.141-.063q0.2-.086.4-0.16c0.047-.018.1-0.033,0.144-0.05q0.158-.054.319-0.1c0.05-.015.1-0.031,0.152-0.045q0.209-.058.423-0.1l0.154-.031c0.126-.024.252-0.046,0.379-0.065l0.1-.015c0.156-.021.313-0.036,0.47-0.048l0.133-.008c0.16-.01.321-0.017,0.483-0.017H8.544c3.7,0,6.759,2.462,7.127,5.605a5.664,5.664,0,0,1,.036.638c0,0.141-.007.281-0.018,0.42,0,0.037-.006.073-0.01,0.11-0.012.129-.028,0.258-0.05,0.385,0,0.011,0,.022,0,0.033-0.023.133-.053,0.265-0.087,0.4-0.01.04-.021,0.08-0.032,0.12-0.032.116-.067,0.231-0.107,0.344-0.01.03-.021,0.059-0.031,0.088-0.041.111-.086,0.222-0.134,0.331-0.019.043-.039,0.087-0.059,0.129-0.054.114-.11,0.228-0.172,0.339-0.017.032-.036,0.063-0.055,0.094q-0.081.14-.17,0.277c-0.026.04-.052,0.08-0.079,0.12-0.074.107-.15,0.214-0.232,0.318A7.5,7.5,0,0,1,8.543,16.117Zm6.595-2.644c0.013-.018.024-0.038,0.036-0.056,0.069-.1.134-0.2,0.2-0.3,0.037-.059.071-0.121,0.106-0.181s0.071-.125.1-0.188,0.064-.122.095-0.183c0.043-.088.084-0.178,0.123-0.268,0.031-.072.06-0.145,0.089-0.218s0.062-.163.09-0.246c0.019-.056.037-0.112,0.054-0.168,0.028-.091.054-0.183,0.078-0.275,0.011-.042.023-0.083,0.033-0.125,0.031-.131.057-0.263,0.079-0.4,0.007-.042.012-0.083,0.018-0.124,0.015-.1.027-0.208,0.037-0.314,0-.042.008-0.084,0.011-0.127,0.01-.141.017-0.283,0.017-0.427,0-3.764-3.481-6.826-7.761-6.826H8.494c-0.125,0-.249,0-0.373.009-0.058,0-.115.008-0.173,0.011C7.866,3.076,7.784,3.081,7.7,3.089S7.567,3.1,7.5,3.112s-0.137.016-.2,0.026-0.149.023-.223,0.035L6.9,3.2c-0.08.015-.16,0.032-0.239,0.049l-0.145.034c-0.086.02-.172,0.042-0.258,0.064l-0.09.026a8.281,8.281,0,0,0-.931.325l-0.063.026c-0.027.011-.055,0.021-0.082,0.033a7.571,7.571,0,0,1,5.842-2.633c3.95,0,7.164,2.8,7.164,6.243A5.659,5.659,0,0,1,16.919,10.8a0.286,0.286,0,0,0-.057.2,8.246,8.246,0,0,0,.844,3.246A14.167,14.167,0,0,1,15.138,13.473Z"/>
                                          </svg>
                                       </span>
                                       <span>450</span>
                                    </div>
                                    <div class="pe_fashion_cmt">
                                       <span>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18">
                                             <defs>
                                                <style>.cls-1{fill: #fff; fill-rule: evenodd;}</style>
                                             </defs>
                                             <path data-name="Forma 1" class="cls-1" d="M14.54,0.537A6.48,6.48,0,0,0,9.952,2.429,6.48,6.48,0,0,0,5.365.537C2.218,0.537,0,3.235,0,6.419,0,11.342,5.073,15.1,9.6,17.348a0.8,0.8,0,0,0,.711,0c4.526-2.245,9.6-6,9.6-10.929C19.9,3.241,17.692.537,14.54,0.537Zm-4.587,15.3c-3.815-1.947-8.4-5.274-8.4-9.415,0-2.28,1.479-4.38,3.81-4.38A4.949,4.949,0,0,1,9.3,4a0.788,0.788,0,0,0,1.306,0A4.958,4.958,0,0,1,14.54,2.039c2.332,0,3.81,2.1,3.81,4.38C18.349,10.558,13.759,13.891,9.952,15.834Z"/>
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
