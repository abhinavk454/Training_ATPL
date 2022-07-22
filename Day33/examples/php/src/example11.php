<?php

$futureDate = mktime(0, 0, 0, date("m") + 30, date("d"), date("Y"));
echo date("d/m/Y", $futureDate);
