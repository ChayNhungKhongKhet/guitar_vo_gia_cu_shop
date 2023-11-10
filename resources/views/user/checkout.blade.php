@extends('user.layout.master')
            @section('content')
            <!-- Banner Start -->
            <section>
               <div class="pe_in_banner_wrapper">
                  <div class="container">
                     <div class="pe_in_banner_section">
                        <div class="pe_in_banner_heading">
                           <h2>Checkout</h2>
                        </div>
                        <div class="pe_in_banner_subheading">
                           <ul>
                              <li><a class="pe_in_banner_text1" style="color: #909090" href="javascript:void(0);">Home</a></li>
                              <li>
                                 <p class="pe_in_banner_text2" style="color: #909090"><i class="fa fa-caret-right"></i></p>
                              </li>
                              <li><a class="pe_in_banner_text3" style="color: #191919" href="javascript:void(0);">Checkout</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- Checkout Start -->
            <div class="pe_checkout_wrapper">
               <div class="container">
                  <div class="arrow-steps clearfix">
                     <div class="step current">
                        <span>1</span>
                        <div class="step_heading step1 active">Shipping Info</div>
                     </div>
                     <div class="step">
                        <span>2</span>
                        <div class="step_heading step1">Payment</div>
                     </div>
                     <div class="step">
                        <span>3</span>
                        <div class="step_heading step1">Review Order</div>
                     </div>
                  </div>
                  <div class="pe_checkout_form" id="checkoutform">
                     <div class="pe_checkout_main_form pi_shipping_form">
                        <form>
                           <div class="row">
                              <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                 <div class="pe_checkout_input">
                                    <input type="text" placeholder="First Name">
                                 </div>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                 <div class="pe_checkout_input">
                                    <input type="text" placeholder="Last Name">
                                 </div>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                 <div class="pe_checkout_input">
                                    <input type="email" placeholder="Email">
                                 </div>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                 <div class="pe_checkout_input">
                                    <input type="text" placeholder="Phone">
                                 </div>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                 <div class="pe_checkout_input">
                                    <select class="pe_select_input" name="state">
                                       <option value="AL" selected="">Country</option>
                                       <option value="WY">India</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                 <div class="pe_checkout_input">
                                    <select class="pe_select_input" name="state">
                                       <option value="AL" selected="">State</option>
                                       <option value="WY">Madhya Pradesh</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                 <div class="pe_checkout_input">
                                    <select class="pe_select_input" name="state">
                                       <option value="AL" selected="">Town/City</option>
                                       <option value="WY">Indore</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                 <div class="pe_checkout_input">
                                    <input type="text" placeholder="Postcode">
                                 </div>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                 <div class="pe_checkout_input">
                                    <input type="text" placeholder="Address 1">
                                 </div>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                 <div class="pe_checkout_input">
                                    <input type="text" placeholder="Address 2">
                                 </div>
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                 <div class="pe_checkout_checkbox_btn">
                                    <div class="pe_checkout_checkbox">
                                       <input type="checkbox" class="shipping" name="shipping" value="shipping" >
                                       <label> Ship to the same address</label><br>
                                    </div>
                                    <div class="pe_checkout_btn">
                                       <div class="pe_checkout_btn1 pe_btn nav clearfix">
                                          <a class="next pull-right" href="javascript:void(0);">Next</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </form>
                     </div>
                     <div class="pe_checkout_main_form pe_payment_form hide">
                        <form>
                           <div class="row">
                              <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                 <div class="pe_checkout_input">
                                    <input type="text" placeholder="Name On Card">
                                 </div>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                 <div class="pe_checkout_input">
                                    <input type="email" placeholder="Bank Name">
                                 </div>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                 <div class="pe_checkout_input">
                                    <input type="text" placeholder="Card Number">
                                 </div>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                 <div class="pe_checkout_input">
                                    <input type="email" placeholder="Billing Address">
                                 </div>
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                 <div class="pe_checkout_checkbox_btn">
                                    <div class="pe_checkout_checkbox">
                                       <input type="checkbox" class="shipping" name="shipping" value="shipping" id="check_confirm">
                                       <label for="check_confirm"> Payment Confirm</label><br>
                                    </div>
                                    <div class="pe_checkout_btn">
                                       <div class="pe_checkout_btn1 pe_btn nav clearfix">
                                          <a class="next pull-right" href="javascript:void(0);">Next</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </form>
                     </div>
                     <div class="pe_checkout_main_form pe_review_form hide">
                        <form>
                           <div class="row">
                              <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                 <div class="pe_checkout_input">
                                    <input type="text" placeholder="First Name">
                                 </div>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                 <div class="pe_checkout_input">
                                    <input type="text" placeholder="Last Name">
                                 </div>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                 <div class="pe_checkout_input">
                                    <input type="email" placeholder="Email">
                                 </div>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                 <div class="pe_checkout_input">
                                    <input type="text" placeholder="Phone">
                                 </div>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                 <div class="pe_checkout_input">
                                    <select class="pe_select_input" name="state">
                                       <option value="AL" selected="">Country</option>
                                       <option value="WY">India</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                 <div class="pe_checkout_input">
                                    <select class="pe_select_input" name="state">
                                       <option value="AL" selected="">State</option>
                                       <option value="WY">Madhya Pradesh</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                 <div class="pe_checkout_input">
                                    <select class="pe_select_input" name="state">
                                       <option value="AL" selected="">Town/City</option>
                                       <option value="WY">Indore</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                 <div class="pe_checkout_input">
                                    <input type="text" placeholder="Postcode">
                                 </div>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                 <div class="pe_checkout_input">
                                    <input type="text" placeholder="Address 1">
                                 </div>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                 <div class="pe_checkout_input">
                                    <input type="text" placeholder="Address 2">
                                 </div>
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                 <div class="pe_checkout_checkbox_btn">
                                    <div class="pe_checkout_checkbox">
                                       <input type="checkbox" class="shipping" name="shipping" value="shipping">
                                       <label>Order Confirm</label><br>
                                    </div>
                                    <div class="pe_checkout_btn">
                                       <div class="pe_checkout_btn1 pe_btn nav clearfix">
                                          <a class="pull-right submitForm" href="javascript:void(0);">Submit</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
            @endsection
