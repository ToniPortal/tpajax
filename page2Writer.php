<?php
echo 'Resultat de l\'operation : ' . $_POST['operation'];
echo '<div class="container-fluid">
			<div class="row">
				<div class="col">
				</div>
				<div class="col-auto">
					<h1> Ma vie, mon histoire </h1>
				</div>
				<div class="col">
				</div>
			</div>
			<div class="row align-items-center justify-items-center">
				<div class="col">
				</div>
				<div class="col-auto">
					<img src="../images/maprez.jpg" height="300" width="400"/>
				</div>
				<div class="col">
				</div>
			</div>
			<div class="row align-items-center justify-items-center" style="margin-top:10px">
				<div class="col-2">
				</div>
				<div class="col-8">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nec elit sit amet neque fermentum lobortis pellentesque eu purus. Cras faucibus quam et suscipit dictum. In tincidunt pharetra consequat. Donec fringilla dapibus ipsum vitae pretium. Vestibulum et neque libero. Aliquam volutpat sapien dolor, lobortis placerat ex tempor at. Etiam laoreet massa eget urna malesuada molestie. Suspendisse potenti. 
					</p>
				</div>
				<div class="col-2">
				</div>
			</div>
			<div class="row align-items-center justify-items-center">
				<div class="col-2">
				</div>
				<div class="col-8">
					<p>Morbi vitae cursus quam. Morbi consequat ex non leo fringilla imperdiet. Vestibulum fringilla arcu in ex egestas, vel ultricies dolor rutrum. Aliquam fringilla et nulla sit amet ornare. Phasellus pretium mi ut erat luctus ultrices. Pellentesque a libero odio. Nunc pretium, mi at dapibus interdum, sem sapien ornare ante, et efficitur tellus nibh ut enim. Aenean feugiat massa et augue maximus, eu aliquam lacus porttitor. Morbi id justo in libero ultricies luctus. In hac habitasse platea dictumst. Morbi ac elit est. Integer ultrices nec augue sit amet dictum. Vivamus ultricies est nec tortor sollicitudin, vitae elementum odio hendrerit. 
					</p>
				</div>
				<div class="col-2">
				</div>
			</div>
			<div class="row align-items-center justify-items-center">
				<div class="col-2">
				</div>
				<div class="col-8">
					<p>Suspendisse in mauris massa. Suspendisse vel tincidunt nisi, ultricies lobortis lectus. Proin eleifend et lacus nec congue. Nam a arcu sed ipsum condimentum rutrum et at leo. Praesent molestie nisi vitae lacus faucibus mattis. Suspendisse tempus sem rhoncus consequat elementum. Mauris quis sagittis dolor. Cras ultricies, arcu sit amet fringilla lacinia, diam nibh egestas arcu, ut venenatis libero erat eu urna. 
					</p>
				</div>
				<div class="col-2">
				</div>
			</div>
			<div class="row align-items-center justify-items-center">
				<div class="col-2">
				</div>
				<div class="col-8">
					<p>Sed dignissim, nisi eget eleifend placerat, lectus lectus consectetur sapien, non blandit sem mi non dui. Aenean sit amet arcu vitae orci placerat pellentesque faucibus in augue. Nunc fermentum mi venenatis sapien luctus, sit amet tempus nisl vulputate. Fusce pellentesque metus sapien, sed congue velit convallis ut. Curabitur non mi est. Duis nunc quam, fermentum ac dapibus a, condimentum sed lorem. Cras id neque nec augue laoreet accumsan et eu mi. Mauris pellentesque ullamcorper consectetur. Vivamus et magna et est faucibus commodo. Donec venenatis vel odio vel interdum. Vestibulum mollis dolor nulla, non gravida ipsum suscipit in. Mauris eget mattis nibh. Phasellus sed libero vel magna hendrerit volutpat non a purus. 
					</p>
				</div>
				<div class="col-2">
				</div>
			</div>
			<div class="row align-items-center justify-items-center">
				<div class="col-2">
				</div>
				<div class="col-8">
					<p>Maecenas dignissim, diam et tristique viverra, felis eros ornare nisi, a sollicitudin purus orci sed nulla. Proin rutrum rhoncus purus, a euismod elit tincidunt eget. Sed cursus fringilla nunc ac vestibulum. Integer at dui maximus, volutpat turpis nec, ullamcorper odio. Nullam leo magna, fermentum id pharetra sed, tincidunt id tellus. Etiam vulputate porta rhoncus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
					</p>
				</div>
				<div class="col-2">
				</div>
			</div>
			<div class="row align-items-center justify-items-center">
			<div class="col-2">
			</div>
			<div class="col-8">
				<p id="content">Content 
				</p>
			</div>
			<div class="col-2">
			</div>
		</div>
		</div>';

?>

<label for="text">Data:</label>
<input type="text" class="form-control" id="data" placeholder="Data" name="data">


<button onclick="write()" class="btn btn-primary" value="Save to database">Btn</button>