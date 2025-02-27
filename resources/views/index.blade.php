@extends('layout')

@section('content')
    <div class="min-h-screen">
        <header class="header">
            <div class="container header-container">
                <div class="header-nav">
                    <a class="header-logo" href="/">
                        <span class="header-logo-text">Ahmed.dev</span>
                    </a>
                    <nav class="header-links">
                        <a href="#about" class="nav-link">About</a>
                        <a href="#projects" class="nav-link">Projects</a>
                        <a href="#contact" class="nav-link">Contact</a>
                    </nav>
                </div>
                <div class="header-actions">
                    <button id="themeToggle" class="btn btn-icon" aria-label="Toggle theme">
                        <svg class="icon-sun" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <circle cx="12" cy="12" r="5" />
                            <line x1="12" y1="1" x2="12" y2="3" />
                            <line x1="12" y1="21" x2="12" y2="23" />
                            <line x1="4.22" y1="4.22" x2="5.64" y2="5.64" />
                            <line x1="18.36" y1="18.36" x2="19.78" y2="19.78" />
                            <line x1="1" y1="12" x2="3" y2="12" />
                            <line x1="21" y1="12" x2="23" y2="12" />
                            <line x1="4.22" y1="19.78" x2="5.64" y2="18.36" />
                            <line x1="18.36" y1="5.64" x2="19.78" y2="4.22" />
                        </svg>
                        <svg class="icon-moon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                        </svg>
                    </button>
                    <button class="btn btn-outline resume-btn">Resume</button>
                </div>
            </div>
        </header>

        <main class="container main-content">
            <section id="about" class="section">
                <div class="container">
                    <div class="about-content">
                        <div class="about-text">
                            <h1 class="section-title large">Full Stack Developer</h1>
                            <p class="section-description">
                                Building digital experiences with modern technologies. Focused on creating elegant solutions
                                to
                                complex problems.
                            </p>
                        </div>
                        <div class="social-links">
                            <a href="https://github.com" target="_blank" class="social-btn">
                                <i class="icon-github"></i>
                                <span class="sr-only">GitHub</span>
                            </a>
                            <a href="https://linkedin.com" target="_blank" class="social-btn">
                                <i class="icon-linkedin"></i>
                                <span class="sr-only">LinkedIn</span>
                            </a>
                            <a href="https://twitter.com" target="_blank" class="social-btn">
                                <i class="icon-twitter"></i>
                                <span class="sr-only">Twitter</span>
                            </a>
                            <a href="mailto:hello@example.com" class="social-btn">
                                <i class="icon-mail"></i>
                                <span class="sr-only">Email</span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <section id="projects" class="section">
                <div class="container">
                    <h2 class="section-title">Projects</h2>
                    <div class="projects-grid">
                        @include('partials.project-card', [
                            'title' => 'E-commerce Platform',
                            'description' =>
                                'A full-stack e-commerce platform built with Next.js, Prisma, and Stripe integration.',
                            'image' => '/images/placeholder.png',
                            'link' => 'https://github.com',
                            'tags' => ['Next.js', 'Prisma', 'Stripe'],
                        ])

                        @include('partials.project-card', [
                            'title' => 'Task Management App',
                            'description' =>
                                'A real-time task management application with team collaboration features.',
                            'image' => '/images/placeholder.png',
                            'link' => 'https://github.com',
                            'tags' => ['React', 'Node.js', 'Socket.io'],
                        ])

                        @include('partials.project-card', [
                            'title' => 'AI Chat Interface',
                            'description' =>
                                'An AI-powered chat interface with natural language processing capabilities.',
                            'image' => '/images/placeholder.png',
                            'link' => 'https://github.com',
                            'tags' => ['OpenAI', 'Next.js', 'TailwindCSS'],
                        ])
                    </div>
                </div>
            </section>

            <section class="section">
                <div class="container">
                    <h2 class="section-title">Tech Stack</h2>
                    @include('partials.tech-stack')
                </div>
            </section>

            <section id="contact" class="section">
                <div class="container">
                    <div class="contact-container">
                        <h2 class="section-title">Get in Touch</h2>
                        @include('partials.contact-form')
                    </div>
                </div>
            </section>
        </main>

        <footer class="footer">
            <div class="container footer-container">
                <p class="copyright">© 2024 ahmed.dev. All rights reserved.</p>
                <nav class="footer-links">
                    <a class="footer-link" href="#">Terms of Service</a>
                    <a class="footer-link" href="#">Privacy</a>
                </nav>
            </div>
        </footer>
    </div>
@endsection
