<?php $homeUrl = $homeUrl ?? url('/'); ?>
<footer class="site-footer">
    <div class="container footer-grid">
        <div class="footer-brand">
            <a href="{{ $homeUrl }}" class="brand-mark" aria-label="AppFunBD home">
                <span class="logo">AF</span>
                <span class="brand-name">AppFunBD</span>
            </a>
            <p>Laravel &amp; PHP web development, WordPress websites, REST APIs, and n8n AI automation — built by
                Abdul Alim in Dhaka, Bangladesh.</p>
            <div class="footer-social" aria-label="Social profiles">
                <a href="https://wa.me/8801675342612" target="_blank" rel="noopener noreferrer" title="WhatsApp">
                    <svg width="16" height="16" viewBox="0 0 32 32" fill="none" aria-hidden="true">
                        <path fill="currentColor"
                            d="M16 .5A15.5 15.5 0 0 0 2.5 16c0 2.74.73 5.42 2.12 7.76L2 30l6.47-2.54A15.5 15.5 0 1 0 16 .5Zm7.1 18.78c-.38-.19-2.2-1.08-2.54-1.2-.34-.13-.6-.19-.85.19s-.98 1.2-1.2 1.45-.44.28-.82.09a12.69 12.69 0 0 1-3.72-2.3 13.91 13.91 0 0 1-2.58-3.19c-.27-.47 0-.72.2-.91.2-.18.47-.47.7-.71.23-.23.31-.39.46-.65.15-.26.08-.49 0-.68-.09-.19-.84-2.05-1.16-2.81-.31-.74-.62-.64-.85-.65-.22 0-.47-.01-.72-.01a1.39 1.39 0 0 0-1 .46c-.34.38-1.3 1.27-1.3 3.1s1.33 3.6 1.52 3.85c.19.25 2.61 3.99 6.32 5.6.88.38 1.56.61 2.09.78.88.28 1.68.24 2.31.14.71-.1 2.2-.9 2.5-1.78.31-.88.31-1.64.21-1.79-.1-.15-.34-.24-.72-.43Z" />
                    </svg>
                </a>
                <a href="https://www.linkedin.com/in/aralim11/" target="_blank" rel="noopener noreferrer" title="LinkedIn">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path fill="currentColor"
                            d="M20.45 20.45h-3.56v-5.57c0-1.33-.02-3.04-1.85-3.04-1.86 0-2.14 1.45-2.14 2.95v5.66H9.34V9h3.41v1.56h.05c.48-.9 1.64-1.85 3.38-1.85 3.6 0 4.27 2.37 4.27 5.46v6.28ZM5.34 7.43a2.06 2.06 0 1 1 0-4.13 2.06 2.06 0 0 1 0 4.13ZM7.12 20.45H3.56V9h3.56v11.45Z" />
                    </svg>
                </a>
                <a href="https://github.com/aralim11" target="_blank" rel="noopener noreferrer" title="GitHub">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path fill="currentColor"
                            d="M12 .5A11.5 11.5 0 0 0 .5 12.28a11.53 11.53 0 0 0 7.87 10.96c.58.1.79-.25.79-.56v-2.15c-3.2.7-3.88-1.34-3.88-1.34-.53-1.34-1.29-1.7-1.29-1.7-1.05-.72.08-.7.08-.7 1.17.08 1.78 1.2 1.78 1.2 1.03 1.78 2.71 1.27 3.37.97.1-.75.4-1.27.73-1.56-2.56-.29-5.25-1.28-5.25-5.71 0-1.26.45-2.29 1.19-3.1-.12-.3-.52-1.5.11-3.11 0 0 .97-.31 3.18 1.18a11 11 0 0 1 5.79 0c2.21-1.5 3.18-1.18 3.18-1.18.63 1.61.23 2.81.11 3.11.74.81 1.19 1.84 1.19 3.1 0 4.44-2.7 5.42-5.27 5.7.42.36.78 1.06.78 2.15v3.18c0 .31.21.67.8.56A11.53 11.53 0 0 0 23.5 12.28 11.5 11.5 0 0 0 12 .5Z" />
                    </svg>
                </a>
            </div>
        </div>

        <div class="footer-col">
            <h4>Quick Links</h4>
            <ul>
                <li><a href="{{ $homeUrl }}#services">Services</a></li>
                <li><a href="{{ $homeUrl }}#products">Products</a></li>
                <li><a href="{{ $homeUrl }}#work-samples">Work Samples</a></li>
                <li><a href="{{ $homeUrl }}#tech-stack">Tech Stack</a></li>
                <li><a href="{{ $homeUrl }}#contact">Contact</a></li>
                <li><a href="{{ route('portfolio.index') }}">Full Portfolio</a></li>
            </ul>
        </div>

        <div class="footer-col">
            <h4>Products</h4>
            <ul>
                @foreach (($footerProducts ?? []) as $product)
                    <li><a href="{{ route('products.show', $product['slug']) }}">{{ $product['title'] }}</a></li>
                @endforeach
            </ul>
        </div>

        <div class="footer-col">
            <h4>Get In Touch</h4>
            <ul class="footer-contact">
                <li><a href="tel:+8801675342612">+880 1675 342 612</a></li>
                <li><a href="mailto:aralim11@gmail.com">aralim11@gmail.com</a></li>
                <li>Dhaka, Bangladesh</li>
            </ul>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container footer-bottom-inner">
            <p>&copy; {{ date('Y') }} AppFunBD — Abdul Alim, Software Engineer &amp; Web Application Developer, Dhaka, Bangladesh.</p>
            <p>Built with Laravel</p>
        </div>
    </div>
</footer>
