<?php

namespace App\Fields;

use Log1x\AcfComposer\Builder;
use Log1x\AcfComposer\Field;

class Services extends Field
{
    /**
     * The field group.
     */
    public function fields(): array
    {
        $fields = Builder::make('services');

        $fields
            ->setLocation('post_type', '==', 'service');

        $fields
            ->addText('gradient_bg', [
                'label' => 'Gradient'
            ])
            ->addFile('icon', [
                'label' => 'Icon',
                'return_format' => 'id',
                'mime_types' => 'svg'
            ])
            ->addFile('video', [
                'label' => 'Video',
                'return_format' => 'id',
                'mime_types' => 'mp4'
            ]);

        return $fields->build();
    }
}
