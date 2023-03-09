<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <img src="{{asset('assets/img/me.png')}}" width="40" height="40">
        </div>
        <div class="sidebar-brand-text mx-3">AbdulForTech</div>
    </a>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="admin/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading"> Projects</div>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-newspaper"></i>
            <span>Projects</span>
        </a>
        <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="/admin/projects">Projects</a>
                <a class="collapse-item" href="/admin/project/new">New Project</a>
            </div>
        </div>
    </li>
    <!-- Heading -->
    <div class="sidebar-heading"> Skills</div>
    <li class="nav-item">
        <a class="nav-link" href="/admin/skills"> <i class="fas fa-fw fa-list"></i><span>Skills</span></a>
    </li>
    <!-- Heading -->
    <div class="sidebar-heading"> Articles </div>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-newspaper"></i>
            <span>Articles</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="/admin/articles">Articles</a>
                <a class="collapse-item" href="/admin/article/new">New Article</a>
            </div>
        </div>
    </li>
    <!-- Heading -->
    <!-- <div class="sidebar-heading"> Messages </div>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-envelope"></i>
            <span>Messages</span>
        </a>
        <div id="collapseFour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="messages">Inbox</a>
                <a class="collapse-item" href="message-sent">Sent</a>
                <a class="collapse-item" href="message-new">Compose</a>
                <a class="collapse-item" href="message-contacts">Contacts</a>
            </div>
        </div>
    </li> -->
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>