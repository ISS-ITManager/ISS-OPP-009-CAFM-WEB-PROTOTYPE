<?php

use App\Http\Controllers\CaregiverController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomecareController;
use App\Http\Controllers\InternalCareController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/properties', function () {
    $page = [
        'name'      =>  'Properties',
        'title'     =>  'Properties',
        'crumb'     =>  array(
            'Properties' => '/properties'
        )
    ];

    return view('properties.index', compact('page'));
});

Route::get('/properties/show', function () {
    $page = [
        'name'      =>  'Properties',
        'title'     =>  'Property Dashboard',
        'crumb'     =>  array(
            'Properties' => '/properties',
            'View' => '/show',
        )
    ];

    return view('properties.show', compact('page'));
});

Route::get('/floors', function () {
    $page = [
        'name'      =>  'Properties',
        'title'     =>  'View Floor',
        'crumb'     =>  array(
            'Properties' => '/properties/show',
            'Floor' => '/floors',
        )
    ];

    return view('floors.index', compact('page'));
});
Route::get('/zones', function () {
    $page = [
        'name'      =>  'Properties',
        'title'     =>  'View Zone',
        'crumb'     =>  array(
            'Properties' => '/properties/show',
            'Floor' => '/floors',
            'Zone' => '/zones',
        )
    ];

    return view('zone.index', compact('page'));
});
Route::get('/locations', function () {
    $page = [
        'name'      =>  'Locations',
        'title'     =>  'Locations',
        'crumb'     =>  array(
            'Locations' => '/locations'
        )
    ];

    return view('locations.index', compact('page'));
});

Route::get('/locations/show', function () {
    $page = [
        'name'      =>  'Locations',
        'title'     =>  'View Locations',
        'crumb'     =>  array(
            'Locations' => '/locations',
            'View' => '/locations/show'
        )
    ];

    return view('locations.show', compact('page'));
});


Route::get('/assets', function () {
    $page = [
        'name'      =>  'Assets',
        'title'     =>  'Asset Management',
        'crumb'     =>  array(
            'Assets' => '/assets',
        )
    ];
    return view('assets.index', compact('page'));
});


Route::get('/assets/show', function () {
    $page = [
        'name'      =>  'Assets',
        'title'     =>  'View assets',
        'crumb'     =>  array(
            'assets' => '/assets',
            'View' => '/assets/show'
        )
    ];

    return view('assets.show', compact('page'));
});

Route::get('/workorders', function () {
    $page = [
        'name'      =>  'Work Orders',
        'title'     =>  'Work Orders',
        'crumb'     =>  array(
            'Work Orders' => '/workorders',
        )
    ];

    return view('workorders.index', compact('page'));
});
Route::get('/workorders/show', function () {
    $page = [
        'name'      =>  'Work Orders',
        'title'     =>  'View Work Order',
        'crumb'     =>  array(
            'Work Orders' => '/workorders',
            'View' => '/workorders/show',
        )
    ];

    return view('workorders.show', compact('page'));
});
Route::get('/workorders/calendar', function () {
    $page = [
        'name'      =>  'Work Orders',
        'title'     =>  'Work Orders Calendar',
        'crumb'     =>  array(
            'Work Orders' => '/workorders',
            'Calendar' => '/workorders/calendar',
        )
    ];
    return view('workorders.calendar', compact('page'));
});

Route::get('/workorders/print', function () {
    $page = [
        'name'      =>  'Work Orders',
        'title'     =>  'Work Orders Print',
        'crumb'     =>  array(
            'Work Orders' => '/workorders',
            'Print' => '/workorders/print',
        )
    ];
    return view('workorders.print', compact('page'));
});

Route::get('/inventory-suppliers', function () {
    $page = [
        'name'      =>  'Inventory Suppliers',
        'title'     =>  'Inventory Suppliers',
        'crumb'     =>  array(
            'Inventory Suppliers' => '/inventories-suppliers',
        )
    ];
    return view('inventories.suppliers', compact('page'));
});

Route::get('/inventory-categories', function () {
    $page = [
        'name'      =>  'Inventory Categories',
        'title'     =>  'Inventory Categories',
        'crumb'     =>  array(
            'Inventory Categories' => '/inventories-categories',
        )
    ];
    return view('inventories.categories', compact('page'));
});

Route::get('/inventory-types', function () {
    $page = [
        'name'      =>  'Inventory Types',
        'title'     =>  'Inventory Types',
        'crumb'     =>  array(
            'Inventory Types' => '/inventories-types',
        )
    ];
    return view('inventories.types', compact('page'));
});

Route::get('/inventories', function () {
    $page = [
        'name'      =>  'Inventories',
        'title'     =>  'Inventories',
        'crumb'     =>  array(
            'Inventories' => '/inventories',
        )
    ];
    return view('inventories.index', compact('page'));
});

Route::get('/inventories/show', function () {
    $page = [
        'name'      =>  'Inventories',
        'title'     =>  'Inventories',
        'crumb'     =>  array(
            'Inventories' => '/inventories/Show',
        )
    ];
    return view('inventories.show', compact('page'));
});


Route::get('/service-providers', function () {
    $page = [
        'name'      =>  'Service Providers',
        'title'     =>  'Service Providers',
        'crumb'     =>  array(
            'Service Providers' => '/service-providers',
        )
    ];
    return view('service-providers.index', compact('page'));
});


Route::get('/spaces', function () {
    $page = [
        'name'      =>  'Space',
        'title'     =>  'Space',
        'crumb'     =>  array(
            'Spaces' => '/workorders',
        )
    ];

    return view('spaces.index', compact('page'));
});
Route::get('/rooms', function () {
    $page = [
        'name'      =>  'Rooms',
        'title'     =>  'Rooms',
        'crumb'     =>  array(
            'rooms' => '/rooms',
        )
    ];

    return view('rooms.index', compact('page'));
});
Route::get('/requirements', function () {
    $page = [
        'name'      =>  'Requirements',
        'title'     =>  'Requirements',
        'crumb'     =>  array(
            'requirements' => '/requirements',
        )
    ];

    return view('requirements.index', compact('page'));
});



Route::get('/technicians', function () {
    $page = [
        'name'      =>  'Technicians',
        'title'     =>  'Technicians',
        'crumb'     =>  array(
            'Technicians' => '/technicians',
        )
    ];

    return view('technicians.index', compact('page'));
});

Route::get('/reports', function () {
    $page = [
        'name'      =>  'Reports',
        'title'     =>  'Reports',
        'crumb'     =>  array(
            'Reports' => '/reports',
        )
    ];
    return view('reports.index', compact('page'));
});


Route::get('/dashboard', [DashboardController::class, 'admin']);
