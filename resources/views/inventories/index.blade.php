@extends('layouts.master')

@section('page_name', $page['name'])

@section('page_title', $page['title'])

@section('page_script') 
    <script>
        $(function(){
            $.getJSON('/jsons/inventories.json', function(data) {
                var html = ""
                $.each(data, function(index, data) {
                    html += '<tr>\
                        <td>'+data.stock_number+'</td>\
                        <td>'+data.item_name+'</td>\
                        <td>'+data.category+'</td>\
                        <td>'+data.unit+'</td>\
                        <td>'+data.quantity+'</td>\
                        <td>'+data.status+'</td>\
                        <td>\
                        <a href="/inventories/show" class="btn btn-label-primary btn-sm">View</a>\
                        </td>\
                    </tr>'
                });
                $("#tbody_inventory").html(html)
                $("#dt_inventory").dataTable();    
            }).fail(function() {
                console.error("An error occurred while fetching the JSON file.");
            });
            
        })
        
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
    <button type="button" class="mb-3 btn btn-primary" data-bs-toggle="modal" data-bs-target="#create_item">
        <i class="fa fa-plus me-2"></i> Add Item
    </button>

    <div class="card">
        <div class="card-header">
            <span class="fw-bold text-primary">List of Items</span>
        </div>
        <div class="card-body">
            <table class="table table-bordered" id="dt_inventory">
                <thead>
                    <tr>
                        <th>Stock Number</th>
                        <th>Item Name</th>
                        <th>Category</th>
                        <th>Unit</th>
                        <th>Balance</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="tbody_inventory">
                    
                </tbody>
            </table>
        </div>
    </div>

    <div class="modal fade" id="create_item" tabindex="-1" aria-labelledby="continue_modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-primary"><i class="fa fa-plus"></i> New Item</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 mb-2">
                            <div class="col-md-12 mb-2">
                                <label>Category</label>
                                <input type="text" class="form-control" value="Maintenance" disabled />
                            </div>
                        </div>
                        <div class="col-md-12 mb-2">
                            <label>Item Name</label>
                            <input type="text" class="form-control" />
                        </div>
                        <div class="col-md-6 mb-2">
                            <Label>Stock Number</Label>
                            <input type="text" class="form-control" />
                        </div>
                        <div class="col-md-6 mb-2">
                            <Label>Unit of Measure</Label>
                            <input type="text" class="form-control" />
                        </div>

                        <div class="col-md-6 mb-2">
                            <Label>Reorder Level</Label>
                            <input type="text" class="form-control" />
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" data-bs-dismiss="modal" class="btn btn-label-secondary">Cancel</a>
                    <button type="submit" class="btn btn-label-primary btn-submit">Save Item</button>
                </div>
            </div>
        </div>
    </div>
    
@endsection
