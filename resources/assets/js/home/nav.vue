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
					<div class="down-top">		
						  <select class="in-drop">
							  <option value="*" class="in-of"  v-if="$auth.user().firstname"  >Welcome, {{ $auth.user().firstname }}</option>
							  <option value="*" class="in-of">Profile</option>
							  <option value="*" class="in-of">Account Settings</option>
							</select>
							<button class="btn btn-success" data-toggle="modal" data-target=".bd-logout-modal-sm" v-if="$auth.user().firstname">Logout </button>		
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
						<div class="account" v-if="$auth.user().firstname"> <router-link to="login"><span><i class="fa fa-user fa-lg" ></i> </span>YOUR ACCOUNT</router-link></div>
							<ul class="login"   v-if="!$auth.user().firstname">
								<li><router-link to="login"><span><i class="fa fa-lock fa-lg"></i> </span>LOGIN</router-link></li> |
								<li><router-link to="register">SIGNUP</router-link></li>
							</ul>
<<<<<<< HEAD
						<div class="cart" v-if="$auth.user().firstname"> <router-link to="sell"><span><i class="fa fa-usd fa-lg"></i> </span>SELL</router-link></div>
=======
						<div class="cart"> <router-link to="post"><span><i class="fa fa-usd fa-lg"></i> </span>POST</router-link></div>
>>>>>>> 26bace95a70308b0e5625e1a063187149a88e1ca
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>	
			</div>
		</div>

		 <div class="modal fade bd-logout-modal-sm" aria-labelledby="mySmallModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
				<div class="modal-body">
					Logout?
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">AY</button>
					<button type="button" class="btn btn-primary" @click="$auth.logout()" data-dismiss="modal" >Cge</button>
				</div>
				</div>
			</div>
		 </div>
	</div>
</template>

<script>
	export default{
		props:{

		},
		mounted(){
			// if(this.$auth.user()){
			// 	location.reload()
			// }
		},
		methods: {
			userPosted () {
				alert('hello')
			}
		}
	}
</script>




     