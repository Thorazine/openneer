<?php

namespace App\Models\Cms;

use Thorazine\Hack\Classes\Builders\FormBuilder;
use Thorazine\Hack\Scopes\SiteScope;
use Thorazine\Hack\Models\CmsModel;
use Cms;

class Education extends CmsModel
{
    protected $table = 'education';

    protected $viewPath = 'cms.education.inputs';

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
            'year' => [
                'type' => 'text',
                'label' => trans('modules.education.year'),
                'regex' => 'required',
                'default' => '2000',
            ],
            'place' => [
                'type' => 'text',
                'label' => trans('modules.education.place'),
                'regex' => 'required',
            ],
            'description' => [
                'type' => 'wysiwyg',
                'label' => trans('modules.education.description'),
                'regex' => '',
                'configuration' => 'text_only',
                'overview' => false,
            ],
        ];
    }
    
}
