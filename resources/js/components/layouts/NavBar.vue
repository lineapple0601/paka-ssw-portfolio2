<template>
    <div>
        <b-navbar toggleable="lg" type="dark" variant="dark">
            <b-navbar-brand href="#">About SSW</b-navbar-brand>
            <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>
            <b-collapse id="nav-collapse" is-nav>
            <b-navbar-nav class="ml-auto">
                <b-button-group>
                    <b-button variant="outline-light">
                        <b-icon icon="github" variant="light"/> Github
                    </b-button>
                    <b-button variant="outline-light">
                        <b-icon icon="file-earmark-text"></b-icon> Qiita
                    </b-button>
                </b-button-group>
            </b-navbar-nav>
            </b-collapse>
        </b-navbar>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('NavVar mounted.')
        }
    }
</script>
