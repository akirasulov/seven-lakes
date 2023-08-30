<template>
    <Head :title="__('form.registration')" />
    <div class="isolate bg-white px-6 py-14 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <h2
                class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl"
            >
                {{ __("form.registration") }}
            </h2>
            <p class="mt-2 text-lg leading-8 text-gray-600">
                {{ __("header_x_footer.description") }}
            </p>
        </div>

        <form @submit.prevent="submit" class="mx-auto mt-10 max-w-xl">
            <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                <div>
                    <InputLabel for="name" :value="__('form.name')" />
                    <div class="mt-2.5">
                        <TextInput
                            id="name"
                            type="text"
                            v-model="form.name"
                            required
                            autocomplete="name"
                            autofocus
                        />
                        <InputError class="mt-2" :message="form.errors.name" />
                    </div>
                </div>
                <div>
                    <InputLabel for="surname" :value="__('form.surname')" />
                    <div class="mt-2.5">
                        <TextInput
                            id="surname"
                            type="text"
                            v-model="form.surname"
                            required
                        />
                        <InputError
                            class="mt-2"
                            :message="form.errors.surname"
                        />
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <InputLabel for="email" :value="__('form.email')" />
                    <div class="mt-2.5">
                        <TextInput
                            id="email"
                            type="email"
                            v-model="form.email"
                            required
                        />
                        <InputError class="mt-2" :message="form.errors.email" />
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <InputLabel for="msisdn" :value="__('form.msisdn')" />
                    <div class="relative mt-2.5">
                        <TextInput
                            id="msisdn"
                            type="tel"
                            v-model="form.msisdn"
                            required
                        />
                        <InputError
                            class="mt-2"
                            :message="form.errors.msisdn"
                        />
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <InputLabel for="sex" :value="__('form.sex')" />
                    <select
                        v-model="form.sex"
                        id="sex"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5"
                        required
                    >
                        <option value="">{{ __("form.sex_choose") }}</option>
                        <option value="male">
                            {{ __("form.sex_male") }}
                        </option>
                        <option value="female">
                            {{ __("form.sex_female") }}
                        </option>
                    </select>
                    <InputError class="mt-2" :message="form.errors.sex" />
                </div>
                <div class="sm:col-span-2">
                    <InputLabel
                        for="emergency_contact"
                        :value="__('form.emergency_contact')"
                    />

                    <div class="mt-2.5">
                        <TextInput
                            id="emergency_contact"
                            type="text"
                            v-model="form.emergency_contact"
                            required
                        />
                        <InputError
                            class="mt-2"
                            :message="form.errors.emergency_contact"
                        />
                    </div>
                </div>
            </div>

            <div
                class="flex my-10 w-full max-w-xl overflow-hidden bg-white rounded-lg shadow-xl"
            >
                <div
                    class="flex items-center justify-center w-12 bg-yellow-400"
                >
                    <svg
                        class="w-6 h-6 text-white fill-current"
                        viewBox="0 0 40 40"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM21.6667 28.3333H18.3334V25H21.6667V28.3333ZM21.6667 21.6666H18.3334V11.6666H21.6667V21.6666Z"
                        />
                    </svg>
                </div>

                <div class="px-4 py-2 -mx-3">
                    <div class="mx-3">
                        <span class="font-semibold text-yellow-400">{{
                            __("form.warning")
                        }}</span>
                        <p class="text-sm text-gray-600">
                            {{ __("form.warning_description") }}
                        </p>
                    </div>
                </div>
            </div>
            <div>
                <PrimaryButton
                    class="disabled:cursor-not-allowed disabled:opacity-50"
                    :class="{ 'opacity-25': form.processing }"
                    :disabled="form.processing || !form.isDirty"
                >
                    {{ __("banner.participate") }}
                    <svg
                        v-if="form.processing"
                        role="status"
                        class="inline w-4 h-4 mr-2 text-white animate-spin"
                        viewBox="0 0 100 101"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                            fill="#E5E7EB"
                        />
                        <path
                            d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                            fill="currentColor"
                        />
                    </svg>
                </PrimaryButton>
            </div>
        </form>
    </div>
</template>

<script setup>
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import { useForm } from "@inertiajs/vue3";
import { ChevronDownIcon } from "@heroicons/vue/20/solid";
import { Switch, SwitchGroup, SwitchLabel } from "@headlessui/vue";
import { useToast } from "vue-toastification";
const form = useForm({
    name: "",
    surname: "",
    email: "",
    msisdn: "",
    sex: "",
    emergency_contact: "",
});

const submit = () => {
    form.post(route("form.store"), {
        onSuccess: () => {
            form.reset();
        },
    });
};
</script>
