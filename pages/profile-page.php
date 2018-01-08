<?php
include "linkers/common-head.html";
include "linkers/profile-page-css.html";
include "linkers/header-css.html";
?>

<body>
	<?php

	session_start();
	include "pages/header.php";
	include_once "connect.php";
	include "pages/profile-page.php";
	include "pages/footer.html";
	?>
</body>

<?php
include "linkers/fallback-resources.html";
?>

</html>