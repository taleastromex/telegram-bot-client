<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- ── Primary SEO ── --}}
    <title>BotFlow — Telegram Bot Management Platform</title>
    <meta name="description" content="BotFlow is an all-in-one platform to create, connect and configure Telegram bots — manage commands, webhooks, analytics and user flows from a single dashboard.">
    <meta name="keywords" content="telegram bot, telegram bot management, bot platform, configure telegram bot, bot dashboard, webhook management, telegram automation, chatbot builder">
    <meta name="author" content="BotFlow">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#08090f">
    <link rel="canonical" href="{{ url('/') }}">

    {{-- ── Open Graph (Facebook, LinkedIn, Telegram preview) ── --}}
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:site_name" content="BotFlow">
    <meta property="og:title" content="BotFlow — Telegram Bot Management Platform">
    <meta property="og:description" content="Connect your Telegram bots to BotFlow and configure every detail — commands, responses, webhooks, analytics — all from one powerful dashboard.">
    <meta property="og:image" content="{{ url('/images/og-image.png') }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="BotFlow dashboard preview">
    <meta property="og:locale" content="en_US">

    {{-- ── Twitter Card ── --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@botflow_io">
    <meta name="twitter:creator" content="@botflow_io">
    <meta name="twitter:title" content="BotFlow — Telegram Bot Management Platform">
    <meta name="twitter:description" content="Connect your Telegram bots to BotFlow and configure every detail — commands, responses, webhooks, analytics — all from one powerful dashboard.">
    <meta name="twitter:image" content="{{ url('/images/og-image.png') }}">
    <meta name="twitter:image:alt" content="BotFlow dashboard preview">

    {{-- ── Structured Data (JSON-LD) ── --}}
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "SoftwareApplication",
        "name": "BotFlow",
        "url": "{{ url('/') }}",
        "description": "An all-in-one platform to connect and configure Telegram bots — manage commands, webhooks, analytics and user flows from a single dashboard.",
        "applicationCategory": "BusinessApplication",
        "operatingSystem": "Web",
        "offers": [
            {
                "@@type": "Offer",
                "name": "Starter",
                "price": "0",
                "priceCurrency": "USD",
                "description": "Free plan — up to 2 bots, basic analytics, command builder."
            },
            {
                "@@type": "Offer",
                "name": "Pro",
                "price": "19",
                "priceCurrency": "USD",
                "description": "Unlimited bots, advanced analytics, webhook management, user broadcasts."
            }
        ],
        "publisher": {
            "@@type": "Organization",
            "name": "BotFlow",
            "url": "{{ url('/') }}",
            "logo": {
                "@@type": "ImageObject",
                "url": "{{ url('/images/logo.png') }}"
            }
        }
    }
    </script>

    {{-- ── Favicon ── --}}
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 28 28'><rect width='28' height='28' rx='8' fill='%232AABEE'/><path d='M6 14L11.5 19.5L22 9' stroke='white' stroke-width='2.5' stroke-linecap='round' stroke-linejoin='round'/></svg>">
    <link rel="apple-touch-icon" href="{{ url('/images/apple-touch-icon.png') }}">

    {{-- ── Fonts ── --}}
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:300,400,500,600,700,800&family=instrument-sans:400,500,600" rel="stylesheet" />

    @vite(['resources/scss/landing.scss'])
</head>
<body>

    {{-- ══ NAVIGATION ══ --}}
    <nav class="nav">
        <a href="/" class="nav-logo">
            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="28" height="28" rx="8" fill="#2AABEE"/>
                <path d="M6 14L11.5 19.5L22 9" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                <circle cx="14" cy="14" r="5" fill="none" stroke="rgba(255,255,255,0.3)" stroke-width="1.5"/>
            </svg>
            Bot<span>Flow</span>
        </a>

        <ul class="nav-links">
            <li><a href="#features">Features</a></li>
            <li><a href="#how-it-works">How it works</a></li>
            <li><a href="#pricing">Pricing</a></li>
            <li><a href="#" style="color:var(--text-secondary)">Docs</a></li>
        </ul>

        <div style="display:flex;align-items:center;gap:8px;">
            <a href="{{ url('/auth/sign-in') }}" class="btn-nav btn-nav-outline">Log in</a>
            <a href="{{ url('/auth/sign-up') }}" class="btn-nav btn-nav-primary">Get started</a>
            <button class="nav-mobile-btn" aria-label="Menu">
                <svg width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
                    <line x1="3" y1="6" x2="19" y2="6"/><line x1="3" y1="11" x2="19" y2="11"/><line x1="3" y1="16" x2="19" y2="16"/>
                </svg>
            </button>
        </div>
    </nav>

    {{-- ══ HERO ══ --}}
    <section class="hero">
        <div class="blob blob-1"></div>
        <div class="blob blob-2"></div>
        <div class="blob blob-3"></div>
        <div class="hero-grid-line"></div>

        <div class="container">
            <div class="hero-inner">
                <div class="hero-badge">
                    <span class="hero-badge-dot"></span>
                    Telegram Bot Management — Reinvented
                </div>

                <h1 class="hero-title">
                    Configure your bots<br>
                    with <span class="accent-word">zero friction</span>
                </h1>

                <p class="hero-subtitle">
                    BotFlow lets you add your Telegram bots to one powerful platform and configure every detail — commands, responses, webhooks, analytics — all from a single dashboard.
                </p>

                <div class="hero-actions">
                    <a href="{{ url('/auth/sign-up') }}" class="btn-primary">
                        <svg width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                        Start for free
                    </a>
                    <a href="#how-it-works" class="btn-secondary">
                        <svg width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polygon points="10,8 16,12 10,16" fill="currentColor"/></svg>
                        See how it works
                    </a>
                </div>

                {{-- Dashboard mockup --}}
                <div class="hero-mockup">
                    <div class="hero-mockup-wrap">
                        <div class="mockup-bar">
                            <span class="mockup-dot"></span>
                            <span class="mockup-dot"></span>
                            <span class="mockup-dot"></span>
                            <span class="mockup-bar-title">BotFlow Dashboard — My Bots</span>
                        </div>
                        <div class="mockup-body">
                            <div class="mockup-sidebar">
                                <div class="mockup-sidebar-title">My Bots</div>

                                <div class="mockup-bot-item active">
                                    <div class="mockup-bot-avatar" style="background:rgba(42,171,238,0.2);color:#2aabee;">S</div>
                                    <div>
                                        <div class="mockup-bot-name">@ShopBot</div>
                                        <div class="mockup-bot-status"><span class="mockup-status-dot" style="background:#22d3a0;"></span>Active</div>
                                    </div>
                                </div>

                                <div class="mockup-bot-item">
                                    <div class="mockup-bot-avatar" style="background:rgba(167,139,250,0.15);color:#a78bfa;">N</div>
                                    <div>
                                        <div class="mockup-bot-name">@NewsBot</div>
                                        <div class="mockup-bot-status"><span class="mockup-status-dot" style="background:#22d3a0;"></span>Active</div>
                                    </div>
                                </div>

                                <div class="mockup-bot-item">
                                    <div class="mockup-bot-avatar" style="background:rgba(251,191,36,0.15);color:#fbbf24;">S</div>
                                    <div>
                                        <div class="mockup-bot-name">@SupportBot</div>
                                        <div class="mockup-bot-status"><span class="mockup-status-dot" style="background:#6b7280;"></span>Paused</div>
                                    </div>
                                </div>

                                <div style="margin-top:16px;padding-top:16px;border-top:1px solid var(--border);">
                                    <div style="display:flex;align-items:center;gap:8px;padding:8px 12px;border-radius:8px;background:var(--accent-dim);border:1px dashed rgba(42,171,238,0.3);cursor:default;">
                                        <svg width="14" height="14" fill="none" stroke="#2aabee" stroke-width="2" viewBox="0 0 24 24"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                                        <span style="font-size:12px;color:var(--accent);font-weight:500;">Add new bot</span>
                                    </div>
                                </div>
                            </div>

                            <div class="mockup-main">
                                <div class="mockup-main-header">
                                    <div class="mockup-main-title">@ShopBot — Overview</div>
                                    <span class="mockup-tag">
                                        <span style="width:5px;height:5px;border-radius:50%;background:#22d3a0;"></span>
                                        Live
                                    </span>
                                </div>

                                <div class="mockup-stat-row">
                                    <div class="mockup-stat-card">
                                        <div class="mockup-stat-label">Total Users</div>
                                        <div class="mockup-stat-value accent">4,821</div>
                                    </div>
                                    <div class="mockup-stat-card">
                                        <div class="mockup-stat-label">Messages / day</div>
                                        <div class="mockup-stat-value">1,204</div>
                                    </div>
                                    <div class="mockup-stat-card">
                                        <div class="mockup-stat-label">Commands</div>
                                        <div class="mockup-stat-value">18</div>
                                    </div>
                                </div>

                                <div class="mockup-chart">
                                    <div class="mockup-chart-label">Activity — last 7 days</div>
                                    <div class="chart-bars">
                                        <div class="chart-bar" style="height:40%"></div>
                                        <div class="chart-bar" style="height:65%"></div>
                                        <div class="chart-bar" style="height:50%"></div>
                                        <div class="chart-bar" style="height:80%"></div>
                                        <div class="chart-bar" style="height:60%"></div>
                                        <div class="chart-bar" style="height:90%"></div>
                                        <div class="chart-bar" style="height:75%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ══ TRUSTED BY ══ --}}
    <section class="trusted">
        <div class="container">
            <div class="trusted-label">Trusted by teams building on Telegram</div>
            <div class="trusted-logos">
                <span class="trusted-logo">Acme Store</span>
                <span class="trusted-logo">MediaGroup</span>
                <span class="trusted-logo">TechStart</span>
                <span class="trusted-logo">CloudVenture</span>
                <span class="trusted-logo">DevHouse</span>
                <span class="trusted-logo">BotFactory</span>
            </div>
        </div>
    </section>

    {{-- ══ FEATURES ══ --}}
    <section class="section" id="features">
        <div class="container">
            <div class="section-header reveal">
                <div class="section-label">
                    <svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"/></svg>
                    Platform Features
                </div>
                <h2 class="section-title">Everything you need to run<br>powerful Telegram bots</h2>
                <p class="section-subtitle">From simple command handlers to complex automated workflows — manage it all from one clean interface.</p>
            </div>

            <div class="features-grid">
                {{-- Card 1 --}}
                <div class="feature-card reveal reveal-delay-1">
                    <div class="feature-icon">
                        <svg width="22" height="22" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    </div>
                    <div class="feature-title">Command Builder</div>
                    <div class="feature-desc">Create, edit and organize bot commands visually. Define triggers, parameters, and automated responses without writing a single line of code.</div>
                </div>

                {{-- Card 2 --}}
                <div class="feature-card reveal reveal-delay-2">
                    <div class="feature-icon">
                        <svg width="22" height="22" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    </div>
                    <div class="feature-title">Webhook Management</div>
                    <div class="feature-desc">Configure and monitor webhooks effortlessly. Inspect incoming payloads, set up retry policies, and debug delivery issues in real time.</div>
                </div>

                {{-- Card 3 --}}
                <div class="feature-card reveal reveal-delay-3">
                    <div class="feature-icon">
                        <svg width="22" height="22" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                    </div>
                    <div class="feature-title">Analytics Dashboard</div>
                    <div class="feature-desc">Track active users, message volumes, command usage, and user retention. Gain insights that help you improve your bot experience.</div>
                </div>

                {{-- Card 4 (wide) --}}
                <div class="feature-card feature-card-wide reveal">
                    <div class="feature-body">
                        <div>
                            <div class="feature-icon">
                                <svg width="22" height="22" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 10h16M4 14h16M4 18h16"/></svg>
                            </div>
                            <div class="feature-title">Inline Keyboard Builder</div>
                            <div class="feature-desc">Drag-and-drop buttons and inline menus directly into your message templates. Attach callback actions, URLs, or payment flows with one click.</div>
                        </div>
                        <div style="background:var(--bg-secondary);border:1px solid var(--border);border-radius:12px;padding:16px;">
                            <div style="font-size:11px;color:var(--text-muted);margin-bottom:10px;text-transform:uppercase;letter-spacing:0.07em;">Preview</div>
                            <div style="background:#1a3a4a;border-radius:8px;padding:12px;font-size:12px;color:#cce8ff;margin-bottom:10px;">👋 Welcome to ShopBot! What would you like to do?</div>
                            <div style="display:grid;grid-template-columns:1fr 1fr;gap:6px;">
                                <div style="background:var(--accent-dim);border:1px solid rgba(42,171,238,0.3);border-radius:6px;padding:8px;text-align:center;font-size:11px;color:var(--accent);font-weight:500;">🛒 Browse</div>
                                <div style="background:var(--accent-dim);border:1px solid rgba(42,171,238,0.3);border-radius:6px;padding:8px;text-align:center;font-size:11px;color:var(--accent);font-weight:500;">📦 Orders</div>
                                <div style="background:rgba(255,255,255,0.04);border:1px solid var(--border);border-radius:6px;padding:8px;text-align:center;font-size:11px;color:var(--text-muted);">❓ Help</div>
                                <div style="background:rgba(255,255,255,0.04);border:1px solid var(--border);border-radius:6px;padding:8px;text-align:center;font-size:11px;color:var(--text-muted);">⚙️ Settings</div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Card 5 --}}
                <div class="feature-card reveal reveal-delay-1">
                    <div class="feature-icon">
                        <svg width="22" height="22" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    </div>
                    <div class="feature-title">User Management</div>
                    <div class="feature-desc">View all users who interact with your bots. Segment, block, or send targeted broadcasts to specific user groups.</div>
                </div>

                {{-- Card 6 --}}
                <div class="feature-card reveal reveal-delay-2">
                    <div class="feature-icon">
                        <svg width="22" height="22" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                    </div>
                    <div class="feature-title">Secure Token Storage</div>
                    <div class="feature-desc">Your Telegram bot tokens are encrypted at rest and never exposed via the interface. Role-based access control for every team member.</div>
                </div>

                {{-- Card 7 --}}
                <div class="feature-card reveal reveal-delay-3">
                    <div class="feature-icon">
                        <svg width="22" height="22" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
                    </div>
                    <div class="feature-title">Multi-Bot Support</div>
                    <div class="feature-desc">Manage an unlimited number of Telegram bots under a single account. Switch between projects in seconds with no context switching.</div>
                </div>
            </div>
        </div>
    </section>

    {{-- ══ HOW IT WORKS ══ --}}
    <section class="section" id="how-it-works" style="background:linear-gradient(180deg,var(--bg-secondary),var(--bg-primary));">
        <div class="container">
            <div class="section-header reveal" style="text-align:center;">
                <div class="section-label" style="justify-content:center;">
                    <svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg>
                    How It Works
                </div>
                <h2 class="section-title">Up and running in minutes</h2>
                <p class="section-subtitle" style="margin:0 auto;">No complicated setup. Connect your bots and start configuring in just a few steps.</p>
            </div>

            <div class="steps-grid">
                <div class="step-item reveal reveal-delay-1">
                    <div class="step-number">1</div>
                    <div class="step-title">Create a Telegram bot</div>
                    <div class="step-desc">Talk to @BotFather on Telegram to create a new bot. You'll get an API token — that's all you need.</div>
                </div>
                <div class="step-item reveal reveal-delay-2">
                    <div class="step-number">2</div>
                    <div class="step-title">Add it to BotFlow</div>
                    <div class="step-desc">Paste your bot token into our secure import wizard. Your bot appears in the dashboard instantly.</div>
                </div>
                <div class="step-item reveal reveal-delay-3">
                    <div class="step-number">3</div>
                    <div class="step-title">Configure everything</div>
                    <div class="step-desc">Set up commands, menus, automated replies, webhooks, and more — all through a visual interface.</div>
                </div>
                <div class="step-item reveal reveal-delay-4">
                    <div class="step-number">4</div>
                    <div class="step-title">Go live & scale</div>
                    <div class="step-desc">Publish changes with one click. Monitor real-time analytics and iterate based on actual usage data.</div>
                </div>
            </div>
        </div>
    </section>

    {{-- ══ STATS ══ --}}
    <section class="stats-section">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-card reveal reveal-delay-1">
                    <div class="stat-value">10K+</div>
                    <div class="stat-label">Bots configured</div>
                </div>
                <div class="stat-card reveal reveal-delay-2">
                    <div class="stat-value">50M</div>
                    <div class="stat-label">Messages handled</div>
                </div>
                <div class="stat-card reveal reveal-delay-3">
                    <div class="stat-value">99.9%</div>
                    <div class="stat-label">Uptime SLA</div>
                </div>
                <div class="stat-card reveal reveal-delay-4">
                    <div class="stat-value">3K+</div>
                    <div class="stat-label">Active teams</div>
                </div>
            </div>
        </div>
    </section>

    {{-- ══ PRICING ══ --}}
    <section class="section" id="pricing">
        <div class="container">
            <div class="section-header reveal" style="text-align:center;">
                <div class="section-label" style="justify-content:center;">
                    <svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
                    Pricing
                </div>
                <h2 class="section-title">Simple, transparent pricing</h2>
                <p class="section-subtitle" style="margin:0 auto;">Start free, scale as you grow. No hidden fees.</p>
            </div>

            <div class="plans-grid">
                {{-- Free --}}
                <div class="plan-card reveal reveal-delay-1">
                    <div class="plan-name">Starter</div>
                    <div class="plan-price"><sup>$</sup>0</div>
                    <div class="plan-period">forever free</div>
                    <div class="plan-divider"></div>
                    <ul class="plan-features">
                        <li>
                            <svg width="15" height="15" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                            Up to 2 bots
                        </li>
                        <li>
                            <svg width="15" height="15" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                            Basic analytics
                        </li>
                        <li>
                            <svg width="15" height="15" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                            Command builder
                        </li>
                        <li class="muted">
                            <svg width="15" height="15" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
                            Webhook management
                        </li>
                        <li class="muted">
                            <svg width="15" height="15" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
                            Priority support
                        </li>
                    </ul>
                    <a href="{{ url('/auth/sign-up') }}" class="btn-plan btn-plan-outline">Get started free</a>
                </div>

                {{-- Pro (featured) --}}
                <div class="plan-card featured reveal reveal-delay-2">
                    <div class="plan-badge">Most Popular</div>
                    <div class="plan-name">Pro</div>
                    <div class="plan-price"><sup>$</sup>19</div>
                    <div class="plan-period">per month, per workspace</div>
                    <div class="plan-divider"></div>
                    <ul class="plan-features">
                        <li>
                            <svg width="15" height="15" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                            Unlimited bots
                        </li>
                        <li>
                            <svg width="15" height="15" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                            Advanced analytics
                        </li>
                        <li>
                            <svg width="15" height="15" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                            Webhook management
                        </li>
                        <li>
                            <svg width="15" height="15" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                            User broadcasts
                        </li>
                        <li>
                            <svg width="15" height="15" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                            Email support
                        </li>
                    </ul>
                    <a href="{{ url('/auth/sign-up') }}" class="btn-plan btn-plan-solid">Get Pro</a>
                </div>

                {{-- Enterprise --}}
                <div class="plan-card reveal reveal-delay-3">
                    <div class="plan-name">Enterprise</div>
                    <div class="plan-price" style="font-size:32px;padding-top:8px;">Custom</div>
                    <div class="plan-period">tailored to your scale</div>
                    <div class="plan-divider"></div>
                    <ul class="plan-features">
                        <li>
                            <svg width="15" height="15" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                            Everything in Pro
                        </li>
                        <li>
                            <svg width="15" height="15" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                            SSO & SAML
                        </li>
                        <li>
                            <svg width="15" height="15" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                            SLA guarantee
                        </li>
                        <li>
                            <svg width="15" height="15" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                            Dedicated manager
                        </li>
                        <li>
                            <svg width="15" height="15" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                            On-premise option
                        </li>
                    </ul>
                    <a href="mailto:hello@botflow.io" class="btn-plan btn-plan-outline">Contact sales</a>
                </div>
            </div>
        </div>
    </section>

    {{-- ══ CTA ══ --}}
    <section class="cta-section">
        <div class="container">
            <div class="cta-card reveal">
                <h2 class="cta-title">Ready to supercharge<br>your Telegram bots?</h2>
                <p class="cta-subtitle">Join thousands of developers and businesses already using BotFlow.</p>
                <div class="hero-actions">
                    <a href="{{ url('/auth/sign-up') }}" class="btn-primary">
                        <svg width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                        Create free account
                    </a>
                    <a href="#" class="btn-secondary">Read documentation</a>
                </div>
            </div>
        </div>
    </section>

    {{-- ══ FOOTER ══ --}}
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-brand">
                    <a href="/" class="footer-logo">
                        <svg width="24" height="24" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="28" height="28" rx="8" fill="#2AABEE"/>
                            <path d="M6 14L11.5 19.5L22 9" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Bot<span>Flow</span>
                    </a>
                    <p class="footer-brand-desc">The easiest way to build, configure, and scale Telegram bots — without writing infrastructure code.</p>
                </div>

                <div>
                    <div class="footer-col-title">Product</div>
                    <ul class="footer-links">
                        <li><a href="#features">Features</a></li>
                        <li><a href="#pricing">Pricing</a></li>
                        <li><a href="#how-it-works">How it works</a></li>
                        <li><a href="#">Changelog</a></li>
                    </ul>
                </div>

                <div>
                    <div class="footer-col-title">Resources</div>
                    <ul class="footer-links">
                        <li><a href="#">Documentation</a></li>
                        <li><a href="#">API Reference</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Status</a></li>
                    </ul>
                </div>

                <div>
                    <div class="footer-col-title">Company</div>
                    <ul class="footer-links">
                        <li><a href="#">About</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="mailto:hello@botflow.io">Contact</a></li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <span>&copy; {{ date('Y') }} BotFlow. All rights reserved.</span>
                <div class="footer-social">
                    {{-- Telegram --}}
                    <a href="https://t.me/destroy_the_wall" aria-label="Telegram" target="_blank">
                        <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm5.562 8.248l-2.014 9.49c-.145.658-.537.818-1.084.508l-3-2.21-1.447 1.394c-.16.16-.295.295-.605.295l.213-3.053 5.56-5.023c.242-.213-.054-.333-.373-.12L7.06 14.585l-2.95-.92c-.642-.204-.654-.643.136-.953l11.526-4.446c.537-.194 1.006.131.79.982z"/></svg>
                    </a>
                    {{-- GitHub --}}
                    <a href="https://github.com/taleastromex" aria-label="GitHub" target="_blank">
                        <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C5.374 0 0 5.373 0 12c0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23A11.509 11.509 0 0112 5.803c1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576C20.566 21.797 24 17.3 24 12c0-6.627-5.373-12-12-12z"/></svg>
                    </a>
                    {{-- Twitter/X --}}
                    <a href="#" aria-label="Twitter">
                        <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.744l7.73-8.835L1.254 2.25H8.08l4.253 5.622zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Intersection Observer for scroll animations
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

        document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
    </script>
</body>
</html>
