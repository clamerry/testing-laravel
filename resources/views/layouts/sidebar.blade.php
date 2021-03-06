<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <a class="topleft" style="text-decoration: none; color: white" aria-current="page" href="/mahasiswa">
        <img class="img-logos mx-auto mb-2" src="{{ url('img/logo_undip.png') }}" alt="..." /> Universitas
        Diponegoro
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span
            class="navbar-toggler-icon"></span></button>
    <div class="topcenter collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="dropdown-btn nav-link js-scroll-trigger text-capitalize" href="#">
                    <span data-feather="file-text" style="width: 19px; height:19px"></span>
                    Kelola Portofolio
                    <i class="fa fa-caret-down"></i>
                </a>
                <div class="dropdown-container" style="display: none;">
                    <a href="{{ url('mahasiswa/experiences') }}" class="nav-link text-capitalize">
                        <span data-feather="briefcase" style="width: 19px; height:19px"></span>
                        Experience
                    </a>
                    <a href="/mahasiswa/projects/" class="nav-link text-capitalize">
                        <span data-feather="book-open" style="width: 19px; height:19px"></span>
                        Project
                    </a>
                    <a href="/mahasiswa/achievements/" class="nav-link text-capitalize">
                        <span data-feather="award" style="width: 19px; height:19px"></span>
                        Achievement & Certificate
                    </a>
                </div>
            </li>
            <li class="nav-item {{ Request::is('mahasiswa/generate*') ? 'active' : '' }}">
                <a class="nav-link js-scroll-trigger text-capitalize" href="/mahasiswa/generate">
                    <span data-feather="monitor" style="width: 19px; height:19px"></span>
                    Tampilkan Portofolio</a>
            </li>
            <li class="nav-item {{ Request::is('admin/generate*') ? 'active' : '' }}">
                <a class="nav-link js-scroll-trigger text-capitalize" href="/admin/mhs">
                    <span data-feather="file-text" style="width: 19px; height:19px"></span>
                    Kelola Mahasiswa</a>
            </li>
        </ul>
    </div>

    <form action="/logout" method="post">
        @csrf
        <button type="submit" class="nav-link px-3 bg-dark border-0">Logout <span
                data-feather="log-out"></span></button>
    </form>
</nav>

<script>
    /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "none") {
                dropdownContent.style.display = "block";
            } else {
                dropdownContent.style.display = "none";
            }
        });
    }
</script>
