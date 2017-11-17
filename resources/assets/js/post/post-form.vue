<template>
    <div>
        <h3>BOOK INFORMATION</h3>
         <div class="row">
            <div class="col-md-8">
                <form>
                    
                    <bs-input v-model="data.title" :error="errors.title" type="text" id="bookname" label="Book name" input-class="input-sm"></bs-input>
                        
                    <bs-input v-model="data.author" :error="errors.author" type="text" id="author" label="Author" input-class="input-sm"></bs-input>
                        
                    <bs-input v-model="data.year" :error="errors.year" type="text" id="year" label="Year" input-class="input-sm"></bs-input>
                    
                    <bs-input v-model="data.price" :error="errors.price" type="number" id="year" label="price" input-class="input-sm"></bs-input>
                    
                    <bs-input v-model="data.IBSN" :error="errors.IBSN" type="text" id="IBSN" label="IBSN" input-class="input-sm"></bs-input>
                                
                    <bs-text v-model="data.description" :error="errors.description"  id="description" label="Description" input-class="input-sm"></bs-text>

                    <bs-file v-model="data.image" :error="errors.image" id="year" label="Book Image" ></bs-file>

                    <button type="button" class="btn btn-danger " @click="submit">POST</button>

                    <button type="button" class="btn btn-danger " @click="sample">SAMPLE</button>
                </form>
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
                title:null,
                description:null,
                image: null,
                author: null,
                year: null,
                price: null,
                IBSN: null

            },
            formData: new FormData()
        }
    },
    methods: {
        submit(){
            // this.$emit('user-posted', 'jack shit');
            // return;

            Vue.axios.post('post',this.formData)

            .then((res)=> {
                this.$emit('user-posted');
            })

            .catch((e)=> {
                this.errors = e.response.data
            })
            
        },
        sample(){
            alert()
        }
        
    },
    watch: {
        'data.title' (val) {
            this.formData.set('title', val);
        },
        'data.description' (val) {
            this.formData.set('description', val);
        },
        'data.image' (val) {
            this.formData.set('image', val);
            // this.formData.set('title', val);
        },
        'data.author' (val) {
            this.formData.set('author', val);
        },
        'data.year' (val) {
            this.formData.set('year', val);
        },
        'data.price' (val) {
            this.formData.set('price', val);
        },
        'data.IBSN' (val){
            this.formData.set('IBSN', val);
        }
    }
}
</script>