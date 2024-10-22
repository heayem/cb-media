<script>
import Footer from "@/Components/footer/footer.vue";
export default {
    props: {
        cssClass: { type: String, default: "" },
        bgWhite: { type: Boolean, default: true },
    },
    components: {
        Footer,
    },
};
</script>

<template>
    <div :class="cssClass">
        <slot name="heroSection"></slot>
        <div class="container">
            <slot></slot>
            <Footer
                v-if="bgWhite"
                iconColor="black"
                textColor="black"
                menuColor="black"
                horizontalLine="black"
            />
            <Footer
                v-else
                iconColor="white"
                textColor="white"
                menuColor="white"
                horizontalLine="white"
            />
        </div>
    </div>
</template>
