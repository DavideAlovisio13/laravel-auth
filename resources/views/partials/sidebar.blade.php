<div class="container-custom" id="sidebar">
    <aside>
        <div class="toggle">
            <div class="logo">
                <img src="">
                <h2>Dashboard<span class="danger">Tools</span></h2>
            </div>
            <div class="close" id="close-btn">
                <span class="material-icons-sharp">
                    close
                </span>
            </div>
        </div>

        <div class="sidebar">
            <a {{Route::currentRouteName() == 'admin.dashboard' ? 'active' : ''}}" href="{{route('admin.dashboard')}}">
                <span class="material-icons-sharp">
                    dashboard
                </span>
                <h3>Dashboard</h3>
            </a>
            <a {{Route::currentRouteName() == 'admin.projects.index' ? 'active' : ''}}" href="{{route('admin.projects.index')}}">
                <span class="material-icons-sharp">
                    person_outline
                </span>
                <h3>Projects</h3>
            </a>
            <a href="">
                <span class="material-icons-sharp">
                    logout
                </span>
                <h3>Logout</h3>
            </a>
        </div>
    </aside>
