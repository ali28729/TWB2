<?php
include "linkers/common-head.html";
include "linkers/feed-page-css.html";
include "linkers/header-css.html";
?>

<body>
	<?php
	include "pages/header.php";
	include_once "connect.php";
	include "pages/feed-page.php";	
	include "pages/footer.html";
	?>
</body>

<?php
include "linkers/fallback-resources.html";
?>

</html>