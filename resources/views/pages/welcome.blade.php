@extends('layouts.app') 

@section('content')
{{-- Home page placeholder --}}
<h1>DROPS</h1>
@endsection
<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Anton&amp;family=Inter:wght@400;500;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "surface-variant": "#353535",
                    "on-surface-variant": "#e4bfb1",
                    "on-tertiary-fixed": "#1c1b1b",
                    "surface-container-lowest": "#0e0e0e",
                    "on-primary-fixed-variant": "#7f2b00",
                    "on-tertiary": "#313030",
                    "tertiary-container": "#959393",
                    "on-primary-container": "#531a00",
                    "surface": "#131313",
                    "primary-fixed": "#ffdbce",
                    "on-tertiary-fixed-variant": "#474746",
                    "on-secondary-fixed-variant": "#454747",
                    "surface-tint": "#ffb599",
                    "on-primary": "#5a1c00",
                    "on-secondary-container": "#b4b5b5",
                    "on-secondary-fixed": "#1a1c1c",
                    "outline": "#ab8a7d",
                    "error": "#ffb4ab",
                    "inverse-surface": "#e2e2e2",
                    "primary-container": "#ff5f00",
                    "tertiary-fixed-dim": "#c8c6c5",
                    "on-tertiary-container": "#2c2c2c",
                    "surface-container": "#1f1f1f",
                    "background": "#131313",
                    "secondary-fixed": "#e2e2e2",
                    "tertiary-fixed": "#e5e2e1",
                    "on-surface": "#e2e2e2",
                    "inverse-primary": "#a63b00",
                    "surface-container-low": "#1b1b1b",
                    "on-primary-fixed": "#370e00",
                    "primary-fixed-dim": "#ffb599",
                    "error-container": "#93000a",
                    "secondary": "#c6c6c7",
                    "primary": "#ffb599",
                    "surface-dim": "#131313",
                    "secondary-fixed-dim": "#c6c6c7",
                    "surface-container-highest": "#353535",
                    "on-secondary": "#2f3131",
                    "inverse-on-surface": "#303030",
                    "on-background": "#e2e2e2",
                    "on-error": "#690005",
                    "tertiary": "#c8c6c5",
                    "outline-variant": "#5b4137",
                    "surface-container-high": "#2a2a2a",
                    "secondary-container": "#454747",
                    "surface-bright": "#393939",
                    "on-error-container": "#ffdad6"
            },
            "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
            },
            "spacing": {
                    "container-max": "1440px",
                    "unit": "8px",
                    "gutter": "24px",
                    "margin": "64px",
                    "section-gap": "128px"
            },
            "fontFamily": {
                    "label-bold": ["Inter"],
                    "body-lg": ["Inter"],
                    "label-sm": ["Inter"],
                    "headline-lg": ["Anton"],
                    "body-md": ["Inter"],
                    "headline-md": ["Anton"],
                    "display-2xl": ["Anton"],
                    "display-xl": ["Anton"]
            },
            "fontSize": {
                    "label-bold": ["14px", {"lineHeight": "20px", "letterSpacing": "0.1em", "fontWeight": "700"}],
                    "body-lg": ["18px", {"lineHeight": "28px", "letterSpacing": "0em", "fontWeight": "400"}],
                    "label-sm": ["12px", {"lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "500"}],
                    "headline-lg": ["48px", {"lineHeight": "52px", "letterSpacing": "0.02em", "fontWeight": "400"}],
                    "body-md": ["16px", {"lineHeight": "24px", "letterSpacing": "0em", "fontWeight": "400"}],
                    "headline-md": ["32px", {"lineHeight": "36px", "letterSpacing": "0.02em", "fontWeight": "400"}],
                    "display-2xl": ["120px", {"lineHeight": "110px", "letterSpacing": "-0.02em", "fontWeight": "400"}],
                    "display-xl": ["80px", {"lineHeight": "80px", "letterSpacing": "0em", "fontWeight": "400"}]
            }
          },
        },
      }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .block-shadow {
            box-shadow: 8px 8px 0px 0px rgba(255, 95, 0, 1);
        }
        .hover-invert:hover {
            background-color: #e2e2e2;
            color: #131313;
        }
        .text-stroke {
            -webkit-text-stroke: 1px #e2e2e2;
            color: transparent;
        }
    </style>
