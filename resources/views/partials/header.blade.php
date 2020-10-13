<nav class="navbar navbar-expand-lg navbar-light container">
    <a class="navbar-brand" href="#"><img src="https://www.boolean.careers/images/misc/logo.png" alt="Logo Boolean"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item {{ (url()->current() == route('StaticPage.home')) ? 'active' : ''}}">
                <a class="nav-link" href="{{route('StaticPage.home')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item {{ (url()->current() == route('StaticPage.chisiamo')) ? 'active' : ''}}">
                <a class="nav-link" href="{{route('StaticPage.chisiamo')}}">Chi siamo</a>
            </li>
            <li class="nav-item {{ (url()->current() == route('Student.studenti')) ? 'active' : ''}}">
                <a class="nav-link" href="{{route('Student.studenti')}}">Studenti</a>
            </li>
        </ul>
    </div>
</nav>
