<?php

namespace App\Http\Controllers\Cms;

use Thorazine\Hack\Http\Controllers\Cms\CmsController;
use Thorazine\Hack\Http\Requests\ModuleStore;
use Illuminate\Http\Request;
use App\Models\Cms\Experience;
use Cms;

class ExperienceController extends CmsController
{


    public function __construct(Experience $model)
    {
        $this->model = $model;
        $this->slug = 'experiences';
        $this->hasOrder = true;

        parent::__construct($this);
    }


    /**
     * Get the values for saving. This function
     * makes overwriting it with an array  
     * for the child class easier
     *
     * @param  \Illuminate\Http\Request  $request|array
     * @return \Illuminate\Http\Response|array
     */
    protected function beforeStore($request)
    {
        $this->extraCreateValues = [
            'site_id' => Cms::siteId(),
        ];

        return $request;
    }
}
