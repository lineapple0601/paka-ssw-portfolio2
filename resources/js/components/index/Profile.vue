<template>
    <div class="background-div">
        <b-card 
            no-body 
            class="overflow-hidden" 
            border-variant="secondary"
            style="max-width: 800px; margin-top:50px; margin-left:auto; margin-right:auto;">
            <b-row no-gutters>
            <b-col sm="12" md="4">
                <b-card-img src="https://picsum.photos/400/400/?image=20" alt="Image" class="rounded-0"></b-card-img>
            </b-col>
            <b-col sm="12" md="8">
                <b-card-body title="申　昇祐（Shin SeungWoo）">
                    <b-card-sub-title class="mb-2">シン　スンウ</b-card-sub-title>
                    <b-card-text>
                        1991年06月01日ソウル生まれ。<br>
                        2017年12月に日本に来て、2018年2月からIT業界で仕事をはじめました。<br>
                        主任です
                    </b-card-text>
                </b-card-body>
            </b-col>
            </b-row>
        </b-card>
    </div>
</template>
<style scoped>
div.background-div {
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
