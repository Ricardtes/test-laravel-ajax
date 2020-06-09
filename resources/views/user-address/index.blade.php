@extends('site')

@section('content')
        <div class="center_box cb">
            <div class="uo_tabs cf">
                <a href="#"><span>profile</span></a>
                <a href="#"><span>Reviews</span></a>
                <a href="#"><span>orders</span></a>
                <a href="#" class="active"><span>My Address</span></a>
                <a href="#"><span>Settings</span></a>
            </div>
            <div class="page_content bg_gray">
                @include('user-address.partials.header')
                @include('user-address.partials.form')

            </div>
        </div>

@endsection
