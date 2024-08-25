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
            <h3 class="card-title">Salons Table</h3>
        </div>

        <div class="card-body">
            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div>
                            <a href="{{route('salon.create')}}" class="btn btn-primary">Добавить</a>

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
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Название</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Номер Телефона</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Эл. почта</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Неделья</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Начало работы</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Конец работы</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Удалить</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Изменить</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($salons as $salon)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$salon->name}}</td>
                                    <td>{{$salon->phone}}</td>
                                    <td>{{$salon->email}}</td>
                                    <td>{{$salon->week}}</td>
                                    <td>{{$salon->start_time}}</td>
                                    <td>{{$salon->end_time}}</td>

                                    <td>
                                        <form action="{{route('salon.destroy', $salon->id)}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <input type="submit" value="Удалить" class="btn btn-danger">
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{route('salon.edit', $salon->id)}}" method="get">
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
