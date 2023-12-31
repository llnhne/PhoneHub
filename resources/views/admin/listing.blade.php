@extends('layouts.admin')
@section('content')
    <div class="content">
        <!-- Start container-fluid -->
        <div class="container-fluid">

            <!-- start  -->
            
                
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex justify-content-between">
                            <h4 class="" style="font-size: large; font-weight:600;">{{ $title }}</h4>
                            <button type="button" class="btn btn-light"><a href="{{ route('listing.archive', ['model' => $modelName]) }}">Đã xóa gần đây</a></button>
                        </div><hr>
                    </div>
                </div>
                
            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="mt-2">
                        <div class="row mb-3 ">
                            <div class="col-md-4 col-sm-12">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-secondary">Copy</button>
                                    <button type="button" class="btn btn-secondary"><a href="/generate-pdf" class="text-white" style="text-decoration:none;">PDF</a></button>
                                    <button type="button" class="btn btn-secondary">Excel</button>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-12">
                                <form action="{{ route('listing.index', ['model' => $modelName]) }}" method="post"
                                    class="filter-form">
                                    @csrf
                                    <div class="input-group rounded">
                                        @foreach ($configs as $config)
                                            @if (!empty($config['filter']))
                                                @switch($config['filter'])
                                                    @case('equal')
                                                        <input type="text" name="{{ $config['field'] }}"
                                                            value="{{ !empty($config['filter_value']) ? $config['filter_value'] : '' }}"
                                                            class="form-control rounded mx-2" placeholder="Tìm kiếm theo id"
                                                            aria-label="Search" aria-describedby="search-addon" />
                                                    @break

                                                    @case('like')
                                                        <input type="text" name="{{ $config['field'] }}"
                                                            value="{{ !empty($config['filter_value']) ? $config['filter_value'] : '' }}"
                                                            class="form-control rounded mx-2" placeholder="Tìm kiếm theo tên"
                                                            aria-label="Search" aria-describedby="search-addon" />
                                                    @break

                                                    @case('between')
                                                        <input type="number" name="{{ $config['field'] }}[from]"
                                                            value="{{ !empty($config['filter_from_value']) ? $config['filter_from_value'] : '' }}"
                                                            class="form-control rounded mx-2" placeholder="Giá từ"
                                                            aria-label="Search" aria-describedby="search-addon" />

                                                        <input type="number" name="{{ $config['field'] }}[to]"
                                                            value="{{ !empty($config['filter_to_value']) ? $config['filter_to_value'] : '' }}"
                                                            class="form-control rounded mx-2" placeholder="Giá đến"
                                                            aria-label="Search" aria-describedby="search-addon" />
                                                    @break

                                                    @default
                                                @endswitch
                                            @endif
                                        @endforeach
                                        <button type="submit" class="input-group-text border-0" id="search-addon">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                @if(session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                            </div>
                        </div>


                        <table id="datatable-buttons" class="table table-hover table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead class="text-center">
                                <tr>
                                    @foreach ($configs as $config)
                                        @if (!empty($config['sort']))
                                            @if ($orderBy['field'] == $config['field'])
                                                @if ($orderBy['sort'] == 'desc')
                                                    <th class="align-middle">
                                                        {{ $config['name'] }}
                                                        <a class="" href="{{ route('listing.index', ['model' => $modelName, 'sort' => $config['field'] . '_asc']) }}">
                                                            <i class="ti-arrow-down"></i>
                                                        </a>
                                                    </th>
                                                @else
                                                    <th class="align-middle">
                                                        {{ $config['name'] }}
                                                        <a class="" href="{{ route('listing.index', ['model' => $modelName, 'sort' => $config['field'] . '_desc']) }}">
                                                            <i class="ti-arrow-up"></i>
                                                        </a>
                                                    </th>
                                                @endif
                                            @else
                                                <th class="align-middle">
                                                    {{ $config['name'] }}
                                                    <a class=""
                                                        href="{{ route('listing.index', ['model' => $modelName, 'sort' => $config['field'] . '_desc']) }}">
                                                        <i class="ti-exchange-vertical"></i>
                                                        </a>
                                                </th>
                                            @endif
                                        @else
                                            <th class="align-middle">
                                                {{ $config['name'] }}
                                            </th>
                                        @endif
                                    @endforeach
                                </tr>
                            </thead>

                            <tbody class="text-center ">
                                @foreach ($records as $record)
                                    <tr class=" ">
                                        @foreach ($configs as $config)
                                            @switch($config['type'])
                                                @case('text')
                                                    <td class="align-middle">
                                                        {{ $record[$config['field']] }}
                                                    </td>
                                                @break

                                                @case('name_coupon')
                                                    <td class="align-middle">
                                                        {{ $record[$config['field']] }}
                                                    </td>
                                                @break

                                                @case('coupon_time')
                                                    <td class="align-middle">
                                                        {{ $record[$config['field']] }}
                                                    </td>
                                                @break

                                                @case('coupon_number')
                                                    <td class="align-middle">
                                                        {{ number_format($record[$config['field']], 0, ',', ',') }}
                                                    </td>
                                                @break

                                                @case('coupon_code')
                                                    <td class="align-middle">
                                                        {{ $record[$config['field']] }}
                                                    </td>
                                                @break

                                                @case('name')
                                                    <td class="align-middle">
                                                        {{ $record[$config['field']] }}
                                                    </td>
                                                @break
                                                @case('status')
                                                <td class="align-middle">
                                                    {{ $record[$config['field']] }}
                                                </td>
                                                @break
                                                @case('category_name')
                                                    <td class="align-middle">
                                                        {{ $record[$config['field']] }}
                                                    </td>
                                                @break

                                                @case('product_name')
                                                    <td class="align-middle">
                                                        {{ $record[$config['field']] }}
                                                    </td>
                                                @break

                                                @case('name_banner')
                                                    <td class="align-middle">
                                                        {{ $record[$config['field']] }}
                                                    </td>
                                                @break

                                                @case('name_sale')
                                                    <td class="align-middle">
                                                        {{ $record[$config['field']] }}
                                                    </td>
                                                @break

                                                @case('bill_name')
                                                    <td class="align-middle">
                                                        {{ $record[$config['field']] }}
                                                    </td>
                                                @break

                                                @case('user_name')
                                                    <td class="align-middle">
                                                        {{ $record[$config['field']] }}
                                                    </td>
                                                @break

                                                @case('sum_price')
                                                    <td class="align-middle">
                                                        {{ number_format($record[$config['field']], 0, ',', ',') }} đ
                                                    </td>
                                                @break

                                                @case('email')
                                                    <td class="align-middle">
                                                        {{ $record[$config['field']] }}
                                                    </td>
                                                @break

                                                @case('password')
                                                <?php 
                                                $maskedPassword = '********';
                                                ?>
                                                <td class="align-middle">
                                                    {{ $maskedPassword }}
                                                </td>
                                                @break

                                                @case('tel')
                                                    <td class="align-middle">
                                                        {{ $record[$config['field']] }}
                                                    </td>
                                                @break


                                                @case('image')
                                                    
                                                        <td class="align-middle">
                                                            <img height="50" onerror="this.src='/assets/images/users/ava.jpg'"
                                                                src="{{ $record[$config['field']] }}" alt="{{ $record[$config['field']] }}">
                                                        </td>
                                                   
                                                    @break

                                                @case('images')

                                                    <td class="align-middle">
                                                       
                                                            <img height="50" onerror="this.src='/assets/images/users/ava.jpg'"
                                                            src="{{ asset($record[$config['field']][0]) }}" alt="{{ $record[$config['field']][0] }}">
                                                       
                                                    </td>
                                               
                                                @break

                                                @case('price_sales')
                                                    <td class="align-middle">
                                                        {{ number_format($record[$config['field']], 0, ',', ',') }} đ
                                                    </td>
                                                @break

                                                @case('number')
                                                    <td class="align-middle">
                                                        {{ number_format($record[$config['field']], 0, ',', ',') }} đ
                                                    </td>
                                                @break

                                                @case('numbersale')
                                                    <td class="align-middle">
                                                        {{ number_format($record[$config['field']], 0, ',', ',') }} đ
                                                    </td>
                                                @break
                                                @case('created_at')
                                                    <td class="align-middle">
                                                        {{ $record[$config['field']] }}
                                                    </td>
                                                @break
                                                @case('updated_at')
                                                    <td class="align-middle">
                                                        {{ $record[$config['field']] }}
                                                    </td>
                                                @break
                                                @case('about')
                                                    <td class="align-middle">
                                                        <a href="{{ route('listing.show', ['model' => $modelName, $record[$config['field']] ]) }}">
                                                            <i class="ti-info-alt"></i>
                                                        </a>

                                                    </td>
                                                @break

                                                @case('edit')
                                                    <td class="align-middle">
                                                        <a href="{{ route('updating.edit', ['model' => $modelName, $record[$config['field']] ]) }}">
                                                            <i class="ti-marker-alt mx-2"></i>
                                                        </a>
                                                    </td>
                                                @break

                                                @case('delete')
                                                    <form method="POST" action="{{ route('listing.delete', ['model' => $modelName, $record[$config['field']] ]) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <td class="align-middle">
                                                            <button type="submit" onclick="return confirm('Are you sure ?')" class="btn btn-danger">Delete</button>
                                                            
                                                        </td>
                                                        </form>
                                                @break

                                                

                                                @default
                                            @endswitch
                                        @endforeach

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">

                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="d-flex justify-content-end">
                                    {{ $records->links('pagination::bootstrap-4') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end container-fluid -->



        <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        2023 &copy; Simple theme by <a href="">Coderthemes</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->

    </div>
@endsection
