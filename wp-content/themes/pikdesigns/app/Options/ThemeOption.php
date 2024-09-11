<?php

namespace App\Options;

use Log1x\AcfComposer\Builder;
use Log1x\AcfComposer\Options as Field;

class ThemeOption extends Field
{
    /**
     * The option page menu name.
     *
     * @var string
     */
    public $name = 'Theme Option';

    /**
     * The option page document title.
     *
     * @var string
     */
    public $title = 'Theme Option';

    /**
     * The option page field group.
     */
    public function fields(): array
    {
        $fields = Builder::make('theme_option');

        $fields
            ->addGroup('Header')
                ->addImage('logo', ['label' => 'Logo', 'return_format' => 'id'])
            ->endGroup()
            ->addGroup('Theme Colors')
                ->addColorPicker('primary', ['label' => 'Primary'])
                ->addColorPicker('secondary', ['label' => 'Seondary'])
                ->addColorPicker('info', ['label' => 'Info'])
                ->addColorPicker('success', ['label' => 'Success'])
                ->addColorPicker('danger', ['label' => 'Danger'])
                ->addColorPicker('warning', ['label' => 'Warning'])
            ->endGroup();

        return $fields->build();
    }
}
