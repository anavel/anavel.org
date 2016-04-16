<li class="nav-item"><a class="nav-link" href="{{ route('docs.index', ['version' => $version, 'package' => 'foundation']) }}">Foundation</a></li>

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Modules</a>
    <ul class="dropdown-menu" role="menu">
        <a class="dropdown-item" href="{{ route('docs.index', ['version' => $version, 'package' => 'crud']) }}">CRUD</a>
        <a class="dropdown-item" href="{{ route('docs.index', ['version' => $version, 'package' => 'gettext']) }}">Gettext</a>
        <a class="dropdown-item" href="{{ route('docs.index', ['version' => $version, 'package' => 'translation']) }}">Translation</a>
    </ul>
</li>

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Community</a>
    <ul class="dropdown-menu" role="menu">
        <h6 class="dropdown-header">Join us on</h6>
        <a class="dropdown-item" target="_blank" href="https://github.com/anavel">GitHub</a>
    </ul>
</li>
