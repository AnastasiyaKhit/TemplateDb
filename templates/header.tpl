        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">News v1.0</a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="action/exit.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                        </li>
                        <li>
                            <a href="./pagetypes.php?type=1"><i class="fa fa-laptop"></i> Технологии</a>
                        </li>
                        <li>
                            <a href="./pagetypes.php?type=2"><i class="fa  fa-bank"></i> Недвижимость</a>
                        </li>
                        <li>
                            <a href="./pagetypes.php?type=3"><i class="fa fa-user"></i> Люди</a>
                        </li>
                        {if $is_admin=="1"}
                            <li>
                                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Админ панель<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="admin/add_news.php">Добавить новость</a>
                                    </li>
                                    <li>
                                        <a href="admin/edit_news.php">Редактировать новость</a>
                                    </li>
                                    <li>
                                        <a href="admin/delete_news.php">Удалить новость</a>
                                    </li>
                                </ul>
                            </li>
                        {/if}
                        <!-----------------------------add button? -->
                    </ul>
                </div>
            </div>
        </nav>