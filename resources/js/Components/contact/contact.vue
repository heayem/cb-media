<script>
import { Icon } from "@iconify/vue";
export default {
  components: {
    Icon,
  },
};
</script>
<template>
  <div class="grid grid-cols-6 gap-4">
    <div class="col-start-1 col-end-7">
      <section>
        <div class="pt-1">
          <div class="mb-8 text-left text-gray-600 text-d-h3 lg:mb-2">
            <Icon width="40" icon="bx:map" class="float-left" />
            <span class="ml-2">No 18E0, St.K4B Phumi, Trung Morn St,Phnom Penh, Cambodia</span>
          </div>
          <div class="mb-8 text-left text-gray-600 text-d-h3 lg:mb-2">
            <Icon width="40" icon="humbleicons:mail-open" class="float-left" />
            <span class="ml-2">ask@cbmedia-asia.com</span>
          </div>
          <div class="mb-8 text-left text-gray-600 text-d-h3 lg:mb-2">
            <Icon width="40" icon="material-symbols:phone-iphone-outline" class="float-left" /> +885 23 6730 888
        </div>
          <h2 class="mt-5 mb-5 tracking-tight text-left text-gray-900 text-d-h2">
            {{ $t("openingHour") }}
          </h2>
          <div class="mb-8 text-left text-gray-600 text-d-h3 lg:mb-2">
            <Icon width="40" icon="mingcute:time-line" class="float-left" />
            <span class="ml-2">Monday-Friday : 08:00 - 17:00</span>
          </div>
          <div class="mb-8 text-left text-red-700 text-d-h3 lg:mb-2">
            <Icon width="40" icon="ci:timer-close" class="float-left text-red-700" />
            <span class="ml-2 text-red-700">Saturday-Sunday : Close</span>
          </div>
        </div>
      </section>
    </div>
    <div class="col-start-1 col-end-7 border-4 border-gray-300 rounded-md">
        <iframe
          class="w-[100%] h-[500px]"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1289.2875077056979!2d104.86971178925141!3d11.555769850541193!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310951b7e3e1b2ed%3A0x54d8618b004917d5!2s10%20Street%20K4B%2C%20Phnom%20Penh!5e1!3m2!1sen!2skh!4v1698976114147!5m2!1sen!2skh"
          style="border: 0"
          allowfullscreen="false"
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        />
      </div>
  </div>
</template>
