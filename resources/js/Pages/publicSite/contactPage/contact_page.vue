<script>
import AppLayout from "../../AppLayout.vue";
import ContainerLayout from "@/Components/container/Layout.vue";
import Header from "@/Components/header/header.vue";
import Contact from "@/Components/contact/contact.vue";
import ContainerCard from "@/Components/container/containerCard.vue";
import AppHeader from "@/Pages/AppHeader.vue";
export default {
    components: {
        AppLayout,
        ContainerLayout,
        Header,
        Contact,
        ContainerCard,
        AppHeader,
    },
};
</script>
<template>
    <AppHeader title="Contact" />
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
                    title="contact"
                    hiddenButton="hidden"
                    HorizontalLineHidden="hidden"
                    mdScreen="md:grid-cols-1"
                    lgScreen="lg:grid-cols-1"
                >
                    <Contact />
                </ContainerCard>
            </template>
        </ContainerLayout>
    </AppLayout>
</template>
