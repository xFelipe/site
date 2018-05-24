<?php
    $user = isset($_SESSION["user"]) ? unserialize( $_SESSION["user"] ) : null;
?>

<nav class="navbar navbar-inverse navbar-fixed-top pmd-navbar pmd-z-depth">
    <div class="container-fluid">
        <div class="navbar-header">
            <button class="pmd-ripple-effect navbar-toggle pmd-navbar-toggle" type="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="javascript:void(0);" class="navbar-brand navbar-brand-custome">Eu Quero</a>
        </div>

        <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse pmd-navbar-sidebar">
            <?php if ( isset($_SESSION["user"]) and $_SESSION["user"] !== null): ?>
                <div class="dropdown pmd-dropdown pmd-user-info pull-right">
                    <a href="javascript:void(0);" class="btn-user dropdown-toggle media" data-toggle="dropdown" data-sidebar="true" aria-expanded="false">
                        <div class="media-left">
                            <img class="avatar" src="<?php echo $user->getAvatar() ?>" width="40" height="40" alt="avatar">
                        </div>
                    </a>
                    <div class="pmd-dropdown-menu-container">
                        <div class="pmd-dropdown-menu-bg pmd-dropdown-menu-bg-right"></div>
                        <ul class="dropdown-menu dropdown-menu-right pm-ini" role="menu" style="clip: rect(0px, 99px, 0px, 99px);">
                            <li><a href="/u/edit-profile">Editar Perfil</a></li>
                            <li><a href="/logout">Logout</a></li>
                        </ul>
                    </div>
                </div>
            <?php else: ?>
                <div class="pmd-user-info pull-right">
                    <a href="/login" class="btn-user media">
                        <div class="media-left">
                            <i class="material-icons md-light pmd-sm">input</i>
                        </div>
                    </a>
                </div>
            <?php endif; ?>

            <ul class="nav navbar-nav navbar-right">
                <li><a class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect" href="javascript:void(0);">
                    <i class="material-icons md-light pmd-sm">search</i>
                </a></li>
            </ul>

            <?php if ( isset($_SESSION["user"]) and $_SESSION["user"] !== null): ?>
                <div class="pmd-navbar-right-icon pull-right navigation">
                    <!-- Notifications -->
                    <div class="dropdown notification icons pmd-dropdown">
                        <a href="javascript:void(0)" title="Notification" class="dropdown-toggle pmd-ripple-effect"  data-toggle="dropdown" role="button" aria-expanded="true">
                            <div data-badge="3" class="material-icons md-light pmd-sm pmd-badge  pmd-badge-overlap">notifications_none</div>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right pmd-card pmd-card-default pmd-z-depth" role="menu">
                            <!-- Card header -->
                            <div class="pmd-card-title">
                                <div class="media-body media-middle">
                                    <a href="notifications.html" class="pull-right">3 novas notificações</a>
                                    <h3 class="pmd-card-title-text">Notificações</h3>
                                </div>
                            </div>

                            <!-- Notifications list -->
                            <ul class="list-group pmd-list-avatar pmd-card-list">
                                <?php
                                    $notifications = array(
                                        0 => array(
                                            "text" => "<span>Cereja • Loja Nerd</span> acabou de<br>adicionar um novo produto",
                                            "image" => "/images/cereja.png",
                                            "time" => "5 minutos atrás",
                                            "link" => "javascript:void(0)"
                                        ),
                                        1 => array(
                                            "text" => "<span>Fany Informática</span> acabou de<br>adicionar um novo produto",
                                            "image" => "/images/fany.png",
                                            "time" => "13 minutos atrás",
                                            "link" => "javascript:void(0)"
                                        ),
                                        2 => array(
                                            "text" => "<span>Cereja • Loja Nerd</span> adicionou<br>uma nova promoção",
                                            "image" => "/images/cereja.png",
                                            "time" => "22 minutos atrás",
                                            "link" => "javascript:void(0)"
                                        ),
                                        3 => array(
                                            "text" => "<span>Full Beard Coffee</span> removeu<br>um produto do estoque",
                                            "image" => "/images/fullbeardcoffee.png",
                                            "time" => "28 minutos atrás",
                                            "link" => "javascript:void(0)"
                                        )
                                    );
                                ?>

                                <?php if ( count($notifications) == 0 ): ?>
                                    <li class="list-group-item hidden">
                                        <p class="notification-blank">
                                            <span class="dic dic-notifications-none"></span>
                                            <span>Você não possui notificações</span>
                                        </p>
                                    </li>
                                <?php else:
                                    for ($i=0; $i < count($notifications); $i++) { ?>
                                        <li class="list-group-item unread">
                                            <a href="<?php echo $notifications[$i]["link"] ?>">
                                                <div class="media-left">
                                                    <span class="avatar-list-img40x40">
                                                        <img alt="40x40" data-src="holder.js/40x40" class="img-responsive" src="<?php echo $notifications[$i]["image"] ?>" data-holder-rendered="true">
                                                    </span>
                                                </div>
                                                <div class="media-body">
                                                    <span class="list-group-item-heading"><?php echo $notifications[$i]["text"] ?></span>
                                                    <span class="list-group-item-text"><?php echo $notifications[$i]["time"] ?></span>
                                                </div>
                                            </a>
                                        </li> <?php
                                    }
                                endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="pmd-sidebar-overlay"></div>
</nav>
