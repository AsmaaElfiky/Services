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
                <img class="img" width="150px" height="150px" id="blah" src="{{isset($row)?url($row->$input): ''}}">
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
            $input ="order";
        @endphp
        <div class="form-group bmd-form-group">

            <label class="bmd-label-floating">order</label>
            <input type="text" class="form-control" name="{{$input}}">
            @if ($errors->has($input))
                <span class="help-block small text-danger">{{$errors->first($input)}}</span>

            @endif
        </div>
    </div>
    <div class="col-md-6">
        @php
            $input ="category_id";
        @endphp
        <div class="form-group bmd-form-group">

            <label class="bmd-label-floating">Category</label>
            <select class="form-control" name="{{$input}}" value="{{isset($row)? $row->$input : old($input)}}">
                @foreach ($ServiceCategories as $cat)
                <option value="{{ $cat->id }}" >
                     {{ $cat->category_name }}
                 </option>
                @endforeach
            </select>
            @if ($errors->has($input))
                <span class="help-block small text-danger">{{$errors->first($input)}}</span>

            @endif
        </div>
    </div>
</div>


