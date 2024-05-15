<?php

# a)

$i = 1;

while ($i <= 10) {
 print $i++;
}


$i = 1;
while ($i <= 10):
 print $i;
 $i++;
endwhile;

$i = 0;
do {
 print ++$i;

} while ($i<10);

# Los códigos son equivalentes
# b)

for ($i = 1; $i <= 10; $i++) {
    print $i;
}

for ($i = 1; $i <= 10; print $i, $i++);

$i = 1;
for (;;) {
    if ($i > 10) {
    break;
    }
    print $i;
    $i++;
}

for ($i = 1; ;$i++) {
    if ($i > 10) {
    break;
    }
    print $i;
}

# Los códigos son equivalentes
# c)

    if ($i == 0) {
    print "i equals 0";
    } elseif ($i == 1) {
    print "i equals 1";
    } elseif ($i == 2) {
    print "i equals 2";
    }

    switch ($i) {
        case 0:
        print "i equals 0";
        break;
        case 1:
        print "i equals 1";
        break;
        case 2:
        print "i equals 2";
        break;
    }

# Los códigos son equivalentes


?>

