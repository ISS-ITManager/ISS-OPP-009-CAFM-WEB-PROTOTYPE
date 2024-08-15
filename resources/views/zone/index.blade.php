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
    <a href="/floors" class="btn btn-primary mb-3">
        <i class=" fa fa-angle-left me-2"></i> Floor 1
    </a>
    <div class="row mb-3">
        <div class="col-md-12 mb-2">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12"></div>
                        <div class="col-md-1 text-center mb-auto mt-auto">
                            <span class="fi fi-gb rounded-pill fis me-2 mt-1 " style="height: 30px; width: 30px;"></span>
                        </div>
                        <div class="col-8">
                            <span class="badge bg-label-info mb-1">Zone </span> <br>
                            <span class="fw-bold text-primary h3">
                                 Zone A
                            </span> <br>
                           
                            <small> Nunnery / Main House / Floor 1 / Zone A</small>
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
                <div class="card-header">
                    <div class="row">
                        <div class="col-9">
                            <i class="bx bxs-cube text-info me-2 text-lg"></i> 
                            <span class="text-dark fw-bold">Space</span>
                        </div>
                        <div class="col-3">
                            <a href="#" class="btn btn-label-primary float-end">
                                <i class="fa fa-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="list-group">
                        <a href="/spaces" class="list-group-item d-flex justify-content-between align-items-center">
                            <span>Space A</span>
                            <i class='bx bx-right-arrow-alt'></i>
                        </a>
                        <a href="/spaces" class="list-group-item d-flex justify-content-between align-items-center">
                            Space B
                            <i class='bx bx-right-arrow-alt'></i>
                        </a>
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
