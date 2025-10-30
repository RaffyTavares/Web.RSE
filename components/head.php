<?php  ?>

<head>
    <!-- Meta básicos -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- SEO Mejorado -->
    <meta name="description" content="<?php echo isset($meta_description) ? $meta_description : 'Especialistas en reparación de tarjetas electrónicas inverter para aires acondicionados y neveras en República Dominicana. Servicio técnico profesional, diagnóstico gratuito y garantía. Expertos en tecnología inverter con más de 10 años de experiencia.'; ?>">
    
    <meta name="keywords" content="<?php echo isset($meta_keywords) ? $meta_keywords : 'reparación tarjetas inverter, aires acondicionados República Dominicana, neveras inverter, tecnología inverter, electrónica Santo Domingo, reparación AC inverter, tarjetas electronicas, compresor inverter, diagnóstico aires acondicionados, servicio técnico refrigeración, repuestos inverter, mantenimiento AC'; ?>">
    
    <meta name="author" content="Rafael Soluciones Electrónica">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta name="googlebot" content="index, follow">
    
    <!-- Información de ubicación -->
    <meta name="geo.region" content="DO">
    <meta name="geo.placename" content="Santo Domingo, República Dominicana">
    <meta name="geo.position" content="18.4861;-69.9312">
    <meta name="ICBM" content="18.4861, -69.9312">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo isset($canonical_url) ? $canonical_url : 'https://rse-inverter.com/'; ?>">
    <meta property="og:title" content="<?php echo isset($og_title) ? $og_title : $site_title; ?>">
    <meta property="og:description" content="<?php echo isset($og_description) ? $og_description : 'Reparación especializada de tarjetas inverter para aires acondicionados y neveras. Diagnóstico gratuito, garantía y servicio técnico profesional en República Dominicana.'; ?>">
    <meta property="og:image" content="<?php echo isset($og_image) ? $og_image : 'https://rse-inverter.com/img/og-image.jpg'; ?>">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="Rafael Soluciones Electrónica - Especialistas en Tecnología Inverter">
    <meta property="og:site_name" content="Rafael Soluciones Electrónica">
    <meta property="og:locale" content="es_DO">
    
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="<?php echo isset($canonical_url) ? $canonical_url : 'https://rse-inverter.com/'; ?>">
    <meta name="twitter:title" content="<?php echo isset($twitter_title) ? $twitter_title : $site_title; ?>">
    <meta name="twitter:description" content="<?php echo isset($twitter_description) ? $twitter_description : 'Especialistas en reparación de tarjetas inverter. Diagnóstico gratuito y garantía en República Dominicana.'; ?>">
    <meta name="twitter:image" content="<?php echo isset($twitter_image) ? $twitter_image : 'https://rse-inverter.com/img/twitter-image.jpg'; ?>">
    <meta name="twitter:image:alt" content="RSE - Tecnología Inverter">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="<?php echo isset($canonical_url) ? $canonical_url : 'https://rse-inverter.com' . $_SERVER['REQUEST_URI']; ?>">
    
    <!-- Hreflang para internacionalización -->
    <link rel="alternate" hreflang="es-do" href="<?php echo isset($canonical_url) ? $canonical_url : 'https://rse-inverter.com' . $_SERVER['REQUEST_URI']; ?>">
    <link rel="alternate" hreflang="es" href="<?php echo isset($canonical_url) ? $canonical_url : 'https://rse-inverter.com' . $_SERVER['REQUEST_URI']; ?>">
    
    <!-- Title dinámico -->
    <title><?php echo isset($page_title) ? $page_title : $site_title; ?></title>
    
    <!-- Preconnect para optimización de carga -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdn.jsdelivr.net">
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">
    
    <!-- DNS Prefetch -->
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="dns-prefetch" href="//cdn.jsdelivr.net">
    <link rel="dns-prefetch" href="//cdnjs.cloudflare.com">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-..." crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" integrity="sha384-..." crossorigin="anonymous">
    
    <!-- CSS de animaciones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha384-..." crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" integrity="sha384-..." crossorigin="anonymous">
    
    <!-- Google Fonts optimizado -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Lora:ital,wght@0,400;0,500;1,400;1,700&display=swap" rel="stylesheet">
    
    <!-- CSS Personal -->
    <link href="CSS/efectos.css" rel="stylesheet">
    <link href="CSS/index.css" rel="stylesheet">
    
    <!-- Favicons mejorados -->
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="img/logo1.png">
    
    <!-- Manifest para PWA -->
    <link rel="manifest" href="manifest.json">
    <meta name="theme-color" content="#007bff">
    <meta name="msapplication-TileColor" content="#007bff">
    
    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "Rafael Soluciones Electrónica",
        "alternateName": "RSE",
        "description": "Especialistas en reparación de tarjetas electrónicas inverter para aires acondicionados y neveras",
        "url": "https://rse-inverter.com",
        "telephone": "+1-829-747-0675",
        "email": "info@rse-inverter.com",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Calle Principal",
            "addressLocality": "Santo Domingo",
            "addressRegion": "Distrito Nacional",
            "addressCountry": "DO"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": "18.4861",
            "longitude": "-69.9312"
        },
        "openingHours": "Mo-Fr 08:00-18:00, Sa 08:00-17:00",
        "priceRange": "$$",
        "serviceArea": {
            "@type": "GeoCircle",
            "geoMidpoint": {
                "@type": "GeoCoordinates",
                "latitude": "18.4861",
                "longitude": "-69.9312"
            },
            "geoRadius": "50000"
        },
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Servicios de Reparación",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Reparación Tarjetas Inverter Aire Acondicionado"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Reparación Tarjetas Inverter Neveras"
                    }
                }
            ]
        },
        "sameAs": [
            "https://www.facebook.com/rse-inverter",
            "https://www.instagram.com/rse-inverter"
        ]
    }
    </script>
    
    <!-- Critical CSS inline (opcional) -->
    <style>
        /* CSS crítico para above-the-fold */
        body { font-family: 'Lora', serif; }
        .navbar-brand { font-family: 'Montserrat', sans-serif; font-weight: 700; }
    </style>
</head>
