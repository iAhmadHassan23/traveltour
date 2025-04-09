<?php

namespace App\Providers;

use App\Models\Gallery;
use App\Models\Page;
use App\Models\Menu;
use App\Models\Setting;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // \URL::forceScheme('https');
        try {
            view()->composer('backend.component.gallery', function ($view) {
                $galleries = Gallery::paginate(20);

                $view->with([
                    'galleries' => $galleries
                ]);
            });
            $settings = Setting::pluck('values', 'key')->toArray();
            view()->composer('*', function ($view) use ($settings) {
                $contact = isset($settings['contact']) ? json_decode($settings['contact'], true) : [];
                $social = isset($settings['social']) ? json_decode($settings['social'], true) : [];
                $theme = isset($settings['theme']) ? json_decode($settings['theme'], true) : [];
                $seo = isset($settings['seo']) ? json_decode($settings['seo'], true) : [];
                $view->with([
                    'settings' => $settings,
                    'contact' => $contact,
                    'social' => $social,
                    'theme' => $theme,
                    'seo' => $seo
                ]);
            });
            view()->composer('layouts.master', function ($view) {
                $mega_menu = Menu::whereNull('parent_id')->orderBy('sort_order', 'ASC')->get();
                $services = Page::query()->where('type', 'service')->active()->get();
                $footer_services = $services->filter(function ($service) {
                    return $service->footer_menu == 1;
                });

                $view->with([
                    'mega_menus' => $mega_menu,
                    'services' => $services,
                    'footer_services' => $footer_services
                ]);
            });


            Paginator::useBootstrap();
        } catch (\Exception $exception) {

        }
    }
}