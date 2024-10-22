<script>
import AppLayout from "../../AppLayout.vue";
import ContainerLayout from "@/Components/container/Layout.vue";
import Header from "@/Components/header/header.vue";
import globalData from "@/Components/publicApi/globalData.vue";
import AppHeader from "@/Pages/AppHeader.vue";
import { IS_ADMIN_API, ADMIN_API_URL, FAKE_API_URL,TEAM } from '@/constants/constant';

export default {
  components: {
    AppLayout,
    ContainerLayout,
    Header,
    globalData,
    AppHeader
  },
  created() {
    this.isAdminApi = IS_ADMIN_API ;
    this.adminApiUrl = ADMIN_API_URL || "";
    this.fakeApiUrl = FAKE_API_URL || "";
    this.isTeam = TEAM ;
  },
};
</script>
<template>
  <AppHeader title="Team" />
  <AppLayout>
    <Header Position="none" iconColor="black" textColor="black" horizontalLine="black" />
    <ContainerLayout>
      <template v-slot:content2>
        <globalData
          :urlApi="
            isAdminApi
              ? adminApiUrl + isTeam
              : fakeApiUrl + '6552ddee54105e766fcfaf7f'
          "
          type="team"
          title="Team"
        />
      </template>
    </ContainerLayout>
  </AppLayout>
</template>
