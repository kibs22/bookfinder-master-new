<style>

</style>
<template>
<div>
    <h3>View this item</h3>
    <div class="card-body" v-for="d of details">
        <img src="images/cbook.jpg" class="img-responsive">
        <p class="card-text">Book: {{ d.item.title }}</p>
        <p class="card-text">Author: {{ d.item.author }}</p>
        <p class="card-text">Year published: {{ d.item.year }}</p>
        <p class="card-text">Description: {{ d.item.description }}</p>   
    </div>
</div>
</template>

<script>
 export default{
        props:{
            details:{}
        },
        data() {
            return {
                id:null,
            }
        }
    }
</script>
