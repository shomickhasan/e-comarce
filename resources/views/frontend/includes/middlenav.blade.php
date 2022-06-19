<div class="header-middle header-middle-ptb-1 d-none d-lg-block">
    <div class="container">
        <div class="header-wrap">
            <div class="logo logo-width-1">
                <a href="index.html"><img src="{{asset('frontend')}}/assets/imgs/theme/logo.svg" alt="logo"></a>
            </div>
            <div class="header-right">
                <div class="search-style-2">
                    <form action="#">
                        <select class="select-active">
                            <option>All Categories</option>
                            <option>Milks and Dairies</option>
                            <option>Wines & Alcohol</option>
                            <option>Clothing & Beauty</option>
                            <option>Pet Foods & Toy</option>
                            <option>Fast food</option>
                            <option>Baking material</option>
                            <option>Vegetables</option>
                            <option>Fresh Seafood</option>
                            <option>Noodles & Rice</option>
                            <option>Ice cream</option>
                        </select>
                        <input type="text" placeholder="Search for items...">
                    </form>
                </div>
                <div class="header-action-right">
                    <div class="header-action-2">
                        <div class="search-location">
                            <form action="#">
                                <select class="select-active">
                                    <option>Your Location</option>
                                    <option>Alabama</option>
                                    <option>Alaska</option>
                                    <option>Arizona</option>
                                    <option>Delaware</option>
                                    <option>Florida</option>
                                    <option>Georgia</option>
                                    <option>Hawaii</option>
                                    <option>Indiana</option>
                                    <option>Maryland</option>
                                    <option>Nevada</option>
                                    <option>New Jersey</option>
                                    <option>New Mexico</option>
                                    <option>New York</option>
                                </select>
                            </form>
                        </div>
                        <div class="header-action-icon-2">
                            <a href="shop-compare.html">
                                <img class="svgInject" alt="Nest" src="{{asset('frontend')}}/assets/imgs/theme/icons/icon-compare.svg">
                                <span class="pro-count blue">3</span>
                            </a>
                            <a href="shop-compare.html"><span class="lable ml-0">Compare</span></a>
                        </div>
                        <div class="header-action-icon-2">
                            <a href="shop-wishlist.html">
                                <img class="svgInject" alt="Nest" src="{{asset('frontend')}}/assets/imgs/theme/icons/icon-heart.svg">
                                <span class="pro-count blue">6</span>
                            </a>
                            <a href="shop-wishlist.html"><span class="lable">Wishlist</span></a>
                        </div>
                        <div class="header-action-icon-2">
                            <a class="mini-cart-icon" href="shop-cart.html">
                                <img alt="Nest" src="{{asset('frontend')}}/assets/imgs/theme/icons/icon-cart.svg">
                                <span class="pro-count blue ">{{count(Cart::getContent())}}</span>
                            </a>
                            <a href="shop-cart.html"><span class="lable">Cart</span></a>
                            <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                <ul class="addtocartitem">
                                    @php $products = Cart::getContent(); @endphp
                                    @foreach($products as $product)
                                    <li>
                                        <div class="shopping-cart-img">
                                            <a href="shop-product-right.html"><img alt="Nest" src="{{ asset("backend/img/Products")}}/{{$product->attributes->thumbnails}}"></a>
                                         </div>
                                        <div class="shopping-cart-title">
                                            <h4><a href="shop-product-right.html"></a>{{$product->name}}</h4>
                                            <h4><span>{{$product->quantity}} × </span>৳{{$product->price*$product->quantity}}</h4>
                                        </div>
                                        <div class="shopping-cart-delete">
                                            <a href="{{Route('cart.delete',$product->id)}}" ><i class="fi-rs-cross-small"></i></a>
                                        </div>
                                    </li>
                                    @endforeach 
                                   
                                </ul> 
                               

                                </table>
                                <div class="shopping-cart-footer">
                                    <div class="shopping-cart-total">
                                        <h4>Total <span class="subtotal">৳{{Cart::getTotal();}}</span></h4>
                                    </div>
                                    <div class="shopping-cart-button">
                                        <a href="{{Route('viewcart')}}" class="outline">View cart</a>
                                        <a href="{{Route('checkout')}}">Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="header-action-icon-2">
                            <a href="page-account.html">
                                <img class="svgInject" alt="Nest" src="{{asset('frontend')}}/assets/imgs/theme/icons/icon-user.svg">
                            </a>
                            <a href="page-account.html"><span class="lable ml-0"></span></a>
                            <div class="cart-dropdown-wrap cart-dropdown-hm2 account-dropdown">
                                <ul>

                                   @if(!Auth::check())
                                    <li>
                                        <a href="{{Route('userlogin')}}"><i class="fi fi-rs-user mr-10"></i>Login</a>
                                    </li>
                                    <li>
                                        <a href="page-account.html"><i class="fi fi-rs-edit mr-10"></i>Registration</a>
                                    </li>
                                    @endif
                                    @if(Auth::check())
                                    <li>
                                        <a href="page-account.html"><i class="fi fi-rs-user mr-10"></i>{{Auth::user()->name}}</a>
                                    </li>
                                    <li>
                                        <a href="page-account.html"><i class="fi fi-rs-location-alt mr-10"></i>Order Tracking</a>
                                    </li>
                                    <li>
                                        <a href="page-account.html"><i class="fi fi-rs-label mr-10"></i>My Voucher</a>
                                    </li>
                                    <li>
                                        <a href="shop-wishlist.html"><i class="fi fi-rs-heart mr-10"></i>My Wishlist</a>
                                    </li>
                                    <li>
                                        <a href="page-account.html"><i class="fi fi-rs-settings-sliders mr-10"></i>Setting</a>
                                    </li>
                                    <li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                          <a href="route('logout')" onclick="event.preventDefault();
                                          this.closest('form').submit();"><i class="fi fi-rs-sign-out mr-10"></i> Sign Out</a>
                                        </form>
                                    </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>