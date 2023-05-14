@extends('layouts.admin')
@section('content')
@can('image_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.images.create") }}">
                {{ trans('global.add') }} {{ trans('cruds.image.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.image.title_singular') }} {{ trans('global.list') }}
    </div>
    @if(session()->has('success'))
        <div class="alert alert-success">{{session()->get('success')}}</div> 
    @endif
    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover  datatable datatable-Image" width="1189">
           
            <thead>
                <tr>
                    <th width="10">

                    </th>                   
                    <th>
                        ID
                    </th>
                    <th>
                        Image
                    </th>
                    <th>
                        Room ID
                    </th>
                    <th>
                        Room Types
                    </th>
                    <th>
                        &nbsp;
                    </th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach($images as $image)
                <tr>
                    <td></td>
                    <td>
                        {{ $image->id}}
                    </td>                   
                    <td>
                        <img height="80px" src="../../resources/images/rooms/{{$image->path}}" alt="">
                    </td>
                    <td>
                        {{$image->room->id}}
                    </td>
                    <td>
                        @if($image->room !=NULL)                
                        <a href="{{ route('admin.rooms.show',$image->room->id)}}">{{ $image->room->roomType->type }}</a>
                        @endif
                    </td>
                    
                    <td>
                        @can('image_edit')
                            <a class="btn btn-xs btn-info" href="{{ route('admin.images.edit', $image->id) }}">
                                {{ trans('global.edit') }}
                            </a>
                        @endcan

                        @can('image_delete')
                            <form action="{{ route('admin.images.destroy', $image->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                            </form>
                        @endcan
                    </td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('image_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.images.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  $('.datatable-Image:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
@endsection