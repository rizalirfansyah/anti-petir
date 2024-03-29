<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- <script src="assets/vendor/ckeditor5/build/ckeditor.js"></script> --}}

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet" />
        <link href="https://fonts.cdnfonts.com/css/sf-pro-display?styles=98774,98773,98770" rel="stylesheet">

        <style>
            .ck-editor__editable_inline {
                min-height: 300px;
            }
        </style>
        
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles

        
    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header>
                    <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
        
        <script>
            function copyImageTag(imagePath, altText) {
                imagePath = imagePath.replace('public', 'storage');
                
                const imageTag = `<img src="${imagePath}" alt="${altText}" />`;
                const textArea = document.createElement('textarea');
                textArea.value = imageTag;
                document.body.appendChild(textArea);
                textArea.select();
                document.execCommand('copy');
                document.body.removeChild(textArea);
            }
        </script>

        <script>
            $(document).ready(function() {
                $('.js-example-basic-multiple').select2();
            });
        </script>
        
        <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
        
        <script>
                ClassicEditor
                    .create( document.querySelector( '#editor1' ),{
                    ckfinder: {
                        uploadUrl: '{{route('ckeditor.upload').'?_token='.csrf_token()}}',
                    },
                    heading: {
                        options: [
                            { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                            // { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                            // { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' }
                        ]
                    }
                })
                .catch( error => {
                    console.error( error );
                } );

                ClassicEditor
                    .create( document.querySelector( '#editor2' ),{
                    ckfinder: {
                        uploadUrl: '{{route('ckeditor.upload').'?_token='.csrf_token()}}',
                    },
                    heading: {
                        options: [
                            { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                            // { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                            // { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' }
                        ]
                    }
                })
                .catch( error => {
                    console.error( error );
                } );
        </script>
        
        
    </body>
</html>
