<template>
    <v-app>
        <v-navigation-drawer app color="#f7f7f7"  v-model="drawer">
            <v-list dense>

                <v-list-item
                v-for="item in drawerItems"
                :key="item.title"
                link
                >
                <v-list-item-icon dark>
                    <v-icon v-text="item.icon"></v-icon>
                </v-list-item-icon>

                <v-list-item-content>
                    <v-list-item-title>{{ item.title }}</v-list-item-title>
                </v-list-item-content>
                </v-list-item>
            </v-list>
        </v-navigation-drawer>

        <v-app-bar app color="#f7f7f7">
            <v-app-bar-nav-icon @click.stop="drawer = !drawer" />
            <v-img
                class="mx-2"
                src="/img/logo.jpeg"
                max-height="56"
                max-width="250"
                contain
            ></v-img>
            <v-spacer>
            </v-spacer>
            <v-btn icon>
                <v-icon>mdi-magnify</v-icon>
            </v-btn>
        </v-app-bar>
        <v-content>

            <!-- Provides the application the proper gutter -->
            <!-- If using vue-router -->
            <router-view></router-view>
        </v-content>
    </v-app>
</template>

<script>
import { 
    VApp,
    VContent,
    VContainer,
    VNavigationDrawer,
    VAppBar,
    VAppBarNavIcon,
    VBtn,
    VIcon,
    VSpacer,
    VImg,
    VList,
    VListItem,
    VListItemIcon,
    VListItemTitle,
    VListItemContent
} from 'vuetify/lib'

export default {
    components: {
        VApp,
        VContent,
        VContainer,
        VNavigationDrawer,
        VAppBar,
        VBtn,
        VAppBarNavIcon,
        VIcon,
        VSpacer,
        VImg, 
        VList,
        VListItem,
        VListItemIcon,
        VListItemTitle,
        VListItemContent
    },
    data() {
        return {
            drawer: false,
            drawerItems: [
                { title: 'Home', icon: 'mdi-home' },
                { title: 'Add Company', icon: 'mdi-google-my-business' },
                { title: 'About', icon: 'mdi-information-variant' },
            ]
        }
    }
}
    

</script>

<style lang="scss">
    #map {
        height: calc(100vh - 56px);
        width: 100vw;
    }
    @media (min-width: 1024px) {
        #map {
            height: calc(100vh - 64px);
        }
    }
</style>