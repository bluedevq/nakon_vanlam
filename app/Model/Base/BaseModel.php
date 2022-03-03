<?php

namespace App\Model\Base;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class BaseModel extends \Illuminate\Database\Eloquent\Model
{
    protected $_params = [];

    public function setParams($params = [])
    {
        $this->_params = $params;
    }

    public function getParams()
    {
        return $this->_params;
    }

    public function getNextInsertId()
    {
        $nextId = DB::select(DB::raw("SHOW TABLE STATUS LIKE '" . $this->getTable() . "'"));
        return Arr::has($nextId, 0) ? $nextId[0]->Auto_increment : null;
    }
}
