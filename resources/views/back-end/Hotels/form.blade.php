@csrf

<div class="row">

    <div class="col-md-6">
        @php
            $input ="name";
        @endphp
        <div class="form-group bmd-form-group">

            <label class="bmd-label-floating">Name</label>
            <input type="text" class="form-control" value = "{{isset($row)?$row->$input:old($input)}}" name="{{$input}}">
            @if ($errors->has($input))
                <span class="help-block small text-danger">{{$errors->first($input)}}</span>

            @endif
        </div>
    </div>
    <div class="col-md-6">
        @php
            $input ="type";
        @endphp
        <div class="form-group bmd-form-group">

            <label class="bmd-label-floating">Type</label>
            <input type="text" class="form-control" value = "{{isset($row)?$row->$input:old($input)}}" name="{{$input}}">
            @if ($errors->has($input))
                <span class="help-block small text-danger">{{$errors->first($input)}}</span>

            @endif
        </div>
    </div>
</div>
    <div class="row">
    <div class="col-md-6">
        @php
            $input ="singular";
        @endphp
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Singular Price</label>
            <input id="" type="text" value="{{isset($row)? $row->$input : old($input)}}" class="form-control" name="{{$input}}">

            @if ($errors->has($input))
                <span class="help-block small text-danger">{{$errors->first($input)}}</span>

            @endif
        </div>
    </div>
        <div class="col-md-6">
            @php
                $input ="plural";
            @endphp
            <div class="form-group bmd-form-group">
                <label class="bmd-label-floating">Plural Price</label>
                <input id="" type="text" value="{{isset($row)? $row->$input : old($input)}}" class="form-control" name="{{$input}}">

                @if ($errors->has($input))
                    <span class="help-block small text-danger">{{$errors->first($input)}}</span>

                @endif
            </div>
        </div>
    </div>


<div class="row">
    <div class="col-md-12">
        @php
            $input ="trip_id";
        @endphp
        <div class="form-group bmd-form-group">

            <label class="bmd-label-floating">Select Trip</label>

           <select id="" name="{{$input}}" class="form-control" value="{{isset($row)? $row->$input : old($input)}}">
             @foreach($trips as $trip)
               <option class="form-control  dark-edition" value="{{$trip->id}}">{{$trip->name}}</option>
               @endforeach
           </select>
            @if ($errors->has($input))
                <span class="help-block small text-danger">{{$errors->first($input)}}</span>

            @endif
        </div>
    </div>
</div>
{{--<div class="row">--}}

    {{--<div class="col-md-4">--}}
        {{--<p class="card-category">Trips</p>--}}
        {{--@php $input ="trips[]";--}}
        {{--@endphp--}}
        {{--@foreach($trips as $trip)--}}
            {{--<div class="form-check">--}}
                {{--<label class="form-check-label">{{$trip->name}}--}}

                    {{--<input class="form-check-input" type="checkbox" value="1" id="" name="{{$input}}" {{ in_array($trip->id , $TripsArray)? 'checked':null}}>--}}

                    {{--<span class="form-check-sign">--}}
                                    {{--<span class="check"></span>--}}
                                  {{--</span>--}}
                {{--</label>--}}
            {{--</div>--}}
        {{--@endforeach--}}

    {{--</div>--}}



{{--</div>--}}


