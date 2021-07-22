<?php
    while ($mostrar = mysqli_fetch_array($result)) {
            
        $RoomDescription = $mostrar['descripcion'];
	$RoomNumber = $mostrar['habitacion'];
	$RoomStatusID = $mostrar['room_statusID'];

	echo "<script>";
        echo "$(document).ready(function() {";
        echo "var X = '".$RoomDescription."';";
        echo "var Y = '".$RoomStatusID."';";
	echo "var Room = new Object();";
	echo "Room.Number = '".$RoomNumber."';";
        echo "Room.ServicesString = X.replace('HABITACION CON ', '');";
	echo "Room.HotWater = X.includes('AGUA CALIENTE');";
        echo "Room.TV = X.includes('TV');";
        echo "Room.WiFi = X.includes('WIFI');";
	echo "Room.Status = '".$RoomStatusID."';";
	echo "Rooms.push(Room);";
        echo  "});";
        echo "</script>";
    }
?>