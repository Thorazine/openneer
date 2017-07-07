<?php

namespace App\Models\Cms\Builders;

use Illuminate\Database\Eloquent\Model;
use App\Models\Cms\Skill as SkillModel;
use Thorazine\Hack\Models\Builders\BaseBuilder;
use App;

class Skill extends BaseBuilder
{

    /**
     * The databae table
     */
    protected $table = 'builder_skills';

    /**
     * Set the type
     */
    public $type = 'skill';


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
        return SkillModel::where('language', App::getLocale())
            ->orderBy('drag_order', 'asc')
            ->get();
    }
}
