<script>
import AppLayout from "../../AppLayout.vue";
import ContainerLayout from "@/Components/container/Layout.vue";
import Header from "@/Components/header/header.vue";
import AppHeader from "@/Pages/AppHeader.vue";
import PrimaryButton from "@/Components/button/PrimaryButton.vue";
import globalData from "@/Components/publicApi/globalData.vue";
import {IS_ADMIN_API,ADMIN_API_URL,FAKE_API_URL,VIDEO_SERVICE} from '@/constants/constant';

export default {
  components: {
    AppLayout,
    ContainerLayout,
    Header,
    AppHeader,
    PrimaryButton,
    globalData,
  },
  created() {
    this.isAdminApi = IS_ADMIN_API ;
    this.isVideoService = VIDEO_SERVICE;
    this.adminApiUrl = ADMIN_API_URL || "";
    this.fakeApiUrl = FAKE_API_URL || "";
  },
};
</script>
<template>
  <AppHeader title="Video Service Documentary" />
  <AppLayout>
    <Header Position="none" iconColor="black" textColor="black" horizontalLine="black" />
    <ContainerLayout active="videoDocumentary" url="videoService">
      <template v-slot:content2>
        <globalData
          :urlApi="
            isAdminApi
              ? adminApiUrl + isVideoService
              : fakeApiUrl + '6551dd2d0574da7622c5f6ff'
          "
          type="servicesMedia"
          title="Documentary"
        />
        <PrimaryButton
          name="View More"
          viewMore="https://www.youtube.com/@cbmedia318/videos"
          target="_blank"
        />
      </template>
    </ContainerLayout>
  </AppLayout>
</template>
