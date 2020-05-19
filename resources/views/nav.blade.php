<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top" style="height: 70px !important">
    <div class="container">
    <a class="navbar-brand" href="/" style="border-right:2px; border-color: hotpink">
        <span ><i class="fas fa-paw" style="color: hotpink;"></i></span>
        
    </a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="{{ (request()->is('/')) ? 'active nav-item' : 'nav-item' }}" style="color: hotpink;">
                <a class="nav-link" href="/"><b>Home</b></a>
            </li>
            <li class="{{ (request()->is('cats')) ? 'active nav-item' : 'nav-item' }}" style="color: hotpink;">
                <a class="nav-link" href="/cats"><b>Cats</b></a>
            </li>
            <li class="{{ (request()->is('dogs')) ? 'active nav-item' : 'nav-item' }}">
                <a class="nav-link" href="/dogs"><b>Dogs</b></a>
            </li>
        </ul>
        <ul class="navbar-nav float-right">
            <li class="nav-item">
                <a class="nav-link" style="color: hotpink;"  href="https://www.petfinder.com/" target="_blank"><b>Pet Adoption</b></a>
            </li>
        </ul>
        </div>
    </div>
</nav>