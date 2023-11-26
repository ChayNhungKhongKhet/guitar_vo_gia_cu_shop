<!-- Cart Start -->
<div class="pe_cart_wrapper">
    @if(session()->has('error'))
    <div class="alert alert-danger" style="text-align: center">
        {{ session('error') }}
    </div>
    @elseif(session()->has('success'))
    <div class="alert alert-success" style="text-align: center">
        {{ session('success') }}
    </div>
    @endif
    <div class="container">
        <div class="ss_cart_wrapper">
            <table class="ss_shop_table table-responsive">
                <thead>
                    <tr>
                        <th class="product-thumbnail">Image</th>
                        <th class="product-name">Product Name</th>
                        <th class="product-price">Price</th>
                        <th class="product-quantity">Quantity</th>
                        <th class="product-remove">Remove</th>
                    </tr>
                </thead>
                <tbody class="pe_cart_body">
                    @foreach ($cart_items as $item)
                    <tr>
                        <td class="product-thumbnail"><a href="#"><img src="{{ asset('storage/' .$item->product['linkimg']) }}" alt="cart thumbnail" class="img-fluid" style="max-width: 100px; max-height: 100px;"></a></td>
                        <td class="product-name">{{ $item->product->name }} <br> <span><span style="color: #909090">Size:</span> L</span><br> <span><span style="color: #909090">Color:</span> Black</span></td>
                        <td class="product-price">${{ $item->product->price }}</td>

                        <td class="product-quantity">
                            <div wire:click="incrementQty({{ $item->id }})" class="quantity-control" data-quantity="">
                                <button class="quantity-btn" data-quantity-minus="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="2" viewBox="0 0 10 2">
                                        <path id="_copy_2" data-name="+ copy 2" d="M5.545,2H10V0H5.545M6.636,0H0V2H7.727"></path>
                                    </svg>
                                </button>
                                <input type="number" class="quantity-input" data-quantity-target="" value="{{ $item->quantity }}" step="1" min="1" max="" name="quantity">
                                <button wire:click="decrementQty({{ $item->id }})" class="quantity-btn" data-quantity-plus="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10">
                                        <path id="_copy" data-name="+ copy" d="M4,10H6V0H4V10ZM5.545,6H10V4H5.545M6.636,4H0V6H7.727"></path>
                                    </svg>
                                </button>
                            </div>
                        </td>

                        <td class="product-remove"><button wire:click="removeItem({{ $item->id }})"><img src="/images/remove.svg" alt="remove_icon"></button></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="pe_cart_total_section">
                <div class="pe_cart_code_aply">
                    <div class="pe_cart_code">
                        <input type="text" placeholder="Coupan code">
                    </div>
                    <div class="pe_code_button pe_btn">
                        <a href="javascript:void(0);">APPLY</a>
                    </div>
                </div>
                <div class="pe_cart_total">
                    <table class="shop_table shop_table_responsive">
                        <tbody>
                            <tr class="cart-subtotal">
                                <td>Subtotal</td>
                                <td>${{ $sub_total }}</td>
                            </tr>
                            <tr class="cart-shipping">
                                <td>Discount</td>
                                <td>-$10.00</td>
                            </tr>
                            <tr class="cart-tax">
                                <td>Shipping & Handling</td>
                                <td>$500</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr class="order-total">
                                <th>Total</th>
                                <th style="color: #1fbdd3">$115.00</th>
                            </tr>
                        </tfoot>
                    </table>
                    <div class="pe_checkout_button pe_btn">
                        <button wire:click="checkout">PROCEED TO CHECKOUT</button>
                    </div>



                </div>
            </div>
        </div>
    </div>
</div>
