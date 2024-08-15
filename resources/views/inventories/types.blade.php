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
    <button type="button" class="mb-3 btn btn-primary" data-bs-toggle="modal" data-bs-target="#create_type">
        <i class="fa fa-plus me-2"></i> Add Type
    </button>

    <div class="card">
        <div class="card-header">
            <span class="fw-bold text-primary">List of Inventory Types</span>
        </div>
        <div class="card-body">
            <table class="table table-bordered" id="dt_inventory">
                <thead>
                    <tr>
                        <th>Category</th>
                        <th>Type</th>
                        <th width="18%"><center>Action<center></th>
                    </tr>
                </thead>
                <tbody id="tbody_inventory">
                    <tr>
                        <td>Maintenance</td>
                        <td>Bulb</td>
                        <td align="center">
                            <a href="/inventories" class="btn btn-label-primary btn-sm">View</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Electrical</td>
                        <td>Wire</td>
                        <td align="center">
                            <a href="/inventories" class="btn btn-label-primary btn-sm">View</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Electrical</td>
                        <td>Circuit Breaker</td>
                        <td align="center">
                            <a href="/inventories" class="btn btn-label-primary btn-sm">View</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Electrical</td>
                        <td>Outlet</td>
                        <td align="center">
                            <a href="/inventories" class="btn btn-label-primary btn-sm">View</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="modal fade" id="create_type" tabindex="-1" aria-labelledby="continue_modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-primary"><i class="fa fa-plus"></i> New Type</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 mb-2">
                            <label>Select Category</label>
                            <select name="#" id="" class="form-control select2">
                                <option value="#">Electrical</option>
                                <option value="#">Health</option>
                                <option value="#">HVAC</option>
                                <option value="#">Maintenance</option>
                            </select>
                        </div>
                        <div class="col-md-12 mb-2">
                            <label>Type</label>
                            <input type="text" class="form-control" />
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" data-bs-dismiss="modal" class="btn btn-label-secondary">Cancel</a>
                    <button type="submit" class="btn btn-label-primary btn-submit">Save Type</button>
                </div>
            </div>
        </div>
    </div>
    
@endsection
