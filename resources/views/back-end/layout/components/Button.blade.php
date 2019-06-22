@if($type === 'submit')
<button type="submit" class="btn btn-primary pull-right">@lang('actions.add',['page_title' => __($Single_title)])</button>
@elseif($type === 'update')
    <button type="submit" class="btn btn-primary pull-right">@lang('actions.update',['page_title' => __($Single_title)])</button>
    @endif
