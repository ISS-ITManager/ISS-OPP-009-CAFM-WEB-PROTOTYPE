@extends('layouts.master')

@section('page_name', $page['name'])

@section('page_title', $page['title'])

@section('page_script') 

@endsection

@section('page_css')
<style>
   #editLogsForm .form-label {
       text-transform: capitalize !important;
       text-align: right !important;
   }
</style>
@endsection

@section('content')
   <div class="card">
      <div class="card-datatable table-responsive">
         <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
            <div class="row">
               <div class="col-md-2">
                  <div class="ms-n2">
                  </div>
               </div>
               <div class="col-md-10">
                  <div class="dt-action-buttons text-xl-end text-lg-start text-md-end text-start d-flex align-items-center justify-content-end flex-md-row flex-column mb-6 mb-md-0 mt-n6 mt-md-0">
                     <div id="DataTables_Table_0_filter" class="dataTables_filter"><label><input type="search" class="form-control" placeholder="Search Logs" aria-controls="DataTables_Table_0"></label></div>
                     {{-- <div class="dt-buttons btn-group flex-wrap">
                        
                        <button class="btn btn-secondary add-new btn-primary" tabindex="0" aria-controls="DataTables_Table_0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasAddUser"><span><i class="bx bx-plus bx-xs me-0 me-sm-2"></i><span class="d-none d-sm-inline-block">Add New Hospital</span></span></button> 
                     </div> --}}
                  </div>
               </div>
            </div>
            <table class="datatables-users table border-top dataTable no-footer dtr-column" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info" style="width: 1391px;">
               <thead>
                  <tr>
                     <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 200px;" aria-label="User: activate to sort column ascending" aria-sort="descending">event</th>
                     <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 101px;" aria-label="Status: activate to sort column ascending">module</th>
                     <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 149px;" aria-label="Role: activate to sort column ascending">username</th>
                     <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 101px;" aria-label="Status: activate to sort column ascending">date</th>
                     <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 175px;" aria-label="Actions">Actions</th>
                  </tr>
               </thead>
               <tbody>
                  
                  <tr class="odd">
                     <td class="sorting_1">
                        <div class="d-flex justify-content-start align-items-center user-name">
                           <div class="d-flex flex-column"><a href="#" class="text-heading text-truncate"><span class="badge bg-label-warning" text-capitalized="">update</span></a></div>
                        </div>
                     </td>
                     <td><span class="text-truncate d-flex align-items-center text-heading">Caregiver</span></td>
                     <td><span class="text-truncate d-flex align-items-center text-heading"><i class="bx bx-user text-warning me-2"></i>user01</span></td>
                     <td>2024-01-01 12:00:00</td>
                     <td>
                        <div class="d-flex align-items-center">
                           <a href="javascript:;" class="btn btn-icon" data-bs-target="#editHospital" data-bs-toggle="modal"><i class="bx bx-show bx-xs"></i></a>
                        </div>
                     </td>
                  </tr>
                  <tr class="even">
                     <td class="sorting_1">
                        <div class="d-flex justify-content-start align-items-center user-name">
                           <div class="d-flex flex-column"><a href="#" class="text-heading text-truncate"><span class="badge bg-label-primary" text-capitalized="">Create</span></a></div>
                        </div>
                     </td>
                     <td><span class="text-truncate d-flex align-items-center text-heading">Equipment</span></td>
                     <td><span class="text-truncate d-flex align-items-center text-heading"><i class="bx bx-user text-warning me-2"></i>user01</span></td>
                     <td>2024-01-01 12:00:00</td>
                     <td>
                        <div class="d-flex align-items-center">
                           <a href="javascript:;" class="btn btn-icon" data-bs-target="#editHospital" data-bs-toggle="modal"><i class="bx bx-show bx-xs"></i></a>
                        </div>
                     </td>
                  </tr>
                  <tr class="odd">
                     <td class="sorting_1">
                        <div class="d-flex justify-content-start align-items-center user-name">
                           <div class="d-flex flex-column"><a href="#" class="text-heading text-truncate"><span class="badge bg-label-primary" text-capitalized="">Create</span></a></div>
                        </div>
                     </td>
                     <td><span class="text-truncate d-flex align-items-center text-heading">User</span></td>
                     <td><span class="text-truncate d-flex align-items-center text-heading"><i class="bx bx-user text-warning me-2"></i>user01</span></td>
                     <td>2024-01-01 12:00:00</td>
                     <td>
                        <div class="d-flex align-items-center">
                           <a href="javascript:;" class="btn btn-icon" data-bs-target="#editHospital" data-bs-toggle="modal"><i class="bx bx-show bx-xs"></i></a>
                        </div>
                     </td>
                  </tr>
                  <tr class="even">
                     <td class="sorting_1">
                        <div class="d-flex justify-content-start align-items-center user-name">
                           <div class="d-flex flex-column"><a href="#" class="text-heading text-truncate"><span class="badge bg-label-danger" text-capitalized="">Delete</span></a></div>
                        </div>
                     </td>
                     <td><span class="text-truncate d-flex align-items-center text-heading">Appointment</span></td>
                     <td><span class="text-truncate d-flex align-items-center text-heading"><i class="bx bx-user text-warning me-2"></i>user02</span></td>
                     <td>2024-01-01 12:00:00</td>
                     <td>
                        <div class="d-flex align-items-center">
                           <a href="javascript:;" class="btn btn-icon" data-bs-target="#editHospital" data-bs-toggle="modal"><i class="bx bx-show bx-xs"></i></a>
                        </div>
                     </td>
                  </tr>
               </tbody>
            </table>
            <div class="row">
               <div class="col-sm-12 col-md-6">
                  <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 10 of 50 entries</div>
               </div>
               <div class="col-sm-12 col-md-6">
                  <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                     <ul class="pagination">
                        <li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a aria-controls="DataTables_Table_0" aria-disabled="true" role="link" data-dt-idx="previous" tabindex="-1" class="page-link"><i class="bx bx-chevron-left bx-18px"></i></a></li>
                        <li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" role="link" aria-current="page" data-dt-idx="0" tabindex="0" class="page-link">1</a></li>
                        <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" role="link" data-dt-idx="1" tabindex="0" class="page-link">2</a></li>
                        <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" role="link" data-dt-idx="2" tabindex="0" class="page-link">3</a></li>
                        <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" role="link" data-dt-idx="3" tabindex="0" class="page-link">4</a></li>
                        <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" role="link" data-dt-idx="4" tabindex="0" class="page-link">5</a></li>
                        <li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" role="link" data-dt-idx="next" tabindex="0" class="page-link"><i class="bx bx-chevron-right bx-18px"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div style="width: 1%;"></div>
         </div>
      </div>
   </div>
   <div class="modal fade" id="editHospital" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-simple modal-edit-user">
         <div class="modal-content p-3 p-md-5">
            <form id="editLogsForm">
               <div class="modal-body">
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  <div class="text-center mb-4">
                     <h3>Audit Logs</h3>
                  </div>
                     <div class="row mb-3">
                        <label class="col-sm-2 form-label" for="basic-default-name">Event</label>
                        <div class="col-sm-10">
                           <input type="text" class="form-control" id="basic-default-name" placeholder="John Doe" value="Create" disabled>
                        </div>
                     </div>
                     <div class="row mb-3">
                        <label class="col-sm-2 form-label" for="basic-default-company">Module</label>
                        <div class="col-sm-10">
                           <input type="text" class="form-control" id="basic-default-company" placeholder="ACME Inc." value="Equipment" disabled>
                        </div>
                     </div>
                     <div class="row mb-3">
                        <label class="col-sm-2 form-label" for="basic-default-company">Username</label>
                        <div class="col-sm-10">
                           <input type="text" class="form-control" id="basic-default-company" placeholder="ACME Inc." value="User01" disabled>
                        </div>
                     </div>
                     <div class="row mb-3">
                        <label class="col-sm-2 form-label" for="basic-default-company">Email</label>
                        <div class="col-sm-10">
                           <input type="text" class="form-control" id="basic-default-company" placeholder="ACME Inc." value="user01@example.com" disabled>
                        </div>
                     </div>
                     <div class="row mb-3">
                        <label class="col-sm-2 form-label" for="basic-default-company">Old Values</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" id="basic-default-company" disabled>
                           <pre>{\"image_name\":\"login.png\",\"mime_content_type\":\"image\\/png\",\"image_size\":\"258459\"}</pre>
                          </textarea>
                        </div>
                     </div>
                     <div class="row mb-3">
                        <label class="col-sm-2 form-label" for="basic-default-company">New Values</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" id="basic-default-company" disabled>
                           <pre>{\"image_name\":\"login.png\",\"mime_content_type\":\"image\\/png\",\"image_size\":\"258459\"}</pre>
                          </textarea>
                        </div>
                     </div>
                     <div class="row mb-3">
                        <label class="col-sm-2 form-label" for="basic-default-company">Date and Time</label>
                        <div class="col-sm-10">
                           <input type="text" class="form-control" id="basic-default-company" placeholder="ACME Inc." value="2024-01-1 12:00:00" disabled>
                        </div>
                     </div>
                  
               </div>
               
               {{-- <div class="modal-footer mt-12">
                  <div class="col-12 d-flex justify-content-end">
                     <button type="submit" class="btn btn-primary">Update</button>
                  </div>
               </div> --}}
            </form>
         </div>
      </div>
   </div>
   <div class="modal fade" id="deleteHospital" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-sm" role="document">
         <div class="modal-content">
            <div class="modal-body">
               <div class="text-center">
                  <h3>Delete Hospital?</h3>
                  <p>Are you sure you want to delete this hospital?</p>
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">
               Cancel
               </button>
               <button type="button" class="btn btn-primary">Yes</button>
            </div>
         </div>
      </div>
   </div>
    <script>
      $( function (){
        $('#dt_patients').DataTable({});
    })
    </script>
@endsection

@section('page_css')
    
@endsection

@section('content')
@include('queue.completed')
@include('queue.profile')

<a href="#" class="btn btn-info">
    <i class="me-2 bx bx-plus-medical"></i>
    Add New Hospital
</a>

<div class="card mt-3">
    <div class="card-header">
        <span>Hospital List</span>
    </div>
    <dib class="card-body">
        <table class="table table-bordered"></table>
    </dib>
</div>
@endsection
