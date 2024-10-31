    <!doctype html>
    <html lang="en">

    <head>
        @include('cms.layout.head')
    </head>

    <body class=" layout-fluid">
        <script src="assets/cms/js/demo-theme.min.js?1692870487"></script>
        <div class="page">
            @include('cms.layout.navbar')
            <div class="page-wrapper">
                <!-- Page header -->
                <div class="page-header d-print-none">
                    <div class="container-xl">
                        <div class="row g-2 align-items-center">
                            <div class="col">
                                <!-- Page pre-title -->
                                <div class="page-pretitle">
                                    Content Management System
                                </div>
                                <h2 class="page-title">
                                    KF-Operation Homepage
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Page body -->
                <div class="page-body">
                    <div class="container-xl">
                        <div class="row row-deck row-cards">
                            @yield('cms-content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('cms.layout.modal')
        <!-- Libs JS -->
        <script src="assets/cms/libs/dropzone/dist/dropzone-min.js?1692870487" defer></script>
        <script src="assets/cms/libs/tinymce/tinymce.min.js?1692870487" defer></script>
        <!-- Tabler Core -->
        <script src="assets/cms/js/tabler.min.js?1692870487" defer></script>
        <script src="assets/cms/js/demo.min.js?1692870487" defer></script>

        <script>
            // @formatter:off
            document.addEventListener("DOMContentLoaded", function () {
                let options = {
                    selector: '#tinymce-mytextarea',
                    height: 300,
                    menubar: false,
                    statusbar: false,
                    plugins: [
                        'advlist autolink lists link image charmap print preview anchor',
                        'searchreplace visualblocks code fullscreen',
                        'insertdatetime media table paste code help wordcount'
                    ],
                    toolbar: 'undo redo | formatselect | ' +
                        'bold italic backcolor | alignleft aligncenter ' +
                        'alignright alignjustify | bullist numlist outdent indent | ' +
                        'removeformat',
                    content_style: 'body { font-family: -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif; font-size: 14px; -webkit-font-smoothing: antialiased; }'
                }
                if (localStorage.getItem("tablerTheme") === 'dark') {
                    options.skin = 'oxide-dark';
                    options.content_css = 'dark';
                }
                tinyMCE.init(options);
            })
            // @formatter:on

        </script>
        <script>
            const uploadInput = document.getElementById('upload');
            const filenameLabel = document.getElementById('filename');
            const imagePreview = document.getElementById('image-preview');

            // Check if the event listener has been added before
            let isEventListenerAdded = false;

            uploadInput.addEventListener('change', (event) => {
                const file = event.target.files[0];

                if (file) {
                    filenameLabel.textContent = file.name;

                    const reader = new FileReader();
                    reader.onload = (e) => {
                        imagePreview.innerHTML =
                            `<img src="${e.target.result}" class="max-h-48 rounded-lg mx-auto" alt="Image preview" />`;
                        imagePreview.classList.remove('border-dashed', 'border-2', 'border-gray-400');

                        // Add event listener for image preview only once
                        if (!isEventListenerAdded) {
                            imagePreview.addEventListener('click', () => {
                                uploadInput.click();
                            });

                            isEventListenerAdded = true;
                        }
                    };
                    reader.readAsDataURL(file);
                } else {
                    filenameLabel.textContent = '';
                    imagePreview.innerHTML =
                        `<div class="bg-gray-200 h-48 rounded-lg flex items-center justify-center text-gray-500">No image preview</div>`;
                    imagePreview.classList.add('border-dashed', 'border-2', 'border-gray-400');

                    // Remove the event listener when there's no image
                    imagePreview.removeEventListener('click', () => {
                        uploadInput.click();
                    });

                    isEventListenerAdded = false;
                }
            });

            uploadInput.addEventListener('click', (event) => {
                event.stopPropagation();
            });

        </script>
    </body>

    </html>
