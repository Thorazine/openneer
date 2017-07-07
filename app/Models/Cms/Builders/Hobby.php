<?php

namespace App\Models\Cms\Builders;

use Illuminate\Database\Eloquent\Model;
use App\Models\Cms\Hobby as HobbyModel;
use Thorazine\Hack\Models\Builders\BaseBuilder;
use App;

class Hobby extends BaseBuilder
{

    /**
     * The databae table
     */
    protected $table = 'builder_hobbies';

    /**
     * Set the type
     */
    public $type = 'hobby';


    /**
     * Constructor
     */
    public function __construct()
    {
        // we need to force the parent construct
        parent::__construct($this);
    }


    /**
     * Add to the DB scope for the frontend
     */
    public function replaceFrontendValue($original, $builder)
    {
        return HobbyModel::where('language', App::getLocale())
            ->orderBy('drag_order', 'asc')
            ->get();
    }
}
