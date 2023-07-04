@extends('layouts.admin')
@section('content')
    <div class="content">

        <!-- Start container-fluid -->
        <div class="container-fluid">

            <!-- start  -->
            <div class="row">
                <div class="col-12">
                    <div>
                        <h4 class="header-title mb-3">{{ $title }}</h4>
                    </div>
                </div>
            </div>

            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="mt-3">
                        <div class="row mb-3 ">
                            <div class="col-lg-8">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-secondary">Copy</button>
                                    <button type="button" class="btn btn-secondary">PDF</button>
                                    <button type="button" class="btn btn-secondary">Excel</button>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="input-group rounded">
                                    <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                                    <span class="input-group-text border-0" id="search-addon">
                                      <i class="fas fa-search"></i>
                                    </span>
                                  </div>
                            </div>
                        </div>
                        
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead class="text-center">
                                <tr>
                                    @foreach ($configs as $config)
                                        <th>{{ $config['name'] }}</th>
                                    @endforeach
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody class="text-center ">
                                @foreach ($records as $record)
                                    <tr class="align-self-center">
                                        @foreach ($configs as $config)
                                            @switch($config['type'])
                                                @case('text')
                                                    <td>{{ $record[$config['field']] }}</td>
                                                @break

                                                @case('image')
                                                    <td><img height="75" onerror="this.src='/assets/images/users/ava.jpg'"
                                                            src="{{ $record[$config['field']] }}" alt="" srcset="">
                                                    </td>
                                                @break

                                                @case('number')
                                                    <td>{{ number_format($record[$config['field']], 0, ',', ',') }}</td>
                                                @break

                                                @default
                                            @endswitch
                                        @endforeach
                                        <td>
                                            <a href="#"><i class="ti-info-alt"></i></a>
                                            <a href="#"><i class="ti-marker-alt mx-2"></i></a>
                                            <a href="#"><i class="ti-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $records->links('pagination::bootstrap-4') }}
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
