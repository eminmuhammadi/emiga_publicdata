<?php
$host="google.az";
$output=shell_exec('ping -n 1 '.$host);

echo "<pre>$output</pre>"; //for viewing the ping result, if not need it just remove it

if (strpos($output, 'out') !== false) {
    echo "Dead";
}
    elseif(strpos($output, 'expired') !== false)
{
    echo "Network Error";
}
    elseif(strpos($output, 'data') !== false)
{
    echo "Alive";
}
else
{
    echo "Unknown Error";
}

?>