</head>
<body class="bg-surface text-on-surface selection:bg-primary-container selection:text-on-primary-container">
<!-- TopNavBar -->
<header class="fixed top-0 z-50 w-full bg-surface border-b border-on-surface-variant/30">
<nav class="flex justify-between items-center w-full px-margin py-gutter max-w-container-max mx-auto">
<div class="flex items-center gap-12">
<a class="font-headline-lg text-headline-lg text-on-surface italic tracking-tighter uppercase" href="/">GRAIL</a>
<div class="hidden md:flex items-center gap-8">
<a class="font-label-bold text-label-bold tracking-[0.2em] uppercase text-primary-container border-b-2 border-primary-container pb-1 transition-all duration-200" href="/   ">Home</a>
<a class="font-label-bold text-label-bold tracking-[0.2em] uppercase text-on-surface hover:text-primary-container transition-all duration-200" href="/product">product</a>
<a class="font-label-bold text-label-bold tracking-[0.2em] uppercase text-on-surface hover:text-primary-container transition-all duration-200" href="/category">category</a>
</div>
</div>
<div class="flex items-center gap-6">
<div class="hidden lg:flex items-center border-b-2 border-on-surface-variant/50 focus-within:border-primary-container transition-colors">
<span class="material-symbols-outlined text-on-surface-variant">search</span>
<form action="{{ route('search') }}" method="GET" class="flex items-center">
<input name="query" class="bg-transparent border-none focus:ring-0 font-label-bold text-label-sm placeholder:text-on-surface-variant/50 w-48 uppercase" placeholder="SEARCH SNEAKERS" type="text" value="{{ request('query') }}"/>
</form>
</div>
<a class="hover:scale-105 active:scale-95 transition-transform" href="/cart">
<span class="material-symbols-outlined text-on-surface" data-icon="shopping_cart">shopping_cart</span>
</a>
<a class="hover:scale-105 active:scale-95 transition-transform" href="/login">
<span class="material-symbols-outlined text-on-surface" data-icon="person">person</span>
</a>
</div>
</nav>
</header>
<main>
<!-- Hero Section: DROPS OF THE WEEK -->
<section class="relative h-screen w-full overflow-hidden flex items-center">
<div class="absolute inset-0 z-0">
<img class="w-full h-full object-cover opacity-60" data-alt="A high-performance luxury sneaker floating in mid-air against a deep black background with dramatic neon orange rim lighting. The photography is sharp and cinematic, highlighting the intricate mesh and carbon fiber textures of the shoe. Stark shadows and high-contrast lighting create an aggressive, professional athletic aesthetic consistent with premium streetwear branding." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDS1MUlNuOubMUzfUFfBQi8B7Wt8XqsEoA9v6H0hP6qaowOLpl1GaRcToHFWFSOTAFoVHwvKOsuodwyFcUniwvDT7xKqEljAOoykbNO7Umw9eZlwMKxH-UoBlsusJdzVlI1iGrBcpfLBxlYp1X6kKucnGBjdtIqV7HPm9QC_jETnJYKEgbclGvsU33hI4BawCBK2UHxyAt5feZe3Vu8tTRkHmL4V-AR9-K6lrKYJWZLuuk1rYcz__70LktE7Pq_GEYlbGHqSTpeSP0"/>
<div class="absolute inset-0 bg-gradient-to-r from-surface via-surface/40 to-transparent"></div>
</div>
<div class="relative z-10 px-margin w-full max-w-container-max mx-auto grid grid-cols-12 gap-gutter">
<div class="col-span-12 md:col-span-8 flex flex-col items-start">
<div class="bg-on-surface text-surface font-label-bold text-label-bold px-4 py-1 mb-6 inline-block">LIMITED RELEASE</div>
<h1 class="font-display-2xl text-display-2xl uppercase leading-none mb-8">
                        DROPS OF <br/>
