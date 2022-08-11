<body  style="min-width: 1200px">
<script>
    var Dcat = CreateDcat({!! Dcat\Admin\Admin::jsVariables() !!});
</script>

{!! admin_section(Dcat\Admin\Admin::SECTION['BODY_INNER_BEFORE']) !!}
@include('admin::partials.navbar')
<div class="wrapper" style="padding-top: 60px">
    <div class="app-content content">
        @include('admin::partials.sidebar')
        <div class="content-wrapper" id="{{ $pjaxContainerId }}" style="min-width: 1200px;padding: 20px">
            @yield('app')
        </div>
    </div>
</div>

{!! admin_section(Dcat\Admin\Admin::SECTION['BODY_INNER_AFTER']) !!}

{!! Dcat\Admin\Admin::asset()->jsToHtml() !!}

<script>Dcat.boot();</script>

</body>

</html>
