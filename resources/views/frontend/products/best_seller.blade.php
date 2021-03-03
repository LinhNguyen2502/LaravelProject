@if($productSeller->count() > 0)   
    <best-seller>
        <div class="container">
            <ul>
                <li>
                    <div>
                        <h3>Best sellers</h3>
                        <small>The best productions from us</small>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </li>
                @foreach($productSeller as $pSeller)
                <li>
                    <img src="{{ asset($pSeller->image) }}" />
                    <a href="">{{  $pSeller->name  }}</a>
                    <p>{{ number_format( $pSeller->price, 2 ) }}vnđ</p>
                    <div class="action">
                        <a href="#" class="cart"></a>
                        <a href="#" class="heart"></a>
                        <a href="#" class="compare"></a>
                    </div>
                </li>
                @endforeach
                <!-- <li>
                    <img src="{{ asset('frontend/images/p2.jpg') }}" />
                    <a href="">Cruise Dual Analog</a>
                    <p>$250.00</p>
                    <div class="action">
                        <a href="#" class="cart"></a>
                        <a href="#" class="heart"></a>
                        <a href="#" class="compare"></a>
                    </div>
                </li>
                <li>
                    <img src="{{ asset('frontend/images/p2.jpg') }}" />
                    <a href="">Cruise Dual Analog</a>
                    <p>$250.00</p>
                    <div class="action">
                        <a href="#" class="cart"></a>
                        <a href="#" class="heart"></a>
                        <a href="#" class="compare"></a>
                    </div>
                </li>
                <li>
                    <img src="{{ asset('frontend/images/p2.jpg') }}" />
                    <a href="">Cruise Dual Analog</a>
                    <p>$250.00</p>
                    <div class="action">
                        <a href="#" class="cart"></a>
                        <a href="#" class="heart"></a>
                        <a href="#" class="compare"></a>
                    </div>
                </li> -->
            </ul>
        </div>
    </best-seller>
@endif