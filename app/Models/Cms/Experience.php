<?php

namespace App\Models\Cms;

use Thorazine\Hack\Classes\Builders\FormBuilder;
use Thorazine\Hack\Scopes\SiteScope;
use Thorazine\Hack\Models\CmsModel;
use Cms;

class Experience extends CmsModel
{
    protected $table = 'experiences';

    protected $viewPath = 'cms.experience.inputs';

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
            'company' => [
                'type' => 'text',
                'label' => trans('modules.experience.company'),
                'regex' => 'required',
            ],
            'year_from' => [
                'type' => 'number',
                'label' => trans('modules.experience.year_from'),
                'regex' => 'required',
                'default' => '2000',
            ],
            'year_to' => [
                'type' => 'number',
                'label' => trans('modules.experience.year_to'),
                'regex' => '',
                'default' => '2000',
            ],
            'job_title' => [
                'type' => 'text',
                'label' => trans('modules.experience.job_title'),
                'regex' => 'required',
            ],
            'description' => [
                'type' => 'wysiwyg',
                'label' => trans('modules.experience.description'),
                'regex' => '',
                'configuration' => 'text_only',
                'overview' => false,
            ],
        ];
    }
    
}
