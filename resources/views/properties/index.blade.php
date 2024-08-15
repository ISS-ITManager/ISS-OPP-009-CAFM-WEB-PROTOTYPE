@extends('layouts.master')

@section('page_name', $page['name'])

@section('page_title', $page['title'])

@section('page_script') 
    <script>
        $(function(){
            $("#dt_properties").dataTable();
        })
        var data2 = {
            name: 'flare',
            children: [
                {
                    name: 'flex',
                    children: [{ name: 'FlareVis', value: 4116 }]
                },
                {
                    name: 'scale',
                    children: [
                    { name: 'IScaleMap', value: 2105 },
                    { name: 'LinearScale', value: 1316 },
                    { name: 'LogScale', value: 3151 },
                    { name: 'OrdinalScale', value: 3770 },
                    { name: 'QuantileScale', value: 2435 },
                    { name: 'QuantitativeScale', value: 4839 },
                    { name: 'RootScale', value: 1756 },
                    { name: 'Scale', value: 4268 },
                    { name: 'ScaleType', value: 1821 },
                    { name: 'TimeScale', value: 5833 }
                    ]
                },
                {
                    name: 'display',
                    children: [{ name: 'DirtySprite', value: 8833 }]
                }
            ]
        };
    </script>
@endsection

@section('page_css')

@endsection

@section('content')
    @include('properties.create')
    <a href="#"  class="mb-3 btn btn-primary" data-bs-toggle="modal" data-bs-target="#create_property">
        <i class="fa fa-plus me-2"></i> Create Property
    </a>
    <div class="card">
        <div class="card-header">
            <span class="fw-bold text-primary">List of Properties</span>
        </div>
        <div class="card-body">
            <table class="table table-bordered" id="dt_properties">
                <thead>
                    <tr>
                        <th>Group</th>
                        <th>Property Name</th>
                        <th>Location</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <span class="fi fi-gb rounded-pill fis me-2"></span> Nunnery
                        </td>
                        <td>Main House</td>
                        <td>United Kingdom</td>
                        <td class="text-center">
                            <a href="/properties/show" class="btn btn-label-primary btn-sm">
                                <i class="bx bx-folder me-2"></i> View
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="fi fi-qa rounded-pill fis me-2"></span> Schools
                        </td>
                        <td>Al Jazeera</td>
                        <td>Doha, Qatar</td>
                        <td class="text-center">
                            <a href="/properties/show" class="btn btn-label-primary btn-sm">
                                <i class="bx bx-folder me-2"></i> View
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="fi fi-qa rounded-pill fis me-2"></span> Schools
                        </td>
                        <td>Al Maha Girls</td>
                        <td>Doha, Qatar</td>
                        <td class="text-center">
                            <a href="/properties/show" class="btn btn-label-primary btn-sm">
                                <i class="bx bx-folder me-2"></i> View
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="fi fi-qa rounded-pill fis me-2"></span> Schools
                        </td>
                        <td>Al Maha Boys</td>
                        <td>Doha, Qatar</td>
                        <td class="text-center">
                            <a href="/properties/show" class="btn btn-label-primary btn-sm">
                                <i class="bx bx-folder me-2"></i> View
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
