@extends('layouts.master')

@section('page_name', $page['name'])

@section('page_title', $page['title'])

@section('page_script') 
   <script>
        $(function(){
            $("#dt_locations").dataTable();
        })
        
        var chartDom = $('#tree-chart')[0];
        var myChart = echarts.init(chartDom);

        var option = {
            
            tooltip: {
                trigger: 'item',
                triggerOn: 'mousemove'
            },
            series: [
                {
                    type: 'tree',
                    data: [
                        {
                            name: 'QA - Schools',
                            symbol: 'image:///images/map.png', 
                            symbolSize: 25,
                            children: [
                                {
                                    name: 'Al Jazeera Academy',
                                    symbol: 'image:///images/building.png', 
                                    symbolSize: 25,
                                    children: [
                                        {   
                                            symbol: 'image:///images/floor.png', 
                                            symbolSize: 25,
                                            name: 'Parking Lot' 
                                        },
                                        {   
                                            symbol: 'image:///images/floor.png', 
                                            symbolSize: 25,
                                            name: 'Floor 1' 
                                        },
                                        {   
                                            
                                            name: 'Floor 2',
                                            symbol: 'image:///images/floor.png', 
                                            symbolSize: 25,
                                            children : [
                                                {
                                                    symbol: 'image:///images/flag.png', 
                                                    symbolSize: 25,
                                                    name: 'Primary' 
                                                },
                                                {
                                                    symbol: 'image:///images/flag.png', 
                                                    symbolSize: 25,
                                                    name: 'Secondary' 
                                                },
                                            ]
                                        },
                                        {   
                                            symbol: 'image:///images/floor.png', 
                                            symbolSize: 25,
                                            name: 'Floor 3' 
                                        },
                                    ]
                                },
                                {
                                    name: 'Al Maha Boys',
                                    symbol: 'image:///images/building.png', 
                                    symbolSize: 25,
                                    children: [
                                        {   
                                            symbol: 'image:///images/floor.png', 
                                            symbolSize: 25,
                                            name: 'Basement' 
                                        },
                                        {   
                                            symbol: 'image:///images/floor.png', 
                                            symbolSize: 25,
                                            name: 'Ground Floor' 
                                        }
                                    ]
                                },
                                {
                                    name: 'Al Maha Girls',
                                    symbol: 'image:///images/building.png', 
                                    symbolSize: 25,
                                    children: [
                                        {   
                                            symbol: 'image:///images/floor.png', 
                                            symbolSize: 25,
                                            name: 'Basement' 
                                        },
                                        {   symbol: 'image:///images/floor.png', 
                                            symbolSize: 25,
                                            name: 'Ground Floor' 
                                        }
                                    ]
                                },

                            ]
                        }
                    ],
                    top: '1%',
                    left: '10%',
                    bottom: '1%',
                    right: '10%',
                    label: {
                        position: 'left',
                        verticalAlign: 'middle',
                        align: 'right',
                        fontSize: 12
                    },
                    leaves: {
                        label: {
                            position: 'right',
                            verticalAlign: 'middle',
                            align: 'left'
                        }
                    },
                    expandAndCollapse: true,
                    animationDuration: 550,
                    animationDurationUpdate: 750
                }
            ]
        };
        myChart.setOption(option);
   </script>
@endsection

@section('page_css')
<style>
   #addNewUserForm .form-label {
       text-transform: capitalize !important
   }
</style>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12 mb-3">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-1 text-center">
                            <span class="fi fi-qa rounded-pill fis me-2 mt-1 " style="height: 30px; width: 30px;"></span>
                        </div>
                        <div class="col-md-6">
                            <span class="fw-bold text-primary">Qatar - Schools</span> <br>
                            <small>Date Created : July 30, 2024, 2:32 PM</small>
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
        <div class="col-md-3 mb-3">
            <div class="card mb-3">
                <div class="card-body text-center">
                    <i class="bx bx-bulb text-info me-2"></i><span class="text-dark fw-bold">Assets</span>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-body text-center">
                    <i class="bx bx-file text-info me-2"></i><span class="text-dark fw-bold">Documents</span>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <span class="fw-bold text-primary">Location Hierarchy</span>
                </div>
                <div class="card-body">
                    <center>
                        <div id="tree-chart" style="width: 95%; height: 400px" ></div>
                    </center>
                </div>
            </div>
        </div>
    </div>
@endsection