<span class="text-primary-container">THE WEEK</span>
</h1>
<p class="font-body-lg text-body-lg max-w-lg mb-12 text-on-surface-variant">
                        Engineered for the unapologetic. The latest drop features high-performance silhouettes redesigned for the streets. Scarcity is the only constant.
                    </p>
<button class="bg-primary-container text-on-tertiary-fixed font-headline-md text-headline-md px-12 py-4 uppercase block-shadow hover:bg-on-surface hover:text-surface transition-all duration-300">
                        SHOP NOW
                    </button>
</div>
</div>
<div class="absolute bottom-12 right-margin flex flex-col items-end">
<span class="font-display-xl text-display-xl text-stroke opacity-30 select-none">01 / 04</span>
</div>
</section>
<!-- New Arrivals: Dynamic Grid -->
<section class="py-section-gap px-margin max-w-container-max mx-auto">
<div class="flex justify-between items-end mb-16">
<h2 class="font-display-xl text-display-xl uppercase">NEW ARRIVALS</h2>
<a class="font-label-bold text-label-bold border-b border-on-surface hover:text-primary-container hover:border-primary-container transition-all mb-4" href="/category">VIEW ALL DROPS</a>
</div>
<div class="grid grid-cols-1 md:grid-cols-4 gap- gutter">
<!-- Large Feature Card -->
@php
    $feature = $products->values()->get(0);
    $cards = $products->values()->slice(1, 4);
@endphp
<div class="md:col-span-2 md:row-span-2 group relative overflow-hidden bg-surface-container border border-on-surface-variant/20">
@php
    $firstProductId = $products->first()->id ?? null;
@endphp

@if($firstProductId)
    <a href="{{ url('/product/' . $firstProductId) }}" class="block" aria-label="View product">
        <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" data-alt="Close up of a vibrant streetwear sneaker with complex layering and neon details. The shoe is positioned on a reflective black surface with atmospheric smoke and focused orange spotlighting. The image captures the aggressive design and premium materials, emphasizing a bold, high-contrast athletic aesthetic for a luxury retail store." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAIIy3IA6lttRGGWBMQY06OLZe3InW83an1zyjnicUaZWkUCeiW5KNK51wY-j3Tcrd247cy4hs8DFxiLV9nW4uikighRfPvls-8xrQCa4XDnr0vwkLwRue5mc_uLUi3u-Y8XEOEosPSQM1nIhryRJELS3q5UcdZbfWzdp5j0xkg1QGDlM-nrlOLcN-qTuXyA-HziKnNQwNP0cOZiVV8wXDeQd3U2rRUjs8MHLPP82TdE8upmGQr8oCTN5CMn-Qh8wSNhRRum_052PA"/>
    </a>
@endif
<div class="absolute top-6 left-6 bg-on-surface text-surface font-label-bold text-label-bold px-4 py-1">NEW SEASON</div>
<div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-8">
<h3 class="font-headline-lg text-headline-lg uppercase mb-2">APEX PREDATOR V2</h3>
<p class="font-label-bold text-label-bold text-primary-container">$340.00</p>
</div>
</div>
<!-- Product Card 2 -->
<div class="group relative overflow-hidden bg-surface-container border border-on-surface-variant/20">
@php $p2 = $products->values()->get(1); @endphp
@if($p2)
    <a href="{{ url('/product/' . $p2->id) }}" class="block" aria-label="View product">
