<?php
declare(strict_types=1);

class MarkdownPlugin2 extends ParsedownExtra
{
    protected function inlineImage($excerpt)
    {
        $element = parent::inlineImage($excerpt);
        if (!is_array($element ?? null)) {
            return null;
        }

        // wrap img with div
        $block = [
            'extent' => $element['extent'],
            'element' => [
                'name' => 'div',
                'handler' => 'element',
                'text' => $element,
                'attributes' => [
                    'class' => 'my-img-wrap',
                ],
            ],
        ];

        return $block;
    }
}
