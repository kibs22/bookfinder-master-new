<template>
    <div>
       
			<div class=" top-nav rsidebar span_1_of_left">
				<h3 class="cate">CATEGORIES</h3>
                <ul class="menu">
                    <ul class="kid-menu">
                        <li v-for="c in category"><a href="product.html">{{ c.name }}</a></li>
                    </ul>
                </ul> 
                <a class="view-all all-product" href="#"><br>VIEW ALL BOOKS > <span> </span></a> 
                	
			</div>
	        <div class="clearfix"> </div>

    </div>
</template>

<script>
export default{
    data(){
        return {
            category:{}
        }
    },
    methods:{
        initData(){
            Vue.axios.get('/getCategory')

            .then((d)=>{
                this.category = d.data.data;
                console.log();
            })
        }
    },
    mounted(){
        this.initData();
    }
}
</script>