@endif
    <img class="w-full h-64 object-cover transition-transform duration-700 group-hover:scale-110" data-alt="Minimalist top-down studio shot of a lime green running sneaker against a dark charcoal background. The lighting is harsh and direct, casting a deep block shadow to the side. The shot highlights the texture of the performance knit upper and the sculptural sole unit, echoing a digital brutalist UI style." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDOEOdBNaP5BWhJrRvTaYvMzOX_5Tt5hwBtVp_HpNLoK6TlThkdAdYxGUdZrezsJUHP-J-4QtIpcAXlsgtJKl0I5bhrYL_oi0Gy0aIPmbqkSJO1jhigwc7DTdOKBqf7teTgNWUFE9oPpXnwc2-Ozm-Vu2IDDnQsl7PKBcDmTpaH8E9Casn9x0u8l2TqJcrx8bsS45OdV87rQB7sKyg6T8vH_bpK8cwCHczgaViq1KdwMzssRKJ1i_SMmXW_4ij8JF4ITFun7ihmdtQ"/>
@if($p2)
    </a>
@endif
<div class="p-6">
<h3 class="font-label-bold text-label-bold uppercase mb-1">NEON VELOCITY</h3>
<p class="font-label-bold text-label-bold text-on-surface-variant">$190.00</p>
</div>
<div class="absolute bottom-0 left-0 w-full h-1 bg-primary-container scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></div>
</div>
<!-- Product Card 3 -->
<div class="group relative overflow-hidden bg-surface-container border border-on-surface-variant/20">
@php $p3 = $products->values()->get(2); @endphp
@if($p3)
    <a href="{{ url('/product/' . $p3->id) }}" class="block" aria-label="View product">
@endif
    <img class="w-full h-64 object-cover transition-transform duration-700 group-hover:scale-110" data-alt="A premium white and grey leather sneaker displayed in a high-tech laboratory setting with blue and orange ambient lighting. The shoe features clean lines and a bulky silhouette, positioned slightly off-center to create an asymmetric, dynamic composition. The mood is futuristic, clean, and uncompromisingly bold." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBYUFKlW0n_ewpPC2sMK6M6jum6LxVIsBLjQdUiM_qrQox9CZoVo0ZxDuJqWBbEadNQDE_ilvdLBqvsqiK_P-GLq6z3D8N3opqqPR3_Cqj1hhoG73r87HhcJD5MG3co8Jo1dDyLcsVmEpb7cNLFasU49Mm3HXxb2c2itnFZKU4mQF3PqGG5RMPfOY8NG1J89G2JlEYqV-JP6eRh6uP8BIn2WepVjx6qRHqknKkohJKHLkEWwqzmcOeXzcxr7LnjJH8XmbnP-Be0LP4"/>
@if($p3)
    </a>
@endif
<div class="p-6">
<h3 class="font-label-bold text-label-bold uppercase mb-1">CHROME ECHO</h3>
<p class="font-label-bold text-label-bold text-on-surface-variant">$265.00</p>
</div>
<div class="absolute bottom-0 left-0 w-full h-1 bg-primary-container scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></div>
</div>
<!-- Product Card 4 -->
<div class="group relative overflow-hidden bg-surface-container border border-on-surface-variant/20">
@php $p4 = $products->values()->get(3); @endphp
@if($p4)
    <a href="{{ url('/product/' . $p4->id) }}" class="block" aria-label="View product">
@endif
    <img class="w-full h-64 object-cover transition-transform duration-700 group-hover:scale-110" data-alt="Side profile of a classic red sneaker with high-contrast white details. The lighting is dramatic studio-key, making the red color pop intensely against a dark, moody environment. The background is slightly textured concrete, adding a touch of urban brutalism to the premium footwear display." src="https://lh3.googleusercontent.com/aida-public/AB6AXuB543Dk3f0UjN9yc1P3Euam0GIt5QEad95TDpGgP8MZNbL3-yE8lXb5k7MDIrSXDDRM-MDhJFtGG1AOQdJNrvxsOxTyel5IIv89gyikWVbJpkGYudMrKWeaZyvstpiqGS8gZTHDGlaiPcVyVxlZ14TV2Cxcr-JaLZZ4DYvTJ2JtQ6tOCNqBHMEjXOl_haTIf1l1fUW0CYw9cu3izV0XtEqcU1Z3VYQ3dfyDRaEJFXo3cvkSD7VexrSm_npc1zp4A57V_Hd-A2skI0A"/>
