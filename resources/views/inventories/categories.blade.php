@extends('layouts.master')

@section('page_name', $page['name'])

@section('page_title', $page['title'])

@section('page_script') 
    <script>
        $(function(){
            $("#dt_inventory").dataTable();    
        });
        
    </script>
@endsection

@section('page_css')
    <style>
        .asset-color{
            width: 20px;
            height: 20px;
            border-radius: 20px;
        }
    </style>
@endsection

@section('content')
    <button type="button" class="mb-3 btn btn-primary" data-bs-toggle="modal" data-bs-target="#create_category">
        <i class="fa fa-plus me-2"></i> Add Category
    </button>

    <div class="card">
        <div class="card-header">
            <span class="fw-bold text-primary">List of Categories</span>
        </div>
        <div class="card-body">
            <table class="table table-bordered" id="dt_inventory">
                <thead>
                    <tr>
                        <th>Category</th>
                        <th width="18%"><center>Action<center></th>
                    </tr>
                </thead>
                <tbody id="tbody_inventory">
                    <tr>
                        <td>Electrical</td>
                        <td align="center">
                            <button type="button" data-bs-toggle="modal" data-bs-target="#edit_category" class="btn btn-label-primary btn-sm">Edit</button>
                        </td>
                    </tr>
                    <tr>
                        <td>HVAC</td>
                        <td align="center">
                            <button type="button" data-bs-toggle="modal" data-bs-target="#edit_category" class="btn btn-label-primary btn-sm">Edit</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Health</td>
                        <td align="center">
                            <button type="button" data-bs-toggle="modal" data-bs-target="#edit_category" class="btn btn-label-primary btn-sm">Edit</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Maintenance</td>
                        <td align="center">
                            <button type="button" data-bs-toggle="modal" data-bs-target="#edit_category" class="btn btn-label-primary btn-sm">Edit</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="modal fade" id="create_category" tabindex="-1" aria-labelledby="continue_modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-primary"><i class="fa fa-plus"></i> New Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 mb-2">
                            <label>Category</label>
                            <input type="text" class="form-control" />
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

    <div class="modal fade" id="edit_category" tabindex="-1" aria-labelledby="continue_modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-primary"><i class="fa fa-edit"></i> Edit Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 mb-2">
                            <label>Category</label>
                            <input type="text" class="form-control" value="Maintenance" />
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
