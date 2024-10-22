<script>
import axios from "axios";
import EmailFormButtonVue from "../button/EmailFormButton.vue";
import VLazyImage from "v-lazy-image";
import { Icon } from "@iconify/vue";
import { Link } from "@inertiajs/vue3";
import VueRecaptcha from "vue3-recaptcha2";
import InformationContact from "./InformationContact.vue";

export default {
    components: {
        VLazyImage,
        Icon,
        Link,
        EmailFormButtonVue,
        InformationContact,
        VueRecaptcha,
            },
    props: {
        name: { type: String, default: "" },
        image: { type: String, default: "" },
        position: { type: String, default: "" },
        numberPhone: { type: String, default: "" },
        email: { type: String, default: "" },
        profileList: {
            type: Array,
            default: () => [],
        },
    },
    data() {
        return {
            form: {
                name: this.name,
                email: this.email,
                subject: this.subject,
                message: this.message,
            },
            showSuccessAlert: false,
            showErrorAlert: false,
            loading: false,
            errorMessages: [],
            responseSuccess: "",
            showForm: false,
        };
    },
    methods: {
        resetForm() {
            this.form = {
                name: "",
                email: "",
                subject: "",
                message: "",
            };
        },
        filterErrorMessages(excludedText) {
            this.errorMessages = this.errorMessages.filter(message => !message.includes(excludedText));
        },
        showEmailForm() {
            this.showForm = true;
        },
        hideEmailForm() {
            this.showForm = false;
            this.showSuccessAlert = false;
            this.showErrorAlert = false;
            this.resetForm();
            this.filterErrorMessages('The subject field is required.');
        },
        onVerify() {
            this.recaptchaVerified = true;
        },
        async store() {
            try {
                if (!this.recaptchaVerified) {
                    throw new Error("errorReCAPTCHA");
                }
                this.loading = true;
                const response = await axios.post("/sendEmail", this.form);

                if (response.status === 200) {
                    this.responseSuccess = response.data.message;
                    this.showErrorAlert = false;
                    this.showSuccessAlert = true;
                    this.resetForm();
                    this.filterErrorMessages('The name field is required.');
                    this.filterErrorMessages('The email field is required.');
                    this.filterErrorMessages('The message field is required.');
                }
            } catch (errors) {
                this.errorMessages = [];
                if (errors.message === "errorReCAPTCHA") {
                    this.errorMessages.push(
                        "reCAPTCHA verification is required."
                    );
                } else {
                    for (const field in errors.response.data.errors) {
                        const errorMessages =
                            errors.response.data.errors[field];
                        this.errorMessages.push(...errorMessages);
                    }
                }
                this.showErrorAlert = true;
                this.showSuccessAlert = false;
            } finally {
                this.loading = false;
            }
        },
    },
};
</script>
<template>
    <div class="grid-cols-1 md:grid-cols-2 md:grid md:pb-12 md:gap-4 lg:grid lg:gap-4 lg:grid-cols-3 lg:pb-12">
      <template v-for="profile in profileList" :key="profile.id">
        <div v-if="profile.position !== 'Administrator' && profile.position !== 'web developer'">
            <div class="pt-2 bg-gradient-to-br md:p-0">
                <div class="bg-white h-[100%] w-auto md:w-auto font-semibold text-center rounded-3xl border shadow-lg pt-10 pb-10">
                    <VLazyImage class="object-cover mb-3 w-[140px] h-[140px] p-2 rounded-full mx-auto" :src="`${profile.profile}`" :alt="`${name}`" />
                    <h1 class="text-gray-600 uppercase text-d-h4">{{ profile.name }}</h1>
                    <h3 class="text-gray-600 text-d-h4">{{ profile.position }}</h3>
                    <div class="flex justify-center pt-3">
                        <ul class="flex p-1">
                            <li class="bg-[#3364ac] hover:bg-[#8cbcdc] h-10 w-10 rounded-full flex items-center justify-center shrink-0 mr-2 ">
                                <a href="tel:+8558193407" title="phone" class="pr-2 hover:scale-110">
                                    <Icon
                                        width="20"
                                        icon="ci:phone"
                                        class="ml-2 text-white "
                                    />
                                </a>
                            </li>
                            <li class="bg-[#3364ac] hover:bg-[#8cbcdc] h-10 w-10 rounded-full flex items-center justify-center shrink-0">
                                <a title="email" class="mr-2 hover:scale-110">
                                    <Icon
                                        width="20"
                                        icon="ic:outline-email"
                                        class="ml-2 text-white cursor-pointer"
                                        @click="showEmailForm()"
                                    />
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div v-if="showForm" class="grid grid-cols-1 md:grid-cols-2 md:pb-12 md:gap-4 lg:grid lg:gap-4 lg:grid-cols-3 lg:pb-12">
                <div class="fixed inset-0 overflow-auto items-center justify-center bg-gray-400 bg-opacity-50">
        
                    <div class="my-0">
                        <div class="absolute top-0 right-0 pr-4 rounded-lg lg:mt-5 md:mt-0">
                            <a title="close" class="mr-2">
                              <Icon
                                width="50"
                                icon="material-symbols:close"
                                class="text-white cursor-pointer hover:text-white-400 "
                                @click="hideEmailForm"
                              />
                            </a>
                          </div>
                        <div class="max-w-6xl  mx-auto md:mt-[45px] lg:mt-[65px] rounded-lg shadow-lg from-blue-500 to-blue-200 bg-gradient-to-r shadow-blue-500/40">
                            <div class="grid grid-cols-1 md:grid-cols-2  items-center gap-16 sm:p-5 p-4 font-[sans-serif]">
                                <InformationContact />
                                <div class="p-8 bg-white rounded-lg ">
                                    <h1 class="pb-8 text-3xl text-center text-gray-700">{{ $t("contact") }}</h1>
                                        <div v-if="showSuccessAlert" class="flex p-4 mb-4 text-sm text-blue-800 bg-blue-100 rounded-lg " role="alert">
                                            <Icon
                                                width="20"
                                                icon="icon-park-outline:email-successfully"
                                                class="text-blue mr-2"
                                            />
                                            <span class="sr-only">Danger</span>
                                            <div>
                                                <span class="font-medium">{{responseSuccess}}</span>
                                            </div>
                                        </div>
                                        <template v-if="showErrorAlert">
                                            <div
                                                v-if="errorMessages.includes('reCAPTCHA verification is required.')" class="flex p-4 mb-4 text-sm text-red-800 bg-red-100 rounded-lg " role="alert">
                                                <Icon
                                                    width="20"
                                                    icon="ph:question"
                                                    class="text-red mr-2"
                                                />
                                                <span class="sr-only">Danger</span>
                                                <div>
                                                    <span class="font-bold">{{ $t('captchaRequired') }}</span>
                                                </div>
                                            </div>
                                        </template>
                                        <form @submit.prevent="store">
                                            <div class="pb-2">
                                                <label for="email-address-icon"
                                                class="block mb-2 text-sm font-medium text-gray-900">
                                                {{ $t("yourName") }}
                                                </label>
                                                <input type="text" id="name" v-model="form.name"
                                                    class="block w-full p-2.5"
                                                    :class="`${
                                                        !errorMessages.length || form.name || showSuccessAlert ?
                                                        'bg-white border border-gray-300 text-gray-800 placeholder-gray-700 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 ' :
                                                        'bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 '}`"
                                                    :placeholder="`${$t('enter')+$t('yourName')}`"
                                                />
                                                <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                                    <span v-if="!form.name && errorMessages.includes('The name field is required.')"
                                                        class="font-medium">
                                                        {{ $t('YourNameRequired') }}
                                                    </span>
                                                </p>
                                            </div>
                                            <label for="email-address-icon"  class="block mb-2 text-sm font-medium text-gray-900 ">{{ $t("email") }}</label>
                                            <div class="relative pb-2">
                                                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                                </div>
                                                <input type="email" v-model="form.email" id="email"
                                                    class="block w-full p-2.5"
                                                    :class="`${
                                                        !errorMessages.length || form.email || showSuccessAlert ?
                                                        'bg-white border border-gray-300 text-gray-800 placeholder-gray-700 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 ' :
                                                        'bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 '}`"
                                                    placeholder="name@flowbite.com"
                                                />
                                                <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                                    <span v-if="!form.email && errorMessages.includes('The email field is required.')"
                                                        class="font-medium">
                                                        {{ $t('emailRequired') }}
                                                    </span>
                                                </p>
                                            </div>
                                            <div class="pb-2">
                                                <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 "> {{ $t("subject") }}</label>
                                                <input type="text" id="subject" v-model="form.subject"  aria-describedby="helper-text-explanation"
                                                    class="block w-full p-2.5"
                                                    :class="`${
                                                        !errorMessages.length || form.subject || showSuccessAlert ?
                                                        'bg-white border border-gray-300 text-gray-800 placeholder-gray-700 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 ' :
                                                        'bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 '}`"
                                                    :placeholder="`${$t('enter')+$t('subject')}`"
                                                />
                                                <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                                    <span v-if="!form.subject && errorMessages.includes('T he email field is required.')"
                                                        class="font-medium">
                                                        {{ $t('subjectRequired') }}
                                                    </span>
                                                </p>
                                            </div>
                                            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 "> {{ $t("message") }}</label>
                                            <textarea id="message" v-model="form.message" v-mo rows="4"
                                                class="block w-full p-2.5 "
                                                :class="`${
                                                    !errorMessages.length || form.message || showSuccessAlert ?
                                                    'bg-white border border-gray-300 text-gray-800 placeholder-gray-700 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 ' :
                                                    'bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 '}`"
                                                :placeholder="`${$t('enter')+$t('message')}`">
                                            </textarea>
                                            <p class="mt-2 mb-5 text-sm text-red-600 dark:text-red-500">
                                                <span v-if="!form.message && errorMessages.includes('The message field is required.')"
                                                    class="font-medium">
                                                    {{ $t('messageRequired') }}
                                                </span>
                                            </p>
                                            <VueRecaptcha
                                                sitekey="6LfCmF8pAAAAAA4i7YaX2UOP40kzvxVzT1vqYXs_"
                                                theme="light"
                                                hl="English"
                                                ref="recaptcha"
                                                @verify="onVerify"
                                                v-model="recaptchaToken"
                                            />
                                            <EmailFormButtonVue
                                            :loading="loading"
                                            :closeForm="hideEmailForm"
                                                :sendEmail="store"
                                        />
</form>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
             </div>
         </div>
      </template>
    </div>
</template>

