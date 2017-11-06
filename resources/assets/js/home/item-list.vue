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
			<div class="col-md-4"  v-for="posts of data.posts">
				<router-link to="viewItem">
					<img src="images/cbook.jpg" alt=" " />
				</router-link>
				<div>
					<h4>C++ Programming Book</h4>
					<p class="card-text">Book: {{ posts.title }}</p>
					<p class="card-text">Author: {{ posts.author }}</p>
					<p class="card-text">Year published: {{ posts.year }}</p>
					<p class="card-text">Description: {{ posts.description }}</p>
				</div>
			</div>
		</div>
        
    </div>
</template>

<script>
    export default{
        
        props:{

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
            setTimeout(() => {  
                 this.initData();
            },2000)
        },
        methods: {
            initData() {
                Vue.axios.get('/getallpost').then((res) => {
                        this.data.posts = res.data.posts;
                        this.loading = false;
                })
            },
            updateList() {
                this.initData();
            }
        }

    }
</script>