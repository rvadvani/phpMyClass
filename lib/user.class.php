<?php
/**
 * Created by www.coderseven.com
 * User: rvadvani | coder seven
 * Date: 30th March 2017
 * Time: 12:34 AM
 */

require_once('lib/main.class.php');
class USER extends MAIN {

	public function getUsers(){
		$q = $this->runQuery("SELECT * FROM tbl_users");
		$q->execute();
		if($q->execute()){
			while ($object = $q->fetchObject()) {
				print $object->user_name;
			}
		}
	}

} //USER class close here