<script>
import menuNavigationVue from "../navigation/menuNavigation.vue";
export default {
    components: {
        menuNavigationVue,
    },
    props: {
        url: String,
        active:String,
        content1: String,
        content2: String,
    },
};
</script>
<template>
    <div class="grid sm:grid-cols-1 md:grid-cols-3">
        <div>
            <menuNavigationVue :urlPage="url" :activePage="active"></menuNavigationVue>
        </div>
        <div class="md:col-span-2">
            <slot name="content2"></slot>
        </div>
    </div>
</template>
