<template>
    <b-container class="bv-example-row">
        <b-row align-v="center" class="background-row" style="min-height:800px; padding-bottom:100px;">
            <b-col lg="8" offset-lg="2">
                <index-profile-card></index-profile-card>
            </b-col>
        </b-row>
        <b-row align-v="center" style="background-color: rgba(255, 165, 0, 0.9); min-height:800px; padding-bottom:100px; padding-top:100px;">
            <b-col lg="8" offset-lg="2">
                <job-detail></job-detail>
            </b-col>
        </b-row>
    </b-container>
</template>
<style scoped>
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
