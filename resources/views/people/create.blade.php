@extends('welcome')

@section('title')Осздать пользователя@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавить пользователя</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('people.index') }}"><<<--- Главная</a></li>
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
                    <div class="col-12">

                        <!-- Что бы подцепить файлы, напиши enctype="multipart/form-data", тогда будут изображения приходить не в виде строки, а как файлы-->
                        <form action="{{ route('people.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group w-25 mb-3">
                                <input type="text" class="form-control" name="name" placeholder="Имя"
                                       value={{ old( 'name' ) }}>
                                @error('name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group w-25 mb-3">
                                <input type="text" class="form-control" name="firstname" placeholder="Фамилия"
                                       value={{ old( 'firstname' ) }}>
                                @error('firstname')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group w-25 mb-3">
                                <input type="text" class="form-control" name="patronymic" placeholder="Отчество"
                                       value={{ old( 'patronymic' ) }}>
                                @error('patronymic')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group w-25 mb-3">
                                <input type="text" class="form-control" name="company" placeholder="Компания"
                                       value={{ old( 'company' ) }}>
                                @error('company')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group w-25 mb-3">
                                <input type="text" class="form-control" name="mobile" placeholder="Телефон"
                                       value={{ old( 'mobile' ) }}>
                                @error('mobile')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group w-25 mb-3">
                                <input type="text" class="form-control" name="email" placeholder="email"
                                       value={{ old( 'email' ) }}>
                                @error('email')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group w-25 mb-3">
                                <input type="text" class="form-control" name="data" placeholder="Дата рождения"
                                       value={{ old( 'data' ) }}>
                                @error('data')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group w-50 mb-3">
                                <label for="exampleInputFile">Добавить главное изображение</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="url_image">
                                </div>
                                @error('url_image')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mt-3">
                                <input type="submit" class="btn btn-primary" value="Добавить">
                            </div>
                        </form>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
