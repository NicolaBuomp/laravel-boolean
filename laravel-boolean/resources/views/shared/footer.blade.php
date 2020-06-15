<footer class="main-footer">
        <nav class="nav-footer">
            <ul class="info">
                <li>
                    <img src="https://www.boolean.careers/images/common/logo-white.png" alt="logo footer">
                </li>
                <li>
                    Sede Operativa
                </li>
                <li>
                    Via Carducci 12 - 20123 Milano
                </li>
                <li>
                    Tel: 02-40031288
                </li>
            </ul>
            <ul class="links">
                <li> <a href="{{route('static-page.home')}}">Home</a></li>
                <li> <a href="{{route('static-page.faq')}}">Domande Frequenti</a></li>
                <li> <a href="{{route('static-page.privacy')}}">Privacy</a></li>
            </ul>
        </nav>
    </footer>

    @yield('scripts')
    
</body>
</html>