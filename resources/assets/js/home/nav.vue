<template>
  <div class="header">
		<div class="top-header">
			<div class="container">
				<div class="top-header-left">
					<ul class="support">
						
						<li ><a href="/">Home</a></li>
					</ul>
					<ul class="support">
						
						<li><a href="#">About </a></li>
					</ul>
					<ul class="support">
						
						<li><a href="#">Contact us</a></li>
					</ul>
					<div class="clearfix"> </div>
				</div>
				<div class="top-header-right">
					<div class="down-top" v-if="$auth.user()">		
						  <select class="in-drop">
							  <option value="*" class="in-of">Welcome,</option>
							  <option value="*" class="in-of">Profile</option>
							  <option value="*" class="in-of">Account Settings</option>
							  <option value="*" class="in-of">Logout</option>
							</select>
					 </div>	
				</div>
				<div class="clearfix"> </div>		
			</div>
		</div>
		<div class="bottom-header">
			<div class="container">
				<div class="header-bottom-left">
					<div class="logo">
						<a href="/"><img src="images/bookshelflogo.png" alt=" " /></a>
					</div>
					<div class="search">
						<input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" >
						<input type="submit"  value="SEARCH">
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="header-bottom-right">					
						<div class="account"> <router-link to="login"><span><i class="fa fa-user fa-lg"></i> </span>YOUR ACCOUNT</router-link></div>
							<ul class="login">
								<li><router-link to="login"><span><i class="fa fa-lock fa-lg"></i> </span>LOGIN</router-link></li> |
								<li><router-link to="register">SIGNUP</router-link></li>
							</ul>
						<div class="cart"> <router-link to="sell"><span><i class="fa fa-usd fa-lg"></i> </span>SELL</router-link></div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>	
			</div>
		</div>
	</div>
</template>

<script>
	export default{
		props:{

		},
		mounted(){
			console.log(this.$auth.user())
		}
	}
</script>




     