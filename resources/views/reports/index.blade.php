@extends('layouts.master')

@section('page_name', $page['name'])

@section('page_title', $page['title'])

@section('page_script') 
    <script>
        $(function(){
            $('#report_type').change(function() {
                var val = $(this).val();
                if (val == 1) {
                    $('#expense_report').show();
                    $('#income_report').hide();
                    $('#expense_filter').show();
                    $('#income_filter').hide();
                }
                if (val == 2) {
                    $('#income_report').show();
                    $('#expense_report').hide();
                    $('#income_filter').show();
                    $('#expense_filter').hide();
                }
            });
            $('#dt_service_providers').DataTable({});
            var expense_options = {
                series: [22000, 50000, 24123],
                chart: {
                    width: 550,
                    type: 'pie',
                },
                colors: ['#124679', '#3B82F6', '#F43F5E'],
                labels: ['Al Jazeera - 22,000', 'Al Maha Boys - 50,000', 'Al Maha Girls - 24,123', ],
                responsive: [{
                breakpoint: 480,
                options: {
                    chart: {
                        width: 200
                    },
                    legend: {
                        position: 'top'
                    }
                }
                }]
            };

            var chart = new ApexCharts(document.querySelector("#pie_chart"), expense_options);
            chart.render();

            var income_options = {
                series: [7500, 6150],
                chart: {
                    width: 550,
                    type: 'pie',
                },
                colors: ['#124679', '#3B82F6',],
                labels: ['Property 1', 'Property 2'],
                responsive: [{
                breakpoint: 480,
                options: {
                    chart: {
                        width: 200
                    },
                    legend: {
                        position: 'top'
                    }
                }
                }]
            };

            var chart = new ApexCharts(document.querySelector("#income_pie"), income_options);
            chart.render();


            var income_line_options = {
                series: [
                    {
                        name: 'Property 1',
                        data: [1000, 1100, 1200, 1300, 1400, 1500]
                    },
                    {
                        name: 'Property 2',
                        data: [900, 950, 1000, 1050, 1100, 1150]
                    }
                ],
                chart: {
                    type: 'line',
                    height: 350
                },
                title: {
                    text: 'Property Comparison',
                    align: 'left'
                },
                xaxis: {
                    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun']
                },
                stroke: {
                    curve: 'smooth'
                },
                markers: {
                    size: 5
                },
                grid: {
                    borderColor: '#e7e7e7',
                    strokeDashArray: 5,
                },
                yaxis: {
                    title: {
                        text: 'Value'
                    }
                },
                legend: {
                    position: 'top',
                    horizontalAlign: 'left'
                },
                colors: ['#124679', '#3B82F6']
            };

            var chart = new ApexCharts(document.querySelector("#income_line"), income_line_options);
            chart.render();

            var options = {
                series: [{
                    data: [22000, 50000, 24123],
                }],
                chart: {
                    type: 'bar',
                    height: 350
                },
                plotOptions: {
                    bar: {
                        borderRadius: 4,
                        borderRadiusApplication: 'end',
                        horizontal: true,
                    },
                    
                },
                dataLabels: {
                    enabled: false
                },
                xaxis: {
                    categories: ['Al Jazeera', 'Al Maha Boys', 'Al Maha Girls'],
                },
                colors: ['#124679', '#3B82F6', '#F43F5E'],
            };

            var barChart = new ApexCharts(document.querySelector("#bar_chart"), options);
            barChart.render();
      
        })
    </script>
@endsection

