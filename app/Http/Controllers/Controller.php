<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @OA\Info(
 *    title="BookShop API",
 *    version="1.0.0",
 * ),
 *@OA\Tag(
 *   name="getBook",
 * ),
 * @OA\Tag(
 *   name="addBook",
 * ),
 * @OA\Tag(
 *   name="updateBook",
 * ),
 * @OA\Tag(
 *   name="deleteBook",
 * ),
 */
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
