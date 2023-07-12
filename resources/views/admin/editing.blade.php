@extends('layouts.admin')
@section('content')
    <div class="content">
        <!-- start  -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="mt-5">
                    <h4 class="header-title mb-3">Thêm mới - Sản Phẩm</h4>
                    <div class="mb-4">
                        <form action="{{ route('editing.store', ['model' => 'Products']) }}" class="form-validation"
                            method="post" enctype="multipart/form-data">
                            @csrf
                            @if (!empty($configs))
                                @foreach ($configs as $config)
                                    @switch($config['type'])
                                        @case('text')
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <label>{{ $config['name'] }}</label>
                                                        <div class="input-group">
                                                            <input type="text" name="{{ $config['field'] }}" class="form-control @error('name') is-invalid @enderror"
                                                                placeholder="{{ htmlspecialchars($config['name']) }}">
                                                            @error('name')
                                                                <div class="alert alert-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            @break

                                            @case('number')
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <label>{{ $config['name'] }}</label>
                                                        <div class="input-group">
                                                            <input type="number" name="{{ $config['field'] }}" class="form-control @error('price') is-invalid @enderror"
                                                                placeholder="{{ htmlspecialchars($config['name']) }}">
                                                            @error('price')
                                                                <div class="alert alert-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @break

                                        @case('image')
                                            <div class="form-group">
                                                <label>{{ $config['name'] }}</label>
                                                <div class="input-group">
                                                    <input type="file" name="{{ $config['field'] }}" class="filestyle"
                                                        data-btnclass="btn-primary"
                                                        placeholder="{{ htmlspecialchars($config['name']) }}">
                                                </div>
                                            </div>
                                        @break

                                        @case('brand_id')
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <label>{{ $config['name'] }}</label>
                                                            <div class="input-group">
                                                                <select class="select2 form-control @error('brand_id') is-invalid @enderror" data-toggle="select2"
                                                                    name="{{ $config['field'] }}">
                                                                    <option value="one">First</option>
                                                                    <option value="two">Second</option>
                                                                    <option value="three">Third</option>
                                                                </select>
                                                                @error('brand_id')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @break

                                            @case('category_id')
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <label>{{ $config['name'] }}</label>
                                                            <div class="input-group">
                                                                <select class="select2 form-control @error('category_id') is-invalid @enderror" data-toggle="select2"
                                                                    name="{{ $config['field'] }}">
                                                                    <option value="one">First</option>
                                                                    <option value="two">Second</option>
                                                                    <option value="three">Third</option>
                                                                </select>
                                                                @error('category_id')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @break

                                        @case('ckeditor')
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label>{{ $config['name'] }}</label>
                                                    <div class="input-group @error('ckeditor') is-invalid @enderror">
                                                        <textarea name="{{ $config['field'] }}" id="editor" cols="30" rows="10"
                                                            placeholder="{{ htmlspecialchars($config['name']) }}"></textarea>
                                                        @error('ckeditor')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        @break

                                        @default
                                    @endswitch
                                @endforeach
                                <div class="form-group row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">
                                            Sibmit
                                        </button>
                                        <button type="reset" class="btn btn-danger waves-effect">
                                            Cancel
                                        </button>
                                    </div>
                                </div>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

    </div>
@endsection
