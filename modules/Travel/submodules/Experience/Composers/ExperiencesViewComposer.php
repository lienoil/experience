<?php

namespace Experience\Composers;

use Experience\Models\Experience;
use Pluma\Support\Composers\BaseViewComposer;

class ExperiencesViewComposer extends BaseViewComposer
{
    /**
     * The name of the variable.
     *
     * @var string
     */
    protected $name = 'experiences';

    /**
     * Main function.
     *
     * @return mixed
     */
    public function handle()
    {
        $experiences = [
            'items' => Experience::take(10)->get(),
            // 'categories' => Category::type('experience')->get(),
        ];

        return $experiences;
    }
}
