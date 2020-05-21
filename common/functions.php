<?php
    function get_title($_title){
        return('<title>' . $_title . '</title>');
    }

    function open_page($_title){
        echo('<html><head>' . get_title($_title) . '</head></head><body>');
    }

    function close_page(){
        echo('</body></html>');
    }

    function redirect($_location){
        header('Location : ' . $_location);
    }

    $db = mysqli_connect("localhost","root","","del_iot_club"); 

  	function query($query)
  	{
  		global $db;
  		$result = mysqli_query($db,$query);
  		$rows = []; ///siapkan kotak untuk naruh baju analogi
  		while ($row = mysqli_fetch_assoc($result))
  		{
  			$rows[] = $row;
  		}
  		return $rows;
      }

?>
