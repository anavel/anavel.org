<?php

namespace Anavel\Providers;

use Illuminate\Contracts\Cache\Repository as Cache;
use Illuminate\Support\ServiceProvider;
use Anavel\Services\CacheDocs;
use Anavel\Services\ConvertMarkdown;
use Anavel\Services\DocsRepository;
use Anavel\Services\GithubDocsRepository;
use Anavel\Services\VersionReplacer;
use Anavel\UserInterface\ShareVersionNumber;
use ParsedownExtra;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Boots service provider
     */
    public function boot()
    {
        $this->app['view']->composer(
            '*',
            ShareVersionNumber::class
        );
    }

    /**
     * Register any application services.
     */
    public function register()
    {
        $this->app->bind(DocsRepository::class, function ($app) {

            $repository = new GithubDocsRepository();

            $convertor = new ConvertMarkdown(
                $repository,
                new ParsedownExtra
            );

            $replacer = new VersionReplacer(
                $convertor
            );

            return new CacheDocs(
                $replacer,
                $app[Cache::class]
            );
        });
    }
}
