@extends('back-end.layout.app')

@section('title')
    @lang('page_title.services')
@endsection

@section('content')

    @if(session()->get('success'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <i  class="icon ion-close"></i>
        </button>
        <span>
            <b>  {{ session()->get('success') }} </b> </span>
    </div>
    @endif


    @PageHeader([

    'pageTitle' => 'page_title.services',
    'pageDescription' => 'page_description.update',
    'Single_title'=>'page_title.service',
    'actions' => [
    ['type' => 'Create', 'route' => route('Services.create')],

    ]
    ])
    @endPageHeader
    <div class="row">
        <div class="col-md-12">
            <div class="card">
<div class="card-body">
    <div class="bd bd-gray-300 rounded table-responsive">
        <table class="table table-striped mg-b-0">
            <thead>
            <tr>
                <th>@lang('tables.table_id')</th>
                <th>@lang('tables.table_item_name')</th>
                <th>@lang('tables.table_item_image')</th>
                <th>@lang('tables.table_item_order')</th>
                <th>@lang('tables.table_item_category')</th>
                <th>@lang('tables.table_item_action')</th>
            </tr>
            </thead>
            <tbody>

            @foreach($rows as $row)

            <tr>
                <td>
                    {{$row->id}}
                </td>
                <td>
                    {{$row->name}}
                </td>
                <td>
                  <img src="{{ asset('storage/'.$row->image)}}" width="80px" height="80px">
                </td>
                <td>
                    {{$row->order}}
                </td>
                <td>
                    {{ $row->ServiceCategories->category_name }}
                </td>

                <td class="td-actions">

                    @Button([
                        'type' => 'Edit',
                        'Single_title'=>'page_title.service',
                        'route' => route('Services.edit', $row->id)
                    ])
                    @endButton

                    @Button(['type' => 'Delete',
                        'Single_title'=>'page_title.service',
                        'route' => route('Services.destroy', $row->id)
                    ])@endButton

                </td>

            </tr>
            @endforeach
            </tbody>
        </table>

        {!! $rows->links() !!}
    </div>
</div>
</div>
</div>
</div>


@endsection
