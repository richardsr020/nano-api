<?php
session_start();
require '../../../model/Model.php';
require '../../../model/User.php';
require '../../../model/Router.php';

?>

	<a href="settings.php?action=logOut"><button>logOut</button></a>
	<button>set the dark mode </button>
	<button>set the lite mode</button>
	<button>cookies setting </button>
	<button>User account</button>


<?php
if(isset($_GET['action']) && isset($_GET['action']) == 'logOut'){
	echo "logging Out....";
	Rout::logOut();
}


?>