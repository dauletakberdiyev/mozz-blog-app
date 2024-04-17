<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Mozz\Support\Traits\LanguageTrait;
use Mozz\Support\Traits\ResponseTrait;

abstract class Controller extends BaseController
{
    use ResponseTrait, LanguageTrait;
}
