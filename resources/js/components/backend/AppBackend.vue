<template>
    <div id="wrapper">
        <header-component></header-component>
        <sidebar-component></sidebar-component>
        <!-- MAIN -->
        <div class="main">
            <router-view></router-view>
        </div>
        <!-- END MAIN -->

        <footer-component></footer-component>
    </div>
</template>

<script>
    import Header from './layout/Header';
    import SideBar from './layout/SideBar';
    import Footer from './layout/Footer';

    export default {
        name: "AppBackend",
        components: {
            'header-component': Header,
            'sidebar-component': SideBar,
            'footer-component': Footer,
        }
    }
</script>

<style scoped>

</style>