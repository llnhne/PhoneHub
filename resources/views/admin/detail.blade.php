@extends('layouts.admin')
@section('content')
    <div class="content">
        <!-- start  -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="">
                    <h4 class="header-title mb-4" style="font-size: large; font-weight:600;">{{ $titledetail }}</h4>
                    <div class="mb-4">
                        

                        @foreach ($configs as $config)
                            @switch($config['type'])
                                @case('text')
                                    <div class="d-flex">
                                        <p style="font-weight:700;">{{ $config['name'] }}: </p>
                                        <p class="mx-2">{{ $items->id }}</p>
                                    </div>
                                @break

                                @case('bill_name')
                                    <div class="d-flex">
                                        <p style="font-weight:700;">{{ $config['name'] }}:</p>
                                        <p class="mx-2">{{ $items->bill_name }}</p>
                                    </div>
                                @break

                                @case('user_name')
                                    <div class="d-flex">
                                        <p style="font-weight:700;">{{ $config['name'] }}:</p>
                                        <p class="mx-2">{{ $items->user_name }}</p>
                                    </div>
                                @break

                                @case('category_name')
                                    <div class="d-flex">
                                        <p style="font-weight:700;">{{ $config['name'] }}:</p>
                                        <p class="mx-2">{{ $items->name }}</p>
                                    </div>
                                @break

                                @case('product_name')
                                    <div class="d-flex">
                                        <p style="font-weight:700;">{{ $config['name'] }}:</p>
                                        <p class="mx-2">{{ $items->name }}</p>
                                    </div>
                                @break

                                @case('name_banner')
                                    <div class="d-flex">
                                        <p style="font-weight:700;">{{ $config['name'] }}:</p>
                                        <p class="mx-2">{{ $items->name }}</p>
                                    </div>
                                @break

                                @case('email')
                                    <div class="d-flex">
                                        <p style="font-weight:700;">{{ $config['name'] }}:</p>
                                        <p class="mx-2">{{ $items->email }}</p>
                                    </div>
                                @break

                                @case('tel')
                                    <div class="d-flex">
                                        <p style="font-weight:700;">{{ $config['name'] }}:</p>
                                        <p class="mx-2">{{ $items->phone_number }}</p>
                                    </div>
                                @break

                                @case('address')
                                    <div class="d-flex">
                                        <p style="font-weight:700;">{{ $config['name'] }}:</p>
                                        <p class="mx-2">{{ $items->address }}</p>
                                    </div>
                                @break

                                @case('sum_price')
                                    <div class="d-flex">
                                        <p style="font-weight:700;">{{ $config['name'] }}:</p>
                                        <p class="mx-2">{{ number_format($items->sum_price, 0, ',', ',') }} đ</p>
                                    </div>
                                @break


                                @case('number')
                                    <div class="d-flex">
                                        <p style="font-weight:700;">{{ $config['name'] }}:</p>
                                        <p class="mx-2"> {{ number_format($items->price, 0, ',', ',') }} đ</p>
                                    </div>
                                @break

                                @case('sale_id')
                                    <div class="d-flex">
                                        <p style="font-weight:700;">{{ $config['name'] }}:</p>
                                        <p class="mx-2">{{ number_format($items->sale->price_sales, 0, ',', ',') }} đ</p>
                                    </div>
                                @break


                                    @case('image')
                                        <div class="d-flex">
                                            <p style="font-weight:700;">{{ $config['name'] }}:</p>
                                            <img class="mx-2" height="50" onerror="this.src='/assets/images/users/ava.jpg'"
                                                src="{{ $items->image }}" alt="">
                                        </div>
                                    @break

                                    @case('images')
                                        <div class="d-flex">
                                            <p style="font-weight:700;">{{ $config['name'] }}:</p>
                                            <img class="mx-2" height="50" onerror="this.src='/assets/images/users/ava.jpg'"
                                                src="{{ $items->image }}" alt="">
                                        </div>
                                    @break

                                    

                                    @case('brand_id')
                                        <div class="d-flex">
                                            <p style="font-weight:700;">{{ $config['name'] }}:</p>
                                            <p class="mx-2">{{ $items->brand->name }}</p>
                                        </div>
                                    @break

                                    @case('category_id')
                                        <div class="d-flex">
                                            <p style="font-weight:700;">{{ $config['name'] }}:</p>
                                            <p class="mx-2">{{ $items->category->name }}</p>
                                        </div>
                                    @break

                                    @case('color_id')
                                        <div class="d-flex">
                                            <p style="font-weight:700;">{{ $config['name'] }}:</p>
                                            <p class="mx-2">{{ $items->color->name }}</p>
                                        </div>
                                    @break

                                    @case('number_name')
                                        <div class="d-flex">
                                            <p style="font-weight:700;">{{ $config['name'] }}:</p>
                                            <p class="mx-2">{{ $items->number_name }}</p>
                                        </div>
                                    @break

                                    @case('ram_id')
                                        <div class="d-flex">
                                            <p style="font-weight:700;">{{ $config['name'] }}:</p>
                                            <p class="mx-2">{{ $items->ram->name }}</p>
                                        </div>
                                    @break

                                    @case('rom_id')
                                        <div class="d-flex">
                                            <p style="font-weight:700;">{{ $config['name'] }}:</p>
                                            <p class="mx-2">{{ $items->rom->name }}</p>
                                        </div>
                                    @break

                                    @case('chip_id')
                                        <div class="d-flex">
                                            <p style="font-weight:700;">{{ $config['name'] }}:</p>
                                            <p class="mx-2">{{ $items->chip->name }}</p>
                                        </div>
                                    @break

                                    @case('screen_id')
                                        <div class="d-flex">
                                            <p style="font-weight:700;">{{ $config['name'] }}:</p>
                                            <p class="mx-2">{{ $items->screen->name }}</p>
                                        </div>
                                    @break

                                    @case('description')
                                        <div class="">
                                            <p style="font-weight:700;">{{ $config['name'] }}:</p>
                                            <p class="mx-2">{!! $items->description !!}</p>
                                        </div>
                                    @break

                                    @case('ckeditor')
                                        <div class="">
                                            <p style="font-weight:700;">{{ $config['name'] }}:</p>
                                            <p class="mx-2">{!! $items->description !!}</p>
                                        </div>
                                    @break

                                    @case('created_at')
                                        <div class="d-flex">
                                            <p style="font-weight:700;">{{ $config['name'] }}:</p>
                                            <p class="mx-2">{{ $items->created_at }}</p>
                                        </div>
                                    @break

                                    @case('updated_at')
                                        <div class="d-flex">
                                            <p style="font-weight:700;">{{ $config['name'] }}:</p>
                                            <p class="mx-2">{{ $items->updated_at }}</p>
                                        </div>
                                    @break

                                    @case('back')
                                        <a href="{{ route('listing.index', ['model' => $modelName]) }}">{{ $config['name'] }}</a>
                                    @break

                                    @default
                                @endswitch
                        @endforeach






                        <!-- end row -->
                    @endsection
