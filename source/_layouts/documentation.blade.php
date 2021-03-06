@extends('_layouts.master')

@section('body')
<nav class="navbar navbar-brand">
    <div class="container">
        <div class="navbar-content">
            <div>
                <a class="link-plain text-xxl flex-y-center" href="{{ $page->asset_prefix }}/">
                    <img src="{{ $page->asset_prefix }}/img/jigsaw-logo.svg" alt="Jigsaw logo" class="logo-icon" width="65">
                    <img src="{{ $page->asset_prefix }}/img/jigsaw-type.svg" alt="Jigsaw logo" class="logo-type" width="130">
                </a>
            </div>
            <div class="docsearch navbar-buttons">
                <input id="docsearch" class="docsearch__input" type="text" name="docsearch" value=""/>
                <span class="docsearch__icon"></span>
            </div>
        </div>
    </div>
</nav>

<div class="container m-xs-b-6">
    <div class="row">
        <div class="col-md-3 m-xs-b-6">
            <nav class="nav-list">
                <a class="nav-list-item" href="{{ $page->asset_prefix }}/docs/installation/">Installation</a>
                <a class="nav-list-item nav-list-item--sub" href="{{ $page->asset_prefix }}/docs/upgrading/">Upgrading</a>
                <a class="nav-list-item" href="{{ $page->asset_prefix }}/docs/building-and-previewing/">Building &amp; Previewing</a>
                <a class="nav-list-item" href="{{ $page->asset_prefix }}/docs/compiling-assets/">Compiling Assets</a>

                <a class="nav-list-item" href="{{ $page->asset_prefix }}/docs/content/">Creating Your Site's Content</a>
                <a class="nav-list-item nav-list-item--sub" href="{{ $page->asset_prefix }}/docs/content-blade/">Blade Templates &amp; Partials</a>
                <a class="nav-list-item nav-list-item--sub" href="{{ $page->asset_prefix }}/docs/content-markdown/">Markdown</a>
                <a class="nav-list-item nav-list-item--sub" href="{{ $page->asset_prefix }}/docs/content-other-file-types/">Other File Types</a>

                <a class="nav-list-item" href="{{ $page->asset_prefix }}/docs/site-variables/">Site Variables</a>
                <a class="nav-list-item" href="{{ $page->asset_prefix }}/docs/helper-methods/">Helper Methods</a>
                <a class="nav-list-item" href="{{ $page->asset_prefix }}/docs/page-metadata/">Page Metadata</a>
                <a class="nav-list-item" href="{{ $page->asset_prefix }}/docs/environments/">Environments</a>

                <a class="nav-list-item" href="{{ $page->asset_prefix }}/docs/collections/">Collections</a>
                <a class="nav-list-item nav-list-item--sub" href="{{ $page->asset_prefix }}/docs/collections-extending-parent-templates/">Extending Parent Templates</a>
                <a class="nav-list-item nav-list-item--sub" href="{{ $page->asset_prefix }}/docs/collections-paths/">Paths</a>
                <a class="nav-list-item nav-list-item--sub" href="{{ $page->asset_prefix }}/docs/collections-sorting/">Sorting</a>
                <a class="nav-list-item nav-list-item--sub" href="{{ $page->asset_prefix }}/docs/collections-pagination/">Pagination</a>
                <a class="nav-list-item nav-list-item--sub" href="{{ $page->asset_prefix }}/docs/collections-variables-and-functions/">Variables &amp; Helper Functions</a>
                <a class="nav-list-item nav-list-item--sub" href="{{ $page->asset_prefix }}/docs/collections-remote-collections/">Remote Collections</a>

                <a class="nav-list-item" href="{{ $page->asset_prefix }}/docs/pretty-urls/">Pretty URLs</a>
                <a class="nav-list-item" href="{{ $page->asset_prefix }}/docs/custom-404-page/">Custom 404 Page</a>
                <a class="nav-list-item" href="{{ $page->asset_prefix }}/docs/event-listeners/">Event Listeners</a>
                <a class="nav-list-item" href="{{ $page->asset_prefix }}/docs/deploying-your-site/">Deploying Your Site</a>
            </nav>
            <p class="p-xs-x-1 p-xs-y-4 text-dark-soft">
                <small>Brought to you by <a href="https://tighten.co" class="link-tighten">Tighten</a></small>
            </p>
        </div>
        <div class="col-md-9 documentation-page">
            @yield('documentation_content')
        </div>
    </div>
</div>
@endsection
