@extends('layouts.frontend')

@section('content')
    @include('frontend.products.product_fearute', ['productFeature' => $productFeature ?? collect()])
    @include('frontend.partitions.footer')
@endsection