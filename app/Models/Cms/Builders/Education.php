<?php

namespace App\Models\Cms\Builders;

use Illuminate\Database\Eloquent\Model;
use App\Models\Cms\Education as EducationModel;
use Thorazine\Hack\Models\Builders\BaseBuilder;
use App;

class Education extends BaseBuilder
{

    /**
     * The databae table
     */
    protected $table = 'builder_education';

    /**
     * Set the type
     */
    public $type = 'education';


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
        return EducationModel::where('language', App::getLocale())
            ->orderBy('drag_order', 'asc')
            ->get();
    }
}
