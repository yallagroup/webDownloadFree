@extends('backend.layouts.master')

@section('Title'){{ trans('backend/master.control-panel') }} - {{ trans('backend/categories.all') }}@endsection

@section('pageTitle'){{ trans('backend/categories.all') }}@endsection

@section('breadcrumb')
    <li class="active">{{ trans('backend/categories.all') }}</li>
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <a href="{{ route('category.create') }}" class="btn btn-success btn-sm">{{ trans('backend/master.control.create') }}</a>
                        <div class="box-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input name="table_search" class="form-control pull-right" placeholder="Search" type="text">
                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tbody><tr>
                                <th>{{ trans('backend/master.index-nav.id') }}</th>
                                <th>{{ trans('backend/master.index-nav.title') }}</th>
                                <th>{{ trans('backend/master.index-nav.control') }}</th>
                            </tr>
                            @foreach($items as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>
                                        <a href="{{ route('category.edit', $item->id) }}" class="btn btn-primary btn-xs">{{ trans('backend/master.control.edit') }}</a>
                                        <a href="{{ route('category.destroy', $item->id) }}" class="btn btn-danger btn-xs">{{ trans('backend/master.control.delete') }}</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody></table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>
@endsection