<?php

/**
 * components/head.php
 * Renders a full <head> block with default CDN includes and accepts
 * dynamic page title and optional extras (strings or arrays of tags).
 *
 * Usage:
 * <?= view('components/head', ['title' => 'Page title']) ?>
 */

$title = $title ?? 'Sunset Funeral Homes';
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?= esc($title) ?></title>

    <!-- Default CDN includes -->
    <!-- Google Fonts: Playfair Display + Lato (global) -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- Tailwind CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <!-- Global base typography -->
    <style>
        :root {
            --sage-dark: #6F8E78;
            --sage: #8DAA91;
            --sage-light: #CFE6D7;

            --rose-dark: #A87D79;
            --rose: #C7A6A0;
            --rose-light: #EDD9D6;

            --stone-dark: #d6d6d6ff;
            --stone: #aaaaaaff;
            --stone-light: #c2c2c2ff;
        }

        .swatch {
            width: 100%;
            height: 3rem;
            border-radius: .375rem;
            border: 1px solid rgba(0, 0, 0, 0.06);
        }

        /* Button color utilities using design tokens */
        .btn-sage {
            background: var(--sage-dark);
            color: white;
        }

        .btn-sage:hover {
            background: var(--sage);
        }

        .btn-sage-dark {
            background: var(--sage);
            color: white;
        }

        .btn-sage-dark:hover {
            background: var(--sage-dark);
        }

        .btn-rose {
            background: var(--rose-dark);
            color: white;
        }

        .btn-rose:hover {
            background: var(--rose);
        }

        .btn-rose-dark {
            background: var(--rose);
            color: white;
        }

        .btn-rose-dark:hover {
            background: var(--rose-dark);
        }

        .btn-border {
            border-color: var(--rose);
            border-width: 2px;
            color: var(--rose);
            font-weight: 600;
        }

        .btn-border:hover {
            color: white;
            background: var(--rose);
            font-weight: 500;
        }

        .btn-border-dark {
            border-color: var(--rose-dark);
            border-width: 2px;
            color: var(--rose-dark);
            font-weight: 600;
        }

        .btn-border-dark:hover {
            color: white;
            background: var(--rose-dark);
        }

        .btn-disabled {
            background-color: var(--stone);
            color: white;
            cursor: not-allowed;
        }

        /* Header CTA uses the main accent (sage-dark) */
        .header-cta {
            background: var(--sage-dark);
            color: white;
        }

        .header-cta:hover {
            background: var(--sage);
        }

        /* Small token-driven utilities */
        .text-sage-dark {
            color: var(--sage-dark);
        }

        .text-sage {
            color: var(--sage);
        }

        .bg-sage-light {
            background: var(--sage-light);
        }

        .bg-sage {
            background: var(--sage);
        }

        .bg-sage-dark {
            background: var(--sage-dark);
        }

        .bg-stone-light {
            background: var(--stone-light);
        }

        /* Base typography */
        html,
        body {
            font-family: 'Lato', system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', Arial;
        }

        h1,
        h2,
        h3,
        h4,
        h5 {
            font-family: 'Playfair Display', Georgia, serif;
        }

        a {
            color: var(--sage);
        }
    </style>
</head>