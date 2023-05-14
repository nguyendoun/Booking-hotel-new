@extends('layouts.admin')
@section('content')
<!-- @can('booking_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.bookings.create") }}">
                {{ trans('global.add') }} {{ trans('cruds.booking.title_singular') }}
            </a>
        </div>
    </div>
@endcan -->
<div class="card">
    <div class="card-header">
        {{ trans('cruds.booking.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        @if(Session::has('messages'))
            <div class="alert alert-success" role="alert">{{Session::get('messages')}}</div>
        @endif
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover  datatable datatable-Booking" width="1189">
            
                <thead>
                    <tr>
                        <th width="10">

                        </th>                   
                        <th>
                            ID
                        </th>
                        <th>
                            Booking Date
                        </th>
                        
                        <th>
                            Coupon
                        </th>
                        <th>
                            Total Money
                        </th>
                        <th>
                            Status
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bookings as $booking)
                    <tr data-entry-id="{{ $booking->id }}">
                        <td>

                        </td>
                        <td>
                            {{ $booking->id}}
                        </td>                   
                        <td>
                            {{ $booking->created_at}}
                        </td>
                        
                        <td>
                            {{ $booking->coupon->reduction }}
                        </td>
                        <td>
                            {{  number_format($booking->total_money)}}đ
                        </td>
                        <td>
                            @if($booking->status == '0')
                                <span class="badge badge-secondary"> Pending</span>
                            @elseif($booking->status == '1')
                                <span class="badge badge-primary">Confirmed</span>
                            @elseif($booking->status == '2')
                                <span class="badge badge-success">Completed</span>
                            @else
                                <span class="badge badge-danger">Cancelled</span>
                            @endif
                        <!-- {{ $booking->booking_msg }} -->
                        </td>
                        <td>
                            @can('booking_show')
                                <a class="btn btn-xs btn-primary" href="{{ route('admin.bookings.show', $booking->id) }}">
                                    View
                                </a>
                            @endcan
                            @can('booking_delete')
                                <form action="{{ route('admin.bookings.destroy', $booking->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
</div>



@endsection
@section('scripts')
@parent


<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('booking_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.bookings.massDestroy') }}",
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
  $('.datatable-Booking:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
@endsection
