<script>
import skeleton from "@/Components/skeletons/skeleton.vue";
import skeletonCard from "@/Components/skeletons/skeletonCard.vue";
import skeletonVideo from "@/Components/skeletons/skeletonVideo.vue";
import ContainerCard from "@/Components/container/containerCard.vue";
import CardPhoto from "@/Components/card/Photo.vue";
import Gallery from "@/Components/gallery/gallery.vue";
import Video from "@/Components/videoComponents/video.vue";
import Card from "@/Components/card/card.vue";
import { apiMixin } from "./apiMixin.vue";
import cardProfile from "@/Components/card/cardProfile.vue";
import skeletonGallery from "../skeletons/skeletonGallerys.vue";

export default {
  mixins: [apiMixin],
  components: {
    skeleton,
    skeletonCard,
    skeletonVideo,
    ContainerCard,
    CardPhoto,
    Gallery,
    Video,
    Card,
    cardProfile,
    skeletonGallery,
  },
  props: {
    urlApi: { String, default: null },
    urlLink: { String, default: null },
    title: { String, default: null },
    type: { String, default: null },
    objectName: { String, default: null },
  },
  data() {
    return {
      loading: true,
      apiData: null,
      publicApi: this.urlApi,
      serviceUrlMap: {
        Event: "event",
        Travel: "travel",
        Product: "product",
        Studio: "studio",
        Documentary: "documentary",
        Commercial: "commercial",
        "Live Strem": "livestream",
        "Sort Film": "shortfilm",
      },
    };
  },
  methods: {
    getServiceUrl(title) {
      const defaultPath = "";
      return `/${this.urlLink}/${this.serviceUrlMap[title] || defaultPath}`;
    },
  },
  mounted() {
    this.fetchData();
  },
};
</script>
<template>
  <div v-if="title === 'videoService' || title === 'photoService'">
    <div v-if="loading">
        <skeleton
            grid="lg:grid-cols-2"
            :countSkeleton="6"
        />
    </div>
    <ContainerCard
      textColor="black"
      lgScreen="2"
      hiddenButton="hidden"
      HorizontalLineHidden="hidden"
      :title="title"
      v-else
    >
      <div v-for="services in this.apiData" :key="services.id">
        <div class="flex justify-center">
          <CardPhoto
            width="100%"
            :url="getServiceUrl(services.title)"
            :title="services.title"
            :alt="services.title"
            :src="services.image"
          />
        </div>
      </div>
    </ContainerCard>
  </div>
  <div v-if="type === 'photoEvents'">
    <ContainerCard
      textColor="black"
      lgScreen="lg:grid-cols-1"
      mdScreen="md:grid-cols-1"
      hiddenButton="hidden"
      HorizontalLineHidden="hidden"
      :title="title"
    >
    <div v-if="loading">
        <skeletonGallery
            grid="grid-cols-3"
            :countSkeleton="6"
        />
    </div>
    <Gallery :type="title" :imageList="this.apiData" v-else />
    </ContainerCard>
  </div>
  <div v-if="type === 'servicesMedia'">
    <ContainerCard
      textColor="black"
      hiddenButton="hidden"
      HorizontalLineHidden="hidden"
      mdScreen="md:grid-cols-1"
      lgScreen="lg:grid-cols-1"
      paddingTitle="py-5"
      :title="title"
    >
      <div v-if="loading"><skeletonVideo /></div>
      <Video :title="title" :urlVideo="this.apiData" v-else />
    </ContainerCard>
  </div>
  <div v-if="type === 'serviceMarketing'">
    <div v-if="loading"><skeletonCard /></div>
    <ContainerCard
      textColor="black"
      lgScreen="2"
      hiddenButton="hidden"
      HorizontalLineHidden="hidden"
      :title="title"
      v-else
    >
      <div
        class="flex justify-center"
        v-for="services in this.apiData"
        :key="services.id"
      >
        <Card
          bgColor="bg-white"
          textColor="block"
          weightCard="100%"
          :title="services.title"
          :description="services.description"
          :alt="services.description"
          :src="services.src"
        />
      </div>
    </ContainerCard>
  </div>
  <div v-if="type === 'team'">
    <div v-if="loading">
        <skeletonCard
            grid="lg:grid-cols-3"
            :countSkeleton="6"
        />
    </div>
    <ContainerCard
      :title="title"
      textColor="black"
      fontSite="text-d-h1"
      lgScreen="lg:grid-cols-1"
      mdScreen="md:grid-cols-1"
      hiddenButton="hidden"
      HorizontalLineHidden="hidden"
      v-else
    >
        <cardProfile :profileList="this.apiData" />
    </ContainerCard>
  </div>
</template>
