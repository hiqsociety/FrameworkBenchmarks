<?php

namespace App\Model\Table;

use App\Model\Entity\Fortune;
use Cake\ORM\Table;

class FortuneTable extends Table
{
    protected $_table = 'fortune';
    protected $_entityClass = Fortune::class;
}
