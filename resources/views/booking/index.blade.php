@extends('layouts.app')

@section('title')
@endsection

@section('content')
    @if(session('message'))
        <div class="alert alert-danger">
            {{session('message')}}
        </div>
    @elseif(session('message2'))
        <div class="alert alert-info">
            {{session('message2')}}
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Bookings Table</h3>
        </div>

        <div class="card-body">
            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div>
                            <a href="{{route('booking.create')}}" class="btn btn-primary">Добавить</a>

                            <a href="{{route('main.index')}}" class="btn btn-primary">Перейти на сайт</a>

                        </div>
                        <br>
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
                            <thead>
                            <tr>
                                <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">#</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Имя клиента</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Телефон клиента</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Эл. почта клиента</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Дата бронирования</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Статус</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Статус оплаты</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Услуга</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Барбер</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Удалить</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Изменить</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($bookings as $booking)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$booking->client_name}}</td>
                                    <td>{{$booking->client_phone}}</td>
                                    <td>{{$booking->client_email}}</td>
                                    <td>{{$booking->booking_date}}</td>
                                    <td>{{$booking->status}}</td>
                                    <td>{{$booking->payment_status}}</td>
                                    <td>{{$booking->employee->name}}</td>
                                    <td>{{$booking->service->name}}</td>

                                    <td>
                                        <form action="{{route('booking.destroy', $booking->id)}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <input type="submit" value="Удалить" class="btn btn-danger">
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{route('booking.edit', $booking->id)}}" method="get">
                                            @csrf
                                            <input type="submit" value="Изменить" class="btn btn-info">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                            </tfoot>
                        </table>
                    </div>
                </div>

            </div>
        </div>

    </div>

@endsection

@section('footer')
@endsection
