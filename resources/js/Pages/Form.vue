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
                    <InputLabel for="first_name" value="Имя *" />
                    <div class="mt-2.5">
                        <TextInput
                            id="first_name"
                            type="text"
                            v-model="form.first_name"
                            required
                            autocomplete="first_name"
                            autofocus
                        />
                        <InputError
                            class="mt-2"
                            :message="form.errors.first_name"
                        />
                    </div>
                </div>
                <div>
                    <InputLabel for="last-name" value="Фамилия *" />
                    <div class="mt-2.5">
                        <TextInput
                            id="last_name"
                            type="text"
                            v-model="form.last_name"
                            required
                            autocomplete="last_name"
                            autofocus
                        />
                        <InputError
                            class="mt-2"
                            :message="form.errors.last_name"
                        />
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <InputLabel for="contact" value="Экстренный контакт *" />
                    <div class="mt-2.5">
                        <TextInput
                            id="contact"
                            type="text"
                            v-model="form.contact"
                            required
                            autocomplete="contact"
                            autofocus
                        />
                        <InputError
                            class="mt-2"
                            :message="form.errors.contact"
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
                            autocomplete="email"
                            autofocus
                        />
                        <InputError class="mt-2" :message="form.errors.email" />
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <InputLabel for="sex" value="Пол *" />
                    <select
                        id="sex"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5"
                        required
                    >
                        <option value="">Выберите пол</option>
                        <option value="US">Женщина</option>
                        <option value="CA">Мужчина</option>
                    </select>
                    <InputError class="mt-2" :message="form.errors.sex" />
                </div>
                <div class="sm:col-span-2">
                    <InputLabel for="phone_number" value="Номер телефона *" />
                    <div class="relative mt-2.5">
                        <TextInput
                            id="phone_number"
                            type="tel"
                            v-model="form.phone_number"
                            required
                            autocomplete="phone_number"
                            autofocus
                        />
                        <InputError
                            class="mt-2"
                            :message="form.errors.phone_number"
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
const form = useForm({
    first_name: "",
    last_name: "",
    contact: "",
    email: "",
    phone_number: "",
    sex: "",
});

const submit = () => {
    form.post(route("password.confirm"), {
        onFinish: () => form.reset(),
    });
};
</script>
