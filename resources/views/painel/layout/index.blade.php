<!DOCTYPE html>
<html>
    @includeIf('Painel.layout.head')
    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
        @includeIf('Painel.layout.header')

        @includeIf('Painel.layout.sidebar')



        @yield('content')
        </div>
        @includeIf('Painel.layout.footer')

        @includeIf('Painel.layout.script')
</body>
</html>
