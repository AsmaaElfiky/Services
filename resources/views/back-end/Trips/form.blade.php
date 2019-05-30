@csrf

<div class="row">
    @php
        $input ="name";
    @endphp
    <div class="col-md-12">
        <div class="form-group bmd-form-group">

            <label class="bmd-label-floating">Name</label>
            <input type="text" class="form-control" value = "{{isset($row)?$row->$input:old($input)}}" name="{{$input}}">
            @if ($errors->has($input))
                <span class="help-block small text-danger">{{$errors->first($input)}}</span>

            @endif
        </div>
    </div>
</div>
    <div class="row">
    <div class="col-md-12">
        @php
            $input ="date";
        @endphp
        <div class="form-group bmd-form-group">

            <input id="date" type="date" value="{{isset($row)? $row->$input : old($input)}}" class="form-control" name="{{$input}}">

            @if ($errors->has($input))
                <span class="help-block small text-danger">{{$errors->first($input)}}</span>

            @endif
        </div>
    </div>
    </div>

<div class="row">
    <div class="col-md-12">
        @php
            $input ="desc";
        @endphp
        <div class="form-group bmd-form-group">

            <label class="bmd-label-floating">Description</label>
<textarea name="{{$input}}" class="form-control" >{{isset($row)? $row->$input : old($input)}}</textarea>
            @if ($errors->has($input))
                <span class="help-block small text-danger">{{$errors->first($input)}}</span>

            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        @php
            $input ="cat_id";
        @endphp
        <div class="form-group bmd-form-group">

            <label class="bmd-label-floating">Category</label>

           <select id="" name="{{$input}}" class="form-control" value="{{isset($row)? $row->$input : old($input)}}">
             @foreach($categories as $cat)
               <option class="form-control  dark-edition" value="{{$cat->id}}">{{$cat->name}}</option>
               @endforeach
           </select>
            @if ($errors->has($input))
                <span class="help-block small text-danger">{{$errors->first($input)}}</span>

            @endif
        </div>
    </div>
</div>


<div class="row">

    <div class="col-md-4">
        <p class="card-category">Hotels</p>
        @php $input ="hotels[]";

        @endphp
        @foreach($hotels as $hotel)
        <div class="form-check">
            <label class="form-check-label">{{$hotel->name}}

                <input class="form-check-input" type="checkbox" value="{{$hotel->id}}" id="" name="{{$input}}" {{ in_array($hotel->id , $array)? 'checked':null}}>

                <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
            </label>
        </div>
        @endforeach

    </div>



</div>


