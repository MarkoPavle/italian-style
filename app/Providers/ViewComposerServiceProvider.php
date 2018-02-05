<?php

namespace App\Providers;

use App\Collection;
use App\Menu;
use App\Theme;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->composerMenuTop();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    private function composerMenuTop(){
        $theme = Theme::where('active', 1)->first();
        $topMenu = Menu::find(1)->menuLinks()->where('menu_links.publish', 1)->where('menu_links.parent', 0)->orderBy('menu_links.order', 'ASC')->get();
        $mobileMenu = Menu::find(2)->menuLinks()->where('menu_links.publish', 1)->where('menu_links.parent', 0)->orderBy('menu_links.order', 'ASC')->get();
        $collections = Collection::where('publish', 1)->where('parent', 0)->orderBy('order', 'ASC')->get();

        view()->composer('themes.'.$theme->slug.'.partials.nav', function($view) use ($topMenu){
            $view->with('topMenu', $topMenu);
        });
        view()->composer('themes.'.$theme->slug.'.index', function($view) use ($collections){
            $view->with('collections', $collections);
        });
        view()->composer('themes.'.$theme->slug.'.partials.mobile-menu', function($view) use ($collections, $mobileMenu){
            $view->with('collections', $collections)->with('mobileMenu', $mobileMenu);
        });
    }
}
