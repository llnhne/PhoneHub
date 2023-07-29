@extends('layouts.admin')
@section('content')
    <div class="content">
        <!-- start  -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="">
                    <h4 class="header-title mb-4" style="font-size: large; font-weight:600;">{{ $titlecreate }}</h4>
                    <div class="mb-4">
                        @if (!empty($success))
                            <h6 class="text-success fw-medium">{{ $titlecreate }} thành công !</h6>
                            <p><a href="{{ route('listing.index', ['model' => $modelName]) }}" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Trở về danh sách.</a></p>
                        @else
                            <form action="{{ route('editing.store', ['model' => $modelName]) }}" class="form-validation"
                                method="post" enctype="multipart/form-data">
                                @csrf
                                @if (!empty($configs))
                                    @foreach ($configs as $config)
                                        @switch($config['type'])
                                            @case('product_name')
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
                                                        @case('name_sale')
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
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <?php $field = $config['field']; ?>
                                                            <label style="font-size: medium; font-weight:600;">{{ $config['name'] }}</label>
                                                            
                                                            <div class="mb-3">
                                                            
                                                                <input class="form-control @error($field) is-invalid @enderror" type="file" id="formFile" name="{{ $config['field'] }}">
                                                                @error($field)
                                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                                @enderror
                                                              </div>
                                                        </div>
                                                    
                                                    @break

                                                    @case('sale_id')
                                                        
                                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                                <div class="form-group">
                                                                    <div class="form-group">
                                                                        <label style="font-size: medium; font-weight:600;">{{ $config['name'] }}</label>
                                                                        <div class="input-group">
                                                                            <select class="select2 form-control" data-toggle="select2" name="{{ $config['field'] }}">
                                                                                @foreach ($sales as $sale)
                                                                                    <option value="{{ $sale->id }}">{{ $sale->name }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @break

                                                    @case('images')
                                                    <?php $field = $config['field']; ?>
                                                        <label style="font-size: medium; font-weight:600;">{{ $config['name'] }}</label>
                                                            
                                                            <div class="mb-3">
                                                            
                                                                <input class="form-control" type="file" id="formFile" name="{{ $config['field'] }}[]" multiple>
                                                                
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

                                                    @case('color_id')
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <div class="form-group">
                                                                        <label style="font-size: medium; font-weight:600;">{{ $config['name'] }}</label>
                                                                        <div class="input-group">
                                                                            <select class="select2 form-control @error('category_id') is-invalid @enderror" data-toggle="select2" name="{{ $config['field'] }}">
                                                                                @foreach ($colors as $color)
                                                                                    <option value="{{ $color->id }}">{{ $color->name }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        
                                                    @break

                                                    @case('number_name')
                                                       
                                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                                <div class="form-group">
                                                                    <label style="font-size: medium; font-weight:600;">{{ $config['name'] }}</label>
                                                                    <div class="input-group flex-column">
                                                                        <input type="number" name="{{ $config['field'] }}"
                                                                            class="form-control @error($field) is-invalid @enderror"
                                                                            placeholder="{{ htmlspecialchars($config['name']) }}">
                                                                        @error($config['field'])
                                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @break

                                                    @case('ram_id')
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <div class="form-group">
                                                                        <label style="font-size: medium; font-weight:600;">{{ $config['name'] }}</label>
                                                                        <div class="input-group">
                                                                            <select class="select2 form-control @error('category_id') is-invalid @enderror" data-toggle="select2" name="{{ $config['field'] }}">
                                                                                @foreach ($rams as $ram)
                                                                                    <option value="{{ $ram->id }}">{{ $ram->name }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        
                                                    @break

                                                    @case('rom_id')
                                                       
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <div class="form-group">
                                                                        <label style="font-size: medium; font-weight:600;">{{ $config['name'] }}</label>
                                                                        <div class="input-group">
                                                                            <select class="select2 form-control @error('category_id') is-invalid @enderror" data-toggle="select2" name="{{ $config['field'] }}">
                                                                                @foreach ($roms as $rom)
                                                                                    <option value="{{ $rom->id }}">{{ $rom->name }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @break

                                                    @case('chip_id')
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <div class="form-group">
                                                                        <label style="font-size: medium; font-weight:600;">{{ $config['name'] }}</label>
                                                                        <div class="input-group">
                                                                            <select class="select2 form-control @error('category_id') is-invalid @enderror" data-toggle="select2" name="{{ $config['field'] }}">
                                                                                @foreach ($chips as $chip)
                                                                                    <option value="{{ $chip->id }}">{{ $chip->name }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        
                                                    @break

                                                    @case('screen_id')
                                                       
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <div class="form-group">
                                                                        <label style="font-size: medium; font-weight:600;">{{ $config['name'] }}</label>
                                                                        <div class="input-group">
                                                                            <select class="select2 form-control @error('category_id') is-invalid @enderror" data-toggle="select2" name="{{ $config['field'] }}">
                                                                                @foreach ($screens as $screen)
                                                                                    <option value="{{ $screen->id }}">{{ $screen->name }}</option>
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
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

    </div>
@endsection
