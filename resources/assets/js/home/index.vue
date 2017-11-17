<template>
  <div>
  
    <!--header-->
    <navbar v-on:user-posted="userSearched()"></navbar>
    <!--header-->
   
    
    <!--body-->
    <div class="container">

      <div class="row"><div class="col-md-12" style="height: 15px;"></div></div>

      <div class="row">
        <div class="col-md-4">
          <category></category> 
        </div>
        <div class="col-md-8">
          <items :query="q" ref="userItems"></items>
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
    methods: {
      userSearched () {
        this.$refs.userItems.updateList();
      }
    },
    data() {
      return {
        q: null
      }
    },
    created() {
      this.q = this.$route.query.q;
      
    },
    watch: {
      '$route' (to, from) {
        this.q = this.$route.query.q;
        console.log('search from index component: %s', this.q)
      }
    }
  }
</script>
