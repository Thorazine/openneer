<?php

namespace App\Models\Cms\Builders;

use Illuminate\Database\Eloquent\Model;
use App\Models\Cms\Contact as ContactModel;
use Thorazine\Hack\Models\Builders\BaseBuilder;
use App;

class Contact extends BaseBuilder
{

    /**
     * The databae table
     */
    protected $table = 'builder_contacts';

    /**
     * Set the type
     */
    public $type = 'contact';


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
        return ContactModel::where('language', App::getLocale())
            ->orderBy('drag_order', 'asc')
            ->get();
    }
}
