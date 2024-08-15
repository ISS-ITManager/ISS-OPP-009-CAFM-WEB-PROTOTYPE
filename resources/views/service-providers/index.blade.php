@extends('layouts.master')

@section('page_name', $page['name'])

@section('page_title', $page['title'])

@section('page_script') 
    <script>
        $(function(){
            $('#dt_service_providers').DataTable({});
        })
    </script>
@endsection

@section('page_css')
<style>

</style>
@endsection

@section('content')
    <a href="#" class="btn btn-primary mb-3">
        <i class="fa fa-plus me-2"></i> Create Service Provider
    </a>
    <div class="card">
        <div class="card-header fw-bold text-primary">
            List of Service Providers
        </div>
        <div class="card-body">
            <table class="table table-bordered" id="dt_service_providers">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Contact Number</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Company A</td>
                        <td>0000 0000</td>
                        <td>company_a@sample.com</td>
                        <td>Doha, Qatar</td>
                        <td class="text-center">
                            <div class="d-inline-block text-nowrap">
                            <button class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded me-2"></i></button>
                            <div class="dropdown-menu dropdown-menu-end m-0">
                                <a href="#" class="dropdown-item"><i class="bx bx-folder"></i> View</a>
                                <a href="#" class="dropdown-item"><i class="bx bx-edit"></i> Edit</a>
                                <a href="#" class="dropdown-item"><i class="bx bx-trash"></i> Delete</a>
                            </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Company B</td>
                        <td>0000 0000</td>
                        <td>company_B@sample.com</td>
                        <td>Doha, Qatar</td>
                        <td class="text-center">
                            <div class="d-inline-block text-nowrap">
                            <button class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded me-2"></i></button>
                            <div class="dropdown-menu dropdown-menu-end m-0">
                                <a href="#" class="dropdown-item"><i class="bx bx-folder"></i> View</a>
                                <a href="#" class="dropdown-item"><i class="bx bx-edit"></i> Edit</a>
                                <a href="#" class="dropdown-item"><i class="bx bx-trash"></i> Delete</a>
                            </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Company A</td>
                        <td>0000 0000</td>
                        <td>company_C@sample.com</td>
                        <td>Doha, Qatar</td>
                        <td class="text-center">
                            <div class="d-inline-block text-nowrap">
                            <button class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded me-2"></i></button>
                            <div class="dropdown-menu dropdown-menu-end m-0">
                                <a href="#" class="dropdown-item"><i class="bx bx-folder"></i> View</a>
                                <a href="#" class="dropdown-item"><i class="bx bx-edit"></i> Edit</a>
                                <a href="#" class="dropdown-item"><i class="bx bx-trash"></i> Delete</a>
                            </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
