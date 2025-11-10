    <?php

    use CodeIgniter\Router\RouteCollection;

    /**
     * @var RouteCollection $routes
     */
    // $routes->get('/', 'Home::index');

    $routes->get('/', 'ProductController::main');


    $routes->get('/products', 'ProductController::index');


    $routes->get('/products/create', 'ProductController::create');

    $routes->post('/products/store', 'ProductController::store');

    $routes->get('/products/view/(:num)', 'ProductController::view/$1');

    $routes->get('/products/edit/(:num)', 'ProductController::edit/$1');

    $routes->post('/products/update/(:num)', 'ProductController::update/$1');

    $routes->get('/products/delete/(:num)', 'ProductController::delete/$1');


    $routes->get('/login', 'Auth::login');
    $routes->post('/auth/loginSubmit', 'Auth::loginSubmit');
    $routes->get('/logout', 'Auth::logout');
