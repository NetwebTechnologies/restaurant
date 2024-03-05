<?php

$data = [

    /*
    |--------------------------------------------------------------------------
    | RESTAURANT DEFAULTS
    |--------------------------------------------------------------------------
    |
    | This option controls the default restaurants "layouts", "content",
    | "head", "script", "navbar", "style", "footer" and "title"
    | for you laravel application.
    | You may change these defaults as per your requirement.
    |
    */

    'default' => [
        'layout'        => 'restaurant::layouts.app',
        'content'       => 'content',
        'style'         => 'style',
        'script'        => 'script',
        'navbar'        => 'restaurant::layouts.navbar',
        'head'          => 'restaurant::layouts.head',
        'footer'        => 'restaurant::layouts.footer',
        'title'         => 'NWT Restaurant Module'
    ],


    // 'layout'     => (( env('NWT_RESTAURANT_LAYOUT') != null ) && ( env('NWT_RESTAURANT_LAYOUT') != "" ))
    //                 ? env('NWT_RESTAURANT_LAYOUT')
    //                 : config('restaurant.default.layout'),


];

    /*
    |--------------------------------------------------------------------------
    | ENV VARIABLES
    |--------------------------------------------------------------------------
    |
    | This option controls the restaurants "layouts", "content",
    | "head", "script", "navbar", "style", "footer" and "title"
    | and so on for you laravel application.
    | You can set the ENV variable for restaurant and set your
    | default keys values.
    |
    | This is the best way to call .env variables.
    |
    */

    /** LAYOUT
     * @extends lets you "extend" a template, which defines its own sections etc.
     * A template that you can extend will define its own sections using @yield,
     * which you can then put your own stuff into in your view file.
     *
     * used as: @extends(config('restaurant.layout'))
     */

        if (( env('NWT_RESTAURANT_LAYOUT') === null ) || ( env('NWT_RESTAURANT_LAYOUT') === "" )) {
            $data['layout'] = $data['default']['layout'];
        } else {
            $data['layout'] = view()->exists(env('NWT_RESTAURANT_LAYOUT')) ? env('NWT_RESTAURANT_LAYOUT') : $data['default']['layout'];
        }

    /** CONTENT
     *
     * @section directive is inject content layout from extended blade layout and display in child blade.
     * The content of these section will be displayed in the layout using @yield directive.
     *
     * used as: @yield(config('restaurant.content'))
     * @section(config('restaurant.content')) ... @endsection
     *
     */

        if (( env('NWT_RESTAURANT_CONTENT') === null ) || ( env('NWT_RESTAURANT_CONTENT') === "" )) {
            $data['content'] = $data['default']['content'];
        } else {
            $data['content'] = env('NWT_RESTAURANT_CONTENT');
        }

    /** STYLE
     *
     * The @stack('style') directive includes any CSS stylesheets pushed into the 'style' stack.
     *
     * used as: @stack(config('restaurant.style'))
     * @push(config('restaurant.style')) ... <style> ... </style> @endpush
     *
     */

        if (( env('NWT_RESTAURANT_STYLE') === null ) || ( env('NWT_RESTAURANT_STYLE') === "" )) {
            $data['style'] = $data['default']['style'];
        } else {
            $data['style'] = env('NWT_RESTAURANT_STYLE');
        }

    /** SCRIPT
     *
     * The @stack('script') directive includes any Scripts pushed into the 'script' stack.
     *
     * used as: @stack(config('restaurant.script'))
     * @push(config('restaurant.script')) ... <script> ... </script> @endpush
     *
     */

        if (( env('NWT_RESTAURANT_SCRIPTS') === null ) || ( env('NWT_RESTAURANT_SCRIPTS') === "" )) {
            $data['script'] = $data['default']['script'];
        } else {
            $data['script'] = env('NWT_RESTAURANT_SCRIPTS');
        }

    // include navbar (@include('<navbar-file-name>'))
        if (( env('NWT_RESTAURANT_NAVBAR') === null ) || ( env('NWT_RESTAURANT_NAVBAR') === "" )) {
            $data['navbar'] = $data['default']['navbar'];
        } else {
            $data['navbar'] = view()->exists(env('NWT_RESTAURANT_NAVBAR')) ? env('NWT_RESTAURANT_NAVBAR') : $data['default']['navbar'];
        }

    // include footer (@include('<footer-file-name>'))
        if (( env('NWT_RESTAURANT_FOOTER') === null ) || ( env('NWT_RESTAURANT_FOOTER') === "" )) {
            $data['footer'] = $data['default']['footer'];
        } else {
            $data['footer'] = view()->exists(env('NWT_RESTAURANT_FOOTER')) ? env('NWT_RESTAURANT_FOOTER') : $data['default']['navbar'];
        }

    // include hedear links (@include('<header-file-name>'))
        if (( env('NWT_RESTAURANT_HEAD') === null ) || ( env('NWT_RESTAURANT_HEAD') === "" )) {
            $data['head'] = $data['default']['head'];
        } else {
            $data['head'] = view()->exists(env('NWT_RESTAURANT_HEAD')) ? env('NWT_RESTAURANT_HEAD') : $data['deafult']['head'];
        }

    /** TITLE
     *
     * @section directive is inject content layout from extended blade layout and display in child blade.
     * The content of these section will be displayed in the layout using @yield directive.
     *
     * used as: @yield(config('restaurant.title'))
     * @section(config('restaurant.title'), 'Restaurant Module')
     *
     */
        if (( env('NWT_RESTAURANT_TITLE') === null ) || ( env('NWT_RESTAURANT_TITLE') === "" )) {
            $data['title'] = $data['default']['title'];
        } else {
            $data['title'] = env('NWT_RESTAURANT_TITLE');
        }
    // END

return $data;
