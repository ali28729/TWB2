<?php
include "linkers/common-head.html";
include "linkers/faq-page-css.html";
include "linkers/feed-page-css.html";
include "linkers/header-css.html";
?>

<body>
	<?php
	session_start();
	include "pages/header.php";
	include "pages/faq-page.html";	
	include "pages/footer.html";
	?>
</body>

<?php
include "linkers/fallback-resources.html";
?>

</html>