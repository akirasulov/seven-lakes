<template>
    <Head title="Заявка" />
    <div class="isolate bg-white px-6 py-14 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <h2
                class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl"
            >
                Регистрация
            </h2>
            <p class="mt-2 text-lg leading-8 text-gray-600">
                Горный Полумарафон 7 Озёр
            </p>
        </div>

        <form @submit.prevent="submit" class="mx-auto mt-10 max-w-xl">
            <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                <div>
                    <InputLabel for="name" value="Имя *" />
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
                    <InputLabel for="last-surname" value="Фамилия *" />
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
                    <InputLabel for="email" value="E-mail *" />
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
                    <InputLabel for="msisdn" value="Номер телефона *" />
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
                    <InputLabel for="sex" value="Пол *" />
                    <select
                        v-model="form.sex"
                        id="sex"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5"
                        required
                    >
                        <option value="">Выберите пол</option>
                        <option value="female">Женщина</option>
                        <option value="male">Мужчина</option>
                    </select>
                    <InputError class="mt-2" :message="form.errors.sex" />
                </div>
                <div class="sm:col-span-2">
                    <InputLabel
                        for="emergency_contact"
                        value="Экстренный контакт *"
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
            <div class="mt-10">
                <PrimaryButton
                    :class="{ 'opacity-25': form.processing }"
                    :disabled="form.processing"
                >
                    Участвовать
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
            setTimeout(() => {
                window.location.href = "/";
            }, 5000);
        },
    });
};
</script>
