<script>
import {Head} from "@inertiajs/vue3";

export default {
    components: {
        Head,
    },
    props: {
        title: {type: String, required: true},
        description: {type: String, default: "CB media"},
    },
};
</script>
<template>
    <Head>
        <title>{{ title }}</title>
        <meta
            head-key="description"
            name="description"
            :content="description"
        />
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=AW-966631454"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }

            gtag('js', new Date());

            gtag('config', 'AW-966631454');
        </script>
    </Head>
</template>
