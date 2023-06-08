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
            '_route' => 'generated::Jd77eWik3qAx70BX',
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
            '_route' => 'generated::58TjbRpMNtqQvSaB',
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
            '_route' => 'generated::jNdX1WCpBvDUnCNT',
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
            '_route' => 'generated::RKOGQG1NUoHqoWdk',
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
            '_route' => 'generated::hj3XLQpNH0DUG5zj',
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
            '_route' => 'generated::Kb5nS68qFqIqGGhR',
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
            '_route' => 'generated::gDsGISv2iErcy47E',
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
            '_route' => 'generated::AxfHtgUFFjAJUKgs',
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
            '_route' => 'generated::Aoy1UILNGeN0kZqI',
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
            '_route' => 'generated::MtU9HLIJSQZducbq',
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
            '_route' => 'generated::8Y0fpWHvWiURCEpd',
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
            '_route' => 'generated::lLcvrXdy7u3BLnmY',
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
            '_route' => 'generated::rvdIuvJVaKi3JX8Y',
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
            '_route' => 'generated::0b2GC34HV3a55Yfe',
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
            '_route' => 'generated::EjOM55WpiL1N1JF8',
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
            '_route' => 'generated::2hNpCAKF8eLFnjoF',
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
            '_route' => 'generated::aqLj6PiEL8wcmmMZ',
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
            '_route' => 'generated::Do10iVaOL8I3Oj1E',
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
            '_route' => 'generated::TZUeKIaL8Ooqt5CM',
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
            '_route' => 'generated::Y3CyZs9ZMXri6tip',
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
            '_route' => 'generated::s67CW6lUQmEPFBiS',
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
            '_route' => 'generated::ruKnAGZPdmWKsC2A',
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
            '_route' => 'generated::w4QaQFNKPe5Y9Gq9',
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
            '_route' => 'generated::EX3NddNy9YElVvjK',
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
            '_route' => 'generated::xDiTQx2C7OtMx3wu',
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
            '_route' => 'generated::ZawXbEuEpnOqnGWx',
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
            '_route' => 'generated::xrxf9c5L4I7vV3qY',
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
            '_route' => 'generated::TBtSICx2ySYV552x',
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
            '_route' => 'generated::JSuMuBH4dwN0M7eI',
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
            '_route' => 'generated::nPB6IcQk2rmjRBWz',
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
            '_route' => 'generated::d6jByr0MhSwaCeZV',
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
            '_route' => 'generated::x9KlchJKpkbhNRoN',
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
            '_route' => 'generated::0sFMgGLvM6S37FaC',
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
            '_route' => 'generated::Per6vCKO5M1iMywh',
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
            '_route' => 'generated::VijLGqs9bQjGxAV9',
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
            '_route' => 'generated::LwtKrlCh4IuL8WYz',
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
            '_route' => 'generated::C6LTUUFM1f2FeYG7',
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
            '_route' => 'generated::acNZHiuQXKBD1x5m',
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
            '_route' => 'generated::dT3VDTfnOctNN703',
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
            '_route' => 'generated::rXc8vDAPGD2HeOnd',
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
            '_route' => 'generated::bGf2P5oK8MuHF33C',
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
            '_route' => 'generated::R3SPtgHvPIKuppjC',
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
            '_route' => 'generated::Q0iqbQyQ4xjsRan9',
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
            '_route' => 'generated::efIDmxRpsXrZZm8u',
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
            '_route' => 'generated::yofahFEz3QJAwBpg',
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
            '_route' => 'generated::QdgqgbzrRuuAwoFF',
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
    'generated::Jd77eWik3qAx70BX' => 
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
        'as' => 'generated::Jd77eWik3qAx70BX',
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
    'generated::58TjbRpMNtqQvSaB' => 
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
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000005650000000000000000";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::58TjbRpMNtqQvSaB',
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
    'generated::QdgqgbzrRuuAwoFF' => 
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
        'as' => 'generated::QdgqgbzrRuuAwoFF',
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
    'generated::yofahFEz3QJAwBpg' => 
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
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:14031:"function ($user_id) {
        $user = \\App\\Models\\User::find($user_id);
        if ($user) {
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
        } else {
            return "Enter valid user id";
        }
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000005680000000000000000";}}',
        'namespace' => 'Api\\V1',
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::yofahFEz3QJAwBpg',
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
    'generated::jNdX1WCpBvDUnCNT' => 
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
        'as' => 'generated::jNdX1WCpBvDUnCNT',
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
    'generated::RKOGQG1NUoHqoWdk' => 
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
        'as' => 'generated::RKOGQG1NUoHqoWdk',
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
    'generated::hj3XLQpNH0DUG5zj' => 
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
        'as' => 'generated::hj3XLQpNH0DUG5zj',
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
    'generated::Kb5nS68qFqIqGGhR' => 
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
        'as' => 'generated::Kb5nS68qFqIqGGhR',
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
    'generated::gDsGISv2iErcy47E' => 
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
        'as' => 'generated::gDsGISv2iErcy47E',
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
    'generated::AxfHtgUFFjAJUKgs' => 
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
        'as' => 'generated::AxfHtgUFFjAJUKgs',
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
    'generated::Aoy1UILNGeN0kZqI' => 
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
        'as' => 'generated::Aoy1UILNGeN0kZqI',
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
    'generated::MtU9HLIJSQZducbq' => 
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
        'as' => 'generated::MtU9HLIJSQZducbq',
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
    'generated::8Y0fpWHvWiURCEpd' => 
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
        'as' => 'generated::8Y0fpWHvWiURCEpd',
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
    'generated::lLcvrXdy7u3BLnmY' => 
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
        'as' => 'generated::lLcvrXdy7u3BLnmY',
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
    'generated::rvdIuvJVaKi3JX8Y' => 
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
        'as' => 'generated::rvdIuvJVaKi3JX8Y',
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
    'generated::0b2GC34HV3a55Yfe' => 
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
        'as' => 'generated::0b2GC34HV3a55Yfe',
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
    'generated::EjOM55WpiL1N1JF8' => 
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
        'as' => 'generated::EjOM55WpiL1N1JF8',
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
    'generated::2hNpCAKF8eLFnjoF' => 
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
        'as' => 'generated::2hNpCAKF8eLFnjoF',
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
    'generated::aqLj6PiEL8wcmmMZ' => 
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
        'as' => 'generated::aqLj6PiEL8wcmmMZ',
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
    'generated::Do10iVaOL8I3Oj1E' => 
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
        'as' => 'generated::Do10iVaOL8I3Oj1E',
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
    'generated::TZUeKIaL8Ooqt5CM' => 
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
        'as' => 'generated::TZUeKIaL8Ooqt5CM',
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
    'generated::Y3CyZs9ZMXri6tip' => 
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
        'as' => 'generated::Y3CyZs9ZMXri6tip',
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
    'generated::s67CW6lUQmEPFBiS' => 
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
        'as' => 'generated::s67CW6lUQmEPFBiS',
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
    'generated::ruKnAGZPdmWKsC2A' => 
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
        'as' => 'generated::ruKnAGZPdmWKsC2A',
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
    'generated::w4QaQFNKPe5Y9Gq9' => 
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
        'as' => 'generated::w4QaQFNKPe5Y9Gq9',
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
    'generated::EX3NddNy9YElVvjK' => 
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
        'as' => 'generated::EX3NddNy9YElVvjK',
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
    'generated::xDiTQx2C7OtMx3wu' => 
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
        'as' => 'generated::xDiTQx2C7OtMx3wu',
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
    'generated::ZawXbEuEpnOqnGWx' => 
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
        'as' => 'generated::ZawXbEuEpnOqnGWx',
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
    'generated::xrxf9c5L4I7vV3qY' => 
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
        'as' => 'generated::xrxf9c5L4I7vV3qY',
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
    'generated::TBtSICx2ySYV552x' => 
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
        'as' => 'generated::TBtSICx2ySYV552x',
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
    'generated::JSuMuBH4dwN0M7eI' => 
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
        'as' => 'generated::JSuMuBH4dwN0M7eI',
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
    'generated::nPB6IcQk2rmjRBWz' => 
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
        'as' => 'generated::nPB6IcQk2rmjRBWz',
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
    'generated::d6jByr0MhSwaCeZV' => 
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
        'as' => 'generated::d6jByr0MhSwaCeZV',
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
    'generated::x9KlchJKpkbhNRoN' => 
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
        'as' => 'generated::x9KlchJKpkbhNRoN',
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
    'generated::0sFMgGLvM6S37FaC' => 
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
        'as' => 'generated::0sFMgGLvM6S37FaC',
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
    'generated::Per6vCKO5M1iMywh' => 
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
        'as' => 'generated::Per6vCKO5M1iMywh',
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
    'generated::VijLGqs9bQjGxAV9' => 
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
        'as' => 'generated::VijLGqs9bQjGxAV9',
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
    'generated::LwtKrlCh4IuL8WYz' => 
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
        'as' => 'generated::LwtKrlCh4IuL8WYz',
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
    'generated::C6LTUUFM1f2FeYG7' => 
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
        'as' => 'generated::C6LTUUFM1f2FeYG7',
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
    'generated::acNZHiuQXKBD1x5m' => 
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
        'as' => 'generated::acNZHiuQXKBD1x5m',
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
    'generated::dT3VDTfnOctNN703' => 
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
        'as' => 'generated::dT3VDTfnOctNN703',
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
    'generated::rXc8vDAPGD2HeOnd' => 
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
        'as' => 'generated::rXc8vDAPGD2HeOnd',
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
    'generated::bGf2P5oK8MuHF33C' => 
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
        'as' => 'generated::bGf2P5oK8MuHF33C',
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
    'generated::R3SPtgHvPIKuppjC' => 
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
        'as' => 'generated::R3SPtgHvPIKuppjC',
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
    'generated::Q0iqbQyQ4xjsRan9' => 
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
        'as' => 'generated::Q0iqbQyQ4xjsRan9',
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
    'generated::efIDmxRpsXrZZm8u' => 
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
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000005700000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::efIDmxRpsXrZZm8u',
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
