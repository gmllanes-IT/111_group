<template>
    <header class="bg-white">
        <nav
            class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4 lg:px-8"
            aria-label="Global"
        >
            <div class="flex lg:flex-[0.5]">
                <a href="#" class="-m-1.5 p-1.5">
                    <span class="sr-only">Your Company</span>
                    <img class="h-12 w-auto" src="/images/Logo.png" alt="" />
                </a>
            </div>
            <div class="flex lg:hidden">
                <button
                    type="button"
                    class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700"
                    @click="mobileMenuOpen = true"
                >
                    <span class="sr-only">Open main menu</span>
                    <Bars3CenterLeftIcon class="h-10 w-10 text-black font-black" aria-hidden="true" />
                </button>
            </div>
            <PopoverGroup class="hidden lg:flex lg:gap-x-4">
                <a
                    href="#"
                    class="text-sm font-semibold leading-6 text-gray-900"
                    >About</a
                >
                <a
                    href="#"
                    class="text-sm font-semibold leading-6 text-gray-900"
                    >Services</a
                >
                <a
                    href="#"
                    class="text-sm font-semibold leading-6 text-gray-900"
                    >Legal</a
                >
                <a
                    href="#"
                    class="text-sm font-semibold leading-6 text-gray-900"
                    >Immigration</a
                >
                <a
                    href="#"
                    class="text-sm font-semibold leading-6 text-gray-900"
                    >Become a Partner</a
                >
                <a
                    href="#"
                    class="text-sm font-semibold leading-6 text-gray-900"
                    >News</a
                >
                <a
                    href="#"
                    class="text-sm font-semibold leading-6 text-gray-900"
                    >Contact</a
                >
            </PopoverGroup>
            <div class="hidden lg:flex lg:flex-1 lg:justify-end gap-2">
                <button
                    class="text-[13px] font-bold rounded-full bg-[#eeeeee] py-2 px-2 flex items-center"
                >
                    <UserCircleIcon class="w-6 h-6 mr-1" />
                    <span class="mr-2">Account</span>
                </button>
                <button
                    class="text-[13px] font-bold rounded-full bg-[#eeeeee] py-2 px-2 flex items-center"
                >
                    <FingerPrintIcon class="w-6 h-6 mr-1" />
                    <span class="mr-2">Sign in with UAE Pass</span>
                </button>
            </div>
        </nav>
        <Dialog
            as="div"
            class="lg:hidden"
            @close="mobileMenuOpen = false"
            :open="mobileMenuOpen"
        >
            <div class="fixed inset-0 z-10" />
            <DialogPanel
                class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10"
            >
                <div class="flex items-center justify-between">
                    <a href="#" class="-m-1.5 p-1.5">
                        <span class="sr-only">Your Company</span>
                        <img class="h-8 w-auto" src="/images/Logo.png" alt="" />
                    </a>
                    <button
                        type="button"
                        class="-m-2.5 rounded-md p-2.5 text-gray-700"
                        @click="mobileMenuOpen = false"
                    >
                        <span class="sr-only">Close menu</span>
                        <XMarkIcon class="h-8 w-8 text-black font-black" aria-hidden="true" />
                    </button>
                </div>
                <div class="mt-6 flow-root">
                    <div class="-my-6 divide-y divide-gray-500/10">
                        <div class="space-y-2 py-6">
                            <a
                                href="#"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50"
                                >About</a
                            >
                            <a
                                href="#"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50"
                                >Services</a
                            >
                            <a
                                href="#"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50"
                                >Legal</a
                            >
                            <a
                                href="#"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50"
                                >Immigration</a
                            >
                            <a
                                href="#"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50"
                                >Become a Partner</a
                            >
                            <a
                                href="#"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50"
                                >News</a
                            >
                            <a
                                href="#"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50"
                                >Contact</a
                            >
                        </div>
                        <div class="py-6 flex flex-col gap-4">
                                <button
                                    class="text-[13px] font-bold rounded-full bg-[#eeeeee] py-2 px-2 flex items-center"
                                >
                                    <UserCircleIcon class="w-6 h-6 mr-1" />
                                    <span class="mr-2">Account</span>
                                </button>
                                <button
                                    class="text-[13px] font-bold rounded-full bg-[#eeeeee] py-2 px-2 flex items-center"
                                >
                                    <FingerPrintIcon class="w-6 h-6 mr-1" />
                                    <span class="mr-2"
                                        >Sign in with UAE Pass</span
                                    >
                                </button>
                        </div>
                    </div>
                </div>
            </DialogPanel>
        </Dialog>
    </header>
</template>

<script setup>
import { ref } from "vue";
import { Dialog, DialogPanel, PopoverGroup } from "@headlessui/vue";
import {
    Bars3CenterLeftIcon,
    FingerPrintIcon,
    XMarkIcon,
} from "@heroicons/vue/24/outline";
import { UserCircleIcon } from "@heroicons/vue/20/solid";

const mobileMenuOpen = ref(false);
</script>