@if($p4)
    </a>
@endif
<div class="p-6">
<h3 class="font-label-bold text-label-bold uppercase mb-1">SCARLET RUNNER</h3>
<p class="font-label-bold text-label-bold text-on-surface-variant">$210.00</p>
</div>
<div class="absolute bottom-0 left-0 w-full h-1 bg-primary-container scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></div>
</div>
<!-- Product Card 5 -->
<div class="group relative overflow-hidden bg-surface-container border border-on-surface-variant/20">
@php $p5 = $products->values()->get(4); @endphp
@if($p5)
    <a href="{{ url('/product/' . $p5->id) }}" class="block" aria-label="View product">
@endif
    <img class="w-full h-64 object-cover transition-transform duration-700 group-hover:scale-110" data-alt="Detail shot focusing on the sole and heel of a futuristic athletic shoe. The materials include translucent rubber and metallic silver inserts. The lighting is cold and clinical, with sharp neon orange accents reflecting off the metallic surfaces. The composition is tight and abstract, focusing on design technology." src="https://lh3.googleusercontent.com/aida-public/AB6AXuD3YjP-bHlRnSFKfLhBPowrk6kgP-r-XT6mhpOBTSewfo4c6afWlaBBhGu7PAmHjOKY0L2T0Dyull0acnIDn_L-mwvy9tU3WQdTvIyaKRJ7btahC-zNjIBnKMyMO7s7Oxhtb3RhmQPl1GYq_qcnL7o2St3PAyIH76UiUlIyezetwGBWcfo14w_8GftguIX85pUi2fLtB96pcGwHbxCLohse3bHn3XXQXEGLl-wht1twtSIvE6eYUlf0yE3tgQr5SGSAXhK0nELYS3s"/>
@if($p5)
    </a>
