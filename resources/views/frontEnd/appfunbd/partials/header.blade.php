<?php $homeUrl = $homeUrl ?? url('/'); ?>
<header class="site-header">
    <div class="container nav-inner">
        <a href="{{ $homeUrl }}" class="brand-mark" aria-label="AppFunBD home">
            <span class="logo">AF</span>
            <span class="brand-name">AppFunBD</span>
        </a>
        <nav class="site-nav" aria-label="Primary">
            <a href="{{ $homeUrl }}#services">Services</a>
            <a href="{{ $homeUrl }}#products">Products</a>
            <a href="{{ $homeUrl }}#work-samples">Work Samples</a>
            <a href="{{ $homeUrl }}#tech-stack">Tech Stack</a>
            <a href="{{ $homeUrl }}#contact">Contact</a>
            <a href="{{ route('portfolio.index') }}" class="nav-cta">Full Portfolio</a>
        </nav>
    </div>
</header>
