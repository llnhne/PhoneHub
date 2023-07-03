@extends('layouts.admin')
@section('content')
    <div class="content">

        <!-- Start container-fluid -->
        <div class="container-fluid">

            <!-- start  -->
            <div class="row">
                <div class="col-12">
                    <div>
                        <h4 class="header-title mb-3">Basic Tables</h4>
                    </div>
                </div>
            </div>

            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="mt-5">
                        <h5 class="font-14">Buttons example</h5>
                        <p class="sub-header">
                            The Buttons extension for DataTables provides a common set of options, API methods and styling
                            to display buttons on a page that will interact with a DataTable. The core library provides the
                            based framework upon which plug-ins can built.
                        </p>

                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                </tr>
                            </tbody>
                        </table>

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
