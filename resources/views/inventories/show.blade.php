@extends('layouts.master')

@section('page_name', $page['name'])

@section('page_title', $page['title'])

@section('page_script') 
    <script>
        $(function(){
            $("#dt_inventory").dataTable();    
            $("#dt_workorders").dataTable();    
            $("#dt_adjustments").dataTable();    
        })
        
    </script>
@endsection

@section('page_css')

@endsection

@section('content')

    <button type="button" class="mb-3 btn btn-primary" data-bs-toggle="modal" data-bs-target="#create_stock">
        <i class="fa fa-plus me-2"></i> Add Stocks
    </button>

    <button type="button" class="mb-3 btn btn-warning" data-bs-toggle="modal" data-bs-target="#create_adjustment">
        <i class="fa fa-edit me-2"></i> Create Adjustment
    </button>

    <div class="card mb-3">
        <div class="card-body">
            <div class="row">
                <div class="col-md-2">
                    <label class="form-label mb-1">Stock Number</label>
                    <input type="text" class="form-control mb-2" value="E001" disabled>
                </div>

                <div class="col-md-6">
                    <label class="form-label mb-1">Item Name</label>
                    <input type="text" class="form-control mb-2" value="LED Bulb" disabled>
                </div>

                <div class="col-md-4">
                    <label class="form-label mb-1">Category</label>
                    <input type="text" class="form-control mb-2" value="Maintenance" disabled>
                </div>

                <div class="col-md-2">
                    <label class="form-label mb-1">Unit</label>
                    <input type="text" class="form-control mb-2" value="Piece" disabled>
                </div>

                <div class="col-md-2">
                    <label class="form-label mb-1">Quantity / Balance</label>
                    <input type="text" class="form-control mb-2" value="75" disabled>
                </div>

                <div class="col-md-2">
                    <label class="form-label mb-1">Status</label>
                    <input type="text" class="form-control mb-2" value="In Stock" disabled>
                </div>

                <div class="col-md-2">
                    <label class="form-label mb-1">Reorder Level</label>
                    <input type="text" class="form-control mb-2" value="20" disabled>
                </div>
            </div>
        </div>
    </div>

    
    <div class="mb-3">
        <div class="nav-align-top nav-tabs-shadow mb-6">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-stocks" aria-controls="navs-top-stocks" aria-selected="true">Stocks</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-work-order" aria-controls="navs-top-work-order" aria-selected="false" tabindex="-1">Work Orders</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-adjustment" aria-controls="navs-top-adjustment" aria-selected="false" tabindex="-1">Adjustments</button>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade active show" id="navs-top-stocks" role="tabpanel">

                    <table class="table table-bordered" id="dt_inventory">
                        <thead>
                            <tr>
                                <th>Invoice No.</th>
                                <th>Supplier</th>
                                <th>Total Ordered</th>
                                <th>Balance</th>
                                <th>Price Per Unit</th>
                                <th>Amount</th>
                                <th>Purchase Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="tbody_inventory">
                            <tr>
                                <td>IN001</td>
                                <td>ProSupply Co.</td>
                                <td>30</td>
                                <td>15</td>
                                <td>QAR 6.00</td>
                                <td>QAR 90.00</td>
                                <td>January 01, 2024</td>
                                <td align="center">
                                    <a href="#" class="btn btn-sm btn-label-primary">View</a>
                                </td>
                            </tr>
                            <tr>
                                <td>IN002</td>
                                <td>Global Source Traders.</td>
                                <td>10</td>
                                <td>10</td>
                                <td>QAR 5.00</td>
                                <td>QAR 50.00</td>
                                <td>February 01, 2024</td>
                                <td align="center">
                                    <a href="#" class="btn btn-sm btn-label-primary">View</a>
                                </td>
                            </tr>
                            <tr>
                                <td>IN003</td>
                                <td>EliteGoods Wholesale</td>
                                <td>10</td>
                                <td>10</td>
                                <td>QAR 5.00</td>
                                <td>QAR 50.00</td>
                                <td>March 01, 2024</td>
                                <td align="center">
                                    <a href="#" class="btn btn-sm btn-label-primary">View</a>
                                </td>
                            </tr>
                            <tr>
                                <td>IN004</td>
                                <td>EliteGoods Wholesale</td>
                                <td>40</td>
                                <td>40</td>
                                <td>QAR 5.50</td>
                                <td>QAR 220.00</td>
                                <td>May 01, 2024</td>
                                <td align="center">
                                    <a href="#" class="btn btn-sm btn-label-primary">View</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
                <div class="tab-pane fade" id="navs-top-work-order" role="tabpanel">
                    
                    <table class="table table-bordered" id="dt_workorders">
                        <thead>
                            <tr>
                                <td>Work Order No.</td>
                                <td>Property</td>
                                <td>Type</td>
                                <td>Description</td>
                                <td>Service Provider</td>
                                <td>Request Date</td>
                                <td>Completion Date</td>
                                <td>Status</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>100001</td>
                                <td class="fw-bold">Al Jazeera Academy</td>
                                <td>Corrective</td>
                                <td>Door Repair </td>
                                <td>Company A</td>
                                <td>July 10, 2024</td>
                                <td>July 10, 2024</td>
                                <td> <span class="badge bg-label-success"> COMPLETED</span></td>
                                <td class="text-center">
                                    <div class="d-inline-block text-nowrap">
                                        <button class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded me-2"></i></button>
                                        <div class="dropdown-menu dropdown-menu-end m-0">
                                            <a href="/workorders/show" class="dropdown-item"><i class="bx bx-window-open"></i> View</a>
                                            <a href="#" class="dropdown-item"><i class="bx bx-download"></i> Download</a>
                                            <a href="#" class="dropdown-item"><i class="bx bx-trash"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>100002</td>
                                <td class="fw-bold">Al Jazeera Academy</td>
                                <td>Planned</td>
                                <td>Change Bulb</td>
                                <td>Company A</td>
                                <td>July 10, 2024</td>
                                <td></td>
                                <td> <span class="badge bg-label-danger"> Notification Due</span></td>
                                <td class="text-center">
                                    <div class="d-inline-block text-nowrap">
                                        <button class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded me-2"></i></button>
                                        <div class="dropdown-menu dropdown-menu-end m-0">
                                            <a href="/workorders/show" class="dropdown-item"><i class="bx bx-window-open"></i> View</a>
                                            <a href="#" class="dropdown-item"><i class="bx bx-download"></i> Download</a>
                                            <a href="#" class="dropdown-item"><i class="bx bx-trash"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="navs-top-adjustment" role="tabpanel">
                    
                    <table class="table table-bordered" id="dt_adjustments">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Operation</th>
                                <th>Quantity</th>
                                <th>Remarks</th>
                                <th>Created By</th>
                                <th><center>Action</center></th>
                            </tr>
                        </thead>
                        <tbody id="tbody_inventory">
                            <tr>
                                <td>January 2, 2024</td>
                                <td>Subtraction (-)</td>
                                <td>1</td>
                                <td>Not Working</td>
                                <td>Juan Dela Cruz</td>
                                <td align="center">
                                    <a href="#" class="btn btn-sm btn-label-primary">View</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
    
    
    


    <div class="modal fade" id="create_adjustment" tabindex="-1" aria-labelledby="continue_modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-primary"><i class="fa fa-edit"></i> Create Adjustment</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">

                        <div class="col-md-12 mb-2">
                            <label>Date</label>
                            <input type="date" class="form-control" value="" />
                        </div>

                        <div class="col-md-6 mb-2">
                            <label>Operation</label>
                            <select class="form-control">
                                <option selected disabled></option>
                                <option>Subtraction (-)</option>
                                <option>Addition (+)</option>
                            </select>
                        </div>

                        <div class="col-md-6 mb-2">
                            <label>Quantity</label>
                            <input type="number" min="1" step="1" class="form-control" value="" />
                        </div>

                        <div class="col-md-12 mb-2">
                            <label>Remarks</label>
                            <textarea class="form-control" rows="3"></textarea>
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











    

    <div class="modal fade" id="create_stock" tabindex="-1" aria-labelledby="continue_modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-primary"><i class="fa fa-edit"></i> Add Stock</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        
                        <div class="col-md-6 mb-2">
                            <label>Invoice No.</label>
                            <input type="text" class="form-control" value="" />
                        </div>

                        <div class="col-md-6 mb-2">
                            <label>Date</label>
                            <input type="date" class="form-control" value="" />
                        </div>

                        <div class="col-md-12 mb-2">
                            <label>Supplier</label>
                            <select class="form-control">
                                <option selected disabled></option>
                                <option>AirFlow Corp.</option>
                                <option>CleanCo Supplies</option>
                                <option>Bright Lights Inc.</option>
                            </select>
                        </div>

                        <div class="col-md-6 mb-2">
                            <label>Quantity</label>
                            <input type="number" min="1" step="1" class="form-control" value="" />
                        </div>

                        <div class="col-md-6 mb-2">
                            <label>Cost</label>
                            <input type="number" min="1" step="any" class="form-control" value="" />
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
