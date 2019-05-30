@csrf

<div class="row">
    @php
        $input ="name";
    @endphp
    <div class="col-md-6">
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
            $input ="meta_keywords";
        @endphp
        <div class="form-group bmd-form-group">

            <label class="bmd-label-floating">Meta Keywords</label>
            <input type="text" class="form-control" name="{{$input}}" value="{{isset($row)? $row->$input : old($input)}}">
            @if ($errors->has($input))
                <span class="help-block small text-danger">{{$errors->first($input)}}</span>

            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        @php
            $input ="meta_des";
        @endphp
        <div class="form-group bmd-form-group">

            <label class="bmd-label-floating">Meta Description</label>
<textarea name="{{$input}}" class="form-control" >{{isset($row)? $row->$input : old($input)}}</textarea>
            @if ($errors->has($input))
                <span class="help-block small text-danger">{{$errors->first($input)}}</span>

            @endif
        </div>
    </div>
</div>


