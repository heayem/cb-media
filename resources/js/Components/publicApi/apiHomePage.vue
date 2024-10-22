<script>
import CardPhoto from "@/Components/card/Photo.vue";
import skeleton from "@/Components/skeletons/skeleton.vue";
import ContainerCard from "@/Components/container/containerCard.vue";
import Card from "@/Components/card/card.vue";
import CardYoutube from "@/Components/card/cardYouTube.vue";
import { apiMixin } from "./apiMixin.vue";
import skeletonCard from "@/Components/skeletons/skeletonCard.vue";
import { VIDEO_SERVICE, PHOTO_SERVICE, SOCIAL_MEDIA_MARKETING,WEB_DEVELOPMENT } from '@/constants/constant';

export default {
  mixins: [apiMixin],
  components: {
    CardPhoto,
    skeleton,
    skeletonCard,
    ContainerCard,
    Card,
    CardYoutube,
  },
  props: {
    urlApi: { String, default: null },
    urlLink: { String, default: null },
    title: { String, default: null },
    viewLink: { String, default: "" },
  },
  data() {
    return {
      loading: true,
      apiData: null,
      publicApi: this.urlApi,
      serviceCategories: {
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
  created(){
      this.videoService =  VIDEO_SERVICE;
      this.photoService = PHOTO_SERVICE;
      this.socialMediaMarketing = SOCIAL_MEDIA_MARKETING;
      this.webDevelopment = WEB_DEVELOPMENT;
  },
  methods: {
    getServiceUrl(title) {
      const defaultPath = "";
      return `/${this.urlLink}/${this.serviceCategories[title] || defaultPath}`;
    },
  },
  mounted() {
    this.fetchData();
  },
};
</script>
<template>
  <div v-if="loading">
    <skeleton grid="lg:grid-cols-3" />
  </div>
  <ContainerCard
    :title="title"
    :moreViewLink="viewLink"
    fontSite="text-d-h2"
    paddingTitle="py-5"
    v-else
  >
    <div v-for="(service, index) in this.apiData" :key="service.id">
      <template v-if="index < 3">
        <div class="flex justify-center">
          <template v-if="urlLink === videoService || urlLink === photoService">
            <CardPhoto
              :url="getServiceUrl(service.title)"
              :title="service.title"
              :alt="service.title"
              :src="service.image"
              width="100%"
            />
          </template>
          <template v-if="urlLink === socialMediaMarketing || urlLink === webDevelopment">
            <Card
              :title="service.title"
              :description="service.description"
              :alt="service.title"
              :src="service.src"
              bgColor="bg-white"
              textColor="block"
              weightCard="100%"
            />
          </template>
        </div>
      </template>
    </div>
  </ContainerCard>
</template>
