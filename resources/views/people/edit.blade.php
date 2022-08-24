@extends('welcome')

@section('title')Редактировать пользователя@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редактировать</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('people.index') }}"><<<--- Главная</a></li>
                            <li class="breadcrumb-item active">{{ $people->name }}</li>
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
                        <form action="{{ route('people.update', $people->id) }}" method="POST" enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf
                            <div class="form-group w-25 mb-3">
                                <input type="text" class="form-control" name="name" placeholder="Имя"
                                       value={{ $people->name }}>
                                @error('name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group w-25 mb-3">
                                <input type="text" class="form-control" name="firstname" placeholder="Фамилия"
                                       value={{ $people->firstname }}>
                                @error('firstname')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group w-25 mb-3">
                                <input type="text" class="form-control" name="patronymic" placeholder="Отчество"
                                       value={{ $people->patronymic }}>
                                @error('patronymic')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group w-25 mb-3">
                                <input type="text" class="form-control" name="company" placeholder="Компания"
                                       value={{ $people->company }}>
                                @error('company')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group w-25 mb-3">
                                <input type="text" class="form-control" name="mobile" placeholder="Телефон"
                                       value={{ $people->mobile }}>
                                @error('mobile')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group w-25 mb-3">
                                <input type="text" class="form-control" name="email" placeholder="email"
                                       value={{ $people->email }}>
                                @error('email')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group w-25 mb-3">
                                <input type="text" class="form-control" name="data" placeholder="Дата рождения"
                                       value={{ $people->data }}>
                                @error('data')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group w-50 mb-3">
                                <label for="exampleInputFile">Фото</label>
                                <div class="w-50 mb-2">
                                    <!-- в консоле artisan stprage:link для их копирования из папки storage в public -->
                                    <img src=" {{ url('storage/'.$people->url_image) }}" alt="preview_image" class="w-50">
                                </div>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="url_image">
                                    </div>
                                </div>
                                @error('url_image')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mt-3">
                                <input type="submit" class="btn btn-primary" value="Обновить">
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
