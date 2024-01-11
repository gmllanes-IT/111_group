<template>
    <div class="flex flex-col justify-center items-center mt-4 bg-slate-50">
        <div class="m-10 md:m-[100px] flex flex-col justify-center items-center">
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
            <div>
                <div class="relative mt-4 w-full md:w-[600px]">
                    <input v-model="searchQuery" @input="searchServices" type="text"
                        class="border-none rounded-full w-full px-4 py-2 placeholder-gray-500"
                        placeholder="Search Services" />
                    <MagnifyingGlassIcon class="w-5 h-5 absolute top-1/2 right-3 transform -translate-y-1/2 text-black" />
                </div>

                <div v-if="searchResults.length > 0 && searchQuery !== ''">
                    <ul>
                        <li v-for="(result, index) in searchResults.slice(0, 5)" :key="result.id"
                            @click="selectService(result)">
                            {{ result.name }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div>
        <div>
            <div class="flex justify-center mt-10 gap-5">
                <button @click="filterImages('all')" :class="{ 'bg-[#dfc822] text-white': selectedCategory === 'all' }"
                    class="text-[13px] font-bold rounded-full bg-[#eeeeee] py-2 px-4 flex items-center">
                    All
                </button>

                <button v-for="category in categories.slice().reverse()" :key="category.id"
                    @click="filterImages(category.id)"
                    :class="{ 'bg-[#dfc822] text-white': selectedCategory === category.id }"
                    class="text-[13px] font-bold rounded-full bg-[#eeeeee] py-2 px-4 flex items-center">
                    {{ category.name }}
                </button>
            </div>


        </div>

        <div>
            <div class="flex justify-center my-10 mx-[7rem] gap-4 flex-wrap">
                <div v-for="service in filteredServices" :key="service.id"
                    class="w-[300px] flex flex-col justify-center items-center">
                    <div class="image-container">
                        <img :src="service.image" alt="" />
                        <p class="mb-2 font-semibold text-center">{{ service.name }}</p>
                    </div>

                </div>
            </div>
        </div>

    </div>
</template>

<script setup>
import { ref, onMounted, computed } from 'vue';
import axios from 'axios';
import Footer from "../../components/Footer.vue";
import Header from "../../components/Header.vue";
import { MagnifyingGlassIcon } from "@heroicons/vue/20/solid";

const services = ref([]);
const categories = ref([]);
const selectedCategory = ref('all');
const searchQuery = ref('');
const searchResults = ref([]);

const searchServices = async () => {
    try {
        const response = await axios.get('/api/services', { params: { search: searchQuery.value } });
        searchResults.value = response.data.services;
    } catch (error) {
        console.error('Error searching services:', error);
    }
};

const selectService = async (selectedService) => {
    try {
        // You can fetch additional details or perform other actions here based on the selected service
        const response = await axios.get(`/api/services/${selectedService.id}`);
        console.log('Selected service details:', response.data);
    } catch (error) {
        console.error('Error fetching service details:', error);
    }
};

const fetchServices = async () => {
    try {
        const response = await axios.get('/api/services');
        console.log('API Response:', response.data);
        services.value = response.data.services;
        categories.value = getUniqueCategories();
    } catch (error) {
        console.error('Error fetching services:', error);
    }
};

const getUniqueCategories = () => {
    const uniqueCategories = [...new Set(services.value.map(service => service.category.id))];
    return uniqueCategories.map(categoryId => {
        return { id: categoryId, name: services.value.find(service => service.category.id === categoryId).category.name };
    });
};

const filterImages = (categoryId) => {
    selectedCategory.value = categoryId;
};

const filteredServices = computed(() => {
    if (selectedCategory.value === 'all') {
        return services.value;
    } else {
        return services.value.filter(service => service.category.id === selectedCategory.value);
    }
});

onMounted(() => {
    fetchServices();
});
</script>

<style>
.image-container {
    position: relative;
    overflow: hidden;
}

.image-container img {
    transition: transform 0.3s ease-in-out;
}

.image-container:hover img {
    transform: scale(1.1);
    /* Adjust the scale factor as needed */
}

.image-container:hover p {
    text-decoration: underline;
}
</style>
