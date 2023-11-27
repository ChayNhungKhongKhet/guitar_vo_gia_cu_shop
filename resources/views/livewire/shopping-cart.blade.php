<!-- Cart Start -->
<div class="pe_cart_wrapper">
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
                    <tr wire:key="{{ $item->id }}">
                        <td class="product-thumbnail"><a href="#"><img src="{{ asset('storage/' .$item->product['linkimg']) }}" alt="cart thumbnail" class="img-fluid" style="max-width: 100px; max-height: 100px;"></a></td>
                        <td class="product-name">{{ $item->product->name }} <br> <span><span style="color: #909090">Size:</span> L</span><br> <span><span style="color: #909090">Color:</span> Black</span></td>
                        <td class="product-price">${{ $item->product->price }}</td>

                        <td class="product-quantity">
                            <div class="quantity-control">
                                <button class="quantity-btn" wire:click="decrementQty({{ $item->id }})">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="2" viewBox="0 0 10 2">
                                        <path id="_copy_2" data-name="+ copy 2" d="M5.545,2H10V0H5.545M6.636,0H0V2H7.727"></path>
                                    </svg>
                                </button>
                                <input wire:model="quantity.{{ $item->id }}" type="number" class="quantity-input">
                                <button wire:click="incrementQty({{ $item->id }})" class="quantity-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10">
                                        <path id="_copy" data-name="+ copy" d="M4,10H6V0H4V10ZM5.545,6H10V4H5.545M6.636,4H0V6H7.727"></path>
                                    </svg>
                                </button>
                            </div>
                        </td>

                        <td>
                            <button type="button" onclick="confirm('Are you sure you want delete this Product?')" wire:click="removeItem({{ $item->id }})">
                                <img src="/images/remove.svg" alt="remove_icon">
                            </button>
                        </td>
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
                            <th class="order-total">
                            <th>Total </th>
                            <th style="color: #1fbdd3">$<input wire:model.live="sub_total" type="text" disabled style="color: #1fbdd3;"></th>
                            </th>
                        </tbody>
                    </table>
                    <div class="pe_checkout_button pe_btn">
                        <button wire:click="checkout">PROCEED TO CHECKOUT</button>
                        <input disabled type="text" wire:model="message" style="border:none; background:white; color:#909090; width: 250px; margin-left:30px">
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
