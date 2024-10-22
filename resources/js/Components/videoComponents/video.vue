<script>
import PrimaryButton from "../button/PrimaryButton.vue";
import { Icon } from "@iconify/vue";
export default {
  components: {
    PrimaryButton,
    Icon,
  },
  props: {
    urlVideo: {
      type: Array,
      required: true,
    },
    title: String
  },
  data() {
    return {
      firstVideo: this.urlVideo.find((video) => video.title === this.title),
    };
  },
};
</script>
<template>
  <div class="grid grid-cols-6 gap-4 text-center">
    <div class="col-start-1 col-end-7">
      <div
        class="z-10 w-full h-[500px] overflow-hidden transition duration-300 ease-in-out border-4 bg-gray-300 rounded-xl group-hover:opacity-100  "
      >
        <iframe
        :src="firstVideo.videos[0]"
          class="w-[100%] h-[100%]"
          title="My Epic Return to Thai Longtail Boats! 50 PSI of Boost!"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          allowfullscreen
        ></iframe>
      </div>
    </div>
  </div>
  <div class="capitalize">
    <h2 class="float-left text-d-h3">
      <Icon class="float-left mb-1 mr-2" width="35" icon="akar-icons:video" />
      {{ $t("video") +' '+ $t(title)}}
    </h2>
  </div>
  <div class="grid grid-cols-2 gap-2">
    <template v-for="urlVideos in urlVideo" :key="urlVideos.id">
      <template v-if="urlVideos.title === title">
        <div
          v-for="video in urlVideos.videos"
          :key="video.id"
          class="bg-gray-300 border-4 rounded-md"
        >
          <iframe
            :src="[`${video}`]"
            class="w-[100%] h-[300px]"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen
          ></iframe>
        </div>
      </template>
    </template>
  </div>
</template>
