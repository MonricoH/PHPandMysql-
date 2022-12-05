<?php
  DEFINE("DB_SERVER", "localhost");
  DEFINE("DB_USERNAME", "root");
  DEFINE("DB_PASSWORD", "");
  DEFINE("DB_NAME", "fake-api-server");

  function openConnection() {
		$con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

		if($con === false)
			die("ERROR: Could not connect " . mysqli_connect_error());

		return $con;
	}

	function closeConnection($con) {
		mysqli_close($con);
	}


  function getRecord($con, $strSql) {
		$arrRec = [];
		$i = 0;

		if($rs = mysqli_query($con, $strSql)){
			if(mysqli_num_rows($rs) > 0){
				while($rec = mysqli_fetch_array($rs, MYSQLI_ASSOC)) {
					foreach ($rec as $key => $value) {
						if($key == 'genre' || $key == 'duration')
							$arrRec[$i][$key] = json_decode($value);
						else
						$arrRec[$i][$key] = $value;
					}
					$i++;
				}
			}
			mysqli_free_result($rs);
		}
		else
			die("ERROR: Could not execute your request!");

		return $arrRec;
	}

?>