<?php

namespace App\Models\Cms;

use Thorazine\Hack\Classes\Builders\FormBuilder;
use Thorazine\Hack\Scopes\SiteScope;
use Thorazine\Hack\Models\CmsModel;
use Cms;

class Hobby extends CmsModel
{
    protected $table = 'hobbies';

    protected $viewPath = 'cms.hobby.inputs';

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
            'language' => [
                'type' => 'select',
                'label' => trans('modules.pages.language'),
                'regex' => 'required',
                'values' => config('cms.languages'),
            ],
            'icon' => [
                'type' => 'text',
                'label' => trans('modules.hobby.icon'),
                'regex' => '',
            ],
            'hobby' => [
                'type' => 'text',
                'label' => trans('modules.hobby.hobby'),
                'regex' => 'required',
            ],
        ];
    }
    
}
