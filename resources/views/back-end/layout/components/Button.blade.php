@if($type === 'submit')
<button type="submit" class="btn btn-primary pull-right">@lang('actions.add',['page_title' => __($Single_title)])</button>
@elseif($type === 'update')
    <button type="submit" class="btn btn-primary pull-right">@lang('actions.update',['page_title' => __($Single_title)])</button>

    @elseif($type === 'Edit')
    <a href="{{ $route }}" rel="tooltip" title="@lang('actions.update',['page_title' => __($Single_title)])"
    class="btn btn-white btn-link btn-sm" data-original-title="">
     <i  class="icon ion-edit"></i>
    </a>
   @elseif($type === 'Delete')
   <form action="{{ $route}}" method="post">
    @csrf
    @method( 'DELETE' )
    <button type="submit" rel="tooltip" title="@lang('actions.delete',['page_title' => __($Single_title)])" class="btn btn-white btn-link btn-sm" data-original-title="Remove">
       <i  class="icon ion-close"></i>
    </button>
</form>
    @endif
