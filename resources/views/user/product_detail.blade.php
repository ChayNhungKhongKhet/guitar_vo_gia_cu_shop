@extends('user.layout.master')
        @section('content')
            <section>
               <div class="pe_in_banner_wrapper">
                  <div class="container">
                     <div class="pe_in_banner_section">
                        <div class="pe_in_banner_heading">
                           <h2>Product Detail</h2>
                        </div>
                        <div class="pe_in_banner_subheading">
                           <ul>
                              <li><a class="pe_in_banner_text1" style="color: #909090" href="javascript:void(0);">Home</a></li>
                              <li>
                                 <p class="pe_in_banner_text2" style="color: #909090" href="javascript:void(0);"><i class="fa fa-caret-right"></i></p>
                              </li>
                              <li><a class="pe_in_banner_text3" style="color: #191919" href="javascript:void(0);">Product Detail</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- Product Detail Start -->
            <section>
               <div class="pe_detail_wrapper">
                  <div class="container">
                     <div class="row">
                        <div class="col-lg-5 col-md-6 col-sm-12 col-12">
                           <div class="pe_detail_slider" id="default">
                              <!-- Swiper -->
                              <div class="swiper-container gallery-top">
                                 <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                       <div class="pe_detail_slider_img">
                                          <img class="magniflier" src="http://placehold.it/470x609" alt="images">
                                       </div>
                                    </div>
                                    <div class="swiper-slide">
                                       <div class="pe_detail_slider_img">
                                          <img class="magniflier" src="http://placehold.it/470x609" alt="images">
                                       </div>
                                    </div>
                                    <div class="swiper-slide">
                                       <div class="pe_detail_slider_img">
                                          <img class="magniflier" src="http://placehold.it/470x609" alt="images">
                                       </div>
                                    </div>
                                    <div class="swiper-slide">
                                       <div class="pe_detail_slider_img">
                                          <img class="magniflier" src="http://placehold.it/470x609" alt="images">
                                       </div>
                                    </div>
                                    <div class="swiper-slide">
                                       <div class="pe_detail_slider_img">
                                          <img class="magniflier" src="http://placehold.it/470x609" alt="images">
                                       </div>
                                    </div>
                                    <div class="swiper-slide">
                                       <div class="pe_detail_slider_img">
                                          <img class="magniflier" src="http://placehold.it/470x609" alt="images">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="swiper-container gallery-thumbs">
                                 <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                       <div class="pe_detail_thumb_img">
                                          <img src="/images/pd_img2.jpg" alt="images">
                                       </div>
                                    </div>
                                    <div class="swiper-slide">
                                       <div class="pe_detail_thumb_img">
                                          <img src="/images/pd_img3.jpg" alt="images">
                                       </div>
                                    </div>
                                    <div class="swiper-slide">
                                       <div class="pe_detail_thumb_img">
                                          <img src="/images/pd_img4.jpg" alt="images">
                                       </div>
                                    </div>
                                    <div class="swiper-slide">
                                       <div class="pe_detail_thumb_img">
                                          <img src="/images/pd_img5.jpg" alt="images">
                                       </div>
                                    </div>
                                    <div class="swiper-slide">
                                       <div class="pe_detail_thumb_img">
                                          <img src="/images/pd_img3.jpg" alt="images">
                                       </div>
                                    </div>
                                    <div class="swiper-slide">
                                       <div class="pe_detail_thumb_img">
                                          <img src="/images/pd_img2.jpg" alt="images">
                                       </div>
                                    </div>
                                 </div>
                              </div>

                              <div class="pe_thumb_slider_arw">
                                       <div class="swiper-button-prev">
                                          <span>
                                             <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12">
                                                <path d="M2.653,6L6.561,1.92a0.617,0.617,0,0,0,0-.844L6.218,0.719a0.556,0.556,0,0,0-.808,0L0.757,5.578a0.621,0.621,0,0,0,0,.847l4.649,4.854a0.556,0.556,0,0,0,.808,0l0.342-.357a0.617,0.617,0,0,0,0-.844Z"/>
                                             </svg>
                                          </span>
                                       </div>
                                       <div class="swiper-button-next">
                                          <span>
                                             <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12">
                                                <path d="M4.347,6L0.439,1.92a0.617,0.617,0,0,1,0-.844l0.342-.358a0.556,0.556,0,0,1,.808,0L6.243,5.578a0.622,0.622,0,0,1,0,.847L1.594,11.279a0.556,0.556,0,0,1-.808,0l-0.342-.357a0.617,0.617,0,0,1,0-.844Z"/>
                                             </svg>
                                          </span>
                                       </div>
                                    </div>
                           </div>
                        </div>
                        <div class="col-lg-7 col-md-6 col-sm-12 col-12">
                           <div class="pe_detail_content">
                              <div class="pe_detail_content_body">
                                 <h3>Dummy Product Name</h3>
                                 <div class="pe_detail_review_box">
                                    <div class="pe_star_rating">
                                       <input type="radio" id="5-stars" name="rating" value="5" />
                                       <label for="5-stars" class="star">&#9733;</label>
                                       <input type="radio" id="4-stars" name="rating" value="4" />
                                       <label for="4-stars" class="star">&#9733;</label>
                                       <input type="radio" id="3-stars" name="rating" value="3" />
                                       <label for="3-stars" class="star">&#9733;</label>
                                       <input type="radio" id="2-stars" name="rating" value="2" />
                                       <label for="2-stars" class="star">&#9733;</label>
                                       <input type="radio" id="1-star" name="rating" value="1" />
                                       <label for="1-star" class="star">&#9733;</label>
                                    </div>
                                    <div class="pe_detail_review_txt">
                                       <p>16 Review</p>
                                    </div>
                                 </div>
                                 <div class="pe_detail_aval_txt">
                                    <p>Availability: <span style="color: #1fbdd3;">In Stock</span></p>
                                 </div>
                                 <div class="pe_detail_p_price">
                                    <p>$40.00</p>
                                 </div>
                                 <div class="pe_detail_p_disc">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                 </div>
                                 <div class="pe_product_size_box">
                                    <div class="pe_product_size_txt">
                                       <p>Size</p>
                                    </div>
                                    <div class="size_box">
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
                                    </div>
                                 </div>
                                 <div class="pe_product_color_box">
                                 <div class="pe_product_color_txt">
                                 <p>Color</p>
                                 </div>
                                 <div class="pe_product_color">
                                 <div class="custom-radios">
                                 <div>
                                 <input type="radio" id="color-1" name="color" value="color-1" checked>
                                 <label for="color-1">
                                 <span>
                                 <img src="/images/color_check.png" alt="Checked Icon" />
                                 </span>
                                 <p class="color_name"></p>
                                 </label>
                                 </div>
                                 <div>
                                 <input type="radio" id="color-2" name="color" value="color-2">
                                 <label for="color-2">
                                 <span>
                                 <img src="/images/color_check.png" alt="Checked Icon" />
                                 </span>
                                 <p class="color_name"></p>
                                 </label>
                                 </div>
                                 <div>
                                 <input type="radio" id="color-3" name="color" value="color-3">
                                 <label for="color-3">
                                 <span>
                                 <img src="/images/color_check.png" alt="Checked Icon" />
                                 </span>
                                 <p class="color_name"></p>
                                 </label>
                                 </div>
                                 <div>
                                 <input type="radio" id="color-4" name="color" value="color-4">
                                 <label for="color-4">
                                 <span>
                                 <img src="/images/color_check.png" alt="Checked Icon" />
                                 </span>
                                 <p class="color_name"></p>
                                 </label>
                                 </div>
                                 </div>
                                 </div>
                                 </div>
                                 <div class="pe_detail_qty_cart_section">
                                    <div class="pe_detail_qty_txt">
                                       <p>Quantity</p>
                                    </div>
                                    <div class="pe_detail_qty_box">
                                       <div class="quantity-control" data-quantity="">
                                          <button class="quantity-btn" data-quantity-minus="">
                                             <svg xmlns="http://www.w3.org/2000/svg" width="10" height="2" viewBox="0 0 10 2">
                                                <path id="_copy_2" data-name="+ copy 2" d="M5.545,2H10V0H5.545M6.636,0H0V2H7.727"/>
                                             </svg>
                                          </button>
                                          <input type="number" class="quantity-input" data-quantity-target="" value="1" step="1" min="1" max="" name="quantity">
                                          <button class="quantity-btn" data-quantity-plus="">
                                             <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10">
                                                <path id="_copy" data-name="+ copy" d="M4,10H6V0H4V10ZM5.545,6H10V4H5.545M6.636,4H0V6H7.727"/>
                                             </svg>
                                          </button>
                                       </div>
                                    </div>
                                    <div class="pe_detail_add_btn pe_btn">
                                       <a href="cart.html">Add To Cart <span><img src="/images/add_cart.svg" alt="images"></span></a>
                                    </div>
                                    <div class="pe_detail_qty_wishlist">
                                       <a href="wishlist.html">
                                         <span>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="17" height="14" viewBox="0 0 17 14">
                                             <path id="Wishlist" d="M12.388-.014A4.658,4.658,0,0,0,8.5,2.059,4.66,4.66,0,0,0,4.612-.014,4.555,4.555,0,0,0,0,4.471a6.883,6.883,0,0,0,1.337,3.9A14.264,14.264,0,0,0,4.15,11.31a23.228,23.228,0,0,0,4.028,2.607,0.734,0.734,0,0,0,.322.075,0.745,0.745,0,0,0,.326-0.076A23.417,23.417,0,0,0,12.85,11.31a14.278,14.278,0,0,0,2.813-2.944A6.883,6.883,0,0,0,17,4.471,4.555,4.555,0,0,0,12.388-.014Zm3.163,4.485c0,4-5.718,7.3-7.051,8.012-1.333-.713-7.051-4.009-7.051-8.012A3.12,3.12,0,0,1,4.612,1.4,3.121,3.121,0,0,1,7.775,4.471a0.725,0.725,0,0,0,1.449,0A3.165,3.165,0,0,1,15.551,4.471Z"/>
                                          </svg>
                                       </span>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="pe_product_tab_wrapper">
                        <ul class="nav nav-tabs">
                           <li class="active show"><a data-toggle="tab" href="#home" show>Description</a></li>
                           <li><a data-toggle="tab" href="#size">Size Guide</a></li>
                           <li><a data-toggle="tab" href="#menu1">Review</a></li>
                        </ul>
                        <div class="tab-content">
                           <div id="home" class="tab-pane fade in active show">
                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s </p>
                           </div>
                           <div id="size" class="tab-pane fade">
                              <table class="sizeChart table-responsive" border="0" cellpadding="10" cellspacing="0" width="100%">
                                 <thead>
                                    <tr>
                                       <td>Mens</td>
                                       <td>Small</td>
                                       <td>Medium</td>
                                       <td>Large</td>
                                       <td>X-Large</td>
                                       <td>XX-Large</td>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>Neck</td>
                                       <td>14-14.5</td>
                                       <td>15-15.5</td>
                                       <td>16-16.5</td>
                                       <td>17-17.5</td>
                                       <td>18-18.5</td>
                                    </tr>
                                    <tr>
                                       <td>Chest</td>
                                       <td>35-37</td>
                                       <td>38-40</td>
                                       <td>41-43</td>
                                       <td>44-46</td>
                                       <td>47-49</td>
                                    </tr>
                                    <tr>
                                       <td>Sleeve</td>
                                       <td>32-33</td>
                                       <td>33-34</td>
                                       <td>34-35</td>
                                       <td>35-36</td>
                                       <td>36-36.5</td>
                                    </tr>
                                    <tr>
                                       <td>Waist</td>
                                       <td>29-31</td>
                                       <td>32-34</td>
                                       <td>35-37</td>
                                       <td>38-40</td>
                                       <td>41-43</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                           <div id="menu1" class="tab-pane fade">
                              <p>There are no reviews yet.</p>
                              <br>
                              <p>Be the first to review “Modern Chairs”</p>
                              <p>Your email address will not be published. Required fields are marked *</p>
                              <br>
                              <div class="review_rating">
                                 <a href="">Your rating</a>
                                 <div class="pe_star_rating">
                                    <input type="radio" id="5-stars" name="rating" value="5" />
                                    <label for="5-stars" class="star">&#9733;</label>
                                    <input type="radio" id="4-stars" name="rating" value="4" />
                                    <label for="4-stars" class="star">&#9733;</label>
                                    <input type="radio" id="3-stars" name="rating" value="3" />
                                    <label for="3-stars" class="star">&#9733;</label>
                                    <input type="radio" id="2-stars" name="rating" value="2" />
                                    <label for="2-stars" class="star">&#9733;</label>
                                    <input type="radio" id="1-star" name="rating" value="1" />
                                    <label for="1-star" class="star">&#9733;</label>
                                 </div>
                              </div>
                              <div class="review_form">
                                 <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                       <textarea placeholder="Review"></textarea>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                       <input type="text" placeholder="Enter Your Name">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                       <input type="text" placeholder="Enter Your Email">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                       <div class="review_btn pe_btn">
                                          <a href="#">Submit</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- New Arrivals Start -->
            <section>
               <div class="pe_new_arrivals_wrapper pe_rel_products_wrapper">
                  <div class="container">
                     <div class="pe_product_heading_filter pe_arrival_heading_arw">
                        <div class="pe_arrival_heading pe_heading">
                           <h2>RELATED <span style="color: #1fbdd3">PRODUCTS</span></h2>
                        </div>
                        <div class="pe_arrival_slider_arrow">
                           <div class="swiper-button-prev">
                              <span>
                                 <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12">
                                    <path d="M2.653,6L6.561,1.92a0.617,0.617,0,0,0,0-.844L6.218,0.719a0.556,0.556,0,0,0-.808,0L0.757,5.578a0.621,0.621,0,0,0,0,.847l4.649,4.854a0.556,0.556,0,0,0,.808,0l0.342-.357a0.617,0.617,0,0,0,0-.844Z"/>
                                 </svg>
                              </span>
                           </div>
                           <div class="swiper-button-next">
                              <span>
                                 <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12">
                                    <path d="M4.347,6L0.439,1.92a0.617,0.617,0,0,1,0-.844l0.342-.358a0.556,0.556,0,0,1,.808,0L6.243,5.578a0.622,0.622,0,0,1,0,.847L1.594,11.279a0.556,0.556,0,0,1-.808,0l-0.342-.357a0.617,0.617,0,0,1,0-.844Z"/>
                                 </svg>
                              </span>
                           </div>
                        </div>
                     </div>
                     <div class="pe_new_arrivals_slider pe_rel_product_slider">
                        <!-- Swiper -->
                        <div class="swiper-container">
                           <div class="swiper-wrapper">
                              <div class="swiper-slide">
                                 <div class="work_porfolio_section wow zoomIn" data-wow-delay="0.1s">
                                    <img src="http://placehold.it/272x355" alt="">
                                    <div class="pe_discount_tag">
                                       <p>40%</p>
                                    </div>
                                    <div class="pe_product_name">
                                       <p>Dummy Product <span>Name</span></p>
                                       <div class="pe_product_ratings">
                                          <p><i class="fa fa-star rating1"></i></p>
                                          <p><i class="fa fa-star rating1"></i></p>
                                          <p><i class="fa fa-star rating1"></i></p>
                                          <p><i class="fa fa-star rating1"></i></p>
                                          <p><i class="fa fa-star rating5"></i></p>
                                       </div>
                                       <div></div>
                                       <div class="pe_product_price">
                                          <span class="pe_product_price1">$40.00</span>
                                          <span class="pe_product_price2">$50.00</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="work_porfolio_section wow zoomIn" data-wow-delay="0.1s">
                                    <img src="http://placehold.it/272x355" alt="">
                                    <div class="pe_product_name">
                                       <p>Dummy Product <span>Name</span></p>
                                       <div class="pe_product_ratings">
                                          <p><i class="fa fa-star rating1"></i></p>
                                          <p><i class="fa fa-star rating1"></i></p>
                                          <p><i class="fa fa-star rating1"></i></p>
                                          <p><i class="fa fa-star rating1"></i></p>
                                          <p><i class="fa fa-star rating5"></i></p>
                                       </div>
                                       <div class="pe_product_price">
                                          <span class="pe_product_price1">$40.00</span>
                                          <span class="pe_product_price2">$50.00</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="work_porfolio_section wow zoomIn" data-wow-delay="0.1s">
                                    <img src="http://placehold.it/272x355" alt="">
                                    <div class="pe_product_name">
                                       <p>Dummy Product <span>Name</span></p>
                                       <div class="pe_product_ratings">
                                          <p><i class="fa fa-star rating1"></i></p>
                                          <p><i class="fa fa-star rating1"></i></p>
                                          <p><i class="fa fa-star rating1"></i></p>
                                          <p><i class="fa fa-star rating1"></i></p>
                                          <p><i class="fa fa-star rating5"></i></p>
                                       </div>
                                       <div class="pe_product_price">
                                          <span class="pe_product_price1">$40.00</span>
                                          <span class="pe_product_price2">$50.00</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="work_porfolio_section wow zoomIn" data-wow-delay="0.1s">
                                    <img src="http://placehold.it/272x355" alt="">
                                    <div class="pe_discount_tag">
                                       <p>50%</p>
                                    </div>
                                    <div class="pe_product_name">
                                       <p>Dummy Product <span>Name</span></p>
                                       <div class="pe_product_ratings">
                                          <p><i class="fa fa-star rating1"></i></p>
                                          <p><i class="fa fa-star rating1"></i></p>
                                          <p><i class="fa fa-star rating1"></i></p>
                                          <p><i class="fa fa-star rating1"></i></p>
                                          <p><i class="fa fa-star rating5"></i></p>
                                       </div>
                                       <div class="pe_product_price">
                                          <span class="pe_product_price1">$40.00</span>
                                          <span class="pe_product_price2">$50.00</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="work_porfolio_section wow zoomIn" data-wow-delay="0.1s">
                                    <img src="http://placehold.it/272x355" alt="">
                                    <div class="pe_discount_tag">
                                       <p>SALE</p>
                                    </div>
                                    <div class="pe_product_name">
                                       <p>Dummy Product <span>Name</span></p>
                                       <div class="pe_product_ratings">
                                          <p><i class="fa fa-star rating1"></i></p>
                                          <p><i class="fa fa-star rating1"></i></p>
                                          <p><i class="fa fa-star rating1"></i></p>
                                          <p><i class="fa fa-star rating1"></i></p>
                                          <p><i class="fa fa-star rating5"></i></p>
                                       </div>
                                       <div class="pe_product_price">
                                          <span class="pe_product_price1">$40.00</span>
                                          <span class="pe_product_price2">$50.00</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="work_porfolio_section wow zoomIn" data-wow-delay="0.1s">
                                    <img src="http://placehold.it/272x355" alt="">
                                    <div class="pe_discount_tag">
                                       <p>SALE</p>
                                    </div>
                                    <div class="pe_product_name">
                                       <p>Dummy Product <span>Name</span></p>
                                       <div class="pe_product_ratings">
                                          <p><i class="fa fa-star rating1"></i></p>
                                          <p><i class="fa fa-star rating1"></i></p>
                                          <p><i class="fa fa-star rating1"></i></p>
                                          <p><i class="fa fa-star rating1"></i></p>
                                          <p><i class="fa fa-star rating5"></i></p>
                                       </div>
                                       <div class="pe_product_price">
                                          <span class="pe_product_price1">$40.00</span>
                                          <span class="pe_product_price2">$50.00</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="work_porfolio_section wow zoomIn" data-wow-delay="0.1s">
                                    <img src="http://placehold.it/272x355" alt="">
                                    <div class="pe_discount_tag">
                                       <p>20%</p>
                                    </div>
                                    <div class="pe_product_name">
                                       <p>Dummy Product <span>Name</span></p>
                                       <div class="pe_product_ratings">
                                          <p><i class="fa fa-star rating1"></i></p>
                                          <p><i class="fa fa-star rating1"></i></p>
                                          <p><i class="fa fa-star rating1"></i></p>
                                          <p><i class="fa fa-star rating1"></i></p>
                                          <p><i class="fa fa-star rating5"></i></p>
                                       </div>
                                       <div class="pe_product_price">
                                          <span class="pe_product_price1">$40.00</span>
                                          <span class="pe_product_price2">$50.00</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="work_porfolio_section wow zoomIn" data-wow-delay="0.1s">
                                    <img src="http://placehold.it/272x355" alt="">
                                    <div class="pe_discount_tag">
                                       <p>40%</p>
                                    </div>
                                    <div class="pe_product_name">
                                       <p>Dummy Product <span>Name</span></p>
                                       <div class="pe_product_ratings">
                                          <p><i class="fa fa-star rating1"></i></p>
                                          <p><i class="fa fa-star rating1"></i></p>
                                          <p><i class="fa fa-star rating1"></i></p>
                                          <p><i class="fa fa-star rating1"></i></p>
                                          <p><i class="fa fa-star rating5"></i></p>
                                       </div>
                                       <div class="pe_product_price">
                                          <span class="pe_product_price1">$40.00</span>
                                          <span class="pe_product_price2">$50.00</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
        @endsection
