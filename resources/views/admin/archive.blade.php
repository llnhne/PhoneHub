@extends('layouts.admin')
@section('content')
    <div class="content">
        <!-- Start container-fluid -->
        <div class="container-fluid">

            <!-- start  -->
            
                
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex justify-content-between">
                            <h4 class="" style="font-size: large; font-weight:600;">{{ $titlearchive }}</h4>
                            
                        </div><hr>
                    </div>
                </div>
                
            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="mt-2">
                        
                        <table id="datatable-buttons" class="table table-hover table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead class="text-center">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Created_at</th>
                                    <th>Update_at</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody class="text-center ">
                                @foreach ($items as $item)
                                    <tr>
                                        <td class="align-middle">{{ $item->id }}</td>
                                        <td class="align-middle">{{ $item->name }}</td>
                                        <td class="align-middle">{{ $item->created_at }}</td>
                                        <td class="align-middle">{{ $item->updated_at }}</td>
                                        <td class="align-middle">
                                            
                                           
                                            <button type="button" class="btn btn-danger">Danger</button>
                                            
                                       
                                        
                                            <button type="button" class="btn btn-warning">Restore</button>
                                        
                                    </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">

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
