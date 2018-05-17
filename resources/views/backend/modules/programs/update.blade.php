@extends('backend.layouts.master')

@section('Title'){{ trans('backend/master.control-panel') }} - {{ trans('backend/programs.edit') }} {{ $item->title }}@endsection

@section('pageTitle'){{ trans('backend/programs.edit') }} {{ $item->title }}@endsection

@section('breadcrumb')
    <li><a href="{{ route('programs.index') }}">{{ trans('backend/programs.control') }}</a></li>
    <li class="active">{{ trans('backend/programs.edit') }} {{ $item->title }}</li>
@endsection

@section('styles')
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{ asset('backend/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <!-- form start -->
                    <div class="row">
                        <form action="{{ route('program.update', $item->id) }}" enctype="multipart/form-data" method="post" role="form">
                            @csrf
                            <div class="col-md-6 col-xs-12">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="category">{{ trans('backend/programs.attributes.category') }}</label>
                                        <select name="category_id" class="form-control" id="category">
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}"{{ $category->id == old('category_id', $item->category_id) ? ' selected' : '' }}>{{ $category->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="title">{{ trans('backend/programs.attributes.title') }}</label>
                                        <input type="text" name="title" value="{{ old('title', $item->title) }}" class="form-control" id="title" placeholder="{{ trans('backend/programs.hints.title') }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="icon">{{ trans('backend/programs.attributes.icon') }}</label>
                                        <input type="file" name="icon" value="{{ old('icon', $item->icon) }}" id="icon">
                                        <a href="{{ url('uploads/images/' . $item->icon) }}">
                                            <img src="{{ asset('uploads/images/' . $item->icon) }}" style="width: 50px; height: 50px">
                                        </a>
                                    </div>
                                    <div class="form-group">
                                        <label for="url">{{ trans('backend/programs.attributes.url') }}</label>
                                        <input type="url" name="url" value="{{ old('url', $item->url) }}" class="form-control" id="url" placeholder="{{ trans('backend/programs.hints.url') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="file">{{ trans('backend/programs.attributes.file') }}</label>
                                        <input type="file" name="file" value="{{ old('file') }}" id="file">
                                        @if($item->files()->count() > 0)
                                            <a class="btn btn-primary" href="{{ url('uploads/files/' . $item->files()->first()->name) }}">
                                                <i class="fa fa-download"></i> &nbsp; {{ $item->files()->first()->name }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <div class="col-md-10 col-xs-10">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="description">{{ trans('backend/programs.attributes.description') }}</label>
                                        <textarea name="description" class="form-control description" id="description" rows="3" placeholder="{{ trans('backend/programs.hints.description') }}">{!! old('description', $item->description) !!}</textarea>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">{{ trans('backend/master.control.save') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{ asset('backend/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
    <script>
        //bootstrap WYSIHTML5 - text editor
        $('.description').wysihtml5()
    </script>
@endsection