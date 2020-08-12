<?php

namespace App\Models\Cms\Builders;

use Illuminate\Database\Eloquent\Model;
use App\Models\Cms\Tag as TagModel;
use Thorazine\Hack\Models\Builders\BaseBuilder;
use App;

class Tag extends BaseBuilder
{

    /**
     * The databae table
     */
    protected $table = 'builder_tags';

    /**
     * Set the type
     */
    public $type = 'tag';


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
        return TagModel::orderBy('drag_order', 'asc')
            ->get();
    }
}
