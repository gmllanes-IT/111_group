<script setup>
import { 
    ChevronLeftIcon,
     CalendarDaysIcon, 
     DocumentTextIcon,
     PhoneXMarkIcon,
     } from "@heroicons/vue/20/solid";
import Header from "../../components/Header.vue";
const AdrServices = [
    "Top Neutrals with Specialized Experience in All Areas of Civil Litigation",
    "Flexible Dispute Resolution Solutions to Fit Your Unique Needs",
    "Unparalleled Standards of Client Service",
    "State of the Art Case Management Technology and Virtual Offerings",
    "Dedicated Case Management and Case Convening Services",
    "Neutral to Case Matching Services",
    "Operating at the Intersection of Distinctive Quality and High Value",
];
const legalAreas = [
    "Admiralty and Maritime",
    "Aviation",
    "Banking, Finance and Security disputes",
    "Civil Litigation",
    "Compulsory Land Acquisition",
    "Corporate and Commercial Litigation",
    "Media and Entertainment Law",
    "Engineering and Construction Law",
    "Environmental Law",
    "Information and Communication Technology",
    "Insolvency and Restructuring",
    "Insurance Law",
    "Islamic Finance",
    "Land Law",
    "Oil and Gas",
    "Product Liability",
    "Real Estate and Property Disputes",
];
</script>

<template>
    <Header />
    <div class="bg-slate-50">
        <div class="relative flex left-[70px] w-40 top-[50px]">
            <ChevronLeftIcon class="w-8 h-8 text-[#e3cf3e] mt-[-3px]" />
            <a href="#">Service Portal</a>
        </div>

        <div class="flex flex-col justify-center items-center bg-slate-50">
            <div
                class="m-10 md:m-[100px] flex flex-col justify-center items-center"
            >
                <h1
                    class="text-xl sm:text-2xl md:text-3xl lg:text-4xl xl:text-5xl mt-[60px] md:mt-0 font-semibold mb-10"
                >
                    Alternate Dispute Resolution
                </h1>
                <div class="mx-4 md:mx-[50px] lg:mx-[150px] text-center">
                    <p class="text-sm md:text-base mb-3">
                        Our alternative dispute resolution services are of the
                        highest quality. We represent businesses across a wide
                        range of industries and use our significant experience
                        to assist clients in resolving commercial and
                        investor-state conflicts.
                    </p>
                </div>
            </div>

            <div
                class="bg-white max-w-[100%] md:w-[80%] rounded-xl flex flex-col justify-center mt-[-20px] md:mt-[-50px] mb-[50px]"
            >
                <div class="flex mx-[30px] my-[20px] text-[11px] md:text-sm">
                    <div class="flex-1">
                        <a class="mr-4 hover:text-[#e3cf3e]" href="#"
                            >Service Details</a
                        >
                        <a class="hover:text-[#e3cf3e]" href="#"
                            >Steps & procedure</a
                        >
                    </div>
                    <a class="hover:text-[#e3cf3e]" href="#"
                        >list Of Services</a
                    >
                </div>
                <div
                    class="md:flex items-end flex-col gap-2 top-20 mr-[50px] sticky hidden "
                >
                    <button
                        class="flex flex-row-reverse justify-between text-white bg-[#e3cf3e] w-[300px] rounded-xl py-2 px-6"
                    >
                        <ChevronLeftIcon class="rotate-180 w-8 h-8 mt-[-3px]" />
                        Schedule an Appointment
                    </button>
                    <button
                        class="flex flex-row-reverse justify-between bg-slate-50 w-[300px] rounded-xl py-2 px-6"
                    >
                        <ChevronLeftIcon class="rotate-180 w-8 h-8 mt-[-3px]" />
                        Steps & Procedure
                    </button>
                    <button
                        class="flex flex-row-reverse justify-between bg-slate-50 w-[300px] rounded-xl py-2 px-6"
                    >
                        <ChevronLeftIcon class="rotate-180 w-8 h-8 mt-[-3px]" />
                        call Us
                    </button>
                </div>

                <div
                    class="flex md:hidden items-end flex-col gap-2 top-20 mr-[50px] sticky"
                >
                <button
                        class="flex flex-row-reverse justify-between text-white bg-[#e3cf3e]  rounded-full p-2 "
                    >
                        <CalendarDaysIcon class="w-6 h-6"/>
                    </button>
                    <button
                        class="flex flex-row-reverse justify-between bg-slate-50 rounded-full p-2 "
                    >
                        <DocumentTextIcon class="w-6 h-6"/>
                    </button>
                    <button
                        class="flex flex-row-reverse justify-between bg-slate-50 rounded-full p-2 "
                    >
                        <PhoneXMarkIcon class="w-6 h-6"/>
                    </button>
                    
                </div>
                <div>
                    <h2 class="text-[20px] font-bold ml-[3%] md:ml-14">
                        Service Details
                    </h2>
                    <p
                        class="text-[12px] md:text-[14px] mt-5 ml-4 md:ml-14 max-w-[610px] md:max-w-[75%] lg:max-w-[70%] xl:max-w-[65%]"
                    >
                        Our ADR practice GROUP provides the highest level of
                        quality, integrity, and efficiency in dispute resolution
                        services through experienced mediators, arbitrators,
                        referees, and private judges with a proven track record
                        of success.
                    </p>
                    <p
                        class="text-[12px] md:text-[14px] mt-5 ml-4 md:ml-14 max-w-[610px] md:max-w-[75%] lg:max-w-[70%] xl:max-w-[65%]"
                    >
                        We are commercial in our approach, strategic in our
                        advice, and aim to deliver effective solutions
                        efficiently.
                    </p>

                    <h3
                        class="text-[1.25rem] mt-[5%] md:text-[20px] md:mt-[50px] ml-[3%] md:ml-14"
                    >
                        What distinguishes our ADR services are the following:
                    </h3>
                    <ul class="list-disc text-[11px] md:text-[14px]  mt-1 ml-[40px] md:ml-[90px]">
                        <li
                            class="mt-1"
                            v-for="(area, index) in AdrServices"
                            :key="index"
                        >
                            {{ area }}
                        </li>
                    </ul>
                    <h3
                        class="text-[1.25rem] mt-[5%] md:text-[20px] md:mt-[50px] ml-[3%] md:ml-14"
                    >
                        Within this practice, we offer strategic legal advice
                        in:
                    </h3>
                    <ul class="list-disc text-[11px] md:text-[14px]  mt-1 ml-[40px] md:ml-[90px] mb-20">
                        <li
                            class="mt-1"
                            v-for="(area, index) in legalAreas"
                            :key="index"
                        >
                            {{ area }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="flex flex-col justify-center  mt-4 bg-slate-50">
         
                <h1 class="text-xl md:text-4xl font-semibold ml-20 md:ml-40">
                    Related Services
                </h1>

            <div class="flex justify-start my-8 mx-[7rem] gap-4 flex-wrap">
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
            </div>
        </div>

    </div>
</template>

<style></style>
