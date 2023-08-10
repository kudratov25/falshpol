<?php

use yii\helpers\Html;

$roleId = Yii::$app->user->identity->role_id;

// Check if the user is authenticated
if (!Yii::$app->user->isGuest) {
    // Get the username
    $username = Yii::$app->user->identity->username;
} else {
    $username = "Not registered user";
}
?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= $assetDir ?>/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a title="Текущий пользователь" href="<?= "/admin" ?>" class="d-block">
                    <?= $username ?>
                </a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">

            <?php echo \hail812\adminlte\widgets\Menu::widget([
                "items" => [
                    [
                        "label" => "Пользователи",
                        "icon" => "fa fa-user",
                        "items" => [
                            [
                                "label" => "Пользователи",
                                "url" => ["users/index"],
                                "iconStyle" => "fa fa-home",
                                "visible" => $roleId <= 1, //faqat root uchun
                            ],

                            [
                                "label" => "Роли пользователей",
                                "url" => ["roles/index"],
                                "iconStyle" => "fa fa-question",
                                "visible" => $roleId <= 1,
                            ],
                            [
                                "label" => "Добавить роль",
                                "url" => ["roles/add"],
                                "iconStyle" => "fa fa-thumbs-up",
                                "visible" => $roleId <= 1,
                            ],

                            [
                                "label" => "Системные роли",
                                "url" => ["roles/permission"],
                                "iconStyle" => "fa fa-list",
                                "visible" => $roleId <= 1,
                            ],
                        ],
                    ],
                    [
                        "label" => "Домашние компоненты",
                        "icon" => "fa fa-home",
                        "items" => [
                            [
                                "label" => "Текст для баннера",
                                "url" => ["home-header/index"],
                                "iconStyle" => "fa fa-home",
                            ],

                            [
                                "label" => "О нас",
                                "url" => ["home-about-us/index"],
                                "iconStyle" => "fa fa-info",
                            ],
                            [
                                "label" => "Почему мы ?",
                                "url" => ["home-why-us/index"],
                                "iconStyle" => "fa fa-question",
                            ],
                            [
                                "label" => "Преимущества Фальшпола",
                                "url" => ["home-benefits/index"],
                                "iconStyle" => "fa fa-thumbs-up",
                            ],
                            [
                                "label" => "Реализованные проекты",
                                "url" => ["home-completed-projects/index"],
                                "iconStyle" => "fa fa-list",
                            ],
                            [
                                "label" => "Наши клиенты",
                                "url" => ["home-clients/index"],
                                "iconStyle" => "fa fa-list",
                            ],
                            [
                                "label" => "Сертификаты",
                                "url" => ["home-certificates/index"],
                                "iconStyle" => "fa fa-list",
                            ],
                            [
                                "label" => "Партнеры",
                                "url" => ["home-partners/index"],
                                "iconStyle" => "fa fa-list",
                            ],
                        ],
                    ],
                    [
                        "label" => "О нас",
                        "icon" => "fa fa-info",
                        "items" => [
                            [
                                "label" => "Текст о компании",
                                "url" => ["about-header/index"],
                                "iconStyle" => "fa fa-home",
                            ],
                            [
                                "label" => "Цифры",
                                "url" => ["about-info/index"],
                                "iconStyle" => "fa fa-info",
                            ],
                        ],
                    ],
                    [
                        "label" => "Монтажные компоненты",
                        "icon" => "fas fa-cog",
                        "items" => [
                            [
                                "label" => "Заглавная страница",
                                "url" => ["montage-header/index"],
                                "iconStyle" => "fa fa-home",
                            ],
                            [
                                "label" => "Информация",
                                "url" => ["montage-info/index"],
                                "iconStyle" => "fa fa-info",
                            ],
                        ],
                    ],
                    [
                        "label" => "Типы фальшпола & Каталог",
                        "icon" => "fas fa-cog",
                        "items" => [
                            [
                                "label" => "Заглавная страница",
                                "url" => ["type-falshpol-text/index"],
                                "iconStyle" => "fa fa-home",
                            ],
                            // [
                            //     "label" => "Добавить",
                            //     "url" => ["type-falshpol-text/create"],
                            //     "iconStyle" => "fa fa-info",
                            // ],

                        ],
                    ],
                    [
                        "label" => "Проекты",
                        "icon" => "far fa-copy",
                        "items" => [
                            [
                                "label" => "Заглавная страница",
                                "url" => ["projects-header/index"],
                                "iconStyle" => "fa fa-home",
                            ],
                            [
                                "label" => "Список",
                                "url" => ["project-show/index"],
                                "iconStyle" => "fa fa-home",
                            ],

                            [
                                "label" => "Детали проекта",
                                "url" => ["project-gallery/index"],

                                "iconStyle" => "fa fa-info",
                            ],
                        ],
                    ],
                    [
                        "label" => "Tипа фальшпол",
                        "icon" => "far fa-copy",
                        "items" => [
                            [
                                "label" => "Список",
                                "url" => ["falshpol-type-show/index"],
                                "iconStyle" => "fa fa-home",
                            ],
                        ],
                    ],
                    [
                        "label" => "Cтроительные решения",
                        "icon" => "far fa-copy",
                        "items" => [
                            [
                                "label" => "Список",
                                "url" => ["building-solutions/index"],
                                "iconStyle" => "fa fa-home",
                            ],
                        ],
                    ],

                    [
                        "label" => "Заявки & API",
                        "icon" => "fas fa-inbox",
                        "items" => [
                            [
                                "label" => "Заявки с сайта",
                                "url" => ["applications/index"],
                                "iconStyle" => "fa fa-home",
                            ],
                            [
                                "label" => "API",
                                "url" => ["api/index"],
                                "iconStyle" => "fa fa-info",
                            ],


                        ],
                    ],
                    [
                        "label" => "Контакты",
                        "icon" => "fa fa-envelope",
                        "items" => [
                            [
                                "label" => "Ссылки и адрес",
                                "url" => ["social-link/index"],
                                "iconStyle" => "fa fa-share",
                            ],
                        ],

                    ],
                ],
            ]); ?>

        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>