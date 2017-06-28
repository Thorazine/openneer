<?php

namespace App\Models\Cms\Builders;

use Illuminate\Database\Eloquent\Model;
use App\Models\Cms\Experience as ExperienceModel;
use Thorazine\Hack\Models\Builders\BaseBuilder;

class Experience extends BaseBuilder
{

    /**
     * The databae table
     */
    protected $table = 'builder_experiences';

    /**
     * Set the type
     */
    public $type = 'experience';


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
        return ExperienceModel::orderBy('drag_order', 'asc')->get();
    }
}
