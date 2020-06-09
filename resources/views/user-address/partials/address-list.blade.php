

        @foreach($profile_addresses as $address)
        <div class="item">
            <h3>{{$address->name}}</h3>
{{--            <p>Dubai, Business Bay Area, Sheikh Zayed Road, Single </p>--}}
            <p>{{$address->profile_address}} </p>
            <div class="actbox">
                <span  class="bcross" data-action="remove" data-profile-address-id="{{$address->id}}"></span>
            </div>
        </div>
        @endforeach
{{--        <div class="item">--}}
{{--            <h3>Work Address</h3>--}}
{{--            <p>Dubai, Business Bay Area, Sheikh Zayed Road, Single<br/>Business Tower, Suite 2204</p>--}}
{{--            <div class="actbox">--}}
{{--                <a href="#" class="bcross"></a>--}}
{{--            </div>--}}
{{--        </div>--}}
