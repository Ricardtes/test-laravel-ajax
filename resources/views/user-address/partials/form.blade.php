<div class="uo_body">
    <div class="wrapper">
        <div class="uofb cf">
            <div class="l_col adrs">
                <h2>Add New Address</h2>

                <form data-card >
                    <input type="hidden" name="user_profile_id" value="1" data-user-profile-id="=1">
                    <div class="field">
                        <label>Name *</label>
                        <input type="text" value="" palceholder="" data-card-name name="name" class="vl_empty" />
                    </div>
                    <div class="field">
                        <label>Your city *</label>
                        <select class="vl_empty" name="city_id">
                            <option value=""></option>
                            @foreach($cities as $city)
                            <option value="{{$city->id}}">{{$city->label}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="field">
                        <label>Your area *</label>
                        <select name="area_id">
                            <option value=""></option>
                           @foreach($areas as $area)
                                <option value="{{$area->id}}">{{$area->label}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="field">
                        <label>Street</label>
                        <input type="text" value="" data-card-street name="street" palceholder="" class="vl_empty" />
                    </div>
                    <div class="field">
                        <label>House # </label>
                        <input type="text" value="" data-card-house name="house_number" palceholder="House Name / Number" />
                    </div>

                    <div class="field">
                        <label class="pos_top">Additional information</label>
                        <textarea name="additional_info" data-card-info></textarea>
                    </div>

                    <div class="field">
                        <div data-action="add" class="green_btn">add address </div>
                    </div>
                </form>
            </div>
            <div class="r_col">
                <h2>My Addresses</h2>
                <div class="uo_adr_list" data-addresses>

                </div>
                {{--            @include('user-address.partials.address-list')--}}
            </div>
        </div>
    </div>
</div>
