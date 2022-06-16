<?php
require_once 'header.php';
?>
<script language="javascript" type="text/javascript">
    function resizeIframe(obj) {
        obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
    }
</script>
<iframe src="inicio.php" title="description" frameborder='0' scrolling='no' id='iframe' onload='javascript:resizeIframe(this);' style='width:100%; height: 800px; border:none;'></iframe>

<?php
require_once 'footer.php';
?>
