@extends('layouts.admin.main')

@section('content')



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавить категорию</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active">Добавить категорию</li>
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

                    <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data" class="col-6">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="title" class="form-control" placeholder="Наименование">
                        </div>


                        <div class="form-group">
                            <input type="text" name="description" class="form-control" placeholder="Описание">
                        </div>

                        <div class="form-group">
                            <input type="text" name="content" class="form-control" placeholder="Контент">
                        </div>

                        <div class="form-group">
                            Старая цена <input type="text" name="old_price" class="form-control" placeholder="Старая цена">
                        </div>

                        <div class="form-group">
                            Новая цена <input type="text" name="price" class="form-control" placeholder="Новая цена">
                        </div>


                        <div class="form-group">
                            <input type="text" name="count" class="form-control" placeholder="Количество на складе">
                        </div>


                        <div class="form-group">
                            <select name="category_id" class="form-control select2" style="width: 100%;">
                                <option selected="selected" disabled>Выберите категорию</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}"> {{ $category->title }}</option>
                                @endforeach
                            </select>
                        </div>



                        <div class="form-group">
                            <select name="group_id" class="form-control select2" style="width: 100%;">
                                <option selected="selected" disabled>Выберите группу</option>
                                @foreach($groups as $group)
                                    <option value="{{ $group->id }}"> {{ $group->title }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <select class="tags" name="tags[]" multiple="multiple" data-placeholder="Выберите теги"
                                    style="width:100%;">
                                @foreach($tags as $tag)
                                    <option value="{{ $tag->id }}"> {{ $tag->title }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <select class="colors" name="colors[]" multiple="multiple" data-placeholder="Выберите теги"
                                    style="width:100%;">
                                @foreach($colors as $color)
                                    <option value="{{ $color->id }}"> {{ $color->title }}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="form-group">
                            <div class="input-group">
                                <div class="custom-file">
                                    <input name="preview_image" type="file" class="custom-file-input"
                                           id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Выберите файл</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Загрузка</span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="custom-file">
                                    <input name="product_images[]" type="file" class="custom-file-input"
                                           id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Выберите файл</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Загрузка</span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="custom-file">
                                    <input name="product_images[]" type="file" class="custom-file-input"
                                           id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Выберите файл</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Загрузка</span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <div class="custom-file">
                                    <input name="product_images[]" type="file" class="custom-file-input"
                                           id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Выберите файл</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Загрузка</span>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" placeholder="Добавить">
                        </div>
                    </form>


                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

@endsection
