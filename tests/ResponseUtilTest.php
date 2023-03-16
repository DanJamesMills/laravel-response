<?php

namespace DanJamesMills\LaravelResponse\Tests;

use DanJamesMills\LaravelResponse\Http\Controllers\BaseController;
use Illuminate\Http\JsonResponse;

class BaseControllerTest extends TestCase
{
    public function test_send_response()
    {
        $controller = new BaseController();

        $result = ['foo' => 'bar'];
        $message = 'Test message';

        $response = $controller->sendResponse($result, $message);

        $expected = [
            'success' => true,
            'data'    => $result,
            'message' => $message,
        ];

        $this->assertInstanceOf(JsonResponse::class, $response);
        $this->assertEquals($expected, $response->getData(true));
    }

    public function test_send_error()
    {
        $controller = new BaseController();

        $error = 'Test error';
        $code = 404;

        $response = $controller->sendError($error, $code);

        $expected = [
            'success' => false,
            'message' => $error,
        ];

        $this->assertInstanceOf(JsonResponse::class, $response);
        $this->assertEquals($expected, $response->getData(true));
        $this->assertEquals($code, $response->getStatusCode());
    }

    public function test_send_success()
    {
        $controller = new BaseController();

        $message = 'Test message';

        $response = $controller->sendSuccess($message);

        $expected = [
            'success' => true,
            'message' => $message
        ];

        $this->assertInstanceOf(JsonResponse::class, $response);
        $this->assertEquals($expected, $response->getData(true));
        $this->assertEquals(200, $response->getStatusCode());
    }
}
