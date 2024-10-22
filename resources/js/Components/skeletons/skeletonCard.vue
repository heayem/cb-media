<script>
export default {
  props: {
    grid: {
        type:String,
        default:"lg:grid-cols-2"
    },
    countSkeleton: {
        type:Number,
        default:4
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
            role="status" class="p-4 border border-gray-400 rounded shadow animate-pulse md:p-6 lg:mt-0 mt-3 ">
            <div class="flex items-center justify-center h-48 mb-4 mt-3 bg-gray-300 rounded ">
                <svg class="w-10 h-10 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
                    <path d="M14.066 0H7v5a2 2 0 0 1-2 2H0v11a1.97 1.97 0 0 0 1.934 2h12.132A1.97 1.97 0 0 0 16 18V2a1.97 1.97 0 0 0-1.934-2ZM10.5 6a1.5 1.5 0 1 1 0 2.999A1.5 1.5 0 0 1 10.5 6Zm2.221 10.515a1 1 0 0 1-.858.485h-8a1 1 0 0 1-.9-1.43L5.6 10.039a.978.978 0 0 1 .936-.57 1 1 0 0 1 .9.632l1.181 2.981.541-1a.945.945 0 0 1 .883-.522 1 1 0 0 1 .879.529l1.832 3.438a1 1 0 0 1-.031.988Z"/>
                    <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.74 9L.879 3.707A2.98 2.98 0 0 0 .13 5H5Z"/>
                </svg>
            </div>
            <div class="h-2.5 bg-gray-300 rounded-full w-48 mb-4"></div>
            <div class="h-2 bg-gray-300 rounded-full mb-2.5"></div>
            <div class="h-2 bg-gray-300 rounded-full mb-2.5"></div>
            <div class="h-2 bg-gray-300 rounded-full "></div>
            <div class="flex items-center mt-4">
                <div>
                    <div class="h-2.5 bg-gray-300 rounded-full  w-32 mb-2"></div>
                    <div class="w-48 h-2 bg-gray-300 rounded-full "></div>
                </div>
            </div>
            <span class="sr-only">Loading...</span>
        </div>
    </div>
   </div>
</template>
