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
            <h3 class="card-title">Services Table</h3>
        </div>

        <div class="card-body">
            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div>
                            <a href="{{route('service.create')}}" class="btn btn-primary">Добавить</a>

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
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Опысание</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Продолжительность</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Цена</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Цена услуги</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Категория услуг</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Удалить</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Изменить</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($services as $service)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$service->name}}</td>
                                    <td>{{$service->description}}</td>
                                    <td>{{$service->duration}}</td>
                                    <td>{{$service->price}}</td>
                                    <td>{{$service->employee_price}}</td>
                                    <td>{{$service->service_categories->name}}</td>

                                    <td>
                                        <form action="{{route('service.destroy', $service->id)}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <input type="submit" value="Удалить" class="btn btn-danger">
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{route('service.edit', $service->id)}}" method="get">
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
