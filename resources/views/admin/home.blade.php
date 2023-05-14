@extends('layouts.admin')
@section('styles')
    <style>
        .icon{
            font-size:36px;
            padding-top: 15px;
            padding-left: 10px;
        }
        .more{
            background-color:#564e4e;
        }
    </style>
@stop
@section('content')
@can('dashboard')
<div class="content">

    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="row">
                    <div class="col-lg-3">
                      <i class="fas fa-briefcase icon"></i>
                    </div>
                    <div>
                        <h3>{{$booking_count}}</h3>

                        <p>New Bookings</p>
                    </div>
                </div>
                <div class="text-center more">
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
          <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="row">
                    <div class="col-lg-3">
                      <i class="fas fa-hotel icon"></i>
                    </div>
                    <div>
                        <h3>{{$rooms}}<i style="font-size:13px"> ({{$unavailable_rooms}} unavailable,{{$available_rooms}} available)</i></h3>

                        <p>Room</p>
                    </div>
                </div>
                <div class="text-center more">
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div> 
            </div>
        </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="row">
                    <div class="col-lg-3">
                      <i class="fas fa-comment-alt icon"></i>
                    </div>
                    <div>
                        <h3>{{$comments}}</h3>

                        <p>New Comments</p>
                    </div>
                </div>
                <div class="text-center more">
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div> 
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
            <div class="row">
                <div class="col-lg-3">
                    <i class="fa fa-star icon"></i>
                </div>
                <div>
                    <h3>{{$rating}}/5.0</h3>

                    <p>Rate</p>
                </div>
            </div>
            <div class="text-center more">
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div> 
            </div>
          </div>
          <!-- ./col -->
    </div>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    New Booking
                </div>
                <br>
                <div class="card-body ">
                    <form method="GET" action="">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input class="form-control" type="date" name="date_from"  value="{{ request()->input('date_from') }}"  required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input class="form-control" type="date" name="date_to"  value="{{ request()->input('date_to') }}"  required>
                                </div>
                            </div>
                            
                            <div class="col-md-1">
                                <button class="btn btn-success">
                                    Search
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                @if($bookings !== null) 
                    @if($bookings->count())
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover datatable datatable-Booking" width="1189">
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
                    @else
                        <p class="text-center">There are no rooms available at the time you have chosen</p>
                    @endif
                @endif

            </div>      
        </div>
    </div>

</div>
@endcan
@endsection
@section('scripts')
@parent
<!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
{{-- <script>
$(document).ready(() => {
    $('.booking-checkbox').change(function() {
        var checkbox = this;
        if(this.checked) {
            $.ajax({
                // url: "{{ route('api.bookings.store') }}",
                // method: "post",
                // dataType: "json",
                // headers: {
                //     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                // },
                data: {
                    room_id: $(this).data('room'),
                    booking_date: $(this).data('day')
                }
            }).done(({data}) => {
                $(this).prop("checked", true);
                $(this).attr('data-booked', data.id);
                Swal.fire(
                    'Good job!',
                    'Booking for room '+data.room.room_number+' on '+data.booking_date+' is added',
                    'success'
                );
            }).fail(function(data) {
                console.log(data);
                Swal.fire(
                    'Whoops!',
                    'There was an error! Check console',
                    'error'
                );
            });
        }
        else
        {
            $.ajax({
                url: "{{ route('api.bookings.destroy', "") }}/"+$(this).attr('data-booked'),
                method: "delete",
                dataType: "json",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                }
            }).done(({data}) => {
                console.log(data);
                $(this).prop("checked", false);
                $(this).attr('data-booked', '');
                Swal.fire(
                    'Good job!',
                    'Booking for room '+data.room.room_number+' on '+data.booking_date+' is deleted',
                    'success'
                );
            }).fail(function(data) {
                console.log(data);
                Swal.fire(
                    'Whoops!',
                    'There was an error! Check console',
                    'error'
                );
            });
        }
    });
});
</script> --}} -->
@endsection

