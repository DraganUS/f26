<template>
    <div class="container">
<!--        <h3>Here's how it works</h3>-->
        <img style="width: 100%" src="http://142.93.168.134/storage/Hero-sofunktionierts_2x-min.jpg" alt="">

        <div id="exp2" class="d-flex justify-content-around align-items-center">
            <div>
                <div class="d-flex flex-row fm2">
                    <i class="fas fa-check-square"></i>
                    <h4>First glimpse</h4>
                </div>
                <p>Determination of the first spontaneous and unreflected impression and the emotional impression (positive or negative associations)</p>
            </div>
            <div>
                <div class="d-flex flex-row ml-2 fm2">
                    <i class="fas fa-check-square"></i>
                    <h4>Legibility of writing</h4>
                </div>
                <p>Measuring the readability of headlines, texts, advertising messages, etc. and determining the time necessary for understanding</p>
            </div>
            <div>
                <div class="d-flex flex-row ml-2 fm2">
                    <i class="fas fa-check-square"></i>
                    <h4>Advertising success forecast</h4>
                </div>
                <p>Compare the impression of the advertising material desired for your advertising goals with the actually realized perception</p>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Home2Component",
        data: () => ({

        }),
    }
</script>

<style scoped>
 div#exp2{
     padding:20px;
     background: #f5f6fa;
     margin-bottom: 70px;
 }
 .fa-check-square{
     font-size: 19px;
     color: #2b6bde;
 }
 .fm2, h4{
     min-width: 230px;
     max-width: 230px;
 }
 i{
     margin-top: 1px;
     margin-left: 3px;
     margin-right: 7px;
 }
 @media only screen and (max-width: 994px) {
     .justify-content-around{
         flex-wrap: wrap;
     }
 }
</style>