@endif
<div class="p-6">
<h3 class="font-label-bold text-label-bold uppercase mb-1">VOID CORE</h3>
<p class="font-label-bold text-label-bold text-on-surface-variant">$420.00</p>
</div>
<div class="absolute bottom-0 left-0 w-full h-1 bg-primary-container scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></div>
</div>
</div>
</section>
<!-- Trending Collections: High-Impact Section -->
<section class="bg-surface-container-low py-section-gap">
<div class="px-margin max-w-container-max mx-auto">
<h2 class="font-display-xl text-display-xl uppercase mb-16 text-center">TRENDING <span class="text-stroke">MARKET</span></h2>
<div class="grid grid-cols-1 md:grid-cols-3 gap-12">
<!-- Collection 1 -->
<div class="group cursor-pointer">
<div class="relative overflow-hidden mb-6 aspect-[3/4]">
<img class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105" data-alt="High-fashion streetwear model wearing oversized techwear and limited edition sneakers in a brutalist concrete environment. The lighting is cold and moody with high contrast between deep blacks and bright white highlights. The composition is editorial and aggressive, emphasizing the elite sneakerhead lifestyle." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBcilTsLhLtjwDUNXGqhrTtdUYx-xPI9JUyon7EsvCCu3JnCA7t1SMFqpnGfawaTZUWZ8MB9drSLwfIbh-DRdwgssB1dQn12V9osEPD31rYImWSjbm4qNC_DWIgO8ZVztXya4A_QKsZ99ixmZXpVXR-i0XYbp-pFU8mDs0OahtV-Ao6VLeBaO2WSCiG-zsumUzOVLxlEVZZIgHqsECmEZEKl2fcKRGmaBzTac26YXoQuTZHAW1eZTNmb9cqp9IdU5xnfbZzxSgjD2Y"/>
<div class="absolute inset-0 bg-primary-container/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
</div>
<h3 class="font-headline-md text-headline-md uppercase">URBAN ELITE</h3>
<p class="font-label-bold text-label-bold text-on-surface-variant tracking-widest uppercase">SHOP ARCHIVE</p>
</div>
<!-- Collection 2 -->
<div class="group cursor-pointer">
<div class="relative overflow-hidden mb-6 aspect-[3/4]">
<img class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105" data-alt="Dynamic shot of an athlete's feet mid-sprint on a dark track. The focus is purely on the high-tech performance footwear, which glows under sharp artificial stadium lights. Dust and grit are kicked up, adding a raw, high-energy feeling to the premium athletic photography. Deep blacks and vibrant orange accents dominate the scene." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCp5V9V4NTlnfI3Qb-2AfxeZH-qQcEMl-71XYKaXNhE1qbiQONfkFfFcZfzUgc5xVXxJpLJCXysexrp4aR1laBlNJzU1uUqPaQ7qocwLeTaNAMXa6YqOYRHDUOH02oN3yArn05PoKXV1GdwgqVZl8Y7pt_WhwnY1tgRdBLdV3MAbZXB5uk6NNhgaCIfcKPDUDFnjpN4upxrgF5jiZLCQ2_iQIF0FDQ_gc8ylccwsMwoHPqUFO6r1YV1Zf5Wsk3EsEBB3DdFX0S1IuI"/>
<div class="absolute inset-0 bg-primary-container/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
</div>
<h3 class="font-headline-md text-headline-md uppercase">PRO PERFORMANCE</h3>
<p class="font-label-bold text-label-bold text-on-surface-variant tracking-widest uppercase">DISCOVER TECH</p>
</div>
<!-- Collection 3 -->
<div class="group cursor-pointer">
<div class="relative overflow-hidden mb-6 aspect-[3/4]">
<img class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105" data-alt="A collection of luxury sneakers arranged in a geometric, sculptural stack in a minimalist, all-black studio. Subtle radial lighting creates a stage effect, highlighting the silhouettes against the darkness. The image is sophisticated and moody, conveying exclusivity and high-end retail value through disciplned composition." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDrg7rmzKQTpwd3wCcwu52TEYg2LNqYBBMM6WXHhLXdPIpkoj7vzcPamSwgeOxHjQPhtEZgNNUUR3yNw4nEIf6BNtJ63j02aB3E5e1YUSi7IzA6YJJD4dOcifB2JVjDbV2IWwmHkeTyFDOCH7B5qQIBVzhFfn6ZirPXd3ZgCRoWUmfYLxzdC6P9fQJFbEThoYivjgl1jTDEnvJhjO2C-8hH-IesM858ewIX-3Xngq3F_uBPgGcrBcwunbgCdg9tP8Xz3Y7tp1T0me4"/>
<div class="absolute inset-0 bg-primary-container/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
</div>
<h3 class="font-headline-md text-headline-md uppercase">THE ARCHIVE</h3>
<p class="font-label-bold text-label-bold text-on-surface-variant tracking-widest uppercase">EXPLORE HISTORY</p>
</div>
</div>
</div>
</section>
<!-- CTA Newsletter -->
<section class="py-section-gap px-margin max-w-container-max mx-auto border-t border-on-surface-variant/20">
<div class="grid grid-cols-1 md:grid-cols-2 gap-gutter items-center">
<div>
<h2 class="font-display-xl text-display-xl uppercase mb-4 leading-none">NEVER MISS <br/> A DROP.</h2>
<p class="font-body-lg text-body-lg text-on-surface-variant">Sign up for early access to elite releases and member-only events. The unapologetic don't wait in line.</p>
</div>
<div class="flex flex-col gap-6">
<div class="relative">
<label class="block font-label-bold text-label-sm uppercase tracking-widest mb-2">EMAIL ADDRESS</label>
<input class="w-full bg-transparent border-t-0 border-x-0 border-b-2 border-on-surface focus:border-primary-container focus:ring-0 text-headline-md font-headline-md uppercase placeholder:opacity-20 py-4" placeholder="YOUR@IDENTITY.COM" type="email"/>
</div>
<a class="bg-on-surface text-surface font-headline-md text-headline-md px-12 py-4 uppercase self-start hover:bg-primary-container hover:text-on-tertiary-fixed transition-all duration-300 inline-block text-center" href="/register">
                        JOIN THE ELITE 
                    </a>
