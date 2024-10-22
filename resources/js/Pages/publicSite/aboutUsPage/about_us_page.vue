<script>
import AppLayout from "@/Pages/AppLayout.vue";
import AppHeader from "@/Pages/AppHeader.vue";
import ContainerLayout from "@/Components/container/Layout.vue";
import Header from "@/Components/header/header.vue";
import AboutUs from "@/Components/aboutUs/aboutUs.vue";
import ContainerCard from "@/Components/container/containerCard.vue";
export default {
    components: {
        AppLayout,
        ContainerLayout,
        Header,
        AboutUs,
        ContainerCard,
        AppHeader,
    },
};
</script>
<template>
    <AppHeader title="About us" />
    <AppLayout>
        <Header
            Position="none"
            iconColor="black"
            textColor="black"
            horizontalLine="black"
        />
        <ContainerLayout>
            <template v-slot:content2>
                <ContainerCard
                    textColor="black"
                    title="aboutus"
                    hiddenButton="hidden"
                    HorizontalLineHidden="hidden"
                    mdScreen="md:grid-cols-1"
                    lgScreen="lg:grid-cols-1"
                >
                    <AboutUs />
                </ContainerCard>
            </template>
        </ContainerLayout>
    </AppLayout>
</template>
