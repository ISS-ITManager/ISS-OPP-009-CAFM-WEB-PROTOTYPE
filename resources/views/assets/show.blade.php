@extends('layouts.master')

@section('page_name', $page['name'])

@section('page_title', $page['title'])

@section('page_script') 
    <script>
        $(function(){
            $.getJSON('/jsons/electrical_assets.json', function(data) {
                var html = ""
                $.each(data, function(index, asset) {
                    html += '<tr>\
                        <td>'+asset.code+'</td>\
                        <td>'+asset.name    +'</td>\
                        <td>Sample Description</td>\
                        <td class="text-center">\
                            <div class="d-inline-block text-nowrap">\
                                <button class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded me-2"></i></button>\
                                <div class="dropdown-menu dropdown-menu-end m-0">\
                                    <a href="#" class="dropdown-item"><i class="bx bx-edit"></i> Edit</a>\
                                    <a href="#" class="dropdown-item"><i class="bx bx-trash"></i> Delete</a>\
                                </div>\
                            </div>\
                        </td>\
                    </tr>'
                });
                $("#tbody_assets").html(html)
                $("#dt_assets").dataTable({pageLength: 5});    
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
<div class="row mb-3">
    <div class="col-md-12 mb-2">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-7">
                        <div class="asset-color me-2 float-start" style="background-color: #F97316 ;"></div>
                        <div class="float-start">
                            <span class="fw-bold text-primary">Electrical Asset</span> <br>
                            <small>Date Created : July 30, 2024, 2:32 PM</small>
                        </div>
                    </div>
                    <div class="col-md-5 ">
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
<div class="row">
    <div class="col-md-3">
        <div class="card">
            <div class="card-header">
                <span class="fw-bold text-primary">
                    <i class="fa fa-plus me-2"></i> New Asset
                </span>
               
            </div>
            <div class="card-body">
                <div>
                    <span>Name</span>
                    <input type="text" name="" class="form-control" id="" placeholder="Asset name here...">
                </div>
                <div>
                    <span>Description</span>
                    <textarea name="" id="" class="form-control"  rows="5"></textarea>
                </div>
                <div class="text-center mt-3">
                    <a href="#" class="btn btn-primary">
                        <i class="bx bx-save me-2"></i> Save
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-9">
        <div class="card">
            <div class="card-header">
                <span class="fw-bold text-primary">List of Electrical Assets</span>
                <a href=""></a>
            </div>
            <div class="card-body">
                <table class="table table-bordered" id="dt_assets">
                    <thead>
                        <tr>
                            <th>Code</th>
                            <th>Electrical Assets</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="tbody_assets">
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
