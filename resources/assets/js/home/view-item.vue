<template>
    <div>
         <!--header-->
    <navbar></navbar>
    <!--header-->
   
    
    <!--body-->
    <div class="container">

      <div class="row"><div class="col-md-12" style="height: 15px;"></div></div>

      <div class="row">
        <div class="col-md-3">
          <category></category> 
        </div>
        <div class="col-md-6">
          <quickitemview :details="data.postDetails"></quickitemview>
        </div>
        <div class="col-3">
          <div class="card" style="width: 30rem;">
            <img class="card-img-top"src="images/bookshelflogo.png" alt="Card image cap">
            <div class="card-body">
              <chat-box :sellerId="data.sellerId"></chat-box>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!--body-->
    <!--footer-->
    <div class="container">
      <footers></footers>
    </div>
    <!--footer-->
    </div>
</template>
<script>
export default {
  components:{
    'chat-box' : require('../message/message-text-box.vue'),
  },
  data(){
    return{
      data:{
        postDetails:null,
        sellerId:null
      }
    }
  },
  created(){
      this.getData()
  },
  methods: {
    getData() {
       Vue.axios.get('/viewSpecificDetails',{params: {id: this.$route.params.id }})
                
        .then((r)=>{
            this.data.postDetails = r.data.data
            this.data.sellerId = this.data.postDetails[0].seller.id
        })
    }
  }
}
</script>

