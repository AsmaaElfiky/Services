<form action="{{route($routeName.'.destroy',['id'=>$row])}}" method="post">
    @csrf
    @method( 'DELETE' )
    <button type="submit" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Remove">
       <i  class="icon ion-close"></i>
    </button>
</form>
