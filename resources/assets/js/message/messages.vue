<template>
  <div>
  
    <!--header-->
    <navbar></navbar>
    <!--header-->
   
    
    <!--body-->
    <div class="container">

      <div class="row"><div class="col-md-12" style="height: 15px;"></div></div>

      <div class="row">
        <div class="col-md-2">
           <div class="card">
               <div class="card-block">
                   <h4>Index</h4>
               </div>
           </div>
        </div>
        <div class="col-md-6">
        
        </div>
        <div class="col-md-3">
         
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
export default{
components : {
            'user-info' : require('../profile/profile.vue'),
            'reviews'   : require('../profile/review.vue'),
            'myitems'   : require('../profile/myitems.vue'),
        },
}
</script>