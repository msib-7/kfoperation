<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Sign-In | KF-Operation</title>
    <!-- CSS files -->
    <link href="assets/cms/css/tabler.min.css?1692870487" rel="stylesheet" />
    <link href="assets/cms/css/tabler-flags.min.css?1692870487" rel="stylesheet" />
    <link href="assets/cms/css/tabler-payments.min.css?1692870487" rel="stylesheet" />
    <link href="assets/cms/css/tabler-vendors.min.css?1692870487" rel="stylesheet" />
    <link href="assets/cms/css/demo.min.css?1692870487" rel="stylesheet" />
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }

    </style>
</head>

<body class=" d-flex flex-column">
    <script src="assets/cms/js/demo-theme.min.js?1692870487"></script>
    <div class="page page-center">
        <div class="container container-tight py-4">
            <div class="text-center mb-4">
                <a href="." class="navbar-brand navbar-brand-autodark">
                    <img src="{{asset('assets/img/kalbe_farma_svg.svg')}}" alt="KalbeFarma">
                </a>
            </div>
            <div class="card card-md">
                <div class="card-body">
                    <h2 class="h2 text-center mb-4">Login to KFO CMS</h2>
                    @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        <div class="d-flex">
                            <div>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endif
                    @if (Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        <div class="d-flex">
                            <div>
                                {{Session::get('success')}}
                            </div>
                        </div>
                    </div>
                    @endif
                    @if (Session::get('error'))
                    <div class="alert alert-danger" role="alert">
                        <div class="d-flex">
                            <div>
                                {{Session::get('error')}}
                            </div>
                        </div>
                    </div>
                    @endif
                    <form action="{{url('login-auth')}}" method="post" autocomplete="off" novalidate>
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input type="text" class="form-control" placeholder="username" name="username"
                                autocomplete="off">
                        </div>
                        <div class="mb-2">
                            <label class="form-label">
                                Password
                            </label>
                            <div class="input-group input-group-flat">
                                <input type="password" class="form-control" placeholder="password" name="password"
                                    autocomplete="off">
                                <span class="input-group-text">
                                    <a href="#" class="link-secondary" title="Show password" data-bs-toggle="tooltip">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                            <path
                                                d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                            </svg>
                                    </a>
                                </span>
                            </div>
                        </div>
                        <div class="mb-2">
                        </div>
                        <div class="form-footer">
                            <button type="submit" class="btn btn-primary w-100">Sign in</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Libs JS -->
        <!-- Tabler Core -->
        <script src="assets/cms/js/tabler.min.js?1692870487" defer></script>
        <script src="assets/cms/js/demo.min.js?1692870487" defer></script>
</body>

</html>
