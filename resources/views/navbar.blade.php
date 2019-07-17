<nav class="navbar fixed-top">
    <a class="navbar-brand" href="/"><img src="/img/logo.png" alt="eurOpen"></a>

    <ul class="nav justify-md-content-end justify-content-center">
        <li class="nav-item">
            <a class="nav-link active" href="/">home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/listing">listing</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/howitworks">how it works</a>
        </li>
        <li class="nav-item">
            <?= auth()->check() ? '<a class="nav-link" href="/home">panel</a>' : '<a class="nav-link" href="/login">login</a>' ?> 
        </li>
    </ul>
</nav>