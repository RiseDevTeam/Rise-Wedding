<!-- // app/start/nav.php -->

View::composer('layouts.admin', function($view){

    // Prepare the menuitems here

    $mainmenus = DB::table('main_menus')->get();
    $subs = 'Prepare it here...';
    $productmenus = 'Prepare it'

    return $view->with('mainmenus', $mainmenus)
                ->with('submenus', $submenus)
                ->with('products', $products);

});