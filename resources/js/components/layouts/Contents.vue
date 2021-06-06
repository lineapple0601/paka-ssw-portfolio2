<template>
    <b-container class="bv-example-row" fluid>
        <b-row align-v="center" class="common-layout background-div-odd">
            <b-col lg="8" offset-lg="2">
                <index-profile></index-profile>
            </b-col>
        </b-row>
        <b-row align-v="center" class="common-layout background-div-even">
            <b-col lg="8" offset-lg="2">
                <introduce-card></introduce-card>
            </b-col>
        </b-row>
        <b-row align-v="center" class="common-layout background-div-odd">
            <b-col lg="8" offset-lg="2">
                <job-detail></job-detail>
            </b-col>
        </b-row>
        <b-row align-v="center" class="common-layout bacground-div-even">
            <b-col lg="8" offset-lg="2">
                <contact-address></contact-address>
            </b-col>
        </b-row>
    </b-container>
</template>
<style scoped>
    div.background-div-odd {
        background-color: #1abc9c !important
    }
    div.common-layout {
        min-height:600px; 
        padding-bottom:50px; 
        padding-top:50px;
    }
    hr {
        margin-top: 1rem;
        margin-bottom: 1rem;
        border: 0;
        border-top: 1px solid rgba(0, 0, 0, 0.1);
    }
    div.background-row {
        background: url('https://picsum.photos/1024/400/?image=41') no-repeat;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
</style>
<script>
    export default {
        mounted() {
            console.log('NavVar mounted.')
        }
    }
</script>
