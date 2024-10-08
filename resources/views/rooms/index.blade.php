@extends('layouts.master')

@section('page_name', $page['name'])

@section('page_title', $page['title'])

@section('page_script') 
    <script>
        $(function(){
            $("#dt_assets").dataTable({pageLength: 5});
            $("#dt_documents").dataTable({pageLength: 5});
        })
    </script>
@endsection

@section('page_css')

@endsection

@section('content')
    <a href="/properties/show" class="btn btn-primary mb-3">
        <i class=" fa fa-angle-left me-2"></i> Space A
    </a>
    <div class="row mb-3">
        <div class="col-md-12 mb-2">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-1 text-center mb-auto mt-auto">
                            <span class="fi fi-gb rounded-pill fis me-2 mt-1 " style="height: 30px; width: 30px;"></span>
                        </div>
                        <div class="col-8">
                            <span class="badge bg-label-info mb-1">Room </span> <br>
                            <span class="fw-bold text-primary h3">
                                Room 1
                            </span> <br>
                           
                            <small> Nunnery / Main House / Floor 1 / Zone A / Space A / Room A</small>
                        </div>
                        <div class="col-md-3 ">
                            <a href="#" class="btn btn-label-danger  float-end ms-3">
                                <i class="bx bx-trash"></i> 
                            </a>
                            <a href="#" class="btn btn-label-info  float-end ms-3">
                                <i class="bx bx-pencil"></i> 
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-3 mb-auto mt-auto">
                            <img src="/images/user.png" class="w-100"  alt="">
                        </div>
                        <div class="col-7  mb-auto mt-auto">
                           <span class="text-dark fw-bold h4">John Doe</span><br>
                           <small class="text-info">Current Tenant</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9 mb-2">
            <div class="nav-align-top mb-6">
                <ul class="nav nav-tabs nav-fill bg-light" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-asset" 
                        aria-controls="navs-asset" aria-selected="true">
                            <span class="d-none d-sm-block"><i class="tf-icons bx bx-bulb bx-sm me-1_5 align-text-bottom"></i> Assets </span>
                            <i class="bx bx-bulb bx-sm d-sm-none"></i>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-documents" 
                        aria-controls="navs-documents" aria-selected="false" tabindex="-1">
                            <span class="d-none d-sm-block"><i class="tf-icons bx bx-file bx-sm me-1_5 align-text-bottom"></i> Documents</span>
                            <i class="bx bx-file bx-sm d-sm-none"></i>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-tenures" 
                        aria-controls="navs-tenures" aria-selected="false" tabindex="-1">
                            <span class="d-none d-sm-block"><i class="tf-icons bx bx-home bx-sm me-1_5 align-text-bottom"></i> Tenures</span>
                            <i class="bx bx-file bx-sm d-sm-none"></i>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-workorders" 
                        aria-controls="navs-workorders" aria-selected="false" tabindex="-1">
                            <span class="d-none d-sm-block"><i class="tf-icons bx bx-briefcase bx-sm me-1_5 align-text-bottom"></i> Work Orders</span>
                            <i class="bx bx-briefcase bx-sm d-sm-none"></i>
                        </button>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="navs-asset" role="tabpanel">
                        <a href="#" class="btn btn-primary mb-3">
                            <i class="fa fa-plus me-2"></i>New Asset
                        </a>
                        <a href="#" class="btn float-end ms-2 btn-success mb-3">
                            <i class="bx bx-download me-2"></i>Export
                        </a>
                        <a href="#" class="btn float-end ms-2 btn-info mb-3">
                            <i class="bx bx-printer me-2"></i>Print
                        </a>
                        <table class="table table-bordered" id="dt_assets">
                            <thead>
                                <tr>
                                    <td>Reference No.</td>
                                    <td>Category</td>
                                    <td>Description</td>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>100001</td>
                                    <td> <span class="badge bg-label-danger rounded-pill">Computer</span> </td>
                                    <td>Laptop</td>
                                    <td class="text-center">
                                        <div class="d-inline-block text-nowrap">
                                            <button class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded me-2"></i></button>
                                            <div class="dropdown-menu dropdown-menu-end m-0">
                                                <a href="#" class="dropdown-item"><i class="bx bx-edit"></i> Edit</a>
                                                <a href="#" class="dropdown-item"><i class="bx bx-trash"></i> Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>100001</td>
                                    <td> <span class="badge bg-label-success rounded-pill">General</span> </td>
                                    <td>Toilet</td>
                                    <td class="text-center">
                                        <div class="d-inline-block text-nowrap">
                                            <button class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded me-2"></i></button>
                                            <div class="dropdown-menu dropdown-menu-end m-0">
                                                <a href="#" class="dropdown-item"><i class="bx bx-edit"></i> Edit</a>
                                                <a href="#" class="dropdown-item"><i class="bx bx-trash"></i> Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>100002</td>
                                    <td> <span class="badge bg-label-warning rounded-pill">Furniture</span> </td>
                                    <td>Sofa Set</td>
                                    <td class="text-center">
                                        <div class="d-inline-block text-nowrap">
                                            <button class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded me-2"></i></button>
                                            <div class="dropdown-menu dropdown-menu-end m-0">
                                                <a href="#" class="dropdown-item"><i class="bx bx-edit"></i> Edit</a>
                                                <a href="#" class="dropdown-item"><i class="bx bx-trash"></i> Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="navs-documents" role="tabpanel">
                        <a href="#" class="btn btn-primary mb-3">
                            <i class="fa fa-upload me-2"></i>Upload
                        </a>
                        <a href="#" class="btn float-end ms-2 btn-success mb-3">
                            <i class="bx bx-download me-2"></i>Export
                        </a>
                        <a href="#" class="btn float-end ms-2 btn-info mb-3">
                            <i class="bx bx-printer me-2"></i>Print
                        </a>
                        <table class="table table-bordered" id="dt_documents">
                            <thead>
                                <tr>
                                    <td>Reference No.</td>
                                    <td>Type</td>
                                    <td>Description</td>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>100001</td>
                                    <td>Contract </td>
                                    <td> <i class="bx bxs-file-pdf text-danger"></i> File Contract</td>
                                    <td class="text-center">
                                        <div class="d-inline-block text-nowrap">
                                            <button class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded me-2"></i></button>
                                            <div class="dropdown-menu dropdown-menu-end m-0">
                                                <a href="#" class="dropdown-item"><i class="bx bx-window-open"></i> View</a>
                                                <a href="#" class="dropdown-item"><i class="bx bx-download"></i> Download</a>
                                                <a href="#" class="dropdown-item"><i class="bx bx-trash"></i> Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>100002</td>
                                    <td>Permit </td>
                                    <td> <i class="bx bxs-image text-secondary"></i> File Permit</td>
                                    <td class="text-center">
                                        <div class="d-inline-block text-nowrap">
                                            <button class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded me-2"></i></button>
                                            <div class="dropdown-menu dropdown-menu-end m-0">
                                                <a href="#" class="dropdown-item"><i class="bx bx-window-open"></i> View</a>
                                                <a href="#" class="dropdown-item"><i class="bx bx-download"></i> Download</a>
                                                <a href="#" class="dropdown-item"><i class="bx bx-trash"></i> Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="navs-tenures" role="tabpanel">
                        <a href="#" class="btn btn-primary mb-3">
                            <i class="fa fa-plus me-2"></i>Add
                        </a>
                        <a href="#" class="btn float-end ms-2 btn-success mb-3">
                            <i class="bx bx-download me-2"></i>Export
                        </a>
                        <a href="#" class="btn float-end ms-2 btn-info mb-3">
                            <i class="bx bx-printer me-2"></i>Print
                        </a>
                        <table class="table table-bordered" id="dt_documents">
                            <thead>
                                <tr>
                                    <td>Tenant</td>
                                    <td>Contract Date</td>
                                    <td>Monthly Rate</td>
                                    <td>Status</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>John Doe</td>
                                    <td>January 2024 - December 2024</td>
                                    <td>
                                        5000 QR
                                    </td>
                                    <td>
                                        <span class="badge bg-label-success rounded-pill">Active</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="navs-workorders" role="tabpanel">
                       
                        <a href="#" class="btn float-end ms-2 btn-success mb-3">
                            <i class="bx bx-download me-2"></i>Export
                        </a>
                        <a href="#" class="btn float-end ms-2 btn-info mb-3">
                            <i class="bx bx-printer me-2"></i>Print
                        </a>
                        <table class="table table-bordered" id="dt_workorders">
                            <thead>
                                <tr>
                                    <td>Work Order No.</td>
                                    <td>Type</td>
                                    <td>Description</td>
                                    <td>Status</td>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>100001</td>
                                    <td>Corrective</td>
                                    <td>Door Repair </td>
                                    <td> <span class="badge bg-label-success"> COMPLETED</span></td>
                                    <td class="text-center">
                                        <div class="d-inline-block text-nowrap">
                                            <button class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded me-2"></i></button>
                                            <div class="dropdown-menu dropdown-menu-end m-0">
                                                <a href="#" class="dropdown-item"><i class="bx bx-window-open"></i> View</a>
                                                <a href="#" class="dropdown-item"><i class="bx bx-download"></i> Download</a>
                                                <a href="#" class="dropdown-item"><i class="bx bx-trash"></i> Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>100002</td>
                                    <td>Planned</td>
                                    <td>Change Bulb</td>
                                    <td> <span class="badge bg-label-danger"> Notification Due</span></td>
                                    <td class="text-center">
                                        <div class="d-inline-block text-nowrap">
                                            <button class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded me-2"></i></button>
                                            <div class="dropdown-menu dropdown-menu-end m-0">
                                                <a href="#" class="dropdown-item"><i class="bx bx-window-open"></i> View</a>
                                                <a href="#" class="dropdown-item"><i class="bx bx-download"></i> Download</a>
                                                <a href="#" class="dropdown-item"><i class="bx bx-trash"></i> Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
@endsection
