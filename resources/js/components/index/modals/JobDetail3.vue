<template>
    <b-modal id="detail-modal-3" hide-footer size="xl" title="③ 大手Webサービス企業向けの社内PayPayポイント付与ツールシステムのリファクタリング及び環境移行作業">
        <p class="my-4">
【2019年03月～2020年02月】 <br>
■ 大手Webサービス企業向けの社内PayPayポイント付与ツールシステムのリファクタリング及び環境移行作業<br>
【担当フェーズなど】<br>
- 要件定義・システム設計・開発・テスト<br>
<br>
<br>
【業務詳細】<br>
①  リファクタリング作業<br>
- <br>
生PHPの既存コードをLaravelフレームワークに移行<br>
- テストコード追加・ロジック変更・共通コードのコンポーネント化作業でレガシーコードを改善<br>
<br>
<br>
②  新環境移行作業<br>
- 社内Linuxサーバー（IaaS）に構築されているアプリを下の環境へ移行<br>
　1) フロントエンド：PaaS（Cloud Foundry）<br>
　2) バッチ：Kubernetes基盤の独自PF<br>
- チーム3人の中一人は既存ツールを運用していたため、サブリーダーとしてリーダーと2人で参加<br>
- 設計・開発・新環境の説明 / 手順書の作成・スケジュール調整など、色々なプロセスを経験<br>
- <br>
CI/CDの環境を構築し、Shellでの手動配布からScrewdriver.cdを用いて自動配布できるよう変更<br>
<br>
- Kubernetes基盤PFでバッチを起動させるため、Dockerイメージを作成<br>
- <br>
サーバーロードバランス（負荷分散）のため、フロントエンドのアプリを各クラスターごとに1台ずつ構築し、認証クッキーをセッションにを入れて異なるクラスターでも認証できるように工夫<br>
</p>
    </b-modal>
</template>
<script>
    export default {
        mounted() {
            console.log('NavVar mounted.')
        }
    }
</script>
