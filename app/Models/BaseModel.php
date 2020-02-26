<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

abstract class BaseModel extends Model
{
    public function beforeSave()
    {

    }

    public function save(array $options = [])
    {
        $this->beforeSave();
        return parent::save($options);
    }
}
