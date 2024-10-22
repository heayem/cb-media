<script>
import AppLayout from "../../AppLayout.vue";
import AppHeader from "@/Pages/AppHeader.vue";
import menuNavigation from "@/Components/navigation/menuNavigation.vue";
import ContainerLayout from "@/Components/container/Layout.vue";
import Header from "@/Components/header/header.vue";
import PrimaryButton from "@/Components/button/PrimaryButton.vue";
import globalData from "@/Components/publicApi/globalData.vue";
import {IS_ADMIN_API,ADMIN_API_URL,FAKE_API_URL,VIDEO_SERVICE} from '@/constants/constant';

export default {
  components: {
    AppLayout,
    AppHeader,
    ContainerLayout,
    Header,
    menuNavigation,
    PrimaryButton,
    globalData,
  },
  created() {
    this.isVideoService = VIDEO_SERVICE;
    this.isAdminApi = IS_ADMIN_API ;
    this.adminApiUrl = ADMIN_API_URL || "";
    this.fakeApiUrl = FAKE_API_URL || "";
  },
};
</script>
<template>
  <AppHeader title="Video Service" />
  <AppLayout>
    <Header Position="none" iconColor="black" textColor="black" horizontalLine="black" />
    <ContainerLayout url="videoService" active="activeVideo">
      <template v-slot:content2>
        <globalData
          title="videoService"
          urlLink="video-service"
          :urlApi="
            isAdminApi
              ? adminApiUrl + isVideoService
              : fakeApiUrl + '6551dd2d0574da7622c5f6ff'
          "
        />
      </template>
    </ContainerLayout>
  </AppLayout>
</template>
