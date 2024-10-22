<script>
import { reactive } from 'vue';
import { Icon } from "@iconify/vue/dist/iconify.js";
import VLazyImage from "v-lazy-image";

export default {
  components: {
    Icon,
    VLazyImage,
  },
  props: {
    title: String,
    content: String,
    src: String,
    alt: String,
    Allgallery: Array,
    type: { String, default: null },
  },
  data() {
    return {
      isSharePopupOpen: false,
      isModalOpen: true,
      currentIndex: 0,
      fullscreen: false,
      isFullscreen: false,
      currentImage: reactive({
        src: this.src,
        alt: this.alt,
      }),
    };
  },
  methods: {
    closeModal() {
      this.$emit("close");
    },
    toggleFullscreen() {
      const element = document.documentElement;

      if (!document.fullscreenElement) {
        element.requestFullscreen().then(() => {
          this.isFullscreen = true;
          this.updateImageSizeForFullscreen();
          this.updateFullscreenIcon();
        });
      } else {
        document.exitFullscreen().then(() => {
          this.isFullscreen = false;
          this.updateFullscreenIcon();
        });
      }
    },

    updateFullscreenIcon() {
      const fullscreenIcon = this.isFullscreen ? "ic:baseline-fullscreen-exit" : "ic:baseline-fullscreen";
      this.$refs.fullscreenIcon.icon = fullscreenIcon;
    },
    updateImageSizeForFullscreen() {
      const imageContainer = document.querySelector('.image-container');
      if (imageContainer) {
        imageContainer.classList.toggle('fullscreen');
      }
    },
    handleEscapeKey(event) {
      if (event.key === "Escape") {
        this.closeModal();
      }
    },
    handleNext() {
      if (this.currentIndex < this.Allgallery.length - 1) {
        this.currentIndex++;
        const nextImage = this.Allgallery[this.currentIndex];
        this.currentImage.src = nextImage;
        this.currentImage.alt = nextImage.title || '';
      }
    },
    handleBack() {
      if (this.currentIndex > 0) {
        this.currentIndex--;
        const prevImage = this.Allgallery[this.currentIndex];
        this.currentImage.src = prevImage;
        this.currentImage.alt = prevImage.title || '';
      }
    },
    toggleSharePopup() {
      this.isSharePopupOpen = !this.isSharePopupOpen;
    },
    shareOnFacebook() {
      this.toggleSharePopup();
    },
    shareOnInstagram() {
      this.toggleSharePopup();
    },
  },
  mounted() {
    document.addEventListener("keyup", this.handleEscapeKey);
  },
  beforeDestroy() {
    document.removeEventListener("keyup", this.handleEscapeKey);
  },
};
</script>
<template>
  <div v-if="type !== null"
    class="fixed inset-0 z-40 flex justify-center overflow-x-hidden overflow-y-auto outline-none bg-gray-300">
    <button class="absolute z-50  top-0 right-0 px-5 py-5 rounded text-gray-500 ">
      <Icon @click="toggleSharePopup" width="40px" icon="solar:hamburger-menu-broken"
        class="float-left mr-5 hover:text-gray-700" />
      <Icon ref="fullscreenIcon" @click="toggleFullscreen" width="40px"
        :icon="isFullscreen ? 'ic:baseline-fullscreen-exit' : 'ic:baseline-fullscreen'"
        class="float-left mr-5 hover:text-gray-700" />
      <Icon @click="closeModal" width="40px" icon="ant-design:close-outlined"
        class="float-left mr-5 hover:text-gray-700" />
    </button>
    <div v-if="isSharePopupOpen" class="share-popup cursor-pointer ">
      <a target="_blank" href=" https://www.facebook.com/cbmedia318"
        class="relative inline-flex items-center w-full px-4 py-2 text-sm font-medium border-b border-gray-200 rounded-lg hover:bg-gray-100  focus:z-10 focus:ring-2  ">
        <Icon width="30px" icon="ph:facebook-logo-bold" />
        <span class="pl-3">{{ $t('facebook') }}</span>
      </a>
      <a target="_blank" href="https://www.youtube.com/@cbmedia318/videos"
        class="relative inline-flex items-center w-full px-4 py-2 text-sm font-medium border-b rounded-lg hover:bg-gray-100  focus:z-10 focus:ring-2   ">
        <Icon width="30px" icon="entypo-social:youtube-with-circle" />
        <span class="pl-3">{{ $t('youtube') }}</span>
      </a>
    </div>
    <div @click.stop class="relative w-[80%] image-container z-10">
      <div class="flex items-center overflow-y-auto">
        <div class="py-4 mr-5" @click="handleBack">
          <a class="float-right text-gray-500 cursor-pointer hover:text-gray-700 transition duration-150 ease-in-out"
            title="next">
            <Icon width="40px" icon="ooui:next-rtl" />
          </a>
        </div>
        <div class="w-full mx-auto">
          <transition name="image-fade" mode="out-in">
            <VLazyImage class=" w-screen h-screen rounded-sm object-contain md:object-cover md:pt-20 md:pb-20 pt-0 pb-0"
              :key="currentImage.src" :src="currentImage.src" :alt="currentImage.alt" />
          </transition>
        </div>
        <div class="py-4 ml-5" @click="handleNext">
          <a class="float-right text-gray-500 cursor-pointer hover:text-gray-700 transition duration-150 ease-in-out"
            title="back">
            <Icon width="40px" icon="ooui:next-ltr" />
          </a>
        </div>
      </div>
    </div>
  </div>
  <div v-else @click="closeModal"
    class="fixed inset-0 z-50 flex items-center justify-center overflow-x-hidden overflow-y-auto outline-none modal">
    <div @click.stop class="relative w-[1000px] mx-auto my-6 image-container">
      <div class="bg-white rounded shadow-lg">
        <div class="flex flex-row items-center justify-between border-b-2">
          <h3 class="px-3 py-2 text-m-h3 md:text-d-h3">
            {{ title }}
          </h3>
          <button @click="closeModal"
            class="px-5 py-5 text-gray-500 rounded hover:text-red-500 hover:border-gray-300 hover:bg-white">
            <Icon icon="ant-design:close-outlined" />
          </button>
        </div>
        <div class="p-4">
          <div class="mx-auto my-5 bg-gray-100">
            <VLazyImage class="w-full h-full rounded-sm" :src="src" :alt="alt" />
          </div>
          <div class="mx-auto my-5 text-gray-700">{{ content }}</div>
        </div>
      </div>
    </div>
  </div>
</template>
<style scoped>
.fullscreen {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 45;
}

.modal {
  background-color: rgb(48 48 48 / 93%);
}

.image-container {
  width: 100%;
  height: 100%;
}

.image-fade-enter-active,
.image-fade-leave-active {
  transition: opacity 0.5s;
}

.image-fade-enter,
.image-fade-leave-to {
  opacity: 0;
}

.share-popup {
  position: absolute;
  top: 70px;
  right: 20px;
  border-radius: 5px;
  background-color: white;
  border: 1px solid #ccc;
  padding: 10px;
  z-index: 1000;
}

.share-popup ul {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

.share-popup li {
  cursor: pointer;
  padding: 5px;
}
</style>