</div>
</div>
</section>
</main>
<!-- Footer -->
<footer class="bg-surface-container-lowest py-section-gap border-t-4 border-on-surface">
<div class="grid grid-cols-1 md:grid-cols-3 gap-gutter px-margin w-full max-w-container-max mx-auto">
<div class="flex flex-col gap-8">
<div class="font-display-xl text-display-xl text-on-surface-variant opacity-10 leading-none">GRAIL</div>
<p class="font-body-md text-body-md text-on-surface-variant max-w-xs">
                    Curating the world's most sought-after athletic technology and streetwear aesthetics. For those who define their own pace.
                </p>
<div class="flex gap-4">
<a class="w-10 h-10 border border-on-surface-variant flex items-center justify-center hover:bg-primary-container hover:border-primary-container transition-colors" href="/login">
<span class="material-symbols-outlined text-sm">terminal</span>
</a>
<a class="w-10 h-10 border border-on-surface-variant flex items-center justify-center hover:bg-primary-container hover:border-primary-container transition-colors" href="/cart">
<span class="material-symbols-outlined text-sm">share</span>
</a>
</div>
</div>
<div class="flex flex-col gap-4">
<h4 class="font-headline-md text-headline-md uppercase mb-4">EXPLORE</h4>
<a class="font-label-bold text-label-bold tracking-widest uppercase text-on-surface-variant hover:text-on-surface hover:translate-x-2 transition-transform duration-300" href="/product">Drops</a>
<a class="font-label-bold text-label-bold tracking-widest uppercase text-on-surface-variant hover:text-on-surface hover:translate-x-2 transition-transform duration-300" href="/category">Collections</a>
<a class="font-label-bold text-label-bold tracking-widest uppercase text-on-surface-variant hover:text-on-surface hover:translate-x-2 transition-transform duration-300" href="/category">Archive</a>
<a class="font-label-bold text-label-bold tracking-widest uppercase text-on-surface-variant hover:text-on-surface hover:translate-x-2 transition-transform duration-300" href="/login">Elite Access</a>
</div>
<div class="flex flex-col gap-4">
<h4 class="font-headline-md text-headline-md uppercase mb-4">SERVICE</h4>
<a class="font-label-bold text-label-bold tracking-widest uppercase text-on-surface-variant hover:text-on-surface hover:translate-x-2 transition-transform duration-300" href="#">Support</a>
<a class="font-label-bold text-label-bold tracking-widest uppercase text-on-surface-variant hover:text-on-surface hover:translate-x-2 transition-transform duration-300" href="#">Shipping</a>
<a class="font-label-bold text-label-bold tracking-widest uppercase text-on-surface-variant hover:text-on-surface hover:translate-x-2 transition-transform duration-300" href="#">Returns</a>
<a class="font-label-bold text-label-bold tracking-widest uppercase text-on-surface-variant hover:text-on-surface hover:translate-x-2 transition-transform duration-300" href="#">Terms</a>
</div>
</div>
<div class="mt-24 px-margin w-full max-w-container-max mx-auto flex justify-between items-center border-t border-on-surface-variant/10 pt-8">
<span class="font-label-bold text-label-sm uppercase tracking-widest text-on-surface-variant">© 2024 GRAIL ATHLETICS. FOR THE UNAPOLOGETIC.</span>
<div class="flex gap-8">
<a class="font-label-bold text-label-sm uppercase tracking-widest text-on-surface-variant hover:text-on-surface" href="/">Privacy</a>
<a class="font-label-bold text-label-sm uppercase tracking-widest text-on-surface-variant hover:text-on-surface" href="/">Careers</a>
</div>
</div>
</footer>
</body></html   >

