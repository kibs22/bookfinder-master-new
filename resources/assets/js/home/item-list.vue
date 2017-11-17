<template>
    <div>
         <div class="d-block m-x-auto" v-bind:disabled="loading">
            <i class="fa fa-spinner fa-spin" style="font-size: 50px;" v-show="loading"></i>
            <p v-show="loading">Please wait...</p>
          </div>
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
			<div class="col-md-4"  v-for="posts of data.posts">
				<router-link to="viewItem">
					<img src="images/cbook.jpg" alt=" " v-if="!posts.image" :width="100" :height="100">
                    <img :src="posts.image" :width="100" :height="100" alt="" v-if="posts.image">
				</router-link>
				<div>
					<p class="card-text">Book: {{ posts.title }}</p>
					<p class="card-text">Author: {{ posts.author }}</p>
					<p class="card-text">Year published: {{ posts.year }}</p>
					<p class="card-text">Description: {{ posts.description }}</p>

                    <div v-if="posts.seller_id == $auth.user().id" style="margin-top:10px;">
                        <button class="btn btn-success">Edit</button>
                    </div>
                    <div v-else>
                        <router-link class="btn btn-success" :to="{ name: 'viewItem', params: { id: posts.id }}">Buy</router-link>
                    </div>
				</div>
               
			</div>
		</div>
        
    </div>
</template>

<script>
    export default{
        
        props:{
            query: {
                'type': String,
                'default': ''
            },
            'route-id':{
                type: Number
            }
        },
        data(){
            return {
                data:{
                    user: {},
                    posts:{},
                    categories: {}
                },
                loading: true
            }
        },
        mounted(){ 
            
        //    console.log('search from item-list component: %s', this.query)
            setTimeout(() => {  
                this.initData();
            },2000)
        
        },
        methods: {
            initData() {
                Vue.axios.get('/getallpost', {params: {q:this.query}} ).then((res) => {
                        this.data.posts = res.data.posts;
                        //console.log(this.data.posts);
                        this.loading = false;
                        
                })
            },
            updateList(){
                this.refresh()
                this.initData()
                //this.$emit('user-posted')
				
            },
            refresh(){
                setTimeout(()=> {
                    this.loading = false 
                },2000)
            }
        },
        watch: {
            query(val) {
                this.updateList()
            }
        }

    }
</script>