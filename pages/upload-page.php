<?php
include "linkers/common-head.html";
include "linkers/feed-page-css.html";
include "linkers/header-css.html";
?>

<body>
	<?php
	session_start();
	include_once "connect.php";
	include "pages/header.php";
	?>
	<br><br><br>
	<?php
    if (isset($_SESSION['uid'])) {
    	include "pages/upload-form.php";	
    }
	include "pages/feed-page.php";	
	include "pages/footer.html";
	?>
</body>

<?php
include "linkers/fallback-resources.html";
?>

</html>