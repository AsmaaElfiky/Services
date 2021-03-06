@csrf
<div class="row">
@php
$input ="image";
@endphp
    <div class="col-md-12">
        <div class="card card-profile">
            <input onerror="this.style.display='none'" type='file' onchange="readURL(this);"
                   class="form-control wow bounceInRight" type="file" name="{{$input}}" >
            @if ($errors->has($input))
                <span class="help-block small text-danger">{{$errors->first($input)}}</span>

            @endif
            <div class="card-avatar">
                <img class="img" id="blah" src="{{isset($row)?url($row->$input): ''}}">
            </div>
        </div>

    </div>
</div>
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
            $input ="password";
        @endphp
        <div class="form-group bmd-form-group">

            <label class="bmd-label-floating">Password</label>
            <input type="password" class="form-control" name="{{$input}}">
            @if ($errors->has($input))
                <span class="help-block small text-danger">{{$errors->first($input)}}</span>

            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        @php
            $input ="email";
        @endphp
        <div class="form-group bmd-form-group">

            <label class="bmd-label-floating">Email</label>

            <input type="email" class="form-control" name="email" value="{{isset($row)? $row->$input : old($input)}}">
            @if ($errors->has($input))
                <span class="help-block small text-danger">{{$errors->first($input)}}</span>

            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        @php
            $input ="group";
        @endphp
        <div class="form-group bmd-form-group">

            <label class="bmd-label-floating">Group</label>

            <select id="" name="{{$input}}" class="form-control" value="{{isset($row)? $row->$input : old($input)}}">

            @foreach ($roles as $role)

            <option class="form-control  dark-edition" {{isset($row) && ($row->$input== $role->name) ? 'selected':''}} value="{{ $role->name }}" >{{ $role->name }}</option>
            @endforeach

            </select>
            @if ($errors->has($input))
                <span class="help-block small text-danger">{{$errors->first($input)}}</span>

            @endif
        </div>
    </div>
    </div>


