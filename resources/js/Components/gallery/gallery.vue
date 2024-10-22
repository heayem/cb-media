<script>
import VLazyImage from "v-lazy-image";
import modal from "../Modal/modal.vue";
export default {
  components: {
    VLazyImage,
    modal,
  },
  data() {
    return {
      isModalOpen: false,
      Allgallery: [],
    };
  },
  props: {
    imageList: Array,
    type: { String, default: null },
  },
  methods: {
    showModal(imageSrc,itemTitle,allGallery) {
      this.src = imageSrc;
      this.alt = itemTitle;
      this.isModalOpen = true;
      this.Allgallery = allGallery;
    },
    closeModal() {
      this.isModalOpen = false;
    },
  },
};
</script>
<template>
  <template v-for="item in imageList" :key="item.id">
    <div class="grid grid-cols-2 gap-4 md:grid-cols-3" v-if="item.title === type">
      <div
        class="bg-gray-300 rounded-lg sm:h-[190px]"
        v-for="(service, index) in item.photos"
        :key="index"
      >
        <VLazyImage
          class="h-full w-full transition duration-200 rounded-lg cursor-pointer hover:scale-105"
          :src="service"
          :alt="`Image ${item.title}`"
          @click="showModal(service, item.title , item.photos)"
        />
      </div>
    </div>
  </template>
  <modal
    :Allgallery="Allgallery"
    :src="this.src"
    :alt="this.alt"
    :type="type"
    v-if="isModalOpen"
    @close="closeModal"
  />
</template>
