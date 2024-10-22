<script>
import { Link } from "@inertiajs/vue3";
import VLazyImage from "v-lazy-image";
export default {
    components: {
        Link,
        VLazyImage,
    },
    props: {
        src: { type: String, default: "" },
        alt: { type: String, default: "image not found" },
        title: { type: String, default: "" },
        description: { type: String, default: "" },
        width: { type: String, default: "400px" },
        url: { type: String, default: "/" },
    },
};
</script>
<template>
    <Link :href="url" class="w-full">
        <div :class="`w-[${width}] h-[300px] hover:skew-y-1`">
            <div class="relative flex w-full h-full m-0 shadow-xl group rounded-xl ring-gray-900/5 sm:mx-auto sm:max-w-lg">
                <div class="z-10 w-full h-full overflow-hidden transition duration-300 ease-in-out bg-gray-300 border-4 border-gray-200 rounded-xl group-hover:opacity-100">
                    <VLazyImage
                        :src="src"
                        :alt="alt"
                        class="block object-cover object-center w-full h-full transition duration-300 transform scale-100 opacity-100 animate-fade-in group-hover:scale-110"
                    />
                </div>
                <div class="absolute bottom-0 z-20 pb-4 m-0 transition duration-300 ease-in-out ps-4 group-hover:-translate-y-1 group-hover:translate-x-3 group-hover:scale-110">
                    <h1 class="font-bold text-white uppercase text-d-h3">{{ title }}</h1>
                    <h2 class="text-sm font-light text-gray-200 shadow-xl">
                        {{ description }}
                    </h2>
                </div>
            </div>
        </div>
    </Link>
</template>
