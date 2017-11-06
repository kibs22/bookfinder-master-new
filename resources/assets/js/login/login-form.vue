<template>
    <div> 
		<div class=" login-right">
			<h3>REGISTERED USERS</h3>
				<p>If you have an account with us, please log in.</p>
				<div class="row">
					<div class="col-md-6">
						<form>
							<bs-input v-model="data.email" :error="errors.email" type="email" id="email" label="Email" input-class="input-md"></bs-input>
							<bs-input v-model="data.password" :error="errors.password" type="password" id="password" label="Password" input-class="input-md"></bs-input>          
							<button class="btn btn-danger" @click.prevent="login()" style="margin-left:1px;">LOGIN</button>
						</form>
					</div>
				</div>
			   </div>	
			    <div class=" login-left">
			  	 <h3>NEW USERS</h3>
				 <p>By creating an account with our site, you will be able to post a book into you account profile and find a potential buyer for your posted book.</p>
				  <router-link to="register" class="btn btn-danger"> Create an Account</router-link>
			</div>
		<div class="clearfix"> </div>
    </div>
</template>

<script>
const link = 'http://localhost:8000/';
export default {
	
	
		props:{

	 	},
  	data() {
        return {
            data: {
                password: null,
                email: null
            },
            errors: {}
           }
    },
   
    methods: {
        login() {
            this.$auth.login({
                data: this.data, // data: {} in Axios
                success: (res) => {
                    this.$emit('user-posted', 'jack shit');
                    switch(res.data.user.role_type){
                        //case 'ADMIN' : this.$router.replace({'name' : 'admin-dashboard'}); break;
                        case 'NORMAL': this.$router.replace({'name' : 'index'});  break;
                        default: break;

                    }
                 
                   
                },
                error: (e) => {
                    this.errors = e.response.data
                },
                redirect: false,
                fetchUser: false
            });
            
        },
        
        updateModel(value) {
            this.$emit('input', value)
        },
    }
    
}

</script>