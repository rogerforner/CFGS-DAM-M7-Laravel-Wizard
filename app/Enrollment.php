<?php

namespace App;

use Acacha\Stateful\Traits\StatefulTrait;
use Acacha\Stateful\Contracts\Stateful;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model implements Stateful
{
    use StatefulTrait;

    /**
     * Get the phone record associated with the user.
     */
    public function user()
    {
        return $this->hasOne('App\User');
    }

    /**
     * Get the phone record associated with the user.
     */
    public function person()
    {
        return $this->hasOne('App\Person');
    }

    /**
     * Step 4: Create your Model States
     * @var array
     */
    protected $stages = [
        'step1' => ['initial' => true],
        'step2' => ['final' => true]
    ];

    /**
     * Step 5: Create your Model State Transitions
     * @var array
     */
    protected $transitions = [
        'step1step2' => [
            'from' => 'step1',
            'to' => 'step2'
        ],
        'step2step1' => [
            'from' => 'step2',
            'to' => 'step1'
        ]
    ];

    /**
     * S'executarà quan es passi de l'step1 a l'step2.
     * Interessant per fer comprovacions.
     */
    protected function validateStep1step2() {
        return true;
    }
}
