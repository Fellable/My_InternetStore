@extends('layouts.admin.main')

@section('content')



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Показать пользователя</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active">Показать пользователя</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">

                    <!-- ----------------------------------------------------------------------------------------------------------->
                    <div class="card col-4">
                        <div class="card-header d-flex p-3">
                            <div class="mr-3">
                            <a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary">Редактировать</a>
                            </div>
                            <form action="{{ route('user.delete', $user->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" class="btn btn-danger" value="Удалить">
                            </form>
                            </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table table-sm">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Имя</th>
                                    <th>Фамилия</th>
                                    <th>Отчество</th>
                                    <th>Email</th>
                                    <th>Возраст</th>
                                    <th>Пол</th>
                                    <th>Адрес</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td> {{ $user->id }}</td>
                                        <td> {{ $user->name }}</td>
                                        <td> {{ $user->surname }}</td>
                                        <td> {{ $user->patronymic }}</td>
                                        <td> {{ $user->email }}</td>
                                        <td> {{ $user->age }}</td>
                                        <td> {{ $user->gender }}</td>
                                        <td> {{ $user->address }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

@endsection
