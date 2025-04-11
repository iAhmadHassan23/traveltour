<?php

namespace App\Providers;

use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Support\ServiceProvider;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;

class BackendMenuServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(Dispatcher $events): void
    {
        $events->listen(BuildingMenu::class, function (BuildingMenu $event) {
            $event->menu->add([
                'text' => 'Users',
                'url'  => route('users.index'),
                'icon' => 'fas fa-fw fa-users',
                'can'  => 'User list'
            ]);
            $event->menu->add([
                'text' => 'Roles',
                'url'  => route('roles.index'),
                'icon' => 'fas fa-fw fa-key',
                'can'  => 'Role list'
            ]);


            $event->menu->add([
                'text' => 'Blogs list',
                'url'  => route('blog.index'),
                'icon' => 'fas fa-fw fa-blog',
                'can'  => 'Blog list',
            ]);
            $event->menu->add([
                'text' => 'Categories list',
                'url'  => route('category.index'),
                'icon' => 'fas fa-fw fa-list',
                'can'  => 'Category list'

            ]);

            $event->menu->add([
                'text' => 'Tour Categories list',
                'url'  => route('tour-category.index'),
                'icon' => 'fas fa-fw fa-list',
                'can'  => 'tour-category list'

            ]);

            $event->menu->add([
                'text' => 'Tours',
                'url'  => route('tour.index'),
                'icon' => 'fas fa-fw fa-list',
                'can'  => 'tours list'

            ]);

            $event->menu->add([
                'text' => 'Pages',
                'url'  => route('page.index'),
                'icon' => 'fas fa-fw fa-file',
                'can'  => 'Page list',
            ]);

            $event->menu->add([
                'text' => 'Services',
                'url'  => route('services.index'),
                'icon' => 'fas fa-fw fa-file',
                'can'  => 'Service list',
            ]);
            $event->menu->add([
                'text' => 'Sub Services',
                'url'  => route('sub_services.index'),
                'icon' => 'fas fa-fw fa-file',
                'can'  => 'Service list',
            ]);

            $event->menu->add([
                'text' => 'Email Accounts',
                'url'  => route('admin.mailbox.index'),
                'icon' => 'far fa-fw fa-file',
                'can'  => 'Mail box'
            ]);
            $event->menu->add([
                'text' => 'Email Settings',
                'url'  => route('email-accounts.index'),
                'icon' => 'far fa-fw fa fa-envelope',
                'can'  => 'Email Setting List'
            ]);
            $event->menu->add([
                'text' => 'Signatures',
                'url'  => route('signatures.index'),
                'icon' => 'far fa-fw fa fa-pen',
                'can'  => 'Signature List'
            ]);
            $event->menu->add([
                'text' => 'Gallery',
                'url'  => route('gallery.index'),
                'icon' => 'fas fa-fw fa-images',
                'can'  => 'Gallery'
            ]);
            $event->menu->add([
                'text' => 'Menu',
                'url'  => route('menu.index'),
                'icon' => 'fas fa-fw fa-list',
                'can'  => 'Menu Update'
            ]);

            $event->menu->add([
                'text'    => 'Settings',
                'icon'    => 'fas fa-fw fa-cogs',
                'can'     => 'Settings',
                'submenu' => [
                    [
                        'text' => 'Contact',
                        'url'  => route('setting.index', 'contact'),
                        'icon' => 'fas fa-fw fa-phone'
                    ],
                    [
                        'text' => 'Social',
                        'url'  => route('setting.index', 'social'),
                        'icon' => 'fas fa-fw fa-social'

                    ],
                    [
                        'text' => 'Theme',
                        'url'  => route('setting.index', 'theme'),
                        'icon' => 'fas fa-fw fa-template'

                    ],
                    [
                        'text' => 'SEO',
                        'url'  => route('setting.index', 'seo'),
                        'icon' => 'fas fa-fw fa-template'

                    ],
                    [
                        'text' => 'Change password',
                        'url'  => route('changepassword'),
                        'icon' => 'fas fa-fw fa-key'

                    ]
                ]
            ]);

 $event->menu->add([
                'text' => 'Backups',
                'url'  => route('backups.index'),
                'icon' => 'fas fa-fw fa-list', 
            ]);
//            $event->menu->add([
//                'text' => 'Pages',
//                'url'  => route('page.index'),
//                'icon' => 'fas fa-fw fa-file'
//            ]);
//            $event->menu->add([
//                'text' => 'Tools Pages',
//                'url'  => route('tools-page.index'),
//                'icon' => 'fas fa-fw fa-wrench'
//            ]);
//            $event->menu->add([
//                'text' => 'Tools',
//                'url'  => route('tools.index'),
//                'icon' => 'fas fa-fw fa-tools'
//            ]);
//            $event->menu->add([
//                'text' => 'Sub Tools',
//                'url'  => route('sub.tools.index'),
//                'icon' => 'fas fa-fw fa-tools'
//            ]);
        });

    }
}
