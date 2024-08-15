@extends('layouts.master')

@section('page_name', $page['name'])

@section('page_title', $page['title'])

@section('page_script') 

@endsection

@section('page_css')
<style>
   #addNewUserForm .form-label {
       text-transform: capitalize !important
   }
</style>
@endsection

@section('content')
   <div class="row g-4 mb-4">
   
   <div class="col-sm-6 col-xl-3">
      <div class="card">
         <div class="card-body">
         <div class="d-flex align-items-start justify-content-between">
            <div class="content-left">
               <span>Active Users</span>
               <div class="d-flex align-items-end mt-2">
               <h4 class="mb-0 me-2">19,860</h4>
               </div>
            </div>
            <div class="avatar">
               <span class="avatar-initial rounded bg-label-success">
               <i class="bx bx-group bx-xs"></i>
               </span>
            </div>
         </div>
         </div>
      </div>
   </div>
   <div class="col-sm-6 col-xl-3">
      <div class="card">
         <div class="card-body">
            <div class="d-flex align-items-start justify-content-between">
            <div class="content-left">
               <span>Inactive Users</span>
               <div class="d-flex align-items-end mt-2">
                  <h4 class="mb-0 me-2">4,567</h4>
               </div>
            </div>
            <div class="avatar">
               <span class="avatar-initial rounded bg-label-danger">
                  <i class="bx bx-user-check bx-xs"></i>
               </span>
            </div>
            </div>
         </div>
      </div>
   </div>
   <div class="col-sm-6 col-xl-3">
      <div class="card">
         <div class="card-body">
         <div class="d-flex align-items-start justify-content-between">
            <div class="content-left">
               <span>Pending Users</span>
               <div class="d-flex align-items-end mt-2">
               <h4 class="mb-0 me-2">237</h4>
               </div>
            </div>
            <div class="avatar">
               <span class="avatar-initial rounded bg-label-warning">
               <i class="bx bx-user-voice bx-xs"></i>
               </span>
            </div>
         </div>
         </div>
      </div>
   </div>
   </div>
    <!-- Users List Table -->
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
                     <div id="DataTables_Table_0_filter" class="dataTables_filter mx-4"><label><input type="search" class="form-control" placeholder="Search User" aria-controls="DataTables_Table_0"></label></div>
                     <div class="dt-buttons btn-group flex-wrap">
                        
                        <button class="btn btn-secondary add-new btn-primary" tabindex="0" aria-controls="DataTables_Table_0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasAddUser"><span><i class="bx bx-plus bx-xs me-0 me-sm-2"></i><span class="d-none d-sm-inline-block">Add New User</span></span></button> 
                     </div>
                  </div>
               </div>
            </div>
            <table class="datatables-users table border-top dataTable no-footer dtr-column" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info" style="width: 1391px;">
               <thead>
                  <tr>
                     <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 334px;" aria-label="User: activate to sort column ascending" aria-sort="descending">User</th>
                     <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 101px;" aria-label="Status: activate to sort column ascending">QID</th>
                     <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 149px;" aria-label="Role: activate to sort column ascending">Role</th>
                     <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 101px;" aria-label="Status: activate to sort column ascending">Status</th>
                     
                     <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 175px;" aria-label="Actions">Actions</th>
                  </tr>
               </thead>
               <tbody>
                  
                  <tr class="odd">
                     <td class="sorting_1">
                        <div class="d-flex justify-content-start align-items-center user-name">
                           <div class="avatar-wrapper">
                              <div class="avatar avatar-sm me-4"><img src="/template/assets/img/avatars/1.png" alt="Avatar" class="rounded-circle"></div>
                           </div>
                           <div class="d-flex flex-column"><a href="#" class="text-heading text-truncate"><span class="fw-medium">Stu Delamaine</span></a><small>sdelamainek@who.int</small></div>
                        </div>
                     </td>
                     <td><span class="text-truncate d-flex align-items-center text-heading"><i class="bx bx-card text-primary me-2"></i>XXXXXX</span></td>
                     <td><span class="text-truncate d-flex align-items-center text-heading"><i class="bx bx-edit text-warning me-2"></i>Nurse</span></td>
                     <td><span class="badge bg-label-warning" text-capitalized="">Pending</span></td>
                     <td>
                        <div class="d-flex align-items-center">
                           
                           <a href="/users/slug" class="btn btn-icon"><i class="bx bx-show bx-xs"></i></a>
                           <a href="javascript:;" class="btn btn-icon" data-bs-target="#deleteUser" data-bs-toggle="modal"><i class="bx bx-trash bx-xs"></i></a>
                           <a href="javascript:;" class="btn btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded bx-xs"></i></a>
                           <div class="dropdown-menu dropdown-menu-end m-0"><a href="javascript:;" "="" class="dropdown-item">Edit</a><a href="javascript:;" class="dropdown-item">Deactivate</a></div>
                        </div>
                     </td>
                  </tr>
                  <tr class="even">
                     <td class="sorting_1">
                        <div class="d-flex justify-content-start align-items-center user-name">
                           <div class="avatar-wrapper">
                              <div class="avatar avatar-sm me-4"><img src="/template/assets/img/avatars/9.png" alt="Avatar" class="rounded-circle"></div>
                           </div>
                           <div class="d-flex flex-column"><a href="#" class="text-heading text-truncate"><span class="fw-medium">Skip Hebblethwaite</span></a><small>shebblethwaite10@arizona.edu</small></div>
                        </div>
                     </td>
                     <td><span class="text-truncate d-flex align-items-center text-heading"><i class="bx bx-card text-primary me-2"></i>XXXXXX</span></td>
                     <td><span class="text-truncate d-flex align-items-center text-heading"><i class="bx bx-desktop text-danger me-2"></i>Admin</span></td>
                     <td><span class="badge bg-label-danger" text-capitalized="">Inactive</span></td>
                     <td>
                        <div class="d-flex align-items-center">
                           <a href="/users/slug" class="btn btn-icon"><i class="bx bx-show bx-xs"></i></a>
                           <a href="javascript:;" class="btn btn-icon" data-bs-target="#deleteUser" data-bs-toggle="modal"><i class="bx bx-trash bx-xs"></i></a>
                           <a href="javascript:;" class="btn btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded bx-xs"></i></a>
                           <div class="dropdown-menu dropdown-menu-end m-0"><a href="javascript:;" "="" class="dropdown-item">Edit</a><a href="javascript:;" class="dropdown-item">Deactivate</a></div>
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
      <!-- Offcanvas to add new user -->
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasAddUser" aria-labelledby="offcanvasAddUserLabel">
         <div class="offcanvas-header border-bottom">
            <h5 id="offcanvasAddUserLabel" class="offcanvas-title">Add User</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
         </div>
         <div class="offcanvas-body mx-0 flex-grow-0 p-6 h-100">
            <form class="add-new-user pt-0 fv-plugins-bootstrap5 fv-plugins-framework" id="addNewUserForm" onsubmit="return false" novalidate="novalidate">
               <div class="mb-6 fv-plugins-icon-container">
                  <label class="form-label" for="add-user-fullname">First Name</label>
                  <input type="text" class="form-control" id="add-user-fullname" placeholder="John" name="userFullname" aria-label="John Doe">
                  <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
               </div>
               <div class="mb-6 fv-plugins-icon-container">
                  <label class="form-label" for="add-user-fullname">Last Name</label>
                  <input type="text" class="form-control" id="add-user-fullname" placeholder="Doe" name="userFullname" aria-label="John Doe">
                  <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
               </div>
               <div class="mb-6 fv-plugins-icon-container">
                  <label class="form-label" for="add-user-email">Email</label>
                  <input type="text" id="add-user-email" class="form-control" placeholder="john.doe@example.com" aria-label="john.doe@example.com" name="userEmail">
                  <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
               </div>
               <div class="mb-6">
                  <label class="form-label" for="add-user-contact">QID</label>
                  <input type="text" id="add-user-contact" class="form-control phone-mask" placeholder="XXXXXX" aria-label="qid" name="userContact">
               </div>
               <div class="mb-6 fv-plugins-icon-container">
                  <label class="form-label" for="add-user-email">Password</label>
                  <input type="text" id="add-user-email" class="form-control" placeholder="*************" aria-label="john.doe@example.com" name="userEmail">
                  <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
               </div>
               <div class="mb-6 fv-plugins-icon-container">
                  <label class="form-label" for="add-user-email">Confirm Password</label>
                  <input type="text" id="add-user-email" class="form-control" placeholder="*************" aria-label="john.doe@example.com" name="userEmail">
                  <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
               </div>
               <div class="mb-6">
                  <label class="form-label" for="add-user-contact">Contact</label>
                  <input type="text" id="add-user-contact" class="form-control phone-mask" placeholder="+974 988-44-11" aria-label="john.doe@example.com" name="userContact">
               </div>
               <div class="mb-6">
                  <label class="form-label" for="user-role">User Role</label>
                  <select id="user-role" class="form-select">
                     <option value="editor">Staff</option>
                     <option value="maintainer">Doctor</option>
                     <option value="author">Nurse</option>
                     <option value="admin">Admin</option>
                  </select>
               </div>
               <div class="mt-3">
                  <button type="submit" class="btn btn-primary data-submit w-30 float-end">Submit</button>
               </div>
               
            </form>
         </div>
      </div>
      <div class="modal fade" id="deleteUser" tabindex="-1" aria-hidden="true">
         <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
               <div class="modal-body">
                  <div class="text-center">
                     <h3>Delete User?</h3>
                     <p>Are you sure you want to delete this user?</p>
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
   </div>
@endsection
