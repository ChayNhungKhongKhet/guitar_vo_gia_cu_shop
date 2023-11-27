<div class="products grid group">
    @foreach($products as $product)
        <div class="product work_porfolio_section wow zoomIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
            <div class="product__inner">
                <div class="product__image">
                    <img src="{{ asset('storage/' .$product['linkimg']) }}" alt="images" />
                </div>
                <div class="product__details">
                    <div class="pe_product_name">
                        <a href="{{ url('products/').'/'.$product->id }}"><p> <span>{{ $product->name }}</span></p>
                        </a>

                        <div class="pe_product_txt1">
                            <p>Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry’s
                                standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a
                                type specimen book. It has survived not only five centuries,
                                but also the leap into electronic typesetting, remaining
                                essentially unchanged. It was popularised in the 1960s </p>
                        </div>
                        <div class="pe_product_price">
                            <span class="pe_product_price1">${{ $product->price }}</span>
                        </div>
                        <div class="pe_product_btn pe_btn"><a href="javascript:void(0);">Shop
                                Now</a></div>
                    </div>
                    <div class="work_overlay">
                        <div class="pe_filter_icon">
                            <ul>
                                <li>
                                        <button type="submit" style="border: none"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" wire:click="addToCart({{ $product->id }})">
                                            <path d="M4.917,12.143A1.418,1.418,0,1,0,6.3,13.56,1.4,1.4,0,0,0,4.917,12.143Zm7.617,0a1.42,1.42,0,0,0,.092,2.833h0.1a1.375,1.375,0,0,0,.943-0.49,1.447,1.447,0,0,0,.335-1.03,1.415,1.415,0,0,0-.481-0.976A1.346,1.346,0,0,0,12.535,12.144Zm2.792-8.082a0.679,0.679,0,0,0-.578-0.32H7.2a0.707,0.707,0,0,0,0,1.414h6.489L11.8,9.623H5.955L3.762,1.46A0.694,0.694,0,0,0,3.094.94H1.125a0.707,0.707,0,0,0,0,1.414H2.573l2.193,8.162a0.693,0.693,0,0,0,.668.522h6.83a0.692,0.692,0,0,0,.634-0.427L15.383,4.73v0A0.731,0.731,0,0,0,15.327,4.062Z"></path>
                                        </svg></button>
                                </li>
                                <li>
                                    <a href="product_detail.html">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14">
                                            <path data-name="Quick View" d="M12.795,12.737L9.592,9.28a5.75,5.75,0,0,0,1.275-3.625A5.546,5.546,0,0,0,5.433.016,5.546,5.546,0,0,0,0,5.655a5.546,5.546,0,0,0,5.434,5.639,5.246,5.246,0,0,0,3.113-1.02l3.227,3.483a0.691,0.691,0,0,0,1,.021A0.757,0.757,0,0,0,12.795,12.737ZM5.433,1.487A4.1,4.1,0,0,1,9.449,5.655,4.1,4.1,0,0,1,5.433,9.823,4.1,4.1,0,0,1,1.416,5.655,4.1,4.1,0,0,1,5.433,1.487Z"></path>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /product__details -->
            </div>
        </div>
    @endforeach
</div>
