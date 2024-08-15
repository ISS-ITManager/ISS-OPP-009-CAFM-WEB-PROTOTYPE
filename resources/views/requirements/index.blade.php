@extends('layouts.master')

@section('page_name', $page['name'])

@section('page_title', $page['title'])

@section('page_script') 
    <script>
        $(function(){
            $("#dt_requirements").dataTable({pageLength: 5});
            $("#dt_documents").dataTable({pageLength: 5});
            $("#dt_workorders").dataTable({pageLength: 5});

            
        })

        
    </script>
@endsection

@section('page_css')

@endsection

@section('content')
    @include('floors.create')
    @include('properties.create_assets')
    <a href="#" class="btn btn-primary mb-3">
        <i class=" fa fa-plus me-2"></i> Add Requirements
    </a>
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered" id="dt_requirements">
                <thead>
                    <tr>
                        <th>Category</th>
                        <th>Requirements</th>
                        <th>Max File Size</th>
                        <th>Max File Count</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                       <td> Category A</td>
                       <td> Condition Before</td>
                       <td> 5 mb</td>
                       <td>5</td>
                       <td>
                        <div class="d-inline-block text-nowrap">
                            <button class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded me-2"></i></button>
                            <div class="dropdown-menu dropdown-menu-end m-0">
                                <a href="#" class="dropdown-item"><i class="bx bx-folder"></i> View</a>
                                <a href="#" class="dropdown-item"><i class="bx bx-edit"></i> Edit</a>
                                <a href="#" class="dropdown-item"><i class="bx bx-trash"></i> Delete</a>
                            </div>
                        </div>
                       </td>
                    </tr>
                    <tr>
                        <td> Category A</td>
                        <td> Condition After</td>
                        <td> 5 mb</td>
                        <td>5</td>
                        <td>
                         <div class="d-inline-block text-nowrap">
                             <button class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded me-2"></i></button>
                             <div class="dropdown-menu dropdown-menu-end m-0">
                                 <a href="#" class="dropdown-item"><i class="bx bx-folder"></i> View</a>
                                 <a href="#" class="dropdown-item"><i class="bx bx-edit"></i> Edit</a>
                                 <a href="#" class="dropdown-item"><i class="bx bx-trash"></i> Delete</a>
                             </div>
                         </div>
                        </td>
                     </tr>
                     <tr>
                        <td> Category C</td>
                        <td> QID</td>
                        <td> 5 mb</td>
                        <td>2</td>
                        <td>
                         <div class="d-inline-block text-nowrap">
                             <button class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded me-2"></i></button>
                             <div class="dropdown-menu dropdown-menu-end m-0">
                                 <a href="#" class="dropdown-item"><i class="bx bx-folder"></i> View</a>
                                 <a href="#" class="dropdown-item"><i class="bx bx-edit"></i> Edit</a>
                                 <a href="#" class="dropdown-item"><i class="bx bx-trash"></i> Delete</a>
                             </div>
                         </div>
                        </td>
                     </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection
