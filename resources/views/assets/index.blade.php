@extends('layouts.master')

@section('page_name', $page['name'])

@section('page_title', $page['title'])

@section('page_script') 
    <script>
        $(function(){
            $.getJSON('/jsons/asset_types.json', function(data) {
                var html = ""
                $.each(data, function(index, asset) {
                    html += '<tr>\
                        <td>\
                            <div class="asset-color me-2 float-start" style="background-color: '+asset.color+'; color : '+asset.color+'">&nbsp;</div>'+asset.asset+'\
                        </td>\
                        <td>Sample Description Here</td>\
                        <td class="text-center">\
                            <a href="/assets/show" class="btn btn-label-primary btn-sm">\
                                <i class="bx bx-folder me-2"></i> View\
                            </a>\
                        </td>\
                    </tr>'
                });
                $("#tbody_assets").html(html)
                $("#dt_assets").dataTable();    
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
    @include('assets.create')
    <a href="#"  class="mb-3 btn btn-primary" data-bs-toggle="modal" data-bs-target="#create_asset">
        <i class="fa fa-plus me-2"></i> Create Asset Category
    </a>
    <div class="card">
        <div class="card-header">
            <span class="fw-bold text-primary">List of Asset Categories</span>
        </div>
        <div class="card-body">
            <table class="table table-bordered" id="dt_assets">
                <thead>
                    <tr>
                        <th>Asset Type</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="tbody_assets">
                    
                </tbody>
            </table>
        </div>
    </div>
@endsection
