<script>
import AppLayout from "../../AppLayout.vue";
import ContainerLayout from "@/Components/container/Layout.vue";
import Header from "@/Components/header/header.vue";
import AppHeader from "@/Pages/AppHeader.vue";
import globalData from "@/Components/publicApi/globalData.vue";
import { IS_ADMIN_API, ADMIN_API_URL, FAKE_API_URL,SOCIAL_MEDIA_MARKETING } from '@/constants/constant';

export default {
  components: {
    AppLayout,
    AppHeader,
    ContainerLayout,
    Header,
    globalData,
  },
  created() {
    this.isAdminApi = IS_ADMIN_API ;
    this.adminApiUrl = ADMIN_API_URL || "";
    this.fakeApiUrl = FAKE_API_URL || "";
    this.isSocialMediaMarketing = SOCIAL_MEDIA_MARKETING ;
  },
};
</script>
<template>
  <AppHeader title="Social Media Marketing" />
  <AppLayout>
    <Header Position="none" iconColor="black" textColor="black" horizontalLine="black" />
    <ContainerLayout active="activeSocial">
      <template v-slot:content2>
        <globalData
          :urlApi="
            isAdminApi
              ? adminApiUrl + isSocialMediaMarketing
              : fakeApiUrl + '6552ddee54105e766fcfaf7f'
          "
          type="serviceMarketing"
          title="socialMediaMarketing"
        />
      </template>
    </ContainerLayout>
  </AppLayout>
</template>
