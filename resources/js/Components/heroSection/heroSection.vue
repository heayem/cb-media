<script>
import { Link } from "@inertiajs/vue3";
import Header from "@/Components/header/header.vue";
import VLazyImage from "v-lazy-image";

export default {
  components: {
    Link,
    Header,
    VLazyImage,
  },
  data() {
    return {
      imageUrl: "image/VideoService.png",
    };
  },
  methods: {
    changeImage(newImage) {
      this.imageUrl = newImage;
    },
  },
};
</script>

<template>
  <div class="container">
    <Header hidden="block" />
  </div>
  <div class="relative z-10 overflow-hidden h-96 md:h-2/4 lg:h-screen">
    <VLazyImage
      class="relative z-0 object-scale-down w-full h-full transition-all ease-in-out opacity-90"
      :src="imageUrl"
      loading="lazy"
      alt="cb media"
    />
<div class="absolute left-0 w-full top-[20%] md:top-[10%] text-opacity-90">
      <div class="container">
        <h2
          class="text-white cursor-pointer text-d-h2 md:text-d-h2 lg:text-d-h1 w-fit hover:text-opacity-70"
          @mouseover="changeImage('image/VideoService.png')"
        >
          <Link href="/video-service">{{ $t("videoService") }} </Link>
        </h2>
        <h2
          class="text-white cursor-pointer text-d-h2 md:text-d-h2 lg:text-d-h1 w-fit hover:text-opacity-70"
          @mouseover="changeImage('image/Photo service.png')"
        >
          <Link href="/photo-service">{{ $t("photoService") }}</Link>
        </h2>
        <h2
          class="text-white cursor-pointer text-d-h2 md:text-d-h2 lg:text-d-h1 w-fit hover:text-opacity-70"
          @mouseover="changeImage('image/socialMarketing.png')"
        >
          <Link href="/social-media-marketing">{{ $t("socialMediaMarketing") }}</Link>
        </h2>
        <h2
          class="text-white cursor-pointer text-d-h2 md:text-d-h2 lg:text-d-h1 w-fit hover:text-opacity-70"
          @mouseover="changeImage('image/web.png')"
        >
          <Link href="/web-development">{{ $t("webDevelopment") }}</Link>
        </h2>
      </div>
    </div>
  </div>
</template>
