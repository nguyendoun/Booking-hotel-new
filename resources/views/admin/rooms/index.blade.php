
@extends('layouts.admin')

@section('styles')
    <link rel="stylesheet" href="../../resources/css/status.css" />
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
@stop

@section('content')


@can('room_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.rooms.create") }}">
                {{ trans('global.add') }} {{ trans('cruds.room.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.room.title_singular') }} {{ trans('global.list') }}
    </div>
    @if(session()->has('success'))
        <div class="alert alert-success">{{session()->get('success')}}</div> 
    @endif
    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover datatable datatable-Room" width="1189">
            <thead>
                <tr>
                    <th width="10">

                    </th>                   
                    <th>
                        ID
                    </th>
                    <th>
                        Price
                    </th>
                    <th>
                       Quantity
                    </th>
                    <th>
                        Discount
                    </th>
                    <th>
                        Room Type
                    </th>
                    <!-- <th>
                        Status
                    </th>                    -->
                    <th>
                        &nbsp;
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($rooms as $room)
                <tr data-entry-id="{{ $room->id }}">
                    <td></td>
                    <td>
                        {{ $room->id}}
                    </td>                   
                    <td>
                       {{ number_format($room->price)}}đ
                    </td>
                    <td>
                       {{$room->qty}}
                    </td>
                    <td>
                        {{ $room->discount}}
                    </td>
                    <td>
                        {{ $room->roomType->type }}
                    </td>
                    <!-- <td>
                    <input type="checkbox" class="toggle-class" data-onstyle="success" data-id="{{ $room->id }}" data-toggle="toggle" data-style="slow" data-on="Enabled" data-off="Disabled" {{ $room->status == true ? 'checked' : ''}} >
                    </td> -->
                    <td>
                    @can('room_show')
                        <a class="btn btn-xs btn-primary" href="{{ route('admin.rooms.show', $room->id) }}">
                            {{ trans('global.view') }}
                        </a>
                    @endcan

                    @can('room_edit')
                        <a class="btn btn-xs btn-info" href="{{ route('admin.rooms.edit', $room->id) }}">
                            {{ trans('global.edit') }}
                        </a>
                    @endcan

                    @can('room_delete')
                        <form action="{{ route('admin.rooms.destroy', $room->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
  @can('room_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.rooms.massDestroy') }}",
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
  $('.datatable-Room:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>

//status

@push('scripts')

<script>
  $(function() {
    $('#toggle-two').bootstrapToggle({
      on: 'Enabled',
      off: 'Disabled'
    });
  })
</script>


<!-- <script>
    $('.toggle-class').on('change', function() {
        var status = $(this).prop('checked') == true ? 1 : 0;
        var id = $(this).data('id');
        $.ajax({
            type: 'GET',
            dataType: 'JSON',
            url: '{{ route('admin.changeStatus') }}',
            data: {
                'status': status,
                'id': id
            },
            success:function(data) {
                $('#notifDiv').fadeIn();
                $('#notifDiv').css('background', 'green');
                $('#notifDiv').text('Status Updated Successfully');
                setTimeout(() => {
                    $('#notifDiv').fadeOut();
                }, 3000);
            }
        });
    });
</script> -->
@endpush
@endsection