@section('page_css')
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <span>Property</span>
                    <select name=""  class="select2">
                        <option value="1">Ayaan Real State</option>
                        <option value="2">Qatar Schools</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <span>Report Type</span>
                    <select name="" id="report_type" class="select2">
                        <option value="#">Select Report Type</option>
                        <option value="1">Expense Report</option>
                        <option value="2">Income Report</option>
                        <option value="3">Income and Expense Report</option>
                    </select>
                </div>
            </div>
            <div class="row" id="expense_filter" style="display: none">
                <div class="col-md-3">
                    <span>Date From</span>
                    <input type="date" class="form-control">
                </div>
                <div class="col-md-3">
                    <span>Date To</span>
                    <input type="date" class="form-control">
                </div>
                <div class="col-md-3">
                    <span></span><br>
                    <a href="#" class="btn btn-info" style="width: 100%"> Generate Report
                        <i class="bx bx-right-arrow-alt"></i>
                    </a>
                </div>
                <div class="col-md-3">
                    <span></span><br>
                    <a href="#" class="btn btn-success"  style="width: 100%">
                        <i class="bx bx-printer me-2"></i> Print
                    </a>
                </div>
            </div>
            <div class="row" id="income_filter" style="display: none">
                <div class="col-md-3">
                    <span>Month From</span>
                    <input type="month" class="form-control">
                </div>
                <div class="col-md-3">
                    <span>Month To</span>
                    <input type="month" class="form-control">
                </div>
                <div class="col-md-3">
                    <span></span><br>
                    <a href="#" class="btn btn-info" style="width: 100%"> Generate Report
                        <i class="bx bx-right-arrow-alt"></i>
                    </a>
                </div>
                <div class="col-md-3">
                    <span></span><br>
                    <a href="#" class="btn btn-success"  style="width: 100%">
                        <i class="bx bx-printer me-2"></i> Print
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row border border-light mt-3 p-3" id="expense_report" style="display: none">
                <div class="col-md-12 text-center mt-3 mb-4">
                    <h2 class="text-dark fw-bold">Building Expenses</h2>
                    <span class="text-info"> From July 01, 2024 to July 30, 2024</span> <br>
                    <span>Date Generated : July 30, 2024 10:00AM</span>
                </div>
                <div class="col-md-12 mb-3">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Particulars</th>
                                <th>Expenses</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Al Jazeera Academy</td>
                                <td> QR 22,000</td>
                            </tr>
                            <tr>
                                <td>Al Maha Boys</td>
                                <td> QR 22,000</td>
                            </tr>
                            <tr>
                                <td>Al Maha Boys</td>
                                <td> QR 22,000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-6 mb-3">
                    <div id="bar_chart"></div>
                </div>
                <div class="col-md-6 mb-3">
                    <div id="pie_chart"></div>
                </div>
            </div>
            <div class="row border border-light mt-3 p-3" id="income_report" style="display: none">
                <div class="col-md-12 text-center mt-3 mb-4">
                    <span class="text-dark fw-bold h3">INCOME REPORT</span><br>
                    <span class="text-info fw-bold h3">AAYAN REAL STATE</span><br>
                    <span class="fw-bold h4">January 2024 to June 2024</span><br>
                </div>
                <div class="col-md-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Property</th>
                                <th>Jan</th>
                                <th>Feb</th>
                                <th>Mar</th>
                                <th>Apr</th>
                                <th>May</th>
                                <th>Jun</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Property 1</td>
                                <td>1000</td>
                                <td>1100</td>
                                <td>1200</td>
                                <td>1300</td>
                                <td>1400</td>
                                <td>1500</td>
                                <td class="fw-bold">7500</td>
                            </tr>
                            <tr>
                                <td>Property 2</td>
                                <td>900</td>
                                <td>950</td>
                                <td>1000</td>
                                <td>1050</td>
                                <td>1100</td>
                                <td>1150</td>
                                <td class="fw-bold">6150</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr class="total-row">
                                <td>Total</td>
                                <td>1900</td>
                                <td>2050</td>
                                <td>2200</td>
                                <td>2350</td>
                                <td>2500</td>
                                <td>1150</td>
                                <td class="fw-bold">2650</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="col-md-12 mt-3">
                    <center>
                        <div id="income_pie"></div>
                    </center>
                </div>
                <div class="col-md-12 mt-3">
                    <center>
                        <div id="income_line"></div>
                    </center>
                </div>
            </div>
        </div>
    </div>
@endsection
