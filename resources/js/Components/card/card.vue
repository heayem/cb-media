<script>
import VLazyImage from "v-lazy-image";
import SecondaryButton from "../button/SecondaryButton.vue";
import modal from "../Modal/modal.vue";
export default {
  components: {
    VLazyImage,
    readMore: SecondaryButton,
    modal,
  },
  props: {
    alt: String,
    src: { type: String, default: "" },
    title: { type: String, default: "" },
    description: { type: String, default: "" },
    bgColor: { type: String, default: "bg-white" },
    textColor: { type: String, default: "black" },
    weightCard: { type: String, default: "400px" },
  },
  data() {
    return {
      modalImageAlt: "Image Alt Text",
      isModalOpen: false,
    };
  },
  methods: {
    showModal() {
      this.isModalOpen = true;
    },
    closeModal() {
      this.isModalOpen = false;
    },
  },
};
</script>
<template>
  <div :class="`w-[${weightCard}] rounded-t-[10px] m-auto`">
    <div class="w-full h-2/3 relative rounded-t-[10px] overflow-hidden bg-gray-300">
      <VLazyImage
        class="w-full h-[300px] rounded-t-[10px] transition duration-300 ease-in-out hover:scale-110"
        :src="src"
        :alt="alt"
      />
    </div>
    <div :class="`w-full h-1/3 p-6 ${bgColor} text-${textColor}`">
      <h3 class=" text-m-h2 md:text-d-h3 lg:text-d-h3">{{ title }}</h3>
      <p class="pt-2 text-m-p md:text-d-p">
        {{ description.substring(0, 100) }}
        <readMore name="ReadMore..." @click="showModal" />
      </p>
    </div>
  </div>

  <modal
    :title="title"
    :content="description"
    :src="src"
    :alt="modalImageAlt"
    v-if="isModalOpen"
    @close="closeModal"
  />
</template>
