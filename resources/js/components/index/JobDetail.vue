<template>
    <div>
        <h1 align="center">職務経歴</h1>
        <hr/>
        <h6 align="center">（クリックすると詳細が表示されます。）</h6>
        <b-list-group>
            <b-list-group-item v-b-modal.modal-1><b-badge variant="dark" pill>1</b-badge> 株式会社○○の営業社員向け見積作成システム開発</b-list-group-item>
            <b-list-group-item v-b-modal.modal-2><b-badge variant="dark" pill>2</b-badge> 自社ポータルシステムのリファクタリング作業</b-list-group-item>
            <b-list-group-item v-b-modal.modal-3><b-badge variant="dark" pill>3</b-badge> 大手Webサービス企業向けの社内PayPayポイント付与ツールシステムのリファクタリング及び環境移行作業</b-list-group-item>
            <b-list-group-item v-b-modal.modal-4><b-badge variant="dark" pill>4</b-badge> 大手Webサービス企業向けの社内PayPayポイント付与ツールシステムでのオークション系キャンペーン対応・メンテナンス作業</b-list-group-item>
        </b-list-group>
        <b-modal id="modal-1" size="xl" title="株式会社○○の営業社員向け見積作成システム開発">
            <p class="my-4">Hello from modal!</p>
        </b-modal>
        <b-modal id="modal-2" size="xl" title="BootstrapVue">
            <p class="my-4">Hello from modal!</p>
        </b-modal>
        <b-modal id="modal-3" size="xl" title="BootstrapVue">
            <p class="my-4">Hello from modal!</p>
        </b-modal>
        <b-modal id="modal-4" size="xl" title="BootstrapVue">
            <p class="my-4">Hello from modal!</p>
        </b-modal>
    </div>
</template>
<script>
    export default {
        mounted() {
            console.log('NavVar mounted.')
        }
    }
</script>
