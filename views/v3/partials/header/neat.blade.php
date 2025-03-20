@extends('templates.header', ['classList' => ['c-header', 'c-header--neat']])

@section('primary-navigation')
    <div class="c-header__menu c-header__menu">
        @element([
            'baseClass' => 'o-container',
            'classList' => [
                'o-container',
                'site-header-mobile-top',
                'u-color__text--black',
                'u-color__bg--lighter',
                'u-padding__y--1',
                'u-display--none@md',
                'u-display--none@lg',
                'u-display--none@xl'
            ],
            'context' => ['site.header.neat-container', 'site.header.container']
        ])
            @group([
                'classList' => ['u-justify-content--center']
            ])
                {{-- Search trigger in header --}}
                @includeWhen($showHeaderSearch, 'partials.navigation.trigger.search')

                {{-- Language selector --}}
                @includeWhen(!empty($languageMenu['items']), 'partials.header.components.language')
            @endgroup
        @endelement
        @element([
            'baseClass' => 'o-container',
            'classList' => [
                'o-container',
                'c-header__flex-content',
                'u-padding__right--0',
                'site-header-mobile-bottom',
                'u-gap-0'
            ],
            'context' => ['site.header.neat-container', 'site.header.container']
        ])
            {{-- Header logo --}}
            @link([
                'id' => 'header-logotype',
                'href' => $homeUrl,
                'classList' => ['u-margin__right--auto', 'u-display--flex', 'u-no-decoration']
            ])
                @if ($headerBrandEnabled)
                    @brand([
                        'logotype' => [
                            'src' => $logotype,
                            'alt' => $lang->goToHomepage
                        ],
                        'text' => $brandText
                    ])
                    @endbrand
                @else
                    @logotype([
                        'src' => $logotype,
                        'alt' => $lang->goToHomepage,
                        'classList' => ['c-nav__logo', 'c-header__logotype'],
                        'context' => ['site.header.logo', 'site.header.neat.logo']
                    ])
                    @endlogotype
                @endif
            @endlink

            @group([
                'classList' => [
                    'site-header-desktop-nav-items',
                    'u-gap-2',
                    'u-padding__y--2',
                    'u-padding__left--2',
                    'u-display--none@xs',
                    'u-display--none@sm',
                    'u-color__bg--primary'
                ]
            ])
                {{-- Search trigger in header --}}
                @includeWhen($showHeaderSearch, 'partials.navigation.trigger.search')

                {{-- Language selector --}}
                @includeWhen(!empty($languageMenu['items']), 'partials.header.components.language')
            @endgroup

            {{-- Drawer menu --}}
            @group([
                'classList' => [
                    'hamburger-menu',
                    'u-padding__y--2',
                    'u-padding__x--2@xs',
                    'u-padding__x--2@sm',
                    'u-padding__left--2@md',
                    'u-padding__right--3@md',
                    'u-padding__left--2@lg',
                    'u-padding__right--3@lg',
                    'u-padding__left--2@xl',
                    'u-padding__right--3@xl',
                    'u-color__bg--primary'
                ]
            ])
                @includeIf('partials.navigation.drawer')
            @endgroup
        @endelement
    </div>
    @includeWhen($showHeaderSearch, 'partials.search.search-modal')
@stop
