<?php
ob_start();
?>

<!-- JavaScript -->
    <script src="/lib/js/jquery.js"></script>
    <script src="/lib/js/bootstrap.bundle.js"></script>
    <script src="/lib/js/custom.js"></script>

</body>
</html>

<?php
$fileFoot = ob_get_contents();
ob_end_clean();
