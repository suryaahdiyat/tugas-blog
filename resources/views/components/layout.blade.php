<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog | {{ $title ?? 'Article' }}</title>
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet">
    @vite('resources/css/app.css')
    {{-- <style>
        h1 {
        @apply text-4xl font-bold my-6;
        }
        
        h2 {
        @apply text-3xl font-semibold my-4;
        }
        
        /* Styling untuk daftar */
        ol {
        @apply list-decimal pl-6 mb-4;
        }
        
        ul {
        @apply list-disc pl-6 mb-4;
        }
        
        li {
        @apply mb-2;
        }
        
        /* Styling untuk teks di dalam editor */
        strong {
        @apply font-bold;
        }
        
        em {
        @apply italic;
        }
        
        u {
        @apply underline;
        }
        
        a {
        @apply text-blue-500 hover:underline;
        }
        
        /* Styling untuk paragraf */
        p {
        @apply mb-4;
        }
    </style> --}}
</head>
<body class="overflow-x-hidden font-poppins">
    {{ $slot }}
</body>
</html>