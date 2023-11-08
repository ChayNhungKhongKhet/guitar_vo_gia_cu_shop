@extends('user.layout.master')
            @section('content')
               <!--Banner Section -->
            <section>
               <div class="pe_in_banner_wrapper">
                  <div class="container">
                     <div class="pe_in_banner_section">
                        <div class="pe_in_banner_heading">
                           <h2>Contact Us</h2>
                        </div>
                        <div class="pe_in_banner_subheading">
                           <ul>
                              <li><a class="pe_in_banner_text1" style="color: #909090" href="index.html">Home</a></li>
                              <li>
                                 <p class="pe_in_banner_text2" style="color: #909090" href="javascript:void(0);"><i class="fa fa-caret-right"></i></p>
                              </li>
                              <li><a class="pe_in_banner_text3" style="color: #191919" href="javascript:void(0);">Contact</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- Contact Start -->
            <div class="pe_contact_wrapper">
              <div class="container">
               <div class="pe_heading">
                        <h2>OUR <span style="color: #1fbdd3">INFORMATION</span></h2>
                      </div>

                      <div class="pe_contact_left_info">
                      <div class="pe_contact_info">
                        <ul>
                          <li>
                            <span class="pe_contact_icon"><i class="fa fa-map-marker"></i></span>
                            <h3>Address</h3>
                            <p>1921 Florida Ave NW Washington USA</p>
                          </li>
                          <li>
                            <span class="pe_contact_icon"><i class="fa fa-phone"></i></span>
                            <h3>Phone</h3>
                            <p>+122515864</p>
                            <p>+122515864</p>
                          </li>
                          <li>
                            <span class="pe_contact_icon"><i class="fa fa-envelope"></i></span>
                            <h3>Email</h3>
                            <p>Shopmartio@gmail.com</p>
                            <p>Shopmartio@gmail.com</p>
                          </li>
                        </ul>
                      </div>
                <div class="row">
                  <div class="col-lg-5 col-md-6 col-sm-12 col-12">
                      <div class="pe_contact_right_form">
                      <div class="pe_contact_input pe_checkout_form ">
                        <input type="text" name="" placeholder="Enter Your Name">
                     </div>
                     <div class="pe_contact_input pe_checkout_form ">
                        <input type="text" name="" placeholder="Enter Your Email">
                     </div>
                     <div class="pe_contact_input pe_checkout_form ">
                        <input type="phone" name="" placeholder="Enter Your Number">
                     </div>
                    </div>
                    </div>

                  <div class="col-lg-7 col-md-6 col-sm-12 col-12">
                    <div class="pe_contact_right_form">
                     <div class="pe_contact_input pe_checkout_form ">
                        <textarea placeholder="Enter Your Message"></textarea>
                     </div>
                     <div class="pe_contact_input pe_btn ">
                       <a href="" class="submitForm">Submit</a>
                     </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
         </div>

            <div class="pe_map_wrapper">
              <div class="container-fluid">
                <div style="width: 100%;">
                   <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2965.0824050173574!2d-93.63905729999999!3d41.998507000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sWebFilings%2C+University+Boulevard%2C+Ames%2C+IA!5e0!3m2!1sen!2sus!4v1390839289319" width="100%" height="400" frameborder="0"></iframe>
                </div>
              </div>
            </div>
            @endsection
