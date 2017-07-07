<?php

namespace App\Models\Cms;

use Thorazine\Hack\Classes\Builders\FormBuilder;
use Thorazine\Hack\Scopes\SiteScope;
use Thorazine\Hack\Models\CmsModel;
use Cms;

class Skill extends CmsModel
{
    protected $table = 'skills';

    protected $viewPath = 'cms.skill.inputs';

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
            'skill' => [
                'type' => 'text',
                'label' => trans('modules.skill.skill'),
                'regex' => 'required',
            ],
            'proficiency' => [
                'type' => 'number',
                'label' => trans('modules.skill.proficiency'),
                'regex' => 'required',
                'default' => 0,
                'max' => 100,
                'min' => 0,
            ],
        ];
    }
}
