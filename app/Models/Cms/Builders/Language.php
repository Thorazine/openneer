<?php

namespace App\Models\Cms\Builders;

use Illuminate\Database\Eloquent\Model;
use App\Models\Cms\Language as LanguageModel;
use Thorazine\Hack\Models\Builders\BaseBuilder;

class Language extends BaseBuilder
{

    /**
     * The databae table
     */
    protected $table = 'builder_languages';

    /**
     * Set the type
     */
    public $type = 'language';


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
        return LanguageModel::orderBy('drag_order', 'asc')->get();
    }
}
