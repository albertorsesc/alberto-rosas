@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
    @include('components.hero')
@endsection

@section('meta')
    <meta name="robots" content="index, follow">

    <!-- Canonical Link Tag -->
    <link rel="canonical" href="https://alberto-rosas.dev">

    <!-- Open Graph/Facebook Meta Tags -->
    <meta property="og:title" content="Alberto Rosas | Software Engineer">
    <meta property="og:description" content="Software Engineer and Consultant Alberto Rosas.">
    <meta property="og:url" content="https://alberto-rosas.dev">
    {{--<meta property="og:image" content="https://alberto-rosas.dev/images/og-image.jpg">--}}
    <meta property="og:type" content="website">

    <!-- Twitter Meta Tags -->
    {{--<meta name="twitter:card" content="summary_large_image">--}}
    <meta name="twitter:title" content="Alberto Rosas | Software Engineer">
    <meta name="twitter:description" content="Software Engineer and Consultant Alberto Rosas.">
    <meta name="twitter:url" content="https://alberto-rosas.dev">
{{--    <meta name="twitter:image" content="https://alberto-rosas.dev/images/twitter-image.jpg">--}}
    <meta name="twitter:site" content="@bcryp7">

    <!-- LinkedIn Meta Tags -->
    <meta property="og:title" content="Alberto Rosas | Software Engineer">
    <meta property="og:description" content="Software Engineer and Consultant Alberto Rosas.">
    <meta property="og:url" content="https://alberto-rosas.dev">
{{--    <meta property="og:image" content="https://alberto-rosas.dev/images/linkedin-image.jpg">--}}
    <meta property="og:type" content="website">
@endsection
