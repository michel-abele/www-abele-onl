<?php
ob_start();
?>

    <div id="cookie-notice" class="alert alert-info" style="display: none;">
        <div class="container">
            <p>Ich und Drittanbieter die ich nutze verwenden Cookies, um Dir das beste Erlebnis auf meiner Webseite zu bieten. Durch die Nutzung meiner Webseite stimmst Du der Verwendung von Cookies zu.</p>
            <button id="cookie-accept" class="btn btn-primary">Verstanden</button>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="/lib/js/jquery.js"></script>
    <script src="/lib/js/bootstrap.bundle.js"></script>
    <script src="/lib/js/custom.js"></script>

</body>
</html>

<?php
$fileFoot = ob_get_contents();
ob_end_clean();
