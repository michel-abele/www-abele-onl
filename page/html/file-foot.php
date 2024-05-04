<?php
ob_start();
?>

    </main>

    <footer id="footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Michel Abele</span></strong>
            </div>
        </div>
    </footer>

    <a href="#top" id="back-to-top" class="d-flex align-items-center justify-content-center"><i class="bi-before bi-before-arrow-up-short"></i></a>

    <div id="cookie-notice" class="alert alert-info">
        <div class="container d-flex justify-content-end align-items-center">
            <div class="flex-grow-1">
                <p>Ich und Drittanbieter, die ich nutze, verwenden Cookies, um Dir das beste Erlebnis auf meiner Webseite zu bieten. Durch die Nutzung meiner Webseite stimmst Du der Verwendung von Cookies zu.</p>
            </div>
            <button id="cookie-accept" class="btn btn-primary">Verstanden</button>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="/lib/js/jquery.js"></script>
    <script src="/lib/js/aos.js"></script>
    <script src="/lib/js/bootstrap.bundle.js"></script>
    <script src="/lib/js/jquery.waypoints.js"></script>
    <script src="/lib/js/purecounter_vanilla.js"></script>
    <script src="/lib/js/typed.umd.js"></script>
    <script src="/lib/js/custom.js"></script>

</body>
</html>

<?php
$fileFoot = ob_get_contents();
ob_end_clean();