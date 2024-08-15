@extends('layouts.master')

@section('page_name', $page['name'])

@section('page_title', $page['title'])

@section('page_script') 
   <script>
        $(function(){
            $("#dt_locations").dataTable();
        })
  
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

   <a href="#" class="mb-3 btn btn-primary">
      <i class="fa fa-plus me-2"></i> Create Location
   </a>
   <div class="card">
      <div class="card-header">
         <span class="fw-bold text-primary">List of Locations</span>
      </div>
      <div class="card-body">
         <table class="table table-bordered" id="dt_locations">
            <thead>
                  <tr>
                     <th>Location</th>
                     <th>Group Name</th>
                     <th>Action</th>
                  </tr>
            </thead>
            <tbody>
                  <tr>
                     <td>
                        <span class="fi fi-gb rounded-pill fis me-2"></span> United Kingdom
                     </td>
                     <td>Nunnery</td>
                     <td class="text-center">
                        <a href="/locations/show" class="btn btn-label-primary btn-sm">
                              <i class="bx bx-folder me-2"></i> View
                        </a>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <span class="fi fi-qa rounded-pill fis me-2"></span> Qatar
                     </td>
                     <td>Schools</td>
                     <td class="text-center">
                        <a href="/locations/show" class="btn btn-label-primary btn-sm">
                              <i class="bx bx-folder me-2"></i> View
                        </a>
                     </td>
                  </tr>
            </tbody>
         </table>
      </div>
   </div>
@endsection
