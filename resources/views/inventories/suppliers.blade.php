@extends('layouts.master')

@section('page_name', $page['name'])

@section('page_title', $page['title'])

@section('page_script') 
    <script>
        $(function(){
            $("#dt_suppliers").dataTable();    
        });
        
    </script>
@endsection

@section('page_css')

@endsection

@section('content')
    <button type="button" class="mb-3 btn btn-primary" data-bs-toggle="modal" data-bs-target="#create_supplier">
        <i class="fa fa-plus me-2"></i> Add Supplier
    </button>

    <div class="card">
        <div class="card-header">
            <span class="fw-bold text-primary">List of Suppliers</span>
        </div>
        <div class="card-body">
            <table class="table table-bordered" id="dt_suppliers">
                <thead>
                    <tr>
                        <th>Company</th>
                        <th>Contact Person</th>
                        <th>Contact Number</th>
                        <th>Address</th>
                        <th width="18%"><center>Action<center></th>
                    </tr>
                </thead>
                <tbody id="tbody_inventory">
                    <tr>
                        <td>
                            <div class="d-flex justify-content-between flex-wrap gap-2">
                                <div class="d-flex flex-wrap align-items-center">
                                    <div class="avatar avatar-sm me-2">
                                        <span class="avatar-initial rounded-circle bg-label-warning">BLI</span>
                                    </div>
                                    <div>
                                        <p class="mb-0 fw-medium">CleanCo Supplies</p>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            Juan Dela Cruz
                        </td>
                        <td>
                            +974 1234 5678
                        </td>
                        <td>
                            Doha, Qatar
                        </td>
                        <td align="center">
                            <button type="button" data-bs-toggle="modal" data-bs-target="#edit_supplier" class="btn btn-label-primary btn-sm">Edit</button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex justify-content-between flex-wrap gap-2">
                                <div class="d-flex flex-wrap align-items-center">
                                    <div class="avatar avatar-sm me-2">
                                        <span class="avatar-initial rounded-circle bg-label-primary">CCS</span>
                                    </div>
                                    <div>
                                        <p class="mb-0 fw-medium">Bright Lights Inc.</p>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            Juan Dela Cruz
                        </td>
                        <td>
                            +974 1234 5678
                        </td>
                        <td>
                            Doha, Qatar
                        </td>
                        <td align="center">
                            <button type="button" data-bs-toggle="modal" data-bs-target="#edit_supplier" class="btn btn-label-primary btn-sm">Edit</button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex justify-content-between flex-wrap gap-2">
                                <div class="d-flex flex-wrap align-items-center">
                                    <div class="avatar avatar-sm me-2">
                                        <span class="avatar-initial rounded-circle bg-label-danger">AFC</span>
                                    </div>
                                    <div>
                                        <p class="mb-0 fw-medium">AirFlow Corp.</p>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            Juan Dela Cruz
                        </td>
                        <td>
                            +974 1234 5678
                        </td>
                        <td>
                            Doha, Qatar
                        </td>
                        <td align="center">
                            <button type="button" data-bs-toggle="modal" data-bs-target="#edit_supplier" class="btn btn-label-primary btn-sm">Edit</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="modal fade" id="create_supplier" tabindex="-1" aria-labelledby="continue_modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-primary"><i class="fa fa-plus"></i> New Supplier</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 mb-2">
                            <label>Company Name</label>
                            <input type="text" class="form-control" value="" />
                        </div>
                        <div class="col-md-12 mb-2">
                            <label>Contact Person</label>
                            <input type="text" class="form-control" value="" />
                        </div>
                        <div class="col-md-12 mb-2">
                            <label>Contact Number</label>
                            <input type="text" class="form-control" value="" />
                        </div>
                        <div class="col-md-12 mb-2">
                            <label>Address</label>
                            <textarea class="form-control" rows="3">Doha Qatar</textarea>
                        </div>
                        <div class="col-md-12 mb-2">
                            <label>Company Logo</label>
                            <input type="file" class="form-control" value="" />
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" data-bs-dismiss="modal" class="btn btn-label-secondary">Cancel</a>
                    <button type="submit" class="btn btn-label-primary btn-submit">Save Category</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="edit_supplier" tabindex="-1" aria-labelledby="continue_modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-primary"><i class="fa fa-edit"></i> Edit Supplier</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 mb-2">
                            <label>Company Name</label>
                            <input type="text" class="form-control" value="AirFlow Corp." />
                        </div>
                        <div class="col-md-12 mb-2">
                            <label>Contact Person</label>
                            <input type="text" class="form-control" value="Juan Dela Cruz" />
                        </div>
                        <div class="col-md-12 mb-2">
                            <label>Contact Number</label>
                            <input type="text" class="form-control" value="+974 1234 5678" />
                        </div>
                        <div class="col-md-12 mb-2">
                            <label>Address</label>
                            <textarea class="form-control" rows="3">Doha Qatar</textarea>
                        </div>
                        <div class="col-md-12 mb-2">
                            <label>Company Logo</label>
                            <input type="file" class="form-control" value="" />
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" data-bs-dismiss="modal" class="btn btn-label-secondary">Cancel</a>
                    <button type="submit" class="btn btn-label-primary btn-submit">Save Changes</button>
                </div>
            </div>
        </div>
    </div>
    
@endsection
