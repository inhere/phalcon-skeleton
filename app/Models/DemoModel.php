<?php
/**
 * Created by PhpStorm.
 * User: inhere
 * Date: 2017-11-08
 * Time: 17:48
 */

namespace App\Models;

use Phalcon\Mvc\Model;
use Phalcon\Validation;
use Phalcon\Validation\Validator\Uniqueness;

/**
 * All the users registered in the application
 */
class DemoModel extends Model
{
    public $prop1;

    public $prop2;

    public function onConstruct()
    {
        // ...
    }

    public function initialize()
    {
        // set table
        $this->setSource('demo');
        $this->setConnectionService('dbPostgres');
    }
}