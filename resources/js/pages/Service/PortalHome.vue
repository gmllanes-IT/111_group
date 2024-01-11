<script setup>
import { ref } from "vue";
import Footer from "../../components/Footer.vue";
import Header from "../../components/Header.vue";
import { MagnifyingGlassIcon } from "@heroicons/vue/20/solid";

const selectedCategory = ref("all"); // Default category is "all"
const serviceData = [
    {
        name: "Alternate Dispute Resolution",
        category: "Legal",
        imageSrc: "/images/Services/Alternate Dispute Resolution1.png",
    },
    {
        name: "Arbitration and Mediation",
        category: "Legal",
        imageSrc: "/images/Services/Arbitration and Mediation2.png",
    },
    {
        name: "Citizenship by Investment",
        category: "Legal",
        imageSrc: "/images/Services/Citizenship by Investment3.png",
    },
];

function filterImages(category) {
    selectedCategory.value = category;
}

function shouldDisplayService(service) {
    if (selectedCategory.value === "all") {
        return true; // Display all services when 'all' category is selected
    } else {
        return service.category === selectedCategory.value;
    }
}
</script>

<template>
    <Header />
    <div class="flex flex-col justify-center items-center mt-4 bg-slate-50">
        <div
            class="m-10 md:m-[100px] flex flex-col justify-center items-center"
        >
            <h1 class="text-3xl md:text-5xl font-semibold mb-10">
                Service Portal
            </h1>
            <div class="mx-4 md:mx-[150px] text-center">
                <p class="text-sm md:text-base mb-3">
                    Our comprehensive suite of services is designed to guide and
                    support you throughout the entire process, ensuring a smooth
                    and successful experience.
                </p>
            </div>
            <div class="relative mt-4 w-full md:w-[600px]">
                <input
                    type="text"
                    class="border-none rounded-full w-full px-4 py-2 placeholder-gray-500"
                    placeholder="Search Services"
                />
                <MagnifyingGlassIcon
                    class="w-5 h-5 absolute top-1/2 right-3 transform -translate-y-1/2 text-black"
                />
            </div>
        </div>
    </div>

    <div>
        <div class="flex justify-center mt-10 gap-5">
            <button
                @click="filterImages('all')"
                :class="{ 'bg-[#eeeeee]': selectedCategory === 'all' }"
                class="text-[13px] font-bold rounded-full bg-[#eeeeee] py-2 px-4 flex items-center"
            >
                All
            </button>
            <button
                class="text-[13px] font-bold rounded-full bg-[#eeeeee] py-2 px-4 flex items-center"
            >
                Imamigration
            </button>
            <button
                class="text-[13px] font-bold rounded-full bg-[#eeeeee] py-2 px-4 flex items-center"
            >
                Legal
            </button>
        </div>
        <div class="flex justify-center my-10 mx-[7rem] gap-4 flex-wrap">
            <div
                v-for="service in serviceData"
                :key="service.name"
                v-if="shouldDisplayService(service)"
                class="w-[300px] flex flex-col justify-center items-center"
            >
                <div class="image-container">
                    <img :src="service.imageSrc" :alt="service.name" />
                </div>
                <p class="mb-2 hover:underline font-semibold">
                    {{ service.name }} #
                </p>
            </div>

            <div class="w-[300px] flex flex-col justify-center items-center">
                <div class="image-container">
                    <img
                        src="/images/Services/Citizenship by Investment3.png"
                        alt=""
                    />
                </div>
                <p class="mb-2 hover:underline font-semibold">
                    Citizenship by Investment
                </p>
            </div>
            <div class="w-[300px] flex flex-col justify-center items-center">
                <div class="image-container">
                    <img
                        src="/images/Services/Competition Law and Anti-Trust4.png"
                        alt=""
                    />
                </div>
                <p class="mb-2 hover:underline font-semibold">
                    Competition Law and Anti-Trust
                </p>
            </div>
            <div class="w-[300px] flex flex-col justify-center items-center">
                <div class="image-container">
                    <img src="/images/Services/Corporate  M&A5.png" alt="" />
                </div>
                <p class="mb-2 hover:underline font-semibold">
                    Alternate Dispute Resolution
                </p>
            </div>
            <div class="w-[300px] flex flex-col justify-center items-center">
                <div class="image-container">
                    <img
                        src="/images/Services/Legal Document Attestation6.png"
                        alt=""
                    />
                </div>
                <p class="mb-2 hover:underline font-semibold">
                    Arbitration and Mediation
                </p>
            </div>
            <div class="w-[300px] flex flex-col justify-center items-center">
                <div class="image-container">
                    <img
                        src="/images/Services/Employment & Administrative Law7.png"
                        alt=""
                    />
                </div>
                <p class="mb-2 hover:underline font-semibold">
                    Citizenship by Investment
                </p>
            </div>
            <div class="w-[300px] flex flex-col justify-center items-center">
                <div class="image-container">
                    <img src="/images/Services/Immigration8.png" alt="" />
                </div>
                <p class="mb-2 hover:underline font-semibold">
                    Competition Law and Anti-Trust
                </p>
            </div>
            <div class="w-[300px] flex flex-col justify-center items-center">
                <div class="image-container">
                    <img
                        src="/images/Services/Intellectual Property9.png"
                        alt=""
                    />
                </div>
                <p class="mb-2 hover:underline font-semibold">
                    Competition Law and Anti-Trust
                </p>
            </div>
            <div class="w-[300px] flex flex-col justify-center items-center">
                <div class="image-container">
                    <img
                        src="/images/Services/Personal Data Protection & Privacy law10.png"
                        alt=""
                    />
                </div>
                <p class="mb-2 hover:underline font-semibold">
                    Competition Law and Anti-Trust
                </p>
            </div>
            <div class="w-[300px] flex flex-col justify-center items-center">
                <div class="image-container">
                    <img src="/images/Services/Post Citizenship11.png" alt="" />
                </div>
                <p class="mb-2 hover:underline font-semibold">
                    Competition Law and Anti-Trust
                </p>
            </div>
            <div class="w-[300px] flex flex-col justify-center items-center">
                <div class="image-container">
                    <img
                        src="/images/Services/Private Wealth & Family Business12.png"
                        alt=""
                    />
                </div>
                <p class="mb-2 hover:underline font-semibold">
                    Competition Law and Anti-Trust
                </p>
            </div>
            <div class="w-[300px] flex flex-col justify-center items-center">
                <div class="image-container">
                    <img src="/images/Services/Real Estate13.png" alt="" />
                </div>
                <p class="mb-2 hover:underline font-semibold">
                    Competition Law and Anti-Trust
                </p>
            </div>
            <div class="w-[300px] flex flex-col justify-center items-center">
                <div class="image-container">
                    <img
                        src="/images/Services/Regulatory Compliance & Enforcement14.png"
                        alt=""
                    />
                </div>
                <p class="mb-2 hover:underline font-semibold">
                    Competition Law and Anti-Trust
                </p>
            </div>
            <div class="w-[300px] flex flex-col justify-center items-center">
                <div class="image-container">
                    <img
                        src="/images/Services/Residency by Investment15.png"
                        alt=""
                    />
                </div>
                <p class="mb-2 hover:underline font-semibold">
                    Competition Law and Anti-Trust
                </p>
            </div>
            <div class="w-[300px] flex flex-col justify-center items-center">
                <div class="image-container">
                    <img
                        src="/images/Services/Shipping and Maritime16.png"
                        alt=""
                    />
                </div>
                <p class="mb-2 hover:underline font-semibold">
                    Competition Law and Anti-Trust
                </p>
            </div>
            <div class="w-[300px] flex flex-col justify-center items-center">
                <div class="image-container">
                    <img src="/images/Services/Tax and Revenue17.png" alt="" />
                </div>
                <p class="mb-2 hover:underline font-semibold">
                    Competition Law and Anti-Trust
                </p>
            </div>
            <div class="w-[300px] flex flex-col justify-center items-center">
                <div class="image-container">
                    <img
                        src="/images/Services/Technology Media & Telco18.png"
                        alt=""
                    />
                </div>
                <p class="mb-2 hover:underline font-semibold">
                    Competition Law and Anti-Trust
                </p>
            </div>
        </div>
    </div>
</template>
<style>
.image-container {
    position: relative;
    overflow: hidden;
}

.image-container img {
    transition: transform 0.3s ease-in-out;
}

.image-container:hover img {
    transform: scale(1.1); /* Adjust the scale factor as needed */
}
</style>
