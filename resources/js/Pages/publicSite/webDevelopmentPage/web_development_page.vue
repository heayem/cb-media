<script>
import AppLayout from "../../AppLayout.vue";
import ContainerLayout from "@/Components/container/Layout.vue";
import Header from "@/Components/header/header.vue";
import AppHeader from "@/Pages/AppHeader.vue";
import globalData from "@/Components/publicApi/globalData.vue";
import { IS_ADMIN_API, ADMIN_API_URL, FAKE_API_URL } from '@/constants/constant';

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
  },
};
</script>
<template>
  <AppHeader title="Web Development" />
  <AppLayout>
    <Header Position="none" iconColor="black" textColor="black" horizontalLine="black" />
    <ContainerLayout active="activeWeb">
      <template v-slot:content2>
        <globalData
          :urlApi="
            isAdminApi
              ? adminApiUrl + 'web-development'
              : fakeApiUrl + '6552dc3d0574da7622c64e16'
          "
          type="serviceMarketing"
          title="webDevelopment"
        />
      </template>
    </ContainerLayout>
  </AppLayout>
</template>
