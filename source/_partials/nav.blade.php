<nav class="h-20 w-full p-3 text-white {{ $page->getPath() == " /" ? 'bg-transparent' : 'bg-blue' }} ">
    <div class=" container-xl flex flex-wrap justify-between items-center gap-3">
    <a class="flex items-center" href="/">
        <img class="max-w-xs h-auto" src="/assets/images/20210727-LukesMediaLogo-White.png" alt="Luke's Media logo"></a>
    <ul class="flex flex-wrap items-center gap-8">
        <li>
            <a href="/" class="link {{ $page->isActive('/') ? 'link-active' : '' }}">Home</a>
        </li>
    </ul>
    </div>
</nav>