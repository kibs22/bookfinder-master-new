<template>
  <div>
    <div class="msg-wrap">
        <p class="thread-title">Inbox</p>
        <div class="msg even" v-for="m of data.messages">
            <div class="col-md-3 author" >
                <div class="row">
                    <div class="col-3">
                        <img src="images/cbook.jpg" alt=" " :height="50">
                    </div>
                    <div class="col-5">
                        <router-link :to="{name:'user-thread'}" class="media-heading">{{ m.sender.firstname }} {{ m.sender.lastname }} </router-link>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                {{ m.message }}
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
  </div>
</template>
<script>
    export default {
        components : {
            'message-nav' : require('../message/message-nav.vue'),
            'message-thread' : require('../message/message-thread.vue'),
            'message-thread' : require('../message/message-navlinks.vue'),
        },
        data(){
            return {
                data: {
                    messages:null
                }
            }
        },
        mounted(){
            this.retrieveMessages()
        },
        methods:{
            retrieveMessages(){
                Vue.axios.get('/retrieveMessages')

                .then((d)=>{

                    this.data.messages = d.data.data;
                    console.log(this.data.messages);
                })
            }
        }
    }
</script>
