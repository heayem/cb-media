<script>
import AppLayout from "@/Pages/AppLayout.vue";
import AppHeader from "@/Pages/AppHeader.vue";
import CardYoutube from "@/Components/card/cardYouTube.vue";
import Card from "@/Components/card/card.vue";
import ContainerCard from "@/Components/container/containerCard.vue";
import CardPhoto from "@/Components/card/Photo.vue";
import heroSection from "@/Components/heroSection/heroSection.vue";
import DataHomePage from "@/Components/publicApi/apiHomePage.vue";
import { IS_ADMIN_API, ADMIN_API_URL, FAKE_API_URL } from '@/constants/constant';

export default {
  components: {
    AppLayout,
    AppHeader,
    CardYoutube,
    Card,
    ContainerCard,
    CardPhoto,
    heroSection,
    DataHomePage,
  },
  created() {
    this.isAdminApi = IS_ADMIN_API ;
    this.adminApiUrl = ADMIN_API_URL || "";
    this.fakeApiUrl = FAKE_API_URL || "";
  },
};
</script>
<template>
  <AppHeader title="Home" />
  <AppLayout cssClass="bg-black" :bgWhite="false">
    <template #heroSection>
      <heroSection />
    </template>
    <DataHomePage
      viewLink="/video-service"
      title="videoService"
      urlLink="video-service"
      :urlApi="isAdminApi ? adminApiUrl + 'video-service' : fakeApiUrl + '6551dd2d0574da7622c5f6ff'"
    />
    <DataHomePage
      viewLink="/photo-service"
      title="photoService"
      urlLink="photo-service"
      :urlApi="isAdminApi ? adminApiUrl + 'photo-service': fakeApiUrl + '6551de6654105e766fcf57bd'"
    />
    <DataHomePage
      viewLink="/social-media-marketing"
      title="socialMediaMarketing"
      urlLink="social-media-marketing"
      :urlApi="isAdminApi ? adminApiUrl + 'social-media-marketing': fakeApiUrl + '6552ddee54105e766fcfaf7f'"
    />
    <DataHomePage
      viewLink="/web-development"
      title="webDevelopment"
      urlLink="web-development"
      :urlApi="isAdminApi ? adminApiUrl + 'web-development': fakeApiUrl + '6552dc3d0574da7622c64e16'"
    />
    <ContainerCard
      title="youtube"
      lgScreen="2"
      fontSite="text-d-h2"
      paddingTitle="pt-5"
      moreViewLink="https://www.youtube.com/@cbmedia318/videos"
      target="_blank"
    >
      <CardYoutube
        videoSrc="https://www.youtube.com/embed/obgj14WwGAg?si=6tdlz9NwPWCvvpbH"
        class="pb-1"
      />
      <CardYoutube
        videoSrc="https://www.youtube.com/embed/jJc4btzmbLY?si=4QUzyMbDanIjcvM7"
        class="pb-5 md:pb-0"
      />
    </ContainerCard>
  </AppLayout>
</template>
