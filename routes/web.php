<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
// Route::get('/{view}', function ($view) {
//    // echo $view ;
//    // die();
//     return view($view);

// });

// Route::get('/{view}', function ($view) {
//     if (View::exists($view)) {
//         return view($view);
//     } else {
//         // If the view is not found, redirect to a specific route (e.g., "link-not-found") or display a custom "link-not-found" view.
//         // You can choose to redirect to another route using the redirect() function:
//         // return redirect('link-not-found');
//         // Or display a custom view for "link-not-found":
//         // return view('custom.link-not-found');

//         // For simplicity, let's assume you want to redirect to the "link-not-found" route.
//         return redirect('link-not-found');
//     }
// });

Route::get('/{view}', function ($view) {
    // Clean the view parameter to remove any potential multiple forward slashes at the beginning or end.
    $view = trim($view, '/');

    // Replace any remaining forward slashes with dots to make it a valid view name.
    $view = str_replace('/', '.', $view);

    if (View::exists($view)) {
        return view($view);
    } else {
        // If the view is not found, redirect to a specific route (e.g., "link-not-found") or display a custom "link-not-found" view.
        // You can choose to redirect to another route using the redirect() function:
        // return redirect('link-not-found');
        // Or display a custom view for "link-not-found":
        // return view('custom.link-not-found');

        // For simplicity, let's assume you want to redirect to the "link-not-found" route.
        return redirect('link-not-found');
    }
})->where('view', '.*'); 