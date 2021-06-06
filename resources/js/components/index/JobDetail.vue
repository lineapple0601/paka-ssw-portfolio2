<template>
    <div>
        <h1 class="wf-sawarabimincho white" align="center">職務経歴</h1>
        <hr style="width:70%; height:5px;border-width:0;color:white;background-color:white;margin-bottom:20px;">
        <h6 class="white" align="center">（クリックすると詳細が表示されます。）</h6>
        <b-list-group>
            <b-list-group-item v-b-modal.detail-modal-1><b-badge variant="dark" pill>1</b-badge> 株式会社○○の営業社員向け見積作成システム開発</b-list-group-item>
            <b-list-group-item v-b-modal.detail-modal-2><b-badge variant="dark" pill>2</b-badge> 自社ポータルシステムのリファクタリング作業</b-list-group-item>
            <b-list-group-item v-b-modal.detail-modal-3><b-badge variant="dark" pill>3</b-badge> 大手Webサービス企業向けの社内PayPayポイント付与ツールシステムのリファクタリング及び環境移行作業</b-list-group-item>
            <b-list-group-item v-b-modal.detail-modal-4><b-badge variant="dark" pill>4</b-badge> 大手Webサービス企業向けの社内PayPayポイント付与ツールシステムでのオークション系キャンペーン対応・メンテナンス作業</b-list-group-item>
        </b-list-group>
        <job-detail-modal-1></job-detail-modal-1>
        <job-detail-modal-2></job-detail-modal-2>
        <job-detail-modal-3></job-detail-modal-3>
        <job-detail-modal-4></job-detail-modal-4>
    </div>
</template>
<style scoped>
    .white {
        color: white;
    }
</style>
<script>
    export default {
        mounted() {
            console.log('NavVar mounted.')
        }
    }
</script>
