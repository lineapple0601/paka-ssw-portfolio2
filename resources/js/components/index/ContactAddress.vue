<template>
    <div class="background-div">
        <h1 class="wf-sawarabimincho" align="center">ご連絡先</h1>
        <hr style="width:70%; height:5px;border-width:0;color:black;background-color:black; margin-bottom:25px;">
        <b-row no-gutters>
            <b-col sm="12" offset-md="2" md="2"><h5 align="center"><b-icon icon="envelope"/> メール</h5></b-col>
            <b-col sm="12" md="6"><h5 align="center"><u>lineapple0601@gmail.com</u></h5></b-col>
        </b-row>
        <b-row no-gutters style="margin-top:10px;">
            <b-col sm="12" offset-md="2" md="2"><h5 align="center"><b-icon icon="telephone"/> 電話番号</h5></b-col>
            <b-col sm="12" md="6"><h5 align="center"><u>080-1390-7808</u></h5></b-col>
        </b-row>
    </div>
</template>
<script>
    export default {
        mounted() {
            console.log('NavVar mounted.')
        }
    }
</script>
