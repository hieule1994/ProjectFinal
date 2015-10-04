<?php
/**
 * Created by PhpStorm.
 * User: hieul_000
 * Date: 2015/10/04
 * Time: 11:21 AM
 */
namespace App\Http\Validate;
use Illuminate\Support\MessageBag;

class FromException extends \Exception
{
    protected $error;
    public function __construct(MessageBag $error)
    {
        $this->error = $error;
    }
    public function getErrors()
    {
        return $this->error;
    }
}