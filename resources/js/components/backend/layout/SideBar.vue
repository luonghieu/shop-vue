<template>
    <!-- LEFT SIDEBAR -->
    <div id="sidebar-nav" class="sidebar">
        <div class="sidebar-scroll">
            <nav>
                <ul class="nav">
                    <li v-on:click="setActiveRoute">
                        <router-link :to="{ name: 'dashboard'}" :class="currentRouteName == 'dashboard' ? 'active' : ''">
                            <i class="lnr lnr-home"></i>
                            <span>Dashboard</span>
                        </router-link>
                    </li>
                    <li v-on:click="setActiveRoute">
                        <router-link :to="{ name: 'elements'}" :class="currentRouteName == 'elements' ? 'active' : ''">
                            <i class="lnr lnr-code"></i>
                            <span>Elements</span>
                        </router-link>
                    </li>

                    <li v-on:click="setActiveRoute">
                        <router-link :to="{ name: 'tables'}" :class="currentRouteName == 'tables' ? 'active' : ''">
                            <i class="lnr lnr-dice"></i>
                            <span>Table</span>
                        </router-link>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- END LEFT SIDEBAR -->
</template>

<script>
    export default {
        name: "SideBar",
        data: function () {
            return {
                currentRouteName: 'dashboard',
            }
        },
        methods: {
            setActiveRoute: function () {
                this.currentRouteName = this.$route.name;
            }
        }
    }
</script>

<style scoped>

</style>