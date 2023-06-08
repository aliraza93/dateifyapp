<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sanctum.csrf-cookie',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/health-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.healthCheck',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/execute-solution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.executeSolution',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/update-config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.updateConfig',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/broadcasting/auth' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::R1O74ZMfcWTkeSTo',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OdHy9BgpE7K1bvUE',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/register-otp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iB3U8DecaB6vpzt4',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/validate-register-otp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OeegxqSwTy32P78W',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/validate-username' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::F4KBY2qujXqFwlEQ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZFtdC4OC9t5aj56P',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::J7t0hkd1zYDGJjHC',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/validate-login-otp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dQkxAgafQKPCedtW',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WHlazuoNAWygsX3R',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/posts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IiSiQm1lXe3vDRAa',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/posts/my' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::536ceJWFDVruAHkf',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/posts/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::miE9f6wmk4M4osqR',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/posts/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DUKLLggpYdt0we3r',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/posts/react' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BLwrHMGo9JrZsuw6',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/posts/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kgDgh96ZpHO6KTzA',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/posts/report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pjXbWLQSQTqs37VA',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/posts/post' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::icR6srSW2aFeWija',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/posts/comments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UBGFvzUM3l0CDipC',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/posts/comments/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QW6Avh6CPilL8lsl',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/posts/comments/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4qm1nvaLM1wDq8hy',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/posts/comments/react' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MH7cvswFv806rSS0',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/posts/comments/report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WKArxXviUYQozWPv',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/posts/comments/comment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YOG4OdStfl0yVYOm',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/posts/comments/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::24roTvhYslQpe9Z0',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/groups' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nKrALIwYAAaeXL6W',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/groups/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Y4pSBECJ3ythzW5w',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/groups/add-participant' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pUZemkNdWIQQohuW',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/groups/leave' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZbaXW6JbWdJum78z',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/groups/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tEQp7HejzVLibBDD',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FSSDNp6kNulNGsFy',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::o1oPy3iYgHsLsy6M',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/update/notification-setting' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NG85xLrMGuU2EEHo',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/block' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::59nPHZN0g9ER1vja',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/unblock' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nUXeAkkcXsrDrgIb',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/blocked-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZXwGOEFNjzvnVslw',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/delete-account' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZcntMxO9QCTOwZIo',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/deactivate-account' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HuCnbYK5YchqaHw1',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/device-token' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::W0vC7Wqyxx4JbL65',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/notifications' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qq180h9TM5JgOxrb',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/delete-notification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RAkenOQHNcOsDYPC',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/read-notification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5WskGJz9y0nJmoEn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user/read-notifications' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HgKWXBW5arrn7Qjk',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/support/contact-us' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::v9CxS5kQjSSiuMy6',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DUH32FXMaGqF2dTa',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/api/(?|v1/test\\-push\\-notification/([^/]++)(*:51)|(.*)(*:62)))/?$}sDu',
    ),
    3 => 
    array (
      51 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fsDmk9RwqvWI5civ',
          ),
          1 => 
          array (
            0 => 'user_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      62 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ngNk0CIINPtz76bw',
          ),
          1 => 
          array (
            0 => 'fallbackPlaceholder',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'sanctum.csrf-cookie' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'sanctum.csrf-cookie',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.healthCheck' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/health-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController',
        'as' => 'ignition.healthCheck',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.executeSolution' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/execute-solution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController',
        'as' => 'ignition.executeSolution',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.updateConfig' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/update-config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController',
        'as' => 'ignition.updateConfig',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::R1O74ZMfcWTkeSTo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'broadcasting/auth',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\Illuminate\\Broadcasting\\BroadcastController@authenticate',
        'controller' => '\\Illuminate\\Broadcasting\\BroadcastController@authenticate',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken',
        ),
        'as' => 'generated::R1O74ZMfcWTkeSTo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OdHy9BgpE7K1bvUE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000005d10000000000000000";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::OdHy9BgpE7K1bvUE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ngNk0CIINPtz76bw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/{fallbackPlaceholder}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\ApiController@fallbackResponse',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\ApiController@fallbackResponse',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::ngNk0CIINPtz76bw',
      ),
      'fallback' => true,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'fallbackPlaceholder' => '.*',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fsDmk9RwqvWI5civ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/test-push-notification/{user_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:13693:"function ($user_id) {
        $user = \\App\\Models\\User::find($user_id);
        $firebaseToken = \\App\\Models\\User::whereNotNull(\'device_token\')->where(\'id\', $user->id)->pluck(\'device_token\')->all();
        $SERVER_API_KEY = \'AAAA3552Pik:APA91bEY34MscdqW8DRkjVrTU3auVwTnfbzBWDjWrKpUVAAEGmsLCsops6kCitbaIF3_6ypo_mph8HXKdIuGkDQm5B8Mr1ySb3oSi8eEbjjLJq53PqRdCndT6RvL7qAieOOHm1pLMMLL\';

        $user = \\App\\Models\\User::where(\'id\', \\auth()->id())
            ->first();
        $sound = \'notification.wav\';
        $image = \'data:image/jpeg;base64,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\';
        $title = \'Dateify\';
        $body = \'Received push notification successfully!\';
        $data = [
            "registration_ids" => $firebaseToken,
            "image" => $image,
            "icon" => $image,
            "notification" => [
                "title" => $title,
                "body" => $body,
                "badge" => 20,
                "sound" => $sound,
                "soundName" => $sound,
                "image" => $image,
                "icon" => $image,
            ],
            "apns" => [
                "payload" => [
                    "aps" => [
                        "mutable-content" => 1,
                        "image" => $image,
                        "icon" => $image,
                    ],
                    "image" => $image,
                    "icon" => $image,
                ],
                "fcm_options" => [
                    "image" => $image,
                    "icon" => $image,
                ]
            ],
            "android" => [
                "notification" => [
                    "image" => $image,
                    "icon" => $image,
                ]
            ],

            "data" => [
                \'type\' => \'react-comment\',
                \'user\' => $user,
                "image" => $image,
                "icon" => $image,

            ],
        ];

        $dataString = \\json_encode($data);
        $headers = [
            \'Authorization: key=\' . $SERVER_API_KEY,
            \'Content-Type: application/json\',
        ];
        $ch = \\curl_init();
        \\curl_setopt($ch, CURLOPT_URL, \'https://fcm.googleapis.com/fcm/send\');
        \\curl_setopt($ch, CURLOPT_POST, true);
        \\curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        \\curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        \\curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        \\curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);
        $response = \\curl_exec($ch);
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000005d40000000000000000";}}',
        'namespace' => 'Api\\V1',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::fsDmk9RwqvWI5civ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iB3U8DecaB6vpzt4' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/register-otp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\AuthController@registerOtp',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\AuthController@registerOtp',
        'namespace' => 'Api\\V1',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::iB3U8DecaB6vpzt4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OeegxqSwTy32P78W' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/validate-register-otp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\AuthController@validateRegisterOtp',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\AuthController@validateRegisterOtp',
        'namespace' => 'Api\\V1',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::OeegxqSwTy32P78W',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::F4KBY2qujXqFwlEQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/validate-username',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\AuthController@validateUsername',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\AuthController@validateUsername',
        'namespace' => 'Api\\V1',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::F4KBY2qujXqFwlEQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZFtdC4OC9t5aj56P' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\AuthController@register',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\AuthController@register',
        'namespace' => 'Api\\V1',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::ZFtdC4OC9t5aj56P',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::J7t0hkd1zYDGJjHC' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\AuthController@login',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\AuthController@login',
        'namespace' => 'Api\\V1',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::J7t0hkd1zYDGJjHC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dQkxAgafQKPCedtW' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/validate-login-otp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\AuthController@validateLoginOtp',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\AuthController@validateLoginOtp',
        'namespace' => 'Api\\V1',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::dQkxAgafQKPCedtW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WHlazuoNAWygsX3R' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\AuthController@logout',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\AuthController@logout',
        'namespace' => 'Api\\V1',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::WHlazuoNAWygsX3R',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IiSiQm1lXe3vDRAa' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/posts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\PostController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\PostController@index',
        'namespace' => 'Api\\V1',
        'prefix' => 'api/v1/posts',
        'where' => 
        array (
        ),
        'as' => 'generated::IiSiQm1lXe3vDRAa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::536ceJWFDVruAHkf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/posts/my',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\PostController@all_posts_list',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\PostController@all_posts_list',
        'namespace' => 'Api\\V1',
        'prefix' => 'api/v1/posts',
        'where' => 
        array (
        ),
        'as' => 'generated::536ceJWFDVruAHkf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::miE9f6wmk4M4osqR' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/posts/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\PostController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\PostController@store',
        'namespace' => 'Api\\V1',
        'prefix' => 'api/v1/posts',
        'where' => 
        array (
        ),
        'as' => 'generated::miE9f6wmk4M4osqR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DUKLLggpYdt0we3r' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/posts/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\PostController@list',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\PostController@list',
        'namespace' => 'Api\\V1',
        'prefix' => 'api/v1/posts',
        'where' => 
        array (
        ),
        'as' => 'generated::DUKLLggpYdt0we3r',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BLwrHMGo9JrZsuw6' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/posts/react',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\PostLikesController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\PostLikesController@store',
        'namespace' => 'Api\\V1',
        'prefix' => 'api/v1/posts',
        'where' => 
        array (
        ),
        'as' => 'generated::BLwrHMGo9JrZsuw6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kgDgh96ZpHO6KTzA' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/posts/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\PostController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\PostController@destroy',
        'namespace' => 'Api\\V1',
        'prefix' => 'api/v1/posts',
        'where' => 
        array (
        ),
        'as' => 'generated::kgDgh96ZpHO6KTzA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pjXbWLQSQTqs37VA' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/posts/report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\PostController@report',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\PostController@report',
        'namespace' => 'Api\\V1',
        'prefix' => 'api/v1/posts',
        'where' => 
        array (
        ),
        'as' => 'generated::pjXbWLQSQTqs37VA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::icR6srSW2aFeWija' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/posts/post',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\PostController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\PostController@show',
        'namespace' => 'Api\\V1',
        'prefix' => 'api/v1/posts',
        'where' => 
        array (
        ),
        'as' => 'generated::icR6srSW2aFeWija',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UBGFvzUM3l0CDipC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/posts/comments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CommentController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CommentController@index',
        'namespace' => 'Api\\V1',
        'prefix' => 'api/v1/posts/comments',
        'where' => 
        array (
        ),
        'as' => 'generated::UBGFvzUM3l0CDipC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QW6Avh6CPilL8lsl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/posts/comments/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CommentController@all_comments_list',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CommentController@all_comments_list',
        'namespace' => 'Api\\V1',
        'prefix' => 'api/v1/posts/comments',
        'where' => 
        array (
        ),
        'as' => 'generated::QW6Avh6CPilL8lsl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4qm1nvaLM1wDq8hy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/posts/comments/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CommentController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CommentController@store',
        'namespace' => 'Api\\V1',
        'prefix' => 'api/v1/posts/comments',
        'where' => 
        array (
        ),
        'as' => 'generated::4qm1nvaLM1wDq8hy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MH7cvswFv806rSS0' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/posts/comments/react',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CommentController@react',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CommentController@react',
        'namespace' => 'Api\\V1',
        'prefix' => 'api/v1/posts/comments',
        'where' => 
        array (
        ),
        'as' => 'generated::MH7cvswFv806rSS0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WKArxXviUYQozWPv' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/posts/comments/report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CommentController@report',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CommentController@report',
        'namespace' => 'Api\\V1',
        'prefix' => 'api/v1/posts/comments',
        'where' => 
        array (
        ),
        'as' => 'generated::WKArxXviUYQozWPv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YOG4OdStfl0yVYOm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/posts/comments/comment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CommentController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CommentController@show',
        'namespace' => 'Api\\V1',
        'prefix' => 'api/v1/posts/comments',
        'where' => 
        array (
        ),
        'as' => 'generated::YOG4OdStfl0yVYOm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::24roTvhYslQpe9Z0' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/posts/comments/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\CommentController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\CommentController@destroy',
        'namespace' => 'Api\\V1',
        'prefix' => 'api/v1/posts/comments',
        'where' => 
        array (
        ),
        'as' => 'generated::24roTvhYslQpe9Z0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nKrALIwYAAaeXL6W' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/groups',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\GroupController@list',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\GroupController@list',
        'namespace' => 'Api\\V1',
        'prefix' => 'api/v1/groups',
        'where' => 
        array (
        ),
        'as' => 'generated::nKrALIwYAAaeXL6W',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Y4pSBECJ3ythzW5w' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/groups/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\GroupController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\GroupController@store',
        'namespace' => 'Api\\V1',
        'prefix' => 'api/v1/groups',
        'where' => 
        array (
        ),
        'as' => 'generated::Y4pSBECJ3ythzW5w',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pUZemkNdWIQQohuW' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/groups/add-participant',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\GroupController@addParticipant',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\GroupController@addParticipant',
        'namespace' => 'Api\\V1',
        'prefix' => 'api/v1/groups',
        'where' => 
        array (
        ),
        'as' => 'generated::pUZemkNdWIQQohuW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZbaXW6JbWdJum78z' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/groups/leave',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\GroupController@leave',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\GroupController@leave',
        'namespace' => 'Api\\V1',
        'prefix' => 'api/v1/groups',
        'where' => 
        array (
        ),
        'as' => 'generated::ZbaXW6JbWdJum78z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tEQp7HejzVLibBDD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/groups/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\GroupController@search',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\GroupController@search',
        'namespace' => 'Api\\V1',
        'prefix' => 'api/v1/groups',
        'where' => 
        array (
        ),
        'as' => 'generated::tEQp7HejzVLibBDD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FSSDNp6kNulNGsFy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\UserController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\UserController@show',
        'namespace' => 'Api\\V1',
        'prefix' => 'api/v1/user',
        'where' => 
        array (
        ),
        'as' => 'generated::FSSDNp6kNulNGsFy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::o1oPy3iYgHsLsy6M' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\UserController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\UserController@update',
        'namespace' => 'Api\\V1',
        'prefix' => 'api/v1/user',
        'where' => 
        array (
        ),
        'as' => 'generated::o1oPy3iYgHsLsy6M',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NG85xLrMGuU2EEHo' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/update/notification-setting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\UserController@updateNotificationSettings',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\UserController@updateNotificationSettings',
        'namespace' => 'Api\\V1',
        'prefix' => 'api/v1/user',
        'where' => 
        array (
        ),
        'as' => 'generated::NG85xLrMGuU2EEHo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::59nPHZN0g9ER1vja' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/block',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\UserController@block',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\UserController@block',
        'namespace' => 'Api\\V1',
        'prefix' => 'api/v1/user',
        'where' => 
        array (
        ),
        'as' => 'generated::59nPHZN0g9ER1vja',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nUXeAkkcXsrDrgIb' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/unblock',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\UserController@unblock',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\UserController@unblock',
        'namespace' => 'Api\\V1',
        'prefix' => 'api/v1/user',
        'where' => 
        array (
        ),
        'as' => 'generated::nUXeAkkcXsrDrgIb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZXwGOEFNjzvnVslw' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/blocked-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\UserController@myBlockedList',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\UserController@myBlockedList',
        'namespace' => 'Api\\V1',
        'prefix' => 'api/v1/user',
        'where' => 
        array (
        ),
        'as' => 'generated::ZXwGOEFNjzvnVslw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZcntMxO9QCTOwZIo' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/user/delete-account',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\UserController@deleteAccount',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\UserController@deleteAccount',
        'namespace' => 'Api\\V1',
        'prefix' => 'api/v1/user',
        'where' => 
        array (
        ),
        'as' => 'generated::ZcntMxO9QCTOwZIo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HuCnbYK5YchqaHw1' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/deactivate-account',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\UserController@deactivateAccount',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\UserController@deactivateAccount',
        'namespace' => 'Api\\V1',
        'prefix' => 'api/v1/user',
        'where' => 
        array (
        ),
        'as' => 'generated::HuCnbYK5YchqaHw1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::W0vC7Wqyxx4JbL65' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/device-token',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\UserController@updateDeviceToken',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\UserController@updateDeviceToken',
        'namespace' => 'Api\\V1',
        'prefix' => 'api/v1/user',
        'where' => 
        array (
        ),
        'as' => 'generated::W0vC7Wqyxx4JbL65',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qq180h9TM5JgOxrb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user/notifications',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\NotificationController@notifications',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\NotificationController@notifications',
        'namespace' => 'Api\\V1',
        'prefix' => 'api/v1/user',
        'where' => 
        array (
        ),
        'as' => 'generated::qq180h9TM5JgOxrb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RAkenOQHNcOsDYPC' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/user/delete-notification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\NotificationController@deleteNotification',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\NotificationController@deleteNotification',
        'namespace' => 'Api\\V1',
        'prefix' => 'api/v1/user',
        'where' => 
        array (
        ),
        'as' => 'generated::RAkenOQHNcOsDYPC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5WskGJz9y0nJmoEn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/read-notification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\NotificationController@readNotification',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\NotificationController@readNotification',
        'namespace' => 'Api\\V1',
        'prefix' => 'api/v1/user',
        'where' => 
        array (
        ),
        'as' => 'generated::5WskGJz9y0nJmoEn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HgKWXBW5arrn7Qjk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user/read-notifications',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\NotificationController@readNotifications',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\NotificationController@readNotifications',
        'namespace' => 'Api\\V1',
        'prefix' => 'api/v1/user',
        'where' => 
        array (
        ),
        'as' => 'generated::HgKWXBW5arrn7Qjk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::v9CxS5kQjSSiuMy6' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/support/contact-us',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\ContactUsController@contactus',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\ContactUsController@contactus',
        'namespace' => 'Api\\V1',
        'prefix' => 'api/v1/support',
        'where' => 
        array (
        ),
        'as' => 'generated::v9CxS5kQjSSiuMy6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DUH32FXMaGqF2dTa' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:44:"function () {
    return \\view(\'welcome\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000005dc0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::DUH32FXMaGqF2dTa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
