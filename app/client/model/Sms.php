<?php

namespace app\client\model;

use think\Model;
use think\model\concern\SoftDelete;

class Accounts extends Model
{
    use SoftDelete;
}