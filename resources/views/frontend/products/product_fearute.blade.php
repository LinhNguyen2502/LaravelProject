@if($productFeature->count() > 0)
 <product-feature>
     <h3>{{ $headTitle ?? null }}</h3>
     <small>Newest trends from top brands</small>

     <div class="container">
         <ul>
            @foreach($productFeature as $pFeature)
             <li>
                 <img src="{{ asset($pFeature->image) }}" />
                 <a href="">{{ $pFeature->name }}</a>
                 <p>{{ number_format($pFeature->price, 2) }}vnd</p>
             </li>
            @endforeach
             <!-- <li>
                 <img src="{{ asset('frontend/images/girl.jpg') }}" />
                 <a href="">Crown Summit Backpack</a>
                 <p>$250.00</p>
             </li>
             <li>
                 <img src="{{ asset('frontend/images/girl.jpg') }}" />
                 <a href="">Crown Summit Backpack</a>
                 <p>$250.00</p>
             </li>
             <li>
                 <img src="{{ asset('frontend/images/girl.jpg') }}" />
                 <a href="">Crown Summit Backpack</a>
                 <p>$250.00</p>
             </li>
             <li>
                 <img src="{{ asset('frontend/images/girl.jpg') }}" />
                 <a href="">Crown Summit Backpack</a>
                 <p>$250.00</p>
             </li>
             <li>
                 <img src="{{ asset('frontend/images/girl.jpg') }}" />
                 <a href="">Crown Summit Backpack</a>
                 <p>$250.00</p>
             </li>
             <li>
                 <img src="{{ asset('frontend/images/girl.jpg') }}" />
                 <a href="">Crown Summit Backpack</a>
                 <p>$250.00</p>
             </li>
             <li>
                 <img src="{{ asset('frontend/images/girl.jpg') }}" />
                 <a href="">Crown Summit Backpack</a>
                 <p>$250.00</p>
             </li>
             <li>
                 <img src="{{ asset('frontend/images/girl.jpg') }}" />
                 <a href="">Crown Summit Backpack</a>
                 <p>$250.00</p>
             </li>
             <li>
                 <img src="{{ asset('frontend/images/girl.jpg') }}" />
                 <a href="">Crown Summit Backpack</a>
                 <p>$250.00</p>
             </li>
             <li>
                 <img src="{{ asset('frontend/images/girl.jpg') }}" />
                 <a href="">Crown Summit Backpack</a>
                 <p>$250.00</p>
             </li>
             <li>
                 <img src="{{ asset('frontend/images/girl.jpg') }}" />
                 <a href="">Crown Summit Backpack</a>
                 <p>$250.00</p>
             </li>
             <li>
                 <img src="{{ asset('frontend/images/girl.jpg') }}" />
                 <a href="">Crown Summit Backpack</a>
                 <p>$250.00</p>
             </li>
             <li>
                 <img src="{{ asset('frontend/images/girl.jpg') }}" />
                 <a href="">Crown Summit Backpack</a>
                 <p>$250.00</p>
             </li>
             <li>
                 <img src="{{ asset('frontend/images/girl.jpg') }}" />
                 <a href="">Crown Summit Backpack</a>
                 <p>$250.00</p>
             </li> -->
         </ul>
     </div>
 </product-feature>
@endif