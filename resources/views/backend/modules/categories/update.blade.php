@extends('backend.layouts.master')

@section('Title'){{ trans('backend/master.control-panel') }} - {{ trans('backend/categories.edit') }} {{ $item->title }}@endsection

@section('pageTitle'){{ trans('backend/categories.edit') }} {{ $item->title }}@endsection

@section('breadcrumb')
    <li><a href="{{ route('categories.index') }}">{{ trans('backend/categories.control') }}</a></li>
    <li class="active">{{ trans('backend/categories.edit') }} {{ $item->title }}</li>
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <!-- form start -->
                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                            <form action="{{ route('category.update', $item->id) }}" method="post" role="form">
                                @csrf
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="parent_category">{{ trans('backend/categories.attributes.parentCategory') }}</label>
                                        <select name="parent_id" class="form-control" id="parent_category">
                                            <option value="">قسم رئيسي</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}"{{ $category->id == $item->parent_id ? ' selected' : '' }}>{{ $category->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="title">{{ trans('backend/categories.attributes.title') }}</label>
                                        <input type="text" name="title" value="{{ $item->title }}" class="form-control" id="title" placeholder="{{ trans('backend/categories.hints.title') }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="description">{{ trans('backend/categories.attributes.description') }}</label>
                                        <textarea name="description" class="form-control" id="description" rows="3" placeholder="{{ trans('backend/categories.hints.description') }}">{!! $item->description !!}</textarea>
                                    </div>
                                </div>
                                <!-- /.box-body -->

                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">{{ trans('backend/master.control.save') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection