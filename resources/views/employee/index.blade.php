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
            <h3 class="card-title">Employees Table</h3>
        </div>
        <div class="card-body">
            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div>
                            <a href="{{route('employee.create')}}" class="btn btn-primary">Добавить</a>

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
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Имя</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Фамилия</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Номер Телефона</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Эл. почта</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Фото</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Навыки</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Услуги</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Расписание</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Удалить</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Изменить</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($employees as $employee)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$employee->first_name}}</td>
                                    <td>{{$employee->last_name}}</td>
                                    <td>{{$employee->phone}}</td>
                                    <td>{{$employee->email}}</td>
                                    <td>{{$employee->photo}}</td>
                                    <td>{{$employee->skills}}</td>
                                    <td>{{$employee->services}}</td>
                                    <td>{{$employee->schedule}}</td>

                                    <td>
                                        <form action="{{route('employee.destroy', $employee->id)}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <input type="submit" value="Удалить" class="btn btn-danger">
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{route('employee.edit', $employee->id)}}" method="get">
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
