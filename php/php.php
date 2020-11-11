<!DOCTYPE html>
<html>
<head>
	<title>php</title>
</head>
<body>
		<ul>
			<li>
				<p>the first 30 odd</p>
				<?php 

					for ($i=1; $i <= 60; $i=$i+2) { 
						print $i. '<br>';
					}

				?>
			</li>
			<li>
				<p>the odd numbers btw 0 to 30</p>
				<?php 
					for ($a=1; $a <= 30; $a=$a+2) { 
						print $a. '<br>' ;
					}
				 ?>
			</li>
			<li>
				<p>sum of first 20 even number.</p>
				<?php 
					$yuv = 0;
					for ($r=2; $r <= 40; $r=$r+2) { 
						$yuv = $yuv + $r;
						
						$sum = $yuv;
					}

					print $sum;
				 ?>
			</li>
			<li>
				<p>First 10 prime number.</p>
				<?php

    $n = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30);
    function prime($n){
        $sum = 0;
        foreach($n as $k => $v) {
            $counter = 0; 
            for($j = 1; $j <= $v; $j++) { 
                if($v % $j == 0)
                    $counter++;

            }

            if($counter == 2) {
                $sum += $v;
            }

        }
        print $sum;

    }

    prime($n);


?>

			</li>
			<li>
				<p>fullname, phone and address</p>
				<?php 
					$full = 'YUNUS YUSUF OLADIMEJI';
					$phone = '09037213050';
					$address = '31 BALOGUN FULANI ILORIN KWARA STATE';

					print $full. '<br>';
					print $phone. '<br>';
					print $address;
				 ?>
			</li>
		</ul>
</body>
</html>


