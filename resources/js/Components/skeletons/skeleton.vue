<script>
export default {
  props: {
    grid: {
        type:String,
        default:"lg:grid-cols-2"
    },
    countSkeleton: {
        type:Number,
        default:3
    },
  },
};
</script>
<template>
    <div class="pt-[40px]">
        <div role="status" class="animate-pulse">
            <div class="h-5 bg-gray-300  max-w-[380px] mb-5 rounded-full "></div>
        </div>
    <div :class="`md:grid-cols-2 md:grid md:pb-12 md:gap-4 lg:grid lg:gap-4 ${grid} lg:pb-12 sm:grid-cols-1 sm:pb-12`">
        <div
            v-for="index in countSkeleton" :key="index"
            role="status"
            class="p-1 space-y-8 lg:p-0 animate-pulse md:space-y-0 md:space-x-0 md:flex md:items-center"
        >
        <div class="flex items-center justify-center h-[300px] w-[100%] bg-gray-300 rounded">
            <svg
                class="w-10 h-10 text-gray-500"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="currentColor"
                viewBox="0 0 20 18"
            >
            <path d="M18 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm4.376 10.481A1 1 0 0 1 16 15H4a1 1 0 0 1-.895-1.447l3.5-7A1 1 0 0 1 7.468 6a.965.965 0 0 1 .9.5l2.775 4.757 1.546-1.887a1 1 0 0 1 1.618.1l2.541 4a1 1 0 0 1 .028 1.011Z"/>
            </svg>
        </div>
        </div>
    </div>
</div>
</template>
