<?php

exec('whoami', $output, $exitCode);
print_r($output);
