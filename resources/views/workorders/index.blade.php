@extends('layouts.master')

@section('page_name', $page['name'])

@section('page_title', $page['title'])

@section('page_script') 
   <script>
        $(function(){
            $("#dt_workorders").dataTable();
        })
  
   </script>
@endsection

@section('page_css')
<style>
   
</style>
@endsection

@section('content')

@include('workorders.create')
<a href="#"  class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create_workorder">
    <i class="fa fa-plus me-2"></i> Create Workorder
</a>

<a href="/workorders/calendar" target="_blank"  class="btn btn-primary" >
    <i class="bx bx-calendar me-2"></i> Calendar
</a>
<div class="card mt-3">
    <div class="fw-bold text-primary card-header">
        List of Workorders
        <a href="#" class="btn btn-label-primary float-end">
            <i class="fa fa-search me-2 "></i> Advance Search
        </a>
    </div>
    <div class="card-body">
        <div  id="advance-search">
            <div class="row">
                <div class="col-md-3">
                    <span>Keyword</span>
                    <input type="text" name="" id="" class="form-control" placeholder="Search Keyword ...">
                </div>
                <div class="col-md-3">
                    <label for="">Type</label>
                    <select name="#" id="" class="form-control select2">
                        <option value="#">Planned</option>
                        <option value="#">General</option>
                        <option value="#">Corrective</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="">Status</label>
                    <select name="#" id="" class="form-control select2">
                        <option value="#">New Request</option>
                        <option value="#">On Process</option>
                        <option value="#">On Due</option>
                        <option value="#">Completed</option>
                        <option value="#">Closed</option>
                    </select>
                </div>
                
                <div class="col-md-3">
                    <label for="">Location</label>
                    <select name="#" id="" class="form-control select2">
                        <option value="#">Select Location</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="">Property</label>
                    <select name="#" id="" class="form-control select2">
                        <option value="#">Select Property</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="">Floor</label>
                    <select name="#" id="" class="form-control select2">
                        <option value="#">Select Floor</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="">Zone</label>
                    <select name="#" id="" class="form-control select2">
                        <option value="#">Select Zone</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="">Space</label>
                    <select name="#" id="" class="form-control select2">
                        <option value="#">Select Space</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="">Date From</label>
                    <input type="date" name="" class="form-control" id="">
                </div>
                <div class="col-md-3">
                    <label for="">Date To</label>
                    <input type="date" name="" class="form-control" id="">
                </div>
                <div class="col-md-2">
                    <label for="">&nbsp;</label><br>
                    <a href="#" class="btn btn-primary"> 
                        <i class="bx bx-search"></i> 
                    </a>
                    <a href="#" class="btn btn-info"> 
                        <i class="bx bx-printer"></i> 
                    </a>
                    
                    <a href="#" class="btn btn-success"> 
                        <i class="bx bx-spreadsheet"></i> 
                    </a>
                </div>
            </div>
            <hr>
        </div>
        <table class="table table-bordered" id="dt_workorders">
            <thead>
                <tr>
                    <td>Work Order No.</td>
                    <td>Property</td>
                    <td>Type</td>
                    <td>Description</td>
                    <td>Service Provider</td>
                    <td>Request Date</td>
                    <td>Response Date</td>
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
                    <td>July 10, 2024</td>
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
</div>
  
@endsection
