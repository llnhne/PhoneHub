@extends('layouts.admin')
@section('content')
    <div class="content">
        <!-- start  -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="">
                    <h4 class="header-title mb-4" style="font-size: large; font-weight:600;">{{ $titleupdate }}</h4>
                    <div class="mb-4">
                        @if (!empty($success))
                            <h6 class="text-success fw-medium">{{ $titleupdate }} thành công !</h6>
                            <p><a href="{{ route('listing.index', ['model' => $modelName]) }}"
                                    class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Trở
                                    về danh sách.</a></p>
                        @else
                        
                            <form action="{{ route('updating.update', ['model' => $modelName, $items->id ]) }}" class="form-validation" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
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
                                                                    placeholder="{{ htmlspecialchars($config['name']) }}"
                                                                    value="{{ $items->name }}">
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
                                                                            placeholder="{{ htmlspecialchars($config['name']) }}"
                                                                            value="{{ $items->name }}">
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
                                                                            placeholder="{{ htmlspecialchars($config['name']) }}"
                                                                            value="{{ $items->name }}">
                                                                        @error($field)
                                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @break

                                                    @case('user_name')
                                                        <div class="row">
                                                            <?php $field = $config['field']; ?>
                                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                                <div class="form-group ">
                                                                    <label style="font-size: medium; font-weight:600;">{{ $config['name'] }}</label>
                                                                    <div class="input-group flex-column">
                                                                        <input type="text" name="{{ $config['field'] }}"
                                                                            class="form-control @error($field) is-invalid @enderror"
                                                                            placeholder="{{ htmlspecialchars($config['name']) }}"
                                                                            value="{{ $items->user_name }}">
                                                                        @error($field)
                                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @break

                                                        @case('email')
                                                            <?php $field = $config['field']; ?>
                                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                                <div class="form-group ">
                                                                    <label style="font-size: medium; font-weight:600;">{{ $config['name'] }}</label>
                                                                    <div class="input-group flex-column">
                                                                        <input type="text" name="{{ $config['field'] }}"
                                                                            class="form-control @error($field) is-invalid @enderror"
                                                                            placeholder="{{ htmlspecialchars($config['name']) }}"
                                                                            value="{{ $items->email }}">
                                                                        @error($field)
                                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @break

                                                    @case('tel')
                                                        <div class="row">
                                                            <?php $field = $config['field']; ?>
                                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                                <div class="form-group ">
                                                                    <label style="font-size: medium; font-weight:600;">{{ $config['name'] }}</label>
                                                                    <div class="input-group flex-column">
                                                                        <input type="number" name="{{ $config['field'] }}"
                                                                            class="form-control @error($field) is-invalid @enderror"
                                                                            placeholder="{{ htmlspecialchars($config['name']) }}"
                                                                            value="{{ $items->phone_number }}">
                                                                        @error($field)
                                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @break

                                                        @case('address')
                                                            <?php $field = $config['field']; ?>
                                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                                <div class="form-group ">
                                                                    <label style="font-size: medium; font-weight:600;">{{ $config['name'] }}</label>
                                                                    <div class="input-group flex-column">
                                                                        <input type="text" name="{{ $config['field'] }}"
                                                                            class="form-control @error($field) is-invalid @enderror"
                                                                            placeholder="{{ htmlspecialchars($config['name']) }}"
                                                                            value="{{ $items->address }}">
                                                                        @error($field)
                                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @break

                                                    @case('sum_price')
                                                            <?php $field = $config['field']; ?>
                                                            <div class="row">
                                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                                <div class="form-group ">
                                                                    <label style="font-size: medium; font-weight:600;">{{ $config['name'] }}</label>
                                                                    <div class="input-group flex-column">
                                                                        <input type="number" name="{{ $config['field'] }}"
                                                                            class="form-control @error($field) is-invalid @enderror"
                                                                            placeholder="{{ htmlspecialchars($config['name']) }}"
                                                                            value="{{ $items->sum_price }}">
                                                                        @error($field)
                                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                                        @enderror
                                                                    </div>
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
                                                                            placeholder="{{ htmlspecialchars($config['name']) }}"
                                                                            value="{{ $items->name }}">
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
                                                                                placeholder="{{ htmlspecialchars($config['name']) }}"
                                                                                value="{{ $items->price_sales }}">
                                                                            @error($field)
                                                                                <div class="alert alert-danger">{{ $message }}
                                                                                </div>
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
                                                                                data-toggle="select2"
                                                                                name="{{ $config['field'] }}">
                                                                                @foreach ($products as $product)
                                                                                    <option value="{{ $product->id }}" {{ ($product->id === $items->products_id) ? 'selected' : '' }}>
                                                                                        {{ $product->name }}
                                                                                    </option>
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
                                                                            placeholder="{{ htmlspecialchars($config['name']) }}"
                                                                            value="{{ $items->price }}">
                                                                        @error($field)
                                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @break

                                                    @case('image')
                                                        <label style="font-size: medium; font-weight: 600;">{{ $config['name'] }}</label>
                                                        <div class="input-group flex-column mb-3">
                                                            <div class="custom-file">
                                                                <input type="file" name="{{ $config['field'] }}"
                                                                    class="custom-file-input @error($config['field']) is-invalid @enderror"
                                                                    placeholder="{{ htmlspecialchars($config['name']) }}"
                                                                    onchange="updateImageName(event)">
                                                                <label class="custom-file-label" for="{{ $config['field'] }}">{{ optional($items)->image }}</label>
                                                            </div>
                                                            @error($config['field'])
                                                                <div class="alert alert-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <script>
                                                            function updateImageName(event) {
                                                                var selectedFileName = event.target.files[0] ? event.target.files[0].name : '{{ optional($items)->image }}';
                                                                var imageLabelElement = event.target.nextElementSibling;
                                                                imageLabelElement.textContent = selectedFileName;
                                                            }
                                                        </script>
                                                    @break

                                                    @case('images')
                                                        <label style="font-size: medium; font-weight: 600;">{{ $config['name'] }}</label>
                                                        <div class="input-group flex-column mb-3">
                                                            <div class="custom-file">
                                                                <input type="file" name="{{ $config['field'] }}[]"
                                                                    class="custom-file-input @error($config['field']) is-invalid @enderror"
                                                                    placeholder="{{ htmlspecialchars($config['name']) }}"
                                                                    onchange="updateImageName(event)" multiple>
                                                                <label class="custom-file-label" for="{{ $config['field'] }}">{{ optional($items)->image }}</label>
                                                            </div>
                                                            @error($config['field'])
                                                                <div class="alert alert-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <script>
                                                            function updateImageName(event) {
                                                                var selectedFileName = event.target.files[0] ? event.target.files[0].name : '{{ optional($items)->image }}';
                                                                var imageLabelElement = event.target.nextElementSibling;
                                                                imageLabelElement.textContent = selectedFileName;
                                                            }
                                                        </script>
                                                    @break

                                                    @case('brand_id')
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                                <div class="form-group">
                                                                    <div class="form-group">
                                                                        <label style="font-size: medium; font-weight:600;">{{ $config['name'] }}</label>
                                                                        <div class="input-group">
                                                                            <select class="select2 form-control"
                                                                                data-toggle="select2"
                                                                                name="{{ $config['field'] }}">
                                                                                @foreach ($brands as $brand)
                                                                                    <option value="{{ $brand->id }}" {{ ($brand->id === $items->brand_id) ? 'selected' : '' }}>
                                                                                        {{ $brand->name }}
                                                                                    </option>
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
                                                                            <select
                                                                                class="select2 form-control @error('category_id') is-invalid @enderror"
                                                                                data-toggle="select2"
                                                                                name="{{ $config['field'] }}">
                                                                                @foreach ($categories as $category)
                                                                                    <option value="{{ $category->id }}" {{ ($category->id === $items->category_id) ? 'selected' : '' }}>
                                                                                        {{ $category->name }}
                                                                                    </option>
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
                                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                                <div class="form-group">
                                                                    <div class="form-group">
                                                                        <label style="font-size: medium; font-weight:600;">{{ $config['name'] }}</label>
                                                                        <div class="input-group">
                                                                            <select class="select2 form-control"
                                                                                data-toggle="select2"
                                                                                name="{{ $config['field'] }}">
                                                                                @foreach ($colors as $color)
                                                                                    <option value="{{ $color->id }}" {{ ($color->id === $items->color_id) ? 'selected' : '' }}>
                                                                                        {{ $color->name }}
                                                                                    </option>
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
                                                                            placeholder="{{ htmlspecialchars($config['name']) }}"
                                                                            value="{{ $items->number_name }}">
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
                                                                                <select
                                                                                    class="select2 form-control @error('category_id') is-invalid @enderror"
                                                                                    data-toggle="select2"
                                                                                    name="{{ $config['field'] }}">
                                                                                    @foreach ($rams as $ram)
                                                                                        <option value="{{ $ram->id }}" {{ ($ram->id === $items->ram_id) ? 'selected' : '' }}>
                                                                                            {{ $ram->name }}
                                                                                        </option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            
                                                    @break

                                                    @case('rom_id')
                                                        
                                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                                <div class="form-group">
                                                                    <div class="form-group">
                                                                        <label style="font-size: medium; font-weight:600;">{{ $config['name'] }}</label>
                                                                        <div class="input-group">
                                                                            <select class="select2 form-control"
                                                                                data-toggle="select2"
                                                                                name="{{ $config['field'] }}">
                                                                                @foreach ($roms as $rom)
                                                                                    <option value="{{ $rom->id }}" {{ ($rom->id === $items->rom_id) ? 'selected' : '' }}>
                                                                                        {{ $rom->name }}
                                                                                    </option>
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
                                                                                <select
                                                                                    class="select2 form-control @error('category_id') is-invalid @enderror"
                                                                                    data-toggle="select2"
                                                                                    name="{{ $config['field'] }}">
                                                                                    @foreach ($chips as $chip)
                                                                                        <option value="{{ $chip->id }}" {{ ($chip->id === $items->chip_id) ? 'selected' : '' }}>
                                                                                            {{ $chip->name }}
                                                                                        </option>
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
                                                                            <select
                                                                                class="select2 form-control @error('category_id') is-invalid @enderror"
                                                                                data-toggle="select2"
                                                                                name="{{ $config['field'] }}">
                                                                                @foreach ($screens as $screen)
                                                                                    <option value="{{ $screen->id }}" {{ ($screen->id === $items->screen_id) ? 'selected' : '' }}>
                                                                                        {{ $screen->name }}
                                                                                    </option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @break

                                                    @case('description')
                                                        <div class="form-group">
                                                            <div class="form-group">
                                                                <label
                                                                    style="font-size: medium; font-weight:600;">{{ $config['name'] }}</label>
                                                                <div class="input-group flex-column @error('ckeditor') is-invalid @enderror w-100">
                                                                    <textarea name="{{ $config['field'] }}" id="editor" cols="100" rows="10" class="w-100"
                                                                        placeholder="{{ htmlspecialchars($config['name']) }}">{{ $items->description }}
                                                                    </textarea>
                                                                    {{-- @error('ckeditor')
                                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                                    @enderror --}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @break

                                                    @case('ckeditor')
                                                        <div class="form-group">
                                                            <div class="form-group">
                                                                <label
                                                                    style="font-size: medium; font-weight:600;">{{ $config['name'] }}</label>
                                                                <div class="input-group flex-column @error('ckeditor') is-invalid @enderror w-100">
                                                                    <textarea name="{{ $config['field'] }}" id="editor" cols="100" rows="10" class="w-100"
                                                                        placeholder="{{ htmlspecialchars($config['name']) }}">{{ $items->description }}
                                                                    </textarea>
                    
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
                            <button type="submit" class="btn btn-success waves-effect waves-light mr-1">
                                Update
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
