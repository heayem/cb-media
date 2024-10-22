<script>
import { Link } from "@inertiajs/vue3";
export default {
    components: {
        Link,
    },
    props: {
        name: {
            type: String,
            default: "",
        },
        color: {
            type: String,
            default: "white",
        },
        hoverText: {
            type: String,
            default: "white",
        },
        hoverBg: {
            type: String,
            default: "",
        },
        viewMore: {
            type: String,
            default: "",
        },
        target: {
            type: String,
        },
    },
};
</script>
<template>
    <div class="flex justify-center w-full py-5">
        <div
            class="w-[149px] h-[42px] flex justify-center items-center duration-[400ms,700ms]"
            :class="`hover:bg-${hoverBg}  border-${hoverBg} text-${color} hover:text-${hoverText} `"
        >
            <a :href="`${viewMore}`" :target="`${target}`" v-if="target">
                <button
                    class="relative w-40 overflow-hidden text-lg bg-white rounded-lg shadow group h-11"
                >
                    <div
                        class="absolute inset-0 w-1 bg-amber-400 transition-all duration-[250ms] ease-out group-hover:w-full"
                    ></div>
                    <p class="relative text-black group-hover:text-white">{{
                        $t('more')
                    }}
                </p>
                </button>
            </a>
            <Link :href="`${viewMore}`" v-else>
                <button
                    class="relative w-40 overflow-hidden text-lg bg-white rounded-lg shadow group h-11"
                >
                    <div
                        class="absolute inset-0 w-1 bg-amber-400 transition-all duration-[250ms] ease-out group-hover:w-full"
                    ></div>
                    <p class="relative text-black group-hover:text-white">
                        {{ name === 'ViewTeam' ?  $t('viewTeam') : $t('more')}}
                    </p>
                </button>
            </Link>
        </div>
    </div>
</template>
