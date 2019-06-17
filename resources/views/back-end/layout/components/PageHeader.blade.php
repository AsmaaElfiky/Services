<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <div class="row">
                    <div class="col-md-8">
                        <h4 class="card-title ">@lang($pageTitle)</h4>
                        <p class="card-category">
                            @lang($pageDescription, ['page_title' => __($pageTitle)])</p>
                    </div>

                    @if(isset($back))
                        <div class="dropdown">
                            <a href="{{ $back['route'] }}" class="btn btn-primary tx-13 tx-medium tx-white-force">@lang('actions.back', ['page_title' => __($back['page_title'])])</a>
                        </div>
                    @elseif(isset($actions))
                    @foreach($actions as $action)
                    @if($action['type'] === 'Create')
                            <div class="col-md-4 text-right">
                        <a href="{{ $action['route'] }}" class="btn btn-primary btn-block mg-b-10">@lang('actions.add',['page_title' => __($Single_title)])  </a>
                            </div>
                        @endif
                        @endforeach
                        @endif
                </div>


            </div>
           </div>
            </div>
            </div>



