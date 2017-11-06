<template>
    <div>
        <div class="women">
				<a href="#"><h4>Total Items - <span>4449 itemms</span> </h4></a>
				<ul class="w_nav">
					<li>Sort : </li>
			     	<li><a class="active" href="#">popular</a></li> |
			     	<li><a href="#">new </a></li> |
			     	<li><a href="#">discount</a></li> |
			     	<li><a href="#">price: Low High </a></li> 
			     <div class="clearfix"> </div>	
			     </ul>
			     <div class="clearfix"> </div>	
		</div>
		<div class="row"><div class="col-md-12" style="height:15px;"></div></div>
		<div class="row">
			<div class="col-md-4">
				<router-link to="viewItem">
					<img src="images/cbook.jpg" alt=" " />
				</router-link>
				<div>
					<h4>C++ Programming Book</h4>
					<p>P 350</p>
					Category: Arts & Sciences
				</div>
			</div>
			<div class="col-md-4">
				<router-link to="viewItem">
					<img src="images/cbook.jpg" alt=" " />
				</router-link>
				<div>
					<h4>C++ Programming Book</h4>
					<p>P 350</p>
					Category: Arts & Sciences
				</div>
			</div>
			<div class="col-md-4">
				<router-link to="viewItem">
					<img src="images/cbook.jpg" alt=" " />
				</router-link>
				<div>
					<h4>C++ Programming Book</h4>
					<p>P 350</p>
					Category: Arts & Science
				</div>
			</div>
		</div>
        
    </div>
</template>