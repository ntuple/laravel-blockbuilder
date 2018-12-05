<?php

namespace Ntuple\BlockBuilder;

use Illuminate\Support\ServiceProvider;

class BlockBuilderServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerBlockBuilder();

        $this->app->register('Webwizo\Shortcodes\ShortcodesServiceProvider');

        $this->registerBlockBuilderShortCode();
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function registerBlockBuilder()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'blockbuilder');

        $this->publishes([
            __DIR__.'/assets' => public_path('vendor/blockbuilder')
        ],'blockbuilder_asset');
    }

    /**
     * Register a new shortcode
     *
     * @return
     */
    public function registerBlockBuilderShortCode()
    {
        return app('shortcode')->register('block', 'Ntuple\BlockBuilder\Services\BlockBuilderService@register');
    }
}
