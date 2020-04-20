<template>
    <div class="container mr-12">
        <div class="row">
            <div class="col-md-8">
                <h3>Testing instructions:</h3>
                <div>
                    <span>
                        Stand straight for the duration of the test and look straight at the screen.
                        <br>
                        Press play, after countdown you will be shown a picture for a split second.
                        <br>
                        <h4 style="color: red" v-if="counter">remaining tests: {{this.products.length}}</h4>
                    </span>
                </div>
                <div class="card dark mb-5" v-if="isVisible">
                    <div style="background: #313945; padding: 8px; text-align: center;" class="card-header d-flex justify-content-center">Product ID: {{products[0].id}}</div>
                    <div style="min-height: 380px">
                        <div class="d-flex justify-content-center align-items-center" v-if="imageId === products[0].id">
                    </div>
                    <div class="card-body" v-if="countDown == 0">
                        <div  id="productImage"
                              v-if="imageId === products[0].id"
                              class="circular"
                              v-bind:style = "{ backgroundImage:
                               'url(https://tahi26.de/storage/'
                               + products[0].img_path + ')'
                              }"
                        ></div>
                    </div>
                    </div>
                    <div style=" background: #323a45; padding: 7px; display: flex; justify-content: center;" class="card-footer d-flex justify-content-center ">
                        <svg @click="showImage(products[0].id)"  style="height: 40px" fill="#fff" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM7 6l8 4-8 4V6z"/></svg>
                    </div>
                </div>
                <h2 v-else>Test Finish </h2>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        props: ['productsDb' , 'idDb'],
        name: "ShowImage",
        data: () => ({
            id:'',
            isVisible: false,
            counter: true,
            products: [],
            imageId: 0,
            countDown : 4,
            testedID: 0,
            facial: ''
        }),
        mounted() {
            this.products = JSON.parse(this.productsDb);
            this.id = JSON.parse(this.idDb);
            this.isVisible = true;
            EventBus.$on('showImage',  (data)=>{
                this.facial = data;
            })

        },
        methods: {
            showImage(id){
                this.imageId = id;
                this.testedID = id;
                this.countDownTimer();
            },
            countDownTimer() {
                if (this.countDown > -2) {
                    setTimeout(() => {
                        this.countDown -= 1;
                        this.countDownTimer()
                    }, 410)
                } else if(this.countDown === 0) {
                    this.creatingNewTest();
                    this.countDownTimer();
                } else if (this.countDown === -2) {
                    this.countDown = 4;
                    this.removeTestedProduct();
                    this.creatingNewTest();
                }
            },
            removeTestedProduct(){
                if (this.products.length === 1){
                    setTimeout(() => {
                        this.isVisible = false;
                        this.counter = false;
                    }, 512)
                }else {
                    console.log(this.products.length);
                    for(let i = 0; i < this.products.length; i++) {
                        if(this.products[i].id === this.testedID) {
                            this.products.splice(i, 1);
                            break;
                        }
                    }
                }
            },
            creatingNewTest() {
                axios.post('/api/testing', {
                    id: this.id,
                    product_id: this.imageId,
                    facial_expresion: JSON.stringify(this.facial)
                })
                    .then(function (response) {
                        console.log(response);
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            }
        },
    }
</script>

<style scoped>
    .container{
        font-family: 'Inconsolata', monospace;
    }
    #productImage{
        height: 300px;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    svg:hover {
        cursor: pointer;
    }
    canvas {
        position: absolute;
    }
</style>
