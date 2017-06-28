<?php

namespace App\Models\Cms;

use Thorazine\Hack\Classes\Builders\FormBuilder;
use Thorazine\Hack\Scopes\SiteScope;
use Thorazine\Hack\Models\CmsModel;
use Cms;

class Language extends CmsModel
{
    protected $table = 'languages';

    protected $viewPath = 'cms.language.inputs';

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
                'label' => trans('modules.language.language'),
                'regex' => 'required',
                'values' => 'getLanguages',
            ],
            'proficiency' => [
                'type' => 'select',
                'label' => trans('modules.language.proficiency'),
                'regex' => 'required',
                'values' => [
                    1 => 1,
                    2 => 2,
                    3 => 3,
                    4 => 4,
                    5 => 5,
                ],
            ],
        ];
    }

    public function getLanguages()
    {
        return trans('matthijs.language');
    }
}
