<?php 
	$city = $_REQUEST['location'];

	date_default_timezone_set('Asia/Kolkata');

	$url = "http://api.openweathermap.org/data/2.5/forecast/daily?q=".$city."&units=metric&cnt=7&lang=en&appid=c0c4a4b4047b97ebc5948ac9c48c0559";
	$proxy = '192.168.15.250';
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_PROXY,  null); // $proxy is ip of proxy server
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
	curl_setopt($ch, CURLOPT_TIMEOUT, 10);

	$httpCode = curl_getinfo($ch , CURLINFO_HTTP_CODE); // this results 0 every time
	$response = curl_exec($ch);

	if ($response === false) 
	    $response = curl_error($ch);

	$json = stripslashes($response);
	$data=json_decode($json,true);

	curl_close($ch);

	if($data['cod'] < 400){
 ?>
	<div class="container">
		<div class="col-md-12">
			<div class="row">
				
				<div class="col-md-3">
					<h3 class="cDay"><?php echo date('l') ." ". date('d-m-Y g:i a') ?></h3>
				</div>
				<div class="col-md-6">
					<h3 class="tmp">Temprature
					<?php 
						$count = $data['list'];
						for($x=0;$x<count($count);$x++){
							if(date('l') == date('l',$data['list'][$x]['dt'])){
								foreach($data['list'][$x]['temp'] as $key => $tmp):
									if($key == 'min' || $key == 'max'):
										$icon = $data['list'][$x]['weather'][0]['icon'];
										$description = $data['list'][$x]['weather'][0]['description'];
										?>
										<br>
										<span><?php echo ucfirst($key) .":". $tmp; ?></span>&nbsp
										<img src='http://openweathermap.org/img/w/<?php echo $icon ?>.png'>
										<span><?php echo ucfirst($description); ?></span>
										<?php 
									endif;
								endforeach;
							}
						}
					 ?>
					</h3>
				</div>
				<div class="col-md-3">
					<h3 class="loc"><?php echo $data['city']['name']; ?>,<?php echo $data['city']['country']; ?></h3>
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<?php 
				$count = $data['list'];
				for($x=0;$x<count($count);$x++){
					?>
						<div class="col-md-1" style="border:1px solid;margin-bottom: 50px;">
							<h3><?php echo date('l',$data['list'][$x]['dt']); ?></h3>
							<?php 
								foreach($data['list'][$x]['temp'] as $key => $tmp):
									if($key == 'min' || $key == 'max'):
										$icon = $data['list'][$x]['weather'][0]['icon'];
										$description = $data['list'][$x]['weather'][0]['description'];
							?>
								<p><?php echo ucfirst($key) .":". $tmp; ?></p>
								<img src='http://openweathermap.org/img/w/<?php echo $icon ?>.png'>
								<p class="desc"><?php echo ucfirst($description); ?></p>
							<?php 
									endif;
								endforeach;
							 ?>
						</div>
					<?php
				}
			 ?>
		</div>
	</div>
<?php 
	}else{

 ?>
<div class="nFound">
	<div class="col-md-12">
		No Details found !
	</div>
</div>
<?php } ?>