<style type="text/css">

#sidebar{
    min-width: 250px;max-width: 250px;height: 600px;
}
</style>

<nav id="sidebar" class="navbar navbar-default">
    <!-- Sidebar Header -->
    <div class="sidebar-header">
        <h3></h3>
    </div>

    <!-- Sidebar Links -->
    <ul class="nav navbar">
        <li class="active"><?= $this->html->link('Home','/admin/') ?></li>
        <li><?= $this->html->link('Blogs','/topics/') ?></li>
        <!--
        <li>
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Pages</a>
            <ul class="collapse" id="homeSubmenu">
                <li><a href="#">1</a></li>
            </ul>
        </li>
        -->
        <li><a href="#">Users</a></li>
    </ul>
</nav>
