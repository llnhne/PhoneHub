@extends('layouts.admin')
@section('content')
    <div class="content">
        <!-- start  -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="">
                    <h4 class="header-title mb-4" style="font-size: large; font-weight:600;">{{ $titlecreate }}</h4>
                    <div class="mb-4">
                        <form action="{{ route('editing.store', ['model' => $modelName]) }}" class="form-validation"
                            method="post" enctype="multipart/form-data">
                            @csrf
                            @if (!empty($configs))
                                @foreach ($configs as $config)
                                    @switch($config['type'])
                                        @case('text')
                                            <?php $field = $config['field']; ?>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <label style="font-size: medium; font-weight:600;">{{ $config['name'] }}</label>
                                                        <div class="input-group flex-column">
                                                            <input type="text" name="{{ $config['field'] }}"
                                                                class="form-control @error($field) is-invalid @enderror"
                                                                placeholder="{{ htmlspecialchars($config['name']) }}">
                                                            @error($field)
                                                                <div class="alert alert-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            @break

                                            @case('username')
                                            <?php $field = $config['field']; ?>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="form-group ">
                                                            <label style="font-size: medium; font-weight:600;">{{ $config['name'] }}</label>
                                                            <div class="input-group flex-column">
                                                                <input type="text" name="{{ $config['field'] }}"
                                                                    class="form-control @error($field) is-invalid @enderror"
                                                                    placeholder="{{ htmlspecialchars($config['name']) }}">
                                                                @error($field)
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                @break

                                                @case('name_banner')
                                                <?php $field = $config['field']; ?>
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                                            <div class="form-group ">
                                                                <label style="font-size: medium; font-weight:600;">{{ $config['name'] }}</label>
                                                                <div class="input-group flex-column">
                                                                    <input type="text" name="{{ $config['field'] }}"
                                                                        class="form-control @error($field) is-invalid @enderror"
                                                                        placeholder="{{ htmlspecialchars($config['name']) }}">
                                                                    @error($field)
                                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @break

                                                @case('category_name')
                                                <?php $field = $config['field']; ?>
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                                            <div class="form-group ">
                                                                <label style="font-size: medium; font-weight:600;">{{ $config['name'] }}</label>
                                                                <div class="input-group flex-column">
                                                                    <input type="text" name="{{ $config['field'] }}"
                                                                        class="form-control @error($field) is-invalid @enderror"
                                                                        placeholder="{{ htmlspecialchars($config['name']) }}">
                                                                    @error($field)
                                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @break

                                                @case('email')
                                                <?php $field = $config['field']; ?>
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                                            <div class="form-group ">
                                                                <label style="font-size: medium; font-weight:600;">{{ $config['name'] }}</label>
                                                                <div class="input-group flex-column">
                                                                    <input type="text" name="{{ $config['field'] }}"
                                                                        class="form-control @error($field) is-invalid @enderror"
                                                                        placeholder="{{ htmlspecialchars($config['name']) }}">
                                                                    @error($field)
                                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @break

                                                    @case('price_sales')
                                                    <?php $field = $config['field']; ?>
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                                <div class="form-group ">
                                                                    <label style="font-size: medium; font-weight:600;">{{ $config['name'] }}</label>
                                                                    <div class="input-group flex-column">
                                                                        <input type="number" name="{{ $config['field'] }}"
                                                                            class="form-control @error($field) is-invalid @enderror"
                                                                            placeholder="{{ htmlspecialchars($config['name']) }}">
                                                                        @error($field)
                                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    @break

                                                    @case('products_id')
                                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                                            <div class="form-group">
                                                                <label style="font-size: medium; font-weight:600;">{{ $config['name'] }}</label>
                                                                <div class="input-group">
                                                                    <select
                                                                        class="select2 form-control @error('brand_id') is-invalid @enderror"
                                                                        data-toggle="select2" name="{{ $config['field'] }}">
                                                                            @foreach ($products as $product)
                                                                                <option value="{{ $product->id }}">{{ $product->name }}</option>
                                                                            @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @break

                                                @case('number')
                                                    <?php $field = $config['field']; ?>
                                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                                            <div class="form-group">
                                                                <label style="font-size: medium; font-weight:600;">{{ $config['name'] }}</label>
                                                                <div class="input-group flex-column">
                                                                    <input type="number" name="{{ $config['field'] }}"
                                                                        class="form-control @error($field) is-invalid @enderror"
                                                                        placeholder="{{ htmlspecialchars($config['name']) }}">
                                                                    @error($field)
                                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @break

                                                @case('image')
                                                <?php $field = $config['field']; ?>
                                                    <label style="font-size: medium; font-weight:600;">{{ $config['name'] }}</label>
                                                        <div class="input-group flex-column mb-3">
                                                            <input type="file" name="{{ $config['field'] }}"
                                                                class="form-control @error($field) is-invalid @enderror"
                                                                placeholder="{{ htmlspecialchars($config['name']) }}">
                                                            @error($field)
                                                                <div class="alert alert-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                @break

                                                @case('brand_id')
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                                            <div class="form-group">
                                                                <div class="form-group">
                                                                    <label style="font-size: medium; font-weight:600;">{{ $config['name'] }}</label>
                                                                    <div class="input-group">
                                                                        <select class="select2 form-control" data-toggle="select2" name="{{ $config['field'] }}">
                                                                            @foreach ($brands as $brand)
                                                                                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @break

                                                    @case('category_id')
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <div class="form-group">
                                                                    <label style="font-size: medium; font-weight:600;">{{ $config['name'] }}</label>
                                                                    <div class="input-group">
                                                                        <select class="select2 form-control @error('category_id') is-invalid @enderror" data-toggle="select2" name="{{ $config['field'] }}">
                                                                            @foreach ($categories as $category)
                                                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @break

                                                @case('ckeditor')
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <label style="font-size: medium; font-weight:600;">{{ $config['name'] }}</label>
                                                            <div class="input-group flex-column @error('ckeditor') is-invalid @enderror w-100">
                                                                <textarea name="{{ $config['field'] }}" id="editor" cols="100" rows="10" class="w-100"
                                                                    placeholder="{{ htmlspecialchars($config['name']) }}"></textarea>
                                                                {{-- @error('ckeditor')
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror --}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                @break

                                                @default
                                            @endswitch
                                @endforeach
                                </div>
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
