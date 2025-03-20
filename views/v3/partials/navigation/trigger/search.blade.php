@button([
    'id' => 'modal__label__m-search-modal__trigger',
    'text' => $lang->search,
    'color' => $customizer->headerTriggerButtonColor,
    'style' => $customizer->headerTriggerButtonType,
    'size' => $customizer->headerTriggerButtonSize,
    'icon' => 'search',
    'reversePositions' => true,
    'toggle' => true,
    'classList' => ['site-search-trigger'],
    'attributeList' => [
        'data-open' => 'm-search-modal__trigger',
    ],
])
@endbutton
