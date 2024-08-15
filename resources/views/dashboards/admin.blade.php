@extends('layouts.master')

@section('page_name', $page['name'])

@section('page_title', $page['title'])

@section('page_script') 
<script>

    const totalIncomeEl = document.querySelector('#totalIncomeChart'),
    totalIncomeConfig = {
        chart: {
            height: 250,
            type: 'area',
            toolbar: false,
            dropShadow: {
            enabled: true,
            top: 14,
            left: 2,
            blur: 3,
            color: "#124679",
            opacity: 0.15
            }
        },
        series: [
            {
                data: [3350, 3350, 4800, 4800, 2950, 2950, 1800, 1800, 3750, 3750, 5700, 5700]
            }
        ],
        dataLabels: {
            enabled: false
        },
        stroke: {
            width: 3,
            curve: 'straight'
        },
        colors: ["#124679"],
        fill: {
            type: 'gradient',
            gradient: {
            shade: '#007bff',
            shadeIntensity: 0.8,
            opacityFrom: 0.7,
            opacityTo: 0.25,
            stops: [0, 95, 100]
            }
        },
        grid: {
            show: true,
            borderColor: '#cccccc',
            padding: {
            top: -15,
            bottom: -10,
            left: 0,
            right: 0
            }
        },
        xaxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            labels: {
            offsetX: 0,
            style: {
                colors: '#435971',
                fontSize: '13px'
            }
            },
            axisBorder: {
            show: false
            },
            axisTicks: {
            show: false
            },
            lines: {
            show: false
            }
        },
        yaxis: {
            labels: {
            offsetX: -15,
            formatter: function (val) {
                return '$' + parseInt(val / 1000) + 'k';
            },
            style: {
                fontSize: '13px',
                colors: '#435971'
            }
            },
            min: 1000,
            max: 6000,
            tickAmount: 5
        }
    };
    if (typeof totalIncomeEl !== undefined && totalIncomeEl !== null) {
        const totalIncome = new ApexCharts(totalIncomeEl, totalIncomeConfig);
        totalIncome.render();
    }
</script>
@endsection

@section('page_css')

@endsection

@section('content')
<div class="row">
    <div class="col-md-3 mb-3">
        <div class="card h-100">
            <div class="card-body">
                <div class="d-flex align-items-center gap-4 me-6 me-sm-0">
                    <div class="avatar avatar-lg">
                      <div class="avatar-initial bg-label-primary rounded">
                        <h1 class="bx  bx-buildings mt-3 text-primary" style="font-size: 45px;"></h1>
                      </div>
                    </div>
                    <div class="content-right">
                      <p class="mb-0 fw-medium">Total Properties</p>
                      <h4 class="text-primary mb-0">102</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-3">
        <div class="card h-100">
            <div class="card-body">
                <div class="d-flex align-items-center gap-4 me-6 me-sm-0">
                    <div class="avatar avatar-lg">
                      <div class="avatar-initial bg-label-success rounded">
                        <h1 class="bx  bx-briefcase mt-3 text-success" style="font-size: 45px;"></h1>
                      </div>
                    </div>
                    <div class="content-right">
                      <p class="mb-0 fw-medium">Total Work Orders</p>
                      <h4 class="text-success mb-0">102</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-3">
        <div class="card h-100">
            <div class="card-body">
                <div class="d-flex align-items-center gap-4 me-6 me-sm-0">
                    <div class="avatar avatar-lg">
                      <div class="avatar-initial bg-label-warning rounded">
                        <h1 class="bx  bx-briefcase mt-3 text-warning" style="font-size: 45px;"></h1>
                      </div>
                    </div>
                    <div class="content-right">
                      <p class="mb-0 fw-medium">Total Users</p>
                      <h4 class="text-warning mb-0">20</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-3">
        <div class="card h-100">
            <div class="card-body">
                <div class="d-flex align-items-center gap-4 me-6 me-sm-0">
                    <div class="avatar avatar-lg">
                      <div class="avatar-initial bg-label-danger rounded">
                        <h1 class="bx  bx-hard-hat mt-3 text-danger" style="font-size: 45px;"></h1>
                      </div>
                    </div>
                    <div class="content-right">
                      <p class="mb-0 fw-medium">Service Providers</p>
                      <h4 class="text-danger mb-0">20</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12mb-4">
        <div class="card">
            <div class="row row-bordered g-0">
            <div class="col-md-8">
                <div class="card-header">
                <h5 class="card-title mb-0">Total Income</h5>
                <small class="card-subtitle">Yearly report overview</small>
                </div>
                <div class="card-body">
                <div id="totalIncomeChart"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-header d-flex justify-content-between">
                <div>
                    <h5 class="card-title mb-0">Report</h5>
                    <small class="card-subtitle">Monthly Avg. $45.578k</small>
                </div>
                <div class="dropdown">
                    <button
                    class="btn p-0"
                    type="button"
                    id="totalIncome"
                    data-bs-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false">
                    <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="totalIncome">
                    <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                    </div>
                </div>
                </div>
                <div class="card-body">
                <div class="report-list">
                    <div class="report-list-item rounded-2 mb-3">
                    <div class="d-flex align-items-start">
                        <div class="report-list-icon p-2 rounded shadow-sm me-2">
                        <img
                            src="/template/assets/svg/icons/paypal-icon.svg"
                            width="22"
                            height="22"
                            alt="Paypal" />
                        </div>
                        <div class="d-flex justify-content-between align-items-end w-100 flex-wrap gap-2">
                        <div class="d-flex flex-column">
                            <span>Income</span>
                            <h5 class="mb-0">QR 42,845</h5>
                        </div>
                        <small class="text-success">+2.34k</small>
                        </div>
                    </div>
                    </div>
                    <div class="report-list-item rounded-2 mb-3">
                    <div class="d-flex align-items-start">
                        <div class="report-list-icon p-2 rounded shadow-sm me-2">
                        <img
                            src="/template/assets/svg/icons/shopping-bag-icon.svg"
                            width="22"
                            height="22"
                            alt="Shopping Bag" />
                        </div>
                        <div class="d-flex justify-content-between align-items-end w-100 flex-wrap gap-2">
                        <div class="d-flex flex-column">
                            <span>Expense</span>
                            <h5 class="mb-0">QR 38,658</h5>
                        </div>
                        <small class="text-danger">-1.15k</small>
                        </div>
                    </div>
                    </div>
                    <div class="report-list-item rounded-2">
                    <div class="d-flex align-items-start">
                        <div class="report-list-icon p-2 rounded shadow-sm me-2">
                        <img
                            src="/template/assets/svg/icons/wallet-icon.svg"
                            width="22"
                            height="22"
                            alt="Wallet" />
                        </div>
                        <div class="d-flex justify-content-between align-items-end w-100 flex-wrap gap-2">
                        <div class="d-flex flex-column">
                            <span>Profit</span>
                            <h5 class="mb-0">QR 18,220</h5>
                        </div>
                        <small class="text-success">+1.35k</small>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        <!--/ Total Income -->
    </div>
</div>
@endsection
