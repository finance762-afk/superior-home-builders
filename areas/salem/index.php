<?php
// Salem is no longer a listed service area — redirect to the main service area page.
header('HTTP/1.1 301 Moved Permanently');
header('Location: /service-area/');
exit;
