@extends('user.layout.master')
            <!-- Banner Start -->
    @section('content')
    <section>
        <div class="pe_in_banner_wrapper">
            <div class="container">
               <div class="pe_in_banner_section">
                  <div class="pe_in_banner_heading">
                     <h2>Cart</h2>
                  </div>

                  <div class="pe_in_banner_subheading">
                     <ul>
                        <li><a class="pe_in_banner_text1" style="color: #909090" href="javascript:void(0);">Home</a></li>
                        <li>
                           <p class="pe_in_banner_text2" style="color: #909090" href="javascript:void(0);"><i class="fa fa-caret-right"></i></p>
                        </li>
                        <li><a class="pe_in_banner_text3" style="color: #191919" href="javascript:void(0);">Cart</a></li>
                     </ul>
                  </div>
               </div>

            </div>
         </div>
      </section>
        @livewire('shopping-cart')
    @endsection

