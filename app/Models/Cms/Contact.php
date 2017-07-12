<?php

namespace App\Models\Cms;

use Thorazine\Hack\Classes\Builders\FormBuilder;
use Thorazine\Hack\Scopes\SiteScope;
use Thorazine\Hack\Models\CmsModel;
use Cms;

class Contact extends CmsModel
{
    protected $table = 'contacts';

    protected $viewPath = 'cms.contact.inputs';

    protected $builder;


    /**
     * Constructor
     */
    public function __construct()
    {
        // we need to force the parent construct
        parent::__construct($this);

        $this->types = $this->types();

    }


    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new SiteScope);
    }


    /**
     * Return all the types for this module
     */
    public function types()
    {
        return [
            'id' => [
                'type' => 'number',
                'label' => 'Id',
                'regex' => '',
                'overview' => false,
                'create' => false,
                'edit' => false,
            ],
            'icon' => [
                'type' => 'text',
                'label' => trans('hack::modules.contact.icon'),
                'regex' => '',
            ],
            'header' => [
                'type' => 'text',
                'label' => trans('hack::modules.contact.header'),
                'regex' => 'required',
            ],
            'subheader' => [
                'type' => 'text',
                'label' => trans('hack::modules.contact.subheader'),
                'regex' => '',
            ],
            
        ];
    }    
}
