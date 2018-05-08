@extends('backend.layouts.master')

@section('Title'){{ trans('backend/master.control-panel') }} - {{ trans('backend/categories.create') }}@endsection

@section('pageTitle'){{ trans('backend/categories.create') }}@endsection

@section('breadcrumb')
    <li><a href="{{ route('categories.index') }}">{{ trans('backend/categories.control') }}</a></li>
    <li class="active">{{ trans('backend/categories.create') }}</li>
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
                            <form action="{{ route('category.store') }}" method="post" role="form">
                                @csrf
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="title">{{ trans('backend/categories.attributes.title') }}</label>
                                        <input type="text" name="title" class="form-control" id="title" placeholder="{{ trans('backend/categories.hints.title') }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="description">{{ trans('backend/categories.attributes.description') }}</label>
                                        <textarea name="description" class="form-control" id="description" rows="3" placeholder="{{ trans('backend/categories.hints.description') }}"></textarea>
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