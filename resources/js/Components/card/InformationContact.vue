<script>
import { Icon } from "@iconify/vue";
export default {
    components: {
        Icon
    }
}
</script>
<template>
    <div class="p-8">
        <h1 class="text-4xl font-extrabold text-white">{{ $t('getInTouch') }}</h1>
        <p class="mt-3 text-sm font-bold text-white">Have some big idea or brand to develop and need help? Then reach out we'd love to hear about your project  and provide help.</p>
        <ul class="mt-12 space-y-8">
            <li class="flex items-center">
                <Icon width="40" icon="humbleicons:mail-open" class="float-left text-white" />
                <a class="ml-3 text-lg text-white">
                    <strong>ask@cbmedia-asia.com</strong>
                </a>
            </li>
            <li class="flex items-center">
                <Icon width="40" icon="material-symbols:phone-iphone-outline" class="float-left text-white" />
                <a class="ml-3 text-lg text-white">
                    <strong>+885 23 6730 888 </strong>
                </a>
            </li>
            <li class="flex items-center">
                <Icon width="40" icon="mdi:address-marker-outline" class="float-left text-white" />
                <a class="ml-3 text-white text- lg">
                    <strong>No 18E0, St.K4B Phumi, Trung Morn St,Phnom Penh, Cambodia</strong>
                </a>
            </li>
        </ul>
        <ul class="flex mt-12 space-x-4">
            <li class="bg-[#3c3474] hover:bg-[#584ca7] h-10 w-10 rounded-full flex items-center justify-center shrink-0">
                <a href="https://www.facebook.com/cbmedia318">
                    <Icon width="25" icon="iconoir:facebook" class="float-left text-white" />
                </a>
            </li>
            <li class="bg-[#3c3474] hover:bg-[#584ca7] h-10 w-10 rounded-full flex items-center justify-center shrink-0">
                <a href="https://www.youtube.com/@cbmedia318/videos">
                    <Icon width="25" icon="flowbite:youtube-solid" class="float-left text-white" />
                </a>
            </li>
        </ul>
    </div>
</template>
