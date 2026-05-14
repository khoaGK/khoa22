<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>GRAIL | {{ $product->name ?? 'Product' }}</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Anton&amp;family=Hanken+Grotesk:wght@400;700&amp;family=JetBrains+Mono:wght@700&amp;family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "on-tertiary-fixed-variant": "#454747",
                    "error": "#ffb4ab",
                    "tertiary-fixed": "#e2e2e2",
                    "tertiary-container": "#939494",
                    "on-secondary-fixed": "#1c1b1b",
                    "tertiary-fixed-dim": "#c6c6c7",
                    "on-primary-fixed-variant": "#7f2b00",
                    "on-primary-fixed": "#370e00",
                    "primary-container": "#ff5f00",
                    "on-tertiary-container": "#2b2d2d",
                    "on-primary": "#5a1c00",
                    "on-error-container": "#ffdad6",
                    "surface-container-lowest": "#0e0e0e",
                    "on-background": "#e2e2e2",
                    "on-tertiary-fixed": "#1a1c1c",
                    "on-error": "#690005",
                    "surface-container-low": "#1b1b1b",
                    "inverse-primary": "#a63b00",
                    "primary": "#ffb599",
                    "on-tertiary": "#2f3131",
                    "surface": "#131313",
                    "primary-fixed-dim": "#ffb599",
                    "on-secondary-container": "#b7b5b4",
                    "surface-variant": "#353535",
                    "outline-variant": "#5b4137",
                    "secondary-fixed": "#e5e2e1",
                    "secondary-fixed-dim": "#c8c6c5",
                    "secondary-container": "#474746",
                    "secondary": "#c8c6c5",
                    "primary-fixed": "#ffdbce",
                    "error-container": "#93000a",
                    "surface-container": "#1f1f1f",
                    "on-surface-variant": "#e4bfb1",
                    "inverse-surface": "#e2e2e2",
                    "surface-container-high": "#2a2a2a",
                    "on-secondary-fixed-variant": "#474746",
                    "surface-bright": "#393939",
                    "tertiary": "#c6c6c7",
                    "inverse-on-surface": "#303030",
                    "on-secondary": "#313030",
                    "background": "#131313",
                    "surface-dim": "#131313",
                    "surface-tint": "#ffb599",
                    "on-primary-container": "#531a00",
                    "outline": "#ab8a7d",
                    "on-surface": "#e2e2e2",
                    "surface-container-highest": "#353535"
            },
            "borderRadius": {
                    "DEFAULT": "0rem",
                    "lg": "0rem",
                    "xl": "0rem",
                    "full": "9999px"
            },
            "spacing": {
                    "container-margin": "2rem",
                    "stack-loose": "4rem",
                    "section-gap": "6rem",
                    "stack-compact": "1rem",
                    "base": "4px",
                    "gutter": "1.5rem"
            },
            "fontFamily": {
                    "headline-lg": ["Anton"],
                    "display-xl": ["Anton"],
                    "body-md": ["Hanken Grotesk"],
                    "label-sm": ["JetBrains Mono"],
                    "headline-lg-mobile": ["Anton"]
            },
            "fontSize": {
                    "headline-lg": ["48px", {"lineHeight": "48px", "fontWeight": "400"}],
                    "display-xl": ["80px", {"lineHeight": "80px", "letterSpacing": "-0.02em", "fontWeight": "400"}],
                    "body-md": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                    "label-sm": ["12px", {"lineHeight": "16px", "letterSpacing": "0.1em", "fontWeight": "700"}],
                    "headline-lg-mobile": ["36px", {"lineHeight": "36px", "fontWeight": "400"}]
            }
          },
        },
      }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 300, 'GRAD' 0, 'opsz' 24;
        }
        .scrim-bottom {
            background: linear-gradient(to top, rgba(19, 19, 19, 0.9) 0%, transparent 100%);
        }
        .custom-scrollbar::-webkit-scrollbar { width: 4px; }
        .custom-scrollbar::-webkit-scrollbar-track { background: #131313; }
        .custom-scrollbar::-webkit-scrollbar-thumb { background: #353535; }
    </style>
</head>
<body class="bg-background text-on-background font-body-md selection:bg-primary-container selection:text-on-primary-container">
<!-- TopNavBar -->
<header class="fixed top-0 w-full z-50 bg-background dark:bg-background border-b border-secondary-container flex justify-between items-center w-full px-container-margin py-4 max-w-full">
<div class="flex items-center gap-12">
<span class="font-display-xl text-headline-lg-mobile md:text-headline-lg uppercase tracking-tighter text-primary-container font-headline-lg">GRAIL</span>
<nav class="hidden md:flex items-center gap-8">
<a class="text-on-surface-variant hover:text-primary-container transition-colors font-label-sm text-label-sm" href="/">Home</a>
<a class="text-on-surface-variant hover:text-primary-container transition-colors font-label-sm text-label-sm" href="/category">category</a>
<a class="text-primary-container border-b-2 border-primary-container pb-1 font-label-sm text-label-sm" href="/category">product</a>
</nav>
</div>
<div class="flex items-center gap-6">
<div class="hidden lg:flex items-center border-b border-outline-variant pb-1">
<span class="material-symbols-outlined text-on-surface-variant mr-2">search</span>
<input class="bg-transparent border-none focus:ring-0 text-label-sm font-label-sm uppercase placeholder:text-on-secondary-fixed-variant w-48" placeholder="SEARCH SNEAKERS" type="text"/>
</div>
<div class="flex items-center gap-4">
<button class="transition-all duration-100 ease-in active:scale-95 text-on-surface-variant hover:text-primary-container">
<span class="material-symbols-outlined" data-icon="search">search</span>
</button>
<button class="transition-all duration-100 ease-in active:scale-95 text-on-surface-variant hover:text-primary-container">
<span class="material-symbols-outlined" data-icon="shopping_cart">shopping_cart</span>
</button>
<button class="transition-all duration-100 ease-in active:scale-95 text-on-surface-variant hover:text-primary-container">
<span class="material-symbols-outlined" data-icon="person">person</span>
</button>
</div>
</div>
</header>
<main class="pt-24 min-h-screen px-container-margin max-w-[1440px] mx-auto">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter lg:gap-12">
<!-- Left Side: Product Gallery -->
<section class="lg:col-span-7 space-y-gutter">
<div class="relative aspect-square bg-surface-container-low overflow-hidden group">
<img alt="{{ $product->name ?? 'Product' }}" class="w-full h-full object-cover" data-alt="" src="{{ isset($product->img) ? $product->img : '' }}"/>

<div class="absolute bottom-4 left-4">
<span class="bg-on-background text-background px-3 py-1 font-label-sm text-label-sm uppercase">VIEW 360°</span>
</div>
</div>
<div class="grid grid-cols-4 gap-gutter">
<div class="aspect-square bg-surface-container-low border border-primary-container">
<img alt="Thumbnail 1" class="w-full h-full object-cover grayscale-0 transition-all hover:grayscale-0" data-alt="A detailed side profile shot of a technical black sneaker with high-contrast orange accents. The lighting is sharp and professional, showcasing the intricate texture of the knit upper and the sculptural form of the carbon fiber sole. The shot is set against a deep charcoal background, maintaining a premium, high-fashion street culture vibe." src="https://lh3.googleusercontent.com/aida-public/AB6AXuByL1_AjoYyOBpXbT7_VOAp_EFwpO7iWEz4okDYm0rgziI9FhsbSH7dQfjipJ3aAAed8v6q6277sGyPEsGEo209KISv0lMkjACoREnmZKPZ4wh-cYYOaXCbow-fb6zI44a2oYBg-2C58PuSqbnSDylhEEtrzTg0mjLY_ttJsodQr-4Zfo6174qQN5IrPToJnumsrowM31hSQe770D0ddgf5vf7h0C3JNAhkrI1wcbM5WPWrTHdnVLGQHjYnRdJrMNdknZ5nCTs5jsU"/>
</div>
<div class="aspect-square bg-surface-container-low border border-outline-variant">
<img alt="Thumbnail 2" class="w-full h-full object-cover grayscale transition-all hover:grayscale-0" data-alt="A top-down macro photograph focusing on the lacing system and tongue of an elite black sneaker. The image highlights the premium materials and a small orange 'Limited Release' tag. The lighting creates strong shadows that define the brutalist architectural lines of the footwear design. The overall mood is aggressive and minimalist." src="https://lh3.googleusercontent.com/aida-public/AB6AXuD7RT1it9Vr8bL2M9Mjbgjcz9G4CHK7ZNCVSjMpHInzGg7LGB94ekjGiXDF_uJExSxTFyR2-L64PkctK6BCe4RlIu34npfdUL9vIDZerLSZS1HlY3x6vSrYS0QEj-cYzRilsj891FJnguQ41EdbKPzdsD5hNxkUWiv0TAL2kMwTa95M8mwxuWcIKSohRKv1gh54bsYykIzfPElbG-e8uqIFveLdkGz42Knok9EmLvcY3MVPyD00InVv_NgVUqGutZUpsr22DZF0r14"/>
</div>
<div class="aspect-square bg-surface-container-low border border-outline-variant">
<img alt="Thumbnail 3" class="w-full h-full object-cover grayscale transition-all hover:grayscale-0" data-alt="An extreme close-up of the heel area of a black high-performance shoe, showcasing a translucent orange cushioning unit. The lighting is high-contrast, casting deep blacks and vibrant orange highlights. The background is dark and untextured, drawing all focus to the technical engineering and material quality of the product." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDQeMLPizNPPPrQ-_epzWAdWYzD_bwjcZPLtsQgzUWKiGpp7aZ-zNju69KBqP0dWs9Esj7RF5KoaWq0Erqc50ne6ULgCkZTf1il-OhczS-E6quf_YWpjtPq5p3YxukN-z0udeNBln4OcDwO9EVNaIvMLbHW8n2fh8rg7Lo9traZ1pnmpSkM2WZ8EYow6_E8WYg-dcKHbgvF-XSZYPBGzsZ0ibU-YpLAX2iUR1-YoNKWf3WAkLsdfHe_ePBl_1JYL81kQzT72uZrTrY"/>
</div>
<div class="aspect-square bg-surface-container-low border border-outline-variant relative flex items-center justify-center cursor-pointer group">
<img alt="Thumbnail 4" class="w-full h-full object-cover opacity-30" data-alt="A stylized action shot of a black sneaker hitting the pavement, with a splash of orange light trailing behind it to imply speed and energy. The scene is dark and urban, with high-contrast lighting that separates the subject from the moody, shadowed street environment. The visual style is unapologetic and urban." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCzJYA5kNzWm-MEpIpfPA-FF3dsdCmD8Z6iwcMcn9EryXYutbK6HE8Fh75fwpHVIoZtgKZYGvSzC2y3Bvp5uSWlV2fVRzKFlvmGmvdk9O4XBzY2DnocM9W7-NudZ7zyxI787LRa2IlJLB4G8xTGaSseaYXwdEMVylOybSJ_FjhhQeIZNAwK-r6vwEiHb-0HCvlh9-HrnnWfsx-2cgv46wVC9Qs4HBgKrKYDEk2jYJmeWYeLkAz7dPNHPbGuNT3YsuM9zBZsOplL7h4"/>
<span class="absolute font-label-sm text-label-sm text-white">+ 4 VIDEO</span>
</div>
</div>
</section>
<!-- Right Side: Product Info -->
<section class="lg:col-span-5 flex flex-col pt-4">
<div class="mb-4">
<span class="bg-on-background text-background px-3 py-1 font-label-sm text-label-sm uppercase inline-block">Limited Release</span>
</div>
<h1 class="font-headline-lg text-headline-lg uppercase mb-2">{{ $product->name ?? 'Product' }}</h1>

<div class="flex items-baseline gap-4 mb-stack-loose">
<span class="font-display-xl text-headline-lg-mobile text-primary-container">{{ isset($product->price) ? '$' . number_format($product->price, 2) : '$0.00' }}</span>
<span class="text-on-surface-variant line-through font-label-sm text-label-sm">RRP</span>
</div>
<div class="mb-stack-loose">
<div class="flex justify-between items-center mb-4">
<span class="font-label-sm text-label-sm uppercase">SELECT SIZE (US)</span>
<a class="font-label-sm text-label-sm uppercase text-on-surface-variant underline decoration-1 underline-offset-4" href="#">SIZE GUIDE</a>
</div>
<div class="grid grid-cols-4 gap-2">
<button class="border border-outline-variant py-3 font-label-sm text-label-sm hover:border-primary-container hover:text-primary-container transition-colors">8</button>
<button class="border border-outline-variant py-3 font-label-sm text-label-sm hover:border-primary-container hover:text-primary-container transition-colors">8.5</button>
<button class="border border-primary-container bg-primary-container text-on-primary-container py-3 font-label-sm text-label-sm">9</button>
<button class="border border-outline-variant py-3 font-label-sm text-label-sm hover:border-primary-container hover:text-primary-container transition-colors">9.5</button>
<button class="border border-outline-variant py-3 font-label-sm text-label-sm hover:border-primary-container hover:text-primary-container transition-colors">10</button>
<button class="border border-outline-variant py-3 font-label-sm text-label-sm hover:border-primary-container hover:text-primary-container transition-colors">10.5</button>
<button class="border border-outline-variant py-3 font-label-sm text-label-sm hover:border-primary-container hover:text-primary-container transition-colors">11</button>
<button class="border border-outline-variant py-3 font-label-sm text-label-sm opacity-30 cursor-not-allowed">12</button>
</div>
</div>
<div class="flex flex-col gap-3 mb-stack-loose">
<button class="w-full bg-primary-container text-on-primary-container font-headline-lg text-headline-lg-mobile py-6 uppercase tracking-tight hover:brightness-110 active:scale-[0.98] transition-all">
                        ADD TO CART
                    </button>
<button class="w-full border border-on-background text-on-background font-headline-lg text-headline-lg-mobile py-6 uppercase tracking-tight hover:bg-on-background hover:text-background active:scale-[0.98] transition-all">
                        BUY IT NOW
                    </button>
</div>
<!-- Accordion / Tech Specs -->
<div class="border-t border-outline-variant pt-8">
<h2 class="font-headline-lg text-headline-lg-mobile uppercase mb-6">THE BLUEPRINT</h2>
<div class="space-y-6">
<div>
<span class="font-label-sm text-label-sm text-primary-container block mb-1">CHASSIS</span>
<p class="font-body-md text-on-surface-variant">Forged carbon fiber propulsion plate with reactive TPU scaffolding. Engineered for 100% energy return on impact.</p>
</div>
<div>
<span class="font-label-sm text-label-sm text-primary-container block mb-1">UPPER</span>
<p class="font-body-md text-on-surface-variant">Triple-layer G-KNIT weave with ballistic nylon reinforcements. Laser-perforated for maximum heat dissipation.</p>
</div>
<div>
<span class="font-label-sm text-label-sm text-primary-container block mb-1">TRACTION</span>
<p class="font-body-md text-on-surface-variant">Omni-directional 'Strike' rubber lugs. High-friction compound designed for aggressive multi-surface pivots.</p>
</div>
</div>
</div>
<div class="mt-12 flex items-center gap-8">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary-container">verified</span>
<span class="font-label-sm text-[10px] uppercase tracking-widest">AUTHENTICITY GUARANTEED</span>
</div>
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary-container">local_shipping</span>
<span class="font-label-sm text-[10px] uppercase tracking-widest">FAST GLOBAL SHIPPING</span>
</div>
</div>
</section>
</div>
<!-- Recommendation Section -->
<section class="mt-section-gap mb-section-gap">
<h2 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg uppercase mb-gutter">YOU MIGHT ALSO SEEK</h2>
<div class="grid grid-cols-2 md:grid-cols-4 gap-gutter">
<div class="group cursor-pointer">
<div class="aspect-[4/5] bg-surface-container-low overflow-hidden mb-4 relative">
<img alt="Rec 1" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" data-alt="A side view of a minimalist grey and white sneaker with high-tech detailing. The lighting is soft but directed, highlighting the smooth leather and mesh panels. The background is a clean, dark grey gradient that matches the elite, professional brand identity." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAwUgURbdiZaQxl2o5q3TKKyBmsVHBebXAa06fGSJsIVtHUAOpOZF64j40TOLFWoMCaoXhatX7OCj6GH2u9yH9i6j1HfJ-_lB6K8FORKTJ0QLmvEN9Ss_0qRflfndRMcRHpvRVsQNTZfbrMYHD4UHoDxDbH8MOKUZnmJtXrFZC7hDT-J0da4buLa8TNdb_xS-WJ0mos3jV6d0Y-Y1ZdcCLqZdWOcGtImErZQc7mCm1Nie20nInrGwdYEIVXq7xMd9Hi2L3C0lKuOus"/>
<div class="absolute top-2 right-2">
<span class="bg-background text-on-background px-2 py-1 font-label-sm text-[10px] uppercase">ELITE ONLY</span>
</div>
</div>
<p class="font-label-sm text-label-sm uppercase text-on-surface-variant mb-1">SNEAKERS</p>
<h3 class="font-headline-lg text-xl uppercase mb-1">AERO VORTEX S2</h3>
<p class="text-primary-container font-label-sm">$380</p>
</div>
<div class="group cursor-pointer">
<div class="aspect-[4/5] bg-surface-container-low overflow-hidden mb-4 relative">
<img alt="Rec 2" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" data-alt="A front-facing shot of a bold red and black sneaker with a chunky, sculptural sole. The lighting is dramatic, casting long shadows across the dark floor. The aesthetic is aggressive and urban, emphasizing the shoe's presence as a statement piece in high-fashion streetwear." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBGwI_5AorEgF14Y5HIMR3n4X1xzofgQL2ZgJF0pNNka3aEFGxX1U4iyyypiAFrIgA_jJDqW1DPIcI_e5bcRborTqPv42vZTo16PBVbBKlAmFqhivMmM0ZV0aDO85YE8SYIJc4pNu3cKeKm-SAYAHWtw7ts8spY5wWD9aQeP7nJYkRyxSKtYig2ZEB-hos6GfTqrYRl5KDboeP9J65KVMirrjcjSrglD3SS31odqmYuEP2H5u5wVoww32YWn42xhR3j_hCPi9iQqC8"/>
</div>
<p class="font-label-sm text-label-sm uppercase text-on-surface-variant mb-1">SNEAKERS</p>
<h3 class="font-headline-lg text-xl uppercase mb-1">TITAN CORE RED</h3>
<p class="text-primary-container font-label-sm">$295</p>
</div>
<div class="group cursor-pointer">
<div class="aspect-[4/5] bg-surface-container-low overflow-hidden mb-4 relative">
<img alt="Rec 3" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" data-alt="A studio photograph of a vibrant lime green high-performance sneaker floating in a black void. Intense spotlighting creates a futuristic, neon-glow effect on the edges of the fabric. The image is designed to feel high-energy and exclusive, catering to the drop culture audience." src="https://lh3.googleusercontent.com/aida-public/AB6AXuB2OqxuoUY2Mt-BIeiiXdxjJlBNTNnZ8ilS2JmlUDgupfve6RjJf7xq0YzjnsufNSx68LHB-MzF6AMbICh41qoN7OSttg2ZzbVXmzWURiepkdVUX9kw820Z6IVAMIhMFQPFr9ewsOYyyvP-6GdDOh7C5y7fAg8tZxlRe4fKV7TwOn34ZOpMrpOzD9snK14EMBIy2VF5k7m6kpiaRtkNRReQuSlNhL7m7SIuDcWKgp5Q6cd64ke6t28iANvOIk2nGQtsB4Yz_DMJmhw"/>
<div class="absolute top-2 right-2">
<span class="bg-primary-container text-on-primary-container px-2 py-1 font-label-sm text-[10px] uppercase">NEW DROP</span>
</div>
</div>
<p class="font-label-sm text-label-sm uppercase text-on-surface-variant mb-1">SNEAKERS</p>
<h3 class="font-headline-lg text-xl uppercase mb-1">CYBER LIME X</h3>
<p class="text-primary-container font-label-sm">$450</p>
</div>
<div class="group cursor-pointer">
<div class="aspect-[4/5] bg-surface-container-low overflow-hidden mb-4 relative">
<img alt="Rec 4" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" data-alt="A lifestyle product shot of a pair of vintage-style leather sneakers in beige and tan, reimagined with modern technical materials. The lighting is warm yet moody, with a strong focus on the rich leather textures and precision stitching. The background is a minimalist black studio setting." src="https://lh3.googleusercontent.com/aida-public/AB6AXuA0xxc23qIJ-c8tAFH40PqbhwmP9PSqs3Vj_--KtHgTEH42E6Ddctxz4QR0lvTy5D6RkPd_08LjZDTxjJXPiWuEufr8wTpBi06Wy4HFLSWF65P0NHQGNYwNlbH4yXHVJ7Y3k6IC87p2AxtFX73ryuKMWDT-rFq35I8SOSTe_Z_ziu64qZVZEY5x0jO8OZRCIQtoUGVm5cv3qR9ET3k9EoS0BPaN7loBMqnRCFpGw0Owj4f7JyU31kPrssAB692ioo7EFJ0aLvlONvE"/>
</div>
<p class="font-label-sm text-label-sm uppercase text-on-surface-variant mb-1">SNEAKERS</p>
<h3 class="font-headline-lg text-xl uppercase mb-1">HERITAGE HYBRID</h3>
<p class="text-primary-container font-label-sm">$310</p>
</div>
</div>
</section>
</main>
<!-- Footer -->
<footer class="bg-surface-container-lowest dark:bg-surface-container-lowest border-t border-secondary-container w-full mt-stack-loose px-container-margin py-stack-loose flex flex-col md:flex-row justify-between items-center gap-gutter">
<div class="flex flex-col md:flex-row items-center gap-8 md:gap-12">
<span class="font-display-xl text-headline-lg-mobile text-primary-container font-headline-lg uppercase tracking-tighter">GRAIL</span>
<div class="flex gap-6">
<a class="font-label-sm text-label-sm text-on-surface-variant hover:text-white transition-colors" href="#">PRIVACY</a>
<a class="font-label-sm text-label-sm text-on-surface-variant hover:text-white transition-colors" href="#">TERMS</a>
<a class="font-label-sm text-label-sm text-on-surface-variant hover:text-white transition-colors" href="#">AUTHENTICITY</a>
<a class="font-label-sm text-label-sm text-on-surface-variant hover:text-white transition-colors" href="#">SHIPPING</a>
</div>
</div>
<div class="text-center md:text-right">
<p class="font-label-sm text-label-sm text-on-surface-variant">© 2024 GRAIL ARCHIVE. ALL RIGHTS RESERVED.</p>
</div>
</footer>
</body></html>