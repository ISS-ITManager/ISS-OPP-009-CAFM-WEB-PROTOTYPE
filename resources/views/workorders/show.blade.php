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

@include('workorders.add_attachment')
@include('workorders.add_item')
<div class="row">
    <div class="col-md-3">
        <div class="alert alert-success d-flex" role="alert">
            <span class="badge badge-center rounded-pill bg-success border-label-success p-3 me-2"
              ><i class="bx bx-check fs-6"></i
            ></span>
            <div class="d-flex flex-column ps-1 mb-auto mt-auto">
              <span class="fw-bold">Completed</span>
              <span>This work order is mark as completed.</span>
            </div>
          </div>
        <div class="card mb-3">
            <div class="card-header fw-bold text-primary">
                Contact Person
            </div>
            <div class="card-body ">
                <div class="row">
                    <div class="col-3 mb-auto mt-auto">
                        <img src="/images/technician.png" class="w-100"  alt="">
                    </div>
                    <div class="col-7">
                        <span class="fw-bold text-dark h4">John Doe</span> <br>
                        <small class="text-info">Technician</small> <br>
                        <span>0000 0000</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-header fw-bold text-primary">
              Work Order Cost
              <a href="#" class="btn btn-success btn-sm float-end" data-bs-toggle="modal" data-bs-target="#add_item">
                <i class="fa fa-plus me-2"></i> Add
              </a>
            </div>
            <div class="card-body ">
                <div class="row">
                    <div class="col-3 mb-auto mt-auto">
                        <img src="/images/cost.png" class="w-100"  alt="">
                    </div>
                    <div class="col-7  mb-auto mt-auto">
                       <span class="text-dark fw-bold h4">QR 1000</span><br>
                       <small class="text-info">Actual Cost</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-header fw-bold text-primary">
              Attachments
              <a href="#" class="btn btn-success btn-sm float-end" data-bs-target="#add_attachment" data-bs-toggle="modal">
                <i class="fa fa-plus me-2"></i> Add
              </a>
            </div>
            <div class="card-body ">
                <div class="row">
                    <div class="col-3 mb-auto mt-auto">
                        <img src="/images/folder.png" class="w-100"  alt="">
                    </div>
                    <div class="col-7  mb-auto mt-auto">
                       <span class="text-dark fw-bold h4">3</span><br>
                       <small class="text-info">Uploaded Attachments</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-9">
        <div class="card">
            <div class="card-header fw-bold text-primary">
                Work Order Request
                <a href="#" class="ms-2 btn btn-label-danger float-end">
                    <i class="bx bx-trash"></i>
                </a>
                <a href="/workorders/print" target="_blank" class="ms-2 btn btn-label-info float-end">
                    <i class="bx bx-printer"></i>
                </a>
                <a href="#" class="ms-2 btn btn-label-primary float-end">
                    <i class="bx bx-pencil"></i>
                </a>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr >
                        <td colspan="4" class="text-info fw-bold">Request Details</td>
                    </tr>
                    <tr>
                        <td class="fw-bold">Work Order Number</td>
                        <td>100000001</td>
                        <td class="fw-bold">Request Date</td>
                        <td>July 03, 2024 10:00 AM</td>
                    </tr>
                   
                    <tr>
                        <td class="fw-bold">Main Contact</td>
                        <td>Jane Doe</td>
                        <td class="fw-bold">Telephone</td>
                        <td>1234 1234</td>
                    </tr>
                    <tr>
                        <td colspan="4" class="text-info fw-bold">Locality Details</td>
                    </tr>
                    <tr>
                        <td class="fw-bold">Location</td>
                        <td>Qatar - Schools</td>
                        <td class="fw-bold">Property</td>
                        <td>Al Jazeera Academy</td>
                    </tr>
                    <tr>
                        <td class="fw-bold">Floor</td>
                        <td>Floor 1</td>
                        <td class="fw-bold">Zone</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="fw-bold">Space</td>
                        <td></td>
                        <td class="fw-bold">Address</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="4" class="text-info fw-bold">Work Details</td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <b>Description </b><br>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque, fugit 
                            voluptatum minima nulla, quis eum voluptas exercitationem 
                            labore similique tenetur a temporibus nisi aut 
                            vero minus soluta pariatur dicta. Debitis.
                        </td>
                    </tr>
                    <tr>
                        <td class="fw-bold">Estimated Cost</td>
                        <td></td>
                        <td class="fw-bold">Remarks</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="fw-bold">Service Provider</td>
                        <td></td>
                        <td class="fw-bold">Main Contact</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="fw-bold">Completion Date</td>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <td colspan="4" class="">
                            <b>Material Used / Cost</b> <br>
                            <table class="table table-bordered">
                                <tr>
                                    <th>Invoice #</th>
                                    <th>Item</th>
                                    <th>Cost</th>
                                </tr>
                                <tr>
                                    <td>10001</td>
                                    <td>Light Bulb</td>
                                    <td>50</td>
                                </tr>
                                <tr>
                                    <td>10002</td>
                                    <td>Switch</td>
                                    <td>20</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4" class="">
                            <b>Checklist</b> <br>
                            <table class="table table-bordered">
                                <tr>
                                    <th>Requirements</th>
                                    <th>Filename</th>
                                </tr>
                                @for ($i = 1; $i <= 7; $i++)
                                    <tr>
                                        <td><i class="fa me-2 {{ ($i <= 3) ?'fa-check text-success'  : 'fa-times text-danger' }}"></i> Checklist {{$i}}</td>
                                        <td>
                                            {{ ($i <= 3) ? 'filename'.$i.'.png'  : 'No uploaded files.' }}
                                        </td>
                                    </tr>
                                @endfor
                            </table>
                        </td>
                    <tr>
                        <td colspan="4" class="">
                            <b>Remarks</b> <br>
                            Sample Description and Price here
                        </td>
                    </tr>
                </table>
                <center>
                    <a href="#" class="btn btn-primary mt-3">Update Status</a>
                </center>
                
            </div>
        </div>
    </div>
</div>
@endsection
