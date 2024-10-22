<script>
import { Icon } from "@iconify/vue";
export default {
    components: {
      Icon,
    },
    props: {
        loading: {
            type: Boolean,
            required: true,
        },
        closeForm: {
            type: Function,
            required: true,
        },
        sendEmail: {
            type: Function,
            required: true,
        },
    },
};
</script>
<template>
    <div class="flex justify-end pt-3">
      <button v-if="!loading" @click="sendEmail" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-bold rounded-lg text-sm px-5 py-2.5 me-2 mb-2">
        <Icon
          width="20"
          icon="streamline:send-email"
          class="text-blue float-left mr-2"
      />
        {{ $t('send')+$t('message') }}
      </button>
      <button v-else disabled type="button"
        class="text-white bg-[#ec754d] font-bold focus:ring-4 focus:ring-blue-300  rounded-lg text-sm px-5 py-2.5 me-2 mb-2"
      >
      <Icon
        width="20"
        icon="line-md:loading-loop"
        class="text-blue float-left mr-2"
      />
      {{ $t('sending') }}
      </button>
    </div>

</template>
