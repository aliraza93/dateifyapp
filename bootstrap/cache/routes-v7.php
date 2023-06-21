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
            '_route' => 'generated::K1D9Q3qRMRptFff4',
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
            '_route' => 'generated::Lx6jB0ulekJLO7Mi',
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
      '/api/v1/test-push-notification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GguNC3U8VyKH0Xso',
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
            '_route' => 'generated::bbT23PMG9v9ZOVb6',
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
            '_route' => 'generated::2AFphkoFOXMLW9D5',
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
            '_route' => 'generated::Ue2ezAVNUwvfewtl',
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
            '_route' => 'generated::JTCWeubigonTY5Z3',
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
            '_route' => 'generated::fRirLdJh8jep1BEp',
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
            '_route' => 'generated::CuAnVP4x7UOtU06i',
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
      '/api/v1/verification/upload-image' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qkgbsRUCxuDHei6c',
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
            '_route' => 'generated::BtBh0kCDQvnGAlHD',
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
            '_route' => 'generated::IzZ1ffzOcg7gsoVH',
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
            '_route' => 'generated::Urz1MLn70j6LLJzD',
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
            '_route' => 'generated::TdG1dLbg9e2C15Vs',
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
            '_route' => 'generated::NeIaPp8cnKQomHao',
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
            '_route' => 'generated::2ZyJhd13jOXKaBYa',
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
            '_route' => 'generated::luBO2xNQOfYUJFsh',
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
            '_route' => 'generated::HPJsyUF5DHVSj9pS',
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
            '_route' => 'generated::IGssi679C3uH4jF2',
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
            '_route' => 'generated::zTg2WkpPzItMJSja',
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
            '_route' => 'generated::Vcjv1ORh9RNIjpf0',
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
            '_route' => 'generated::3UpC2ij01I3g9L3c',
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
            '_route' => 'generated::Gb4kdH38iDZDasSu',
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
            '_route' => 'generated::5ocIf8kkYTmMZul1',
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
            '_route' => 'generated::Y7H5imfoOPlRxmsO',
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
            '_route' => 'generated::Z1MkFifZmlZWdOtq',
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
            '_route' => 'generated::NTFpXntpTv88sQxi',
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
            '_route' => 'generated::syUucLoivalW6xhE',
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
            '_route' => 'generated::1QNNgLo63d3bc4o4',
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
            '_route' => 'generated::vEJmp7inAhPSE3gH',
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
            '_route' => 'generated::GT5Eg7LIGFN0N9RU',
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
      '/api/v1/groups/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2OTZULG9W2q3LQuV',
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
      '/api/v1/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::geyy4JIA0J1Hv1g2',
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
            '_route' => 'generated::AmAMTc0f9GNq7i3E',
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
            '_route' => 'generated::3uRFPxQOeGMlQJSo',
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
            '_route' => 'generated::jbkS6k9cPELvDl9V',
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
            '_route' => 'generated::F1v5NOGTX5m6MkFT',
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
            '_route' => 'generated::YDUE3rYlMuK8SoF1',
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
            '_route' => 'generated::rsdvwKTS4I0pKPav',
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
            '_route' => 'generated::fGQHVMv8aYd97f3d',
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
            '_route' => 'generated::Euwf6fRTc42XPiR2',
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
            '_route' => 'generated::9oSkbtjfh5ZoA1O1',
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
            '_route' => 'generated::BW2PPPaBpasDCWzo',
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
            '_route' => 'generated::9vGIBSBREQ9Z6WAB',
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
            '_route' => 'generated::IGo4M2U1kOP1yCpK',
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
            '_route' => 'generated::dyRMd5UjtZkgQCQQ',
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
            '_route' => 'generated::gjHRSeixgZtkQQO3',
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
      '/upload-image' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PiY7ZhCyIKSG6jsL',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OAtgy7NfHOWAEAB2',
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
      '/groups' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2fXVMWqVrIE6poLE',
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
      0 => '{^(?|/api/(.*)(*:16))/?$}sDu',
    ),
    3 => 
    array (
      16 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AWi4Z2qP1lz0feUE',
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
    'generated::K1D9Q3qRMRptFff4' => 
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
        'as' => 'generated::K1D9Q3qRMRptFff4',
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
    'generated::Lx6jB0ulekJLO7Mi' => 
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
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000005800000000000000000";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Lx6jB0ulekJLO7Mi',
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
    'generated::AWi4Z2qP1lz0feUE' => 
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
        'as' => 'generated::AWi4Z2qP1lz0feUE',
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
    'generated::GguNC3U8VyKH0Xso' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/test-push-notification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\NotificationController@testPushNotification',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\NotificationController@testPushNotification',
        'namespace' => 'Api\\V1',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::GguNC3U8VyKH0Xso',
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
    'generated::bbT23PMG9v9ZOVb6' => 
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
        'as' => 'generated::bbT23PMG9v9ZOVb6',
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
    'generated::2AFphkoFOXMLW9D5' => 
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
        'as' => 'generated::2AFphkoFOXMLW9D5',
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
    'generated::Ue2ezAVNUwvfewtl' => 
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
        'as' => 'generated::Ue2ezAVNUwvfewtl',
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
    'generated::JTCWeubigonTY5Z3' => 
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
        'as' => 'generated::JTCWeubigonTY5Z3',
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
    'generated::fRirLdJh8jep1BEp' => 
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
        'as' => 'generated::fRirLdJh8jep1BEp',
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
    'generated::CuAnVP4x7UOtU06i' => 
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
        'as' => 'generated::CuAnVP4x7UOtU06i',
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
    'generated::qkgbsRUCxuDHei6c' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/verification/upload-image',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\VerificationController@verificationImage',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\VerificationController@verificationImage',
        'namespace' => 'Api\\V1',
        'prefix' => 'api/v1/verification',
        'where' => 
        array (
        ),
        'as' => 'generated::qkgbsRUCxuDHei6c',
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
    'generated::BtBh0kCDQvnGAlHD' => 
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
        'as' => 'generated::BtBh0kCDQvnGAlHD',
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
    'generated::IzZ1ffzOcg7gsoVH' => 
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
        'as' => 'generated::IzZ1ffzOcg7gsoVH',
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
    'generated::Urz1MLn70j6LLJzD' => 
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
        'as' => 'generated::Urz1MLn70j6LLJzD',
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
    'generated::TdG1dLbg9e2C15Vs' => 
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
        'as' => 'generated::TdG1dLbg9e2C15Vs',
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
    'generated::NeIaPp8cnKQomHao' => 
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
        'as' => 'generated::NeIaPp8cnKQomHao',
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
    'generated::2ZyJhd13jOXKaBYa' => 
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
        'as' => 'generated::2ZyJhd13jOXKaBYa',
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
    'generated::luBO2xNQOfYUJFsh' => 
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
        'as' => 'generated::luBO2xNQOfYUJFsh',
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
    'generated::HPJsyUF5DHVSj9pS' => 
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
        'as' => 'generated::HPJsyUF5DHVSj9pS',
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
    'generated::IGssi679C3uH4jF2' => 
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
        'as' => 'generated::IGssi679C3uH4jF2',
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
    'generated::zTg2WkpPzItMJSja' => 
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
        'as' => 'generated::zTg2WkpPzItMJSja',
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
    'generated::Vcjv1ORh9RNIjpf0' => 
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
        'as' => 'generated::Vcjv1ORh9RNIjpf0',
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
    'generated::3UpC2ij01I3g9L3c' => 
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
        'as' => 'generated::3UpC2ij01I3g9L3c',
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
    'generated::Gb4kdH38iDZDasSu' => 
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
        'as' => 'generated::Gb4kdH38iDZDasSu',
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
    'generated::5ocIf8kkYTmMZul1' => 
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
        'as' => 'generated::5ocIf8kkYTmMZul1',
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
    'generated::Y7H5imfoOPlRxmsO' => 
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
        'as' => 'generated::Y7H5imfoOPlRxmsO',
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
    'generated::Z1MkFifZmlZWdOtq' => 
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
        'as' => 'generated::Z1MkFifZmlZWdOtq',
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
    'generated::NTFpXntpTv88sQxi' => 
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
        'as' => 'generated::NTFpXntpTv88sQxi',
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
    'generated::syUucLoivalW6xhE' => 
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
        'as' => 'generated::syUucLoivalW6xhE',
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
    'generated::1QNNgLo63d3bc4o4' => 
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
        'as' => 'generated::1QNNgLo63d3bc4o4',
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
    'generated::vEJmp7inAhPSE3gH' => 
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
        'as' => 'generated::vEJmp7inAhPSE3gH',
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
    'generated::GT5Eg7LIGFN0N9RU' => 
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
        'as' => 'generated::GT5Eg7LIGFN0N9RU',
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
    'generated::2OTZULG9W2q3LQuV' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/groups/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\GroupController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\GroupController@destroy',
        'namespace' => 'Api\\V1',
        'prefix' => 'api/v1/groups',
        'where' => 
        array (
        ),
        'as' => 'generated::2OTZULG9W2q3LQuV',
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
    'generated::geyy4JIA0J1Hv1g2' => 
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
        'as' => 'generated::geyy4JIA0J1Hv1g2',
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
    'generated::AmAMTc0f9GNq7i3E' => 
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
        'as' => 'generated::AmAMTc0f9GNq7i3E',
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
    'generated::3uRFPxQOeGMlQJSo' => 
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
        'as' => 'generated::3uRFPxQOeGMlQJSo',
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
    'generated::jbkS6k9cPELvDl9V' => 
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
        'as' => 'generated::jbkS6k9cPELvDl9V',
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
    'generated::F1v5NOGTX5m6MkFT' => 
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
        'as' => 'generated::F1v5NOGTX5m6MkFT',
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
    'generated::YDUE3rYlMuK8SoF1' => 
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
        'as' => 'generated::YDUE3rYlMuK8SoF1',
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
    'generated::rsdvwKTS4I0pKPav' => 
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
        'as' => 'generated::rsdvwKTS4I0pKPav',
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
    'generated::fGQHVMv8aYd97f3d' => 
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
        'as' => 'generated::fGQHVMv8aYd97f3d',
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
    'generated::Euwf6fRTc42XPiR2' => 
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
        'as' => 'generated::Euwf6fRTc42XPiR2',
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
    'generated::9oSkbtjfh5ZoA1O1' => 
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
        'as' => 'generated::9oSkbtjfh5ZoA1O1',
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
    'generated::BW2PPPaBpasDCWzo' => 
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
        'as' => 'generated::BW2PPPaBpasDCWzo',
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
    'generated::9vGIBSBREQ9Z6WAB' => 
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
        'as' => 'generated::9vGIBSBREQ9Z6WAB',
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
    'generated::IGo4M2U1kOP1yCpK' => 
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
        'as' => 'generated::IGo4M2U1kOP1yCpK',
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
    'generated::dyRMd5UjtZkgQCQQ' => 
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
        'as' => 'generated::dyRMd5UjtZkgQCQQ',
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
    'generated::gjHRSeixgZtkQQO3' => 
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
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000058a0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::gjHRSeixgZtkQQO3',
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
    'generated::PiY7ZhCyIKSG6jsL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'upload-image',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:43:"function () {
    return \\view(\'upload\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000058e0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::PiY7ZhCyIKSG6jsL',
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
    'generated::OAtgy7NfHOWAEAB2' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'upload-image',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:576:"function (\\Illuminate\\Http\\Request $request) {

    $group_name = $request->input(\'image_name\');
    $url = $request->input(\'image_url\');
    $state = $request->input(\'state\');

    $group = \\App\\Models\\Group::where(\'name\', $group_name)->where(\'state\', $state)->first();

    if ($group) {

        return \\view(\'upload\');
    }
    
    $newGroup = new \\App\\Models\\Group();
    $newGroup->name = $group_name;
    $newGroup->state = $state;
    $newGroup->save();
    
    $newGroup->addMediaFromUrl($url)->toMediaCollection(\'group_images\');
    
    return \\view(\'upload\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000005b30000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::OAtgy7NfHOWAEAB2',
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
    'generated::2fXVMWqVrIE6poLE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'groups',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:116:"function () {
    $groups = \\App\\Models\\Group::paginate(10);
    return \\view(\'groups.index\', \\compact(\'groups\'));
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000005b50000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::2fXVMWqVrIE6poLE',
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
