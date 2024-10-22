<script>
import AppLayout from "../../AppLayout.vue";
import ContainerLayout from "@/Components/container/Layout.vue";
import Header from "@/Components/header/header.vue";
import AppHeader from "@/Pages/AppHeader.vue";
import globalData from "@/Components/publicApi/globalData.vue";
import { IS_ADMIN_API, ADMIN_API_URL, FAKE_API_URL,PHOTO_SERVICE } from '@/constants/constant';

export default {
  components: {
    AppLayout,
    ContainerLayout,
    Header,
    AppHeader,
    globalData,
  },
  created() {
    this.isAdminApi = IS_ADMIN_API ;
    this.adminApiUrl = ADMIN_API_URL || "";
    this.fakeApiUrl = FAKE_API_URL || "";
    this.isPhotoService = PHOTO_SERVICE;

  },
};
</script>
<template>
  <AppHeader title="Photo Service Travel" />
  <AppLayout>
    <Header Position="none" iconColor="black" textColor="black" horizontalLine="black" />
    <ContainerLayout url="photoService" active="photoTravel">
      <template v-slot:content2>
        <globalData
          :urlApi="
            isAdminApi
              ? adminApiUrl + isPhotoService
              : fakeApiUrl + '6551de6654105e766fcf57bd'
          "
          title="Travel"
          type="photoEvents"
        />
      </template>
    </ContainerLayout>
  </AppLayout>
</template>
