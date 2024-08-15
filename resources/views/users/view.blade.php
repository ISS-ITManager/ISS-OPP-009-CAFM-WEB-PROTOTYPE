@extends('layouts.master')

@section('page_name', $page['name'])

@section('page_title', $page['title'])

@section('page_script') 

@endsection

@section('page_css')
    <style>
        #editUserForm .form-label {
            text-transform: capitalize !important
        }
    </style>
@endsection

@section('content')
   <div class="row">
      <!-- User Sidebar -->
      <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
         <!-- User Card -->
         <div class="card mb-4">
            <div class="card-body">
               <div class="user-avatar-section">
                  <div class="d-flex align-items-center flex-column">
                     <img class="img-fluid rounded my-4" src="/template/assets/img/avatars/10.png" height="110" width="110" alt="User avatar">
                     <div class="user-info text-center">
                        <h4 class="mb-2">Violet Mendoza</h4>
                        <span class="badge bg-label-secondary">ID: 0001</span>
                     </div>
                  </div>
               </div>
               <hr />
               <div class="info-container">
                  <ul class="list-unstyled">
                     <li class="mb-3">
                        <span class="fw-medium me-2">QID:</span>
                        <span>XXXXX</span>
                     </li>
                     <li class="mb-3">
                        <span class="fw-medium me-2">Role:</span>
                        <span>Nurse</span>
                     </li>
                     <li class="mb-3">
                        <span class="fw-medium me-2">Email:</span>
                        <span>vafgot@vultukir.org</span>
                     </li>
                     <li class="mb-3">
                        <span class="fw-medium me-2">Status:</span>
                        <span class="badge bg-label-success">Active</span>
                     </li>
                     
                     <li class="mb-3">
                        <span class="fw-medium me-2">Contact:</span>
                        <span>(123) 456-7890</span>
                     </li>
                     <li class="mb-3">
                        <span class="fw-medium me-2">Country:</span>
                        <span>Doha</span>
                     </li>
                     <li class="mb-3">
                     <span class="fw-medium me-2">EHSAN Club:</span>
                     <span>XXXXX</span>
                  </li>
                  </ul>
                  <div class="d-flex justify-content-center pt-3">
                     <a href="javascript:;" class="btn btn-primary me-3" data-bs-target="#editUser" data-bs-toggle="modal">Edit</a>
                     <a href="javascript:;" class="btn btn-label-danger suspend-user me-3">Deactivate</a>
                     <a href="javascript:;" class="btn btn-label-danger suspend-user">Delete</a>
                  </div>
               </div>
            </div>
         </div>
         <!-- /User Card -->
      </div>
      <!--/ User Sidebar -->
      <!-- User Content -->
      <div class="col-xl-8 col-lg-7 col-md-7 order-0 order-md-1">
         <!-- Project table -->
         <div class="card mb-4">
            <h5 class="card-header">User's Audit Log</h5>
            <div class="table-responsive mb-3">
               <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                  <div class="d-flex justify-content-between align-items-center flex-column flex-sm-row mx-4 row">
                     <div class="col-12 justify-content-end">
                        <div id="DataTables_Table_0_filter" class="dataTables_filter"><input type="search" class="form-control" placeholder="Search Logs" aria-controls="DataTables_Table_0"></div>
                     </div>
                  </div>
                  <table class="table datatable-project border-top dataTable no-footer dtr-column" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                     <thead>
                        <tr>
                           <th class="sorting sorting_desc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 162.875px;" aria-sort="descending" aria-label="Project: activate to sort column ascending">Activity</th>
                           <th class="text-nowrap" rowspan="1" colspan="1" style="width: 201.688px;" aria-label="Total Task">Module</th>
                           <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 191.641px;" aria-label="Progress: activate to sort column ascending">Date</th>
                           
                        </tr>
                     </thead>
                     <tbody>
                        <tr class="odd">
                           <td valign="top" colspan="5" class="dataTables_empty">Loading...</td>
                        </tr>
                     </tbody>
                  </table>
                  <div class="d-flex justify-content-between mx-4 row">
                     <div class="col-sm-12 col-md-6">
                        <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 0 to 0 of 0 entries</div>
                     </div>
                     <div class="col-sm-12 col-md-6">
                        <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                           <ul class="pagination">
                              <li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a aria-controls="DataTables_Table_0" aria-disabled="true" role="link" data-dt-idx="previous" tabindex="-1" class="page-link">Previous</a></li>
                              <li class="paginate_button page-item next disabled" id="DataTables_Table_0_next"><a aria-controls="DataTables_Table_0" aria-disabled="true" role="link" data-dt-idx="next" tabindex="-1" class="page-link">Next</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- /Project table -->
      </div>
      <!--/ User Content -->
   </div>
   <div class="modal fade" id="editUser" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-simple modal-edit-user">
         <div class="modal-content p-3 p-md-5">
            <div class="modal-body">
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               <div class="text-center mb-4">
                  <h3>Edit User Information</h3>
                  <p>Updating user details will receive a privacy audit.</p>
               </div>
               <form id="editUserForm" class="row g-3 fv-plugins-bootstrap5 fv-plugins-framework" onsubmit="return false" novalidate="novalidate">
                  <div class="col-12 col-md-6 fv-plugins-icon-container">
                     <label class="form-label" for="modalEditUserFirstName">First Name</label>
                     <input type="text" id="modalEditUserFirstName" name="modalEditUserFirstName" class="form-control" placeholder="John">
                     <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                  </div>
                  <div class="col-12 col-md-6 fv-plugins-icon-container">
                     <label class="form-label" for="modalEditUserLastName">Last Name</label>
                     <input type="text" id="modalEditUserLastName" name="modalEditUserLastName" class="form-control" placeholder="Doe">
                     <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                  </div>
                  <div class="col-12 col-md-6">
                     <label class="form-label" for="modalEditUserEmail">Email</label>
                     <input type="text" id="modalEditUserEmail" name="modalEditUserEmail" class="form-control" placeholder="example@domain.com">
                  </div>
                  <div class="col-12 col-md-6">
                     <label class="form-label" for="modalEditTaxID">QID</label>
                     <input type="text" id="modalEditTaxID" name="modalEditTaxID" class="form-control modal-edit-tax-id" placeholder="123 456 7890">
                  </div>
                  <div class="col-12 col-md-6">
                     <label class="form-label" for="modalEditUserPhone">Phone Number</label>
                     <div class="input-group input-group-merge">
                        <span class="input-group-text">+974</span>
                        <input type="text" id="modalEditUserPhone" name="modalEditUserPhone" class="form-control phone-number-mask" placeholder="202 555 0111">
                     </div>
                  </div>
                  <div class="col-12 col-md-6">
                     <label class="form-label" for="modalEditUserCountry">Country</label>
                     <div class="position-relative">
                        <select id="modalEditUserCountry" name="modalEditUserCountry" class="select2 form-select select2-hidden-accessible" data-allow-clear="true" data-select2-id="modalEditUserCountry" tabindex="-1" aria-hidden="true">
                           <option value="" data-select2-id="5">Select</option>
                           <option value="Australia">Australia</option>
                           <option value="Bangladesh">Bangladesh</option>
                           <option value="Belarus">Belarus</option>
                           <option value="Brazil">Brazil</option>
                           <option value="Canada">Canada</option>
                           <option value="China">China</option>
                           <option value="France">France</option>
                           <option value="Germany">Germany</option>
                           <option value="India">India</option>
                           <option value="Indonesia">Indonesia</option>
                           <option value="Israel">Israel</option>
                           <option value="Italy">Italy</option>
                           <option value="Japan">Japan</option>
                           <option value="Korea">Korea, Republic of</option>
                           <option value="Mexico">Mexico</option>
                           <option value="Philippines">Philippines</option>
                           <option value="Qatar">Qatar</option>
                           <option value="Russia">Russian Federation</option>
                           <option value="South Africa">South Africa</option>
                           <option value="Thailand">Thailand</option>
                           <option value="Turkey">Turkey</option>
                           <option value="Ukraine">Ukraine</option>
                           <option value="United Arab Emirates">United Arab Emirates</option>
                           <option value="United Kingdom">United Kingdom</option>
                           <option value="United States">United States</option>
                        </select>
                        <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="4" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-modalEditUserCountry-container"><span class="select2-selection__rendered" id="select2-modalEditUserCountry-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select value</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                     </div>
                  </div>
               </form>
            </div>
            
            <div class="modal-footer mt-12">
               <div class="col-12 d-flex justify-content-end">
                  <button type="submit" class="btn btn-primary">Update</button>
               </div>
            </div>
         </div>
      </div>
   </div>
@endsection
