<?php

use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/upload-image', function () {
    return view('upload');
});

Route::post('/upload-image', function (Request $request) {

    $group_name = $request->input('image_name');
    $url = $request->input('image_url');
    $state = $request->input('state');

    $group = Group::where('name', $group_name)->where('state', $state)->first();

    if ($group) {

        return view('upload');
    }
    
    $newGroup = new Group();
    $newGroup->name = $group_name;
    $newGroup->state = $state;
    $newGroup->save();
    
    $newGroup->addMediaFromUrl($url)->toMediaCollection('group_images');
    
    return view('upload');
});

Route::get('/groups', function () {
    $groups = Group::latest()->paginate(500);
    return view('groups.index', compact('groups'));
});
